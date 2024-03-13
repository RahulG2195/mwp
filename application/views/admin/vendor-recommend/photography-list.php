<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Photography List</h1>
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
                                    <th>Photography Budget</th>
                                    <th>Photography Style</th>
                                    <th>Wedding Date</th>
                                    <th>Wedding Location</th>
                                    <th>No of photography days</th>
                                    <th>Occassion covered</th>
                                    <th>Cinematic edit</th>
                                    <th>Same day edit</th>
                                    <th>Professional printing</th>
                                    <th>Photography experience</th>
                                    <th>Open to edit</th>
                                    <th>Videography service</th>
                                    <th>Guest count</th>
                                    <th>Outstation photographers</th>
                                    <th>Accomodation</th>
                                    <th>Recieve photograph date</th>
                                    <th>Preference</th>
                                    <th>Edit style</th>
                                    <th>Delivery format</th>
                                    <th>Album design offers</th>
                                    <th>Culture belong</th>
                                    <th>Additional services</th>
                                    <th>Specific prefernces</th>
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
                                    <td><?php echo $row["photography_budget"]; ?></td>
                                    <td><?php echo $row["photography_style"]; ?></td>
                                    <td><?php echo $row["wedding_date"] ; ?></td>
                                    <td><?php echo $row["wedding_location"]; ?></td>

                                    <td><?php echo $row["no_of_photography_days"]; ?></td>
                                    <td><?php echo $row["occssion_covered"]; ?></td>
                                    <td><?php echo $row["cinematic_editing"]; ?></td>
                                    <td><?php echo $row["same_day_edit"]; ?></td>
                                    
                                    <td><?php echo $row["professional_service_printing"]; ?></td>
                                    <td><?php echo $row["photography_experience"]; ?></td>
                                    <td><?php echo $row["open_to_edit_service"]; ?></td>
                                    <td><?php echo $row["videography_service"]; ?></td>

                                    <td><?php echo $row["guest_count"]; ?></td>
                                    <td><?php echo $row["outstation_photographers"]; ?></td>
                                    <td><?php echo $row["photographer_accomodation"]; ?></td>
                                    <td><?php echo $row["receive_photograph_date"]; ?></td>

                                    <td><?php echo $row["understand_preferences"]; ?></td>
                                    <td><?php echo $row["editing_style"]; ?></td>
                                    <td><?php echo $row["delivery_format"]; ?></td>
                                    <td><?php echo $row["album_design_offers"]; ?></td>

                                    <td><?php echo $row["culture_belong"]; ?></td>
                                    <!-- <td><?php echo $row["similar_culture_wedding"]; ?></td> -->
                                    <td><?php echo $row["additional_services"]; ?></td>
                                    <td><?php echo $row["specific_preference"]; ?></td>
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
                   
            
            