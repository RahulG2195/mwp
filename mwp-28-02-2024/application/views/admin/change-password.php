<?php $this->load->view('admin/layout/header'); ?>
           
<?php $this->load->view('admin/layout/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Change Password</h1>
          </div><!-- /.col -->
          <!-- <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
              <li class="breadcrumb-item active">Vendor Dashboard</li>
            </ol>
          </div> -->
          <!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
            <div class="row">
               <div class="col-lg-12">
                    <div class="card card-primary">
                        <div class="card-header">
                            <!-- <h3 class="card-title">Change Password</h3> -->
                        </div>
                        <!-- /.card-header -->
                        <!-- form start -->
                        <?php if ($this->session->flashdata('success')): ?>
                            <div style="color: green;"><?php echo $this->session->flashdata('success'); ?></div>
                        <?php endif; ?>

                        <?php if ($this->session->flashdata('error')): ?>
                            <div style="color: red;"><?php echo $this->session->flashdata('error'); ?></div>
                        <?php endif; ?>
                        <?php echo validation_errors(); ?>
                        <?php echo form_open('admin/AdminLogin/changepassword'); ?>
                            <div class="card-body">
                                <!-- <div class="form-group">
                                    <label for="exampleInputEmail1">Email address</label>
                                    <input type="email" class="form-control" id="exampleInputEmail1" placeholder="Enter email" name="email" value="<?php  if($this->session->userdata('admin_id')) { echo $this->session->userdata('email'); }else{ echo " "; }?>">
                                </div> -->
                                <div class="form-group">
                                    <label for="exampleInputPassword1">Current Password </label>
                                    <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter current password" name="old-password">
                                </div>
                                <div class="form-group">
                                    <div class="form-group">
                                        <label for="exampleInputPassword1">New Password </label>
                                        <input type="password" class="form-control" id="exampleInputPassword1" placeholder="Enter new password" name="new-password">
                                    </div>
                                </div>
                            </div>
                            <!-- /.card-body -->
                            <div class="card-footer">
                                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
                            </div>
                        </form>
                    </div>
               </div>
            </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php $this->load->view('admin/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>
