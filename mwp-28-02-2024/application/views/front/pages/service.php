<?php $this->load->view('front/layout/front-header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/service.css">
<section class="service_banner">
    <div class="overlay_banner"></div>
    <div class="container">
        <div class="row">
            <div class="service_title common_banner_title">
                <h5>Our Services</h5>
                <img src="<?php echo base_url() . MAIN_IMG ?>heading_design.png" class="img-fluid img-responsive heading_line" alt="">
            </div>
        </div>
    </div>
</section>

<section class="service_content">
    <div class="container">
        <?php 
        foreach ($service as $value) {
        ?>
        <div class="ser_cont">
            <div class="row">
                <div class="col-md-6 mt-5">
                    <div class="service_img1"  data-aos="fade-up" data-aos-delay="100">
                        <img src=" <?php echo base_url() . 'uploads/service/'. $value['service-image'] ?>" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="col-md-6 mt-5">
                    <div class="service_content1" data-aos="fade-up" data-aos-delay="100">
                        <div class="service_content_title text-capitalize">
                            <h4><?php echo $value['service-name']?></h4>
                        </div>
                        <div class="service_content_para">
                            <p><?php echo $value['service-para']?></p>
                        </div>
                        <a href="<?php echo base_url('our-projects') ?>"><img src="<?php echo base_url() . MAIN_IMG ?>view_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
        <?php }
        ?>
    </div>
</section>
<?php $this->load->view('front/layout/front-footer2'); ?>