<?php include '../includes/header.php'; ?>

<?php if($maincontent): ?>

    <h3 class="brand-text"><?= SITE_DESCRIPTION; ?> - <?= $maincontent->headline; ?></h3>
    <p>
      <?= $maincontent->body; ?>
    </p>

    <?php if(isset($_SESSION['username']) || isset($_SESSION['logged_in'])):?>
      <br>
      <br>
      <a href="admin/updatecontent.php?id=<?= $maincontent->id; ?>">Edit</a>
    <?php endif; ?>
  <?php else: ?>
    <p>Nothing to Display</p>
  <?php endif; ?>
  <br>
  <br>

<h3 class="brand-text">Our Products</h3>
<div class="product-grid">
  <?php if($products): ?>
  <?php foreach($products as $product) : ?>
    <div class="product-obj">
      <img class="product-img" src="img/productimg/<?= $product->image ?>" alt="">
      <h4><?= $product->name ?></h4>
      <p><?= $product->description ?></p>
      <?php if(isset($_SESSION['username']) || isset($_SESSION['logged_in'])):?>
        <br>
        <a href="admin/updateproducts.php?id=<?= $product->id; ?>">Edit</a>
      <?php endif; ?>
    </div>
    
    <?php endforeach; ?>
    <?php else: ?>
      <p>No Products to Display</p>
    <?php endif; ?>
</div>


<?php include '../includes/footer.php'; ?>