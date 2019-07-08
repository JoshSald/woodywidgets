<?php require('core/init.php');

//INSTANTIATE CLASSES
$db = new Database;
$links = new Support;

//Get Template 
$template = new Template('update/updatelinks.view.php');

//ASSIGN VARS
$id = $_GET['id'];
$template->link = $links->getLink($id);
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
    $existing = "../support/$fileName";

    $fileExt = explode('.', $fileName);
    $fileActualExt = strtolower(end($fileExt));

    $allowed = array('zip', 'pdf', 'txt'); //accepted File Types


    if(in_array($fileActualExt, $allowed)){
        if($fileError === 0){
            //Check File Size
            if($fileSize < 2000000){
                //Check if file already exists
                if(file_exists($existing)){
                    $query = $db->query("UPDATE support SET 
                            `name` = '".$title."', 
                            `link` = '".$fileName."'  
                            WHERE `id` = '".$id."';");

                    $db->execute($query);

                    $template->successmsg = "File successfully updated!";

                    //Redirect to Dashboard
                    header("refresh:1.5; url=index.php");

                } 
                //Create new file with unique id
                else {
                    $newFileName = uniqid('', true)."."."$fileActualExt";
                    $fileDestination = '../support/'.$newFileName;

                    $query = $db->query("UPDATE support SET 
                            `name` = '".$title."', 
                            `link` = '".$newFileName."'  
                            WHERE `id` = '".$id."';");

                    $db->execute($query);

                    move_uploaded_file($fileTmpName, $fileDestination);
                    $template->successmsg = "File successfully updated!";

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
    //If no file is included -> Ignore
    elseif($fileError  === 4){

        $query = $db->query("UPDATE support SET 
        `name` = '".$title."'   
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
    $query = $db->query("DELETE FROM support WHERE `id` = '".$id."';");
    $db->execute($query);
    $template->successmsg = "Support Link Removed";

        //Redirect to Dashboard
        header("refresh:1.5; url=index.php");
    }


echo $template;

