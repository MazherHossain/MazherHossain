<?php  

	//getting data from databse
	$con=mysqli_connect("localhost","root","","hot_pop_corn");
	$sql = "";
	if(empty($_GET['name'])){
		$sql="SELECT * FROM series";
	}else{
		$sql="SELECT * FROM series WHERE UPPER(name) LIKE UPPER('%".$_GET['name']."%')";
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