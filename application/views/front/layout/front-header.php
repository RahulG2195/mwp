<!DOCTYPE html>
<html>
<?php 
$this->load->view('front/layout/front-style');
// adding class or hide logo for other page except home page 
$check_url = $this->uri->segment(1);
$bg = '';
$clr_logo = '';
$dark_logo = '';
if ($check_url !== 'home' && $check_url !== '' && $check_url !== null && $check_url !== 'Home/index') {
    $bg = 'white';
    $clr_logo = 'block';
    $dark_logo = 'none';
}

?>

<body>
    <!-- <div class="cursorPointer"></div> -->
    <header>
        <div class="container-fluid desktop-nav" id="Main_nav">
            <nav class="navbar navbar-expand-lg navbar-dark p-0 fixed-top <?php echo  $bg; ?>" style="z-index: 2;" id="navbar">
                <div class="header-logo">
                    <a href="<?php echo base_url() ?>" class="logo">
                        <img src="<?php echo  base_url() . 'uploads/' . $basicData[0]['comp_logo'] ?>" alt="Logo" id="default_logo" style="display: <?php echo $dark_logo ?>">
                        <img src="<?php echo  base_url() . 'uploads/' .  $basicData[0]['comp_logo'] ?>" alt="Logo" class="toggle_logo" id="toggle_logo" style="display: <?php echo $clr_logo ?>">
                    </a>
                    <div class="mobile_nav" id="mobile_nav">
                        <h4 id="scroll_comps" class="mob_name">Savani Heritage</h4>
                        <h4 id="scroll_comps" class="mob_name1">Conservation Pvt. Ltd</h4>
                    </div>
                </div>

                <!-- Nav Toggle Button -->
                <button class="navbar-toggler my-2" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Nav Links -->
                <div class="collapse navbar-collapse nav_space text-capitalize" id="main_nav">
                    <div class="left_navs" id="left_navs">
                        <h4 id="scroll_comps" class="comp_name"><?php echo isset($basicData[0]['comp_name']) ? $basicData[0]['comp_name'] : '' ?></h4>
                    </div>
                    <ul class="navbar-nav p-3 p-md-0">
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>">Home</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>">About</a>
                        </li>
                        <!-- Mega Menu -->
                        <li class="nav-item dropdown ktm-mega-menu">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url('all-projects') ?>">projects </a>
                            <!-- Mega Menu -->
                            <div class="dropdown-menu mega-menu p-3 animate__animated animate__pulse">
                                <div class="container">
                                    <div class="row my-4">
                                        <div class="col-md-6 mb-3 mb-lg-0">
                                            <div class="list-group list-group-flush">
                                                <a href="<?php echo base_url('all-projects') ?>" class="list-group-item list-group-item-action"> Our Projects</a>
                                                <a href="<?php echo base_url('all-projects') ?>#Institutional" class="list-group-item list-group-item-action"> institutional buildings</a>
                                                <a href="<?php echo base_url('all-projects') ?>#Administrative" class="list-group-item list-group-item-action"> administrative</a>
                                                <a href="<?php echo base_url('all-projects') ?>#Public" class="list-group-item list-group-item-action"> public buildings</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 mb-lg-0">
                                            <div class="list-group list-group-flush">
                                                <a href="<?php echo base_url('all-projects') ?>#palaces" class="list-group-item list-group-item-action">palaces</a>
                                                <a href="<?php echo base_url('all-projects') ?>#residential" class="list-group-item list-group-item-action">residential buildings</a>
                                                <a href="<?php echo base_url('all-projects') ?>#Miscellaneous" class="list-group-item list-group-item-action">Miscellaneous</a>
                                                <a href="<?php echo base_url('all-projects') ?>#Religious" class="list-group-item list-group-item-action">religious buildings</a>
                                                <!-- <a href="" class="list-group-item list-group-item-action">Others</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Tree Menu -->

                        <!-- Add this code in dropdown if we need toggle only on redirect link - data-bs-toggle="dropdown" -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url('achievements') ?>">Achievements</a>
                            <ul class="dropdown-menu nested-drop-downmenu animate__animated animate__pulse">
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('achievements') ?>">
                                        Our Achievements
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('news') ?>">
                                        News & Events
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('rnd') ?>">
                                        R&D
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Service') ?>">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url('blog') ?>">Blogs</a>
                            <ul class="dropdown-menu nested-drop-downmenu animate__animated animate__pulse">
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('blog') ?>">
                                        Our Blog
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('videos') ?>">
                                        Video
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" href="<?php echo base_url('contact-us') ?>">Contact</a>
                            <ul class="dropdown-menu nested-drop-downmenu animate__animated animate__pulse">
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('contact-us') ?>">Contact
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('business') ?>">Business
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('career') ?>">Career
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('query') ?>">Query
                                    </a>
                                </li>
                            </ul>
                        </li>
                    </ul>

                </div>
            </nav>
        </div>
        <div class="container-fluid mobile-nav" id="Main_nav">
            <nav class="navbar navbar-expand-lg navbar-dark p-0 fixed-top <?php echo  $bg; ?>" style="z-index: 2;" id="navbar">
                <div class="header-logo">
                    <a href="<?php echo base_url() ?>" class="logo">
                        <img src="<?php echo  base_url() . LOGO ?>toggle_logo.png" alt="Logo" id="default_logo" style="display: <?php echo $dark_logo ?>">
                        <img src="<?php echo  base_url() . LOGO ?>toggle_logo.png" alt="Logo" class="toggle_logo" id="toggle_logo" style="display: <?php echo $clr_logo ?>">
                    </a>
                    <div class="mobile_nav" id="mobile_nav">
                        <h4 id="scroll_comps" class="mob_name">Savani Heritage</h4>
                        <h4 id="scroll_comps" class="mob_name1">Conservation Pvt. Ltd</h4>
                    </div>
                </div>

                <!-- Nav Toggle Button -->
                <button class="navbar-toggler my-2" type="button" data-bs-toggle="collapse" data-bs-target="#main_nav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <!-- Nav Links -->
                <div class="collapse navbar-collapse nav_space text-capitalize" id="main_nav">
                    <div class="left_navs" id="left_navs">
                        <h4 id="scroll_comps" class="comp_name">Savani Heritage Conservation Pvt. Ltd</h4>
                    </div>

                    <ul class="navbar-nav p-3 p-md-0">
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>">Home</a> </li>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url() ?>">About</a>
                        </li>
                        <!-- Mega Menu -->
                        <li class="nav-item dropdown ktm-mega-menu">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="<?php echo base_url('all-projects') ?>">projects </a>
                            <!-- Mega Menu -->
                            <div class="dropdown-menu mega-menu p-3 animate__animated animate__pulse">
                                <div class="container">
                                    <div class="row my-4">
                                        <div class="col-md-6 mb-3 mb-lg-0">
                                            <div class="list-group list-group-flush">
                                                <a href="<?php echo base_url('all-projects') ?>" class="list-group-item list-group-item-action"> Our Projects</a>
                                                <a href="<?php echo base_url('all-projects') ?>#Institutional" class="list-group-item list-group-item-action"> institutional buildings</a>
                                                <a href="<?php echo base_url('all-projects') ?>#Administrative" class="list-group-item list-group-item-action"> administrative</a>
                                                <a href="<?php echo base_url('all-projects') ?>#Public" class="list-group-item list-group-item-action"> public buildings</a>
                                            </div>
                                        </div>
                                        <div class="col-md-6 mb-3 mb-lg-0">
                                            <div class="list-group list-group-flush">
                                                <a href="<?php echo base_url('all-projects') ?>#palaces" class="list-group-item list-group-item-action">palaces</a>
                                                <a href="<?php echo base_url('all-projects') ?>#residential" class="list-group-item list-group-item-action">residential buildings</a>
                                                <a href="<?php echo base_url('all-projects') ?>#Miscellaneous" class="list-group-item list-group-item-action">Miscellaneous</a>
                                                <a href="<?php echo base_url('all-projects') ?>#Religious" class="list-group-item list-group-item-action">religious buildings</a>
                                                <!-- <a href="" class="list-group-item list-group-item-action">Others</a> -->
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </li>
                        <!-- Tree Menu -->

                        <!-- Add this code in dropdown if we need toggle only on redirect link - data-bs-toggle="dropdown" -->
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="<?php echo base_url('achievements') ?>">Achievements</a>
                            <ul class="dropdown-menu nested-drop-downmenu animate__animated animate__pulse">
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('achievements') ?>">
                                        Our Achievements
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('news') ?>">
                                        News & Events
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('rnd') ?>">
                                        R&D
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item"> <a class="nav-link" href="<?php echo base_url('Service') ?>">Services</a>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="<?php echo base_url('blog') ?>">Blogs</a>
                            <ul class="dropdown-menu nested-drop-downmenu animate__animated animate__pulse">
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('blog') ?>">
                                        Our Blog
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('videos') ?>">
                                        Video
                                    </a>
                                </li>
                            </ul>
                        </li>
                        <li class="nav-item dropdown">
                            <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="<?php echo base_url('contact-us') ?>">Contact</a>
                            <ul class="dropdown-menu nested-drop-downmenu animate__animated animate__pulse">
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('contact-us') ?>">Contact
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('business') ?>">Business
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('career') ?>">Career
                                    </a>
                                </li>
                                <li>
                                    <a class="dropdown-item" href="<?php echo base_url('query') ?>">Query
                                    </a>
                                </li>
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
    <script>
        // header setting 
        /* window.addEventListener('load', function() {
            let url = '<?php echo $this->uri->segment(1); ?>';
            let navbar = document.getElementById('navbar');
            let toggle_logo = document.getElementById('toggle_logo');
            let default_logo = document.getElementById('default_logo');
            if (url !== 'home' && url !== '' && url !== null && url !== 'Home/index') {
                toggle_logo.style.display = 'block';
                default_logo.style.display = 'none';
                navbar.classList.add('white');
            }
        }); */
    </script>