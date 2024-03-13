<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Event</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
                        <li class="breadcrumb-item active">Add Event</li>
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
                                        <label for="exampleInputTitle">Title</label>
                                        <input type="text" class="form-control" name="event_title" id="exampleInputName" placeholder="Enter Title" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                </div>
                                <div class="col-md-6">    
                                    <div for="exampleInputDescription" class="form-group">
                                        <label>Description</label>
                                        <textarea name="event_description" id="exampleInputDescription" class="form-control" rows="3" placeholder="Enter Description" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">    
                                    <div for="exampleInputAddress" class="form-group">
                                        <label>Address</label>
                                        <textarea name="event_address" id="exampleInputAddress" class="form-control" rows="3" placeholder="Enter Address" required=""></textarea>
                                    </div>
                               </div>
                                <div class="col-md-6">
                                    <div for="exampleInputStartDate" class="form-group">
                                        <label>Start Date and Time:</label>
                                        <div class="input-group date" id="exampleInputStartDate" data-target-input="nearest">
                                            <input name="event_start_date" type="text" class="form-control datetimepicker-input" data-target="#exampleInputStartDate" required="">
                                            <div class="input-group-append" data-target="#exampleInputStartDate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div for="exampleInputEndDate" class="form-group">
                                        <label>End Date and Time:</label>
                                        <div class="input-group date" id="exampleInputEndDate" data-target-input="nearest">
                                            <input name="event_end_date" type="text" class="form-control datetimepicker-input" data-target="#exampleInputEndDate" required="">
                                            <div class="input-group-append" data-target="#exampleInputEndDate" data-toggle="datetimepicker">
                                                <div class="input-group-text"><i class="fa fa-calendar"></i></div>
                                            </div>
                                        </div>
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