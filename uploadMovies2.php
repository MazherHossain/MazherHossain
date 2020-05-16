<?php  


	if(isset($_POST['submit'])){

		$movie_name = trim($_POST['movie_name']);
		$earnings = trim($_POST['earnings']);
		$releasing_year = trim($_POST['releasing_year']);
		$star_cast = trim($_POST['star_cast']);

		if(empty($movie_name)){
			
			header("Location:Top Box Office.php");
		}else if(empty($earnings)){
			
			header("Location:Top Box Office.php");
		}
		else if(empty($releasing_year)){
			
			header("Location:Top Box Office.php");
		}else if(empty($star_cast)){
			
			header("Location:Top Box Office.php");
		}else{
			$con=mysqli_connect("localhost","root","","hot_pop_corn");
			$sql = "INSERT INTO `top_box_office`(`movie_name`, `earnings`, `releasing_year`, `star_cast`) VALUES ('".$movie_name."','".$earnings."',".$releasing_year.",'".$star_cast."')";
			echo($sql);	
			if(mysqli_query($con,$sql))
			{
				echo "Data Inserted.<br/>";
				header("Location:Top Box Office.php");
			}
			else
			{
				echo "Insert Error.<br/>";
				//header("Location:Top TV series.php");
			}

		}

	}
	


?>