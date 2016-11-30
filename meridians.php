<?php   /* required modules */
  require_once('include/main.php');

  $metaOptions = [
    'pageTitle'          => 'Napasha Way Essentail Oils',
    'titleContent'       => 'Napasha Way Essential Oils',
    'subjectContent'     => 'Welcome to Napasha Way',

    'keywordsContent'    => 'Essential Oils Liver Gallbladder Small Intestine Kidney Governing Vessel Stomach Spleen Large Intestine',

    'descriptionContent' => 'I am grateful for the understandings that the Oriental healing traditions offer us; particulary their knowledge of energy meridians and '
  ];
?>
<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-blue">

  <? render('header')?>

  <main class="page-wrap-large">
    <article class="article--large">
      <!--  Understanding Meridians  -->
      <h1 class="header--vertical-margin">Understanding the Meridians</h1>

      <p class="ptext">
        I am grateful for the understandings that the Oriental healing traditions offer us; particulary their knowledge of energy meridians and the corresponding tai chi and Qi gong healing methods.
        <br>
        <br> Energy meridians show us the pathways that our spirit and universal energies use to flow through our body. These meridians feed the major organs and organ systems, which in turn affect every cell within us. By learning to use these energies, we can stimulate movement and clear blockages in our energy patterns. We can also eat foods, use essential oils, herbs and perform Qi Gong exercises to cause these energies to open, flow and stimulate self-healing.
        <br>
        <br>

        <img class="img-center-large" alt="Governing Vessel Meridian Diagram" src="images/meridianGV.gif">

        <span class="ptext-bold">A simple start to learning energy meridians:</span> work with the starting point and ending point for each meridian.
        <br>
        <br> When you locate these points, place your left hand (using pointer and middle finger) on either the starting/ending point and the right hand (pointer and middle finger) on the starting/ending point of the meridian. Close your eyes and let yourself feel the energy movement. Observe first. If it does not seem to be moving, gently begin breathing energy into the meridian. Breathe in through the top of your head (GV 21) and also breathe in to the medulla oblongata at the base of the back of your neck (the indent between the occiputs). As you breathe, you may feel a pulse like a peristalsis as it begins to open. Once you feel this movement, create a figure eight between your fingertips and visualize the energy moving in a figure eight; revitalizing the energy meridian, organs and cells of that meridian. Don’t try to control the energy flow or spin.
        <br>
        <br> Direct any thoughts, emotions or blocked energy to leave the body through the most efficient pathway. It is helpful to visualize the color of the meridian moving through these points as you work. You can do this daily to stimulate the health of the meridian(s) you are working with. It is a powerful start to self-healing.
        <br>
        <br>
      </p>
      </article>
  </main>

  <?php render('footer')?>

</body>

</html>
