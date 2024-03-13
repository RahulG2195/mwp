<?php $this->load->view('admin/layout/head'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<?php $this->load->view('admin/layout/top-navigation'); ?>

<?php
// if(isset($edit_team) || !empty($edit_team)){

// }
?>
<!-- page content -->
<div class="right_col" role="main">
    <div class="">
        <div class="page-title">
            <div class="title_left">
                <h3>Our Team</h3>
            </div>

            <!-- <div class="title_right">
                <div class="col-md-5 col-sm-5 form-group pull-right top_search">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for...">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Go!</button>
                        </span>
                    </div>
                </div>
            </div> -->
        </div>
        <div class="clearfix"></div>

        <div class="row">
            <div class="col-md-12 col-sm-12">
                <div class="x_panel">
                    <div class="x_title">
                        <h2>Our Team <small>Add Team</small></h2>
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
                        <form class="" action="<?php echo base_url() ?>Team/Add_team" method="post" novalidate enctype="multipart/form-data">
                            <!-- <span class="section">Personal Info</span> -->
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Name (optional)</label>
                                <div class="col-md-6 col-sm-6">
                                    <input type="hidden" name="team_identity" id="team_identity" value="<?php echo (isset($edit_team->team_id) ? $this->encryption->encrypt($edit_team->team_id) : '') ?>">

                                    <input class="form-control" name="team_name" placeholder="Team name" value="<?php echo (isset($edit_team->team_name) ? $edit_team->team_name : '') ?>" />
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Image<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <input class="form-control" class='optional' name="team_img" type="file" />
                                    <?php
                                    if (isset($edit_team->team_img)) {
                                        echo '<img src="' . base_url() . 'uploads/team/' . $edit_team->team_img . '" height="150" width="200px" alt="">';
                                    }
                                    ?>
                                </div>
                            </div>
                            <div class="field item form-group">
                                <label class="col-form-label col-md-3 col-sm-3  label-align">Status<span class="required">*</span></label>
                                <div class="col-md-6 col-sm-6">
                                    <select name="team_status" class="form-control" id="">
                                        <option value="1" <?php echo (isset($edit_team->team_status) && $edit_team->team_status == 1) ? 'selected' : '' ?>>Active</option>
                                        <option value="0" <?php echo (isset($edit_team->team_status) && $edit_team->team_status == 0) ? 'selected' : '' ?>>Deactive</option>
                                    </select>
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
    <div class="display_data card">
        <div class="x_content">
            <div class="row">
                <div class="col-sm-12">
                    <div class="card-box table-responsive">
                        <h4 class=" m-b-30 py-2 text-center">
                            Team list
                        </h4>
                        <?php
                        // print_r($team);
                        ?>
                        <table id="datatable-checkbox" class="table table-striped table-bordered bulk_action" style="width:100%">
                            <thead>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Team Name</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>Edit</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $i = 1;
                                foreach ($team as $value) {
                                    echo '<tr>
                                            <td>' . $i++ . '</td>
                                            <td>' . $value['team_name'] . '</td>
                                            <td><img src="' . base_url() . 'uploads/team/' . $value['team_img'] . '" height="150" width="200px" alt=""></td>
                                            <td>'; ?>
                                    <?php
                                    if ($value['team_status'] == 1) {
                                        echo '<a href="'.base_url() . 'Team/toggle_status/'. $value['team_id'].'/1"><button class="btn btn-success">Activated</button></a>';
                                    } else {
                                        echo '<a href="'.base_url() . 'Team/toggle_status/'. $value['team_id'].'/0"><button class="btn btn-danger">Deactivated</button></a>';
                                    }
                                    ?>
                                    </td>
                                    <td><a href="<?php echo  base_url() . 'Team/Edit_team/'. $value['team_id'] ?>"><button class="btn btn-warning">Edit</button></a></td>
                                    <td><a href="<?php echo base_url() . 'Team/Delete_team/'. $value['team_id'] ?>"><button class="btn btn-danger" onclick="return confirm('Are you sure, Do you want to delete this team')">Delete</button></a></td>
                                    </tr>
                                <?php
                                }
                                ?>
                            </tbody>
                            <tfooter>
                                <tr>
                                    <th>Sr No</th>
                                    <th>Team Name</th>
                                    <th>Image</th>
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

<?php $this->load->view('admin/layout/footer'); ?>
<?php $this->load->view('admin/layout/script'); ?>