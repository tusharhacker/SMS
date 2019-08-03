<?php
include('header.php');
include('../dbconnect.php');

$sid = $_GET['sid'];
			
$q = "select * from student where id='$sid'";
$run = mysqli_query($con,$q);

$data = mysqli_fetch_assoc($run);
//print_r($data);

?>

<html>
<body>
<br/><br/><br/><br/><br/><br/><br/><br/><br/>
<center>
<form method="post" action="updatedata.php" enctype="multipart/form-data">

<table width="450" height="350" border="1">
<tr>
<td> ROLL NUMBER</td>
<td> <input type="text" name="roll" value="<?php echo $data['rollNo']; ?>" > </td>
</tr>

<tr>
<td> NAME</td>
<td> <input type="text" name="name" value="<?php echo $data['name']; ?>" > </td>
</tr>

<tr>
<td> CITY</td>
<td> <input type="text" name="city" value="<?php echo $data['city']; ?>" ></td>
</tr>

<tr>
<td> CONTACT NUMBER</td>
<td> <input type="text" name="contact" value="<?php echo $data['contact']; ?>" ></td>
</tr>

<tr>
<td> STANDARD</td>
<td> <input type="number" name="std" value="<?php echo $data['standard']; ?>">
</td>
</tr>

<tr>
<td> IMAGE</td>
<td> <input type="file" name="img"></td>
</tr>

<tr>

<td colspan="2">
 <center>
 <input type="hidden" name="id" value="<?php echo $data['id']; ?>">
 <input type="submit" name="edit" value="Update"> 
 </center></td>
</tr>


</form>
</center>
</body>
</html>
