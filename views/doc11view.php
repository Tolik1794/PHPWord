<?php

// POAtoReciveTMC
// на получение ТМЦ

session_start();
require_once '../Session.php';

require_once 'main/header.php';
require_once '../variables.php';

$text =

    $company . " в лице " . $lastName . " " . $firstName . " " . $patronymic . ", " . $position . ", 
действующего на основании Устава, уполномачивает  " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . ", паспорт серии " . $pasportIdInd . ", № " . $pasportNumInd . ", 
выдан " . $pasportAddressInd . ", проживающему по адресу:  " . $addressInd . " получить товарно-материальные ценности в " . $companyName . " " . $companyNameAddress . " в составе:
" . $TMC . ", подписать накладные на ТМЦ и совершать все остальные действия, связанные с выполнением этого поручения.";

$text2 =

    "Подпись доверителя " . $lastName . " " . $firstName . " " . $patronymic . " _________ удостоверяю.";
?>

<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../style/viewstyle.css">

<div class="sheet">

    <div class="form-row">
        <div>
            <a class="btn btn-secondary btn-lg active" href="/POAtoReciveTMC.php" role="button">Сохранить</a>
        </div>
        <div>
            <a class="btn btn-secondary btn-lg active" href="/?id=11" role="button" style="margin-left:20px;">Изменить</a>
        </div>
    </div>

    <h2 class="h2">Доверенность</h2>

    <div class="dateLine">
        <div>г.<?= $city ?></div>
        <div><?= $date ?>г.</div>
    </div>

    <p class="formatText"><?= $text ?></p>

    <p>Доверенность выдана сроком на <?= $term ?> .</p>

    <p><?= $text2 ?></p>
</div>