<?php $this->load->view('front/layout/head'); ?>
<?php $this->load->view('front/layout/header'); ?>


<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">

<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/service-3.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/home.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/service-2.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/version_2/vendor-recommendation.css?v=10">

<style>
  #your_visions  .owl-dots {
  text-align: center;
  padding-top: 15px;
}
#your_visions .owl-dots button.owl-dot {
  width: 15px;
  height: 15px;
  border-radius: 50%;
  display: inline-block;
  background: #FD152A;
  margin: 0 3px;
}
#your_visions .owl-dots button.owl-dot.active {
  background-color: #973738;
}
#your_visions .owl-dots button.owl-dot:focus {
  outline: none;
}
</style>

<div id="vendorRecommendation">
	<!-- HERO SECTION -->
	<section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url() ?>assets/front/image/hero-banner/Service/MWP-Design-Your-Dream-Theme-page-hero-banner.jpg' )">
		<!--<div class="overlay1"></div>-->
		<div class="banner-section-heading">
			<h1 class="vendor-reccomendation-heading">Your Style, Our Vendors !</h1>
		</div>
	</section>

	<!-- INTRODUCTION  -->
	<section class="vendor-reccomdation-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="vendor-reccomdation-col-1">
						<div class="vendor-caption-1">
							<h6>Elevate Your Wedding Experience with</h6>
							<h2>Personalized</h2>
							<h4>Vendor Recommendations</h4>
						</div>
					</div>
				</div>
				<!-- <div class="vl"></div> -->
				<div class="col-md-6">
					<div class="vendor-reccomdation-col-2">
						<div class="vendor-caption-2">
							<p>Are you tired of navigating the maze of vendor choices for your dream wedding? We understand how overwhelming it can be. That's why we're here to simplify the process, giving you more time to focus on what truly matters</p>
							<h4>Creating Unforgettable <span style="font-weight: 800;">Memories.</span></h4>
						</div>

					</div>
				</div>
			</div>
		</div>
	</section>

	<!-- MISSION  -->
	<section class="vision-mision-section">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="vision-caption">
						<h2>Your Vision, <span style="color: #EF243C;font-weight: 700"> Our Mission</span></h2>
					</div>
				</div>
			</div>
			<div class="row ">
				<div class="owl-carousel" id="your_visions">
					<div class="col-12">
						<div class="vision-mision-content">
							<div class="vision-mision-img">
								<img src="<?php echo  base_url() ?>assets/front/image/service-3/power.png" data-aos="zoom-in">
							</div>
							<div class="vision-mision-heading">
								<!-- <h6>Get Started With Our Questionnaire</h6> -->
								<h6>Choose Your  <br> Perfect Plan</h6>
							</div>
							<div class="vision-mision-para">
								<p>Choose the right plan for your wedding needs, whether it's one category or all, to begin your personalized journey with My Wedding Palette.</p>
							</div>
							<div class='semi-circle'>
								<h6>01</h6>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="vision-mision-content">
							<div class="vision-mision-img">
								<img src="<?php echo  base_url() ?>assets/front/image/service-3/arrow.png" data-aos="zoom-in">
							</div>
							<div class="vision-mision-heading">
								<h6>Enhance Your<br> Experience</h6>
							</div>
							<div class="vision-mision-para">
								<p>Simplify your wedding planning with our extra services. From appointments to vendor availability to contract assistance, MWP ensures a stress-free vendor selection process.</p>
							</div>
							<div class='semi-circle'>
								<h6>02</h6>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="vision-mision-content">
							<div class="vision-mision-img">
								<img src="<?php echo  base_url() ?>assets/front/image/service-3/search.png" data-aos="zoom-in">
							</div>
							<div class="vision-mision-heading">
								<!-- <h6>MWP Category <br> Level Plans</h6> -->
								<h6>Tailor Your Wedding Palette</h6>

							</div>
							<div class="vision-mision-para">
								<!-- <p>Meticulously designed plans for a complete experience.Gain exclusive access to availability checks, appointment bookings, and contract assistance – we're your guiding hand.</p> -->
								<p>Select your categories, make a secure payment, and look out for our email guiding you to share your preferences. Your personalized wedding palette is just a click away!</p>
							</div>
							<div class='semi-circle'>
								<h6>03</h6>
							</div>
						</div>
					</div>

					<div class="col-12">
						<div class="vision-mision-content">
							<div class="vision-mision-img">
								<img src="<?php echo  base_url() ?>assets/front/image/service-3/hand.png" data-aos="zoom-in">
							</div>
							<div class="vision-mision-heading">
								<h6>Discover Your <br> Ideal Vendors</h6>
							</div>
							<div class="vision-mision-para">
								<p>Sit back as My Wedding Palette works its magic! In 24-48 hours, we handpick the perfect vendors for your special day, transforming your planning into a joyous, hassle-free experience. <!-- Your tailored vendor recommendations guide, filled with insights and choices, will be ready to explore. --></p>
							</div>
							<div class='semi-circle'>
								<h6>04</h6>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>



	<!-- PRICE TABLE START HERE  -->

	<!-- for mobile view  -->
	<div id="choosePerfectPlan">
		<div class="header">
			<h2 class="text-center" id="vendorplan">Choose Your <span>Perfect Plan</span></h2>
		</div>
		<div class="body">
			<div class="inner-body d-flex flex-wrap">
				<div class="content right col-12">
					<div class="inner-content d-flex flex-nowrap owl-carousel" id="mobilePriceTableCarousel">
						<div class="box">
							<div class="inner-box">
								<div class="top">
									<h5>MWP</h5>
									<h4>Solo Spark</h4>
									<h2>₹199</h2>
								</div>
								<div class="bottom">
									<ul>
										<li>No. of categories: 1</li>
										<li>No. of Vendor Recommendations: <br> 10 per category</li>
										<li>Mode of communication: <br> Via Whatsapp/Email</li>
									</ul>
								</div>
								<div class="footer">
								        

										
											<?php if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true) {
											?>
											
											       <div class="additionalCost">
            											<input type="checkbox" id="vehicle1" name="additional_charge" value="val199" class="additionalcharge">
            											<label for="vehicle1"> For Additional ₹199/- <i class="fa-solid fa-circle-info checkInfo"></i> </label>
            											<div class="hint">Vendor Availability checks,Appointment bookings and contract support</div>
            											
            											<div class="button select-btn-style" style="">
												      <a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="vendordecor" class="vendordecorlogin">Select</a>
                                                    </div>
            										</div>
            										
											<?php } else {
											?>
											    <form style="display:flex" action="<?php echo base_url()  ?>VendorRecommendationPayment" method="POST">
                									<input type="hidden" name="plan_price" value="199" class="planprice">
                									<input type="hidden" name="plan_name" value="solo_spark" class="planprice">
            										<div class="additionalCost">
            											<input type="checkbox" id="vehicle1" name="additional_charge" value="val199" class="additionalcharge">
            											<label for="vehicle1"> For Additional ₹199/- <i class="fa-solid fa-circle-info checkInfo"></i> </label>
            											<div class="hint">Vendor Availability checks,Appointment bookings and contract support</div>
            										</div>
												<button class="vendor_recommend" type="submit" name="vendorsubmit" style="width: 100%;display: flex;margin-top: 15px;color: #303030;background-color: white;border-radius: 50px;width: 100%;text-align:center !important;padding: 10px;border: none;"> Select</button>
											  	</form>
											<?php
											}
											?>
										
								
								</div>
							</div>
						</div>
						<div class="box">
							<div class="inner-box">
								<div class="top">
									<h5>MWP</h5>
									<h4>Trio Fusion</h4>
									<h2>₹499</h2>
								</div>
								<div class="bottom">
									<ul>
										<li>No. of categories: 3</li>
										<li>No. of Vendor Recommendations: <br> 10 per category</li>
										<li>Mode of communication: <br> Via Whatsapp/Email</li>
									</ul>
								</div>
								<div class="footer">
								

										
											<?php if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true) {
											?>
										    <div class="additionalCost">
        											<input type="checkbox" id="vehicle2" name="additional_charge" value="val499">
        											<label for="vehicle2"> For Additional ₹499/- <i class="fa-solid fa-circle-info checkInfo"></i></label>
        											<div class="hint">Vendor Availability checks,Appointment bookings and contract support</div>
        										</div>
											<div class="button select-btn-style" style=""> 
												<a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="vendordecor" class="vendordecorlogin">Select</a>
                                            </div>
											<?php } else {
											?>
											  
											  	<form style="display:flex" action="<?php echo base_url()  ?>VendorRecommendationPayment" method="POST">
            										<input type="hidden" name="plan_price" value="499" class="planprice">
            										<input type="hidden" name="plan_name" value="trio_fusion" class="planprice">
            										<div class="additionalCost">
            											<input type="checkbox" id="vehicle2" name="additional_charge" value="val499">
            											<label for="vehicle2"> For Additional ₹499/- <i class="fa-solid fa-circle-info checkInfo"></i></label>
            											<div class="hint">Vendor Availability checks,Appointment bookings and contract support</div>
            										</div>
											
											
												<button class="vendor_recommend" type="submit" name="vendorsubmit" style="width: 100%;display: flex;margin-top: 15px;color: #303030;background-color: white;border-radius: 50px;width: 100%;text-align:center !important;padding: 10px;border: none;"> Select</button>
												</form>
											<?php
											}
											?>
									
									
								</div>
							</div>
						</div>
						<div class="box">
							<div class="inner-box">
								<div class="top">
									<h5>MWP</h5>
									<h4>Quintessential</h4>
									<h2>₹799</h2>
								</div>
								<div class="bottom">
									<ul>
										<li>No. of categories: 5</li>
										<li>No. of Vendor Recommendations: <br> 10 per category</li>
										<li>Mode of communication: <br> Via Whatsapp/Email</li>
									</ul>
								</div>
								<div class="footer">
									

										
											<?php if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true) {
											?>
											   <div class="additionalCost">
            											<input type="checkbox" id="vehicle3" name="additional_charge" value="val799">
            											<label for="vehicle3"> For Additional ₹799/- <i class="fa-solid fa-circle-info checkInfo"></i></label>
            											<div class="hint">Vendor Availability checks,Appointment bookings and contract support</div>
            									</div>
            									<div class="button select-btn-style" style="">
												    <a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="vendordecor" class="vendordecorlogin">Select</a>
                                             	</div>
											<?php } else {
											?>
											    <form style="display:flex" action="<?php echo base_url()  ?>VendorRecommendationPayment" method="POST">
            										<input type="hidden" name="plan_price" value="799" class="planprice">
            										<input type="hidden" name="plan_name" value="quintessential" class="planprice">
            										<div class="additionalCost">
            											<input type="checkbox" id="vehicle3" name="additional_charge" value="val799">
            											<label for="vehicle3"> For Additional ₹799/- <i class="fa-solid fa-circle-info checkInfo"></i></label>
            											<div class="hint">Vendor Availability checks,Appointment bookings and contract support</div>
            										</div>
												<button class="vendor_recommend" type="submit" name="vendorsubmit" style="width: 100%;display: flex;margin-top: 15px;color: #303030;background-color: white;border-radius: 50px;width: 100%;text-align: center!important;padding: 10px;border: none;"> Select</button>
												</form>
											<?php
											}
											?>
									
									
								</div>
							</div>
						</div>
						<div class="box">
							<div class="inner-box">
								<div class="top">
									<h5>MWP</h5>
									<h4>Grand Symphony</h4>
									<h2>₹1199</h2>
								</div>
								<div class="bottom">
									<ul>
										<li>No. of categories: 8</li>
										<li>No. of Vendor Recommendations: <br> 10 per category</li>
										<li>Mode of communication: <br> Via Whatsapp/Email</li>
									</ul>
								</div>
								<div class="footer">
								

										
											<?php if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true) {
											?>
											   <div class="additionalCost">
            											<input type="checkbox" id="vehicle4" name="additional_charge" value="val1199">
            											<label for="vehicle4"> For Additional ₹1199/- <i class="fa-solid fa-circle-info checkInfo"></i></label><br>
            											<div class="hint">Vendor Availability checks,Appointment bookings and contract support</div>
            									</div>
            								<div class="button select-btn-style" style="">	
												<a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="vendordecor" class="vendordecorlogin">Select</a>
                                            </div>
											<?php } else {
											?>
											   	<form style="display:flex" action="<?php echo base_url()  ?>VendorRecommendationPayment" method="POST">
            										<input type="hidden" name="plan_price" value="1199" class="planprice">
            										<input type="hidden" name="plan_name" value="grand_symphony" class="planprice">
            										<div class="additionalCost">
            											<input type="checkbox" id="vehicle4" name="additional_charge" value="val1199">
            											<label for="vehicle4"> For Additional ₹1199/- <i class="fa-solid fa-circle-info checkInfo"></i></label><br>
            											<div class="hint">Vendor Availability checks,Appointment bookings and contract support</div>
            										</div>
												     <button class="vendor_recommend" type="submit" name="vendorsubmit" style="width: 100%;display: flex;margin-top: 15px;color: #303030;background-color: white;border-radius: 50px;width: 100%;text-align:center !important;padding: 10px;border: none;"> Select</button>
												</form>
											<?php
											}
											?>
										
								
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


