<head>
 <style>
 body {background-color:#ffcc66;}
		Welcome <?php echo $_COOKIE['loggedinuser'];?>
 </style>
 <link rel="stylesheet" type="text/css" href="mystyle.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<html>
	 <body style align="center" >
    <form method="post" action="uploadMovies3.php" enctype="multipart/form-data">
      <table align="center" width="100%">
      <tr>
        <td align="center">
          <img src="popcorn.png" alt="HTML5 Icon" width="350" height="350">
        </td>
      </tr>
      <tr>
        <td align="center">
          <h2>Movie Opening This Week</h2>
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
	 <br>
   <table align="center">
     <tr>
       <td>
          <div id="addSeriesBox"></div>
          <br>
       </td>
     </tr>
     <tr>
       <td>
          <div class="showAll">
            <?php 
              error_reporting(0);
              $movieName = $_GET['name'];
              require_once("showAllMoviesOpening.php");
            ?>
          </div>
       </td>
     </tr>
   </table>
   
    

    </form>
     <script type="text/javascript">
      function searchSeries(){
        console.log("Working...");
        var searchText = document.getElementById('searchText').value;
        window.location.href = "Movies Opening This Week.php?name="+searchText;
      }
      var countVar = 0;
      function addSeriesBox(){
        if(countVar===0){
        var val4 = document.createElement("table");
        val4.border = "1";
        val4.cellspaceing = "0";
        val4.width = "100%";
        val4.align = "center";
        val4.style = "background:yellow";
        val4.innerHTML = "<table align="+"'center'"+">"+
                 "<tr>"+
                 "<th align="+"'center'"+" width="+"10%"+">MOVIE IMAGE</th>"+
                 "<th align="+"'center'"+" width="+"20%"+">MOVIE TITLE</th>"+
                 "<th align="+"'center'"+" width="+"35%"+">MOVIE DESCRIPTION</th>"+
                 "<th align="+"'center'"+" width="+"5%"+">5 STAR</th>"+
                 "<th align="+"'center'"+" width="+"5%"+">4 STAR</th>"+
                 "<th align="+"'center'"+" width="+"5%"+">3 STAR</th>"+
                 "<th align="+"'center'"+" width="+"5%"+">2 STAR</th>"+
                 "<th align="+"'center'"+" width="+"5%"+">1 STAR</th>"+
                 "<th align="+"'center'"+" width="+"10%"+">ADD</th>"+
                 "</tr>"+
                                    
                 "<tr>"+
                 "<td align="+"'center'"+" width="+"10%"+">"+                   
                    "<input type="+"'file'"+" id="+"'fileToUpload'"+" name="+"'fileToUpload'"+">"+
                 "</td>"+

                 "<td align="+"'center'"+" width="+"20%"+">"+                   
                    "<input placeholder="+"Type_here_(String)"+" type="+"'text'"+" name="+"'title'"+" size="+"20%"+">"+
                 "</td>"+

                 "<td align="+"'center'"+" width="+"35%"+">"+                   
                    "<input placeholder="+"Type_here_(String)"+" type="+"'text'"+" name="+"'description'"+" size="+"30%"+">"+
                 "</td>"+

                 "<td align="+"'center'"+" width="+"5%"+">"+                   
                    "<input placeholder="+"Type_here_(Integer)"+" type="+"'text'"+" name="+"'five_star'"+" size="+"10%"+">"+
                 "</td>"+

                 "<td align="+"'center'"+" width="+"5%"+">"+                   
                    "<input placeholder="+"Type_here_(Integer)"+" type="+"'text'"+" name="+"'four_star'"+" size="+"10%"+">"+
                 "</td>"+

                 "<td align="+"'center'"+" width="+"5%"+">"+                   
                    "<input placeholder="+"Type_here_(Integer)"+" type="+"'text'"+" name="+"'three_star'"+" size="+"10%"+">"+
                 "</td>"+

                 "<td align="+"'center'"+" width="+"5%"+">"+                   
                    "<input placeholder="+"Type_here_(Integer)"+" type="+"'text'"+" name="+"'two_star'"+" size="+"10%"+">"+
                 "</td>"+

                 "<td align="+"'center'"+" width="+"5%"+">"+                   
                    "<input placeholder="+"Type_here_(Integer)"+" type="+"'text'"+" name="+"'one_star'"+" size="+"10%"+">"+
                 "</td>"+
                 
                 "<td style="+"background:#9FFF33; align="+"'center'"+" width="+"10%"+">"+
                  "<input type="+"'submit'"+" name="+"'submit'"+" value="+"'Upload Movie'"+">"+
                 "</td>"+
                 "</tr>"+                               
                 "</table>";
          document.getElementById('addSeriesBox').appendChild(val4);
        }else{
          alert("One Movie Add at a time!");
        }
        countVar++;
        
      }
      
    </script>
	 </body>
</html>