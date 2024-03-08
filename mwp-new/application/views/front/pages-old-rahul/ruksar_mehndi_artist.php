<style>
    .img-fluid {
        margin: 10px;
    }
</style>

<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/style.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor.css' ?>">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">

<section class="service_banner" id="service_banner" style="background-image: url('<?php echo base_url() . SERVICE . 'service_sub_banner.png' ?>')">
    <div class="overlay1"></div>
</section>
<section class="bread_sec mt-md-2">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item"><a href="#">Home</a></li>
                        <li class="breadcrumb-item"><a href="#">Ruksar Mehndi Artist</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Bangalore</li>
                    </ol>
                </nav>
            </div>
        </div>
    </div>
</section>
<section class="vendor_img_sec common_section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <span class="vbadge"><i class="fa fa-heart-o"></i>Mehendi Artist</span>
                <img src="<?php echo base_url() . VENDOR ?>ruksar_mehndi_artist.jpeg" class="img-fluid vf_img" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>ruksar_mehndi_artist.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>ruksar_mehndi_artist.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>ruksar_mehndi_artist.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>ruksar_mehndi_artist.jpeg" class="img-fluid vl_img" alt="">
                    </div>
                    <button class="btn show_vbtn">Show All Photos</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="vendor_details common_section">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="heading">
                    <h1>Ruksar Mehndi Artist, Bangalore</h1>
                    <p>59, Aswath Katte Rd, New Gurappana Palya, 1st Stage, BTM 1st Stage, Bengaluru, Karnataka 560029</p>
                    <hr>
                </div>
                <div class="vrating">
                    <span><i class="fa fa-star"></i></span>
                    <span><strong>5</strong> Reviews</span>
                    <span><i class="fa fa-location"></i>Bangalore</span>
                </div>
                <div class="vendor_tabs">
                    <ul class="nav nav-tabs" id="vendor_tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">About </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"> Designs Offered</a>
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
                                <p>Ruksar Mehndi Artist is a mehndi service provider based out of Bangalore. What's best than having a name of your beloved imprinted on your hands while you contemplate the bond of togetherness with ease and allurement? If you are planning a grand wedding function and looking for a creative mehndi artist then Ruksar Mehndi Artist can help you in availing amazing designs and patterns with ease and happiness. They make the designs with amazing patterns which will seize your hearts with joy and cheerfulness.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="service_vendor common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Designs Offered</h4>
                                <p>
                                    sure to travel across the cities and offer an amazing time to you and your lovely ones and will provide a merry time with convenience.
                                </p>
                                <p>
                                    Ruksar Mehndi Artist provides a plethora of services and amenities which can be selected as per your needs and choices. Some of the services offered include:
                                </p>
                                <div class="service_points">
                                    <div class="servie1">
                                        <ul>
                                            <li> Indo-Arabic </li>
                                            <li> Arabic </li>
                                            <li> Pakistani </li>
                                            <li> Rajasthani </li>
                                            <li> Marwadi </li>
                                        </ul>
                                    </div>
                                    <div class="servie2">
                                        <ul> 
                                            <li> Moroccan </li>
                                            <li> Paisley </li>
                                            <li> Jewellery design </li>
                                            <li> Floral </li>
                                            <li> Radha-Krishna design </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Mehndi Designs</h4>
                                <p>Arabic, Indo-arabic, Indian</p>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Pricing</h4>
                                <div class="detail_price">
                                    <div class="price_option">
                                        <p>Bridal Mehendi Starting Price</p>
                                        <h6>₹ 3,500</h6>
                                    </div>
                                    <div class="price_option">
                                        <p>Price/ hand for family/ guests Range</p>
                                        <h6>₹250 - ₹499</h6>
                                    </div>
                                    <div class="price_option">
                                        <p>Bridal Mehendi Starting Price Range</p>
                                        <h6>₹2,500 - ₹4,999</h6>
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
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Cancellation policy</h4>
                                <p>Please contact for more details</p>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Features</h4>
                                <div class="ven_feat_div">
                                    <div class="vendor_feature_list">
                                        <ul>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Multiple Payment Options Accepted</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Expertise in 10+ Mehendi Styles</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Arabic design</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Rajasthani design </li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Floral Mehendi</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Indo-Arabic design</li>

                                        </ul>
                                    </div>
                                    <div class="vendor_feature_list">
                                        <ul>
                                            
                                        <li><i class="fa fa-check" aria-hidden="true"></i>Moroccan design</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Marwadi design</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Paisley designs</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Pakistani design</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Jewellery design</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Radha Krishan designs</li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Event Date</h4>
                                <form>
                                    <div class="row form-group date_pick_row">
                                        <div class="col-sm-5">
                                            <div class="input-group date datepicker" id="datepicker">
                                                <input type="text" class="form-control">
                                                <span class="input-group-append">
                                                    <span class="input-group-text bg-white d-block">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                        <div class="col-sm-2">
                                            <span>To</span>
                                        </div>
                                        <div class="col-sm-5">
                                            <div class="input-group date datepicker" id="datepicker">
                                                <input type="text" class="form-control">
                                                <span class="input-group-append">
                                                    <span class="input-group-text bg-white d-block">
                                                        <i class="fa fa-calendar"></i>
                                                    </span>
                                                </span>
                                            </div>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-5">
                <div class="vendor_price">
                    <form action="">
                        <div class="price_drop_down">
                            <select name="vendor_price" class="vendor_price_drop" id="vendor_price">
                                <option value="">&#8377 250</option>
                                <option value="">&#8377 300</option>
                                <option value="">&#8377 3500</option>
                                <option value="">&#8377 4999</option>
                            </select>
                            <p>Price starting from</p>
                            <hr>
                        </div>
                        <div class="vendor_time">
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>Business Hours</span>
                            <span class="vtime">11:00Hr to 19:00Hr</span>
                            <hr>
                        </div>
                        <div class="vendor_services">
                            <!-- <span>Service available:</span> -->
                            <!-- <label class="check_box">
                                <input type="checkbox" class="check_input" checked="checked">
                                <span class="checkmark"></span>
                                at Venue
                            </label> -->

                            <!-- <label class="check_box">
                                <input type="checkbox" class="check_input" checked="checked">
                                <span class="checkmark"></span>
                                at Salon
                            </label> -->
                        </div>
                        <div class="vendor_share">
                            <button><i class="fa fa-share-alt-square"></i>Share</button>
                            <button><i class="fa fa-star"></i>Write Review</button>
                        </div>
                        <div class="vendor_cview">
                            <button><i class="fa fa-whatsapp"></i>View content</button>
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
            <h2>Similar Mehendi Artist in Mumbai (583):</h2>
            <span>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog</span>
        </div>
        <div class="row">
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i>Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bridal-Mehandi-Artist-Atmiyata-Jain.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Mehendi Artist</p>
                        <h4 class="card-title">Bridal Mehandi Artist Atmiyata Jain</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>4</strong> Reviews</li>
                            <li><strong>Rs</strong> ₹2,500 - ₹4,999</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bangalore</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i>Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bridal-Mehandi-Artist-Atmiyata-Jain.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Mehendi Artist</p>
                        <h4 class="card-title">Bridal Mehandi Artist Atmiyata Jain</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>4</strong> Reviews</li>
                            <li><strong>Rs</strong> ₹2,500 - ₹4,999</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bangalore</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i>Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bridal-Mehandi-Artist-Atmiyata-Jain.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Mehendi Artist</p>
                        <h4 class="card-title">Bridal Mehandi Artist Atmiyata Jain</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>4</strong> Reviews</li>
                            <li><strong>Rs</strong> ₹2,500 - ₹4,999</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bangalore</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i>Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bridal-Mehandi-Artist-Atmiyata-Jain.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Mehendi Artist</p>
                        <h4 class="card-title">Bridal Mehandi Artist Atmiyata Jain</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>4</strong> Reviews</li>
                            <li><strong>Rs</strong> ₹2,500 - ₹4,999</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bangalore</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i>Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bridal-Mehandi-Artist-Atmiyata-Jain.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Mehendi Artist</p>
                        <h4 class="card-title">Bridal Mehandi Artist Atmiyata Jain</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>4</strong> Reviews</li>
                            <li><strong>Rs</strong> ₹2,500 - ₹4,999</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bangalore</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i>Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bridal-Mehandi-Artist-Atmiyata-Jain.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Mehendi Artist</p>
                        <h4 class="card-title">Bridal Mehandi Artist Atmiyata Jain</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>4</strong> Reviews</li>
                            <li><strong>Rs</strong> ₹2,500 - ₹4,999</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bangalore</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="start_sec common_Section">
    <div class="container">
        <div class="row start_row">
            <div class="col-md-12 text-center">
                <p>MY WEDDING PALETTE</p>
                <h2>Are You Ready To Bring Your Dream Theme To Life?</h2>
                <p>Are you ready to bring your dream theme to life?</p>
                <button class="btn get_start">Get Start</button>
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
                    <img src="<?php echo base_url() . SERVICE ?>Group1438.png" class="img-fluid w-50" alt="">
                </div>
            </div>
            <div class="col-md-12 text-center">
                <img src="<?php echo base_url() . SERVICE ?>s1.png" class="img-fluid" alt="">
                <a href="https://www.instagram.com/seedpaperindia/"><img src="<?php echo base_url() . SERVICE ?>s2.png" class="img-fluid" alt=""></a>
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