<!DOCTYPE>

<?php
$con = mysqli_connect("localhost","root","","result processing website");

?>
<html>
	<head>
		<title>Inserting Publication</title>
		
	</head>
	
<body bgcolor="skyblue">

	<form action="teacher_publication.php" method="post" enctype="multipart/form-data">
	
		<table align="center" width="700" border="2" bgcolor="orange">

		<tr align="center">
			<td colspan="3"><h2>Insert Publication Here</h2></td>
		</tr>
		
		<tr>
			<td align="right"><b>Publication Type</b></td>
			<td><input type="text" name="type" required/></td>
		
		</tr>
		<tr>
			<td align="right"><b>Publication Details</b></td>
			<td><input type="text" name="details" required/></td>
		
		</tr>
		
		<tr>
			<td align="right"><b>Publication Year</b></td>
			<td><input type="text" name="year" required/></td>
		
		</tr>
		
		
		<tr align="center">
			
			<td colspan="3"><input type="submit" name="insert_publication" value="Insert Publication Now" /></td>
		
		</tr>
		
		</table>
	
	</form>



</body>
</html>

<?php

	if(isset($_POST['insert_publication'])){
		
		$type = $_POST['type'];
		$details = $_POST['details'];
		$year = $_POST['year'];
		
		$insert_publication = "insert into publication(type,details,year) values('$type','$details','$year')";
		
		$insert_pub = mysqli_query($con,$insert_publication);
		 
		if($insert_pub){
			echo "<script>alert('Publication Has Been Posted.')</script>";
			echo "<script>window.open('teacher_publication.php','_self')</script>";
		}
	}





?>