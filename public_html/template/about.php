<div class="row">
	<div class="panel panel-default">
		<div class="panel-body">
			<div class="col-sm-6">
					
				<h3><?php echo $user['fullname']; $checkBr = false;?></h3>
				<br/>
				
				<?php if($user['work'] != NULL){ $checkBr = true; ?>
				<h5><a class="about-page" href="#"><i class="fa fa-briefcase fa-fw" aria-hidden="true"></i>  <?php echo $user['work']; ?></a></h4>
				<?php } if($user['location'] != NULL){ $checkBr = true; ?>
				<h5><a class="about-page" href="#"><i class="fa fa-map-marker fa-fw" aria-hidden="true"></i>  <?php echo $user['location']; ?></a></h4>
				<?php } if($user['gender'] != NULL){ $checkBr = true; ?>
				<h5 class="about-page"><i class="fa fa-venus-mars fa-fw" aria-hidden="true"></i>  <?php echo $user['gender']; ?></h4>
				<?php } if($checkBr){ ?>
					<br />
				<?php } ?>
				
				
				<h5 class="about-page"><strong>Bio :</strong></h5>
							
				<blockquote class="blockquote">
				  <p class="mb-0"><?php echo $user['bio']; ?></p>
				</blockquote>
			</div>
					
			<div class="col-sm-6 mar-col">		
					<!-- <div style="border-left:1px solid #000;height:150px"></div> -->
				<?php
				if(isset($_SESSION['username']) && $_SESSION['username'] == $pageid){ 
					if($user['phone'] != NULL){ ?>
					<h5><a class="about-page" href="#"><i class="fa fa-phone fa-fw" aria-hidden="true"></i> <?php echo $user['phone']; ?></a></h4>
					<?php } ?>
					<h5><a class="about-page" href="#"><i class="fa fa-at fa-fw" aria-hidden="true"></i> <?php echo $user['email']; ?></a></h4>
					<?php if($user['birthdate'] != NULL){ ?>
					<h5 class="about-page"><i class="fa fa-birthday-cake fa-fw" aria-hidden="true"></i>  <?php echo date ("jS F Y", strtotime($user['birthdate'])); ?></h4>
				<?php }
				} ?>
			</div>
		</div>
	</div>
</div>
























