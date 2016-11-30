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
    <p class="ptext-cmenu-italic"><a class="ptext-bright" href="oils-lavender.php">Lavender Family</p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-orange.php">Orange Family</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-rosemary.php">Rosemary Family</a></p>
    <br>
    <p class="ptext-cmenu-italic"><a class="ptext-dim" href="oils-teatree.php">Tea Tree Family</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-botanical.php">Botanical Oils</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-blends.php">Blends</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="products.php">Other Products</a></p>
    <br>
  </div>

  <main class="page-wrap">
    <article class="container-product"> <!-- Lavender Family -->
      <h1 class="header--vertical-offset">Why We Love the Lavender Family</h1>

      <p class="ptext">
        <br>
        They are useful for so many conditions, it should be a staple for every home: burns, cuts, wounds, skin and hair care, blood and sugar imbalance, nerve, heart and muscle pain, fevers and deep relaxation. During World War II, doctors in Europe used Lavender, Thyme, and Oregano soaked cotton cloths to effectively prevent gangrene or infection on the battlefield.
      </p>

      <div class="oil-family-links">
        <p class="ptext">
          Other Oil Families...
          <br>
          <br>

          <a class="link-style" href="oils-eucalyptus.php">Eucalyptus Family</a>
          <br>
          <br>
          <a class="link-style" href="#">Lavender Family</a>
          <br>
          <br>
          <a class="link-style" href="oils-orange.php">Orange Family</a>
          <br>
          <br>
          <a class="link-style" href="oils-rosemary.php">Rosemary Family</a>
          <br>
          <br>
          <a class="link-style" href="oils-teatree.php">Tea Tree Family</a>
          <br>
          <br>
        </p>
      </div>
    </article>

    <div class="container-product"> <!-- Bulgarian Lavender -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Bulgarian Lavender 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Bulgarian Lavender 5ml Bottle" />
          <input type="hidden" name="price" value="14.90" />
          <input type="hidden" name="code" value="EO1300" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$14.90 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-bold">
        Scientific Name: Lavandula officinalis
        <br>
        <br> Extraction: Steam distilled from organic flowers
        <br>
        <br> Origin: Bulgaria
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Photo of herb" src="images/pp-bulgarian-lavender.jpg">
      </div>

      <p class=ptext>
        This is one of the lavenders that is associated with that wonderful “lavender scent.” It is a universal oil and can benefit almost any condition or ailment. It’s antibacterial, lessens pain, and lowers fever. It improves blood circulation and immune system health. It calms fear, balances emotions, and promotes relaxation and sleep through its support of the nervous system. Mixed in equal parts with tea tree, it will eliminate plantar warts.
        <br>
        <br> Bulgarian Lavender is also used in perfumes and potpourri. Used in sachets in closets or drawers, clothes will smell lovely and moths are deterred from clothing and pantry. Add it to natural dish soaps and hand soaps for its fragrance and antibacterial properties.
        <br>
        <br> Properties: antibacterial, antiseptic, nervine, analgesic and antibacterial.
        <br>
        <br>

        <em>These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.</em>
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Lavender Fine Population -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Lavender Fine Population 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Lavender Fine Population 5ml Bottle" />
          <input type="hidden" name="price" value="16.99" />
          <input type="hidden" name="code" value="EO1320" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left neo-dark-orange"><em>Out of Stock&nbsp;</em></label>
          <input disabled class="form-qtyspin" type="number" min="1" max="1" step="1" value="" name="quantity" />
          <input disabled class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Lavandula augustifolia
        <br>
        <br> Extraction: Steam distilled from wild population lavender flowers (not clones)
        <br>
        <br> Origin: France
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-lavender-augustfolia.jpg">
      </div>

      <p class="ptext">
        The Lavender grown in the Haute Provence of France is called fine population because it consists of different varieties of lavender that are grown and harvested together. It is a very effective general anti-infection tool. This is a favorite for wounds, burns and infections. It can eliminate diaper rash, tummy aches and nausea when massaged onto the abdomen. It is also one of the finest smelling lavenders.
        <br>
        <br> Properties: antibacterial, antiseptic, antibiotic, nervine and vulnerary.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Lavender Grosso -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Lavender Grosso 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Lavender Grosso 5ml Bottle" />
          <input type="hidden" name="price" value="" />
          <input type="hidden" name="code" value="EO1340" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="0" />
          <input type="hidden" name="quantity_max" value="0" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left neo-dark-orange"><em>Out of Stock&nbsp;</em></label>
          <input disabled class="form-qtyspin" type="number" min="0" max="0" step="1" value="" name="quantity" />
          <input disabled class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-bold">
        Scientific Name: Lavender augustifolia grosso
        <br>
        <br> Origin: Steam distilled from organic flowers
        <br>
        <br> Origin: South Africa
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Photo of herb" src="images/pp-lavender-augustfolia-grosso.jpg">
      </div>

      <p class="ptext">
        Lavender Grosso does not have the famous scent of the Bulgarian or English Lavenders. However, it is a good energetic choices for wounds, skin and hair care, blood sugar imbalances, heart, nerve issues and headaches; for those seeking healing lavender without the full-body aroma (for those not attracted to lavender scent) of its more famous siblings.
        <br>
        <br> Properties: antibacterial, anti-infectious and nervine.
        <br>
        <br>

        <em>These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.</em>
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Spike Lavender -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Spike Lavender 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Spike Lavender 5ml Bottle" />
          <input type="hidden" name="price" value="14.58" />
          <input type="hidden" name="code" value="EO1360" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="6" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left neo-dark-orange"><em>Out of Stock&nbsp;</em></label>
          <input disabled class="form-qtyspin" type="number" min="1" max="6" step="1" value="" name="quantity" />
          <input disabled class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-bold">
        Scientific Name: Lavandula latifolia
        <br>
        <br> Extraction: Steam distilled from wild flowers
        <br>
        <br> Origin: France
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Photo of herb" src="images/pp-lavender-spike.jpg">
      </div>

      <p class="ptext">
        This lavender smells more medicinal than the other lavenders. It is particularly helpful for lung and respiratory issues. When blended with Ravensare, Tea Tree, or Oregano in carrier oil and applied externally, it aids bronchitis, pneumonia, lung infection, colds and sinus infections. The same blend without carrier oil is effective when used in a diffuser. It is a natural antihistamine and relieves congestion in the lungs and sinus.
        <br>
        <br> Spike Lavender is antibacterial, antifungal and antiviral. It is a welcome addition to blends for skin conditions like athlete’s foot, ringworm and acne.
        <br>
        <br> Properties: antibacterial, antifungal, antiviral, antihistamine and anticatarrhal.
        <br>
        <br>

        <em>These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.</em>
      </p>

      <div class="clrfix"></div>
    </div>

  </main>

  <?php render('footer')?>

</body>

</html>
