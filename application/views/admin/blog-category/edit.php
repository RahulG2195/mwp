<?php $this->load->view('admin/layout/header'); ?>
           
<?php $this->load->view('admin/layout/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit blog category</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
                        <li class="breadcrumb-item active">Edit blog category</li>
                    </ol>
                </div>
            </div>
        </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
        <div class="container-fluid">
            <!-- SELECT2 EXAMPLE -->
            <div class="card card-default">
                <div class="card-header d-none">
                    <h3 class="card-title">Select2 (Default Theme)</h3>

                    <div class="card-tools">
                        <button type="button" class="btn btn-tool" data-card-widget="collapse">
                            <i class="fas fa-minus"></i>
                        </button>
                        <button type="button" class="btn btn-tool" data-card-widget="remove">
                            <i class="fas fa-times"></i>
                        </button>
                    </div>
                </div>
                <!-- /.card-header -->
                <!--<div class="card-body">-->
                    <!-- form start -->
                    <?php echo form_open_multipart('admin/blogcategory/update');?>
                       <input type="hidden" class="form-control" name="blog-category-id" id="exampleInputName"  value="<?php if(!empty($blogcategory)){ echo $blogcategory[0]["blog-category-id"]; } ?>">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Blog category name</label>
                                        <input type="text" class="form-control" name="blog-category-name" id="exampleInputName" placeholder="Enter name" value="<?php if(!empty($blogcategory)){ echo $blogcategory[0]["blog-category-name"]; } ?>">
                                        <div class="error"><?php echo form_error('blog-category-name'); ?></div>
                                    </div>
                                </div>
                                <div class="col-md-6">    
                                    <div class="form-group">
                                        <label for="exampleInputCountOfCity">Blog category url</label>
                                        <input type="text" class="form-control" name="blog-category-url" id="exampleInputCountOfCity" placeholder="Enter category url" value="<?php if(!empty($blogcategory)){ echo $blogcategory[0]["blog-category-url"]; } ?>">
                                        <div class="error"><?php echo form_error('blog-category-name'); ?></div>
                                    </div>
                                </div>  

                                <div class="col-md-6">    
                                    <div class="form-group">
                                        <label for="exampleInputCountOfCity">Blog image</label><br>
                                        <img src="<?php echo base_url() ?>uploads/blog-category/<?php echo $blogcategory[0]["category-image"]; ?>" width="50px" height="50px">
                                    </div>
                                </div>

                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputRank">Image</label>
                                        <input type="file" class="form-control" name="category-image">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- /.card-body -->

                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                  <?php echo  form_close(); ?>
                <!--</div>-->
                <!-- /.row -->
                <!-- /.row -->
            </div>
            <!-- /.card-body -->
        </div>
        <!-- /.card -->
    </section>
</div>
<!-- /.container-fluid -->
        
        <!-- /.content -->
</div>
<?php $this->load->view('admin/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>