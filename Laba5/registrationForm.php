<div class="jetBrainsHeaderFont textRegistration"><?= ($_SESSION['isEdit'] ? 'Редактирование' : 'Регистрация')?></div>
<form action="<?=$_SESSION['pathToAction']?>" method="post" enctype="multipart/form-data">

            <div>
                <div class="jetBrainsFont subFont">Логин</div>
                    <input class="borderedContainer subFont" type="text" name="user_login" value="<?= $_SESSION['login'] ?>">
            </div>

            <div class="elementMargin">
                <div class="jetBrainsFont subFont">ФИО</div>
                <input class="borderedContainer subFont" type="text" name="user_FIO" value="<?= $_SESSION['FIO']?>">
            </div>

            <div class="elementMargin">
                <div class="jetBrainsFont subFont">Пароль</div>
                    <input class="borderedContainer subFont" type="password" name="user_pass" value="<?= $_SESSION['password']?>">
            </div>

    <?php
    if(!$_SESSION['isEdit']) {
    ?>
            <div class="elementMargin">
                <div class="jetBrainsFont subFont">Пароль повторно</div>
                    <input class="borderedContainer subFont" type="password" name="user_pass2">
            </div>
    <?php
    } else {
    ?>
        <div class="elementMargin">
            <div class="jetBrainsFont subFont">Права</div>
            <div class="inLineContainer">
                <input class="subFont" type="radio" name="user_rights">
                <div class="jetBrainsFont subFont">Админ</div>
            </div>
        </div>
    <?php
    }
    ?>
            <div class="elementMargin">
                <div class="jetBrainsFont subFont">Аватарка пользователя</div>
                    <input class="jetBrainsFont borderedContainer button subFont" type="file" name="user_avatar">
            </div>

    <div class="contentContainer centerContent elementMargin">
        <input class="buttonPadding jetBrainsFont borderedContainer button textRegistration" type="submit" value="<?= ($_SESSION['isEdit'] ? 'Отредактировать' : 'Зарегестрироваться')?>">
    </div>
</form>

<div class="jetBrainsFont subFont">
    <?php echo $_SESSION['message'];?>
</div>



<!---->
<!--<form action="core/user.php" method="post" enctype="multipart/form-data">-->
<!--    <table>-->
<!--        <tr>-->
<!--            <td class="jetBrainsFont subFont">Ваш логин</td>-->
<!--            <td>-->
<!--                <input class="borderedContainer subFont" type="text" name="user_login" value="--><?//= $_SESSION['login'] ?><!--">-->
<!--            </td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td class="jetBrainsFont subFont">Пароль</td>-->
<!--            <td>-->
<!--                <input class="borderedContainer subFont" type="password" name="user_pass">-->
<!--            </td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td class="jetBrainsFont subFont">Пароль повторно</td>-->
<!--            <td>-->
<!--                <input class="borderedContainer subFont" type="password" name="user_pass2">-->
<!--            </td>-->
<!--        </tr>-->
<!---->
<!--        <tr>-->
<!--            <td class="jetBrainsFont subFont">Аватарка пользователя</td>-->
<!--            <td>-->
<!--                <input class="jetBrainsFont borderedContainer button subFont" type="file" name="user_avatar">-->
<!--            </td>-->
<!--        </tr>-->
<!--    </table>-->
<!--    <div class="contentContainer centerContent buttonMargin">-->
<!--        <input class="buttonPadding jetBrainsFont borderedContainer button textRegistration" type="submit" value="Зарегестрироваться">-->
<!--    </div>-->
<!--</form>-->
<!---->
<!--<div class="jetBrainsFont subFont">-->
<!--    --><?php //echo $_SESSION['message'];?>
<!--</div>-->