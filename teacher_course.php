<!DOCTYPE>

<?php
$con = mysqli_connect("localhost","root","","result processing website");

?>
<html>
	<head>
		<title>Inserting Courses</title>
		
	</head>
	
<body bgcolor="skyblue">

	<form action="teacher_course.php" method="post" enctype="multipart/form-data">
	
		<table align="center" width="700" border="2" bgcolor="orange">

		<tr align="center">
			<td colspan="3"><h2>Insert Courses Here</h2></td>
		</tr>
		
		<tr>
			<td align="right"><b>Level Term</b></td>
			<td><input type="text" name="lt" required/></td>
		
		</tr>
		<tr>
			<td align="right"><b>Course No</b></td>
			<td><input type="text" name="cno" required/></td>
		
		</tr>
		
		
		
		
		<tr align="center">
			
			<td colspan="3"><input type="submit" name="insert_course" value="Insert Course Now" /></td>
		
		</tr>
		
		</table>
	
	</form>



</body>
</html>

<?php

	if(isset($_POST['insert_course'])){
		
		$type = $_POST['lt'];
		$details = $_POST['cno'];
		
		
		$insert_course = "insert into course(lt,cno) values('$type','$details')";
		
		$insert_cou = mysqli_query($con,$insert_course);
		 
		if($insert_cou){
			echo "<script>alert('Course Has Been Posted.')</script>";
			echo "<script>window.open('teacher_course.php','_self')</script>";
		}
	}





?>