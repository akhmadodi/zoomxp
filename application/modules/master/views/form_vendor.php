Add Vendor <br/>
<p>
<form method="post" action="<?php echo base_url(); ?>master/add_vendor">
	<p>
		Vendor Name<br/>
		<input type="text" name="vendor_name">
	</p>
	<p>
		Address<br/>
		<textarea name="address"></textarea>
	</p>
	<p>
		City<br/>
		<input type="text" name="city">
	</p>
	<p>
		Province<br/>
		<input type="text" name="province">
	</p>
	<p>
		ZIP Code<br/>
		<input type="text" name="zip_code">
	</p>
	<p>
		Phone<br/>
		<input type="text" name="phone">
	</p>
	<p>
		PIC Name<br/>
		<input type="text" name="pic_name">
	</p>
	<p><input type="submit" name="submit" value="Submit"></p>
</form>
</p>