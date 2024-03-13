<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Venue Data</h1>
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
                                <h3 class="card-title">Viral venue data</h3>
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
                                    <th>Role</th>
                                    <th>Amount</th>
                                    <th>Culture</th>
                                    <th>Wedding Date</th>
                                    <th>Belong to same city</th>
                                    <th>Groom city</th>
                                    <th>Bride city</th>
                                    <th>Pre wedding no of guest</th>
                                    <th>Wedding no of guest</th>
                                    <th>Post wedding no of guest</th>
                                    <th>Venue Budget</th>
                                    <th>Wedding start and end date</th>
                                    <th>Venue city</th>
                                    <th>Venue type</th>
                                    <th>Venue service</th>
                                    <th>No of group</th>
                                    <th>No of guest</th>
                                    <th>Wedding Theme</th>
                                    <th>Capecity</th>
                                    <th>Event spaces</th>
                                    <th>Wedding theme</th>
                                    <th>Facility</th>
                                    <th>Transport service</th>
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
                                    <td><?php echo $row["role"]; ?></td>
                                    <td><?php echo $row["amount"]; ?></td>
                                    <td><?php echo $row["culture"]; ?></td>
                                    <td><?php echo $row["wedding-date"]; ?></td>
                                    <td><?php echo $row["belong-to-same-city"]; ?></td>
                                    <td><?php echo $row["groom-city"]; ?></td>
                                    <td><?php echo $row["brid-city"]; ?></td>
                                    <td><?php echo $row["pre-no-of-guest"]; ?></td>
                                    <td><?php echo $row["wedding-no-of-guest"]; ?></td>
                                    <td><?php echo $row["post-wedding-no-of-guest"]; ?></td>
                                    <td><?php echo $row["approx_venue_budget"]; ?></td>
                                    <td><?php echo $row["start-date"]."-".$row["end-date"]; ?></td>
                                    <td><?php echo $row["venue-city"]; ?></td>
                                    <td><?php echo $row["venue-type"]; ?></td>
                                    <td><?php echo $row["venue-service"]; ?></td>
                                    <td><?php echo $row["no_of_rooms"]; ?></td>
                                    <td><?php echo $row["no_of_guest"]; ?></td>
                                    <td><?php echo $row["themes"]; ?></td>
                                    <td><?php echo $row["capecity"]; ?></td>
                                    <td><?php echo $row["event-spaces"]; ?></td>
                                    <td><?php echo $row["wedding-theme"]; ?></td>
                                    <td><?php echo $row["facility"]; ?></td>
                                    <td><?php echo $row["transport-service"]; ?></td>
                                    
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
                   
            
            