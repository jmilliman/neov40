<?php   /* required modules */
  require_once('include/main.php');

  $metaOptions = [
    'pageTitle'          => 'Napasha Way Essentail Oils',
    'titleContent'       => 'Napasha Way Essential Oils',
    'subjectContent'     => 'Welcome to Napasha Way',

    'keywordsContent'    => 'Essential Oils Attitude Healthy Mindset Thoughts DNA Genetics',

    'descriptionContent' => 'Essential Oils can be extremely helpful in releasing mindsets, but they still require our choice or free will to choose change. Then essential oils are able to help release, transition and embrace new choices'
  ];
?>

<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-blue">

  <?php render('header')?>

  <div class="context-menu">
    <p class="ptext-cmenu"><a class="ptext-dim" href="attitude.php">Attitude</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="dna.php">DNA &amp; Genetics</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="mindset.php">Healing Mindset</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-bright" href="thoughts.php">Healthy Thoughts</a></p>
    <br>
  </div>

  <main class="page-wrap">
    <article class="article--small">
      <!-- Healthy Thoughts -->
      <h1 class="header--vertical-margin">Embracing Healthy Thoughts</h1>

      <img class="img-sidebar" alt="Artistic drawing of the brain" src="images/brain-large.jpg">

      <p class="ptext">
        The oils listed here support changes in thoughts and emotions. Use them alone or mix a combination you like. There is no right or wrong, but it is important that you are attracted to the scent(s) chosen. If you are unsure, start with one essential oil and add others as you build confidence.
        <br>
        <br> Use them in a diffuser, on a handkerchief, or place a few drops on a cotton ball during the day or just before bed. You may choose to carry it with you and smell the oil(s) throughout the day or add carrier oil and apply the mixture to the pulse points behind your ears and on your wrists. Add 10-15 drops to your bath and enjoy a glorious soak in the tub.
        <br>
        <br> Our sense of smell is a powerful tool. Many of us have experienced a smell that takes us back to a childhood memory - of fears or things we have loved. Use your thoughts and essential oils to cause positive memories that will aid your health and success in life.
        <br>
        <br> It is most beneficial to use these oils in conjunction with Affirmations and Meditation.

        <div class="callout-large--center">
          <p class="ptext-small">
            <span class="ptext-small-bold">Anger Free</span> – Bergamot, Jasmine, Lemon, Neroli, Orange, Patchouli, Petitgrain, Roman Chamomile, Vetiver and Ylang Ylang.
            <br>
            <br>

            <span class="ptext-small-bold">Confidence</span> – Bay Laurel, Bergamot, Cypress, Grapefruit, Jasmine, Nutmeg, Orange, Peppermint and Rosemary.
            <br>
            <br>

            <span class="ptext-small-bold">Clarity</span> (from unproductive thoughts &amp; feelings) – Basil, Bergamot, Clary Sage, Bitter Orange, Grapefruit, Jasmine, Lavender, Lemon, Marjoram, Neroli, Clementine Orange, Frankincense, Rosemary and Vetiver.
            <br>
            <br>

            <span class="ptext-small-bold">Energize</span> – Clary Sage, Cardamom, Frankincense, Grapefruit, Jasmine, Lemon, Orange, Sandalwood and Vetiver.
            <br>
            <br>

            <span class="ptext-small-bold">Grief (Release &amp; Acceptance)</span> – Bitter Orange, Cypress, Frankincense, Grapefruit, Helichrysum, Lemon, Mandarin, Marjoram, Neroli, Palma Rosa, Rose Geranium and Rose Otto.
            <br>
            <br>

            <span class="ptext-small-bold">Happiness (Embracing Change &amp; Learning)</span> – Basil, Bergamot, Cedarwood, Frankincense, Jasmine, Orange, Sandalwood and Ylang Ylang.
            <br>
            <br>

            <span class="ptext-small-bold">Trust &amp; Faith (Releasing Insecurity)</span> – Basil, Bergamot, Cedarwood, Orange, Peppermint and Vetiver.
            <br>
            <br>

            <span class="ptext-small-bold">Love</span> – Champaca, Frankincense, Jasmine, Neroli and Rose Otto.
            <br>
            <br>

            <span class="ptext-small-bold">Love Myself (Depression free)</span> – Neroli, Clary Sage, Rose Geranium, Grapefruit, Helichrysum, Jasmine, lavender, Lemon, Orange, Rose, Sandalwood, Vetiver and Ylang Ylang.
            <br>
            <br>

            <span class="ptext-small-bold">Memory &amp; Concentration</span> - Basil, Black Pepper, Cypress, Hyssop, Peppermint and Rosemary.
            <br>
            <br>

            <span class="ptext-small-bold">Panic Free</span> – Bergamot, Frankincense, Helichrysum, Lavender, Mandarin and Neroli.
            <br>
            <br>

            <span class="ptext-small-bold">Peace (Release Anxiety)</span> – Cedarwood, Clary Sage, Frankincense, Lavender, Mandarin, Neroli, Patchouli, Roman Chamomile, Rose Otto, Sandalwood and Spikenard.
            <br>
            <br>
          </p>
        </div>
    </article>
  </main>

  <?php render('footer')?>

</body>

</html>
