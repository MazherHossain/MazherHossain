<?php  
	if(isset($_POST['submit'])){

		$image = basename($_FILES["fileToUpload"]["name"]);
		echo $image."<br>";
		$title = trim($_POST['title']);
		echo $title."<br>";
		$description = trim($_POST['description']);
		echo $description."<br>";
		$five_star = trim($_POST['five_star']);
		echo $five_star."<br>";
		$four_star = trim($_POST['four_star']);
		echo $four_star."<br>";
		$three_star = trim($_POST['three_star']);
		echo $three_star."<br>";
		$two_star = trim($_POST['two_star']);
		echo $two_star."<br>";
		$one_star = trim($_POST['one_star']);
		echo $one_star."<br>";

		if(empty($image)){
			echo "Image can not be empty.<br>";
			//header("Location:Movies Opening This Week.php");
		}else if(empty($title)){
			echo "Title can not be empty.<br>";
			//header("Location:Movies Opening This Week.php");
		}else if(empty($description)){
			echo "Description can not be empty.<br>";
			//header("Location:Movies Opening This Week.php");
		}else if(empty($five_star)){
			echo "Five star can not be empty.<br>";
			//header("Location:Movies Opening This Week.php");
		}else if(empty($four_star)){
			echo "Four star can not be empty.<br>";
			//header("Location:Movies Opening This Week.php");
		}else if(empty($three_star)){
			echo "Three star can not be empty.<br>";
			//header("Location:Movies Opening This Week.php");
		}else if(empty($two_star)){
			echo "Two star can not be empty.<br>";
			//header("Location:Movies Opening This Week.php");
		}elseif (empty($one_star)) {
			echo "One star can not be empty.<br>";
			//header("Location:Movies Opening This Week.php");
		}else{
			$target_path = "images/";  
			$target_path = $target_path.basename( $_FILES['fileToUpload']['name']);   
  
			if(move_uploaded_file($_FILES['fileToUpload']['tmp_name'], $target_path)) {  
				$con=mysqli_connect("localhost","root","","hot_pop_corn");
				$sql = "INSERT INTO `movies_opening`(`image`, `title`, `description`, `five_star`, `four_star`, `three_star`, `two_star`, `one_star`) VALUES ('".basename($_FILES["fileToUpload"]["name"])."','".$title."','".$description."',".$five_star.",".$four_star.",".$three_star.",".$two_star.",".$one_star.")";
				echo($sql);	
				if(mysqli_query($con,$sql))
				{
					echo "Data Inserted.<br/>";
					header("Location:Movies Opening This Week.php");
				}
				else
				{
					echo "Insert Error.<br/>";
					//header("Location:Movies Opening This Week.php");
				}
		}else{
			echo "Problem to move image to destination folder.";
			//header("Location:Movies Opening This Week.php");
		}
	}
}
?>