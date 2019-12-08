<?php
	$username = "ma131076";
	$password = "St0plooking!";

  // $password = "";
	$database = "ma131076";
//$con = mysqli_connect("localhost","ma131076","St0plooking!","ma131076") or die ("could not connect to mysql");
	$con = mysqli_connect("localhost" , "$username" , "$password", "$database") or die(mysql_error());  //(host,username,password,) Connects to mysql server. Throws error if it cannot connect.
