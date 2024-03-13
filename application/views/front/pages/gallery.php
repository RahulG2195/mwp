<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/style.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/home.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/version_2/gallery.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/common.css' ?>">
<!--<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">-->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>


<section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url()?>assets/front/image/hero-banner/MWP-gallery-page-hero-banner.jpg' )">
   <!--  <div class="overlay1"></div> -->
    <div class="banner-section-heading">
        <h1>Idea Palette</h1>
    </div>
</section>
<section class="bread_sec mt-md-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#" style="color:#FD4251">Gallery</a></li>
                       <!-- <li class="breadcrumb-item active" aria-current="page">Mumbai</li>-->
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
                    <div class="item fixed">
                        <!--<a href="<?php echo base_url('gallery-detail')?>">-->
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/gallery-image-1-thumbnail.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title active">All Categories</h4>
                            </div>
                        </div>
                       <!-- </a>-->
                    </div>
                    <div class="item">
                        <!--<a href="<?php echo base_url('gallery-detail')?>">-->
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/gallery-image-2-thumbnail.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Stage Decor</h4>
                            </div>
                        </div>
                        <!--</a>-->
                    </div>
                    <div class="item">
                        <!--<a href="<?php echo base_url('gallery-detail')?>">-->
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/gallery-image-3-thumbnail.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Entry Decor</h4>
                            </div>
                        </div>
                       <!-- </a>-->
                    </div>
                    <div class="item">
                        <!--<a href="<?php echo base_url('gallery-detail')?>">-->
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/gallery-image-4-thumbnail.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Haldi Decor</h4>
                            </div>
                        </div>
                       <!-- </a>-->
                    </div>
                    <div class="item">
                        <!--<a href="<?php echo base_url('gallery-detail')?>">-->
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/gallery-image-5-thumbnail.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Haldi Setup</h4>
                            </div>
                        </div>
                        <!--</a>-->
                    </div>
                    <div class="item">
                        <!--<a href="<?php echo base_url('gallery-detail')?>">-->
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/modern-backdrop-1.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Modern Backdrop</h4>
                            </div>
                        </div>
                        <!--</a>-->
                    </div>
                    <div class="item">
                        <!--<a href="<?php echo base_url('gallery-detail')?>">-->
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery-image/mandap-decor-2-1.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Mandap Decor</h4>
                            </div>
                        </div>
                        <!--</a>-->
                    </div>
                    <div class="item">
                        <!--<a href="<?php echo base_url('gallery-detail')?>">-->
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery/reception-decor-1-1.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Reception Decor</h4>
                            </div>
                        </div>
                        <!--</a>-->
                    </div>
                    <div class="item">
                        <!--<a href="<?php echo base_url('gallery-detail')?>">-->
                        <div class="card text-center">
                            <img class="card-img-top" src="<?php echo base_url() ?>assets/front/image/gallery/goa-weding-1-1.png" class="img-fluid" alt="">
                            <div class="card-body">
                                <h4 class="card-title">Destination Wedding</h4>
                            </div>
                        </div>
                        <!--</a>-->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="gallery_sec common_Section">
    <div class="container">
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
  <?php echo TrustedVendor($trusted_vendor['result'])?>
</section>
<section class="insta-feed-section">
 <div class="container">
    <div class="row insta-row">
  <div id="overlay"></div>

        <div class="col-md-12">
            <div class="insta-content">
                <h6>Follow Us</h6>
                <h3>For More Inspiration On Instagram </h3>
        <div class="insta-feed">
          <i class='fab fa-instagram' style='font-size:25px;color: #fff;'></i><h4>@myweddingpalette</h4>
        </div>
        <div class="insta-btn">
                    <a href="https://www.instagram.com/myweddingpaletteofficial/" target="_blank">Explore</a>
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
                    <h2 style="font-weight:800"><span>Follow </span>Us</h2>
                </div>
            </div>
            <div class="col-md-12 text-center follow-column">
               <a href="https://www.facebook.com/myweddingpaletteofficial" target="_blank"> <img src="<?php echo base_url() . SERVICE ?>s1.png" class="img-fluid" alt=""></a>
                <a href="https://www.instagram.com/myweddingpaletteofficial/" target="_blank"> <img src="<?php echo base_url() . SERVICE ?>s2.png" class="img-fluid" alt=""></a>
               <!-- <img src="<?php echo base_url() . SERVICE ?>s3.png" class="img-fluid" alt="">-->
                <a href="https://mail.google.com/mail/?view=cm&amp;fs=1&amp;to=mwp@myweddingpalette.com"><img src="https://myweddingpalette.com/assets/front/image/service-2/google-icon.png" class="social-icon-img wow bounceIn animated animated" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;"></a>
                <a href="https://in.pinterest.com/myweddingpalette/"><img src="https://myweddingpalette.com/assets/front/image/service/pinterest.png" class="social-icon-img wow bounceIn animated animated" data-wow-delay="1s" style="visibility: visible;-webkit-animation-delay: 1s; -moz-animation-delay: 1s; animation-delay: 1s;"></a>
                <!--<img src="<?php echo base_url() . SERVICE ?>s6.png" class="img-fluid" alt="">-->
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); ?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script>
    $('.gallery_cat').owlCarousel({
        loop: true,
        autoplay: true,
        autoplayTimeout: 3000,
        autoplayHoverPause: true,
        margin: 10,
        nav: false,
        dots: true,
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