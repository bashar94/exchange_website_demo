<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" integrity="sha384-1q8mTJOASx8j1Au+a5WDVnPi2lkFfwwEAa8hDDdjZlpLegxhjVME1fgjWPGmkzs7" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap-theme.min.css" integrity="sha384-fLW2N01lMqjakBkx3l/M9EahuwpSfeNvV63J5ezn3uZzapT0u7EYsXMjQV+0En5r" crossorigin="anonymous">

<!-- jQuery CSS -->
<link rel="stylesheet" href="https://code.jquery.com/ui/1.12.1/themes/smoothness/jquery-ui.css">

<style>

	html, body {
	    height: 100%;
	}

	body {
	    margin:0px;
	    padding: 0px;
	}

	.content{      /* navbar, body, footer all */
		height: auto;
	    margin: 0 auto -80px; /* footer height + space */
	    min-height: 100%;
	    padding: 0 0 50px; /* footer height + space */
	    box-sizing: border-box;
	    overflow: auto;
	}

	.main{
  		padding-top: 80px;
 	}

	.footer {
	    padding-top: 20px;
	    display: block;
	    margin-top: 20px; /* space between content and footer */
	    box-sizing: border-box;
	    position: relative;
	    width: 100%;
	    height: 60px;   /* Height of the footer */
	    background: #38393a;
	}

	a.about-page:hover{
		text-decoration: none;
		color: #54baff;
	}
	.about-page{
		color: #5e6a7c;
	}

	.counterpart{
		text-align: center;
	}

	.nav-tabs{
		margin-bottom: 20px;
	}



	.datename{
		float: right;
	}

	.btn-blue{
		background-color: #0084ff;
		color: #ffffff;
	}

	.badge-notify{    /*notification alert icon */
	   background: #f46242;
	   position:relative;
	   top: -10px;
	   left: -30px;
  }


  	.msg-body{
      height: 350px;
      overflow-y: auto;
       	/*background: #bcd6ff;*/
     }

     .notification-body{
     	position: relative;
     	height: 420px;
     }

     .msg-page{
      padding: 0px 10px 0px 10px;

	 }
	 .msg-sidebar{
	   	overflow-y: auto;
	   	height: 440px;
	 }

   .msg-input{
     	height:30px;
     	width: 100%;
   }

  .vr {
  		width: 1px; /* Line width */
      background-color: #c2c4c6; /* Line color */
      height: 520px; /* Override in-line if you want specific height. */
      float: left;
	 }


	 a.tag{
		 background-color: #337ab7;
		 color: #fff;
		 display: inline-block;
		 text-align:center;
		 padding-left:5px;
		 padding-right: 5px;
		 margin-top: 5px;
		 text-decoration: none;
	 }


	 
	/*inbox search field */
	.inner-addon {
    	position: relative;
	}

	/* style icon */
	.inner-addon .fa {
	  	position: absolute;
	  	padding: 10px;
	  	color: #adafb2;
	}

	/* align icon */
	.left-addon .fa  { left:  0px;}

	/* add padding  */
	.left-addon input  { padding-left:  30px; }
	/*inbox search field */

  	@-moz-document url-prefix() {  /* removes doted area in firefox */
	  a:focus {
	     outline: 0;
	  }
	}

  	@media screen and  (max-width: 767px){ /*mobile and tab view*/
  		.badge-notify{
		   background: #f46242;
		   position:relative;
		   top: -12px;
		   left: -33px;

  		}

  		.nav-icon {   /*navbar icons positioning */
		    float: left;
		    font-size: 18px;
		    color: #777;
		    padding-top: 5px;
		}

		a.nav-icon:hover{
			color: #54baff;
		}

    	/*hide in large screen but visible in medium and small*/
    	.hide-ss{
    		display: none;
    	}

    	.center.navbar .nav,
    	.center.navbar .nav > a {
        	float:none;
        	display:inline-block;
        	*display:inline; /* ie7 fix */
        	*zoom:1; /* hasLayout ie7 trigger */
        	vertical-align: top;

    	}
    	.center .navbar-inner {
        	text-align:center;
    	}


    	.profile-sidebar {  /*profile sidebar */
		  padding-top: 20px;
		  padding-bottom: 10px;
		  background: #E7EDF4;
		  position: relative;
		}
  	}

  	@media screen and (min-width: 768px){   /*desktop view*/
  		/*hide in smallar screen but visible in large*/
    	.hide-lg{
    		display: none;
    	}

    	/*about page right column*/
    	.mar-col {
        	margin-top: 70px;
    	}

    	/*search bar resizing */
    	.navbar-form {
    		width: 25%;
    	}

    	.profile-sidebar {   /*profile sidebar */
			padding-top: 20px;
			padding-bottom: 10px;
			background: #E7EDF4;
			height: 100%;
			width: 23%;
			position: fixed;
		}

		.triangle-up {
	    	position: relative;
	  	    margin: 0;
	    	box-sizing: border-box;
	    	background: #ffffff;
	    	box-shadow: 0px 3px 3px 0 rgba(0, 0, 0, 0.25);

		}
		.triangle-up::after {
		  	content: "";
		  	position: absolute;
		  	top: 0px;
		  	left: 95%;
		  	width: 0;
		  	height: 0;
		  	box-sizing: border-box;
		  	border: 6px solid black;
		  	border-color: transparent transparent #ffffff #ffffff;
		  	transform-origin: 0 0;
		  	transform: rotate(135deg);
		  	box-shadow: -1px 1px 0px 0 rgba(0, 0, 0, 0.25);
		}

		.notification{
		    position: absolute;
		    width: 430px;
		    height: 500px;
		    background-color: #ffffff;
		    top: 85%;
		   	right: 20%;
		    border-radius: 2%;
		    border: 1px solid rgba(100, 100, 100, .4);
			box-shadow: 0 3px 8px rgba(0, 0, 0, .25);
			display: none;
		}

		.notifi-header {
		  	clear: both;
		  	margin: 10px 15px 0px 15px;
		  	text-align: right;
		}

		.notifi-body{

			overflow-x: hidden;
			overflow-y: auto;
			/*width: 428px;
		    height: 435px;*/
		   	width: 100%;
		    height: 85%;
		    /*margin: 0px 0px 0px 10px;*/
		}

		.notification-one{
			min-height: 60px;
			padding: 5px;
			display: block;
			text-align: left;
			outline: none;
    		border: 0;

		}
		div.notification-one{
			text-decoration: none;
			background: #ffffff;
			color: #000000;
		}
		div.notification-one:hover{
			text-decoration: none;
			background: #edf3ff;
		}

		.hr-notifi{
			margin: 0em auto;
		}
		
		.modal-width{
	    /* new custom width */
		    width: 70%;
		    /* must be half of the width, minus scrollbar on the left (30px) */
		   margin-left: 15%;
	    
		}

  	} /* desktop view ends */

  	.help-title {
	  font-family: "Whitney SSm A", "Whitney SSm B", "Avenir", "Segoe UI", "Ubuntu", "Helvetica Neue", Helvetica, Arial, sans-serif;
	  color: #979faf;
	  font-size: 12px;
	  font-weight: 600;
	  margin-bottom: 15px;
	}


	/*signup and login form */
	#form {
  		padding-top: 50px;
	}

	#panelbg{
		background: #E7EDF4;
	}
	
	.feature_image {    
        max-height: 30%;
	}
	
	.feature_image img{      
	    max-height: 130px;
	    width: 160px;
	}
	
	




	/* ---------------- profile sidebar------------------ */

	/* Profile container */
	.profile {
	  margin: 20px 0;
	}

	/* Profile sidebar */


	.profile-userpic img {
	  float: none;
	  margin: 0 auto;
	  width: 50%;
	  height: 50%;
	  -webkit-border-radius: 50% !important;
	  -moz-border-radius: 50% !important;
	  border-radius: 50% !important;
	}

	.profile-usertitle {
	  text-align: center;
	  margin-top: 20px;
	}

	.profile-usertitle-name {
	  color: #5a7391;
	  font-size: 16px;
	  font-weight: 600;
	  /*margin-bottom: 7px;*/
	}

	.profile-usertitle-job {
	  font-family: "Whitney SSm A", "Whitney SSm B", "Avenir", "Segoe UI", "Ubuntu", "Helvetica Neue", Helvetica, Arial, sans-serif;
	  color: #979faf;
	  font-size: 12px;
	  font-weight: 600;
	  margin-top: -25px;
	}

	.profile-userbuttons {
	  text-align: center;
	  margin-top: 10px;
	}

	.profile-userbuttons .btn {
	  text-transform: uppercase;
	  font-size: 11px;
	  font-weight: 600;
	  padding: 6px 15px;
	  margin-right: 5px;
	}

	.profile-userbuttons .btn:last-child {
	  margin-right: 0px;
	}

	.profile-usermenu {
	  margin-top: 30px;
	}

	.profile-usermenu ul li {
	  border-bottom: 1px solid #f0f4f7;
	}

	.profile-usermenu ul li:last-child {
	  border-bottom: none;
	}

	.profile-usermenu ul li a {
	  color: #93a3b5;
	  font-size: 14px;
	  font-weight: 400;
	}

	.profile-usermenu ul li a i {
	  margin-right: 8px;
	  font-size: 14px;
	}

	.profile-usermenu ul li a:hover {
	  background-color: #fafcfd;
	  color: #5b9bd1;
	}

	.profile-usermenu ul li.active {
	  border-bottom: none;
	}

	.profile-usermenu ul li.active a {
	  color: #5b9bd1;
	  background-color: #f6f9fb;
	  border-left: 2px solid #5b9bd1;
	  margin-left: -2px;
	}

	/* Profile Content */
	.profile-content {
	  padding: 20px;
	  background: #f6f9fb;

	}

