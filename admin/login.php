<?php require('core/init.php');

//CREATE OBJECT
$user = new User;

//Get Template 
$template = new Template('templates/login.view.php');

//ASSIGN VARS
$template->msg = 'Please Log in';
$logindata = $user->getAllUserData();

if (isset($_POST['login-submit'])){
    $username = $_POST['username'];
    $password = $_POST['password'];
    
    
    if(empty($username) || empty($password)){
        $template->msg = "Please fill in all the fields";
    }
    else {
        foreach($logindata as $data){

            if($username != $data->username || password_verify($password, $data->password) != $data->password){
                 
                //Error
                $template->msg = "Incorrect username or password";
            } 
            else {
                //Set username and logged in status to true
                $_SESSION['username'] = $username;
                $_SESSION['logged_in']=true;
                $_SESSION['role'] = $data->role;
                $_SESSION['user_id'] = $data->id;
    
                //Redirect to Dashboard
                header("Location: index.php");
                exit();
            }
        } 
    } 

 } 


echo $template;

