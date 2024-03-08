<?php $this->load->view('admin/layout/head'); ?>

<?php $this->load->view('admin/layout/sidebar'); ?>

<?php $this->load->view('admin/layout/top-navigation'); ?>

  <!-- page content -->

<div class="right_col" role="main">

    <div class="">

        <div class="page-title">

          <div class="title_left">

            <h3>Basic info <small>Data</small></h3>

          </div>

          <div class="title_right">

            <div class="col-md-5 col-sm-5 col-xs-12 form-group pull-right top_search">

              <div class="input-group">

               

              </div>

            </div>

          </div>

        </div>

        <div class="clearfix"></div>

         <div class="row">

            <div class="col-md-12 col-sm-12 ">

                <div class="x_panel">

			        <div class="x_title">

			             <a href="<?php echo base_url() ?>admin/Basic_Info/add" type="button" class="btn btn-round btn-success" style="color:#fff;">Add Data</a>

			            <ul class="nav navbar-right panel_toolbox">

			              <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>

			              </li>

			              <li class="dropdown">

			                <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-expanded="false"><i class="fa fa-wrench"></i></a>

			                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">

			                    <a class="dropdown-item" href="#">Settings 1</a>

			                    <a class="dropdown-item" href="#">Settings 2</a>

			                  </div>

			              </li>

			              <li><a class="close-link"><i class="fa fa-close"></i></a>

			              </li>

			            </ul>

			            <div class="clearfix"></div>

			                <div class="messge-block">

                                <h6 style="text-align: center;color:green;"><?php echo $this->session->flashdata('add-message'); ?></h6>

                            </div> 

			                <div class="messge-block">

			                    <h6 style="text-align: center;color:green;"><?php echo $this->session->flashdata('update-message'); ?></h6>

			                </div>

			                <div class="messge-block">
			                    <h6 style="text-align: center;color:green;"><?php echo $this->session->flashdata('delete-message'); ?></h6>
			                </div>

			            </div>

                        <div class="x_content">

	                        <div class="row">

	                            <div class="col-sm-12">

	                                <div class="card-box table-responsive">


										<table id="datatable" class="table table-striped table-bordered" style="width:100%">

							                <thead>

							                    <tr>

								                  <th>Comp Name</th>
								                  <th>Email</th>
								                  <th>Email 2</th>
								                  <th>Phone</th>
								                  <th>Phone 2</th>
								                  <th>Address</th>
								                  <th>Address 2</th>
								                  <th>Comp Logo</th>
								                  <th>Map 1</th>
								                  <th>map 2</th>
								                  <th>Linkedin</th>
								                  <th>Youtube</th>
								                  <th>Twitter</th>
								                  <th>Instagram</th>
								                  <th>Facebook</th>
								                  <th>Action</th>

							                    </tr>

							                </thead>

							                <tbody>

							                	<?php
												// print_r($Basic_Info);
												if(!empty($Basic_Info)) {
												foreach ($Basic_Info as  $value) {  ?>
												<input type="hidden" name="basic_id" id="" value="<?php echo $value["bi_id"]; ?>">
								                   <tr>
									                  <td><?php echo $value["comp_name"]; ?></td>
									                  <td><?php echo $value["email1"]; ?></td>
									                  <td><?php echo $value["email2"]; ?></td>
									                  <td><?php echo $value["phone1"]; ?></td>
									                  <td><?php echo $value["phone2"]; ?></td>
									                  <td><textarea cols="30" rows="4" readonly><?php echo $value["address1"]; ?></textarea></td>
									                  <td><textarea cols="30" rows="4" readonly><?php echo $value["address2"]; ?></textarea></td>
									                  <td><img src="<?php echo base_url() . 'uploads/' . $value["comp_logo"]; ?>" height="100px" width="100px" class="img-fluid" alt="Savani Logo"></td>
													  <td><textarea cols="30" rows="4" readonly><?php echo $value["map1"]; ?></textarea></td>
									                  <td><textarea cols="30" rows="4" readonly><?php echo $value["map2"]; ?></textarea></td>
									                  <td><?php echo $value["linkedin"]; ?></td>
									                  <td><?php echo $value["youtube"]; ?></td>
									                  <td><?php echo $value["twitter"]; ?></td>
									                  <td><?php echo $value["instagram"]; ?></td>
									                  <td><?php echo $value["facebook"]; ?></td>
									                  <td>
									                  	<a href="<?php echo base_url() ?>admin/Basic_Info/add/<?php echo $value["bi_id"]; ?>" class="btn btn-info">Edit</a>
	                                                    <a href="<?php echo base_url() ?>admin/Basic_Info/delete/<?php echo $value["bi_id"]; ?>" class="btn btn-danger" onclick="confirm('You want to delete data ?');">Delete</a>
									                  </td>
								                   </tr>

								                <?php	

								                } 
											}
												?>

							                </tbody>

							            </table>

	                                </div>

	                            </div>

	                        </div>

                        </div>

                </div>

            </div>

          </div>

    </div>

        <!-- /page content -->

</div>







<?php $this->load->view('admin/layout/footer'); ?>

<?php $this->load->view('admin/layout/script'); ?>