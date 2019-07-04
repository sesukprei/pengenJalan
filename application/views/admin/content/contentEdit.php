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

				<!-- Card  -->
				<div class="card mb-3">
					<div class="card-header">

						<a href="<?php echo site_url('admin/content/') ?>"><i class="fas fa-arrow-left"></i>
							Back</a>
					</div>
					<div class="card-body">

						<form action="<?php base_url('admin/content/contentEdit') ?>" method="post" enctype="multipart/form-data">

							<input type="hidden" name="id" value="<?php echo $content->contentRef?>" />

              <div class="form-group">
								<label for="title">Title*</label>
								<input class="form-control <?php echo form_error('title') ? 'is-invalid':'' ?>"
								 type="text" name="title" placeholder="title" value="<?php echo $content->title ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('title') ?>
								</div>
							</div>

              <div class="form-group">
								<label for="titleDetail">Title Detail*</label>
								<input class="form-control <?php echo form_error('titleDetail') ? 'is-invalid':'' ?>"
								 type="text" name="titleDetail" placeholder="title detail" value="<?php echo $content->titleDetail ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('titleDetail') ?>
								</div>
							</div>

              <div class="form-group">
								<label for="synopsis">Synopsis*</label>
								<input class="form-control <?php echo form_error('synopsis') ? 'is-invalid':'' ?>"
								 type="text" name="synopsis" placeholder="synopsis" value="<?php echo $content->synopsis ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('synopsis') ?>
								</div>
							</div>

              <div class="form-group">
								<label for="name">Content*</label>
								<textarea class="form-control <?php echo form_error('content') ? 'is-invalid':'' ?>"
								 name="content" placeholder="content..."><?php echo $content->content ?></textarea>
								<div class="invalid-feedback">
									<?php echo form_error('content') ?>
								</div>
							</div>

              <div class="form-group">
								<label for="name">Image</label>
								<input class="form-control-file <?php echo form_error('image') ? 'is-invalid':'' ?>"
								 type="file" name="image" />
								<input type="hidden" name="image_content" value="<?php echo $content->image ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('image') ?>
								</div>
							</div>

              <div class="form-group">
								<label for="link">Link*</label>
								<input class="form-control <?php echo form_error('link') ? 'is-invalid':'' ?>"
								 type="text" name="link" placeholder="link" value="<?php echo $content->link ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('link') ?>
								</div>
							</div>

              <div class="form-group">
								<label for="metaTitle">Meta Title*</label>
								<input class="form-control <?php echo form_error('metaTitle') ? 'is-invalid':'' ?>"
								 type="text" name="metaTitle" placeholder="meta Title" value="<?php echo $content->metaTitle ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('metaTitle') ?>
								</div>
							</div>

              <div class="form-group">
								<label for="metaDesc">Meta Description*</label>
								<input class="form-control <?php echo form_error('metaDesc') ? 'is-invalid':'' ?>"
								 type="text" name="metaDesc" placeholder="meta Desc" value="<?php echo $content->metaDesc ?>" />
								<div class="invalid-feedback">
									<?php echo form_error('metaDesc') ?>
								</div>
							</div>

							<input class="btn btn-success" type="submit" name="btn" value="Save" />
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
