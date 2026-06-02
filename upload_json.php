<?php

include "functions.php";

if(isset($_FILES["fileToUpload"])) {
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]); 

    if(move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
        echo "The file " . htmlspecialchars( basename($_FILES["fileToUpload"]["name"])). "has been uploaded. ";
        process_file_json($target_file);
    }
    else {
        echo "Sorry, there was an error uploading your file. ";
    }
}

echo <<<HTML
<body>

<form action="upload_json.php" method="post" enctype="multipart/form-data">
    Select file to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload JSON" name="submit">
</form>

HTML;