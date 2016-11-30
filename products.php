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
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-blends.php">Blends</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-bright" href="products.php">Other Products</a></p>
  </div>

  <main class="page-wrap">
    <div class="page-cMenu-wrap__page-title">
      <h1 class="ptext-page-title" id="a">Other Products</h1>
    </div>

    <div class="container-product">   <!-- Toothpaste & Healthy Gums -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Toothpaste &amp; Healthy Gums</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Toothpaste & Healthy Gums Combo" />
          <input type="hidden" name="price" value="21.60" />
          <input type="hidden" name="code" value="NW0340" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="10" />
          <input type="hidden" name="category" value="0.5PT" />
          <input type="hidden" name="length" value="7" />
          <input type="hidden" name="width" value="4" />

          <label class="cart-label-left">$21.60 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="10" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <div class="container-img-round">
        <img class="img-product-large" alt="Product Photo" src="images/pp-toothpaste.jpg">
        <br>
        <img class="img-product-large" alt="Product Photo" src="images/pp-healthy-gums-v2.jpg">
      </div>

      <p class="ptext-large">
        A limited time special package offering ...
      </p>
      <p class="ptext">
        <br>
        <span class="ptext-bold">Remineralizing Toothpaste ½pt Jar</span>
        <br>
        <span class="ptext-italic"> - and -</span>
        <br>
        <span class="ptext-bold">Healthy Gums Blend 15ml</span>
        <br>
        <br>
        Receive both of these wonderful oral health products for 20% off the regular price if purchased separately.
        <br>
        <br>
        Offer good until May 15th, 2016. See individual product listing for ingredients and more details.
        <br>
        <br>
        See our <a class="link-style" href="blog/feature/healing-toothpaste/">blog</a> for more information on the benefits of remineralizing the teeth with our toothpaste.
        <br>
        <br>
        <span class="ptext-italic">Note: Remineralizing Toothpaste and Heathly Gums Blend may still be purchased separately.</span>
      </p>
      <div class="clrfix"></div>
    </div>

    <div class="container-product">   <!-- Change of Season Soup -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Change of Season Soup</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">
          <input type="hidden" name="name" value="Change of Season Soup" />
          <input type="hidden" name="price" value="8.78" />
          <input type="hidden" name="code" value="NW0240" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="10" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$8.78 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="10" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <div class="container-img-round">
        <img class="img-product-large" alt="Product Photo" src="images/pp-cos-soup-v5.jpg">
      </div>

      <p class="ptext">
        Perfect timing for this bundle of nature's handiwork. Change of season soup is a mixture of herbs wrapped in cheescloth. Add it to a pot of soup or stew of your choosing. The herbs will aid the body and immune system in making the shift from warm summertime conditions to fall and winter.
        <br>
        <br> The story of Change of Season Soup can be found on our <a class="link-style" href="blog/index.php">blog</a>.
        <br>
        <br> Ingredients: Reishi Mushroom, Shisandra berries, Hawthorn berries, Ashwaganda root, Astragalus root and Rehmannia root (all ingredients are organic).
      </p>

      <div class="clrfix"></div>
    </div>

    <div class="container-product">   <!-- Daily Delight -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Daily Delight 9oz Jar</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">
          <input type="hidden" name="name" value="Daily Delight 9oz Jar" />
          <input type="hidden" name="price" value="15.90" />
          <input type="hidden" name="code" value="NW0100" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="10" />
          <input type="hidden" name="category" value="9OZJ" />

          <label class="cart-label-left">$15.90 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="10" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <div class="container-img-round">
        <img class="img-product-large" alt="Product Photo" src="images/pp-daily-delight-v1.jpg">
      </div>

      <p class="ptext">
        This 9 oz. jar of delight is filled with nourishment for your face. It begins with a base of Organic hemp seed, Organic olive oil, Organic jojoba and organic flax seed oil, with a little shea butter for moisture retention. Then I add, moringa, cucumber seed, papaya, guava, Seabuckthorn, chamomile and a touch of Rose Geranium &amp; orange for a light and lovely fragrance and wonderful skin regenerating properties.
        <br>
        <br> My hands and body love it, too!
      </p>

      <div class="clrfix"></div>
    </div>

    <div class="container-product">   <!-- Overnight Regeneration -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Overnight Regeneration 9oz Jar</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">
          <input type="hidden" name="name" value="Overnight Regeneration 9oz Jar" />
          <input type="hidden" name="price" value="18.50" />
          <input type="hidden" name="code" value="NW0220" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="10" />
          <input type="hidden" name="category" value="9OZJ" />

          <label class="cart-label-left">$18.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="10" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <div class="container-img-round">
        <img class="img-product-large" alt="Product Photo" src="images/pp-overnight-regen-v1.jpg">
      </div>

      <p class="ptext">
        I considered calling this lotion “Love in a jar.” This mixture is a little thicker overnight mixture of organic hemp seed, organic olive oil, organic jojoba and organic flax seed with shea butter. Then Foraha, moringa, prickly pear, organic rose hip seed, organic carrot seed oil, organic bitter orange, wildcrafted helichrysum and vitamin E oil round out this nutritional dynamo.
        <br>
        <br> Over time, it will lessen wrinkles fine lines and scars, balance skin tone and stimulate healthy skin regeneration.
        <br>
        <br> Yep. Love in a jar.
      </p>

      <div class="clrfix"></div>
    </div>

    <div class="container-product" id="lavender">   <!-- Lavender water -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Lavender Water Plus 100ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Lavender Water" />
          <input type="hidden" name="price" value="13.50" />
          <input type="hidden" name="code" value="NW0020" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="10" />
          <input type="hidden" name="category" value="4OZB" />

          <label class="cart-label-left">$13.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="10" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <div class="container-img-large">
        <img class="img-product-large" alt="Photo of herb" src="images/pp-lavender-water-plus.png">
      </div>

      <p class="ptext">
        Gentle lavender. It soothes and disinfects minor scratches, bites and burns. It offers a sense of calm and peace, and can be relaxing in moments when the nervous system seeks balance. It makes a lovely bedtime scent for relaxation and sleep. Its restful fragrance is gentle enough for the young and young at heart…
        <br>
        <br> I make lavender water using organic lavender plants from my garden. I add wildcrafted Bulgarian Lavender essential oil to the Lavender water. It adds a bit of depth to the gentle lavender water scent and increases its antibacterial, anti-mold abilities.
        <br>
        <br> Avoid eye contact.
      </p>
      <div class="clrfix"></div>
    </div>

    <div class="container-product" id="rose">   <!-- Rosewater -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Rose Water Plus 100ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Rose Water" />
          <input type="hidden" name="price" value="15.50" />
          <input type="hidden" name="code" value="NW0040" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="10" />
          <input type="hidden" name="category" value="4OZB" />

          <label class="cart-label-left">$15.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="10" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <div class="container-img-large">
        <img class="img-product-large" alt="Photo of herb" src="images/pp-rose-water-plus.png">
      </div>

      <p class="ptext">
        Rose water is highly prized for its benefits to skin and hair. It tones, nourishes and encourages the regeneration of healthy skin cells. Used regularly, it brightens skin and tightens pours. It gently reduces inflammation of the skin and helps heal acne. Lightly dab rose water around the eyes (but not in them), to lessen dark circles and puffiness.
        <br>
        <br>I use it in the shower on my hair. It settles the fuzziness of “humidity hair.” It is an alternative to normal hair oil and when rubbed into the scalp, it addresses dandruff and inflammation.
        <br>
        <br>I use two species of roses from our garden and one wildcrafted rose from our land. After I make the rose water, I add Wildcrafted Bulgarian Rose Otto. The Rose Otto adds depth to the rose bouquet and opens one to the consciousness of love. It increases the water’s anti-bacterial and anti-mold abilities, and increases the rose water’s ability to heal, nourish and regenerate healthy skin tissue.
        <br>
        <br>Apply Rose water to face, hair and clothing for a delicate fragrance.
        <br>
        <br>Avoid eye contact.
      </p>
    </div>

    <div class="container-product" id="mentholated">   <!-- Mentholated Rub -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Mentholated Rub 2.0 oz</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Mentholated Rub 2.0 oz" />
          <input type="hidden" name="price" value="11.50" />
          <input type="hidden" name="code" value="NW0180" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="10" />
          <input type="hidden" name="category" value="1OZT" />

          <label class="cart-label-left">$11.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="10" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <div class="container-img-round">
        <img class="img-product-large" alt="Product Photo" src="images/pp-mentholated-rub-v1.jpg">
      </div>

      <p class="ptext">
        Keep plenty of this on hand for the winter colds and flu season. This blend of Organic Blue Gum Eucalyptus, Organic Peppermint and Organic Ravensare essential oils in organic cold pressed olive oil soothes congested lungs, opens breathing passages and expels mucus from the lungs. Apply it to the chest alone or add a warm compress for penetrating relief.
        <br>
        <br>Not intended for children under 3 years of age.
        <br>
        <br>Avoid eye contact.
        <br>
        <br>

        <span class="ptext-italic">Ingredients:  Orgainic cold-pressed olive oil, beeswax, Vitamin E, Organic Blue Gum Eucalyptus EO, Organic Peppermint EO, and Organic Ravensare EO.</span>
      </p>
      <div class="clrfix"></div>
    </div>

    <div class="container-product" id="sooth">   <!-- Soothing Salve -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Soothing Salve 2.0 oz</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Soothing Salve 2.0 oz" />
          <input type="hidden" name="price" value="12.50" />
          <input type="hidden" name="code" value="NW0200" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="10" />
          <input type="hidden" name="category" value="1OZT" />

          <label class="cart-label-left">$12.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="10" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <div class="container-img-round">
        <img class="img-product-large" alt="Product Photo" src="images/pp-soothing-salve-v1.jpg">
      </div>

      <p class="ptext">
        <span class="ptext-bold">For burns, bites, bumps and bums!</span>
        <br>
        <br> This is a mother’s <span class="ptext-italic">"go to"</span> for the little bites and bumps in life. Itchy bug bites, “owies,” little mysterious rashes, bruises, and minor burns are calmed and nourished by our Soothing Salve.
        <br>
        <br>It works great for moms and dads, too.
        <br>
        <br>Safe for all ages.
        <br>
        <br>Avoid eye contact.
        <br>
        <br>

        <span class="ptext-italic">Ingredients:  Cold pressed olive oil, organic  Lavender water, beeswax, Vitamin E oil, Organic Roman Chamomile EO, Organic Bulgarian Lavender EO,  Organic SeaBuckthorn EO,  Organic Rose Hip Seed Oil.</span>
      </p>
      <div class="clrfix"></div>
    </div>

    <div class="container-product" id="tooth">   <!-- Toothpaste -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Remineralizing Toothpaste ½pt Jar</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Re-mineralizing Toothpaste ½ pt" />
          <input type="hidden" name="price" value="14.00" />
          <input type="hidden" name="code" value="NW0300" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="10" />
          <input type="hidden" name="category" value="0.5PT" />
          <input type="hidden" name="length" value="7" />
          <input type="hidden" name="width" value="4" />

          <label class="cart-label-left">$14.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="10" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <div class="container-img-round">
        <img class="img-product-large" alt="Product Photo" src="images/pp-toothpaste.jpg">
      </div>

      <p class="ptext">
        This is not your standard toothpaste. Organic Coconut oil is the base. Coconut oil is fabulous for oil pulling, which is well-known for drawing toxins and infection out of the mouth. The challenge is that it melts at 72 degrees. In warm weather, it is very soft and can almost act like liquid toothpaste, while in cool weather (or a cold bathroom), it is very solid and somewhat challenging to break up. Some people break off chunks and toss it into their mouth. Then it melts and can be brushed onto the teeth!
        <br>
        <br>
        We have tried different combinations of oils and yet each time we come back to Organic Coconut oil because we like the benefits we experience. We hesitated to put this out to our clients for the previously mentionbed convenience reasons, but more and more people are requesting it, so we have decided to let you decide whether this would be something worthwhile and beneficial to you.
        <br>
        <br>
        What are the other differences from commercial toothpastes? Ours comes in a ½ pint canning jar and does not taste commercially sweet, though we do use a bit of stevia and peppermint.
        <br>
        <br>
        See our <a class="link-style" href="blog/feature/healing-toothpaste/">blog </a>for more information on the benefits of remineralizing the teeth with our toothpaste.
        <br>
        <br>
        <span class="ptext-italic">Ingredients:  Organic Coconut oil, calcium carbonate, baking soda, kaolin clay, mineral mixture, stevia and Organic EO peppermint.</span>
      </p>
      <div class="clrfix"></div>
    </div>
  </main>

  <?php render('footer')?>

</body>

</html>
