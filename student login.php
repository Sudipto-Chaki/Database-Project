<!DOCTYPE>
<?php 
	
	include("functions/funtion.php");
	
?>
<?php 
      $link = new mysqli("localhost","root","","result processing website") or die("Server connection failed : ".mysqli_error());
 if(isset($_POST['submit']))
{
  $Id=$_POST['Id'];
   $password=$_POST['password'];

$sql="SELECT * FROM student_login WHERE sid=$Id AND spass='$password'   ";
$result = $link->query($sql);
if ($result) {
   $arr = mysqli_fetch_array($result);
    $row = mysqli_num_rows($result);
    
   
if($row  == 1 ){
   if(isset($_REQUEST["remember"]) && $_REQUEST["remember"]==1)
		setcookie("login","1",time()+365*24*60*60);
   else
		setcookie("login","1");
   $_SESSION['sid'] = $arr['sid'];
   header("location:student_content.php");
}
else{
  
  echo '<script type="text/javascript">alert("Your Login Name or Password is invalid.");</script>'; 
}

    
   

}
}
            
?>

<html>
	<head>
		<title>My Result Processing Website</title>
	 
	<link rel="stylesheet" href="student_styles/student_style.css" media="all" />
	
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
			<h1 >Student Login</h1>
			<br>
			 <div>
        <input type="text" placeholder="ID" required="" name="Id"/>
      </div>
	 <br>
      <div>
        <input type="password" placeholder="PASSWORD" required="" name="password"/>
      </div>
	  <br>
	  <tr>
			<td colspan="2"><input type="checkbox" value="1" name="remember"/> Keep Me Login</td>
	  </tr>
	  <br>
	  <br>
      <div>
        <input type="submit" name="submit" value="LOG IN" />
		&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
		<input type="reset" value="CLEAR" />
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