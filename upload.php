<?php

    if(isset($_POST["submit"])) {
        $targetDirectory = "uploads/";  //direktori tuguan menyimpan file
        $targetFile = $targetDirectory . basename($_FILES["fileToUpload"]["name"]);
        $fileType = strtolower(pathinfo($targetFile, PATHINFO_EXTENSION));

        // $allowedExtensions = array("jpg","jpeg", "png", "gif");

        $allowedExtensions = array("txt","pdf", "doc", "docx");

        $maxFileSize = 10 * 1024 * 1024;

        if (in_array($fileType, $allowedExtensions) && $_FILES["fileToUpload"]["size"] <= $maxFileSize) {
            if (move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $targetFile)) {
                echo "File berhasil terunggah";

            // $thumbnailFile = $targetDirectory . "thumbnail_" . basename($_FILES["fileToUpload"]["name"]);
            // $sourceImage = imagecreatefromstring(file_get_contents($targetFile));
            
            // list($width, $height) = getimagesize($targetFile);
            // $newWidth = 200;
            // $newHeight = $height * ($newWidth / $width);
            // $thumbnail = imagecreatetruecolor($newWidth, $newHeight);
            
            // imagecopyresampled($thumbnail, $sourceImage, 0, 0, 0, 0, $newWidth, $newHeight, $width, $height);
            // imagejpeg($thumbnail, $thumbnailFile);
            // imagedestroy($thumbnail);

            // echo "Thumbnail berhasil dibuat";

             } else {
                 echo "Gagal mengunggah file";
             }
        } else {

            echo "File tidak valid atau melebihi ukuran maksimum yang diizinkan";
        }

       
        
    }
    
   


?>