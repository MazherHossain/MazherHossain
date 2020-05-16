<?php  


	if(isset($_POST['submit'])){

		$name = trim($_POST['name']);
		$releasing_year = trim($_POST['releasing_year']);
		$rating = trim($_POST['rating']);

		if(empty($name)){
			
			header("Location:Top TV series.php");
		}else if(empty($releasing_year)){
			
			header("Location:Top TV series.php");
		}else if(empty($rating)){
			
			header("Location:Top TV series.php");
		}else{
			$con=mysqli_connect("localhost","root","","hot_pop_corn");
			$sql = "INSERT INTO `series`(`name`, `releasing_year`, `rating`) VALUES ('".$name."', ".$releasing_year.", ".$rating.")";
			echo($sql);	
			if(mysqli_query($con,$sql))
			{
				echo "Data Inserted.<br/>";
				header("Location:Top TV series.php");
			}
			else
			{
				echo "Insert Error.<br/>";
				//header("Location:Top TV series.php");
			}

		}

	}
	


?>