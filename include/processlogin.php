<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

//define('DB_SERVER', "localhost");
//define('DB_USER', "root");
//define('DB_PASSWORD', "root");
//define('DB_NAME', "nw");
//define('PATH', "/index.php");

//echo isset($_POST['user']) . '<br>';
//echo isset($_POST['pass']) . '<br>';
//echo '<br>';
//echo $_POST['user'] . '<br>';
//echo $_POST['pass'] . '<br>';

function tryagain()
{
  $host = $_SERVER['HTTP_HOST'];
  $path = '/loginform.php';
  header("LOCATION: http://$host$path");
  exit;
}

function gohome()
{
  $host = $_SERVER['HTTP_HOST'];
  $path = PATH;
  header("LOCATION: http://$host$path");
  exit;
}

//if (isset($_POST["cancel"]))
//{
//  gohome();
//}
//
//if ($_POST['user'] == '' || $_POST['pass'] == '')
//{
//  tryagain();
//}
//
//$mysqli = mysqli_connect(DB_SERVER, DB_USER, DB_PASSWORD, DB_NAME);
//
//if (mysqli_connect_errno($mysqli))
//{
//  echo 'Database connection failed';
//  exit;
//}
//
//$query = sprintf("SELECT * FROM users WHERE username = '%s' AND password='%s'",
//      mysqli_real_escape_string($mysqli, $_POST["user"]),
//      mysqli_real_escape_string($mysqli, $_POST["pass"]));
//
//$result = mysqli_query($mysqli, $query);
//
//$row = mysqli_fetch_assoc($result);
//
//if ($row['username'] == $_POST["user"] && $row['password'] == $_POST["pass"])
//{
//  $_SESSION['authenticated'] = true;
//
//  $host = $_SERVER['HTTP_HOST'];
//  $path = PATH;
//
//  mysqli_close($mysqli);
//
//  header("LOCATION: http://$host$path");
//  exit;
//} else {
//  echo 'login failed';
//  exit;
//  tryagain();
//}

?>