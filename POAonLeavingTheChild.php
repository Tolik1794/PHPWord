<?php

// POAonLeavingTheChild
// доверенность на выезд ребенка

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

$table = $section->addTable([$tableStyle]);

$cellHCentered = array('align' => 'left');
$cellVCentered = array('valign' => 'center');

$phpWord->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');
$table->addRow(null, array('tblHeader' => true));
$table->addCell(4250, $cellVCentered)->addText(

    'Нотариус г. ' . $cityNotarius . '
    ' . $lastNameNotarius . ' ' . $firstNameNotarius . ' ' . $patronymicNotarius . ' ' .
        $requisiteNotarius . ' ' . $addressNotarius . ' ' . $phoneNotarius,

    array('name' => 'TimesNewRoman', 'size' => 12,),
    $cellHCentered
);
$table->addCell(5000, $cellVCentered)->addText(

    ' В КОМПЕТЕНТНЫЕ ОРГАНЫ РФ,  
    ' . $destination . '
    от гражданина РФ: ' . $lastName . ' ' . $firstName . ' ' . $patronymic . ', ' . $birthDate . ', ' . $birthPlace . ', паспорт ' . $pasportId . ' N ' . $pasportNum . ' выдан '.$pasportAddress.',
    зарегистрированного по адресу:  ' . $address,

    array('name' => 'TimesNewRoman', 'size' => 12,),
    $cellHCentered
);

$fontStyle = array('name' => 'Times New Roman', 'size' => 12, 'color' => '000000');
$paragrafStyle = array('align' => 'center', 'spaceBefore' => 700);
$phpWord->addTitleStyle(1, $fontStyle, $paragrafStyle);
$section->addTitle(

    'ДОВЕРЕННОСТЬ',
    1
);


$text2 =

    "Настоящим даю свое согласие на выезд моей несовершеннолетнего ребенка – " . $lastNameCh . " " . $firstNameCh . " " . $patronymicCh . ",
     " . $birthDateCh . " (Свидетельство о рождении: " . $birthCertificateNum . ", " . $birthCertificatePlace . ", " . $birthCertificateDate . "), '.$destination, 
     " . $purpose . ", с " . $dateStart . " года по " . $dateFinish . " года, в 
     сопровождении её матери – " . $lastNameMr . " " . $firstNameMr . " " . $patronymicMr . ", " . $birthDateMr . ", " . $birthPlaceMr . ", паспорт " . $pasportIdMr . " N " . $pasportNumMr . " выдан ".$pasportAddressMr.", зарегистрированной 
     по адресу: " . $AddressMr . ".";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left', 'spaceBefore' => 700)
);

$text2 =

    "В соответствии со ст. 22 Федерального закона «О порядке выезда из Российской Федерации 
    и въезда в Российскую Федерацию» возлагаю на сопровождающего обязанность по защите прав 
    и законных интересов ребенка, ответственность за его жизнь и здоровье, а также принимать 
    ответственные решения по медицинскому вмешательству в случае необходимости.";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left')
);

$text2 =

    "Удочерение или задержка " . $lastNameCh . " " . $firstNameCh . " " . $patronymicCh . "  в " . $destination . " не предусматривается.";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left')
);

$text2 =

    "Город " . $city . ". Российская Федерация.";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left')
);

$text2 =

    $dateInWord;

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left')
);

$text2 =

    "Подпись:____________";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left', 'spaceBefore' => 400)
);

$text2 =

    "Город " . $city . ". Российская Федерация.";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left', 'spaceBefore' => 400)
);

$text2 =

    $dateInWord;

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left')
);

$text2 =

    'Настоящее согласие удостоверено мной ' . $lastNameNotarius . ' ' . $firstNameNotarius . ' ' . $patronymicNotarius . ' – нотариусом города ' . $cityNotarius . '.';

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left')
);

$text2 =

    'Согласие подписано гражданином ' . $lastName . ' ' . $firstName . ' ' . $patronymic . ' отца собственноручно в моем присутствии.';

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left')
);

$text2 =

    "Личность его установлена. Дееспособность проверена.";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left')
);

$text2 =

    "Зарегистрировано в реестре за №" . $registryNum;

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left', 'spaceBefore' => 400)
);

$text2 =

    "Взыскано по тарифу: " . $tariff . " руб.";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left')
);

$text2 =

    "Нотариус";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'left')
);


header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="доверенность на выезд ребенка.docx"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=1, pre-check=0');
header('Expires: 0');

$xmlWriter = IOFactory::createWriter($phpWord, 'Word2007');
$xmlWriter->save("php://output");
