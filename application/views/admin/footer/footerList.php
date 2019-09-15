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

				<?php if ($this->session->flashdata('success')): ?>
				<div class="alert alert-success" role="alert">
					<?php echo $this->session->flashdata('success'); ?>
				</div>
				<?php endif; ?>

				<div class="card mb-3">
					<div class="card-header">
						<!-- <a href="<?php echo site_url('admin/footer/') ?>"><i class="fas fa-arrow-left"></i> Back</a> -->
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/footer/footerList') ?>" method="post" enctype="multipart/form-data" >

              <!-- <input type="hidden" name="id" value="<?php echo $footer->id?>" /> -->

							<div class="form-group">
								<label for="name">Synopsis*</label>
								<textarea class="form-control <?php echo form_error('synopsis') ? 'is-invalid':'' ?>"
								 name="synopsis" placeholder="synopsis..."></textarea>
								<div class="invalid-feedback">
									<?php echo $footer->synopsis ?>
								</div>
							</div>

              <div class="form-group">
								<label for="title">Instagram*</label>
								<input class="form-control <?php echo form_error('instagram') ? 'is-invalid':'' ?>"
								 type="text" name="instagram" placeholder="instagram" value="" />
								<div class="invalid-feedback">
									<?php echo $footer->instagram ?>
								</div>
							</div>

              <div class="form-group">
								<label for="title">Facebook*</label>
								<input class="form-control <?php echo form_error('facebook') ? 'is-invalid':'' ?>"
								 type="text" name="facebook" placeholder="facebook" value="" />
								<div class="invalid-feedback">
									<?php echo $footer->facebook ?>
								</div>
							</div>

              <div class="form-group">
								<label for="title">Phone*</label>
								<input class="form-control <?php echo form_error('phone') ? 'is-invalid':'' ?>"
								 type="text" name="phone" placeholder="phone" value="" />
								<div class="invalid-feedback">
									<?php echo $footer->phone ?>
								</div>
							</div>

              <div class="form-group">
								<label for="title">Email*</label>
								<input class="form-control <?php echo form_error('email') ? 'is-invalid':'' ?>"
								 type="text" name="email" placeholder="email" value="" />
								<div class="invalid-feedback">
									<?php echo $footer->email ?>
								</div>
							</div>

              <div class="form-group">
								<label for="name">Address*</label>
								<textarea class="form-control <?php echo form_error('address') ? 'is-invalid':'' ?>"
								 name="address" placeholder="address..."></textarea>
								<div class="invalid-feedback">
									<?php echo $footer->address ?>
								</div>
							</div>

              <div class="form-group">
                <label for="title">Location*</label>
                <input class="form-control <?php echo form_error('location') ? 'is-invalid':'' ?>"
                 type="text" name="location" placeholder="location" value="" />
                <div class="invalid-feedback">
                  <?php echo $footer->location ?>
                </div>
              </div>

							<input class="btn btn-success" type="submit" name="btn" value="save" />
						</form>

					</div>

					<div class="card-footer small text-muted">
						* required fields
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

		<?php $this->load->view("admin/_partials/js.php") ?>

</body>

</html>
