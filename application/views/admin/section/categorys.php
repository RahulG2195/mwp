<?php $this->load->view('admin/layout/head'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<?php $this->load->view('admin/layout/top-navigation'); ?>

<?php
// if(isset($edit_category) || !empty($edit_category)){

// }
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Category</h3>
            </div>
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Category <small>Add Category</small></h2>
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
                        <form class="" action="<?php echo base_url() ?>Category/Add_category" method="post" novalidate enctype="multipart/form-data" >
                            <!-- <span class="section">Personal Info</span> -->
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Name</label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="hidden" name="category_identity" id="category_identity" value="<?php echo (isset($edit_category->cat_id) ? $this->encryption->encrypt($edit_category->cat_id) : '') ?>">

                                    <input class="form-control" name="cat_name" placeholder="category name" value="<?php echo (isset($edit_category->cat_name) ? $edit_category->cat_name : '') ?>" />
                                </div>
                            </div>

                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Image</label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='optional' name="cat_img" type="file" />
                                    <?php
                                    if (isset($edit_category->cat_img)) {
                                        echo '<img src="' . base_url() . 'uploads/project/' . $edit_category->cat_img . '" height="150" width="200px" alt="">';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="ln_solid">
                                <div class="form-group">
                                    <div class="col-md-6 offset-md-3">
                                        <button type='submit' name="category_insert_btn" class="btn btn-primary">Submit</button>
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
    <?php
    if (isset($category)) {
    ?>
        <div class="display_data card">
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <h4 class=" m-b-30 py-2 text-center">
                                Category list
                            </h4>

                            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>category Name</th>
                                        <th>Image</th>
                                        <th>Display Home</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $count = 1;
                                    foreach ($category as $value) {
                                        echo '<tr>
                                            <td>' . $count . '</td>
                                            <td>' . $value['cat_name'] . '</td>
                                            <td>
                                                <img src="'. base_url() . 'uploads/project/' . $value['cat_img'] .'" height="150" width="200px" alt="">
                                            </td>
                                            <td>'; ?>
                                            <?php
                                            if ($value['cat_fliter'] == 1) {
                                                echo '<a href="' . base_url() . 'category/toggle_filter/' . $value['cat_id'] . '/1"><button class="btn btn-success">Activated</button></a>';
                                            } else {
                                                echo '<a href="' . base_url() . 'category/toggle_filter/' . $value['cat_id'] . '/0"><button class="btn btn-danger">Deactivated</button></a>';
                                            }
                                            ?>
                                            </td>
                                            <td>
                                        <?php
                                        if ($value['cat_status'] == 1) {
                                            echo '<a href="' . base_url() . 'category/toggle_status/' . $value['cat_id'] . '/1"><button class="btn btn-success">Activated</button></a>';
                                        } else {
                                            echo '<a href="' . base_url() . 'category/toggle_status/' . $value['cat_id'] . '/0"><button class="btn btn-danger">Deactivated</button></a>';
                                        }
                                        ?>
                                        </td>
                                        <td><a href="<?php echo  base_url() . 'category/Edit_category/' . $value['cat_id'] ?>"><button class="btn btn-warning">Edit</button></a></td>
                                        <td><a href="<?php echo base_url() . 'category/Delete_category/' . $value['cat_id'] ?>"><button class="btn btn-danger" onclick="return confirm('Are you sure, Do you want to delete this category')">Delete</button></a></td>
                                        </tr>
                                    <?php
                                    $count++;
                                    }
                                    ?>
                                </tbody>
                                <tfooter>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>category Name</th>
                                        <th>Image</th>
                                        <th>Display Home</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </tfooter>
                            </table>
                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <?php } ?>
</div>

<?php $this->load->view('admin/layout/footer'); ?>
<?php $this->load->view('admin/layout/script'); ?>