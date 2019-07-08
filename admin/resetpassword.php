<?php
require('core/init.php');


//New Object
$user = new User;
$db = new Database;

//Get Template 
$template = new Template('update/resetpass.view.php');

//Assign VARS
$template->msg='';
$template->successmsg='';
$passwords = $user->getPassword();


if (isset($_POST['submit'])){
    $currentpass = $_POST['currentPass'];
    $newpass = $_POST['newPass'];
    $repeatpass = $_POST['repeatPass'];
    $query = $db->query("UPDATE users SET 
                password = '".password_hash($newpass, PASSWORD_DEFAULT)."' WHERE id= '".$_SESSION["user_id"]."'");
    
    if(empty($newpass) || empty($repeatpass) || empty($currentpass)){
        $template->msg = "Please fill in all the fields";
    }
    else {
        foreach($passwords as $password){
            
            //Repeat Validation
            if($newpass != $repeatpass){
                 
                //Error
                $template->msg = "Your new passwords don't match";

                
            } 
            elseif(password_verify($currentpass, $password->password) != $password->password){
                 
                //Error
                $template->msg = "Incorrect password";

            } 

            
            else {

                $db->execute($query);
                $template->successmsg = "Password updated successfully!";
    
                //Redirect to Dashboard
                header("refresh:1.5; url=index.php");
            }
        } 
    } 

 } 

echo $template;
