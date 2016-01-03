<?php

    // configuration
    require("../includes/config.php");
        
    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("save_colors_form.php", ["title" => "Save current colors", "color1" => $_SESSION["color_1"],
                                                                          "color2" => $_SESSION["color_2"],
                                                                          "color3" => $_SESSION["color_3"],
                                                                          "color4" => $_SESSION["color_4"],
                                                                          "color5" => $_SESSION["color_5"],
                                                                          "color6" => $_SESSION["color_6"],
                                                                          "color7" => $_SESSION["color_7"],
                                                                          "color8" => $_SESSION["color_8"],
                                                                          "color9" => $_SESSION["color_9"]]);
    }
    
    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {	
        // validate submission
        if (empty($_POST["name"]))
        {
            apologize("You must provide a name for your current set of colors.");
        }
        else
        {
            $user_id = $_SESSION["id"];
            $color_1 = $_SESSION["color_1"];
            $color_2 = $_SESSION["color_2"];
            $color_3 = $_SESSION["color_3"];
            $color_4 = $_SESSION["color_4"];
            $color_5 = $_SESSION["color_5"];
            $color_6 = $_SESSION["color_6"];
            $color_7 = $_SESSION["color_7"];
            $color_8 = $_SESSION["color_8"];
            $color_9 = $_SESSION["color_9"];
            $name = $_POST["name"];
    
         	// update
         	CS50::query("INSERT INTO history (user_id, name, color_1, color_2, color_3, color_4, color_5, color_6,
         	    color_7, color_8, color_9) VALUES(?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?) ON DUPLICATE KEY UPDATE
         	    color_1 = ?, color_2 = ?, color_3 = ?, color_4 = ?, color_5 = ?, color_6 = ?, color_7 = ?, color_8 = ?, color_9 = ?",
         	    $user_id, $name, $color_1, $color_2, $color_3, $color_4, $color_5, $color_6, $color_7, $color_8, $color_9,
         	                     $color_1, $color_2, $color_3, $color_4, $color_5, $color_6, $color_7, $color_8, $color_9);
    	}
    
        // redirect
        redirect("/view_colors.php");
        
    }
?>