/*toggle button*/
	.onoffswitch {
	    position: relative; width: 55px;
	    -webkit-user-select:none; -moz-user-select:none; -ms-user-select: none;
	    margin-bottom: 30%;
	}
	.onoffswitch-checkbox {  /*hiding checkbox*/
	    display: none;

	}
	.onoffswitch-label {
	    display: block; overflow: hidden; cursor: pointer;
	    height: 20px; padding: 0; line-height: 20px;
	    border: 2px solid #FFFFFF; border-radius: 20px;
	    background-color: #9E9E9E;
	    transition: background-color 0.3s ease-in;

	}
	.onoffswitch-label:before {
	    content: "";
	    display: block; width: 20px; margin: 0px;
	    background: #FFFFFF;
	    position: absolute; top: 0; bottom: 0;
	    right: 33px;
	    border: 2px solid #42A5F5; border-radius: 20px;
	    transition: all 0.3s ease-in 0s;

	}
	.onoffswitch-checkbox:checked + .onoffswitch-label {
	    background-color: #42A5F5;

	}
	.onoffswitch-checkbox:checked + .onoffswitch-label, .onoffswitch-checkbox:checked + .onoffswitch-label:before {
	   border-color: #42A5F5;

	}
	.onoffswitch-checkbox:checked + .onoffswitch-label:before {
	    right: 0px;

	}
</style>
