<?php include("include/function.php");?>

<?php

	$capt = $_POST["captain"];
	$team = $_SESSION["teamno"];
	


// Create connection
$conn = new mysqli(HOST, US_NAME, PASS_W, DB_NAME);
// Check connection
if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
}

$sql1 = "SELECT * FROM list WHERE id = '$team' ";
$result1 = $conn->query($sql1);
$row1=$result1->fetch_assoc();
$sql2= "SELECT * FROM players WHERE Name = '$capt' ";

$result2 = $conn->query($sql2);
if ($result2->num_rows == 0)
{
echo "NO player exist with this name";
echo "</br>"."<a href=fourth.html>Click Here to Display team !</a>";
}
else
{
   $flag=0;
   $i=1; 
   for($i=1;$i<=15;$i++)
   {
         if($row1["$i"]===$capt)
		 { $flag =1;
		    break;
		 }
   }
   if($flag===0)
  {  
    echo "No player in this team";
    echo "</br>"."<a href=fourth.html>Click Here to Display team !</a>";
   }
  
   else
{
$row2=$result2->fetch_assoc();
//$capt1= $row1["captain"];
{
//echo $row1["points"];
//echo $row2["points"];

$sql= "UPDATE list SET captain = '$capt' WHERE id = '$team'";
if($conn->query($sql)===TRUE)
	echo "New captain name: ".$capt." for team ".$team."<br>";

$count=$row1["points"]+$row2["points"];
$sql = "UPDATE list SET points = '$count' WHERE id = '$team'";
if($conn->query($sql)===TRUE)
	echo "New Points:".$count;
}

//echo "</br>"."<a href=drop.html>Click Here to return to bidding!</a>";
//echo "</br>"."<a href=fourth.html>Click Here to Display team !</a>";
$conn->close();
}
}

echo'<script>
window.onload(window.open("teams.php?key='.$team.'","_self"));
</script>';

?>