<?php
session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('main.php');

$pdo = openDB();
$sku = $_GET['tsku'];

//$_SESSION['origsku'] = $sku;

$nwQuery = "DELETE FROM products WHERE `sku` = '$sku'";
$nwQuery = $pdo->prepare($nwQuery);
$nwQuery->execute();
$row     = $nwQuery->fetch();

//$returnArr = array(
//  'sku'         => $row['sku'],
//  'pname'       => $row['pname'],
//  'size'        => $row['size'],
//  'wholesale'   => $row['wholesale'],
//  'retail'      => $row['retail'],
//  'distprice'   => $row['distprice'],
//  'distrate'    => $row['distrate'],
//  'bname'       => $row['bname'],
//  'emethod'     => $row['emethod'],
//  'origin'      => $row['origin'],
//  'properties'  => $row['properties'],
//  'ingredients' => $row['ingredients'],
//  'description' => $row['description'],
//  'family'      => $row['family'],
//  'imgfile'     => $row['imgfile'],
//  'eoil'        => $row['eoil'],
//  'boil'        => $row['boil'],
//  'other'       => $row['other']
//);

print('Success');
$pdo=null;

?>
