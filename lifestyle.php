<?php   /* required modules */
  require_once('include/main.php');

  $metaOptions = [
    'pageTitle'          => 'Napasha Way Essentail Oils',
    'titleContent'       => 'Napasha Way Essential Oils',
    'subjectContent'     => 'Welcome to Napasha Way',

    'keywordsContent'    => 'Essential Oils Change Joy Lifestyle Healthy Eating',

    'descriptionContent' => 'Taking responsiblity and make the commitment to exercise this ability to change toward a healthier you is an exciting lifestyle change that comes with many unexpected rewards.'
  ];
?>

<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-blue">

  <?php render('header')?>

  <div class="context-menu">
    <p class="ptext-cmenu"><a class="ptext-bright" href="lifestyle.php">Lifestyle</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="change.php">Change &amp; Joy</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="eating.php">Eating Healthy</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="parent.php">Natural Parent</a></p>
    <br>
  </div>

  <main class="page-wrap">
    <article class="article--small">
      <!-- Lifestyle -->
      <h1 class="header--vertical-margin">Living a New Lifestyle</h1>

      <p class="ptext">
        Discovering you have the inherent ability to heal yourself is a powerful moment.
        <br>
        <br> Taking responsiblity and make the commitment to exercise this ability to change toward a healthier you is an exciting lifestyle change that comes with many unexpected rewards.
        <br>
        <br> The health that you were meant to enjoy and maintain is not solely contained in the physical body, rather it includes spiritual, mental and emotional health.
        <br>
        <br>
        <br>
      </p>
    </article>
  </main>

  <?php render('footer')?>

</body>

</html>
