<section class="section welcome same_sec" data-aos="fade-up" data-aos-delay="100">
    <div class="container">
        <div class="row flex-column-reverse flex-md-row">
            <div class="col-lg-6 order-md-1 order-2">
                <div class="india_img responsive-hotspot-wrap" id="hotspotImg">
                    <img data-src="<?php echo base_url() . MAIN_IMG ?>india11.png" class="img-fluid lazy" id="product-img" usemap="#product-map" alt="">
                    <span class="blink_spot bs1 guj">
                        <div class="circle hotspot_cricle" data-popup="popup1" title="Gujarat" id="hotspot_cricle1"></div>
                    </span>
                    <span class="blink_spot bs2 up">
                        <div class="circle hotspot_cricle" data-popup="popup2" title="Utter Pradesh" id="hotspot_cricle2"></div>
                    </span>
                    <span class="blink_spot bs3 mah">
                        <div class="circle hotspot_cricle" data-popup="popup3" title="Maharashtra" id="hotspot_cricle3"></div>
                    </span>
                    <span class="blink_spot bs11 kar">
                        <div class="circle hotspot_cricle" data-popup="popup4" title="Karnataka" id="hotspot_cricle10"></div>
                    </span>
                    <span class="blink_spot bs12 ker">
                        <div class="circle hotspot_cricle" data-popup="popup5" title="Kerla" id="hotspot_cricle11"></div>
                    </span>
                    <span class="blink_spot bs13 tn">
                        <div class="circle hotspot_cricle" data-popup="popup6" title="Tamil Nadu" id="hotspot_cricle12"></div>
                    </span>
                    <span class="blink_spot bs14 ap">
                        <div class="circle hotspot_cricle" data-popup="popup7" title="Andhra Pradesh" id="hotspot_cricle13"></div>
                    </span>
                    <span class="blink_spot bs15 orr">
                        <div class="circle hotspot_cricle" data-popup="popup8" title="Orissa" id="hotspot_cricle14"></div>
                    </span>
                    <span class="blink_spot bs16 wb">
                        <div class="circle hotspot_cricle" data-popup="popup9" title="West Bengal" id="hotspot_cricle15"></div>
                    </span>
                    <span class="blink_spot bs18 ann">
                        <div class="circle hotspot_cricle" data-popup="popup10" title="andaman and nicobar islands" id="hotspot_cricle17"></div>
                    </span>
                    <!-- new  -->
                    <span class="blink_spot bs4 hp">
                        <div class="circle hotspot_cricle" data-popup="popup11" title="Himachal Pradesh" id="hotspot_cricle4"></div>
                    </span>
                    <span class="blink_spot bs5 har">
                        <div class="circle hotspot_cricle" data-popup="popup12" title="Haryana" id="hotspot_cricle5"></div>
                    </span>
                    <span class="blink_spot bs7 mp">
                        <div class="circle hotspot_cricle" data-popup="popup13" title="Madhya Pradesh" id="hotspot_cricle6"></div>
                    </span>
                    <span class="blink_spot bs8 del">
                        <div class="circle hotspot_cricle" data-popup="popup14" title="Delhi" id="hotspot_cricle7"></div>
                    </span>
                    <span class="blink_spot bs9 tel">
                        <div class="circle hotspot_cricle" data-popup="popup15" title="Telengana" id="hotspot_cricle8"></div>
                    </span>
                    <span class="blink_spot bs10 goa">
                        <div class="circle hotspot_cricle" data-popup="popup16" title="Goa" id="hotspot_cricle9"></div>
                    </span>
                    <span class="blink_spot bs17 miz">
                        <div class="circle hotspot_cricle" data-popup="popup17" title="Manipur" id="hotspot_cricle16"></div>
                    </span>
                    <!-- end new  -->

                    <div class="hot-spot spot12" id="default_hotspot">
                        <div class="tooltip default_popup">
                            <span class="close_map_data default_close" onclick="hide_default_popup()">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                                <?php 
                            if(isset($all_project) && !empty($all_project)){
                                foreach ($all_project as $value) {
                                ?>
                                <div class="item">
                                    <a href="<?php echo base_url("all-projects") ?>">
                                        <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                        <div class="caption">
                                            <div class="text-row">
                                                <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php 
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>

                    <div class="hot-spot spot12" id="hot-spot1">
                        <!-- <div class="circle hotspot_cricle" id="hotspot_cricle1"></div> -->
                        <div class="tooltip" id="popup3">
                            <span class="close_map_data" onclick="hidepopup('popup3')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                            if(isset($Mah_Project) && !empty($Mah_Project)){
                                foreach ($Mah_Project as $value) {
                                ?>
                                <div class="item">
                                    <a href="<?php echo base_url("all-projects") ?>">
                                        <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                        <div class="caption">
                                            <div class="text-row">
                                                <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php 
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot2">
                        <!-- <div class="circle hotspot_cricle" id="hotspot_cricle2"></div> -->
                        <div class="tooltip" id="popup1">
                            <span class="close_map_data" onclick="hidepopup('popup1')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                            if(isset($Guj_Project) && !empty($Guj_Project)){

                                foreach ($Guj_Project as $value) {
                                ?>
                                <div class="item">
                                    <a href="<?php echo base_url("all-projects") ?>">
                                        <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                        <div class="caption">
                                            <div class="text-row">
                                                <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php 
                                }
                            }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot3">
                        <!-- <div class="circle hotspot_cricle" id="hotspot_cricle3"></div> -->
                        <div class="tooltip" id="popup2">
                            <span class="close_map_data" onclick="hidepopup('popup2')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                                <?php 
                            if(isset($up_Project) && !empty($up_Project)){

                                foreach ($up_Project as $value) {
                                ?>
                                <div class="item">
                                    <a href="<?php echo base_url("all-projects") ?>">
                                        <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                        <div class="caption">
                                            <div class="text-row">
                                                <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php 
                                }
                            }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot5">
                        <div class="tooltip" id="popup5">
                            <span class="close_map_data" onclick="hidepopup('popup5')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                            if(isset($Kerala_Project) && !empty($Kerala_Project)){

                                foreach ($Kerala_Project as $value) {
                                ?>
                                <div class="item">
                                    <a href="<?php echo base_url("all-projects") ?>">
                                        <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                        <div class="caption">
                                            <div class="text-row">
                                                <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php 
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot9">
                        <div class="tooltip" id="popup9">
                            <span class="close_map_data" onclick="hidepopup('popup9')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                                <?php 
                            if(isset($wb_Project) && !empty($wb_Project)){

                                foreach ($wb_Project as $value) {
                                ?>
                                <div class="item">
                                    <a href="<?php echo base_url("all-projects") ?>">
                                        <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                        <div class="caption">
                                            <div class="text-row">
                                                <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php 
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot6">
                        <div class="tooltip" id="popup6">
                            <span class="close_map_data" onclick="hidepopup('popup6')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                            if(isset($tamil_Project) && !empty($tamil_Project)){

                                foreach ($tamil_Project as $value) {
                                ?>
                                <div class="item">
                                    <a href="<?php echo base_url("all-projects") ?>">
                                        <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                        <div class="caption">
                                            <div class="text-row">
                                                <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php 
                                }
                            }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot7">
                        <div class="tooltip" id="popup7">
                            <span class="close_map_data" onclick="hidepopup('popup7')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                            if(isset($andra_Project) && !empty($andra_Project)){

                                foreach ($andra_Project as $value) {
                                ?>
                                <div class="item">
                                    <a href="<?php echo base_url("all-projects") ?>">
                                        <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                        <div class="caption">
                                            <div class="text-row">
                                                <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php 
                                }
                            }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot10">
                        <div class="tooltip" id="popup10">
                            <span class="close_map_data" onclick="hidepopup('popup10')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                            if(isset($Andaman_Project) && !empty($Andaman_Project)){

                                foreach ($Andaman_Project as $value) {
                                ?>
                                <div class="item">
                                    <a href="<?php echo base_url("all-projects") ?>">
                                        <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                        <div class="caption">
                                            <div class="text-row">
                                                <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php 
                                }
                            }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot4">
                        <div class="tooltip" id="popup4">
                            <span class="close_map_data" onclick="hidepopup('popup4')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                            if(isset($Karnataka_Project) && !empty($Karnataka_Project)){
                                foreach ($Karnataka_Project as $value) {
                                ?>
                                <div class="item">
                                    <a href="<?php echo base_url("all-projects") ?>">
                                        <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                        <div class="caption">
                                            <div class="text-row">
                                                <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                            </div>
                                        </div>
                                    </a>
                                </div>
                                <?php 
                                }
                            }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot8">
                        <div class="tooltip" id="popup8">
                            <span class="close_map_data" onclick="hidepopup('popup8')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                                if(isset($odi_Project) && !empty($odi_Project)){
                                    foreach ($odi_Project as $value) {
                                    ?>
                                    <div class="item">
                                        <a href="<?php echo base_url("all-projects") ?>">
                                            <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                            <div class="caption">
                                                <div class="text-row">
                                                    <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                    <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php 
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot11">
                        <div class="tooltip" id="popup11">
                            <span class="close_map_data" onclick="hidepopup('popup11')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                                if(isset($Himachal_Project) && !empty($Himachal_Project)){
                                    foreach ($Himachal_Project as $value) {
                                    ?>
                                    <div class="item">
                                        <a href="<?php echo base_url("all-projects") ?>">
                                            <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                            <div class="caption">
                                                <div class="text-row">
                                                    <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                    <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php 
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot12">
                        <div class="tooltip" id="popup12">
                            <span class="close_map_data" onclick="hidepopup('popup12')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                                if(isset($Haryana_Project) && !empty($Haryana_Project)){
                                    foreach ($Haryana_Project as $value) {
                                    ?>
                                    <div class="item">
                                        <a href="<?php echo base_url("all-projects") ?>">
                                            <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                            <div class="caption">
                                                <div class="text-row">
                                                    <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                    <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php 
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot13">
                        <div class="tooltip" id="popup13">
                            <span class="close_map_data" onclick="hidepopup('popup13')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                                if(isset($Madhya_Pradesh_Project) && !empty($Madhya_Pradesh_Project)){
                                    foreach ($Madhya_Pradesh_Project as $value) {
                                    ?>
                                    <div class="item">
                                        <a href="<?php echo base_url("all-projects") ?>">
                                            <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                            <div class="caption">
                                                <div class="text-row">
                                                    <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                    <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php 
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot14">
                        <div class="tooltip" id="popup14">
                            <span class="close_map_data" onclick="hidepopup('popup14')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                                if(isset($Delhi_Project) && !empty($Delhi_Project)){
                                    foreach ($Delhi_Project as $value) {
                                    ?>
                                    <div class="item">
                                        <a href="<?php echo base_url("all-projects") ?>">
                                            <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                            <div class="caption">
                                                <div class="text-row">
                                                    <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                    <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php 
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot15">
                        <div class="tooltip" id="popup15">
                            <span class="close_map_data" onclick="hidepopup('popup15')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                                if(isset($Telangana_Project) && !empty($Telangana_Project)){
                                    foreach ($Telangana_Project as $value) {
                                    ?>
                                    <div class="item">
                                        <a href="<?php echo base_url("all-projects") ?>">
                                            <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                            <div class="caption">
                                                <div class="text-row">
                                                    <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                    <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php 
                                    }
                                }
                                ?>

                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot16">
                        <div class="tooltip" id="popup16">
                            <span class="close_map_data" onclick="hidepopup('popup16')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                                if(isset($Goa_Project) && !empty($Goa_Project)){
                                    foreach ($Goa_Project as $value) {
                                    ?>
                                    <div class="item">
                                        <a href="<?php echo base_url("all-projects") ?>">
                                            <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                            <div class="caption">
                                                <div class="text-row">
                                                    <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                    <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                    <div class="hot-spot spot12" id="hot-spot17">
                        <div class="tooltip" id="popup17">
                            <span class="close_map_data" onclick="hidepopup('popup17')">x</span>
                            <div class="img-row owl-carousel mini_carousel" id="mini_carousel">
                            <?php 
                                if(isset($Manipur_Project) && !empty($Manipur_Project)){
                                    foreach ($Manipur_Project as $value) {
                                    ?>
                                    <div class="item">
                                        <a href="<?php echo base_url("all-projects") ?>">
                                            <img data-src="<?php echo base_url() ?>uploads/project/<?php echo $value['thumbnail']?>" alt="<?php echo $value['prj_name']?>">
                                            <div class="caption">
                                                <div class="text-row">
                                                    <h4 class="video_title"><?php echo $value['prj_name']?></h4>
                                                    <h6><?php echo $value['city']?>, <?php echo $value['state']?></h6>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <?php 
                                    }
                                }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php 
            foreach ($about as $value) {
                $h1 = $value['about-heading-1'];
                $h2 = $value['about-heading-2'];
                $para = $value['about-para'];
            }
            
            ?>
            <div class="col-lg-6 order-md-2 order-1">
                <div class="welcome_main_containt">
                    <div class="welcome_title">
                        <h1><?php echo isset($h1) ? $h1 : ''?></h1>
                        <h1><?php echo isset($h2) ? $h2 : ''?></h1>
                    </div>
                    <div class="welcome_Content">
                        <p>
                        <?php echo isset($para) ? $para : ''?>
                        </p>
                    </div>
                    <a href="<?php echo base_url('about-us') ?>" class="shine_img">
                        <img data-src="<?php echo base_url() ?>assets/front/images/read_more.png" class="img-fluid lazy img-responsive read_more" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>