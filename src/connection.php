<?php 	
	$server="localhost";
	$user="root";
	$password="";
	$database="a";

	$con=mysqli_connect( $server, $user ,$password ,$database);
		if(!$con){
			die("database error");
		}
  ?>
