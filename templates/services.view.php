<?php include '../includes/header.php'; ?>

<?php if($maincontent): ?>

    <h3 class="brand-text"><?= $site_description; ?> - <?= $maincontent->headline; ?></h3>
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


<h3 class="brand-text">Our Services</h3>
<div class="service-grid">
<?php if($services): ?>
<?php foreach($services as $service) : ?>
  <div class="service-obj">
    <img class="product-img" src="img/serviceimg/<?= $service->image ?>" alt="">
    <h4><?= $service->name ?></h4>
    <p><?= $service->description ?></p>
    <?php if(isset($_SESSION['username']) || isset($_SESSION['logged_in'])):?>
      <br>
      <a href="admin/updateservices.php?id=<?= $service->id; ?>">Edit</a>
    <?php endif; ?>
  </div>
  <?php endforeach; ?>
  <?php else: ?>
    <p>No Services to Display</p>
  <?php endif; ?>
</div>



<?php include '../includes/footer.php'; ?>