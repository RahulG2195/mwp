<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Mehendi Artist</h1>
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
                                <h3 class="card-title">Mehendi Artist Data</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>Plan Name</th>
                                    <th>Event Date</th>
                                    <th>Event Location</th>
                                    <th>Mehendi Budget</th>
                                    <th>Guest Budget Range</th>
                                    <th>Mehendi Service Type</th>
                                    <th>Mehendi Guest Count</th>
                                    <th>Mehendi Style</th>
                                    <th>Mehendi Experience</th>
                                    <th>Other Requirements</th>
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
                                    <td><?php echo $row["event-date"]; ?></td>
                                    <td><?php echo $row["event_city"]; ?></td>
                                    <td><?php echo $row["mehendi_budget"]; ?></td>
                                    <td><?php echo $row["guest_budget_range"] ; ?></td>
                                    <td><?php echo $row["mehendi_service_type"]; ?></td>
                                    <td><?php echo $row["mehendi_guest_count"]; ?></td>
                                    <td><?php echo $row["mehendi_style"]; ?></td>
                                    <td><?php echo $row["mehendi_experience"]; ?></td>
                                    <td><?php echo $row["other_requirements"]; ?></td>
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
                   
            
            