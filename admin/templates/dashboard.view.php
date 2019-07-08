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
    <?php if($_SESSION['role'] == 'admin'): ?>    
        <h1>Admin Area</h1>
    <?php else: ?>
        <h1>Dashboard</h1>
    <?php endif; ?>
</div>
<!-- COL-1 -->
<div class="admin-grid">
    <div class="col-1">
        <div class="content-box">
            <h3>All Content</h3>
            
            <?php foreach($titles as $title): ?>
                <a href="updatecontent.php?id=<?= $title->id; ?>"><?= $title->headline; ?></a>
                <br>
            <?php endforeach; ?>
            <a href="addcontent.php" id="new">+ New</a>
        </div>
        <div class="content-box">
            <h3>All Products</h3>
            <?php foreach($products as $product): ?>
                <a href="updateproducts.php?id=<?= $product->id; ?>"><?= $product->name; ?></a>
                <br>
            <?php endforeach; ?>
            <a href="addproduct.php" id="new">+ New</a>
        </div>
        <div class="content-box">
            <h3>All Services</h3>
            <?php foreach($services as $service): ?>
                <a href="updateservices.php?id=<?= $service->id; ?>"><?= $service->name; ?></a>
                <br>
            <?php endforeach; ?>
            <a href="addservice.php" id="new">+ New</a>
        </div>
        <div class="content-box">
            <h3>All Support Links</h3>
            <?php foreach($supportOptions as $option): ?>
                <a href="updatelinks.php?id=<?= $option->id; ?>"><?= $option->name; ?></a>
                <br>
            <?php endforeach; ?>
            <a href="addlink.php" id="new">+ New</a>
        </div>
    </div>

<!-- Col 2 -->
    <div class="col2">
        <div class="content-box">
            <h3>Profile</h3>
            <a href="resetpassword.php">Reset Password</a>
        </div>
        
        <!-- ADMIN ONLY -->
        <?php if($_SESSION['role'] == 'admin'): ?>
            <div class="content-box">
                <h3>Users</h3>
                <p><strong>Total Users</strong>: <?= $totalusers; ?></p>
                <br>
                <p><strong>Userlist:</strong></p>
                <ul>
                    <?php foreach($userdata as $data): ?>
                        <li>
                        <div class="
                            <?php if($_SESSION['user_id'] === $data->id){
                                echo 'activeuser';
                            } 
                            ?>"></div>
                            <a href="updateuser.php?id=<?= $data->id; ?>" class="<?php if($data->id == 1){
                                echo 'deadlink';
                            } ?>">
                                <strong class="username">
                                    <?= $data->username; ?>
                                </strong> - 
                                <small>
                                    <em class=
                                        "<?php if($data->role == 'admin')
                                            {
                                                echo 'admin';
                                            } 
                                        else { 
                                            echo 'editor';
                                            }; ?>">
                                            <?= $data->role; ?>
                                    </em>
                                </small>
                            </a> 
                        </li>
                    <?php endforeach; ?>
                </ul>
                <a href="adduser.php" id="new">+ User</a>
            </div>
        <?php endif; ?>
    </div>
</div>



<?php endif; ?>


<?php include '../includes/footer.php'; ?>