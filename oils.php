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

<body class="body-blue" id="a">

  <? render('headerwSearch')?>

  <div class="clrfix"></div>

  <div class="context-menu--wSearch">
    <p class="ptext-cmenu"><a class="ptext-bright" href="oils.php">Essential Oils</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-family.php">Oil Families</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-botanical.php">Botanical Oils</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="oils-blends.php">Blends</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="products.php">Other Products</a></p>
  </div>

  <main class="page-wrap">
    <div class="page-cMenu-wrap__page-title">
      <h1 class="ptext-page-title">Essential Oil Singles 5ml</h1>
      </p>
    </div>

    <div class="container-product search-success hide-me">
      <p class="ptext-center--small">
        Click 'Clear' to return to the full list of our oils.
      </p>
    </div>

    <div class="container-product search-fail hide-me">
      <p class="ptext-center--small">
        Sorry ... no matches found.
      </p>
    </div>




    <div class="container-product">
      <div class="cart-wrap">
        <p class="ptext-product-name"><? $pname . ' ' . $size ?></p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value = <? $pname . ' ' . $size ?> />
          <input type="hidden" name="price" value = <? $retail ?> />
          <input type="hidden" name="code" value = <? $sku ?> />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left"> <? $retail ?> &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Botanical Name: <? $bname ?>
        <br>
        <br> Extraction: <? $emethod ?>
        <br>
        <br> Origin: <? $origin ?>
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with Napasha Way label" src="images/<? $imgfile ?>">
      </div>

      <p class="ptext">
        <? $description ?>
        <br>
        <br>
        <? $properties ?>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>




    <div class="container-product"> <!-- Atlas Cedar -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Atlas Cedar 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Cedarwood 5ml Bottle" />
          <input type="hidden" name="price" value="13.50" />
          <input type="hidden" name="code" value="EO0060" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$13.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Cedar atlantica
        <br>
        <br> Extraction: Steam distillation from certified organic wood
        <br>
        <br> Origin: Morocco
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with Napasha Way label" src="images/pp-atlas-cedar-24.png">
      </div>

      <p class="ptext">
        Atlas Cedar increases circulation, nourishes the skin, and lessens inflammation. It is used for seborrhea, fungus, dandruff, scalp issues, and helps balance sebum production. It is used to prevent wound infections and tetanus. It can reduce plaque build-up in the blood vessels. It is a diuretic and helps release fat stored in cells. It also stimulates hair growth. It is a tonic to the muscles, skin, nervous system, digestive system, kidneys and liver. It is a great addition in a blend applied externally. It is also used as a mosquito, tick and fly repellent!
        <br>
        <br> Cedarwood is helpful to diffuse during meditation or prayer. It also gives courage to embrace change and release fears.
        <br>
        <br> Properties: Anti-inflammatory, antifungal, antiseptic, nerve tonic, digestive tonic, kidney tonic and liver tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Balsam Copaiba -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Balsam Copaiba 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Balsam Copaiba 5ml Bottle" />
          <input type="hidden" name="price" value="8.50" />
          <input type="hidden" name="code" value="EO0080" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="6" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$8.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="6" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Copaiba officianalis or Copaiba Langsdorfi
        <br>
        <br> Extraction: Steam distillation of the resin
        <br>
        <br> Origin: Brazil
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with Napasha Way label" src="images/pp-balsam-copaiba-24.png">
      </div>

      <p class="ptext">
        Balsam Copaiba has carophyllene, which offers wonderful anti-inflammatory properties. It works very well for inflamed skin, internal inflammation in the digestive tract, and the inflammation of arthritis. It is an effective pain reliever. It is taken orally for lupus, MS and other inflammatory conditions. It strengthens kidney functions and helps with cystitis; it is also being used for urinary incontinence in humans and dogs.
        <br>
        <br> Balsa Copaiba is used externally for skin conditions. It is helpful to a sore throat. It is soothing for heart palpitations and helps us see change in the way we handle stress in our life.
        <br>
        <br> It is gentle enough to use on young children, though it should be well diluted for this purpose.
        <br>
        <br> Properties: anti-inflammatory, analgesic, kidney and urinary tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Bay -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Bay Essential Oil 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Bay Essential Oil 5ml Bottle" />
          <input type="hidden" name="price" value="11.50" />
          <input type="hidden" name="code" value="" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="4" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$11.50 &nbsp;Qty</label>
          <input class="form-qtyspin" type="number" min="1" max="4" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Pimenta racemosa
        <br>
        <br> Extraction: Steam distilled from the fresh leaves
        <br>
        <br> Origin: Jamaica
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with Napasha Way label" src="images/pp-bay-24.png">
      </div>

      <p class="ptext">
        Bay essential oil protects against septic and inhibits microbial growth. It is used for neuralgia pain, it calms spasms and provides pain relief. It tightens gums and is helpful for gum infections. It increases perspiration and eliminates excess toxins from the body.
        <br>
        <br> Avoid during pregnancy.
        <br>
        <br> Properties: antiseptic, antimicrobial, analgesic, antispasmodic and antipyretic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Bergamot -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Bergamot 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Bergamot 5ml Bottle" />
          <input type="hidden" name="price" value="25.50" />
          <input type="hidden" name="code" value="EO0100" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$22.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Citrus aurantium bergamia
        <br>
        <br> Extraction: Steam distilled, certified organic
        <br>
        <br> Origin: Italy
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-bergamot.jpg">
      </div>

      <p class="ptext">
        Bergamot improves mood and aids depression. It is helpful to people with SADS (seasonal affective disorder). It heals cuts and reduces scars, and is an aid for skin infections. It is also very helpful for acne and oily skin. It relieves spasms and offers pain relief. It also promotes efficient digestion.
        <br>
        <br> Bergamot may be help reduce stress, anxiety and lower cortisone levels when inhaled or applied externally. Lavender and Bergamot diluted in carrier oil work well together when diffused or applied to the skin.
        <br>
        <br> It has been traditionally used for cuts and wounds, ringworm and eczema.
        <br>
        <br> Bergamot can be sensitizing to the skin when worn in the sun (photoxic). Do not apply before going into direct sunlight.
        <br>
        <br> Properties: antibacterial, antiseptic, anti-inflammatory, antispasmodic, analgesic and anti-depressant.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


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

          <label class="cart-label-left">$10.95 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="5" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Citrus Aurant – amara
        <br>
        <br> Extraction: Cold pressed from non-certified organic orange peels
        <br>
        <br> Origin: Ivory Coast
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-orange-bitter.jpg">
      </div>

      <p class="ptext">
        Bitter Orange essential oil is excellent for degenerated skin, as it increases collagen formation. It is balancing to hormones and can improve oily skin. It is strengthening to arteries and veins and is included in many varicose vein recipes. Traditionally, bitter orange has been used for nausea, indigestion and constipation.
        <br>
        <br> Bitter orange increases mental clarity and helps release old emotional patterns. It can be sensitizing to the skin (phototoxic). Do not apply before going into direct sunlight.
        <br>
        <br> Properties: carminative and vulnerary.
        <br>
        <br>

        <span class="ptext-italic">Avoid during pregnancy.</span>
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Black Pepper -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Black Pepper 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Black Pepper 5ml Bottle" />
          <input type="hidden" name="price" value="21.28" />
          <input type="hidden" name="code" value="EO0160" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$21.28 &nbsp;Qty</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Piper nigrum
        <br>
        <br> Extraction: Steam distilled from certified organic berries
        <br>
        <br> Origin: Indonesia
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-black-peppercorn.jpg">
      </div>

      <p class="ptext">
        Black pepper aids digestion, increases perspiration and helps remove toxins from the body. It removes gas from the intestines and relieves stomach spasms. It is helpful for arthritis and rheumatism, as it also releases uric acid and other toxins from the body. It inhibits bacterial growth and neutralizes free radicals.
        <br>
        <br> Did you know? This is not true for the black pepper powder we eat. When heated, black pepper becomes toxic and accumulates in the digestive tract, creating a barrier to absorbing nutrition. Cayenne pepper is a good pepper powder alternative and does not become toxic when eaten. Its active ingredient, capsaisin, cleanses the bowels, heals ulcers, strengthens the heart, and helps release blockages in the bloodstream.
        <br>
        <br> Properties: stimulant, anti-inflammatory, rubefacient, sialagogue and analgesic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Black Seed -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Black Seed 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Black Seed 5ml Bottle" />
          <input type="hidden" name="price" value="6.28" />
          <input type="hidden" name="code" value="EO0180" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$6.28 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Nigella sativa
        <br>
        <br> Extraction: Cold pressed from seeds of the black cumin plant
        <br>
        <br> Origin: Egypt
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-black-seed.jpg">
      </div>

      <p class="ptext">
        Black Seed oil is helpful to digestion and gas. It stimulates peristalsis and elimination and is antimicrobial, helping to eliminates worms in the intestines.
        <br>
        <br> It has been taken for autoimmune disorders such as arthritis, fibromyalgia and lyme’s disease; where the body is attacking itself. Combine with garlic, and it helps the body bring balance to the immune system.
        <br>
        <br> It is helpful to bronchial conditions. It is also helpful to asthma and allergies through its support of healthy liver function.
        <br>
        <br> Properties: anti-asthma, anti-allergenic, carminative, anti-parasitic, antimicrobial and liver tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Black Spruce -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Black Spruce 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Black Spruce 5ml Bottle" />
          <input type="hidden" name="price" value="17.49" />
          <input type="hidden" name="code" value="EO0200" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="6" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$17.49 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="6" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Picea mariana
        <br>
        <br> Extraction: Steam Distilled
        <br>
        <br> Origin: Canada
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Black Spruce
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Blood Orange -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Blood Orange 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Blood Orange 5ml Bottle" />
          <input type="hidden" name="price" value="9.68" />
          <input type="hidden" name="code" value="EO0220" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$9.68 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Citrus sinensis
        <br>
        <br> Extraction: Cold pressed from fruit peels
        <br>
        <br> Origin: Italy
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Blood Orange
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Blue Cypress -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Blue Cypress 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Blue Cypress 5ml Bottle" />
          <input type="hidden" name="price" value="35.26" />
          <input type="hidden" name="code" value="EO0240" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$35.26 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Callitris intratropica
        <br>
        <br> Extraction: Steam distilled from the wood
        <br>
        <br> Origin: Australia
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Blue Cypress
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Blue Gum Eucalyptus -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Blue Gum Eucalytpus 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Blue Gum Eucalyptus 5ml Bottle" />
          <input type="hidden" name="price" value="16.00" />
          <input type="hidden" name="code" value="EO0260" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="9" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$16.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="9" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Eucalyptus globulus
        <br>
        <br> Extraction: Steam distilled from wild leaves
        <br>
        <br> Origin: Australia
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-eucalyptus-trees.jpg">
      </div>

      <p class="ptext">
        Blue Gum Eucalpytus is fantastic for opening breathing passages and is both a mucolytic and expectorant, breaking down and removing mucus from the respiratory system. It aids lungs and has been used to relieve symptoms of malaria, bronchitis, flu and colds when inhaled or rubbed on the chest. It is antiviral and antibacterial, and is a standard in respiratory blends. Blug Gum Eucalyptus is energizing and uplifting when inhaled in a diffuser, and helps relieve stress and mental exhaustion. It also beneficial when diffused for sinus infection or sore throat. It is antiseptic and useful for skin infections. It soothes tired muscles and increases circulation, and makes an excellent addition to massage blends.
        <br>
        <br> Properties: anticatarrhal, analgesic, antibiotic, antiviral, antibacterial, antiseptic, expectorant and rubefacient.
        <br>
        <br>

        <span class="ptext-italic">May be sensitizing to the elderly, infants or toddlers.</span>
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Blue Hemlock -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Blue Hemlock 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Blue Hemlock 5ml Bottle" />
          <input type="hidden" name="price" value="18.80" />
          <input type="hidden" name="code" value="EO0280" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$18.80 &nbsp;Qty</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Tsuga canadensis
        <br>
        <br> Extraction: Steam distilled from needles and twigs
        <br>
        <br> Origin: Canada
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-blue-hemlock.jpg">
      </div>

      <p class="ptext">
        Is an ancient tree that grows from Nova Scotia to Georgia. It is not poison hemlock, an evergreen with toxic leaves.
        <br>
        <br> Blue Hemlock is helpful to kidney and bladder infections. It is helpful for adrenal stress and is a tonic to the adrenal glands. It can treat sores, skins ulcers and has been used to treat gangrene. It is has been used as a douche for uterine and vaginal infections.
        <br>
        <br> It is helpful to rheumatism and arthritis, colds, sore throats, and lung ailments. It is very astringent and will stop bleeding. It also has a skin tightening effect when used as a toner or in skin cream.
        <br>
        <br> Use in a diffuser for colds, sore throats and respiratory support. Or add it to your favorite massage blend to relax sore muscles and relieve pain.
        <br>
        <br> Properties: antibacterial, anti-infectious, astringent, analgesic, antispasmodic, and hemostatic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


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

      <p class="ptext-no-just">
        Scientific Name: Lavandula officinalis
        <br>
        <br> Extraction: Steam distilled from organic flowers
        <br>
        <br> Origin: Bulgaria
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-bulgarian-lavender.jpg">
      </div>

      <p class=ptext>
        This is one of the lavenders that is associated with that wonderful “lavender scent.” It is a universal oil and can benefit almost any condition or ailment. It’s antibacterial, lessens pain, and lowers fever. It improves blood circulation and immune system health. It calms fear, balances emotions, and promotes relaxation and sleep through its support of the nervous system. Mixed in equal parts with tea tree, it will eliminate plantar warts.
        <br>
        <br> Bulgarian Lavender is also used in perfumes and potpourri. Used in sachets in closets or drawers, clothes will smell lovely and moths are deterred from clothing and pantry. Add it to natural dish soaps and hand soaps for its fragrance and antibacterial properties.
        <br>
        <br> Properties: antibacterial, antiseptic, nervine, analgesic and antibacterial.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Cabreuva -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Cabreuva 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Cabreuva 5ml Bottle" />
          <input type="hidden" name="price" value="19.95" />
          <input type="hidden" name="code" value="EO0300" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$19.95 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Myocarpus fastiglatus
        <br>
        <br> Extraction: Steam distilled from plantation grown trees
        <br>
        <br> Origin: Brazil
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Cabreuva is used in skin care for its antiseptic qualities, and is especially helpful to acne. It speeds the healing of wounds and reduces scars. Cabreuva is anti-inflammatory, antiseptic, and can help colds, coughs and bronchitis.
        <br>
        <br> It aids in balancing the hypothalamus. Cabreuva is also used as a fixative in perfumes.
        <br>
        <br> It is nourishing to an overtaxed emotional body. It eases nervous tension and stress. When diluted in carrier oil and used as a compress, it is a tonic to the spleen and pancreas.
        <br>
        <br> Properties: antiseptic, nervine, anti-inflammatory, anticatarrhal, spleen tonic and pancreas tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Calamus -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Calamus 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Calamus 5ml Bottle" />
          <input type="hidden" name="price" value="32.00" />
          <input type="hidden" name="code" value="EO0320" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$32.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Acorus calamus
        <br>
        <br> Extraction: Steam distilled from wild harvested roots
        <br>
        <br> Origin: Kashmir
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Calamus
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Calendula -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Calendula 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Calendula 5ml Bottle" />
          <input type="hidden" name="price" value="20.00" />
          <input type="hidden" name="code" value="EO0340" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$20.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Calendula officianalis
        <br>
        <br> Extraction: CO2 Total Extraction
        <br>
        <br> Origin: Egypt
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-calendula.jpg">
      </div>

      <p class="ptext">
        Calendula has an affinity for skin and tissue. It helps wounds and tissue injuries. It has long been used to aid the stomach lining and can be taken internally when properly diluted. It can be diluted and used vaginally to soothe irritated tissue. It is amazing for gum tissue. Those suffering with poor gum health can apply calendula diluted to their gums (after brushing teeth), morning and night to improve gum health; or apply it weekly to maintain healthy gums.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Caraway -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Caraway 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Caraway 5ml Bottle" />
          <input type="hidden" name="price" value="21.08" />
          <input type="hidden" name="code" value="EO360" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="6" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$21.08 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="6" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Carum carvii
        <br>
        <br> Extraction: Steam distilled from certified organic seed
        <br>
        <br> Origin: Hungary
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-caraway.jpg">
      </div>

      <p class="ptext">
        I really enjoy using Caraway when my stomach does not feel right. Upset stomach, bloating, or if I am stressed, I reach for the Caraway and sip a tasty drop in a glass of water.
        <br>
        <br> It is a very good disinfectant and antiseptic. It aids infections of the colon, digestive system, urinary and excretory systems. It also supports healthy blood pressure, strengthens the cardiac muscle and lowers cholesterol when used homeopathically over time.
        <br>
        <br> It has long been a remedy for increasing milk production in lactating mothers. Moms can put a drop of Caraway in one teaspoon of honey and it improves the quality and quantity of milk. It also helps babies with gas and indigestion when diluted and rubbed on their tummy.
        <br>
        <br> Caraway is a known antihistamine and is helpful to people with allergies. Again, taking a drop or two in honey can help with congestion, loosen mucus and relieve inflammation in the nasal tract and lungs. Putting it in a diffuser helps relax inflammation and lessens the histamine response.
        <br>
        <br> Caraway is considered a tonic oil, it tones the heart, liver, organ systems, skin muscles and boosts energy.
        <br>
        <br> Properties: Antacid, antiseptic, galactogogue, heart tonic, liver tonic and muscle tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Cardamom -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Cardamom 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Cardamom 5ml Bottle" />
          <input type="hidden" name="price" value="34.38" />
          <input type="hidden" name="code" value="EO380" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$34.38 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Elletaria cardamomum
        <br>
        <br> Extraction: CO2 Select Extraction
        <br>
        <br> Origin: Guatamala
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-cardamon.jpg">
      </div>

      <p class="ptext">
        I enjoy the smell of Cardamom. It is a complex spice, and in the world market it is one of the most popular and the third most expensive, after saffron and vanilla.
        <br>
        <br> Cardamom works wonderfully on conditions of the digestion and the heart meridians. It stimulates the digestive system, is used to support healing for stomach cancer, and is also helpful to the side affects of chemotherapy and nausea. At the same time, it supports its sister meridian of the heart, improving circulation and lowering cholesterol in the body.
        <br>
        <br> It is help for urinary tract infections such as cystitis, nephritis and gonorrhea.
        <br>
        <br> Properties: antimicrobial, antiseptic, anticancer and diuretic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Carrot Root -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Carrot Root 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Carrot Root 5ml Bottle" />
          <input type="hidden" name="price" value="23.20" />
          <input type="hidden" name="code" value="EO0400" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$23.20 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Daucus carota
        <br>
        <br> Extraction: CO2 extraction with 25% Jojoba added
        <br>
        <br> Origin: Germany
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Carrot Root
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Cayenne -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Cayenne 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Cayenne 5ml Bottle" />
          <input type="hidden" name="price" value="7.60" />
          <input type="hidden" name="code" value="EO0440" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="5" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$7.60 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="5" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Capsicum frutescens
        <br>
        <br> Extraction: CO2 Extraction
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-cayenne.jpg">
      </div>

      <p class="ptext">
        Cayenne is an analgesic, anti-inflammatory, which benefits arthritis, rheumatism, backache, muscle pain, nerve pain, strains and sprains. It is beneficial for the heart, kidneys, lungs, pancreas and spleen. Used in a topical application, it goes deep to relieve pain and increase circulation.
        <br>
        <br> Blended with ginger and diluted in carrier oil, this mixture makes a cool heat that is very beneficial to body pain or stomach discomfort when applied externally.
        <br>
        <br> Properties: analgesic, anti-inflammatory, nervine, rubefacient and stimulant.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Celery -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Celery 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Celery 5ml Bottle" />
          <input type="hidden" name="price" value="12.90" />
          <input type="hidden" name="code" value="EO0460" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$12.90 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Apium graveolens
        <br>
        <br> Extraction: CO2 total extraction from leaves, stems and aerial parts
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Celery
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Cinnamon Leaf -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Cinnamon Leaf 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Cinnamon Leaf 5ml Bottle" />
          <input type="hidden" name="price" value="11.28" />
          <input type="hidden" name="code" value="EO580" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$11.28 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Cinnamomum zeylanicum
        <br>
        <br> Extraction: Steam distilled from organic leaves
        <br>
        <br> Origin: Sri Lanka
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-cinnamon-leaf.jpg">
      </div>

      <p class="ptext">
        Cinnamon Leaf has many traditional uses. Because Cinnamon leaf does not use the bark, it is less irritating to the skin, thought it is still powerful in its effects.
        <br>
        <br> I have always loved the smell and taste of cinnamon. Because it is such a strong oil, a little goes a long way. Cinnamon has high amounts of eugenol, which can be highly irritating to the skin.Use a drop in your favorite homemade toothpaste. It is wonderful for toenail fungus; put two drops in a foot-soak.
        <br>
        <br> Women have used Cinnamon Leaf for menstrual cramps, heavy menstruation, irregular menstruation and yeast infections. Dilute in carrier oil and apply externally. One may also place 5-8 drops in a bath and relax for menstrual or other muscle pain.
        <br>
        <br> It can be taken internally as a heart and circulation tonic, and it is also a tonic to the female reproductive system.
        <br>
        <br> Other traditional uses include: ridding the body of worms and insects, relieving pain, and it is an effective antibiotic.
        <br>
        <br> Properties: analgesic, antiseptic, antibiotic, antispasmodic, astringent, carminative, emmenagogue, stimulant, heart and circulation tonic, and female reproductive tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Clary Sage -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Clary Sage 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Clary Sage 5ml Bottle" />
          <input type="hidden" name="price" value="21.95" />
          <input type="hidden" name="code" value="EO0620" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$21.95 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Salvia sclarea
        <br>
        <br> Extraction: Steam distilled from wild harvested aerial parts
        <br>
        <br> Origin: Bulgaria
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-clary-sage.jpg">
      </div>

      <p class="ptext">
        Clary Sage lifts the mood, relieves depression and helps one sleep. It is particularly beneficial for hormone-related depression, anxiety or mood swings. It offers relief from extreme emotion and anxiety, and helps one free their perspective and reclaim emotional balance. It kills bacterial growth. It is nourishing to the uterus and can relieve PMS and menstrual pain. May be taken homeopathically, or try Clary Sage, Lavender, Ylang Ylang, Geranium, or Cypress in some combination in a foot bath and relax!
        <br>
        <br> Properties: emmenagogue, antidepressant, nervine, antibacterial and uterine tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
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

          <label class="cart-label-left">$7.90 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Citrus deliciosa, Clementina variety
        <br>
        <br> Extraction: Cold pressed wild leaves
        <br>
        <br> Origin: Italy
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-orange-clementine-v1.jpg">
      </div>

      <p class="ptext">
        Clementine essential oil has a fresh sweet scent that is uplifting and cheerful. It is calming and relaxing to hyper children and is safe to diffuse. It is a powerful antidepressant and relieves insomnia. It relieves bronchial spasms and is helpful to asthmatics ready to release fears and old emotions. Clementine orange has an affinity for the solar plexus chakra.
        <br>
        <br> Properties: Antibacterial, antidepressant and antispasmodic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Clove Bud -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Clove Bud 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Clove Bud 5ml Bottle" />
          <input type="hidden" name="price" value="8.50" />
          <input type="hidden" name="code" value="EO0660" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$8.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Eugenia carophyllata
        <br>
        <br> Extraction: Steam distilled from organic flower buds
        <br>
        <br> Origin: Sri Lanka or Madagascar
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-clove-bud.jpg">
      </div>

      <p class="ptext">
        When I was a little girl, my mom gave me clove buds for a toothache (I would put it on the painful tooth). It relieved my pain until I could see a dentist. Clove has long been used for dental care, toothaches, cavities and infections. It is lesser known for its ability to increase blood circulation and purify the blood. It reduces pain and spasms. It also helps maintain the health and tone of the stomach. It can be very sensitizing, so use well diluted.
        <br>
        <br> Properties: analgesic, antiseptic, anti-infectious, rubefacient, antispasmodic and digestive tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Combava Petitgrain -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Combava Petitgrain 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Combava Petitgrain 5ml Bottle" />
          <input type="hidden" name="price" value="15.99" />
          <input type="hidden" name="code" value="EO0680" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="10" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$15.99 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="10" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Combava hystix
        <br>
        <br> Extraction: Steam distilled from wild harvested flowers and leaves
        <br>
        <br> Origin: Madagascar
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Combava lowers production from the sebaceous glands of the skin, which is very helpful for acne. It stimulates circulation, reduces swollen glands and stimulates lymphatic drainage, which makes it a wonderful addition for massage. It also relieves inflammation. Combava is a liver decongestant and stimulates bile production. It balances testicular and ovarian hormones.
        <br>
        <br> It's cheerful scent lifts the spirit and can be diffused for depression, stress and anxiety.
        <br>
        <br> Properties: Rubefaciant, anti-inflammatory, cholagogue, antidepressant and nervine.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Coriander -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Coriander 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Coriander 5ml Bottle" />
          <input type="hidden" name="price" value="15.25" />
          <input type="hidden" name="code" value="EO0700" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$15.25 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Corriandrum sativum
        <br>
        <br> Extraction: CO2 extraction from wild seeds and berries
        <br>
        <br> Origin: Poland
        <br>
        <br>
      </p>
      <br>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-coriander.jpg">
      </div>

      <p class="ptext">
        Coriander comes from cilantro seed and is used to relieve gas, bloating and stomach pain. It improves the appetite and sweetens the breath. It relieves spasms in the stomach caused by nervous tension. It is also helpful for colitis. Applied externally, it is very helpful to rheumatism as it helps eliminate uric acid, toxins and heavy metals from the body. It stimulates brain function and nervous system activity. Traditionally, Coriander was used to help breakouts from small pox or chicken pox.
        <br>
        <br> Its sweet scent is added to many perfumes. It blends particularly well with citrus, floral and other spices.
        <br>
        <br> Properties: carminative, antispasmodic, antirheumatic and nervine.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Cumin -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Cumin 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Cumin 5ml Bottle" />
          <input type="hidden" name="price" value="20.70" />
          <input type="hidden" name="code" value="EO0760" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$20.70 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Cuminum cyminum
        <br>
        <br> Extraction: CO2 extraction of the seeds
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>
      <br>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-cumin.jpg">
      </div>

      <p class="ptext">
        In a homeopathic dose, Cumin is very helpful to the digestive tract. It aids bacterial infection in the stomach, small intestine and colon. It increases the peristaltic action and stimulates bile production. It is effective for septic and is an infection fighter externally on wounds. It is also used to treat chronic viral issues. Cumin is high in antioxidants, which remove toxins from the body. It stimulates lymphatic circulation, and is helpful to prostate congestion. When applied to the energy centers of the body, it stimulates hormonal balance.
        <br>
        <br> Traditionally, cumin was used to treat diarrhea and cholera, both caused by bacteria.
        <br>
        <br> Properties: Antibacterial, carminative, cholagogue, antiseptic, anti-infection and antiviral.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Cypress -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Cypress 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Cypress 5ml Bottle" />
          <input type="hidden" name="price" value="9.00" />
          <input type="hidden" name="code" value="EO0780" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$9.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Cupressus sempervirens
        <br>
        <br> Extraction: Steam Distilled
        <br>
        <br> Origin: Crete
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-cypress.jpg">
      </div>

      <p class="ptext">
        Cypress is very helpful for increasing circulation and blood flow. It is a great choice for vein and circulation blends. Cypress aids enlarged or congested prostates, lymphatic conditions and stimulates the removal of toxins. It is also helpful for edema and cellulite conditions. It balances male or female hormones and decreases symptoms of PMS and menstrual pain. It is equally effective for symptoms of menopause. It disinfects the air and is antiviral, antibacterial, antifungal and antimold.
        <br>
        <br>Cypress can help restore emotional balance to those overcome with grief. It is wonderful in a diffuser to clear energy from a room. Place a diluted drop on your wrists, and smell it while taking a walk. Mix it in carrier oil and apply it to the solar plexus and root chakras.
        <br>
        <br>Properties: Rubefacient, diuretic, antiviral, antibacterial, antifungal and antimold.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>
      <div id="d"></div>
      <br>
      <br>
      <br>
      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Eucalyptus Smithii -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Eucalyptus smithii 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Eucalyptus Smithii 5ml Bottle" />
          <input type="hidden" name="price" value="8.60" />
          <input type="hidden" name="code" value="EO0880" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="4" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$8.60 &nbsp;Qty</label>
          <input class="form-qtyspin" type="number" min="1" max="4" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Eucalyptus smithii
        <br>
        <br> Extraction: Steam distilled from wild leaves
        <br>
        <br> Origin: Australia &amp; South Africa
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-eucalyptus-smithii.jpg">
      </div>

      <p class="ptext">
        This is a delicate member of the eucalyptus family that aids breathing and the removal of mucus from the respiratory system during colds, flu or lung infections.
        <br>
        <br> It's gentleness is well-suited for the young and the elderly.
        <br>
        <br> Properties: anticattarhal, antiviral, antiseptic, antispasmodic, antirheumatic, anti-inflammatory.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Fenugreek -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Fenugreek 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Fenugreek 5ml Bottle" />
          <input type="hidden" name="price" value="32.50" />
          <input type="hidden" name="code" value="EO0940" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$32.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Trigonella foenum-graecum
        <br>
        <br> Extraction: CO2 Extract
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Fenugreek is very popular in the ayurvedic tradition. It is made into tea, eaten as food and the seeds are very good for the digestive system.
        <br>
        <br> It is very good for breastfeeding mothers. It increases the amount of breast milk and is nutritious for mother and child. Women use it to balance hormones, the symptoms of PMS and ease the transition of menopause.
        <br>
        <br> The presence of glactomannan brings cardiovascular benefits such as lowering the risk of heart attack. The essential oil also contains potassium, which can help lower blood pressure.
        <br>
        <br> It is used to balance blood sugar and kidney health. It stimulates circulation and reduces swelling when it is applied to the skin. This is helpful to acne and boils. It is added to hair care products to stop thinning hair.
        <br>
        <br> It calms diarrhea, upset stomach, bloating, gas and is a tonic for the digestive system.
        <br>
        <br> Because of its hormonal properties, Fenugreek should not be used during pregnancy.
        <br>
        <br> Properties: carminative, galactagogue, rubefacient and antispasmodic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Foraha -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Foraha 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Foraha 5ml Bottle" />
          <input type="hidden" name="price" value="6.70" />
          <input type="hidden" name="code" value="EO0960" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="4" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$6.70 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="4" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Calophyllum inophyllum
        <br>
        <br> Extraction: Cold pressed from wild harvested fruit
        <br>
        <br> Origin: Madagascar
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Five milliliter bottle with a Napasha Way Label" src="images/pp-foraha.jpg">
      </div>

      <p class="ptext">
        Is Foraha a carrier oil or essential oil? Also called Tamanu, this wonderful oil is used as both a carrier oil and essential oil for acne; used over time it can help severe acne and pockmarks. It is well documented that foraha is helpful for reducing scars, minor wounds, irritated tissue, rashes and bedsores. It promotes new tissue growth. It is antifungal, antibacterial and anti-inflammatory.
        <br>
        <br> Did you know? To accelerate acne healing, remove soda, coffee, white sugar and fried foods from your diet.
        <br>
        <br> Properties: Emollient, vulnerary, antifungal, antibacterial and anti-inflammatory.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Frankincense -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Frankincense 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Frankincense 5ml Bottle" />
          <input type="hidden" name="price" value="28.95" />
          <input type="hidden" name="code" value="EO0980" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$28.95 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Boswelia carteri
        <br>
        <br> Extraction: CO2 extraction from wild harvested resin
        <br>
        <br> Origin: Somalia
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-frankincense.jpg">
      </div>

      <p class="ptext">
        Frankincense is one of the most famous of the Biblical oils. It has been used for over 5,000 years as a medicinal and spiritual oil. It is powerful for the digestion when rubbed on the stomach, and is particularly effective for digestive inflammation. It has been used for thousands of years to nourish skin, lessen inflammation and scars. It is beneficial for skin issues such as boils, infection and wounds. It has antitumoral and anticanceral properties and is being used as part of a healing program for breast, prostate, cervical, uterine, skin, and brain cancer.
        <br>
        <br> It can open the higher mind during prayer and meditation, release stress and soothe nerves. It relates to the Brow and Crown chakras.
        <br>
        <br> Properties: Anti-inflammatory, vulnerary, antiseptic, antibacterial, antitumoral, anticancer, and nervine.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>
      <div id="g"></div>
      <br>
      <br>
      <br>
      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Galbanum -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Galbanum 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Galbanum 5ml Bottle" />
          <input type="hidden" name="price" value="25.90" />
          <input type="hidden" name="code" value="EO1000" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$25.90 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Ferula galbaniflua
        <br>
        <br> Extraction: CO2 extraction from wild plants
        <br>
        <br> Origin: Iran
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-galbanum.jpg">
      </div>

      <p class="ptext">
        This is another of the great holy oils from the Bible. It supports liver health. It increases blood and lymph circulation, clears congestion and eases breathing. It removes toxins and improves skin health. It eliminates parasites and aids wound healing. I add this to blends when I want something to go deep into tissue or bone.
        <br>
        <br> Properties: Rubefacient, Anticatarrhal, vulnerary, antiparasitic, and antiseptic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Geranium -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Geranium 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Geranium 5ml Bottle" />
          <input type="hidden" name="price" value="8.95" />
          <input type="hidden" name="code" value="EO1020" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="6" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$8.95 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="6" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Pelargonium graveolens
        <br>
        <br> Extraction: Steam distilled from wild harvested aerial parts
        <br>
        <br> Origin: Egypt
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-geranium.jpg">
      </div>

      <p class="ptext">
        Geranium is very nourishing to skin regeneration. It balances hormones and glandular functions, which aids all skin types. It is very supportive of the liver and pancreas, which is helpful to diabetics. When used regularly, Geranium helps neuropathy pain and discomfort. It is very helpful for kidney and bladder function and can be taken homeopathically, or mixed in carrier oil and applied externally to these organs.
        <br>
        <br> Geranium is helpful to the root chakra. It aids us in releasing emotional attachments and offers benefits to the throat chakra enhancing communication.
        <br>
        <br> The Egyptian geranium is not as sweet as its South African Rose Geranium counterpart, but its healing properties are wonderful and for the cost conscious, it is a money saving and effective alternative.
        <br>
        <br> Properties: Vulnerary, nervine, kidney tonic and bladder tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- German Chamomile -->
      <div class="cart-wrap">
        <p class="ptext-product-name">German Chamomile 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="German Chamoile 5ml Bottle" />
          <input type="hidden" name="price" value="44.90" />
          <input type="hidden" name="code" value="EO1040" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="0" />
          <input type="hidden" name="quantity_max" value="0" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$44.90 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Matricaria recutita
        <br>
        <br> Extraction: CO2 Extraction
        <br>
        <br> Origin: Germany
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-german-chamomile.jpg">
      </div>

      <p class="ptext">
        This is a liver balancer and stimulant, known to ease digestion and ulcers. It is strongly anti-inflammatory and relieves pain and swelling – it is a first choice for severe soft tissue injuries and sprains. It is very helpful to arthritis and muscle aches. It can be placed "neat" on open wounds to prevent infection. The total extract is a liver and pancreatic regenerator. It enhances the production and release of bile, and helps dissolve stones from the gall bladder.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Ginger -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Ginger 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Ginger 5ml Bottle" />
          <input type="hidden" name="price" value="20.30" />
          <input type="hidden" name="code" value="EO1060" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$20.30 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Zingiber officianalis
        <br>
        <br> Extraction: CO2 Total Extraction from certified organic roots
        <br>
        <br> Origin: India.
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Five milliliter bottle with a Napasha Way Label" src="images/pp-ginger.jpg">
      </div>

      <p class="ptext">
        Ginger oil is a common spice with its origins in India and Ayurvedic medicine. It is also common to China and now used all over the world. It has very strong digestive properties. It makes meat easier to digest, is used for stomach upsets, dyspepsia, colic, spasms, diarrhea, flatulence and bowel related problems. Ginger decreases appetite and can help those who are trying to lose weight.
        <br>
        <br> It is traditionally used to treat food poisoning and for intestinal infections and bacterial dysentery. It helps with nausea, motion sickness and vomiting.
        <br>
        <br> Ginger is strongly anti-inflammatory. It contains Zingibain, which is an analgesic and reduces pain caused by muscle aches, arthritis, rheumatism, headaches and migraines.
        <br>
        <br> Women have used ginger oil to relieve irregular and painful menstrual discharges. It is also helpful for depression, mental stress and exhaustion. Use it in a diffuser for this purpose.
        <br>
        <br> Properties: anti-inflammatory, rubefacient, analgesic, anti-depressant and carminative.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Grindelia -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Grindelia 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Grindelia 5ml Bottle" />
          <input type="hidden" name="price" value="37.18" />
          <input type="hidden" name="code" value="EO1120" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$37.18 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Grindelia squarrosa
        <br>
        <br> Extraction: Steam distilled by an artisan distiller from whole wild plants
        <br>
        <br> Origin: Utah USA.
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Five milliliter bottle with a Napasha Way Label" src="images/pp-grindelia.jpg">
      </div>

      <p class="ptext">
        Grindelia or “Gum Plant”
        <br>
        <br> Grindelia is a traditional aid for asthma and bronchial spasms. It relieves asthmatic and labored breathing, and relieves coughing and spasms. It is clearing to the whole respiratory system. It is an expectorant and antispasmodic, aiding allergenic attacks, not only by relieving the symptoms, but in creating antibodies to reduce episodes and their severity. It is now being used as a treatment for emphysema. Grindelia is helpful where phlegm obstructs the airways. Use a diffuser to clear the passages and bronchial tubes.
        <br>
        <br> Grindelia has also been used traditionally as a treatment for whooping cough.
        <br>
        <br> It can be used for hives, rashes, poison ivy and skin eruptions.
        <br>
        <br> Properties: Anti-asthmatic, antispasmodic, expectorant and anticatarrhal.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Havozo) -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Havozo 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Ravensare (Havozo) 5ml Bottle" />
          <input type="hidden" name="price" value="13.80" />
          <input type="hidden" name="code" value="EO1140" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$13.80 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Ravensare anisata
        <br>
        <br> Extraction: Steam distilled from wild bark
        <br>
        <br> Origin: Madagascar
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Havozo also belongs to the tee tree family and is one of the strongest anti-viral essential oils, effective against shingles, herpes and meningitis. It is a gall bladder tonic and stimulates the production of bile. It is helpful for allergies and is a great treatment for flu. Apply diluted to the spine or chest and cover with a hot wet towel. Soak for 10-20 minutes. Repeat as necessary.
        <br>
        <br> As a gall bladder tonic, start with a 5% dilution in olive oil and apply to the gallbladder daily for several weeks. For herpes: Do a weekly spinal treatment. In addition, make a 5-10% solution in Sea Buckthorn or Foraha and apply directly onto herpes outbreaks.
        <br>
        <br> Properties: antiviral, galactagogue and gall bladder tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Helichrysum -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Helichrysum 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Helichrysum 5ml Bottle" />
          <input type="hidden" name="price" value="122.00" />
          <input type="hidden" name="code" value="EO1160" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$122.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Helichrysum italicum
        <br>
        <br> Extraction: Steam distilled from wild harvested aerial parts
        <br>
        <br> Origin: Bosnia
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Recluse spider bites, aging skin, deep cellular regeneration for wounds, burns, scars and injuries are all aided by Helichrysum. Its anti-inflammatory effects are very helpful to arthritis, spinal pain, and varicose veins. It is very good for the liver and spleen and can be applied via compress to these areas. It helps regulate cholesterol. I have used it for second and third degree burns; and in combination with Geranium, Lavender, honey, comfrey and wheat germ, it is amazing. For herpes outbreaks, mix it with ravensare and foraha to relieve discomfort and speed healing.
        <br>
        <br> It relieves muscle spasms, soothes inflammation from injury or fever. It soothes coughs and keeps the nervous system in order, reducing anxiety and stress.
        <br>
        <br> It is helpful to cystitis, arthritis, sinusitis, colitis, neuralgia and varicose veins.
        <br>
        <br> It is fabulous for ear infections. Mix equal parts Fine Population or Bulgarian Lavender and Helichrysum diluted in cold pressed Olive oil. Place a drop or two of the mixture in the ear for quick relief.
        <br>
        <br> It is used in many expensive lotions and creams for its ability to heal cuts, scar marks and skin irregularities. It is an expensive oil as it requires high volumes of the plants and labor with low yield). Still, it is a staple in my home for its practical and effective uses.
        <br>
        <br> Properties: antispasmodic, anticoagulant, antiallergenic, antihematic, anti-inflammatory, nervine, cicatrisant, antimicrobial, antiseptic, expectorant and cholagogue.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Holy Basil -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Holy Basil 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Holy Basil 5ml Bottle" />
          <input type="hidden" name="price" value="19.95" />
          <input type="hidden" name="code" value="EO1180" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left neo-dark-orange"><em>Out of Stock&nbsp;</em></label>
          <input disabled class="form-qtyspin" type="number" min="0" max="0" step="1" value="" name="quantity" />
          <input disabled class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Occimum sanctum
        <br>
        <br> Extraction: Steam distilled from the seeds
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-holy-basil.jpg">
      </div>

      <p class="ptext">
        This is called “Tulsi” in India and has been used for 1000’s of years to support the immune system and the liver. It aids digestion, respiration, infection and stress disorders. It is an excellent tonic and is considered good for the whole body. Adults can take it in 1% dilution internally for immune and organ support. Applied topically in olive oil, it relieves itchy skin. Add it to tea tree, oregano, thyme or rosemary for immune support during colds, flu, pneumonia or bronchitis.
        <br>
        <br> Properties: carminative, antiseptic, nervine, liver tonic, digestive tonic, whole body tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Hops -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Hops 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Hops 5ml Bottle" />
          <input type="hidden" name="price" value="16.50" />
          <input type="hidden" name="code" value="EO1200" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$16.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Humulus lupus
        <br>
        <br> Extraction: CO2 Select
        <br>
        <br> Origin: Germany
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Hops is an analgesic and can provide help for chronic pain. It is a general sedative and is helpful to those suffering with anxiety and mood swings. It is used to reduce menstrual pain and cramping.
        <br>
        <br> It is a welcome addition to formulas for psoriasis and skin irritation, which take advantage of Hops’ anti-inflammatory abilities. It is also helpful for temporary insomnia when diffused before bedtime.
        <br>
        <br> For others, it is considered a very effective relief for tension and headaches. It can relax the tightest muscles in the shoulders and neck and eases anxiety while calming the mind.
        <br>
        <br>

        <span class="ptext-italic">Hops is not recommended for people experiencing depression.</span>
        <br>
        <br> Properties: analgesic, sedative, emmenagogue, anti-inflammatory and nervine.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Hyssop -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Hyssop 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Hyssop 5ml Bottle" />
          <input type="hidden" name="price" value="36.20" />
          <input type="hidden" name="code" value="EO1220" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$36.20 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Hyssop decumbens
        <br>
        <br> Extraction: Steam distilled from wild harvested aerial parts
        <br>
        <br> Origin: Bulgaria
        <br>
        <br>

        <span class="ptext-italic">(This variety does not have ketones that may be sensitizing to children or sensitive adults.)</span>
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Hyssop is wonderful for clearing congestion from the bronchial tubes and lungs. It has a high linalol content making it a potent antiviral. It liquefies mucus and eases breathing during bronchitis or pneumonia and other issues of the upper respiratory system, including asthma and allergies. It is helpful for relieving grief. It also reduces the effects of stress on the nervous system.
        <br>
        <br> Properties: Anticatarrhal, antiviral, nervine and anti-asthmatic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>
      <div id="j"></div>
      <br>
      <br>
      <br>
      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Jasmine Wax -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Jasmine Wax 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Jasmine Wax 5ml Bottle" />
          <input type="hidden" name="price" value="9.76" />
          <input type="hidden" name="code" value="EO1240" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$9.76 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Jasminum grandiflorum
        <br>
        <br> Extraction: This is the waxy byproduct filtered out of Jasmine Absolute. It has been produced using solvents (alcohol). To make it more pourable, it has been thinned with filtered coconut oil.
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Jasmine Wax
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Juniper Berry -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Juniper Berry 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Juniper Berry 5ml Bottle" />
          <input type="hidden" name="price" value="17.98" />
          <input type="hidden" name="code" value="EO1260" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$17.98 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Juniperis communis
        <br>
        <br> Extraction: CO2 extraction from wild berries
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-juniper-berry.jpg">
      </div>

      <p class="ptext">
        Juniper Berry has an affinity with the kidneys and helps rid the body of toxins, cellulitis, rheumatism and gout. Juniper Berry is found in many herbal formulas as support for diabetes. Consult with a practitioner before using this oil, as it is one of many changes that are helpful to freeing oneself of Type II Diabetes.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>

