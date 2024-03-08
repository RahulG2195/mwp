<!DOCTYPE html>
<html>

<head>
    <title>Home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/new_menu.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/mdb.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/footer.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/responsive.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/cndk.beforeafter.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/swiperjs.css">
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/9.3.2/swiper-bundle.min.css"
        integrity="sha512-Y1c7KsgMNtf7pIhrj/Ul2LhutImFYr+TsCmjB8mGAk+cgG1Vm8U1g7tvfmRr6yD5nds03Qgc6Mcb86MBKu1Llg=="
        crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CUSTOME CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/fullpage/src/css/fullpage.css" />
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fullPage.js/4.0.20/fullpage.min.css" integrity="sha512-otONSJGv1l0LjJXcgyqi2MeKXtnthkiXAleeQjFJOKYcVD5u+mOuPb7xCnlsb74Ld+N0ONbP7KYRmW2/OWrvaA==" crossorigin="anonymous" referrerpolicy="no-referrer" /> -->

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
</head>

<body>
    <!-- <div class="cursorPointer"></div> -->
    <header>
        <!-- Menu -->
        <!-- <div class="bg-primary">  -->


        <div class="container-fluid" id="Main_nav"></div>
        <nav class="navbar navbar-expand-lg navbar-dark p-0 fixed-top" style="z-index: 2;" id="navbar">
            <div class="header-logo">
                <a href="<?php echo base_url() ?>home" class="logo">
                    <img src="<?php echo  base_url() ?>assets/front/images/logo/logo.png" alt="Logo" style="width:60px;"
                        height="100px;" id="default_logo">
                    <img src="<?php echo  base_url() ?>assets/front/images/logo/toggle_logo.png" alt="Logo"
                        style="width:60px;" height="100px;" class="toggle_logo" id="toggle_logo">
                </a>
            </div>

            <!-- Nav Toggle Button -->
            <button class="navbar-toggler my-2" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav"
                aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <!-- Nav Links -->
            <div class="collapse navbar-collapse nav_space" id="main_nav">
                <div class="left_navs" id="left_navs">
                    <h4 id="scroll_comps" class="comp_name">Savani Heritage Conservation Pvt. Ltd</h4>
                </div>
                <ul class="navbar-nav p-3 p-md-0">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('about-us'); ?>"
                            data-bs-toggle="dropdown">About</a>
                        <!-- Dropdown -->
                        <ul class="dropdown-menu nested-drop-downmenu animate__animated animate__pulse">
                            <li><a class="dropdown-item" href="<?php echo base_url('our-team'); ?>">Team </a></li>
                        </ul>
                    </li>
                    <!-- Mega Menu -->
                    <li class="nav-item dropdown ktm-mega-menu">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('Projects') ?>"
                            data-bs-toggle="dropdown">projects </a>
                        <!-- Mega Menu -->
                        <div class="dropdown-menu mega-menu p-3 animate__animated animate__pulse">
                            <div class="container">
                                <div class="row my-4">
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush">
                                            <a href="<?php echo base_url('Project/Theme1') ?>"
                                                class="list-group-item list-group-item-action">Theme1</a>
                                            <a href="<?php echo base_url('Project/Theme2') ?>"
                                                class="list-group-item list-group-item-action">Theme2</a>
                                            <a href="<?php echo base_url('Project/Theme3') ?>"
                                                class="list-group-item list-group-item-action">Theme3</a>
                                            <a href="" class="list-group-item list-group-item-action">Cras justo
                                                odio</a>
                                            <a href="" class="list-group-item list-group-item-action">Adipisicing
                                                elit</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3 mb-lg-0">
                                        <div class="list-group list-group-flush">
                                            <a href="" class="list-group-item list-group-item-action">Explicabo</a>
                                            <a href="" class="list-group-item list-group-item-action">Perspiciatis
                                                quo</a>
                                            <a href="" class="list-group-item list-group-item-action">Cras justo
                                                odio</a>
                                            <a href="" class="list-group-item list-group-item-action">Laudantium</a>
                                            <a href="" class="list-group-item list-group-item-action">Provident</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3 mb-3 mb-md-0">
                                        <div class="list-group list-group-flush">
                                            <a href="" class="list-group-item list-group-item-action">Iste
                                                quaerato</a>
                                            <a href="" class="list-group-item list-group-item-action">Cras justo
                                                odio</a>
                                            <a href="" class="list-group-item list-group-item-action">Est iure</a>
                                            <a href="" class="list-group-item list-group-item-action">Praesentium</a>
                                            <a href="" class="list-group-item list-group-item-action">Laboriosam</a>
                                        </div>
                                    </div>
                                    <div class="col-md-6 col-lg-3">
                                        <div class="list-group list-group-flush">
                                            <a href="" class="list-group-item list-group-item-action">Cras justo
                                                odio</a>
                                            <a href="" class="list-group-item list-group-item-action">Saepe</a>
                                            <a href="" class="list-group-item list-group-item-action">Vel alias</a>
                                            <a href="" class="list-group-item list-group-item-action">Sunt
                                                doloribus</a>
                                            <a href="" class="list-group-item list-group-item-action">Cum
                                                dolores</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    <!-- Tree Menu -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="<?php echo base_url('achievements'); ?>"
                            data-bs-toggle="dropdown">Achievements</a>
                        <!-- Dropdown -->
                        <ul
                            class="dropdown-menu nested-drop-downmenu achievement-submenu animate__animated animate__pulse">
                            <li><a class="dropdown-item" href="<?php echo base_url('certificates'); ?>">Certificates
                                </a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('awards'); ?>">Awards </a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('appreciation'); ?>">Appreciation
                                </a></li>
                            <li><a class="dropdown-item" href="<?php echo base_url('trophies'); ?>">Trophies</a>
                            </li>
                        </ul>
                    </li>
                    <!--  <li class="nav-item dropdown">
	                  <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">  Achievements  </a>
	                  <ul class="dropdown-menu">
	                     <li><a class="dropdown-item" href="#"> Dropdown item 1 </a></li>
	                     <li>
	                        <a class="dropdown-item" href="#"> Dropdown item 2 <strong class="float-end">»</strong>  </a>
	                         Drop Down -->
                    <!-- <ul class="submenu dropdown-menu">
	                           <li><a class="dropdown-item" href="#">Submenu item 1</a></li>
	                           <li>
	                              <a class="dropdown-item" href="#">Submenu item 3 <strong class="float-end">»</strong> </a> -->
                    <!-- Drop Down -->
                    <!-- <ul class="submenu dropdown-menu">
	                                 <li><a class="dropdown-item" href="#">Multi level 1</a></li>
	                                 <li><a class="dropdown-item" href="#">Multi level 2</a></li>
	                              </ul>
	                           </li>
	                           <li><a class="dropdown-item" href="#">Submenu item 4</a></li>
	                        </ul>
	                     </li>
	                  </ul>
	               </li> -->
                    <li class="nav-item"> <a class="nav-link active"
                            href="<?php echo base_url('Service') ?>">Services</a> </li>
                    <li class="nav-item"> <a class="nav-link active" href="<?php echo base_url('Blog') ?>">R & D</a>
                    </li>
                    <!-- <li class="nav-item"> <a class="nav-link active" href="<?php echo base_url('blog-detail') ?>">Video</a> </li>	 -->
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" data-bs-toggle="dropdown">Contact</a>
                        <!-- Dropdown -->
                        <ul class="dropdown-menu nested-drop-downmenu animate__animated animate__pulse">
                            <li><a class="dropdown-item" href="<?php echo base_url('our-team'); ?>">Team </a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </nav>
        </div>
        <!--</div>-->

        <!-- menu end -->

        <!-- slider -->
        <!-- Carousel wrapper -->

        <!-- Carousel wrapper -->
        <!-- slider end -->
        <!-- Ends -->
    </header>