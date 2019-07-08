<?php require('core/init.php'); 


// Create Content and Support Object
$content = new Content;
$support = new Support;

//Get Template and Assign VARS
$template = new Template('templates/support.view.php');

//Assign VARS
$template->maincontent = $content->getContent(5);
$template->navlinks = $content->getAllContent();
$template->supportOptions = $support->getAllOptions();
$template->site_description = SITE_DESCRIPTION;

echo $template;