<?php   /* required modules */
  error_reporting(E_ALL);
  ini_set("display_errors", 1);
  require_once('include/main.php');

  $metaOptions = [
    'pageTitle'       => 'Napasha Way',
    'titleContent'    => 'Napasha Way Essential Oils',
    'subjectContent'  => 'Welcome to Napasha Way',

    'keywordsContent' => 'Essential Oils Napsha Way.com Balsam Copaiva Moringa Papaya Seabuckthorn Sweet Birch Cucumber Seed Guava Prickly Pear Calendula Marigold Clementine Orange Cypress Eucalyptus smithii Havozo Holy Basil Ravensare Turmeric Vetiver',

    'descriptionContent' => 'Artisan essential oils of rare potency. Safe usage info, recipes and other products created with these same oils of organic and/or wild crafted origins.'
  ];

?>

<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-plain">

  <?php render('header')?>

  <main class="home-wrap">
    <div class="home-panel-0"> <!-- Experience Artisan Oils -->
      <h1 class="badscript-medium-plus neo-dark-blue">
        <strong>
        Experience the potency and healing properties of
        <br>
        organic and wildcrafted Artisan essential oils.
        <br>
        <br>
        </strong>
      </h1>

      <h2 class="badscript-medium neo-dark-blue">
        Pure essential oils and the knowledge to use them.
        <br>
        <br>
        <em>- seasoned with a few unique thoughts -</em>
      </h2>
    </div>

    <div class="home-panel-1"> <!-- Spring Cleansing -->

      <div class="home-panel-1--right">
        <img class="img-basic" src="images/flowers-butterfly-small.jpg"
             srcset="images/flowers-butterfly-large.jpg 1280w,
                     images/flowers-butterfly-medium.jpg 768w,
                     images/flowers-butterfly-small.jpg 420w"
             sizes="100vw"
             alt="Pink flower">
      </div>

      <div class="home-panel-1--overtext">
        <h1 class="home-panel--std-text">
        <br>
        Summer Allergies
        <br>
        <br>
        Breathe Easy
        <br>
        <br>
        <a class="neo-white" href="/blog/feature/healing-allergies/"><em>read more...</em></a>
        </h1>
      </div>

      <div class="clrfix"></div>
    </div>

    <div class="home-panel-0"> <!-- Healing as nature intended -->
      <h1 class="badscript-medium-plus neo-dark-blue">
        <strong>
        Enjoy an approach to healing and health as nature intended.
        <br>
        <br>
        </strong>
      </h1>

      <h2 class="badscript-medium neo-dark-blue">
        Pure essential oils and the knowledge to use them.
        <br>
        <br>
        <em>- become the master of your own health -</em>
      </h2>
    </div>

    <div class="home-panel-3"> <!-- Healthy Gums -->
      <img class="img-basic" src="images/bp-healthy-gums-small.jpg"
           srcset="images/bp-healthy-gums-large.jpg 1280w,
                   images/bp-healthy-gums-medium.jpg 768w,
                   images/bp-healthy-gums-small.jpg 420w"
           sizes="100vw"
           alt="Healthy Gums Blend 100ml bottle">


      <div class="home-panel-3--overtext">
        <h1 class="home-panel--large-text">
        Receding Gums?<br>
        </h1>

        <a class="home-panel--std-text" href="oils-blends.html">
          Let our Special Healthy Gums blend offer soothing aid to receding gums, gum infection and sensitive teeth.
        </a>
      </div>
    </div>

    <div class="home-panel-2"> <!-- Miron Bottles -->
      <div class="home-panel-2--left">
        <img class="img-native-size" alt="5mm Oil Bottle" src="images/5ml-lime-300.png" height="250">
      </div>

      <div class="home-panel-2--right">
        <h3 class="badscript-medium-plus neo-dark-green"><strong>Why Miron Bottles ?</strong>
          <br>
        </h3>

        <p class="badscript neo-green">
          We use Miron bottles to maintain the purity of our Essential Oils and enhance the shelf life of these precious resources.
          <br>
          <a class="neo-green" href="oils.html">See our complete offering of oils in 5ml Miron bottles.</a>
        </p>
      </div>
      <div class="clrfix"></div>
    </div>

    <div class="home-panel-7"> <!-- Recipe of the Week -->
        <div class="home-panel-7--overtext">
          <a href="recipes.html">
            <h1 class="home-panel--large-text">
            Our latest Recipe of the Week<br>
            </h1>
            <p class="home-panel--std-text">
            Facial Masks<br>
            </p>
          </a>
        </div>
    </div>
  </main>

  <?php render('footer')?>

</body>

</html>
