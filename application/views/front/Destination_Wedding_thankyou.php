<?php  $this->load->view('front/layout/head'); ?>
<?php  $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/thank-you.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">
<div class="thankyou-page">
    <div class="_header">
        <div class="logo" style="display: none;">
            <img src="https://codexcourier.com/images/banner-logo.png" alt="">
        </div>
        <h1>Thank You!</h1>
    </div>
    <div class="_body">
        <div class="_box">
            <h2>
                <strong>Please check your email</strong> for further instructions.
            </h2>
            <p>
              Thank you for choosing My Wedding Palette! We look forward to making every moment memorable for you! Reach out to us on <a href="https://api.whatsapp.com/send?phone=917977965178" target="_blank" style="font-size: 16px;font-family: 'Montserrat'; color: #ee182b;">Whatsapp</a>.
            </p>
        </div>
    </div>
    <div class="_footer">
        <!--<p style="font-size: 16px;font-family: 'Montserrat';">Having trouble? <a href="https://api.whatsapp.com/send?phone=917977965178" target="_blank" style="font-size: 16px;font-family: 'Montserrat'; color: #ee182b;">Whatsapp Us</a> </p>-->
        <a class="btn" href="<?php echo  base_url() ?>">Back to homepage</a>
    </div>
</div>
<?php  $this->load->view('front/layout/footer'); ?>
<?php  $this->load->view('front/layout/script'); ?>
