<?php
session_start();
// POAGeneration
// генеральная доверенность

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


    $db->query("INSERT INTO $var (user_id, date, city, lastName, firstName, patronymic, address, lastNameInd, firstNameInd, patronymicInd, addressInd, dateTo) VALUES ('{$user_id}', '{$date}', '{$city}', '{$lastName}', '{$firstName}', '{$patronymic}', '{$address}', '{$lastNameInd}', '{$firstNameInd}', '{$patronymicInd}', '{$addressInd}', '{$dateTo}')");
} else {
    $id = $_POST['id'];
    $query = $db->query("SELECT * FROM $var WHERE id = '$id'");

    $user_id = $query[0]['user_id'];
    $date = $query[0]['date'];
    $city = $query[0]['city'];
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

$fontStyle = array('name' => 'Times New Roman', 'size' => 16, 'color' => '000000');
$paragrafStyle = array('align' => 'center', 'spaceBefore' => 150, 'spaceAfter' => 700);
$phpWord->addTitleStyle(1, $fontStyle, $paragrafStyle);
$section->addTitle(

    'ГЕНЕРАЛЬНАЯ ДОВЕРЕННОСТЬ',
    1
);

$table = $section->addTable([$tableStyle]);

$cellHLeft = array('align' => 'left');
$cellHRight = array('align' => 'right');
$cellVCentered = array('valign' => 'center');

/*
CREATE TABLE `POAGeneration` (
  `id` int(11) NOT NULL AUTO_INCREMENT,
  `user_id` int(11) NOT NULL,
  `date` varchar(55) NOT NULL,
  `city` varchar(55) NOT NULL,
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

$textDoc1 =

    "Я, " . $lastName . " " . $firstName . " " . $patronymic . ", проживающая по адресу:" . $address . ", настоящей доверенностью уполномочиваю гражданина " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . ", проживающего по адресу: " . $addressInd . ", 
быть моим представителем во всех органах, организациях и учреждениях всех форм собственности, по всем вопросам, касающимся моих интересов, управлять и распоряжаться всем моим имуществом, в чем бы оно ни заключалось и где бы ни находилось, в связи с чем заключать все разрешенные законом сделки, в том числе с квартирами и другой недвижимостью, в частности: покупать, продавать, принимать в дар, обменивать, сдавать в аренду, распоряжаться иным образом, определяя во всех случаях суммы, сроки и другие условия по своему усмотрению;
производить расчеты по заключенным сделкам, регистрировать соответствующие договоры и переход права по ним в компетентных органах, снимать меня с государственного регистрационного учета и ставить на государственный регистрационный учет по новому месту жительства, принимать наследство или отказываться от него, получать причитающееся мне имущество, деньги, ценные бумаги, и другие документы по всем основаниям от всех лиц и организаций, распоряжаться счетами в ЦБ России и его подразделениях, коммерческих, сберегательных и других банках с правом открытия и закрытия счетов, внесения и получения любых денежных сумм, получать почтовую, телеграфную, ценную и всякого рода корреспонденцию и посылки,
вести от моего имени дела во всех организациях, вести гражданские, административные, уголовные дела во всех судебных учреждениях со всеми правами, какие предоставлены законом истцу, ответчику, третьему лицу и потерпевшему, в том числе с правом подачи и подписи искового заявления, административного иска, заявлений об обеспечении иска и всех видов ходатайств, окончания дела мировым соглашением, признания или отказа полностью или частично от исковых требований, изменения предмета или основания иска, обжалования решений и судебных актов судов, подписания всех видов жалоб, получения исполнительного листа, предъявления исполнительного листа к взысканию, с правом получения имущества и денег,
а также расписываться за меня и совершать все действия,  связанные с выполнением данного поручения. Настоящая доверенность действительна до " . $dateTo . " г. 
Полномочия по настоящей доверенности не могут быть переданы третьим лицам.";

$section->addText(
    htmlspecialchars($textDoc1),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spaceBefore' => 500, 'spacing' => 150)
);

$text =

    "________ Подпись";

$section->addText(
    htmlspecialchars($text),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spaceBefore' => 500, 'spacing' => 150)
);

header("Content-Description: File Transfer");
header('Content-Disposition: attachment; filename="генеральная доверенность.docx"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=1, pre-check=0');
header('Expires: 0');

$xmlWriter = IOFactory::createWriter($phpWord, 'Word2007');
$xmlWriter->save("php://output");
