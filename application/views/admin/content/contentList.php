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
						<a href="<?php echo site_url('admin/content/contentAdd') ?>"><i class="fas fa-plus"></i> Add New</a>
					</div>
					<div class="card-body">

						<div class="table-responsive">
							<table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
								<thead>
									<tr>
										<th>Title</th>
										<th>Title Detail</th>
										<th>Synopsis</th>
										<th>Content</th>
										<th>Image</th>
										<th>Link</th>
										<th>User</th>
										<th>Action</th>
									</tr>
								</thead>
								<tbody>
									<?php foreach ($content as $content): ?>
									<tr>
										<td width="150">
											<?php echo $content->title ?>
										</td>
										<td>
											<?php echo $content->titleDetail ?>
										</td>
										<td>
											<?php echo $content->synopsis ?>
										</td>
										<td class="small">
											<?php echo substr($content->content, 0, 120) ?>...</td>
										<td>
											<img src="<?php echo base_url('upload/content/'.$content->image) ?>" width="64" />
										</td>
										<td>
											<?php echo $content->link ?>
										</td>
										<td>
											<?php echo $content->user ?>
										</td>
										<td>
											<a href="<?php echo site_url('admin/content/contentEdit/'.$content->contentRef) ?>"
											 class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
											<a onclick="deleteConfirm('<?php echo site_url('admin/content/contentDelete/'.$content->contentRef) ?>')"
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
