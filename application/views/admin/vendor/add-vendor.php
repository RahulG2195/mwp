<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Vendor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
                        <li class="breadcrumb-item active">Add Vendor</li>
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
                    <form action="<?php echo $addlink; ?>" method="POST">
                        <input type="hidden" class="form-control"  name="create" placeholder="create" value="create">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Name</label>
                                        <input type="text" class="form-control" name="name" id="exampleInputName" placeholder="Enter name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail">Email</label>
                                        <input type="text" class="form-control" name="email" id="exampleInputEmail" placeholder="Enter email" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">    
                                    <input type="hidden" class="form-control"  name="role" placeholder="role" value="2">
                                    <div class="form-group">
                                        <label>Access Level</label>
                                        <select name="access_level" class="form-control select2bs4" style="width: 100%;">
                                            <option value="0" selected="selected">Unset</option>
                                            <option value="1">Super Admin</option>
                                            <option value="2">Admin</option>
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
                                            <option value="0" selected="selected">No</option>
                                            <option value="1">Yes</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Is Active?</label>
                                        <select name="is_active" class="form-control select2bs4" style="width: 100%;">
                                            <option value="0" selected="selected">No</option>
                                            <option value="1">Yes</option>
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
    </section>
</div>

<?php $this->load->view('admin/layout/footer'); ?>
</div>
<?php $this->load->view('admin/layout/script'); ?>