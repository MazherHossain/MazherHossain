<?php  


	$con=mysqli_connect("localhost","root","","hot_pop_corn");
	$sql = "DELETE FROM `movies_opening` WHERE id=".$_GET['id'];
	echo($sql);	
	if(mysqli_query($con,$sql))
	{
		echo "Row Deleted.<br/>";
		header("Location:Movies Opening This Week.php");
	}
	else
	{
		echo "Delete Error.<br/>";
	}



?>