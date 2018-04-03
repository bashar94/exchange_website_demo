<?php
	
	$db_username = '';	//database username
	$db_password = '';	//database password
	$db_name = '';		//database name


	# Database Connection
	$dbc = mysqli_connect('localhost', $db_username, $db_password, $db_name) or die('Could not connect because: '.mysqli_connect_error());

?>