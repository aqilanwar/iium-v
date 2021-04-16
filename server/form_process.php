<?php
if(isset($_POST['submit_image']))
{
    for($i=0;$i<count($_FILES["upload_file"]["name"]);$i++)
    {
        if($ext == 'jpg' || $ext == 'png' || $ext == 'JPG' || $ext == 'PNG'){
            $new_file_name = time().'.'.$ext;
            $targetPath = 'uploads/';  //4
            $targetFile =  $targetPath. $new_file_name;  //5
            $uploadfile=$_FILES["upload_file"]["tmp_name"][$i];
            $folder="images/";
            move_uploaded_file($_FILES["upload_file"]["tmp_name"][$i], "$folder".$_FILES["upload_file"][$new_file_name][$i]);
    }
    exit();
}
?>