<html>

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">

        <link rel="stylesheet" href="styles/projects.css">
        <link rel="stylesheet" href="styles/commonStyles.css">
        <link rel="stylesheet" href="styles/fonts.css">
    </head>

    <body>
        <?php include("header.php");?>

        <h1 class="headerAboutProjects jetBrainsHeaderFont">Здесь вы можете узнать о моих проектах</h1>

        <div class="projectContainers">
            <div class="contentContainer textContainerBackground">
                <img class="imageContent" src="images/project1.png">
                <h1 class="jetBrainsHeaderFont headerFont">Terraria</h1>

                <p class="jetBrainsFont subFont">
                    Моя попытка сделать нечто сложное, похожее на террарию,
                    с её возможностями создавать и удалять блоки,
                    с её проценудрной генерацией мира и разнообразными биомами.<br>

                    Самая главная особенность в этом проекте - бесконечная генерация мира.
                </p>
            </div>

            <div class="contentContainer textContainerBackground">
                <img class="imageContent" src="images/project2.png">
                <h1 class="jetBrainsHeaderFont headerFont">Mario</h1>

                <p class="jetBrainsFont subFont">
                    Это игра - породия марио.
                    Здесь присутствует множество врагов, множество блоков,
                    с некоторыми из которых можно взаимодействтовавать (например, lucky block).
                    Присутстуют частицы, монеты, различные уровни.
                </p>
            </div>

            <div class="contentContainer textContainerBackground">
                <img class="imageContent" src="images/project3.png">
                <h1 class="jetBrainsHeaderFont headerFont">Нейроннаая сеть: люди</h1>

                <p class="jetBrainsFont subFont">
                    Здесь представлена нейронная сеть, которая способна генерировать случайные лица людей.
                    Её я написал полностью с нуля, не используя никаких библиотек
                </p>
            </div>
        </div>

        <div class="projectContainers">
            <div class="contentContainer textContainerBackground">
                <img class="imageContent" src="images/project4.png">
                <h1 class="jetBrainsHeaderFont headerFont">Нейронная сеть: собаки</h1>

                <p class="jetBrainsFont subFont">
                    Это нейронная сеть, которая способна случайно генерировать собак.
                    Она написана без использования каких-либо библиотек и реализована примерно в то время,
                    когда я делал нейронную сеть для генерации лиц людей.
                </p>
            </div>
        </div>

    </body>

</html>