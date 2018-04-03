<?php

function data_user($dbc, $pageid){        # function to get data from 'users' table

	$q = "SELECT * FROM users WHERE username = '$pageid'";	#used in: template/profile-body.php,
	$r = mysqli_query($dbc, $q);

	return $r;
}

function any_table_data($dbc, $table, $vn, $value){        # function to get data from any  table

	$q = "SELECT * FROM ".$table." WHERE ".$vn." = '$value'";  #used in: template/profile-body.php,
	$r = mysqli_query($dbc, $q);

	return $r;
}

function all_data_table($dbc, $table){        # function to get all data from a table

	$q = "SELECT * FROM ".$table;  #used in: template/profile-body.php,
	$r = mysqli_query($dbc, $q);

	return $r;
}
?>
