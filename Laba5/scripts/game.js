const pairsTable = "image_pairs";
const diffsTable = "difference_image";
const pathToWait = "images/wait.png";
let countPairs = 0;

let imageId = 0;


//Объекты JQuery
let leftImage;
let rightImage;
let leftImageContainer;
let rightImageContainer;

//Элементы в html
let scoreElement;
let tryElement;
let diffElement;
let winElement;

//Флаги загрузки
let isImageLoaded = false;
let isCoordsLoaded = false;

//Размеры координат
let coordsWidth = 1920;
let coordsHeight = 1080;

let coordDiffs;

let rectangles = [];


//Счётчики
let maxCountTry = 5;

let scores = 0;
let countTry = 0;
let countRemainDiff = 0;

function getCountImages()
{
    $.ajax({
        type: "POST",
        url: 'core/game/getCountPairs.php',
        data: {
            'tableName' : pairsTable
        },
        success: function(data){
            countPairs = Number(data);
        }
    });
}

function setImage(imageId){
    leftImage = $("#leftImage");
    rightImage = $("#rightImage");

    setWaitBackground();

    isImageLoaded = false;
    isCoordsLoaded = false;
    $.ajax({
        type: "POST",
        url: 'core/game/getImages.php',
        data: {
            'imageId' : imageId,
            'tableName' : pairsTable
        },
        success: function(data){
            let pathImage1 = "";
            let pathImage2 = "";

            let paths = data.split(" ");
            pathImage1 = paths[0];
            pathImage2 = paths[1];

            getDiffCoords(imageId, false);

            leftImage.attr("src", pathImage1);
            rightImage.attr("src", pathImage2);

            isImageLoaded = true;
        }
    });
}

function getDiffCoords(imageId, async)
{
    isCoordsLoaded = false;
    $.ajax({
        type: "POST",
        async: async,
        url: 'core/game/getDiffCoords.php',
        data: {
            'imageId' : imageId,
            'tableName' : diffsTable
        },
        success: function(data){
            let rectangles = data.split(", ");

            coordDiffs = new Array(rectangles.length);
            for(let x = 0; x < rectangles.length; x++)
                coordDiffs[x] = rectangles[x].split(" ");

            isCoordsLoaded = true;

            countRemainDiff = coordDiffs.length;
            diffElement.innerText = countRemainDiff;
        }
    });
}

function init() {
    leftImageContainer = $("#leftImageContainer");
    rightImageContainer = $("#rightImageContainer");

    scoreElement = document.getElementById('score');
    tryElement = document.getElementById('countTry');
    diffElement = document.getElementById('countDiff');
    winElement = document.getElementById('winText');

    countTry = maxCountTry;
    tryElement.innerText = countTry;
}

function mouseEvent()
{
    document.getElementById('leftImage').onclick = function(event) {
        mouseClick(event, leftImage);
    }

    document.getElementById('rightImage').onclick = function(event) {
        mouseClick(event, rightImage);
    }
}

function setWaitBackground() {
    leftImage.attr("src", pathToWait);
    rightImage.attr("src", pathToWait);
}

//Отрисовка прямоугольника
function drawRectangle(container, rx1, ry1, rx2, ry2, color)
{
    let item = $("<div></div>");
    item.attr("style","position: absolute; left: " + (rx1 / container.width() * 100) + "%; top: " + (ry1 / container.height() * 100) + "%; width: " + ((rx2 - rx1) / container.width() * 100) + "%; height: " + ((ry2 - ry1) / container.height() * 100) + "%; background-color: " + color + ";");
    container.append(item);

    rectangles.push(item);
}

//Удаление всех прямоугольниов
function deleteAllRectangles() {
    for(let x = 0; x < rectangles.length; x++)
        rectangles[x].remove();
    rectangles = [];
}


function isIntersect(px, py, rx1, ry1, rx2, ry2){
    if(px >= rx1 && px <= rx2)
        if(py >= ry1 && py <= ry2)
            return true;
    return false;
}


function intersectWithDiff(rx1, ry1, rx2, ry2) {
    drawRectangle(leftImageContainer, rx1, ry1, rx2, ry2, "rgba(0, 255, 0, 0.7)");
    drawRectangle(rightImageContainer, rx1, ry1, rx2, ry2, "rgba(0, 255, 0, 0.7)");
}

//Вызывается при нажатии на изображение
function mouseClick(event, image)
{
    if(isImageLoaded && isCoordsLoaded) {
        console.log("Click!");

        let width = image.width();
        let height = image.height();

        let intersected = false;

        for (let x = 0; x < coordDiffs.length; x++) {
            let rx1 = coordDiffs[x][0] / coordsWidth * width;
            let ry1 = coordDiffs[x][1] / coordsHeight * height;
            let rx2 = coordDiffs[x][2] / coordsWidth * width;
            let ry2 = coordDiffs[x][3] / coordsHeight * height;
            if (isIntersect(event.offsetX, event.offsetY, rx1, ry1, rx2, ry2)) {
                intersectWithDiff(rx1, ry1, rx2, ry2);
                intersected = true;
                break;
            }
        }

        if(intersected) {
            scores++;
            countRemainDiff--;
            if(countRemainDiff <= 0) {
                findAllDiffs();
            }
        } else {
            if(scores > 0)
                scores--;
            countTry--;
            if(countTry <= 0)
                setRandomImage();
        }

        scoreElement.innerText = scores;
        tryElement.innerText = countTry;
        diffElement.innerText = countRemainDiff;
    }
}

function findAllDiffs() {
    winElement.innerText = "Вы нашли все отличия!";
}

function setRandomImage(wait) {
    if(isImageLoaded && isCoordsLoaded || !wait) {
        deleteAllRectangles();
        imageId = Math.floor(countPairs * Math.random());
        winElement.innerText = "";
        countTry = maxCountTry;
        if(scores - countRemainDiff >= 0)
            scores -= countRemainDiff;
        scoreElement.innerText = scores;
        setImage(imageId);
    }
}

$(document).ready(function(){
    init();
    getCountImages();
    setRandomImage(false);
    mouseEvent();
});