<!DOCTYPE html>
<html lang="en">

<head>
	<?php $this->load->view("admin/_partials/head.php") ?>
</head>

<body id="page-top">

	<?php $this->load->view("admin/_partials/navbar.php") ?>
	<div id="wrapper">

		<?php $this->load->view("admin/_partials/sidebar.php") ?>

		<div id="content-wrapper">

			<div class="container-fluid">

				<?php $this->load->view("admin/_partials/breadcrumb.php") ?>

				<!-- DataTables -->
				<div class="card mb-3">
					<div class="card-header">
						<b>Setting :: Feedback</b>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Name</th>
										<th>Messages</th>
                    <th>Email</th>
                    <th>Phone</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($feedback as $feedback): ?>
									<tr>
										<td width="150">
											<?php echo $feedback->name ?>
										</td>
										<td class="small">
											<?php echo substr($feedback->message, 0, 120) ?>
                    </td>
                    <td class="small">
                      <?php echo $feedback->email ?>
                    </td>
                    <td class="small">
                      <?php echo $feedback->phone ?>
                    </td>
                    <td width="250">
											<a onclick="deleteConfirm('<?php echo site_url('admin/feedback/delete/'.$feedback->feedbackRef) ?>')"
											 href="#!" class="btn btn-small text-danger"><i class="fas fa-trash"></i> Hapus</a>
										</td>
									</tr>
									<?php endforeach; ?>

								</tbody>
							</table>
						</div>
					</div>
				</div>

			</div>
			<!-- /.container-fluid -->

			<!-- Sticky Footer -->
			<?php $this->load->view("admin/_partials/footer.php") ?>

		</div>
		<!-- /.content-wrapper -->

	</div>
	<!-- /#wrapper -->


	<?php $this->load->view("admin/_partials/scrolltop.php") ?>
	<?php $this->load->view("admin/_partials/modal.php") ?>

	<?php $this->load->view("admin/_partials/js.php") ?>

  <script>
    function deleteConfirm(url){
      $('#btn-delete').attr('href', url);
      $('#deleteModal').modal();
    }
  </script>

</body>

</html>
