<div class="jetBrainsHeaderFont textRegistration">Вход</div>
<form action="core/signin.php" method="post" enctype="multipart/form-data">

    <div>
        <div class="jetBrainsFont subFont">Ваш логин</div>
        <input class="borderedContainer subFont" type="text" name="user_login" value="<?= $_SESSION['login'] ?>">
    </div>

    <div class="elementMargin">
        <div class="jetBrainsFont subFont">Пароль</div>
        <input class="borderedContainer subFont" type="password" name="user_pass">
    </div>

    <div class="contentContainer centerContent elementMargin">
        <input class="buttonPadding jetBrainsFont borderedContainer button textRegistration" type="submit" value="Войти">
    </div>
</form>

<div class="jetBrainsFont subFont">
    <?php echo $_SESSION['message'];?>
</div>