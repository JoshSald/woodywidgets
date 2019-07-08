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
        <h1 class="headline">Edit Products</h1>
        <?php if($msg): ?>
        <p class="alert"><?= $msg; ?></p>
    <?php elseif($successmsg): ?>
        <p class="success"><?= $successmsg; ?></p>
    <?php endif;?>
    </div>   
    <div class="edit-container">
        <form method="post" action="updateproducts.php?id=<?= $product->id; ?>" enctype="multipart/form-data">
            <div class="form-group">
                <label for="image">Product Image:</label>
                <img class="product-img" src="../img/productimg/<?= $product->image ?>" alt="">
                <input type="file" name="file" />
            </div>
            <div class="form-group">
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?= $product->name; ?>">
            </div>
            <div class="form-group">
                <label for="text">Body:</label>
                <textarea name="text" id="text" cols="80" rows="20"><?=$product->description; ?></textarea>
            </div>
            <div class="flex-container">
                <input type="submit" id="submit" name="submit" value="submit">
                <input type="submit" id="delete" name="delete" value="Delete">
            </div>     
        </form>
    </div>
<?php endif; ?>
<?php include '../includes/footer.php'; ?>