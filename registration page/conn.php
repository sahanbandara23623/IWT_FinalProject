<?php

$sname = "loclhost";
$username = "root";
$password = "";
$db_name = "test1";

//database connection
	$conn = mysqli_connect($sname , $username , $password ,"$db_name");

if(!$conn){
    die ('Could not Connect My Sql:'.mysql_error()); 
    }

?>
