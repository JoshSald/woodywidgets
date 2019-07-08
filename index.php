<?php require('core/init.php');


// Create Content Object
$content = new Content;

//Get Template and Assign VARS
$template = new Template('templates/frontpage.view.php');

//Assign VARS
$template->maincontent = $content->getContent(1);
$template->site_description = SITE_DESCRIPTION;
$template->navlinks = $content->getAllContent();
echo $template;
       
