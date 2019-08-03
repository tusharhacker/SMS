<!DOCTYPE HTML>
<html>
<head>
<title> STUDENT MANAGEMENT SYSTEM </title>
<style>
	 body{
	 	margin: 0;
	 	padding: 0;
	 	font-family: sans-serif;
	 	background-image:url(images/back.jpg);
	 	background-size: cover;
	 }
	 h3{
		 text-decoration : none;
		 text-align : right;
		 margin-right : 20px;
	   } 
	   a
	   {
		   text-decoration : none;
	   }
		input[type="submit"]
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
	
		<h3> <a href="login.php"> ADMIN LOGIN </a> </h3>
		
		<center> <h1>	<b> STUDENT MANAGEMENT SYSTEM </b> </h1> </center>
		<hr/>
		
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<br/>
		<center>
		<form method="post">
		 <table width="500" height="300" border="1"> 
		<th colspan="2"> <center> STUDENT INFORMATION </center> </th>
			 <tr>	
				<td> <center>  Standard  </center> </td>
			 <td>	
			 <center>
				 <select name="std">
				 <option> 1 </option>
					 <option> 2 </option>
					 <option> 3 </option>
					 <option> 4 </option>
					 <option> 5 </option>
					 <option> 6 </option>
					 <option> 7 </option>
					 <option> 8 </option>
					 <option> 9 </option>
					 <option> 10 </option>
					 <option> 11 </option>
					 <option> 12 </option>
				 </select>
				 </center>
				 </td>
			 </tr>
			 <tr>
			 <td><center>Roll Number</center></td>
				 <td> <center><input type="text" name="roll"></center> </td>
			 </tr>
			 <tr>
				 
				 <td colspan="2"><center>
			 <input type="submit" value="SHOW INFORMATION" name="submit">
					</center> </td>
					 
			 </tr>
			 
		</table>
		</form>
		</center>
	</body>
</html>



<?php

if(isset($_POST['submit']))
{
	$std = $_POST['std'];
	$roll = $_POST['roll'];
	
	include('dbconnect.php');
	include('functions.php');
	showdata($std,$roll);
}

?>