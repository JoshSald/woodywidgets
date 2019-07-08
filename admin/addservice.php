<?php require('core/init.php');

//CREATE OBJECT
$db = new Database;

//Get Template 
$template = new Template('create/addservice.view.php');

//ASSIGN VARS

$template->msg='';
$template->successmsg='';


//UPDATE CONTENT
if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $body = $_POST['text'];
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'webp', 'png', 'svg', 'gif');

    

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 2000000){
                $newFileName = uniqid('', true)."."."$fileActualExt";
                $fileDestination = '../img/serviceimg/'.$newFileName;

                $query = $db->query("INSERT INTO services (`image`, `name`, `description`) 
                VALUES ('$newFileName', '$title', '$body');");

                $db->execute($query);

                move_uploaded_file($fileTmpName, $fileDestination);
                $template->successmsg = "Service successfully Added!";

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

