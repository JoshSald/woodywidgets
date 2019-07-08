<?php include '../includes/header.php'; ?>

<?php 

// Check if Logged in
if(!isset($_SESSION['username']) && $_SESSION['role'] != 'admin' || !isset($_SESSION['logged_in'])):?>

    <?php 
        header('Location: login.php'); 
        exit;
    ?>


<?php else : ?>

<!-- ELSE SHOW -->
<div class="col-container">
    <h1>Edit User</h1>
    <?php if($msg): ?>
        <p class="alert"><?= $msg; ?></p>
    <?php elseif($successmsg): ?>
        <p class="success"><?= $successmsg; ?></p>
    <?php endif;?>
    <br>
    <form method="post" action="updateuser.php?id=<?= $userdata->id; ?>">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username" value="<?= $userdata->username; ?>">
        </div>
        <div class="form-group">
        <label for="role">Role</label>
        <select name="role" id="role">
        <option disabled selected value>Please select a role</option>
            <?php foreach($roles as $role): ?>
                <option value="<?= $role->id; ?>">
                    <?= $role->role; ?>
                </option>
            <?php endforeach; ?>
        </select>
        </div>
        <div class="flex-container">
                <input type="submit" name="submit" id="submit" value="submit">
                <?php if ($_SESSION['user_id'] != $sessionid): ?>
                    <input type="submit" name="delete" id="delete" value="Delete">
                <?php endif; ?>    
        </div> 
    </form>
</div>
<br><br>
<?php endif; ?>


<?php include '../includes/footer.php'; ?>