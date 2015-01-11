<!DOCTYPE html>
<?php require_once("include/connection.php"); ?>
<?php include("include/function.php");?>
<html>

<head>

  <meta charset="UTF-8">

  <title></title>

<style>
body {     
	background: url(Images/surya2.jpg) no-repeat center center fixed #000; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: 100% 100%;
	text-align : center;
}

</style>
<style>
table, th, td {
    
	align =center;
}
.sexy {
	display: inline;
	float: left;
	padding : 10px;
}
.center {
    margin-left: 28%;
    margin-right: 30%;
    width: 70%;
	font size: 6;
}
.dropdown-dark{
 box-shadow: inset 0 1px rgba(255, 255, 255, 0.1), 0 1px 1px rgba(0, 0, 0, 0.2);
 }
.dropdown-dark:before {
  border-bottom-color: #aaa;
  border-radius: 6px;
}
.dropdown-dark:after {
  border-top-color: #aaa;
  border-radius: 6px;
}
.dropdown-dark .dropdown-select {
  color: #aaa;
  text-shadow: 0 1px black;
  /* Fallback for IE 8 */
  background: #444;
  border-radius: 6px;
}
.dropdown-dark .dropdown-select:focus {
  color: #ccc;
  border-radius: 6px;
}
.dropdown-dark .dropdown-select > option {
  background: #444;
  text-shadow: 0 1px rgba(0, 0, 0, 0.4);
  border-radius: 6px;
}
select
{
    display: inline-block;
    width: 200px;
    height: 30px;
    padding: 3px 6px;
    margin-bottom: 10px;
    font-size: 12px;
    line-height: 20px;
    color: #555555;
    vertical-align: middle;
    -webkit-border-radius: 6px;
    -moz-border-radius: 6px;
    border-radius: 6px;
}
.over{
display:inline-block;
position:fixed;
bottom:8px;
right:10px;
}
.ov{
display:inline-block;
position:fixed;
bottom:8px;
left:10px;
}
</style>

	   <meta name="viewport" content="width=device-width, initial-scale=1">
   <link rel="stylesheet" href="css/styles.css">
   <script src="js/jquery-latest.min.js" type="text/javascript"></script>
   <script src="js/scripts.js"></script>
   
     <link rel="stylesheet" href="css/bootstrap.min.css">
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="css/button.css">

</head>

