<?php $this->load->view('front/layout/front-header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/video_blog.css">
<section class="blog_banner">
    <div class="overlay_banner"></div>
    <div class="container">
        <div class="row">
            <div class="blog_title common_banner_title text-center">
                <h5>Video's</h5>
                <img src="<?php echo base_url() ?>assets/front/images/heading_design.png" class="img-fluid img-responsive heading_line" alt="">
            </div>
            </a>
        </div>
    </div>
</section>

<section class="video_content my-5">
    <div class="container">
        <div class="row">
            <?php 
            foreach ($video as  $value) {
               ?>
            <div class="col-md-4">
                <a href="<?php echo $value['video-link']?>" data-fancybox="gallery">
                    <div class="card video_card">
                        <div class="card_frame">
                        <img src="<?php echo base_url() . 'uploads/video/' .$value['video-image'] ?>" alt="" class="card-img-top img-fluid">
                        </div>
                        <div class="card-body para-body">
                            <!-- <h5 class="card-title">Card title</h5> -->
                            <p class="card-text video_title"><?php echo $value['paragraph']?></p>
                        </div>
                    </div>
                </a>
            </div>
               <?php 
            }
            ?>
            
        </div>
    </div>
</section>
<?php $this->load->view('front/layout/front-footer2'); ?>