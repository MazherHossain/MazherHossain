<?php  


	//getting data from databse
	$con=mysqli_connect("localhost","root","","hot_pop_corn");
	$sql = "";
	if(empty($_GET['name'])){
		$sql="SELECT * FROM top_box_office";
	}else{
		$sql="SELECT * FROM top_box_office WHERE UPPER(movie_name) LIKE UPPER('%".$_GET['name']."%')";
	}
	$result=mysqli_query($con,$sql);
	$searchData = array();
	while ($row=mysqli_fetch_array($result)) {
		# code...
		$searchData[] = $row;
	}
	//returning response in JSON format
	echo json_encode($searchData);


?>