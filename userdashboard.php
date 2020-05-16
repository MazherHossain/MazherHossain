<head>
 <style>
 body {background-color:#ffcc66;}
		Welcome <?php echo $_COOKIE['loggedinuser'];?>
 </style>
 <link rel="stylesheet" type="text/css" href="mystyle.css">
</head>
<?php
	//session_start();
	if(!isset($_COOKIE['loggedinuser']))
	{
		header("Location:reg.php");
	}
?>
	
<html>
	 <body style align="center" >
	 	<table align="center" width="100%">
	 		<tr>
	 			<td align="center">
	 				<img src="popcorn.png" alt="HTML5 Icon" width="400" height="400">
	 			</td>
	 		</tr>
	 	</table>
	    <form>
		 <table align="center">
		  <tr>
		   <td><button type='submit'class="button button1" ><a href="Movies Opening This Week.php" target="_blank">Movies Opening This Week</a></button><br></td>
           <td><button class="button button2"><a href="Top Box Office.php" target="_blank">Top Box Office</a></button><br></td>
           <td><button class="button button3"><a href="Coming Soon in theater.php" target="_blank">Coming Soon in Theaters</a></button></td>
		   <td><button class="button button4"><a href="Top TV series.php" target="_blank">Top DVD Series and Movies</a></button></td>
	 	  </tr>
		 </table>
		</form>
	 </body>
</html>