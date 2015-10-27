<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
      <head>
            <meta charset="UTF-8">
            <title>Document</title>
            <script src="https://cdn.jsdelivr.net/jquery/3.0.0-alpha1/jquery.js"></script>
            <script src="https://cdn.jsdelivr.net/skrollr/0.6.30/skrollr.min.js"></script>
            <link rel="stylesheet" type="text/css" href="css/animsition.min.css">
            <script src="js/animsition.min.js"></script>            
            <link rel="stylesheet" type="text/css" href="css/style.css">
            <script type="text/javascript">
            var images = new Array()
            function preload() {
            for (i = 0; i < preload.arguments.length; i++) {
            images[i] = new Image()
            images[i].src = preload.arguments[i]
            }
            }
            preload(
                  "images/3-01.jpg",
                  "images/3-02.jpg",
                  "images/3-03.jpg",
                  "images/3-04.jpg",
                  "images/3-05.jpg",
                  "images/3-06.jpg",
                  "images/3-07.jpg",
                  "images/3-08.jpg",
                  "images/3-09.jpg",
                  "images/3-10.jpg",
                  "images/3-11.jpg",
                  "images/3-12.jpg",
                  "images/3-13.jpg",
                  "images/3-14.jpg",
                  "images/3-15.jpg",
                  "images/3-16.jpg",
                  "images/3-17.jpg",
                  "images/3-18.jpg",
                  "images/3-19.jpg",
                  "images/3-20.jpg",
                  "images/3-21.jpg",
                  "images/3-22.jpg",
                  "images/3-23.jpg",
                  "images/3-24.jpg",
                  "images/3-25.jpg",
                  "images/3-26.jpg",
                  "images/3-27.jpg",
                  "images/3-28.jpg",
                  "images/3-29.jpg",
                  "images/3-30.jpg",
                  "images/3-31.jpg",
                  "images/3-32.jpg",
                  "images/3-33.jpg",
                  "images/3-34.jpg",
                  "images/3-35.jpg",
                  "images/3-36.jpg",
                  "images/3-37.jpg",
                  "images/3-38.jpg",
                  "images/3-39.jpg",
                  "images/3-40.jpg",
                  "images/3-41.jpg",
                  "images/3-42.jpg",
                  "images/3-43.jpg",
                  "images/3-44.jpg",
                  "images/3-45.jpg",
                  "images/3-46.jpg",
                  "images/3-47.jpg",
                  "images/3-48.jpg",
                  "images/3-49.jpg",
                  "images/3-50.jpg",
                  "images/3-51.jpg",
                  "images/3-52.jpg",
                  "images/3-53.jpg",
                  "images/3-54.jpg",
                  "images/3-55.jpg",
                  "images/3-56.jpg",
                  "images/3-57.jpg",
                  "images/3-58.jpg",
                  "images/3-59.jpg",
                  "images/3-60.jpg",
                  "images/3-61.jpg",
                  "images/3-62.jpg",
                  "images/3-63.jpg",
                  "images/3-64.jpg",
                  "images/3-65.jpg",
                  "images/3-66.jpg",
                  "images/3-67.jpg",
                  "images/3-68.jpg",
                  "images/3-69.jpg",
                  "images/3-70.jpg",
                  "images/3-71.jpg",
                  "images/3-72.jpg",
                  "images/3-73.jpg",
                  "images/3-74.jpg",
                  "images/3-75.jpg"
            )
            </script>
      </head>
      <body>
            <audio controls loop mute >
                  <source src="sound/soundscape-1.mp3" type="audio/mpeg">
                  Your browser does not support the audio element.
            </audio>
            <div class="timeline-4">
                  <div class="lol" data-00="opacity: 0"  data-600="opacity: 1" data-800="opacity: 0"><a href="http://www.google.co.uk">Hello</a></div>
            </div>
            <div class="scroll" data-00="opacity: 1" data-100p="opacity: 0.1" data-500p="opacity: 0.1" data-560p="opacity: 0"><img src="images/scroll.png"></div>
            <!-- <div class="leftorright" data-00="opacity: 0" data-540p="opacity: 0" data-560p="opacity: 1">
                  <a href="section-2.html"><div class="choose"></div></a>
                  <div class="left"></div>
                  <div class="or"></div>
                  <div class="right"></div>
            </div> -->
            <div class="demo"
                  data-0p="background-image:!url(images/3-01.jpg);"
                  data-10p="background-image:!url(images/3-02.jpg);"
                  data-20p="background-image:!url(images/3-03.jpg);"
                  data-30p="background-image:!url(images/3-04.jpg);"
                  data-40p="background-image:!url(images/3-05.jpg);"
                  data-50p="background-image:!url(images/3-06.jpg);"
                  data-60p="background-image:!url(images/3-07.jpg);"
                  data-70p="background-image:!url(images/3-08.jpg);"
                  data-80p="background-image:!url(images/3-09.jpg);"
                  data-90p="background-image:!url(images/3-10.jpg);"
                  data-100p="background-image:!url(images/3-11.jpg);"
                  data-110p="background-image:!url(images/3-12.jpg);"
                  data-120p="background-image:!url(images/3-13.jpg);"
                  data-130p="background-image:!url(images/3-14.jpg);"
                  data-140p="background-image:!url(images/3-15.jpg);"
                  data-150p="background-image:!url(images/3-16.jpg);"
                  data-160p="background-image:!url(images/3-17.jpg);"
                  data-170p="background-image:!url(images/3-18.jpg);"
                  data-180p="background-image:!url(images/3-19.jpg);"
                  data-190p="background-image:!url(images/3-20.jpg);"
                  data-200p="background-image:!url(images/3-21.jpg);"
                  data-210p="background-image:!url(images/3-22.jpg);"
                  data-220p="background-image:!url(images/3-23.jpg);"
                  data-230p="background-image:!url(images/3-24.jpg);"
                  data-240p="background-image:!url(images/3-25.jpg);"
                  data-250p="background-image:!url(images/3-26.jpg);"
                  data-260p="background-image:!url(images/3-27.jpg);"
                  data-270p="background-image:!url(images/3-28.jpg);"
                  data-280p="background-image:!url(images/3-29.jpg);"
                  data-290p="background-image:!url(images/3-30.jpg);"
                  data-300p="background-image:!url(images/3-31.jpg);"
                  data-310p="background-image:!url(images/3-32.jpg);"
                  data-320p="background-image:!url(images/3-33.jpg);"
                  data-330p="background-image:!url(images/3-34.jpg);"
                  data-340p="background-image:!url(images/3-35.jpg);"
                  data-350p="background-image:!url(images/3-36.jpg);"
                  data-360p="background-image:!url(images/3-37.jpg);"
                  data-370p="background-image:!url(images/3-38.jpg);"
                  data-380p="background-image:!url(images/3-39.jpg);"
                  data-390p="background-image:!url(images/3-40.jpg);"
                  data-400p="background-image:!url(images/3-41.jpg);"
                  data-410p="background-image:!url(images/3-42.jpg);"
                  data-420p="background-image:!url(images/3-43.jpg);"
                  data-430p="background-image:!url(images/3-44.jpg);"
                  data-440p="background-image:!url(images/3-45.jpg);"
                  data-450p="background-image:!url(images/3-46.jpg);"
                  data-460p="background-image:!url(images/3-47.jpg);"
                  data-470p="background-image:!url(images/3-48.jpg);"
                  data-480p="background-image:!url(images/3-49.jpg);"
                  data-490p="background-image:!url(images/3-50.jpg);"
                  data-500p="background-image:!url(images/3-51.jpg);"
                  data-510p="background-image:!url(images/3-52.jpg);"
                  data-520p="background-image:!url(images/3-53.jpg);"
                  data-530p="background-image:!url(images/3-54.jpg);"
                  data-540p="background-image:!url(images/3-55.jpg);"
                  data-550p="background-image:!url(images/3-56.jpg);"
                  data-560p="background-image:!url(images/3-57.jpg);"
                  data-570p="background-image:!url(images/3-58.jpg);"
                  data-580p="background-image:!url(images/3-59.jpg);"
                  data-590p="background-image:!url(images/3-60.jpg);"
                  data-600p="background-image:!url(images/3-61.jpg);"
                  data-610p="background-image:!url(images/3-62.jpg);"
                  data-620p="background-image:!url(images/3-63.jpg);"
                  data-630p="background-image:!url(images/3-64.jpg);"
                  data-640p="background-image:!url(images/3-65.jpg);"
                  data-650p="background-image:!url(images/3-66.jpg);"
                  data-660p="background-image:!url(images/3-67.jpg);"
                  data-670p="background-image:!url(images/3-68.jpg);"
                  data-680p="background-image:!url(images/3-69.jpg);"
                  data-690p="background-image:!url(images/3-70.jpg);"
                  data-700p="background-image:!url(images/3-71.jpg);"
                  data-710p="background-image:!url(images/3-72.jpg);"
                  data-720p="background-image:!url(images/3-73.jpg);"
                  data-730p="background-image:!url(images/3-74.jpg);"
                  data-740p="background-image:!url(images/3-75.jpg);">
            </div>
            <video class="end-video" id="computer"  >
                  <source src="video/end-video-long-test.mp4" type="video/mp4">
