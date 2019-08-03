<?php

session_start();

if(isset($_SESSION['uid']))
{
	header('location:admin/dashboard.php');	
}

?>

<!DOCTYPE HTML>
<html>
<head>
<title> ADMIN LOGIN </title>
	<style>
	 body{
	 	margin: 0;
	 	padding: 0;
	 	font-family: sans-serif;
	 	background-image:url(images/b1.jpg);
	 	background-size: cover;
	 }
	 .box
	 {position: absolute;
	 	top: 50%;
	 	left: 50%;
	 	transform: translate(-50%,-50%);
	 	width: 400px;
	 	padding: 40px;
	 	background:rgba(0,0,0,0.8);
	 	box-sizing: border-box;
	 	box-shadow: 0 15px 25px rgba(0,0,0,0.5);
	 	border-radius: 10px;}
	 	.box h2
	 	{margin: 0 0 30px;
	 		padding: 0;
	 		color: #fff;
	 		text-align:center;}
	 		.box .inputBox
	 		{position: relative;}
	 		.box .inputBox input
	 		{width: 100%; 
	 			padding: 10px 0;
	 			 font-size:16px;
	 			 letter-spacing: 1 px;
	 			 color:#fff; margin-bottom: 30px;border:none;
	 			 border-bottom: 1px solid #fff; outline:none;
	 			 background:transparent;}
	.box .inputBox label
	{
		position: absolute;
top: 0;
letter-spacing: 1 px;
left: 0;
padding: 10px 0;
font-size: 16px;
color: #fff;
pointer-events: none;
transition: 5s;	}

.box .inputBox input:focus~ label,
.box .inputBox input:valid~ label
{top: 18px;
left: 0;
color: #03a9f4;
font-size: 12px;}
.box input[type="submit"]
{
	background:transparent;
	border:none;
outline: none;
color: #fff;
background:#03a9f4;
padding: 10px 20px;
cursor: pointer;
border-radius: 5px;
}




</style>
</head>

	<body>
<div class="box">
	<h2>Admin Login</h2>
	<form action="login.php" method="POST">
		<div class="inputBox">
			<input type="text" name="uname" required="">
			<label>USERNAME</label></div>
			<div class="inputBox">
			<input type="password" name="pass" required="">
			<label>PASSWORD</label></div>
			<input type="submit" name="login" value="Login">
		</form>
	</div>
</body>
</html>
		
		<?php
		
		include('dbconnect.php');
		
		if(isset($_POST['login']))
		{
			$username = $_POST['uname'];
			$pass = $_POST['pass'];
			
			//$q = "select *from admin";
			$q = "select *from admin where username='$username' AND password='$pass'";
			$run = mysqli_query($con,$q);
			$row = mysqli_num_rows($run);
			
			if($row < 1)
			{
				?>
				<script>
				alert('Password not matched !');
				header('location:login.php');
				</script>
				<?php
			}
			else
			{
				$data = mysqli_fetch_assoc($run);
				/*
				while($data = mysqli_fetch_assoc($run))
				print_r($data);
				*/
				$id = $data['id'];
				
				//session_start();
				$_SESSION['uid'] = $id;
				
				header('location:admin/dashboard.php');
			}
		}
		
		?>