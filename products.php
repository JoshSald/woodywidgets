<?php require('core/init.php'); 

// Create Content and Product Object
$content = new Content;
$product = new Product;

//Get Template and Assign VARS
$template = new Template('templates/products.view.php');

//Assign VARS
$template->maincontent = $content->getContent(3);
$template->navlinks = $content->getAllContent();
$template->products = $product->getAllProducts();

echo $template;