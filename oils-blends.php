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
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-botanical.php">Botanical Oils</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-bright" href="oils-blends.php">Blends</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="products.php">Other Products</a></p>
  </div>

  <main class="page-wrap">
    <div class="page-cMenu-wrap__page-title">
      <h1 class="ptext-page-title">Essential Oil Blends</h1>
    </div>

    <div class="container-product" id="gums"> <!-- Healthy Gums -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Healthy Gums 15ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">
          <input type="hidden" name="name" value="Healthy Gums 15ml" />
          <input type="hidden" name="price" value="13.00" />
          <input type="hidden" name="code" value="NW0140" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="30" />
          <input type="hidden" name="category" value="15MLB" />

          <label class="cart-label-left">$13.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="30" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <div class="container-img-round">
        <img class="img-product-large" alt="Product Photo" src="images/pp-healthy-gums-v2.jpg">
      </div>

      <p class="ptext-bold">
        Healthy Gums Blend 15ml Bottle
        <br>
        <br>
      </p>

      <p class="ptext">
        Organic or Wildcrafted: Calendula, Myrrh, Peppermint, Cinnamon Leaf and Oregano in Coconut Oil.
        <br>
        <br> This is a simple and effective way to heal gums. I used it to heal my own and now I use it weekly to maintain gum health.
        <br>
        <br> Apply after brushing teeth morning and night.
      </p>

      <div class="clrfix"></div>
    </div>

    <div class="container-product"> <!-- Tooth Heal -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Tooth Heal 15ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">
          <input type="hidden" name="name" value="Tooth Heal 15ml" />
          <input type="hidden" name="price" value="18.00" />
          <input type="hidden" name="code" value="NW0160" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="30" />
          <input type="hidden" name="category" value="15MLB" />

          <label class="cart-label-left">$18.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="30" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <div class="container-img-round">
        <img class="img-product-large" alt="Product Photo" src="images/pp-tooth-heal-v2.jpg">
      </div>

      <p class="ptext-bold">
        Tooth Heal Blend 15ml Bottle
        <br>
        <br>
      </p>

      <p class="ptext">
        This endeavor should only be undertaken by the strong willed and disciplined. It is challenging to heal oral infections, but it can be done if you are willing to be disciplined and consistent over time. Apply this to the infected area 5 times a day for the first 2 weeks and then 3x a day until all signs of infection are gone. It can take 6 months or more to complete this process if it is relates to an infection in the roots or bone. If you are not able to make this kind of commitment, it can be used to thwart pain, inflammation and the spread of infection until you can get to a dentist.
        <br>
        <br> Ingredients: Organic oils of Oregano, Tea tree, Calendula, Clove, Galbanum and Wild crafted oils of Frankincense, Myrrh, and White fir in Organic Olive Oil.
        <br>
        <br> Take 6X Garlic daily to support the immune system and prevent the spread of infection to other areas.
      </p>

      <div class="clrfix"></div>
    </div>

    <div class="container-product"> <!-- Prostate Blend -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Prostate Blend 100ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">
          <input type="hidden" name="name" value="Prostate Blend 100ml" />
          <input type="hidden" name="price" value="55.00" />
          <input type="hidden" name="code" value="NW0120" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="20" />
          <input type="hidden" name="category" value="4OZB" />

          <label class="cart-label-left">$55.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="20" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <div class="container-img-round">
        <img class="img-product-large" alt="Prostate Blend with trees" src="images/pp-prostate-blend-v4.jpg">
      </div>

      <p class="ptext-bold">
        Prostate Formula – 100ml Bottle (about a 3 month supply)
        <br>
        <br>
      </p>

      <p class="ptext">
        Considerations: It has been well documented by the creator of the PSA test and others that the PSA test does not accurately determine when prostate cancer is present. Intuitively, what I believe is more accurate to say is that the PSA test does show the likelihood of infection, yeast, sediment, or toxins. This formula addresses these issues and encourages the growth and function of healthy cells.
        <br>
        <br> To apply the Prostate formula:
        <br>
        <br> 1. Apply the oil around the inside (medial) left ankle bone.
        <br> 2. Apply to the lower back on the L4-L5 vertebrae.
        <br> 3. Apply to the groin area.
        <br>
        <br> Ingredients: Organic or wild crafted oils of Cypress, Lemon Myrtle, Frankincense, Myrrh, Terebenthine Pine in organic Mustard Seed oil.
        <br>
        <br>

        <span class="ptext-bold">Dietary Considerations:</span>
        <br>
        <br>

        <span class="ptext-bold">AVOID</span> – alcohol, caffeine, white sugar, white flour, white grains, chlorinated water or water with heavy metals.
        <br>
        <br>

        <span class="ptext-bold">Dietary Support:</span>
        <br>
        <br> 1. Drink plenty of lemon water (1/2 lemon in glass of water or 1 drop lemon essential oil in 1 quart of water).
        <br> 2. Eat five color vegetables each day.
        <br> 3. Eat berries high in anti-oxidants.
        <br> 4. Eat fish, poultry and meat without antibiotics or hormones.
        <br> 5. Cut down on dairy and cheese and eat only those without hormones or antibiotics. Do not eat foods that are ultra pasteurized. They have no life in them.
        <br>
        <br>
      </p>

      <div class="clrfix"></div>
    </div>

    <div class="container-product">   <!-- Winter Wonderful Blend -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Winter Wonderful Blend 8oz Bottle</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">
          <input type="hidden" name="name" value="Winter Wonderful Blend 8oz Bottle" />
          <input type="hidden" name="price" value="23.00" />
          <input type="hidden" name="code" value="NW0260" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="20" />
          <input type="hidden" name="category" value="9OZJ" />

          <label class="cart-label-left">$23.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="20" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-bold">
        Winter Wonderful Blend<br><br>
      </p>

      <p class="ptext">
        Do you have dry itchy skin in the winter?  Want to lessen the effects of aging spots, wrinkles, even skin tone and increase the production of healthy skin cells?<br><br>

        Try this wonderful winter blend!  This can be used year round for those plagued by dry skin, but it is welcome by all skin types in the cold months of winter.<br><br>
      </p>

      <p class="ptext-bold">
        Ingredients:<br>
      </p>

      <p class="ptext">
        ¼ cup Organic Sesame seed oil<br>
        ¼ cup Organic Olive oil cold pressed<br>
        30 drops Prickly Pear<br>
        20 drops Moringa<br>
        20 drops Cucumber oil<br>
        30 drops Bitter Orange<br>
        8 drops Geranium<br>
        8 drops Bulgarian Lavender<br><br>
      </p>

      <p class="ptext">
        <span class="ptext-italic">This recipe also benefits those with seborrhea, eczema, dermatitis, and severe dry, chapped skin.  It contains excellent sources of Omega 3 &amp; 6, antioxidants, Vitamin A, C &amp; E, and emollients to retain moisture.</span><br>
      </p>

      <div class="clrfix"></div>
    </div>

    <div class="container-product">   <!-- Winter Wonderful Scrub -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Winter Wonderful Scrub 8oz Bottle</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">
          <input type="hidden" name="name" value="Winter Wonderful Scrub 8oz Bottle" />
          <input type="hidden" name="price" value="24.50" />
          <input type="hidden" name="code" value="NW0280" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="20" />
          <input type="hidden" name="category" value="9OZJ" />

          <label class="cart-label-left">$24.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="20" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-bold">
        Winter Wonderful Scrub<br><br>
      </p>

      <p class="ptext">
        This is a delightful variation on the Winter Wonderful Blend. Stand in the shower and massage this mixture into your skin. Enjoy the feel of rubbing it onto your body, freeing dead cells and stimulating new growth.  Leave it on for several minutes so your body can absorb the nutritional benefits. Then shower as usual.  When you step out of the shower, apply Winter Wonderful Blend to your skin and look in the mirror. The skin has that expensive spa shine. You will also love the feel of your smooth and silky skin!<br><br>
      </p>

      <p class="ptext-bold">
        Ingredients:<br>
      </p>

      <p class="ptext">
        ¼ cup Organic Sesame seed oil<br>
        ¼ cup Organic Olive oil cold pressed<br>
        30 drops Prickly Pear<br>
        20 drops Moringa<br>
        20 drops Cucumber oil<br>
        30 drops Bitter Orange<br>
        8 drops Geranium<br>
        8 drops Bulgarian Lavender<br>
        Salt<br><br>
      </p>

      <p class="ptext">
        <span class="ptext-italic">This recipe also benefits those with seborrhea, eczema, dermatitis, and severe dry, chapped skin.  It contains excellent sources of Omega 3 &amp; 6, antioxidants, Vitamin A, C &amp; E, and emollients to retain moisture.</span><br>
      </p>

      <div class="clrfix"></div>
    </div>
  </main>

  <?php render('footer')?>

</body>

</html>
