<?php $this->load->view('front/layout/front-header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/video_blog.css">


<div class="section achivement_div full-height my-5">
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-center pb-3 achi_title" data-aos="fade-up" data-aos-delay="100">
                        <h1 class="gallary-title">Achievements</h1>
                        <img data-src="<?php echo base_url() . MAIN_IMG ?>heading_design.png" class="img-fluid img-responsive heading_line" alt="">
                    </div>
                </div>
            </div>
        </div> 
        <div class="container-fluid"> 
            <div class="row"> 
                <div class="col-md-12 "> 
                    <div align="center" class="filter_div mt-4 filter_groups" data-aos="fade-up" data-aos-delay="100">
                        <button class=" btn-default filter-button filter_button m-1 active" data-filter="all">All</button>
                        <button class=" btn-default filter-button filter_button m-1" data-filter="certificates">Certificate</button>
                        <button class=" btn-default filter-button filter_button m-1" data-filter="awards">Awards</button>
                        <button class=" btn-default filter-button filter_button m-1" data-filter="appreciation">Appreciation</button>
                        <button class=" btn-default filter-button filter_button m-1" data-filter="trophies">Trophies</button>
                    </div> 
                </div> 
            </div> 
        </div>
        <div class="container-fluid">
            <div class="main_content mt-5 filter certificates">
                <div class="col-lg-12 gallary-subtitle-row certificates">
                    <div style="text-align: left;" class="pb-3">
                        <h1 class="gallary-subtitle">CERTIFICATES</h1>
                    </div>
                </div>
                <div class="grid">
                    <?php 
                        foreach ($certificate as $value) {
                    ?>
                    <div class="grid-item">
                        <div class="card zoom_in">
                            <a href="<?php echo base_url() . 'uploads/achivements/' . $value['achievement-image'] ?>" data-fancybox="gallery">
                                <img id="myImg" class="box achive_img" loading="lazy" src="<?php echo base_url() . 'uploads/achivements/' . $value['achievement-image'] ?>" alt="image1">
                            </a>
                        </div>
                    </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
                <div class="main_content mt-5 filter awards">
                    <div class="col-lg-12 gallary-subtitle-row">
                        <div style="text-align: left;" class="pb-3">
                            <h1 class="gallary-subtitle">Awards</h1>
                        </div>
                    </div>
                    <div class="grid">
                        <?php 
                            foreach ($Awards as $value) {
                        ?>
                        <div class="grid-item">
                            <div class="card zoom_in">
                                <a href="<?php echo base_url() . 'uploads/achivements/' . $value['achievement-image'] ?>" data-fancybox="gallery">
                                    <img id="myImg" class="box achive_img" loading="lazy" src="<?php echo base_url() . 'uploads/achivements/' . $value['achievement-image'] ?>" alt="image1">
                                </a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>

                </div>
                <div class="main_content mt-5 filter appreciation">
                    <div class="col-lg-12 gallary-subtitle-row"> 
                        <div style="text-align: left;" class="pb-3"> 
                            <h1 class="gallary-subtitle">Appreciations</h1> 
                        </div>

                    </div>
                    <div class="grid">
                        <?php 
                            foreach ($Appreciation as $value) {
                        ?>
                        <div class="grid-item">
                            <div class="card zoom_in">
                                <a href="<?php echo base_url() . 'uploads/achivements/' . $value['achievement-image'] ?>" data-fancybox="gallery">
                                    <img id="myImg" class="box achive_img" loading="lazy" src="<?php echo base_url() . 'uploads/achivements/' . $value['achievement-image'] ?>" alt="image1">
                                </a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
                <div class="main_content mt-5 filter trophies">
                    <div class="col-lg-12 gallary-subtitle-row">
                        <div style="text-align: left;" class="pb-3">
                            <h1 class="gallary-subtitle">Trophies</h1>
                        </div>
                    </div>
                    <div class="grid">
                        <?php 
                            foreach ($Trophies as $value) {
                        ?>
                        <div class="grid-item">
                            <div class="card zoom_in">
                                <a href="<?php echo base_url() . 'uploads/achivements/' . $value['achievement-image'] ?>" data-fancybox="gallery">
                                    <img id="myImg" class="box achive_img" loading="lazy" src="<?php echo base_url() . 'uploads/achivements/' . $value['achievement-image'] ?>" alt="image1">
                                </a>
                            </div>
                        </div>
                        <?php
                            }
                        ?>
                    </div>
                </div>
            <!-- </div> -->
    </section>

</div>



<?php $this->load->view('front/layout/front-footer2'); ?>
<script src="https://unpkg.com/masonry-layout@4/dist/masonry.pkgd.min.js"></script>

<script>
    $(document).ready(function() {

        $(".filter-button").click(function() {
            var value = $(this).attr('data-filter');

            if (value == "all") {
                //$('.filter').removeClass('hidden');
                $('.filter').show('1000');
                $(this).addClass("active");
            } else {
                $(".filter").not('.' + value).hide('3000');
                $('.filter').filter('.' + value).show('3000');

            }
            if ($(".filter-button").removeClass("active")) {
                $(this).removeClass("active");
            }
            $(this).addClass("active");
        });
    });

    window.addEventListener('load', () => {
     const gridItems = document.querySelectorAll('.grid-item');
  
        gridItems.forEach(item => {
            const img = item.querySelector('img');
            const imgHeight = getComputedStyle(img).height;
            item.style.height = imgHeight;
        });
    });
</script>
