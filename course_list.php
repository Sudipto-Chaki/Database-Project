<?php
	$link = new mysqli("localhost","root","","result processing website");
	$con = mysqli_connect("localhost","root","","result processing website");
	
?>

<!DOCTYPE>
<?php 
	
	include("functions/funtion.php");
	
?>
<html>
	<head>
		<title>My Result Processing Website</title>
	 
	<link rel="stylesheet" href="styles/style.css" media="all" />
	<style>
	div ul{
	
padding-left:20px;	
	
}
	
	</style>
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
				<li><a href="about.php">About</a></li>
				
			</ul>
			
			<div id="form">
				
				<form method="get" action="results.php" enctype="multipart/form-data"> 
					<input type="text" name="user_query" placeholder="Search a Notice" / >
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
					
				
				</ul>
				
				<div id="sidebar_title">Notice Board</div>
				<ul id="cats">
				
					<li><a href="all_notice.php">See All</a></li>
				
				</ul>
				
				<div id="sidebar_title">Time & Date</div>
				<ul id="cats">
				
					<li><a href="date_time.php">Click Here</a></li>
				
				</ul>
				
				
			</div>
		
			<div id="content_area" style="height:800px">
			
				<h1 align="center" style="padding-top:5px"><b>Course List<hr></b></h1><br>
				<!--1st row starts-->
		
		
		
	<?php	
	global $con;
	$get_not = "select * from course";
	$run_not = mysqli_query($con, $get_not);
	while($row_not=mysqli_fetch_array($run_not)){
		
		$not_id=$row_not['lt'];
		$not_title=$row_not['cno'];
		
		
		
		echo "
		<div>
		<ul>
		<li><b>Level-Term: </b>$not_id</li><br>
		<li><strong>Course No: </strong>$not_title</li><br>
		
		<hr>
		
		
		</ul>
		</div>
		
		
		
		";
		
	}
?>     
	 
				  
                
			</div>
		</div>
		<!--Content wrapper ends-->
		
		
		
		<div id="footer">
		
		<h2 style="text-align:center; padding-top:13px;"><div style="color:white">&copy; 2017 by Emon & Sudipto</div></h2>
		
		</div>
	
	
	
	
	
	</div>
	
	
	
<!--Main Container ends here-->



</body>
</html>	