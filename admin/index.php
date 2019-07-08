<?php require('core/init.php');

// Create new Objects
$user = new User;
$content = new Content;
$product = new Product;
$service = new Service;
$support = new Support;


//Get Template and Assign VARS
$template = new Template('templates/dashboard.view.php');

//Assign Vars
$template->totalusers = $user->getTotalUsers();
$template->userdata = $user->getAllUserData();
$template->titles = $content->getAllContent();
$template->products = $product->getAllProducts();
$template->services = $service->getAllServices();
$template->supportOptions = $support->getAllOptions();



echo $template;