<!DOCTYPE html>
<html>
<head>
<title>
  The Journey
</title>
<link rel="stylesheet" type="text/css" href="homescreen.css">
<script src="jquery-3.3.1.min.js"></script>
<script src="interactivity.js"></script>



</head>

<body>


<?php include("includes/header.html");?>






  <video autoplay muted loop id="myVideo">
    <source src="snow.MOV" type="video/mp4">
    Your browser does not support HTML5 video.
  </video>

  <div class="content">
    <h1>Welcome</h1>
    <p>This is my web developer portfolio. Here, I list my projects and expertise. I also document my college journey
      as a high schooler living in the Midwest. Thanks for visiting!</p>
    <p>The video in the background is a timelapse of a snowstorm that occurred within
       my neighborhood on Feb. 17, 2018</p>
    <button id="myBtn" onclick="window.location.href='college_journey.html'">Enter</button>
</div>
  </div>

<br></br>






          <script>
          window.onscroll = function() {myFunction()};

          var navbar = document.getElementById("navbar");
          var sticky = navbar.offsetTop;

          function myFunction() {
            if (window.pageYOffset >= sticky) {
              navbar.classList.add("sticky")
            } else {
              navbar.classList.remove("sticky");
            }
          }
          </script>
</body>


</html>
