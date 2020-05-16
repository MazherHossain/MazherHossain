 <!DOCTYPE html>
 <html>
 <head>
 	<title></title>
 </head>
 <body>
 	<div class="showAll">
		<div id="all"></div>
		<script type="text/javascript">
			
			var user = "<?php echo $_COOKIE['loggedinuser'];?>";
			//call ajax
			var ajax3 = new XMLHttpRequest();
			var method3 = "GET";
			var url3 = "searchData3.php?name="+"<?php echo $movieName ?>"+"";
			var asynchronous3 = true;
			ajax3.open(method3, url3, asynchronous3);
			//sending ajax request
			ajax3.send();
			ajax3.onreadystatechange = function()
			{
				if(this.readyState == 4 && this.status==200)
				{
					var searchData3 = JSON.parse(this.responseText);
					console.log(searchData3);
					var i = 0;
					for(i; i<searchData3.length; i++)
					{
						var id = searchData3[i].id;
						var movie_name = searchData3[i].movie_name;
						var earnings = searchData3[i].earnings;
						var releasing_year = searchData3[i].releasing_year;	
						var star_cast = searchData3[i].star_cast;


						var val3 = document.createElement("table");
						val3.border = "1";
						val3.cellspaceing = "0";
						val3.width = "90%";
						val3.align = "center";
						val3.style = "background:yellow";
						val3.innerHTML ="";
						if(user=='Mazher'){
							val3.innerHTML = "<tr>"+
										 "<td align="+"center"+" width="+"10%"+">"+
										 (i+1)+
										 "</td>"+
										 "<td align="+"center"+" width="+"20%"+">"+
										 movie_name+
										 "</td>"+
										 "<td align="+"center"+" width="+"25%"+">"+
										 earnings+
										 "</td>"+
										 "<td align="+"center"+" width="+"10%"+">"+
										 releasing_year+
										 "</td>"+
										 "<td align="+"center"+"  width="+"20%"+">"+
										 star_cast+
										 "</td>"+
										 "<td style="+"background:#FF5733; align="+"center"+" width="+"15%"+">"+
										 "<a href="+"deleteTopBoxOffice.php?id="+id+">Remove Movie</a>"+
										 "</td>"+
										 "</tr>";
						}else{
							val3.innerHTML = "<tr>"+
										 "<td align="+"center"+" width="+"10%"+">"+
										 (i+1)+
										 "</td>"+
										 "<td align="+"center"+" width="+"20%"+">"+
										 movie_name+
										 "</td>"+
										 "<td align="+"center"+" width="+"25%"+">"+
										 earnings+
										 "</td>"+
										 "<td align="+"center"+" width="+"10%"+">"+
										 releasing_year+
										 "</td>"+
										 "<td align="+"center"+"  width="+"20%"+">"+
										 star_cast+
										 "</td>"+
										 "</tr>";
						}
						
						document.getElementById("all").appendChild(val3);
					}
				}
			};


		</script>
		
	</div>
 
 </body>
 </html>