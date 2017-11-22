<form method="post" action="<?php echo base_url(); ?>master/add_activity" enctype="multipart/form-data">	
	<select name="vendor_id">
		<option>Vendor</option>
		<?php
		foreach ($vendor->result() as $key) {
			echo '<option value="'.$key->id.'">'.$key->name.'</option>';
		} ?>
	</select><br/>


	<select name="categ_id">
		<option>Category</option>
		<?php
		foreach ($category->result() as $key) {
			echo '<option value="'.$key->id.'">'.$key->category.'</option>';
		} ?>
	</select><br/>
	<input type="text" placeholder="Activity Title" name="activity_title"><br/>
	<input type="text" placeholder="Activity Text" name="activity_text"><br/>
	<input type="text" placeholder="Start Date" name="start_date"><br/>
	<input type="text" placeholder="End Date" name="end_date"><br/>
	<input type="text" placeholder="Quota" name="quota"><br/>
	<input type="text" placeholder="Price" name="price"><br/>
	<input type="file" id="import" name="import" accept="image/*" /><br/>
	<p><input type="submit" name="submit" value="Submit"></p>
</form>