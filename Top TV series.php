<head>
 <style>
 body {background-color:#ffcc66;}
		Welcome <?php echo $_COOKIE['loggedinuser'];?>
 </style>
 <link rel="stylesheet" type="text/css" href="tabledesign.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<html>
	 <body style align="center" >
	 		 <img src="popcorn.png" alt="HTML5 Icon" width="400" height="400">
			 
			 <h1>Top TV series</h1>
			 <div class="topnav">
              <button class="button">Add</button>
              <button class="button">Remove</button>
              <input type="text" placeholder="Search..">
			  <h1></h1>
             </div>
	    <form>
		 <table align="center">
		  <tr>
		  <th>Serial  </th>
		  <th>Series Name  </th>
		  <th>Releasing Year  </th>
		  <th> Rating </th>
		  </tr>
		  
		  <tr>
		  <td>1  </td>
		  <td><a href="">Planet Earth 2</a></td>
		  <td>2016 </td>
		  <td>9.5 </td>
		  </tr>
		  
		  <tr>
		  <td>2  </td>
		  <td><a href="">Planet Earth </a></td>
		  <td> 2006 </td>
		  <td>9.4</td>
		  </tr>
		  
		  <tr>
		  <td>3 </td>
		  <td><a href="">Band of Brothers</a></td>
		  <td>2001 </td>
		  <td>9.4 </td>
		  </tr>
		  
		  <tr>
		  <td>4  </td>
		  <td><a href="">Breaking Bad</a></td>
		  <td>2008 </td>
		  <td>9.4 </td>
		  </tr>
		  
		  <tr>
		  <td>5 </td>
		  <td><a href="">Chernobyl</a></td>
		  <td> 2019</td>
		  <td>9.4</td>
		  </tr>
		  
		  <tr>
		  <td>6 </td>
		  <td><a href="">Blus Planet 2</a></td>
		  <td>2017</td>
		  <td> 9.3</td>
		  </tr>
		  
		  <tr>
		  <td>7  </td>
		  <td><a href="">The Wire</a></td>
		  <td>2002 </td>
		  <td>9.3 </td>
		  </tr>
		  
		  <tr>
		  <td>8  </td>
		  <td><a href="">Game of Thrones</td>
		  <td> 2011</td>
		  <td>9.3 </td>
		  </tr>
		 </table>
		</form>
	 </body>
</html>