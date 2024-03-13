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
                                            <td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Email id:</td>
                                            <td><?php echo $row["email_id"]; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Phone no:</td>
                                            <td><?php echo $row["phone_no"]; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Plan name:</td>
                                            <td>
                                                
                                            <?php 
                                                if($row["plan_name"]=="solo_spark"){
                                                    echo "Solo Spark";
                                                }
                                                elseif($row["plan_name"]=="trio_fusion")
                                                {
                                                echo "Trio Fusion";
                                                } 
                                                elseif($row["plan_name"]=="grand_symphony")
                                                {
                                                echo "Grand Symphony";
                                                } 
                                                elseif($row["plan_name"]=="quintessential")
                                                {
                                                echo "Quintessential";
                                                } 
                                                else{
                                                     echo " ";
                                                }
                                            ?>
                                             </td>
                                        </tr>    
                                        <tr>
                                            <td>Plan price:</td>
                                            <td><?php echo $row["plan_price"]; ?></td>
                                        </tr>
                                        <tr>
                                            <td>Category Selected:</td>
                                            <td>
                                                <?php 
                                                    if($row["venuecat"]=="viral_venue")
                                                    {
                                                        echo "MWP Viral Venues" ;
                                                    }
                                                       
                                                    if($row[0]["bridalcat"]=="bridal-boutique")
                                                    {
                                                        echo "MWP Bridal Boutiques" ;
                                                    }
                                                   if($row[0]["groomcat"]=="groom-gear")
                                                   {
                                                        echo "MWP Groom Gear" ;
                                                   }
                                                   if($row[0]["photographcat"]=="perfect-photograph")
                                                   {
                                                      echo "MWP Perfect Photographers" ;
                                                   }
                                                   if($row[0]["muacat"]=="mua")
                                                    {
                                                       echo "MWP Mesmerizing MUAs" ;
                                                    }
                                                    if($row[0]["mehendicat"]=="mehendi-magic")
                                                    {
                                                        echo "MWP Mehendi Magic" ;
                                                    }
                                                    if($row[0]["decorcat"]=="decor-delight")
                                                    {
                                                        echo "MWP Decor Delight" ;
                                                    }
                                                    if($row[0]["giftcat"]=="gift-galore")
                                                    {
                                                        echo "MWP Gifts Galore" ;
                                                    }
                                                ?>
                                               
                                            </td>
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
                                <a href="<?php echo base_url() ?>admin/Vendorrecommendationlead" class="btn btn-info">Back</a>
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
                   
            
            