<?php $this->load->view('admin/layout/head'); ?>

<?php $this->load->view('admin/layout/sidebar'); ?>

<?php $this->load->view('admin/layout/top-navigation'); ?>

<!-- page content -->

<div class="right_col" role="main">

	<div class="">

		<!-- <div class="page-title">

			<div class="title_left">

				<h3>Add Slider</h3>

			</div>

			

		</div> -->

		<div class="clearfix"></div>

		<div class="row">

			<div class="col-md-12 col-sm-12 ">

				<div class="x_panel">

					<div class="x_title">

						<h2>Add Slider</h2>

						<ul class="nav navbar-right panel_toolbox">

							<li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

							</li>

							<li class="dropdown">

								<a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false"><i class="fa fa-wrench"></i></a>

								<ul class="dropdown-menu" role="menu">

									<li><a class="dropdown-item" href="#">Settings 1</a>

									</li>

									<li><a class="dropdown-item" href="#">Settings 2</a>

									</li>

								</ul>

							</li>

							<li><a class="close-link"><i class="fa fa-close"></i></a>

							</li>

						</ul>

						<div class="clearfix"></div>

					</div>

					<div class="x_content">

						<br />

						<form id="demo-form2" action="<?php echo  base_url(); ?>admin/latestprojects/add" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

							<div class="item form-group">

								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Project Title <span class="required">*</span>

								</label>

								<div class="col-md-6 col-sm-6 ">

									<input type="text" id="first-name" required="required" class="form-control" name="project-name">

									<div class="error"><?php echo form_error('project-name'); ?></div>

								</div>

							</div>

							<div class="item form-group">

								<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Project Link <span class="required">*</span>

								</label>

								<div class="col-md-6 col-sm-6 ">

									<input type="text" id="last-name"  required="required" class="form-control" name="project-link">

									<div class="error"><?php echo form_error('project-link'); ?></div>

								</div>

							</div>

							<div class="item form-group">

								<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Project Image</label>

								<div class="col-md-6 col-sm-6 ">

									<input id="middle-name" class="form-control" type="file" name="project-image">

								</div>

							</div>

							<div class="ln_solid"></div>

							<div class="item form-group">

								<div class="col-md-6 col-sm-6 offset-md-3">

									<!-- <button class="btn btn-primary" type="button">Cancel</button>

									<button class="btn btn-primary" type="reset">Reset</button> -->

									<button type="submit" class="btn btn-success">Submit</button>

								</div>

							</div>



						</form>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<!-- /page content -->

<?php $this->load->view('admin/layout/footer'); ?>

<?php $this->load->view('admin/layout/script'); ?>