<?php

	//Defining Constants
	define('HOST','vlvlnl1grfzh34vj.chr7pe7iynqr.eu-west-1.rds.amazonaws.com');
	define('USER','ckxg7ecz3m1nnb9k');
	define('PASS','	myz2kwaqvr01pyc4');
	define('DB','d5epwpe7jtk4oahw');

	//Connecting to Database
    $con = mysqli_connect(HOST,USER,PASS,DB) or die('Unable to Reach our Servers!');
    mysqli_set_charset($con, 'utf8');
