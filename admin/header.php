<?php

session_start();

if(isset($_SESSION['uid']))
{
	echo "";
}
else
{
	header('location: ../login.php');
}

?>

<html>
<head>
</head>
<body>
<div>
<a href="dashboard.php" style="float:left;"> Dashboard </a> </h3>
<a href="logout.php" style="float:right;"> Logout </a> 
</div>
</body>
</html>