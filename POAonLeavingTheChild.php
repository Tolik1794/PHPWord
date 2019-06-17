<?php

// POAonLeavingTheChild
// доверенность на выезд ребенка

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
 

    $db->query("INSERT INTO $var (user_id, cityNotarius, lastNameNotarius, firstNameNotarius, patronymicNotarius, requisiteNotarius, addressNotarius, phoneNotarius, destination, lastName, firstName, patronymic, birthDate, birthPlace, pasportId, pasportNum, pasportAddress, address, lastNameCh, firstNameCh, patronymicCh, birthDateCh, birthCertificateNum, birthCertificatePlace, birthCertificateDate, purpose, dateStart, dateFinish, lastNameMr, firstNameMr, patronymicMr, birthDateMr, birthPlaceMr, pasportIdMr, pasportNumMr, pasportAddressMr, AddressMr, city, dateInWord, registryNum, tariff) VALUES ('{$user_id}', '{$cityNotarius}', '{$lastNameNotarius}', '{$firstNameNotarius}', '{$patronymicNotarius}', '{$requisiteNotarius}', '{$addressNotarius}', '{$phoneNotarius}', '{$destination}', '{$lastName}', '{$firstName}', '{$patronymic}', '{$birthDate}', '{$birthPlace}', '{$pasportId}', '{$pasportNum}', '{$pasportAddress}', '{$address}', '{$lastNameCh}', '{$firstNameCh}', '{$patronymicCh}', '{$birthDateCh}', '{$birthCertificateNum}', '{$birthCertificatePlace}', '{$birthCertificateDate}', '{$purpose}', '{$dateStart}', '{$dateFinish}', '{$lastNameMr}', '{$firstNameMr}', '{$patronymicMr}', '{$birthDateMr}', '{$birthPlaceMr}', '{$pasportIdMr}', '{$pasportNumMr}', '{$pasportAddressMr}', '{$AddressMr}', '{$city}', '{$dateInWord}', '{$registryNum}', '{$tariff}')");

} else {
    $id = $_POST['id'];
    $query = $db->query("SELECT * FROM $var WHERE id = '$id'");
    
    $arr = array_keys($query[0]);
    $count = count($arr);
    $i = 0;
    $test = [];
    foreach (array_slice($arr, 1) as $value) {
        $i++;
        
            echo "\$".$value." = \$query[0]['" . $value . "'];".'<br>';
        
    }
    die;

    $date = $query[0]['date'];
    $city = $query[0]['city'];
    $user_id = $query[0]['user_id'];
    $company = $query[0]['company'];
    $lastName = $query[0]['lastName'];
    $firstName = $query[0]['firstName'];
    $patronymic = $query[0]['patronymic'];
    $position = $query[0]['position'];
    $lastNameInd = $query[0]['lastNameInd'];
    $firstNameInd = $query[0]['firstNameInd'];
    $patronymicInd = $query[0]['patronymicInd'];
    $companyInd = $query[0]['companyInd'];
    $addressInd = $query[0]['addressInd'];
    $pasportAddressInd = $query[0]['pasportAddressInd'];
    $pasportIdInd = $query[0]['pasportIdInd'];
    $pasportNumInd = $query[0]['pasportNumInd'];
    $term = $query[0]['term'];
    $FSS = $query[0]['FSS'];
}



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
/*
CREATE TABLE `POAonLeavingTheChild` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `cityNotarius` varchar(55) NOT NULL,
  `lastNameNotarius` varchar(55) NOT NULL,
  `firstNameNotarius` varchar(55) NOT NULL,
  `patronymicNotarius` varchar(55) NOT NULL,
  `requisiteNotarius` varchar(55) NOT NULL,
  `addressNotarius` varchar(55) NOT NULL,
  `phoneNotarius` varchar(55) NOT NULL,
  `destination` varchar(55) NOT NULL,
  `lastName` varchar(55) NOT NULL,
  `firstName` varchar(55) NOT NULL,
  `patronymic` varchar(55) NOT NULL,
  `birthDate` varchar(55) NOT NULL,
  `birthPlace` varchar(55) NOT NULL,
  `pasportId` varchar(55) NOT NULL,
  `pasportNum` varchar(55) NOT NULL,
  `pasportAddress` varchar(55) NOT NULL,
  `address` varchar(55) NOT NULL,
  `lastNameCh` varchar(55) NOT NULL,
  `firstNameCh` varchar(55) NOT NULL,
  `patronymicCh` varchar(55) NOT NULL,
  `birthDateCh` varchar(55) NOT NULL,
  `birthCertificateNum` varchar(55) NOT NULL,
  `birthCertificatePlace` varchar(55) NOT NULL,
  `birthCertificateDate` varchar(55) NOT NULL,
  `purpose` varchar(55) NOT NULL,
  `dateStart` varchar(55) NOT NULL,
  `dateFinish` varchar(55) NOT NULL,
  `lastNameMr` varchar(55) NOT NULL,
  `firstNameMr` varchar(55) NOT NULL,
  `patronymicMr` varchar(55) NOT NULL,
  `birthDateMr` varchar(55) NOT NULL,
  `birthPlaceMr` varchar(55) NOT NULL,
  `pasportIdMr` varchar(55) NOT NULL,
  `pasportNumMr` varchar(55) NOT NULL,
  `pasportAddressMr` varchar(55) NOT NULL,
  `AddressMr` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
  `dateInWord` varchar(55) NOT NULL,
  `registryNum` varchar(55) NOT NULL,
  `tariff` varchar(55) NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8;
*/
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
