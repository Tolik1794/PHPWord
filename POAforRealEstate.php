<?php
session_start();

// POAforRealEstate
// доверенность на оренду квартиры

require_once('Dbsettings.php');
require_once('DB.php');
require_once('Session.php');

use PhpOffice\PhpWord\IOFactory;
use PhpOffice\PhpWord\PhpWord;

require 'vendor/autoload.php';
$db = new DB($host, $user, $password, $db_name);
$user_login = Session::get('login');
$users_id = $db->query("SELECT `id_users` FROM `users` WHERE login = '$user_login'");
$user_id = $users_id[0]['id_users'];

if (!$_POST['download']) {

    require_once 'variables.php';

    $db->query("INSERT INTO `POAforRealEstate` (user_id, lastName, firstName, patronymic, pasportId, pasportNum, pasportAddress, address, lastNameInd, firstNameInd, patronymicInd, pasportIdInd, pasportNumInd, pasportAddressInd, kvaddress, term) VALUES ('{$user_id}', '{$lastName}', '{$firstName}', '{$patronymic}', '{$pasportId}', '{$pasportNum}', '{$pasportAddress}', '{$address}', '{$lastNameInd}', '{$firstNameInd}', '{$patronymicInd}', '{$pasportIdInd}', '{$pasportNumInd}', '{$pasportAddressInd}', '{$kvaddress}', '{$term}')");
} else {
    $id = $_POST['id'];
    $query = $db->query("SELECT * FROM `POAforRealEstate` WHERE id = '$id'");

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
    $kvaddress = $query[0]['kvaddress'];
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

$fontStyle = array('name' => 'Times New Roman', 'size' => 16, 'color' => '000000');
$paragrafStyle = array('align' => 'center', 'spaceBefore' => 150);
$phpWord->addTitleStyle(1, $fontStyle, $paragrafStyle);
$section->addTitle(

    'Доверенность',
    1
);

$text2 =

    "Я, " . $lastName . " " . $firstName . " " . $patronymic . ", паспорт серии " . $pasportId . ", № " . $pasportNum . ", выдан " . $pasportAddress . ", проживающий по адресу: " . $address . " 
доверяю " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . ", паспорт серии " . $pasportIdInd . ", № " . $pasportNumInd . ", выдан " . $pasportAddressInd . ", проживающему по адресу: " . $addressInd . " 
сдать в аренду жилое помещение по аресу: " . $kvaddress . ", определять срок аренды и размер арендной платы,  
расписываться  за меня, получать деньги   и совершить все действия, связанные с выполнением этого поручения.";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 150, 'spaceBefore' => 700)
);

$text =

    "Доверенность выдана сроком на " . $term . ".";

$section->addText(
    htmlspecialchars($text),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 150)
);

header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="доверенность на оренду квартиры.docx"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=1, pre-check=0');
header('Expires: 0');

$xmlWriter = IOFactory::createWriter($phpWord, 'Word2007');
$xmlWriter->save("php://output");
