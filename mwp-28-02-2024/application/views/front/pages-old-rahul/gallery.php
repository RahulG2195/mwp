<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/style.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/home.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/gallery.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/common.css' ?>">
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>


<section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url()?>assets/front/image/hero-banner/MWP-gallery-page-hero-banner.jpg' )">
   <!--  <div class="overlay1"></div> -->
</section>
<section class="bread_sec mt-md-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Bridal makeup Artist</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Mumbai</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="gallery_slider_sec  common_Section">
    <div class="container">
        <div class="gallery-heading">
            <h2>Wedding Photos, Latest Trends & Ideas <span style="color: #414141;font-size: 18px;font-weight: 300;"> ( 36000+ photos )</span></h2>
            <!--<h6>Browse from latest Wedding Photos, Ideas & Inspiration</h6>-->
        </div>
        <div class="row align-items-center">
            <div class="col-12">
                <div class="owl-carousel owl-theme gallery_cat">
                    <div class="item">
                        <a href="<?php echo base_url('gallery-detail')?>">
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/gallery-image-1-thumbnail.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title active">All Categories</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo base_url('gallery-detail')?>">
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/gallery-image-2-thumbnail.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Stage Decor</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo base_url('gallery-detail')?>">
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/gallery-image-3-thumbnail.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Entry Decor</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo base_url('gallery-detail')?>">
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/gallery-image-4-thumbnail.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Haldi Decor</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo base_url('gallery-detail')?>">
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/gallery-image-5-thumbnail.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Haldi Setup</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo base_url('gallery-detail')?>">
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/modern-backdrop-1.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Modern Backdrop</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo base_url('gallery-detail')?>">
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/mandap-decor-2-1.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Mandap Decor</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo base_url('gallery-detail')?>">
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/reception-decor.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Reception Decor</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                    <div class="item">
                        <a href="<?php echo base_url('gallery-detail')?>">
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/goa-weding.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Destination Wedding</h4>
                            </div>
                        </div>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery_sec common_Section">
    <div class="container">
        <div class="heading">
            <h1><span></span></h1>
        </div>
        <div class="row" data-masonry='{"percentPosition": true }'>
            <div class="col-md-4 my-2">
                    <div class="card text-left">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/front/image/gallery-image/goa-weding.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title gallery-photo-head" style="">Goa Wedding</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card text-left">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/front/image/gallery-image/couple-image.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title gallery-photo-head" >Arzoo And Gaurav Haldi</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card text-left">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/front/image/gallery-image/stage-image.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title gallery-photo-head">Stage Decor</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card text-left">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/front/image/gallery-image/mandap-decor-2.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title gallery-photo-head">Mandap Decor</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card text-left">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/front/image/gallery-image/reception-decor.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title gallery-photo-head">Reception Decor</h4>
                        </div>
                    </div>
                </div>
                
                <div class="col-md-4 my-2">
                    <div class="card text-left">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/front/image/gallery-image/haldi-setup.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title gallery-photo-head">Haldi Setup</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card text-left">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/front/image/gallery-image/modern-backdrop.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title gallery-photo-head">Modern Backdrop</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card text-left">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/front/image/gallery-image/mandap-image.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title gallery-photo-head">Mandap Decor</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card text-left">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/front/image/gallery-image/haldi-decor.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title gallery-photo-head">Haldi Decor</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card text-left">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/front/image/gallery-image/avantika-and-dushyant.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title gallery-photo-head">Avantika And Dushyant Wedding</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card text-left">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/front/image/gallery-image/entry-decor.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title gallery-photo-head">Entry Decor</h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 my-2">
                    <div class="card text-left">
                        <img class="card-img-top img-fluid" src="<?php echo base_url() ?>assets/front/image/gallery-image/arzoo-and-gaurav.png" alt="">
                        <div class="card-body">
                            <h4 class="card-title gallery-photo-head">Arzoo And Gaurav Haldi</h4>
                        </div>
                    </div>
                </div>
        </div>
        <div class="row">
            <div class="col-md-12">
                <div class="view-more-btn">
                    <a href="">View More</a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="vendor-categories scrollTrigger">
  <div class="container">
     <div class="row">
       <div class="float-left col-md-6">
           <div class="vendor-small-text"><h6>Vendor Categories</h6></div>
           <div class="vendor-main-text"><h2 class="wow fadeInUp animated" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">Trusted <span style="color:#FF142A; ">Vendors</span></h2></div>
       </div>
        <div class="float-right col-md-6 vendor-btn-col">
           <a href="<?php echo  base_url() ?>vendor/vendorlisting" class="vendor-btn">View All</a>
       </div>
       
       <div class="col-md-4">
        <!-- Card Dark -->
            <div class="card">
              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/vendor-image/Jet-Gems.jpeg"
                  alt="Card image cap">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!-- Card content -->
              <div class="card-body elegant-color white-text rounded-bottom">

                <!-- Social shares button -->
               <!--  <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a> -->
                <!-- Title -->
                <span class="text-muted category-text">Bridal Jwellery</span>
                <h4 class="card-title">Jet Gems</h4>
                <hr class="hr-light">
                <!-- Text -->
                <p class="mb-2"><i class="fas fa-star text-warning fa-xs"> </i> 4.8</p>
                <p class="card-text"><b>80</b> Reviews</p>
                <p class="lead"><strong><i class="fas fa-location"></i> Tilak Nagar, West Delhi</strong></p>
                <!-- Link -->
                <a href="#!" class="white-text d-flex justify-content-end view-category">
                 <span class="fa-solid fa-caret-right" style="color:#FD4251; margin-top: 3px;margin-right: 5px"> <span></span><span></span> <!-- <i class="fa-solid fa-caret-right"></i> --> </span> View 
                </a>
              </div>
            </div>
        <!-- Card Dark -->
       </div>
       <div class="col-md-4">
        <!-- Card Dark -->
            <div class="card">
              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/vendor-image/Nicky-Prithyani.jpeg"
                  alt="Card image cap">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!-- Card content -->
              <div class="card-body elegant-color white-text rounded-bottom">

                <!-- Social shares button -->
                <!-- <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a> -->
                <!-- Title -->
                <span class="text-muted category-text">Groom Wearing</span>
                <h4 class="card-title">Nicky Prithyani</h4>
                <hr class="hr-light">
                <!-- Text -->
                <p class="mb-2"><i class="fas fa-star text-warning fa-xs"> </i> 4.8</p>
                <p class="card-text"><b>80</b> Reviews</p>
                <p class="lead"><strong><i class="fas fa-location"></i> Tilak Nagar, West Delhi</strong></p>
                <!-- Link -->
                <a href="#!" class="white-text d-flex justify-content-end view-category">
                 <span class="fa-solid fa-caret-right" style="color:#FD4251; margin-top: 3px;margin-right: 5px"> <span></span><span></span> <!-- <i class="fa-solid fa-caret-right"></i> --> </span> View 
                </a>
              </div>
            </div>
        <!-- Card Dark -->
       </div>
       <div class="col-md-4">
        <!-- Card Dark -->
            <div class="card">
              <!-- Card image -->
              <div class="view overlay">
                <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/vendor-image/Royal-Golden-Camp.jpeg"
                  alt="Card image cap">
                <a>
                  <div class="mask rgba-white-slight"></div>
                </a>
              </div>
              <!-- Card content -->
              <div class="card-body elegant-color white-text rounded-bottom">

                <!-- Social shares button -->
                <!-- <a class="activator waves-effect mr-4"><i class="fas fa-share-alt white-text"></i></a> -->
                <!-- Title -->
                <span class="text-muted category-text">Venues</span>
                <h4 class="card-title">Royal Golden Camp</h4>
                <hr class="hr-light">
                <!-- Text -->
                <p class="mb-2"><i class="fas fa-star text-warning fa-xs"> </i> 4.8</p>
                <p class="card-text"><b>80</b> Reviews</p>
                <p class="lead"><strong><i class="fas fa-location"></i> Tilak Nagar, West Delhi</strong></p>
                <!-- Link -->
                <a href="#!" class="white-text d-flex justify-content-end view-category">
                 <span class="fa-solid fa-caret-right" style="color:#FD4251; margin-top: 3px;margin-right: 5px"> <span></span><span></span> <!-- <i class="fa-solid fa-caret-right"></i> --> </span> View 
                </a>
              </div>
            </div>
        <!-- Card Dark -->
       </div>
     </div>
  </div>
