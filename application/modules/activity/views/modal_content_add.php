<div class="modal-header">
	<h5 class="modal-title">Modal</h5>
</div>
<div class="modal-body p-lg">
	<!-- <p>Are you sure to execute this action?</p> -->

	<p class="text-muted">Please fill the information to continue</p>
	<?php $this->load->view('form_activity_content'); ?>

</div>
<div class="modal-footer">
	<button type="button" class="btn btn-sm dark-white p-x-md" data-dismiss="modal">Close</button>
	<input type="submit" name="submit" class="btn btn-sm primary p-x-md" value="Add">
</div>