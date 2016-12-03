<?php

define('DB_SERVER', "localhost");
define('DB_USER', 'nwaccess');
define('DB_PASSWORD', 'nwaccess');
define('DB_NAME', "nw");
define('DB_CHARSET', "utf8");



function render($filename, $params = array())
{
  $path = 'templates/' . $filename . '.php';
  extract($params);
  require($path);
}



function meta($params)
{
  extract($params);

  echo "<meta NAME = '$metaName' CONTENT = '$metaContent'";
}



//function quoWrap($field) {
//  $fieldContents = ($field != '' ? '"' . $field . '"' : '');
//  return $fieldContents;
//}



function openDB() {
  $opt = [
    PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES   => false
  ];

  $dsn   = 'mysql:host='. DB_SERVER .';dbname='. DB_NAME .';charset=' . DB_CHARSET;
  $nwpdo = new PDO($dsn, $_SESSION['user'], $_SESSION['password'], $opt);

  return($nwpdo);
}

?>