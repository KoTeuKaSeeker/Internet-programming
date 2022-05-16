const path = "images/gallery/"
const countImages = 4;
const speed = 2000;

const widthImage = 1920 / 3;
const heightImage = 1080 / 3;

const countX = 1;
const countY = 30;

const timeChangeMin = 1000;
const timeChangeMax = 200;

let numImage = 0;

let widthElement = 0;
let heightElement = 0;

function generateImage()
{
    $("#mainImage").css("width", widthImage);
    $("#mainImage").css("height", heightImage);

    widthElement = widthImage / countX;
    heightElement = heightImage / countY;

    for(let y = 0; y < countY; y++)
        for(let x = 0; x < countX; x++)
        {
            let item = $("<div></div>");
            item.addClass("imageElement");
            item.css("width", widthElement + "px");
            item.css("height", heightElement + "px");
            item.css("background-image", "url('" + path + numImage + ".png')");
            item.css("background-size", widthImage + "px" + " " + heightImage + "px");
            item.css("background-position-x", widthImage - x * widthElement + "px");
            item.css("background-position-y", heightImage - y * heightElement + "px");
            $("#mainImage").append(item);
        }
}

function changeImage()
{
    let timer = timeChangeMin;
    $("#mainImage div").each(function() {
        $(this).slideUp(timer, function () {
            $(this).css("background-image", "url('" + path + numImage + ".png')");
            $(this).slideDown(timer);
        });
        timer += (timeChangeMax - timeChangeMin) / (countX * countY);
    });
}

function changeImageLeft()
{
    numImage = numImage <= 0 ? countImages - 1 : numImage - 1;
    changeImage();
}

function changeImageRight()
{
    numImage = (numImage + 1) % countImages;
    changeImage();
}

$(document).ready(function (){
    generateImage();
});