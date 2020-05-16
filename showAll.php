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
			var ajax1 = new XMLHttpRequest();
			var method1 = "GET";
			var url1 = "searchData1.php?name="+"<?php echo $seriesName ?>"+"";
			var asynchronous1 = true;
			ajax1.open(method1, url1, asynchronous1);
			//sending ajax request
			ajax1.send();
			ajax1.onreadystatechange = function()
			{
				if(this.readyState == 4 && this.status==200)
				{
					var searchData1 = JSON.parse(this.responseText);
					console.log(searchData1);
					var i = 0;
					for(i; i<searchData1.length; i++)
					{
						var id = searchData1[i].id;
						var name = searchData1[i].name;
						var releasing_year = searchData1[i].releasing_year;
						var rating = searchData1[i].rating;						

						var val1 = document.createElement("table");
						val1.border = "1";
						val1.cellspaceing = "0";
						val1.width = "80%";
						val1.align = "center";
						val1.style = "background:yellow";
						val1.innerHTML ="";
						if(user=='Mazher'){
							val1.innerHTML = "<tr>"+
										 "<td align="+"center"+" width="+"15%"+">"+
										 (i+1)+
										 "</td>"+
										 "<td align="+"center"+" width="+"40%"+">"+
										 name+
										 "</td>"+
										 "<td align="+"center"+"  width="+"15%"+">"+
										 releasing_year+
										 "</td>"+
										 "<td align="+"center"+"  width="+"15%"+">"+
										 rating+
										 "</td>"+
										 "<td style="+"background:#FF5733; align="+"center"+" width="+"15%"+">"+
										 "<a href="+"deleteSeries.php?id="+id+">Remove Series</a>"+
										 "</td>"+
										 "</tr>";
						}else{
							val1.innerHTML = "<tr>"+
										 "<td align="+"center"+" width="+"15%"+">"+
										 (i+1)+
										 "</td>"+
										 "<td align="+"center"+" width="+"40%"+">"+
										 name+
										 "</td>"+
										 "<td align="+"center"+"  width="+"15%"+">"+
										 releasing_year+
										 "</td>"+
										 "<td align="+"center"+"  width="+"15%"+">"+
										 rating+
										 "</td>"+
										 "</tr>";
						}
						
						document.getElementById("all").appendChild(val1);
					}
				}
			};


		</script>
		
	</div>
 
 </body>
 </html>