<div class="nav-fold">
	<a href="#/app/page/profile" ui-sref="app.page.profile" >
	    <span class="pull-left">
	      <img src="<?php echo base_url(); ?>public/flatkit/assets/images/profile_male.jpg" alt="..." class="w-40 r">
	    </span>
	    <span class="clear hidden-folded p-x">
	      <span class="block _500"><?php echo $this->session->userdata('username'); ?></span>
	      <small class="block text-muted">Administrator</small>
	    </span>
	</a>
</div>