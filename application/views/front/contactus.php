<?php  $this->load->view('front/layout/head'); ?>
<?php  $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/version_2/contact.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/service-2.css">

<section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url()?>assets/front/image/hero-banner/MWP-Contact-page-hero-banner.jpg' )">
   <!--  <div class="overlay1"></div> -->
    <div class="banner-section-heading">
        <h1>Let's Talk !</h1>
    </div>
</section>

<section class="contact-us-main-section" style="background-image: url('<?php echo base_url()?>assets/front/image/contact/bg.png' )">
	<div class="container">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="contact-us-main-head"><h2><span style="color: #FD152A;">Contact</span> Us</h2></div>
				</div>
			</div>
			<div class="row">
				<div class="col-md-12">
					<div class="contact-us-sub-heading">
						<h4>We would like to connect with you!</h4>
						<p>Tell Us, how can we assist you and we will connect with you in the next two hours</p>
					</div>
				</div>
			</div>
			<div class="row">
			<div class="col-md-6 contact-form-column">
				<div class="form-heading">
					<h6>Get In <span style="color: #FD152A"> Touch</span></h6>
				</div>
				<form action="<?php echo base_url() ?>contactus/emailcontact" method="POST">
				    <input class="form-control contact-input-style" name="contact-data" placeholder="Firstname" type="hidden" required  />
					<div class="row">
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                            <input class="form-control contact-input-style" name="firstname" placeholder="Firstname" type="text" required  />
                        </div>
                        <div class="col-lg-6 col-md-6 col-sm-6" style="padding-bottom: 10px;">
                            <input class="form-control contact-input-style" name="lastname" placeholder="Lastname" type="text" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <input class="form-control contact-input-style" name="email" placeholder="E-mail" type="text" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <input class="form-control contact-input-style" name="phoneno" placeholder="Phone no" type="text" required />
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12" style="padding-bottom: 10px;">
                            <select class="form-control contact-input-style" name="query_type" placeholder="Subject">
                                <option>Select</option>
                                <option>Future Newlyweds</option>
                                <option>Vendors and Partners</option>
                                <option>Share Your Love Story</option>
                                <option>Collaborations and Marketing</option>
                                <option>Customer Support</option>
                            </select>
                            
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-12 col-md-12 col-sm-12">
                            <textarea style="resize:vertical;" class="form-control contact-input-style" placeholder="Message..." rows="6" name="comment" required></textarea>
                        </div>
                    </div>
                    <div class="col-12">
                         <div class="g-recaptcha"  data-sitekey="6Leb2VkpAAAAAP3xgHxhXdy89prKLzzgUgNWv5c5" data-callback="callback" required></div>
                    </div>
                    <div class="row">
                    	<div class="col-lg-12 col-md-12 col-sm-12 contact-submit-btn">
                            <button type="submit" class="submit-contact captchabtn"> Submit</button>
                        </div>
                    </div>
				</form>
			</div>
			<div class="col-md-6 contact-ul">
				<div class="getin-touch-ul">
					 <ul>
					 	<li>
					 		<h5><img src="<?php echo  base_url() ?>assets/front/image/contact/FutureNewlyWeds_icon-01.png" width="30px"> Future Newlyweds</h5>
					 		<p>Are you a couple looking to turn your dream wedding into a reality? We&#39;re here to help you plan every detail. Fill out the form on the left, and we&#39;ll be in touch soon.</p>
					 	<!--	<p style="color: #FD152A" class="contact-ul-small-para">Contact us to start your journey today!</p>-->
					 	</li>
					 	<li>
					 		<h5><img src="<?php echo  base_url() ?>assets/front/image/contact/Vendors_and_PartnersIcon-01.png"width="30px"> Vendors and Partners</h5>
					 		<p>If you're a wedding vendor interested in joining our platform or if you're an existing vendor with questions, connect with us. We're here to assist you in showcasing your services.<!--<span style="color: #FD152A">Read More...</span>--> </p>
					 		
					 	</li>
					 	<li>
					 		<h5><img src="<?php echo  base_url() ?>assets/front/image/contact/ShareYourLoveStory_Icon-01.png" width="30px"> Share Your Love Story</h5>
					 		<p>Do you want to feature your wedding on our platform and inspire others? Connect with us, and we'll showcase your special day on our website and Instagram.<!--<span style="color: #FD152A">Read More...</span>--></p>
					 		
					 	</li>
					 	<li>
					 		<h5><img src="<?php echo  base_url() ?>assets/front/image/contact/CollaborationsandMarketingicon-01.png" width="30px"> Collaborations and Marketing</h5>
					 		<p>Businesses seeking marketing collaborations, including social media promotions and sponsored content, can reach out to us here. Let's explore the possibilities together. <!--<span style="color: #FD152A">Read More...</span>--></p>
					 		
					 	</li>
					 	<li>
					 		<h5><img src="<?php echo  base_url() ?>assets/front/image/contact/Customer-Support-icons-01.png" width="30px"> Customer Support</h5>
							 <p>Feel free to contact us with your concerns at <strong>+91-7977965178</strong> or Email us at <strong>mwp@myweddingpalette.com</strong><!--<span style="color: #FD152A">Read More...</span>--></p>
					 		
					 	</li>
					 </ul>
				</div>
			</div>
		</div>
		</div>
	</div>
