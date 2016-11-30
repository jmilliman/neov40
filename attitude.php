<?php   /* required modules */
  require_once('include/main.php');

  $metaOptions = [
    'pageTitle'       => 'Power of Attitude',
    'titleContent'    => 'Napasha Way Essential Oils',
    'subjectContent'  => 'Welcome to Napasha Way',

    'keywordsContent' => 'Essential Oils Attitude Healthy Mindset Thoughts DNA Genetics',

    'descriptionContent' => 'Oils can be extremely helpful in releasing mindsets, but they still require our choice or free will to choose change. Then essential oils are able to help release, transition and embrace new choices'
  ];
?>

<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-blue">

  <?php render('header')?>

  <div class="context-menu">
    <p class="ptext-cmenu"><a class="ptext-bright" href="attitude.html">Attitude</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="dna.html">DNA &amp; Genetics</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="mindset.html">Healing Mindset</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="thoughts.html">Healthy Thoughts</a></p>
    <br>
  </div>

  <main class="page-wrap">
    <article class="article--small">
      <!-- Attitude & Altitude -->
      <h1 class="header--vertical-margin">Attitude &amp; Altitude</h1>

      <p class="ptext">
        Much information has come to light about the power of our thoughts and attitudes. In our home we call our thoughts “altitudes,” for depending upon this perspective we see a big picture of what is truly good for our self, family and community; or we are being selfish, and have a “low altitude,” wanting what we want regardless of the consequences to ourselves or others.
        <br>
        <br>
        <img class="img-full-width" alt="Photo of mountain pass" src="images/altitude-v2.jpg">

        Attitudes can be habits we have learned from others or choices we’ve made from our own experiences. Either way, attitudes are choices we can change. If we are sad, it is our thoughts that change the feeling. If we are angry, it is our choice to stay angry or release it (read <a class="ptext" href="mindset.html"><span class="ptext-italic">Healing Mindset)</span>.</a> Doctor Elisabeth Kubler Ross noted that there are five stages of grieving when one experiences the death of a loved one: denial, anger, bargaining, depression and acceptance. These stages of grief also relate to ways we may experience changes in life. A change of job, divorce, marriage, school, illness, relationships and family can be a source of stress or traumatic change. Some may experience all of these stages, while others tend towards one or two of the grieving steps.
        <br>
        <br> Are you quick to anger? Does change depress you? Do you avoid changes until you are forced into a corner (denial)? Knowing your habit makes it easier to change a thought or feeling and choose who you truly are and how you want to live.
        <br>
        <br> Oils can be extremely helpful in releasing mindsets, but they still require our choice or free will to choose change. Then essential oils are able to help release, transition and embrace new choices.
        <br>
        <br>
      </p>
    </article>
  </main>

<?php render('footer')?>

</body>


</html>