<!--
    <div class="container-product"> <!- Juniper Desert ->
      <div class="cart-wrap">
        <p class="ptext-product-name">Juniper Desert 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Juniper Desert 5ml Bottle" />
          <input type="hidden" name="price" value="42.54" />
          <input type="hidden" name="code" value="EO1280" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$42.54 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Juniperis monosperma
        <br>
        <br> Extraction:
        <br>
        <br> Origin:
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Juniper Desert
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>
-->

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

      <p class="ptext-no-just">
        Scientific Name: Lavender augustifolia grosso
        <br>
        <br> Origin: Steam distilled from organic flowers
        <br>
        <br> Origin: South Africa
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-lavender-augustfolia-grosso.jpg">
      </div>

      <p class="ptext">
        Lavender Grosso does not have the famous scent of the Bulgarian or English Lavenders. However, it is a good energetic choices for wounds, skin and hair care, blood sugar imbalances, heart, nerve issues and headaches; for those seeking healing lavender without the full-body aroma (for those not attracted to lavender scent) of its more famous siblings.
        <br>
        <br> Properties: antibacterial, anti-infectious and nervine.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Lemon -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Lemon 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Lemon 5ml Bottle" />
          <input type="hidden" name="price" value="7.50" />
          <input type="hidden" name="code" value="EO1400" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$7.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Citrus limon
        <br>
        <br> Extraction: Cold pressed from the peels of the fruit
        <br>
        <br> Origin: Italy
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-lemon.jpg">
      </div>

      <p class="ptext">
        Lemon essential oil helps detoxify the liver, improves digestion, helps balance blood sugar, and stimulates the pancreas. It is an aid for kidney and bladder infections and a choice herbal remedy for nephritis, as it moves stagnant fluids and detoxifies the kidneys. It improves mental clarity. It is known to kill bacteria that cause both meningitis and typhus.
        <br>
        <br> When used in a diffuser, it clears mold, infection and bacteria from the air. Diffuse it to increase concentration and focus. Place a few drops in carrier oil and rub it on the solar plexus to aid confidence and happiness.
        <br>
        <br> Properties: Antibacterial and antimold.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Lemon Eucalyptus -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Lemon Eucalyptus 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Lemon Eucalyptus 5ml Bottle" />
          <input type="hidden" name="price" value="15.78" />
          <input type="hidden" name="code" value="EO1420" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$15.78 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Eucalyptus radiata
        <br>
        <br> Extraction: Steam distilled from certified organic leaves
        <br>
        <br> Origin: India.
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-eucalyptus-lemon.jpg">
      </div>

      <p class="ptext">
        Lemon Eucalyptus has a wonderful citrus aroma that opens breathing passages and breaks up phlegm (mucolytic) for removal. It is antiviral and fights fungal infection. It has wonderful immune building properties. Apply topically as a chest or spinal compress or diffuse into the air. It is helpful in all blends related to the lungs, and is gentle enough for children and adults.
        <br>
        <br> Properties: anti-catarrhal, expectorant, antiviral and antifungal.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Lemon Ironbark -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Lemon Ironbark 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Lemon Ironbark 5ml Bottle" />
          <input type="hidden" name="price" value="" />
          <input type="hidden" name="code" value="EO1440" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="0" />
          <input type="hidden" name="quantity_max" value="0" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left neo-dark-orange"><em>Out of Stock&nbsp;</em></label>
          <input disabled class="form-qtyspin" type="number" min="0" max="0" step="1" value="" name="quantity" />
          <input disabled class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Eucalyptus staigeriana
        <br>
        <br> Extraction: Steam distilled from the leaves of wild trees
        <br>
        <br> Origin: Australia
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-lemon-ironbark.jpg">
      </div>

      <p class="ptext">
        Lemon Ironbark is a very soft eucalyptus. It makes a drink that is very high in antioxidants (1% solution in water). It aids breathing passages and expels mucus. It is useful in massage blends for body aches and pains due to muscle strain, colds or flu. It is effective for both virus and infection.
        <br>
        <br> Properties: Anti-catarrhal, antibacterial, antifungal, anti-infectious and expectorant.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Lemon Myrtle -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Lemon Myrtle 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Lemon Myrtle 5ml Bottle" />
          <input type="hidden" name="price" value="13.90" />
          <input type="hidden" name="code" value="EO1460" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$13.90 &nbsp; Qty &nbsp;</label>
          <input disabled class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input disabled class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Backhousia citriodora
        <br>
        <br> Extraction: Steam distilled from wild leaves of the tree
        <br>
        <br> Origin: Australia
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Five milliliter bottle with a Napasha Way Label" src="images/pp-lemon-myrtle.jpg">
      </div>

      <p class="ptext">
        Lemon Myrtle is helpful for relieving sinus and hay fever symptoms when inhaled. It is an expectorant, anti-catarrhal and antiseptic, so it is great for bronchitis, coughs and mucus in the lungs and respiratory system.
        <br>
        <br> It stimulates the liver and is a welcome addition to acne and psoriasis blends. Dilute it well for this use.
        <br>
        <br> Lemon Myrtle relieves congestion in the prostate gland and it also works to balance thyroid, ovary and hormonal issues in general.
        <br>
        <br> Lemon Myrtle contains over 95% citral, which is more than any other oil, and it is known to be even more powerful in its germicidal properties than Tea tree oil.
        <br>
        <br> Properties: anti-catarrhal, antiseptic, expectorant and liver stimulant.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Lemongrass -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Lemongrass 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Lemongrass 5ml Bottle" />
          <input type="hidden" name="price" value="12.60" />
          <input type="hidden" name="code" value="EO1480" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$12.60 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Cymbopogon flexuosus
        <br>
        <br> Extraction: Steam distilled from certified organic leaves
        <br>
        <br> Origin: India or Sri Lanka
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-lemongrass.jpg">
      </div>

      <p class="ptext">
        Lemongrass is one of the best aids for ligament injuries, tendonitis, pain or inflammation. It works very well with lavender and Rosemary verbenon for this purpose. It is an effective nervine and can be taken for shaking hands and limbs (Lemongrass, Lavender and Rosemary verbenon work well for this, too.) It aids general body pain after strenuous activity or exercise. It is antifungal, antimicrobial and anti-inflammatory.
        <br>
        <br> It improves circulation and lymph flow. It is helpful for varicose veins.
        <br>
        <br> It is an effective repellent for mosquitos, ticks and chiggers.
        <br>
        <br> Lemongrass can be very helpful to those with depression, anxiety and stress. Put a drop in your morning tea and relax before meditation. Traditionally it was also used for typhoid, food poisoning and malaria.
        <br>
        <br> It is used to prevent hair and tooth loss as it reduces the blood flow through the vessels. It also makes a very effective natural deodorant.
        <br>
        <br>

        <span class="ptext-italic">Test patch.  Can be a skin irritant for those that are sensitive.</span>
        <br>
        <br> Properties: astringent, anti-inflammatory, nervine, analgesic, antifungal, antimicrobial and rubefacient.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Marjoram -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Marjoram 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Marjoram 5ml Bottle" />
          <input type="hidden" name="price" value="13.66" />
          <input type="hidden" name="code" value="EO1520" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="4" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$13.66 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="4" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Origanum marjorana
        <br>
        <br> Extraction: Steam distilled from certified organic leaves and aerial parts
        <br>
        <br> Origin: Egypt
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-marjoram.jpg">
      </div>

      <p class="ptext">
        Marjoram is commonly called Sweet Marjoram. It’s a powerful antiseptic and antibacterial. Dilute in carrier oil and rub on the chest to calm coughs and decongest the lungs. It was traditionally used for Whooping Cough, flu, mumps, measles, food poisoning, typhoid, malaria and dysentery.
        <br>
        <br> Marjoram relieves painful joints, muscles and arthritis. It also relieves pain from colds, fevers and inflammation. For some people it is the best essential oil for headaches and pain. It relieves spasms in the stomach, lungs and muscles. It is also effective for funguses, ringworm and boils. It is very good for your brain and tones and strengthens the nervous system.
        <br>
        <br> It can be used on the heart to relax the heart muscles. It is a harmonizer in blends, bringing scents together. I use it in massage blends to relieve pain, relax muscles and soften the “attitudes” of the heart.
        <br>
        <br> Properties: antiseptic, antibacterial, expectorant, antispasmodic, anti-inflammatory, analgesic, antifungal, anti-infectious and nervine.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- May Chang -->
      <div class="cart-wrap">
        <p class="ptext-product-name">May Chang 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="May Chang 5ml Bottle" />
          <input type="hidden" name="price" value="10.50" />
          <input type="hidden" name="code" value="EO1560" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="7" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$10.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="7" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Litsea cubeba
        <br>
        <br> Extraction: Steam distilled from the berries of the tree
        <br>
        <br> Origin: China
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        May Chang has a cheerful, bright aroma. It is a tonic for the nervous system and can help with digestive problems. It clears molds, bacteria and odors from the environment. It opens breathing passages, is a bronchodilator and anti-inflammatory used for pain relief.
        <br>
        <br> This oil is also a heart tonic, reducing high blood pressure, arteriosclerosis and cholesterol. It also has a cleansing effect on negative emotional energy.
        <br>
        <br> May Chang is an anti-bacterial and anti-viral, which is helpful for colds and cough. It can be used in a diffuser or applied to the skin in carrier oil. It is an effective treatment for athlete’s foot as well.
        <br>
        <br> Properties: nerve tonic, heart tonic, antibacterial, antiviral, antimold, anti-inflammatory and analgesic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Mountain Savory -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Mountain Savory 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Mountain Savory 5ml Bottle" />
          <input type="hidden" name="price" value="14.50" />
          <input type="hidden" name="code" value="EO1620" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$14.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Satureja montana
        <br>
        <br> Extraction: Steam distilled form certified organic aerial parts
        <br>
        <br> Origin: Switzerland
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Mountain Savory is finding it’s place among essential oils as a digestive treatment for Crohn’s, ulcers, IBS, chronic heartburn and indigestion that comes from an inflamed lining and infection in the digestive tract. Dilute well if you choose to take it internally. It is best accompanied with a protocol to rebuild the healthy flora and fauna in the digestive tract; Kefir or live cultured yogurt are highly recommended.
        <br>
        <br> It is a very strong anti-bacterial and anti-microbial oil. Dilute it well before using. It can be used in a diffuser for lung and respiratory conditions or diluted and applied to the chest and spine. Mountain Savory, Spike Lavender and Blue Gum Eucalyptus work well for this purpose.
        <br>
        <br> Properties: antibacterial, antimicrobial, digestive tonic, antispasmodic and anti-inflammatory.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Myrrh -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Myrrh 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Myrrh 5ml Bottle" />
          <input type="hidden" name="price" value="39.78" />
          <input type="hidden" name="code" value="EO1660" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$39.78 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Comiphora molmol
        <br>
        <br> Extraction: Steam distilled from resin of wild plants
        <br>
        <br> Origin: Ethiopia
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Myrrh is another of the famous Biblical oils. It is a powerful anti-inflammatory, and a welcome addition to ligament, tendon and muscle blends. It is antiviral. It is anticancer, and is used as part of a treatment protocol for oral, prostate and breast cancer. It is a digestive aid. It’s beautiful aroma can help release suppression and depression. It stimulates the production of white blood cells and can be used homeopathically to nourish the pineal, pituitary and hypothalamus. It is very good for mouth ulcers, pyorrhea, gingivitis and sore throats. It is a good partner with calendula for gum health. It is a nervine. It is also a helpful addition to ligament, tendon and muscle blends.
        <br>
        <br> Properties: anti-inflammatory, rubifacient, antiviral, anticancer, anti-depressant, nervine and carminative.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>
      <div id="n"></div>
      <br>
      <br>
      <br>
      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Neem -->

      <div class="cart-wrap">
        <p class="ptext-product-name">Neem 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Neem 5ml Bottle" />
          <input type="hidden" name="price" value="7.78" />
          <input type="hidden" name="code" value="EO1680" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$7.78 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Azadicha india
        <br>
        <br> Extraction: CO2 extract
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-neem.jpg">
      </div>

      <p class="ptext">
        Neem is antibacterial, antiparasitic, antifungal, antiprotozoal and antiviral. It is a staple in India for ringworm, fungal infections psoriasis, and lice. There is controversy as to whether or not Neem should be taken internally. There are many other safe alternatives, so I do not choose to use it this way.
        <br>
        <br> Neem is very helpful for pest control. It is used to deter pests from stored grains and is commonly used to deter pests by organic gardeners. It is popular for its ability to repel ticks and chiggers and blends well with Lemongrass, lavender, and cedar for this use.
        <br>
        <br> Properties: antibacterial, antiparasitic, antifungal, antiprotozoal, and antiviral.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
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


    <div class="container-product"> <!-- Oregano $ -->

      <div class="cart-wrap">
        <p class="ptext-product-name">Oregano 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Oregano 5ml Bottle" />
          <input type="hidden" name="price" value="19.98" />
          <input type="hidden" name="code" value="EO1760" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$19.98 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Origanum compactum
        <br>
        <br> Extraction: Steam distilled from wild aerial parts
        <br>
        <br> Origin: Morocco or Turkey
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-oregano-leaf.jpg">
      </div>

      <p class="ptext">
        Oregano is strongly antibacterial, antifungal, promotes perspiration and thus treats colds, flu and fevers. It is used in Europe as an alternative for killing salmonella, staphylococcus, Strep, SARS and e-coli. It is helpful to the lungs and bronchial passages, and is known for killing candida overgrowth in the body (use probiotics like kefir to replace good bacteria). It has been tested effective against giardia, ringworm and rosacea. It is a powerful antioxidant and helps prevent cell damage by free radicals.
        <br>
        <br> Place a drop “neat” just above the upper lip when traveling or when in public during outbreaks (it will feel hot- not recommended for children). Diffuse it to cleanse the air.
        <br>
        <br> Properties: antibacterial, antifungal, anti-inflammatory, diaphoretic and antibiotic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Palma Rosa -->

      <div class="cart-wrap">
        <p class="ptext-product-name">Palma Rosa 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Palma Rosa 5ml Bottle" />
          <input type="hidden" name="price" value="7.60" />
          <input type="hidden" name="code" value="EO1800" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$7.60 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Cymbopogon martini
        <br>
        <br> Extraction: Steam distilled from aerial parts of the grass
        <br>
        <br> Origin: Nepal
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Palma Rosa is antiseptic, antiviral and antibacterial. It is used to promote growth of cells and aids in hydration; It is also helpful for acne rashes and skin conditions; thus it is a staple in many natural cosmetics. It is commonly used as a substitute for true rose oil when mixed with geranium.
        <br>
        <br> Properties: antiseptic, antiviral, antibacterial and vulnerary.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Peppermint -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Peppermint 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Peppermint 5ml Bottle" />
          <input type="hidden" name="price" value="14.80" />
          <input type="hidden" name="code" value="EO1840" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="8" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$14.80 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="8" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Mentha piperita
        <br>
        <br> Extraction: Steam distilled from certified organic leaves and stems
        <br>
        <br> Origin: South Africa
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-peppermint.jpg">
      </div>

      <p class="ptext">
        Peppermint provides quick relief for an upset stomach or digestive tract. Peppermint can be used in a 15% solution on temples and at the base of the skull to release headaches. Peppermint is cooling and has anti-inflammatory abilities, which is quite useful in massage blends for tired, strained or aching muscles. It is also helpful to sinus or chest congestion when diluted and applied externally. It stimulates digestion. It is uplifting when used in a diffuser or inhaled. It releases blocked energy in the mind and body. Place a drop on a bug bite or chigger bite to relieve itching.
        <br>
        <br> Properties: carminative, analgesic, anti-inflammatory, decongestant and antidepressant.
        <br>
        <br>

        <span class="ptext-italic">Not recommended for children under age 3.</span>
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


    <div class="container-product"> <!-- Pink Grapefruit -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Pink Grapefruit 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Pink Grapefruit 5ml Bottle" />
          <input type="hidden" name="price" value="10.80" />
          <input type="hidden" name="code" value="EO1920" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$10.80 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Citrus paradisii
        <br>
        <br> Extraction: Cold pressed from the peels of the fruit
        <br>
        <br> Origin: South Africa
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-pink-grapefruit.jpg">
      </div>

      <p class="ptext">
        Pink Grapefruit is a powerful lymphatic cleanser. It breaks down fat and is helpful in this way when taken internally or rubbed onto the skin. It is an airborne disinfectant for molds and bacteria. It is an overall tonic; strengthening to all the body’s systems. It is good support for bulimia, eating disorders and weight loss.
        <br>
        <br> Properties: antimold, antibacterial.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Ponderosa Pine -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Ponderosa Pine 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Ponderosa Pine 5ml Bottle" />
          <input type="hidden" name="price" value="24.00" />
          <input type="hidden" name="code" value="EO1960" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$24.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Pinus ponderosa
        <br>
        <br> Extraction: Steam distilled from wild crafted needles
        <br>
        <br> Origin: Argentina
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Ponderosa Pine has traditional value to Native American tribes to care for skin issues, cuts, wounds and burns. It was also traditionally used for coughs, lung and chest ailments. I use it to relieve tired, achy muscles and it is sometimes used in making natural perfumes for its warm, honey aroma.
        <br>
        <br> Properties: anti-inflammatory, rubefacient, anti-infectious, vermifuge and anti-spasmodic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>
      <div id="r"></div>
      <br>
      <br>
      <br>
      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Ravensare -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Ravensare 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Ravensare Aromatic 5ml Bottle" />
          <input type="hidden" name="price" value="15.56" />
          <input type="hidden" name="code" value="EO2000" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="7" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$15.56 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="7" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Ravensare aromatic
        <br>
        <br> Extraction: Steam distilled from certified organic leaves
        <br>
        <br> Origin: Madagascar
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Ravensare aromatic is famous in Madagascar as a “cure all” oil, much the same way that Tea tree is used in Australia.
        <br>
        <br> It is used for infections and lung issues in infants, young children and the elderly. For lung issues, I diffuse a few drops of Ravensare with Eucalyptus Smithii. It also makes a great chest rub when diluted in jojoba or cold pressed olive oil. It’s expectorant properties help expel mucus from the lungs and sinus.
        <br>
        <br> Ravensare is very effective in conjunction with Havozo and Foraha for shingles and cold sores.
        <br>
        <br> In Madagascar, it is used for pain, is antifungal, antiseptic, antiviral and makes an excellent disinfectant.
        <br>
        <br> Properties: antiseptic, anti-catarrhal, expectorant, antifungal, antiviral and disinfectant.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Red Myrtle -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Red Myrtle 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Red Myrtle 5ml Bottle" />
          <input type="hidden" name="price" value="22.98" />
          <input type="hidden" name="code" value="EO2040" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="4" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$22.98 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="4" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Myrtus communis
        <br>
        <br> Extraction: Steam distilled from wild aerial parts by an artisan distiller
        <br>
        <br> Origin: Turkey.
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Myrtle is also known as Red Myrtle.
        <br>
        <br> Red Myrtle is another hormone balancer. It is helpful for all pelvic disorders, menstrual, uterine, ovaries and prostate issues. It is effective in treating bladder infections and can be diluted and taken internally for that purpose. It is also an effective respiratory tonic that opens breathing passages, relieves bronchitis, respiratory infections and smoker’s cough when diffused or mixed with carrier oil and applied to the chest.
        <br>
        <br> This is a calming and relaxing oil. It helps dissolve emotions, stress, worry, tension and stimulates emotional balance.
        <br>
        <br> Properties: Emmenagogue, antibacterial, anti-infectious, nervine, and lung tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- River Red Gum -->
      <div class="cart-wrap">
        <p class="ptext-product-name">River Red Gum 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="River Red Gum 5ml Bottle" />
          <input type="hidden" name="price" value="17.98" />
          <input type="hidden" name="code" value="EO2060" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$17.98 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Eucalyptus camaldulensis
        <br>
        <br> Extraction: Steam distilled
        <br>
        <br> Origin: Nepal
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        River Red Gum is a eucalyptus member that was used in aboriginal medicine in Australia for lung ailments and flu.
        <br>
        <br> It is an antiseptic, antimicrobial and disinfectant. It relaxes the muscles, relieves pain in muscles and aching joints. It stimulates the movement of energy and circulation in the body, relieving stagnation in skin and muscles. Eucalyptus is to me a foundation stone for working with essential oils. I mix it with Thyme, Oregano, Ravensare of Tea tree and apply it to the chest for relief from coughs and congestion. I also add it to many of my massage blends where it relieves tired, achy, painful muscles.
        <br>
        <br> Properties: anti-inflammatory, rubefacient, analgesic, antiseptic, antimicrobial and disinfectant.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Roman Chamomile -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Roman Chamomile 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Roman Chamomile 5ml Bottle" />
          <input type="hidden" name="price" value="26.00" />
          <input type="hidden" name="code" value="EO2100" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$26.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Anthemis nobilis
        <br>
        <br> Extraction: Steam distilled from the flowers
        <br>
        <br> Origin: England
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-chamomile-roman.jpg">
      </div>

      <p class="ptext">
        Commonly called English Chamomile, this is a milder form especially useful for children. Diaper rash, dermatitis, sprains, insect bites, cuts, burns and sores. It has some of the anti-inflammatory action of German Chamomile and is useful for sprains and muscle aches.
        <br>
        <br> It brings calm into stressful situations and eases anger or irritability. It can be mixed with olive, apricot kernel, or almond oil and rubbed in small clockwise circles on the tummy to release emotions and calm upset. It is also helpful for infant colic.
        <br>
        <br> Properties: Anti-inflammatory, mildly sedative and nervine.
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


    <div class="container-product"> <!-- Rose Geranium -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Rose Geranium 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Rose Geranium 5ml Bottle" />
          <input type="hidden" name="price" value="32.82" />
          <input type="hidden" name="code" value="EO2140" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$32.82 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Pelargonium asperum rosea
        <br>
        <br> Extraction: Steam distilled from organic flowers
        <br>
        <br> Origin: South Africa
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Rose Geranium is a lovely worker for all kinds of skin issues. It nourishes aging skin and varicose veins. It is able to relieve kidney stones and urinary infection. Rose geranium is also a great choice for spinal compresses. It is a powerful antibacterial and one of the most effective oils against molds and funguses. It is effective for nerve pain, sciatica and low back pain.
        <br>
        <br> Mix Rose geranium (for adults) in jojoba or olive oil and rub on kidneys and bladder (externally) every few hours for kidney/bladder infections. Women may also place a few drops of Rose geranium and 1 teaspoon olive oil on a tampon several times a day.
        <br>
        <br>

        <span class="ptext-italic">When soothing kidney infections or stones, drink lots of water, particularly ½ fresh organic Lemon in an 8 oz. glass of water; or 1 drop Lemon essential oil in 1 quart of water.  Lemon cleanses and detoxifies the kidneys.</span>
        <br>
        <br> Properties: Lithotriptic, vulnerary, antibiotic, antibacterial, antimold, antifungal and nervine.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Rosemary Officianalis -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Rosemary Officianalis 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Rosemary Officianalis 5ml Bottle" />
          <input type="hidden" name="price" value="16.22" />
          <input type="hidden" name="code" value="EO2200" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$16.22 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Rosmarinus officianalis, ct cineole
        <br>
        <br> Extraction: CO2 Extract
        <br>
        <br> Origin: South Africa or Italy
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-rosemary-officianalis.jpg">
      </div>

      <p class="ptext">
        Rosemary Officianalis is strongly antibacterial and anti-inflammatory. It is beneficial to the skin, helpful to dermatitis, psoriasis and even eczema. It prevents premature skin aging and is known as an oil that maintains a youthful look. It supports the liver health by flushing toxins and reducing the buildup of carcinogens in the system. Rosemary is part of a traditional remedy for hair loss.
        <br>
        <br> Properties: antibacterial, anti-inflammatory, rubefacient and anti-aging.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Rosemary Verbenone -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Rosemary Verbenone 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Rosemary Verbenone 5ml Bottle" />
          <input type="hidden" name="price" value="" />
          <input type="hidden" name="code" value="EO2220" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="0" />
          <input type="hidden" name="quantity_max" value="0" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left neo-dark-orange"><em>Out of Stock&nbsp;</em></label>
          <input disabled class="form-qtyspin" type="number" min="0" max="0" step="1" value="" name="quantity" />
          <input disabled class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Rosmarinus officianalis – ct. verbenone
        <br>
        <br> Extraction: Steam distilled from organically grown plants
        <br>
        <br> Origin: South Africa
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-rosemary-officianalis-verbenone.jpg">
      </div>

      <p class="ptext">
        Rosemary is strongly anti-inflammatory and antibacterial and goes deeply into tissue, making it a good choice for joint or muscle inflammation. It has a strong effect on the brain and nervous system, and is excellent for increasing alertness, awareness and memory. It is helpful to people with headaches or nervous exhaustion. It is very helpful to those with colitis, dyspepsia, gas, intestinal infection and liver disorders. It is helpful for asthma, whooping cough and bronchitis. It is mucolytic and breaks up phlegm and congestion.
        <br>
        <br> Rosemary should be avoided during pregnancy or by those with high blood pressure or epilepsy.
        <br>
        <br> Properties: anti-inflammatory, antibacterial, nervine, carminative, anti-catarrhal, and expectorant.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Sage -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Sage 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Sage 5ml Bottle" />
          <input type="hidden" name="price" value="18.00" />
          <input type="hidden" name="code" value="EO2260" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="0" />
          <input type="hidden" name="quantity_max" value="0" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left neo-dark-orange"><em>Out of Stock&nbsp;</em></label>
          <input disabled class="form-qtyspin" type="number" min="0" max="0" step="1" value="" name="quantity" />
          <input disabled class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Salvia officianalis
        <br>
        <br> Extraction: Steam distilled from leaves and stems of wild plants
        <br>
        <br> Origin: Hungary
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Sage has so many benefits. It protects against microbial and bacterial infections. It reduces inflammation of the skin, stomach and intestines. It also has the ability to improve digestion and ulcers.
        <br>
        <br> It stimulates the brain and nervous system. Diffuse a few drops in the morning to awaken and prepare for a busy day.
        <br>
        <br> Women love that it slows down the symptoms of aging due to its high content of antioxidants. It also reduces brown spots or aging spots on the skin. Add sage to your lotions or skin oil formulas.
        <br>
        <br> Properties: antimicrobial antibacterial, anti-inflammatory, carminative and nervine.
        <br>
        <br>

        <span class="ptext-italic">Avoid usage during pregnancy or if you have epilepsy.</span>
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Seabuckthorn Berry -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Seabuckthorn Berry 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Seabuckthorn Berry 5ml Bottle" />
          <input type="hidden" name="price" value="15.90" />
          <input type="hidden" name="code" value="EO2340" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$15.90 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Hippophae rhamnoides
        <br>
        <br> Extraction: CO2 Extraction
        <br>
        <br> Origin: Lithuania
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-seabuckthorn-berry.jpg">
      </div>

      <p class="ptext">
        Seabuckthorn Berry is very high in Vitamin A, C, E, fatty acids and trace minerals making it very effective for regenerating skin. It is one of the few plants in nature that effectively aids sunburn when applied to the burn in carrier oil (cold pressed olive oil is best). It is effective for healing ulcers and wounds. It also reduces inflammation and aids in healing eczema, psoriasis, dermatitis and rosacea.
        <br>
        <br> This oil is effective for boosting energy, nervous system function and can lower cholesterol. Sea Buckthorn is considered non-toxic and non-sensitizing.
        <br>
        <br> Properties: vulnerary, anti-inflammatory, nervine and skin tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
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

      <p class="ptext-no-just">
        Scientific Name: Lavandula latifolia
        <br>
        <br> Extraction: Steam distilled from wild flowers
        <br>
        <br> Origin: France
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-lavender-spike.jpg">
      </div>

      <p class="ptext">
        This lavender smells more medicinal than the other lavenders. It is particularly helpful for lung and respiratory issues. When blended with Ravensare, Tea Tree, or Oregano in carrier oil and applied externally, it aids bronchitis, pneumonia, lung infection, colds and sinus infections. The same blend without carrier oil is effective when used in a diffuser. It is a natural antihistamine and relieves congestion in the lungs and sinus.
        <br>
        <br> Spike Lavender is antibacterial, antifungal and antiviral. It is a welcome addition to blends for skin conditions like athlete’s foot, ringworm and acne.
        <br>
        <br> Properties: antibacterial, antifungal, antiviral, antihistamine and anticatarrhal.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Star Anise -->

      <div class="cart-wrap">
        <p class="ptext-product-name">Star Anise 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Star Anise 5ml Bottle" />
          <input type="hidden" name="price" value="12.48" />
          <input type="hidden" name="code" value="EO2400" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="20" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$12.48 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="20" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Illium verum
        <br>
        <br> Extraction: Steam distilled from the seeds
        <br>
        <br> Origin: China
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-star-anise.jpg">
      </div>

      <p class="ptext">
        Star Anise helps eliminate stomach flus, bird flu and superviruses. It is a powerful antiviral and immune system booster. It reduces the risk of diarrhea from drinking water, which is especially helpful when travelling. It calms an upset stomach, spasms, act as a purgative, clears congestion and eases breathing, aids digestion and tastes good, too! Place a drop on the bottom center of the foot. Or Mix with carrier oil and rub clockwise on the stomach to aid upset. Or put 4 drops in a quart of water and drink it for digestive issues, flu symptoms and to avoid hazards of drinking water while traveling. It is a good oil to take for hepatitis or liver cleansing. Make a homeopathic mixture and take over a period of several months. It is also used as a carrier oil to kill and repel insects, worms and lice.
        <br>
        <br> Properties: antiviral, antispasmodic, carminative, anticatarrhal, and insecticide.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Sweet Basil -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Sweet Basil 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Sweet Basil 5ml Bottle" />
          <input type="hidden" name="price" value="11.92" />
          <input type="hidden" name="code" value="EO2440" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="5" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$11.92 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="5" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Occimum basilicum
        <br>
        <br> Extraction: Steam distillation of the leaves
        <br>
        <br> Origin: Egypt
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Sweet basil has been widely used for centuries to stop diarrhea, cough, mucous discharges, constipation, indigestion and skin diseases. Basil is a digestive tonic and improves indigestion, constipation, stomach cramps and flatulence. It is also used to alleviate bowel pain. It can be diluted and applied externally to the stomach or diluted in a glass of water.
        <br>
        <br> It is effective for relieving colds, flu and fevers. Due to its antispasmodic nature, it is traditionally used to treat whooping cough. It is also helpful to asthma, bronchitis and sinus infections. A diffuser is helpful for all of these situations or it can be diluted and applied topically to the chest and facial area. Avoid eye contact.
        <br>
        <br> It is applied topically to the skin and improves the look of dull skin and hair. It is used in skin care to improve skin tone. It is helpful for acne and skin infections.
        <br>
        <br> It can be applied to the spine in dilution to support the immune system. It is a tonic to the spleen, circulation and digestive system.
        <br>
        <br> Properties: anticatarrhal, carminative, digestive tonic, antispasmodic, anti-asthmatic, antibacterial, anti-infectious, digestive tonic, immune tonic, spleen tonic and circulation tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Sweet Birch -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Sweet Birch 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Sweet Birch 5ml Bottle" />
          <input type="hidden" name="price" value="18.50" />
          <input type="hidden" name="code" value="EO0120" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="5" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$18.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="5" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Betula lenta L., fam. Betulaceae
        <br>
        <br> Extraction: Steam distilled from wild harvested bark
        <br>
        <br> Origin: United States
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-sweet-birch.jpg">
      </div>

      <p class="ptext">
        Birch loves the bone tissue. It stimulates bone growth and can eliminate bone spurs and strengthen bones.
        <br>
        <br> Birch is a natural stimulant. It stimulates the nervous system, excretion and endocrine systems. It is very helpful for massaging joints and muscles. Birch (and Willow) contain methyl salicylate, an effective pain reliever which inspired the chemical *aspirin. It is antispasmodic and relieves cramps. It relieves arthritis and helps eliminate uric acid from the joints and blood, which aids gout as well. It is excellent for eczema, ringworm and skin infections. It breaks down cellulite and rids the body of excess water. It works well with Ravensare and Eucalyptus to support the lungs and bronchial tubes.
        <br>
        <br> Properties: stimulant, analgesic, antispasmodic, anti-inflammatory, antifungal and anti-infectious.
        <br>
        <br>

        <span class="ptext-italic">* Do not use Birch or Willow if you are allergic to aspirin.</span>
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Sweet Fennel -->

      <div class="cart-wrap">
        <p class="ptext-product-name">Sweet Fennel 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Sweet Fennel 5ml Bottle" />
          <input type="hidden" name="price" value="8.18" />
          <input type="hidden" name="code" value="EO2460" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$8.18 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Foeniculum vulare
        <br>
        <br> Extraction: Steam distilled from certified organic seeds
        <br>
        <br> Origin: Bulgaria
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="The source plant for the essential oil" src="images/pp-sweet-fennel.jpg">
      </div>

      <p class="ptext">
        Sweet Fennel is a digestive tonic that is mild and gentle. It is a wonderful resource for infants and children. It is helpful for infant colic and upset tummies of all ages. It stimulates the liver and gall bladder to release bile. It improves and calms digestion; it relieves gas, vomiting and constipation. It eases spasms in the lungs, digestive tract and in muscles. It kills parasitic worms in the digestive tract.
        <br>
        <br> Sweet Fennel helps detoxify nicotine, alcohol and drugs from the body. Add 4 drops to a 4 oz. glass of water for adults. This can be taken over a period of time to support digestion and/or detoxify the body. It is believed to support all the energy meridians and organs.
        <br>
        <br> Properties: Galactagogue, nervine, antispasmodic and parasitic.
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


    <div class="container-product"> <!-- Tarragon -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Tarragon 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Tarragon 5ml Bottle" />
          <input type="hidden" name="price" value="11.00" />
          <input type="hidden" name="code" value="EO2500" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$11.00 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Artemisia dracunculus
        <br>
        <br> Extraction: Wildcrafted from distilled leaves
        <br>
        <br> Origin: United States
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Tarragon is very helpful to rheumatism and arthritis, as it facilitates circulation and helps the body remove toxins such as uric acid from the body. It is used for Hepatitis A and B. It improves circulation of the blood and lymph and helps in the proper distribution of oxygen, nutrients, hormones and enzymes. It also stimulates urination and excretion. Tarragon stimulates brain activity and enhances nerve functions. It stimulates the secretion of digestive enzymes.
        <br>
        <br> It helps ease menstruation, regulate periods and relieves abdominal pain, nausea, and fatigue. It kills worms in the body such as roundworms, tapeworms and maggots. Blend with carrier oil and apply the oil externally.
        <br>
        <br> Properties: anti-inflammatory, stimulant, rubefacient, digestive stimulant, brain stimulant and emmenagogue.
        <br>
        <br>

        <span class="ptext-italic">* Tarragon Should be avoided by small children and pregnant women.</span>
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


    <div class="container-product"> <!-- Terebenthine Pine -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Terebenthine Pine 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Terebenthine Pine 5ml Bottle" />
          <input type="hidden" name="price" value="17.80" />
          <input type="hidden" name="code" value="EO2540" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="4" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$17.80 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="4" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Pinus pinaster
        <br>
        <br> Extraction: Steam distilled from wild harvested pine resin
        <br>
        <br> Origin: France
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Five milliliter bottle with a Napasha Way Label" src="images/pp-terebenthine-pine.jpg">
      </div>

      <p class="ptext">
        Terebenthine Pine is used in many herbal cancer formulas. It is an overall body tonic that can be taken over a long period of time without adverse reactions. It supports the recovery period of many degenerative diseases, by raising the energy levels and releasing mental fatigue.
        <br>
        <br> It is a prostate and uterine simulant. It is traditionally used for recovering from prostatitis, prostate cancer and ovarian and uterine conditions. It relieves congestion, inflammation and infection. It also helps the glands regenerate.
        <br>
        <br> Properties: stimulant, decongestant, anticancer, anti-inflammatory and anti-infectious.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Thuja -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Thuja 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Thuja 5ml Bottle" />
          <input type="hidden" name="price" value="" />
          <input type="hidden" name="code" value="EO2560" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="0" />
          <input type="hidden" name="quantity_max" value="0" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left neo-dark-orange"><em>Out of Stock&nbsp;</em></label>
          <input disabled class="form-qtyspin" type="number" min="0" max="0" step="1" value="" name="quantity" />
          <input disabled class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Thuja occidentalis
        <br>
        <br> Extracton: Steam distilled from needles and small branches
        <br>
        <br> Origin: Canada
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Thuja is an indigenous cancer treatment. It has antiviral, antitumor, anticancer properties, making this a powerful aid in natural healing. It has been used to treat genital warts and genital herpes and is a homeopathic remedy for candida. I have also used it to eliminate skin tags and plantars warts. It should be used with guidance of a practitioner.
        <br>
        <br> Properties: antiviral, antitumor and anticancer.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Thyme Borneol -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Thyme Borneol 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Thyme (Borneol) 5ml Bottle" />
          <input type="hidden" name="price" value="11.58" />
          <input type="hidden" name="code" value="EO2580" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$11.58 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Thyme borneol
        <br>
        <br> Extraction: Steam distilled from certified organic leaves and aerial parts
        <br>
        <br> Origin: Morocco
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Five milliliter bottle with a Napasha Way Label" src="images/pp-thyme-borneol.jpg">
      </div>

      <p class="ptext">
        Thyme borneol is very effective for clearing bacteria from the blood, tissues, and infected organs. It relieves spasms and is a powerful expectorant for the lungs. It also repels mosquitos, mites, fleas and bed bugs from people. It is used to heal eczema, athlete’s foot and skin infections. It is very helpful to sinusitis. It is also an anti-depressant.
        <br>
        <br> Properties: antibacterial, antispasmodic, expectorant, insecticide, antifungal and antidepressant.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Thyme (Linalol) -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Thyme Linalol 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Thyme (Linalol) 5ml Bottle" />
          <input type="hidden" name="price" value="18.74" />
          <input type="hidden" name="code" value="EO2620" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$18.74 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Thymus linalol
        <br>
        <br> Extraction: Steam distilled from leaves and aerial parts
        <br>
        <br> Origin: France
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Thyme linalol is a strong bronchodilator, opening breathing passages, clearing congestion and respiratory inflammation. It is one of the most powerful antibacterial essential oils, helpful for strep, staph and supports recovery for all types of infections. May be taken internally in proper dilution. Make sure to take probiotics like Kefir to replace healthy digestive flora and fauna.
        <br>
        <br> It is especially powerful when used in a diffuser during bacterial outbreaks.
        <br>
        <br> Properties: anti-catarrhal, anti-inflammatory and antibacterial.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Turmeric -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Turmeric 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Turmeric 5ml Bottle" />
          <input type="hidden" name="price" value="14.28" />
          <input type="hidden" name="code" value="EO2640" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$14.28 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Curcuma longa
        <br>
        <br> Extraction: CO2 extract using certified organic roots
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Five milliliter bottle with a Napasha Way Label" src="images/pp-turmeric.jpg">
      </div>

      <p class="ptext">
        Turmeric contains curcumin, known for its ability to rid the body of free radicals. It supports the heart and cardiovascular functions, lowering cholesterol. It is a powerful anti-inflammatory and offers pain relief. It aids the heart, lungs, liver and digestive tract. It is powerfully anticancer and antitumor. It is used for psoriasis, eczema, acne and inflammatory skin conditions. It is traditionally used to relieve colitis.
        <br>
        <br> Properties: Anti-inflammatory, analgesic, heart tonic, anticancer, antitumor and digestive tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>
      <div id="u"></div>
      <br>
      <br>
      <br>
      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Vetiver -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Vetiver 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">
          <input type="hidden" name="name" value="Vetiver 5ml Bottle" />
          <input type="hidden" name="price" value="21.50" />
          <input type="hidden" name="code" value="EO2680" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$21.50 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Vetiveria zizzanoides
        <br>
        <br> Extraction: Steam distilled from fresh roots
        <br>
        <br> Origin: Sri Lanka
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Five milliliter bottle with a Napasha Way Label" src="images/pp-vetiver.jpg">
      </div>

      <p class="ptext">
        In its homeland, it is known as the “oil of peace.” It is a urinary tonic. It supports the endocrine system, balancing hormones, easing menopause symptoms and post-partum depression. It enhances the libido of women and men. Vetiver stimulates circulation and the immune system. Vetiver strengthens boundaries and helps release old relationships and commitments that no longer serve us. It increases vital energy and is helpful to restoring the body.
        <br>
        <br> Properties: Emmenagogue, anti-depressant, immune stimulant, circulation stimulant and urinary tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Vitex -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Vitex 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Vitex 5ml Bottle" />
          <input type="hidden" name="price" value="39.99" />
          <input type="hidden" name="code" value="EO2700" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="0" />
          <input type="hidden" name="quantity_max" value="0" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left neo-dark-orange"><em>Out of Stock&nbsp;</em></label>
          <input disabled class="form-qtyspin" type="number" min="0" max="0" step="1" value="" name="quantity" />
          <input disabled class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Vitex agnus castus
        <br>
        <br> Extraction: Steam distilled from wild berries
        <br>
        <br> Origin: Croatia
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Vitex is a heart tonic and supports a healthy cardiovascular system when taken over time. However, it is best known for its ability to nourish the pituitary; balancing estrogen and progesterone levels and relieving the symptoms of PMS and menopause, as it neutralizes excess estrogen and hormones in the bloodstream. It can be taken homeopathically for long periods of time without ill affects.
        <br>
        <br> Properties: Emmenagogue, heart tonic and circulatory tonic.
        <br>
        <br>

        <span class="ptext-italic">It should not be used while taking birth control pills of any kind.</span>
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- White Fir -->
      <div class="cart-wrap">
        <p class="ptext-product-name">White Fir 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="White Fir 5ml Bottle" />
          <input type="hidden" name="price" value="10.80" />
          <input type="hidden" name="code" value="EO2720" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="8" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$10.80 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="8" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Abies concolor
        <br>
        <br> Extraction: Artisan distilled by steam from wild needles, stems and wood
        <br>
        <br> Origin: Austria
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        White fir has a lovely aroma that when inhaled, aids respiratory infection, bronchitis, rhinitis and coughing. It stimulates the cleansing of the lymph system and balances the endocrine system. It is great for kidney and bladder issues; it helps to dissolve stones and clears up urinary tract infections when taken consistently over time.
        <br>
        <br> Use it in the diffuser for respiratory relief. Take a drop of oil in a quart of water and sip on it for urinary and kidney support; and or mix it in a carrier oil and apply externally to the kidneys and bladder. Mix it with citrus in a carrier oil and it makes a fine lymphatic cleanse or massage oil.
        <br>
        <br> Properties: Lithotriptic, anticatarrhal, antibacterial, antiseptic, anti-infectious.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- White Champa Leaf -->
      <div class="cart-wrap">
        <p class="ptext-product-name">White Champa Leaf 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="White Leaf Champa 5ml Bottle" />
          <input type="hidden" name="price" value="24.99" />
          <input type="hidden" name="code" value="EO2760" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="1" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$24.99 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="1" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Magnolia michelia alba (aka Champaca)
        <br>
        <br> Extraction: Steam distillation from leaves
        <br>
        <br> Origin: China
        <br>
        <br>
      </p>

      <div class="container-img-herb">
        <img class="img-herb" alt="Five milliliter bottle with a Napasha Way Label" src="images/pp-white-champa-leaf.jpg">
      </div>

      <p class="ptext">
        White Champa Leaf is distilled form the leaves and Champaca is distilled from the flowers. Champa has a lovely fresh fruit and floral that is lovely for blending and diffusing.
        <br>
        <br> The leaves have medicinal properties as well. It is an expectorant, and helps with congestion and coughing. It is an aid to bronchitis and sore throats.
        <br>
        <br> It is a urinary tonic and relieves inflammation and infection in the urinary tract and bladder.
        <br>
        <br> This is one of my favorite spiritual oils. It opens pathways of beauty and goodness of the heart to the spiritual world. It opens one to their own divine connection and deepens meditation experiences. Place a drop on your crown or brow before meditation. It also makes a lovely perfume.
        <br>
        <br> Properties: expectorant, anticatarrhal, anti-inflammatory, anti-infectious and urinary tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- White Verbena -->
      <div class="cart-wrap">
        <p class="ptext-product-name">White Verbena 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="White Verbena 5ml Bottle" />
          <input type="hidden" name="price" value="23.98" />
          <input type="hidden" name="code" value="EO2780" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="3" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$23.98 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="3" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Lippia alba
        <br>
        <br> Extraction: Artisan steam distilled from flowers and aerial parts
        <br>
        <br> Origin: India
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        White verbena is a lovely floral oil that is used to treat muscular weakness, and multiple sclerosis. It is effective against staph infections and bacteria such as B. subtilis and E. coli. It has been used to treat malaria.
        <br>
        <br> White verbena is a digestive system tonic. It helps stimulate better digestion of fats and is a prime liver decongestant. It works to balance the thyroid and pancreas.
        <br>
        <br> It is helpful as an antispasmodic and eases heart palpitations and spasm, high blood pressure and angina.
        <br>
        <br> Properties: anti-infectious, antibacterial, galactagogue, antispasmodic and digestive tonic.
        <br>
        <br>
      </p>

      <p class="ptext-italic">
        These products and statements have not been evaluated by the FDA.  Consult a health care practitioner for medical advice.
      </p>

      <div class="clrfix"></div>
    </div>


    <div class="container-product"> <!-- Ylang Ylang -->
      <div class="cart-wrap">
        <p class="ptext-product-name">Ylang Ylang 5ml</p>

        <form class="form-addtocart" action="https://napashaway.foxycart.com/cart" method="post" accept-charset="utf-8">

          <input type="hidden" name="name" value="Ylang Ylang 5ml Bottle" />
          <input type="hidden" name="price" value="30.90" />
          <input type="hidden" name="code" value="EO2820" />
          <input type="hidden" name="quantity" value="quantity" />
          <input type="hidden" name="quantity_min" value="1" />
          <input type="hidden" name="quantity_max" value="2" />
          <input type="hidden" name="category" value="5MLB" />

          <label class="cart-label-left">$30.90 &nbsp; Qty &nbsp;</label>
          <input class="form-qtyspin" type="number" min="1" max="2" step="1" value="1" name="quantity" />
          <input class="form-cartbutton" type="submit" value="Add to Cart" />
        </form>
      </div>

      <p class="ptext-no-just">
        Scientific Name: Cananga odorantissima
        <br>
        <br> Extraction: Steam distilled extra grade (from the first batch, which is more intensely floral)
        <br>
        <br> Origin: Madagascar
        <br>
        <br>
      </p>

      <div class="container-img-product">
        <img class="img-ml5" alt="Five milliliter bottle with a Napasha Way Label" src="images/5ml-generic-200.png">
      </div>

      <p class="ptext">
        Ylang Ylang is used widely in perfumes for its beautiful scent, but quality Ylang Ylang is also beneficial to the urinary tract and kidneys. It is even more acclaimed for its ability to clear the emotional body in releasing old fears, anger, depression and anxiety. It helps clear the root and solar plexus chakra and promotes regenerating sleep.
        <br>
        <br> Properties: Urinary tonic, anti-depressant and sedative.
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
