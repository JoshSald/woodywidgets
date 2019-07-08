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
        <h1 class="headline">Edit Services</h1>
        <?php if($msg): ?>
        <p class="alert"><?= $msg; ?></p>
    <?php elseif($successmsg): ?>
        <p class="success"><?= $successmsg; ?></p>
    <?php endif;?>
    </div>   
    <div class="edit-container">
        <form method="post" action="updateservices.php?id=<?= $service->id; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Image:</label>
                <img class="product-img" src="../img/serviceimg/<?= $service->image ?>" alt="">
                <input type="file" name="file" />
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?= $service->name; ?>">
            </div>
            <div class="form-group">
                <label for="text">Body:</label>
                <textarea name="text" id="text" cols="80" rows="20"><?=$service->description; ?></textarea>
            </div>
            <div class="flex-container">
                <input type="submit" id="submit" name="submit" value="submit">
                <input type="submit" id="delete" name="delete" value="Delete">
            </div>     
        </form>
    </div>
<?php endif; ?>
<?php include '../includes/footer.php'; ?>