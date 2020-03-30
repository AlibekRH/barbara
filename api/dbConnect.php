<?php

	//Defining Constants
	define('HOST','dz8959rne9lumkkw.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');
	define('USER','v5evhnv9cy2wsk17');
	define('PASS','fozm13wrfguhbb1p');
	define('DB','hp0ouafyqi4rqyrx');

	//Connecting to Database
    $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Reach our Servers!');
    mysqli_set_charset($con, 'utf8');
