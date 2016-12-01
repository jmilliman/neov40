<?php
  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  require_once('include/main.php');

  error_reporting(E_ALL);
  ini_set("display_errors", 1);

  define('PATH', "/dbmaint.php");

  $metaOptions = [
    'pageTitle'          => 'Napahsa Way Product Maintenance',
    'titleContent'       => 'Napasha Way Product Maintenance',
    'subjectContent'     => 'Napasha Way Product Maintenance',
    'keywordsContent'    => '',
    'descriptionContent' => ''
  ];


  $opt = [
    PDO::ATTR_ERRMODE             => PDO:: ERRMODE_EXCEPTION,
    PDO::ATTR_DEFAULT_FETCH_MODE  => PDO::FETCH_ASSOC,
    PDO::ATTR_EMULATE_PREPARES    => false
    ];

  $dberror     = false;
  $submiterror = false;
  $loginerror  = false;
  $dsn         = 'mysql:host=' . DB_SERVER . ';dbname=' . DB_NAME . ';charset=' . DB_CHARSET;
  $pdo         = new PDO($dsn, DB_USER, DB_PASSWORD, $opt);

  if (isset($_POST["cancel"]))
  {

    $host = $_SERVER['HTTP_HOST'];
    $pdo = null;
    header("LOCATION: http://$host");
    exit;
  }

  if (isset($_POST['login']))
  {
    if (empty($_POST['user']) || empty($_POST['pass']))
    {
      $submiterror = true;
    } else {
      $submiterror = false;
      $user        = $_POST['user'];
      $password    = $_POST['pass'];
      $query       = "SELECT * FROM users WHERE username = '{$user}' AND password = '{$password}'";
      $query       = $pdo->prepare($query);
      $query->execute();
      $row         = $query->fetch();

      if ($row['username'] == $user && $row['password'] == $password)
      {
        $_SESSION['authenticated'] = true;
        $_SESSION['user'] = $_POST['user'];
        $host = $_SERVER['HTTP_HOST'];
        $path = PATH;

        header("LOCATION: http://$host$path");
        exit;
      } else {
        $loginerror = true;
      }
    }
  }
?>



<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-admin">

  <?php render('header')?>

  <div class="page-wrap-large">
    <div class="article--large">
      <h1 class="neo-dark-blue">Product Database Maintenance</h1>
      <h2 class="neo-dark-blue">Login</h2>


      <form action = "<?= $_SERVER['PHP_SELF'] ?>" method = "post">
        <table class="dbform-login ptext">
          <tr>
            <td>Username:</td>
            <? if (isset($_POST['user'])): ?>
              <td><input name="user" type="text" value=<? echo $_POST['user'] ?>></td>
            <? else: ?>
              <td><input name="user" type="text" value="jmilliman"></td>
            <? endif ?>
          </tr>

          <tr>
            <td>Password:</td>
            <? if (isset($_POST['pass'])): ?>
              <td><input name="pass" type="password" value=<? echo $_POST['pass'] ?>></td>
            <? else: ?>
              <td><input name="pass" type="password" value="carter"></td>
            <? endif ?>
          </tr>

          <tr>
            <td></td>
            <td>
              <input type="submit" name="login" value="Login">
              <input type="submit" name="cancel" value="Cancel">
            </td>
          </tr>
        </table>
      </form>

      <div>
        <? if ( !($dberror) && !($submiterror) && !($loginerror) ): ?>
          <p class="dbform-errormsg dbform-msg">&nbsp;</p>
        <? endif ?>

        <? if ($dberror): ?>
            <p class="dbform-errormsg">Database Connection Failed</p>
        <? endif ?>
        <? if ($submiterror): ?>
            <p class="dbform-errormsg">Username and Password Required</p>
        <? endif ?>
        <? if ($loginerror): ?>
            <p class="dbform-errormsg">Login Failed</p>
        <? endif ?>
      </div>



    </div>
  </div>

    <?php render('footer')?>

</body>

</html>
