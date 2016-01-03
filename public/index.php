<?php

    // configuration
    require("../includes/config.php");
    
    // if receive number of points for the diagram, store in session
    if ($_SERVER["REQUEST_METHOD"] == "POST")
    {
        $_SESSION["number"] = $_POST["number"];
    }
    
    // render index
    render("index_view.php", ["title" => "Homepage"]);
?>