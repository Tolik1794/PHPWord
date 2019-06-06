<?php
session_start();

require_once('../../Dbsettings.php');
require_once('../../DB.php');
// require_once('../Session.php');

require_once '../../Session.php';
require_once '../main/header.php';
require_once '../../variables.php';

if (!Session::has('login')) {
    echo 'error 404';
} else {

    $db = new DB($host, $user, $password, $db_name);

    ?>
    <div class="container">
        <select class="custom-select mr-sm-2" id="SelectLog">
            <option value="defauld">Select doc</option>
            <option value="1" <?= $_GET['id'] == 1 ? 'selected' : '' ?>>Генерация доверенность</option>
            <option value="2" <?= $_GET['id'] == 2 ? 'selected' : '' ?>>В ФСС</option>
            <option value="3" <?= $_GET['id'] == 3 ? 'selected' : '' ?>>В налоговую</option>
            <option value="4" <?= $_GET['id'] == 4 ? 'selected' : '' ?>>На распоряжение объектом недвижимости</option>
            <option value="5" <?= $_GET['id'] == 5 ? 'selected' : '' ?>>На подписание документов</option>
            <option value="6" <?= $_GET['id'] == 6 ? 'selected' : '' ?>>На получение денег</option>
            <option value="7" <?= $_GET['id'] == 7 ? 'selected' : '' ?>>На получение документов</option>
            <option value="8" <?= $_GET['id'] == 8 ? 'selected' : '' ?> class="ur">На получение заработной платы</option>
            <option value="9" <?= $_GET['id'] == 9 ? 'selected' : '' ?> class="ur">На получение пенсии</option>
            <option value="10" <?= $_GET['id'] == 10 ? 'selected' : '' ?>>На получение почты</option>
            <option value="11" <?= $_GET['id'] == 11 ? 'selected' : '' ?>>На получение ТМЦ</option>
            <option value="12" <?= $_GET['id'] == 12 ? 'selected' : '' ?>>На представление интересов</option>
            <option value="13" <?= $_GET['id'] == 13 ? 'selected' : '' ?> class="fiz" style="display:none">От юридического лица</option>
            <option value="14" <?= $_GET['id'] == 14 ? 'selected' : '' ?>>На управление ТС</option>
            <option value="15" <?= $_GET['id'] == 15 ? 'selected' : '' ?> class="ur">На выезд ребенка</option>
        </select>
    </div>
    <?php
    include_once('POAFCC.php');
}

require_once '../main/footer.php';
?>