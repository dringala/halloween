<?php
    session_start();
    require_once 'Mobile_Detect.php';
    $detect = new Mobile_Detect;
     
    // Any mobile device (phones or tablets).
    if ( $detect->isMobile() ) {
        header("Location: /no-support.html"); /* Redirect browser */
        exit();
    }
     
    // Any tablet device.
    if( $detect->isTablet() ){
        header("Location: /no-support.html"); /* Redirect browser */
        exit();
    }
    if ($_SERVER['SERVER_NAME'] === 'hosted.uk.dev') {
        // Local
        $dbuser = 'root';
        $dbpass = 'password';
    } 
    elseif ($_SERVER['SERVER_NAME'] === 'halloween.dev') {
        $dbuser = 'root';
        $dbpass = '';            
    } 
    elseif ($_SERVER['SERVER_NAME'] === 'localhost:8888') {
        $dbuser = 'root';
        $dbpass = 'root';            
    } else {
        // Live
        error_reporting(0); // Turn off errors so we can log them
        $dbuser = 'wrghallowen';
        $dbpass = 'sT8z97sf';
    }
    
    $dbhost  = 'localhost';
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
                  <source src="video/intro-video.ogv" type="video/ogg">                  
                  Your browser does not support HTML5 video.
            </video>
            <script>
              (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
              (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
              m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
              })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

              ga('create', 'UA-69445751-1', 'auto');
              ga('send', 'pageview');

            </script>            
            <script src="js/main.js"></script>
      </body>
</html>