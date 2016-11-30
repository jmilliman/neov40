<?php   /* required modules */
  require_once('include/main.php');

  $metaOptions = [
    'pageTitle'          => 'Napasha Way Essentail Oils',
    'titleContent'       => 'Napasha Way Essential Oils',
    'subjectContent'     => 'Welcome to Napasha Way',

    'keywordsContent'    => 'Napasha Way Policies',

    'descriptionContent' => 'Napasha Way Essential Oils Policies'
  ];
?>
<!DOCTYPE html>

<html lang="en">

<?php render('head', $metaOptions)?>

<body class="body-blue">

  <?php render('header')?>

  <div class="context-menu">
    <p class="ptext-cmenu"><a class="ptext-dim" href="plcyprivacy.php">Privacy Policy</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-dim" href="plcyterms.php">Terms &amp; Conditions</a></p>
    <br>
    <p class="ptext-cmenu"><a class="ptext-bright" href="plcyrefunds.php">Refund Policy</a></p>
  </div>

  <main class="page-wrap">
    <div class="page-cMenu-wrap__page-title">
      <h1 class="ptext-page-title">Our Policies</h1>
    </div>

    <article class="article--small"> <!-- Refund Policy -->
      <h2>REFUND POLICY</h2>

      <nav class="nav-policy-pages">
        <a class="link-style" href="plcyprivacy.php">Privacy Policy</a><br>
        <a class="link-style" href="plcyterms.php">Terms &amp; Conditions</a><br>
        <a class="link-style" href="plcyrefunds.php">Refund Policy</a>
      </nav>

      <p class="ptext-small">
        <br> Once your return is received and inspected, we will send you an email to notify you that we have received your returned item. We will also notify you of the approval or rejection of your refund. If you are approved, then your refund will be processed, and a credit will automatically be applied to your credit card or original method of payment, within 30 days.
        <br>
        <br>

        <span class="ptext-small-bold">LATE OR MISSING REFUNDS (IF APPLICABLE)</span>
        <br>
        <br> If you haven't received a refund yet, first check your bank account again. Then contact your credit card company, it may take some time before your refund is officially posted. Next contact your bank. There is often some processing time before a refund is posted. If you've done all of this and you still have not received your refund yet, please contact us at admin@NapashaWay.com.
        <br>
        <br>

        <span class="ptext-small-bold">SALE ITEMS (IF APPLICABLE)</span>
        <br>
        <br> Only regular priced items may be refunded, unfortunately sale items cannot be refunded.
        <br>
        <br>

        <span class="ptext-small-bold">EXCHANGES (IF APPLICABLE)</span>
        <br>
        <br> We only replace items if they are defective or damaged. If you need to exchange it for the same item, send us an email at admin@NapashaWay.com and send your item to: 59 Napasha Ln, Buffalo MO USA 65622.
        <br>
        <br>

        <span class="ptext-small-bold">GIFTS</span>
        <br>
        <br> If the item was marked as a gift when purchased and shipped directly to you, you'll receive a gift credit for the value of your return. Once the returned item is received, a gift certificate will be mailed to you.
        <br>
        <br> If the item wasn't marked as a gift when purchased, or the gift giver had the order shipped to themselves to give to you later, we will send a refund to the gift giver.
        <br>
        <br>

        <span class="ptext-small-bold">SHIPPING</span>
        <br>
        <br> To return your product, you should mail your product to: 59 Napasha Ln, Buffalo MO 65622.
        <br>
        <br> You will be responsible for paying for your own shipping costs for returning your item. Shipping costs are non-refundable. If you receive a refund, the cost of return shipping will be deducted from your refund.
        <br>
        <br> Depending on where you live, the time it may take for your exchanged product to reach you, may vary.
        <br>
        <br> If you are shipping an item over $75, you should consider using a trackable shipping service or purchasing shipping insurance. We cannot guarantee that we will receive your returned item.
      </p>
    </article>
  </main>

  <?php render('footer')?>

</body>

</html>
