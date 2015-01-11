<?php require("session.php");?>
<?php require_once("connection.php"); ?>

<?php 
       function show()
	   {
	   $value=$_GET['value'];
	   $sh=$_SESSION['players'];
       foreach($sh as $s=>$val)
	     {
	        if($s==$value-1)
             echo $val;			
	     }
	   }
?>
		 
