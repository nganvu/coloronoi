<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // query database for user
        $rows = CS50::query("SELECT * FROM users WHERE user_id = ?", $_SESSION["id"]);

        // first (and only) row
        $row = $rows[0];
        
        // render form
        render("change_username_form.php", ["title" => "Change Username", "username" => $row["username"]]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        if (CS50::query("SELECT * FROM users WHERE username = ?", $_POST["new_username"]) != NULL)
        {
            apologize("Username already exists.");
        }
        else
        {
            // query database for user
            $rows = CS50::query("SELECT * FROM users WHERE user_id = ?", $_SESSION["id"]);
    
            // first (and only) row
            $row = $rows[0];
            
            // compare hash of user's input against hash that's in database
            if (password_verify($_POST["password"], $row["hash"]))
            {
                $_SESSION["username"] = $_POST["new_username"];
                CS50::query("UPDATE users SET username = ? WHERE user_id = ?", $_POST["new_username"], $_SESSION["id"]);
                render("change_username_result.php", ["new_username" => $_POST["new_username"]]);
            }
            
            // else apologize
            apologize("Invalid password.");
        }
    }
?>