<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <section class="content-header">
          <div class="container-fluid">
              <div class="row mb-2">
                  <div class="col-sm-6">
                      <h1>Edit Vendor</h1>
                  </div>
                  <div class="col-sm-6">
                      <ol class="breadcrumb float-sm-right">
                          <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
                          <li class="breadcrumb-item active">Edit Vendor</li>
                      </ol>
                  </div>
              </div>
          </div><!-- /.container-fluid -->
      </section>

      <!-- Main content -->
      <section class="content">
          <div class="container-fluid">
              <!-- SELECT2 EXAMPLE -->
              <div class="card card-default">
                  <div class="card-header d-none">
                      <h3 class="card-title">Select2 (Default Theme)</h3>

                      <div class="card-tools">
                          <button type="button" class="btn btn-tool" data-card-widget="collapse">
                              <i class="fas fa-minus"></i>
                          </button>
                          <button type="button" class="btn btn-tool" data-card-widget="remove">
                              <i class="fas fa-times"></i>
                          </button>
                      </div>
                  </div>
                  <!-- /.card-header -->
                  <!--<div class="card-body">-->
                      <!-- form start -->
                      <form action="<?php echo $editlink; ?>" method="POST">
                          <input type="hidden" class="form-control"  name="update" placeholder="update" value="update">
                          <input type="hidden" class="form-control"  name="editid" placeholder="editid" value="<?php echo $editdata['admin_id']; ?>">
                          <div class="card-body">
                              <div class="row">
                                  <div class="col-md-6">
                                      <div class="form-group">
                                          <label for="exampleInputName">Name</label>
                                          <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Enter name" required="" value="<?php echo $editdata['name']; ?>">
                                      </div>
                                      <div class="form-group">
                                          <label for="exampleInputEmail1">Email</label>
                                          <input type="text" class="form-control" name="email" id="exampleInputEmail" placeholder="Enter email" required="" value="<?php echo $editdata['email']; ?>">
                                      </div>
                                    </div>
                                    <div class="col-md-6">  
                                      <input type="hidden" class="form-control"  name="role" placeholder="role" value="2">
                                      <div class="form-group">
                                          <label>Access Level</label>
                                          <select name="access_level" class="form-control select2bs4" style="width: 100%;">
                                              <?php if($editdata['access_level']==0){ ?>
                                                  <option value="0" selected="selected">Unset</option>
                                                  <option value="1">Super Admin</option>
                                                  <option value="2">Admin</option>
                                              <?php } else if($editdata['access_level']==1) { ?>
                                                  <option value="0">Unset</option>
                                                  <option value="1" selected="selected">Super Admin</option>
                                                  <option value="2">Admin</option>
                                              <?php } else { ?>
                                                  <option value="0">Unset</option>
                                                  <option value="1">Super Admin</option>
                                                  <option value="2" selected="selected">Admin</option>
                                              <?php }  ?>
                                          </select>
                                      </div>
                                      <div class="form-group">
                                        <label for="exampleInputPassword">Password (Set New Password)</label>
                                        <input type="text" class="form-control" name="password" id="exampleInputPassword" placeholder="Enter password">
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Is Deleted?</label>
                                          <select name="is_deleted" class="form-control select2bs4" style="width: 100%;">
                                              <?php if($editdata['is_deleted']==0){ ?>
                                                  <option value="0" selected="selected">No</option>
                                                  <option value="1">Yes</option>
                                              <?php } else { ?>
                                                  <option value="0">No</option>
                                                  <option value="1" selected="selected">Yes</option>
                                              <?php } ?>
                                          </select>
                                      </div>
                                    </div>
                                    <div class="col-md-6">
                                      <div class="form-group">
                                          <label>Is Active?</label>
                                          <select name="is_active" class="form-control select2bs4" style="width: 100%;">
                                              <?php if($editdata['is_active']==0){ ?>
                                                  <option value="0" selected="selected">No</option>
                                                  <option value="1">Yes</option>
                                              <?php } else { ?>
                                                  <option value="0">No</option>
                                                  <option value="1" selected="selected">Yes</option>
                                              <?php } ?>
                                          </select>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- /.card-body -->

                          <div class="card-footer">
                              <button type="submit" class="btn btn-primary">Submit</button>
                          </div>
                      </form>
                  <!--</div>-->
                  <!-- /.row -->
                  <!-- /.row -->
              </div>
              <!-- /.card-body -->
          </div>
          <!-- /.card -->
  </div>
  <!-- /.container-fluid -->
</section>
        <!-- /.content -->
</div>
    <?php $this->load->view('admin/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>