<?php

// session_start();

error_reporting(E_ALL);
ini_set("display_errors",1);

$hostname='localhost'; //// specify host, i.e. 'localhost'
$user='root'; //// specify username
$pass=''; //// specify password
$dbase='umu2'; //// specify database name
$connection = mysql_connect($hostname , $user , $pass) 
or die ("Can't connect to MySQL");
$db = mysql_select_db($dbase , $connection) or die ("Can't select database.");

?>