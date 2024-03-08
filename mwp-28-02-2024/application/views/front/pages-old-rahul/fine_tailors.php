<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<style>
    .img-fluid {
        margin: 10px;
    }
</style>
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
                        <li class="breadcrumb-item"><a href="#">Fine Tailors</a></li>
                        <li class="breadcrumb-item active" aria-current="page">Kota</li>
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
                <img src="<?php echo base_url() . VENDOR ?>FineTailors.jpeg" class="img-fluid vf_img" alt="">
            </div>
            <div class="col-md-6">
                <div class="row">
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>FineTailors.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>FineTailors.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>FineTailors.jpeg" class="img-fluid" alt="">
                    </div>
                    <div class="col-md-6">
                        <img src="<?php echo base_url() . VENDOR ?>FineTailors.jpeg" class="img-fluid vl_img" alt="">
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
                    <h1>Fine Tailors</h1>
                    <p>12/183, Gumanpura Road 324007 Kota Industrial Area (Kota)</p>
                    <hr>
                </div>
                <div class="vrating">
                    <span><i class="fa fa-star"></i></span>
                    <span><strong>1</strong> Reviews</span>
                    <span><i class="fa fa-location"></i>Kota Industrial Area</span>
                </div>
                <div class="vendor_tabs">
                    <ul class="nav nav-tabs" id="vendor_tabs" role="tablist">
                        <li class="nav-item" role="presentation">
                            <a class="nav-link active" id="tab1-tab" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="true">About </a>
                        </li>
                        <li class="nav-item" role="presentation">
                            <a class="nav-link" id="tab2-tab" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"> Designs/Product Offered</a>
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
                                <p>Fine Tailors is a designer couture label that makes fashion wear outfits for grooms and is located in the city of Kota. They offer grooms wear boutique’s collection and have a variety of different designs excellent for the wedding function. Be it an elegant sherwani or the perfect bandhgala, they design it all with creativity and passion. Every piece of clothing has something different that makes the groom consider and look his best on his unique day. Made with excellent essence fabrics and keeping in mind the vision and stipulations of the groom-to-be, they are unquestionably competent store ensuring client happiness.</p>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab2" role="tabpanel" aria-labelledby="tab2-tab">
                            <div class="service_vendor common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Designs/Product Offered</h4>
                                <p>
                                    The pioneers who lead the team at Fine Tailors have been crafting spectacular creations with a great thought of hues and colours. This beautiful brand has also given waves and received tremendous affection for creating beautiful clothes with popular Indian colours and elaborate embellishments. The prime focus is forever comforted whilst being in check with the most advanced styles in the wedding fashion business.
                                </p>
                                <p>
                                    With their extensive collection of striking ethnic wear, they are forced to have something for each celebration, be it traditional, contemporary. The wide range of designs given by Fine Tailors are listed below:
                                </p>
                                <div class="service_points">
                                    <div class="servie1">
                                        <ul>
                                            <li> Indo-western </li>
                                            <li> Chipkan style </li>
                                            <li> Achkan </li>
                                            <li> Jodhpuri </li>
                                            <li> Jacket style </li>
                                        </ul>
                                    </div>
                                    <div class="servie2">
                                        <ul>
                                            <li> Printed modern </li>
                                            <li> Sherwani </li>
                                            <li> Suits & tuxedos </li>
                                            <li> Bandhgala </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Product Types</h4>
                                <p>Sherwani, Suits & tuxedos, Bandhgala, Indo-western, Safas & turbans</p>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Pricing</h4>
                                <div class="detail_price">
                                    <div class="price_option">
                                        <p>Price From </p>
                                        <h6>₹ 10,000</h6>
                                    </div>
                                    <div class="price_option">
                                        <p>Price To </p>
                                        <h6>₹ 20,000</h6>
                                    </div>
                                    <!-- <div class="price_option">
                                        <p>Price range per gift/ pack for non-edible Groom Wear or favors</p>
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
                                <h4>Advance Booking %</h4>
                                <p>Please connect for the details </p>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Cancellation policy</h4>
                                <p>Please connect for the details</p>
                            </div>
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Features</h4>
                                <div class="ven_feat_div">
                                    <div class="vendor_feature_list">
                                        <ul>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Custom order </li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Fabrics Silk, Satin</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Appointment Required to visit the shop</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Multi-Occasion Attires Available</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Multiple Fabric Options Available</li>
                                        </ul>
                                    </div>
                                    <div class="vendor_feature_list">
                                        <ul>
                                            <li><i class="fa fa-check" aria-hidden="true"></i> Lightning Fast Delivery Time</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Ships Outstation</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Multiple Handwork/Designs/Prints Available</li>
                                            <li><i class="fa fa-check" aria-hidden="true"></i>Boutique type Store experience</li>
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
                                <option value="">&#8377 10,000</option>
                                <option value="">&#8377 20,000</option>
                            </select>
                            <p>Price starting from</p>
                            <hr>
                        </div>
                        <div class="vendor_time">
                            <span><i class="fa fa-clock-o" aria-hidden="true"></i>Business Hours</span>
                            <span class="vtime">11:00Hr to 22:00Hr</span>
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
            <h2>Similar Groom Wear Vendor in Mumbai (583):</h2>
            <span>The quick, brown fox jumps over a lazy dog. DJs flock by when MTV ax quiz prog</span>
        </div>
        <div class="row">
            <div class="col-md-4 my-md-4 my-2">
                <span class="vbadge"><i class="fa fa-heart-o"></i> Most Popular</span>
                <div class="card vf_img">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>nicky_prithyani.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Groom Wear</p>
                        <h4 class="card-title">Nicky Prithyani</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>3.9</li>
                            <li><strong>3</strong> Reviews</li>
                            <li><strong>Rs</strong> 10,000</li>
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
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>nicky_prithyani.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Groom Wear</p>
                        <h4 class="card-title">Nicky Prithyani</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>3.9</li>
                            <li><strong>3</strong> Reviews</li>
                            <li><strong>Rs</strong> 15,000</li>
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
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>nicky_prithyani.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Groom Wear</p>
                        <h4 class="card-title">Nicky Prithyani</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>3.9</li>
                            <li><strong>3</strong> Reviews</li>
                            <li><strong>Rs</strong> 15,000</li>
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
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>nicky_prithyani.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Groom Wear</p>
                        <h4 class="card-title">Nicky Prithyani</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>3.9</li>
                            <li><strong>3</strong> Reviews</li>
                            <li><strong>Rs</strong> 15,000</li>
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
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>nicky_prithyani.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Groom Wear</p>
                        <h4 class="card-title">Nicky Prithyani</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>3.9</li>
                            <li><strong>3</strong> Reviews</li>
                            <li><strong>Rs</strong> 15,000</li>
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
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>nicky_prithyani.jpeg" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Groom Wear</p>
                        <h4 class="card-title">Nicky Prithyani</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>3.9</li>
                            <li><strong>3</strong> Reviews</li>
                            <li><strong>Rs</strong> 15,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bandra, Mumbai</p>
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
                <a href="https://www.instagram.com/blessingsbytrupti/"> <img src="<?php echo base_url() . SERVICE ?>s2.png" class="img-fluid" alt=""></a>
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