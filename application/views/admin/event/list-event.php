<?php $this->load->view('admin/layout/header'); ?>
           
<?php $this->load->view('admin/layout/sidebar'); ?>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Event Management</h1>
            
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
              <li class="breadcrumb-item active">Event list</li>
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
                <h3 class="card-title">Event data</h3>
                <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;float: right;" href="<?php echo $addlink; ?>"><i class="fas fa-plus" style="font-size: 14px;"> Add New</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Event ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Is Deleted</th>
                    <th>Created Date</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php 
                      foreach ($list as $row) {
                          ?>
                   
                  <tr>
                    <td><?php echo $row['event_id']; ?> </td>
                    <td><?php echo $row['event_title']; ?> </td>
                    <td><?php echo $row['event_description']; ?> </td>
                    <td><?php echo $row['event_address']; ?> </td>
                    <td><?php echo date("M,d,Y h:i:s A", strtotime($row['event_start_date'])); ?> </td>
                    <td><?php echo date("M,d,Y h:i:s A", strtotime($row['event_end_date'])); ?> </td>
                    <td>
                        <?php if($row['is_deleted']=='0'){ ?>
                            <span>NO</span>
                        <?php } else { ?>
                            <span>YES</span>
                        <?php } ?> 
                    </td>
                    <td>
                        <?php echo date("M,d,Y h:i:s A", strtotime($row['created_date'])); ?> 
                    </td>
                    <td>
                        <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php echo $editlink.''.$row['event_id']; ?>"><i class="fas fa-edit" style="font-size: 14px;">edit</i></a>
                        <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php echo $deletelink.''.$row['event_id']; ?>"><i class="fas fa-trash-alt" style="font-size: 14px;"> delete</i></a>
                    </td>
                  </tr>
                  
                   <?php
                      }
                      ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>Event ID</th>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Address</th>
                    <th>Start Date</th>
                    <th>End Date</th>
                    <th>Is Deleted</th>
                    <th>Created Date</th>
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
<?php $this->load->view('admin/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>