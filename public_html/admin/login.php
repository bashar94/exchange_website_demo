<?php 

# Session start:
session_start();

# Database Connection:
include_once('../config/connection.php');

if($_POST){
	$q = "SELECT * FROM users WHERE email ='$_POST[email]' AND password = SHA1('$_POST[password]') and admin = 1";
	$r = mysqli_query($dbc, $q);
	
	if(mysqli_num_rows($r) == 1){
		
		$_SESSION['email'] = $_POST['email'];
		header('Location: index.php');
		
	}
}
?>

<!DOCTYPE html>
<html>
	<head>
		<title>Admin Login</title>
		
		<meta name="viewport" content="width=device-width, initial-scale=1">
		
		<?php include('config/css.php');?>
		
		<?php include('config/js.php');?>

	</head>
	
	
	<body>
		
		<?php //include(D_TEMPLATE.'/navigation.php'); ?>
		
		<!-- Body content starts -->
	
		
		
		<div class="container">
			
			<div class="row">
				
				<div class="col-md-4 col-md-offset-4">
					
					<div class="panel panel-success">
						
						<div class="panel-heading">
							<strong>Login</strong>	
						</div> <!-- Panel Heading ends -->
						
						<div class="panel-body">
							
							<form action="login.php" method="post">
								
							  <div class="form-group">
							    <label for="email">Email address</label>
							    <input type="email" class="form-control" id="email" name="email" placeholder="Email">
							  </div>
							  
							  <div class="form-group">
							    <label for="password">Password</label>
							    <input type="password" class="form-control" id="password" name="password" placeholder="Password">
							  </div>
							  
							  <button type="submit" class="btn btn-default">Submit</button>
							  
							</form>
						</div> <!-- Panel Body ends -->
					</div> <!-- Panel ends -->
				</div> <!-- Column ends -->
			</div> <!-- Row ends -->
		</div> <!-- Container ends -->
		
	
		<!-- Body content ends -->
		
		<?php //include(D_TEMPLATE.'/footer.php') ?>
		
	</body>
</html>