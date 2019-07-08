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
    <h1>Add User</h1>
    <?php if($msg): ?>
        <p class="alert"><?= $msg; ?></p>
    <?php elseif($successmsg): ?>
        <p class="success"><?= $successmsg; ?></p>
    <?php endif;?>
    <br>   
    <form method="post" action="adduser.php">
        <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="username" id="username">
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
        
        <!-- <label for="newPass">Password</label>
        <input type="password" name="newPass" id="newPass">
        <label for="repeatPass">Repeat Password</label>
        <input type="password" name="repeatPass" id="repeatPass"> -->
        </div>
        <input type="submit" name="submit" id="submit" value="submit">
    </form>
</div>
<br>
<br>
<?php endif; ?>


<?php include '../includes/footer.php'; ?>