</section>
<section class="contact-detail-section">
	<div class="container">
		 <div class="row">
		 	<div class="col-md-12 col-lg-4">
		 		<div class="contact-detail-content">
		 			<div class="contact-detail-icon">
		 				<img src="<?php echo  base_url() ?>assets/front/image/contact/address-icon.png">
		 			</div>
		 			<div class="contact-detail-caption">
		 				<h6>Our Address</h6>
		 			    <p>1405, Runwal Chestnut, Mulund Goregaon Link Road, Mulund (W)- 400078, Mumbai, MH</p>
		 			</div>
		 		</div>
		 	</div>
		 	<div class="col-md-6  col-lg-4">
		 		<div class="contact-detail-content">
		 			<div class="contact-detail-icon"><img src="<?php echo  base_url() ?>assets/front/image/contact/message-icon.png"></div>
		 			<div class="contact-detail-caption">
		 				<h6>Ask a question</h6>
		 			    <p>We will answer as soon as we can</p>
		 			    <h6 class="contact-detail-list-h6"><a href="https://api.whatsapp.com/send?phone=917089796608&text=How%20can%20I%20help%20you?" style="color: #FD152A;">Chat With Us</a></h6>
		 			</div>
		 			
		 		</div>
		 	</div>
		 	<div class="col-md-6  col-lg-4">
		 		<div class="contact-detail-content">
		 			<div class="contact-detail-icon">
		 				<img src="<?php echo  base_url() ?>assets/front/image/contact/opening-hr.png">
		 			</div>
		 			<div class="contact-detail-caption">
		 				<h6>Opening Hours</h6>
			 			<ul class="contact-detail-li">
			 				<li><b>Mon to Sat:</b> 9am to 9pm</li>
			 				<li><b>Sun:</b> 9am to 2pm</li>
			 			</ul>
		 			</div>		 			
		 		</div>
		 	</div>
		 </div>
	</div>
</section> 
<section class="contact-news-letter-section">
	<div class="container">
		<div class="row">
			<div class="col-lg-6 col-12">
				<div class="news-letter-content">
				    <form id="subscribeform" action="<?php echo base_url() ?>NewsSubscriber/subscribeuseremail" method="POST" >
						<div class="row">
							<h6>Subscribe to  <span style="color:#FD152A">Our Newsletter!</span></h6>
							<p>Join our exclusive newsletter community and stay connected with the world of weddings. Subscribe today and be a part of the My Wedding Palette community. Let us help you create memories that last a lifetime.</p>
		                        <div class="input-group mb-3 news-letter-input-grp-contact sub">
		                            <input class="form-control contact-input-style" name="subscribe-data" placeholder="Firstname" type="hidden" required  />
									<input type="text" class="form-control" placeholder="Email"  name="subscribemail" required="" style="z-index:1000;">
									<div class="input-group-append">
									    <button class="btn submit-news-btn" type="submit">Submit</button>
									</div>
								</div>
                        </div>
                        <div class="col-12" id="g-captcha">
                            <div class="g-recaptcha"  data-sitekey="6Leb2VkpAAAAAP3xgHxhXdy89prKLzzgUgNWv5c5" data-callback="callback" required></div>
                        </div>
				    </form>
				</div>
			</div>
			<div class="col-lg-6 col-12">
				<div class="news-letter-image">
					<img src="<?php echo  base_url() ?>assets/front/image/contact/news-letter-image.png" class="subscribe-desktop-image blog-get-more ">
					<img src="<?php echo  base_url() ?>assets/front/image/contact/news-letter-image_mob.png" class="img-fluid subscribe-mobile-image">
				</div>
			</div>
		</div>
	</div>
</section>

<section class="insta-feed-section">
 <div class="container">
 	<div class="row insta-row">
 		<div class="col-md-12">
 			<div class="insta-content">
 				<h6>Follow Us</h6>
 				<h3>For More Inspiration On Instagram </h3>
 				<h4>@myweddingpaletteofficial</h4>
 				<div class="insta-btn">
 				    <a href="https://www.instagram.com/myweddingpaletteofficial/">Explore</a>
 			    </div>
 			</div>
 			
 		</div>
 		
 	</div>
 </div>	
</section>
<section class="social-service-2 social-contact common_Section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="social-service-2-content">
					<div class="social-service-2-head contact-service-head">
						<h5 class="contact-social-service"><span style="color: #FD152A;">Follow</span> Us</h5>
					</div>
					<ul class="about-social social-service-2-ul contact-social-ul">
	                   <li>
	                        <a href="https://www.facebook.com/myweddingpaletteofficial"><img src="<?php echo base_url() ?>assets/front/image/service-2/facebook-icon.png" class="social-icon-img wow bounceIn animated" ></a>
	                   </li>
	                  
	                   <li>
	                        <a href="https://www.instagram.com/myweddingpaletteofficial/"><img src="<?php echo base_url() ?>assets/front/image/service-2/insta-icon.png" class="social-icon-img wow bounceIn animated" ></a>
	                   </li>
	                    
	                   <li>
	                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mwp@myweddingpalette.com"><img src="<?php echo base_url() ?>assets/front/image/service-2/google-icon.png" class="social-icon-img wow bounceIn animated" ></a>
	                   </li>
	                   
	                   <li>
	                        <a href="https://in.pinterest.com/myweddingpalette/"><img src="<?php echo base_url() . SERVICE ?>pinterest.png" class="social-icon-img wow bounceIn animated" ></a>
	                   </li>
                    </ul>
				</div>
			</div>
		</div>
	</div>
</section>
 <!--<script type="text/javascript">
      
    </script>-->

<?php  $this->load->view('front/layout/footer'); ?>
<?php  $this->load->view('front/layout/script'); ?>

