<p>
<form method="post" action="<?php echo base_url(); ?>activity/book">
	Quota<br/>
	<input type="text" name="quota"><br/><br/>
	Start date<br/>
	<input type="text" name="start_date"><br/><br/>
	End date<br/>
	<input type="text" name="end_date"><br/><br/>
	<input type="hidden" name="id" value="<?php echo $query->row()->id; ?>">
	<input type="hidden" name="price" value="<?php echo $query->row()->price; ?>">
	<input type="submit" name="submit" value="Book">
</form>
</p>