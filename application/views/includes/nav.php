<?php if (!$this->tank_auth->is_logged_in()) { ?>
	<ul>
		<li><a href="<?php echo base_url(); ?>auth/login">Login</a></li>
	</ul>
<?php } else { ?>
	<ul>
		<li><a href="<?php echo base_url(); ?>activity">Booking</a></li>
		<li><a href="<?php echo base_url(); ?>master/add_categ">Add Category</a></li>
		<li><a href="<?php echo base_url(); ?>activity/add">Add Activity</a></li>
		<li><a href="<?php echo base_url(); ?>auth/register">Register User</a></li>
		<li><a href="<?php echo base_url(); ?>master/add_vendor">Add Vendor</a></li>
		<li><a href="<?php echo base_url(); ?>auth/logout">Logout</a></li>
	</ul>
<?php } ?>