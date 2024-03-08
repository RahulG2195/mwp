<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>My wedding paelette |  Admin log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url()?>assets/dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page" style="background-color:#ed404c;">
<div class="login-box">
  <div class="login-logo">
    <a href="../../index2.html"><img src="<?php echo base_url() ?>assets/front/image/logo/header-logo.png" style="width: 300px;"></a>
  </div>
  <!-- /.login-logo -->
  <div class="card">
    <div class="card-body login-card-body">
      <form action="<?php echo base_url() ?>admin/AdminLogin/forgotpassword" method="POST">
        <div class="input-group mb-3">
          <input type="email" class="form-control" placeholder="Enter email id" name="emailid" required>
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php 
            // error display
            if(!empty($this->session->userdata('err_msg'))){
                echo '<span class="text-danger">'.$this->session->userdata('err_msg').'</span>';
                $this->session->unset_userdata('err_msg');
            }
            if(!empty($this->session->userdata('msg'))){
              echo '<span class="text-sucess">'.$this->session->userdata('msg').'</span>';
              $this->session->unset_userdata('msg');
          }
        ?>
        <div class="row">
          
          <!-- /.col -->
          <div class="col-4">
            <button type="submit" class="btn btn-primary btn-block" style="background-color:#f5001e; border: none;">Submit</button>
          </div>
          <div class="col-4">
            <a href="<?php echo  base_url() ?>admin/AdminLogin" style="color:#f5001e">Login</a>
          </div>
          <!-- /.col -->
        </div>
      </form>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="<?php echo base_url()?>assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url()?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url()?>assets/dist/js/adminlte.min.js"></script>
</body>
</html>
