<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>

            <!-- Content Wrapper. Contains page content -->
            <div class="content-wrapper">
                <!-- Content Header (Page header) -->
                <section class="content-header">
                    <div class="container-fluid">
                        <div class="row mb-2">
                            <div class="col-sm-6">
                                <h1>Edit Sub Category</h1>
                            </div>
                            <div class="col-sm-6">
                                <ol class="breadcrumb float-sm-right">
                                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
                                    <li class="breadcrumb-item active">Edit Sub Category</li>
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
                                <form action="<?php echo $editlink; ?>" method="POST">
                                    <input type="hidden" class="form-control"  name="update" placeholder="update" value="update">
                                    <input type="hidden" class="form-control"  name="editid" placeholder="editid" value="<?php echo $editdata['sub_category_id']; ?>">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-md-6">
                                                <div class="form-group">
                                                    <label for="exampleInputEmail1">Name</label>
                                                    <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Enter name" required="" value="<?php echo $editdata['name']; ?>">
                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Category</label>
                                                    <select name="category_id" class="form-control select2bs4" style="width: 100%;">
                                                        <?php foreach ($categories as $category) {
                                                            if($editdata['category_id']==$category['category_id']){
                                                            if($category['is_deleted']=='0'){
                                                            ?>                                    
                                                            <option value="<?php echo $category['category_id']; ?>" selected="selected"><?php echo $category['name']; ?></option>
                                                            <?php }
                                                            }else{
//                                                            else{ ?>
                                                            <option value="<?php echo $category['category_id']; ?>" ><?php echo $category['name']; ?></option>
                                                            <!--<option value="0" >Yes</option>-->
                                                        <?php
//                                                        }
                                                            }
                                                        } ?>
                                                        <!--<option value="0" selected="selected">No</option>-->
                                                        <!--<option value="0">Yes</option>-->
                                                    </select>
                                                </div>
                                                </div>
                                                <div class="col-md-6">
                                                <div class="form-group">
                                                    <label>Is Deleted?</label>
                                                    <select name="is_deleted" class="form-control select2bs4" style="width: 100%;">
                                                        <?php if($editdata['is_deleted']==0){ ?>
                                                            <option value="0" selected="selected">No</option>
                                                            <option value="1">Yes</option>
                                                        <?php } else { ?>
                                                            <option value="0">No</option>
                                                            <option value="1" selected="selected">Yes</option>
                                                        <?php } ?>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /.card-body -->

                                    <div class="card-footer">
                                        <button type="submit" class="btn btn-primary">Submit</button>
                                    </div>
                                </form>

                            <!--</div>-->
                            <!-- /.row -->


                            <!-- /.row -->
                        </div>
                        <!-- /.card-body -->
                    </div>
                    <!-- /.card --> 
            </div>
            <!-- /.container-fluid -->
        </section>
        <!-- /.content -->
    </div>
      <?php $this->load->view('admin/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>