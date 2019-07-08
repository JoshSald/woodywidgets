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

    <h3 class="brand-text">Downloads</h3>

    <?php if($supportOptions): ?>
    <ul>
    <?php foreach($supportOptions as $option) : ?>
        <li>
            <a href="support/<?= $option->link; ?>" download><?= $option->name; ?></a>
            
            <?php if(isset($_SESSION['username']) || isset($_SESSION['logged_in'])):?>
              <a href="admin/updatelinks.php?id=<?= $option->id; ?>"> - Edit</a>
            <?php endif; ?>
            
        </li>
    <?php endforeach;?>
    </ul>
    <?php else: ?>
        <p>Nothing to Display</p>
    <?php endif; ?>
<?php include '../includes/footer.php'; ?>