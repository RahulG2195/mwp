<?php  $this->load->view('front/layout/head'); ?>
<?php  $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/service-1.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/home.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/version_2/Wedding-Planning-Tool-V2.css?v=1">


<div id="weedingPlanningToolSection">

  <!-- HERO SECTION  -->
  <section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url() ?>assets/front/image/hero-banner/MWP-Services-Planning-Tools-page-Hero-banner-new.jpg' )">
    <!--  <div class="overlay1"></div> -->
    <div class="banner-section-heading">
      <h1>Event Organizer!</h1>
    </div>
  </section>

  <!-- INTRO SECTION  -->
  <div class="planning-tool-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6">
          <div class="planning-tool-content">
            <h5>Explore <span style="font-weight: 800">Seamless</span></h5>
            <h2>Wedding</h2>
            <h3>Planning Tools</h3>
          </div>
        </div>
        <div class="col-md-6">
          <div class="wedding-experience-content">
            <p>At My Wedding Palette, we believe in making your wedding planning journey as smooth as a waltz. Introducing our exclusive Wedding Planning Tools</p>
            <h5><span style="color: #FD152A;font-weight: 800">Your partners</span> in creating a flawless wedding experience.</h5>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- CALCULATOR SECTION  -->
  <div class="budget-calculator-section">
    <div class="container">
      <div class="row">
        <div class="col-md-6 wedding-budget-col-1">
          <div class="wedding-budget-content">
            <div class="wedding-budget-heading d-flex flex-nowrap align-items-center">
              <div class="icon">
                <img src="<?php echo base_url() ?>assets/front/image/service-1/calculator-icon.png" alt="image">
              </div>
              <div class="content">
                <h3>Wedding Budget</h3>
                <h4 class="cal-stroke">Calculator</h4>
              </div>
            </div>
            <div class="wedding-budget-para">
              <p>Navigate the complexities of budgeting effortlessly. Input your total budget and priorities, and watch our AI magic distribute funds across key categories. No more budgeting woes, just seamless financial harmony.</p>
            </div>
            <div class="wedding-budget-btn d-flex flex-column">
              <a href="javascript:void(0); " class="btn btn-lg" data-toggle="modal" data-target="#weddingtoolpopup">Create My Wedding Budget!</a>
            </div>
          </div>
        </div>
        <div class="col-md-6 wedding-budget-col-1">
          <div class="wedding-budget-content">
            <div class="wedding-budget-heading wedding-budget-heading-2 d-flex flex-nowrap align-items-center">
              <div class="icon">
                <img src="<?php echo base_url() ?>assets/front/image/service-1/calculator-icon.png" alt="image">
              </div>
              <div class="content">
                <h3>Wedding</h3>
                <h4 class="cal-stroke">Checklist</h4>
              </div>
            </div>
            <div class="wedding-budget-para">
              <p>From 12 months to the big day, our meticulously crafted checklist ensures no detail is overlooked. Divided into 8 periods with 6 actionable steps each, stay on top of every task-stress-free.</p>
            </div>
            <div class="wedding-budget-btn d-flex flex-column wedding-budget-btn-col-2">
              <?php if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true) { ?>
                <a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="weddingchecklist" class="loginchecklist">Plan My Wedding</a>
              <?PHP } else {  ?>
                <a href="<?php echo base_url() ?>Weddingchecklist" class="btn  btn-lg">Plan My Wedding</a>
              <?php  } ?>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <!-- TOOL SECTION  -->
  <div class="our-tools-section">
    <div class="container px-2 py-2">
      <div class="row">
        <div class="col-md-12">
          <div class="why-choose-heading">
            <h2 class="text-center">Why Choose <span style="color: #FD4251;font-weight: 900">Our Tools?</span></h2>
          </div>
        </div>
      </div>
      <div class="row our-tool-col">
        <div class="col-md-12">
          <div class="tool-image">
            <img class="Journey-h5-desk img-fluid" src="<?php echo  base_url() ?>assets/front/image/service-1/Why-Choose-Our-Tools-.png">
            <img class="Journey-h5-mob" src="<?php echo  base_url() ?>assets/front/image/service-1/tool-image2.png">
          </div>
        </div>
        <!-- <div class="our-tool-col"> -->
        <!--  <div class="col mx-1">
            <div class="our-tool-content" id="our-tool-1">
              <div class="digit-text"><h6>1</h6></div>
               <div class="div-tool">
                  <div class="our-tool-icon">
                      <img src="<?php echo  base_url() ?>assets/front/image/service-1/Simplicity-Icon.png">
                  </div>
                   <div class="our-tool-heading">
                     <h6>Simplicity</h6>
                   </div>
                   <div class="our-tool-para">
                     <p>User-friendly interface for hassle-free navigation.</p>
                   </div>
               </div>
            </div>
          </div>
          <div class="col mx-1">
             <div class="our-tool-content" id="our-tool-1">
              <div class="digit-text"><h6>2</h6></div>
               <div class="div-tool">
                  <div class="our-tool-icon">
                      <img src="<?php echo  base_url() ?>assets/front/image/service-1/Simplicity-Icon.png">
                  </div>
                   <div class="our-tool-heading">
                     <h6>Personalization</h6>
                   </div>
                   <div class="our-tool-para">
                     <p>Tailored to your preferences, style, & budget.</p>
                   </div>
               </div>
            </div>
          </div>
          <div class="col mx-1">
             <div class="our-tool-content" id="our-tool-1">
              <div class="digit-text"><h6>3</h6></div>
               <div class="div-tool">
                  <div class="our-tool-icon">
                      <img src="<?php echo  base_url() ?>assets/front/image/service-1/Simplicity-Icon.png">
                  </div>
                   <div class="our-tool-heading">
                     <h6>Efficiency</h6>
                   </div>
                   <div class="our-tool-para">
                     <p>Save time, stay organized, & reduce stress.</p>
                   </div>
               </div>
            </div>
          </div>
          <div class="col mx-1">
             <div class="our-tool-content" id="our-tool-1">
              <div class="digit-text"><h6>4</h6></div>
               <div class="div-tool">
                  <div class="our-tool-icon">
                      <img src="<?php echo  base_url() ?>assets/front/image/service-1/Simplicity-Icon.png">
                  </div>
                   <div class="our-tool-heading">
                     <h6>Accuracy</h6>
                   </div>
                   <div class="our-tool-para">
                     <p>Precise calculations & comprehensive checklists.</p>
                   </div>
               </div>
            </div>
          </div>
          <div class="col mx-1">
             <div class="our-tool-content" id="our-tool-1">
              <div class="digit-text"><h6>5</h6></div>
               <div class="div-tool">
                  <div class="our-tool-icon">
                      <img src="<?php echo  base_url() ?>assets/front/image/service-1/Simplicity-Icon.png">
                  </div>
                   <div class="our-tool-heading">
                     <h6>Convenience</h6>
                   </div>
                   <div class="our-tool-para">
                     <p>User-friendly interface for hassle-free navigation.</p>
                   </div>
               </div>
            </div>
          </div> -->
        <!--  </div> -->
      </div>
    </div>
  </div>

  <!-- WEDDING PLANNER SECTION  -->
  <div class="weddingPlanningSection">
    <div class="inner-body d-flex flex-wrap">
      <div class="left col-12 col-md-6">
        <div class="top d-flex">
          <div class="image">
            <img src="<?php echo base_url() ?>assets/front/image/about/MWP-ap-Vendor-Categories.png" alt="image">
          </div>
          <div class="content">
            <span>Begin your</span>
            <h3>Wedding Planning</h3>
            <h5>Journey with confidence.</h5>
          </div>
        </div>
        <div class="bottom">
          <p>Explore our tools, embrace the excitement, and let us guide you toward crafting the wedding of your dreams.</p>
        </div>
        <div class="button d-flex flex-wrap">
          <a href="javascript:void(0);" data-toggle="modal" data-target="#weddingtoolpopup">Create My Wedding Budget!</a>

          <?php if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true) { ?>
            <a class="wed-plan-btn start-planning-tool-tablet" href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="weddingchecklist">Start Planning Now!</a>
          <?PHP } else {  ?>
            <a class="wed-plan-btn start-planning-tool-tablet" href="<?php echo base_url() ?>Weddingchecklist">Start Planning Now!</a>
          <?php  } ?>
        </div>
      </div>
      <div class="right col-12 col-md-6 d-flex flex-wrap align-items-center justify-content-center">
        <img src="<?php echo base_url() ?>assets/front/image/service-1/wedding-planning-image.png" class="desktop" alt="image">
        <img src="<?php echo base_url() ?>assets/front/image/service-1/wedding-planning-image-2.png" class="mobile" alt="image">
      </div>
    </div>
  </div>

  <!-- VENDOR CATEGORY  -->
  <section class="vendor-categories scrollTrigger">
  <?php echo TrustedVendor($trusted_vendor['result'])?>
  </section>
  <!-- END OF VENDOR CATEGORY  -->

  <!-- CTA SECTION  -->
  <section class="social-share-section scrollTrigger" id="social-share-id">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="social-share">
            <!--<div class="social-share-small-heading"><h6 style="color: #131313;font-weight: 300">FOLLOW US ON</h6></div>-->
            <div class="social-share-main-heading">
              <h2 style="font-size: 35px;font-weight:600 ">We are here to help you !</h2>
            </div>
            <div class="social-share-sub-heading">
              <h5 style="font-weight: 400">Get in touch</h5>
            </div>
            <div class="social-share-btn"><a href="<?php echo base_url() ?>contactus">Explore</a></div>
            <ul class="social-share-icon">
              <li>
                <a href="https://www.facebook.com/myweddingpaletteofficial" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
              </li>

              <li>
                <a href="https://in.pinterest.com/myweddingpalette/" target="_blank"><i class="fa-brands fa-pinterest" aria-hidden="true"></i></a>
              </li>

              <li>
                <a href="https://www.instagram.com/myweddingpaletteofficial/" target="_blank"><i class="fa-brands fa-instagram"></i></a>
              </li>

              <li>
                <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mwp@myweddingpalette.com" target="_blank"><i class="fa-solid fa-envelope"></i></a>
              </li>
            </ul>
          </div>

        </div>
      </div>
    </div>
  </section>
  <div class="modal fade" id="weddingtoolpopup" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog popup_model_dialog budget-popup">
      <div class="modal-content">
        <button type="button" class="btn-close form_close_btn close_model" data-dismiss="modal" aria-hidden="true">x</button>
        <div class="step left_form budget-popup-form">
          <div class="container">
            <div class="row">
              <div class="col-md-6">
                <div class="heading">
                  <img src="<?php echo base_url() . IMAGES ?>small_logo.png" class="img-fluid small_logo pop-up-logo" alt="">
                  <h3> <br><span class="text_border">MY WEDDING PALETTE</span></h3>
                </div>
                <h2>Stay Tuned.. We are still working on it!</h2>
              </div>
              <div class="col-md-6">
                <img src="<?php echo base_url() . IMAGES ?>form_img.png" class="img-fluid" alt="">
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>




<?php  $this->load->view('front/layout/footer'); ?>
<?php  $this->load->view('front/layout/script'); ?>

