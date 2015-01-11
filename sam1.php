 <!DOCTYPE html>
<!doctype html>
<?php require_once("include/connection.php"); ?>
<?php include("include/function.php");?>
<html>
<head>
<link rel="stylesheet" type="text/css" href="css/radio.css">
<link rel="stylesheet" type="text/css" href="css/b.css">

<style>
p.small {
    line-height: 20%;
}
</style>
<style>
body {
	background: url(Images/surya6.jpg) no-repeat center center fixed #000; 
    -webkit-background-size: cover;
    -moz-background-size: cover;
    -o-background-size: cover;
    background-size: 100% 100%;
  padding-left: 100px;
}
.over{
position:absolute;
bottom: 10px;
right:10px;
}
</style>
  <link rel="stylesheet" href="css/button.css">
</head>
<body>
<?php
     if(isset($_POST["pid1"])){
	 $val=$_POST["pid1"];
	 }
	 else $val=$_SESSION['pn'];
     
$sql = "SELECT id, Name, type,price,points FROM players WHERE Name = '$val'  ";
$result = mysql_query($sql,$connection);

    // output data of each row
	echo'<form action="main.php" method="POST">';
    while($row = mysql_fetch_array($result)) {
		echo'<p class="small">';
        echo "<h1><div align='center'><font 150% color='#00FF00'>".$row["Name"]."</font></div></h1>";
		//echo "<h3><div align='center'><font color='#A7FFE1'> Base Price : ".$row["price"]."</font></div></h3>";
		//$var=$row['Name'];
		//$var1=$row['id'];
		//echo $var1;
		//echo $var;
		echo "</p>";
    }
?> 
<h3><font color='#00FF00'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Select the Team</font></h3>
<p>
<form action="main.php" method="post">
<?php
 $sk=$_SESSION['teams'];
 foreach ($sk as $key=>$val)
 {
   echo"<div><input type='radio' name='tid' id='$key' class='radio' value='$key'/><label for='$key'>$val</label></div></br>";
  }
  ?>

</p>
<DIV class="container">
<p align="center">
<section class="webdesigntuts-workshop">
<form action="main.php" method="POST">
		<input type="text" name="pri" placeholder="Final Price...">		    	
		<button>Buy Now</button>
 

 <?php if(isset($_POST["pid1"])){
	   $val=$_POST["pid1"];
	   }
	   else $val=$_SESSION['pn'];
      $sql = "SELECT id, Name, type,price,points FROM players WHERE Name= '$val'  ";
      $result = mysql_query($sql,$connection);
      $row = mysql_fetch_array($result);
	  $_SESSION["pn"]=$row['Name'];
	  
    ?>
</form>
		</section>
		</DIV>
</p>
<div class="over"><p><button><a href=select.html style="color:white">BACK</a></button></p>;</div>
</body>
</html>

