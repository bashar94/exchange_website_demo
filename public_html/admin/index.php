<?php

# Session start: 
session_start();

if(!isset($_SESSION['email'])){
	header('Location: login.php');
}

include_once('config/setup.php');
?>

<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $page['title'].' | '.$site_title; ?></title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include('config/css.php');?>
		
		<?php include('config/js.php');?>

	</head>
	
	
	<body>
		
		<?php include(D_TEMPLATE.'/navigation.php'); ?>
		
		<!-- Body content starts -->
	
		<h1>Admin Dashboard</h1>
			
			
	
		<!-- Body content ends -->
		
		<?php include(D_TEMPLATE.'/footer.php') ?>
		
	</body>
</html>