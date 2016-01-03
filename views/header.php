<!DOCTYPE html>

<html>

    <head>

        <!-- Google font -->
        <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet' type='text/css'>
        
        <!-- CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet"/>
        <link href="/css/main.css" rel="stylesheet">
        <link href="/css/slider.css" rel="stylesheet">
        
        <!-- JS -->
        <script src="/js/jquery-1.11.3.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/bootstrap-slider.js"></script>
        <script src="/js/scripts.js"></script>
        <script src="//d3js.org/d3.v3.min.js"></script>
        
        <!-- Navigator bar -->
        <?php if (isset($title)): ?>
            <title>Coloronoi: <?= htmlspecialchars($title) ?></title>
        <?php else: ?>
            <title>Coloronoi</title>
        <?php endif ?>
        
        <meta charset="utf-8">
        
        <!-- For d3js Elements-->
        <style>
        
        path {
        stroke: #fff;
        }
        
        path:first-child {
        fill: #fff !important;
        }
        
        circle {
        fill: #fff;
        pointer-events: none;
        }
        
        .q0-9 { fill: <?= $_SESSION["color_1"] ?>; }
        .q1-9 { fill: <?= $_SESSION["color_2"] ?>; }
        .q2-9 { fill: <?= $_SESSION["color_3"] ?>; }
        .q3-9 { fill: <?= $_SESSION["color_4"] ?>; }
        .q4-9 { fill: <?= $_SESSION["color_5"] ?>; }
        .q5-9 { fill: <?= $_SESSION["color_6"] ?>; }
        .q6-9 { fill: <?= $_SESSION["color_7"] ?>; }
        .q7-9 { fill: <?= $_SESSION["color_8"] ?>; }
        .q8-9 { fill: <?= $_SESSION["color_9"] ?>; }
        
        </style>

    </head>
    
    <body style="background-attachment: fixed; background-repeat: no-repeat;">
        <div class = "container">
            <div class="navbar navbar-default navbar-fixed-top">
                <?php if (!empty($_SESSION["id"])): ?>
                
                <!-- Left navigator -->
                <ul class="pull-left">
                    
                    <li><a name="home" href="/">Homepage</a></li>
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle">Manage <b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li><a href="view_colors.php">View saved colors</a></li>
                        <li><a href="save_colors.php">Save current colors</a></li>
                    </ul>
                    </li>
                    
                </ul>
                
                <!-- Right navigator -->
                <ul class="pull-right">
                    <li class="dropdown">
                    <a href="#" class="dropdown-toggle"><b class="caret"></b> <?= $_SESSION["username"] ?></a>
                    <ul class="dropdown-menu">
                        <li><a href="change_username.php">Change username</a></li>
                        <li><a href="change_password.php">Change password</a></li>
                    </ul>
                    </li>
                    <li><a href="logout.php">Logout</a></li>
                </ul>
                
                <?php endif ?>
            </div>
        </div>
    
    <div class="jumbotron">
        <h1>COLORONOI</h1>
        <p>Create your own colorful Voronoi diagram!</p>
    </div>