<?php session_start(); ?>
<!DOCTYPE>
<?php 
	
	include("functions/funtion.php");
	
?>
<?php 
      $link = new mysqli("localhost","root","","result processing website");
 if(isset($_POST['submit'])){

  $_SESSION['Id']=$_POST['Id'];
	$_SESSION['Course1']=$_POST['Course1'];
   $_SESSION['Course2']=$_POST['Course2'];
   $_SESSION['Course3']=$_POST['Course3'];
   $_SESSION['Course4']=$_POST['Course4'];
   $_SESSION['Course5']=$_POST['Course5'];
   $_SESSION['Course6']=$_POST['Course6'];
   $_SESSION['Course7']=$_POST['Course7'];
   $_SESSION['Course8']=$_POST['Course8'];
   $_SESSION['Course9']=$_POST['Course9'];
   $_SESSION['Course10']=$_POST['Course10'];
   
      header("location:display_result.php");  
 }	  
?>

<html>
	<head>
		<title>My Result Processing Website</title>
	 
	<link rel="stylesheet" href="admin_styles/admin_style.css" media="all" />
	
	</head>
	
<body>

	<!--Main Container starts here-->
	<div class="main_wrapper">

	
		<!--Header starts here-->
		<div class="header_wrapper">
		
			
			<img id="banner" src="images/image.gif" />
		</div>
		<!--Header ends here-->
		
		<!--Navigation Bar starts-->
		<div class="menubar">
			
			<ul id="menu">
				<li><a href="index.php">Home </a></li>
				<li><a href="admin login.php">Admin's Section</a></li>
				<li><a href="teacher_index.php">Teacher's Section</a></li>
				<li><a href="student login.php">Student's Section</a></li>
				<li><a href="#">About</a></li>
			</ul>
			
			<div id="form">
				
				<form method="get" action="results.php" enctype="multipart/form-data"> 
					<input type="text" name="user_query" / >
					<input type="submit" name="search" value="Search" /> 
				</form>
			
			</div>
			
		</div>
		<!--Navigation Bar ends-->
		
		
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
				
				<div id="sidebar_title">Necessary Links</div>
				
				<ul id="cats">
				
					<li><a href="http://www.cuet.ac.bd">CUET</a></li>
					<li><a href="http://www.calculator.net/gpa-calculator.html">CGPA Calculator</a></li>
					<li><a href="https://www.khanacademy.org/">Khan Academy</a></li>
					<li><a href="https://www.researchgate.net/">Research Gate</a></li>
					<li><a href="https://www.coursera.org/">Coursera</a></li>
					<li><a href="http://10minuteschool.com/">10 Minutes School</a></li>
				
				</ul>
				
				
				
			</div>
		
			<div id="content_area" >
			
				
				
               <div class="container admin">
			   
				<form action="" method="post">
			<h1 >Result Query</h1>
			<br>
			 <div>
        <input type="text" placeholder="STUDENT ID" required="" name="Id"/>
      </div>
	 <br>
      <div>
        <input type="text" placeholder="ENTER NO OF COURSES" name="Course_no"/>
      </div>
	  <br>
	  
      <div>
        <input type="submit" name="submit" value="GET NOW" />
      </div>
		</form><!-- form -->
		<div class="button">
		</div>
			   
			   </div>
					  
             
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		<div id="footer">
		
		<h2 style="text-align:center; padding-top:13px;"><div style="color:white">&copy; 2016 By EMON & SUDIPTO</div></h2>
		
		</div>
	
	
	
	
	
	</div>
	
	
	
<!--Main Container ends here-->



</body>
</html>	