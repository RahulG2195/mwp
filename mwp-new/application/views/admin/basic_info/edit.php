<?php $this->load->view('admin/layout/head'); ?>

<?php $this->load->view('admin/layout/sidebar'); ?>

<?php $this->load->view('admin/layout/top-navigation'); ?>

<!-- page content -->

<div class="right_col" role="main">

	<div class="">
		<div class="clearfix"></div>

		<div class="row">

			<div class="col-md-12 col-sm-12 ">

				<div class="x_panel">

					<div class="x_title">

						<h2>Add Data</h2>

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

						<form id="demo-form2" action="<?php echo  base_url(); ?>admin/Aboutsection/update" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">

							<input type="hidden" id="first-name" required="required" class="form-control" name="about-id" value="<?php if(!empty($aboutsection)){ echo  $aboutsection[0]["about-id"]; } ?>">

							<div class="item form-group">

								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Main heading<span class="required">*</span>

									

								</label>

								<div class="col-md-6 col-sm-6 ">

									<input type="text" id="first-name" required="required" class="form-control" name="main-heading" value="<?php if(!empty($aboutsection)){ echo  $aboutsection[0]["main-heading"]; } ?>">

									<div class="error"><?php echo form_error('main-heading'); ?></div>

								</div>

							</div>

							<div class="item form-group">

								<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Sub heading<span class="required">*</span>

								</label>

								<div class="col-md-6 col-sm-6 ">

									<input type="text" id="last-name"  required="required" class="form-control" name="sub-heading" value="<?php if(!empty($aboutsection)){ echo  $aboutsection[0]["sub-heading"]; } ?>">

									<div class="error"><?php echo form_error('sub-heading'); ?></div>

								</div>

							</div>

							<div class="item form-group">

								<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Content</label>

								<div class="col-md-6 col-sm-6 ">

									<textarea class="form-control" name="content"><?php if(!empty($aboutsection)){ echo  $aboutsection[0]["content"]; } ?></textarea>

									<div class="error"><?php echo form_error('content'); ?></div>

								</div>

							</div>

							<div class="ln_solid"></div>

							<div class="item form-group">

								<div class="col-md-6 col-sm-6 offset-md-3">

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