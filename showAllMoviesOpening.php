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
			var ajax4 = new XMLHttpRequest();
			var method4 = "GET";
			var url4 = "searchData4.php?name="+"<?php echo $movieName ?>"+"";
			var asynchronous4 = true;
			ajax4.open(method4, url4, asynchronous4);
			//sending ajax request
			ajax4.send();
			ajax4.onreadystatechange = function()
			{
				if(this.readyState == 4 && this.status==200)
				{
					var searchData4 = JSON.parse(this.responseText);
					console.log(searchData4);
					var i = 0;
					for(i=0; i<searchData4.length; i+=1)
					{	console.log("Loop run : "+(i+1));
						var id = searchData4[i].id;
						var image = searchData4[i].image;
						var title = searchData4[i].title;
						var description	= searchData4[i].description;
						var five_star = searchData4[i].five_star;
						var four_star = searchData4[i].four_star;
						var three_star = searchData4[i].three_star;
						var two_star = searchData4[i].two_star;
						var one_star = searchData4[i].one_star;
						var total_star = Number(five_star)+Number(four_star)+Number(three_star)+Number(two_star)+Number(one_star);
						var avg_star = (5*Number(five_star) + 4*Number(four_star) + 3*Number(three_star) + 2*Number(two_star) + 1*Number(one_star)) / total_star;
						avg_star = avg_star.toFixed(2);
						var star_logos = "";
						var j=0;
						for(j=0; j<Math.floor(avg_star); j+=1){
							star_logos += "<span class="+"'fa fa-star checked'"+">"+"</span>";
						}
						for(j=0; j<(5-Math.floor(avg_star)); j+=1){
							star_logos += "<span class="+"'fa fa-star'"+">"+"</span>";
						}
						var val2 = document.createElement("table");
						val2.border = "1";
						val2.cellspaceing = "0";
						val2.width = "100%";
						val2.align = "center";
						val2.style = "background:yellow";
						val2.innerHTML = "";
						if(user=='Mazher'){
							val2.innerHTML =
	"<tr>"+
	"<td><img src=images/"+image+" width="+"350" +" height="+"500"+"></td>"+
	"<td><article>"+
	"<h3>"+title+"</h3>"+
	"<p>"+description+"</p></article><br>"+
	star_logos+
	"<p>"+avg_star+" average based on "+total_star+" reviews.</p>"+
    "<hr style="+"border:3px solid #f1f1f1"+">"+
    "<div class="+"row"+"><div class="+"side"+"><div>5 star</div></div>"+
    "<div class="+"middle"+"><div class="+"bar-container"+"><div class="+"bar-5"+"></div></div></div>"+
    "<div class="+"side right"+"><div>"+five_star+"</div></div>"+
    "<div class="+"side"+"><div>4 star</div></div>"+
    "<div class="+"middle"+"><div class="+"bar-container"+"><div class="+"bar-4"+"></div></div></div>"+
    "<div class="+"side right"+"><div>"+four_star+"</div></div>"+
    "<div class="+"side"+"><div>3 star</div></div>"+
    "<div class="+"middle"+"><div class="+"bar-container"+"><div class="+"bar-3"+"></div></div></div>"+
    "<div class="+"side right"+"><div>"+three_star+"</div></div>"+
    "<div class="+"side"+"><div>2 star</div></div>"+
    "<div class="+"middle"+"><div class="+"bar-container"+"><div class="+"bar-2"+"></div></div></div>"+
    "<div class="+"side right"+"><div>"+two_star+"</div></div>"+
    "<div class="+"side"+">"+
    "<div>1 star</div></div>"+
    "<div class="+"middle"+"><div class="+"bar-container"+"><div class="+"bar-1"+"></div></div></div>"+
    "<div class="+"side right"+"><div>"+one_star+"</div></div></div>"+
	"</td>"+
	"</td>"+
	"<td style="+"background:#FF5733; align="+"center"+" width="+"15%"+">"+
	"<a href="+"deleteMoviesOpening.php?id="+id+">Remove Movie</a>"+
	"</td>"+
	"</tr>";
						}else{
							val2.innerHTML = 
	"<tr>"+
	"<td><img src=images/"+image+" width="+"350" +" height="+"500"+"></td>"+
	"<td><article>"+
	"<h3>"+title+"</h3>"+
	"<p>"+description+"</p></article><br>"+
	star_logos+
	"<p>"+avg_star+" average based on "+total_star+" reviews.</p>"+
    "<hr style="+"border:3px solid #f1f1f1"+">"+
    "<div class="+"row"+"><div class="+"side"+"><div>5 star</div></div>"+
    "<div class="+"middle"+"><div class="+"bar-container"+"><div class="+"bar-5"+"></div></div></div>"+
    "<div class="+"side right"+"><div>"+five_star+"</div></div>"+
    "<div class="+"side"+"><div>4 star</div></div>"+
    "<div class="+"middle"+"><div class="+"bar-container"+"><div class="+"bar-4"+"></div></div></div>"+
    "<div class="+"side right"+"><div>"+four_star+"</div></div>"+
    "<div class="+"side"+"><div>3 star</div></div>"+
    "<div class="+"middle"+"><div class="+"bar-container"+"><div class="+"bar-3"+"></div></div></div>"+
    "<div class="+"side right"+"><div>"+three_star+"</div></div>"+
    "<div class="+"side"+"><div>2 star</div></div>"+
    "<div class="+"middle"+"><div class="+"bar-container"+"><div class="+"bar-2"+"></div></div></div>"+
    "<div class="+"side right"+"><div>"+two_star+"</div></div>"+
    "<div class="+"side"+">"+
    "<div>1 star</div></div>"+
    "<div class="+"middle"+"><div class="+"bar-container"+"><div class="+"bar-1"+"></div></div></div>"+
    "<div class="+"side right"+"><div>"+one_star+"</div></div></div>"+
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