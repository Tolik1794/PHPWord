<?php

// RepresentationAttorney
// доверенность на представление интересов

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

$var = basename(__FILE__, ".php");

require_once('Dbsettings.php');
require_once('DB.php');
require_once('Session.php');

require 'vendor/autoload.php';
$db = new DB($host, $user, $password, $db_name);
$user_login = Session::get('login');
$users_id = $db->query("SELECT `id_users` FROM `users` WHERE login = '$user_login'");
$user_id = $users_id[0]['id_users'];

if (!$_POST['download']) {

    require_once 'variables.php';


    $db->query("INSERT INTO $var (user_id, city, date, lastName, firstName, patronymic, address, lastNameInd, firstNameInd, patronymicInd, addressInd, dateTo) VALUES ('{$user_id}', '{$city}', '{$date}', '{$lastName}', '{$firstName}', '{$patronymic}', '{$address}', '{$lastNameInd}', '{$firstNameInd}', '{$patronymicInd}', '{$addressInd}', '{$dateTo}')");
} else {
    $id = $_POST['id'];
    $query = $db->query("SELECT * FROM $var WHERE id = '$id'");

    $user_id = $query[0]['user_id'];
    $city = $query[0]['city'];
    $date = $query[0]['date'];
    $lastName = $query[0]['lastName'];
    $firstName = $query[0]['firstName'];
    $patronymic = $query[0]['patronymic'];
    $address = $query[0]['address'];
    $lastNameInd = $query[0]['lastNameInd'];
    $firstNameInd = $query[0]['firstNameInd'];
    $patronymicInd = $query[0]['patronymicInd'];
    $addressInd = $query[0]['addressInd'];
    $dateTo = $query[0]['dateTo'];
}

$phpWord = new PhpWord();

$phpWord->setDefaultFontName('Times New Roman');
$phpWord->setDefaultFontSize(14);

$sectionStyle = array(
    'orientation' => 'portrait',
    'marginTop' => 1000,
    'marginLeft' => 1800,
    'marginRight' => 1000,
    'colsNum' => 1,
);
$section = $phpWord->addSection($sectionStyle);
/*
CREATE TABLE `RepresentationAttorney` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `city` varchar(55) NOT NULL,
  `date` varchar(55) NOT NULL,
  `lastName` varchar(55) NOT NULL,
  `firstName` varchar(55) NOT NULL,
  `patronymic` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `lastNameInd` varchar(55) NOT NULL,
  `firstNameInd` varchar(55) NOT NULL,
  `patronymicInd` varchar(55) NOT NULL,
  `addressInd` varchar(55) NOT NULL,
  `dateTo` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
*/
$fontStyle = array('name' => 'Times New Roman', 'size' => 16, 'color' => '000000');
$paragrafStyle = array('align' => 'center', 'spaceBefore' => 150, 'spaceAfter' => 700);
$phpWord->addTitleStyle(1, $fontStyle, $paragrafStyle);
$section->addTitle(

    'ДОВЕРЕННОСТЬ',
    1
);

$table = $section->addTable([$tableStyle]);

$cellHLeft = array('align' => 'left');
$cellHRight = array('align' => 'right');
$cellVCentered = array('valign' => 'center');

$phpWord->addTableStyle('Colspan Rowspan', $styleTable);
$table = $section->addTable('Colspan Rowspan');
$table->addRow(null, array('tblHeader' => true));
$table->addCell(4250, $cellVCentered)->addText(

    "город " . $city,

    array('name' => 'TimesNewRoman', 'size' => 12,),
    $cellHLeft
);
$table->addCell(5000, $cellVCentered)->addText(

    $date . "г.",

    array('name' => 'TimesNewRoman', 'size' => 12,),
    $cellHRight
);

$text2 =

    "Я, " . $lastName . " " . $firstName . " " . $patronymic . ", проживающая по адресу:" . $address . ", 
настоящей доверенностью уполномочиваю гражданина " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . ", проживающего по адресу: "
    . $addressInd . ", 
быть моим представителям во всех судебных учреждениях, со всеми правами, предоставленными законом истцу, ответчику, третьему лицу,
в том числе с правом: подписания иска, предъявления иска в суд, предъявления встречного иска, признания иска, полного либо частичного 
отказа от исковых требований, изменение размера исковых требований, изменения предмета или основания иска, заключения мирового соглашения, 
подписания апелляционной либо кассационной жалобы, подачи апелляционной либо кассационной жалобы в суд, получения на руки исполнительного листа, 
получения на руки решения, определения либо постановления суда любой инстанции, обжалования решения суда.";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spaceBefore' => 500, 'spacing' => 150)
);

$text2 =

    "Для выполнения настоящего поручения уполномочиваю гражданина " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . " подавать от моего имени 
заявления и другие документы, собирать необходимые справки и документы, расписываться за меня и совершать другие 
действия, связанные с выполнением данного поручения.";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 150)
);

$text =

    "Настоящая доверенность действительна до " . $dateTo . " г. ";

$section->addText(
    htmlspecialchars($text),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 150)
);

$text =

    "Полномочия по настоящей доверенности не могут быть переданы третьим лицам.";

$section->addText(
    htmlspecialchars($text),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 150)
);

header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="доверенность на представление интересов.docx"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=1, pre-check=0');
header('Expires: 0');

$xmlWriter = IOFactory::createWriter($phpWord, 'Word2007');
$xmlWriter->save("php://output");
