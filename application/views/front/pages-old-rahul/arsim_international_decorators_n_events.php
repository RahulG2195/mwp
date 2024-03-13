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
                        <li class="breadcrumb-item"><a href="#">Arsim International Decorators & Events</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Lucknow</li>
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
                <img src="<?php echo base_url() . VENDOR ?>decorators-arsim-international-decorators-events-weddingdecor.jpeg" class="img-fluid vf_img" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>decorators-arsim-international-decorators-events-weddingdecor.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>decorators-arsim-international-decorators-events-weddingdecor.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>decorators-arsim-international-decorators-events-weddingdecor.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>decorators-arsim-international-decorators-events-weddingdecor.jpeg" class="img-fluid vl_img" alt="">
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
                    <h1>Arsim International Decorators & Events</h1>
                    <p>Near Ram Krishnamath, Bans Mandi, Nirala Nagar 201301 Mahanagar (Lucknow)</p>
                    <hr>
                </div>
                <div class="vrating">
                    <span><i class="fa fa-star"></i></span>
                    <span><strong>15</strong> Reviews</span>
                    <span><i class="fa fa-location"></i>Mahanagar, Lucknow</span>
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
                                <p>Arsim International Decorators & Events is a company based in Lucknow that offers you custom services for your wedding decorations. They have a series of services you can pick as per your liking. You can witness wedding celebrations in your life that are planned and organised to perfection. Creating a unique and beautiful experience for everyone is equally important. If you are looking for a decor team that can offer you what you wish, you can go for this one.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="service_vendor common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Designs/ Products/ services Offered</h4>
                                <p>
                                    Arsim International Decorators & Events will ensure that all your wedding decoration needs are catered to in the right way. Their creative team will create the whole decor as per your choices and themes. All the decor and set are made with good quality material ensuring that your wedding is one of a kind. Plan the grandest of celebrations with the most pleasing decor offered by this decor company.
                                </p>
                                <p>
                                    Arsim International Decorators & Events and the team is open to travel. You can hire them for services within the city and the outstation destinations. All the services included in their packages are.
                                </p>
                                <div class="service_points">
                                    <div class="servie1">
                                        <ul>
                                            <li>Ideation & design</li>
                                            <li>Lighting </li>
                                            <li>Flower set up</li>
                                            <li>Entrance décor</li>
                                            <li>Mandap setup </li>
                                        </ul>
                                    </div>
                                    <div class="servie2">
                                        <ul>
                                            <li>Table décor </li>
                                            <li> Centrepieces </li>
                                            <li>Photobooth </li>
                                            <li>Sound setup</li>
                                            <li>Venue decoration</li>
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
                                        <h6>₹ 50,000</h6>
                                    </div>
                                    <div class="price_option">
                                        <p>Flower based traditional decoration</p>
                                        <h6>₹ 200000</h6>
                                    </div>
                                    <div class="price_option">
                                        <p>Price To</p>
                                        <h6>₹ 299999</h6>
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
                                <p>25% - At the Time of booking </p> 
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
                                            <li><i class="fa fa-check" aria-hidden="true"></i> 5 years+ of Experience</li>
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
                                <option value="">&#8377 50,000</option>
                                <option value="">&#8377 200,000</option>
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
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>wedding-decoration-red-roses-events-stage-decor.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Decorators</p>
                        <h4 class="card-title">Red Roses Events, Kondhwa</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>4</strong> Reviews</li>
                            <li><strong>Rs</strong> 55,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Kondhwa, Pune</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>wedding-decoration-red-roses-events-stage-decor.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Decorators</p>
                        <h4 class="card-title">Red Roses Events, Kondhwa</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>4</strong> Reviews</li>
                            <li><strong>Rs</strong> 55,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Kondhwa, Pune</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>wedding-decoration-red-roses-events-stage-decor.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Decorators</p>
                        <h4 class="card-title">Red Roses Events, Kondhwa</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>4</strong> Reviews</li>
                            <li><strong>Rs</strong> 55,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Kondhwa, Pune</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>wedding-decoration-red-roses-events-stage-decor.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Decorators</p>
                        <h4 class="card-title">Red Roses Events, Kondhwa</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>4</strong> Reviews</li>
                            <li><strong>Rs</strong> 55,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Kondhwa, Pune</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>wedding-decoration-red-roses-events-stage-decor.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Decorators</p>
                        <h4 class="card-title">Red Roses Events, Kondhwa</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>4</strong> Reviews</li>
                            <li><strong>Rs</strong> 55,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Kondhwa, Pune</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>wedding-decoration-red-roses-events-stage-decor.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Decorators</p>
                        <h4 class="card-title">Red Roses Events, Kondhwa</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>4</strong> Reviews</li>
                            <li><strong>Rs</strong> 55,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Kondhwa, Pune</p>
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