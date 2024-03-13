<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<!-- <link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/home.css' ?>"> -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/service.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">



<div id="weedingPlannerPage">

    <!-- HERO SECTION  -->
    <div class="hero-section d-flex flex-nowrap justify-content-center align-items-center" style="background-image: url('<?php echo base_url() ?>assets/front/image/hero-banner/Service/MWP-Complete-Wedding-Planning-Services-Page-banner.jpg' )">
        <h1 class="text-uppercase">Book Us !</h1>
    </div>

    <!-- INTRODUCTION SECTION  -->
    <div class="intoduction">
        <div class="inner-content d-flex flex-column justify-content-center align-items-center">
            <div class="top d-flex flex-column justify-content-center align-items-center">
                <h2 class="text-center mb-2">Complete <span class="active">Wedding Planning</span> Services</h2>
                <h3 class="text-center">Craft Your <span class="active">Dream Wedding</span> with Ease</h3>
                <img src="<?php echo base_url() . SERVICE ?>Group1438.png" alt="image">
                <p class="mt-2">Welcome to <span class="active">My Wedding Palette</span>, your gateway to crafting the wedding of your dreams effortlessly. Our Complete Wedding Planning service is designed to transform your vision into a seamless and unforgettable reality. Let us guide you through every step, from the initial concept to the joyous send-off, ensuring a stress-free and truly memorable experience.</p>
                <div class="try-now-cta">
                <a href="<?php echo base_url() ?>service/wedding_planning_service_plan">Get Started</a>
                </div>
            </div>

            <div class="bottom mt-5">
                <div class="header">
                    <h2 class="text-center">How It Works: <span class="active">Our Proven Process</span></h2>
                </div>
                <div class="inner-content d-flex flex-column justify-content-center align-items-center">
                    <img src="<?php echo base_url() . SERVICE ?>timeline4.png" alt="timeline Image" class="desktop">
                    <img src="<?php echo base_url() . SERVICE ?>timeline-mobile.png" alt="timeline Image" class="mobile">
                </div>
            </div>
        </div>
    </div>

    <!-- PLANS SECTION  -->
    <div class="plans mt-5">
        <div class="inner-content">
            <div class="header d-flex flex-column justify-content-center align-items-center">
                <h2 class="text-center mb-2">Elevate Your Experience with <br> <span class="active">Our MWP Signature Plans</span></h2>
                <img src="<?php echo base_url() . SERVICE ?>Group1438.png" alt="line">
                <p class="mt-2 text-center">Discover the perfect fit for your needs with our thoughtfully curated package plans. Each plan offers a tailored approach to suit your desires and requirements.</p>
            </div>
            <div class="body">
                <div class="inner-body d-flex flex-wrap justify-content-center">
                    <div class="box col-12 col-md-6 col-xl-4">
                        <div class="inner-box d-flex flex-column align-items-center justify-content-between ">
                            <img src="<?php echo base_url() . SERVICE ?>Essential-Elegance.png" class="icon" alt="icon">
                            <h4 class="text-center">Essential Elegance</h4>
                            <p class="text-center">Dive into the world of stress-free planning with this comprehensive package.</p>
                            <a href="<?php echo base_url() ?>service/wedding_planning_service_plan">Explore</a>
                            <img src="<?php echo base_url() . SERVICE ?>bottom-stripe.png" class="bottom-bg" alt="image">
                        </div>
                    </div>
                    <div class="box col-12 col-md-6 col-xl-4">
                        <div class="inner-box d-flex flex-column align-items-center justify-content-between">
                            <img src="<?php echo base_url() . SERVICE ?>Enchanted-Affair.png" class="icon" alt="icon">
                            <h4 class="text-center">Enchanted Affair</h4>
                            <p class="text-center">Elevate your experience with our awesome mid-tier package.</p>
                            <a href="<?php echo base_url() ?>service/wedding_planning_service_plan">Explore</a>
                            <img src="<?php echo base_url() . SERVICE ?>bottom-stripe.png" class="bottom-bg" alt="image">
                        </div>
                    </div>
                    <div class="box col-12 col-md-6 col-xl-4">
                        <div class="inner-box d-flex flex-column align-items-center justify-content-between">
                            <img src="<?php echo base_url() . SERVICE ?>Luxurious-Bliss.png" class="icon" alt="icon">
                            <h4 class="text-center">Luxurious Bliss</h4>
                            <p class="text-center">Bask in the luxury of a full-service planning experience.</p>
                            <a href="<?php echo base_url() ?>service/wedding_planning_service_plan">Explore</a>
                            <img src="<?php echo base_url() . SERVICE ?>bottom-stripe.png" class="bottom-bg" alt="image">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- EXPLORE PLAN  -->
    <div class="explorePackagePlans mt-5">
        <div class="header d-flex flex-column align-items-center">
            <span>Your Dream</span>
            <img src="<?php echo base_url() . SERVICE ?>explore-plan-header.png" class="desktop" alt="header">
            <img src="<?php echo base_url() . SERVICE ?>explore-plan-header-mobile.png" class="mobile" alt="header">
        </div>
        <div class="body mt-4" style="background-image: url(<?php echo base_url() . SERVICE ?>/Group1484.png);">
            <div class="inner-body d-flex flex-wrap align-items-center">
                <div class="left col-12 col-md-4 col-md-4">
                    <img src="<?php echo base_url() . SERVICE ?>MWP_logo.png" alt="LOGO">
                </div>
                <div class="right d-flex flex-column col-12 col-md-8 col-md-8">
                    <h4>Ready to take the next step?</h4>
                    <p>Explore our package plans to uncover the perfect fit for your dream wedding. Click below to learn more about each package's unique offerings.</p>
                    <a class="mt-3" href="<?php echo base_url() ?>service/wedding_planning_service_plan">Explore Package plans </a>
                </div>
            </div>
        </div>
    </div>

    <!-- REACH OUT SECTION  -->
    <div class="reachOut">
        <div class="inner-content d-flex flex-column align-items-center">
            <div class="top d-flex flex-column align-items-center">
                <div class="blockSection d-flex flex-column align-items-center">
                    <p class="text-center">If You want to connect with us before moving forward</p>
                    <h2 class="active text-center">Reach out to us</h2>
                </div>
                <img src="<?php echo base_url() . SERVICE ?>reach-out-cartoon-center.png" alt="image" class="mobile-image">
                <h3 class="text-center">Lets turn your dream wedding into cherished reality</h3>
                <a class="mt-3" href="<?php echo base_url() ?>contactus">Contact Us!</a>
            </div>
            <div class="bottom flex-nowrap justify-content-between align-items-end w-100">
                <img src="<?php echo base_url() . SERVICE ?>reach-out-cartoon-left.png" class="left" alt="image">
                <img src="<?php echo base_url() . SERVICE ?>reach-out-cartoon-right.png" class="right" alt="image">
            </div>
        </div>
    </div>

    <!-- CTA SECTION  -->
    <div class="ctaSection">
        <div class="header">
            <div class="mobile flex-column align-items-center">
                <h2 class="text-center">Welcome to</h2>
                <h3 class="text-center">A world of limitless possibilities and unforgettable memories.</h3>
            </div>
        </div>

        <div class="body">
            <div class="inner-body d-flex flex-wrap align-items-center justify-content-between" style="background-image:url(<?php echo base_url() . SERVICE ?>Group1486.png);">
                <div class="left col-12 col-md-5 col-xl-4">
                    <img src="<?php echo base_url() . SERVICE ?>Group1144.png?v=3" alt="image">
                </div>
                <div class="right col-12 col-md-7 col-xl-8 d-flex flex-column align-items-center justify-content-center">
                    <p class="text-center">Welcome to a world of limitless possibilities and unforgettable memories.</p>
                    <h3 class="mt-2 text-center">Your dream wedding starts here, at <span>My Wedding Palette.</span></h3>
                    <img src="<?php echo base_url() . SERVICE ?>/Group1438.png" alt="" class="mobile">
                    <h2 class="mb-3 text-center">Crafting Dreams, Weaving Memories</h2>
                    <div class="socials d-flex flex-wrap">
                        <a href="https://www.facebook.com/myweddingpaletteofficial" target="_blank">
                            <img src="<?php echo base_url() . SERVICE ?>fb.png" alt="facebook">
                        </a>

                        <a href="https://www.instagram.com/myweddingpaletteofficial/" target="_blank">
                            <img src="<?php echo base_url() . SERVICE ?>insta.png" alt="instagram">
                        </a>

                        <a href="https://in.pinterest.com/myweddingpalette/" target="_blank">
                            <img src="<?php echo base_url() . SERVICE ?>pinterest-new.png" alt="pinterest">
                        </a>

                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mwp@myweddingpalette.com" target="_blank">
                            <img src="<?php echo base_url() . SERVICE ?>mail.png" alt="Email">
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?php $this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); ?>