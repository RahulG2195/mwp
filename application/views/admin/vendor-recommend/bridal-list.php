<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Bridal List</h1>
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
                                <h3 class="card-title">Bridal list data</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone no</th>
                                    <th>Plan name</th>
                                    <th>Prefer bridal wear</th>
                                    <th>Body type</th>
                                    <th>Embellishments</th>
                                    <th>Cultural Influence</th>
                                    <th>Favorite Designer</th>
                                    <th>Bridal Budget Range</th>
                                    <th>Budget</th>
                                    <th>Retail Store</th>
                                    <th>Ocassion</th>
                                    <th>Fabric</th>
                                    <th>Products looking for</th>
                                    <th>Style resonate</th>
                                    <th>Dress ready to be</th>
                                    <th>Additional service </th>
                                    <th>Other detail</th>
                                    <th>Slight budget increase</th>
                                    <th>Color preference</th>
                                    <th>Customized bridal wear</th>
                                    <th>Shop location </th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php 
                                  if(!empty($result))
                                  { 
                                    foreach($result as $row)
                                    {  

                                ?>
                                <tr>
                                    <td><?php echo $row["fname"]." ".$row["lname"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["phoneno"]; ?></td>
                                    <td><?php echo $row["plan_name"]; ?></td>
                                    <td><?php echo $row["prefer_bridal_wear"]; ?></td>
                                    <td><?php echo $row["body_type"]; ?></td>
                                    <td><?php echo $row["embellishments"]; ?></td>
                                    <td><?php echo $row["cultural_influence"]; ?></td>
                                    <td><?php echo $row["favorite_designer"]; ?></td>
                                    <td><?php echo $row["bridal_budget_range"]; ?></td>
                                    <td><?php echo $row["desired_bridal_budget_from"]."-".$row["desired_bridal_budget_range_to"] ; ?></td>
                                    <td><?php echo $row["retail_store"]; ?></td>
                                    <td><?php echo $row["bridal-wear-ocassion"]; ?></td>
                                    <td><?php echo $row["bridal-wear-fabrics"]; ?></td>
                                    <td><?php echo $row["products-looking-for"]; ?></td>
                                    <td><?php echo $row["design-style-resonate"]; ?></td>
                                    <td><?php echo $row["dress-ready-to-be"]; ?></td>
                                    <td><?php echo $row["additional_service"]; ?></td>
                                    <td><?php echo $row["other_detail"]; ?></td>
                                    <td><?php echo $row["open_to_slight_budget_increase	"]; ?></td>
                                    <td><?php echo $row["color_preference"]; ?></td>
                                    <td><?php echo $row["customize-birdal-wear"]; ?></td>
                                    <td><?php echo $row["shop_location"]; ?></td>
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
                   
            
            