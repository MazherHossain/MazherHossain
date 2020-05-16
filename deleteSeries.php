<?php  


	$con=mysqli_connect("localhost","root","","hot_pop_corn");
	$sql = "DELETE FROM `series` WHERE id=".$_GET['id'];
	echo($sql);	
	if(mysqli_query($con,$sql))
	{
		echo "Row Deleted.<br/>";
		header("Location:Top TV series.php");
	}
	else
	{
		echo "Delete Error.<br/>";
	}



?>