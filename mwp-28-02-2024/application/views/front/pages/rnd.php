<?php $this->load->view('front/layout/front-header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/video_blog.css">

<section class="section achivement rnd_sec same_sec " data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="achive_title text-center common_heading">
            <h4>R & D</h4>
            <img data-src="<?php echo base_url() ?>assets/front/images/heading_design.png" class="img-fluid img-responsive heading_line" alt="">
        </div>
        
        <div class="row">
        <?php 
        
        foreach ($rnd as $value) {?>
        
            <div class="col-md-4 col-sm-4 col-6 my-3">
                <div class="card video_card">
                    <a href="<?php echo base_url() . 'uploads/rnd/' . $value['pdf']?>" download="download">
                    <div class="card_frame">
                        <img data-src="<?php echo base_url() . 'uploads/rnd/' . $value['image']?>" class="img-fluid rnd_img" alt="">
                    </div>
                    <div class="card-body para-body">
                        <!-- <h5 class="card-title">Card title</h5> -->
                        <p class="card-text video_title"><?php echo  $value['name']?></p>
                        <img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="read_more img-fluid" alt="">
                    </div>
                    </a>
                </div>
            </div>
        <?php
        }
        ?>
        </div>
    </div>
</section>



<?php $this->load->view('front/layout/front-footer2'); ?>