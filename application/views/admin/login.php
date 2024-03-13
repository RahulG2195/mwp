<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Login</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url()?>assets/vendors/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url()?>assets/vendors/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url()?>assets/vendors/nprogress/nprogress.css" rel="stylesheet">
    <!-- Animate.css -->
    <link href="<?php echo base_url()?>assets/vendors/animate.css/animate.min.css" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="<?php echo base_url()?>assets/build/css/custom.min.css" rel="stylesheet">
  </head>
    <style>
        .login{
            background-image: url('<?php echo base_url()?>assets/images/login-bg.JPG');
            background-repeat: no-repeat;
            background-position: center;
            background-size: cover;
            height: 98vh;
            width: 100%;
        }

        .login_form{
            background: rgba(255,255,255,0.2);
            padding: 30px;
            border-radius: 25px;
            color: #000;
        }
        .login_form p, h1, a{
            color: #000;
            text-shadow: none;
        }
    </style>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content">
            <form action="<?php echo base_url()?>admin/Login" method="post">
              <h1>Vendor Login</h1>
              <div>
                <input type="text" class="form-control" placeholder="Username" name="Username" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Password" name="Password" />
              </div>
              <div class="">
                
                <?php 
                    // error display
                    if(!empty($this->session->userdata('err_msg'))){
                        echo '<span class="text-danger">'.$this->session->userdata('err_msg').'</span>';
                        $this->session->unset_userdata('err_msg');
                    }
                ?>
              </div>
              <div class="mx-auto text-center">
                <input type="submit" name="login_submit" class="btn btn-primary submit" id="" value="Log in">
                <!-- <input type="button" name="login_submit" class="btn btn-primary reset_pass" id="" value="Lost your password?"> -->
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="<?php echo base_url()?>Vendor/vendor_pricing_plan" class="to_register"> Create Account </a>
                </p>
              </div>
            </form>
          </section>
        </div>
      </div>
    </div>
  </body>
</html>
