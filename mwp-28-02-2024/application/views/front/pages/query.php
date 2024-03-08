<?php $this->load->view('front/layout/front-header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/contact.css">
<style>
    .send_btn{
        background-color: transparent;
        border: none;
    }
</style>
<section class="contact-us">
    <div class="container-fluid mt-3 container-background">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right">
                <form action="<?php echo base_url('Contact_us/Query'); ?>" method="post" enctype="multipart/form-data" autocomplete="on" data-aos="fade-up" data-aos-delay="100">
                    <h2 class="mb-5 text-capitalize">No query is random or useless</h2>
                    <input type="text" name="name" class="field" placeholder="Name" required="">
                    <input type="text" name="email" class="field" placeholder="Email" required="">
                    <div class="d-flex justify-content-between">
                        <input type="text" name="mobile_number" class="field fifty_field" placeholder="Mobile Number"
                            required="">
                        <input type="text" name="work_location" class="field fifty_field" placeholder="Location">
                    </div>
                    <textarea name="message" placeholder="Leave your Message" class="field"></textarea>
                    <button type="submit" class="send_btn"><img data-src="<?php echo base_url() . MAIN_IMG ?>submit.png" class="contact_btns" alt=""></button>
                </form>
            </div>
        </div>
    </div>
</section>

<section class="section map_sec  mt-md-5" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="col-12 map_title text-center">
            <h4>Our Offices</h4>
            <img src="<?php echo base_url() ?>assets/front/images/heading_design.png" class="img-fluid img-responsive heading_line" alt="">
        </div>
        <div class="row mt-md-5 mt-3">
            <div class="col-md-6 text-center">
                <h4>Head Office:</h4>
                <!-- <h5>+91-9876543210</h5> -->
                <address style="font-family: 'Arimo', sans-serif;">
                    <?php echo isset($basicData[0]['address1']) ? $basicData[0]['address1'] : '' ?>
            </address>

                <div class="addressmap map1">
                    <iframe src="<?php echo isset($basicData[0]['map1']) ? $basicData[0]['map1'] : '' ?>" style="border:0;" allowfullscreen="" loading="lazy" class="map_frame" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
            <div class="col-md-6 text-center">
                <h4 class="mt-md-0 mt-3">Gandhinagar Office:</h4>
                <!-- <h5>+91-9876543210</h5> -->
                <address>
                    <?php echo isset($basicData[0]['address2']) ? $basicData[0]['address2'] : '' ?>
                </address>
                <div class="addressmap map2">
                    <iframe src="<?php echo isset($basicData[0]['map2']) ? $basicData[0]['map2'] : '' ?>" style="border:0;" allowfullscreen="" loading="lazy" class="map_frame" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>

            </div>
        </div>
    </div>

</section>



<?php $this->load->view('front/layout/front-footer2'); ?>