<?php include '../includes/header.php'; ?>

<div class="col-container">
    <h2>Admin Area</h2>
    <br>

    <?php if(!isset($_SESSION['username']) || !isset($_SESSION['logged_in'])):?>
    <p class="alert"><?= $msg; ?></p>
    <br>
    <form method="post" action="login.php">
    <div class="form-group">
        <label for="username" class="col-sm-2 col-form-label">Username</label>
        <input type="text" id="username" name="username">
    </div>
    <div class="form-group">
        <label for="password" class="col-sm-2 col-form-label">Password</label>
        <input type="password" id="password" name="password">
    </div>
    <div class="form-group">
        <input id="submit" name="login-submit" type="submit">
    </div>
    </form>
</div>


<?php else : ?>

<!-- ELSE SHOW -->
<p class="success">Already logged in!</p> 
<?php endif; ?>


<?php include '../includes/footer.php'; ?>