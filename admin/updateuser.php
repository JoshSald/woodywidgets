<?php 
require('core/init.php');

$id = $_GET['id'];
//Add Objects
$db = new Database;
$user = new User;

//Get Template 
$template = new Template('update/updateuser.view.php');

// Assign Vars
$template->userdata = $user->getUser($id);
$template->sessionid = $id;
$template->roles = $user->getAvailableRoles();
$template->msg = '';
$template->successmsg = '';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $role = $_POST['role'];
    $query = $db->query("UPDATE users SET 
                        `username` = '".$username."', 
                        `role` = '".$role."'  
                        WHERE `id` = '".$id."';");

    if(empty($username) || empty($role)){
        $template->msg = "Please fill in all the fields";
    }
    else {
            $db->execute($query);
            $template->successmsg = "User Updated!";

            //Redirect to Dashboard
            header("refresh:1.5; url=index.php");
        }

 } 

//DELETE
if (isset($_POST['delete'])){
    $query = $db->query("DELETE FROM users WHERE `id` = '".$id."';");
    $db->execute($query);
    $template->successmsg = "User Removed";

        //Redirect to Dashboard
        header("refresh:1.5; url=index.php");
}    

echo $template;