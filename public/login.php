<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("login_form.php", ["title" => "Log in"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // query database for user
        $rows = CS50::query("SELECT * FROM users WHERE username = ?", $_POST["username"]);

        // if we found user, check password
        if (count($rows) == 1)
        {
            // first (and only) row
            $row = $rows[0];

            // compare hash of user's input against hash that's in database
            if (password_verify($_POST["password"], $row["hash"]))
            {
                // remember that user's now logged in by storing user's ID in session
                $_SESSION["id"] = $row["user_id"];
                $_SESSION["username"] = $row["username"];
                $_SESSION["color_1"] = "#C5277D";
                $_SESSION["color_2"] = "#DE77AE";
                $_SESSION["color_3"] = "#FFE066";
                $_SESSION["color_4"] = "#7D007D";
                $_SESSION["color_5"] = "#E6F5D0";
                $_SESSION["color_6"] = "#B8E186";
                $_SESSION["color_7"] = "#7FBC41";
                $_SESSION["color_8"] = "#4D9221";
                $_SESSION["color_9"] = "#F1B6DA";
                $_SESSION["number"] = 50;
    
                // redirect to portfolio
                redirect("/");
            }
        }

        // else apologize
        apologize("Invalid username and/or password.");
    }

?>
