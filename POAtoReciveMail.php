<?php

// POAtoReciveMail
//доверенность на получение почты

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


    $db->query("INSERT INTO $var (user_id, lastName, firstName, patronymic, pasportId, pasportNum, pasportAddress, address, lastNameInd, firstNameInd, patronymicInd, pasportIdInd, pasportNumInd, pasportAddressInd, addressInd, company, term) VALUES ('{$user_id}', '{$lastName}', '{$firstName}', '{$patronymic}', '{$pasportId}', '{$pasportNum}', '{$pasportAddress}', '{$address}', '{$lastNameInd}', '{$firstNameInd}', '{$patronymicInd}', '{$pasportIdInd}', '{$pasportNumInd}', '{$pasportAddressInd}', '{$addressInd}', '{$company}', '{$term}')");
} else {
    $id = $_POST['id'];
    $query = $db->query("SELECT * FROM $var WHERE id = '$id'");

    $user_id = $query[0]['user_id'];
    $lastName = $query[0]['lastName'];
    $firstName = $query[0]['firstName'];
    $patronymic = $query[0]['patronymic'];
    $pasportId = $query[0]['pasportId'];
    $pasportNum = $query[0]['pasportNum'];
    $pasportAddress = $query[0]['pasportAddress'];
    $address = $query[0]['address'];
    $lastNameInd = $query[0]['lastNameInd'];
    $firstNameInd = $query[0]['firstNameInd'];
    $patronymicInd = $query[0]['patronymicInd'];
    $pasportIdInd = $query[0]['pasportIdInd'];
    $pasportNumInd = $query[0]['pasportNumInd'];
    $pasportAddressInd = $query[0]['pasportAddressInd'];
    $addressInd = $query[0]['addressInd'];
    $company = $query[0]['company'];
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
CREATE TABLE `POAtoReciveMail` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `lastName` varchar(55) NOT NULL,
  `firstName` varchar(55) NOT NULL,
  `patronymic` varchar(55) NOT NULL,
  `pasportId` varchar(55) NOT NULL,
  `pasportNum` varchar(55) NOT NULL,
  `pasportAddress` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `lastNameInd` varchar(55) NOT NULL,
  `firstNameInd` varchar(55) NOT NULL,
  `patronymicInd` varchar(55) NOT NULL,
  `pasportIdInd` varchar(55) NOT NULL,
  `pasportNumInd` varchar(55) NOT NULL,
  `pasportAddressInd` varchar(55) NOT NULL,
  `addressInd` varchar(55) NOT NULL,
  `company` varchar(55) NOT NULL,
  `term` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
*/
$fontStyle = array('name' => 'Times New Roman', 'size' => 16, 'color' => '000000');
$paragrafStyle = array('align' => 'center', 'spaceBefore' => 150);
$phpWord->addTitleStyle(1, $fontStyle, $paragrafStyle);
$section->addTitle(

    'Доверенность',
    1
);

$fontStyle = array('name' => 'Times New Roman', 'size' => 14, 'color' => '000000');
$paragrafStyle = array('align' => 'center');
$phpWord->addTitleStyle(2, $fontStyle, $paragrafStyle);
$section->addTitle(

    'на получение пенсии',
    2
);

$text2 =

    "Я, " . $lastName . " " . $firstName . " " . $patronymic . ", паспорт серии " . $pasportId . ", № " . $pasportNum . ", выдан " . $pasportAddress . ", проживающий по адресу:
" . $address . " доверяю " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . ", паспорт серии " . $pasportIdInd . ", № " . $pasportNumInd . ", выдан " . $pasportAddressInd . ", проживающему по адресу:
" . $addressInd . " получить " . $company . ", отправленную на мое имя почтовую корреспонденцию, расписываться  за меня и совершить все действия, связанные с выполнением этого поручения.";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 150, 'spaceBefore' => 250)
);

$text =

    "Доверенность выдана сроком на " . $term . ".";

$section->addText(
    htmlspecialchars($text),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 150)
);


$text =

    "Дата          Подпись";

$section->addText(
    htmlspecialchars($text),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 150, 'spaceBefore' => 300)
);

$text =

    "Подпись  доверителя удостоверяю.";

$section->addText(
    htmlspecialchars($text),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 150, 'spaceBefore' => 300)
);

header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="доверенность на получение почты.docx"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=1, pre-check=0');
header('Expires: 0');

$xmlWriter = IOFactory::createWriter($phpWord, 'Word2007');
$xmlWriter->save("php://output");
