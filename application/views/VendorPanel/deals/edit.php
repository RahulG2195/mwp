<?php $this->load->view('VendorPanel/layout/header'); ?>
           
<?php $this->load->view('VendorPanel/layout/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit Deals & Coupons</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>vendor-dashboard">Home</a></li>
                        <li class="breadcrumb-item active">Edit Deals & Coupons</li>
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
                    <form action="<?php echo $editlink; ?>" method="POST" enctype="multipart/form-data">
                        <input type="hidden" class="form-control"  name="update" placeholder="update" value="update">
                        <input type="hidden" class="form-control"  name="editid" placeholder="editid" value="<?php echo $editdata['deal_id']; ?>">
                                                                <input type="hidden" class="form-control" name="vendor_id" id="exampleInputName" placeholder="Enter name" required="" value="<?php echo $this->session->userdata('dv_id'); ?>">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Title</label>
                                        <input type="text" class="form-control" name="title" id="exampleInputName" placeholder="Enter title" required="" value="<?php echo $editdata['title']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">    
                                    <div class="form-group">
                                        <label for="exampleInputCountOfCity">Description</label>
                                        <textarea type="number" class="form-control" name="description" id="exampleInputCountOfCity" placeholder="Enter description" required=""><?php echo $editdata['description']; ?></textarea>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputRank">Start Date</label>
                                        <input type="date" class="form-control" name="start_date" id="exampleInputRank" placeholder="Enter date" required="" value="<?php echo date("Y-m-d", strtotime($editdata['start_date'])); ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputRank">End Date</label>
                                        <input type="date" class="form-control" name="end_date" id="exampleInputRank" placeholder="Enter date" required="" value="<?php echo date("Y-m-d", strtotime($editdata['end_date'])); ?>">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Coupon Code</label>
                                        <input type="text" class="form-control" name="coupon_code" id="exampleInputName" placeholder="Enter coupon code" required="" value="<?php echo $editdata['coupon_code']; ?>">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Discount Value</label>
                                        <input type="text" class="form-control" name="discount_value" id="exampleInputName" placeholder="Enter discount value" required="" value="<?php echo $editdata['discount_value']; ?>">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Custom Text (Button)</label>
                                        <input type="text" class="form-control" name="custom_text" id="exampleInputName" placeholder="Enter custom text" required="" value="<?php echo $editdata['custom_text']; ?>">
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Image</label>
                                        <input type="file" class="form-control" name="image" id="exampleInputName" placeholder="Enter custom text" required="" value="<?php echo $editdata['image']; ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label>Is Active?</label>
                                        <select name="is_active" class="form-control select2bs4" style="width: 100%;">
                                            <?php if($editdata['is_active']=='0'){ ?>
                                            <option value="0" selected="selected">No</option>
                                            <option value="1">Yes</option>
                                            <?php }else { ?>
                                            <option value="0">No</option>
                                            <option value="1" selected="selected">Yes</option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                 <div class="col-md-6">
                                    <div class="form-group">
                                        <!--<label for="exampleInputName">Present Image</label>-->
                                        <img style="width:15%" src="<?php echo base_url()."uploads/deals/".$editdata['image'];?>"/>
                                        <!--<input type="file" class="form-control" name="image" id="exampleInputName" placeholder="Enter custom text" required="" value="<?php //echo $editdata['image']; ?>">-->
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
<?php $this->load->view('VendorPanel/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('VendorPanel/layout/script'); ?>