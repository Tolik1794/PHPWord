<?php

// генеральная доверенность

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

require 'vendor/autoload.php';

require_once 'variables.php';

$phpWord = new PhpWord();

$phpWord->setDefaultFontName('Times New Roman');
$phpWord->setDefaultFontSize(14);

$sectionStyle = array(
    'orientation' => 'portrait',
    'marginTop' => 1000,
    'marginLeft' => 1800,
    'marginRight' => 900,
    'colsNum' => 1,
);
$section = $phpWord->addSection($sectionStyle);

$fontStyle = array('name' => 'Times New Roman', 'size' => 12, 'color' => '000000');
$paragrafStyle = array('align' => 'center', 'spaceBefore' => 150);
$phpWord->addTitleStyle(1, $fontStyle, $paragrafStyle);
$section->addTitle(

    'ДОВЕРЕННОСТЬ',
    1
);

$fontStyle = array('name' => 'Times New Roman', 'size' => 12, 'color' => '000000');
$paragrafStyle = array('align' => 'center');
$phpWord->addTitleStyle(2, $fontStyle, $paragrafStyle);
$section->addTitle(

    'на управление автомобилем',
    2
);

$section = $phpWord->addSection(array('breakType' => 'continuous', 'colsSpace' => 3000, 'colsNum' => 2));

$text2 =

    $date . "г.                                       г." . $city;

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'center', 'spaceBefore' => 700)
);

$section = $phpWord->addSection(array('breakType' => 'continuous'));

$textDoc1 =

    '      Я, ' . $lastName . ' ' . $firstName . ' ' . $patronymic . ', ' . $nationality . ', ' . $address . ', ' . $identityDoc . ', ' . $paramsIdentity . ', настоящей доверенностью уполномочиваю
' . $lastNameInd . ' ' . $firstNameInd . ' ' . $patronymicInd . ', паспорт ' . $pasportIdInd . ' N ' . $pasportNumInd . ', выданный ' . $pasportAddressInd . ', проживающего(ую) 
по адресу: ' . $addressInd . ', управлять принадлежащей мне на основании паспорта транспортного средства, 
выданного Управлением ГИБДД/ГАИ ' . $GAI . ' города ' . $GAICity . ' за N ' . $GAINum . ' от ' . $GAIDate . ', 
автомашиной марки ' . $car . ', год выпуска ' . $carDate . ', цвет ' . $carColor . ' двигатель N ' . $carEngine . ' кузов 
N ' . $carBody . ' шасси N ' . $carСhassis . ' VIN ' . $carVIN . ' государственный номерной знак ' . $carGosNum . ', 
свидетельство регистрации транспортного средства: серия ' . $carId . ' N ' . $carNum . ', выдано ГИБДД ' . $GIBDD . ' ' . $GIBDDDate . ', 
следить за техническим состоянием автомобиля, быть моим представителем в органах ГИБДД/ГАИ с правами прохождения технического 
осмотра и снятия автомобиля с учета, а также расписываться за меня и совершать все юридические и иные действия, связанные с выполнением этого поручения.';

$section->addText(
    htmlspecialchars($textDoc1),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spaceBefore' => 350, 'spacing' => 0)
);

$text =
    "       Доверенность действительна до " . $dateTo;

$section->addText(
    htmlspecialchars($text),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 0)
);

$text =

    '       Подпись __________ ' . $lastName . ' ' . $firstName . ' ' . $patronymic;

$section->addText(
    htmlspecialchars($text),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spaceBefore' => 1100, 'spacing' => 150)
);

header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="генеральная доверенность.docx"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=1, pre-check=0');
header('Expires: 0');

$xmlWriter = IOFactory::createWriter($phpWord, 'Word2007');
$xmlWriter->save("php://output");
