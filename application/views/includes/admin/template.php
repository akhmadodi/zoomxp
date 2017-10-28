<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<title><?php echo $title; ?></title>
	<meta name="description" content="Admin, Dashboard, Bootstrap, Bootstrap 4, Angular, AngularJS" />
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, minimal-ui" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<!-- for ios 7 style, multi-resolution icon of 152x152 -->
	<meta name="apple-mobile-web-app-capable" content="yes">
	<meta name="apple-mobile-web-app-status-barstyle" content="black-translucent">
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>public/flatkit/assets/images/logo.png">
	<meta name="apple-mobile-web-app-title" content="Flatkit">
	<!-- for Chrome on Android, multi-resolution icon of 196x196 -->
	<meta name="mobile-web-app-capable" content="yes">
	<link rel="shortcut icon" sizes="196x196" href="<?php echo base_url(); ?>public/flatkit/assets/images/logo.png">

	<!-- style -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/flatkit/assets/animate.css/animate.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/flatkit/assets/glyphicons/glyphicons.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/flatkit/assets/font-awesome/css/font-awesome.min.css" type="text/css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/flatkit/assets/material-design-icons/material-design-icons.css" type="text/css" />

	<link rel="stylesheet" href="<?php echo base_url(); ?>public/flatkit/assets/bootstrap/dist/css/bootstrap.min.css" type="text/css" />
	<!-- build:css ../assets/styles/app.min.css -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/flatkit/assets/styles/app.css" type="text/css" />
	<!-- endbuild -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>public/flatkit/assets/styles/font.css" type="text/css" />
</head>
<body class="container pace-done">
	<div class="app" id="app">

		<!-- ############ LAYOUT START-->

		<!-- aside -->
		<div id="aside" class="app-aside modal fade sm nav-dropdown">
			<div class="left navside grey dk" layout="column">
				<div class="navbar no-radius">
					<?php $this->load->view('includes/admin/navbar_brand'); ?>
				</div>
				<div flex-no-shrink>
					<?php $this->load->view('includes/admin/aside_top'); ?>
				</div>
				<div flex class="hide-scroll">
					<nav class="scroll nav-border b-primary">
						<?php $this->load->view('includes/admin/nav'); ?>
					</nav>
				</div>
				<div flex-no-shrink>
					<?php $this->load->view('includes/admin/aside_bottom'); ?>
				</div>
			</div>
		</div>
		<!-- / aside -->

		<!-- content -->
		<div id="content" class="app-content box-shadow-z2 box-radius-1x" role="main">
			<div class="app-header white box-shadow">
				<?php $this->load->view('includes/admin/header'); ?>
			</div>
			<div class="app-footer">
				<?php $this->load->view('includes/admin/footer'); ?>
			</div>
			<div ui-view class="app-body" id="view">
				<!-- ############ PAGE START-->
				<?php $this->load->view($content); ?>
				<!-- ############ PAGE END-->
			</div>
		</div>
		<!-- / content -->

		<!-- ############ LAYOUT END-->

	</div>

	<!-- build:js scripts/app.html.js -->
	<!-- jQuery -->
	<script src="<?php echo base_url(); ?>public/flatkit/libs/jquery/jquery/dist/jquery.js"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url(); ?>public/flatkit/libs/jquery/tether/dist/js/tether.min.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/libs/jquery/bootstrap/dist/js/bootstrap.js"></script>
	<!-- core -->
	<script src="<?php echo base_url(); ?>public/flatkit/libs/jquery/underscore/underscore-min.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/libs/jquery/jQuery-Storage-API/jquery.storageapi.min.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/libs/jquery/PACE/pace.min.js"></script>

	<script src="<?php echo base_url(); ?>public/flatkit/scripts/config.lazyload.js"></script>

	<script src="<?php echo base_url(); ?>public/flatkit/scripts/palette.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/scripts/ui-load.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/scripts/ui-jp.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/scripts/ui-include.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/scripts/ui-device.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/scripts/ui-form.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/scripts/ui-nav.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/scripts/ui-screenfull.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/scripts/ui-scroll-to.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/scripts/ui-toggle-class.js"></script>

	<script src="<?php echo base_url(); ?>public/flatkit/scripts/app.js"></script>

	<!-- ajax -->
	<script src="<?php echo base_url(); ?>public/flatkit/libs/jquery/jquery-pjax/jquery.pjax.js"></script>
	<script src="<?php echo base_url(); ?>public/flatkit/scripts/ajax.js"></script>
	<!-- endbuild -->

</body>
</html>