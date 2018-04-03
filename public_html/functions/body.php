<?php

function body_content($dbc, $pageid){

	if($pageid == 'login'){
		return 'login.php';
	}elseif($pageid == 'signup'){
		return 'signup.php';
	}elseif(mysqli_num_rows(data_user($dbc, $pageid)) == 1){
		return 'profile.php';
	}elseif($pageid == 'settings'){
		return 'settings.php';
	}elseif($pageid == 'message'){
		return 'template/message.php';
	}elseif($pageid == 'notification'){
		return 'template/notification.php';
	}else{
		return 'default.php';
	}
}
?>
