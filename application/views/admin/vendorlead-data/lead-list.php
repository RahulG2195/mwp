<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <div class="content-header">
            <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                <h1 class="m-0">Vendor recommendation data</h1>
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
                                <h3 class="card-title">Vendor recommendation payment data</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="vendor_rec_leads_datatable" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone no</th>
                                    <th>Plan name</th>
                                    <th>Plan price</th>
                                    <th>Transaction id</th>
                                    <th>Amount</th>
                                    <th>Payment status</th>
                                    <th>Created date </th>
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
                                        <td><?php echo $row["first_name"]." ".$row["last_name"]; ?></td>
                                        <td><?php echo $row["email_id"]; ?></td>
                                        <td><?php echo $row["phone_no"]; ?></td>
                                        <td><?php echo $row["plan_name"]; ?></td>
                                        <td><?php echo $row["plan_price"]; ?></td>
                                        <td><?php echo $row["merchant_transaction_id"]; ?></td>
                                        <td><?php echo $row["amount"]; ?></td>
                                        <td><?php echo $row["payment_status"]; ?></td>
                                        <td><?php echo $row["created_date"]; ?></td>
                                        <td><a href="<?php echo base_url() ?>admin/Vendorrecommendationlead/veiwdetail/<?php echo $row["vendor_reccomend_payment_id"]; ?>" class="btn btn-success"> View details</a></td>
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
     $("#vendor_rec_leads_datatable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "order": [[8, 'desc']]
    }).buttons().container().appendTo('#vendor_rec_leads_datatable_wrapper .col-md-6:eq(0)');
</script> 
                   
            
            