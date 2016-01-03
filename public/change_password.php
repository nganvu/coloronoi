<?php

    // configuration
    require("../includes/config.php"); 

    // if user reached page via GET (as by clicking a link or via redirect)
    if ($_SERVER["REQUEST_METHOD"] == "GET")
    {
        // else render form
        render("change_password_form.php", ["title" => "Change Password"]);
    }

    // else if user reached page via POST (as by submitting a form via POST)
    else if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        // query database for user
        $rows = CS50::query("SELECT * FROM users WHERE user_id = ?", $_SESSION["id"]);

        // first (and only) row
        $row = $rows[0];

        // compare hash of user's input against hash that's in database
        if (password_verify($_POST["password"], $row["hash"]))
        {
            CS50::query("UPDATE users SET hash = ? WHERE user_id = ?", password_hash($_POST["new_password"], PASSWORD_DEFAULT), $_SESSION["id"]);
            render("change_password_result.php", ["new_password" => $_POST["new_password"]]);
        }
        else
        {
            apologize("Invalid password.");
        }
    }
?>