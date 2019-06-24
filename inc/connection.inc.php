<?php

	$user = "la_user";
	$pass = "123";
	$server = "localhost";
	$db = "learningasiadb";

	$conn = mysqli_connect($server, $user, $pass, $db);

    if(!mysqli_connect()){
      die("Failed to connect so server." . mysqli_connect_error());
    }