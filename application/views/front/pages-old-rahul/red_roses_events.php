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
                        <li class="breadcrumb-item"><a href="#">Red Roses Events, Kondhwa</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Pune</li>
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
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <img src="<?php echo base_url() . VENDOR ?>wedding-decoration-red-roses-events-stage-decor.jpeg" class="img-fluid vf_img" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>wedding-decoration-red-roses-events-stage-decor.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>wedding-decoration-red-roses-events-stage-decor.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>wedding-decoration-red-roses-events-stage-decor.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>wedding-decoration-red-roses-events-stage-decor.jpeg" class="img-fluid vl_img" alt="">
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
                    <h1>Red Roses Events</h1>
                    <p>Office 2, Lane 9, Shivneri Nagar, Khurd 411048 Kondhwa (Pune)</p>
                    <hr>
                </div>
                <div class="vrating">
                    <span><i class="fa fa-star"></i></span>
                    <span><strong>4</strong> Reviews</span>
                    <span><i class="fa fa-location"></i>Kondhwa, Pune</span>
                </div>
                <div class="vendor_tabs">
                    <ul class="nav nav-tabs" id="vendor_tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">About </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"> Services Offered</a>
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
                                <p>Red Roses Events is a wedding decoration company based in the city of Pune. Weddings are once in a lifetime vent and hence everything has to be planned with flawlessness. Decor plays one of the most significant aspects of the planning process. therefor if you are on the lookout for a wedding decor company that can decorate your wedding venue for all your occasions, then Red Roses Events is the name that you should trust. From seating arrangments to stage decor, their highly imaginative team will take care of everything so that you can just sit back and enjoy with your loved ones.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="service_vendor common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Designs/ Products/ services Offered</h4>
                                <p>
                                    The team of experts will work according to your needs and blend in some of their artistic and inventive ideas to offer you a unique outcome for your special day. For your ease and comfort, the team of professionals are also ready to travel with you both within the city as well as outside. From colourful drapings to mandaps setups, they can take care of everything so that your venue looks like a magnificently painted canvas.
                                </p>
                                <p>
                                    Red Roses Events offer you a variety of services for you to choose from. All the services that can be customised and personalised which they can offer you for your wedding at affordable rates are:
                                </p>
                                <div class="service_points">
                                    <div class="servie1">
                                        <ul>
                                            <li> Floral </li>
                                            <li> Rajasthani </li>
                                            <li> Punjabi </li>
                                            <li> South Indian </li>
                                            <li> Royal </li>
                                            <li> Bollywood </li>
                                        </ul>
                                    </div>
                                    <div class="servie2">
                                        <ul>
                                            
                                        <li> Art deco/ Gatsby </li>
                                            <li> Vintage </li>
                                            <li> Greenhouse </li>
                                            <li> Metallic </li>
                                            <li> Rustic </li>
                                            <li> Sundowner </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <!-- <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Make Up Techniques Know How</h4>
                                <p>Regular HD Airbrush</p>
                            </div> -->
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Pricing</h4>
                                <div class="detail_price">
                                    <div class="price_option">
                                        <p>Venue Décor Starting Price</p>
                                        <h6>₹ 55,000</h6>
                                    </div>
                                    <div class="price_option">
                                        <p>Flower based traditional decoration</p>
                                        <h6>₹ 1,50,000</h6>
                                    </div>
                                    <div class="price_option">
                                        <p>Price To</p>
                                        <h6>₹ 1,74,999</h6>
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
                                <p>50% - At the Time of booking</p>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Cancellation policy</h4>
                                <p>Please connect to discuss</p>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Features</h4>
                                <div class="ven_feat_div">
                                    <div class="vendor_feature_list">
                                        <ul>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> 15 years+ of Experience</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Multiple Payment Options Accepted</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Multiple Modern Decoration Styles Expertise</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Multiple Traditional Decoration Types Available</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Floral Decoration</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Rajasthani Decoration</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Punjabi Decoration</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> South Indian Decoration</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Royal Style Decoration</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Bollywood Style Decoration</li>
                                        </ul>
                                    </div>
                                    <div class="vendor_feature_list">
                                        <ul>

                                            <li><i class="fa fa-check" aria-hidden="true"></i> Art / Gatsby Decoration Style</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Vintage Decoration Style</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Bohemian Decoration Style</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Greenhouse Decoration Style</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Moroccan Decoration Style</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Metallic Decoration Style</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Theatrical Decoration Style</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Rustic Decoration Style</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Sundowner Decoration Style</li>
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
                                <option value="">&#8377 25,000</option>
                                <option value="">&#8377 1,74,999</option>
                            </select>
                            <p>Price starting from</p>
                            <hr>
                        </div>
                        <div class="vendor_time">
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>Business Hours</span>
                            <span class="vtime">11:00Hr to 20:00Hr</span>
                            <hr>
                        </div>
                        <!-- <div class="vendor_services">
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
                        </div> -->
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
            <h2>Similar Decorators in Mumbai (583):</h2>
            <span>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog</span>
        </div>
        <div class="row">
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>decorators-arsim-international-decorators-events-weddingdecor.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Decorators</p>
                        <h4 class="card-title">Arsim International Decorators & Events</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>53</strong> Reviews</li>
                            <li><strong>Rs</strong> 55,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lacknow</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>decorators-arsim-international-decorators-events-weddingdecor.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Decorators</p>
                        <h4 class="card-title">Arsim International Decorators & Events</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>53</strong> Reviews</li>
                            <li><strong>Rs</strong> 55,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lacknow</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>decorators-arsim-international-decorators-events-weddingdecor.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Decorators</p>
                        <h4 class="card-title">Arsim International Decorators & Events</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>53</strong> Reviews</li>
                            <li><strong>Rs</strong> 55,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lacknow</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>decorators-arsim-international-decorators-events-weddingdecor.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Decorators</p>
                        <h4 class="card-title">Arsim International Decorators & Events</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>53</strong> Reviews</li>
                            <li><strong>Rs</strong> 55,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lacknow</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>decorators-arsim-international-decorators-events-weddingdecor.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Decorators</p>
                        <h4 class="card-title">Arsim International Decorators & Events</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>53</strong> Reviews</li>
                            <li><strong>Rs</strong> 55,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lacknow</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>decorators-arsim-international-decorators-events-weddingdecor.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Decorators</p>
                        <h4 class="card-title">Arsim International Decorators & Events</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>53</strong> Reviews</li>
                            <li><strong>Rs</strong> 55,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Lacknow</p>
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
                <a href="https://www.facebook.com/RedRosesEvents/"><img src="<?php echo base_url() . SERVICE ?>s1.png" class="img-fluid" alt=""></a>
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