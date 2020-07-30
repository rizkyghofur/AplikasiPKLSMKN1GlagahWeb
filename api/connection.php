<?php
	$server		= "localhost";
	$user		= "ti17182_rizky";
	$password	= "5W7sPYMhSjHp";
	$database	= "ti17182_pklsmkn";
	
	$con = mysqli_connect($server, $user, $password, $database);
	if (mysqli_connect_errno()) {
	 	echo "Gagal terhubung MySQL: " . mysqli_connect_error();
	 }
