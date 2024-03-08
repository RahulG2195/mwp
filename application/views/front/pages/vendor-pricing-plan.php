<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/style.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/common.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/version_2/price.css' ?>">

<!--<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor-pricing.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">-->

<section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url() ?>assets/front/image/hero-banner/MWP-gallery-page-hero-banner.jpg' )">
    <div class="banner-section-heading">
        <h1> Vendor Registration Plans</h1>
    </div>
</section>

<section class="price_list common_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top">
                    <h1>Plans & Pricing</h1>
                    <div class="toggle-btn">
                        <span style="margin: 0.8em;">Annually</span>
                        <label class="switch">
                          <input type="checkbox" id="checbox" onclick="check()" ; />
                          <span class="slider round"></span>
                        </label>
                        <span style="margin: 0.8em;">Quarterly</span>
                    </div>
                </div>
            </div>

            <div class="col-md-12">
                <div class="snip1255">
                    <div class="plan plan-4">
                        <header>
                            <!-- <p>MWP</p> -->
                            <h4 class="plan-title planname3" data-plan3="palette-express">
                             Palette Express
                            </h4>
                             <h2 class="text1 free-plan-text"><small>Free</small></h2>
                             <h2 class="text2 free-plan-text"><small>Free</small></h2>
                            <!-- <div class="plan-cost"><span class="plan-price">$8</span><span class="plan-type">/month</span></div> -->
                            <div class="plan-select" id="free-plan-btn"><a href="#vendorPaymentModel" type="button" class="vendorPlan3">Select Plan</a></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="fa fa-check" aria-hidden="true"></i> Claimed Listing Tag

                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Basic Lead Generation Mechanism
                            </li>
                            <li> <i class="fa fa-check" aria-hidden="true"></i>Limited Photo Uploads (Max 5)

                            </li>
                            <!-- <li><i class="fa fa-check" aria-hidden="true"></i> Exclusive Access to Our Preferred Vendors
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Regular Updates and Consultations
                            </li> -->
                            <!-- <li>Daily Backups
                            </li> -->
                        </ul>
                    </div>
                    <div class="plan featured plan-5">
                        <header>
                            <!-- <p>MWP </p> -->
                            <h4 class="plan-title planname1" data-plan1="palette-pro">
                            Palette Pro
                            </h4>
                             <h2 class="text1"><small><strike> <span class="text-muted">INR 3000/month</span></strike><br>
                             <span style="font-size: 18px;color:#fd152a;font-weight:600;margin-top:6px" class="planpriceannual" data-expirea1="<?php echo date('Y-m-d H:i:s', strtotime("+90 days")); ?>" data-typea1="Q" data-annual1="inr-1000">INR 1000/month</span>  <br> (Billed Quarterly)</small></h2>
                             <h2 class="text2"><small><strike><span class="text-muted">INR 2000/month</span></strike><br>
                             <span style="font-size: 18px;color:#fd152a;font-weight:600;margin-top:6px" class="planpricemonth" data-expirem1="<?php echo date('Y-m-d H:i:s', strtotime("+365 days")); ?>" data-typem1="A" data-month1="inr-750">750/month</span>  <br> (Billed Annually)</small></h2>
                            <!-- <div class="plan-cost"><span class="plan-price">$49</span><span class="plan-type">/month</span></div> -->
                            <div class="plan-select"><a href="#vendorPaymentModel" type="button" class="vendorPlan">Select Plan</a></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="fa fa-check" aria-hidden="true"></i> Visibility in the Spotlight section

                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Visibility in Top of the Search
 
                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Appointment booking feature

                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Deal & Coupons Visibility

                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Limited Photo Upload (Max 10)

                            </li>
                            
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Call Support</li>
                            <!--<li><i class="fa fa-check" aria-hidden="true"></i>  Call Support</li>-->
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Analytics access</li>
                        </ul>
                    </div>
                    <div class="plan plan-6">
                        <header>
                           <!--  <p>MWP </p> -->
                            <h4 class="plan-title planname1" data-plan2="palette-elite">
                             Palette Elite
                            </h4>
                           <h2 class="text1 strikeprice1"><small><strike><span class="text-muted">INR 6000/</span></strike><br>
                           <span  style="font-size: 18px;color:#fd152a;font-weight:600;margin-top:6px" class="planpriceannual1" data-expirea2="<?php echo date('Y-m-d H:i:s', strtotime("+90 days")); ?>" data-typea2="Q" data-annual2="inr-2000">INR 2000/month </span> |  <br>(Billed Quarterly)</small></h2>
                             
                            <h2 class="text2 strikeprice2"><small><strike><span class="text-muted">INR 4500/month</span></strike><br><span  style="font-size: 18px;color:#fd152a;font-weight:600;margin-top:6px" class="planpricemonth1" data-expirem2="<?php echo date('Y-m-d H:i:s', strtotime("+365 days")); ?>" data-typem2="A">1500/month </span>   <br> (Billed Annually)</small></h2>
                          
                            <div class="plan-select">
                                <a href="#vendorPaymentModel" class="vendorPlan2">Select Plan</a>
                            </div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="fa fa-check" aria-hidden="true"></i> Visibility in the Spotlight section

                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Visibility in Top of the Search

                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Visibility in Side Ads

                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Appointment booking feature

                            </li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Customized Lead Generation Mechanism

                            </li>
                            <!--<li><i class="fa fa-check" aria-hidden="true"></i> Events Calendar Visibility

                            </li>-->
                            <li><i class="fa fa-check" aria-hidden="true"></i> Event Promotion on the Vendor detail page</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Deal & Coupons Visibility</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Dedicated Profile Management support</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Unlimited Photo Upload</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Call Support</li>
                           <!-- <li><i class="fa fa-check" aria-hidden="true"></i>  Can Reply to reviews</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Can Pin reviews to top</li>-->
                            <li><i class="fa fa-check" aria-hidden="true"></i> Analytics access</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Lead Updates via SMS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="follow_section common_Section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <!-- <div class="heading text-center">
                    <h2><span>Follow </span>Us</h2>
                </div> -->
            </div>
            <div class="col-md-12 text-center follow-column">
            <style>

