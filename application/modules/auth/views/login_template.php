<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $title; ?></title>
		<meta name="description" content="<?php echo $meta_description; ?>" />
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
			<div class="center-block w-xxl w-auto-xs p-y-md">
				<div class="navbar">
					<div class="pull-center">
						<?php $this->load->view('includes/admin/navbar_brand'); ?>
					</div>
				</div>
				<div class="p-a-md box-color r box-shadow-z1 text-color m-a">
					<div class="m-b text-sm">
						Sign in with your Account
					</div>
					<?php $this->load->view($content); ?>
				</div>

				<!-- <div class="p-v-lg text-center"> -->
					<!-- <div class="m-b"><a href="#/access/forgot-password" class="text-primary _600">Forgot password?</a></div> -->
					<!-- <div>Do not have an account? <a ui-sref="access.signup" href="#/access/signup" class="text-primary _600">Sign up</a></div> -->
				<!-- </div> -->
			</div>
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

		<script type="text/javascript">
		$(document).ready(function(){ $('#login').focus(); });	
		</script>
	</body>
</html>