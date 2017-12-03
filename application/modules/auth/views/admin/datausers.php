<div class="padding">
	<div class="box">
		<div class="box-header">
			<h2>Data Users</h2>
		</div>
		<div class="table-responsive">
			<table ui-jp="dataTable" ui-options="{
				sAjaxSource: '<?php echo base_url(); ?>auth/datausers',
				aoColumns: [
					{ mData: 'username' },
					{ mData: 'full_name' },
					{ mData: 'email' },
					{ mData: 'created' },
					{ mData: 'last_login' }
				]
			}" class="table table-striped b-t b-b">
				<thead>
					<tr>
						<th>Username</th>
						<th>Fullname</th>
						<th>Email</th>
						<th>Registered</th>
						<th>Last Login</th>
					</tr>
				</thead>
				<tbody>
				</tbody>
			</table>
		</div>

	</div>
</div>