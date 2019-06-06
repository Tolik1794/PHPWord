<?php
    $docs = $db->query("SELECT * FROM `doc` WHERE docName = 'POAFCC'");
?>

<div id="2" style="display:none;">
    <h1 style="margin: 0 auto;">POAFCC</h1>
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Date</th>
                <th scope="col">City</th>
                <th scope="col">Last Name</th>
                <th scope="col">First Name</th>
                <th scope="col">Patronymic</th>
                <th scope="col">Last Name 3rd</th>
                <th scope="col">First Name 3rd</th>
                <th scope="col">Patronymic 3rd</th>
                <th scope="col">Company 3rd</th>
            </tr>
        </thead>
        <tbody>


            <?php
            $i = 0;
            foreach ($docs as $doc) {
                $i++
                ?>
                <tr>
                    <th scope="row"><?= $i ?></th>
                    <td><?= $doc['date'] ?></td>
                    <td><?= $doc['city'] ?></td>
                    <td><?= $doc['lastName'] ?></td>
                    <td><?= $doc['firstName'] ?></td>
                    <td><?= $doc['patronymic'] ?></td>
                    <td><?= $doc['lastNameInd'] ?></td>
                    <td><?= $doc['firstNameInd'] ?></td>
                    <td><?= $doc['patronymicInd'] ?></td>
                    <td><?= $doc['companyInd'] ?></td>

                </tr>


            <?php } ?>

        </tbody>
    </table>
</div>
<?php

// POAforPension
//доверенность на получение пенсии


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

$fontStyle = array('name' => 'Times New Roman', 'size' => 14, 'color' => '000000');
$paragrafStyle = array('align' => 'center');
$phpWord->addTitleStyle(2, $fontStyle, $paragrafStyle);
$section->addTitle(

    'на получение пенсии',
    2
);

$text2 =

    "Я, " . $lastName . " " . $firstName . " " . $patronymic . " (ФИО), паспорт серии " . $pasportId . ", № " . $pasportNum . ", выдан " . $pasportAddress . ", проживающий по адресу:
" . $address . " доверяю " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . " (ФИО), паспорт серии " . $pasportIdInd . ", № " . $pasportNumInd . ", выдан " . $pasportAddressInd . ", проживающему по адресу:
" . $addressInd . " получить ".$company." (наименование учреждения где выдается пенсия), причитающуюся мне пенсию за ".$dateStart." - ".$dateFinish." (указать период), 
расписаться  за меня и совершить все действия, связанные с выполнением этого поручения.";

$section->addText(
    htmlspecialchars($text2),
    array('name' => 'TimesNewRoman', 'size' => 12, 'color' => '000000', 'bold' => FALSE, 'italic' => FALSE),
    array('align' => 'both', 'spacing' => 150, 'spaceBefore' => 250)
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
header('Content-Disposition: attachment; filename="доверенность на получение пенсии.docx"');
header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
header('Content-Transfer-Encoding: binary');
header('Cache-Control: must-revalidate, post-check=1, pre-check=0');
header('Expires: 0');

$xmlWriter = IOFactory::createWriter($phpWord, 'Word2007');
$xmlWriter->save("php://output");
