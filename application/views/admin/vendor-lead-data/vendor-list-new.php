<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Vendor Data</h1>
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
                                <h3 class="card-title">Query Leads data</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="query_leads_datatable" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                                <thead>
                                <tr>
                                    <th>Vendor name</th>
                                    <th>Category</th>
                                    <th>Name</th>
                                    <th>Phone no</th>
                                    <th>Email</th>
                                    <th>Function Date</th>
                                    <th>Created Date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                
                                <?php 
                                  if(!empty($result))
                                  { 
                                    foreach($result as $row)
                                    {  
                                        // echo "<pre>";
                                        // print_r($result);
                                ?>
                                <tr>
                                    <td><?php echo $row["vendor_name"]; ?></td>
                                    <td><?php echo $row["category_name"]; ?></td>
                                    <td><?php echo $row["name"]; ?></td>
                                    <td><?php echo $row["phone_no"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["function_date"]; ?></td>
                                    <td><?php echo $row["created_date"]; ?></td>
                                    <!-- <td><?php //echo $row["vendor-query-form-message"]; ?></td> -->
                                    <td><a href="<?php echo base_url() ?>admin/VendorLead/viewdetail/<?php echo $row["query_id"]; ?>" class="btn btn-success">View detail</a></td>
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
<script>
     $("#query_leads_datatable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "order": [[6, 'desc']]
    }).buttons().container().appendTo('#query_leads_datatable_wrapper .col-md-6:eq(0)');
</script>
                   
            
            