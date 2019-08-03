<?php
include('header.php');
?>

<html>
<body>
<br/><br/><br/><br/><br/>
<center>
<form method="post" action="delete.php" enctype="multipart/form-data">

<table width="400" height="220" border="1">
<tr>
<td> Enter Name</td>
<td> <input type="text" name="name1" placeholder="Enter Name"> </td>
</tr>

<tr>
<td> Enter Standard</td>
<td> <input type="number" name="std">
</td>
</tr>

<tr>
<td colspan="2"> <center> <input type="submit" name="search" value="Search"> </center></td>
</tr>
</table>

</form>
</center>
</body>
</html>

<?php

if(isset($_POST['search']))
{
	include('../dbconnect.php');
	
	$name = $_POST['name1'];
	$std = $_POST['std'];
	
	$q = "select *from student where standard = '$std' AND name LIKE '%$name%'";
	$run = mysqli_query($con,$q);
	
	$row = mysqli_num_rows($run);
	
	if($row < 1)
	{
		?>
		<script>
		alert('Data not found');
		</script>
		<?php
	}
	else
	{
		//echo "<pre>";
		$count = 0;
		while($data = mysqli_fetch_assoc($run))
		{
			//print_r($data);
			$count++;
			
			?>
			<center>
			<table width="1000" height="200" border="1">
			<tr>
			<th> SNo. </th>
			<th> Image </th>
			<th> Name </th>
			<th> Roll Number </th>
			<th> Standard </th>
			<th> City </th>
			<th> Contact </th>
			<th> Edit </th>
			</tr>
			
			<tr>
			<td> <?php echo $count ?> </td>
			<td> <img src="../dataimg/<?php echo $data['image']; ?>" style="max-width:100px;" /> </td> 
			<td> <?php echo $data['name'] ?> </td>
			<td> <?php echo $data['rollNo'] ?> </td>
			<td> <?php echo $data['standard'] ?> </td>
			<td> <?php echo $data['city'] ?> </td>
			<td> <?php echo $data['contact'] ?> </td>
			<td> <a href="deleteform.php?sid=<?php echo $data['id']; ?>"> Delete </a> </td>
			</tr>
			</table>
			</center>
			<?php
			
		}
	}
}






?>