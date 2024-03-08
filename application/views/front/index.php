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
  <div class="heroSection" style="background-image: url('<?php echo base_url() ?>assets/front/image/banner/home_banner_desktop.jpg');">
  <div class="overlay_banner"></div>
    <div class="innerHeroSection d-flex flex-column justify-content-center align-items-center">
      <div class="logo">
        <img src="<?php echo base_url() ?>assets/front/image/mwp-home-logo.svg">
      </div>
      <div class="innerContent d-flex flex-column align-items-center">
        <h1 class="mb-3 text-center">Discover and Book Your Ideal Wedding Team!</h1>
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


  <!-- CATEGORY SLIDER START HERE  -->
  <div class="categorySliderSection my-5">
      <div class="header d-flex flex-column align-items-center">
       
        <h2 class="text-center">Choose Your <span style="color: #f5001e;"> Vendor</span></h2>
        
      </div>
    <div class="body">
      <div class="inner-body d-flex flex-nowrap owl-carousel" id="categorySliderCarousel">
        <a href="<?php echo base_url() ?>Single-Vendor/bridal-jewellery" class="box d-flex flex-column align-items-center justify-content-center">
          <div class="image">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-BRIDAL-JEWELLERY.png" alt="image" class="white">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-BRIDAL-JEWELLERY-PINK.png" alt="image" class="hover">
          </div>
          <h4>Bridal Jewellery</h4>
        </a>
        <a href="<?php echo base_url() ?>Single-Vendor/wedding-decoration" class="box d-flex flex-column align-items-center justify-content-center">
          <div class="image">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-DECORATION.png" alt="image" class="white">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-DECORATION-PINK.png" alt="image" class="hover">
          </div>
          <h4>Decoration</h4>
        </a>
        <a href="<?php echo base_url() ?>Single-Vendor/wedding-gifts" class="box d-flex flex-column align-items-center justify-content-center">
          <div class="image">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-GIFTS.png" alt="image" class="white">
            <img src="<?php echo base_url() ?>/assets/front/image/home-icon/MWP-GIFTS-PINK.png" alt="image" class="hover">
          </div>
          <h4>Gifts</h4>
        </a>
        <a href="<?php echo base_url() ?>Single-Vendor/destination-wedding-venues" class="box d-flex flex-column align-items-center justify-content-center">
          <div class="image">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-VENUE.png" alt="image" class="white">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-VENUE-PINK.png" alt="image" class="hover">
          </div>
          <h4>Venues</h4>
        </a>
        <a href="<?php echo base_url() ?>Single-Vendor/bridal-wear-vendors" class="box d-flex flex-column align-items-center justify-content-center">
          <div class="image">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-BRIDAL-WEAR.png" alt="" class="white">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-BRIDAL-WEAR-PINK.png" alt="" class="hover">
          </div>
          <h4>Bridal Jewellery</h4>
        </a>
        <a href="<?php echo base_url() ?>Single-Vendor/groom-wear-vendors" class="box d-flex flex-column align-items-center justify-content-center">
          <div class="image">
            <img src="<?php echo base_url() ?>/assets/front/image/home-icon/MWP-GROOM-WEAR.png" alt="" class="white">
            <img src="<?php echo base_url() ?>/assets/front/image/home-icon/MWP-GROOM-WEAR-PINK.png" alt="" class="hover">
          </div>
          <h4>Groom Wear</h4>
        </a>
        <a href="<?php echo base_url() ?>Single-Vendor/wedding-photographers-near-me" class="box d-flex flex-column align-items-center justify-content-center">
          <div class="image">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-PHOTOGRAPHER.png" alt="" class="white">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-PHOTOGRAPHER-PINK.png" alt="" class="hover">
          </div>
          <h4>Photographers</h4>
        </a>

        <a href="<?php echo base_url() ?>Single-Vendor/make-up-artists-near-me" class="box d-flex flex-column align-items-center justify-content-center">
          <div class="image">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-MUA.png" alt="" class="white">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-MUA-PINK.png" alt="" class="hover">
          </div>
          <h4>Make Up Artists</h4>
        </a>

        <a href="<?php echo base_url() ?>Single-Vendor/mehendi-artists-near-me" class="box d-flex flex-column align-items-center justify-content-center">
          <div class="image">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-MEHENDI-ARTIST.png" alt="" class="white">
            <img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-MEHENDI-ARTIST-PINK.png" alt="" class="hover">
          </div>
          <h4>Mehendi Artists</h4>
        </a>
      </div>
    </div>
  </div>
  <!-- END OF CATEGORY SLIDER -->


  <!-- INTRODUCTION SECTION START HERE  -->
  <div class="introductionSection boxWidth mt-5 pt-5 scrollTrigger">
    <div class="innerContent d-flex flex-wrap">
      <div class="firstBox box d-flex flex-column col-12 col-xl-4">
        <div class="inner-box d-flex flex-column justify-content-center">
          <h5>Hello! Hola!</h5>
          <h3 class="introHeader">Welcome To <span>My Wedding Palette</span></h3>
          <p class="mb-3">We create extraordinary weddings through the perfect blend of technology, creative design, and a customized approach that reflects your unique vision for your big day!</p>
          <a href="<?php echo base_url() ?>aboutus">Who are we?</a>
        </div>
      </div>
      <div class="contentBox box d-flex flex-column align-items-center col-12 col-md-6 col-xl-4">
        <div class="inner-box">
          <img src="<?php echo  base_url() ?>assets/front/image/icon/Trusted_Partner.png" alt="image">
          <h3>Your <span>Trusted Wedding</span> Planning <span>Partners</span></h3>
          <p>
            At My Wedding Palette, we understand that your wedding day is a celebration of love, a reflection of your unique story,and
            a cherished memory to be treasured for a lifetime. With our expert wedding planning services, we aim to transform your dream wedding into a breathtaking reality, leaving you free to savor every moment of this joyous occasion.
          </p>
          <hr>
          <a href="<?php echo base_url() ?>aboutus" class="readMore">Read More</a>
        </div>
      </div>
      <div class="contentBox box d-flex flex-column align-items-center col-12 col-md-6 col-xl-4">
        <div class="inner-box">
          <img src="<?php echo  base_url() ?>assets/front/image/icon/We_Different.png" alt="image">
          <h3><span>Why You</span> Should <span>Choose Us?</span></h3>
          <p>
            Our unwavering commitment to providing personalized experiences that encapsulate your vision & surpass your expectations
            sets us apart from our competitors With a team of seasoned wedding planners, designers, & organizers, we bring together our years of expertise to curate an unforgettable wedding journey for you and your loved ones.
          </p>
          <hr>
          <!--<a href="<?php echo base_url() ?>aboutus" class="readMore">Read More</a>-->
          <a href="<?php echo base_url() ?>aboutus" class="readMore">Read More</a>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF INTRODUCTION SECTION -->


  <!-- OUR APPROACH START HERE  -->
  <div class="ourApproachSection scrollTrigger">
    <div class="innerContent">
      <div class="header">
        <h3>Our Approach!</h3>
      </div>
      <div class="body">
        <div class="inner-body d-flex flex-wrap">
          <div class="box col-12 col-md-6 col-xl-3">
            <div class="inner-box d-flex flex-column align-items-start">
              <div class="top">
                <img src="<?php echo  base_url() ?>assets/front/image/icon/Our-Approach-Icons-03.png" alt="image">
                <h5>Personalization</h5>
              </div>
              <div class="content">
                <p class="mb-0">
                  We believe that every love story is unique, and we tailor our services to reflect your style, taste, preferences, and cultural traditions.<span class="dots">...</span>
                </p>
                <p class="hide">From concept creation to venue selection, we meticulously curate every aspect of your wedding, ensuring it truly reflects your personality and aspirations.</p>
              </div>

              <button class="ourApproachReadMore">
                <i class="fa-solid fa-sort-down"></i>
              </button>

            </div>
          </div>

          <div class="box col-12 col-md-6 col-xl-3">
            <div class="inner-box d-flex flex-column">
              <div class="top">
                <img src="<?php echo  base_url() ?>assets/front/image/icon/Our-Approach-Icons-01.png" alt="image">
                <h5>Comprehensive Expertise</h5>
              </div>
              <div class="content">
                <p class="mb-0">
                  We skilfully coordinate using our deep understanding of the wedding industry and access to an extensive network of top-tier vendors.<span class="dots">...</span>
                </p>
                <p class="hide">From finding the perfect venue, selecting the finest decor, hand-picking talented photographers, and more, we leave no stone unturned in bringing your vision to life.</p>
              </div>

              <button class="ourApproachReadMore">
                <i class="fa-solid fa-sort-down"></i>
              </button>
            </div>
          </div>

          <div class="box col-12 col-md-6 col-xl-3">
            <div class="inner-box d-flex flex-column">
              <div class="top">
                <img src="<?php echo  base_url() ?>assets/front/image/icon/Our_Approach_Icons_New-05.png" alt="image">
                <h5>Seamless Execution</h5>
              </div>
              <div class="content">
                <p class="mb-0">
                  We pride ourselves on our exceptional organizational skills, budgeting acumen, and meticulous attention to detail-focused approach.<span class="dots">...</span>
                </p>
                <p class="hide"> Our dedicated team will seamlessly manage every logistical aspect of your wedding, leaving you stress-free and fully immersed in the joy of the moment.</p>
              </div>

              <button class="ourApproachReadMore">
                <i class="fa-solid fa-sort-down"></i>
              </button>
            </div>
          </div>

          <div class="box col-12 col-md-6 col-xl-3">
            <div class="inner-box d-flex flex-column">
              <div class="top">
                <img src="<?php echo  base_url() ?>assets/front/image/icon/Our-Approach-Icons-02.png" alt="image">
                <h5>Unforgettable Experiences</h5>
              </div>
              <div class="content">
                <p class="mb-0">
                  We go beyond the ordinary to create extraordinary unforgettable experiences that will leave a lasting impression on you and your guests.<span class="dots">...</span>
                </p>
                <p class="hide">From innovative thematic elements to thoughtfully designed surprises, we infuse every moment with magic, enchantment, and joy.</p>
              </div>

              <button class="ourApproachReadMore">
                <i class="fa-solid fa-sort-down"></i>
              </button>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>
  <!-- END OF OUR APPROACH  -->


  <!-- MWP SOLUTION SECTION START HERE  -->
  <div class="mwpsolutionSection">
    <div class="innerContent">
      <div class="header d-flex flex-column align-items-center scrollTrigger">
        <h5 class="text-center">Services</h5>
        <h2 class="text-center">MWP <span>Solutions</span></h2>
        <h6 class="text-center">A comprehensive range of wedding planning services</h6>
      </div>

      <div class="body">
        <div class="inner-body d-flex flex-wrap">
          <div class="box col-12 col-md-6 col-xl-4 scrollTrigger">
            <div class="inner-box d-flex flex-column">
              <div class="top">
                <div class="image">
                  <img src="<?php echo base_url() ?>/assets/front/image/home-icon/Complete-Wedding-Planning-Services.png" alt="image" class="white">
                  <img src="<?php echo base_url() ?>assets/front/image/home-icon/Complete-Wedding-Planning-Service-Red.png" alt="image" class="hover">
                </div>
                <h4>Complete Wedding Planning</h4>
              </div>
              <p>Our complete wedding planning service covers every detail, from the initial concept design to the final send-off.</p>
              <a href="<?php echo base_url() ?>service/weddingplanning">Tell me more?</a>
            </div>
          </div>

          <div class="box col-12 col-md-6 col-xl-4 scrollTrigger">
            <div class="inner-box d-flex flex-column">
              <div class="top">
                <div class="image">
                  <img src="<?php echo base_url() ?>assets/front/image/home-icon/Design-and-Decor.png" alt="image" class="white">
                  <img src="<?php echo base_url() ?>assets/front/image/home-icon/Design-and-Decor-Red.png" alt="image" class="hover">
                </div>
                <h4>Theme and Decor Design</h4>
              </div>
              <p>We specialize in creating enchanting wedding theme ideas delivered online to perfectly reflect your style and preferences</p>
              <a href="<?php echo base_url() ?>service/Design_and_Decor">Design My Theme!</a>
            </div>
          </div>

          <div class="box col-12 col-md-6 col-xl-4 scrollTrigger">
            <div class="inner-box d-flex flex-column">
              <div class="top">
                <div class="image">
                  <img src="<?php echo base_url() ?>assets/front/image/home-icon/Vendor-Recommendation.png" alt="image" class="white">
                  <img src="<?php echo base_url() ?>assets/front/image/home-icon/Vendor-Recommendation-Red.png" alt="image" class="hover">
                </div>
                <h4>Vendor Recommendations</h4>
              </div>
              <p>Are you overwhelmed by the thought of sifting through countless vendor pages and trying to find the perfect match for your dream wedding?</p>
              <a href="<?php echo base_url() ?>service/vendorrecommendation">How this works?</a>
            </div>
          </div>

          <div class="box col-12 col-md-6 col-xl-4 scrollTrigger">
            <div class="inner-box d-flex flex-column">
              <div class="top">
                <div class="image">
                  <img src="<?php echo base_url() ?>assets/front/image/home-icon/Wedding-Planning-Tools.png" alt="image" class="white">
                  <img src="<?php echo base_url() ?>assets/front/image/home-icon/Wedding-Planning-Tools-Red.png" alt="image" class="hover">
                </div>
                <h4>Wedding Planning Tools</h4>
              </div>
              <p>Introducing our exclusive Wedding Planning Tools – your partners in creating a flawless wedding experience!</p>
              <a href="<?php echo base_url() ?>service/Wedding_Planning_Tool">Explore Tools in Detail!</a>
            </div>
          </div>

          <div class="box col-12 col-md-6 col-xl-4 scrollTrigger">
            <div class="inner-box d-flex flex-column">
              <div class="top">
                <div class="image">
                  <img src="<?php echo base_url() ?>assets/front/image/home-icon/Destination-Wedding.png" alt="image" class="white">
                  <img src="<?php echo base_url() ?>assets/front/image/home-icon/Destination-Wedding-Red.png" alt="image" class="hover">
                </div>
                <h4>Destination Weddings</h4>
              </div>
              <p>Whether you envision an intimate ceremony or a grand celebration, we ensure a memorable and stress-free experience!</p>
              <a href="<?php echo base_url() ?>service/Destination_Wedding">I want YJHD Experience!</a>
            </div>
          </div>

          <div class="box col-12 col-md-6 col-xl-4 scrollTrigger">
            <div class="inner-box d-flex flex-column">
              <div class="top">
                <div class="image">
                  <img src="<?php echo base_url() ?>assets/front/image/home-icon/Customised-Add-Ons.png" alt="image" class="white">
                  <img src="<?php echo base_url() ?>assets/front/image/home-icon/Customised-Add-Ons-Red.png" alt="image" class="hover">
                </div>
                <h4>Customized Add-Ons</h4>
              </div>
              <p>MWP offers a range of customizable add-ons to enhance your wedding experience that leaves a lasting impression on your guests!</p>
              <a href="<?php echo base_url() ?>service/customized_wedding_add_ons">Customize My Wedding!</a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- END OF MWP SOLUTION SECTION  -->


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
  <!-- END OF SUCCESS STORIES -->


  <!-- VENDOR CATEGORY  -->
  <section class="vendor-categories scrollTrigger">
    <?php echo TrustedVendor($trusted_vendor['result'])?>
    
  </section>
  <!-- END OF VENDOR CATEGORY  -->

  <!-- Happening CITY  -->
  <section class="home-logo-slider scrollTrigger">
    <div class="container">
      <div class="row">
        <div class="happening-city-heading">
          <h2 class="wow fadeInUp animated" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">Happening <span style="color: #FF142A;">Cities</span></h2>
          <hr class="hr-cities">
        </div>
        <?php echo Happening_city(); ?>
      </div>
    </div>
  </section>
  <!-- END OF Happening CITY  -->

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


  <!-- inspiration highlights -->
  <section class="inspiration-highlights scrollTrigger">
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <div class="vendor-small-text" style="text-align: center;">
            <h6>Latest Blog</h6>
          </div>
          <div class="inspiration-heading">
            <h2 class="wow fadeInUp animated" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">Inspiration <span style="color: #FF142A;font-weight: 800">Highlights</span></h2>
          </div>
          <div class="col-md-12">
            <div class="home-page-blog-slider owl-carousel">
              <?php
              if (!empty($blog)) {

                $count = 0;
                $indicators = '';
                foreach ($blog as $value) {
                  $count++;
                  $catid = $value["blog-cat-id"];
                  $data = $this->BlogModel->getblogcategoyname($catid);
                  if ($count === 1) {
                    $class = 'active';
                  } else {
                    $class = '';
                  }
              ?>
                  <div class="slide">
                    <a href="<?php echo base_url('blog/blog_detail') ?>/<?php echo $value["blog-seo-url"]; ?>" style="text-decoration:none!important;text-decoration: none!important;color: #212529;font-family: 'Montserrat'!important;">
                      <div class="card home-page-blog-card">
                        <img src="<?php echo base_url() ?>uploads/blog-image/<?php echo $value["blog-image"] ?>" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title home-page-blog-title"><?php echo $value["blog-title"]; ?></h5>
                          <p class="card-text"><?php echo  substr($value["short-description"], 0, 200); ?></p>
                        </div>
                      </div>
                    </a>
                  </div>
              <?php
                }
              }

              ?>
            </div>
          </div>
        </div>
      </div>
    </div>

  </section>
  <!-- end of inspiration highlights -->
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
    
    var url = '<?php echo base_url() ?>' + vendor + '-in-' + city;
        window.location.href = url;
        return false
    }
</script>