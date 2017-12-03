<?php
/* $i = 1;
foreach ($query->result() as $key) {
	if ( $key->end_date > date('Y-m-d H:i:s') ) {
		echo $i . '. <a href="'.base_url().'activity/detail/'.$key->id.'">'.$key->activity_title.'</a><br/>';
		$i++;
	}
} */ ?>
	<script src="<?php echo base_url(); ?>public/flatkit/libs/jquery/jquery/dist/jquery.js"></script>
	<!-- Bootstrap -->

	<script src="<?php echo base_url(); ?>public/flatkit/scripts/app.js"></script>

<script type="text/javascript">
// $().ready(function(){ alert('ok'); });
/* function modal_action(act, param) {
	$.ajax({
		url: '<?php //echo base_url(); ?>activity/modal_content_add',
		type: 'post',
		data: { act: act },
		success: function(res) {
			$('#modal_content_add').html(res);
			$('#modal_activity').modal('show');
		}
	});
	return false;
} */
</script>

<style type="text/css">
	.alignRight { text-align: right;  }
</style>

<div class="padding">
    <!-- header -->
    <div class="m-b">
      <div class="btn-toolbar">
        <div class="btn-group">
          <!-- <button class="btn btn-sm white"><i class="fa fa-plus"></i> &nbsp;Add Activity</button> -->
          <a class="btn btn-sm primary" href="<?php echo base_url(); ?>activities/add"><i class="fa fa-plus"></i> &nbsp;Add Activity</a>
          <!-- <button class="btn btn-sm primary" onclick="return modal_action('add');"><i class="fa fa-plus"></i> &nbsp;Add Activity</button> -->
          <!-- <a href="javascript: void(0);" class="btn btn-sm primary"><i class="fa fa-plus"></i> &nbsp;Add Activity</a> -->
        </div>
      </div>
    </div>
    <!-- / header -->
	<div class="box">
		<div class="box-header">
			<h2>Activities</h2>
		</div>
		<div class="table-responsive">
			<table ui-jp="dataTable" ui-options="{
				sAjaxSource: '<?php echo base_url(); ?>activity/data_activities',
				aoColumns: [
					{ mData: 'activity_title' },
					{ mData: 'start_date' },
					{ mData: 'end_date' },
					{ mData: 'quota', sClass: 'alignRight' },
					{ mData: 'price', sClass: 'alignRight' },
					{ mData: 'action' }
				]
			}" class="table table-striped b-t b-b">
				<thead>
					<tr>
						<th>Activity Title</th>
						<th>Start Date</th>
						<th>End Date</th>
						<th>Quota</th>
						<th>Price (IDR)</th>
						<th>Action</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>
	</div>
</div>

<!-- .modal -->
<div id="modal_activity" class="modal black-overlay fade" data-backdrop="false">
	<div class="modal-dialog">
		<form ui-jp="parsley" method="post" action="<?php echo base_url(); ?>master/add_activity" enctype="multipart/form-data">
			<div class="modal-content" id="modal_content_add"></div><!-- /.modal-content -->
		</form>
	</div>
</div>
<!-- / .modal -->