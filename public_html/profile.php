<?php
$user = mysqli_fetch_assoc(data_user($dbc, $pageid));
?>

<div class="row profile">

	<?php include_once('template/sidebar.php'); ?>

	<div class="col-md-9">
    	<div class="profile-content">
			   <?php include_once('template/profile-body.php'); ?>
    	</div>
	</div>
</div>
