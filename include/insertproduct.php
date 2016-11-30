<?php

session_start();
error_reporting(E_ALL);
ini_set('display_errors', 1);
require_once('main.php');

$pdo    = openDB();
$oldsku = $_SESSION['origsku'];

if (isset($_GET['sData'])) {
  $saveData = json_decode($_GET['sData'], true);
}

$params = [
            'sku'         => $saveData['sku'],
            'pname'       => $saveData['pname'],
            'size'        => $saveData['size'],
            'wholesale'   => $saveData['wholesale'],
            'retail'      => $saveData['retail'],
            'distprice'   => $saveData['distprice'],
            'distrate'    => $saveData['distrate'],
            'bname'       => $saveData['bname'],
            'emethod'     => $saveData['emethod'],
            'origin'      => $saveData['origin'],
            'properties'  => $saveData['properties'],
            'ingredients' => $saveData['ingredients'],
            'description' => $saveData['description'],
            'family'      => $saveData['family'],
            'imgfile'     => $saveData['imgfile'],
            'eoil'        => $saveData['eoil'],
            'boil'        => $saveData['boil'],
            'other'       => $saveData['other']
          ];

$updateQuery = "INSERT INTO `products` (`sku`,
                                        `pname`,
                                        `size`,
                                        `wholesale`,
                                        `retail`,
                                        `distprice`,
                                        `distrate`,
                                        `bname`,
                                        `emethod`,
                                        `origin`,
                                        `properties`,
                                        `ingredients`,
                                        `description`,
                                        `family`,
                                        `imgfile`,
                                        `eoil`,
                                        `boil`,
                                        `other`)
                                VALUES (:sku,
                                        :pname,
                                        :size,
                                        :wholesale,
                                        :retail,
                                        :distprice,
                                        :distrate,
                                        :bname,
                                        :emethod,
                                        :origin,
                                        :properties,
                                        :ingredients,
                                        :description,
                                        :family,
                                        :imgfile,
                                        :eoil,
                                        :boil,
                                        :other)";

$updateQuery = $pdo->prepare($updateQuery);
$updateQuery->execute($params);
$pdo = null;
print('Success');
?>