<!--                   <source src="video/End test_1.ogv" type="video/ogg"> -->
                  Your browser does not support HTML5 video.
            </video>            
            <div id="text-container">
                  <div id="writer"></div>
            </div>
            <div class="thisdiv">
                  <div id="credits">
                        <p>
                              <strong>Merchants Scarehouse.<br>
                              Another Digi Team production.</strong>
                              <br><br><br>
                              <strong>Concept</strong><br>
                              The Digi Team
                              <br><br><br>
                              <strong>‘The Merchant’</strong><br>
                              Terry Ponsillo
                              <br><br><br>
                              <strong>Art Direction</strong><br>
                              Chris Brogan
                              <br><br><br>
                              <strong>Design</strong><br>
                              Phil Earnshaw
                              <br><br><br>
                              <strong>Development</strong><br>
                              Alex Dring<br>
                              Terry Ponsillo
                              <br><br><br>
                              <strong>Camera, Sound &amp; Editing</strong><br>
                              Phil Earnshaw
                              <br><br><br>
                              <strong>Lighting Technician </strong><br>
                              Chris Brogan <br>
                              Alex Dring
                              <br><br><br>
                              <strong>Guest Lighting Technician &amp; keeper of secrets</strong><br>
                              Dave Ferguson
                              <br><br><br>
                              <strong>Special Effects</strong><br>
                              The Digi Team and Dave 
                              <br><br><br>
                              <strong>Scream 1</strong><br>
                              Alex Dring
                              <br><br><br>
                              <strong>Scream 2</strong><br>
                              Alex Dring
                              <br><br><br>
                              <strong>Scream 3</strong><br>
                              ? (It wasn’t Alex)
                        </p>
                  </div>
                  <a class="animsition-link" id="end-replay" href="indexv2.html"></a>
            </div>
            <script>
            var username = "<?php if (isset($_SESSION['firstname']) && !is_null($_SESSION['firstname'])): echo $_SESSION['firstname']; endif; ?>",
                  str = "<p>Remember this " + username + "<br> Should we meet<br>Be it trick, or be it treat<br>All Hallows’ eve, I won't be far<br>Come out, come out<br>Wherever you are!<br><br>Merchant of the Warehouse.</p>",
                  i = 0,
                  isTag,
                  text;
            </script>
            <script src="js/main.js"></script>
      </body>
</html>