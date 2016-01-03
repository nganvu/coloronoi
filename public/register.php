<?php

    // configuration
    require("../includes/config.php");

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("register_form.php", ["title" => "Register"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // check if name already existed
        $rows = CS50::query("SELECT * FROM users WHERE username = ?", $_POST["username"]);
        
        // if we found user, do not accept
        if ($rows != NULL)
        {
            apologize("Username already exists.");
        }
        else
        {
            // insert data to database
            CS50::query("INSERT IGNORE INTO users (username, hash) VALUES(?, ?)", $_POST["username"], password_hash($_POST["password"], PASSWORD_DEFAULT));
            
            // remember user
            $rows = CS50::query("SELECT LAST_INSERT_ID() AS id");
            $id = $rows[0]["id"];
            
            // remember that user's now logged in by storing user's ID in session
            $_SESSION["id"] = $id;
            $_SESSION["username"] = $_POST["username"];
            
            // default set of colors
            $_SESSION["color_1"] = "#C5277D";
            $_SESSION["color_2"] = "#DE77AE";
            $_SESSION["color_3"] = "#FFE066";
            $_SESSION["color_4"] = "#7D007D";
            $_SESSION["color_5"] = "#E6F5D0";
            $_SESSION["color_6"] = "#B8E186";
            $_SESSION["color_7"] = "#7FBC41";
            $_SESSION["color_8"] = "#4D9221";
            $_SESSION["color_9"] = "#F1B6DA";
            
            // default number of points
            $_SESSION["number"] = 50;

            // redirect to portfolio
            redirect("/");
        }
    }

?>