<?php

	function showdata($std,$roll)
	{
		include('dbconnect.php');
		$q = "select * from student where rollNo = '$roll' AND standard = '$std'";
		$run = mysqli_query($con,$q);
		
		if(mysqli_num_rows($run)>0)
		{
			$data = mysqli_fetch_assoc($run);
			
			?>
			
			<br/><br/><br/><br/><br/><br/>
			<center>
			<table width="800" height="400" border="1">
			<tr>
			<th colspan="3"> STUDENT DETAILS </th>
			</tr>
			<tr>
			<td rowspan="5" align="center"> <img src="dataimg/<?php echo $data['image']; ?>" style="max-width:350px; max-height:350px;"> </td>
			<th> Name </th>
			<td align="center"> <?php echo $data['name']; ?> </td>
			</tr>
			<tr>
			<th> Standard </th>
			<td align="center"> <?php echo $data['standard']; ?> </td>
			</tr>
			<tr>
			<th> Roll Number </th>
			<td align="center"> <?php echo $data['rollNo']; ?> </td>
			</tr>
			<tr>
			<th> Contact </th>
			<td align="center"> <?php echo $data['contact']; ?> </td>
			</tr>
			<tr>
			<th> City </th>
			<td align="center"> <?php echo $data['city']; ?> </td>
			</tr>
			</table>
			</center>
			<br/><br/><br/><br/><br/><br/>
			<?php
		}
		else
		{
			?>
			<script>
			alert('No data for this student');
			</script>
			<?php
		}
	}

?>