<?php require('core/init.php');

//CREATE OBJECT
$db = new Database;
$service = new Service;

//Get Template 
$template = new Template('update/updateservices.view.php');

//ASSIGN VARS
$id = $_GET['id'];
$template->service = $service->getService($id);
$template->msg = '';
$template->successmsg = '';

if(isset($_POST['submit'])){
    $title = $_POST['title'];
    $body = $_POST['text'];
    $file = $_FILES['file'];

    $fileName = $_FILES['file']['name'];
    $fileType = $_FILES['file']['type'];
    $fileTmpName = $_FILES['file']['tmp_name'];
    $fileSize = $_FILES['file']['size'];
    $fileError = $_FILES['file']['error'];
    $existing = "../img/serviceimg/$fileName";

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('jpg', 'jpeg', 'webp', 'png', 'svg', 'gif');

    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            if($fileSize < 2000000){
                if(file_exists($existing)){
                    $query = $db->query("UPDATE services SET 
                            `name` = '".$title."',
                            `description` = '".$body."', 
                            `image` = '".$fileName."'  
                            WHERE `id` = '".$id."';");

                    $db->execute($query);

                    $template->successmsg = "Service successfully updated!";

                    //Redirect to Dashboard
                    header("refresh:1.5; url=index.php");

                } else {
                    $newFileName = uniqid('', true)."."."$fileActualExt";
                    $fileDestination = '../img/serviceimg/'.$newFileName;

                    $query = $db->query("UPDATE services SET 
                            `name` = '".$title."',
                            `description` = '".$body."', 
                            `image` = '".$newFileName."'  
                            WHERE `id` = '".$id."';");

                    $db->execute($query);

                    move_uploaded_file($fileTmpName, $fileDestination);
                    $template->successmsg = "Service successfully updated!";

                    //Redirect to Dashboard
                    header("refresh:1.5; url=index.php");
                }

                

            } else {
                $template->msg = "File is too big!";
            }
        } else {
            $template->msg = "There was an error uploading this file";
        }
    } 

    elseif($fileError  === 4){

        $query = $db->query("UPDATE services SET 
        `name` = '".$title."',
        `description` = '".$body."'   
        WHERE `id` = '".$id."';");

        $db->execute($query);

        $template->successmsg = "File successfully updated!";

        //Redirect to Dashboard
        header("refresh:1.5; url=index.php");
    } 
    
    else {
        $template->msg = "You cannot upload files of this type";
    }
}

//DELETE
if (isset($_POST['delete'])){
    $query = $db->query("DELETE FROM services WHERE `id` = '".$id."';");
    $db->execute($query);
    $template->successmsg = "Service Removed";

        //Redirect to Dashboard
        header("refresh:1.5; url=index.php");
    }

echo $template;

