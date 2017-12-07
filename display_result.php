<?php session_start(); ?>
<?php
	$link = new mysqli("localhost","root","","result processing website");
	$id=$_SESSION['Id'];
	$c1=$_SESSION['Course1'];
	$c2=$_SESSION['Course2'];
	$c3=$_SESSION['Course3'];
	$c4=$_SESSION['Course4'];
	$c5=$_SESSION['Course5'];
	$c6=$_SESSION['Course6'];
	$c7=$_SESSION['Course7'];
	$c8=$_SESSION['Course8'];
	$c9=$_SESSION['Course9'];
	$c10=$_SESSION['Course10'];
	$c11=$_SESSION['Course11'];
	$c12=$_SESSION['Course12'];
	$not_f="Result Not Found";
	
	$total=0;
	$sum=0;
?>
	


<!DOCTYPE>
<?php 
	
	include("functions/funtion.php");
	
?>



<html>

	<head>
		<title>My Result Processing Website</title>
	 
	<link rel="stylesheet" href="styles/style_display.css" media="all" />
	
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
			
				
				<div id="sidebar_title">Go Back</div>
				
				<ul id="cats">
				
					<li><a href="get_result.php">Click Here</a></li>
				
				</ul>
				
				
				
			</div>
		
			<div  id="content_area" style="height:800px" >
			
			
<h1 align="center"><b>Your Gradesheet</b></h1><br>
		
<table align="center" height="" width="100%" border="2" bgcolor="white">
<!--1st row starts-->
		
		<tr>
		
		
		<th>Courses</th>
		<th>Obtained CGPA</th>
		</tr>
		
		<tr align="center"> <td>
			<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c1'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		
			 
			  echo "  ".$arr['course_name']." ";
		
		
	}
	
?></td>
<td> 
<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c1'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		 if($arr['grade']){
			 global $total,$sum;
			 $sum+=$arr['credit'];
			 $total+=$arr['grade']*$arr['credit'];
			  echo "  ".$arr['grade']." ";
			
		 }
		
			
		
		
	}
	
?>

</td>
			</tr>
			<!--1st row ends-->
				
				<!--2nd row starts-->
			
		
		
		<tr align="center"> <td>
			<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c2'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		
			 
			  echo "  ".$arr['course_name']." ";
		
		
	}
	
?></td>
<td> 
<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c2'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		 if($arr['grade']){
			 global $total,$sum;
			 $sum+=$arr['credit'];
			 $total+=$arr['grade']*$arr['credit'];
			  echo "  ".$arr['grade']." ";
			
		 }
		
			
		
		
	}
	
?>

</td>
			</tr>
				
				<!--2nd row ends-->
				
								<!--3rd row starts-->
			
			
		
		<tr align="center"> <td>
			<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c3'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		
			 
			  echo "  ".$arr['course_name']." ";
		
		
	}
	
?></td>
<td> 
<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c3'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		 if($arr['grade']){
			 global $total,$sum;
			 $sum+=$arr['credit'];
			 $total+=$arr['grade']*$arr['credit'];
			  echo "  ".$arr['grade']." ";
			
		 }
		
			
		
		
	}
	
?>

</td>
			</tr>
				
			
			
		           <!--3rd row ends-->
				   
				   							<!--4th row starts-->
			
		
		<tr align="center"> <td>
			<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c4'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		
			 
			  echo "  ".$arr['course_name']." ";
		
		
	}
	
?></td>
<td> 
<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c4'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		 if($arr['grade']){
			 global $total,$sum;
			 $sum+=$arr['credit'];
			 $total+=$arr['grade']*$arr['credit'];
			  echo "  ".$arr['grade']." ";
			
		 }
		
			
		
		
	}
	
?>

</td>
			</tr>
				
			
			
		           <!--4th row ends-->
				   
				   
				   							<!--5th row starts-->
			
			
		
		<tr align="center"> <td>
			<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c5'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		
			 
			  echo "  ".$arr['course_name']." ";
		
		
	}
	
?></td>
<td> 
<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c5'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		 if($arr['grade']){
			 global $total,$sum;
			 $sum+=$arr['credit'];
			 $total+=$arr['grade']*$arr['credit'];
			  echo "  ".$arr['grade']." ";
			
		 }
		
			
		
		
	}
	
?>

</td>
			</tr>
				
			
			
		           <!--5th row ends-->
				   
				   
				   
				   
				   							<!--6th row starts-->
			
			
		
		<tr align="center"> <td>
			<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c6'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		
			 
			  echo "  ".$arr['course_name']." ";
		
		
	}
	
