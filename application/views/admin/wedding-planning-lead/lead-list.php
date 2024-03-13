<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Wedding planning data</h1>
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
                                <h3 class="card-title">Wedding planning list</h3>
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
                                    <th>Wedding date</th>
                                    <th>Wedding location</th>
                                    <th>Guest count</th>
                                    <th>Budget range</th>
                                    <th>Comment</th>
                                    <th>Action</th>
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
                                    <td><?php echo $row["fullname"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["phoneno"]; ?></td>
                                    <td><?php echo $row["weddingplanname"]; ?></td>
                                    <td><?php echo $row["weddingdate"]; ?></td>
                                    <td><?php echo $row["weddinglocation"]; ?></td>


                                    <td>
                                     <?php 
                                            if ($row["guestcount"]== "1") {
                                                echo "Below 100";
                                           }
                                           elseif ($row["guestcount"]== "2") {
                                               echo "100 - 300";
                                           }
                                           elseif ($row["guestcount"]== "3") {
                                             echo "300 – 500";
                                           }
                                           elseif($row["guestcount"]== "4"){
                                                echo "500 – 750";
                                           }
                                           elseif($row["guestcount"]== "5"){
                                                echo "750 – 1000";
                                           }
                                           elseif($row["guestcount"]== "6"){
                                                echo "1000 – 3000";
                                           }
                                           elseif($row["guestcount"]== "7"){
                                                echo "Above 3000";
                                           }
                                           else{
                                                echo "";
                                           }
                                     
                                     ?>   
                                    
                                    </td>
                                    <td>
                                        
                                    
                                    <?php 
                                        if ($row["budgetrange"]== "A") {
                                            echo "Under INR 20 Lakhs";
                                    }
                                    elseif ($row["budgetrange"]== "B") {
                                        echo "INR 20 Lakhs - 50 Lakhs";
                                    }
                                    elseif ($row["budgetrange"]== "C") {
                                        echo "INR 50 Lakhs - 1 Crores";
                                    }
                                    elseif($row["budgetrange"]== "D"){
                                            echo "Over INR 1 Crores";
                                    }
                                    else{
                                            echo "";
                                    }
                                    ?>
                                   </td>
                                    <td><?php echo $row["additinalcomment"]; ?></td>
                                    <td><a href="<?php echo  base_url() ?>admin/Weddingplanninglead/deletelead/<?php echo $row["wedding-planning-id"]; ?>" class="btn btn-danger"> Delete</a></td>
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
                   
            
            