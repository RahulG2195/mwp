<?php $this->load->view('admin/layout/header'); ?>
           
<?php $this->load->view('admin/layout/sidebar'); ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>DataTables</h1>-->
            <h1>Vendor Edit Request</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
              <li class="breadcrumb-item active">Vendor Edit Request</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
     
            <!-- /.card -->

            <div class="card">
              <div class="card-header">
                <!--<h3 class="card-title">DataTable with default features</h3>-->
                <h3 class="card-title">Vendor Edit Request Data</h3>
                <!-- <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;float: right;" href="<?php //echo $addlink; ?>"><i class="fas fa-plus" style="font-size: 14px;"> Add New</i></a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <!--<th>Category ID</th>-->
                    <th>Name</th>
                    <th>Email</th>
                    <!-- <th>Rank</th> -->
                    <th>Phone No</th>
                    <th>Category</th>
                    <th>Edit Request</th>
                    <th>Edit Access</th>
                    <th>Request Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php 
                      foreach ($list as $row) {
                          ?>
                   
                  <tr>
                    <td><?php echo $row['dv_id']; ?> </td>
                    <!--<td><?php // echo $row['category_id']; ?> </td>-->
                    <td><?php echo $row['vendor_name']; ?> </td>
                    <td><?php echo $row['vendor_email']; ?> </td>
                    <td><?php echo $row['phone_no']; ?> </td>
                    <td><?php echo $row['category_name']; ?> </td>
                    <td>
                        <?php if($row['edit_request']=='0'){ ?>
                            <span>NO</span>
                        <?php } else { ?>
                            <span>YES</span>
                        <?php } ?>
                    </td>
                    <td>
                        <?php if($row['edit_access']=='0'){ ?>
                            <span>NO</span>
                        <?php } else { ?>
                            <span>YES</span>
                        <?php } ?>
                    </td>
                    <td><?php echo date("M,d,Y h:i:s A", strtotime($row['edit_request_date_time'])); ?> </td>
                    <td>
                        <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php echo $approvelink.''.$row['dv_id']; ?>"><i class="fas fa-edit" style="font-size: 14px;">approve</i></a>
                        <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php echo $cancellink.''.$row['dv_id']; ?>"><i class="fas fa-trash-alt" style="font-size: 14px;"> cancel</i></a>
                    </td>
                  </tr>
                  
                   <?php
                      }
                      ?>
                  
                  </tbody>
                  <tfoot>
                  <!-- <tr> -->
                    <!-- <th>ID</th> -->
                    <!--<th>Category ID</th>-->
                    <!-- <th>Name</th> -->
                    <!-- <th>Email</th> -->
                    <!-- <th>Rank</th> -->
                    <!-- <th>Phone No</th> -->
                    <!-- <th>Edit Request</th> -->
                    <!-- <th>Edit Access</th> -->
                    <!-- <th>Request Date</th> -->
                    <!-- <th>Action</th> -->
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
 <?php $this->load->view('admin/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>
