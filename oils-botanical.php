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
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-family.php">Oil Families</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-bright" href="oils-botanical.php">Botanical Oils</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-blends.php">Blends</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="products.php">Other Products</a></p>
  </div>

  <main class="page-wrap">
    <div class="page-cMenu-wrap__page-title">
      <h1 class="ptext-page-title">Botanical Oils</h1>
    </div>

    <div class="container-product">
      <!-- Cucumber Seed -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Cucumber Seed Oil 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Cucumber Seed Oil 5ml Bottle" />
          <input type="hidden" name="price" value="5.00" />
          <input type="hidden" name="code" value="EO720" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="10" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$5.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="10" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-bold">
        Scientific Name: Cucumis sativis
        <br>
        <br> Extraction: Cold pressed from seeds of the fruit
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Photo of herb" src="images/pp-cucumber.jpg">
      </div>

      <p class="ptext">
        Cucumber seed is a cooling oil that soothes dry skin and aids skin regeneration with its high flavonoids, and oleic acid (Omega 9), and linoleic acids (Omega 6). It also contains vitamin B1, high amounts of vitamin C, as well as fluorine, potassium and magnesium.
        <br>
        <br> Cucumber nourishes and heals damage to the skin, premature aging and prevents free radical damage. It is effective in helping the body retain moisture, which is helpful to psoriasis and eczema. It reduces inflammation and irritated skin, and accelerates the process of skin regeneration.
        <br>
        <br> Place a couple drops on the scalp and massage the area. It strengthens brittle nails and hair when applied daily.
        <br>
        <br> Finally, Cucumber is helpful to cleansing the digestive tract and helping to rid one of tapeworms.
        <br>
        <br> Properties: antiallergenic, anti-inflammatory, emollient, parasitic, vulnerary and lung tonic.
        <br>
        <br>

        <span class="ptext-italic">These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.</span>
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product">
      <!-- Guava Seed Oil -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Guava Seed Oil 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Guava Seed Oil 5ml Bottle" />
          <input type="hidden" name="price" value="6.00" />
          <input type="hidden" name="code" value="EO1130" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$6.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-bold">
        Scientific Name: Psidium guajava
        <br>
        <br> Extraction: Cold-pressed from guava seeds
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Photo of herb" src="images/pp-guava.jpg">
      </div>

      <p class="ptext">
        This unrefined Guava seed oil is rich in antioxidants and Vitamins A &amp; C, which prevents premature aging and maintains skin elasticity. It is an astringent oil which can minimize blemishes and pimples and enlarged pores. Guava is used to reduce the appearance of scars and stretch marks, and is a great addition to blends that address these issues.
        <br>
        <br> Use directly on the skin as a night serum or daily moisturizer. It can be applied to the scalp and helps restore hair vitality and contributes to the strength, shine and luster of hair.
        <br>
        <br> Properties: astringent, antioxidant and vulnerary.
        <br>
        <br>

        <span class="ptext-italic">These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.</span>
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product">
      <!-- Moringa Seed -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Moringa Seed Oil 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Moringa Seed Oil 5ml Bottle" />
          <input type="hidden" name="price" value="5.00" />
          <input type="hidden" name="code" value="EO1600" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="15" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$5.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="15" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-bold">
        Scientific Name: Moringa oleifera
        <br>
        <br>Extraction: Cold pressed from seeds of the tree
        <br>
        <br>Origin: Inda
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Photo of herb" src="images/pp-moringa.jpg">
        <p class="ptext-center--small ptext-italic">Forest &amp; Kim Starr</p>
      </div>

      <p class="ptext">
        Moringa was used in Ancient Greece and Egypt for beautiful skin. It is a potent antioxidant, and unlike many oils, it is remarkably stable. It builds collagen fibers, minimizes wrinkle lines, improves moisture retention, softness and smoothness of the skin. It is a natural emollient, and is helpful to eczema, psoriasis and dermatitis. It is also helpful for scalp circulation and split ends.
        <br>
        <br> The stability of Moringa and its high vitamin E content extend the shelf life of whatever oils it is mixed with. I am enjoying Moringa in my lotions and creams. My skin feels silky and it does not add an oily feeling. I use it in all mixtures for eczema and psoriasis. It is gentle for use on mystery dermatitis’ of childhood; and in creams and lotions for those with sensitive skin.
        <br>
        <br> Properties: Anti-allergenic, antifungal, antibacterial, antioxidant, antiseptic, antiviral, digestive, emollient, hepatic and tonic to liver and kidneys.
        <br>
        <br>

        <span class="ptext-italic">These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.</span>
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product">
      <!-- Papaya Seed -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Papaya Seed Oil 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Papaya Seed Oil 5ml Bottle" />
          <input type="hidden" name="price" value="6.25" />
          <input type="hidden" name="code" value="EO1830" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$6.25 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-bold">
        Scientific Name: Carica papaya
        <br>
        <br> Extraction: Cold-pressed from papaya seeds
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Photo of herb" src="images/pp-papaya.jpg">
      </div>

      <p class="ptext">
        Papaya seed has high quantities of oleic and lineolic acids. Papaya contains the enzyme papain, which is a natural exfoliate to remove dead skin cells and unclog pores. It is known for brightening the skin and evening out skin tone. The high vitamin C content strengthens pores, reduces dark spots and blemishes. It helps retain moisture, elasticity, and is also a helpful addition to hair care products for shine and silkiness.
        <br>
        <br> Properties: antibacterial, antifungal, anti-inflammatory, analgesic, antioxidant, diuretic, and a tonic for the skin and digestive lining.
        <br>
        <br>

        <span class="ptext-italic">These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.</span>
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product">
      <!-- Prickly Pear -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Prickly Pear Seed Oil 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Prickly Pear Seed Oil 5ml Bottle" />
          <input type="hidden" name="price" value="8.50" />
          <input type="hidden" name="code" value="EO1970" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$8.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-bold">
        Scientific Name: Opuntia ssp.
        <br>
        <br> Extraction: Cold pressed from the fresh wild harvested seeds
        <br>
        <br> Origin: United States
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Photo of herb" src="images/pp-pricklypear.jpg">
      </div>

      <p class="ptext">
        Prickly pear seed oil contains exceptionally rich vitamin E and sterols, which protect the skin from free radicals. It contains essential fatty acids, including Omegas 3 &amp; 6, which is excellent for skin softening and healing. It also contains flavonoids, which are famous for their antioxidant and anti-inflammatory benefits. It improves hydration, slows aging and restores elasticity.
        <br>
        <br> I have begun using it in my varicose and spider vein blends. It can also be used to reduce dark circles under eyes when applied nightly. This is another fabulous addition to creams and lotions, especially for mature skin.
        <br>
        <br> Properties: antioxidant, vulnerary, anti-aging, and emollient.
        <br>
        <br>
        <span class="ptext-italic">These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.</span>
      </p>

      <div class="clrfix"></div>
    </div>
  </main>

  <?php render('footer')?>

</body>

</html>
