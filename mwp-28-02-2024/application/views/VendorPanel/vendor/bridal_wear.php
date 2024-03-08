<?php $this->load->view('VendorPanel/layout/header'); ?>
           
<?php $this->load->view('VendorPanel/layout/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Vendor Management</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>VendorPanel/index">Home</a></li>
              <li class="breadcrumb-item active">Bridal Wear list</li>
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
                <h3 class="card-title">Bridal Wear</h3>
                <!-- <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;float: right;" href="<?php echo $addlink; ?>"><i class="fas fa-plus" style="font-size: 14px;"> Add New</i></a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Sr No</th>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Area</th>
                    <th>Sub Catgory</th>
                    <th>Website</th>
                    <th>Created Date</th>
                    <th>view all</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                    
                      <?php
                      $i = 1;
                      foreach ($bridal_wear as $row) {
                      ?>
                
                  <tr>
                    <td><?php echo $i++; ?> </td>
                    <td><?php echo !empty($row['vendor_name']) ? $row['vendor_name'] : 'N/A'; ?> </td>
                    <td><?php echo !empty($row['user_name']) ? $row['user_name'] : 'N/A'; ?> </td>
                    <td><?php echo !empty($row['vendor_email']) ? $row['vendor_email'] : 'N/A'; ?> </td>
                    <td><?php echo !empty($row['phone_no']) ? $row['phone_no'] : 'N/A'; ?> </td>
                    <td><?php echo !empty($row['address']) ? $row['address'] : 'N/A'; ?> </td>
                    <td><?php echo !empty($row['city_name']) ? $row['city_name'] : 'N/A'; ?> </td>
                    <td><?php echo !empty($row['area']) ? $row['area'] : 'N/A'; ?> </td>
                    <td><?php echo !empty($row['name']) ? $row['name'] : 'N/A'; ?> </td>
                    <td><?php echo !empty($row['website']) ? $row['website'] : 'N/A'; ?> </td>
                    <td><?php echo !empty($row['created_on']) ? date('d - M - Y', strtotime($row['created_on'])) : 'N/A'; ?> </td>
                    <td><?php echo '<a href="'.base_url() . 'Single_data/bw/'.$row['dv_id'].'"><button class="btn btn-primary">View All Data</button></a>' ?> </td>
                    <td><?php
                    if($row['vendor_status'] == 0){
                      echo '<a href="'. base_url() . 'VendorPanel/Admin_Vendor/Status_update?tab=bridal&status=1&vid='.$row['dv_id'].'"><button class="btn btn-danger">DeActived</button></a>';
                    }else{
                      echo '<a href="'. base_url() . 'VendorPanel/Admin_Vendor/Status_update?tab=bridal&status=0&vid='.$row['dv_id'].'"><button class="btn btn-success">Activated</button></a>';
                    }
                    ?> </td>
                    
                  </tr>
                  
                   <?php
                      }
                      ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                  <th>Sr No</th>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Email</th>
                    <th>Mobile No</th>
                    <th>Address</th>
                    <th>City</th>
                    <th>Area</th>
                    <th>Sub Catgory</th>
                    <th>Website</th>
                    <th>Created Date</th>
                    <th>view all</th>
                    <th>Action</th>
                  </tr>
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
<?php $this->load->view('VendorPanel/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('VendorPanel/layout/script'); ?>