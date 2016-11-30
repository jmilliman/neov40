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
    <p class="ptext-cmenu-italic"><a class="ptext-bright" href="oils-orange.php">Orange Family</a></p>
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

    <article class="container-product"> <!-- Orange Oils Family -->
      <h1 class="header--vertical-margin"><em>Orange You Glad for this Family</em></h1>

      <p class="ptext">
        I always smile when I smell orange; it is an uplifting essential oil. There are hundreds of species and subspecies of oranges, but four are the most commonly used. Bitter, Clementine and Sweet Orange are extracted from the skin and peel and are versatile in their aids to our skin and emotions. Neroli is extracted from the flower only, requiring huge amounts of flowers and a more delicate extraction process. For these reasons, it is one of the most expensive essential oils, but its benefits are well-known and highly desirable.
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
          <a class="link-style" href="#">Orange Family</a>
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


    <div class="container-product"> <!-- Bitter Orange -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Bitter Orange 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Bitter Orange 5ml Bottle" />
          <input type="hidden" name="price" value="10.95" />
          <input type="hidden" name="code" value="EO0140" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="5" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$10.95 &nbsp; Qty</label>
          <input class="form-qtyspin" type="number" min="1" max="5" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-bold">
        Scientific Name: Citrus Aurant – amara
        <br>
        <br> Extraction: Cold pressed from non-certified organic orange peels
        <br>
        <br> Origin: Ivory Coast
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Photo of herb" src="images/pp-orange-bitter.jpg">
      </div>

      <p class="ptext">
        Bitter Orange essential oil is excellent for degenerated skin, as it increases collagen formation. It is balancing to hormones and can improve oily skin. It is strengthening to arteries and veins and is included in many varicose vein recipes. Traditionally, bitter orange has been used for nausea, indigestion and constipation.
        <br>
        <br> Bitter orange increases mental clarity and helps release old emotional patterns. It can be sensitizing to the skin (phototoxic). Do not apply before going into direct sunlight.
        <br>
        <br> Properties: carminative and vulnerary.
        <br>
        <br>

        <em>Avoid during pregnancy.</em>
        <br>
        <br>

        <em>These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.</em>
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Clementine Orange -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Clementine Orange 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Clementine Orange 5ml Bottle" />
          <input type="hidden" name="price" value="7.90" />
          <input type="hidden" name="code" value="EO0640" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$7.90 &nbsp; Qty</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-bold">
        Scientific Name: Citrus deliciosa, Clementina variety
        <br>
        <br> Extraction: Cold pressed wild leaves
        <br>
        <br> Origin: Italy
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Photo of herb" src="images/pp-orange-clementine-v1.jpg">
      </div>

      <p class="ptext">
        Clementine essential oil has a fresh sweet scent that is uplifting and cheerful. It is calming and relaxing to hyper children and is safe to diffuse. It is a powerful antidepressant and relieves insomnia. It relieves bronchial spasms and is helpful to asthmatics ready to release fears and old emotions. Clementine orange has an affinity for the solar plexus chakra.
        <br>
        <br> Properties: Antibacterial, antidepressant and antispasmodic.
        <br>
        <br>

        <em>These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.</em>
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Neroli -->

      <div class="cart-wrap">
        <p class="ptext-product-name">Neroli 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Neroli 5ml Bottle" />
          <input type="hidden" name="price" value="195.60" />
          <input type="hidden" name="code" value="EO1700" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$195.60 &nbsp; Qty</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Citrus aurantium bigaarade
        <br>
        <br> Extraction: Steam distilled from the flowers
        <br>
        <br> Origin: Morocco
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-neroli.jpg">
      </div>

      <p class="ptext">
        Neroli is an amazing aromatic that is extracted from the flowers of the Bitter Orange. It opens one to receive the highest parts of Self. Neroli is wondrous for aging, damaged skin, scars and reduces stretch marks. It heals spider veins and lightens ruddy complexions. It is found in exclusive cosmetic lines and anti-wrinkle creams. Neroli strengthens a weak nervous system. It is a hormone balancer and aids hot flashes and mood swings. Petitgrain sur fleur is often substituted for Neroli, which comes from the same plant, but uses both flowers and leaves.
        <br>
        <br> Properties: Vulnerary, nervine and emmenagogue.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Petitgrain sur fleur -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Petitgrain sur fleur 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Petitgrain sur fleurs 5ml Bottle" />
          <input type="hidden" name="price" value="45.48" />
          <input type="hidden" name="code" value="EO1860" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$45.48 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Citrus aurantium
        <br>
        <br> Extraction: Steam distilled from the leaves and flowers
        <br>
        <br> Origin: Morocco
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        This is a lovely oil. Petitgrain Sur fleur comes from the flower and leaves of Citrus aurantium, the same tree used to make the world famous Neroli. While Neroli uses only the flower of the plant, Petitgrain uses both the leaf with some flowers. It has many of the same benefits as Neroli without the higher cost.
        <br>
        <br> Like Neroli, Petitgrain Sur Fleur tones the skin and balances both oil and dry conditions, including acne.
        <br>
        <br> It is anti-spasmodic, soothing muscle spasms. It is a sedative and antidepressant. It is a strong antiviral and antibacterial; it inhibits the growth of staph, strep and pneumococcus bacteria. It is used in the treatment of hepatitis and can be mixed with a carrier oil and applied externally using a hot compress.
        <br>
        <br> Emotionally, this oil helps with depression, calms the nerves and is soothing. It is helpful for overcoming anger and panic.
        <br>
        <br> This oil is sometimes substituted for Neroli because of Neroli’s high price.
        <br>
        <br> Properties: Anti-spasmodic, sedative, nervine, antidepressant, antiviral, and antibacterial.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Sweet Orange -->

      <div class="cart-wrap">
        <p class="ptext-product-name">Sweet Orange 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Sweet Orange 5ml Bottle" />
          <input type="hidden" name="price" value="11.84" />
          <input type="hidden" name="code" value="EO2480" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$11.84 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Citrus sinensis
        <br>
        <br> Extraction: Cold-pressed from Biodynamically grown orange peels
        <br>
        <br> Origin: Italy
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-orange-sweet.jpg">
      </div>

      <p class="ptext">
        Sweet orange is a delightful scent. It is also practical as a disinfectant, antibacterial and antifungal. It purifies and stimulates the removal of toxins, including those associated with food poisoning. It is helpful to the lymphatic system. It clarifies the skin and promotes the formation of collagen, which makes it a great addition to lotions and creams. It eases depression and is calming to children. It supports adrenal balance and regeneration.
        <br>
        <br> Citrus oils are phytotoxic, and can cause skin sensitivity (sunburn) in sunlight. Don’t apply citrus oils to your skin before you go outside. You can take 1 drop of the oil in 1 quart of water instead; or apply citrus oils when you are done enjoying the sun.
        <br>
        <br> Properties: disinfectant, antibacterial, antifungal and vulnerary.
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
