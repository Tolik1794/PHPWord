<?php


session_start();
require_once '../Session.php';

require_once 'main/header.php';
require_once '../variables.php';

$textDoc1 = '      Я, ' . $lastName . ' ' . $firstName . ' ' . $patronymic . ', ' . $nationality . ', ' . $address . ', ' . $identityDoc . ', ' . $paramsIdentity . ', настоящей доверенностью уполномочиваю
' . $lastNameInd . ' ' . $firstNameInd . ' ' . $patronymicInd . ', паспорт ' . $pasportIdInd . ' N ' . $pasportNumInd . ', выданный ' . $pasportAddressInd . ', проживающего(ую) 
по адресу: ' . $addressInd . ', управлять принадлежащей мне на основании паспорта транспортного средства, 
выданного Управлением ГИБДД/ГАИ ' . $GAI . ' города ' . $GAICity . ' за N ' . $GAINum . ' от ' . $GAIDate . ', 
автомашиной марки ' . $car . ', год выпуска ' . $carDate . ', цвет ' . $carColor . ' двигатель N ' . $carEngine . ' кузов 
N ' . $carBody . ' шасси N ' . $carСhassis . ' VIN ' . $carVIN . ' государственный номерной знак ' . $carGosNum . ', 
свидетельство регистрации транспортного средства: серия ' . $carId . ' N ' . $carNum . ', выдано ГИБДД ' . $GIBDD . ' ' . $GIBDDDate . ', 
следить за техническим состоянием автомобиля, быть моим представителем в органах ГИБДД/ГАИ с правами прохождения технического 
осмотра и снятия автомобиля с учета, а также расписываться за меня и совершать все юридические и иные действия, связанные с выполнением этого поручения.';

?>

<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../style/viewstyle.css">

<div class="sheet">

    <div class="form-row">
        <div>
            <a class="btn btn-secondary btn-lg active" href="/doc14.php" role="button">Download</a>
        </div>
        <div>
            <a class="btn btn-secondary btn-lg active" href="/?id=14" role="button" style="margin-left:20px;">Edit</a>
        </div>
    </div>

    <h2 class="h2">
        ДОВЕРЕННОСТЬ<br>
        на управление автомобилем
    </h2>

    <div class="dateLine">
        <div><?= $date ?>г.</div>
        <div>г.<?= $city ?></div>
    </div>

    <p class="formatText">
        <?= $textDoc1 ?><br>
        Доверенность действительна до <?= $dateTo ?>;
    </p>

    <p>Подпись __________  <?=$lastName . ' ' . $firstName . ' ' . $patronymic?></p>
</div>