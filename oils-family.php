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
    <p class="ptext-cmenu-italic"><a class="ptext-bright" href="oils-family.php">Oil Families</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-eucalyptus.php">Eucalyptus Family</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-lavender.php">Lavender Family</p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-orange.php">Orange Family</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-rosemary.php">Rosemary Family</a></p>
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
      <!-- Oil Families -->
      <h1 class="header--vertical-margin">Essential Oil Families</h1>

      <img class="img-center-large" src="images/oils-family.jpg" alt="Paper cutout of a family holding hands">

      <p class="ptext">
        Welcome to our 'Essential Oil Families' page where we group together essential oils that are distilled from plants that belong in the same family. We felt this may be helpful since an alphabetical list of oils, such as our 'Essential Oil Singles' page, do not necessarily group the oils of the same family together.
        <br>
        <br>
      </p>
    </article>

    <nav class="oil-family-links">
      <p class="ptext-center">Our Families.
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
      <a class="link-style" href="oils-rosemary.php">Rosemary Family</a>
      <br>
      <br>
      <a class="link-style" href="oils-teatree.php">Tea Tree Family</a>
      <br>
      <br>
      </p>
    </nav>
  </main>

  <?php render('footer')?>

</body>

</html>
