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
        <h1 class="headline">Edit Support Link</h1>
        <?php if($msg): ?>
        <p class="alert"><?= $msg; ?></p>
    <?php elseif($successmsg): ?>
        <p class="success"><?= $successmsg; ?></p>
    <?php endif;?>
    </div>    
    <div class="edit-container">
        <form method="post" action="updatelinks.php?id=<?= $link->id; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="title">Link Title:</label>
                <input type="text" id="title" name="title" value="<?= $link->name; ?>">
            </div>
            <div class="form-group">
                <label for="link">Current File:</label>
                <p id="link"><?= $link->link; ?></p>
            </div>
            <div class="form-group">
                <label for="text">Upload File:</label>
                <input type="file" name="file" />
            </div>
            <div class="flex-container">
                <input type="submit" name="submit" id="submit" value="Upload">
                <input type="submit" name="delete" id="delete" value="Delete">
            </div>     
        </form>
    </div>
<?php endif; ?>
<?php include '../includes/footer.php'; ?>