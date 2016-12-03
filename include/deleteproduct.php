<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('main.php');

$pdo = openDB();
$sku = $_GET['tsku'];

$nwQuery = "DELETE FROM products WHERE `sku` = '$sku'";
$nwQuery = $pdo->prepare($nwQuery);
$nwQuery->execute();
$row     = $nwQuery->fetch();

print('Success');
$pdo=null;

?>
