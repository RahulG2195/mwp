<?php $this->load->view('admin/layout/head'); ?> <?php $this->load->view('admin/layout/sidebar'); ?> <?php $this->load->view('admin/layout/top-navigation'); 
if(!empty($edit_info)){
foreach ($edit_info as $value) {
	$bi_id = $value['bi_id'];
	$name = $value['comp_name'];
	$email1 = $value['email1'];
	$email2 = $value['email2'];
	$phone1 = $value['phone1'];
	$phone2 = $value['phone2'];
	$address1 = $value['address1'];
	$address2 = $value['address2'];
	$comp_logo = $value['comp_logo'];
	$map1 = $value['map1'];
	$map2 = $value['map2'];
	$linkedin = $value['linkedin'];
	$youtube = $value['youtube'];
	$twitter = $value['twitter'];
	$instagram = $value['instagram'];
	$facebook = $value['facebook'];
	// $name = $value['name'];
}
}
?>
<!-- page content -->
<div class="right_col" role="main">
  <div class="">
    <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 ">
        <div class="x_panel">
          <div class="x_title">
            <h2>Add Basic Data</h2>
            <ul class="nav navbar-right panel_toolbox">
              <li>
                <a class="collapse-link">
                  <i class="fa fa-chevron-up"></i>
                </a>
              </li>
              <li class="dropdown">
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                  <i class="fa fa-wrench"></i>
                </a>
                <ul class="dropdown-menu" role="menu">
                  <li>
                    <a class="dropdown-item" href="#">Settings 1</a>
                  </li>
                  <li>
                    <a class="dropdown-item" href="#">Settings 2</a>
                  </li>
                </ul>
              </li>
              <li>
                <a class="close-link">
                  <i class="fa fa-close"></i>
                </a>
              </li>
            </ul>
            <div class="clearfix"></div>
          </div>
          <div class="x_content">
            <br />
            <form id="demo-form2" action="<?php echo  base_url(); ?>admin/Basic_Info/add" class="form-horizontal form-label-left" method="POST" enctype="multipart/form-data">
              <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Company Name <span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" class="form-control" name="comp_name" value="<?php echo isset($name) ? $name : ''?>">
                  <div class="error"> <?php echo form_error('comp_name'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email 1<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" class="form-control" name="email1" value="<?php echo isset($email1) ? $email1 : ''?>">
                  <div class="error"> <?php echo form_error('email1'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Email 2
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" class="form-control" name="email2" value="<?php echo isset($email2) ? $email2 : ''?>">
                  <div class="error"> <?php echo form_error('email2'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Phone 1<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" class="form-control" name="phone1" value="<?php echo isset($phone1) ? $phone1 : ''?>">
                  <div class="error"> <?php echo form_error('phone1'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Phone 2
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" class="form-control" name="phone2" value="<?php echo isset($phone2) ? $phone2 : ''?>">
                  <div class="error"> <?php echo form_error('phone2'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Address 1<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" class="form-control" name="address1" value="<?php echo isset($address1) ? $address1 : ''?>">
                  <div class="error"> <?php echo form_error('address1'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Address 2<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" class="form-control" name="address2" value="<?php echo isset($address2) ? $address2 : ''?>">
                  <div class="error"> <?php echo form_error('address2'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Logo<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
					<?php 
					if(isset($comp_logo))
					{?>
					<img src="<?php echo base_url() . 'uploads/' . $comp_logo ?>" height="100px" width="100px" class="img-fluid" alt="">
					<input type="hidden" name="comp_id" id="" value="<?php echo $bi_id ?>">
					<input type="hidden" name="update" id="" value="update">
					<input type="hidden" name="old_img" id="" value="<?php echo $value['comp_logo']?>">
					<?php
					}
					?>
                  <input type="file" id="first-name" class="form-control" name="comp_logo">
                  <div class="error"> <?php echo form_error('comp_logo'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Map 1
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="url" id="first-name" class="form-control" name="map1" value="<?php echo isset($map1) ? $map1 : ''?>">
                  <div class="error"> <?php echo form_error('map1'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Map 2<span class="required">*</span>
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="url" id="first-name" class="form-control" name="map2" value="<?php echo isset($map2) ? $map2 : ''?>">
                  <div class="error"> <?php echo form_error('map2'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Linkedin
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="url" id="first-name" class="form-control" name="linkedin" value="<?php echo isset($linkedin) ? $linkedin : ''?>">
                  <div class="error"> <?php echo form_error('linkedin'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Youtube
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="url" id="first-name" class="form-control" name="youtube" value="<?php echo isset($youtube) ? $youtube : ''?>">
                  <div class="error"> <?php echo form_error('youtube'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Twitter
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="url" id="first-name" class="form-control" name="twitter" value="<?php echo isset($twitter) ? $twitter : ''?>">
                  <div class="error"> <?php echo form_error('twitter'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Instagram
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="url" id="first-name" class="form-control" name="instagram"  value="<?php echo isset($instagram) ? $instagram : ''?>">
                  <div class="error"> <?php echo form_error('instagram'); ?> </div>
                </div>
              </div>
			  <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">Facebook
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="url" id="first-name" class="form-control" name="facebook" value="<?php echo isset($facebook) ? $facebook : ''?>">
                  <div class="error"> <?php echo form_error('facebook'); ?> </div>
                </div>
              </div>
			  <!-- <div class="item form-group">
                <label class="col-form-label col-md-3 col-sm-3 label-align" for="first-name">email_icon
                </label>
                <div class="col-md-6 col-sm-6 ">
                  <input type="text" id="first-name" class="form-control" name="email_icon">
                  <div class="error"> <?php //echo form_error('email_icon'); ?> </div>
                </div>
              </div> -->
              
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
<!-- /page content --> <?php $this->load->view('admin/layout/footer'); ?> <?php $this->load->view('admin/layout/script'); ?>