<!-- desktop view  -->
	<section class="service-3-price-plan desktop-view-sider" id="targetDiv">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="service-3-plan-heading" id="vendorplan">
						<h2>Choose Your <span style="color:#EF243C;font-weight: 600">Perfect Plan</span></h2>
					</div>
				</div>
				<div class="vendor-pricing-feature">
				</div>

				<div class="col-md-3 pricing-feature-call">
					<div class="vendor-price-plan-content">
						<h3>Features</h3>

						<div class="vendor-price-plan-list">
							<ul class="price-detail-font">
								<li>No. of categories</li>
								<li>No. of Vendor Recommendations</li>
								<li>Mode of communication</li>
								<li style="margin-top: 20px">Vendor Availability cheks,Appointment bookings and contract support</li>
							</ul>
						</div>
					</div>
					<hr class="price-line">
				</div>

				<div class="col-md-9 d-inline-flex vendor-service-plan">
					<!--<div class="price-plan-section-col">-->

					<div class="service-3-content">
						<div class="service-3-heading-h5">
							<h5>MWP</h5>
						</div>
						<div class="service-3-heading-h4">
							<h4>Solo Spark</h4>
						</div>
						<div class="service-3-heading-h6 service-3-heading-h4-sub">
							<span class="currency-symbol">₹</span>
							<h6>199</h6><!--<span class="each-class">/Each</span>-->
						</div>
						<!-- <hr  class="price-line"> -->
						<div class="service-para-content para-clumn-2">
							<p>1 Category</p>
							<p>10 per category</p>
							<p>Via Whatsapp/Email</p>
						</div>
                        <hr style="border-top: 1.5px solid #fff;">
						<?php if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true) {


						?>
						    <div class="service-check-box" style="display:flex">
								<input type="checkbox" id="vehicle1" name="additional_charge" value="val199" class="additionalcharge">
								<label for="vehicle1" style="color: #fff;font-family: 'Montserrat';"> For Additional ₹199/-</label>	
						    </div>
							<div class="service-3-plan-btn">
								<a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="vendordecor" class="vendordecorlogin">Select</a>
							</div>

						<?php } else {

						?>
						   <form id="vendor_recommendpayment" action="<?php echo base_url() ;?>VendorRecommendationPayment" method="POST" >
						    <div class="service-check-box" style="display:flex">
									<input type="hidden" name="plan_price" value="199" class="planprice">
									<input type="hidden" name="plan_name" value="solo_spark" class="planprice">
									<input type="checkbox" id="vehicle1" name="additional_charge" value="val199" class="additionalcharge">
									<label for="vehicle1" style="color: #fff;font-family: 'Montserrat';"> For Additional ₹199/-</label>	
						    </div>
							<div class="service-3-plan-btn">
								<button class="vendor_recommend" type="submit" name="vendorsubmit"> Select</button>
							</div>
							</form>
						<?php  } ?>
					</div>


					<div class="service-3-content">
						<div class="service-3-heading-h5">
							<h5>MWP</h5>
						</div>
						<div class="service-3-heading-h4">
							<h4>Trio Fusion</h4>
						</div>
						<div class="service-3-heading-h6 service-3-heading-h4-sub">
							<span class="currency-symbol">₹</span>
							<h6>499</h6><!--<span class="each-class">/Each</span>-->
						</div>
						<!-- <hr  class="price-line"> -->
						<div class="service-para-content para-clumn-2">
							<p>3 Category</p>
							<p>10 per category</p>
							<p>Via Whatsapp/Email</p>
						</div>
						<hr style="border-top: 1.5px solid #fff;">	
						<?php if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true) {

						?>
						    <div class="service-check-box">
							      <input type="checkbox" id="vehicle1" name="additional_charge" value="val499">
							      <label for="vehicle1" style="color: #fff;font-family: 'Montserrat';"> For Additional ₹499/-</label>
						    </div>	
							<div class="service-3-plan-btn">
								<a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="vendordecor" class="vendordecorlogin">Select</a>
							</div>


						<?php } else {

						?>
						   <form  action="<?php echo base_url()  ?>VendorRecommendationPayment" method="POST" id="vendor_recommendpayment">
								<div class="service-check-box" style="display:flex">
								
									<input type="hidden" name="plan_price" value="499" class="planprice">
									<input type="hidden" name="plan_name" value="trio_fusion" class="planprice">
									<input type="checkbox" id="vehicle1" name="additional_charge" value="val499">
									<label for="vehicle1" style="color: #fff;font-family: 'Montserrat';"> For Additional ₹499/-</label>
							    </div>
								<div class="service-3-plan-btn">
									<button class="vendor_recommend" type="submit" name="vendorsubmit"> Select</button>
								</div>
							</form>

						<?php  } ?>
					</div>

					<div class="service-3-content">
						<div class="service-3-heading-h5">
							<h5>MWP</h5>
						</div>
						<div class="service-3-heading-h4">
							<h4>Quintessential</h4>
						</div>
						<div class="service-3-heading-h6 service-3-heading-h4-sub">
							<span class="currency-symbol">₹</span>
							<h6>799</h6><!--<span class="each-class">/Each</span>-->
						</div>
						<!-- <hr  class="price-line"> -->
						<div class="service-para-content para-clumn-2">
							<p>5 Category</p>
							<p>10 per category</p>
							<p>Via Whatsapp/Email</p>
						</div>
						<hr style="border-top: 1.5px solid #fff;">
						<?php if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true) {

						?>
						    <div class="service-check-box" style="display:flex">
						    	<input type="checkbox" id="vehicle1" name="additional_charge" value="val799">
								<label for="vehicle1" style="color: #fff;font-family: 'Montserrat';"> For Additional ₹799/-</label>

							</div>
							<div class="service-3-plan-btn">
								<a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="vendordecor" class="vendordecorlogin">Select</a>
							</div>


						<?php } else {

						?>
						    <form action="<?php echo base_url()  ?>VendorRecommendationPayment" method="POST" id="vendor_recommendpayment">
							<div class="service-check-box" style="display:flex">
							
								<input type="hidden" name="plan_price" value="799" class="planprice">
								<input type="hidden" name="plan_name" value="quintessential" class="planprice">
								<input type="checkbox" id="vehicle1" name="additional_charge" value="val799">
								<label for="vehicle1" style="color: #fff;font-family: 'Montserrat';"> For Additional ₹799/-</label><br>

						    </div>
							<div class="service-3-plan-btn">
								<button class="vendor_recommend" type="submit" name="vendorsubmit"> Select</button>
								

							</div>
							</form>
						<?php  } ?>
					</div>

					<div class="service-3-content">
						<div class="service-3-heading-h5">
							<h5>MWP</h5>
						</div>
						<div class="service-3-heading-h4">
							<h4>Grand Symphony</h4>
							<br>
						</div>
						<div class="service-3-heading-h6">
							<span class="currency-symbol">₹</span>
							<h6>1199</h6><!--<span class="each-class">/Each</span>-->
						</div>
						<!-- <hr  class="price-line"> -->
						<div class="service-para-content para-clumn-2">
							<p>8 Category</p>
							<p>10 per category</p>
							<p>Via Whatsapp/Email</p>
						</div>
						<hr style="border-top: 1.5px solid #fff;">
						<?php if (!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true) {

						?>
							<div class="service-check-box" style="display: inline-flex;">
								<input type="checkbox" id="vehicle1" name="additional_charge" value="val1199">
								<label for="vehicle1" style="color: #fff;font-family: 'Montserrat';"> For Additional ₹1199/-</label><br>
							</div>
							<div class="service-3-plan-btn">
								<a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" data-id="vendordecor" class="vendordecorlogin">Select</a>
							</div>

						<?php } else {

						?>
						    <form action="<?php echo base_url()  ?>VendorRecommendationPayment" method="POST" id="vendor_recommendpayment">
							<div class="service-check-box" style="display:flex">
								<input type="hidden" name="plan_price" value="1199" class="planprice">
								<input type="hidden" name="plan_name" value="grand_symphony" class="planprice"> 
								<input type="checkbox" id="vehicle1" name="additional_charge" value="val1199">
								<label for="vehicle1" style="color: #fff;font-family: 'Montserrat';"> For Additional ₹1199/-</label><br>
						    </div>
							<div class="service-3-plan-btn">
								<button class="vendor_recommend" type="submit" name="vendorsubmit"> Select</button>
							

							</div>
							</form>
						<?php  } ?>
					</div>
					<!--</div>-->
				</div>

			</div>
		</div>
	</section>



	<!-- END OF PRICE TABLE  -->


	<!-- EXPLORE PLAN  -->
	<div class="explorePackagePlans mt-5">

		<div class="body mt-4" style="background-image: url(<?php echo base_url() . SERVICE ?>/Group1484.png);">
			<div class="inner-body d-flex flex-wrap align-items-center">
				<div class="left col-12 col-md-4 col-md-4">
					<img src="<?php echo base_url() . SERVICE ?>MWP_logo.png" alt="LOGO">
				</div>
				<div class="right d-flex flex-column col-12 col-md-8 col-md-8">
					<span class="mb-2">Embrace personalized recommendations that align with your style and preferences.</span>
					<p class="m-0">Your Wedding deserves nothing but the best.</p>
					<h4>Ready to find perfect vendor for you?</h4>
					<a class="mt-3" href="#vendorplan" id="scrollButton">Start Your Journey Today!</a>
				</div>
			</div>
		</div>
	</div>

	<!-- SUCCESS STORIES START HERE  -->
	<div class="successStorySection">
		<div class="innerContent">
			<div class="header">
				<h3>Success Stories</h3>
			</div>
			<div class="body">
				<div class="inner-body">
					<div class="review owl-carousel" id="reviewSlider">
						<div class="box col-12">
							<div class="inner-box d-flex flex-wrap">
								<div class="left col-12 col-md-6 col-xl-4">
									<img src="<?php echo base_url() ?>assets/front/image/testimonial/Success-Stories-2.jpg" alt="image">
								</div>
								<div class="right d-flex flex-column col-12 col-md-6 col-xl-8">
									<h4>Mr. & Mrs. Deshpande,</h4>
									<h5>Bride's parents</h5>
									<p>
										"Choosing My Wedding Palette was the best decision we made for our daughter's wedding. Aditya and Shruti's meticulous planning and attention to detail ensured that every moment was flawlessly executed. They went above and beyond to create a magical experience for our family and guests. We were able to relax and enjoy the celebrations knowing that everything was taken care of. Thank you for making our daughter's wedding an unforgettable affair!"
									</p>
									<div class="ratting d-flex flex-nowrap align-items-center">
										<p class="m-0">5 Day ago</p>
										<span class="fa-solid fa-star checked"></span>
										<span class="fa-solid fa-star checked"></span>
										<span class="fa-solid fa-star checked"></span>
										<span class="fa-solid fa-star checked"></span>
										<span class="fa-solid fa-star"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="box col-12">
							<div class="inner-box d-flex flex-wrap">
								<div class="left col-12 col-md-6 col-xl-4">
									<img src="<?php echo base_url() ?>assets/front/image/testimonial/Success-Stories-1.jpg" alt="image">
								</div>
								<div class="right d-flex flex-column col-12 col-md-6 col-xl-8">
									<h4>Aparna</h4>
									<h5>Bride</h5>
									<p>
										"I couldn't have asked for a better online wedding planning experience than what My Wedding Palette provided. Aditya and Shruti's virtual consultations and personalized guidance made me feel supported throughout the planning journey. Their online tools and resources, including vendor recommendations and virtual design boards, were invaluable in bringing my vision to reality. Thanks to their expertise and online platform, my wedding day was everything I had dreamed of and more."
									</p>
									<div class="ratting d-flex flex-nowrap align-items-center">
										<p class="m-0">5 Day ago</p>
										<span class="fa-solid fa-star checked"></span>
										<span class="fa-solid fa-star checked"></span>
										<span class="fa-solid fa-star checked"></span>
										<span class="fa-solid fa-star checked"></span>
										<span class="fa-solid fa-star"></span>
									</div>
								</div>
							</div>
						</div>
						<div class="box col-12">
							<div class="inner-box d-flex flex-wrap">
								<div class="left col-12 col-md-6 col-xl-4">
									<img src="<?php echo base_url() ?>assets/front/image/testimonial/Success-Stories-3.jpg" alt="image">
								</div>
								<div class="right d-flex flex-column col-12 col-md-6 col-xl-8">
									<h4>Tarun Gupta</h4>
									<h5>Wedding Photographer</h5>
									<p>
										Collaborating with My Wedding Palette's online platform has been a pleasure. Aditya and Shruti's meticulous organization and clear communication through their online portal made it easy for vendors like myself to seamlessly connect with couples. Their attention to detail and dedication to creating memorable weddings shines through even in the virtual planning process. I highly recommend their online services to both couples and fellow vendors in the wedding industry
									</p>
									<div class="ratting d-flex flex-nowrap align-items-center">
										<p class="m-0">5 Day ago</p>
										<span class="fa-solid fa-star checked"></span>
										<span class="fa-solid fa-star checked"></span>
										<span class="fa-solid fa-star checked"></span>
										<span class="fa-solid fa-star checked"></span>
										<span class="fa-solid fa-star"></span>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- REACH OUT SECTION  -->
	<section class="reach-out-section">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="question-mark-image">
						<img src="<?php echo base_url() ?>assets/front/image/service-3/question-mark.png">
					</div>
				</div>
				<div class="col-md-6">
					<div class="reach-out-content">
						<h6>Stay Connected</h6>
						<h5>Your Vision, <span style="color:#EF243C">Our Mission</span></h5>
						<h4>Have questions? <br> Need more information?</h4>
						<h2>Reach Out To Us!</h2>
						<p>Whether it's customization or clarifications, we're here to make your wedding journey exceptional.</p>
					</div>
					<div class="reach-out-btn">
						<a class="contact_btn" href="<?php echo base_url() ?>contactus">Contact Us</a>
					</div>
				</div>
			</div>
		</div>
	</section>

