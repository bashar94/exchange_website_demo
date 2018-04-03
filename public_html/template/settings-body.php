<?php
if($profileid == 'account'){ ?>	
	
	<br />
	
	<div class="row">
		<form action="" autocomplete="off" method="POST">
			<div class="col-sm-6 col-md-6">
				
				
				<div class="form-group">
			        <label>Your Username</label>
			        <p class="help-title">(This is how users will see you on Pathsala)<p>
			        <input type="text" class="form-control">
			    </div>
			    
			    <div class="form-group">
			        <label>Phone Number</label>
			        <p class="text-warning"><small>(Phone Number will never be shared and displayed to public)</small><p>
			        <input type="text" class="form-control">
			    </div>
			    
			    <div class="form-group">
			      <button type="submit" class="btn btn-primary">Change</button>
			  	</div>
			  	
			  	
			</div>
		</form>	
		    
		
		<div class="col-sm-12 col-md-12">
			<hr align="center" width="99%">
			<label><h3><Strong>Change Your Password</Strong></h3></label>	    
			
			<form class="form-horizontal" action="" autocomplete="off" method="POST">  
			  <p class="help-title">Enter your current password along with a new one to change it.</p>
			  
			  <div class="form-group">
			    <label class="col-sm-2 col-md-2 control-label">Current Password</label>
			    <div class="col-sm-6 col-md-6">
			      <input type="password" class="form-control" id="inputEmail3" placeholder="Current Password">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label class="col-sm-2 col-md-2 control-label">New Password</label>
			    <div class="col-sm-6 col-md-6">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="New Password">
			    </div>
			  </div>
			  
			  <div class="form-group">
			    <label class="col-sm-2 col-md-2 control-label">Confirm Password</label>
			    <div class="col-sm-6 col-md-6">
			      <input type="password" class="form-control" id="inputPassword3" placeholder="Confirm Password">
			    </div>
			  </div>
		   	
		   	  <div class="form-group">
			    <div class="col-sm-6 col-md-6  col-sm-offset-2 col-md-offset-2">
			      <button type="submit" class="btn btn-primary">Change</button>
			    </div>
			  </div>
			</form>
		</div>
	 	
	 	
	 	<div class="col-sm-12 col-md-12">
				    		 
			<hr align="center" width="99%">   
			
		    <div class="form-group">
		        <label><h3><Strong>Delete Account</Strong></h3></label>
		        <p class="text-danger"><em>Delete your account and all information related to your account. Please be aware that all data will be permanently lost if you delete your account.</em></p>
		        <button type="submit" class="btn btn-danger">Delete Account</button>
		    </div>
		</div>    	    
	</div> 
	
	
<?php }elseif($profileid == 'preferences'){ ?>
	
	<br />
	
	<label><h3><Strong>Account Privacy</Strong></h3></label>
	<p class="text-danger"><em>Privacy settings are only applicable for Bodlao users. Only Name, Location and Gender will be shown to public. </em></p>
	<hr />	
	<div class="row">
		<div class="col-sm-8 col-xs-8">
			<p><label>Show E-mail Address</label></p>
			<br />
			<p><label>Show Birthdate</label></p>
			<br />
			<p><label>Show Phone Number</label></p>
			<br />
			<p><label>Show Work Info</label></p>
			
		</div>
		<div class="col-sm-1 col-xs-1">
			<div class="onoffswitch">
			    <input type="checkbox" name="showmail" class="onoffswitch-checkbox" id="togglemail">
			    <label class="onoffswitch-label" for="togglemail"></label>
			</div>
			<br />
			
			<div class="onoffswitch">
			    <input type="checkbox" name="showbirth" class="onoffswitch-checkbox" id="togglebirth">
			    <label class="onoffswitch-label" for="togglebirth"></label>
			</div>
			
			<br />
			<div class="onoffswitch">
			    <input type="checkbox" name="showphone" class="onoffswitch-checkbox" id="togglephone">
			    <label class="onoffswitch-label" for="togglephone"></label>
			</div>
			<br />
			
			<div class="onoffswitch">
			    <input type="checkbox" name="showwork" class="onoffswitch-checkbox" id="togglework">
			    <label class="onoffswitch-label" for="togglework"></label>
			</div>
			
	
		</div>
	</div>
	
	
	<hr />
	
	<label><h3><Strong>Email Preferences</Strong></h3></label>
	<p><label>You will get,</label></p>
	<div class="row form-group">
        
      	<div class="radio col-md-offset-1">
		  <label><input type="radio" name="optradio">All notifications, except the ones you unsubscribe from</label>
		</div>
		
		<div class="radio col-md-offset-1">
		  <label><input type="radio" name="optradio">Notifications only from the people you follow</label>
		</div>
		
		<div class="radio col-md-offset-1">
		  <label><input type="radio" name="optradio">Only notifications about your account, security and privacy</label>
		</div>
    </div>
	
	<div class="form-group">
		      <button type="submit" class="btn btn-primary">Save</button>
		  	</div>
<?php } else{ ?>
	<br />
	
	<div class="row">
		<form action="" autocomplete="off" method="POST">
			<div class="col-sm-6">
				
				
				<div class="form-group">
			        <label>Full Name</label>
			        <input type="text" class="form-control" placeholder="Full Name">
			    </div>
		    
		  
			    <div class="form-group">
			        <label>Birth Date</label>
			        <input type="date"  class="form-control" placeholder="Birth Date">
			    </div>
		  
		    
			    <div class="form-group">
			        <label> Gender </label>
			      	<div class="radio">
					  <label><input type="radio" name="optradio"><i class="fa fa-male fa-fw" aria-hidden="true"></i>Male</label>
					</div>
					<div class="radio">
					  <label><input type="radio" name="optradio"><i class="fa fa-female fa-fw" aria-hidden="true"></i>Female</label>
					</div>
			    </div>
		    
		    	<hr align="center" width="90%">
		    			    
			   
			    <div class="form-group">
			        <label>Work</label>
			        <input type="text" class="form-control" placeholder="Where do you work?">
			    </div>
			 
			    <div class="form-group">
			        <label>City</label>
			        <input type="text" class="form-control" placeholder="Where do you live?">
			    </div>
		    
			  <hr align="center" width="90%">
			    
			    
			    <div class="form-group">
			        <label>Website</label>
			        <input type="url" class="form-control" placeholder="http://www.yourwebsite.com">
			    </div>
			    
			    <div class="form-group">
				  <label>Bio</label>
				  <textarea class="form-control" rows="3"  placeholder="Write something about yourself."></textarea>
				</div>

			    <br />
			    
			    <button type="submit" class="btn btn-primary">Submit</button>
			 </div> 
		</form>
	</div>
	
<?php } ?>
