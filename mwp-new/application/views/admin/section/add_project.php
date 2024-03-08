<?php $this->load->view('admin/layout/head'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<?php $this->load->view('admin/layout/top-navigation'); ?>

<?php
// if(isset($edit_project) || !empty($edit_project)){

// }
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title d-flex justify-content-between">
            <div class="title_left">
                <h3>Add projects</h3>
            </div>
            <a href="<?php echo base_url('view_Project')?>"><button class="btn btn-primary">Project List</button></a>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Projects<small>Add projects</small></h2>
                        <ul class="nav navbar-right panel_toolbox">
                            <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                            </li>
                        </ul>
                        <div class="clearfix"></div>
                    </div>
                    <div class="x_content">
                        <?php
                        if ($this->session->flashdata('error')) {
                            echo '<div class="alert alert-danger" role="alert">
                            ' . $this->session->flashdata('error') . '
                          </div>';
                        } elseif ($this->session->flashdata('success')) {
                            echo '<div class="alert alert-success" role="alert">
                            ' . $this->session->flashdata('success') . '
                          </div>';
                        }
                        ?>
                        <form class="" action="<?php echo base_url() ?>Project/Add_projects" method="post" novalidate enctype="multipart/form-data">
                            <input type="hidden" name="project_identity" id="project_identity" value="<?php echo (isset($edit_project->prj_id) ? $this->encryption->encrypt($edit_project->prj_id ) : '') ?>">
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="">Project Name</label>
                                    <input class="form-control" name="prj_name" placeholder="Project name"value="<?php echo (isset($edit_project->prj_name) ? $edit_project->prj_name : '') ?>" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="">Seo Url</label>
                                    <input class="form-control" name="seo_url" placeholder="Project Seo Url" value="<?php echo (isset($edit_project->seo_url) ? $edit_project->seo_url : '') ?>" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="">category</label>
                                    <select class="form-control" name="categorys" id="" required>
                                        <option value="" >Select Category</option>
                                        <?php 
                                        foreach ($category as $value) {
                                            if(isset($edit_project->categorys) && $edit_project->categorys == $value['cat_id']){
                                                echo '<option value="'.$value['cat_id'].'" selected >'.$value['cat_name'].'</option>';
                                            }else{
                                                echo '<option value="'.$value['cat_id'].'" >'.$value['cat_name'].'</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="">state</label>
                                    <select class="form-control" name="state" id="state">
                                    <option value="">Select State</option>
                                    <option value="Andhra Pradesh" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Andhra Pradesh') ? 'Selected' : '')?>>Andhra Pradesh</option>
                                    <option value="Arunachal Pradesh" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Arunachal Pradesh') ? 'Selected' : '')?>>Arunachal Pradesh</option>
                                    <option value="Assam" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Assam') ? 'Selected' : '')?>>Assam</option>
                                    <option value="Bihar" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Bihar') ? 'Selected' : '')?>>Bihar</option>
                                    <option value="Chhattisgarh" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Chhattisgarh') ? 'Selected' : '')?>>Chhattisgarh</option>
                                    <option value="Delhi" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Delhi') ? 'Selected' : '')?>>Delhi</option>
                                    <option value="Goa" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Goa') ? 'Selected' : '')?>>Goa</option>
                                    <option value="Gujarat" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Gujarat') ? 'Selected' : '')?>>Gujarat</option>
                                    <option value="Haryana" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Haryana') ? 'Selected' : '')?>>Haryana</option>
                                    <option value="Himachal Pradesh" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Himachal Pradesh') ? 'Selected' : '')?>>Himachal Pradesh</option>
                                    <option value="Jharkhand" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Jharkhand') ? 'Selected' : '')?>>Jharkhand</option>
                                    <option value="Karnataka" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Karnataka') ? 'Selected' : '')?>>Karnataka</option>
                                    <option value="Kerala" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Kerala') ? 'Selected' : '')?>>Kerala</option>
                                    <option value="Madhya Pradesh" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Madhya Pradesh') ? 'Selected' : '')?>>Madhya Pradesh</option>
                                    <option value="Maharashtra" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Maharashtra') ? 'Selected' : '')?>>Maharashtra</option>
                                    <option value="Manipur" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Manipur') ? 'Selected' : '')?>>Manipur</option>
                                    <option value="Meghalaya" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Meghalaya') ? 'Selected' : '')?>>Meghalaya</option>
                                    <option value="Mizoram" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Mizoram') ? 'Selected' : '')?>>Mizoram</option>
                                    <option value="Nagaland" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Nagaland') ? 'Selected' : '')?>>Nagaland</option>
                                    <option value="Odisha" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Odisha') ? 'Selected' : '')?>>Odisha</option>
                                    <option value="Punjab" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Punjab') ? 'Selected' : '')?>>Punjab</option>
                                    <option value="Rajasthan" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Rajasthan') ? 'Selected' : '')?>>Rajasthan</option>
                                    <option value="Sikkim" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Sikkim') ? 'Selected' : '')?>>Sikkim</option>
                                    <option value="Tamil Nadu" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Tamil') ? 'Selected' : '')?>>Tamil Nadu</option>
                                    <option value="Telangana" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Telangana') ? 'Selected' : '')?>>Telangana</option>
                                    <option value="Tripura" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Tripura') ? 'Selected' : '')?>>Tripura</option>
                                    <option value="Uttar Pradesh" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Uttar Pradesh') ? 'Selected' : '')?>>Uttar Pradesh</option>
                                    <option value="Uttarakhand" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Uttarakhand') ? 'Selected' : '')?>>Uttarakhand</option>
                                    <option value="West Bengal" <?php echo ((isset($edit_project->state) && $edit_project->state == 'West Bengal') ? 'Selected' : '')?>>West Bengal</option>
                                    <option value="Andaman and Nicobar Islands" <?php echo ((isset($edit_project->state) && $edit_project->state == 'Andaman and Nicobar Islands') ? 'Selected' : '')?>>Andaman and Nicobar Islands</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="">city</label>
                                    <input class="form-control" name="city" placeholder="City"value="<?php echo (isset($edit_project->city) ? $edit_project->city : '') ?>" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="">video</label>
                                    <input class="form-control" name="video" placeholder="Video"value="<?php echo (isset($edit_project->video) ? $edit_project->video : '') ?>" />
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="">pdf</label>
                                    <input class="form-control" class='optional' name="pdf" type="file" />
                                    <?php
                                    if (isset($edit_project->pdf)) {
                                        echo $edit_project->pdf;
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="">Image<span class="required">*</span></label>
                                    <input class="form-control" class='optional' name="thumbnail" type="file" />
                                    <?php
                                    if (isset($edit_project->thumbnail)) {
                                        echo '<img src="' . base_url() . 'uploads/project/' . $edit_project->thumbnail . '" height="150" width="200px" alt="">';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="">Sub Banner (optional)</label>
                                    <input class="form-control" class='optional' name="sub_banner" type="file" />
                                    <?php
                                    if (isset($edit_project->sub_banner)) {
                                        echo '<img src="' . base_url() . 'uploads/project/' . $edit_project->sub_banner . '" height="150" width="200px" alt="">';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="">Short Description<span class="required">*</span></label>
                                    <textarea name="short_desc"  class="form-control"  id="short_desc" cols="30" rows="2"><?php echo (isset($edit_project->short_desc) ? $edit_project->short_desc : '') ?></textarea>
                                </div>
                            </div>
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label class="">Description<span class="required">*</span></label>
                                    <textarea name="descriptions"  class="form-control"  id="descriptions" cols="30" rows="10"><?php echo (isset($edit_project->descriptions) ? $edit_project->descriptions : '') ?></textarea>
                                </div>
                            </div>
                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type='submit' name="team_insert_btn" class="btn btn-primary">Submit</button>
                                        <button type='reset' class="btn btn-success">Reset</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php $this->load->view('admin/layout/footer'); ?>
<?php $this->load->view('admin/layout/script'); ?>