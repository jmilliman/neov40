<?php   /* required modules */
  require_once('include/main.php');

  $metaOptions = [
    'pageTitle'          => 'Napasha Way Essentail Oils',
    'titleContent'       => 'Napasha Way Essential Oils',
    'subjectContent'     => 'Welcome to Napasha Way',

    'keywordsContent'    => 'Essential Oils Massage Therapy LMT',

    'descriptionContent' => 'Lay on a contoured table and let the world slip away while you are freed of stress, aches and pains that fade into 60 minutes of relief that you will never want to end.'
  ];
?>

<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-blue">

  <?php render('header')?>

  <main class="page-wrap-large">
    <article class="article--large"> <!-- Benefits of Massage -->
      <h1 class="header--vertical-margin">Benefits of Massage Therapy</h1>

      <p class="ptext">
        Lay on a contoured table and let the world slip away while you are freed of stress, aches and pains that fade into 60 minutes of relief that you will never want to end.
      </p>

      <img class="img-full-width" src="images/massage-room-4.jpg" alt="Massage Room &amp; Table">

      <p class="ptext">
        Massage Benefits:
      </p>

      <div class="cinset">
        <p class="ptext">
          <span class="ptext-bold">Increases circulation</span>, allowing the body to pump more oxygen and nutrients into tissues and vital organs.
          <br>
          <br>

          <span class="ptext-bold">Stimulates the flow of lymph</span> – the body’s natural defense system and an important tool in removing toxins from our bodies.
          <br>
          <br>

          <span class="ptext-bold">Increases circulation</span> of blood and lymph systems and improves the skin.
          <br>
          <br>

          <span class="ptext-bold">Relaxes</span> and softens injured and overused muscles.
          <br>
          <br>

          <span class="ptext-bold">Reduces</span> spasms and cramping.
          <br>
          <br>

          <span class="ptext-bold">Releases endorphins</span> – the body’s natural painkiller - and is being used in chronic illness, injury and recovery from surgery to control and relieve pain.
        </p>
      </div>

      <p class="ptext">
        I use Napasha Way essential oils for all massages, based upon clients desires. These oils can aid in healing ligament and muscle injuries; spider and varicose veins; increase lymph circulation; support the immune system; and improve skin tone and health.
        <br>
        <br>
        <br> For an appointment contact Char Milliman, LMT at <a class="link-style" href="mailto:char@napashaway.com">char@napashaway.com</a> or call (417) 733-6837.
        <br>
        <br>
        <br>
      </p>
    </article>

    <article class="article--large"> <!-- N.O.T. -->
      <h1 class="header--vertical-margin">Neural Organization Technique</h1>

      <p class="ptext">
        Neural Organization Technique (N.O.T.) is a healing mode that uses energies and meridians of the body to work with the survival systems such as fight or flight, feeding, reproduction, breathing and immune responses.
        <br>
        <br> It can be very helpful for people dealing with TMJ, scoliosis, back and neck pain, ADD/ADHD and Dyslexia. It is a foundation stone for resetting the body to healing.
        <br>
        <br> For an appointment contact Char Milliman, LMT at <a class="link-style" href="mailto:char@napashaway.com">char@napashaway.com</a> or call (417) 733-6837.
        <br>
        <br>
        <br>
      </p>
    </article>

    <article class="article--large"> <!-- Qi Gong & Tai Qi -->
      <h1 class="header--vertical-margin">Qi Gong &amp; Tai Chi</h1>

      <p class="ptext">
        Qi Gong and Tai Chi are well known healing arts that practice aligning the breath, movement and awareness. When an illness or injury occurs, there is an impediment to the flow of energy through one or more meridians that in turn affects the organs and tissues of the body.
        <br>
        <br> By using specific stances and movements aligned with the breath and awareness, one can free the blockage of energy, release the impediment and allow healing to occur.
        <br>
        <br> Jim has been practicing Tai Chi and Qi Gong for the past 18 years. He is available for consultation, classes and breathing work.
        <br>
        <br>
      </p>
      <p class="ptext">
        Contact <a class="link-style" href="mailto:james@napashaway.com">james@napashaway.com</a>.
        <br>
        <br>
     </p>
    </article>
  </main>

  <?php render('footer')?>

</body>

</html>
