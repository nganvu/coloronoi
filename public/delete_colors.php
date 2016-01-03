<?php

    // configuration
    require("../includes/config.php");
    
    // if receive request, delete colors
    if (isset($_GET['color_name'])) {
        $rows = CS50::query("DELETE FROM history WHERE user_id = ? AND name = ?", $_SESSION["id"], $_GET["color_name"]);
        
        redirect('/view_colors.php');
    }
?>