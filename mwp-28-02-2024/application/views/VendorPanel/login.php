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
        .show{
          display:block!important;
        }
        .hide{
          display:none!important;
        }
        .clr_white{
          color:#ffffff;
        }
    </style>
  <body class="login">
    <div>
      <a class="hiddenanchor" id="signup"></a>
      <a class="hiddenanchor" id="signin"></a>

      <div class="login_wrapper">
        <div class="animate form login_form">
          <section class="login_content" id="login_form">
            <form action="<?php echo base_url()?>VendorPanel/Login" method="post">
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
                        
                    }elseif(!empty($this->session->userdata('success_msg'))){
                      echo '<span class="text-danger">'.$this->session->userdata('success_msg').'</span>';
                      $this->session->unset_userdata('success_msg');
                    }
                ?>
              </div>
              <div class="mx-auto text-center">
                <input type="submit" name="login_submit" class="btn btn-primary submit" id="a" value="Log in">
                <input type="button" name="login_submit" class="btn btn-primary" id="forgot_password" value="Forgot password?">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <p class="change_link">New to site?
                  <a href="<?php echo base_url()?>Vendor/vendor_pricing_plan" class="to_register"> Create Account </a>
                </p>
              </div>
            </form>
          </section>
          
          <!-- /* forgot password details*/ -->
           <section class="login_content hide" id="forgot_form">
            <form action="<?php echo base_url()?>VendorPanel/Login/forgot_password" method="post">
              <h1>Vendor Details</h1>
              <div>
                <input type="text" class="form-control" placeholder="Email" name="Email" />
              </div>
              <!-- <div>
                <input type="password" class="form-control" placeholder="New Password" name="Password" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Confirm Password" name="confirm Password" />
              </div> -->
              <div class="">
                
                <?php 
                    // error display
                    if(!empty($this->session->userdata('err_msg'))){
                        echo '<span class="text-danger">'.$this->session->userdata('err_msg').'</span>';
                        $this->session->unset_userdata('err_msg');
                        
                    }elseif(!empty($this->session->userdata('success_msg'))){
                      echo '<span class="text-danger">'.$this->session->userdata('success_msg').'</span>';
                      $this->session->unset_userdata('success_msg');
                    }
                ?>
              </div>
              <div class="mx-auto text-center">
                <input type="submit" name="forgot_submit" class="btn btn-primary submit" id="b" value="Submit">
                <input type="button" name="login_submit" class="btn btn-primary" id="cancel1" value="Cancel">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!--<p class="change_link">New to site?-->
                  <!--<a href="<?php //echo base_url()?>Vendor/vendor_pricing_plan" class="to_register"> Create Account </a>-->
                <!--</p>-->
              </div>
            </form>
          </section>
          <!-- /* forgot password details*/ -->
          
          <!-- /* forgot password accept*/ -->
           <section class="login_content hide" id="otp_form">
            <form action="<?php echo base_url()?>VendorPanel/Login/forgot_update_password" method="post">
              <h1>Forgot Password</h1>
              <input type="hidden" class="form-control" placeholder="forgot_source" id="forgot_source" name="forgot_source" value="<?php echo $this->input->get('forgot_source', TRUE); ?>"/>
              <div>
                <input type="text" class="form-control" placeholder="OTP" name="Otp" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="New Password" name="Npassword" />
              </div>
              <div>
                <input type="password" class="form-control" placeholder="Confirm Password" name="Cpassword" />
              </div>
              <div class="">
                
                <?php 
                    // error display
                    if(!empty($this->session->userdata('err_msg'))){
                        echo '<span class="text-danger">'.$this->session->userdata('err_msg').'</span>';
                        $this->session->unset_userdata('err_msg');
                        
                    }elseif(!empty($this->session->userdata('success_msg'))){
                      echo '<span class="text-danger">'.$this->session->userdata('success_msg').'</span>';
                      $this->session->unset_userdata('success_msg');
                    }
                ?>
              </div>
              <div class="mx-auto text-center">
                <input type="submit" name="forgot_submit" class="btn btn-primary submit" id="c" value="Submit">
                <input type="button" name="login_submit" class="btn btn-primary" id="cancel2" value="Cancel">
              </div>

              <div class="clearfix"></div>

              <div class="separator">
                <!--<p class="change_link">New to site?-->
                  <!--<a href="<?php //echo base_url()?>Vendor/vendor_pricing_plan" class="to_register"> Create Account </a>-->
                <!--</p>-->
              </div>
            </form>
          </section>
          <!-- /* forgot password */ -->
        </div>
      </div>
    </div>
        <!-- jQuery -->
<script src="<?php echo base_url(); ?>/assets/plugins/jquery/jquery.min.js"></script>
                        <!-- //forgot password script -->
<script>
  $(document).ready(function(){
     var forgot_source = $("#forgot_source").val();
    //  alert(forgot_source);
     if(forgot_source !==''){
            $('.login_content').removeClass('show');
            $('.login_content').addClass('hide');
            $('#otp_form').addClass('show');
            $('#otp_form').removeClass('hide');
     }
    $("#forgot_password").click(function(){
            $('.login_content').removeClass('show');
            $('.login_content').addClass('hide');
            $('#forgot_form').addClass('show');
            $('#forgot_form').removeClass('hide');
            // alert('shankar');
    })

    $("#cancel1").click(function(){
            $('.login_content').removeClass('show');
            $('.login_content').addClass('hide');
            $('#login_form').addClass('show');
            $('#login_form').removeClass('hide');
            // alert('shankar');
    })

     $("#cancel2").click(function(){
            $('.login_content').removeClass('show');
            $('.login_content').addClass('hide');
            $('#login_form').addClass('show');
            $('#login_form').removeClass('hide');
            // alert('shankar');
    })
  });
    
  </script>

  </body>
</html>
