<?php include 'includes/header.php'; ?>

<div class="col-container">
    <h3 class="success">Successfully Logged Out!</h3>
    <div class="flex-container logout-msg">
        <a href="login.php">Log In</a>
        <a href="../index.php">Go to Website</a>
    </div>
</div>
<?php header("refresh:2; url=../index.php"); ?>
<?php include 'includes/footer.php'; ?>
