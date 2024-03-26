<?php $this->load->view('front/layout/head'); ?>
<?php $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/home.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor1.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/version_2/home_v2.css?v=5">
<style>
  .hero-full-screen {
    background: url("assets/images/unnamed-(1).png") center center no-repeat;
    height: 100vh;
    display: -webkit-flex;
    display: -ms-flexbox;
    display: flex;
    -webkit-flex-direction: column;
    -ms-flex-direction: column;
    flex-direction: column;
    -webkit-align-items: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-justify-content: space-between;
    -ms-flex-pack: justify;
    justify-content: space-between;
    background-size: cover;
  }
</style>

<div id="mainPageSection">
  <!-- HERO SECTION START HERE  -->
  <!--<div class="heroSection" style="background-image: url('<?php echo base_url() ?>assets/front/image/banner/home_banner_desktop.jpg');">-->
  <div class="heroSection" style="height:20vh">
  <div class="overlay_banner"></div>
    <div class="innerHeroSection d-flex flex-column justify-content-center align-items-center">
      <!--<div class="logo">-->
        <!--<img src="<?php echo base_url() ?>assets/front/image/mwp-home-logo.svg">-->
      <!--</div>-->
      <div class="innerContent d-flex flex-column align-items-center">
        <!--<h1 class="mb-3 text-center">Discover and Book Your Ideal Wedding Team!</h1>-->
        <form onsubmit="return updateUrl()" method="post" class="d-flex flex-wrap align-items-center justify-content-center mt-3">
          <div class="box col-6 col-md-4">
            <select class="w-100" name="vendor_cat" id="vendor_ajax1" required>
              <option value="">Select Vendor</option>
              <?php
              foreach ($category as $cat) {
                echo '<option value="' . $cat['cat_seo_url'] . '">' . $cat['name'] . '</option>';
              }
              ?>
            </select>
          </div>

          <div class="box col-6 col-md-4">
            <select class="w-100" name="vendor_city" id="filter_city1" required>
              <option value="">Select City</option>
              <?php
              foreach ($city as $citys) {
                echo '<option value="' . $citys['name'] . '">' . $citys['name'] . '</option>';
              }
              ?>
            </select>
          </div>
          <div class="box col-12 col-md-4">
            <button class="w-100" type="submit">Get Started</button>
          </div>
        </form>
      </div>
    </div>


  </div>
  <!-- END OF HERO SECTION  -->
  
  <section class="vendor-catalogue-section">
    <div class="container">
    <div class="row">
            <div class="col-md-12">
                <div class="vendor-catalogue-heading">
                <!-- (<?php //echo isset($filter_data['category_count']) ? $filter_data['category_count'] : 0 ?>) -->
                    <h2><?php echo $url_vendor . ' Vendor Deals ' . $url_city  ?> (<?php echo isset($vendor_deals['category_count']) ? $vendor_deals['category_count'] : 0 ?>):</h2>
                    </br>
                </div>
            </div>
        </div>
  <!-- infinite loader div -->
        <div class="row" id="fill_paginations">
            <?php echo VendorDeals($vendor_deals['result'])?>
            <?php
            // foreach ($filter_data['result'] as $value) {
            //     $category = $value['category'];

            //     if ($category == 1) {
            //         echo Vendor_card('ve', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            //     } elseif ($category == 2) {
            //         echo Vendor_card('bw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            //     } elseif ($category == 3) {
            //         echo Vendor_card('gw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            //     } elseif ($category == 4) {
            //         echo Vendor_card('ph', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            //     } elseif ($category == 5) {
            //         echo Vendor_card('mu', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            //     } elseif ($category == 6) {
            //         echo Vendor_card('me', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            //     } elseif ($category == 7) {
            //         echo Vendor_card('bj', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            //     } elseif ($category == 8) {
            //         echo Vendor_card('dc', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            //     } elseif ($category == 9) {
            //         echo Vendor_card('gf', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            //     } elseif ($category == 10) {
            //         echo Vendor_card('ct', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            //     } elseif ($category == 13) {
            //         echo Vendor_card('in', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            //     }
            // }
            ?>
        </div>
  <!-- VENDOR CATEGORY  -->
          <div id="loadingSpinner" class=" mx-auto text-center" style="display: none;">
            <!-- Your loading animation HTML or image goes here -->
            Loading...
        </div>
    </div>
</section>
  <!--<section class="vendor-categories scrollTrigger">-->
    <?php //echo VendorDeals($vendor_deals['result'])?>
    
  <!--</section>-->
  <!-- END OF VENDOR CATEGORY  -->

  <!-- NEWS LETTER  -->
  <section class="news-letter scrollTrigger">
    <div class="container d-flex flex-column align-items-center justify-content-center">
      <div class="row d-flex flex-column align-items-center justify-content-center">
        <div class="col-md-12 d-flex flex-column align-items-center justify-content-center">
          <div class="news-letter-content d-flex flex-column align-items-center justify-content-center">
            <div class="newsletter-small-heading">
              <h6 class="wow fadeInUp animated" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">My Wedding Palette</h6>
            </div>
            <div class="newsletter-main-heading">
              <h2 class="wow fadeInUp animated" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">Get started on your journey towards finding the <br><span style="font-weight: 800;">perfect vendors</span> for your <span style="font-weight: 800;">wedding day</span> </h2>
            </div>
            <div class="newsletter-btn"><a href="<?php echo base_url() ?>service/vendorrecommendation" class="newsletter-button">Get Started</a></div>
          </div>

        </div>
      </div>
    </div>
  </section>
  <!-- END OF NEWS LETTER  -->

</div>

<section class="social-share-section scrollTrigger">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="social-share">
          <div class="social-share-small-heading">
            <h6>Get in touch</h6>
          </div>
          <div class="social-share-main-heading">
            <h2>We are here to help you for your big day</h2>
          </div>
          <!--<div class="social-share-sub-heading"><h5>Get in touch</h5></div>-->
          <div class="social-share-btn"><a href="https://api.whatsapp.com/send?phone=917089796608&text=How%20can%20I%20help%20you?" target="_blank">Chat With Us</a></div>
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
<?php $this->load->view('front/layout/footer'); ?>
<?php $this->load->view('front/layout/script'); ?>

<script>
  function updateUrl() {
    var vendor = document.getElementById('vendor_ajax1').value;
    var city = document.getElementById('filter_city1').value;
    // var radioValue = document.querySelector('input[name="radio"]:checked').value;
    
    var url = '<?php echo base_url()."deals/" ?>' + vendor + '-in-' + city;
        window.location.href = url;
        return false
    }
</script>