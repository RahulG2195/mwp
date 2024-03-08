<?php $this->load->view('front/layout/front-header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/before_after.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/cndk.beforeafter.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $(".beforeafterdefault").cndkbeforeafter();
        $(".beforeafterdrag").cndkbeforeafter({
            mode: "drag",
            beforeTextPosition: "top-left"
        });
        $(".beforeafterhidetext").cndkbeforeafter({
            showText: false
        });
        $(".beforeafterimageseperator").cndkbeforeafter({
            seperatorColor: "#ffffff",
            seperatorWidth: "10px",
        });
        $(".beforeafterautoslide").cndkbeforeafter({
            autoSliding: true
        });
        $(".beforeafterthemedark").cndkbeforeafter({
            mode: "drag",
            theme: "dark"
        });

    });
</script>
<section class="service_banner">
    <div class="overlay_banner"></div>
    <div class="container">
        <div class="row">
            <div class="prj_title common_banner_title text-center">
                <h5>Project Detail 1</h5>
                <img src="<?php echo base_url() . MAIN_IMG ?>heading_design.png" class="img-fluid img-responsive heading_line" alt="">
            </div>
        </div>
    </div>
</section>
<section class="breadcrump my-3">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <li class="breadcrumb-item"><a href="#">Our Projects</a></li>
                <li class="breadcrumb-item active" aria-current="page">Project Detail 1</li>
            </ol>
        </nav>
    </div>
</section>
<section class="prj_detail_content mt-5">
    <div class="container">
        <div class="row">
            <div class="col-11">
                <div class="prj_title">
                    <h4>Restoration of Heritage Structures</h4>
                </div>
            </div>
            <div class="col-1">
                <a href="#" class="float-end"><i class="fa fa-download proj_down_btn" aria-hidden="true"></i></a>
            </div>

            <div class="prj_data mt-1">
                <p>‘जीर्णोद्धारक’ – In Sanskrit means ‘Restoring the lost Glory’. History comes alive, when we walk into one of these Heritage structures – the sounds of warm trumpets, beating of drums, Sky high ceilings, Pieces of art, Grandiose of live of Kings and Queens, Voices of masses, Famous speeches and heart pounding sense of patriotism and glory. Every step into heritage takes us back in time and reminds us of the sense of architectural perfection, magic of artistry, weaving culture into the colourful tapestry of life and a sense of connection and bonding to help us define – ‘Who we are’ and be proud of our rich cultural & architectural heritage.</p>
            </div>
        </div>
    </div>
</section>
<section class="prj_content my-5">
    <div class="container">
        <div class="col-12">
            <div class="prj_video">
                <iframe width="560" height="315" src="https://www.youtube.com/embed/ICLycsmWK9k" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <div class="row">
            <div class="compare_prj mt-5">
                <div class="row">
                    <div class="col-sm-6 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_03.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_03.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_01.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_01.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_02.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_02.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_10.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_10.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_04.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_04.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_05.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_05.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_06.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_06.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_07.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_07.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_08.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_08.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_09.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_09.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_11.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_11.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_12.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_12.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_13.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_13.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_14.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_14.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_15.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_15.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/Before_16.webp"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . PROJECTS ?>AligarhAMU/After_16.webp"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('front/layout/front-footer2'); ?>
<script src="<?php echo base_url() ?>assets/front/js/cndk.beforeafter.js"></script>

