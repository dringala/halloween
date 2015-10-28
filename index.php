<?php
    session_start();
    
    if ($_SERVER['SERVER_NAME'] === 'hosted.uk.dev') {
        // Local
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = 'password';
    } 
    elseif ($_SERVER['SERVER_NAME'] === 'halloween.dev') {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = '';            
    } 
    elseif ($_SERVER['SERVER_NAME'] === 'localhost:8888') {
        $dbhost = 'localhost';
        $dbuser = 'root';
        $dbpass = 'root';            
    } else {
        // Live
        error_reporting(0); // Turn off errors so we can log them
        $dbhost = 'localhost';
        $dbuser = 'halloween2015';
        $dbpass = 'xxxxxxxxx';
    }
    
    $dbname  = 'halloween2015';
    $dbtable = 'recipients';    
    $logfile = 'myerror.log';
    
    // Collect GET vars
    $guid    = (isset($_GET['guid'])) ? trim($_GET['guid']) : null;
    
    
    if (!is_null($guid)) {
        
        // Basic sanitation of string
        $guid   = substr($guid, 0,32);
        
        // Connect to db
        $db = new mysqli($dbhost, $dbuser, $dbpass, $dbname);
        
        // DB connect failed - log error
        if ($db->connect_errno > 0) {
            error_log('Unable to connect to database [' . $db->connect_error . "], guid = {$guid}\r\n", 3, $logfile);
        } else {
            $statement = $db->prepare("SELECT firstname FROM `{$dbtable}` WHERE `guid` = ?");
            $statement->bind_param('s', $guid);
            $statement->execute();
            
            $statement->bind_result($firstname);
            while ($statement->fetch()) {
                $_SESSION['firstname'] = $firstname;
            }  
            $statement->free_result();
            $statement->close();
        }
        
    } elseif (!isset($_SESSION['firstname'])) {
        
        // Set up empty session firstname
        $_SESSION['firstname'] = null;
        
    }
        
?><!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <title>Document</title>
            <script src="https://cdn.jsdelivr.net/jquery/3.0.0-alpha1/jquery.js"></script>
            <script src="https://cdn.jsdelivr.net/skrollr/0.6.30/skrollr.min.js"></script>
            <link rel="stylesheet" type="text/css" href="css/animsition.min.css">
            <script src="js/animsition.min.js"></script>
            <link rel="stylesheet" type="text/css" href="css/style.css">
      </head>
      <body class="animsition">
            <div id="instructions">
                <div class="instruction-text">
                    <p>
                        To get the full experience, put your headphones on and turn up the volume… if you dare.
                    </p>
                        <div class="instruction-close"></div>
                    <p>
                        * A fast broadband connection is recommended
                    </p>
                </div>
            </div>
            <a class="animsition-link" id="intro-continue" href="indexv2.html"></a>
            <video id="intro-video">
                  <source src="video/intro-video.mp4" type="video/mp4">
                  <source src="video/End test_1.ogv" type="video/ogg">                  
                  Your browser does not support HTML5 video.
            </video>
            
            <script src="js/main.js"></script>
      </body>
</html>