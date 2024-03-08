<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">User Data</h1>
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
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">User list data</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                                    <tbody>

                                        <?php 
                                            if(!empty($result))
                                            { 
                                                foreach($result as $row)
                                                {  
                                        ?>
                                        <tr>
                                            <td>Name:</td>
                                            <td><?php echo $row["first_name"]."".$row["last_name"]; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email id:</td>
                                            <td><?php echo $row["email_id"]; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Phone no:</td>
                                            <td><?php echo $row["phoneno"]; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Decoration Budget:</td>
                                            <td><?php echo $row["decoration_budget"]; ?></td>
                                        </tr>    
                                        <tr>
                                            <td>Venue name:</td>
                                            <td><?php echo $row["venue_name"]; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Ocassion:</td>
                                            <td><?php echo $row["decoration_occassion"]; ?></td>
                                        </tr>

                                        <tr>    
                                            <td>Venue type:</td>
                                            <td><?php echo $row["venue_type"]; ?></td>
                                        </tr>
                                        
                                        <tr>    
                                            <td>City:</td>
                                            <td><?php echo $row["city"]; ?></td>
                                        </tr>
                                        <tr>    
                                            <td>Decoration type:</td>
                                            <td><?php echo $row["decoration_type"]; ?></td>
                                        </tr>
                                        <tr>  
                                            <td>Theme color:</td>
                                            <td><?php echo $row["theme_color"]; ?></td>
                                        </tr>
                                        <tr>  
                                            <td>Outfit color:</td>  
                                            <td><?php echo $row["outfit_color"]; ?></td>
                                        </tr>
                                        <tr>    
                                            <td>Color blend:</td>
                                            <td><?php echo $row["colour_blend"]; ?></td>
                                        </tr>
                                        <tr>    
                                            <td>Decor plan:</td>
                                            <td><?php echo $row["decorplanname"]; ?></td>
                                        </tr>
                                        <tr>    
                                            <td>Decor plan price:</td>
                                            <td><?php echo $row["plan_price"]; ?></td>
                                        </tr>
                                        <tr>    
                                            <td>Image:</td>
                                            <?php 
                                                if(!empty($row["venue_image"]))
                                                { 
                                            ?>
                                                <td><img src="<?php echo base_url() ?>uploads/decorvenueimage/<?php echo $row["venue_image"]; ?>" width="100px" height="100px" ></td>
                                            <?php    
                                               }
                                               else{
                                                   echo "No Image Uploaded";
                                               }
                                            ?>
                                            
                                        </tr>
                                        <tr>    
                                            <td>Comment:</td>
                                            <td><?php echo $row["decorcomment"]; ?></td>
                                        </tr>
                                        <tr>    
                                            <td>Transaction id:</td>
                                            <td><?php echo $row["merchant_transaction_id"]; ?></td>
                                        </tr>
                                        <tr>    
                                            <td>Merchant id:</td>
                                            <td><?php echo $row["merchant_order_id"]; ?></td>
                                        </tr>
                                        <tr>    
                                            <td>Payment Status:</td>
                                            <td><?php echo $row["payment_status"]; ?></td>
                                        </tr>
                                        <?php   
                                            }
                                        }
                                        else{
                                                echo "No records Found";
                                        }
                                        ?>
                                
                                    
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer" style="text-align:center;">
                                <a href="<?php echo base_url() ?>admin/Designdecorlead" class="btn btn-info">Back</a>
                            </div>
                            <!-- /.card-body -->
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
                   
            
            