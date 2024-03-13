<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<style>
    .img-fluid {
        margin: 10px;
    }
</style>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/style.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor1.css' ?>">

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
                        <li class="breadcrumb-item"><a href="#">Vendor</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Diagold Creation Pvt. Ltd.</li>
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
                <img src="<?php echo base_url() . VENDOR ?>bridal-jewellery-diagold-creation-pvt-ltd-ring-design.jpeg" class="img-fluid vf_img" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>bridal-jewellery-diagold-creation-pvt-ltd-ring-design.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>bridal-jewellery-diagold-creation-pvt-ltd-ring-design.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>bridal-jewellery-diagold-creation-pvt-ltd-ring-design.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>bridal-jewellery-diagold-creation-pvt-ltd-ring-design.jpeg" class="img-fluid vl_img" alt="">
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
                    <h1>Diagold Creation Pvt. Ltd.</h1>
                    <p>Unit No. 204, Tower No. 1, Seepz ++ 400096 Andheri East (Mumbai)</p>
                    <hr>
                </div>
                <div class="vrating">
                    <span><i class="fa fa-star"></i></span>
                    <span><strong>6</strong> Reviews</span>
                    <span><i class="fa fa-location"></i>Andheri East, Mumbai</span>
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
                                <p>Diagold Creation Pvt. Ltd. is a jewellery brand based out of Mumbai. They believe jewellery should be as unique as the moments, memories, and people that inspire it. From bridal essentials to white diamond classics to colour stone collections, Diagold Creation Pvt. Ltd. designs mirror the deepest desires of the fashion-smitten. While on the lookout for a store in the city that can offer you a wonderful collection of bridal jewellery, then your search can end here.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="service_vendor common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Designs Offered</h4>
                                <p>
                                    Diagold Creation Pvt. Ltd. have a comprehensive product line offering over 28000 styles to choose from for all customers importing from India. Their diverse jewellery product range consists of rings, earrings, necklaces, bracelets, pendants, bangles, dog tags, cufflinks, etc. They also do customer-specific developments where they collaborate closely with the customers to deliver the desired results
                                </p>
                                <p>
                                    From everyday wear to special events, Diagold Creation Pvt. Ltd. has every type of ornaments for every mood and personality. The various categories of jewellery offered by them include the following:
                                </p>
                                <div class="service_points">
                                    <div class="servie1">
                                        <ul>
                                            <li> Solitaires</li>
                                            <li> Earrings </li>
                                            <li> Pendants </li>
                                            <li>Finger rings</li>
                                            <li> Chain</li> 
                                        </ul>
                                    </div>
                                    <div class="servie2">
                                        <ul>
                                            <li>Neckwear & sets</li>
                                            <li>Bangles & bracelets</li>
                                            <li>Pendant & earring sets</li>
                                            <li>Nose pin</li>
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
                                        <p>Jewellery Starting Price</p>
                                        <h6>₹ 10000 Onwards</h6>
                                    </div>
                                    <!-- <div class="price_option">
                                        <p>Price range per kg for edible Bridal Jewellery or favors </p>
                                        <h6>₹ 200 to ₹ 499 </h6>
                                    </div> -->
                                    <!-- <div class="price_option">
                                        <p>Price range per gift/ pack for non-edible Bridal Jewellery or favors</p>
                                        <h6>₹500 - ₹999</h6>
                                    </div> -->
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
                                <p>No Cancellation</p>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Features</h4>
                                <div class="ven_feat_div">
                                    <div class="vendor_feature_list">
                                        <ul>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> 20 years+ of Experience </li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Multiple Payment Options Accepted</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Multiple Jewellery Accessories Availabe</li> 
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Precious and Semi Precious Stone Jewellery</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Necklaces </li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Earrings </li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Wedding Rings </li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Nose Rings</li> 
                                        </ul>
                                    </div>
                                    <div class="vendor_feature_list">
                                        <ul>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Multiple Design Styles Available</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Multiple Jewellery Types Available</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Diamond Jewellery</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Meenakari Jewellery</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Pendant Sets </li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Solitaires</li> 
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Bracelets</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Antique Jewellery</li>
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
                                <option value="">&#8377 10000</option>
                                <!-- <option value="">&#8377 250</option>
                                <option value="">&#8377 350</option>
                                <option value="">&#8377 499</option>
                                <option value="">&#8377 500</option>
                                <option value="">&#8377 999</option> -->
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
            <h2>Similar Wedding Bridal Jewellery salers in Mumbai (583):</h2>
            <span>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog</span>
        </div>
        <div class="row">
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>jet-gems-bridal-jewellery.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Bridal Jewellery</p>
                        <h4 class="card-title">Jet Gems</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>7</strong> Reviews</li>
                            <li><strong>Rs</strong> 1000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bandra, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>jet-gems-bridal-jewellery.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Bridal Jewellery</p>
                        <h4 class="card-title">Jet Gems</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>7</strong> Reviews</li>
                            <li><strong>Rs</strong> 1000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bandra, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>jet-gems-bridal-jewellery.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Bridal Jewellery</p>
                        <h4 class="card-title">Jet Gems</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>7</strong> Reviews</li>
                            <li><strong>Rs</strong> 1000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bandra, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>bridal-jewellery-romoch-necklace-earrings.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Bridal Jewellery</p>
                        <h4 class="card-title">Romoch</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>2</strong> Reviews</li>
                            <li><strong>Rs</strong> 3000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Santacruz West, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>bridal-jewellery-romoch-necklace-earrings.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Bridal Jewellery</p>
                        <h4 class="card-title">Romoch</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>2</strong> Reviews</li>
                            <li><strong>Rs</strong> 3000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Santacruz West, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>bridal-jewellery-romoch-necklace-earrings.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Bridal Jewellery</p>
                        <h4 class="card-title">Romoch</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>5.0</li>
                            <li><strong>2</strong> Reviews</li>
                            <li><strong>Rs</strong> 3000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Santacruz West, Mumbai</p>
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