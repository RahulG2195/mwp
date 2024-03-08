<?php $this->load->view('admin/layout/head'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<?php $this->load->view('admin/layout/top-navigation'); ?>

<?php
if (isset($project_list) || !empty($project_list)) {
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
                                <a href="<?php echo base_url('display_Project') ?>"><button class="btn btn-primary">Add Project</button></a>
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
                                        <th>Categorys</th>
                                        <th>descriptions</th>
                                        <th>state</th>
                                        <th>city</th>
                                        <th>video</th>
                                        <th>pdf</th>
                                        <th>thumbnail</th>
                                        <th>Status</th>
                                        <th>top_prj</th>
                                        <th>prj_listing</th>
                                        <th>Edit</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php
                                    $i = 1;
                                    foreach ($project_list as $value) {
                                    ?>
                                        <tr>
                                            <td><?php echo $i++ ?></td>
                                            <td><?php echo $value['prj_name'] ?></td>
                                            <td><?php echo $value['cat_name'] ?></td>
                                            <td><?php echo '<textarea name="" id="" cols="30" rows="5" disabled>' . $value['descriptions'] . '</textarea>' ?></td>
                                            <td><?php echo $value['state'] ?></td>
                                            <td><?php echo $value['city'] ?></td>
                                            <td><a href="<?php echo $value['video'] ?>" target="_blank"><button class="btn btn-success">View video</button></a></td>
                                            <td><a href="<?php echo base_url() . 'uploads/project/' . $value['pdf'] ?>" target="_blank"><button class="btn btn-success">View Pdf</button></a></td>
                                            <td><img src="<?php echo base_url() . 'uploads/project/' . $value['thumbnail'] ?>" height="150" width="200px" alt=""></td>
                                            <td>
                                                <?php
                                                if ($value['prj_status'] == 1) { ?>
                                                    <a href="<?php echo base_url() . 'Project/toggle_status/' . $value['prj_id'] . '/1' ?>"><button class="btn btn-success">Activated</button></a>
                                                <?php
                                                } else { ?>
                                                    <a href="<?php echo base_url() . 'Project/toggle_status/' . $value['prj_id'] . '/0' ?>"><button class="btn btn-danger">Deactivated</button></a>
                                                <?php }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($value['prj_listing'] == 1) { ?>
                                                    <a href="<?php echo base_url() . 'Project/toggle_listing/' . $value['prj_id'] . '/1' ?>"><button class="btn btn-success">Activated</button></a>
                                                <?php
                                                } else { ?>
                                                    <a href="<?php echo base_url() . 'Project/toggle_listing/' . $value['prj_id'] . '/0' ?>"><button class="btn btn-danger">Deactivated</button></a>
                                                <?php }
                                                ?>
                                            </td>
                                            <td>
                                                <?php
                                                if ($value['top_prj'] == 1) { ?>
                                                    <a href="<?php echo base_url() . 'Project/toggle_prj/' . $value['prj_id'] . '/1' ?>"><button class="btn btn-success">Activated</button></a>
                                                <?php
                                                } else { ?>
                                                    <a href="<?php echo base_url() . 'Project/toggle_prj/' . $value['prj_id'] . '/0' ?>"><button class="btn btn-danger">Deactivated</button></a>
                                                <?php }
                                                ?>
                                            </td>
                                            <td><a href="<?php echo  base_url() . 'Project/Edit_projects/' . $value['prj_id'] ?>"><button class="btn btn-warning">Edit</button></a></td>
                                            <td><a href="<?php echo base_url() . 'Project/Delete_project/' . $value['prj_id'] ?>"><button class="btn btn-danger" onclick="return confirm('Are you sure, Do you want to delete this Project')">Delete</button></a></td>
                                        </tr>
                                    <?php
                                    }
                                    ?>
                                </tbody>
                                <tfooter>
                                    <tr>
                                        <th>Sr No</th>
                                        <th>Project Name</th>
                                        <th>Categorys</th>
                                        <th>descriptions</th>
                                        <th>state</th>
                                        <th>city</th>
                                        <th>video</th>
                                        <th>pdf</th>
                                        <th>thumbnail</th>
                                        <th>Status</th>
                                        <th>top_prj</th>
                                        <th>prj_listing</th>
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