</section>
<section class="insta-feed-section">
  <div id="overlay"></div>
 <div class="container">
    <div class="row insta-row">
        <div class="col-md-12">
            <div class="insta-content">
                <h6>Follow Us</h6>
                <h3>For More Inspiration On Instagram </h3>
        <div class="insta-feed">
          <i class='fab fa-instagram' style='font-size:25px;color: #fff;'></i><h4>@myweddingpalette</h4>
        </div>
        <div class="insta-btn">
                    <a href="https://www.instagram.com/myweddingpaletteofficial/">Follow</a>
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
                <div class="heading text-center">
                    <h2><span>Follow </span>Us</h2>
                </div>
            </div>
            <div class="col-md-12 text-center follow-column">
                <img src="<?php echo base_url() . SERVICE ?>s1.png" class="img-fluid" alt="">
                <img src="<?php echo base_url() . SERVICE ?>s2.png" class="img-fluid" alt="">
                <img src="<?php echo base_url() . SERVICE ?>s3.png" class="img-fluid" alt="">
                <img src="<?php echo base_url() . SERVICE ?>s4.png" class="img-fluid" alt="">
                <img src="<?php echo base_url() . SERVICE ?>s5.png" class="img-fluid" alt="">
                <img src="<?php echo base_url() . SERVICE ?>s6.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); ?>
<script>
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        responsiveClass: true,
        responsive: {
            0: {
                items: 2,
            },
            600: {
                items: 3,
            },
            1000: {
                items: 6,
            }
        }
    })
</script>