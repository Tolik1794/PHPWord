<?php
session_start();
// POAofTax
// доверенность в налоговую

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

    $db->query("INSERT INTO $var (user_id, date, city, company, lastName, firstName, patronymic, position, lastNameInd, firstNameInd, patronymicInd, pasportIdInd, pasportNumInd, pasportAddressInd, addressInd, companyInd, nalogova, authority, term) VALUES ('{$user_id}', '{$date}', '{$city}', '{$company}', '{$lastName}', '{$firstName}', '{$patronymic}', '{$position}', '{$lastNameInd}', '{$firstNameInd}', '{$patronymicInd}', '{$pasportIdInd}', '{$pasportNumInd}', '{$pasportAddressInd}', '{$addressInd}', '{$companyInd}', '{$nalogova}', '{$authority}', '{$term}')");
} else {
    $id = $_POST['id'];
    $query = $db->query("SELECT * FROM $var WHERE id = '$id'");

    $user_id = $query[0]['user_id'];
    $date = $query[0]['date'];
    $city = $query[0]['city'];
    $company = $query[0]['company'];
    $lastName = $query[0]['lastName'];
    $firstName = $query[0]['firstName'];
    $patronymic = $query[0]['patronymic'];
    $position = $query[0]['position'];
    $lastNameInd = $query[0]['lastNameInd'];
    $firstNameInd = $query[0]['firstNameInd'];
    $patronymicInd = $query[0]['patronymicInd'];
    $pasportIdInd = $query[0]['pasportIdInd'];
    $pasportNumInd = $query[0]['pasportNumInd'];
    $pasportAddressInd = $query[0]['pasportAddressInd'];
    $addressInd = $query[0]['addressInd'];
    $companyInd = $query[0]['companyInd'];
    $nalogova = $query[0]['nalogova'];
    $authority = $query[0]['authority'];
    $term = $query[0]['term'];
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
CREATE TABLE `POAofTax` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `company` varchar(55) NOT NULL,
  `lastName` varchar(55) NOT NULL,
  `firstName` varchar(55) NOT NULL,
  `patronymic` varchar(55) NOT NULL,
  `position` varchar(55) NOT NULL,
  `lastNameInd` varchar(55) NOT NULL,
  `firstNameInd` varchar(55) NOT NULL,
  `patronymicInd` varchar(55) NOT NULL,
  `pasportIdInd` varchar(55) NOT NULL,
  `pasportNumInd` varchar(55) NOT NULL,
  `pasportAddressInd` varchar(55) NOT NULL,
  `addressInd` varchar(55) NOT NULL,
  `companyInd` varchar(55) NOT NULL,
  `nalogova` varchar(55) NOT NULL,
  `authority` varchar(55) NOT NULL,
  `term` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
*/

$fontStyle = array('name' => 'Times New Roman', 'size' => 16, 'color' => '000000');
$paragrafStyle = array('align' => 'center', 'spaceBefore' => 150, 'spaceAfter' => 150);
$phpWord->addTitleStyle(1, $fontStyle, $paragrafStyle);
$section->addTitle(

    'Доверенность',

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

    $date . "г.",

    array('name' => 'TimesNewRoman', 'size' => 12,),
    $cellHLeft
);
$table->addCell(5000, $cellVCentered)->addText(

    "город " . $city,

    array('name' => 'TimesNewRoman', 'size' => 12,),
    $cellHRight
);

$text2 =

    $company . " в лице " . $lastName . " " . $firstName . " " . $patronymic . ", " . $position . ", 
действующего на основании Устава, уполномачивает  " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . ", паспорт серии " . $pasportIdInd . ", № " . $pasportNumInd . ", 
выдан " . $pasportAddressInd . ", проживающему по адресу:  " . $addressInd . " предсталять интересы  " . $companyInd . " в " . $nalogova . "
и совершать следующие действия: " . $authority . ", а также расписываться и совершать все 
остальные действия, связанные с выполнением этого поручения.";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
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

header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="доверенность в налоговую.docx"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=1, pre-check=0');
header('Expires: 0');

$xmlWriter = IOFactory::createWriter($phpWord, 'Word2007');
$xmlWriter->save("php://output");
