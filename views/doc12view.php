<?php

// RepresentationAttorney
// доверенность на представление интересов

session_start();
require_once '../Session.php';

require_once 'main/header.php';
require_once '../variables.php';

$textDoc1 = "Я, " . $lastName . " " . $firstName . " " . $patronymic . ", проживающая по адресу:" . $address . ", 
настоящей доверенностью уполномочиваю гражданина " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . ", проживающего по адресу: "
    . $addressInd . ", 
быть моим представителям во всех судебных учреждениях, со всеми правами, предоставленными законом истцу, ответчику, третьему лицу,
в том числе с правом: подписания иска, предъявления иска в суд, предъявления встречного иска, признания иска, полного либо частичного 
отказа от исковых требований, изменение размера исковых требований, изменения предмета или основания иска, заключения мирового соглашения, 
подписания апелляционной либо кассационной жалобы, подачи апелляционной либо кассационной жалобы в суд, получения на руки исполнительного листа, 
получения на руки решения, определения либо постановления суда любой инстанции, обжалования решения суда.";

$text2 =

    "Для выполнения настоящего поручения уполномочиваю гражданина " . $lastNameInd . " " . $firstNameInd . " " . $patronymicInd . " подавать от моего имени 
заявления и другие документы, собирать необходимые справки и документы, расписываться за меня и совершать другие 
действия, связанные с выполнением данного поручения.";

$text3 =

    "Настоящая доверенность действительна до " . $dateTo . " г. ";

$text4 =

    "Полномочия по настоящей доверенности не могут быть переданы третьим лицам.";
?>

<link rel="stylesheet" href="../vendor/twbs/bootstrap/dist/css/bootstrap.min.css">
<link rel="stylesheet" href="../style/viewstyle.css">

<div class="sheet">

    <div class="form-row">
        <div>
            <a class="btn btn-secondary btn-lg active" href="/RepresentationAttorney.php" role="button">Сохранить</a>
        </div>
        <div>
            <a class="btn btn-secondary btn-lg active" href="/?id=12" role="button" style="margin-left:20px;">Изменить</a>
        </div>
    </div>

    <h2 class="h2">ДОВЕРЕННОСТЬ</h2>

    <div class="dateLine">
        <div>г.<?= $city ?></div>
        <div><?= $date ?>г.</div>
    </div>

    <p class="formatText"><?= $textDoc1 . "<br>" . $text2 . "<br>" . $text3 . "<br>" . $text4 ?></p>
</div>