<?php require('core/init.php');


// Create Content Object
$content = new Content;

//Get Template and Assign VARS
$template = new Template('templates/frontpage.view.php');

//Assign VARS
$template->maincontent = $content->getContent(2);
$template->navlinks = $content->getAllContent();
$template->site_description = SITE_DESCRIPTION;

echo $template;


