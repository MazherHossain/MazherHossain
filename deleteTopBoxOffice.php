<?php  


	$con=mysqli_connect("localhost","root","","hot_pop_corn");
	$sql = "DELETE FROM `top_box_office` WHERE id=".$_GET['id'];
	echo($sql);	
	if(mysqli_query($con,$sql))
	{
		echo "Row Deleted.<br/>";
		header("Location:Top Box Office.php");
	}
	else
	{
		echo "Delete Error.<br/>";
	}



?>