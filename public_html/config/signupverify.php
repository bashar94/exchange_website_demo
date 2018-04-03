<?php

if(isset($_SESSION['username'])){
	header('Location: ?page=default');
}

if($_POST){
	
	#creating username automatically using email address
	$arr = explode("@", $_POST['email'], 2);
	$firstUsername = $arr[0];

	#checking if the username already exists
	$r = data_user($dbc, $firstUsername); 	#function/data.php

	if(mysqli_num_rows($r) == 1){

		$firstUsername = $firstUsername.mysqli_fetch_assoc($r)['id'];
	}

	#inserting new user data
	$q = "INSERT INTO users (fullname, email, password, username) VALUES('$_POST[fullname]', '$_POST[email]', SHA1('$_POST[password]'), '$firstUsername')";
	$r = mysqli_query($dbc, $q);

}
?>
