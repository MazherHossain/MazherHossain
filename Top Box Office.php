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
	 	<form method="post" action="uploadMovies2.php">
	 		
	 	<table align="center" width="100%">
	 		<tr>
	 			<td align="center">
	 				<img src="popcorn.png" alt="HTML5 Icon" width="400" height="400">
	 			</td>
	 		</tr>
	 		<tr>
	 			<td align="center">
	 				<h1>TOP BOX OFFICE</h1>
	 			</td>
	 		</tr>
	 		<tr>
	 			<td align="center">
	 				<div class="topnav">
			 <?php if($_COOKIE['loggedinuser']=='Mazher'){ ?>
              <input type="button" name="add" value="Add Series" onclick="addSeriesBox()">
             <?php } ?>
              <input type="text" placeholder="Search.." id="searchText">
              <input type="button" name="search" value="Search" onclick="searchSeries()">
             </div>
	 			</td>
	 		</tr>
	 	</table>
	 		
             <br><br><br>
	    
	    <div id="addSeriesBox"></div>
	    <br><br><br>
	    <table align="center" border="1" width="90%">
	    	<tr style="background: yellow">
		  	<th align="center" width="10%">SERIAL</th>
		  	<th align="center" width="20%">MOVIE NAME</th>
		  	<th align="center" width="25%">EARNINGS</th>
		  	<th align="center" width="10%">RELEASING YEAR</th>
		  	<th align="center" width="20%">STAR CAST</th>
		  <?php if($_COOKIE['loggedinuser']=='Mazher'){ ?>
		  	<th align="center" width="15%">DELETE</th>
		  <?php } ?>
		  </tr>
	    </table>
		<div class="showAll">
			<?php 
				error_reporting(0);
				$movieName = $_GET['name'];
				require_once("showAllTopBoxOffice.php");	
			?>
		</div>
		 </form>
		 <script type="text/javascript">
			function searchSeries(){
				console.log("Working...");
				var searchText = document.getElementById('searchText').value;
				window.location.href = "Top Box Office.php?name="+searchText;
			}
			var countVar = 0;
			function addSeriesBox(){
				if(countVar===0){
				var val3 = document.createElement("table");
				val3.border = "1";
				val3.cellspaceing = "0";
				val3.width = "90%";
				val3.align = "center";
				val3.style = "background:yellow";
				val3.innerHTML = "<table align="+"'center'"+">"+
	    						 "<tr>"+
		  						 "<th align="+"'center'"+" width="+"25%"+">MOVIE NAME</th>"+
		  						 "<th align="+"'center'"+" width="+"25%"+">EARNINGS</th>"+
		  						 "<th align="+"'center'"+" width="+"10%"+">RELEASING YEAR</th>"+
		  						 "<th align="+"'center'"+" width="+"25%"+">STAR CAST</th>"+
		  						 "<th align="+"'center'"+" width="+"15%"+">ADD</th>"+
		  						 "</tr>"+
		  															
		  						 "<tr>"+
								 "<td align="+"'center'"+" width="+"25%"+">"+		 								
	    						 	"<input placeholder="+"Type_here_(String)"+" type="+"'text'"+" name="+"'movie_name'"+" size="+"40%"+">"+
								 "</td>"+
								 "<td align="+"'center'"+" width="+"25%"+">"+		 								
	    						 	"<input placeholder="+"Type_here_(String)"+" type="+"'text'"+" name="+"'earnings'"+" size="+"40%"+">"+
								 "</td>"+
								 "<td align="+"'center'"+" width="+"10%"+">"+		 								
	    						 	"<input placeholder="+"Type_here_(Integer)"+" type="+"'text'"+" name="+"'releasing_year'"+" size="+"10%"+">"+
								 "</td>"+
								 "<td align="+"'center'"+"  width="+"25%"+">"+
	    						 	"<input placeholder="+"Type_here_(String)"+" type="+"'text'"+" name="+"'star_cast'"+" size="+"40%"+">"+
								 "</td>"+
								 "<td style="+"background:#9FFF33; align="+"'center'"+" width="+"15%"+">"+
									"<input type="+"'submit'"+" name="+"'submit'"+" value="+"'Upload Movie'"+">"+
								 "</td>"+
								 "</tr>"+									 							
							     "</table>";
	    		document.getElementById('addSeriesBox').appendChild(val3);
				}else{
					alert("One Movie Add at a time!");
				}
				countVar++;
				
			}
			
		</script>
	
	 </body>
</html>