<?php
  session_start();
  error_reporting(E_ALL);
  ini_set('display_errors', 1);
  require_once('include/main.php');

  $metaOptions = [
  'pageTitle'          => 'Napahsa Way Product Maintenance',
  'titleContent'       => 'Napasha Way Product Maintenance',
  'subjectContent'     => 'Napasha Way Product Maintenance',
  'keywordsContent'    => '',
  'descriptionContent' => ''
  ];

  $sku         = "";
  $pname       = "";
  $size        = "";
  $wholesale   = "";
  $retail      = "";
  $distprice   = "";
  $distrate    = "";
  $bname       = "";
  $emethod     = "";
  $origin      = "";
  $properties  = "";
  $ingredients = "";
  $description = "";
  $family      = "";
  $imgfile     = "";
  $eoil        = "";
  $boil        = "";
  $other       = "";
  $oldsku      = "";

  $_SESSION['origsku'] = (isset($_SESSION['origsku']) ? $_SESSION['origsku'] : 'notset');

?>






<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-admin">

  <?php render('header')?>

  <div id="js-overlay"></div>


    <form id="js-dbDeleteModal" class="dbDeleteModal">
      This action is permanent.
      <br>
      <br>
      <p class="dbDeleteProduct"></p>
      <br>
      <br>
      <input type="button" name="delete" value="Yes - Delete" onclick="deleteProduct()">
      <input type="button" name="abort" value="No - Bailout" onclick="fetchProduct('cancelDelete')">
    </form>

    <form id="js-dbSaveModal" class="dbSaveModal">
      Whoa Nellie ! ! !
      <br>
      <br>
      Changes Detected
      <br>
      <br>
      <br>
      <input type="button" name="save" value="Save Changes" onclick="saveProduct('SaveModal')">
      <input type="button" name="nosave" value="Discard Changes" onclick="fetchProduct('Cancel')">
    </form>

    <form id="js-dbInsertModal" class="dbSaveModal" onclick="toggleInsertModal('Off')">
      Forget Something ... ?
      <br>
      <br>
      SKU and Product Name are required fields.
      <br>
      <br>
      <br>
      <input type="button" name="ok" value="OK">
    </form>

  <h1 class="db-title neo-white">Product Maintenance</h1>

  <form class="dbinput-wrapper">



    <select id="js-skuSelect" class="dbform-picklist" name="selectedSku" onchange="fetchProduct('Fetch')">

      <?php
      $pdo = openDB();
      $nwQuery = $pdo->query('SELECT sku, pname FROM products ORDER BY pname');
      echo "<option disabled selected>Select a product...</option>";
      while ($row = $nwQuery->fetch()) {
        echo "<option value=" . $row['sku'] . ">" . $row['sku'] . ' : ' . $row['pname'] . " </option>";
      }
      $pdo=null;
      ?>

    </select>



    <div class="dbbutton-wrap">
      <input type="button" name="dbsave" value="Save" onclick="saveProduct()">
      <input type="button" name="dbcancel" value="Cancel" onclick="fetchProduct('Cancel')">
      <input type="button" name="dbadd" value="Add" onclick="setAddEnv('Add')">
      <input type="button" name="dbdelete" value="Delete" id="js-delButton" disabled onclick="confirmDelete()">
      <input id="js-changed" type="hidden" name="changed" value="notChanged">
    </div>



    <div class="dbinput-col-1-5">
      SKU:
      <input id="js-sku" name="sku" type="text" onchange="setChangeFlag()" value=<? echo $sku ?>>
    </div>

    <div class="dbinput-col-1-5">
      Wholesale: $
      <input id="js-wholesale" name="wholesale" type="number" step=".01" onchange="setChangeFlag()" value=<? echo $wholesale ?>>
    </div>

    <div class="dbinput-col-1-5">
      Retail: $
      <input id="js-retail" name="retail" type="number" step=".01" onchange="setChangeFlag()" value=<? echo $retail ?>>
    </div>

    <div class="dbinput-col-1-5">
      Distributor: $
      <input id="js-distprice" name="distprice" type="number" step=".01" onchange="setChangeFlag()" value=<? echo $distprice ?>>
    </div>

    <div class="dbinput-col-1-5">
      Dist. Rate (%):
      <input id="js-distrate" name="distrate" type="number" step=".01" onchange="setChangeFlag()" value=<? echo $distrate ?>>
    </div>

    <div class="dbinput-col-1-2">
      Product Name:
      <input id="js-pname" name="pname" type="text" size="36" maxlength="32" onchange="setChangeFlag()" value=<? echo $pname ?>>
    </div>

    <div class="dbinput-col-1-2">
      Botanical Name:
      <input id="js-bname" name="bname" type="text" size="48" maxlength="64" onchange="setChangeFlag()" value=<? echo $bname ?>>
    </div>

    <div class="dbinput-col-2-3">
      Description:
      <textarea id="js-description" name="description" onchange="setChangeFlag()" ><? echo $description ?></textarea>
    </div>

    <div class="dbinput-col-1-3">
      Origin:
      <input id="js-origin" name="origin" type="text" size="32" onchange="setChangeFlag()" value=<? echo $origin ?>>
    </div>

    <div class="dbinput-col-1-3">
      Family:
      <input id="js-family" name="family" type="text" size="32" onchange="setChangeFlag()" value=<? echo $family ?>>
    </div>

    <div class="dbinput-col-1-3">
      Size:
      <input id="js-size" name="size" type="text" size="32" maxlength="32" onchange="setChangeFlag()" value=<? echo $size ?>>
    </div>

    <div class="dbinput-col-1-3">
      Img Filename:
      <input id="js-imgfile" name="imgfile" type="text" size="24" maxlength="32" onchange="setChangeFlag()" value=<? echo $imgfile ?>>
    </div>

    <div class="dbinput-col-1-3">
      Product Catagory
      <br>
      <br>
      <input id="js-eoil" type="radio" name="cat" onchange="setChangeFlag()" value=<? echo $eoil ?>> Essential Oil
      <br>
      <br>
      <input id="js-boil" type="radio" name="cat" onchange="setChangeFlag()" value=<? echo $boil ?>> Botanical Oil
      <br>
      <br>
      <input id="js-other" type="radio" name="cat" onchange="setChangeFlag()" value=<? echo $other ?>> Other Product
    </div>

    <div class="dbinput-col-2-3">
      Extraction:
      <textarea id="js-emethod" name="emethod" onchange="setChangeFlag()" ><? echo $emethod ?></textarea>
    </div>

    <div class="dbinput-col-2-3">
      Properties:
      <textarea id="js-properties" name="properties" onchange="setChangeFlag()" ><? echo $properties ?></textarea>
    </div>

    <div class="dbinput-col-2-3">
      Ingredients:
      <textarea id="js-ingredients" name="ingredients" onchange="setChangeFlag()" ><? echo $ingredients ?></textarea>
    </div>
  </form>

  <?php render('footer') ?>

</body>

</html>
