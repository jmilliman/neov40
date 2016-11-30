<?php   /* required modules */
  require_once('include/main.php');

  $metaOptions = [
    'pageTitle'          => 'Napasha Way Essentail Oils',
    'titleContent'       => 'Napasha Way Essential Oils',
    'subjectContent'     => 'Welcome to Napasha Way',

    'keywordsContent'    => 'Essential Oils Balsam Copaiva Moringa Papaya Seabuckthorn Sweet Birch Cucumber Seed Guava Prickly Pear Calendula Marigold Clementine Orange Cypress Eucalyptus smithii Havozo Holy Basil Ravensare Turmeric Vetiver',

    'descriptionContent' => 'Artisan essential oils of rare potency. Safe usage info, recipes and other products created with these same oils of organic and/or wild crafted origins.'
  ];
?>

<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-blue">

  <?php render('header')?>

  <div class="context-menu">
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils.php">Essential Oils</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-family.php">Oil Families</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-eucalyptus.php">Eucalyptus Family</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-lavender.php">Lavender Family</p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-orange.php">Orange Family</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-rosemary.php">Rosemary Family</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-bright" href="oils-teatree.php">Tea Tree Family</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-botanical.php">Botanical Oils</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-blends.php">Blends</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="products.php">Other Products</a></p>
    <br>
  </div>

  <main class="page-wrap">
    <article class="container-product">
      <!-- Tea Tree Family -->
      <h1 class="header--vertical-margin">The Tea Tree Family</h1>

      <p class="ptext">
        There are nearly 300 species of Melaleuca plants. They are part of the myrtle family, Myrtaceae, commonly known as honey-myrtles. Tea tree oils are antiviral, anti-staph, antibacterial and antifungal. Tea tree is a staple in my home and has been used for 1000’s of years for many practical applications to the skin and for inhalation.
        <br>
        <br>
      </p>

      <div class="oil-family-links">
        <p class="ptext">
          Other Oil Families...
          <br>
          <br>

          <a class="link-style" href="oils-eucalyptus.php">Eucalyptus Family</a>
          <br>
          <br>
          <a class="link-style" href="oils-lavender.php">Lavender Family</a>
          <br>
          <br>
          <a class="link-style" href="oils-orange.php">Orange Family</a>
          <br>
          <br>
          <a class="link-style" href="oils-rosemary.php">Rosemary Family</a>
          <br>
          <br>
          <a class="link-style" href="#">Tea Tree Family</a>
          <br>
          <br>
        </p>
      </div>
    </article>


    <div class="container-product"> <!-- Nerolina -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Nerolina 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Nerolina 5ml Bottle" />
          <input type="hidden" name="price" value="18.20" />
          <input type="hidden" name="code" value="EO1720" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$18.20 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Melaleuca quinquinervia pilligra, ct. linalol
        <br>
        <br> Extraction: Steam distilled from the leaves
        <br>
        <br> Origin: Australia
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        This tea tree family member is a digestive tonic and strengthens the stomach, liver and pancreas. Nerolina is helpful to restoring blood sugar balance for hypoglycemic conditions. It is used in shingles formula and for cold sores. It is like tea tree and lavender, in that it can bring improvement to nearly any oil it is mixed with.
        <br>
        <br> This is a gentle oil, and the softer scent is appealing to those who are sensitive to other members of the tea tree family.
        <br>
        <br> It is antiviral, a bronchodilator and decongestant as well.
        <br>
        <br> Properties: antiviral, anticatarrhal, expectorant, digestive tonic, liver tonic and pancreas tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Niaouli -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Niaouli 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Niaouli 5ml Bottle" />
          <input type="hidden" name="price" value="11.60" />
          <input type="hidden" name="code" value="EO1740" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$11.60 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Melaleuca viridiflora
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        This tea tree member is an analgesic, relieving the pain of headaches, migraines, earaches and muscle and joint pain. It stimulates the circulation of the blood and lymph, preventing the buildup of uric acid from accumulating in the joints. This gives relief from rheumatism, arthritis and gout.
        <br>
        <br> Niaouli is antiseptic, antibacterial and a good vermifuge, eliminating infection, bacteria, round worms and tapeworms from the body when taken in homeopathic dilutions. It helps wounds heal faster and clears up the congestion of oily skin. For these reasons, it is widely used in lotions, creams and soaps.
        <br>
        <br> Properties: Analgesic, anti-inflammatory, antibacterial and vermifuge.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Rosalina -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Rosalina 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Rosalina 5ml Bottle" />
          <input type="hidden" name="price" value="16.94" />
          <input type="hidden" name="code" value="EO2120" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="4" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$16.94 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="4" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Melaleuca ericifolia
        <br>
        <br> Extraction: Steam distilled
        <br>
        <br> Origin: Australia
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Rosalina is a kinder, gentler member of the Tea Tree family. While it is softer and kinder in its pleasing scent, it is still a strong antibacterial, anti viral immune stimulating essential oil.
        <br>
        <br> Rosalina is commonly known as lavender tea tree oil, because of its soft and soothing scent. Many people who are sensitive to tea tree will find this pleasant. It is still able to address lung and respiratory issues and because of its gentleness, it is often used in lieu of tea tree for children. It is wonderful in a diffuser or as a chest rub, when mixed with Eucalyptus Smithii and carrier oil.
        <br>
        <br> It is also gently treats acne, boils, and herpes. Mix in carrier oil for this purpose.
        <br>
        <br> Properties: antiviral, antifungal, anticatarrhal, and antiseptic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Tea Tree Oil -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Tea Tree Oil 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Tea Tree Oil 5ml Bottle" />
          <input type="hidden" name="price" value="8.90" />
          <input type="hidden" name="code" value="EO2520" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$8.90 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Melaleuca alternafolia
        <br>
        <br> Extraction: Steam distilled from sustainably harvested plantation trees
        <br>
        <br> Origin: Australia
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        This is the most potent of the Tea Tree family. It is antiviral, antibacterial, antifungal. It is an effective treatment for strep or staph. It is effective against athlete’s foot, warts, and prevents infection in cuts and wounds. It can be used as a spinal compress or blend for external use during illness. It clears the air of disease during outbreaks. A few drops in the dishwater will sanitize dishes during outbreaks.
        <br>
        <br> Properties: antiviral, antibacterial, antifungal, antiseptic and anti-infectious.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>
  </main>

  <?php render('footer')?>

</body>

</html>
