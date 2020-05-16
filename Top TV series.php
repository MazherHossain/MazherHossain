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
	 <form method="post" action="uploadSeries.php">
	 	<table align="center" width="100%">
	 		<tr>
	 			<td align="center">
	 				<img src="popcorn.png" alt="HTML5 Icon" width="400" height="400">
	 			</td>
	 		</tr>
	 		<tr>
	 			<td align="center">
	 				<h1>Top TV series</h1>
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
	    <table align="center" border="1" width="80%">
	    	<tr style="background: yellow">
		  	<th align="center" width="15%">SERIAL</th>
		  	<th align="center" width="40%">SERIES NAME</th>
		  	<th align="center" width="15%">RELEASING YEAR</th>
		  	<th align="center" width="15%">RATING</th>
		  <?php if($_COOKIE['loggedinuser']=='Mazher'){ ?>
		  	<th align="center" width="15%">DELETE</th>
		  <?php } ?>
		  </tr>
	    </table>
		<div class="showAll">
			<?php 
				error_reporting(0);
				$seriesName = $_GET['name'];
				require_once("showAll.php");	

				
				
				
			?>
		</div>
		
		</form>
		<script type="text/javascript">
			function searchSeries(){
				console.log("Working...");
				var searchText = document.getElementById('searchText').value;
				window.location.href = "Top TV series.php?name="+searchText;
			}
			var countVar = 0;
			function addSeriesBox(){
				if(countVar===0){
				var val2 = document.createElement("table");
				val2.border = "1";
				val2.cellspaceing = "0";
				val2.width = "80%";
				val2.align = "center";
				val2.style = "background:yellow";
				val2.innerHTML = "<table align="+"'center'"+">"+
	    						 "<tr>"+
		  						 "<th align="+"'center'"+" width="+"40%"+">SERIES NAME</th>"+
	 							 "<th align="+"'center'"+" width="+"20%"+">RELEASING YEAR</th>"+
		  						 "<th align="+"'center'"+" width="+"20%"+">RATING</th>"+
		  						 "<th align="+"'center'"+" width="+"20%"+">ADD</th>"+
		  						 "</tr>"+
		  															
		  						 "<tr>"+
		  						 // "<form method="+"'post'"+" action="+"'uploadSeries.php'"+">"+
								 "<td align="+"'center'"+" width="+"40%"+">"+		 								
	    						 	"<input placeholder="+"Type_here_(String)"+" type="+"'text'"+" name="+"'name'"+" size="+"70%"+">"+
								 "</td>"+
								 "<td align="+"'center'"+"  width="+"20%"+">"+
	    						 	"<input placeholder="+"Type_here_(Integer)"+" type="+"'text'"+" name="+"'releasing_year'"+" size="+"30%"+">"+
								 "</td>"+
								 "<td align="+"'center'"+"  width="+"20%"+">"+
	    							"<input placeholder="+"Type_here_(Double)"+" type="+"'text'"+" name="+"'rating'"+" size="+"30%"+">"+
								 "</td>"+
								 "<td style="+"background:#9FFF33; align="+"'center'"+" width="+"20%"+">"+
									"<input type="+"'submit'"+" name="+"'submit'"+" value="+"'Upload Series'"+">"+
								 "</td>"+
								 // "</form>"+
								 "</tr>"+									 							
							     "</table>";
	    		document.getElementById('addSeriesBox').appendChild(val2);
				}else{
					alert("One Series Add at a time!");
				}
				countVar++;
				
			}
			
		</script>
	 </body>
</html>