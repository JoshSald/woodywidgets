<?php require('core/init.php');

$id = $_GET['id'];
//CREATE OBJECT
$db = new Database;
$content = new Content;

//Get Template 
$template = new Template('update/updatecontent.view.php');

//ASSIGN VARS

$template->msg='';
$template->successmsg='';
$template->content = $content->getContent($id);

//UPDATE CONTENT
if (isset($_POST['submit'])){
    $title = $_POST['title'];
    $navlink = $_POST['link'];
    $body = $_POST['body'];
    $query = $db->query("UPDATE maincontent SET 
                `headline` = '".$title."', `link_id` = '".$navlink."', 
                `body` = '".$body."' WHERE `id` = '".$id."'; ");
    
    if(empty($title) || empty($navlink) || empty($body)){
        $template->msg = "Please fill in all the fields";
    }
    else {
        $db->execute($query);
        $template->successmsg = "Updated successfully!";

        //Redirect to Dashboard
        header("refresh:1.5; url=index.php");
    } 

 }
 
//DELETE
if (isset($_POST['delete'])){
    $query = $db->query("DELETE FROM maincontent WHERE `id` = '".$id."';");
    $db->execute($query);
    $template->successmsg = "Record Deleted";

        //Redirect to Dashboard
        header("refresh:1.5; url=index.php");
    }


echo $template;

