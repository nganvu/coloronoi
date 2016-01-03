<?php

    // configuration
    require("../includes/config.php"); 
    
    require ('../vendor/autoload.php');

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("upload_form.php", ["title" => "Upload"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["fileToUpload"]["name"]);
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        
        // Check if image file is a actual image or fake image
        if(isset($_POST["submit"])) {
            $check = getimagesize($_FILES["fileToUpload"]["tmp_name"]);
            if($check !== false) {
                $uploadOk = 1;
            } else {
                apologize("File is not an image.");
                $uploadOk = 0;
            }
        }
        
        // Check file size
        if ($_FILES["fileToUpload"]["size"] > 500000) {
            apologize("Sorry, your file is too large.");
            $uploadOk = 0;
        }
        
        // Allow certain file formats
        if($imageFileType != "jpg" && $imageFileType != "jpeg" ) {
            apologize("Sorry, only JPG & JPEG files are allowed.");
            $uploadOk = 0;
        }
        
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            apologize("Sorry, your file was not uploaded.");
            
        // if everything is ok, try to upload file
        } else {
            if (!move_uploaded_file($_FILES["fileToUpload"]["tmp_name"], $target_file)) {
                apologize("Sorry, there was an error uploading your file.");
            }
        }
        
        function ExtractColor($imagename) {
            $client = new League\ColorExtractor\Client;
            
            $image = $client->loadJpeg($imagename);
            
            // get the most used color hex code
            $palette = $image->extract(9);
            
            // store in sessions
            $_SESSION["color_1"] = $palette[0];
            $_SESSION["color_2"] = $palette[1];
            $_SESSION["color_3"] = $palette[2];
            $_SESSION["color_4"] = $palette[3];
            $_SESSION["color_5"] = $palette[4];
            $_SESSION["color_6"] = $palette[5];
            $_SESSION["color_7"] = $palette[6];
            $_SESSION["color_8"] = $palette[7];
            $_SESSION["color_9"] = $palette[8];
            
            redirect('/');
        }
        
        ExtractColor("./uploads/" . $_FILES["fileToUpload"]["name"]);
    }

?>