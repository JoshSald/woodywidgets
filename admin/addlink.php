<?php require('core/init.php');

//CREATE OBJECT
$db = new Database;

//Get Template 
$template = new Template('create/addlink.view.php');

//ASSIGN VARS
$template->msg = '';
$template->successmsg = '';

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('zip', 'pdf', 'txt'); //allowed extensions

    

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            //Check file Size
            if($fileSize < 2000000){
                $newFileName = uniqid('', true)."."."$fileActualExt";
                $fileDestination = '../support/'.$newFileName;

                $query = $db->query("INSERT INTO support (`name`, `link`) 
                VALUES ('$title', '$newFileName');");

                $db->execute($query);

                move_uploaded_file($fileTmpName, $fileDestination);
                $template->successmsg = "File successfully Added!";

                //Redirect to Dashboard
                header("refresh:1.5; url=index.php");
            } else {
                $template->msg = "File is too big!";
            }
        } else {
            $template->msg = "There was an error uploading this file";
        }
    } 
    elseif($fileError  === 4 || empty($title) || empty($body)) {
        $template->msg = "Please include your file or fill in all the fields!";
    } 
    else {
        $template->msg = "You cannot upload files of this type";
    }
}

echo $template;

