<?php

	//Defining Constants
	define('HOST','localhost');
	define('USER','root');
	define('PASS','');
	define('DB','fliptable');

	//Connecting to Database
    $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Reach our Servers!');
    mysqli_set_charset($con, 'utf8');
