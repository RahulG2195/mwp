<?php $this->load->view('front/layout/front-header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/contact.css">
<section class="contact-us contact_section">
    <div class="container-fluid mt-3 container-background">
        <div class="contact-box">
            <div class="left"></div>
            <div class="right main_cont_div">
                <h2 class="mb-mb-5 mb-2 text-capitalize">What you are looking for?</h2>
                <div class="redirect_btns">
                    <div class="d-flex justify-content-center" data-aos="fade-up" data-aos-delay="100">
                        <a href="<?php echo base_url('business') ?>">
                        <img data-src="<?php echo base_url() . MAIN_IMG ?>business.png"
                                class="img-fluid img-responsive top2_btn" alt=""></a>
                        <a href="<?php echo base_url('career') ?>">
                        <img data-src="<?php echo base_url() . MAIN_IMG ?>career.png"
                                class="img-fluid img-responsive top2_btn" alt=""></a>
                    </div>
                    <a href="<?php echo base_url('query') ?>" data-aos="fade-up" data-aos-delay="100">
                    <img data-src="<?php echo base_url() . MAIN_IMG ?>query.png"
                            class="img-fluid img-responsive" alt=""></a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="section map_sec mt-md-5" data-aos="fade-up" data-aos-delay="100">
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