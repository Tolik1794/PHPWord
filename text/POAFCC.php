<?php

// POAFCC
// доверенность в фсс

// Подключение билиотеки phpword
use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

require 'vendor/autoload.php';

// Подключение переменных с данными пользователя
require_once 'variables.php';


// Создание обьекта с параметрами
$phpWord = new PhpWord();

// Параметри документа(отступы, шрифт, ориентация документа)
$phpWord->setDefaultFontName('Times New Roman');
$phpWord->setDefaultFontSize(14);
$sectionStyle = array(
    'orientation' => 'portrait',
    'marginTop' => 1000,
    'marginLeft' => 1800,
    'marginRight' => 1000,
    'colsNum' => 1,
);

// Создание секции документа
$section = $phpWord->addSection($sectionStyle);

// Создание заголовка с параметрами шрифта и отступов в секции
$dovNum = $_SESSION["DovNum"];
$fontStyle = array('name' => 'Times New Roman', 'size' => 16, 'color' => '000000');
$paragrafStyle = array('align' => 'center', 'spaceBefore' => 150, 'spaceAfter' => 150);
$phpWord->addTitleStyle(1, $fontStyle, $paragrafStyle);
$section->addTitle(

    'Доверенность',
    1
);

// Создание таблицы
$table = $section->addTable([$tableStyle]);

// Переменные с параметрами для таблицы
$cellHLeft = array('align' => 'left');
$cellHRight = array('align' => 'right');
$cellVCentered = array('valign' => 'center');

// Верстка таблицы
$phpWord->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');
$table->addRow(null, array('tblHeader' => true));

// Параметры для первого столбца
$table->addCell(4250, $cellVCentered)->addText(

    $date . "г.",

    array('name' => 'TimesNewRoman', 'size' => 12,),
    $cellHLeft
);

// Параметры для второго столбца
$table->addCell(5000, $cellVCentered)->addText(

    "город " . $city,

    array('name' => 'TimesNewRoman', 'size' => 12,),
    $cellHRight
);

// Добавление текста со своими параметрами
$text2 =

    $company . " в лице " . $lastName . " " . $firstName . " " . $patronymic . ", " . $position . ", 
действующего на основании Устава, уполномачивает  " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . " , паспорт серии " . $pasportIdInd . ", № " . $pasportNumInd . ", 
выдан " . $pasportAddressInd . ", проживающему по адресу:  " . $addressInd . " предсталять интересы  " . $companyInd . " в " . $FSS . " 
и совершать следующие действия: " . $authority . ", а также расписываться и совершать все 
остальные действия, связанные с выполнением этого поручения.";

$section->addText(
    htmlspecialchars($text2),
    // Параметры шрифта
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    // Параметры макета
    array('align' => 'both', 'spacing' => 150, 'spaceBefore' => 150)
);

$text =

    "Доверенность выдана сроком на " . $term . ".";

$section->addText(
    htmlspecialchars($text),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 150)
);

$text =

    "Подпись доверителя " . $lastName . " " . $firstName . " " . $patronymic . " _________ удостоверяю.";

$section->addText(
    htmlspecialchars($text),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 150)
);

// Параметры загрузки файла
header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="доверенность в фсс.docx"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=1, pre-check=0');
header('Expires: 0');

// Задаем формат документа
$xmlWriter = IOFactory::createWriter($phpWord, 'Word2007');
$xmlWriter->save("php://output");
