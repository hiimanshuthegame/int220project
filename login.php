<!DOCTYPE html>
<html>
<head>
	<title>Login Page</title>
	<link rel="stylesheet" type="text/css" href="bootstrap-4.4.1/css/bootstrap.min.css">
  	<script type="text/javascript" src="bootstrap-4.4.1/js/juqery_latest.js"></script>
  	<script type="text/javascript" src="bootstrap-4.4.1/js/bootstrap.min.js"></script>
</head>
<style >
	body{
			background-image: url("https://img.freepik.com/free-vector/banner-with-boy-girl_1308-32521.jpg?w=1060&t=st=1649604635~exp=1649605235~hmac=2a09f5025554cf60c1655b74d9a515fa8512f299654301ce16230069c088603c");
		}
		
</style>
<body >

	<center id="whole" ><br><br>
	<h3>Student Management System</h3><br>
	<form action="" method="POST">
		<input type="submit" name="admin_login" value="Admin Login" required>
		<input type="submit" name="student_login" value="Student Login" required>
	</form>
	<?php
		if(isset($_POST['admin_login'])){
			header("Location: admin_login.php");
		}
		if(isset($_POST['student_login'])){
			header("Location: student_login.php");
		}
	?>
	</center>
</body>
</html>