<?php

    // configuration
    require("../includes/config.php");
    
    require ('../vendor/autoload.php');
    
    use League\ColorExtractor\Client as ColorExtractor;
    
    function ExtractColor($imagename) {
        $client = new ColorExtractor;
        
        $image = $client->loadJpeg($imagename);
        
        // Get the most used colors hex code
        $palette = $image->extract(9);
        
        // Store colors
        $_SESSION["color_1"] = $palette[0];
        $_SESSION["color_2"] = $palette[1];
        $_SESSION["color_3"] = $palette[2];
        $_SESSION["color_4"] = $palette[3];
        $_SESSION["color_5"] = $palette[4];
        $_SESSION["color_6"] = $palette[5];
        $_SESSION["color_7"] = $palette[6];
        $_SESSION["color_8"] = $palette[7];
        $_SESSION["color_9"] = $palette[8];
        
        redirect("/");
        
    }
    
    // if receive request, extract colors
    if (isset($_GET['imagename'])) {
        ExtractColor($_GET['imagename']);
    }
?>