<?php 
require('core/init.php');

//Add Objects
$db = new Database;
$user = new User;

//Get Template 
$template = new Template('create/adduser.view.php');

// Assign Vars
$template->roles = $user->getAvailableRoles();
$template->msg = '';
$template->successmsg = '';

if (isset($_POST['submit'])){
    $username = $_POST['username'];
    $role = $_POST['role'];
    // $newpass = $_POST['newPass'];
    // $repeatpass = $_POST['repeatPass'];
    // $password = password_hash($newpass, PASSWORD_DEFAULT);
    $password = password_hash("php", PASSWORD_DEFAULT);
    $query = $db->query("INSERT INTO users (username, password, role) 
                VALUES ('$username', '$password', '$role')");

    
    if(empty($username) || empty($role)){
        $template->msg = "Please fill in all the fields";
    } 
    // elseif($newpass != $repeatpass) {
    //             //Error
    //             $template->msg = "Passwords don't match";    
    //         } 
    else {
            $db->execute($query);
            $template->successmsg = "User Added!";

            //Redirect to Dashboard
            header("refresh:1.5; url=index.php");
        }

 } 

echo $template;