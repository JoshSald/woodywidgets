<?php require('core/init.php');

$content = new Content;
//Get Template and Assign VARS
$template = new Template('templates/contact.view.php');

//Assign VARS
$template->navlinks = $content->getAllContent();
$template->msg = '';
$template->successmsg = '';

// Check for Submit
if(isset($_POST['submit'])){
    //  get form data
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    // check required fields
    if(!empty($email) && !empty($name) && !empty($message)){
        // passed
        //check emails
        if(filter_var($email, FILTER_VALIDATE_EMAIL)=== false){
            // failed 
            $template->msg = 'Please use a valid email';
        } else {
            //Passed
            $toEmail = 'info@woodywidgets.com';
            $subject = 'Contact Request From: '.$name;
            $body = '<h2>Contact Request</h2>
                    <h4>Name</h4><p>'.$name.'</p>
                    <h4>Email</h4><p>'.$email.'</p>
                    <h4>Message</h4><p>'.$message.'</p>';

            // Headers
            $headers = "MIME-Version: 1.0"."\r\n";
            $headers .= "Content-Type:text/html;charset=UTF-8"."\r\n";

            // Additional Headers
            $headers .= "From: ".$name."<".$email.">"."\r\n";

            if(mail($toEmail, $subject, $body, $headers)){
            // Email Sent
            $successmsg = 'Your email has been sent successfully';
            //Redirect to Home
            header("refresh:1.5; url=index.php");
            } else {
            // Failed
            $template->msg = 'Oops! Something went wrong!';
            }
                    
        }
        } else {
        // Fail
        $template->msg = 'Please fill in all the required fields';
        }
}


echo $template;
       
