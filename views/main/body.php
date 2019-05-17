<div class="container">
    <div class="row justify-content-center" style="margin-top: 20px;">
        <div class="col-6">
            <select class="custom-select mr-sm-2" id="type">
                <option value="fiz">Физическое лицо</option>
                <option value="ur" <?= $_GET['id'] == 1 ? 'selected' : '' ?><?= $_GET['id'] == 13 ? 'selected' : '' ?>>Юридическое лицо</option>
            </select>
        </div>
        <div class="col-6">
            <select class="custom-select mr-sm-2" id="inlineFormCustomSelect">
                <option value="defauld">Select doc</option>
                <option value="1" <?= $_GET['id'] == 1 ? 'selected' : '' ?> class="fiz" style="display:none">Генерация доверенность</option>
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
    </div>
</div>

<?php
require_once 'views/doc1.php';
require_once 'views/doc2.php';
require_once 'views/doc3.php';
require_once 'views/doc4.php';
require_once 'views/doc5.php';
require_once 'views/doc6.php';
require_once 'views/doc7.php';
require_once 'views/doc8.php';
require_once 'views/doc9.php';
require_once 'views/doc10.php';
require_once 'views/doc11.php';
require_once 'views/doc12.php';
require_once 'views/doc13.php';
require_once 'views/doc14.php';
require_once 'views/doc15.php';
?>