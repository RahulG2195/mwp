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
						<h2>Update Clients</h2>
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
						<form id="demo-form2" action="<?php echo  base_url(); ?>admin/clientsection/update" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
							<input type="hidden" id="first-name" required="required" class="form-control" name="client-id" value="<?php if(!empty($client)){ echo  $client[0]["client-id"]; } ?>">
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Alt name<span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="text" id="first-name" required="required" class="form-control" name="alt-name" value="<?php if(!empty($client)){ echo  $client[0]["alt-name"]; } ?>">
									<div class="error"><?php echo form_error('alt-name'); ?></div>
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Client image 1 <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<input type="file" id="last-name"   class="form-control" name="client-image-1">
								</div>
							</div>
							<div class="item form-group">
								<label class="col-form-label col-md-3 col-sm-3 label-align" for="last-name">Client image 1 <span class="required">*</span>
								</label>
								<div class="col-md-6 col-sm-6 ">
									<!-- <input type="file" id="last-name"  required="required" class="form-control" name="client-image-1"> -->
									<img src="<?php echo base_url() ?>uploads/client/<?php echo $client[0]["client-image-1"]; ?>" width="100px" height="100px">
									
								</div>
							</div>
							
							<div class="item form-group">
								<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Client image 2</label>
								<div class="col-md-6 col-sm-6 ">
									<input id="middle-name" class="form-control" type="file" name="client-image-2">
								</div>
							</div>
							<div class="item form-group">
								<label for="middle-name" class="col-form-label col-md-3 col-sm-3 label-align">Client image 2</label>
								<div class="col-md-6 col-sm-6 ">
									<!-- <input id="middle-name" class="form-control" type="file" name="client-image-2"> -->
									<img src="<?php echo  base_url() ?>uploads/client/<?php echo $client[0]["client-image-2"]; ?>" width="100px" height="100px">
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