</div>

<section class="social-service-2 social-service-3">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="social-service-2-content">
					<div class="social-service-2-head">
						<h5><span style="color: #FD152A;">Follow</span> Us</h5>
					</div>
					<ul class="about-social social-service-2-ul">
						<li>
							<a href="https://www.facebook.com/myweddingpaletteofficial" target="_blank"><img src="<?php echo base_url() ?>assets/front/image/service-2/facebook-icon.png" class="social-icon-img wow bounceIn animated" data-wow-delay="1s"></a>
						</li>

						<li>
							<a href="https://www.instagram.com/myweddingpaletteofficial/" target="_blank"><img src="<?php echo base_url() ?>assets/front/image/service-2/insta-icon.png" class="social-icon-img wow bounceIn animated" data-wow-delay="1s"></a>
						</li>

						<li>
							<a href="https://mail.google.com/mail/?view=cm&fs=1&to=mwp@myweddingpalette.com" target="_blank"><img src="<?php echo base_url() ?>assets/front/image/service-2/google-icon.png" class="social-icon-img wow bounceIn animated" data-wow-delay="1s"></a>
						</li>

						<li>
							<a href="https://in.pinterest.com/myweddingpalette/" target="_blank"><img src="<?php echo base_url() . SERVICE ?>pinterest.png" class="social-icon-img wow bounceIn animated" data-wow-delay="1s"></a>
						</li>

						<!--<li>
	                        <a href="#"><img src="<?php echo base_url() ?>assets/front/image/service-2/twitter-icon.png" class="social-icon-img wow bounceIn animated" data-wow-delay="1s"></a>
	                  </li>
	                  <li>
	                        <a href="#"><img src="<?php echo base_url() ?>assets/front/image/service-2/you-tube-icon.png" class="social-icon-img wow bounceIn animated" data-wow-delay="1s"></a>
	                  </li>-->
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>

