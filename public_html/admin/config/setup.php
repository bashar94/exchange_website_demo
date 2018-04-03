<?php

# Database Connection:
include('../config/connection.php');

# Constants:
DEFINE('D_TEMPLATE', 'template');


# Functions:
include ('functions/data.php');
include ('functions/template.php');

$site_title = 'Pathshala';

if(isset($_GET['page'])){
	$pageid = $_GET['page']; // Getting 'Page ID' from URL
}else{
	$pageid = 1;  // Setting 'Page ID' when not found in URL
}


# Page info setup
$page = data_page($dbc, $pageid); // function from data.php
 
# User setup:

$user = data_user($dbc, $_SESSION['email']);
?>