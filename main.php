<?php require_once("include/connection.php"); ?>
<?php include("include/function.php");?>
<head>
<link href='css/mybutton.css' rel='stylesheet' type='text/css'>
<style>
.container{
          position: fixed;
		  top: 100px;
          left: 450px;
          text-align:center;
          background: #FFCBA4;
          color: blue;
		  font-size: 30px;
		  font-style: normal;
		  padding-top:50px;
		  width:500px;
		  height:300px;
		  margin: 20px 5px;
          z-index: 0;
         -moz-border-radius: 5px 5px 0 0;
         -webkit-border-radius: 5px;
          border-radius: 50px 50px 50px 0;
		  border: 8px solid #cccccc;
		 }
body {
	background-image:url("Images/cap.jpg") ;
	background-size: 100% 100%;
    background-repeat:no-repeat;	
    opacity:0.9;
}
.myButton{
   position:absolute;
   left:40px;
   bottom:20px;
   }
 .team{
  position:absolute;
   left:310px;
   bottom:0px;
   }
 
</style>
</head>
<body>
<div class="container">
<?php
if(isset($_POST["pri"])&&isset($_POST["tid"]))
{
 $pn1= $_SESSION["pn"];
 //echo $pn1."</br>";
 
 $tid1= $_POST["tid"];
 //echo $tid1."<br/>";
 $pri1= $_POST["pri"];
 //echo $pri1."</br>";
 
// Create connection
$conn = new mysqli(HOST,US_NAME, PASS_W,DB_NAME);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT * FROM players WHERE Name = '$pn1' ";
$result = $conn->query($sql);
if ($result->num_rows == 0)
{echo "<h3 class='mid'>NO player exist</h3>";
echo "</br>"."<a href=select.html class='myButton'>BID AGAIN !</a>";
}
else{
$sql1 = "SELECT * FROM list WHERE id = '$tid1' ";
$result1 = $conn->query($sql1);
$row=$result->fetch_assoc();
$row1=$result1->fetch_assoc();
if($row1["penality"]<'2')
{      $ctr=$row1["total"];
        if($ctr<'15')
		{
	
        if($row1["budget"]-$pri1>='0')
		{
       $count=$row1["total"] + 1;
	   $ptype=$row["type"];
	   $pname=$row["Name"];
	   $price=$row["price"];
	   $points=$row["points"];
	   $status=$row["status"];
	   $count1=strval($count);
	   if($ptype==='1')
	   {
	            $min=2;
				$max=5;
				$goli=$row1["goal"]+1;
				$restg=$goli-$min;
				$bg=$row1["budget"]-$pri1;
				$bp=$row1["points"]+$row["points"];
				      if($goli<=$min)
					  {
					        $sql="UPDATE list SET `".$count."`= '$pname',goal='$goli',total='$count',budget='$bg',points='$bp' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "Player  Sold";
															 $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
                                                             echo "</br>"."<a href=select.html class='myButton'>BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }
					              }
								  else if($row1["rest"]<3) {
								          
										  $sql="UPDATE list SET `".$count."`= '$pname',goal='$goli',total='$count',budget='$bg',points='$bp',rest='$restg' WHERE id = '$tid1'";
							                                  if($conn->query($sql) === TRUE){
		                                                     echo "player sold";
															  $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=select.html class='myButton'>BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }  
								  }
				
				
				
				else{
				      echo "Not Eligible to buy this type of player"."</br>";
					  $pen=$row1["penality"]+1;
		             $sql="UPDATE list SET penality='$pen' WHERE id = '$tid1'";
		             if($conn->query($sql) === TRUE){
		              echo "Penalty";}
			 else{
			       echo "Error".$conn->error;
				  }
		  
		  
		  
		  echo "</br>"."<a href=select.html class='myButton'>BACK</a>";
					  
				}
				
	   }
	   if($ptype==='2'){
	            $min=2;
				$max=5;
				$striker=$row1["strike"]+1;
				$rests=$striker-$min;
				$bg=$row1["budget"]-$pri1;
				$bp=$row1["points"]+$row["points"];
				

				
				      if($striker<=$min)
					  {
					        $sql="UPDATE list SET `".$count."`= '$pname',strike='$striker',total='$count',budget='$bg',points='$bp' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "Player  Sold";
															 $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=select.html class='myButton'>BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }
					              }
								  else if($row1["rest"]<3){
								           $sql="UPDATE list SET `".$count."`= '$pname',stike='$striker',total='$count',budget='$bg',points='$bp',rest='$rests' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "Player Sold";
														     $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=select.html class='myButton'>BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }  
								  }
				
				
				
				else{
				      echo "Not Eligible to buy this type of player"."</br>";
					  $pen=$row1["penality"]+1;
		  $sql="UPDATE list SET penality='$pen' WHERE id = '$tid1'";
		  if($conn->query($sql) === TRUE){
		     echo "Penalty";}
			 else{
			       echo "Error".$conn->error;
				  }
		  
		  
		  
		  echo "</br>"."<a href=select.html class='myButton'>GO BACK</a>";
					  
					  
				}
	   
	   }
	   
	   if($ptype=='3'){
	     $min=4;
				$max=7;
				$forward=$row1["ford"]+1;
				$restg=$forward-$min;
				$bg=$row1["budget"]-$pri1;
				$bp=$row1["points"]+$row["points"];
				
				
				
				      if($forward<=$min)
					  {
					        $sql="UPDATE list SET `".$count."`= '$pname',ford='$forward',total='$count',budget='$bg',points='$bp' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "Player Sold";
															 $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=select.html class='myButton'>BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }
					              }
								  elseif($row1["rest"]<3) {
								           $sql="UPDATE list SET `".$count."`= '$pname',ford='$forward',total='$count',budget='$bg',points='$bp',rest='$restg' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "Player Sold";
															  $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=select.html class='myButton'>BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }  
								  }
				
				
				
				else{
				      echo "Not Eligible to buy this type of player"."</br>";
					  $pen=$row1["penality"]+1;
		  $sql="UPDATE list SET penality='$pen' WHERE id = '$tid1'";
		  if($conn->query($sql) === TRUE){
		     echo "Penalty";}
			 else{
			       echo "Error".$conn->error;
				  }
		  
		  
		  
		  echo "</br>"."<a href=select.html class='myButton'>BACK</a>";
					  
				}
	   }
	    if($ptype==='4'){
		$min=4;
				$max=7;
				$midf=$row1["mid"]+1;
				$restg=$midf-$min;
				$bg=$row1["budget"]-$pri1;
				$bp=$row1["points"]+$row["points"];
				
				
				
				      if($midf<=$min)
					  {
					        $sql="UPDATE list SET `".$count."`= '$pname',mid='$midf',total='$count',budget='$bg',points='$bp' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "Player  Sold";
															 $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=select.html class='myButton'>BID MORE</a>";
															 }
			                           else{
			                                        echo "Error".$conn->error;
				              }
					              }
								  else if($row1["rest"]<3) {
								           $sql="UPDATE list SET `".$count."`= '$pname',mid='$midf',total='$count',budget='$bg',points='$bp',rest='$restg' WHERE id = '$tid1'";
							if($conn->query($sql) === TRUE){
		                                                     echo "Player Sold";
															 $sql="UPDATE players SET status='$tid1' WHERE Name = '$pn1'";
															 $fi=$conn->query($sql);
															 echo "</br>"."<a href=select.html class='myButton'>BID MORE</a>";
															 
															 }
			                           else{
			                                        echo "Error".$conn->error;
				                            }  
								  }
				
				else{
				      echo "Not Eligible to buy this type of player"."</br>";
					  $pen=$row1["penality"]+1;
		  $sql="UPDATE list SET penality='$pen' WHERE id = '$tid1'";
		  if($conn->query($sql) === TRUE){
		     echo "Penalty";}
			 else{
			       echo "Error".$conn->error;
				  }
		
		  echo "</br>"."<a href=select.html class='myButton'>GO BACK</a>";
					  
				}
		}
		
       }
	   else
	   {
          echo "Insufficient Budget"."</br>";
		  $pen=$row1["penality"]+1;
		  $sql="UPDATE list SET penality='$pen' WHERE id = '$tid1'";
		  if($conn->query($sql) === TRUE){
		     echo "Penalty";}
			 else{
			       echo "Error".$conn->error;
				  }
		  echo "</br>"."<a href=select.html class='myButton'>BACK</a>";
		  
		  }

}
else{
        echo"Already 15 players Can't Buy More";
        echo "</br>"."<a href=select.html class='myButton'>BACK</a>";
			
}
    
}

else
{
   echo "Team Disqualifeid"."</br>";
   echo "<a href=sam1.php class='myButton'>BACK</a>";
   

}
}
}
else 
{
   echo "INVALID CONSTRAINTS"."</br>";
   echo "<a href=sam1.php class='myButton'>BACK</a>";
}  
    echo "</br>";
   echo "<div class='team'><a href=teams.php class='myButton'>Teams</a></div>";
  
 $conn->close();
 ?>
 </div>
</body>
 