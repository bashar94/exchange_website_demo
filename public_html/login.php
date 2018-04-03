<div id="form" class="container">
    <div class="row">
		<div class="col-sm-12 col-md-6 col-md-offset-3">
			<div class="panel panel-success">
				<div class="panel-body">

    				<div class="row">
    					
	    				<div class="col-sm-12 col-md-6 col-md-offset-3 text-center">
	    					<h3>Login or <a href="?page=signup">Sign up</a></h3>
	    					
	    				</div>
	    					
	    				<hr align="center" width="90%">
	    				
	    				<!-- sign in with Social Acoounts -->
	    				<div class="col-sm-12 col-md-4 col-md-offset-2">
	            			<a href="#" class="btn btn-lg btn-danger btn-block"><i class="fa fa-google-plus pull-left"></i> Google</a>
						</div>
						 
						 <span class="help-block"></span>
						 
	          			<div class="col-sm-12 col-md-4">
	            			<a href="#" class="btn btn-lg btn-primary btn-block"><i class="fa fa-facebook pull-left"></i> Facebook</a>
	            			<span class="help-block"></span>
	            			
	          			</div> 
	          			<!-- sign in with Social Acoounts -->
	          			
						<hr align="center" width="90%">
						
						<div class="col-sm-12 col-md-10 col-md-offset-1">
							
							<span class="help-block text-center">OR</span>
							
							<?php 
							if(isset($_GET['success']) && $_GET['success'] == 'false'){ ?>
								<div class="alert alert-danger alert-dismissible">
								    <a href="#" class="close" data-dismiss="alert" aria-label="close">&times;</a>
								    The email or password is incorrect.
								</div>
							<?php } ?>
							 	
						    <form action="" autocomplete="off" method="POST">
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-user"></i></span>
									<input type="text" class="form-control" name="username" placeholder="Username or email">
								</div>
								
								<span class="help-block"></span>
													
								<div class="input-group">
									<span class="input-group-addon"><i class="fa fa-lock"></i></span>
									<input  type="password" class="form-control" name="password" placeholder="Password">
								</div>
								
								<span class="help-block"></span>
								
								<div class="checkbox">
								    <label><input type="checkbox"> Remember me</label>
								  </div>
			                    
			
								<button class="btn btn-lg btn-primary btn-block" type="submit">Login</button>
								
								<span class="help-block"></span>
								
							</form>
						</div>
						<hr align="center" width="90%">
						
						<div class="col-sm-12 col-md-10 col-md-offset-1">
							<p><a href="#">Forgot password?</a></p>
		    				</div> 
					</div>
				</div>
			</div>
		</div>
	</div>
</div>