<script>
	// Get references to the button and the target div
	var scrollButton = document.getElementById('scrollButton');
	var targetDiv = document.getElementById('targetDiv');

	// Add a click event listener to the button
	scrollButton.addEventListener('click', function() {
		// Scroll to the target div
		targetDiv.scrollIntoView({
			behavior: 'smooth'
		}); // This will provide a smooth scroll effect
	});
</script>


<script>
	const prevBtn = document.querySelector('.prev-btn');
	const nextBtn = document.querySelector('.next-btn');
	const cardsContainer = document.querySelector('.cards2-container');
	const cardWidth = document.querySelector('.card2').offsetWidth;
	let currentPosition = 0;

	nextBtn.addEventListener('click', () => {
		if (currentPosition > -(cardsContainer.offsetWidth - cardWidth - cardWidth)) {
			currentPosition -= cardWidth;
			cardsContainer.style.transform = `translateX(${currentPosition}px)`;
		}
	});

	prevBtn.addEventListener('click', () => {
		if (currentPosition < 0) {
			currentPosition += cardWidth;
			cardsContainer.style.transform = `translateX(${currentPosition}px)`;
		}
	});
</script>


<?php $this->load->view('front/layout/footer'); ?>
<?php $this->load->view('front/layout/script'); ?>
<script>
	$(document).ready(function() {
	$('#your_visions').owlCarousel({
			items: 1, // Number of items to display
            loop: true, // Infinite loop
            margin: 10, // Margin between items
            autoplay: true, // Autoplay
            autoplayTimeout: 4000, // Autoplay interval in milliseconds
            responsive: {
                0: {
                    items: 1,
                    autoplay: true,
                    loop: true,
                    dots: true,
                    
                },
                600: {
                    items: 1,
                    autoplay: true,
                    loop: true,
                    dots: true,
                    
                },
                768: {
                    items: 1,
                    autoplay: true,
                    loop: true,
                    dots: true,
                    
                },
                1000: {
                    items: 4
                }
            }
	});
	});
</script>
<script>
	// Handling click event
	// 	$(".checkInfo").on("click", function() {
	// 		$(this).parent().parent().find(".hint").toggle();
	// 	});

	// Handling hover events
	$(".checkInfo").hover(
		function() {
			$(this).parent().parent().find(".hint").show();
		},
		function() {
			$(this).parent().parent().find(".hint").hide();
		}
	);

	// MOBILE PRICE TABLE CAROUSEL
	$(document).ready(function() {
		// MOBILE PRICE TABLE CAROUSEL
		$("#mobilePriceTableCarousel").owlCarousel({
			loop: true,
			margin: 10,
			responsiveClass: true,
			dots: true,
			autoplay: false,
			autoplayTimeout: 3000,
			autoplayHoverPause: true,
			responsive: {
				0: {
					items: 1,
				},
				650: {
					items: 2,
				},
			},
		});
	});
</script>