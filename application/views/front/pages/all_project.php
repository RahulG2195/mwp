<?php $this->load->view('front/layout/front-header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/video_blog.css">
<section class="service_banner" style="background-image: url('<?php echo base_url() . SUB_BANNER ?>Project-Hero-banner_1.png');">
    <div class="overlay_banner"></div>
    <div class="container">
        <div class="row">
            <div class="service_title common_banner_title text-center">
                <h5>All Projects</h5>
                <img data-src="<?php echo base_url() . MAIN_IMG ?>heading_design.png" class="img-fluid img-responsive heading_line" alt="">
            </div>
        </div>
    </div>
</section>

<section class="service_content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control" placeholder="Search Palace, wadas, Residental">
                </div>
            </div>
        </div>
        <div align="center" class="mt-4 text-capitalize filter_groups" data-aos="fade-up" data-aos-delay="100">
            <button class="btn-default filter-button filter_button m-1 text-capitalize active" data-filter="all">All</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="Institutional">institutional buildings</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="Administrative">administrative</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="Public">public buildings</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="palaces">palaces</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="residential">residential buildings</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="Miscellaneous">Miscellaneous</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="Religious">religious buildings</button>
        </div>
        <div class="main_content mt-5 filter Institutional" id="Institutional">
            <?php
            if(!empty($Institutional)){
            foreach ($Institutional as  $value) { ?>
                <div class="ser_cont">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <div class="service_img1 zoom_in">
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                    <img data-src="<?php echo base_url() . 'uploads/project/' . $value['thumbnail'] ?>" class="img-fluid box" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="service_content1">
                                <div class="service_content_title">
                                    <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                        <h4><?php echo $value['prj_name']?></h4>
                                    </a>
                                </div>
                                <div class="service_content_para">
                                    <p>
                                        <?php echo $value['short_desc']?>
                                    </p>
                                </div>
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                <img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                                <a href="<?php echo base_url() . 'uploads/project/' . $value['pdf'] ?>" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } }?>
        </div>
        <div class="main_content mt-5 filter Miscellaneous" id="Miscellaneous">
        <?php
        if(!empty($Miscellaneous)){
            foreach ($Miscellaneous as  $value) { ?>
                <div class="ser_cont">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <div class="service_img1 zoom_in">
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                    <img data-src="<?php echo base_url() . 'uploads/project/' . $value['thumbnail'] ?>" class="img-fluid box" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="service_content1">
                                <div class="service_content_title">
                                    <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                        <h4><?php echo $value['prj_name']?></h4>
                                    </a>
                                </div>
                                <div class="service_content_para">
                                    <p>
                                        <?php echo $value['short_desc']?>
                                    </p>
                                </div>
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                <img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                                <a href="<?php echo base_url() . 'uploads/project/' . $value['pdf'] ?>" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } } ?>
        </div>
        <div class="main_content mt-5 filter Public" id="Public">
        <?php
            if(!empty($Public)){
            foreach ($Public as  $value) { ?>
                <div class="ser_cont">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <div class="service_img1 zoom_in">
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                    <img data-src="<?php echo base_url() . 'uploads/project/' . $value['thumbnail'] ?>" class="img-fluid box" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="service_content1">
                                <div class="service_content_title">
                                    <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                        <h4><?php echo $value['prj_name']?></h4>
                                    </a>
                                </div>
                                <div class="service_content_para">
                                    <p>
                                        <?php echo $value['short_desc']?>
                                    </p>
                                </div>
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                <img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                                <a href="<?php echo base_url() . 'uploads/project/' . $value['pdf'] ?>" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } } ?>
        </div>
        <div class="main_content mt-5 filter Administrative" id="Administrative">
            <?php
            if(!empty($Administrative)){
                foreach ($Administrative as  $value) { ?>
                <div class="ser_cont">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <div class="service_img1 zoom_in">
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                    <img data-src="<?php echo base_url() . 'uploads/project/' . $value['thumbnail'] ?>" class="img-fluid box" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="service_content1">
                                <div class="service_content_title">
                                    <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                        <h4><?php echo $value['prj_name']?></h4>
                                    </a>
                                </div>
                                <div class="service_content_para">
                                    <p>
                                        <?php echo $value['short_desc']?>
                                    </p>
                                </div>
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                <img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                                <a href="<?php echo base_url() . 'uploads/project/' . $value['pdf'] ?>" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } } ?>
        </div>
        <div class="main_content mt-5 filter Religious" id="Religious">
            <?php
            if(!empty($Religious)){
                foreach ($Religious as  $value) { ?>
                <div class="ser_cont">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <div class="service_img1 zoom_in">
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                    <img data-src="<?php echo base_url() . 'uploads/project/' . $value['thumbnail'] ?>" class="img-fluid box" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="service_content1">
                                <div class="service_content_title">
                                    <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                        <h4><?php echo $value['prj_name']?></h4>
                                    </a>
                                </div>
                                <div class="service_content_para">
                                    <p>
                                        <?php echo $value['short_desc']?>
                                    </p>
                                </div>
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                <img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                                <a href="<?php echo base_url() . 'uploads/project/' . $value['pdf'] ?>" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } } ?>
        </div>
        <div class="main_content mt-5 filter palaces" id="palaces">
            <?php
            if(!empty($Palaces)){
                foreach ($Palaces as  $value) { ?>
                <div class="ser_cont">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <div class="service_img1 zoom_in">
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                    <img data-src="<?php echo base_url() . 'uploads/project/' . $value['thumbnail'] ?>" class="img-fluid box" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="service_content1">
                                <div class="service_content_title">
                                    <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                        <h4><?php echo $value['prj_name']?></h4>
                                    </a>
                                </div>
                                <div class="service_content_para">
                                    <p>
                                        <?php echo $value['short_desc']?>
                                    </p>
                                </div>
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                <img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                                <a href="<?php echo base_url() . 'uploads/project/' . $value['pdf'] ?>" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } } ?>
        </div>
        <div class="main_content mt-5 filter residential" id="residential">
            <?php
            if(!empty($Residential)){
                foreach ($Residential as  $value) { ?>
                <div class="ser_cont">
                    <div class="row">
                        <div class="col-md-6 mt-5">
                            <div class="service_img1 zoom_in">
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                    <img data-src="<?php echo base_url() . 'uploads/project/' . $value['thumbnail'] ?>" class="img-fluid box" alt="">
                                </a>
                            </div>
                        </div>
                        <div class="col-md-6 mt-5">
                            <div class="service_content1">
                                <div class="service_content_title">
                                    <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                        <h4><?php echo $value['prj_name']?></h4>
                                    </a>
                                </div>
                                <div class="service_content_para">
                                    <p>
                                        <?php echo $value['short_desc']?>
                                    </p>
                                </div>
                                <a href="<?php echo base_url() . 'Project/Projects_Detail/' . $value['seo_url'] ?>">
                                <img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                                <a href="<?php echo base_url() . 'uploads/project/' . $value['pdf'] ?>" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                            </div>
                        </div>
                    </div>
                </div>
            <?php } } ?>
        </div>
    </div>
</section>
<?php $this->load->view('front/layout/front-footer2'); ?>

<script>
    $(document).ready(function() {
        function setActiveButton() {
            var hash = window.location.hash;
            console.log("Hash:", hash); // Check if hash is detected
            if (hash) {
                $('.filter').hide();
                $(hash).show('1000');
                $(".filter-button").removeClass("active");
                $(`[data-filter="${hash.substr(1)}"]`).addClass("active");
            } else {
                $('.filter').show();
            }
        }

        setActiveButton();

        $(".filter-button").click(function() {
            var value = $(this).attr('data-filter');
            window.location.hash = value;

            if (value == "all") {
                $('.filter').show('1000');
            } else {
                $('.filter').hide('3000');
                $('.' + value).show('3000');
            }

            $(".filter-button").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>