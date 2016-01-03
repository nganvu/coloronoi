<?php

    // configuration
    require("../includes/config.php");
    
    // select from history
    $saved_colors = CS50::query("SELECT * FROM history WHERE user_id = ? ORDER BY id DESC", $_SESSION["id"]);

	// render history
    render("view_colors_result.php", ["title" => "View saved colors", "saved_colors" => $saved_colors]);
?>