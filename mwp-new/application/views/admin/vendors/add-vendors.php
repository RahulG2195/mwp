<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Add vendor</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
                        <li class="breadcrumb-item active">Add City</li>
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
                    <form action="<?php echo base_url().'admin/vendorlisting/addvendordata'; ?>" method="POST" >
                        <input type="hidden" class="form-control"  name="create" placeholder="create" value="create">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vendor Name</label>
                                        <input type="text" class="form-control" name="vendor-name" id="exampleInputEmail1"  required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">Vendor Address</label>
                                        <textarea class="form-control" name="vendor-address" id="exampleInputEmail1"  required=""></textarea>
                                        
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vendor City</label>
                                        <input type="text" class="form-control" name="vendor-city" id="exampleInputEmail1"  required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                     <div class="form-group">
                                        <label for="exampleInputEmail1">About</label>
                                        <textarea class="form-control" name="about" id="exampleInputEmail1" required=""></textarea>
                                    </div>
                                   
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vendor Area</label>
                                        <input type="text" class="form-control" name="vendor-area" id="exampleInputEmail1" required="">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vendor phone no</label>
                                        <input type="text" class="form-control" name="vendor-phone-no" id="exampleInputEmail1"  required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vendor Website</label>
                                        <input type="text" class="form-control" name="vendor-website" id="exampleInputEmail1"  required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Vendor Category</label>
                                        <select class="form-control" name="vendor-category" id="exampleInputEmail1" placeholder="Enter name" required="">
                                        <?php if (!empty($list)) {
                                            foreach ($list as  $value) { ?>
                                            <option value="<?php echo $value["category_id"]; ?>"><?php echo $value["name"]; ?></option>


                                        <?php    }
                                        } ?>
                                        </select>
                                        
                                    </div>

                                    <?php
                                        if (!empty($list)) {
                                            foreach ($list as  $value) { 
                                                $this->db->select('*');
                                                $this->db->from('master_sub_category');
                                                $this->db->where('category_id', $this->input->post("vendor-category"));
                                                $query = $this->db->get();
                                           $result["subcategory"]= $query->result_array();
                                           }
                                        }
                                        var_dump($result["subcategory"]);
                                    ?>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Subcategory</label>
                                        <select class="form-control" name="vendor-subcategory" id="exampleInputEmail1" placeholder="Enter name" required="">
                                            <?php 
                                               if(!empty($result["subcategory"]))
                                               {
                                                 foreach ($result["subcategory"] as  $subcategoryvalue) { ?>
                                                     <option value="<?php echo $subcategoryvalue["category_id"]; ?>"><?php echo $subcategoryvalue["name"]; ?></option>
                                            <?php  
                                                   }
                                               }
                                             ?>

                                        </select>
                                       <!--  <input type="text" class="form-control" name="vendor-name" id="exampleInputEmail1" placeholder="Enter name" required=""> -->
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Social media select</label>
                                        <input type="text" class="form-control" name="social-media-select" id="exampleInputEmail1" placeholder="Enter name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Social media link</label>
                                        <input type="text" class="form-control" name="social-media-link" id="exampleInputEmail1" placeholder="Enter name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Images</label>
                                        <input type="text" class="form-control" name="vendor-images" id="exampleInputEmail1" placeholder="Enter name" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Business Logo</label>
                                        <input type="text" class="form-control" name="business-logo" id="exampleInputEmail1" placeholder="Enter name" required="">
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Business Hrs</label>
                                        <input type="text" class="form-control" name="business-hrs" id="exampleInputEmail1" placeholder="Enter name" required="">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Services offered</label>
                                        <input type="text" class="form-control" name="services_offered" id="exampleInputEmail1" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Payment options</label>
                                        <select class="form-control" name="payment_options" id="exampleInputEmail1" placeholder="Enter name" required="">
                                           <option value="Cash">Cash</option>
                                           <option value="Cheque/ DD">Cheque/ DD</option> 
                                           <option value="Credit/ Debit card">Credit/ Debit card</option>
                                           <option value="Net banking"> Net banking</option>
                                           <option value="UPI">UPI</option>
                                           <option value="Mobile Wallets">Mobile Wallets</option>
                                        </select>
                                      
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">% Advance</label>
                                        <input type="text" class="form-control" name="%_advance" id="exampleInputEmail1" required="">
                                    </div>
                                    <div class="form-group">
                                        <label for="exampleInputEmail1">Cancellation policy</label>
                                        <input type="text" class="form-control" name="cancellation_policy   " id="exampleInputEmail1"  required="">
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

        <!-- SELECT2 EXAMPLE -->
        <div class="card card-default d-none">
            <div class="card-header">
                <h3 class="card-title">Select2 (Bootstrap4 Theme)</h3>

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
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Minimal</label>
                            <select class="form-control select2bs4" style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Disabled</label>
                            <select class="form-control select2bs4" disabled="disabled" style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Multiple</label>
                            <select class="select2bs4" multiple="multiple" data-placeholder="Select a State"
                                    style="width: 100%;">
                                <option>Alabama</option>
                                <option>Alaska</option>
                                <option>California</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                        <!-- /.form-group -->
                        <div class="form-group">
                            <label>Disabled Result</label>
                            <select class="form-control select2bs4" style="width: 100%;">
                                <option selected="selected">Alabama</option>
                                <option>Alaska</option>
                                <option disabled="disabled">California (disabled)</option>
                                <option>Delaware</option>
                                <option>Tennessee</option>
                                <option>Texas</option>
                                <option>Washington</option>
                            </select>
                        </div>
                        <!-- /.form-group -->
                    </div>
                    <!-- /.col -->
                </div>
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