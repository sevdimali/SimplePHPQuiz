<?php 

//Set the database access information as constants
DEFINE ('DB_USER', 'famous_user');
DEFINE ('DB_PASSWORD', 'famous_password');
DEFINE ('DB_HOST', 'localhost');
DEFINE ('DB_NAME', 'quizdb');

@ $dbc = new mysqli(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);

mysqli_set_charset($dbc,'utf8'); //set the default character set to utf8

if (mysqli_connect_error()){
	echo "Could not connect to MySql. Please try again";
	exit();
}

?>
