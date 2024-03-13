<?php $this->load->view('admin/layout/head'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<?php $this->load->view('admin/layout/top-navigation'); ?>

<?php
if (isset($project_detail_list) || !empty($project_detail_list)) {
?>
    <!-- page content -->

    <div class="right_col" role="main">
        <div class="display_data card">
            <div class="x_content">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="card-box table-responsive">
                            <div class="page-title d-flex justify-content-between">
                                <div class="title_left">
                                    <h3>projects List</h3>
                                </div>
                                <a href="<?php echo base_url('add_Project_detail') ?>"><button class="btn btn-primary">Add More</button></a>
                            </div>
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
                            <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Project Name</th>
                                        <th>Content</th>
                                        <th>Before Image</th>
                                        <th>After Images</th>
                                        <th>Dimension</th>
                                        <th>Status</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($project_detail_list as $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $value['prj_name'] ?></td>
                                            <td><?php echo '<textarea name="" id="" cols="35" rows="5" disabled>' . $value['prj_content'] . '</textarea>' ?></td>
                                            <td>
                                                <img src="<?php echo base_url() . 'uploads/project/before_after/' . $value['before_img'] ?>" height="150" width="200px" alt="">
                                            </td>
                                            <td>
                                                <img src="<?php echo base_url() . 'uploads/project/before_after/' . $value['after_img'] ?>" height="150" width="200px" alt="">
                                            </td>
                                            <td>
                                                <?php
                                                if ($value['dimension'] == 'V') { ?>
                                                    <a href="<?php echo base_url() . 'Project_detail/Dimensions/' . $value['pd_id'] . '/V' ?>"><button class="btn btn-success">Vertical</button></a>
                                                <?php
                                                } else { ?>
                                                    <a href="<?php echo base_url() . 'Project_detail/Dimensions/' . $value['pd_id'] . '/H' ?>"><button class="btn btn-danger">Horizontal</button></a>
                                                <?php }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($value['detail_status'] == 1) { ?>
                                                    <a href="<?php echo base_url() . 'Project_detail/toggle_status/' . $value['pd_id'] . '/1' ?>"><button class="btn btn-success">Activated</button></a>
                                                <?php
                                                } else { ?>
                                                    <a href="<?php echo base_url() . 'Project_detail/toggle_status/' . $value['pd_id'] . '/0' ?>"><button class="btn btn-danger">Deactivated</button></a>
                                                <?php }
                                                ?>
                                            </td>
                                            <td><a href="<?php echo  base_url() . 'Project_detail/Edit_detail/'. $value['pd_id'] ?>"><button class="btn btn-warning">Edit</button></a></td>
                                            <td><a href="<?php echo base_url() . 'Project_detail/Delete_detail/'. $value['pd_id'] ?>"><button class="btn btn-danger" onclick="return confirm('Are you sure, Do you want to delete this Project detail')">Delete</button></a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfooter>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Project Name</th>
                                        <th>Content</th>
                                        <th>Before Image</th>
                                        <th>After Images</th>
                                        <th>Dimension</th>
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
    </div>
<?php } else {
    redirect('Project/Display_project');
}
?>
<?php $this->load->view('admin/layout/footer'); ?>
<?php $this->load->view('admin/layout/script'); ?>