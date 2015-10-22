<?php

  //Set number of items
  // define('ITEMCOUNT', 57);
  define('ITEMCOUNT', 57);


?><!DOCTYPE html>
<html lang="en">
<head>
      <meta charset="UTF-8">
      <title>Document</title>
      <script src="https://cdn.jsdelivr.net/jquery/3.0.0-alpha1/jquery.js"></script>
      <script src="https://cdn.jsdelivr.net/skrollr/0.6.30/skrollr.min.js"></script>

      <link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>

      <div class="content">
            <div class="lol" data-400p="opacity: 0"  data-500p="opacity: 1" data-560p="opacity: 0"><a href="http://www.google.co.uk">Hello</a></div>
      </div>

      <?php
            $i = 1;
            $data = 0;
            $zindex = -2;
            do {
                //Last frame
                if ($i === ITEMCOUNT) {
        ?>
            <div style="background-image: url('images/<?php echo $i ?>.jpg'); z-index:<?php echo $zindex ?>" class="frame-<?php echo $i ?> frame" data-<?php echo $data ?>p="opacity:1;">
<!--                 <video class="test" controls autoplay loop>
                    <source src="video/End test_1.mp4" type="video/mp4">
                    <source src="video/End test_1.ogv" type="video/ogg">
                    Your browser does not support HTML5 video.
                </video> -->
            </div>
        <?php
                } else {
        ?>
            <div style="background-image: url('images/<?php echo $i ?>.jpg'); z-index:<?php echo $zindex ?>" class="frame-<?php echo $i ?> frame" data-<?php echo $data ?>p="opacity:1;" data-<?php echo ($data+10) ?>p="opacity:0;"></div>
        <?php
                }
                $i = $i+1;
                $data = $data+10;
                $zindex = $zindex-1;
            } while ($i <= ITEMCOUNT);
        ?>


      <script src="js/main.js"></script>
</body>
</html>