
<?php $this->load->view('admin/inc/admin_header_view') ?>

<div id="nc-main">
	<div class="panel">
		<div class="form-admin">
			<form action="">
				<label for=""></label>
			</form>
		</div>

		<div class="table-admin">
			<table>
				<thead>
					<tr>
						<td>Nombre</td>
						<td>Correo</td>
					</tr>
				</thead>
				<tbody>
					<?php  

					foreach ($findAllUserClient->result() as $user_admin) {
						echo '
							<tr>
								<td>' . $user_admin->firstName . $user_admin->primaryLastName . $user_admin->secondLastName . '</td>
								<td>' . $user_admin->email . '</td>
							</tr>
						';
					}

					?>
				</tbody>
			</table>
		</div>
	</div>
</div>

<?php $this->load->view('admin/inc/admin_footer_view') ?>
