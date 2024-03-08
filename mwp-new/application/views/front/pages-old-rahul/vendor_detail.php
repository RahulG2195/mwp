<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/style.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor1.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor-detail.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor.css' ?>">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

<section class="service_banner" id="service_banner" style="background-image: url('<?php echo base_url() . SERVICE . 'service_sub_banner.png' ?>')">
    <div class="overlay1">
       
    </div>
    <div class="vendor-banner-heading">
        <h1 >Best Bridal Makeup Artists in Mumbai</h1>
    </div>
</section>
<!-- <section class="bread_sec mt-md-2">
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
</section> -->
<section class="vendor_img_sec common_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <img src="<?php echo base_url() . VENDOR ?>Group 292.png" class="img-fluid vf_img" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>Group 292.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>Group 292.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>Group 292.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>Group 292.png" class="img-fluid vl_img" alt="">
                    </div>
                    <button class="btn show_vbtn">Show All Photos</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="vendor_details">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="vendor-detail-heading">
                    <h1>Victoria Makeovers</h1>
                    <p>Bridal Makeup Artist in New Delhi-110018 Tilak Nagar (West Delhi)</p>
                    <hr>
                </div>
                <div class="vrating">
                    <ul>
                        <li><p><i class="fas fa-star text-warning fa-xs"> </i> 4.9</p></li>
                        <li><p><strong>15</strong> Reviews</p></li>
                        <li><p><i class="fas fa-location"></i> Tilak Nagar, Delhi</p></li>
                    </ul>
                </div>
                <div class="vendor_tabs vendor-detail-tab">
                    <ul class="nav nav-tabs" id="vendor_tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active about-tab" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">About</a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link service-offered" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"> Services Offered </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab3-tab" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false">Pricing</a>
                        </li>
                    </ul>

                    <!-- Tab content -->
                    <div class="tab-content" id="myTabsContent">
                        <div class="tab-pane fade show active" id="tab1" role="tabpanel" aria-labelledby="tab1-tab">
                            <div class="about_vendor common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>About</h4>
                                <p>Victoria Makeovers is a freelance makeup artist based in Delhi. She is a certified makeup artist with a zeel for makeup and loves to doll up happy brides on their wedding day. She turned her passion into a profession and started her makeup venture. She believes that every bride is exceptional and she should be dressed- up uniquely at her wedding. Victoria Makeovers is one of the most ideal perfect for you if you are looking for an expert makeup artist in the area.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="service_vendor common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Services Offered</h4>
                                <p>"Victoria Makeovers is open to travel within the city and outside. She can also provide her services at your convenience at destination weddings. She is one of the perfect options if you hope for great results on a budget. She also helps you decide your look before your function. Her ultimate goal is to bring a smile to each bride's face. For that, she tries to give her best in terms of makeup, hair and garment draping. </p>
                                <p>She uses makeup products from all the most renowned brands so that you get gorgeous-looking skin without any harm. Get ready to glam up with Victoria Makeovers for all your wedding functions. Some of the services offered by Victoria Makeovers are:</p>

                                <div class="service_points">
                                    <div class="servie1">
                                        <ul>
                                            <li>Regular makeup</li>
                                            <li> Airbrush makeup</li>
                                            <li> HD makeup</li>
                                            <li> Party Makeup</li>
                                        </ul>
                                    </div>
                                    <div class="servie2">
                                        <ul>
                                            <li>Regular makeup</li>
                                            <li> Airbrush makeup</li>
                                            <li> HD makeup</li>
                                            <li> Party Makeup</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Make Up Techniques Know How</h4>
                                <p>Regular HD Airbrush</p>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Pricing</h4>
                                <div class="detail_price">
                                    <div class="price_option">
                                        <p>Bridal Make Up Starting Price</p>
                                        <h6>₹ 10,000</h6>
                                    </div>
                                    <div class="price_option">
                                        <p>Bridal Make Up Starting Price</p>
                                        <h6>₹ 10,000</h6>
                                    </div>
                                    <div class="price_option">
                                        <p>Bridal Make Up Starting Price</p>
                                        <h6>₹ 10,000</h6>
                                    </div>
                                </div>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Payment Options</h4>
                                <div class="payment_div">
                                    <div class="payment_opt">
                                        <ul>
                                            <li><img src="<?php echo base_url() . VENDOR ?>mobile-banking.png" class="img-fluid" alt=""> Net banking</li>
                                            <li><img src="<?php echo base_url() . VENDOR ?>cash.png" class="img-fluid" alt=""> Cash </li>
                                            <li><img src="<?php echo base_url() . VENDOR ?>check.png" class="img-fluid" alt=""> Cheque/ DD</li>
                                        </ul>
                                    </div>
                                    <div class="payment_opt">
                                        <ul>
                                            <li><img src="<?php echo base_url() . VENDOR ?>credit-card.png" class="img-fluid" alt=""> Debit/ Credit cards</li>
                                            <li><img src="<?php echo base_url() . VENDOR ?>wallet.png" class="img-fluid" alt=""> Mobile wallets</li>
                                            <li><img src="<?php echo base_url() . VENDOR ?>upi.png" class="img-fluid" alt=""> UPI</li>
                                        </ul>
                                    </div>
                                </div>

                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>% Advance</h4>
                                <p>50% - At the Time of booking </p>
                                <p>50% - One Week Prior Event</p>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Cancellation policy</h4>
                                <p>Non Refundable</p>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Features</h4>
                                <div class="ven_feat_div">
                                    <div class="vendor_feature_list">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> Multiple Payment Options Accepted </li>
                                            <li><i class="fa-solid fa-check"></i> Services Available at Venue and Salon</li>
                                            <li><i class="fa-solid fa-check"></i> Travels Outstation</li>
                                            <li><i class="fa-solid fa-check"></i> HD Make Up Expertise</li>
                                            <li><i class="fa-solid fa-check"></i> AirBrush Make Up Technique Available </li>
                                            <li><i class="fa-solid fa-check"></i> Friends and Family Package Available</li>
                                        </ul>
                                    </div>
                                    <div class="vendor_feature_list">
                                        <ul>
                                            <li><i class="fa-solid fa-check"></i> Provides Hairstyling Services</li>
                                            <li><i class="fa-solid fa-check"></i> Hair extensions Available</li>
                                            <li><i class="fa-solid fa-check"></i> Provides Eyelashes </li>
                                            <li><i class="fa-solid fa-check"></i> Provides Eyelanes </li>
                                            <li><i class="fa-solid fa-check"></i> Nail Extension Services Available </li>
                                            <li><i class="fa-solid fa-check"></i> Garment Draping Services Available</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                           <!-- <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Event Date</h4>
                                <form>
                                    <div class="row form-group date_pick_row">
                                        <div class="col-sm-5">
                                            <div class="input-group date datepicker" id="datepicker">
                                                <input type="text" class="form-control" placeholder="dd-mm-yyyy">
                                                <span class="input-group-append">
                                                    <span class="input-group-text bg-white d-block">
                                                        <i class="fa-solid fa-calendar"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <span>To</span>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-group date datepicker" id="datepicker">
                                                <input type="text" class="form-control" placeholder="dd-mm-yyyy">
                                                <span class="input-group-append">
                                                    <span class="input-group-text bg-white d-block">
                                                       <i class="fa-solid fa-calendar"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>-->
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="vendor_price">
                    <form action="">
                        <div class="price_drop_down">
                            <select name="vendor_price" class="vendor_price_drop" id="vendor_price">
                                <option value="">&#8377 5,000</option>
                                <option value="">&#8377 15,000</option>
                                <option value="">&#8377 25,000</option>
                            </select>
                            <p>Price starting from</p>
                            <hr>
                        </div>
                        <div class="vendor_time">
                            <span><i class="fa-solid fa-clock" style="font-size: 14px;color: #949494"></i> Business Hours</span>
                            <span class="vtime">11:00Hr to 19:00Hr</span>
                            <hr>
                        </div>
                        <div class="vendor_services">
                            <span>Service available:</span>
                            <label class="check_box">
                                <input type="checkbox" class="check_input" checked="checked">
                                <span class="checkmark"></span>
                                at Venue
                            </label>

                            <label class="check_box">
                                <input type="checkbox" class="check_input" checked="checked">
                                <span class="checkmark"></span>
                                at Salon
                            </label>
                        </div>
                        <div class="vendor_share">
                            <button><i class="fa-solid fa-share" style="font-size: 14px"></i> Share</button>
                            <button><i class="fa-solid fa-star" style="font-size: 14px"></i> Write Review</button>
                        </div>
                        <div class="vendor_cview">
                            <button><i class="fa-brands fa-whatsapp" style="font-size: 18px"></i> View content</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="bridal_sec common_Section">
    <div class="container">
        <div class="heading">
            <h2 style="color: #FD152A;font-weight: 700">Similar Bridal Makeup Artists in Mumbai (583):</h2>
            <span style="color: #111111;font-weight: 300;">The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog</span>
        </div>
        <div class="row">
           <div class="col-md-4 vendor-col">
                <span class="vendor-tag"><i class="fas fa-heart"></i> Most Popular</span>
                <a href="<?php echo base_url('vendor-detail')?>">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                       <img src="<?php echo  base_url() ?>assets/front/image/vendor/bridal_jewellery.jpeg" class="img-fluid" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h6>Bridal Jwellery</h6>
                        <h5 class="card-title font-weight-bold"><a>Jet Gems</a></h5>
                        <hr class="my-4"/>
                        <p class="mb-2"> <i class="fas fa-star text-warning fa-xs"> </i> 5.0</p>
                        <p class="card-text">
                           <b>7</b> Reviews
                        </p>
                        <p class="lead"><strong><i class="fas fa-location"></i> Bandra, Mumbai</strong></p>
                        <a href="#!" class="white-text d-flex justify-content-end view-vendor-detail">
                    <span class="fa-solid fa-caret-right" style="color:#FD4251; margin-top: 3px;margin-right: 5px"> <span></span><span></span> </span> View 
                  </a>
                    </div>
            </div>
                </a>
            </div>
            <div class="col-md-4 vendor-col">
                <span class="vendor-tag"><i class="fas fa-heart"></i> Most Popular</span>
                <a href="<?php echo base_url('vendor-detail')?>">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="<?php echo  base_url() ?>assets/front/image/vendor/bridal_jewellery3.jpeg" class="img-fluid" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h6>Bridal Jweellery</h6>
                        <h5 class="card-title font-weight-bold"><a>Romoch</a></h5>
                        <hr class="my-4"/>
                        <p class="mb-2"> <i class="fas fa-star text-warning fa-xs"> </i> 4.8</p>
                        <p class="card-text">
                           <b>80</b> Reviews
                        </p>
                        <p class="lead"><strong><i class="fas fa-location"></i> Santacruz West, Mumbai</strong></p>
                        <a href="#!" class="white-text d-flex justify-content-end view-vendor-detail">
                     <span class="fa-solid fa-caret-right" style="color:#FD4251; margin-top: 3px;margin-right: 5px"> <span></span><span></span> <!-- <i class="fa-solid fa-caret-right"></i> --> </span> View 
                  </a>
                    </div>
                </div>
                </a>
            </div>
            <div class="col-md-4 vendor-col">
                <span class="vendor-tag"><i class="fas fa-heart"></i> Most Popular</span>
                <a href="<?php echo base_url('vendor-detail')?>">
                <div class="card">
                    <div class="bg-image hover-overlay ripple" data-mdb-ripple-color="light">
                        <img src="<?php echo  base_url() ?>assets/front/image/vendor/bridal_jewellery2.jpeg" class="img-fluid" />
                        <a href="#!">
                          <div class="mask" style="background-color: rgba(251, 251, 251, 0.15);"></div>
                        </a>
                    </div>
                    <div class="card-body">
                        <h6>Wedding Caterers</h6>
                        <h5 class="card-title font-weight-bold"><a>Diagold Creation Pvt. Ltd.</a></h5>
                        <hr class="my-4"/>
                        <p class="mb-2"> <i class="fas fa-star text-warning fa-xs"> </i> 5.0</p>
                        <p class="card-text">
                           <b>80</b> Reviews
                        </p>
                        <p class="lead"><strong><i class="fas fa-location"></i> Andheri East, Mumbai</strong></p>
                        <a href="#!" class="white-text d-flex justify-content-end view-vendor-detail">
                            <span class="fa-solid fa-caret-right" style="color:#FD4251; margin-top: 3px;margin-right: 5px"> <span></span><span></span> <!-- <i class="fa-solid fa-caret-right"></i> --> </span> View 
                        </a>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
</section>
<section class="start_sec common_Section">
    <div class="container">
        <div class="row start_row">
            <div class="col-md-12 text-center vendor-get-started">
                <h6>MY WEDDING PALETTE</h6>
                <p>Get started on your journey toward finding the</p>
                <p><span style="font-weight:600">perfect vendors</span> for your <span style="font-weight:600">wedding day</span></p>
                <button class="btn get_start">Get Started</button>
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
                    <img src="<?php echo base_url() . SERVICE?>Group1438.png" class="img-fluid w-50" alt="">
                </div>
            </div>
            <div class="col-md-12 text-center">
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

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
    $(function() {
        $('.datepicker').datepicker();
    });
</script>