<?php

include('../dbconnect.php');

$id = $_REQUEST['sid'];
	
	$q = "delete from student where id = '$id'";
	$run = mysqli_query($con,$q);
	
	if($run)
	{
		?>
		<script>
		alert('Data deleted succesfully');
		window.open('delete.php','_self');
		</script>
		<?php
	}


?>