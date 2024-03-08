<?php $this->load->view('VendorPanel/layout/header'); ?>

<?php $this->load->view('VendorPanel/layout/sidebar'); ?>
<style>
    .content-wrapper{
        display: flex;
        align-items: center;
    }
    .login_content{
        background: #fff;
    padding: 20px;
    box-shadow: 0 0 10px 1px rgba(0,0,0,0.5);
    }
    form div{
        margin: 10px 0;
    }
</style>
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
        <div class="login_wrapper mx-auto">
            <div class="animate form login_form">
                <section class="login_content">
                    <form action="<?php echo base_url() ?>VendorPanel/Login/ResetPwd" method="post">
                        <input type="hidden" name="ven_id" id="" value="<?php echo $this->session->userdata('dv_id')?>">
                        <h1>Reset Password</h1>
                        <div>
                            <input type="password" class="form-control" placeholder="Password" name="Password" />
                        </div>
                        <div>
                            <input type="password" class="form-control" placeholder="confirm Password" name="cPassword" />
                        </div>
                        <div class="">
                            <?php
                            // error display
                            if (!empty($this->session->userdata('err_msg'))) {
                                echo '<span class="text-danger">' . $this->session->userdata('err_msg') . '</span>';
                                $this->session->unset_userdata('err_msg');
                            }
                            ?>
                        </div>
                        <div class="mx-auto text-center">
                            <input type="submit" name="login_submit" class="btn btn-primary submit" id="" value="Reset Password">
                        </div>

                        <div class="clearfix"></div>
                    </form>
                </section>
            </div>
    </div>

    <!-- /.content -->
</div>
<?php $this->load->view('VendorPanel/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('VendorPanel/layout/script'); ?>