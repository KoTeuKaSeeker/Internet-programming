<html>

<head>
    <meta charset="UTF-8">
    <title>Title</title>
    <link rel="stylesheet" href="styles/style.css">
    <link rel="stylesheet" href="styles/ProjectStyle.css">
</head>

<body style="background: white;">

    <div class="PanelButton">
        <button class="TextH4 ActiveButton"' >Проекты</button>
        <button class="TextH4 UnActiveButton" onClick='location.href="MyProfession.php"'>Моя профессия</button>
        <button class="TextH4 UnActiveButton" onClick='location.href="intex.php"'>О себе</button>
    </div>


    <img src="Images/u33.png"          class="TerrariaImage">
    <img src="Images/u16_div.png"      class="LeftTerrariaTriangle">
    <img src="Images/u37_div.png"      class="RightTerrariaTriangle">


    <img src="Images/u50_div.png"      class="MarioImage">
    <img src="Images/u16_div.png"      class="LeftMarioTriangle">
    <img src="Images/u37_div.png"      class="RightMarioTriangle">


    <img src="Images/u58.svg"          class="NeuralNetImage">
    <img src="Images/u16_div.png"      class="LeftNeuralNetTriangle">
    <img src="Images/u37_div.png"      class="RightNeuralNetTriangle">

    <img src="Images/u68.svg"          class="NeuralNetResultsImage">
    <img src="Images/invertBorder.png" class="NeuralNetResultBorder">


    <div class="TerrariaTextBlock">
        <div class="TextH1 TerrariaHeader">Террария</div>

        <div class="TextH2"><br><br>О проекте</div>

        <div class="TextH3">
            <br>Моя попытка сделать нечто сложное, похо-<br>
            жее на террарию, с её возможностями соз-<br>
            давать и удалять блоки, с её проценудрной<br>
            генерацией мира и разнообразными биомами<br><br>

            В этом проекте можно перемещаться по миру,<br>
            ставить и разрушить блоки.<br><br>

            Самое главное из особенностей этой игры заключается в том,<br>
            что здесь реализованна бесконечная процедурная генерация<br>
            мира, подобная генерации мира майнкрафта.<br><br>

            Также этот бесконечный мир сохраняется не взирая на то, на сколько<br>
            большое было пройдено расстояние<br>
        </div>
    </div>

    <div class="MarioTextBlock">
        <div class="TextH1 MarioHeader">Марио</div>

        <div class="TextH2"><br><br>О проекте</div>

        <div class="TextH3">
            Этот проект был сделан раньше чем<br>
            террария, и, соответственно, программная<br>
            часть реализованна хуже.<br><br>

            Тем не менее, здесь гораздо больше деталей. Можно<br>
            сказать, что это полноценная игра, которую можно<br>
            проходить.<br><br>

            Здесь присутствует множество врагом, множество блоков, с не-<br>
            которыми из которых можно взаимодействтовавать (например,<br>
            lucky block). Присутстуют частицы, монеты, различные уровни.<br>
        </div>

    </div>

    <div class="NeuralNetTextBlock">
        <div class="NeuralNetHeader">
            <div class="TextH1">Нейронная сеть</div>
            <div class="TextH3 NeuralNetHeaderRight">без использования библиотек</div>
        </div>

        <div class="TextH2"><br><br>О проекте</div>

        <div class="TextH3">
            Нейронная сеть - это мой самый крупный<br>
            проект на данный момент.<br><br>

            Я делал нейронную сеть в рамках индивидуального<br>
            проекта, и моей целью было полностью понять<br>
            математическую и алгоритмическую часть работы<br>
            искуственной нейронной сети, а также всё это подробно<br>
            изложить в документе.<br><br>

            Самая большая сложность создания нейронной сети заключалась<br>
            в том, что всё это я делал без использования каких-либо библиотек, за<br>
            исполючением тех, что позволяют расшифровывать формат<br>
            изображения png.<br><br>

            В итоге, я сделал обычную нейронную сеть (перцептрон), а также, что самое<br>
            сложное - свёрточную нейронную сеть.<br><br>

            В итоге, у меня получилось 2 нейронные сети, которые были способны генерировать<br>
            случайные изображения лиц людей и генерировать случайные изображения собак.<br>
        </div>
    </div>

    <div class="NetResultBlock">

        <div class="TextH1 RandPeopleHeader">Случайная  генерация изображения лиц людей</div>
        <div class="TextH1 RandDogsHeader">
            Случайная генерация<br>
            изображений собак
        </div>


    </div>

    <div class="BlockTransition PositionOfBlockTransition1"></div>
    <div class="BlockTransition PositionOfBlockTransition2"></div>
    <div class="BlockTransition PositionOfBlockTransition3"></div>
</body>

</html>