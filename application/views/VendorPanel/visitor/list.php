<?php $this->load->view('VendorPanel/layout/header'); ?>
<?php $this->load->view('VendorPanel/layout/sidebar'); ?>
           
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--<section class="content-header">-->
      <!--<div class="container-fluid">-->
        <!--<div class="row mb-2">-->
          <!--<div class="col-sm-6">-->
            <!--<h1>DataTables</h1>-->
            <!--<h1>Master</h1>-->
          <!--</div>-->
          <!--<div class="col-sm-6">-->
            <!--<ol class="breadcrumb float-sm-right">-->
              <!--<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>vendor-dashboard">Home</a></li>-->
              <!--<li class="breadcrumb-item active">Visitor</li>-->
            <!--</ol>-->
          <!--</div>-->
        <!--</div>-->
<!--      </div> /.container-fluid -->
    <!--</section>-->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
     
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <!--<h3 class="card-title">DataTable with default features</h3>-->
                <h3 class="card-title">User Visits Data</h3>
                <!-- <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;float: right;" href="<?php echo $addlink; ?>"><i class="fas fa-plus" style="font-size: 14px;"> Add New</i></a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="user_visit_datatable" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Page Name</th>
                    <th>Email Address</th>
                    <th>Phone</th>
                    <th>Created Date</th>
                    <!-- <th>Action</th> -->
                  </tr>
                  </thead>
                  <tbody>
                      <?php 
                      foreach ($list as $row) {
                          ?>
                   
                  <tr>
                    <td><?php echo $row['vendor_visitor_id']; ?> </td>
                    <td><?php echo $row['page_name']; ?> </td>
                    <td><?php echo $row['email_address']; ?></td>
                    <td><?php echo $row['phone']; ?></td>
                    <td><?php echo date("d M Y - h:i A", strtotime($row['created_date'])); ?> </td>
                    <!-- <td>
                        <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php //echo $editlink.''.$row['category_id']; ?>"><i class="fas fa-edit" style="font-size: 14px;">edit</i></a>
                        <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php //echo $deletelink.''.$row['category_id']; ?>"><i class="fas fa-trash-alt" style="font-size: 14px;"> delete</i></a>
                    </td> -->
                  </tr>
                  
                   <?php
                      }
                      ?>
                  
                  </tbody>
                  <tfoot>
                  <!-- <tr> -->
                                          <!-- <th>ID</th> -->
                    <!-- <th>Page Name</th> -->
                    <!-- <th>Email Address</th> -->
                    <!-- <th>Phone</th> -->
                    <!-- <th>Created Date</th> -->
                    <!-- <th>Action</th> -->
<!--                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>-->
                  <!-- </tr> -->
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
         <?php $this->load->view('VendorPanel/layout/footer'); ?>
    </div>

    <?php $this->load->view('VendorPanel/layout/script'); ?>
<script>
     $("#user_visit_datatable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "order": [[4, 'desc']]
    }).buttons().container().appendTo('#user_visit_datatable_wrapper .col-md-6:eq(0)');
</script>