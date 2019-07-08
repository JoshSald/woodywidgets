<?php 
require('core/init.php');
$content = new Content;
$navlinks = $content->getAllContent(); ?>

<?php include 'includes/header.php'; ?>

<div class="col-container">
    <h3 class="success">Successfully Logged Out!</h3>
    <div class="flex-container logout-msg">
        <a href="admin/login.php">Go to Admin Area</a>
        <a href="index.php">Go to Website</a>
    </div>
</div>
<?php header("refresh:5; url=index.php"); ?>
<?php include 'includes/footer.php'; ?>
