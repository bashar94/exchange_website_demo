<nav class="navbar navbar-default navbar-fixed-top" role="navigation">
	<div class="container-fluid">
	    <!-- Brand and toggle get grouped for better mobile display -->
	    <div class="navbar-header">
	      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navPathshala" aria-expanded="false">
	        <span class="sr-only">Toggle navigation</span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	        <span class="icon-bar"></span>
	      </button>
	      <a class="navbar-brand" href="#">Pathshala</a>
	    </div>
	
	    <!-- Collect the nav links, forms, and other content for toggling -->
	    <div class="collapse navbar-collapse" id="navPathshala">
	      <ul class="nav navbar-nav">
	      	<?php //nav_main($dbc, $pageid); ?> <!-- function from template.php -->
	      	
	      	<li><a href="#">Dashboard</a></li>
	      	<li><a href="#">Pages</a></li>
	      	<li><a href="#">Users</a></li>
	      	<li><a href="#">Settings</a></li> 
	      </ul>
	      
	      <div class="pull-right">
		      <ul class="nav navbar-nav">
		      	<li class="dropdown">
		      		<a href="#" class="dropdown-toggle" data-toggle="dropdown"><?php echo $user['fullname']; ?><span class="caret"></span></a>
		      		
		      		<ul class="dropdown-menu">
		      			<li><a href="logout.php"><span class="glyphicon glyphicon-log-out"></span> Log out</a></li>		
		      		</ul>
		      	</li>
		      	
		      </ul>
	      </div>
	          
	    </div><!-- /.navbar-collapse -->
	 </div>  
	</nav>
