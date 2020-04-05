<?php
	session_start();
	// connect to database
	$conn = mysqli_connect("localhost", "blog-u", "3Qb2Pai5exDwptzc", "complete-blog-php");
  //password 3Qb2Pai5exDwptzc

	if (!$conn) {
		die("Error connecting to database: " . mysqli_connect_error());
	}
    // define global constants
	define ('ROOT_PATH', realpath(dirname(__FILE__)));
	define('BASE_URL', 'http://localhost/complete-blog-php/');
?>
