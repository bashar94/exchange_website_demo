<nav class="navbar navbar-inverse navbar-fixed-top center" role="navigation">
	<div class="container navbar-inner">


	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navPathshala" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>

	      <a class="navbar-brand" href="?page=default">An Exchange Website</a>



	      <!-- Mobile view navbar -->
	      <div class="hide-lg nav navbar-nav ">
	      <?php if(isset($_SESSION['username'])) { ?>
		     	<a class="nav-icon" href="?page=notification"><i class="fa fa-bell fa-fw" aria-hidden="true"></i><span class="badge badge-notify">3</span></a>
	         	<a class="nav-icon" href="#"><i class="fa fa-inbox fa-fw" aria-hidden="true"></i><span class="badge badge-notify">3</span></a>
	    <?php } else { ?>
		      <a class="nav-icon" href="?page=login"><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i></a>
	          <a  style="margin-right: 25px; margin-left: 25px;" class="nav-icon" href="?page=signup"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i></a>
	    <?php } ?>
	    	  <a class="nav-icon" data-toggle="collapse" data-target="#search" aria-expanded="false"><i class="glyphicon glyphicon-search"></i></a>
	       </div><!-- Mobile view navbar ends -->
	    </div>



	     <!-- collapsed navbar menu -->
	    <div class="collapse navbar-collapse navbar-left" id="navPathshala">

			<?php if(isset($_SESSION['username'])) { ?>
				<hr />
				<ul class="hide-lg nav navbar-nav">
					<li><a data-toggle="modal" data-target="#postModal"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>Post Ad</a></li>
					<li <?php if($pageid == $_SESSION['username']){ echo 'class="active"';} ?>><a href="?page=<?php echo $_SESSION['username'].'&profile=overview'; ?>"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i> Profile</a></li>
					<li <?php if($pageid == 'settings'){ echo 'class="active"';} ?>><a href="?page=settings&profile=profile"><i class="fa fa-cog fa-fw" aria-hidden="true"></i> Settings</a></li>
					<li><a href="logout.php"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Log out</a></li>
		      	</ul>
		      	<?php } ?>

		</div><!-- collapsed navbar menu ends-->



		<!-- Desktop view Navbar-->
		<div class="hide-ss collapse navbar-collapse navbar-right">
			<ul class="nav navbar-nav">

			<?php if(isset($_SESSION['username'])) { ?>
		        
		      	<li>
		      		<a onclick="showHideDiv('msg', 'notifi')"><i style="color: white" class="fa fa-inbox fa-lg" aria-hidden="true"></i><span class="badge badge-notify">3</span>

		      		</a>
		      		<div id="msg" class="notification">
							<div class="triangle-up"></div>
							<div class="notifi-header">
							<label style="float: left">Unreaded(3)</label>  <a href="#">New Message</a>
							</div>
							<hr style="margin-bottom:0; margin-top: 10px;" />
							<div class="notifi-body">

								<a href="">
									<div class="notification-one">
										<div class="col-sm-2">
											<img src="<?php echo $_SESSION['pp_url'];?>" class="img-rounded" width="30" height="30">
										</div>
										<div class="col-sm-10">
											<div><strong>Someone</strong></div>
											This is a Message. This is a Message.
										</div>
									</div>
								</a>
								<hr class="hr-notifi"/>

								<a href="">
									<div class="notification-one">
										<div class="col-sm-2">
											<img src="<?php echo $_SESSION['pp_url'];?>" class="img-rounded" width="30" height="30">
										</div>
										<div class="col-sm-10">
											<div><strong>Someone</strong></div>
											This is a Message. This is a Message.
										</div>
									</div>
								</a>
								<hr class="hr-notifi"/>





							</div>
							<hr style="margin-bottom: 5px; margin-top: 0px;" />
							<div style="text-align: center"><a href="?page=message">See All</a></div>
						</div>

		      	</li>



		      	<li class="dropdown">
		      		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><img src="<?php echo $_SESSION['pp_url'];?>" class="img-rounded" width="18" height="18"><strong> <?php echo $_SESSION['username']; ?> </strong><span class="caret"></span></a>

		      		<ul class="dropdown-menu">
		      			<li><a href="?page=<?php echo $_SESSION['username'].'&profile=overview'; ?>"><i class="fa fa-user-circle-o fa-fw" aria-hidden="true"></i> Profile</a></li>
		      			<li><a href="?page=settings&profile=profile"><i class="fa fa-cog fa-fw" aria-hidden="true"></i></span> Settings</a></li>
		      			<li><a href="logout.php"><i class="fa fa-sign-out fa-fw" aria-hidden="true"></i>Log out</a></li>
		      		</ul>
		      	</li>


		      <?php } else { ?>
		      	     <li>
		                <p class="navbar-btn" >
		                    <a href="?page=login" class="btn btn-success" ><i class="fa fa-sign-in fa-fw" aria-hidden="true"></i> Login</a>
		                    <a href="?page=signup" class="btn btn-info"><i class="fa fa-user-plus fa-fw" aria-hidden="true"></i> Sign Up</a>
		                </p>
	            	 </li>
	      <?php } ?>
	      </ul>


	   </div> <!-- Desktop view Navbar ends-->



	     <!-- Search box -->
	    <form class="navbar-form navbar-right collapse navbar-collapse" id="search">
	        <div class="form-group" style="display:inline;">
	          <div class="input-group">
	            <input type="text" class="form-control" placeholder="Search">
	            <div class="input-group-btn">
					<button class="btn btn-info" type="submit"><i class="glyphicon glyphicon-search"></i></button>
				</div>
	          </div>
	        </div>
      	</form><!-- Search box ends -->
      	
      	
      	<!-- Post Ad starts-->
      	<div class="hide-ss collapse navbar-collapse">
			<ul class="nav navbar-nav">

			<?php if(isset($_SESSION['username'])) { ?>
		        <li>
		        	<p class="navbar-btn" >
		            	<button type="button" class="btn btn-success" data-toggle="modal" data-target="#postModal"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i> Post Ad</button>
		            </p>
		        </li>
				
		      <?php } ?>
		      
		      </ul>
		  </div>
		<!-- Post Ad ends-->


	  </div><!-- /.container-fluid -->

	</nav>
	
	<div id="postModal" class="modal fade" role="dialog">
	  <div class="modal-dialog modal-width">
	
	    <!-- Modal content-->
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal">&times;</button>
	        <h4 class="modal-title">Post Ad</h4>
	      </div>
	      <div class="modal-body">
	      	<h4>Your Product</h4>
	      	
	      	<div class="row">
	      		<div class="col-md-6">
			        <div class="form-group">
				        <label>Title</label>
				        <input type="text" class="form-control" required>
					 </div>
					 
					 <div class="form-group">
				        <label>Description</label>
				        <textarea class="form-control" rows="3"  placeholder="Write something about your product."></textarea>
					 </div>
					 
					  <div class="col-xs-4 col-sm-4 col-md-4">
						<label>Catagory:</label>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8">					 
						<select class="form-control">
						    <option value="one">Electronics</option>
						    <option value="two">Education</option>
						  
						</select>
					</div>  
			
					 
				 </div>
				 <div class="col-md-6">
				 	<div class="form-group">
				        <label>Add Money? <small>(leave blank if no need of)</small></label>
				        <input type="text" class="form-control">
					 </div>
					 <hr />
				 	<strong>Upload Photo</strong>
				 	<form action="/action_page.php">
					  <input type="file" name="pic" accept="image/*">
					</form>
					<form action="/action_page.php">
					  <input type="file" name="pic" accept="image/*">
					</form>
					<form action="/action_page.php">
					  <input type="file" name="pic" accept="image/*">
					</form>
				 </div>
	        </div>
	        
	        <hr />
	        
	        <h4>Product you want to exchange</h4>
	        <div class="row">
	      		<div class="col-md-6">
			        <div class="form-group">
				        <label>Title</label>
				        <input type="text" class="form-control" required>
					</div>
					 
					<div class="form-group">
				        <label>Description</label>
				        <textarea class="form-control" rows="3"  placeholder="Write something about the product you want."></textarea>
					</div>
					
					
					<div class="col-xs-4 col-sm-4 col-md-4">
						<label>Catagory:</label>
					</div>
					<div class="col-xs-8 col-sm-8 col-md-8">					 
						<select class="form-control">
						    <option value="one">Electronics</option>
						    <option value="two">Education</option>
						  
						</select>
					</div>  
			
				 </div>
				 
				 <div class="col-md-6">
				 				 	
				 	<div class="form-group">
				        <label>Want Money? <small>(leave blank if no need of)</small></label>
				        <input type="text" class="form-control">
					 </div>
					 <hr />
					 
				 	<strong>Upload Photo</strong>
				 	<form action="/action_page.php">
					  <input type="file" name="pic" accept="image/*">
					</form>
					<form action="/action_page.php">
					  <input type="file" name="pic" accept="image/*">
					</form>
					<form action="/action_page.php">
					  <input type="file" name="pic" accept="image/*">
					</form>
				 </div>
	        </div>
	        
	      </div>
	      <div class="modal-footer">
	        <button type="submit" class="btn btn-success" data-dismiss="modal">Submit</button>
	      </div>
	    </div>
	
	  </div>
	</div>