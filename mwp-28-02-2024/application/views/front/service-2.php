<?php  $this->load->view('front/layout/head'); ?>
<?php  $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/version_2/service-2.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<!--<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">-->
<section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url()?>assets/front/image/hero-banner/Service/MWP-Coming-Soon-Page-hero-banner.jpg' )">
    <div class="banner-section-heading">
        <h1>Wedding Treasures</h1>
    </div>
</section>
<section class="coming-soon-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="coming-soon-heading">
					<img src="<?php echo  base_url() ?>assets/front/image/service-2/Coming-Soon.png" class="coming-soon-image">
				</div>
				<div class="customized-content">
					<h3 class="elevate-heading">Elevate Your Wedding Experience</h3>
					<h3 class="add-on-heading">With Cutomized Add-ons</h3>
				</div>
				<div class="customized-content-para">
					<p>Discover a world of possibilities to make your wedding truly unforgettable. Our tailored add-ons are designed to add that extra touch of magic to every stage of your special day. From personalized wedding favors that reflect your unique style to guest welcome packages that set the tone for a memorable celebration – we're here to turn your vision into reality at every step.</p>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="why-choose-us">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="why-choose-content">
					<h4>Why Choose Our</h4>
					<h2>Customized Add-Ons?</h2>
				</div>
			</div>
			<!-- <div class="why-choose-column"> --> 
					<div class="col-lg-3 col-md-6 col-sm-12 why-choose-col-1">
						<div class="why-choose-column-content">
							<div class="why-choose-column-img">
								<img src="<?php echo base_url() ?>assets/front/image/service-2/Personalization-icon.png">
							</div>
							<div class="why-choose-column-heading">
								<h6> Perfect Personalization </h6>
							</div>
							<div class="why-choose-column-para">
								<p>Craft every detail to match your taste and style,ensuring weddding is true reflection of you.</p>
							</div>
						</div>
					</div>

					<div class="col-lg-3 col-md-6 col-sm-12 why-choose-col-1">
						<div class="why-choose-column-content">
							<div class="why-choose-column-img">
								<img src="<?php echo base_url() ?>assets/front/image/service-2/memorable-icon.png">
							</div>
							<div class="why-choose-column-heading">
								<h6>Memorable Impressions</h6>
							</div>
							<div class="why-choose-column-para">
								<p>Leave a lasting mark on your guest with toughtful touches that showcase your thoughtfulness & care</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 why-choose-col-1">
						<div class="why-choose-column-content">
							<div class="why-choose-column-img">
								<img src="<?php echo base_url() ?>assets/front/image/service-2/Entertainment-icon.png">
							</div>
							<div class="why-choose-column-heading">
								<h6>Unique Entertainment</h6>
							</div>
							<div class="why-choose-column-para">
								<p>Elevate your celebration with  entertainment  that create unforgettable memories.</p>
							</div>
						</div>
					</div>
					<div class="col-lg-3 col-md-6 col-sm-12 why-choose-col-1">
						<div class="why-choose-column-content">
							<div class="why-choose-column-img">
								<img src="<?php echo base_url() ?>assets/front/image/service-2/Intergration-icon.png">
							</div>
							<div class="why-choose-column-heading">
								<h6>Seamless Integration</h6>
							</div>
							<div class="why-choose-column-para">
								<p>Our team seamlessly weaves these add-ons into your wedding plan,enhancing every moment.</p>
							</div>
						</div>
					</div>
				<!-- </div> -->
		</div>
	</div>
</section>
<section class="dream-wedding-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="dream-wedding-content">
					<p>Explore a world of endless possibilities to elevate your wedding experience. Unleash your imagination, and together, we'll create a wedding that's distinctly yours. Stay tuned for the launch of our Customized Add-Ons service.</p>
					<h2>Your Dream Wedding Awaits!</h2>
					<a href="<?php echo base_url() ?>contactus" class="btn contact-us-customized-add-on">Contact Us!</a>
				</div>
				
			</div>
		</div>
	</div>
</section>
<section class="waitlist-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="wailist-content">
					<h2>Join Our Waitlist</h2>
					<p>Be the first to know when our Customized Add-Ons service goes live. Leave your email & we'll keep you updated on this exciting journey towards making every stage of your wedding day extraordinary.</p>
    				<form id="waitlistform" class="amp-form"  action="<?php echo base_url() ?>Joinwaitlist/emailjoinwaitlist" method="POST">
    				    <div class="getstarted-btn">
    				        <div class="input-group mb-3">
    				        	<!-- -->
    				        	<input class="form-control contact-input-style" name="joinlist-data" placeholder="Firstname" type="hidden" required  />
                                <input type="text" class="form-control" id="joinlist" placeholder="Enter email id" aria-label="Enter email id" required name="joiemail">
                                
    		                    <div class="input-group-append">
    		                        <button class="service-btn-input" type="submit" id="joinwaitlistbtn">Submit</button>
    		                    </div>
    		                   <!--  -->
                            </div>
                            <!--<div class="col-12">
                               <div class="g-recaptcha"  data-sitekey="6Leb2VkpAAAAAP3xgHxhXdy89prKLzzgUgNWv5c5" data-callback="callback" required></div>
                            </div>-->
    				    </div>
    				    
    				    <div id="flash-messages"></div>
    				</form>
				</div>
			</div>
		</div>
	</div>
</section>

<section class="insta-feed-section insta-feed-service-2">
 <div class="container">
 	<div class="row insta-row">
 		<div class="col-md-12">
 			<div class="insta-content">
 				<h6>Follow Us</h6>
 				<h3>For More Inspiration On Instagram </h3>
 				<h4>@myweddingpalette</h4>
 				<div class="insta-btn">
 				    <a href="https://www.instagram.com/myweddingpaletteofficial/">Explore</a>
 			    </div>
 			</div>
 		</div>
 	</div>
 </div>	
</section>
<section class="social-service-2">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="social-service-2-content">
					<br>
					<div class="social-service-2-head">
						<h5><span style="color: #FD152A;">Follow</span> Us</h5>
					</div>
					<bR>
					<ul class="about-social social-service-2-ul">
	                   <li>
	                        <a href="https://www.facebook.com/myweddingpaletteofficial" target="_blank"><img src="<?php echo base_url() ?>assets/front/image/service-2/facebook-icon.png" class="social-icon-img"></a>
	                   </li>
	                  
	                   <li>
	                        <a href="https://www.instagram.com/myweddingpaletteofficial/" target="_blank"><img src="<?php echo base_url() ?>assets/front/image/service-2/insta-icon.png" class="social-icon-img"></a>
	                   </li>
	                    
	                   <li>
	                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mwp@myweddingpalette.com" target="_blank"><img src="<?php echo base_url() ?>assets/front/image/service-2/google-icon.png" class="social-icon-img"></a>
	                   </li>
	                   
	                   <li>
	                        <a href="https://in.pinterest.com/myweddingpalette/" target="_blank"><img src="<?php echo base_url() . SERVICE ?>pinterest.png" class="social-icon-img"></a>
	                   </li>
	                    
	                  <!-- <li>
	                        <a href="#"><img src="<?php echo base_url() ?>assets/front/image/service-2/twitter-icon.png" class="social-icon-img"></a>
	                  </li>
	                  <li>
	                        <a href="#"><img src="<?php echo base_url() ?>assets/front/image/service-2/you-tube-icon.png" class="social-icon-img"></a>
	                  </li>-->
                    </ul>
				</div>
			</div>
		</div>
	</div>
</section>
<?php  $this->load->view('front/layout/footer'); ?>
<?php  $this->load->view('front/layout/script'); ?>