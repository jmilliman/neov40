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

<body class="body-blue">

  <?php render('header')?>

  <div class="context-menu">
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils.php">Essential Oils</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-family.php">Oil Families</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-eucalyptus.php">Eucalyptus Family</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-lavender.php">Lavender Family</p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-orange.php">Orange Family</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-bright" href="oils-rosemary.php">Rosemary Family</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-teatree.php">Tea Tree Family</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-botanical.php">Botanical Oils</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-blends.php">Blends</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="products.php">Other Products</a></p>
    <br>
  </div>

  <main class="page-wrap">
    <article class="container-product">
      <!-- Rosemary Family -->
      <h1 class="header--vertical-margin">The Rosemary Family</h1>

      <p class="ptext">
        Rosemary is a wonderful spice for foods, but it is strong in its healing properties for skin, pain, inflammation and infection. Do not use during pregnancy or lactation.
        <br>
        <br>
      </p>

      <div class="oil-family-links">
        <p class="ptext">
          Other Oil Families...
          <br>
          <br>

          <a class="link-style" href="oils-eucalyptus.php">Eucalyptus Family</a>
          <br>
          <br>
          <a class="link-style" href="oils-lavender.php">Lavender Family</a>
          <br>
          <br>
          <a class="link-style" href="oils-orange.php">Orange Family</a>
          <br>
          <br>
          <a class="link-style" href="#">Rosemary Family</a>
          <br>
          <br>
          <a class="link-style" href="oils-teatree.php">Tea Tree Family</a>
          <br>
          <br>
        </p>
      </div>

    </article>


    <div class="container-product"> <!-- Rosemary Officianalis -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Rosemary Officianalis 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Rosemary Officianalis 5ml Bottle" />
          <input type="hidden" name="price" value="16.22" />
          <input type="hidden" name="code" value="EO2200" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$16.22 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Rosmarinus officianalis, ct cineole
        <br>
        <br> Extraction: CO2 Extract
        <br>
        <br> Origin: South Africa or Italy
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-rosemary-officianalis.jpg">
      </div>

      <p class="ptext">
        Rosemary Officianalis is strongly antibacterial and anti-inflammatory. It is beneficial to the skin, helpful to dermatitis, psoriasis and even eczema. It prevents premature skin aging and is known as an oil that maintains a youthful look. It supports the liver health by flushing toxins and reducing the buildup of carcinogens in the system. Rosemary is part of a traditional remedy for hair loss.
        <br>
        <br> Properties: antibacterial, anti-inflammatory, rubefacient and anti-aging.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Rosemary Verbenone -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Rosemary Verbenone 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Rosemary Verbenone 5ml Bottle" />
          <input type="hidden" name="price" value="" />
          <input type="hidden" name="code" value="EO2220" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="0" />
          <input type="hidden" name="quantity_max" value="0" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left neo-dark-orange"><em>Out of Stock&nbsp;</em></label>
          <input disabled class="form-qtyspin" type="number" min="0" max="0" step="1" value="" name="quantity" />
          <input disabled class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Rosmarinus officianalis – ct. verbenone
        <br>
        <br> Extraction: Steam distilled from organically grown plants
        <br>
        <br> Origin: South Africa
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-rosemary-officianalis-verbenone.jpg">
      </div>

      <p class="ptext">
        Rosemary is strongly anti-inflammatory and antibacterial and goes deeply into tissue, making it a good choice for joint or muscle inflammation. It has a strong effect on the brain and nervous system, and is excellent for increasing alertness, awareness and memory. It is helpful to people with headaches or nervous exhaustion. It is very helpful to those with colitis, dyspepsia, gas, intestinal infection and liver disorders. It is helpful for asthma, whooping cough and bronchitis. It is mucolytic and breaks up phlegm and congestion.
        <br>
        <br> Rosemary should be avoided during pregnancy or by those with high blood pressure or epilepsy.
        <br>
        <br> Properties: anti-inflammatory, antibacterial, nervine, carminative, anti-catarrhal, and expectorant.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>
  </main>

  <?php render('footer')?>

</body>

</html>
