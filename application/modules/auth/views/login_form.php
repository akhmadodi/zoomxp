<?php
$login = array(
	'name'	=> 'login',
	'id'	=> 'login',
	'value' => set_value('login'),
	'maxlength'	=> 80,
	'size'	=> 30,
	'class' => 'md-input',
	'required' => 'required',
);
if ($login_by_username AND $login_by_email) {
	$login_label = 'Email or login';
} else if ($login_by_username) {
	$login_label = 'Login';
} else {
	$login_label = 'Email';
}
$password = array(
	'name'	=> 'password',
	'id'	=> 'password',
	'size'	=> 30,
	'class' => 'md-input',
	'required' => 'required',
);
$remember = array(
	'name'	=> 'remember',
	'id'	=> 'remember',
	'value'	=> 1,
	'checked'	=> set_value('remember'),
	'style' => 'margin:0;padding:0',
);
$captcha = array(
	'name'	=> 'captcha',
	'id'	=> 'captcha',
	'maxlength'	=> 8,
);

echo form_open($this->uri->uri_string()); ?>
	<div class="md-form-group float-label">
		<?php echo form_input($login); ?>
		<label>Email or username</label>
	</div>
	<div class="md-form-group float-label">
		<?php echo form_password($password); ?>
		<label>Password</label>
	</div>      
	<div class="m-b-md">
		<label class="md-check">
			<?php echo form_checkbox($remember); ?><i class="primary"></i> Remember me
		</label>
	</div>
	<?php echo isset($error_login)?$error_login:null; ?>
	<?php echo form_submit('submit', 'Sign in', 'class="btn primary btn-block p-x-md"'); ?>
<?php echo form_close(); ?>