.social-service-2-ul {
    text-align: center;
    display: inline-flex;
    list-style-type: none;
}

            </style>

                <div class="social-service-2-content">
					<div class="social-service-2-head contact-service-head">
						<h5 class="contact-social-service"><span style="color: #FD152A;">Follow</span> Us</h5>
					</div>
					<ul class="about-social social-service-2-ul contact-social-ul">
	                   <li>
	                        <a href="https://www.facebook.com/myweddingpaletteofficial"><img src="<?php echo base_url() ?>assets/front/image/service-2/facebook-icon.png" class="social-icon-img wow bounceIn animated" data-wow-delay="1s"></a>
	                   </li>
	                  
	                   <li>
	                        <a href="https://www.instagram.com/myweddingpaletteofficial/"><img src="<?php echo base_url() ?>assets/front/image/service-2/insta-icon.png" class="social-icon-img wow bounceIn animated" data-wow-delay="1s"></a>
	                   </li>
	                    
	                   <li>
	                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mwp@myweddingpalette.com"><img src="<?php echo base_url() ?>assets/front/image/service-2/google-icon.png" class="social-icon-img wow bounceIn animated" data-wow-delay="1s"></a>
	                   </li>
	                   
	                   <li>
	                        <a href="https://in.pinterest.com/myweddingpalette/"><img src="<?php echo base_url() . SERVICE ?>pinterest.png" class="social-icon-img wow bounceIn animated" data-wow-delay="1s"></a>
	                   </li>
	                    
