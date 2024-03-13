<?php $this->load->view('admin/layout/head'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<?php $this->load->view('admin/layout/top-navigation'); ?>

<?php
// if(isset($prj_detail) || !empty($prj_detail)){

// }
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title d-flex justify-content-between">
            <div class="title_left">
                <h3>Add projects Detail</h3>
            </div>
            <a href="<?php echo base_url('view_Project_detail')?>"><button class="btn btn-primary">Project Detail List</button></a>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Projects<small>Add Detail</small></h2>
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
                        <form class="" action="<?php echo base_url() ?>Project_detail/Add_Projects_Detail" method="post" novalidate enctype="multipart/form-data">
                            <input type="hidden" name="detail_identity" id="detail_identity" value="<?php echo (isset($prj_detail->pd_id) ? $this->encryption->encrypt($prj_detail->pd_id) : '') ?>">
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="">Projects List</label>
                                    <select class="form-control" name="prj_id" id="" required>
                                        <option value="" >Select Project</option>
                                        <?php 
                                        foreach ($project as $value) {
                                            if(isset($prj_detail->prj_id) && $prj_detail->prj_id == $value['prj_id']){
                                                echo '<option value="'.$value['prj_id'].'" selected >'.$value['prj_name'].'</option>';
                                            }else{
                                                echo '<option value="'.$value['prj_id'].'" >'.$value['prj_name'].'</option>';
                                            }
                                        }
                                        ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-3">
                                <div class="form-group">
                                    <label class="">Image Dimenstion*</label>
                                    <select class="form-control" name="dimension" id="" required>
                                        <option value="">Select Dimenstion</option>
                                        <option value="H" selected>Horizontal</option>
                                        <option value="V"  >Vertical</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="">Before Image</label>
                                    <input class="form-control" class='optional' name="before_img" type="file" />
                                    <?php
                                    if (isset($prj_detail->before_img)) {
                                        echo '<img src="' . base_url() . 'uploads/project/before_after/' . $prj_detail->before_img . '" height="150" width="200px" alt="">';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-6">
                                <div class="form-group">
                                    <label class="">After Image<span class="required">*</span></label>
                                    <input class="form-control" class='optional' name="after_img" type="file" />
                                    <?php
                                    if (isset($prj_detail->after_img)) {
                                        echo '<img src="' . base_url() . 'uploads/project/before_after/' . $prj_detail->after_img . '" height="150" width="200px" alt="">';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="col-md-6 col-sm-12">
                                <div class="form-group">
                                    <label class="">Description<span class="required">*</span></label>
                                    <textarea name="prj_content"  class="form-control"  id="prj_content" cols="30" rows="10"><?php echo (isset($prj_detail->prj_content) ? $prj_detail->prj_content : '') ?></textarea>
                                </div>
                            </div>
                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 ">
                                        <button type='submit' name="detail_insert_btn" class="btn btn-primary">Submit</button>
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