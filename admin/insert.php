<?php

include('header.php');

?>

<html>
<body>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center>
<form method="post" action="insert.php" enctype="multipart/form-data">

<table width="450" height="350" border="1">
<tr>
<td> ROLL NUMBER</td>
<td> <input type="text" name="roll" placeholder="Enter roll no."> </td>
</tr>

<tr>
<td> NAME</td>
<td> <input type="text" name="name" placeholder="Enter Full Name"> </td>
</tr>

<tr>
<td> CITY</td>
<td> <input type="text" name="city" placeholder="Enter city"></td>
</tr>

<tr>
<td> CONTACT NUMBER</td>
<td> <input type="text" name="contact" placeholder="Enter contact no."></td>
</tr>

<tr>
<td> STANDARD</td>
<td> <input type="number" name="std">
</td>
</tr>

<tr>
<td> IMAGE</td>
<td> <input type="file" name="img"></td>
</tr>

<tr>
<td colspan="2"> <center> <input type="submit" name="insert" value="Insert"> </center></td>
</tr>


</form>
</center>
</body>
</html>


<?php

if(isset($_POST['insert']))
{
	include('../dbconnect.php');
	
	$roll = $_POST['roll'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$contact = $_POST['contact'];
	$standard = $_POST['std'];
	$imgname = $_FILES['img']['name'];
	$tmpname = $_FILES['img']['tmp_name'];
	
	move_uploaded_file($tmpname,"../dataimg/$imgname");
	
	$q = "INSERT INTO student(rollNo,name,city,contact,standard,image) VALUES ('$roll','$name','$city','$contact','$standard','$imgname')";
	$run = mysqli_query($con,$q);
	
	if($run)
	{
		?>
		<script>
		alert('Data inserted succesfully');
		</script>
		<?php
	}
}







?>