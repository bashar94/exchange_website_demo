<?php

# Site title
$site_title = 'Bodlao';

# Database Connection:
include_once('config/connection.php');  //database connection

# Functions:
include_once('functions/data.php');    // functions to get data from tables
include_once('functions/template.php');  // get and set data of Nav bar
include_once('functions/body.php');  // function to load body content
include_once('functions/update-db.php');  // function to update database info



# All GET methods
if(isset($_GET['page'])){
	$pageid = $_GET['page']; // Getting 'Page ID' from URL
}else{
	$pageid = 'default';  // Setting 'Page ID' when not found in URL
}

if(isset($_GET['profile'])){
	$profileid = $_GET['profile']; // Getting 'Profile ID' from URL
}else{
	$profileid = 'overview';  // Setting 'Profile ID' when not found in URL
}

if(isset($_GET['id'])){
	$id = $_GET['id']; // Getting 'ID' from URL
}


?>
