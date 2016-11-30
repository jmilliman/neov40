<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('main.php');

$pdo = openDB();
$nwQuery = "SELECT sku, pname FROM products ORDER BY pname";
$nwQuery = $pdo->prepare($nwQuery);
$nwQuery->execute();
$result  = $nwQuery->fetchAll(PDO::FETCH_ASSOC);

print( json_encode($result) );

$pdo=null;

?>
