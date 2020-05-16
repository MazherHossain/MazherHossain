<html>
<?php
		
		session_start();
		$err_uname="";
		$uname="";
		$err_email="";
		$email="";
		$err_pass="";
		$pass="";
		$err_invalid="";
		$has_error=false;
		
		if(isset($_POST['submit']))
		{
			
			if (empty($_POST['uname']))
			{
				$err_uname="*User Name Required";
				$has_error = true;
			}
			else
			{
				$uname=$_POST['uname'];
				
			}
			if (empty($_POST['email']))
			{
				$err_email="*User Email Required";
				$has_error = true;
			}
			else
			{
				$email=$_POST['email'];
			}
			if (empty($_POST['pass']))
			{
				$err_pass="*Password Required";
				$has_error = true;
			}
			else
			{
				$pass=$_POST['pass'];
			}
		
		
		$xml=simplexml_load_file("data.xml");
		
		if(!$has_error)
		{
			if($uname == $xml->users->usertype[2]->id && $email == $xml->users->usertype[2]->email && $pass== $xml->users->usertype[2]->password )
			{
				setcookie("loggedinuser",$uname,time()+6000);
				$_SESSION["loggedinauser"]=$uname;
				header("Location:admindashboard.php");
			}
			
			else if($uname == $xml->users->usertype[1]->id && $email == $xml->users->usertype[1]->email && $pass== $xml->users->usertype[1]->password )
			{
				
				setcookie("loggedinuser",$uname,time()+6000);
				$_SESSION["loggedinuser"]=$uname;
				header("Location:userdashboard.php");
			}
			else if($uname == $xml->users->usertype[0]->id && $email == $xml->users->usertype[0]->email && $pass== $xml->users->usertype[0]->password )
			{
				
				setcookie("loggedinuser",$uname,time()+6000);
				$_SESSION["loggedinuser"]=$uname;
				header("Location:userdashboard.php");
			}
			else
			{
				$err_invalid="Invalid UserID Password";
				echo $err_invalid;
			}
		}
		}
		
	?>
<head>
<style>
body {background-color:#ffcc66;}
</style>

</head>
<body  style align="center" >
 <table align="center" width="100%">
 	<tr>
 		<td align="center">
 			<img src="popcorn.png" alt="HTML5 Icon" width="400" height="400">
 		</td>
 	</tr>
 </table>
 <form action = "" method = "post">
			<table align="center">
				<tr>
					<td style="font-family:Cooper Black">
						First Name
					</td>
					<td>
						<input type="text" value="<?php echo $uname;?>" name="uname">
						<br>
						<span><?php echo $err_uname;?></span>
					</td>
					
				</tr>
				<tr>
					<td style="font-family:Cooper Black">
						Email
					</td>
					<td>
						<input type="text" value="<?php echo $email;?>" name="email">
						<br>
						<span><?php echo $err_email;?></span>
					</td>
					
				</tr>
				<tr>
					<td style="font-family:Cooper Black">
						Password
					</td>
					<td>
						<input type="password" value="<?php echo $pass;?>" name="pass">
					    <br>
					    <span><?php echo $err_pass;?></span>
					</td>
					
				</tr>
				<tr>
					
					<td colspan="2" align="center">
						<input type = "submit" name = "submit" value = "login">
					</td>
					
				</tr>
			</table>
</form>
</body>
</html>