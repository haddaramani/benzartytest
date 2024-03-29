<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from uxliner.com/bizadmin/demo/main/table-jsgrid.html by HTTrack Website Copier/3.x [XR&CO'2014], Fri, 22 Feb 2019 09:33:53 GMT -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Child Care Centre</title>
	<!-- Tell the browser to be responsive to screen width -->

	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- v4.0.0 -->
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/bootstrap/css/bootstrap.min.css');?>">

	<!-- Favicon -->
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url('assets/dashboard/dist/img/logo-mini.png');?>">

	<!-- Google Font -->
	<link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">

	<!-- Theme style -->
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/css/style.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/css/font-awesome/css/font-awesome.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/css/et-line-font/et-line-font.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/css/themify-icons/themify-icons.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/css/simple-lineicon/simple-line-icons.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/css/skins/_all-skins.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/plugins/datatables/css/dataTables.bootstrap.min.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/plugins/iCheck/flat/blue.css');?>">
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/style.css');?>">
	<link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

	<link href="<?php echo base_url('assets/datatables/datatables/css/dataTables.bootstrap.css')?>" rel="stylesheet">
	<link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker.css')?>" rel="stylesheet">




	<!-- jsgrid Tables -->
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/plugins/jsgrid/jsgrid.css');?>" />
	<link type="text/css" rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/plugins/jsgrid/theme.css');?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/plugins/formwizard/jquery-steps.css');?>" />
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/plugins/dropify/dropify.min.css');?>" />
	<link href="<?php echo base_url('assets/bootstrap-datepicker/css/bootstrap-datepicker3.min.css')?>" rel="stylesheet">


	<!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>


<!-- Dropzone -->
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/plugins/dropzone-master/dropzone.css');?>">
	<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<link rel="stylesheet" href="<?php echo base_url('assets/dashboard/dist/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css');?>">

	<![endif]-->

