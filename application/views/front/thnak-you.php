<?php  $this->load->view('front/layout/head'); ?>
<?php  $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/thank-you.css">
<div class="thankyou-page">
    <div class="_header">
        <div class="logo">
            <img src="https://codexcourier.com/images/banner-logo.png" alt="">
        </div>
        <h1>Thank You!</h1>
    </div>
    <div class="_body">
        <div class="_box">
            <h2>
                <strong>Please check your email</strong> for further instructions on how to complete your account setup.
            </h2>
            <p>
                Thanks a bunch for filling that out. It means a lot to us, just like you do! We really appreciate you giving us a moment of your time today. Thanks for being you.
            </p>
        </div>
    </div>
    <div class="_footer">
        <p>Having trouble? <a href="https://api.whatsapp.com/send?phone=917977965178" target="_blank">Whatsapp Us</a> </p>
        <a class="btn" href="">Back to homepage</a>
    </div>
</div>
<?php  $this->load->view('front/layout/footer'); ?>
<?php  $this->load->view('front/layout/script'); ?>
