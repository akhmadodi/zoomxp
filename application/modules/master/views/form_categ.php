<p>
<form method="post" action="<?php echo base_url(); ?>master/add_categ" enctype="multipart/form-data">
	<p>
		Category name<br/>
		<input type="text" name="categ_name">
	</p>
	<p>
		Image <input type="file" id="import" name="import" accept="image/*" />
	</p>
	<p><input type="submit" name="submit" value="Submit"></p>
</form>
</p>
<?php echo isset($alert_message) ? $alert_message:''; ?>