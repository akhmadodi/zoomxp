<?php
$full_name = array(
	'name'	=> 'full_name',
	'id'	=> 'full_name',
	'value' => set_value('full_name'),
	'size'	=> 30,
    'class' => 'md-input',
    'required' => 'required',
);

if ($use_username) {
	$username = array(
		'name'	=> 'username',
		'id'	=> 'username',
		'value' => set_value('username'),
		'maxlength'	=> $this->config->item('username_max_length', 'tank_auth'),
		'size'	=> 30,
	    'class' => 'md-input',
	    'required' => 'required',
	);
}
$email = array(
	'name'	=> 'email',
	'id'	=> 'email',
	'value'	=> set_value('email'),
	'maxlength'	=> 80,
	'size'	=> 30,
    'class' => 'md-input',
    'required' => 'required',
);
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'value' => set_value('password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
    'class' => 'md-input',
    'required' => 'required',
);
$confirm_password = array(
	'name'	=> 'confirm_password',
	'id'	=> 'confirm_password',
	'value' => set_value('confirm_password'),
	'maxlength'	=> $this->config->item('password_max_length', 'tank_auth'),
	'size'	=> 30,
    'class' => 'md-input',
    'required' => 'required',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);
?>

<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8" />
		<title><?php echo $this->session->userdata('app_name'); ?> | Create User</title>
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
					Create New User
					</div>
					<?php echo form_open($this->uri->uri_string()); ?>
						<div class="md-form-group float-label">
							<?php echo form_input($full_name); ?>
							<label>Full Name</label>
						</div>
						<span style="color: red;"><?php echo form_error($full_name['name']); ?><?php echo isset($errors[$full_name['name']])?$errors[$full_name['name']]:''; ?></span>
						<?php if ($use_username) { ?>
						<div class="md-form-group float-label">
							<?php echo form_input($username); ?>
							<label>Username (Employee Number)</label>
						</div>
						<span style="color: red;"><?php echo form_error($username['name']); ?><?php echo isset($errors[$username['name']])?$errors[$username['name']]:''; ?></span>
						<?php } ?>
						<div class="md-form-group float-label">
							<?php echo form_input($email); ?>
							<label>Email</label>
						</div>
						<span style="color: red;"><?php echo form_error($email['name']); ?><?php echo isset($errors[$email['name']])?$errors[$email['name']]:''; ?></span>
						<div class="md-form-group float-label">
							<?php echo form_password($password); ?>
							<label>Password</label>
						</div>
						<span style="color: red;"><?php echo form_error($password['name']); ?></span>
						<div class="md-form-group float-label">
							<?php echo form_password($confirm_password); ?>
							<label>Confirm Password</label>
						</div>
						<span style="color: red;"><?php echo form_error($confirm_password['name']); ?></span>
						<div class="md-form-group float-label">
							<select name="level_user" id="level_user" class="md-input c-select" required>
								<option></option>
								<option value="admin">Admin</option>
								<option value="bdm/bds">BDM/BDS</option>
								<option value="trainer">Trainer</option>
							</select>
							<label>Level</label>
						</div>

						<?php echo form_submit('register', 'Create', 'class="btn primary btn-block p-x-md"'); ?>
					<?php echo form_close(); ?>
				</div>

				<div class="p-v-lg text-center">
					<?php
					echo "<div class=''>".$this->session->flashdata('create_user_msg')."</div>";
					echo '<div><a href="bop" class="enable_link text-primary _600">Back</a></div>';
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
			$(document).ready(function(){ $('#full_name').focus(); });
		</script>
	</body>
</html>