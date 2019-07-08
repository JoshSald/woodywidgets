<?php include '../includes/header.php'; ?>

<h3 class="brand-text">Contact Us</h3>

<?php if($msg): ?>
    <p class="alert"><?= $msg; ?></p>
<?php elseif($successmsg): ?>
    <p class="success"><?= $successmsg; ?></p>
<?php endif;?>

<form method="post" action="contact.php">
    <div class="form-group">
        <label for="name" class="col-sm-2 col-form-label">Full Name: </label>
        <input type="text" id="name" name="name" placeholder="Woody Harrelson" value="<?= isset($_POST["name"]) ? $_POST["name"] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="email" class="col-sm-2 col-form-label">Email: </label>
        <input type="text" id="email" name="email" placeholder="email@example.com" value="<?= isset($_POST["email"]) ? $_POST["email"] : ''; ?>">
    </div>
    <div class="form-group">
        <label for="message" class="col-sm-2 col-form-label">Message: </label>
        <textarea name="message" id="message" cols="30" rows="10"><?= isset($_POST["message"]) ? $_POST["message"] : ''; ?></textarea>
    </div>
    <input id="submit" type="submit" name="submit" value="Submit">
  
</form>

<?php include '../includes/footer.php'; ?>