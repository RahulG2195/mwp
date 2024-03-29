<?php $this->load->view('admin/layout/header'); ?>
           
<?php $this->load->view('admin/layout/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add Deals & Coupons</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/Admindashboard">Home</a></li>
                        <li class="breadcrumb-item active">Add Deals & Coupons</li>
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
                    <form action="<?php echo $addlink; ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control"  name="create" placeholder="create" value="create">
                                                                <input type="hidden" class="form-control" name="vendor_id" id="exampleInputName" placeholder="Enter name" required="" value="<?php echo $vendor_id; ?>">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Title</label>
                                        <input type="text" class="form-control" name="title" id="exampleInputName" placeholder="Enter title" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">    
                                    <div class="form-group">
                                        <label for="exampleInputCountOfCity">Description</label>
                                        <textarea type="number" class="form-control" name="description" id="exampleInputCountOfCity" placeholder="Enter description" required=""></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputRank">Start Date</label>
                                        <input type="date" class="form-control" name="start_date" id="exampleInputRank" placeholder="Enter date" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputRank">End Date</label>
                                        <input type="date" class="form-control" name="end_date" id="exampleInputRank" placeholder="Enter date" required="">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Coupon Code</label>
                                        <input type="text" class="form-control" name="coupon_code" id="exampleInputName" placeholder="Enter coupon code" required="">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Discount Value</label>
                                        <input type="text" class="form-control" name="discount_value" id="exampleInputName" placeholder="Enter discount value" required="">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Custom Text (Button)</label>
                                        <input type="text" class="form-control" name="custom_text" id="exampleInputName" placeholder="Enter custom text" required="">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Image</label>
                                        <input type="file" class="form-control" name="image" id="exampleInputName" placeholder="Enter custom text" required="">
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
<!-- /.container-fluid -->
        
        <!-- /.content -->
</div>
<?php $this->load->view('admin/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>