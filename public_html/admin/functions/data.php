<?php
function data_page($dbc, $id){
	
	$q = "SELECT * FROM pages WHERE id = $id";
	$r = mysqli_query($dbc, $q);
	
	$data =  mysqli_fetch_assoc($r);
	
	return $data;
}

function data_user($dbc, $id){
	
	$q = "SELECT * FROM users WHERE email = '$id'";
	$r = mysqli_query($dbc, $q);
	
	$data =  mysqli_fetch_assoc($r);
	
	return $data;
}


?>