<?php
$old_password = array(
	'name'	=> 'old_password',
	'id'	=> 'old_password',
	'value' => set_value('old_password'),
	'size' 	=> 30,
    'class' => 'md-input',
    'required' => 'required',
);
$new_password = array(
	'name'	=> 'new_password',
	'id'	=> 'new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
    'class' => 'md-input',
    'required' => 'required',
);
$confirm_new_password = array(
	'name'	=> 'confirm_new_password',
	'id'	=> 'confirm_new_password',
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size' 	=> 30,
    'class' => 'md-input',
    'required' => 'required',
);
?>
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $this->session->userdata('app_name'); ?> | Change Password</title>
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

		<style type="text/css">
			a.enable_link:hover { text-decoration: underline; }
		</style>

	</head>
	<body>
		<div class="app" id="app">

			<!-- ############ LAYOUT START-->
			<div class="center-block w-xxl w-auto-xs p-y-md">
				<div class="navbar">
					<div class="pull-center">
						<!-- brand -->
						<a class="navbar-brand">
							<div ui-include="'<?php echo base_url(); ?>public/flatkit/assets/images/logo.svg'"></div>
							<img src="<?php echo base_url(); ?>public/flatkit/assets/images/logo.png" alt="." class="hide">
							<span class="hidden-folded inline" style="font-weight: normal;"><?php echo $this->session->userdata('app_name'); ?></span>
						</a>
						<!-- / brand -->
					</div>
				</div>
				<div class="p-a-md box-color r box-shadow-z1 text-color m-a">
					<div class="m-b text-sm">
					Change Password Your Account
					</div>
					<?php echo form_open($this->uri->uri_string()); ?>
						<div class="md-form-group float-label">
							<?php echo form_password($old_password); ?>
							<label>Old Password</label>
						</div>
						<div class="md-form-group float-label">
							<?php echo form_password($new_password); ?>
							<label>New Password</label>
						</div>
						<div class="md-form-group float-label">
							<?php echo form_password($confirm_new_password); ?>
							<label>Confirm New Password</label>
						</div>
						<?php //echo isset($error_login)?$error_login:null; ?>

				        <label class="text-danger">
					        <?php
					        echo form_error($old_password['name']); ?><?php echo isset($errors[$old_password['name']])?$errors[$old_password['name']]:'';
					        echo form_error($new_password['name']); ?><?php echo isset($errors[$new_password['name']])?$errors[$new_password['name']]:'';
					        echo form_error($confirm_new_password['name']); ?><?php echo isset($errors[$confirm_new_password['name']])?$errors[$confirm_new_password['name']]:'';
					        ?>
				        </label>


						<?php echo form_submit('change', 'Change Password', 'class="btn primary btn-block p-x-md"'); ?>
					<?php echo form_close(); ?>
				</div>

				<div class="p-v-lg text-center">
					<?php
					$sess_msg = $this->session->flashdata('change_pass_msg');
					if ( !empty($sess_msg) ) {
						echo "<div class=''>".$this->session->flashdata('change_pass_msg')." Click <a href='logout' class='enable_link text-primary _600'>here</a> for login.</div>";
					} else { echo '<div><a href="bop" class="enable_link text-primary _600">Back</a></div>'; }
					?>
					<br/>
					<div><small>&copy2017 All Rights Reserved.</small></div>
				</div>
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
			$(document).ready(function(){ $('#old_password').focus(); });
		</script>
	</body>
</html>