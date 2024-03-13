<?php $this->load->view('front/layout/front-header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/video_blog.css">

<div class="section achivement_div full-height my-5">

    <section id="portfolio">

        <div class="container">

            <div class="row">

                <div class="col-lg-12">

                    <div class="text-center pb-3">

                        <h1 class="gallary-title">News & Events</h1>
                        <img data-src="<?php echo base_url() . MAIN_IMG ?>heading_design.png" class="img-fluid img-responsive heading_line" alt="">
                    </div>

                </div>

            </div>

        </div>

        <div class="container-fluid">
            <div class="grid">
                <?php 
                foreach ($news as $value) {
                   ?>
               
                <div class="grid-item">
                    <div class="card new_div">
                        <a href="<?php echo base_url() . 'uploads/news/' . $value['news_img'] ?>" data-fancybox="gallery">
                            <img id="myImg" class="news_img" data-aos="fade-up" data-aos-delay="100" loading="lazy" src="<?php echo base_url() . 'uploads/news/' . $value['news_img'] ?>" alt="image1">
                        </a>
                    </div>
                </div>
                <?php  
                }
                ?>
            </div>
        </div>
    </section>

</div>

<?php $this->load->view('front/layout/front-footer2'); ?>