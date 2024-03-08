<!-- Footer -->
<footer class="text-center text-lg-start text-white">
    <!-- Section: Links  -->
    <section class="desktop_view" style="padding-top: 10px;">
        <div class="container text-center text-md-start mt-lg-5 mt-2">
            <!-- Grid row -->
            <div class="row mt-md-3 mt-0">
                <!-- Grid column -->
                <div class="col-md-8 col-lg-8 col-xl-8 mx-auto mb-4 d-flex footer_main_divs">
                    <div class="footer_logo">
                        <a href="<?php echo base_url() ?>" class="logo">
                            <img src="<?php echo  base_url() ?>assets/front/images/logo/footer_logo.png" alt="Logo">
                        </a>
                    </div>
                    <div class="footer_comp_name_div text-center">
                        <h4 class="text-uppercase fw-bold footer_comp_name"><?php echo $basicData[0]['comp_name']?></h4>
                        <div id="footer_social_icon d-flex mt-4" style="margin-top: 20px;">
                            <!-- <a href="" class="text-white sm_icon">
                                <img src="<?php echo base_url() ?>assets/front/images/FB.png" class="img-fluid"
                                    style="margin-right:5px;" alt="">
                            </a> -->
                            <?php 
                            if(!empty($basicData[0]['linkedin'])){
                                echo '<a href="'. $basicData[0]['linkedin'] .'" target="_blank" class="text-white sm_icon ">
                                <img src="' . base_url() . 'assets/front/images/LindedIn.png" class="img-fluid" style="margin-right:5px;" alt="">
                            </a>';
                            }
                            if(!empty($basicData[0]['youtube'])){
                                echo '<a href="'. $basicData[0]['youtube'] .'" target="_blank" class="text-white sm_icon ">
                                <img src="' . base_url() . 'assets/front/images/Youtube.png" class="img-fluid" style="margin-right:5px;" alt="">
                            </a>';
                            }
                            if(!empty($basicData[0]['twitter'])){
                                echo '<a href="'. $basicData[0]['twitter'] .'" target="_blank" class="text-white sm_icon ">
                                <img src="' . base_url() . 'assets/front/images/Twitter.png" class="img-fluid" style="margin-right:5px;" alt="">
                            </a>';
                            }
                            if(!empty($basicData[0]['instagram'])){
                                echo '<a href="'. $basicData[0]['instagram'] .'" target="_blank" class="text-white sm_icon ">
                                <img src="' . base_url() . 'assets/front/images/insta.png" class="img-fluid" style="margin-right:5px;" alt="">
                            </a>';
                            }
                            if(!empty($basicData[0]['email1'])){
                                echo '<a href="'. $basicData[0]['email1'] .'" target="_blank" class="text-white sm_icon ">
                                <img src="' . base_url() . 'assets/front/images/mail.png" class="img-fluid" style="margin-right:5px;" alt="">
                            </a>';
                            }
                            if(!empty($basicData[0]['facebook'])){
                                echo '<a href="'. $basicData[0]['facebook'] .'" target="_blank" class="text-white sm_icon ">
                                <img src="' . base_url() . 'assets/front/images/facebook.png" class="img-fluid" style="margin-right:5px;" alt="">
                            </a>';
                            }
                            ?>
                        </div>
                        <p style="color: #F4EDDB; margin-top: 20px; font-size: 12px; ">Email:
                           <?php echo isset($basicData[0]['email1']) ? $basicData[0]['email1'] : 'info@savaniheritage.com' ?>  | <span>Phone: 
                           <?php echo isset($basicData[0]['phone1']) ? $basicData[0]['phone1'] : '022 22615442' ?> 
                           <?php echo isset($basicData[0]['phone1']) ? '/ ' . $basicData[0]['phone2'] : '' ?>
                        </span>
                        </p>

                    </div>
                    <!-- </p> -->
                </div>
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <p>
                        <a href="<?php echo base_url('about-us') ?>" class="" style="color: #F4EDDB;">About us</a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('all-projects') ?>" style="color: #F4EDDB;">Projects</a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('achievements') ?>" style="color: #F4EDDB;">Achievements</a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('Service') ?>" style="color: #F4EDDB;">Services</a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('blog') ?>" style="color: #F4EDDB;">Blog</a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('videos') ?>" style="color: #F4EDDB;">Video</a>
                    </p>
                    <!-- <p>
                        <a href="#!" style="color: #F4EDDB;">Contact us</a>
                    </p> -->
                </div>
                <!-- Grid column -->
                <!-- Grid column -->
                <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mb-4">
                    <!-- Links -->
                    <!-- <p>
                        <a href="#!" style="color: #F4EDDB;">Project</a>
                    </p> -->
                    <p>
                        <a href="<?php echo base_url('career') ?>" style="color: #F4EDDB;">Career</a>
                    </p>
                    <p>
                        <a href="<?php echo base_url('news') ?>" style="color: #F4EDDB;">New & Events</a>
                    </p>
                    <p>
                        <a href="#!" style="color: #F4EDDB;">Privacy Policy</a>
                    </p>
                    <p>
                        <a href="#!" style="color: #F4EDDB;">Terms and Conditions</a>
                    </p>
                </div>
                <!-- Grid column -->
            </div>
            <!-- Grid row -->
        </div>
    </section>

    <section class="mobile_view" style="padding-top: 10px;">
        <div class="container-fluid">
            <div class="row">
                <div class="col-3">
                    <div class="footer_logo">
                        <a href="<?php echo base_url() ?>" class="logo">
                            <img src="<?php echo  base_url() ?>assets/front/images/logo/footer_logo.png" alt="Logo">
                        </a>
                    </div>
                </div>
                <div class="col-9 comp_footer_name_div">
                    <h4 class="text-uppercase fw-bold footer_comp_name">SAVANI HERITAGE CONSERVATION PVT.LTD.</h4>
                </div>
                <div class="col-12 mt-4 footer_links">

                    <a href="<?php echo base_url('about-us') ?>" class="" style="color: #F4EDDB;">About us |</a>


                    <a href="<?php echo base_url('all-projects') ?>" style="color: #F4EDDB;">Projects |</a>


                    <a href="<?php echo base_url('achievements') ?>" style="color: #F4EDDB;">Achievements |</a>


                    <a href="<?php echo base_url('Service') ?>" style="color: #F4EDDB;">Services |</a>


                    <a href="<?php echo base_url('blog') ?>" style="color: #F4EDDB;">Blog |</a>


                    <a href="<?php echo base_url('videos') ?>" style="color: #F4EDDB;">Video |</a>


                    <a href="<?php echo base_url('career') ?>" style="color: #F4EDDB;">Career |</a>


                    <a href="<?php echo base_url('news') ?>" style="color: #F4EDDB;">New & Events </a>

                </div>
                <div class="col-12 mt-4">
                    <a href="https://www.linkedin.com/company/savani-heritage-conservation-pvtltd" target="_blank" class="text-white sm_icon ">
                        <img src="<?php echo base_url() ?>assets/front/images/LindedIn.png" class="img-fluid" style="margin-right:5px;" alt="">
                    </a>
                    <a href="https://www.youtube.com/@savaniheritage1995" target="_blank" class="text-white sm_icon ">
                        <img src="<?php echo base_url() ?>assets/front/images/Youtube.png" class="img-fluid" style="margin-right:5px;" alt="">
                    </a>
                    <a href="" class="text-white sm_icon ">
                        <img src="<?php echo base_url() ?>assets/front/images/Twitter.png" class="img-fluid" style="margin-right:5px;" alt="">
                    </a>
                    <!-- <a href="" class="text-white sm_icon ">
                                <img src="<?php echo base_url() ?>assets/front/images/Cloud.png" class="img-fluid"
                                    style="margin-right:5px;" alt="">
                            </a> -->
                    <a href="https://www.instagram.com/savaniheritage/" target="_blank" class="text-white sm_icon ">
                        <img src="<?php echo base_url() ?>assets/front/images/insta.png" class="img-fluid" style="margin-right:5px;" alt="">
                    </a>
                    <a href="<?php echo base_url('contact_us') ?>" class="text-white sm_icon ">
                        <img src="<?php echo base_url() ?>assets/front/images/mail.png" class="img-fluid" style="margin-right:5px;" alt="">
                    </a>
                </div>
                <div class="col-12 mt-3">
                    <p style="color: #F4EDDB; margin-top: 20px; font-size: 15px; ">Email:
                        info@savaniheritage.com
                        <br><span>Phone: 022 22615442 / 022 22615445</span>
                    </p>
                </div>
                <div class="col-12 mt-3 footer_con_data">
                     <a href="#!" style="color: #F4EDDB;">Privacy Policy |</a>
                    <a href="#!" style="color: #F4EDDB;">Terms and Conditions |</a>
                    <a href="<?php echo base_url('contact-us') ?>" style="color: #F4EDDB;">Contact us</a>
                </div>
            </div>
        </div>
    </section>
    <div class="text-center bootom_footer p-3" style="background-color: rgba(0, 0, 0, 0.2);">
        © <span style="font-family: 'Arimo', sans-serif;"> <?php echo date('Y'); ?></span> Copyright:
        <a class="text-white" href="<?php echo base_url() ?>">Savani Heritage Conservation Pvt.Ltd.</a>
    </div>
    <!-- Copyright -->
</footer>
<!-- Footer -->
<?php $this->load->view('front/layout/front-script'); ?>