</head>
<body class="skin-blue sidebar-mini">
<div class="wrapper boxed-wrapper">
	<header class="main-header">
		<!-- Logo -->
		<a href="<?php echo base_url('Admin/indexadmin');?>" class="logo">
			<!-- mini logo for sidebar mini 50x50 pixels -->
			<span class="logo-mini"><img src="<?php echo base_url('assets/dashboard/dist/img/logo-mini.png')?>" style="height: 100%;width: 100%;" alt=""></span>
			<!-- logo for regular state and mobile devices -->
			<span class="logo-lg"><img style="height:90px;width: 80%;margin-top: -25px; " src="<?php echo base_url('assets/dashboard/dist/img/logo.png')?>" alt=""></span> </a>
		<!-- Header Navbar -->
		<nav class="navbar blue-bg navbar-static-top">
			<!-- Sidebar toggle button-->
			<ul class="nav navbar-nav pull-left">
				<li><a class="sidebar-toggle" data-toggle="push-menu" href="#"></a> </li>
			</ul>
			<div class="navbar-custom-menu">
				<ul class="nav navbar-nav">
					<!-- Messages -->
					<li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-envelope-o"></i>
							<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
						</a>
						<ul class="dropdown-menu">
							<li class="header">You have 4 new messages</li>
							<li>
								<ul class="menu">
									<li><a href="#">
											<div class="pull-left"><img src="<?php echo base_url('assets/dashboard/dist/img/img1.jpg')?>" class="img-circle" alt="User Image"> <span class="profile-status online pull-right"></span></div>
											<h4>Alex C. Patton</h4>
											<p>I've finished it! See you so...</p>
											<p><span class="time">9:30 AM</span></p>
										</a></li>
									<li><a href="#">
											<div class="pull-left"><img src="<?php echo base_url('assets/dashboard/dist/img/img3.jpg')?> class="img-circle" alt="User Image"> <span class="profile-status offline pull-right"></span></div>
											<h4>Nikolaj S. Henriksen</h4>
											<p>I've finished it! See you so...</p>
											<p><span class="time">10:15 AM</span></p>
										</a></li>
									<li><a href="#">
											<div class="pull-left"><img src="<?php echo base_url('assets/dashboard/dist/img/img2.jpg')?> class="img-circle" alt="User Image"> <span class="profile-status away pull-right"></span></div>
											<h4>Kasper S. Jessen</h4>
											<p>I've finished it! See you so...</p>
											<p><span class="time">8:45 AM</span></p>
										</a></li>
									<li><a href="#">
											<div class="pull-left"><img src="<?php echo base_url('assets/dashboard/dist/img/img4.jpg')?> class="img-circle" alt="User Image"> <span class="profile-status busy pull-right"></span></div>
											<h4>Florence S. Kasper</h4>
											<p>I've finished it! See you so...</p>
											<p><span class="time">12:15 AM</span></p>
										</a></li>
								</ul>
							</li>
							<li class="footer"><a href="#">View All Messages</a></li>
						</ul>
					</li>
					<!-- Notifications  -->
					<li class="dropdown messages-menu"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <i class="fa fa-bell-o"></i>
							<div class="notify"> <span class="heartbit"></span> <span class="point"></span> </div>
						</a>
						<ul class="dropdown-menu">
							<li class="header">Notifications</li>
							<li>
								<ul class="menu">
									<li><a href="#">
											<div class="pull-left icon-circle red"><i class="icon-lightbulb"></i></div>
											<h4>Alex C. Patton</h4>
											<p>I've finished it! See you so...</p>
											<p><span class="time">9:30 AM</span></p>
										</a></li>
									<li><a href="#">
											<div class="pull-left icon-circle blue"><i class="fa fa-coffee"></i></div>
											<h4>Nikolaj S. Henriksen</h4>
											<p>I've finished it! See you so...</p>
											<p><span class="time">1:30 AM</span></p>
										</a></li>
									<li><a href="#">
											<div class="pull-left icon-circle green"><i class="fa fa-paperclip"></i></div>
											<h4>Kasper S. Jessen</h4>
											<p>I've finished it! See you so...</p>
											<p><span class="time">9:30 AM</span></p>
										</a></li>
									<li><a href="#">
											<div class="pull-left icon-circle yellow"><i class="fa  fa-plane"></i></div>
											<h4>Florence S. Kasper</h4>
											<p>I've finished it! See you so...</p>
											<p><span class="time">11:10 AM</span></p>
										</a></li>
								</ul>
							</li>
							<li class="footer"><a href="#">Check all Notifications</a></li>
						</ul>
					</li>
					<!-- User Account  -->
					<li class="dropdown user user-menu p-ph-res"> <a href="#" class="dropdown-toggle" data-toggle="dropdown"> <img src="<?php echo base_url('assets/dashboard/dist/img/img1.jpg')?>" class="user-image" alt="User Image"> <span class="hidden-xs">Alexander Pierce</span> </a>
						<ul class="dropdown-menu">
							<li class="user-header">
								<div class="pull-left user-img"><img src="<?php echo base_url('assets/dashboard/dist/img/img1.jpg')?>" class="img-responsive img-circle" alt="User"></div>
								<p class="text-left">Alexander Pierce <small>alexander@gmail.com</small> </p>
							</li>
							<li><a href="<?php echo base_url('Admin/profil');?>"><i class="icon-profile-male"></i> My Profile</a></li>
							<li><a href="<?php echo base_url('Admin/Consultationmail');?>"><i class="icon-envelope"></i> Inbox</a></li>
							<li role="separator" class="divider"></li>
							<li role="separator" class="divider"></li>
							<li><a href="#"><i class="fa fa-power-off"></i> Logout</a></li>
						</ul>
					</li>
					<!-- Control Sidebar Toggle Button -->

				</ul>
			</div>
		</nav>
	</header>
	<!-- Left side column. contains the logo and sidebar -->
	<aside class="main-sidebar">
		<!-- sidebar -->
		<div class="sidebar">
			<!-- Sidebar user panel -->
			<div class="user-panel">
				<div class="image text-center"><img src="<?php echo base_url('assets/dashboard/dist/img/img1.jpg')?>" class="img-circle" alt="User Image"> </div>
				<div class="info">
					<p>Hello <?php echo $user->username; ?></p>
					 <a href="<?php echo base_url('Admin/logout');?>"><i class="fa fa-power-off"></i></a> </div>
			</div>

			<!-- sidebar menu -->
			<ul class="sidebar-menu" data-widget="tree">
				<li class="active treeview"> <a href="#"> <i class="icon-home"></i> <span>Management Operation</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url('Admin/modifiersup');?>"><i class="fa fa-angle-right"></i> Student</a></li>

						<li><a href="<?php echo base_url('Admin/modifiersupParent');?>"><i class="fa fa-angle-right"></i> Parent</a></li>

						<li><a href="<?php echo base_url('Admin/modifiersupMaitresse');?>"><i class="fa fa-angle-right"></i> Teacher</a></li>

					</ul>
				</li>

				<li class="treeview"> <a href="#"> <i class="ti-email"></i> <span>Inbox</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url('Admin/Consultationmail');?>"><i class="fa fa-angle-right"></i> Consultation</a></li>
						<li><a href="<?php echo base_url('Admin/ajoutmail');?>"><i class="fa fa-angle-right"></i> Write</a></li>
					</ul>
				</li>

					<li class="treeview"> <a href="#"> <i class="icon-credit-card"></i> <span>Payment</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url('Admin/Listerdepaiement');?>"><i class="fa fa-angle-right"></i> Liste des paiement</a></li>
						<li><a href="<?php echo base_url('Admin/historique');?>"><i class="fa fa-angle-right"></i>Historique</a></li>

					</ul>
				</li>




				<li class="treeview"> <a href="#"> <i class="ti-announcement"></i> <span>Announcement</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url('Admin/annoncecreation');?>"><i class="fa fa-angle-right"></i>Annoncement Proposition</a></li>
						<li><a href="<?php echo base_url('Admin/upcoming');?>"><i class="fa fa-angle-right"></i> Upcoming Events </a></li>
					</ul>
				</li>
				<li class="treeview"> <a href="#"> <i class=" icon-plane"></i> <span>Leave Requests</span> <span class="pull-right-container"> <i class="fa fa-angle-left pull-right"></i> </span> </a>
					<ul class="treeview-menu">
						<li><a href="<?php echo base_url('Admin/leaverequest');?>"><i class="fa fa-angle-right"></i>View Requests</a></li>
						<li><a href="<?php echo base_url('Admin/Availability');?>"><i class="fa fa-angle-right"></i>Availability</a></li>
					</ul>
				</li>


			</ul>
		</div>
	</aside>
