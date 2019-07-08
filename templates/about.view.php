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

  <?php include '../includes/header.php'; ?>