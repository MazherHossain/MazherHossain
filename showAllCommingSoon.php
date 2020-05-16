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
			var ajax2 = new XMLHttpRequest();
			var method2 = "GET";
			var url2 = "searchData2.php?name="+"<?php echo $movieName ?>"+"";
			var asynchronous2 = true;
			ajax2.open(method2, url2, asynchronous2);
			//sending ajax request
			ajax2.send();
			ajax2.onreadystatechange = function()
			{
				if(this.readyState == 4 && this.status==200)
				{
					var searchData2 = JSON.parse(this.responseText);
					console.log(searchData2);
					var i = 0;
					for(i; i<searchData2.length; i++)
					{
						var id = searchData2[i].id;
						var movie_name = searchData2[i].movie_name;
						var star_cast = searchData2[i].star_cast;						

						var val2 = document.createElement("table");
						val2.border = "1";
						val2.cellspaceing = "0";
						val2.width = "80%";
						val2.align = "center";
						val2.style = "background:yellow";
						val2.innerHTML = "";
						if(user=='Mazher'){
							val2.innerHTML = "<tr>"+
										 "<td align="+"center"+" width="+"10%"+">"+
										 (i+1)+
										 "</td>"+
										 "<td align="+"center"+" width="+"35%"+">"+
										 movie_name+
										 "</td>"+
										 "<td align="+"center"+"  width="+"35%"+">"+
										 star_cast+
										 "</td>"+
										 "<td style="+"background:#FF5733; align="+"center"+" width="+"20%"+">"+
										 "<a href="+"deleteComingSoonMovie.php?id="+id+">Remove Movie</a>"+
										 "</td>"+
										 "</tr>";
						}else{
							al2.innerHTML = "<tr>"+
										 "<td align="+"center"+" width="+"10%"+">"+
										 (i+1)+
										 "</td>"+
										 "<td align="+"center"+" width="+"35%"+">"+
										 movie_name+
										 "</td>"+
										 "<td align="+"center"+"  width="+"35%"+">"+
										 star_cast+
										 "</td>"+
										 "</tr>";
						}
						
						document.getElementById("all").appendChild(val2);
					}
				}
			};


		</script>
		
	</div>
 
 </body>
 </html>