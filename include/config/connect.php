<?php
$hostname='localhost'; //// specify host, i.e. 'localhost'
$user='root'; //// specify username
$pass=''; //// specify password
$dbase='umu2'; //// specify database name
$connection = mysql_connect("$hostname" , "$user" , "$pass") 
or die ("Can't connect to MySQL");
$db = mysql_select_db($dbase , $connection) or die ("Can't select database.");

?>