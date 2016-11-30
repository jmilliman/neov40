<?php   /* required modules */
  require_once('include/main.php');

  $metaOptions = [
    'pageTitle'       => 'Napasha Way Essentail Oils',
    'titleContent'    => 'Napasha Way Essential Oils',
    'subjectContent'  => 'Welcome to Napasha Way',

    'keywordsContent' => 'Essential Oils Candida Albicans Diabetes Type 2 Disease',

    'descriptionContent' => 'About dis-ease and the flow of energy'
  ];
?>

<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-blue">

  <?php render('header')?>

  <div class="context-menu">
    <p class="ptext-cmenu"><a class="ptext-bright" href="dis-ease.php">About Dis-ease</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="candida.php">Candida</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="diabetes.php">Diabetes</a></p>
    <br>
  </div>

  <main class="page-wrap">
    <article class="article--small">
      <h1 class="header--vertical-margin">What is Dis-ease?</h1>

      <p class="ptext">
        What is dis-ease? It is the separation from the comfort of body or mind. By shifting our perspective to the truth, that we are a spirit having a physical experience; we begin to release all the thoughts that are causing the separation and can then restore the flow of energy between spirit, mind and body.
        <br>
        <br>

        <span class="ptext-italic">The FDA has not evaluated or approved of this website or its contents.  This website is not intended to substitute for medical advice.</span>
        <br>
        <br>
        <br>
      </p>
    </article>
  </main>

  <?php render('footer')?>

</body>

</html>
