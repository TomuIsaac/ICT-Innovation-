<?php
  include("config/connect.php");  

	$id =$_REQUEST['pid'];
	
	
	// sending query
	mysql_query("DELETE FROM application WHERE pid = '$id'")
	or die(mysql_error());  	
	
	header("Location: reg2.php");
?>