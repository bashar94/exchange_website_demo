<?php


if($profileid == 'about'){

	include_once('template/about.php');

}else{ ?>
	<br />

	<div class="row">
		<div class ="about-page">

			<div class="col-sm-3 col-xs-6">
				
				<label>Date of Join: </label>
				<br />
				<label>Total Likes : </label>
				<br />
				<label>Total Dislikes: </label>
				<br />
				<label>Followers: </label>
				<br />
				<label>Rating: </label>
			</div>

			<div class="col-sm-6 col-xs-6">
				<label><?php echo mysqli_num_rows(any_table_data($dbc, 'question', 'user', $pageid)) ?></label>
				<br />
				<label><?php echo mysqli_num_rows(any_table_data($dbc, 'course', 'user', $pageid)) ?></label>
				<br />
				<label><?php echo date ("jS F Y", strtotime(mysqli_fetch_assoc(data_user($dbc, $pageid))['join_date'])); ?> </label>
				<br />
				<label><?php echo mysqli_num_rows(any_table_data($dbc, 'question', 'user', $pageid)) ?></label>
				<br />
				<label><?php echo mysqli_num_rows(any_table_data($dbc, 'course', 'user', $pageid)) ?></label>
				
			</div>
		</div>
	</div>
	<hr />

<?php } ?>
