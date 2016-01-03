<?php

    // configuration
    require("../includes/config.php");
    
    if (isset($_GET['color_name'])) {
        
        // find the desired set of colors in history
        $rows = CS50::query("SELECT * FROM history WHERE user_id = ? AND name = ?", $_SESSION["id"], $_GET["color_name"]);
        $row = $rows[0];
        
        // store in current session
        $_SESSION["color_1"] = $row['color_1'];
        $_SESSION["color_2"] = $row['color_2'];
        $_SESSION["color_3"] = $row['color_3'];
        $_SESSION["color_4"] = $row['color_4'];
        $_SESSION["color_5"] = $row['color_5'];
        $_SESSION["color_6"] = $row['color_6'];
        $_SESSION["color_7"] = $row['color_7'];
        $_SESSION["color_8"] = $row['color_8'];
        $_SESSION["color_9"] = $row['color_9'];
        
        redirect('/');
    }
?>