<!--	                   <li>
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
<div class="modal fade" id="vendorPaymentModel" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog popup_model_dialog">
    <div class="modal-content">
      <button type="button" class="btn-close form_close_btn close_model" data-dismiss="modal" aria-hidden="true">x</button>
       <form action="<?php echo base_url().'Vendorpayment/payment' ?>" method="post" enctype="multipart/form-data">
           <input class="form-control contact-input-style" name="vendor-listing-data" placeholder="Firstname" type="hidden" required  />
          <div class="card px-3 py-1">
              <div class="card-header">
              <h4 class="text-capitalize primary-form-heading">Payment details</h4>
              </div>
              <div class="row">
                  <div class="col-md-4 form-group">
                      <label for="text" class="form-label vendor-form-label">Vendor Name</label>
                      <input type="text" class="form-control" id="vendor_name" placeholder="Enter Vendor Name" name="vendor_name" Required>
                  </div>
                  <div class="col-md-4 form-group">
                      <label for="vendor_email" class="form-label vendor-form-label">Email</label>
                      <input type="email" class="form-control" id="vendor_email" placeholder="Enter Email id" name="vendor_email" Required>
                  </div>
                  <div class="col-md-4 form-group">
                      <label for="phone_no" class="form-label vendor-form-label" Required>Phone</label>
                      <input type="text" class="form-control" id="phone_no" placeholder="Enter phone no" name="phone_no">
                  </div>
                  
                 
                  <div class="col-md-4 form-group">
                      <label for="user_name" class="form-label vendor-form-label">User Name</label>
                      <input type="text" class="form-control" id="user_name"  placeholder="User Name" name="username" Required>
                  </div>
                  <div class="col-md-4 form-group">
                  <label for="password" class="form-label vendor-form-label">Password</label>
                      <input type="password" class="form-control" id="password" minlength="10" maxlength="13" placeholder="Password" name="vendor_password" Required>
                      <span id="passwordMessage" class="message"></span>
                  </div>
                  <div class="col-md-4 form-group">
                  <label for="cpassword" class="form-label vendor-form-label">Confirm password</label>
                      <input type="password" class="form-control" id="cpassword" minlength="10" maxlength="13" placeholder="Confirm password" name="confirm_password" Required>
                      <span id="confirmPasswordMessage" class="message"></span>
                  </div>
                  <div class="col-md-6 form-group">
                      <label for="pwd" class="form-label vendor-form-label">City</label>
                      <select name="city" class="form-control" id="city" Required>
                          <option>Select city</option>
                           <?php 
                          $city = Vendor_city();
                          foreach ($city as  $value) {
                            echo '<option value="'.$value['city_id'].'">'.$value['name'].'</option>';
                          }
                          ?>
                      </select>
                      
                  </div>
                  <div class="col-md-6 form-group">
                      <label for="category" class="form-label vendor-form-label">Category</label>
                      <select name="category" class="form-control cat_dropdown" id="category" required="">
                          <option value="">Select Category</option>
                          <?php
                            $vendor = Vendor_category();
                            foreach ($vendor as $vend) {
                                echo '<option value="' . $vend['category_id'] . '">' . $vend['name'] . '</option>';
                            }
                            ?>                  
                        </select>
                   </div>
                   <div class="col-md-6 form-group">
                      <label for="category" class="form-label vendor-form-label">Plan Name</label>
                      <input type="text" class="form-control" id="planName" placeholder="plan name" name="plan_name" value=" " readonly>
                   </div>
                   <div class="col-md-6 form-group">
                      <label for="category" class="form-label vendor-form-label">Amount</label>
                      <input type="text" class="form-control" id="planamount" placeholder="plan amount" name="amount" value="" readonly>
                   </div>
                   
                   <div class="col-md-6 form-group d-none">
                      <label for="category" class="form-label vendor-form-label">Expire On</label>
                      <input type="hidden" class="form-control" id="expireDate" placeholder="expire date" name="expire_date" value="<?php echo $expireDate; ?>" readonly>
                   </div>

                   <div class="col-md-6 form-group d-none">
                      <label for="category" class="form-label vendor-form-label">Plan Type</label>
                      <input type="hidden" class="form-control" id="planType" placeholder="plan type" name="plan_type" value=" " readonly>
                   </div>
                   
                    <div class="col-12">
                        <div class="g-recaptcha"  data-sitekey="6Leb2VkpAAAAAP3xgHxhXdy89prKLzzgUgNWv5c5" data-callback="callback" required></div>
                    </div>
              </div>
          </div>
                  
          <div class="col-12 text-center my-md-4 my-2">
                <button class="btn vendor-btn-submit" type="submit">Submit</button>
          </div>
       </form>

    </div>
  </div>

</div> 
<?php $this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); ?>