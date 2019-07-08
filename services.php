<?php require('core/init.php');


// Create Content Object
$content = new Content;
$service = new Service;

//Get Template and Assign VARS
$template = new Template('templates/services.view.php');

//Assign VARS
$template->maincontent = $content->getContent(4);
$template->navlinks = $content->getAllContent();
$template->services = $service->getAllServices();
$template->site_description = SITE_DESCRIPTION;

echo $template;




