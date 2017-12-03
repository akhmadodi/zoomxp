Add Activity <br/>
<?php /* ?>
<p>
<form method="post" action="<?php echo base_url(); ?>master/add_activity" enctype="multipart/form-data">
	<p>
		Vendor<br/>
		<select name="vendor_id">
			<option></option>
			<?php
			foreach ($vendor->result() as $key) {
				echo '<option value="'.$key->id.'">'.$key->vendor_name.'</option>';
			}
			?>
		</select>
	</p>
	<p>
		Category<br/>
		<select name="categ_id">
			<option></option>
			<?php
			foreach ($category->result() as $key) {
				echo '<option value="'.$key->id.'">'.$key->category.'</option>';
			}
			?>
		</select>
	</p>
	<p>
		Activity Title<br/>
		<input type="text" name="activity_title">
	</p>
	<p>
		Activity Description<br/>
		<textarea name="activity_text"></textarea>
	</p>
	<p>
		Start Date<br/>
		<input type="text" name="start_date">
	</p>
	<p>
		End Date<br/>
		<input type="text" name="end_date">
	</p>
	<p>
		Quota<br/>
		<input type="text" name="quota">
	</p>
	<p>
		Price<br/>
		<input type="text" name="price">
	</p>
	<p>
		Image <input type="file" id="import" name="import" accept="image/*" />
	</p>
	<p><input type="submit" name="submit" value="Submit"></p>
</form>
</p>
<?php */ ?>