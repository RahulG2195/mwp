<?php $this->load->view('admin/layout/header'); ?>
           
<?php $this->load->view('admin/layout/sidebar'); ?>

<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1>Edit blog</h1>
                </div>
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                        <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
                        <li class="breadcrumb-item active">Edit blog</li>
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
                    <?php echo form_open_multipart('admin/blog/update');?>
                        <input type="hidden" name="blog-id" value="<?php if(!empty($blog)){ echo $blog[0]["blog-id"]; } ?>">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Blog title</label>
                                        <input type="text" class="form-control" name="blog-title" id="exampleInputName" placeholder="Enter name" value="<?php if(!empty($blog)){ echo $blog[0]["blog-title"]; } ?>">
                                        <div class="error"><?php echo form_error('blog-title'); ?></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputName">Blog category</label>
                                        <select name="blog-cat-id" class="form-control select2bs4" style="width: 100%;">
                                            <option>select category</option>
                                            <?php foreach ($category as $value) { ?>

                                                <option value="<?php echo $value['blog-category-id']; ?>" ><?php echo $value['blog-category-name']; ?></option>
                                            <?php } ?>
                                           
                                        </select>
                                        <div class="error"><?php echo form_error('blog-cat-id'); ?></div>
                                    </div>
                                </div>

                                <div class="col-md-6">    
                                    <div class="form-group">
                                        <label for="exampleInputCountOfCity">Blog seo url</label>
                                        <input type="text" class="form-control" name="blog-seo-url" id="exampleInputCountOfCity" placeholder="Enter category url" value="<?php if(!empty($blog)){ echo $blog[0]["blog-seo-url"]; } ?>"
                                        >
                                        <div class="error"><?php echo form_error('blog-seo-url'); ?></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="exampleInputRank">Blog Image</label>
                                        <input type="file" class="form-control" name="blog-image">
                                    </div>
                                </div>
                                <div class="col-md-6">    
                                    <div class="form-group">
                                        <label for="exampleInputCountOfCity">Meta title</label>
                                        <input type="text" class="form-control" name="meta-title" id="exampleInputCountOfCity" placeholder="Enter category url" value="<?php if(!empty($blog)){ echo $blog[0]["meta-title"]; } ?>">
                                    </div>
                                </div>
                                <div class="col-md-6">    
                                    <div class="form-group">
                                        <label for="exampleInputCountOfCity">Meta description</label>
                                        <textarea  class="form-control" name="meta-description" id="exampleInputCountOfCity"> <?php if(!empty($blog)){ echo $blog[0]["meta-description"]; } ?> </textarea>                                       
                                    </div>
                                </div>

                                 <div class="col-md-12">    
                                    <div class="form-group">
                                        <label for="exampleInputCountOfCity">Short description</label>
                                        <textarea  class="form-control" name="short-description" id="exampleInputCountOfCity"><?php if(!empty($blog)){ echo $blog[0]["short-description"]; } ?></textarea>
                                       
                                        <div class="error"><?php echo form_error('short-description'); ?></div>
                                    </div>
                                </div>
                                <div class="col-md-12">    
                                    <div class="form-group">
                                        <label for="exampleInputCountOfCity">Description</label>
                                       <!--  <textarea  class="form-control" name="description" id="exampleInputCountOfCity"></textarea> -->
                                         <textarea id="summernote" class="form-control" name="description">
                                               <?php if(!empty($blog)){ echo $blog[0]["description"]; } ?>
                                         </textarea>
                                        <div class="error"><?php echo form_error('description'); ?></div>
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