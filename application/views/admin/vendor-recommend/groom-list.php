<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Groom Wear</h1>
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
                                <h3 class="card-title">Groom Wear Data</h3>
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
                                    <th>Groom wear budget</th>
                                    <th>Groom budget</th>
                                    <th>Culture attire</th>
                                    <th>Design element</th>
                                    <th>Color choice</th>
                                    <th>Prefered outfit</th>
                                    <th>Accessories</th>
                                    <th>Match attire</th>
                                    <th>Occassion</th>
                                    <th>Product looking for</th>
                                    <th>Match outfit</th>
                                    <th>Require time</th>
                                    <th>Additional service</th>
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
                                    <td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
                                    <td><?php echo $row["email_id"]; ?></td>
                                    <td><?php echo $row["phone_no"]; ?></td>
                                    <td><?php echo $row["plan_name"]; ?></td>
                                    <td><?php echo $row["groom-wear-budget"]; ?></td>
                                    <td><?php echo $row["from-groom-budget"]."-".$row["to-groom-budget"] ; ?></td>
                                    <td><?php echo $row["preffered-culture-attire"]; ?></td>
                                    <td><?php echo $row["design_element"]; ?></td>
                                    <td><?php echo $row["preffered-color-choice-attire"]; ?></td>
                                    <td><?php echo $row["prefered_outfit"]; ?></td>
                                    <td><?php echo $row["accessories_outfit"]; ?></td>
                                    <td><?php echo $row["match_attire"]; ?></td>
                                    <td><?php echo $row["occassion-groom-wear"]; ?></td>
                                    <td><?php echo $row["products_looking_for"]; ?></td>
                                    <td><?php echo $row["fabric_for_outfit"]; ?></td>
                                    <td><?php echo $row["match_outfit"]; ?></td>
                                    <!-- <td><?php echo $row["require_time"]; ?></td> -->
                                    <td><?php echo $row["additional_service"]; ?></td>
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
                   
            
            