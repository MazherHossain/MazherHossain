<?php  


	if(isset($_POST['submit'])){

		$movie_name = trim($_POST['movie_name']);
		$star_cast = trim($_POST['star_cast']);

		if(empty($movie_name)){
			
			header("Location:Comming Soon in theater.php");
		}else if(empty($star_cast)){
			
			header("Location:Comming Soon in theater.php");
		}else{
			$con=mysqli_connect("localhost","root","","hot_pop_corn");
			$sql = "INSERT INTO `comming_soon`(`movie_name`, `star_cast`) VALUES ('".$movie_name."','".$star_cast."')";
			echo($sql);	
			if(mysqli_query($con,$sql))
			{
				echo "Data Inserted.<br/>";
				header("Location:Comming Soon in theater.php");
			}
			else
			{
				echo "Insert Error.<br/>";
				//header("Location:Top TV series.php");
			}

		}

	}
	


?>