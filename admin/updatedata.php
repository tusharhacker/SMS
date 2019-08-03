<?php

include('../dbconnect.php');
	
	$id = $_POST['id'];
	$roll = $_POST['roll'];
	$name = $_POST['name'];
	$city = $_POST['city'];
	$contact = $_POST['contact'];
	$standard = $_POST['std'];
	$imgname = $_FILES['img']['name'];
	$tmpname = $_FILES['img']['tmp_name'];
	
	move_uploaded_file($tmpname,"../dataimg/$imgname");
	
	$q = "update student set id = '$id' , rollNo = '$roll' , name = '$name' , city = '$city' , contact = '$contact' , standard = '$standard' , image = '$imgname' where id = '$id'";
	$run = mysqli_query($con,$q);
	
	if($run)
	{
		?>
		<script>
		alert('Data updated succesfully');
		window.open('updateform.php?sid=<?php echo $id; ?>','_self');
		</script>
		<?php
	}


?>