?></td>
<td> 
<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c6'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		 if($arr['grade']){
			 global $total,$sum;
			 $sum+=$arr['credit'];
			 $total+=$arr['grade']*$arr['credit'];
			  echo "  ".$arr['grade']." ";
			
		 }
		
			
		
		
	}
	
?>

</td>
			</tr>
				
			
			
		           <!--6th row ends-->
				   
				   
				   
				   
				   
				   
				   							<!--7th row starts-->
			
		
		<tr align="center"> <td>
			<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c7'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		
			 
			  echo "  ".$arr['course_name']." ";
		
		
	}
	
?></td>
<td> 
<?php

	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c7'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		 if($arr['grade']){
			 global $total,$sum;
			 $sum+=$arr['credit'];
			 $total+=$arr['grade']*$arr['credit'];
			  echo "  ".$arr['grade']." ";
			
		 }
		
			
		
	}
	
?>

</td>
			</tr>
				
			
			
		           <!--7th row ends-->
				   
				   
				   
				   
				   
				   
				   
				   							<!--8th row starts-->
			
			
		
		<tr align="center"> <td>
			<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c8'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		
			 
			  echo "  ".$arr['course_name']." ";
		
		
	}
	
?></td>
<td> 
<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c8'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		 if($arr['grade']){
			 global $total,$sum;
			 $sum+=$arr['credit'];
			 $total+=$arr['grade']*$arr['credit'];
			  echo "  ".$arr['grade']." ";
			
		 }
		
		
		
		
	}
	
?>

</td>
			</tr>
				
			
			
		           <!--8th row ends-->
				   
				   
				   
				   
				   
				   
				   
				   
				   							<!--9th row starts-->
			
			
		
		<tr align="center"> <td>
			<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c9'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		
			 
			  echo "  ".$arr['course_name']." ";
		
		
	}
	
?></td>
<td> 
<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c9'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		 if($arr['grade']){
			 global $total,$sum;
			 $sum+=$arr['credit'];
			 $total+=$arr['grade']*$arr['credit'];
			  echo "  ".$arr['grade']." ";
			
		 }
		
			
		
		
	}
	
?>

</td>
			</tr>
				
			
			
		           <!--9th row ends-->
				   
				   
				   
				   
				   
				   
				   
				   
				   							<!--10th row starts-->
			
			
		
		<tr align="center"> <td>
			<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c10'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		
			 
			  echo "  ".$arr['course_name']." ";
		
		
	}
	
?></td>
<td> 
<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c10'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		 if($arr['grade']){
			 global $total,$sum;
			 $sum+=$arr['credit'];
			 $total+=$arr['grade']*$arr['credit'];
			  echo "  ".$arr['grade']." ";
			
		 }
		
			
		
		
	}
	
?>

</td>
			</tr>
				
			
			
		           <!--10th row ends-->
				   
				   
				   	<!--11th row starts-->
			
			
		
		<tr align="center"> <td>
			<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c11'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		
			 
			  echo "  ".$arr['course_name']." ";
		
		
	}
	
?></td>
<td> 
<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c11'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		 if($arr['grade']){
			 global $total,$sum;
			 $sum+=$arr['credit'];
			 $total+=$arr['grade']*$arr['credit'];
			  echo "  ".$arr['grade']." ";
			
		 }
		
			
		
		
	}
	
?>

</td>
			</tr>
				
			
			
		           <!--11th row ends-->
				   
				   
				   	<!--12th row starts-->
			
			
		
		<tr align="center"> <td>
			<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c12'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		
			 
			  echo "  ".$arr['course_name']." ";
		
		
	}
	
?></td>
<td> 
<?php
	$sql="SELECT * FROM result_card WHERE std_id=$id AND course_name='$c12'   ";
	$result = $link->query($sql);
	if ($result) {
		 $arr = mysqli_fetch_array($result);
		 if($arr['grade']){
			 global $total,$sum;
			 $sum+=$arr['credit'];
			 $total+=$arr['grade']*$arr['credit'];
			  echo "  ".$arr['grade']." ";
			
		 }
		
			
		
		
	}
	
?>

</td>
			</tr>
				
			
			
		           <!--12th row ends-->
				   
				 <!--13th row starts-->
				 
				 
				 
				  <!--13th row ends-->
				   
				   
		</table>
             <h1 align="center"> 
			<?php
				 global $total,$sum;
				 $res=$total/$sum;
				 
				 echo" Total CGPA=" .$res."";
				 
				 
				 
				 
				 ?>	
</h1>				 
                
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