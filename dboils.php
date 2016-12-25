<?php   /* required modules */
  require_once('include/main.php');

  $metaOptions = [
    'pageTitle'          => 'Napasha Way Essentail Oils',
    'titleContent'       => 'Napasha Way Essential Oils',
    'subjectContent'     => 'Welcome to Napasha Way',

    'keywordsContent'    => 'Essential Oils Balsam Copaiva Moringa Papaya Seabuckthorn Sweet Birch Cucumber Seed Guava Prickly Pear Calendula Marigold Clementine Orange Cypress Eucalyptus smithii Havozo Holy Basil Ravensare Turmeric Vetiver',

    'descriptionContent' => 'Artisan essential oils of rare potency. Safe usage info, recipes and other products created with these same oils of organic and/or wild crafted origins.'
  ];
?>

<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-blue" id="a">

  <? render('headerwSearch')?>

  <div class="clrfix"></div>

  <div class="context-menu--wSearch">
    <p class="ptext-cmenu"><a class="ptext-bright" href="oils.php">Essential Oils</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-family.php">Oil Families</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-botanical.php">Botanical Oils</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-blends.php">Blends</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="products.php">Other Products</a></p>
  </div>

  <main class="page-wrap">
    <div class="page-cMenu-wrap__page-title">
      <h1 class="ptext-page-title">Essential Oil Singles 5ml</h1>
      </p>
    </div>

    <div class="container-product search-success hide-me">
      <p class="ptext-center--small">
        Click 'Clear' to return to the full list of our oils.
      </p>
    </div>

    <div class="container-product search-fail hide-me">
      <p class="ptext-center--small">
        Sorry ... no matches found.
      </p>
    </div>



    <? php

    $pdo = openDB();
    $nwQuery = $pdo->query('SELECT * FROM products WHERE eoil = ORDER BY pname');

    echo '<div class="container-product">'
    echo   '<div class="cart-wrap">'
    echo     '<p class="ptext-product-name">' . $pname . ' ' . $size</p>

    echo     '<form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">'

    echo       '<input type="hidden" name="name" value = ' . $pname . ' ' . $size . '/>'
    echo       '<input type="hidden" name="price" value = ' . $retail . '/>'
    echo       '<input type="hidden" name="code" value = ' . $sku . '/>'
    echo       '<input type="hidden" name="quantity" value="quantity" />'
    echo       '<input type="hidden" name="quantity_min" value="1" />'
    echo       '<input type="hidden" name="quantity_max" value="1" />'
    echo       '<input type="hidden" name="category" value="5MLB" />'

    echo       '<label class="cart-label-left">' . $retail . '&nbsp; Qty &nbsp;</label>'
    echo       '<input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />'
    echo       '<input class="form-cartbutton" type="submit" value="Add to Cart" />'
    echo     '</form>'
    echo   '</div>'

    echo   '<p class="ptext-no-just">'
    echo     'Botanical Name: ' . $bname
    echo     '<br>'
    echo     '<br> Extraction: ' . $emethod
    echo     '<br>'
    echo     '<br> Origin: ' . $origin
    echo     '<br>'
    echo     '<br>'
    echo   '</p>'

    echo   '<div class="container-img-product">'
    echo     '<img class="img-ml5" alt="Five milliliter bottle with Napasha Way label" src="images/' . $imgfile . '">'
    echo   '</div>'

    echo   '<p class="ptext">'
    echo     $description
    echo     '<br>'
    echo     '<br>'
    echo     $properties
    echo   '</p>'

    echo   '<p class="ptext-italic">'
    echo     'These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.'
    echo   '</p>'

    echo   '<div class="clrfix"></div>'
    echo '</div>'

    ?>




<!--
    <div class="container-product">
      <div class="cart-wrap">
        <p class="ptext-product-name"><? $pname . ' ' . $size ?></p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value = <? $pname . ' ' . $size ?> />
          <input type="hidden" name="price" value = <? $retail ?> />
          <input type="hidden" name="code" value = <? $sku ?> />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left"> <? $retail ?> &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Botanical Name: <? $bname ?>
        <br>
        <br> Extraction: <? $emethod ?>
        <br>
        <br> Origin: <? $origin ?>
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with Napasha Way label" src="images/<? $imgfile ?>">
      </div>

      <p class="ptext">
        <? $description ?>
        <br>
        <br>
        <? $properties ?>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>
-->




  <?php render('footer')?>

</body>

</html>
