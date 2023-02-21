	<html lang="en">

	<head>
		<meta charset="utf-8">
		<title>Admin</title>
		<script src="https://unpkg.com/feather-icons"></script>
		<link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.png">
		<link rel="stylesheet" href="<?= base_url();?>/template/assets/css/bootstrap.min.css">
		<link rel="stylesheet" href="<?= base_url();?>/template/assets/css/animate.css">
		<link rel="stylesheet" href="<?= base_url();?>/template/assets/css/dataTables.bootstrap4.min.css">
		<link rel="stylesheet" href="<?= base_url();?>/template/assets/plugins/fontawesome/css/fontawesome.min.css">
		<link rel="stylesheet" href="<?= base_url();?>/template/assets/plugins/fontawesome/css/all.min.css">
		<link rel="stylesheet" href="<?= base_url();?>/template/assets/css/styleku.css">

	</head>

	<body>
		<div class="main-wrapper">
			<div class="header">
				<div class="header-left active"><a href="<?= base_url('dashboard');?>" class="logo"><img
							src="<?= base_url();?>/template/assets/img/logo.png" alt=""></a><a href="index.html"
						class="logo-small"><img src="<?= base_url();?>/template/assets/img/logo-small.png" alt=""></a><a
						id="toggle_btn" href="javascript:void(0);"></a></div><a id="mobile_btn" class="mobile_btn"
					href="#sidebar"><span class="bar-icon"><span></span><span></span><span></span></span></a>
				<ul class="nav user-menu">
					<li class="nav-item">
						<div class="top-nav-search"><a href="javascript:void(0);" class="responsive-search"><i
									class="fa fa-search"></i></a>
							<form action="#">
								<div class="searchinputs"><input type="text" placeholder="Search Here ...">
									<div class="search-addon"><span><img
												src="<?= base_url();?>/template/assets/img/icons/closes.svg"
												alt="img"></span></div>
								</div><a class="btn" id="searchdiv"><img
										src="<?= base_url();?>/template/assets/img/icons/search.svg" alt="img"></a>
							</form>
						</div>
					</li>
					<li class="nav-item dropdown has-arrow main-drop"><a href="javascript:void(0);"
							class="dropdown-toggle nav-link userset" data-bs-toggle="dropdown"><span class="user-img"><img
									src="<?= base_url();?>/template/assets/img/profiles/avator1.jpg" alt=""><span
									class="status online"></span></span></a>
						<div class="dropdown-menu menu-drop-user">
							<div class="profilename">
								<div class="profileset"><span class="user-img"><img src="<?= base_url();?>/template/assets/img/profiles/avator1.jpg"
											alt=""><span class="status online"></span></span>
									<div class="profilesets">
										<h6>AGUS</h6>
										<h5>Admin</h5>
									</div>
								</div>
								<hr class="m-0"><a class="dropdown-item" href="profile.html"><i class="me-2"
										data-feather="user"></i>My Profile</a><a class="dropdown-item"
									href="generalsettings.html"><i class="me-2" data-feather="settings"></i>Settings</a>
								<hr class="m-0"><a class="dropdown-item logout pb-0" href="<?php echo base_url('auth/logout'); ?>"><img
										src="<?= base_url();?>/template/assets/img/icons/log-out.svg" class="me-2" alt="img">Logout</a>
							</div>
						</div>
					</li>
				</ul>
				<div class="dropdown mobile-user-menu"><a href="javascript:void(0);" class="nav-link dropdown-toggle"
						data-bs-toggle="dropdown" aria-expanded="false"><i class="fa fa-ellipsis-v"></i></a>
					<div class="dropdown-menu dropdown-menu-right"><a class="dropdown-item" href="profile.html">My
							Profile</a><a class="dropdown-item" href="generalsettings.html">Settings</a><a
							class="dropdown-item" href="<?php echo base_url('auth/logout'); ?>">Logout</a></div>
				</div>
			</div>
