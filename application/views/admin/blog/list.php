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
           <!--  <h1>Master</h1> -->
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
              <li class="breadcrumb-item active">Blog Data</li>
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
                <h3 class="card-title">Blog Data</h3>
                <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;float: right;" href="<?php echo base_url() ?>admin/blog/add"><i class="fas fa-plus" style="font-size: 14px;"> Add New</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <table id="example1" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>Blog name</th>
                    <th>Blog url</th>
                    <th>Image</th>
                    <th>Action</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php 
                      foreach ($blog as $row) {
                          ?>
                   
                  <tr>
                    <td><?php echo $row['blog-title']; ?> </td>
                    <td><?php echo $row['blog-seo-url']; ?> </td>
                    <td><img src="<?php echo base_url() ?>uploads/blog-image/<?php echo $row["blog-image"]; ?>" width="50px" height="50px"> </td>
                    <td>
                        <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php echo base_url() ?>admin/blog/edit/<?php echo $row['blog-id']; ?>"><i class="fas fa-edit" style="font-size: 14px;">edit</i></a>
                        <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php echo base_url() ?>admin/blog/delete/<?php echo $row['blog-id']; ?>" onclick="confirm('You want to delete data ?');"><i class="fas fa-trash-alt" style="font-size: 14px;"> delete</i></a>
                    </td> 
                  </tr>
                  
                   <?php
                      }
                      ?>
                  
                  </tbody>
                  
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
