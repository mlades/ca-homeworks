<?php
// In Visual Studio Code create target directory "file_uploads" where you are going to save your files

// put path to this directory into variable $targetDir
$targetDir = "file_uploads";

// validate if $_FILES has file you upload ( value from form name attribute)
if (isset($_FILES['fileWeUpload']) && !empty($_FILES['fileWeUpload']['name'])) { 

// extract in variable $ext - uploaded file extension using pathinfo from the file - 
//for example if you have file MyImage.jpeg - you should get only this part ".jpeg"
    $ext = pathinfo($_FILES['fileWeUpload']['name'], PATHINFO_EXTENSION);

// TO Create unique file name which will allow us to avoid filename conflicts in our WEB app we will use next approach

// extract the file name $filename (only name of the file) -  - for example if you have file MyImage.jpeg - you should get only this part "MyImage"
    $fileName = pathinfo($_FILES['fileWeUpload']['name'], PATHINFO_FILENAME);

// using hash funciton md5() to create a hash string in $hashFilename from the $filename 
    $hashFilename = md5($fileName);

// create a new path using $targetDir, $hashFilename and $ext, use DIRECTORY_SEPARATOR if needed
    $uploadPath =$targetDir.DIRECTORY_SEPARATOR.$hashFilename.".".$ext;

// Using function move_uploaded_file move file from temp location to the path you created. Filename should be hashed string
    move_uploaded_file($_FILES['fileWeUpload']["tmp_name"],$uploadPath);

// Inform user that he   uploaded file successfully 
    echo("Uploaded file successfully");
}

