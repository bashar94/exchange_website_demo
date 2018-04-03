<?php

# Session start: 
session_start();

include_once('config/setup.php');

if($pageid == 'login'){
	include_once('config/loginverify.php');
}elseif($pageid == 'signup'){
	include_once('config/signupverify.php');
}elseif($pageid == 'settings'){
	include_once('config/settingsverify.php');
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title><?php echo $site_title; ?></title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include_once('config/css.php');?>
		
		<?php include_once('config/js.php');?>

	</head>
	
	
	<body>
		
		<div class="content">
		
		<!-- navbar starts -->	
			<?php include_once('template/navigation.php'); ?> <!-- setting the Nav bar from Template folder... D_TEMPLATE is a String variable in setup.php -->
		<!-- navbar ends -->
		
		<!-- main content starts -->
		
			<div class="main">
				<?php include_once(body_content($dbc, $pageid)); ?>
			</div>
		</div>
		<!-- main content ends -->
		
		<!-- footer starts -->
			<?php include_once('template/footer.php'); ?>
			
	</body>
</html>