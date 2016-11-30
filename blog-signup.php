<?php

if($_POST["submit"]) {
    $recipient="admin@napashaway.com";
    $subject="Blog Notification Request";
    $sender=$_POST["sender"];
    $senderEmail=$_POST["senderEmail"];
    $message=$_POST["message"];

    $mailBody="Name: $sender\n\nEmail: $senderEmail\n\n\n$message";

    mail($recipient, $subject, $mailBody, "From: $sender <$senderEmail>");

    $thankYou="Thank you! Your message has been sent.";
}

?>

<!DOCTYPE html>

<html lang="en">

<head>
  <title>Blog Signup - Napasha Way Essential Oils</title>

  <meta charset="UTF-8" />

  <meta name="viewport" content="width=device-width, initial-scale=1.0" />

  <meta name="Title" CONTENT="Napasha Way Essential Oils">

  <meta name="Keywords" CONTENT="Essential Oils Candida Albicans Diabetes Type 2 Disease">

  <meta name="Description" CONTENT="Artisan essential oils of rare potency. Safe usage info, recipes and other products created with these same oils of organic and/or wild crafted origins.">

  <meta name="Subject" CONTENT="Welcome to Napasha Way">

  <meta name="p:domain_verify" content="d7054a1b3f09e7de04c68ffb8e00a11c" />
  <!-- Pintrest -->

  <link href='http://fonts.googleapis.com/css?family=Paprika|Roboto:400,300,300italic,500,500italic|Roboto+Slab:400,300|Titillium+Web:400,600|Bad+Script' rel='stylesheet' type='text/css'>

  <!--build:css css/main.min.css-->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/main.css">
  <link rel="stylesheet" href="css/media-320x413.css">
  <link rel="stylesheet" href="css/media-414x568.css">
  <link rel="stylesheet" href="css/media-569x767.css">
  <link rel="stylesheet" href="css/media-768x950.css">
  <!--endbuild-->

  <!--[if lte IE 8]>
      <script src="scripts/html5shiv.js" type="text/javascript"></script>
    <![endif]-->
</head>

