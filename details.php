<!DOCTYPE>
<?php 
	
	include("functions/funtion.php");
	
?>
<html>
	<head>
		<title>My Result Processing Website</title>
	 
	<link rel="stylesheet" href="styles/style.css" media="all" />
	
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
					<input type="text" name="user_query" / >
					<input type="submit" name="search" value="Search" /> 
				</form>
			
			</div>
			
		</div>
		<!--Navigation Bar ends-->
		
		
		<!--Content wrapper starts-->
		<div class="content_wrapper">
		
			<div id="sidebar">
			
				<div id="sidebar_title">Notice Board</div>
				
				<ul id="cats">
				
					<?php getNotice(); ?>
				
				</ul>
				
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
			
				
               <div id="notice_box">
			<?php
				if(isset($_GET['not_id'])){
					
					$notice_id = $_GET['not_id'];
					
				$get_not = "select * from notice_board where notice_id='$notice_id'";
				$run_not = mysqli_query($con, $get_not);
				while($row_not=mysqli_fetch_array($run_not)){
		
				$not_id=$row_not['notice_id'];
				$not_title=$row_not['notice_title'];
				$not_image=$row_not['notice_image'];
				$not_des=$row_not['notice_description'];
				
			echo "
		
			<div id='single_notice'>
				<ul><li><b><i>$not_title</i></b></ul>
				<img src='admin_area/notice_images/$not_image' width='400 height='300' />
				<a href='index.php?not_id=$not_id'><button style='float:left'>Go Back</button></a>
				<div></div>
			</div>
			
		";
		
	}
	}	
?>		
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