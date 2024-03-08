<?php  $this->load->view('front/layout/head'); ?>
<?php  $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/thank-you.css">
<div class="thankyou-page">
    <div class="_header">
        <div class="logo" style="display: none;">
            <img src="https://codexcourier.com/images/banner-logo.png" alt="">
        </div>
        <h1>Your payment has been failde. Please try again after sometime</h1>
    </div>
    <div class="_body">
        <div class="_box">
            <!-- <h2>
                <strong>Please check your email</strong> for further instructions on how to complete your account setup.
            </h2> -->
            <p>
              Thank you for reaching out to My Wedding Palette! Our dedicated team will be in touch with you soon to discuss your wedding plans in detail. Your dream wedding journey begins here!

            </p>
        </div>
    </div>
    <div class="_footer">
        <p style="font-size: 16px;font-family: 'Montserrat';">Having trouble? <a href="<?php echo  base_url() ?>contactus" style="font-size: 16px;font-family: 'Montserrat'; color: #ee182b;">Contact us</a> </p>
        <a class="btn" href="<?php echo  base_url() ?>">Back to homepage</a>
    </div>
</div>
<?php  $this->load->view('front/layout/footer'); ?>
<?php  $this->load->view('front/layout/script'); ?>