<body class="body-blue">
  <header class="banner">
    <section class="banner__logo--left">
      <p class="paprika--left">
        Napasha Way
      </p>
    </section>

    <section class="banner__logo--center">
      <img class="banner__logo-img" alt="Napasha Way Logo" src="images/NEO_Logo_150.png">
    </section>

    <section class="banner__logo--right">
      <p class="paprika--right">
        Essential Oils
      </p>
    </section>

    <div class="clrfix"></div>
  </header>

  <div class="nav-wrap">
    <nav class="neo-menu">
      <div class="banner__responsive-menu">
        <a class="toggleMenu" href="#">Menu</a>
      </div>

      <ul class="neo-menu__ul">
        <li><a href="index.php">Home</a></li>

        <li><a class="parent">Store</a>
          <ul>
            <li><a href="oils.html">Essential Oil Singles</a></li>
            <li><a href="oils-family.html">Oil Families</a></li>
            <li><a href="oils-blends.html">Essential Oil Blends</a></li>
            <li><a href="oils-botanical.html">Botanical Oils</a></li>
            <li><a href="products.html">Other Products</a></li>
            <li><a href="https://napashaway.foxycart.com/cart">Cart</a></li>
          </ul>
        </li>

        <li><a href="recipes.html">Recipes</a></li>

        <li><a class="parent">Reference</a>
          <ul>
            <li><a href="aboutoils.php">All About Oils</a></li>
            <li><a href="herbalref.html">Herbal Terms</a></li>
          </ul>
        </li>

        <li><a class="parent">Health</a>
          <ul>

            <li><a class="parent">Dis-ease</a>
              <ul>
                <li><a href="dis-ease.html">About Dis-ease</a></li>
                <li><a href="candida.html">Candida</a></li>
                <li><a href="diabetes.html">Diabetes</a></li>
              </ul>
            </li>

            <li><a class="parent">Whole Living</a>
              <ul>
                <li><a href="lifestyle.html">Lifestyle</a></li>
                <li><a href="eating.html">Eating Healthy</a></li>
                <li><a href="change.html">Change &amp; Joy</a></li>
                <li><a href="parent.html">Natural Parent</a></li>
              </ul>
            </li>

            <li><a class="parent">Thoughts</a>
              <ul>
                <li><a href="attitude.html">Attitude</a></li>
                <li><a href="dna.html">DNA &amp; Genetics</a></li>
                <li><a href="mindset.html">Healing Mindset</a></li>
                <li><a href="thoughts.html">Healthy Thoughts</a></li>
              </ul>
            </li>
          </ul>
        </li>

        <li><a class="parent">Meridians</a>
          <ul>
            <li><a href="meridians.html">Introduction to Meridians</a></li>
            <li><a href="spring.html">Spring - <br><em>Liver &amp; Gallbladder</em></a></li>
            <li><a href="summer.html">Summer - <br><em>Heart &amp; Small Intestine</em></a></li>
            <li><a href="indiansummer.html">Indian Summer - <br><em>Stomach &amp; Spleen</em></a></li>
            <li><a href="autumn.html">Autumn - <br><em>Lung &amp; Large Intestine</em></a></li>
            <li><a href="winter.html">Winter - <br><em>Kidney &amp; Bladder</em></a></li>
          </ul>
        </li>

        <li><a href="massage.html">Massage</a></li>

        <li><a href="aboutus.html">About Us</a></li>

        <li><a href="blog/index.php">Blog</a>
          <ul>
            <li><a href="blog/index.php">Visit Our Blog</a></li>
            <li><a href="blog-signup.php">Sign-Up</a></li>
          </ul>
        </li>
      </ul>

      <a href="https://napashaway.foxycart.com/cart">
        <img class="neo-menu__cart-icon" src="images/shopping-cart.svg" alt="Shopping Cart">
      </a>
    </nav>
  </div>

  <div class="blog__img-container">
    <a  href="blog/index.php">
    <img src="images/blog-small.jpg" class="img-blog"
      srcset="images/blog-large.jpg 1280w,
              images/blog-medium.jpg 768w,
              images/blog-small.jpg 420w">
    </a>
  </div>

  <main class="page-wrap">
    <article class="article--small">
      <h2>Sign-up to receive a simple email notification when we post something new.</h2><br>

      <p class="ptext-center">&nbsp;<?=$thankYou ?></p>

      <div class="blog-notify__wrapper">
        <form method="post" action="blog-signup.php">
            <input class="blog-notify__input" name="sender"><br>
            <label>Name<br><br><br></label>

            <input class="blog-notify__input" name="senderEmail"><br>
            <label>Email Address<br><br><br></label>

            <textarea name="message" rows="5"></textarea><br>
            <label>Message <i>(Optional)</i><br><br><br></label>

            <input class="blog-notify__button" type="submit" name="submit" value="Submit">
        </form>
      </div>

      <p class="ptext">
        Sign-up is simple! We don't require an account or superfluous information, only the basics. We even trust your email entry ... we won't ask you to tell us twice! We promise we will not sell or otherwise share your email address and we'll only use it to send blog notifications.<br><br>
      </p>
    </article>
  </main>

  <footer class="footer-full footer-full">
    <div class="footer-full__left">
      <p class="ptext-small-bold neo-white">About Napasha Way</p>

      <p class="ptext-small neo-white">
        "We love bringing to people a lifestyle that is simple, healthy, and nourishing to the spirit. As we started our journey ..."
      </p>

      <a class="ptext-small neo-white" href="aboutus.html#mission"><em>Read more &rarr;</em></a>
      <br>
      <br>
    </div>

    <div class="footer-full__mid-left">
      <a class="ptext-small-no-just neo-white" href="thoughts.html">Healthy Thoughts</a>
      <br>
      <br>
      <a class="ptext-small-no-just neo-white" href="aboutoils.html#usingoils">How to Use Oils</a>
      <br>
      <br>
      <a class="ptext-small-no-just neo-white" href="herbalref.html">Herbal Reference</a>
    </div>

    <div class="footer-full__mid-logo">
      <img class="footer-full__logo-img" alt="Napasha Way Logo" src="images/NEO_Logo_150.png" width="150" height="150">
    </div>


    <div class="footer-full__mid-right">
      <a class="ptext-small-no-just neo-white" href="oils.html">Visit the Store</a>
      <br>
      <br>
      <a class="ptext-small-no-just neo-white" href="mailto:char@napashaway.com">Send an email</a>
      <br>
      <br>
      <a class="ptext-small-no-just neo-white" href="plcyprivacy.html">Site Policies</a>
    </div>

    <div class="footer-full__right">
      <p class="ptext-small-bold neo-white">A Healthy Mindset</p>

      <p class="ptext-small neo-white">
        "Seeing what the battle was doing to my body, I had an "aha" moment that changed my attitude. I thanked the candida for showing me what I wanted to change..."
      </p>

      <a class="ptext-small neo-white" href="mindset.html"><em>Read more &rarr;</em></a>
      <br>
      <br>
    </div>

    <div class="clrfix"></div>

    <div class="footer-social-icon-outer">
      <div class="footer-social-icon-inner">
        <img class="img-ccards" src="images/visa-v1.png" alt="VISA Card">
        <img class="img-ccards" src="images/mastercard-v1.png" alt="MasterCard">
        <img class="img-ccards" src="images/paypal.png" alt="Paypal icon">

        <a href="http://www.facebook.com/NapashaWay">
          <img class="img-social-fb" src="images/48x48-Circle-58-FB.png" alt="Facebook icon">
        </a>

        <a href="https://napashaway.foxycart.com/cart">
          <img class="img-cart-footer" src="images/shopping-cart-footer.svg" alt="Shopping Cart">
        </a>

      </div>
      <div class="clrfix"></div>
    </div>

    <div class="footer-full__bottom-left">
      <p class="ptext-small neo-white">
        <br>
        &copy; Copyright 2015 Napasha Way LLC
      </p>
    </div>

    <div class="footer-full__bottom-right">
      <p class="ptext-small neo-white">
        <br>
        This site designed &amp; developed by Jim Milliman
      </p>
    </div>
  </footer>

  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>

  <script src="//cdn.foxycart.com/napashaway/loader.js" async defer></script>

  <script src="scripts/main.min.js"></script>

  <script>
  (function(i, s, o, g, r, a, m) {
    i['GoogleAnalyticsObject'] = r;
    i[r] = i[r] || function() {
      (i[r].q = i[r].q || []).push(arguments)
    }, i[r].l = 1 * new Date();
    a = s.createElement(o),
      m = s.getElementsByTagName(o)[0];
    a.async = 1;
    a.src = g;
    m.parentNode.insertBefore(a, m)
  })(window, document, 'script', '//www.google-analytics.com/analytics.js', 'ga');

  ga('create', 'UA-66983904-1', 'auto');
  ga('send', 'pageview');
  </script>
</body>

</html>
