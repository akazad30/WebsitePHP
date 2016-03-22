<?php

$uploadDir = 'uploads/gallery/cultural-program/';

if(!file_exists($uploadDir))
{
    mkdir($uploadDir);
}
$dir = opendir($uploadDir);
$count = 0;
while(($entry = readdir($dir)) !== false){
    if($entry != '.' && $entry != '..'){
        $count++;
    }
}

$name=$_FILES['file']['name'];
$tmp_name=$_FILES['file']['tmp_name'];
$extension=strtolower(substr($name,strpos($name,'.')+1));

// Set the allowed file extensions
$fileTypes = array('jpg', 'jpeg', 'gif', 'png'); // Allowed file extensions

$verifyToken = md5('unique_salt' . $_POST['timestamp']);

if (!empty($_FILES) && $_POST['token'] == $verifyToken) {

    // Validate the filetype
    $fileParts = pathinfo($_FILES['Filedata']['name']);

    $tempFile   = $_FILES['Filedata']['tmp_name'];
    //$uploadDir  = $_SERVER['DOCUMENT_ROOT'] . $uploadDir;
    $targetFile = $uploadDir . 'gallery-img' . $count++ . '.' . $fileParts['extension'];

    if (in_array(strtolower($fileParts['extension']), $fileTypes)) {

        // Save the file
        move_uploaded_file($tempFile, $targetFile);
        echo 1;

    } else {

        // The file type wasn't allowed
        echo 'Invalid file type.';

    }
}
?>