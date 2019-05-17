<?php


if (isset($_POST['doc1'])) {
    header("Location:/views/doc1view.php");
} elseif (isset($_POST['doc2'])) {
    header("Location:/views/doc2view.php");
} elseif (isset($_POST['doc3'])) {
    header("Location:/views/doc3view.php");
} elseif (isset($_POST['doc4'])) {
    header("Location:/views/doc4view.php");
} elseif (isset($_POST['doc5'])) {
    header("Location:/views/doc5view.php");
} elseif (isset($_POST['doc6'])) {
    header("Location:/views/doc6view.php");
} elseif (isset($_POST['doc7'])) {
    header("Location:/views/doc7view.php");
} elseif (isset($_POST['doc8'])) {
    header("Location:/views/doc8view.php");
} elseif (isset($_POST['doc9'])) {
    header("Location:/views/doc9view.php");
} elseif (isset($_POST['doc10'])) {
    header("Location:/views/doc10view.php");
} elseif (isset($_POST['doc11'])) {
    header("Location:/views/doc11view.php");
} elseif (isset($_POST['doc12'])) {
    header("Location:/views/doc12view.php");
} elseif (isset($_POST['doc13'])) {
    header("Location:/views/doc13view.php");
} elseif (isset($_POST['doc14'])) {
    header("Location:/views/doc14view.php");
} elseif (isset($_POST['doc15'])) {
    header("Location:/views/doc15view.php");
}


setcookie("City", $_POST['City']);

// FIO and address
setcookie("LastName", $_POST['LastName']);
setcookie("FirstName", $_POST['FirstName']);
setcookie("Patronumic", $_POST['Patronumic']);
setcookie("Address", $_POST['Address']);
setcookie("nationality", $_POST['nationality']);
setcookie("identityDoc", $_POST['identityDoc']);
setcookie("paramsIdentity", $_POST['paramsIdentity']);
setcookie("birthDate", $_POST['birthDate']);
setcookie("birthPlace", $_POST['birthPlace']);

// FIO and address Ind
setcookie("LastNameInd", $_POST['LastNameInd']);
setcookie("FirstNameInd", $_POST['FirstNameInd']);
setcookie("PatronumicInd", $_POST['PatronumicInd']);
setcookie("addressInd", $_POST['addressInd']);

// company
setcookie("companyAddress", $_POST['companyAddress']);
setcookie("companyName", $_POST['companyName']);
setcookie("companyNameAddress", $_POST['companyNameAddress']);
setcookie("company", $_POST['company']);
setcookie("companyInd", $_POST['companyInd']);
setcookie("position", $_POST['position']);

// pasport
setcookie("pasportId", $_POST['pasportId']);
setcookie("pasportNum", $_POST['pasportNum']);
setcookie("pasportAddress", $_POST['pasportAddress']);

// pasport Ind
setcookie("pasportIdInd", $_POST['pasportIdInd']);
setcookie("pasportNumInd", $_POST['pasportNumInd']);
setcookie("pasportAddressInd", $_POST['pasportAddressInd']);

// other
setcookie("FSS", $_POST['FSS']);
setcookie("nalogova", $_POST['nalogova']);
setcookie("authority", $_POST['authority']);
setcookie("DateTo", $_POST['DateTo']);
setcookie("kvaddress", $_POST['kvaddress']);
setcookie("doc", $_POST['doc']);
setcookie("docCompany", $_POST['docCompany']);
setcookie("TMC", $_POST['TMC']);
setcookie("term", $_POST['term']);

// GAI
setcookie("GAI", $_POST['GAI']);
setcookie("GAICity", $_POST['GAICity']);
setcookie("GAINum", $_POST['GAINum']);
setcookie("GAIDate", $_POST['GAIDate']);
setcookie("GIBDD", $_POST['GIBDD']);
setcookie("GIBDDDate", $_POST['GIBDDDate']);

// car
setcookie("car", $_POST['car']);
setcookie("carDate", $_POST['carDate']);
setcookie("carColor", $_POST['carColor']);
setcookie("carEngine", $_POST['carEngine']);
setcookie("carBody", $_POST['carBody']);
setcookie("carСhassis", $_POST['carСhassis']);
setcookie("carVIN", $_POST['carVIN']);
setcookie("carGosNum", $_POST['carGosNum']);
setcookie("carId", $_POST['carId']);
setcookie("carNum", $_POST['carNum']);

// Notarius
setcookie("lastNameNotarius", $_POST['lastNameNotarius']);
setcookie("firstNameNotarius", $_POST['firstNameNotarius']);
setcookie("patronymicNotarius", $_POST['patronymicNotarius']);
setcookie("cityNotarius", $_POST['cityNotarius']);
setcookie("addressNotarius", $_POST['addressNotarius']);
setcookie("phoneNotarius", $_POST['phoneNotarius']);
setcookie("requisiteNotarius", $_POST['requisiteNotarius']);

setcookie("destination", $_POST['destination']);
setcookie("purpose", $_POST['purpose']);
setcookie("dateInWord", $_POST['dateInWord']);
setcookie("registryNum", $_POST['registryNum']);
setcookie("tariff", $_POST['tariff']);

// Child
setcookie("lastNameCh", $_POST['lastNameCh']);
setcookie("firstNameCh", $_POST['firstNameCh']);
setcookie("patronymicCh", $_POST['patronymicCh']);
setcookie("birthDateCh", $_POST['birthDateCh']);
setcookie("birthCertificateNum", $_POST['birthCertificateNum']);
setcookie("birthCertificatePlace", $_POST['birthCertificatePlace']);
setcookie("birthCertificateDate", $_POST['birthCertificateDate']);

// Mother
setcookie("lastNameMr", $_POST['lastNameMr']);
setcookie("firstNameMr", $_POST['firstNameMr']);
setcookie("patronymicMr", $_POST['patronymicMr']);
setcookie("birthDateMr", $_POST['birthDateMr']);
setcookie("birthPlaceMr", $_POST['birthPlaceMr']);
setcookie("pasportIdMr", $_POST['pasportIdMr']);
setcookie("pasportNumMr", $_POST['pasportNumMr']);
setcookie("pasportAddressMr", $_POST['pasportAddressMr']);
setcookie("AddressMr", $_POST['AddressMr']);

setcookie("moneyAddress", $_POST['moneyAddress']);
setcookie("moneyPlace", $_POST['moneyPlace']);
setcookie("moneySum", $_POST['moneySum']);
setcookie("moneyTo", $_POST['moneyTo']);

setcookie("dateStart", $_POST['dateStart']);
setcookie("dateFinish", $_POST['dateFinish']);

require_once 'views/main/header.php';
require_once 'views/main/body.php';
require_once 'views/main/footer.php';