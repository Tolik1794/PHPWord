<?php

// доверенность на получение почты

require_once 'main/header.php';
require_once '../variables.php';

$text =

    "Я, " . $lastName . " " . $firstName . " " . $patronymic . ", паспорт серии " . $pasportId . ", № " . $pasportNum . ", выдан " . $pasportAddress . ", проживающий по адресу:
" . $address . " доверяю " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . ", паспорт серии " . $pasportIdInd . ", № " . $pasportNumInd . ", выдан " . $pasportAddressInd . ", проживающему по адресу:
" . $addressInd . " получить " . $company . ", отправленную на мое имя почтовую корреспонденцию, расписываться  за меня и совершить все действия, связанные с выполнением этого поручения.";

?>

<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../style/viewstyle.css">

<div class="sheet">

    <div class="form-row">
        <div>
            <a class="btn btn-secondary btn-lg active" href="/doc10.php" role="button">Download</a>
        </div>
        <div>
            <a class="btn btn-secondary btn-lg active" href="/?id=10" role="button" style="margin-left:20px;">Edit</a>
        </div>
    </div>

    <h2 class="h2">
        Доверенность<br>
        на получение почты

    </h2>

    <p class="formatText"><?= $text ?></p>

    <p>Дата Подпись</p>

    <p>Подпись доверителя удостоверяю.</p>
</div>