<?php

// доверенность от юридического лица

require_once 'main/header.php';
require_once '../variables.php';

$text =

    $company . " в лице " . $lastName . " " . $firstName . " " . $patronymic . ", " . $position . ", 
действующего на основании Устава, уполномачивает  " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . ", паспорт серии " . $pasportIdInd . ", № " . $pasportNumInd . ", 
выдан " . $pasportAddressInd . ", проживающему по адресу:  " . $addressInd . " совершать следующие действия от имени " . $$companyInd . " :
" . $authority . " и совершить все действия, связанные с выполнением этого поручения.";

$text2 =

    "Подпись доверителя " . $lastName . " " . $firstName . " " . $patronymic . " _________ удостоверяю.";
?>

<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../style/viewstyle.css">

<div class="sheet">

    <div class="form-row">
        <div>
            <a class="btn btn-secondary btn-lg active" href="/doc13.php" role="button">Download</a>
        </div>
        <div>
            <a class="btn btn-secondary btn-lg active" href="/?id=13" role="button" style="margin-left:20px;">Edit</a>
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