<body>

  <body class="theme-transit">
  <section id="content">
    <h1>Team Details</h1>
    <div class="drop">
      <ul>
        <?php
		$tn=$_SESSION['teams'];
			echo"<div id='cssmenu' class='sexy'>";
		foreach($tn as $key=>$nt)
		{
			echo"<div class='sexy'>";
		  $k=$key;
		  echo"<ul>";
		   echo"<li class='active'><a href=teams.php?key=$k>".$nt."</a></li>";
		   echo"</ul>";
		   echo"</div>";
		}
		   echo"</div><br/><br/><br/><br/>";
		?>
		
      </ul>
    </div>
  </section>
  <div class="show" style="text-align:center;">
  	<h2>
	   <?php
	     if(isset($_GET['key']))
		 {
		  $key=$_GET['key'];
		  echo"TEAM_".$key;
		  $_SESSION['teamno']=$key;
		 }
		 ?>
	</h2>
  	<p class="detail" >
	<?php
	if(isset($_GET['key']))
	{
	  $key=$_GET['key'];
	       $sub="SELECT * FROM list WHERE id='$key'";
	        $results=mysql_query($sub,$connection);
			if(!$results){
		       die("database query failed".mysql_error());
		        }
				
			 //echo "<tr><td> id</td><td>  name</td><td>  money</td><td>  play</td></tr></br>  ";
              $row=mysql_fetch_array($results);
              $count=$row["total"];
		 if($count>0)
		 {
              $counter = 1;
			 echo"<div class='center'>";
			 echo '<div class="container-fluid">';
			 echo "<div class='row'>";
					echo'<div class="col-sm-6">';
					echo "<table><tr><TD style='FONT-SIZE:25px; COLOR:#000000; LINE-HEIGHT:80px; FONT-FAMILY:Arial,Helvetica,sans-serif'>Players</TD></tr></table>" ;
			  while($counter<=$count)
			  {
			       echo "<table><tr><TD style='FONT-SIZE:22px; COLOR:#000000; LINE-HEIGHT:20px; FONT-FAMILY:Arial,Helvetica,sans-serif'>".$row["$counter"]."</TD></tr></table>" ;
				   
			     $counter++; 
			  }
			  echo"</div>";
				echo'<div class="col-sm-6">';
				echo "<table><tr><TD style='FONT-SIZE:25px; COLOR:#000000; LINE-HEIGHT:80px; FONT-FAMILY:Arial,Helvetica,sans-serif'>Status</TD></tr></table>" ;
			      echo "<table><tr><TD style='FONT-SIZE:22px; COLOR:#000000; LINE-HEIGHT:20px; FONT-FAMILY:Arial,Helvetica,sans-serif'>"."Goal Keepers ".$row["goal"]."</TD></tr></table>";
		          echo "<table><tr><TD style='FONT-SIZE:22px; COLOR:#000000; LINE-HEIGHT:20px; FONT-FAMILY:Arial,Helvetica,sans-serif'>"."Strikers   ".$row["strike"]."</TD></tr></table>";
		          echo "<table><tr><TD style='FONT-SIZE:22px; COLOR:#000000; LINE-HEIGHT:20px; FONT-FAMILY:Arial,Helvetica,sans-serif'>"."Forward   ".$row["ford"]."</TD></tr></table>";
		          echo "<table><tr><TD style='FONT-SIZE:22px; COLOR:#000000; LINE-HEIGHT:20px; FONT-FAMILY:Arial,Helvetica,sans-serif'>"."Mid Fielders   ".$row["mid"]."</TD></tr></table>";
		          //echo "<table><tr><TD style='FONT-SIZE:22px; COLOR:#000000; LINE-HEIGHT:20px; FONT-FAMILY:Arial,Helvetica,sans-serif'>"."Others   ".$row["rest"]."</td></TD></table>";
		          echo "<table><tr><TD style='FONT-SIZE:22px; COLOR:#000000; LINE-HEIGHT:20px; FONT-FAMILY:Arial,Helvetica,sans-serif'>"."Total   ".$row["total"]."</td></Td></table>";
		          echo "<table><tr><TD style='FONT-SIZE:22px; COLOR:#000000; LINE-HEIGHT:20px; FONT-FAMILY:Arial,Helvetica,sans-serif'>"."Budget   ".$row["budget"]."</td></TD></table>";
		          //echo "<table><tr><TD style='FONT-SIZE:22px; COLOR:#000000; LINE-HEIGHT:20px; FONT-FAMILY:Arial,Helvetica,sans-serif'>"."Points   ".$row["points"]."</td></TD></table>";
		          echo "<table><tr><TD style='FONT-SIZE:22px; COLOR:#000000; LINE-HEIGHT:20px; FONT-FAMILY:Arial,Helvetica,sans-serif'>"."Penalities   ".$row["penality"]."</TD></tr></table>";
				  echo"</div>";
				  echo"</div>";
				  echo"</div>";
				  echo"</div>";
				  if($row["captain"]!=NULL)
		          echo "</br></br><table style='width:100%'><tr><TD style='FONT-SIZE:30px; COLOR:#000000; LINE-HEIGHT:20px; FONT-FAMILY:Arial,Helvetica,sans-serif'>"."CAPTAIN   ".$row["captain"]."</TD></tr></table>";
				  
	     if($count>=15&&$row["captain"]==NULL)
              {		 
				$sup="SELECT  * FROM list WHERE id='$key'" ;
	          $result=mysql_query($sup,$connection);
			if(!$result){
		       die("database query failed".mysql_error());
		        }
				
	       echo'<form action="next.php" method="POST">';
		   echo'<div class="dropdown dropdown-dark">';
           echo'<select name="captain" class="dropdown-select" size="1">';
			 //echo "<tr><td> id</td><td>  name</td><td>  money</td><td>  play</td></tr></br>  ";
              $row=mysql_fetch_array($result);
			  $v=0;
	           $v1='SELECT';
	           echo "<option value =$v>$v1</option>";
			   $count=$row["total"];
              $counter = 1;
			  while($counter<=$count)
			  {            
			              $var=$row["$counter"];
						  echo "<option value='$var'>$var</option>";
						  $counter++;
              }
	   
	 echo"</select>";
	 echo"</div>";
	 echo"<p><button>SUBMIT</button></p>";
	 echo"</form>";
	 }
	 }
	 }
  ?>
	</p>
  </div>
    <div class="ov">"<p><button><a href=select.html style="color:white">BID AGAIN!</a></button></p>";</div>
  	<div class="over">"<p><button><a href=show.php style="color:white">GAME OVER</a></button></p>";</div>
</body>

  <script src='js/jquery.js'></script>

  <script src="js/index.js"></script>

</body>
<?php require("include/close.php");?>
</html>