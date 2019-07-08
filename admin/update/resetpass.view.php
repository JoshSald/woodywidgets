<?php include '../includes/header.php'; ?>
<?php 

// Check if Logged in
if(!isset($_SESSION['username']) || !isset($_SESSION['logged_in'])):?>

    <?php 
        header('Location: login.php'); 
        exit;
    ?>


<?php else : ?>

<!-- ELSE SHOW -->
<div class="col-container">
    <h1 class="headline">Reset Password</h1>
    <?php if($msg): ?>
        <p class="alert"><?= $msg; ?></p>
    <?php elseif($successmsg): ?>
        <p class="success"><?= $successmsg; ?></p>
    <?php endif;?>
    <form method="post" action="resetpassword.php">
                <div class="form-group">
                    <label for="currentPass">Current Password</label>
                    <input type="password" name="currentPass" id="currentPass">
                </div>
                <div class="form-group">
                    <label for="newPass">New Password</label>
                    <input type="password" name="newPass" id="newPass">
                </div>
                <div class="form-group">
                    <label for="repeatPass">Repeat Password</label>
                    <input type="password" name="repeatPass" id="repeatPass">
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" id="submit" value="submit">
                </div>
            </form>
</div>

<?php endif; ?>


<?php include '../includes/footer.php'; ?>