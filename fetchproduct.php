<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('include/main.php');

$opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
];

$dsn = 'mysql:host='. DB_SERVER .';dbname='. DB_NAME .';charset=' . DB_CHARSET;
$pdo = new PDO($dsn, DB_USER, DB_PASSWORD, $opt);

$sku     = $_POST['selectedSku'];
$nwQuery = 'SELECT * FROM products WHERE sku = $sku';
$nwQuery = $pdo->prepare($nwQuery);

$nwQuery->execute();

$row     = $nwQuery->fetch();

$returnObj (object) [
  'sku'         = $row['sku'];
  'pname'       = $row['pname');
  'size'        = $row['size'];
  'wholesale'   = $row['wholesale'];
  'retail'      = $row['retail'];
  'distprice'   = $row['distprice'];
  'distrate'    = $row['distrate'];
  'bname'       = $row['bname'];
  'emethod'     = $row['emethod'];
  'origin'      = $row['origin'];
  'properties'  = $row['properties'];
  'ingredients' = $row['ingredients'];
  'description' = $row['description'];
  'family'      = $row['family'];
  'imgfile'     = $row['imgfile'];
];

print($returnObj);

?>