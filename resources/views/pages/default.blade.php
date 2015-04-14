<!DOCTYPE html>
<html lang="en">
	<head>
    	<meta charset="utf-8">
	    <meta http-equiv="X-UA-Compatible" content="IE=edge">
	    <meta name="viewport" content="width=device-width, initial-scale=1">
	    <meta name="description" content="Real Admin - Bootstrap Admin Template">
		<meta name="author" content="Łukasz Holeczek">
		<meta name="keyword" content="Real, Admin, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
	    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="assets/ico/apple-touch-icon-144-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="114x114" href="assets/ico/apple-touch-icon-114-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="assets/ico/apple-touch-icon-72-precomposed.png">
		<link rel="apple-touch-icon-precomposed" sizes="57x57" href="assets/ico/apple-touch-icon-57-precomposed.png">
		<link rel="shortcut icon" href="assets/ico/favicon.png">

	    <title>Real Admin - Bootstrap Admin Template</title>

	    <!-- Bootstrap core CSS -->
	    <link href="assets/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-style">
	
		<!-- Remove following comment to add Right to Left Support or add class rtl to body -->
		<!-- <link href="assets/css/bootstrap-rtl.min.css" rel="stylesheet"> -->
		
		<link href="assets/css/jquery.mmenu.css" rel="stylesheet">
		<link href="assets/css/simple-line-icons.css" rel="stylesheet">
		<link href="assets/css/font-awesome.min.css" rel="stylesheet">
		
		<!-- page css files -->
		<link href="assets/css/climacons-font.css" rel="stylesheet">
		<link href="assets/plugins/jquery-ui/css/jquery-ui-1.10.4.min.css" rel="stylesheet">
		<link href="assets/plugins/fullcalendar/css/fullcalendar.css" rel="stylesheet">
		<link href="assets/plugins/morris/css/morris.css" rel="stylesheet">
		<link href="assets/plugins/jvectormap/css/jquery-jvectormap-1.2.2.css" rel="stylesheet">
		<link href="assets/plugins/daterangepicker/css/daterangepicker-bs3.css" rel="stylesheet">

	    <!-- Custom styles for this template -->
	    <link href="assets/css/style.min.css" rel="stylesheet" id="main-style">
		<link href="assets/css/add-ons.min.css" rel="stylesheet">
				
		<!-- Remove following comment to add Right to Left Support or add class rtl to body -->
		<!-- <link href="assets/css/style.rtl.min.css" rel="stylesheet"> -->

	    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	    <!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
	    <![endif]-->
	</head>
	
	
	<!-- BODY options, add following classes to body to change options

		1. 'sidebar-minified'     - Switch sidebar to minified version (width 50px)
		2. 'sidebar-hidden'		  - Hide sidebar
		3. 'rtl'				  - Switch to Right to Left Mode
		4. 'container'			  - Boxed layout
		5. 'static-sidebar'		  - Static Sidebar
		6. 'static-header'		  - Static Header
	-->
	
	<body class="sidebar-minified">
		
		<!-- start: Header -->
		<div class="navbar" role="navigation">
			<div class="navbar-header">
				<a class="navbar-brand" href="2nd-level.html#"><i class="icon-rocket"></i> <span>myOrganizer</span></a>
			</div>
			<ul class="nav navbar-nav navbar-actions navbar-left">
				<li class="visible-md visible-lg"><a href="2nd-level.html#" id="main-menu-toggle"><i class="fa fa-bars"></i></a></li>
				<li class="visible-xs visible-sm"><a href="2nd-level.html#" id="sidebar-menu"><i class="fa fa-bars"></i></a></li>
			</ul>
			<form class="navbar-form navbar-left">
				<i class="fa fa-search"></i>
				<input type="text" class="form-control" placeholder="Are you looking for something ?">
			</form>
	        <ul class="nav navbar-nav navbar-right visible-md visible-lg">
				<li><button class="btn btn-default">Help</button></li>
				<li><button class="btn btn-success">Launch</button></li>
				<li><span class="timer"><i class="icon-clock"></i> <span id="clock"><!-- JavaScript clock will be displayed here, if you want to remove clock delete parent <li> --></span></span></li>
				<li class="dropdown visible-md visible-lg">
	        		<a href="2nd-level.html#" class="dropdown-toggle" data-toggle="dropdown"><img src="assets/ico/flags/USA.png" style="height:18px; margin-top:-4px;"></a>
	        		<ul class="dropdown-menu">
						<li><a href="2nd-level.html#"><img src="assets/ico/flags/USA.png" style="height:18px; margin-top:-2px;"> US</a></li>
						<li><a href="2nd-level.html#"><img src="assets/ico/flags/Spain.png" style="height:18px; margin-top:-2px;"> Spanish</a></li>
						<li><a href="2nd-level.html#"><img src="assets/ico/flags/Germany.png" style="height:18px; margin-top:-2px;"> German</a></li>
						<li><a href="2nd-level.html#"><img src="assets/ico/flags/Poland.png" style="height:18px; margin-top:-2px;"> Polish</a></li>	
	        		</ul>
	      		</li>
				<li class="dropdown visible-md visible-lg">
	        		<a href="2nd-level.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-envelope-letter"></i><span class="badge">4</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header">
							<strong>Messages</strong>
							<div class="progress thin">
							  <div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
							    <span class="sr-only">40% Complete (success)</span>
							  </div>
							</div>
						</li>
						<li class="avatar">
							<a href="2nd-level.html#">
								<img class="avatar" src="assets/img/avatar.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="2nd-level.html#">
								<img class="avatar" src="assets/img/avatar.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
								<span class="label label-info">NEW</span>
							</a>
						</li>
						<li class="avatar">
							<a href="2nd-level.html#">
								<img class="avatar" src="assets/img/avatar.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="2nd-level.html#">
								<img class="avatar" src="assets/img/avatar.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="2nd-level.html#">
								<img class="avatar" src="assets/img/avatar.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="avatar">
							<a href="2nd-level.html#">
								<img class="avatar" src="assets/img/avatar.jpg">
								<div>New message</div>
								<small>1 minute ago</small>
							</a>
						</li>
						<li class="dropdown-menu-footer text-center">
							<a href="2nd-level.html#">View all messages</a>
						</li>	
	        		</ul>
	      		</li>
				<li><a href="2nd-level.html#"><i class="icon-speech"></i></a></li>
				<li class="dropdown visible-md visible-lg">
	        		<a href="2nd-level.html#" class="dropdown-toggle" data-toggle="dropdown"><i class="icon-settings"></i><span class="badge">!</span></a>
	        		<ul class="dropdown-menu">
						<li class="dropdown-menu-header text-center">
							<strong>Account</strong>
						</li>
						<li><a href="2nd-level.html#"><i class="fa fa-bell-o"></i> Updates <span class="label label-info">42</span></a></li>
						<li><a href="2nd-level.html#"><i class="fa fa-envelope-o"></i> Messages <span class="label label-success">42</span></a></li>
						<li><a href="2nd-level.html#"><i class="fa fa-tasks"></i> Tasks <span class="label label-danger">42</span></a></li>
						<li><a href="2nd-level.html#"><i class="fa fa-comments"></i> Comments <span class="label label-warning">42</span></a></li>
						<li class="dropdown-menu-header text-center">
							<strong>Settings</strong>
						</li>
						<li><a href="2nd-level.html#"><i class="fa fa-user"></i> Profile</a></li>
						<li><a href="2nd-level.html#"><i class="fa fa-wrench"></i> Settings</a></li>
						<li><a href="2nd-level.html#"><i class="fa fa-usd"></i> Payments <span class="label label-default">42</span></a></li>
						<li><a href="2nd-level.html#"><i class="fa fa-file"></i> Projects <span class="label label-primary">42</span></a></li>
						<li class="divider"></li>
						<li><a href="2nd-level.html#"><i class="fa fa-shield"></i> Lock Profile</a></li>
						<li><a href="2nd-level.html#"><i class="fa fa-lock"></i> Logout</a></li>	
	        		</ul>
	      		</li>
			</ul>
		</div>
		<!-- end: Header -->
		
		
				
		<!-- start: Main Menu -->
		<div class="sidebar">

			<div class="sidebar-collapse">

				<div class="sidebar-header">

					<img src="assets/img/avatar9.jpg">

					<h2>John Doe</h2>
					<h3>john@doe.com <a href="2nd-level.html#"><i class="fa fa-chevron-down"></i></a></h3>

				</div>

				<div class="sidebar-menu">	
					<ul class="nav nav-sidebar">

						<li><a href="index.html"><i class="icon-speedometer"></i><span class="text"> Dashboard<span class="label label-info">NEW</span></span></a></li>	

						<li>
							<a href="2nd-level.html#"><i class="icon-magic-wand"></i><span class="text"> UI Features</span> <span class="indicator"></span></a>
							<ul>
								<li><a href="ui-sliders-progress.html"><i class="icon-magic-wand"></i><span class="text"> Sliders</span></a></li>
								<li><a href="ui-nestable-list.html"><i class="icon-magic-wand"></i><span class="text"> Nestable Lists</span></a></li>
								<li><a href="ui-elements.html"><i class="icon-magic-wand"></i><span class="text"> Elements</span></a></li>
								<li><a href="ui-panels.html"><i class="icon-magic-wand"></i><span class="text"> Panels <span class="label label-info">NEW</span></span></a></li>
								<li><a href="ui-buttons.html"><i class="icon-magic-wand"></i><span class="text"> Buttons <span class="label label-warning">NEW</span></span></a></li>
								<li><a href="ui-modals.html"><i class="icon-magic-wand"></i><span class="text"> Modals <span class="label label-info">NEW</span></span></a></li>
								<li><a href="ui-notifications.html"><i class="icon-magic-wand"></i><span class="text"> Notifications <span class="label label-info">NEW</span></span></a></li>
							</ul>
							</li>
						<li><a href="widgets.html"><i class="icon-calculator"></i><span class="text"> Widgets</span></a></li>

						<li>
							<a href="2nd-level.html#"><i class="icon-book-open"></i><span class="text"> Example Pages</span> <span class="indicator"></span></a>
							<ul>
								<li><a href="page-activity.html"><i class="icon-like"></i><span class="text"> Activity</span></a></li>
								<li>
									<a href="2nd-level.html#"><i class="icon-envelope"></i><span class="text"> Mail</span> <span class="indicator"></span></a>
									<ul>
										<li><a href="page-inbox.html"><i class="icon-envelope"></i><span class="text"> Inbox View</span></a></li>
										<li><a href="page-inbox-message.html"><i class="icon-envelope"></i><span class="text"> Message View</span></a></li>
										<li><a href="page-inbox-compose.html"><i class="icon-envelope"></i><span class="text"> Compose</span></a></li>

									</ul>
								</li>
								<li><a href="page-invoice.html"><i class="icon-credit-card"></i><span class="text"> Invoice</span></a></li>
								<li><a href="page-todo.html"><i class="icon-list"></i><span class="text"> ToDo &amp; Timeline</span></a></li>
								<li><a href="page-profile.html"><i class="icon-user-following"></i><span class="text"> Profile</span></a></li>
								<li><a href="page-pricing-tables.html"><i class="icon-basket"></i><span class="text"> Pricing Tables</span></a></li>
								<li><a href="page-404.html" target="_top"><i class="icon-link"></i><span class="text"> 404</span></a></li>
								<li><a href="page-500.html" target="_top"><i class="icon-link"></i><span class="text"> 500</span></a></li>
								<li><a href="page-lockscreen.html" target="_top"><i class="icon-lock"></i><span class="text"> LockScreen</span></a></li>
								<li><a href="page-lockscreen2.html" target="_top"><i class="icon-lock"></i><span class="text"> LockScreen2</span></a></li>
								<li><a href="page-login.html" target="_top"><i class="icon-login"></i><span class="text"> Login <span class="label label-danger">NEW</span></span></a></li>
								<li><a href="page-register.html" target="_top"><i class="icon-logout"></i><span class="text"> Register <span class="label label-success">NEW</span></span></a></li>
								<li><a href="page-login.html" target="_top"><i class="icon-login"></i><span class="text"> Login Alt <span class="label label-danger">NEW</span></span></a></li>
								<li><a href="page-register.html" target="_top"><i class="icon-logout"></i><span class="text"> Register Alt <span class="label label-success">NEW</span></span></a></li>
								<li><a href="page-blank.html"><i class="icon-docs"></i><span class="text"> Blank Page</span></a></li>
							</ul>	
						</li>
						<li>
							<a href="2nd-level.html#"><i class="icon-note"></i><span class="text"> Forms</span> <span class="indicator"></span></a>
							<ul>
								<li><a href="form-elements.html"><i class="icon-note"></i><span class="text"> Form elements</span></a></li>
								<li><a href="form-wizard.html"><i class="icon-note"></i><span class="text"> Wizard</span></a></li>
								<li><a href="form-dropzone.html"><i class="icon-note"></i><span class="text"> Dropzone Upload</span></a></li>
								<li><a href="form-x-editable.html"><i class="icon-note"></i><span class="text"> X-editable</span></a></li>
							</ul>
						</li>
						<li>
							<a href="2nd-level.html#"><i class="icon-bar-chart"></i><span class="text"> Charts</span> <span class="indicator"></span></a>
							<ul>
								<li><a href="charts-flot.html"><i class="icon-bar-chart"></i><span class="text"> Flot Charts</span></a></li>
								<li><a href="charts-xcharts.html"><i class="icon-bar-chart"></i><span class="text"> xCharts</span></a></li>
								<li><a href="charts-others.html"><i class="icon-bar-chart"></i><span class="text"> Other</span></a></li>
							</ul>

						</li>
						<li><a href="typography.html"><i class="icon-pencil"></i><span class="text"> Typography</span></a></li>

						<li><a href="gallery.html"><i class="icon-picture"></i><span class="text"> Gallery</span></a></li>
						<li><a href="table.html"><i class="icon-grid"></i><span class="text"> Tables</span></a></li>
						<li><a href="calendar.html"><i class="icon-calendar"></i><span class="text"> Calendar</span></a></li>
						<li>
							<a href="2nd-level.html#"><i class="icon-star"></i><span class="text"> Icons</span> <span class="indicator"></span></a>
							<ul>
								<li><a href="icons-halflings.html"><i class="icon-star"></i><span class="text"> Halflings</span></a></li>
								<li><a href="icons-glyphicons-pro.html"><i class="icon-star"></i><span class="text"> Glyphicons PRO</span></a></li>
								<li><a href="icons-filetypes.html"><i class="icon-star"></i><span class="text"> Filetypes</span></a></li>
								<li><a href="icons-social.html"><i class="icon-star"></i><span class="text"> Social</span></a></li>
								<li><a href="icons-font-awesome.html"><i class="icon-star"></i><span class="text"> Font Awesome</span></a></li>
								<li><a href="icons-climacons.html"><i class="icon-star"></i><span class="text"> Climacons</span></a></li>
								<li><a href="icons-simple-line-icons.html"><i class="icon-star"></i><span class="text"> Simple Line Icons</span></a></li>
							</ul>
						</li>
						<li>
							<a href="2nd-level.html#"><i class="icon-folder-alt"></i><span class="text"> 4 Level Menu</span> <span class="indicator"></span></a>
							<ul>
								<li><a href="2nd-level.html"><i class="icon-folder"></i><span class="text"> 2nd Level</span></a></li>
								<li>
									<a href="2nd-level.html#"><i class="icon-folder-alt"></i><span class="text"> 2nd Level</span> <span class="indicator"></span></a>
									<ul>
										<li><a href="3rd-level.html"><i class="icon-folder"></i><span class="text"> 3rd Level</span></a></li>
										<li>
											<a href="2nd-level.html#"><i class="icon-folder-alt"></i><span class="text"> 3rd Level</span> <span class="indicator"></span></a>
											<ul>
												<li>
													<a href="4th-level.html"><i class="icon-folder"></i><span class="text"> 4th Level</span></a>
												</li>
											</ul>
										</li>
										<li>
											<a href="2nd-level.html#"><i class="icon-folder-alt"></i><span class="text"> 3rd Level</span> <span class="indicator"></span></a>
											<ul>
												<li>
													<a href="4th-level2.html"><i class="icon-folder"></i><span class="text"> 4th Level</span></a>
												</li>
											</ul>
										</li>
									</ul>	
								</li>
							</ul>
						</li>
						<li>
							<a href="http://bootstrapmaster.com/live/real/" target="_top"><i class="icon-reload"></i><span class="text"> AJAX Version<span class="label label-warning">FEATURE</span></span></a>
						</li>	
					</ul>
				</div>					
			</div>
			<div class="sidebar-footer">
				<ul class="sidebar-actions">
					<li class="action">
						<div class="btn-group dropup">
						  	<button type="button" class="dropdown-toggle" data-toggle="dropdown">
						    	<i class="icon-speedometer"></i><span>Infrastructure</span>
						    	<span class="sr-only">Toggle Dropdown</span>
						  	</button>
						  	<ul class="dropdown-menu" role="menu">
								<li class="header">Infrastructure <i class="icon-settings"></i></li>
						    	<li>
									<div class="title">Memory<span>2GB of 8GB</span></div>
									<div class="progress">
										<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100" style="width: 25%"></div>
									</div>			
								</li>
								<li>
									<div class="title">HDD<span>750GB of 1TB</span></div>
									<div class="progress">
									  	<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100" style="width: 75%"></div>
									</div>
								</li>
								<li>
									<div class="title">SSD<span>300GB of 1TB</span></div>
									<div class="progress">
								  		<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="30" aria-valuemin="0" aria-valuemax="100" style="width: 30%"></div>
									</div>			
								</li>
								<li>
									<div class="title">Bandwidth<span>50TB of 50TB</span></div>
									<div class="progress">
								  		<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100" style="width: 100%"></div>
									</div>
								</li>
							</ul>
						</div>
					</li>
					<li class="action">
						<div class="btn-group dropup">
						  	<button type="button" class="dropdown-toggle" data-toggle="dropdown">
						    	<i class="icon-list"></i><span>Menu</span>
						    	<span class="sr-only">Toggle Dropdown</span>
						  	</button>
						  	<ul class="dropdown-menu" role="menu">
						    	<li><a href="2nd-level.html#">Action</a></li>
					          	<li><a href="2nd-level.html#">Another action</a></li>
					          	<li><a href="2nd-level.html#">Something else here</a></li>
					          	<li class="divider"></li>
					          	<li><a href="2nd-level.html#">Separated link</a></li>
						  	</ul>
						</div>
					</li>
					<li class="action">
						<div class="btn-group dropup">
						  	<button type="button" class="dropdown-toggle" data-toggle="dropdown">
						    	<i class="icon-users"></i><span>Contacts</span>
						    	<span class="sr-only">Toggle Dropdown</span>
						  	</button>
						  	<ul class="dropdown-menu" role="menu">
						    	<li class="header">Contacts <i class="icon-settings"></i></li>
					          	<li><a href="2nd-level.html#"><span class="status status-success"></span> Anton Phunihel</a></li>
					          	<li><a href="2nd-level.html#"><span class="status status-success"></span> Alphonse Ivo</a></li>
					          	<li><a href="2nd-level.html#"><span class="status status-success"></span> Thancmar Theophanes</a></li>
								<li><a href="2nd-level.html#"><span class="status status-warning"></span> Walerian Khwaja</a></li>
								<li><a href="2nd-level.html#"><span class="status status-warning"></span> Clemens Janko</a></li>
								<li><a href="2nd-level.html#"><span class="status status-warning"></span> Chidubem Gottlob</a></li>
								<li><a href="2nd-level.html#"><span class="status status-danger"></span> Hristofor Sergio</a></li>
								<li><a href="2nd-level.html#"><span class="status status-danger"></span> Tadhg Griogair</a></li>
								<li><a href="2nd-level.html#"><span class="status status-danger"></span> Pollux Beaumont</a></li>
								<li><a href="2nd-level.html#"><span class="status status-danger"></span> Adam Alister</a></li>
								<li><a href="2nd-level.html#"><span class="status status-danger"></span> Carlito Roffe</a></li>
						  	</ul>
						</div>
					</li>
				</ul>

				<ul class="sidebar-terms">
					<li><a href="2nd-level.html#">Terms</a></li>
					<li><a href="2nd-level.html#">Privacy</a></li>
					<li><a href="2nd-level.html#">Help</a></li>
					<li><a href="2nd-level.html#">About</a></li>
				</ul>	

			</div>	
		</div>
		<!-- end: Main Menu -->

		<!-- start: Content -->
		<div class="main">
			
			 @yield('content')

			

				
		</div>
		<!-- end: Content -->
		
		
		<footer>

			<div class="row">

				<div class="col-sm-5">
					&copy; 2015 creativeLabs. <a href="http://bootstrapmaster.com">Admin Templates</a> by BootstrapMaster
				</div><!--/.col-->

				<div class="col-sm-7 text-right">
					Powered by: <a href="http://bootstrapmaster.com/demo/real/" alt="Bootstrap Admin Templates">Real Admin</a> | Based on Bootstrap 3.3.2 | Built with brix.io <a href="http://brix.io" alt="Brix.io - Bootstrap Builder">Brix.io</a>
				</div><!--/.col-->	

			</div><!--/.row-->	

		</footer>
		
				<div class="modal fade" id="myModal">
			<div class="modal-dialog">
				<div class="modal-content">
					<div class="modal-header">
						<button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
						<h4 class="modal-title">Modal title</h4>
					</div>
					<div class="modal-body">
						<p>Here settings can be configured...</p>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
						<button type="button" class="btn btn-primary">Save changes</button>
					</div>
				</div><!-- /.modal-content -->
			</div><!-- /.modal-dialog -->
		</div><!-- /.modal -->
		
		<!-- start: JavaScript-->
		<!--[if !IE]>-->

				<script src="assets/js/jquery-2.1.1.min.js"></script>

		<!--<![endif]-->

		<!--[if IE]>

			<script src="assets/js/jquery-1.11.1.min.js"></script>

		<![endif]-->

		<!--[if !IE]>-->

			<script type="text/javascript">
				window.jQuery || document.write("<script src='assets/js/jquery-2.1.1.min.js'>"+"<"+"/script>");
			</script>

		<!--<![endif]-->

		<!--[if IE]>

			<script type="text/javascript">
		 	window.jQuery || document.write("<script src='assets/js/jquery-1.11.1.min.js'>"+"<"+"/script>");
			</script>

		<![endif]-->
		<script src="assets/js/jquery-migrate-1.2.1.min.js"></script>
		<script src="assets/js/bootstrap.min.js"></script>
		
		<script src="assets/plugins/jquery-ui/js/jquery-ui-1.10.4.min.js"></script>
	

		<!-- theme scripts -->
		<script src="assets/plugins/pace/pace.min.js"></script>
		<script src="assets/js/jquery.mmenu.min.js"></script>
		<script src="assets/js/core.min.js"></script>
				<script src="assets/plugins/jquery-cookie/jquery.cookie.min.js"></script>
		<script src="assets/js/demo.min.js"></script>

		<!-- end: JavaScript-->

	</body>
</html>