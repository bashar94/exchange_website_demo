<div class="col-md-3">
	<div class="profile-sidebar">
		
		<!-- user picture -->
		<div class="profile-userpic">
			<img src="<?php echo $user['pp_url']?>">
			<?php
			if(isset($_SESSION['username']) && $pageid == 'settings' && $_SESSION['username'] == $user['username']) { ?>
				
				<!-- profile pic upload button -->
				<div class="profile-userbuttons">
					<form method="POST" action="#" id="fileUp" enctype="multipart/form-data">
						<div style="height:0px;overflow:hidden">
	   						<input type="file" id="imgUp" name="image"  accept="image/*"/>
						</div>
						<button type="button" class="btn btn-success btn-file" onclick="chooseImg();"><i class="fa fa-upload" aria-hidden="true"></i> Upload</button>
					</form>
				</div>
				<!-- profile pic upload button end -->
			
		<?php } ?>
		</div>
		<!-- user picture ends -->
		
		<!-- user name and display info -->
		<?php
			if($pageid != 'settings'){
				echo '<div class="profile-usertitle">
					<div class="profile-usertitle-name">
						'.$user['fullname'].'
					</div>
					<div class="profile-usertitle-job">
						<h3><small>
						(@'.$user['username'].')
						</small><h3>
					</div>
				</div>';
			}?>
		<!-- user name and display info ends -->
		
		<?php
	    
	    if(isset($_SESSION['username']) && $pageid != 'settings' && $_SESSION['username'] != $user['username']) {  ?>
	    	
			<!-- buttons -->
			<div class="profile-userbuttons">
				<button type="button" class="btn btn-success btn-sm">Follow</button>
				<button type="button" class="btn btn-danger btn-sm">Message</button>
			</div>
			<!-- buttons end -->
			
		<?php } ?>
		
		<!-- menu -->
		<div class="profile-usermenu">
			<ul class="nav">
				<?php sidebar_menu($dbc, $pageid, $profileid); ?> 
			</ul>
		</div>
		<!-- menu ends -->
		
	</div>
</div>