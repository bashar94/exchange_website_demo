<?php

if(isset($_SESSION['username'])){
	header('Location: ?page=default');

}

if($_POST){
	# Database Connection:
	include_once('connection.php');

	$q = "SELECT * FROM users WHERE (email ='$_POST[username]' or username ='$_POST[username]') AND password = SHA1('$_POST[password]')";
	$r = mysqli_query($dbc, $q);

	if(mysqli_num_rows($r) == 1){

		$_SESSION['username'] = mysqli_fetch_assoc($r)['username'];
		$_SESSION['fullname'] = mysqli_fetch_assoc($r)['fullname'];

		// $_SESSION['KCFINDER'] = array(
    // 'disabled' => false,
    // 'uploadURL' => "/users/" .mysqli_fetch_assoc($r)['username']. "/upload",
    // 'uploadDir' => "",
		// );

		$_SESSION['KCFINDER'] = array();
		$_SESSION['KCFINDER']['disabled'] = false; // Activate the uploader, Users to this page MUST be authenticated
		$_SESSION['KCFINDER']['uploadURL'] = "upload/".$_SESSION['username']; // Based on my second folder structure


		header('Location: ?page=default');

	}else{
		header('Location: ?page=login&success=false');
	}
}
?>
