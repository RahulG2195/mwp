<?php 
$this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>

<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/version_2/design-decor-plan.css'?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/WPmodel.css' ?>">


<section class="price_list common_section">

	<div class="container">
		
		<div class="row">
			<div class="col-12">
                <div class="heading text-center pricing-table-head">
                    <h1> Epic Theme Packages</h1>
                    <img src="<?php echo base_url().IMAGES ?>Divider.png" class="img-fluid" alt="">
                    <p>Make your wedding an unforgettable event with our selection of Theme and Decor Design Packages. You have the freedom to choose the package that aligns with your unique preferences and style. Let us help you create a captivating atmosphere that will leave a lasting impression on you and your guests. </p>
                    <strong>
                        <h6> Let's make your vision come alive!</h6>
                    </strong> 
                </div>
            </div>

		</div>
	</div>
</section>


<div class="demo">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12">
                <div class="pricingTable">
                    <div class="pricingTable-header">
                        <h3 class="title">Basic Bliss</h3>
                        <div class="price-value">
                            <span class="amount">INR 249</span>
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Events: 1</li>
                        <li>Venue Spaces: 1</li>
                        <li>Style: Detailed 3D Lifelike Visuals</li>
                        <li>Decoration Styles: 1</li>
                    </ul>
                    
                        <?php if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true)
                           { 

                            ?>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="designdecor" class="logindesign pricingTable-signup-btn"><div class="pricingTable-signup pricingTable-signup-col-1 " id="pricing-table-btn-col-1">
                                 Select
                            </div>
                            </a>
                         <?PHP }

                         else{  

                           ?>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DesigndecorModel" data-id="inr-249" class="design-decor-email pricingTable-signup-btn"> 
                                <div class="pricingTable-signup pricingTable-signup-col-1 " id="pricing-table-btn-col-1">
                                  Select
                                </div>
                            </a>

                       <?php  }?>
                   
                </div>
            </div>
             <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12">
                <div class="pricingTable" id="pricing-table-col-2">
                    <div class="pricingTable-header">
                        <h3 class="title">Dazzle Delight</h3>
                        <div class="price-value">
                            <span class="amount"> INR 999</span>
                            
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Events: 3</li>
                        <li>Venue Spaces: 3</li>
                        <li>Style: Detailed 3D Lifelike Visuals</li>
                        <li>Decoration Styles: 3</li>
                       
                    </ul>
                    

                        <?php if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true)
                           { 

                            ?>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="designdecor" class="logindesign pricingTable-signup-btn">
                                <div class="pricingTable-signup pricingTable-signup-col-1" id="pricing-table-btn-col-2">
                                    Select
                                </div>
                            </a>
                         <?PHP }

                         else{  

                           ?>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DesigndecorModel" data-id="inr-999" class="design-decor-email pricingTable-signup-btn">
                                <div class="pricingTable-signup pricingTable-signup-col-1" id="pricing-table-btn-col-2">
                                  Select
                                </div>
                            </a>

                       <?php  }?>
                       
                    
                </div>
            </div>
            <div class="col-md-12 col-lg-4 col-sm-12 col-xs-12">
                <div class="pricingTable" id="pricing-table-col-3">
                    <div class="pricingTable-header">
                        <h3 class="title">Premium Pop</h3>
                        <div class="price-value">
                            <span class="amount">INR 1999</span>
                            
                        </div>
                    </div>
                    <ul class="pricing-content">
                        <li>Events: 5</li>
                        <li>Venue Spaces: 5</li>
                        <li>Style: Detailed 3D Lifelike Visuals</li>
                        <li>Decoration Styles: 5</li>
                        <li>Premium Element Guide</li>
                    </ul>
                    

                        <?php if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true)
                           { 

                            ?>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="designdecor" class="logindesign pricingTable-signup-btn"> 
                                <div class="pricingTable-signup pricingTable-signup-col-1" id="pricing-table-btn-col-3">
                                   Select
                                </div>
                            </a>

                         <?PHP }

                         else{  

                           ?>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#DesigndecorModel" data-id="inr-1999" class="design-decor-email pricingTable-signup-btn">
                                <div class="pricingTable-signup pricingTable-signup-col-1" id="pricing-table-btn-col-3">
                                 Select
                                </div>
                            </a>
                            


                       <?php  }?>
                       
                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php 
$this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); 
?>