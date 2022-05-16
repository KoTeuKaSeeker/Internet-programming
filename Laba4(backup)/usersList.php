<div class="tableScrollContainer">
    <table class="textContainerBackground table">
        <tr>
            <td class="jetBrainsFont subFont tableCell"><div class="tableCellContent">Номер</div></td>
            <td class="jetBrainsFont subFont tableCell"><div class="tableCellContent">Логин</div></td>
            <td class="jetBrainsFont subFont tableCell"><div class="tableCellContent">ФИО</div></td>
            <td class="jetBrainsFont subFont tableCell"><div class="tableCellContent">Тип пользователя</div></td>
            <td class="jetBrainsFont subFont tableCell"><div class="tableCellContent">Изображение</div></td>
            <td class="jetBrainsFont subFont tableCell"><div class="tableCellContent">Файл</div></td>
            <td class="jetBrainsFont subFont tableCell" colspan="2"><div class="tableCellContent">Действия</div></td>
        </tr>

        <?php
        $connect = $GLOBALS['connect'];
        $usersTable = mysqli_query($connect, "SELECT * FROM `users`");
        while($item = mysqli_fetch_assoc($usersTable)) {
            ?>
            <tr>
                <td class="jetBrainsFont subFont tableCell"><div class="tableCellContent"><?=$item['id_user']?></div></td>
                <td class="jetBrainsFont subFont tableCell"><div class="tableCellContent"><?=$item['login']?></div></td>
                <td class="jetBrainsFont subFont tableCell"><div class="tableCellContent"><?=$item['FIO']?></div></td>
                <td class="jetBrainsFont subFont tableCell"><div class="tableCellContent"><?=$item['rights']?></div></td>
                <td class="jetBrainsFont subFont tableCell"><div class="tableCellContent"><img class="avatarImage" src=<?=$item['avatar_path'];?>></div></td>
                <td class="jetBrainsFont subFont tableCell"><div class="tableCellContent"><?=$item['avatar_path']?></div>

                <td class="tableCell"><a class="tableCellContent" href="core/editUser.php?id=<?=$item['id_user']?>"><img class="editIcon" src="images/editIcons/editPencil.png" title="Редактировать"></a></td>
                <td class="tableCell"><a class="tableCellContent" href="core/deleteUser.php?id=<?=$item['id_user']?>"><img class="editIcon" src="images/editIcons/deleteCross.png" title="Удалить"></a></td>
            </tr>
            <?php
        }
        ?>
    </table>
</div>