<?php   /* required modules */
  require_once('include/main.php');

  $metaOptions = [
    'pageTitle'       => 'Napasha Way',
    'titleContent'    => 'Napasha Way Essential Oils',
    'subjectContent'  => 'Welcome to Napasha Way',
    'keywordsContent' => 'Essential Oils Napasha Spirit Mission'
  ];
?>

<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-blue" id="mission">

  <?php render('header')?>

  <main class="page-wrap-large">
    <article class="article--large">   <!-- Our Mission -->
      <h1 class="header--vertical-margin">Our Mission</h1>

      <p class="ptext">
        Jim and I are committed to a lifestyle that is simple, healthy, and nourishing to our spirit. As we started our journey into healing and wholeness, there were so many choices to make and so much disinformation to wade through. We decided to turn down the volume on the world and make choices that were good for our family.
        <br>
        <br>
      </p>

      <img class="img-breath" alt="Artist conception of breath" src="images/breath.jpg">

      <p class="ptext">
        That is why we are committed to providing top quality artisan essential oils, essential oil blends, products and recipes. There are many simple changes that families can make to promote health and healing. These changes come one choice at a time, and they can save you money as well; for well chosen items in your cupboard can serve many health issues.
        <br>
        <br> Simplicity. Breathing and flowing with our spirit. That’s the Napasha Way and we are honored to share this with you.
        <br>
        <br> Sincerely,

        <br>
        <br> Jim and Char Milliman
        <br>
        <br>
        <br>
      </p>
      <div id="napasha"></div>
    </article>

    <article class="article--large">   <!-- What Is Napasha? -->
      <h1 class="header--vertical-margin">So ... what is Napasha?</h1>

      <p class="ptext">
        Napash is the well-spring of spirit flowing into the world. We breathe in Napash when we are open to receive our divine nature. Napash exists in all the physical gifts of life that we are given: it flows through nature in the air we breathe, the food we eat, and the water we drink. The closer to nature and more whole our food and drink, the more Napash they contain.
        <br>
        <br> Napasha is the awareness of this essence and living in it's flow.
        <br>
        <br> Essential oils are extracted from plants and have been used for thousands of years. They are highly concentrated and used in small amounts. They are powerful in their abilities to help the body heal itself.
        <br>
        <br> The contents in this website are not solely mine. There is a universal knowledge of essential oils and herbs that exists because of every person who has studied plants and their benefits over thousands of years. I am grateful for this body of knowledge, and I am happy to add to it and share what I have learned.
        <br>
        <br>
        <br>
      </p>
      <div id="contactus"></div>
    </article>

    <article class="article--large">   <!-- Contact Us -->
      <h1 class="header--vertical-margin">How to Reach Us</h1>

      <div class="contact-us--left">
        <p class="ptext-med">
          Napasha Essential Oils
          <br> 59 Napasha Ln
          <br> Buffalo MO 65622
          <br> (417) 733-6837
          <br>
          <br>
        </p>
        <a class="ptext-med link-style" href="mailto:james@napashaway.com">james@napashaway.com</a>
        <br>
        <a class="ptext-med link-style" href="mailto:char@napashaway.com">char@napashaway.com</a>
        <br>
        <br>
      </div>

      <div class="contact-us--right">
        <img class="img-contact-us" alt="Reach out to us" src="images/au-reachus.jpg">
      </div>

      <div class="clrfix">&nbsp;</div>
    </article>
  </main>

  <?php render('footer')?>

</body>

</html>
