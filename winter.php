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

  <?php render('header')?>

  <main class="page-wrap-large">
    <article class="article--large">
      <h1 class="badscript-large"><strong>Winter</strong></h1>
      <h2 class="header--vertical-margin">The Kidney and Bladder Meridians</h2>

      <img class="img-full-width" src="images/winter-small-v1.jpg"
           srcset="images/winter-large-v1.jpg 1280w,
                   images/winter-medium-v1.jpg 768w,
                   images/winter-small-v1.jpg 420w"
           sizes="100vw"
           alt="Photo of snow and blue sky">

      <img class="img-left" alt="Kidney Meridian Diagram" src="images/meridianKD.gif">


      <p class="ptext">
        <span class="ptext-bold">THE KIDNEY MERIDIAN - YIN</span>
        <br>
        <br> The Kidney meridian starts at the bottom center of the foot and comes up over the ankle on the inside of the foot, travels up the leg to the knee on the inside, then up to the abdomen along the groin, up along the torso, in a line parallel to the midline of the body, and ends on the clavicle. It has 27 acupressure points.
        <br>
        <br> The Kidney Circadian rhythm is from 5:00 pm – 7:00 pm. This is a time of regeneration for the Kidneys. It is particularly helpful to do exercises and direct healing energies at this time.
        <br>
        <br>

        <span class="ptext-bold">Foods that nourish the Kidneys:</span>&nbsp; Seaweeds, wakame, lettuce, watercress, endive, escarole, turnip, celery asparagus, oats, quinoa, miso, tamari, millet, string beans, black beans, kidney beans, melons, watermelon, blackberries, blueberries, water chestnut, black sesame seeds or oil, potato, sardines, crab, clams, eggs, cheese, fenugreek, and walnuts. Drink lemon water.
        <br>
        <br>
      </p>

      <p class="ptext-large">Essential oils for Kidney health:</p>

      <p class="ptext-no-just">
        <span class="ptext-bold">Tonics:</span>&nbsp; Lemon and Cedar Atlas.
        <br>
        <br>

        <span class="ptext-bold">Kidney support:</span>&nbsp; Blue Hemlock, Cayenne, Geranium, Rose Geranium.
        <br>
        <br>

        <span class="ptext-bold">Cleansing:</span>&nbsp; Lemon and Juniper berry.
        <br>
        <br>

        <span class="ptext-bold">Infection and cleansing:</span>&nbsp; White fir and Lemon.
        <br>
        <br>
      </p>

      <p class="ptext-large">Herbs for Kidney health:</p>

      <p class="ptext-no-just">
        Goldenrod, Hydrangea Root, Horsetail, Celery Root, Gravel Root, Uva Ursi, Marshmallow Root, Parsley and Dandelion Root.
      </p>

      <div class="clrfix"></div>

      <div class="callout-medium--center">
        <p class="badscript">
          <span class="ptext-med-bold">The Winter Meridians</span>
        </p>

        <table class="badscript">
          <tr>
            <td>Element:</td>
            <td>Water</td>
          </tr>
          <tr>
            <td>Color:</td>
            <td>Blue</td>
          </tr>
          <tr>
            <td>Organs:</td>
            <td>Kidneys &amp; Bladder</td>
          </tr>
          <tr>
            <td>Sense:</td>
            <td>Ears</td>
          </tr>
          <tr>
            <td>Flavor:</td>
            <td>Salty</td>
          </tr>
          <tr>
            <td>Fluid:</td>
            <td>Spittle</td>
          </tr>
          <tr>
            <td>Emotion:</td>
            <td>Fear</td>
          </tr>
          <tr>
            <td>Sound:</td>
            <td>Groaning</td>
          </tr>
        </table>
      </div>

      <img class="img-center-large" alt="Bladder meridian diagram" src="images/meridianBL.gif">

      <p class="ptext">
        <span class="ptext-bold">THE BLADDER MERIDIAN - YANG</span>
        <br>
        <br> The Bladder meridian begins at the inside corner of the eye, travels up and over the head and down the neck; down along the neck parallel to the spinal column, down to the bottom of the spine; then back up the spinal column, parallel the spine; then down the back of the leg, over the back of the knee; down the calf and then over the outside of the leg, ending at the little point on the toe, on the outside of the toe. The Bladder is the largest meridian with 67 acupressure points.
        <br>
        <br>

        <span class="ptext-bold">Foods for Bladder health:</span>&nbsp; Blueberries, pears, apples, spring water, herbal tea, cranberries, yogurt and fermented dairy products, garlic, peanuts and cinnamon.
        <br>
        <br> The Bladder Circadian rhythm is from 7:00 pm – 9:00 pm. This is a time of regeneration for the bladder. It is particularly helpful to do exercises and direct healing energies at this time.
        <br>
        <br>
      </p>

      <p class="ptext-large">Essential oils for Bladder health:</p>

      <p class="ptext-no-just">
        Geranium, Lemon, Lemon Myrtle, Red Myrtle, Rose Geranium, Sweet fennel, and White fir.
        <br>
        <br>

        <span class="ptext-bold">Cystitis:</span>&nbsp; Balsam Copaiba.
        <br>
        <br>
      </p>

      <p class="ptext-large">Herbs for Bladder health:</p>

      <p class="ptext-no-just">
        Chamomile, Dandelion, Nettle, Fennel, Gravel Root, Cleavers and Cough Grass.
        <br>
        <br>
      </p>
      <div class="clrfix"></div>
    </article>
  </main>

  <?php render('footer')?>

</body>

</html>
