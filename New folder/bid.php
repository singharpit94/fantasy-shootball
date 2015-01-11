<!DOCTYPE html>
<?php require_once("include/connection.php"); ?>
<?php include("include/function.php");?>
    
<html>
 <meta charset="UTF-8"/>
 <head>
   <title>BIDING</title>
   
 </head>
 
 <body>
   <div style="text-align:center">
   <p>
   	<div class="sel">Choose player from Category-
	<?php if(isset($_GET['value']))
	   {
		 show();
		 }
		?>
    </div>		
   </p>
   <form action="sam1.php" method="POST">
   <select name="pid1"onchange='this.form.submit()'>
    <?php 
	   if(isset($_GET['value']))
	   {
	    $value=$_GET['value'];
		$sql = "SELECT id, Name  FROM players WHERE type = '$value' AND status='0' ";
        $results = mysql_query($sql,$connection);
         if(!$results){
		       die("database query failed".mysql_error());
		        }
           // output data of each row
	     $v=0;
	     $v1='Player Name';
	    echo "<option value =$v>$v1</option>";
        while($row=mysql_fetch_array($results)) {
        //echo "<tr><td>".$row["id"]."</td><td>".$row["Name"]."</td></tr>";
		$var=$row["Name"];
		$var1=$row["id"];
		//echo $var1;
		//echo $var;
		//echo "<option>$var1</option>";
		echo "<option value=$var1>$var</option>";
          }
	   }
     ?>
	</select>
	</form>
	</div>
 </body>
 <?php require("include/close.php");?>
</html>
