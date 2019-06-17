<?php 
session_start();

require_once('../../Dbsettings.php');
require_once('../../DB.php');

require_once '../../Session.php';

if (!Session::has('login')) {
    echo 'error 404';
} else {

$db = new DB($host, $user, $password, $db_name);

$id = $_POST['id'];
$table = $_POST['table'];
// print_r($table);
// die;
$query = $db->query("DELETE FROM ".$table." WHERE id = '$id'")or die(mysql_error());
}

header("Location: log.php");