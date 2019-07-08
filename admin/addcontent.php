<?php require('core/init.php');

//CREATE OBJECT
$db = new Database;
$content = new Content;

//Get Template 
$template = new Template('create/addcontent.view.php');

//ASSIGN VARS

$template->msg='';
$template->successmsg='';


//UPDATE CONTENT
if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $navlink = $_POST['link'];
    $body = $_POST['body'];
    $query = $db->query("INSERT INTO maincontent (`link_id`, `headline`, `body`) 
                        VALUES ('".$navlink."', '".$title."', '".$body."'); ");
    
    if(empty($title) || empty($navlink) || empty($body)){
        $template->msg = "Please fill in all the fields";
    }
    else {
        $db->execute($query);
        $template->successmsg = "Entry Added!";

        //Redirect to Dashboard
        header("refresh:1.5; url=index.php");
    } 

 }


echo $template;

