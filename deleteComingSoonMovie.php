<?php  


	$con=mysqli_connect("localhost","root","","hot_pop_corn");
	$sql = "DELETE FROM `comming_soon` WHERE id=".$_GET['id'];
	echo($sql);	
	if(mysqli_query($con,$sql))
	{
		echo "Row Deleted.<br/>";
		header("Location:Comming Soon in theater.php");
	}
	else
	{
		echo "Delete Error.<br/>";
	}



?>