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
              <!--<li class="breadcrumb-item active">Plan</li>-->
            <!--</ol>-->
          <!--</div>-->
        <!--</div>-->
      <!--</div> /.container-fluid--> 
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
                <h3 class="card-title">Deals & Coupon Data<?php //echo md5($active_plane_id)."".$active_plane_id; ?></h3>
                 <a class="btn btn-info" style="height: auto;margin: auto;padding: 5px 5px;float: right;" href="<?php echo $addlink; ?>"><i class="fas fa-plus" style="font-size: 14px;"> Add New</i></a> 
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
			  <!-- for working below table use id example1-->
                <table id="vendor_deals_datatable" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Coupon Code</th>
                    <th>Discount Value</th>
                    <th>Image</th>
                    <th>Is Active</th>
                    <th>Created Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php 
                      $i = 1;
                      foreach ($list as $row) {
                          ?>
                  <tr>
                    <td><?php echo $i; ?> </td>
                    <td><?php echo $row['title']; ?> </td>
                    <td><?php echo $row['description']; ?> </td>
                    <td><?php echo date("d M Y", strtotime($row['start_date'])); ?></td>
                    <td><?php echo date("d M Y", strtotime($row['end_date'])); ?></td>
                    <td><?php echo $row['coupon_code']; ?> </td>
                    <td><?php echo $row['discount_value']; ?> </td>
                    <td><img style="width:30%" src="<?php echo base_url()."uploads/deals/".$row['image'];?>"/></td>
                    <td>
                        <?php 
                        if ($row['is_active']=='0'){
                        echo "NO";  
                     }else{ 
                        echo "YES";
                     } ?>
                    </td>
                    <td><?php echo date("d M Y - h:i A", strtotime($row['created_date'])); ?> </td>
                      <td>
                        <a class="btn btn-success" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php echo $editlink.'/'.$row['deal_id']; ?>"><i class="fas fa-edit" style="font-size: 14px;">Edit</i></a></br></br>
                        <?php if($row['is_active']=='0'){ ?>
                            <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php echo $activelink.'/'.$row['deal_id']; ?>"><i class="fas fa-add" style="font-size: 14px;"> Active</i></a>
                            <?php }else{ ?>
                            <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php echo $deactivelink.'/'.$row['deal_id']; ?>"><i class="fas fa-add" style="font-size: 14px;"> Deactive</i></a>
                        <?php } ?>
                        
                     </td> 
                  </tr>
                  
                   <?php
						$i++;
                      }
                      ?>
                  
                  </tbody>
                  <tfoot>
                  <!-- <tr> 
                    <!-- <th>ID</th> -->
                    <!-- <th>Plan Name</th> -->
                    <!-- <th>Plan Type</th> -->
                    <!-- <th>Price</th> -->
                    <!-- <th>Created On</th> -->
					<!-- <th>Exprired On</th> -->
          <!-- <th>Remaning Days</th> -->
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
         <?php $this->load->view('VendorPanel/layout/footer'); 
		//  $this->load->view('front/layout/script'); ?>
    </div>

    <?php $this->load->view('VendorPanel/layout/script'); ?>
<script>
     $("#vendor_deals_datatable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "order": [[9, 'desc']]
    }).buttons().container().appendTo('#vendor_deals_datatable_wrapper .col-md-6:eq(0)');
</script>