<?php  $this->load->view('front/layout/head'); ?>
<?php  $this->load->view('front/layout/header'); ?>
<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/about.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/home.css"> -->
<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">
 -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/stylevendor.css"> 
<!-- Background image -->
<div class="p-5 text-center bg-image" style="background-image: url('<?php echo base_url() ?>assets/front/image/vendor-reccomed/wed.jpg');">
    <div class="mask">
        <div class="d-flex justify-content-center align-items-center h-100">
            <div class="text-white">
                <h1 class="mb-3">CHOOSE CATEGORIES!</h1>
            </div>
        </div>
    </div>
</div>
<!-- Background image -->


<div class="container">
    <div class="heading">
        <p class="head1">Congratulations on Choosing Your MWP Vendor Recommendation Plan! Let's Dive into Creating Your Perfect Wedding.</p>
    </div>
    <div class="head">
        <p class="txt-1">Select Your Dream Categories!</p>
        <img src="<?php echo base_url() ?>assets/front/image/vendor-reccomed/under.png" class="under" >
    </div>
    <div class="head">
        <p class="head1">Unlock personalized recommendations for your dream wedding. Choose your category, and we'll

guide you to the finest vendors, hassle-free.</p>
    </div>
</div>
<form action="<?php echo base_url() ?>VendorRecommendationPayment/addvendor" method="POST">

   <?php //echo  $this->session->userdata('priceplan');  //echo $pricedata["priceplan"]; ?>
   <input type="hidden"  name="userid" value="<?php echo $this->session->userdata['userid']; ?>"/>
   <input type="hidden"  name="plan_price" value="<?php echo $this->session->userdata['priceplan']; ?>" id="priceplan"/>
  <!-- 
   <?php if(!empty($this->session->userdata['email'])=="pranoti@crezvatic.com"){ ?>
       <input type="hidden"  name="plan_price" value="1" id="priceplan"/>
  <?php  } 
        else{ ?>
                <input type="hidden"  name="plan_price" value="<?php echo $this->session->userdata['priceplan']; ?>" id="priceplan"/>
   
    <?php   }
   
   ?>-->
  
   <input type="hidden"  name="additional_charge" value="<?php echo  $this->session->userdata['additionalcharge']; ?>" id="priceplan11" />
   <input type="hidden"  name="plan_name" value="<?php echo $this->session->userdata['planname']; ?>" id="priceplan22"/>
   <input type="hidden"  name="first_name" value="<?php echo  $this->session->userdata['firstname']; ?>" id="priceplan33" />
   <input type="hidden"  name="last_name" value="<?php   echo  $this->session->userdata['lastname']; ?>" id="priceplan44"/>
   <input type="hidden"  name="email_id"  value="<?php    echo $this->session->userdata['email']; ?>" id="priceplan55"/>
   <input type="hidden"  name="phone_no"  value="<?php    echo $this->session->userdata['phoneno']; ?>" id="priceplan66"/>

  <div class="container mt-4">
    <div class="row">
        <!-- Category 1 -->
        <div class="col-md-4 ">
          <label>
            <div class=" panel-default card-input">
                <input type="checkbox"  value="viral_venue" name="venuecat" class="panel card-input-element form-check radio single-vendor-radio vendor-radio checkboxclick"/>
                  <span class="plan-details">
                    <span class="plan-type">MWP Viral Venues</span>
                    <br>
                    <span>Discover Your Perfect Wedding Venue </span>
                  </span>
            </div>
          </label>
        </div>
        <!-- Category 2  -->
        <div class="col-md-4 ">
          <label>
            <div class=" panel-default card-input">
              <input type="checkbox"  value="bridal-boutique" name="bridalcat" class="panel card-input-element form-check radio  single-vendor-radio vendor-radio checkboxclick"/>
              <span class="plan-details">
                <span class="plan-type">MWP Bridal Boutiques</span>
                <br>
                <span>Find curated selection of bridal attire Vendors</span>
              </span>
            </div>
          </label>
        </div>
        <!-- Category 3 -->
        <div class="col-md-4 ">
          <label>
            <div class=" panel-default card-input">
                <input type="checkbox"  value="groom-gear" name="groomcat" class="panel card-input-element form-check radio  single-vendor-radio vendor-radio checkboxclick" />
                <span class="plan-details">
                  <span class="plan-type">MWP Groom Gear</span>
                     <br>
                   <span> Elevate Your Groom's Look to the Pinnacle of Elegance </span>
                </span>
            </div>
          </label>
        </div>
        <!-- Category 4 -->
        <div class="col-md-4 ">
        <label>
            <div class=" panel-default card-input">
              <input type="checkbox"  value="perfect-photograph" name="photograph-cat" class="panel card-input-element form-check radio single-vendor-radio vendor-radio checkboxclick"/>
              <span class="plan-details">
                  <span class="plan-type">MWP Perfect Photographers</span>
                  <br>    
                  <span>Capture Timeless Memories with Expert Photographers</span>
              </span>
            </div>

        </label>
        </div>
        <!-- category 5 -->
        <div class="col-md-4 ">
        <label>
            <div class=" panel-default card-input">
              <input type="checkbox"  value="mua" name="mua-cat" class="panel card-input-element form-check radio single-vendor-radio vendor-radio checkboxclick" />
              <span class="plan-details">
              <span class="plan-type">MWP Mesmerizing MUAs</span>
              <br>
              <span>Transform into a Radiant Bride with Exceptional MUAs </span>

              </span>
              
            </div>

        </label>
        </div>
        <!-- category 6 -->
        <div class="col-md-4 ">
          <label>
              <div class=" panel-default card-input">
                  <input type="checkbox"  value="mehendi-magic" name="mehendi-cat" class="panel card-input-element form-check radio
                  single-vendor-radio vendor-radio checkboxclick"/>
                  <span class="plan-details">
                    <span class="plan-type">MWP Mehendi Magic</span>
                    <br>    
                    <span>Adorn Your Hands with Exquisite Mehendi Artistry </span>
                  </span>
              </div>
          </label>
        </div>
               <!-- Category 7 -->
        <div class="col-md-4 ">
        <label>
            <div class=" panel-default card-input">
              <input type="checkbox"  value="decor-delight" name="decor_cat" class="panel card-input-element form-check radio single-vendor-radio vendor-radio checkboxclick"/>
                <span class="plan-details">
                  <span class="plan-type">MWP Decor Delight</span>
                  <br>
                  <span>Discover Decor Artists who turn your vision into a reality </span>   
                </span>
              
            </div>
        </label>
        </div>
        <!-- category 8 -->
        <div class="col-md-4 ">
            <label>
              <div class=" panel-default card-input">
                  <input type="checkbox"  value="gift-galore" name="gift-cat" class="panel card-input-element form-check radio single-vendor-radio vendor-radio checkboxclick" />
                  <span class="plan-details">
                      <span class="plan-type">MWP Gifts Galore</span>
                      <br>
                      <span>Impress Your Guests with Thoughtful Gifts and Favors </span>
                  </span>
                  
                </div>

            </label>
        </div>
        <!-- category 9 -->
        <div class="col-md-4 ">
        <label>
            <div class=" panel-default card-input">
              <input type="checkbox"  value="12345" name="product" class="panel card-input-element form-check radio single-vendor-radio vendor-radio" disabled/>
              <span class="plan-details plan-disable">
                <span>More MWP Categories Coming Soon! </span>
                <img src="<?php echo  base_url(); ?>assets/front/image/vendor-reccomed/log.png" alt="img" class="logo">
              </span>
            </div>
        </label>
        </div>
    </div>

    <br><br>
    
    <div class="container">

    <div class="bottom  ">
        <h3 class="txt-2" >Let's turn your dreams into reality together!</h3>
    </div>
    <span></span><br><br>
    <h2 id="validation-message"></h2>
    <div class="bottom2">
        <h3 class="txt-2">Ready to proceed?</h3>
    </div>

    </div>
</div>

<br>
<div class="pro-btn">
    <center>
<!--        <button class="btn">Pay Now</button>-->
        <input type="submit" value="Pay Now" class="btn" id="vendorpaynow" disabled="disabled">
    </center>
</div>


</form>

<?php  $this->load->view('front/layout/footer'); ?>
<?php  $this->load->view('front/layout/script'); ?>