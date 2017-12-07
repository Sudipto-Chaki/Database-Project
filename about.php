<!DOCTYPE html>
<html>
<title>W3.CSS Template</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
body,h1,h2,h3,h4,h5,h6 {font-family: "Lato", sans-serif}
.w3-navbar,h1,button {font-family: "Montserrat", sans-serif}
.fa-anchor,.fa-coffee {font-size:200px}
</style>
<body>

<!-- Navbar -->
<div class="w3-top">
  <ul class="w3-navbar w3-red w3-card-2 w3-left-align w3-large">
    <li class="w3-hide-medium w3-hide-large w3-opennav w3-right">
      <a class="w3-padding-large w3-hover-white w3-large w3-red" href="javascript:void(0);" onclick="myFunction()" title="Toggle Navigation Menu"><i class="fa fa-bars"></i></a>
    </li>
	<li class="w3-hide-small"><a href="index.php" class="w3-padding-large w3-hover-white">Home</a></li>
    <li class="w3-hide-small"><a href="admin login.php" class="w3-padding-large w3-hover-white">Admin's Section</a></li>
    <li class="w3-hide-small"><a href="teacher_index.php" class="w3-padding-large w3-hover-white">Teacher's Section</a></li>
    <li class="w3-hide-small"><a href="student login.php" class="w3-padding-large w3-hover-white">Student's Section</a></li>
    <li class="w3-hide-small"><a href="about.php" class="w3-padding-large w3-hover-white">About</a></li>
  </ul>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-hide w3-hide-large w3-hide-medium">
    <ul class="w3-navbar w3-left-align w3-large w3-black">
      <li><a class="w3-padding-large" href="#">Admin's Section</a></li>
      <li><a class="w3-padding-large" href="#">Teacher's Section</a></li>
      <li><a class="w3-padding-large" href="#">Student's Section</a></li>
      <li><a class="w3-padding-large" href="#">About</a></li>
    </ul>
  </div>
</div>

<!-- Header -->
<header class="w3-container w3-red w3-center w3-padding-128">
  <h1 class="w3-margin w3-jumbo">ABOUT PAGE</h1>
  
</header>

<!-- First Grid -->
<div class="w3-row-padding w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-twothird">
      <h1>Motivation</h1>
      <h5 class="w3-padding-32">Processing of examination results is one of the most important activities of a University. Generally, this processing depends on different parameters in many ways and thus processing becomes a tough job. Some computer applications such as MS Excel and other spread sheet software have made the task easier but these are not suitable for multiple and different grouped users. So, there is a need for a complete computerized system that is accessible within a specific network and easily remove the problems of a conventional manual system regarding the preparation of examination results. In this work, a simple web-based result processing system is developed which provides security and usability. Moreover, the developed client server system is composed of simple operations and it is highly reliable. In the developed countries IT has been the primary driving force for evaluation of education whereas the scenario has not been the same in developing nations.</h5>

    </div>

    <div class="w3-third w3-center">
      <i class="fa fa-anchor w3-padding-64 w3-text-red"></i>
    </div>
  </div>
</div>

<!-- Second Grid -->
<div class="w3-row-padding w3-light-grey w3-padding-64 w3-container">
  <div class="w3-content">
    <div class="w3-third w3-center">
      <i class="fa fa-coffee w3-padding-64 w3-text-red w3-margin-right"></i>
    </div>

    <div class="w3-twothird">
      <h1>Technology Used</h1>
      <h5 class="w3-padding-32">The result processing scheme is developed with the help of different tools such as PHP, MYSQL, HTML/CSS etc. The developed system has met the objectives of result processing of any exam with reliability. Moreover, this system is of high operational speed and it is user-friendly. In addition, it is a multi-user system and there is no limitation on the number of simultaneous users. The security of the system has been maintained and only the authorized users have access to the system. Therefore, this scheme is valuable and usable in the perspective of Our University’s result processing system.</h5>

      
    </div>
  </div>
</div>

<div class="w3-container w3-black w3-center w3-opacity w3-padding-64">
    <h1 class="w3-margin w3-xlarge">Contact With Us:
    <br>
    Email-result_processing_website_developer@gmail.com
    <br>
    Mobile-01xxxxxxxxxx
    </h1>
</div>

<!-- Footer -->
<footer class="w3-container w3-padding-64 w3-center w3-opacity">  
  <div class="w3-xlarge w3-padding-32">
   <a href="#" class="w3-hover-text-indigo"><i class="fa fa-facebook-official"></i></a>
   <a href="#" class="w3-hover-text-red"><i class="fa fa-pinterest-p"></i></a>
   <a href="#" class="w3-hover-text-light-blue"><i class="fa fa-twitter"></i></a>
   <a href="#" class="w3-hover-text-grey"><i class="fa fa-flickr"></i></a>
   <a href="#" class="w3-hover-text-indigo"><i class="fa fa-linkedin"></i></a>
 </div>
 
</footer>

<script>
// Used to toggle the menu on small screens when clicking on the menu button
function myFunction() {
    var x = document.getElementById("navDemo");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else { 
        x.className = x.className.replace(" w3-show", "");
    }
}
</script>

</body>
</html>
