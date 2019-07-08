<?php include '../includes/header.php'; ?>

<?php
// Check if Logged in
if(!isset($_SESSION['username']) || !isset($_SESSION['logged_in'])):?>
    <?php 
        header('Location: ../login.php'); 
        exit;
    ?>


<?php else : ?>
    <!-- ELSE SHOW -->
    <div class="col-container">
        <h1 class="headline">Add Content</h1>
        <?php if($msg): ?>
            <p class="alert"><?= $msg; ?></p>
        <?php elseif($successmsg): ?>
            <p class="success"><?= $successmsg; ?></p>
        <?php endif;?>
    </div>    
    <div class="edit-container">
        <form method="post" action="addcontent.php">
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title">
            </div>
            <div class="form-group">
                <label for="link">Nav Link:</label>
                <input type="text" id="link" name="link">
            </div>
            <div class="form-group">
                <label for="body">Body:</label>
                <textarea name="body" id="body" cols="80" rows="20"></textarea>
            </div>
            <div class="flex-container">
                <input type="submit" name="submit" id="submit" value="submit">
            </div>     
        </form>
    </div>
<?php endif; ?>
<?php include '../includes/footer.php'; ?>