@extends('pages.default')

@section('content')
<!-- start: Content -->
					
			<ol class="breadcrumb">
			  	<li><a href="/">myOrganizer</a></li>
			  	<li class="active">Dashboard</li>
			</ol>		
			
						
			<ul class="statistics">
				<li>
					<i class="icon-users"></i>
					<div class="number">87.500</div>
					<div class="title">Visitors</div>
					<div class="progress thin">
					  	<div class="progress-bar progress-bar-info" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
					    	<span class="sr-only">73% Complete (success)</span>
					  	</div>
					</div>
				</li>
				<li>
					<i class="icon-user-follow"></i>
					<div class="number">385</div>
					<div class="title">New clients</div>
					<div class="progress thin">
					  	<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
					    	<span class="sr-only">73% Complete (success)</span>
					  	</div>
					</div>
				</li>
				<li>
					<i class="icon-basket-loaded"></i>
					<div class="number">1238</div>
					<div class="title">Products sold</div>
					<div class="progress thin">
					  	<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
					    	<span class="sr-only">73% Complete (success)</span>
					  	</div>
					</div>
				</li>
				<li>
					<i class="icon-pie-chart"></i>
					<div class="number">28%</div>
					<div class="title">Returning Visitors</div>
					<div class="progress thin">
					  	<div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
					    	<span class="sr-only">73% Complete (success)</span>
					  	</div>
					</div>
				</li>
				<li>
					<i class="icon-speedometer"></i>
					<div class="number">5:34:11</div>
					<div class="title">Avg. time</div>
					<div class="progress thin">
					  	<div class="progress-bar progress-bar-primary" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
					    	<span class="sr-only">73% Complete (success)</span>
					  	</div>
					</div>
				</li>
				<li>
					<i class="icon-speech"></i>
					<div class="number">972</div>
					<div class="title">New comments</div>
					<div class="progress thin">
					  	<div class="progress-bar progress-bar-danger" role="progressbar" aria-valuenow="73" aria-valuemin="0" aria-valuemax="100" style="width: 73%">
					    	<span class="sr-only">73% Complete (success)</span>
					  	</div>
					</div>
				</li>
			</ul>			

			<div class="row">	
				<div class="col-md-4">
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="fa fa-user"></i>Favourite Contacts </h2>
							<div class="panel-actions">
								<a href="widgets.html#" class="btn-minimize"><i class="icon-arrow-up"></i></a>
								<a href="widgets.html#" class="btn-close"><i class="icon-close"></i></a>
							</div>
						</div>
						<div class="panel-body no-padding">
							<ul class="users-list">
								<li>
									<a href="widgets.html#">
										<img class="avatar" alt="Lucas" src="assets/img/avatar.jpg">
									</a>
									<div class="name">Łukasz Holeczek 
										<div class="dropdown pull-right">
											<a class="fa fa-cogs" data-toggle="dropdown" href="widgets.html#"></a>
											<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
												<li><a href="widgets.html#"><i class="fa fa-check"></i> Accept</a></li>
												<li><a href="widgets.html#"><i class="fa fa-times"></i>Reject</a></li>
												<li><a href="widgets.html#"><i class="fa fa-minus-sign-alt"></i>Block</a></li>
												<li><a href="widgets.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
											</ul>
										</div>
									</div>
									<span class="place"><i class="fa fa-map-marker"></i>Mikolow, POLAND</span>
									<span class="job"><i class="fa fa-briefcase"></i>Founder, BootstrapMaster.com</span>                                 
								</li>
								<li>
									<a href="widgets.html#">
										<img class="avatar" alt="Bill" src="assets/img/avatar9.jpg">
									</a>
									<div class="name">Bill Cole
										<div class="dropdown pull-right">
											<a class="fa fa-cogs" data-toggle="dropdown" href="widgets.html#"></a>
											<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
												<li><a href="widgets.html#"><i class="fa fa-check"></i> Accept</a></li>
												<li><a href="widgets.html#"><i class="fa fa-times"></i>Reject</a></li>
												<li><a href="widgets.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
												<li><a href="widgets.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
											</ul>
										</div>
									</div>
									<span class="place"><i class="fa fa-map-marker"></i>London, ENGLAND</span>
									<span class="job"><i class="fa fa-briefcase"></i>CEO, Rainbow INC</span>                                 
								</li>
								<li>
									<a href="widgets.html#">
										<img class="avatar" alt="Jane" src="assets/img/avatar5.jpg">
									</a>
									<div class="name">Jane Sanchez
										<div class="dropdown pull-right">
											<a class="fa fa-cogs" data-toggle="dropdown" href="widgets.html#"></a>
											<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
												<li><a href="widgets.html#"><i class="fa fa-check"></i> Accept</a></li>
												<li><a href="widgets.html#"><i class="fa fa-times"></i>Reject</a></li>
												<li><a href="widgets.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
												<li><a href="widgets.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
											</ul>
										</div>
									</div>
									<span class="place"><i class="fa fa-map-marker"></i>Berlin, GERMANY</span>
									<span class="job"><i class="fa fa-briefcase"></i>Head of Stars Group</span>                               
								</li>
								<li>
									<a href="widgets.html#">
										<img class="avatar" alt="Kate" src="assets/img/avatar6.jpg">
									</a>
									<div class="name">Kate Presley
										<div class="dropdown pull-right">
											<a class="fa fa-cogs" data-toggle="dropdown" href="widgets.html#"></a>
											<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
												<li><a href="widgets.html#"><i class="fa fa-check"></i> Accept</a></li>
												<li><a href="widgets.html#"><i class="fa fa-times"></i>Reject</a></li>
												<li><a href="widgets.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
												<li><a href="widgets.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
											</ul>
										</div>
									</div>
									<span class="place"><i class="fa fa-map-marker"></i>Madrid, SPAIN</span>
									<span class="job"><i class="fa fa-briefcase"></i>Creative Director, IdeaLab LTD</span>                                  
								</li>
								<li>
									<a href="widgets.html#">
										<img class="avatar" alt="Lucas" src="assets/img/avatar7.jpg">
									</a>
									<div class="name">Anna Holmes 
										<div class="dropdown pull-right">
											<a class="fa fa-cogs" data-toggle="dropdown" href="widgets.html#"></a>
											<ul class="dropdown-menu" role="menu" aria-labelledby="dLabel">
												<li><a href="widgets.html#"><i class="fa fa-check"></i> Accept</a></li>
												<li><a href="widgets.html#"><i class="fa fa-times"></i>Reject</a></li>
												<li><a href="widgets.html#"><i class="fa fa-minus-square-o"></i>Block</a></li>
												<li><a href="widgets.html#"><i class="fa fa-trash-o"></i>Delete</a></li>
											</ul>
										</div>
									</div>
									<span class="place"><i class="fa fa-map-marker"></i>Paris, FRANCE</span>
									<span class="job"><i class="fa fa-briefcase"></i>Co-Founder, ArtStudio</span>                                 
								</li>
							</ul>
						</div>
					</div>
				</div><!--/.col-->
				
				<div class="col-lg-5 col-md-12">
						
					<div class="panel panel-default">
						<div class="panel-heading">
							<h2><i class="icon-list"></i>To Do List</h2>
							<div class="panel-actions">
								<a href="index.html#" class="btn-setting"><i class="icon-settings"></i></a>
								<a href="index.html#" class="btn-minimize"><i class="icon-arrow-up"></i></a>
								<a href="index.html#" class="btn-close"><i class="icon-close"></i></a>
							</div>
						</div>
						<div class="panel-body no-padding">
							<div class="todo-list">
								<ul id="todo-1" class="todo-list-tasks">
									<li>
										<label class="custom-checkbox-item pull-left">
											<input class="custom-checkbox" type="checkbox"/>
											<span class="custom-checkbox-mark"></span>
										</label>
										<span class="desc">Solve server problem</span> 
									</li>
									<li>
										<label class="custom-checkbox-item pull-left">
											<input class="custom-checkbox" type="checkbox"/>
											<span class="custom-checkbox-mark"></span>
										</label>
										<span class="desc">New website development</span> 
									</li>
									<li>
										<label class="custom-checkbox-item pull-left">
											<input class="custom-checkbox" type="checkbox"/>
											<span class="custom-checkbox-mark"></span>
										</label>
										<span class="desc">Improve SEO Opitimisation</span> 
									</li>
									<li>
										<label class="custom-checkbox-item pull-left">
											<input class="custom-checkbox" type="checkbox"/>
											<span class="custom-checkbox-mark"></span>
										</label>
										<span class="desc">Find JavaScript Developers</span> 
									</li>
									<li>
										<label class="custom-checkbox-item pull-left">
											<input class="custom-checkbox" type="checkbox"/>
											<span class="custom-checkbox-mark"></span>
										</label>
										<span class="desc">Growth Hacking</span> 
									</li>
									<li>
										<label class="custom-checkbox-item pull-left">
											<input class="custom-checkbox" type="checkbox"/>
											<span class="custom-checkbox-mark"></span>
										</label>
										<span class="desc">Pay taxes</span> 
									</li>
								</ul>
								<ul class="completed"></ul>		
							</div>
							<div class="panel-footer">
								<div class="form-group">
									<input type="text" class="form-control" id="task-description" placeholder="Add new task">
								</div>
								<div class="btn-group">
									<button type="button" class="btn btn-link"><i class="icon-pointer"></i></button>
									<button type="button" class="btn btn-link"><i class="icon-users"></i></button>
									<button type="button" class="btn btn-link"><i class="icon-calendar"></i></button>
								</div>

								<div class="pull-right">
									<button id="add-task" type="button" class="btn btn-success">submit</button>
								</div>	
							</div>		
						</div>
					</div>

				</div><!--/col-->
                				<div class="col-lg-3 col-sm-6">
					
					<div class="panel panel-default">

						<div class="panel-body weather widget">
							
							<div class="today text-center">
								
								<i class="climacon sun"></i>
								
								<div><strong>31/22°C London</strong></div>

							</div>
							
							<ul class="forecast">
								<li>
									<strong>MON</strong>
									<i class="climacon lightning sun"></i>
									<div class="small">28/17°C</div>
								</li>
								<li>
									<strong>TUE</strong>
									<i class="climacon fog sun"></i>
									<div class="small">24/11°C</div>
								</li>
								<li>
									<strong>WED</strong>
									<i class="climacon hail sun"></i>
									<div class="small">25/14°C</div>
								</li>	
							</ul>
															
						</div>
					</div>
					
				</div><!--/col-->	
					
			</div><!--/row-->	

			<div class="row">

				<div class="col-lg-12 activity">

					<ul>

						<li>
							<div class="author">
								<img src="assets/img/avatar.jpg" alt="avatar">
							</div>	
							<div class="header">
								<span class="label label-success">TASK</span> <strong>Mike</strong> added this task: <a href="index.html#">Fixes for IE8 :)</a>
								<span class="location"> <i class="icon-clock"></i> Today, 10:00AM</span>
								<span class="time"> <i class="icon-pointer"></i> London</span>
							</div>	
						</li>
						
						<li>
							<div class="author">
								<img src="assets/img/avatar.jpg" alt="avatar">
							</div>	
							<div class="header">
								<span class="label label-info">COMMENT</span> <strong>Mike</strong> posted comment on: <a href="index.html#">New mobile application for iOS Devices</a>
								<span class="location"> <i class="icon-clock"></i> Today, 10:00AM</span>
								<span class="time"> <i class="icon-pointer"></i> London</span>
							</div>
							<div class="description">
								<blockquote>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</blockquote>
							</div>		
						</li>
						
						<li>
							<div class="author">
								<img src="assets/img/avatar.jpg" alt="avatar">
							</div>	
							<div class="header">
								<span class="label label-warning">IMAGE</span> <strong>Mike</strong> Uploaded following pictures
								<span class="location"> <i class="icon-clock"></i> Today, 10:00AM</span>
								<span class="time"> <i class="icon-pointer"></i> London</span>
							</div>
							<div class="description">
								<div class="row">
									<div class="col-sm-3 col-xs-6" style="margin-bottom: 30px">
										<img src="assets/img/gallery/photo2.jpg" class="img-responsive img-thumbnail">
									</div>
									<div class="col-sm-3 col-xs-6" style="margin-bottom: 30px">
										<img src="assets/img/gallery/photo3.jpg" class="img-responsive img-thumbnail">
									</div>
									<div class="col-sm-3 col-xs-6" style="margin-bottom: 30px">
										<img src="assets/img/gallery/photo4.jpg" class="img-responsive img-thumbnail">
									</div>
									<div class="col-sm-3 col-xs-6" style="margin-bottom: 30px">
										<img src="assets/img/gallery/photo5.jpg" class="img-responsive img-thumbnail">
									</div>	
								</div>
							</div>		
						</li>
	
						
					</ul>	

				</div><!--/col-->

			</div><!--/row-->

				
		
		<!-- end: Content -->
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
		<script src="assets/plugins/moment/moment.min.js"></script> 
		<script src="assets/plugins/flot/jquery.flot.min.js"></script> 
		<script src="assets/plugins/flot/jquery.flot.resize.min.js"></script> 
		<script src="assets/plugins/flot/jquery.flot.time.min.js"></script> 
		<script src="assets/plugins/flot/jquery.flot.spline.min.js"></script>
		<script src="assets/plugins/autosize/jquery.autosize.min.js"></script> 
		<script src="assets/plugins/placeholder/jquery.placeholder.min.js"></script> 
		<script src="assets/plugins/datatables/js/jquery.dataTables.min.js"></script> 
		<script src="assets/plugins/datatables/js/dataTables.bootstrap.min.js"></script> 
		<script src="assets/plugins/raphael/raphael.min.js"></script> 
		<script src="assets/plugins/morris/js/morris.min.js"></script> 
		<script src="assets/plugins/jvectormap/js/jquery-jvectormap-1.2.2.min.js"></script> 
		<script src="assets/plugins/jvectormap/js/jquery-jvectormap-world-mill-en.js"></script> 
		<script src="assets/plugins/jvectormap/js/gdp-data.js"></script>
		<script src="assets/plugins/gauge/gauge.min.js"></script>
		<script src="assets/plugins/daterangepicker/js/daterangepicker.min.js"></script>
	

		<!-- theme scripts -->
		<script src="assets/plugins/pace/pace.min.js"></script>
		<script src="assets/js/jquery.mmenu.min.js"></script>
		<script src="assets/js/core.min.js"></script>
		
	<!-- inline scripts related to this page -->
	<script src="assets/js/pages/index.js"></script>
		<script src="assets/plugins/jquery-cookie/jquery.cookie.min.js"></script>
		<script src="assets/js/demo.min.js"></script>

		<!-- end: JavaScript-->
		

@endsection