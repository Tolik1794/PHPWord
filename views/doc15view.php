<?php

// POAonLeavingTheChild
// На выезд ребенка

session_start();
require_once '../Session.php';

require_once 'main/header.php';
require_once '../variables.php';

$textDoc1 =
    "Настоящим даю свое согласие на выезд моей несовершеннолетнего ребенка – " . $lastNameCh . " " . $firstNameCh . " " . $patronymicCh . ",
" . $birthDateCh . " (Свидетельство о рождении: " . $birthCertificateNum . ", " . $birthCertificatePlace . ", " . $birthCertificateDate . "), ".$destination. ",
" . $purpose . ", с " . $dateStart . " года по " . $dateFinish . " года, в 
сопровождении её матери – " . $lastNameMr . " " . $firstNameMr . " " . $patronymicMr . ", " . $birthDateMr . ", " . $birthPlaceMr . ", паспорт " . $pasportIdMr . " N " . $pasportNumMr . " выдан " . $pasportAddressMr . ", зарегистрированной 
по адресу: " . $AddressMr . ".<br>" . "В соответствии со ст. 22 Федерального закона «О порядке выезда из Российской Федерации 
и въезда в Российскую Федерацию» возлагаю на сопровождающего обязанность по защите прав 
и законных интересов ребенка, ответственность за его жизнь и здоровье, а также принимать 
ответственные решения по медицинскому вмешательству в случае необходимости.<br>" .
    "Удочерение или задержка " . $lastNameCh . " " . $firstNameCh . " " . $patronymicCh . "  в " . $destination . " не предусматривается.<br>" .
    "Город " . $city . ". Российская Федерация.<br>" .
    $dateInWord;

$left = 'Нотариус г. ' . $cityNotarius . '
' . $lastNameNotarius . ' ' . $firstNameNotarius . ' ' . $patronymicNotarius . ' ' .
    $requisiteNotarius . ' ' . $addressNotarius . ' ' . $phoneNotarius;

$right = ' В КОМПЕТЕНТНЫЕ ОРГАНЫ РФ,  
    ' . $destination . '
    от гражданина РФ: ' . $lastName . ' ' . $firstName . ' ' . $patronymic . ', ' . $birthDate . ', ' . $birthPlace . ', паспорт ' . $pasportId . ' N ' . $pasportNum . ' выдан ' . $pasportAddress . ',
    зарегистрированного по адресу:  ' . $address;

?>

<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../style/viewstyle.css">

<div class="sheet">

    <div class="form-row">
        <div>
            <a class="btn btn-secondary btn-lg active" href="/POAonLeavingTheChild.php" role="button">Сохранить</a>
        </div>
        <div>
            <a class="btn btn-secondary btn-lg active" href="/?id=15" role="button" style="margin-left:20px;">Изменить</a>
        </div>
    </div>

    <div class="dateLine">
        <div style="width:350px;"><?= $left ?></div>
        <div style="width:500px;"><?= $right ?></div>
    </div>

    <h2 class="h2">
        ДОВЕРЕННОСТЬ<br>
    </h2>

    <p class="formatText">
        <?= $textDoc1 ?>
    </p>

    <p>Подпись __________</p>

    <p class="formatText">
        Город <?= $city ?> Российская Федерация.<br>
        <?= $dateInWord ?><br>
        <?= 'Настоящее согласие удостоверено мной ' . $lastNameNotarius . ' ' . $firstNameNotarius . ' ' . $patronymicNotarius . ' – нотариусом города ' . $cityNotarius . '.' ?><br>
        <?= 'Согласие подписано гражданином ' . $lastName . ' ' . $firstName . ' ' . $patronymic . ' отца собственноручно в моем присутствии.' ?><br>
        Личность его установлена. Дееспособность проверена.
    </p>

    <p class="formatText">
        <?= "Зарегистрировано в реестре за №" . $registryNum ?><br>
        <?= "Взыскано по тарифу: " . $tariff . " руб." ?><br>
        Нотариус
    </p>

</div>