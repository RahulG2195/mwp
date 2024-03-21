<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<!-- <link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/style.css' ?>"> -->
<!-- <link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor1.css' ?>"> -->
<!-- <link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor-detail.css' ?>"> -->
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/common.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendors.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor-detail-query-fomr.css' ?>">
<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/css/bootstrap-datepicker.min.css">
<style>
    /*.price_sec_desk{*/
    /*    position:sticky;*/
    /*    top: 20px;*/
    /*}*/
    @media only screen and (max-width: 600px){
        .cat_price {
        font-size: 14px;
        text-wrap: wrap !important;
        }
    }
    
</style>
<section class="service_banner d-none mt-5" id="service_banner" style="background-image: url('<?php echo base_url() . SERVICE . 'service_sub_banner.png' ?>')">
    <div class="overlay1">

    </div>
    <div class="vendor-banner-heading">
        <h1>Best <?php echo $single_data[0]['cat_name'] ?></h1>
    </div>
</section>
<?php

// pr($single_data, 'exit');
// get vendor short cut name for redirection 
$vendor_type = $this->uri->segment(2);
// $features = array();

// features array to display vendor feature
$features = explode(',', $single_data[0]["features"]);
$features = array_merge($features, array($single_data[0]['no_of_yrs']));

$category = $single_data[0]['category'];
// pr( $single_data, '');
?>
<section class="vendor_details common_section  mb-5">
    <div class="container ved_container">
        <div class="row">
            <div class="col-lg-7 left_col">
                <div class="vendor_img mb-3">
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                        <span class="vbadge"><i class="fa fa-heart-o"></i> <?php echo $single_data[0]['tag_name']; ?></span>
                        <div class="carousel-inner">
                            <?php
                            
                            // image slider 
                            if (!empty($single_data[0]['images'])) {
                                
                            

                                $image = explode(',', $single_data[0]['images']);
                                $count_img = count($image);

                                $i = 1;
                                foreach ($image as $img) {
                                    // echo $img;exit;
                                $path = FCPATH . 'uploads/vendors/' . $img; 
                                    if (file_exists($path)) {
                                        echo '<div class="carousel-item ' . ($i == 1 ? 'active' : '') . '">
                                        <img class="img-fluid vf_img w-100" src="' . base_url() . 'uploads/vendors/' . $img . '" class="img-fluid Card image cap">
                                    </div>';
                                    } else {
                                        echo '<div class="carousel-item ' . ($i == 1 ? 'active' : '') . '">
                                        <img class="img-fluid vf_img w-100" src="' . base_url() . 'uploads/vendors/MWP NA.png" class="img-fluid Card image cap">
                                    </div>';
                                    }
                                    $i++;
                                }
                            } else {
                                echo '<img class="img-fluid vf_img w-100" src="' . base_url() . 'uploads/MWP NA.png" class="img-fluid Card image cap">';
                            }

                            ?>
                        </div>
                    </div>
                    <!-- <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="sr-only">Previous</span>
                        </a>
                        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="sr-only">Next</span>
                        </a> -->
                </div>
                <div class="vendor-detail-heading">
                    <h1><?php echo isset($single_data[0]['vendor_name']) ? $single_data[0]['vendor_name'] : '' ?></h1>
                    <?php 
                         if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true) 
                          {  ?>
                            <a href="javascript:void(0);" data-toggle="modal" data-target="#Loginmodel" class="white-text d-flex justify-content-end view-category view-category-wishlist" style="color: #ff142a !important;margin-top: -30px;">
                                <i class="fas fa-heart" style="margin-top: 5px;"></i>
                            </a>
                         <?php }
                          else
                          {  ?>
                            <input type="hidden" value="<?php echo $single_data[0]['vendor_seo_url']; ?>" name="vendor_seo_url" id="wishlist-value">
                            <a href="javascript:void(0);"   class="white-text d-flex justify-content-end view-category wishlist-vendor view-category-wishlist" style="color: #ff142a !important;margin-top: -30px;">
                                <i class="fas fa-heart" style="margin-top: 5px;"></i>
                            </a>
                        <?php 
                          } ?>

                    <p><?php echo isset($single_data[0]['address']) ? $single_data[0]['address'] : '' ?></p>
                    <hr>
                </div>
                <div class="vrating">
                    <ul>
                        <li>
                            <p><i class="fas fa-star text-warning fa-xs"> </i> <?php echo isset($single_data[0]['rating']) ? (($single_data[0]['rating'] > 0) ? $single_data[0]['rating'] : '-') . " | " : '' ?></p>
                        </li>
                        <li>
                            <p><strong><?php echo isset($single_data[0]['review']) ? $single_data[0]['review'] : '' ?></strong> Reviews | </p>
                        </li>
                        <li>
                            <p><strong class="price_range">
                                    <?php
                                    if (isset($single_data[0]['price_range'])) {
                                        if ($single_data[0]['price_range'] == '₹') {
                                            echo $single_data[0]['price_range'] . '(Budget friendly)';
                                        } elseif ($single_data[0]['price_range'] == '₹₹') {
                                            echo $single_data[0]['price_range'] . '(Value for money)';
                                        } elseif ($single_data[0]['price_range'] == '₹₹₹') {
                                            echo $single_data[0]['price_range'] . '(Exclusive / Premium)';
                                        }
                                    }
                                    ?> </strong> |</p>
                        </li>
                        <li>
                            <p><i class="fas fa-location"></i> <?php echo isset($single_data[0]['area']) ? $single_data[0]['area'] : '' ?>, <?php echo isset($single_data[0]['city_name']) ? $single_data[0]['city_name'] : '' ?></p>
                        </li>
                    </ul>
                </div>
                <div class="right_col mobile_area">
                    <div class="vendor_price">
                        <!-- <form action=""> -->
                        <p class="badge text-white"></p>
                        <div class="price_drop_down">
                            <h5 class="vendor_price_drop" id="vendor_price">
                                <!-- &#8377  -->
                                <?php
                                $statp = preg_replace('/[^0-9-]/', '', $single_data[0]['dv_start_price']);
                                $end_price = preg_replace('/[^0-9-]/', '', $single_data[0]['end_price']);
                                if (is_numeric($statp) && is_numeric($end_price)) {
                                    $range = '₹' . number_format($statp) . ' - ' . '₹' . number_format($end_price);
                                } elseif (is_numeric($statp)) {
                                    $range = '₹' . number_format($statp) . ' ' . $end_price;
                                } elseif (is_numeric($end_price)) {
                                    $range = $statp . '' . '₹' . number_format($end_price);
                                }
                                echo $range;
                                ?>
                            </h5>
                            <p>Price Range</p>
                            <hr>
                        </div>
                        <div class="vendor_time">
                            <span class="bhr"><i class="fa-solid fa-clock" style="font-size: 14px;color: #949494"></i> Business Hours</span>
                            <?php

                            $business_day = !empty($single_data[0]['business_day']) ? array_map('trim', explode(',', $single_data[0]['business_day'])) : '';
                            $business_hr = !empty($single_data[0]['business_hr']) ? array_map('trim', explode(',', $single_data[0]['business_hr'])) : '';
                            // $business_hr = explode(',', $single_data[0]['business_hr']);
                            // Ensure both arrays have the same length
                            if (count($business_day) < count($business_hr)) {
                                // If $business_day has fewer elements, pad it with default values
                                $business_day = array_pad($business_day, count($business_hr), '');
                            } elseif (count($business_hr) < count($business_day)) {
                                // If $business_hr has fewer elements, pad it with default values
                                $business_hr = array_pad($business_hr, count($business_day), 'Closed');
                            }
                            // pr($business_day, '');

                            // pr($business_hr, '');

                            if ($business_day !== '') {
                                foreach (array_combine($business_day, $business_hr) as $key => $value) {
                                    echo '<span class="vtime">' . $key . ':<span> ' . $value . '</span></span>';
                                }
                            }
                            ?>
                            <hr>
                        </div>
                        <div class="social_work">
                            <div class="slinks d-flex">
                                <?php
                                // echo $single_data[0]['website'];
                                $social_media = array_combine(explode(',', $single_data[0]['social_media']), explode(',', $single_data[0]['social_link']));

                                ?>
                                <a href="<?php echo (isset($social_media['facebook']) && !empty($social_media['facebook'])) ? $social_media['facebook'] : '#!' ?>" target="_blank">
                                    <img src="<?php echo base_url() . 'assets/front/image/icon/vdetail_icon/Facebook.png' ?>" class="img-fluid" alt="">
                                </a>
                                <a href="<?php echo (isset($social_media['Instagram']) && !empty($social_media['Instagram'])) ? $social_media['Instagram'] : '#!' ?>" target="_blank">
                                    <img src="<?php echo base_url() . 'assets/front/image/icon/vdetail_icon/Insta.png' ?>" class="img-fluid" alt="">
                                </a>
                                <a href="<?php echo (isset($social_media['pinterest']) && !empty($social_media['pinterest'])) ? $social_media['pinterest'] : '#!' ?>" target="_blank">
                                    <img src="<?php echo base_url() . 'assets/front/image/icon/vdetail_icon/Pinterest.png' ?>" class="img-fluid" alt="">
                                </a>
                                <a href="<?php echo !empty($single_data[0]['website']) ? $single_data[0]['website'] : '#!' ?>" target="_blank">
                                    <img src="<?php echo base_url() . 'assets/front/image/icon/vdetail_icon/website.png' ?>" class="img-fluid" alt="">
                                </a>
                            </div>
                            <hr>
                        </div>
                        <?php
                        if (isset($category) && $category == '5') {
                        ?>
                            <!--<div class="vendor_services">-->
                            <!--    <span>Service available:</span>-->
                            <!--    <label class="check_box">-->
                            <!--        <input type="checkbox" class="check_input" checked="checked">-->
                            <!--        <span class="checkmark"></span>-->
                            <!--        at Venue-->
                            <!--    </label>-->

                            <!--    <label class="check_box">-->
                            <!--        <input type="checkbox" class="check_input" checked="checked">-->
                            <!--        <span class="checkmark"></span>-->
                            <!--        at Salon-->
                            <!--    </label>-->
                            <!--</div>-->
                        <?php } ?>
                        <div class="vendor_share">
                            <button><i class="fa-solid fa-share" style="font-size: 14px"></i> Share</button>
                            <button><i class="fa-solid fa-star" style="font-size: 14px"></i> Write Review</button>
                        </div>
                        <div class="vendor_cview d-md-flex">
                            <!-- <i class="fa-brands fa-whatsapp" style="font-size: 18px"></i>  -->
                            <?php if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true)
                                { ?>
                                        <button data-toggle="modal" data-target="#myModal">View Contact No</button>
                               <?php }
                                elseif(isset($single_data['phone_no']) && !empty($single_data['phone_no'])){ 
                                  echo  '<a href="tel:'.$single_data['phone_no'].'"><button >'. $single_data['phone_no'] .'</button></a>';
                                  }else{
                                        echo  '<button>Unavailable</button>';
                                  }

                                ?>
                            <!--<button id="vendorquerysubmitbtn" onclick="showqueryform();"> Send Query</button>-->
                            <button class="vendorquerysubmitbtn"> Send Query</button>
                        </div>
                        <!-- </form> -->
                    </div>
                    <div class="mobile-form-sec" style="display: none; margin-top:22px;">
                        <form name="vendordetail" action="<?php echo base_url() ?>VendorQuery/vendorquerysubmit" method="POST">
                            <div class="container">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 style="color:#ee182b;" class="query-form-title">Personal Information</h6>
                                        <hr style="border-bottom: 1px solid #ee182b;">
                                    </div>
                                    <hr style="color: #ee182b;">

                                    <div class="col-md-12">
                                        <p class="query-form-label">Name</p>
                                        <input type="text" id="weddingplanningfname" class="form-control query-form-input mob_inp" name="query-form-name" required>
                                    </div>

                                    <div class="col-12">
                                        <p class="query-form-label">Phone Number</p>
                                        <input type="text" id="weddingplanningphoneno" class="form-control query-form-input" name="query-form-phone-no" required>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="query-form-label">Email Address</p>
                                        <input type="text" id="weddingplanningemail" class="form-control query-form-input" name="query-form-email" required>
                                    </div>
                                    <div class="col-12">
                                        <p class="query-form-label">Function date</p>
                                        <input type="date" id="query-form-date" class="form-control query-form-input" name="query-form-date" required>
                                    </div>
                                    <div class="col-md-12">
                                        <p class="query-form-label">Vendor name</p>
                                        <input type="hidden" id="weddingplanningemail" class="form-control query-form-input" name="vendor-name" value="<?php echo isset($single_data[0]['vendor_name']) ? $single_data[0]['vendor_name'] : '' ?>">
                                    </div>
                                    <div class="col-12">
                                        <p class="query-form-label">Message</p>
                                        <textarea id="query-form-date" class="form-control query-form-input" name="vendor-query-form-message" required></textarea>
                                    </div>
                                    <div class="col-12" style="text-align: left;">
                                        <button type="submit" class="plnningModalbtn" name="vendorquerysubmitbtn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <!--<div class="vendor_tabs vendor-detail-tab">-->
                
                <!--</div>-->    
                <div class="vendor_tabs vendor-detail-tab">

                    <ul class="nav nav-tabs d-flex justify-content-space-around">
                        <li class="nav-item">
                            <a class="nav-link active" aria-current="page" href="#tastart_price">About</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#tavid_exp_since">Services Offered</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" aria-current="page" href="#tab3">Pricing</a>
                        </li>
                    </ul>

                    <!-- Tab content -->
                    <div class="tab-content" id="myTabsContent">
                        <div class="tab-pane fade show active" id="tastart_price" role="tabpanel" aria-labelledby="tastart_price-tab">
                            <div class="about_vendor common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>About</h4>
                                <!-- Description  -->
                                <p><?php echo isset($single_data[0]['about']) ? $single_data[0]['about'] : '' ?></p>
                            </div>
                        </div>
                        <div class="tab-pane fade show active" id="tavid_exp_since" role="tabpanel" aria-labelledby="tavid_exp_since-tab">
                            <div class="service_vendor common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Services Offered</h4>
                                <p><?php echo isset($single_data[0]['service_offer']) ? $single_data[0]['service_offer'] : '' ?></p>
                            </div>
                            <!-- facality  -->
                            <?php
                            if ($category == 1) {
                                $function_size = explode(',', $single_data[0]['fn_size_allow']);
                            ?>
                                <div class="service_vendor common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Facilities & Capacity</h4>
                                    <p><?php echo isset($single_data[0]['fac_cap']) ? $single_data[0]['fac_cap'] : '' ?></p>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'general_cap.png' ?>" class="img-fluid" alt="">
                                            <p> General Capacity</p>
                                            <h6><?php echo isset($single_data[0]['general_cap']) ? str_replace('?', '', $single_data[0]['general_cap']) : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'accom_cap.png' ?>" class="img-fluid" alt="">
                                            <p> Accomodation Capacity</p>
                                            <h6><?php echo isset($single_data[0]['guest_accom']) ?  $single_data[0]['guest_accom'] : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'room_avail.png' ?>" class="img-fluid" alt="">
                                            <p>Room Availability</p>
                                            <h6><?php echo isset($single_data[0]['no_room']) ?  $single_data[0]['no_room'] : '-' ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="service_vendor common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Space Type & Details</h4>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'space_type.png' ?>" class="img-fluid" alt="">
                                            <p> Space Types</p>
                                            <?php
                                            if (!empty($single_data[0]['event_spaces'])) {
                                                $eveent = explode(',', $single_data[0]['event_spaces']);
                                                foreach ($eveent as $value) {
                                                    echo '<h6>' . $value . '</h6>';
                                                }
                                            }

                                            ?>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'no_of_space.png' ?>" class="img-fluid" alt="">
                                            <p>Number Of Spaces</p>
                                            <h6><?php echo (isset($single_data[0]['space_avail']) && $single_data[0]['space_avail'] !== '') ?  $single_data[0]['space_avail'] : 'Information Not Avaialble' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'general_cap.png' ?>" class="img-fluid" alt="">
                                            <p>Function Size Allowed</p>
                                            <?php 
                                            foreach($function_size as $size){
                                                echo "<h6>".$size."</h6>";
                                            }
                                            ?>
                                            
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>

                        <div class="tab-pane fade show active" id="tab3" role="tabpanel" aria-labelledby="tab3-tab">
                            <?php if ($category == 5) { ?>
                                <!-- <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Make Up Techniques Know How</h4>
                                    <p><?php //echo isset($single_data[0]['make_tech']) ? $single_data[0]['make_tech'] : '' 
                                        ?></p>
                                </div> -->
                            <?php } ?>

                            <!-- what to expect  -->
                            <?php
                            if ((int)$category !== 1) {
                            ?>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>What To Expect ?</h4>
                                    <?php
                                    if ($category == 2) {
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'start_price.png' ?>" class="img-fluid" alt="">
                                                <p> Starting Price Range</p>
                                                <h6><?php echo FormatPrice($single_data[0]['bridal_start_price']) ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'shop_type.png' ?>" class="img-fluid" alt="">
                                                <p> Shop Type</p>
                                                <h6><?php echo isset($single_data[0]['shop_type']) ?  $single_data[0]['shop_type'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'vid_exp_since.png' ?>" class="img-fluid" alt="">
                                                <p> Experience Since</p>
                                                <h6><?php echo isset($single_data[0]['vid_exp_since']) ?  $single_data[0]['vid_exp_since'] : '-' ?></h6>
                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'ap_require.png' ?>" class="img-fluid" alt="">
                                                <p> Appointment Required</p>
                                                <h6><?php echo isset($single_data[0]['app_req']) ? str_replace('?', '', $single_data[0]['app_req']) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'ap_require.png' ?>" class="img-fluid" alt="">
                                                <p> Lead Time</p>
                                                <h6><?php echo isset($single_data[0]['lead_time']) ?  $single_data[0]['lead_time'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'col_type.png' ?>" class="img-fluid" alt="">
                                                <p> Collection Type</p>
                                                <?php
                                                $collection_type = explode(',', $single_data[0]['collection_type']);
                                                if (!empty($collection_type)) {
                                                    foreach ($collection_type as $collection_type) {
                                                        echo '<h6>' . $collection_type . '</h6>';
                                                    }
                                                } else {
                                                    echo '-';
                                                }
                                                ?>

                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'Cultural.png' ?>" class="img-fluid" alt="">
                                                <p>Cultural Inclination</p>
                                                <h6><?php echo isset($single_data[0]['jewel_start_price']) ? str_replace('?', '', $single_data[0]['jewel_start_price']) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'customize.png' ?>" class="img-fluid" alt="">
                                                <p> Customizing Available</p>
                                                <h6><?php echo isset($single_data[0]['customize_avail']) ?  $single_data[0]['customize_avail'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'ship_out.png' ?>" class="img-fluid" alt="">
                                                <p> Ship Outstation</p>
                                                <h6><?php echo isset($single_data[0]['ship_out']) ?  $single_data[0]['ship_out'] : '-' ?></h6>
                                            </div>
                                        </div>
                                    <?php
                                    } elseif ($category == 3) {
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'start_price.png' ?>" class="img-fluid" alt="">
                                                <p> Starting Price</p>
                                                <h6>₹ <?php echo isset($single_data[0]['groom_start_price']) ? str_replace('?', '', $single_data[0]['groom_start_price']) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'shop_type.png' ?>" class="img-fluid" alt="">
                                                <p> Shop Types</p>
                                                <h6><?php echo isset($single_data[0]['shop_type']) ?  $single_data[0]['shop_type'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'vid_exp_since.png' ?>" class="img-fluid" alt="">
                                                <p> Experience Since</p>
                                                <h6><?php echo isset($single_data[0]['vid_exp_since']) ?  $single_data[0]['vid_exp_since'] : '-' ?></h6>
                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'ap_require.png' ?>" class="img-fluid" alt="">
                                                <p> Appointment Required</p>
                                                <h6><?php echo isset($single_data[0]['ap_require']) ?  $single_data[0]['ap_require'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'lead_time.png' ?>" class="img-fluid" alt="">
                                                <p>Lead Time</p>
                                                <h6><?php echo isset($single_data[0]['lead_time']) ?  $single_data[0]['lead_time'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'col_type.png' ?>" class="img-fluid" alt="">
                                                <p>Collection Type</p>
                                                <h6><?php echo isset($single_data[0]['col_type']) ?  $single_data[0]['col_type'] : '-' ?></h6>
                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'Cultural.png' ?>" class="img-fluid" alt="">
                                                <p>Cultural Inclination</p>
                                                <h6><?php echo isset($single_data[0]['gift_type']) ?  $single_data[0]['gift_type'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'customize.png' ?>" class="img-fluid" alt="">
                                                <p>Customizing Available</p>
                                                <h6><?php echo isset($single_data[0]['custom_order']) ?  $single_data[0]['custom_order'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'ship_out.png' ?>" class="img-fluid" alt="">
                                                <p>Ship OutStation</p>
                                                <h6><?php echo isset($single_data[0]['ship_out']) ?  $single_data[0]['ship_out'] : '-' ?></h6>
                                            </div>
                                        </div>
                                    <?php } elseif ($category == 4) {
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'vid_exp_since.png' ?>" class="img-fluid" alt="">
                                                <p> Experience Since</p>
                                                <h6><?php echo isset($single_data[0]['vid_exp_since']) ?  $single_data[0]['vid_exp_since'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'del_time.png' ?>" class="img-fluid" alt="">
                                                <p>Delivery Time</p>
                                                <h6><?php echo isset($single_data[0]['delivery_time']) ? str_replace('?', '', $single_data[0]['delivery_time']) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'travel_out.png' ?>" class="img-fluid" alt="">
                                                <p> Travel Outstation</p>
                                                <h6><?php echo isset($single_data[0]['travel_out']) ?  $single_data[0]['travel_out'] : '-' ?></h6>
                                            </div>
                                        </div>
                                    <?php } elseif ($category == 5) {
                                    ?>
                                        <div class="detail_price">

                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'vid_exp_since.png' ?>" class="img-fluid" alt="">
                                                <p> Experience Since</p>
                                                <h6><?php echo isset($single_data[0]['vid_exp_since']) ?  $single_data[0]['vid_exp_since'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'tech_know.png' ?>" class="img-fluid" alt="">
                                                <p>Make up Techniques You Know</p>
                                                <h6><?php echo isset($single_data[0]['make_tech']) ? str_replace('?', '', $single_data[0]['make_tech']) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'travel_out.png' ?>" class="img-fluid" alt="">
                                                <p> Travel Outstation</p>
                                                <h6><?php echo isset($single_data[0]['travel_out']) ?  $single_data[0]['travel_out'] : '-' ?></h6>
                                            </div>
                                        </div>
                                    <?php } elseif ($category == 6) {
                                    ?>
                                        <div class="detail_price">

                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'vid_exp_since.png' ?>" class="img-fluid" alt="">
                                                <p> Experience Since</p>
                                                <h6><?php echo isset($single_data[0]['vid_exp_since']) ?  $single_data[0]['vid_exp_since'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'expert_in.png' ?>" class="img-fluid" alt="">
                                                <p>Expertise In</p>
                                                <?php
                                                $expert_in = explode(',', $single_data[0]['style_know']);
                                                if (!empty($expert_in)) {
                                                    foreach ($expert_in as  $value) {
                                                        echo '<h6>' . $value . '</h6>';
                                                    }
                                                } else {
                                                    echo '-';
                                                }
                                                ?>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'max_people.png' ?>" class="img-fluid" alt="">
                                                <p> Max. People Possible</p>
                                                <h6><?php echo isset($single_data[0]['max_people']) ?  $single_data[0]['max_people'] : '-' ?></h6>
                                            </div>
                                        </div>
                                    <?php } elseif ($category == 7) {
                                        // $design_style = explode(',', $single_data[0]['design_style']);
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'start_price.png' ?>" class="img-fluid" alt="">
                                                <p> Starting Price</p>
                                                <h6>₹ <?php echo isset($single_data[0]['jewel_start_price']) ? str_replace('?', '', $single_data[0]['jewel_start_price']) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'vid_exp_since.png' ?>" class="img-fluid" alt="">
                                                <p> Experience Since</p>
                                                <h6><?php echo isset($single_data[0]['vid_exp_since']) ?  $single_data[0]['vid_exp_since'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'b3.png' ?>" class="img-fluid" alt="">
                                                <p> Rental Option Available</p>
                                                <!--<h6><?php //echo in_array('Rental Options Available', $single_data[0]['opt_avail']) ?  'Yes' : '-' ?></h6>-->
                                                <h6><?php echo isset($single_data[0]['opt_avail'] ) ? $single_data[0]['opt_avail'] : '-'?></h6>
                                            </div>
                                        </div>
                                    <?php } elseif ($category == 8) {
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'deco_start.png' ?>" class="img-fluid" alt="">
                                                <p> Venue Decor Starting Price</p>
                                                <h6><?php echo isset($single_data[0]['decorator_start_price']) ? str_replace('?', '', FormatPrice($single_data[0]['decorator_start_price'])) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'vid_exp_since.png' ?>" class="img-fluid" alt="">
                                                <p> Experience Since</p>
                                                <h6><?php echo isset($single_data[0]['vid_exp_since']) ?  $single_data[0]['vid_exp_since'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'd3.png' ?>" class="img-fluid" alt="">
                                                <p> Flower Decoration Starting price</p>
                                                <h6><?php echo isset($single_data[0]['based_price']) ?  FormatPrice($single_data[0]['based_price']) : '-' ?></h6>
                                            </div>
                                        </div>
                                        <span>*Includes outdoor decoration of entrance, passage, guest area, stage area, mandap</span>
                                    <?php } elseif ($category == 9) {
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'vid_exp_since.png' ?>" class="img-fluid" alt="">
                                                <p> Experience Since</p>
                                                <h6><?php echo isset($single_data[0]['vid_exp_since']) ?  $single_data[0]['vid_exp_since'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'start_price.png' ?>" class="img-fluid" alt="">
                                                <p> Edible gifts Starting Price</p>
                                                <h6><?php echo isset($single_data[0]['gift_start_price']) ? str_replace('?', '', FormatPrice($single_data[0]['gift_start_price'])) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'start_price.png' ?>" class="img-fluid" alt="">
                                                <p> Non-Edible Gifts Starting Price</p>
                                                <h6><?php echo isset($single_data[0]['gift_pack_price']) ? str_replace('?', '', FormatPrice($single_data[0]['gift_pack_price'])) : '-' ?></h6>
                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'vid_exp_since.png' ?>" class="img-fluid" alt="">
                                                <p> Gift Types</p>
                                                <h6><?php echo isset($single_data[0]['gift_type']) ?  $single_data[0]['gift_type'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'start_price.png' ?>" class="img-fluid" alt="">
                                                <p> MOQ (Edible Gifts)</p>
                                                <h6><?php echo isset($single_data[0]['editable']) ? str_replace('?', '', $single_data[0]['editable']) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'start_price.png' ?>" class="img-fluid" alt="">
                                                <p> MOQ (Non-Edible Gifts)</p>
                                                <h6><?php echo isset($single_data[0]['non_editable']) ? str_replace('?', '', $single_data[0]['non_editable']) : '-' ?></h6>
                                            </div>
                                        </div>
                                    <?php } elseif ($category == 10) {
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'start_price.png' ?>" class="img-fluid" alt="">
                                                <p> Starting Price Per Plate</p>
                                                <h6>₹ <?php echo isset($single_data[0]['catering_start_price']) ? str_replace('?', '', $single_data[0]['catering_start_price']) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'vid_exp_since.png' ?>" class="img-fluid" alt="">
                                                <p> Experience Since</p>
                                                <h6><?php echo isset($single_data[0]['vid_exp_since']) ?  $single_data[0]['vid_exp_since'] : '-' ?></h6>
                                            </div>
                                            <!-- <div class="price_option">
                                        <img src="<?php //echo base_url() . VENDOR_ICON . 'b3.png' 
                                                    ?>" class="img-fluid" alt="">
                                        <p> Travel Outstation</p>
                                        <h6><?php //echo isset($single_data[0]['opt_avail']) ?  $single_data[0]['opt_avail'] : '-' 
                                            ?></h6>
                                    </div> -->
                                        </div>
                                    <?php } elseif ($category == 13) {
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'vid_exp_since.png' ?>" class="img-fluid" alt="">
                                                <p> Experience Since</p>
                                                <h6><?php echo isset($single_data[0]['vid_exp_since']) ?  $single_data[0]['vid_exp_since'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'print_invite.png' ?>" class="img-fluid" alt="">
                                                <p>Printed Invites Starting Price</p>
                                                <h6>₹ <?php echo isset($single_data[0]['invitation_start_price']) ? str_replace('?', '', $single_data[0]['invitation_start_price']) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'box_invite.png' ?>" class="img-fluid" alt="">
                                                <p>Boxed Invites Starting Price</p>
                                                <h6>₹ <?php echo isset($single_data[0]['price_box']) ?  $single_data[0]['price_box'] : '-' ?></h6>
                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'moq_printed_card.png' ?>" class="img-fluid" alt="">
                                                <p>MOQ (Printed Cards)</p>
                                                <h6><?php echo isset($single_data[0]['print_card']) ?  $single_data[0]['print_card'] : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'moq_box_card.png' ?>" class="img-fluid" alt="">
                                                <p>MOQ (Boxed Cards)</p>
                                                <h6><?php echo isset($single_data[0]['box_invite']) ? str_replace('?', '', $single_data[0]['box_invite']) : '-' ?></h6>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>

                            <!-- price   -->
                            <?php if ($category != 2 && $category != 3 && $category != 7) { ?>
                                <div class="vendor_technique common_vendor_detail mobile_grid">
                                    <span class="detail_badge"></span>
                                    <h4>Pricing & Packages</h4>
                                    <?php
                                    // Venue
                                    if ($category == 1) {
                                        $veg_menu_range = FormatPrice($single_data[0]['veg_menu_range']);
                                        $non_veg_range = FormatPrice($single_data[0]['non_veg_range']);

                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'rental_price.png' ?>" class="img-fluid" alt="">
                                                <p>Rental Price</p>
                                                <h6>₹ <?php echo isset($single_data[0]['rental_price']) ? str_replace('?', '', $single_data[0]['rental_price']) : '' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'venue_plate.png' ?>" class="img-fluid" alt="">
                                                <p> Start Price Per Plate</p>
                                                <h6>₹ <?php echo isset($single_data[0]['price_per_plate']) ? str_replace('?', '', $single_data[0]['price_per_plate']) : '' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'veg.png' ?>" class="img-fluid" alt="">
                                                <p> Veg Menu Price*</p>
                                                <h6><?php echo $veg_menu_range; ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'non-veg.png' ?>" class="img-fluid" alt="">
                                                <p> Non-Veg Menu Price*</p>
                                                <h6><?php echo $non_veg_range ?></h6>
                                            </div>
                                        </div>
                                    <?php
                                    } elseif ($category == 2) {
                                        // bridal wear 
                                        // $price_range = FormatPrice($single_data[0]['wear_price_range']);
                                    ?>
                                        <!-- <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php //echo base_url() . VENDOR_ICON . 'rental_price.png' 
                                                        ?>" class="img-fluid" alt="">
                                            <p>Bridal Wear Price range</p>
                                            <h6><?php //echo $price_range 
                                                ?></h6>
                                        </div>
                                    </div> -->
                                    <?php
                                    }
                                    if ($category == 4) {
                                        // photo 

                                        // echo $single_data[0]['ppackage_range1'];
                                        // echo $single_data[0]['ppackage_range3'];
                                        // echo $single_data[0]['ppackage_range4'];
                                        $ppackage_range1 = FormatPrice($single_data[0]['ppackage_range1']);
                                        $ppackage_range2 = FormatPrice($single_data[0]['ppackage_range2']);
                                        $ppackage_range3 = FormatPrice($single_data[0]['ppackage_range3']);
                                        $ppackage_range4 = FormatPrice($single_data[0]['ppackage_range4']);
                                        // exit;
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'package1.png' ?>" class="img-fluid" alt="">
                                                <p>Package 1</p>
                                                <h6>Pre-wedding photoshoot</h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'meh2.png' ?>" class="img-fluid" alt="">
                                                <p>Most ofter booked price</p>
                                                <h6><?php echo FormatPrice($single_data[0]['package1']) ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'price_range.png' ?>" class="img-fluid" alt="">
                                                <p>Package Range</p>
                                                <h6><?php echo $ppackage_range1 ?></h6>
                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'day1.png' ?>" class="img-fluid" alt="">
                                                <p>Package 2</p>
                                                <h6>1 day wedding photoshoot</h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'meh2.png' ?>" class="img-fluid" alt="">
                                                <p>Most ofter booked price</p>
                                                <h6><?php echo FormatPrice($single_data[0]['package2']) ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'price_range.png' ?>" class="img-fluid" alt="">
                                                <p>Package Range</p>
                                                <h6><?php echo $ppackage_range2 ?></h6>
                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'day2.png' ?>" class="img-fluid" alt="">
                                                <p>Package 3</p>
                                                <h6>2 day wedding photoshoot</h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'meh2.png' ?>" class="img-fluid" alt="">
                                                <p>Most ofter booked price</p>
                                                <h6><?php echo FormatPrice($single_data[0]['package3']) ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'price_range.png' ?>" class="img-fluid" alt="">
                                                <p>Package Range</p>
                                                <h6><?php echo $ppackage_range3 ?></h6>
                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'day3.png' ?>" class="img-fluid" alt="">
                                                <p>Package 4</p>
                                                <h6>3 day wedding photoshoot</h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'meh2.png' ?>" class="img-fluid" alt="">
                                                <p>Most ofter booked price</p>
                                                <h6><?php echo isset($single_data[0]['package4']) ? FormatPrice($single_data[0]['package4']) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'price_range.png' ?>" class="img-fluid" alt="">
                                                <p>Package Range</p>
                                                <h6><?php echo $ppackage_range4 ?></h6>
                                            </div>
                                        </div>
                                    <?php
                                    } elseif ($category == 5) {
                                        // make up 

                                        $package_range1 = FormatPrice($single_data[0]['package1_range']);
                                        $package_range2 = FormatPrice($single_data[0]['package2_range']);
                                        // $package_range3= explode('-', $single_data[0]['package3_range']);      
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'mu_pack1.png' ?>" class="img-fluid" alt="">
                                                <p>Package 1</p>
                                                <h6>Bridal Make Up</h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'meh2.png' ?>" class="img-fluid" alt="">
                                                <p>Most ofter booked price</p>
                                                <h6><?php echo FormatPrice($single_data[0]['package1'])  ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'price_range.png' ?>" class="img-fluid" alt="">
                                                <p>Package Range</p>
                                                <h6><?php echo $package_range1 ?></h6>
                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'mu_pack2.png' ?>" class="img-fluid" alt="">
                                                <p>Package 2</p>
                                                <h6>Party Makeup for Bride </h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'meh2.png' ?>" class="img-fluid" alt="">
                                                <p>Most ofter booked price</p>
                                                <h6> <?php echo FormatPrice($single_data[0]['package2']) ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'price_range.png' ?>" class="img-fluid" alt="">
                                                <p>Package Range</p>
                                                <h6><?php echo $package_range2 ?></h6>
                                            </div>
                                        </div>
                                    <?php } elseif ($category == 6) {
                                        // jewellery 
                                        $meh_range = FormatPrice($single_data[0]['meh_range']);
                                        $guest_range = FormatPrice($single_data[0]['guest_range']);
                                    ?>

                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'meh_pack1.png' ?>" class="img-fluid" alt="">
                                                <p>Package 1</p>
                                                <h6>Bridal Mehendi</h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'meh2.png' ?>" class="img-fluid" alt="">
                                                <p>Most ofter booked price</p>
                                                <h6><?php echo isset($single_data[0]['mahendi_start_price']) ? FormatPrice($single_data[0]['mahendi_start_price']) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'price_range.png' ?>" class="img-fluid" alt="">
                                                <p>Package Range</p>
                                                <h6><?php echo $meh_range ?></h6>
                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'meh_pack2.png' ?>" class="img-fluid" alt="">
                                                <p>Package 2</p>
                                                <h6>Family / Guest Mehendi</h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'meh2.png' ?>" class="img-fluid" alt="">
                                                <p>Most ofter booked price</p>
                                                <h6> <?php echo isset($single_data[0]['price_hand']) ? FormatPrice($single_data[0]['price_hand']) : '-' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'price_range.png' ?>" class="img-fluid" alt="">
                                                <p>Package Range</p>
                                                <h6><?php echo $guest_range ?></h6>
                                            </div>
                                        </div>
                                    <?php } elseif ($category == 8) {
                                        // decoration 
                                        // echo $single_data[0]['deco_price_range'];
                                        $package1_range = FormatPrice($single_data[0]['package1_range']);
                                        $package2_range = FormatPrice($single_data[0]['package2_range']);
                                        // $deco_price_range    = FormatPrice($single_data[0]['deco_price_range']);
                                        // $min_range = FormatPrice($single_data[0]['min_range']);
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'deco_pack1.png' ?>" class="img-fluid" alt="">
                                                <p>Package 1 (Floral Decor)</p>
                                                <h6><?php echo $package1_range ?></h6>
                                                <span>Indoor venue setups includes entrance-8-8ft, passage, guest area, stage area-16x12 ft</span>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'deco_pack2.png' ?>" class="img-fluid" alt="">
                                                <p>Package 2 (Floral Decor)</p>
                                                <h6><?php echo $package2_range ?></h6>
                                                <span>Outdoor setup includes decoration of entrance, passage, guest area, stage area, mandap</span>
                                            </div>
                                        </div>
                                        <hr>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'fixed_price.png' ?>" class="img-fluid" alt="">
                                                <p>Fiexd Planning Fee</p>
                                                <h6><?php echo isset($single_data[0]['deco_price_range']) ?  $single_data[0]['deco_price_range'] : 'Information Not Available' ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'budget.png' ?>" class="img-fluid" alt="">
                                                <p>Minimum Wedding budget required</p>
                                                <h6><?php echo isset($single_data[0]['min_range']) ?  $single_data[0]['min_range'] : 'Information Not Available' ?></h6>
                                            </div>
                                        </div>
                                    <?php } elseif ($category == 9) {
                                        // gift 
                                        $price_range_edit = FormatPrice($single_data[0]['price_range_edit']);
                                        $price_range_non_edit = FormatPrice($single_data[0]['price_range_non_edit']);
                                        $range_editable = explode('-', $single_data[0]['range_editable']);
                                        $range_non_editable = explode('-', $single_data[0]['range_non_editable']);
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'editble.png' ?>" class="img-fluid" alt="">
                                                <p>Edible Gift</p>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'gift_range.png' ?>" class="img-fluid" alt="">
                                                <p>Price Range</p>
                                                <h6><?php echo $price_range_edit ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'moq_printed_card.png' ?>" class="img-fluid" alt="">
                                                <p>MOQ Range</p>
                                                <h6><?php echo $range_editable[0] . '-' . $range_editable[1] ?></h6>
                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'non_edit.png' ?>" class="img-fluid" alt="">
                                                <p>Non-Edible Gift</p>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'gift_range.png' ?>" class="img-fluid" alt="">
                                                <p>Price Range</p>
                                                <h6><?php echo $price_range_non_edit ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'moq_box_card.png' ?>" class="img-fluid" alt="">
                                                <p>MOQ Range</p>
                                                <h6><?php echo $range_non_editable[0] . '-' . $range_non_editable[1] ?></h6>
                                            </div>
                                        </div>
                                    <?php } elseif ($category == 10) {
                                        $veg_menu = FormatPrice($single_data[0]['veg_menu']);
                                        $non_veg_menu = FormatPrice($single_data[0]['non_veg_menu']);
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'veg.png' ?>" class="img-fluid" alt="">
                                                <p>Package 1 (Veg Menu)</p>
                                                <h6><?php echo $veg_menu ?></h6>
                                                <p class="cat_price">Includes Charges for beverages, food appetizers, main course & dessert items for 300 People</p>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'non-veg.png' ?>" class="img-fluid" alt="">
                                                <p>Package 2 (Non-Veg Menu)</p>
                                                <h6><?php echo $non_veg_menu ?></h6>
                                                <p class="cat_price">Includes Charges for beverages, food appetizers, main course & dessert items for 300 People</p>
                                            </div>
                                        </div>
                                    <?php } elseif ($category == 13) {
                                        $start_price_range = FormatPrice($single_data[0]['start_price_range']);
                                        $price_range_box = FormatPrice($single_data[0]['price_range_box']);
                                        $printed_card = explode('-', $single_data[0]['printed_card']);
                                        $box_card = explode('-', $single_data[0]['box_card']);
                                        // pr($box_card, '');
                                    ?>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'print_invite.png' ?>" class="img-fluid" alt="">
                                                <p>Printed Invitation</p>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'gift_range.png' ?>" class="img-fluid" alt="">
                                                <p>Price Range</p>
                                                <h6><?php echo $start_price_range ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'moq_printed_card.png' ?>" class="img-fluid" alt="">
                                                <p>MOQ Range</p>
                                                <h6><?php echo $printed_card[0] . '-' . $printed_card[1] ?></h6>
                                            </div>
                                        </div>
                                        <div class="detail_price">
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'box.png' ?>" class="img-fluid" alt="">
                                                <p>Boxed Invitation</p>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'gift_range.png' ?>" class="img-fluid" alt="">
                                                <p>Price Range</p>
                                                <h6><?php echo $price_range_box ?></h6>
                                            </div>
                                            <div class="price_option">
                                                <img src="<?php echo base_url() . VENDOR_ICON . 'moq_box_card.png' ?>" class="img-fluid" alt="">
                                                <p>MOQ Range</p>
                                                <h6><?php echo $box_card[0] . '-' . $box_card[1] ?></h6>
                                            </div>
                                        </div>
                                    <?php } ?>
                                </div>
                            <?php } ?>
                            <!-- payment option  -->
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Payment Options</h4>
                                <div class="payment_div">
                                    <?php
                                    $payment_opt = explode(',', $single_data[0]['payment_opt']);
                                    ?>
                                    <div class="payment_opt">
                                        <ul>
                                            <?php

                                            if (in_array('Credit-Debit', $payment_opt)) {
                                                echo '<li><img src="' . base_url() . 'assets/front/image/icon/vdetail_icon/pay2.png" class="img-fluid" alt=""> Debit/ Credit cards</li>';
                                            }
                                            if (in_array('Cash', $payment_opt)) {
                                                echo '<li><img src="' . base_url() . 'assets/front/image/icon/vdetail_icon/pay3.png" class="img-fluid" alt=""> Cash </li>';
                                            }
                                            if (in_array('UPI', $payment_opt)) {
                                                echo '<li><img src="' . base_url() . 'assets/front/image/icon/vdetail_icon/pay6.png" class="img-fluid" alt=""> UPI</li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                    <div class="payment_opt">
                                        <ul>
                                            <?php
                                            if (in_array('Net banking', $payment_opt)) {
                                                echo '<li><img src="' . base_url() . 'assets/front/image/icon/vdetail_icon/pay1.png" class="img-fluid" alt=""> Net banking</li>';
                                            }
                                            if (in_array('Wallets', $payment_opt)) {
                                                echo '<li><img src="' . base_url() . 'assets/front/image/icon/vdetail_icon/pay4.png" class="img-fluid" alt=""> Mobile wallets</li>';
                                            }

                                            if (in_array('Cheque', $payment_opt)) {
                                                echo  '<li><img src="' . base_url() . 'assets/front/image/icon/vdetail_icon/pay5.png" class="img-fluid" alt=""> Cheque/ DD</li>';
                                            }
                                            ?>
                                        </ul>
                                    </div>
                                </div>

                            </div>

                            <!-- advance pay  -->
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>% Advance</h4>
                                <p><?php echo isset($single_data[0]['advance_per']) ? $single_data[0]['advance_per'] : '' ?></p>
                            </div>

                            <!-- Cancellation -->
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Cancellation policy</h4>
                                <p><?php echo isset($single_data[0]['cancel_policy']) ? $single_data[0]['cancel_policy'] : '' ?></p>
                            </div>
                            <?php
                            // other fields 
                            // venue 
                            if ($category == 1) {
                            ?>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Vendor Availability</h4>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'inhouse.png' ?>" class="img-fluid" alt="">
                                            <p>In House Vendor Avaialbility</p>
                                            <?php
                                            if (!empty($single_data[0]['inhouse_vendor'])) {
                                                $eveent = explode(',', $single_data[0]['inhouse_vendor']);
                                                foreach ($eveent as $value) {
                                                    echo '<h6>' . $value . '</h6>';
                                                }
                                            }

                                            ?>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'external.png' ?>" class="img-fluid" alt="">
                                            <p>External Vendor Allowed</p>
                                            <?php
                                            if (!empty($single_data[0]['external_vendor'])) {
                                                $eveent = explode(',', $single_data[0]['external_vendor']);
                                                foreach ($eveent as $value) {
                                                    echo '<h6>' . $value . '</h6>';
                                                }
                                            }

                                            ?>
                                        </div>
                                    </div>
                                </div>
                                <div class="vendor_technique common_vendor_detail fad">
                                    <span class="detail_badge"></span>
                                    <h4>Food & Drinks</h4>
                                    <div class="detail_price">
                                        <div class="price_option text-left">
                                            <?php
                                            if (!empty($single_data[0]['cuisines'])) {
                                                $cuisines = explode(',', $single_data[0]['cuisines']);
                                                foreach ($cuisines as $value) {
                                                    echo '<h6>. ' . $value . '</h6>';
                                                }
                                            }

                                            ?>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'alcohol.png' ?>" class="img-fluid" alt="">
                                            <p>Alcohol Allowed</p>
                                            <h6><?php echo isset($single_data[0]['alcohol_policy']) ? $single_data[0]['alcohol_policy'] : '' ?></h6>
                                        </div>
                                    </div>
                                </div>
                            <?php
                                //bridal wear
                            } elseif ($category == 2) {
                            ?>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Apt For Which Occations ?</h4>
                                    <?php
                                    if (!empty($single_data[0]['occations'])) {
                                        $occation = explode(',', $single_data[0]['occations']);
                                        if (is_array($occation)) {
                                            foreach ($occation as $value) {
                                                echo '<h6>. ' . $value . '</h6>';
                                            }
                                        } else {
                                            echo $single_data[0]['occations'];
                                        }
                                    }
                                    ?>
                                </div>

                                <div class="vendor_technique common_vendor_detail mobile_grid">
                                    <span class="detail_badge"></span>
                                    <h4>Work Profile</h4>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'dresss_type.png' ?>" class="img-fluid" alt="">
                                            <p>Dress Type Avaialble</p>
                                            <?php
                                            if (!empty($single_data[0]['prod_type'])) {
                                                $prod_type = explode(',', $single_data[0]['prod_type']);
                                                foreach ($prod_type as $value) {
                                                    echo '<h6> ' . $value . '</h6>';
                                                }
                                            }

                                            ?>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'fabric.png' ?>" class="img-fluid" alt="">
                                            <p>Fabric Used</p>
                                            <?php
                                            if (!empty($single_data[0]['fabric_used'])) {
                                                $fabric_used = explode(',', $single_data[0]['fabric_used']);
                                                foreach ($fabric_used as $value) {
                                                    echo '<h6>' . $value . '</h6>';
                                                }
                                            }

                                            ?>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'emblish.png' ?>" class="img-fluid" alt="">
                                            <p>Emblishments</p>
                                            <?php
                                            if (!empty($single_data[0]['emblishments'])) {
                                                $emblishments = explode(',', $single_data[0]['emblishments']);
                                                foreach ($emblishments as $value) {
                                                    echo '<h6>' . $value . '</h6>';
                                                }
                                            }

                                            ?>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'design_style.png' ?>" class="img-fluid" alt="">
                                            <p>Design Styles</p>
                                            <?php
                                            if (!empty($single_data[0]['design_style'])) {
                                                $design_style = explode(',', $single_data[0]['design_style']);
                                                foreach ($design_style as $value) {
                                                    echo '<h6>' . $value . '</h6>';
                                                }
                                            }

                                            ?>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } elseif ($category == 3) {
                                // groom 
                            ?>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Apt For Which Occations ?</h4>
                                    <?php

                                    if (!empty($single_data[0]['occation'])) {
                                        $occation = explode(',', $single_data[0]['occation']);
                                        if (is_array($occation)) {
                                            foreach ($occation as $value) {
                                                echo '<h6>. ' . $value . '</h6>';
                                            }
                                        } else {
                                            echo $single_data[0]['occation'];
                                        }
                                    }
                                    ?>
                                </div>

                                <div class="vendor_technique common_vendor_detail mobile_grid">
                                    <span class="detail_badge"></span>
                                    <h4>Work Profile</h4>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'groom_dress.png' ?>" class="img-fluid" alt="">
                                            <p>Dress Type Avaialble</p>
                                            <?php
                                            if (!empty($single_data[0]['prod_type'])) {
                                                $prod_type = explode(',', $single_data[0]['prod_type']);
                                                foreach ($prod_type as $value) {
                                                    echo '<h6> ' . $value . '</h6>';
                                                }
                                            }

                                            ?>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'fabric.png' ?>" class="img-fluid" alt="">
                                            <p>Fabric Used</p>
                                            <?php
                                            if (!empty($single_data[0]['fabric'])) {
                                                $fabric = explode(',', $single_data[0]['fabric']);
                                                foreach ($fabric as $value) {
                                                    echo '<h6>' . $value . '</h6>';
                                                }
                                            }

                                            ?>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'emblish.png' ?>" class="img-fluid" alt="">
                                            <p>Emblishments</p>
                                            <?php
                                            if (!empty($single_data[0]['print_opt'])) {
                                                $print_opt = explode(',', $single_data[0]['print_opt']);
                                                foreach ($print_opt as $value) {
                                                    echo '<h6>' . $value . '</h6>';
                                                }
                                            }

                                            ?>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'design_style.png' ?>" class="img-fluid" alt="">
                                            <p>Design Styles</p>
                                            <?php
                                            if (!empty($single_data[0]['design_type'])) {
                                                $design_type = explode(',', $single_data[0]['design_type']);
                                                foreach ($design_type as $value) {
                                                    echo '<h6>' . $value . '</h6>';
                                                }
                                            }

                                            ?>
                                        </div>
                                    </div>
                                </div>

                            <?php
                            } elseif ($category == 4) {
                                // photo 
                            ?>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Occations Covered</h4>
                                    <ul>
                                    <?php

                                    if (!empty($single_data[0]['occations'])) {
                                        $occations = explode('--', $single_data[0]['occations']);
                                        if (is_array($occations)) {
                                            foreach ($occations as $value) {
                                                echo '<li><h6>. ' . $value . '</h6></li>';
                                            }
                                        }
                                    }
                                    ?>
                                    </ul>
                                </div>
                            <?php
                            } elseif ($category == 5) {
                                // make up 
                                $groom_service = explode(',', $single_data[0]['groom_service']);
                            ?>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Grooming Services Available</h4>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'hairstyle.png' ?>" class="img-fluid" alt="">
                                            <p>Hairstyling Services</p>
                                            <h6><?php echo in_array('Hairstyling Services', $groom_service) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'hairextent.png' ?>" class="img-fluid" alt="">
                                            <p>Hair Extension</p>
                                            <h6><?php echo in_array('Hair Extension', $groom_service) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'eyelashes.png' ?>" class="img-fluid" alt="">
                                            <p>Provides Eyelashes</p>
                                            <h6><?php echo in_array('Provides Eyelashes', $groom_service) ? 'Yes' : '-' ?></h6>
                                        </div>
                                    </div>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'eyelense.png' ?>" class="img-fluid" alt="">
                                            <p>Provides Eyelenses</p>
                                            <h6><?php echo in_array('Provides Eyelenses', $groom_service) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'nailext.png' ?>" class="img-fluid" alt="">
                                            <p>Nail Extensions</p>
                                            <h6><?php echo in_array('Nail Extensions', $groom_service) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'garment.png' ?>" class="img-fluid" alt="">
                                            <p>Garment Draping</p>
                                            <h6><?php echo in_array('Garment Draping', $groom_service) ? 'Yes' : '-' ?></h6>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } elseif ($category == 6) {
                                // mehendi 
                            ?>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Mehendi Style Available</h4>
                                    <?php
                                    if (!empty($single_data[0]['mehendi_style'])) {
                                        $mehendi_style = explode(',', $single_data[0]['mehendi_style']);
                                        if (is_array($mehendi_style)) {
                                            foreach ($mehendi_style as $value) {
                                                echo '<h6><i class="fa-solid fa-check"></i> ' . $value . '</h6>';
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            <?php
                            } elseif ($category == 7) {
                                // jewel 
                                $jew_type = explode(',', $single_data[0]['jew_type']);
                                $design_style = explode(',', $single_data[0]['design_style']);
                                $cat_avail = explode(',', $single_data[0]['cat_avail']);
                            ?>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Jewellery Types</h4>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'custom_gold.png' ?>" class="img-fluid" alt="">
                                            <p>Custom Gold Jewellery</p>
                                            <h6><?php echo in_array('Custom made Gold Jewellery', $jew_type) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'diamond.png' ?>" class="img-fluid" alt="">
                                            <p>Diamond Jewellery</p>
                                            <h6><?php echo in_array('Diamond Jewellery', $jew_type) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b6.png' ?>" class="img-fluid" alt="">
                                            <p>Precious & Semi Precious Stone</p>
                                            <h6><?php echo in_array('Precious and Semi Precious Stone Jewellery', $jew_type) ? 'Yes' : '-' ?></h6>
                                        </div>
                                    </div>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b7.png' ?>" class="img-fluid" alt="">
                                            <p>American Diamond Jewellery</p>
                                            <h6><?php echo in_array('American Diamond Jewellery', $jew_type) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b8.png' ?>" class="img-fluid" alt="">
                                            <p>Kemp Jewellery</p>
                                            <h6><?php echo in_array('Kemp Jewellery', $jew_type) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b9.png' ?>" class="img-fluid" alt="">
                                            <p>Imitation Jewellery</p>
                                            <h6><?php echo in_array('Imitation Jewellery', $jew_type) ? 'Yes' : '-' ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Design Styles</h4>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b10.png' ?>" class="img-fluid" alt="">
                                            <p>Kundan Jewellery</p>
                                            <h6><?php echo in_array('Kundan Jewellery', $design_style) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b11.png' ?>" class="img-fluid" alt="">
                                            <p>Navratna Jewellery</p>
                                            <h6><?php echo in_array('Navratna Jewellery', $design_style) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b12.png' ?>" class="img-fluid" alt="">
                                            <p>Meenakari Jewellery</p>
                                            <h6><?php echo in_array('Meenakari Jewellery', $design_style) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b13.png' ?>" class="img-fluid" alt="">
                                            <p>Temple Jewellery</p>
                                            <h6><?php echo in_array('Temple Jewellery', $design_style) ? 'Yes' : '-' ?></h6>
                                        </div>
                                    </div>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b14.png' ?>" class="img-fluid" alt="">
                                            <p>Antique Jewellery</p>
                                            <h6><?php echo in_array('Antique Jewellery', $design_style) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b15.png' ?>" class="img-fluid" alt="">
                                            <p>Polki and Emerald Jewellery</p>
                                            <h6><?php echo in_array('Polki and Emerald Jewellery', $design_style) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b16.png' ?>" class="img-fluid" alt="">
                                            <p>Floral Jewellery</p>
                                            <h6><?php echo in_array('Floral Jewellery', $design_style) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'noveb17l.png' ?>" class="img-fluid" alt="">
                                            <p>Kaasu Malai Jewellery</p>
                                            <h6><?php echo in_array('Kaasu Malai Jewellery', $design_style) ? 'Yes' : '-' ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Available Category</h4>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b18.png' ?>" class="img-fluid" alt="">
                                            <p>Bridal Jewellery</p>
                                            <h6><?php echo in_array('Bridal Jewellery', $cat_avail) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b19.png' ?>" class="img-fluid" alt="">
                                            <p>Necklaces</p>
                                            <h6><?php echo in_array('Necklaces', $cat_avail) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b20.png' ?>" class="img-fluid" alt="">
                                            <p>Earrings</p>
                                            <h6><?php echo in_array('Earrings', $cat_avail) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b27.png' ?>" class="img-fluid" alt="">
                                            <p>Bracelets</p>
                                            <h6><?php echo in_array('Bracelets', $cat_avail) ? 'Yes' : '-' ?></h6>
                                        </div>
                                    </div>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b21.png' ?>" class="img-fluid" alt="">
                                            <p>Wedding Rings</p>
                                            <h6><?php echo in_array('Wedding Rings', $cat_avail) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b22.png' ?>" class="img-fluid" alt="">
                                            <p>Nose Rings</p>
                                            <h6><?php echo in_array('Nose Rings', $cat_avail) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b23.png' ?>" class="img-fluid" alt="">
                                            <p>Pendant Sets</p>
                                            <h6><?php echo in_array('Pendant Sets', $cat_avail) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b28.png' ?>" class="img-fluid" alt="">
                                            <p>Anklets</p>
                                            <h6><?php echo in_array('Anklets', $cat_avail) ? 'Yes' : '-' ?></h6>
                                        </div>
                                    </div>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b24.png' ?>" class="img-fluid" alt="">
                                            <p>Solitaires</p>
                                            <h6><?php echo in_array('Solitaires', $cat_avail) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b25.png' ?>" class="img-fluid" alt="">
                                            <p>MangalSutra</p>
                                            <h6><?php echo in_array('MangalSutra', $cat_avail) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b26.png' ?>" class="img-fluid" alt="">
                                            <p>Choker</p>
                                            <h6><?php echo in_array('Choker', $cat_avail) ? 'Yes' : '-' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'b29.png' ?>" class="img-fluid" alt="">
                                            <p>Kamarbandh</p>
                                            <h6><?php echo in_array('Kamarbandh', $cat_avail) ? 'Yes' : '-' ?></h6>
                                        </div>
                                    </div>
                                </div>
                            <?php
                            } elseif ($category == 8) {
                                // decoration 
                                $deco_style = explode(',', $single_data[0]['deco_style']);
                                $traditional = explode(',', $single_data[0]['modern_style']);
                            ?>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Decoration Style Avaialable</h4>
                                    <div class="detail_price">
                                        <div class="price_option text-left">
                                            <h6>Traditional Decoration Styles</h6>
                                            <?php
                                            if (!empty($traditional)) {
                                                echo '<ul>';
                                                foreach ($traditional as $value) {
                                                    echo '<li><i class="fa-solid fa-check"></i> ' . $value . '</li>';
                                                }
                                                echo '</ul>';
                                            } else {
                                                echo 'NA';
                                            }

                                            ?>
                                        </div>
                                        <div class="price_option text-left">
                                            <h6>Modern Decoration Styles</h6>
                                            <?php
                                            if (!empty($deco_style)) {
                                                echo '<ul>';
                                                foreach ($deco_style as $value) {
                                                    echo '<li><i class="fa-solid fa-check"></i> ' . $value . '</li>';
                                                }
                                                echo '</ul>';
                                            } else {
                                                echo 'NA';
                                            }

                                            ?>
                                        </div>

                                    </div>
                                </div>
                            <?php
                            } elseif ($category == 9) {
                                // gift 
                                // no extra features avail 
                            } elseif ($category == 10) {
                                // catering
                                $menu_opt = explode(',', $single_data[0]['menu_opt']);
                                $service_avail = explode(',', $single_data[0]['service_avail']);
                            ?>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Food Options</h4>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'north.png' ?>" class="img-fluid" alt="">
                                            <p>North indian/ mughlai</p>
                                            <h6><?php echo in_array('North indian/ mughlai', $menu_opt) ? 'Yes' : 'No' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'itilian.png' ?>" class="img-fluid" alt="">
                                            <p>Italian/ european/ continental</p>
                                            <h6><?php echo in_array('Italian/ european/ continental', $menu_opt) ? 'Yes' : 'No' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'chinese.png' ?>" class="img-fluid" alt="">
                                            <p>Chinese/ thai/ oriental</p>
                                            <h6><?php echo in_array('Chinese/ thai/ oriental', $menu_opt) ? 'Yes' : 'No' ?></h6>
                                        </div>
                                    </div>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'seafood.png' ?>" class="img-fluid" alt="">
                                            <p>Seafood</p>
                                            <h6><?php echo in_array('Seafood', $menu_opt) ? 'Yes' : 'No' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'chat_indian.png' ?>" class="img-fluid" alt="">
                                            <p>Chaat & indian street food</p>
                                            <h6><?php echo in_array('Chaat & indian street food', $menu_opt) ? 'Yes' : 'No' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'south_indian.png' ?>" class="img-fluid" alt="">
                                            <p>South indian</p>
                                            <h6><?php echo in_array('South indian', $menu_opt) ? 'Yes' : 'No' ?></h6>
                                        </div>
                                    </div>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'garlic.png' ?>" class="img-fluid" alt="">
                                            <p>Garlic Free/ Onion Free</p>
                                            <h6><?php echo in_array('Garlic Free/ Onion Free', $menu_opt) ? 'Yes' : 'No' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'live_counter.png' ?>" class="img-fluid" alt="">
                                            <p>Live food counters</p>
                                            <h6><?php echo in_array('Live food counters', $menu_opt) ? 'Yes' : 'No' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'drinks.png' ?>" class="img-fluid" alt="">
                                            <p>Drinks (non-alcoholic)</p>
                                            <h6><?php echo in_array('Drinks (non-alcoholic)', $menu_opt) ? 'Yes' : 'No' ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Other Service Avaialble</h4>
                                    <?php
                                    if (!empty($single_data[0]['service_avail'])) {
                                        $service_avail = explode(',', $single_data[0]['service_avail']);
                                        if (is_array($service_avail)) {
                                            foreach ($service_avail as $value) {
                                                echo '<h6><i class="fa-solid fa-check"></i> ' . $value . '</h6>';
                                            }
                                        }
                                    } else {
                                        echo '-';
                                    }
                                    ?>
                                </div>
                            <?php
                            } elseif ($category == 13) {
                                // innivitation 

                                $ini_type = explode(',', $single_data[0]['type_avail']);
                            ?>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Product Types</h4>
                                    <div class="detail_price">
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'card.png' ?>" class="img-fluid" alt="">
                                            <p>Cards</p>
                                            <h6><?php echo in_array('Cards', $ini_type) ? 'Yes' : 'No' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'boxed.png' ?>" class="img-fluid" alt="">
                                            <p>Boxed Gifts</p>
                                            <h6><?php echo in_array('Boxed Gift Types', $ini_type) ? 'Yes' : 'No' ?></h6>
                                        </div>
                                        <div class="price_option">
                                            <img src="<?php echo base_url() . VENDOR_ICON . 'novel.png' ?>" class="img-fluid" alt="">
                                            <p>Novel Concepts</p>
                                            <h6><?php echo in_array('Novel Concepts', $ini_type) ? 'Yes' : 'No' ?></h6>
                                        </div>
                                    </div>
                                </div>
                                <div class="vendor_technique common_vendor_detail">
                                    <span class="detail_badge"></span>
                                    <h4>Paper Styles</h4>
                                    <?php
                                    if (!empty($single_data[0]['paper_style_avail'])) {
                                        $paper_style_avail = explode(',', $single_data[0]['paper_style_avail']);
                                        if (is_array($paper_style_avail)) {
                                            foreach ($paper_style_avail as $value) {
                                                echo '<h6><i class="fa-solid fa-check"></i> ' . $value . '</h6>';
                                            }
                                        }
                                    }
                                    ?>
                                </div>
                            <?php
                            }
                            ?>

                            <!-- features  -->
                            <div class="vendor_technique common_vendor_detail">
                                <span class="detail_badge"></span>
                                <h4>Features</h4>
                                <div class="ven_feat_div">
                                    <div class="vendor_feature_list">
                                        <ul>
                                            <?php
                                            foreach (array_unique(array_filter($features)) as  $fea) {
                                                echo '<li><i class="fa-solid fa-check"></i> ' . $fea . ' </li>';
                                            }
                                            //removeing blank data from array by using array_filter
                                            /*  $totalFeatures = count(array_unique(array_filter($features)));
                                            $ulCounter = 1;
                                            foreach (array_unique(array_filter($features)) as  $fea) {

                                                echo '<li><i class="fa-solid fa-check"></i> ' . $fea . ' </li>';
                                                if ($ulCounter == ceil($totalFeatures / 2)) {
                                                    echo '</ul></div>'; // Close the current <ul> and <div>
                                                    echo '<div class="vendor_feature_list">';
                                                    echo '<ul>';
                                                }
                                                $ulCounter++;
                                            } */
                                            ?>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 right_col desktop_area">
                <div class="vendor_price price_sec_desk">
                    
                    <p class="badge text-white <?php //echo ($single_data[0]['claim'] == 'Unclaimed') ? 'badge-danger' : 'badge-success' 
                                                ?>"><?php // echo $single_data[0]['claim'] 
                                                    ?></p>
                    <div class="price_drop_down">
                        <h5 class="vendor_price_drop" id="vendor_price">
                            <!-- &#8377  -->
                            <?php
                            $statp = preg_replace('/[^0-9-]/', '', $single_data[0]['dv_start_price']);
                            $end_price = preg_replace('/[^0-9-]/', '', $single_data[0]['end_price']);
                            if (is_numeric($statp) && is_numeric($end_price)) {
                                $range = '₹' . number_format($statp) . ' - ' . '₹' . number_format($end_price);
                            } elseif (is_numeric($statp)) {
                                $range = '₹' . number_format($statp) . ' ' . $end_price;
                            } elseif (is_numeric($end_price)) {
                                $range = $statp . '' . '₹' . number_format($end_price);
                            }
                            echo $range;
                            ?>
                        </h5>
                        <p>Price Range</p>
                        <hr>
                    </div>
                    <div class="vendor_time">
                        <span class="bhr"><i class="fa-solid fa-clock" style="font-size: 14px;color: #949494"></i> Business Hours</span>
                        <?php

                        $business_day = !empty($single_data[0]['business_day']) ? array_map('trim', explode(',', $single_data[0]['business_day'])) : '';
                        $business_hr = !empty($single_data[0]['business_hr']) ? array_map('trim', explode(',', $single_data[0]['business_hr'])) : '';
                        // $business_hr = explode(',', $single_data[0]['business_hr']);
                        // Ensure both arrays have the same length
                        if (count($business_day) < count($business_hr)) {
                            // If $business_day has fewer elements, pad it with default values
                            $business_day = array_pad($business_day, count($business_hr), '');
                        } elseif (count($business_hr) < count($business_day)) {
                            // If $business_hr has fewer elements, pad it with default values
                            $business_hr = array_pad($business_hr, count($business_day), 'Closed');
                        }
                        // pr($business_day, '');

                        // pr($business_hr, '');

                        if ($business_day !== '') {
                            foreach (array_combine($business_day, $business_hr) as $key => $value) {
                                echo '<span class="vtime">' . $key . ':<span> ' . $value . '</span></span>';
                            }
                        }
                        ?>
                        <hr>
                    </div>
                    <div class="social_work">
                        <span>Explore Their Work</span>
                        <div class="slinks d-flex">
                            <?php
                            // echo $single_data[0]['website'];
                            $social_media = array_combine(explode(',', $single_data[0]['social_media']), explode(',', $single_data[0]['social_link']));

                            ?>
                            <a href="<?php echo (isset($social_media['facebook']) && !empty($social_media['facebook'])) ? $social_media['facebook'] : '#!' ?>" target="_blank">
                                <img src="<?php echo base_url() . 'assets/front/image/icon/vdetail_icon/Facebook.png' ?>" class="img-fluid" alt="">
                            </a>
                            <a href="<?php echo (isset($social_media['Instagram']) && !empty($social_media['Instagram'])) ? $social_media['Instagram'] : '#!' ?>" target="_blank">
                                <img src="<?php echo base_url() . 'assets/front/image/icon/vdetail_icon/Insta.png' ?>" class="img-fluid" alt="">
                            </a>
                            <a href="<?php echo (isset($social_media['pinterest']) && !empty($social_media['pinterest'])) ? $social_media['pinterest'] : '#!' ?>" target="_blank">
                                <img src="<?php echo base_url() . 'assets/front/image/icon/vdetail_icon/Pinterest.png' ?>" class="img-fluid" alt="">
                            </a>
                            <a href="<?php echo !empty($single_data[0]['website']) ? $single_data[0]['website'] : '#!' ?>" target="_blank">
                                <img src="<?php echo base_url() . 'assets/front/image/icon/vdetail_icon/website.png' ?>" class="img-fluid" alt="">
                            </a>
                        </div>
                        <hr>
                        <?php
                        /* if ((isset($single_data[0]['social_media']) && $single_data[0]['social_media'] !== '') || (isset($single_data[0]['website']) && $single_data[0]['website'] !== '')) {

                                echo '<span>Explore Their Work</span>';
                                echo '<div class="slinks d-flex">';
                                $web = !empty($single_data[0]['website']) ? array('website' => $single_data[0]['website']) : '';

                                $social_media = array_combine(explode(',', $single_data[0]['social_media']), explode(',', $single_data[0]['social_link']));

                                if ($web !== '') {
                                    $social_media = array_merge($social_media, $web);
                                }

                                if (array_key_exists('facebook', $social_media)) {
                                    echo '<a href="' . $social_media['facebook'] . '" target="_blank"><img src="' . base_url() . 'assets/front/image/icon/vdetail_icon/Facebook.png' . '" class="img-fluid" alt=""></a>';
                                }
                                if (array_key_exists('instagram', $social_media)) {
                                    echo '<a href="' . $social_media['instagram'] . '" target="_blank"><img src="' . base_url() . 'assets/front/image/icon/vdetail_icon/Insta.png' . '" class="img-fluid" alt=""></a>';
                                }
                                if (array_key_exists('pinterest', $social_media)) {
                                    echo '<a href="' . $social_media['pinterest'] . '" target="_blank"><img src="' . base_url() . 'assets/front/image/icon/vdetail_icon/Pinterest.png' . '" class="img-fluid" alt=""></a>';
                                }
                                if (array_key_exists('website', $social_media)) {
                                    echo '<a href="' . $social_media['website'] . '" target="_blank"><img src="' . base_url() . 'assets/front/image/icon/vdetail_icon/website.png' . '" class="img-fluid" alt=""></a>';
                                }
                                echo ' </div>
                                    <hr>';
                            }  */
                        ?>


                    </div>
                    <?php
                    //if (isset($category) && $category == '5') {
                    ?>
                        <!--<div class="vendor_services">-->
                        <!--    <span>Service available:</span>-->
                        <!--    <label class="check_box">-->
                        <!--        <input type="checkbox" class="check_input" checked="checked">-->
                        <!--        <span class="checkmark"></span>-->
                        <!--        at Venue-->
                        <!--    </label>-->

                        <!--    <label class="check_box">-->
                        <!--        <input type="checkbox" class="check_input" checked="checked">-->
                        <!--        <span class="checkmark"></span>-->
                        <!--        at Salon-->
                        <!--    </label>-->
                        <!--</div>-->
                    <?php //} ?>
                    <div class="vendor_share">
                        <button><i class="fa-solid fa-share" style="font-size: 14px"></i> Share</button>
                        <button><i class="fa-solid fa-star" style="font-size: 14px"></i> Write Review</button>
                    </div>
                    <div class="vendor_cview d-md-flex">
                        <!-- <i class="fa-brands fa-whatsapp" style="font-size: 18px"></i>  -->
                        <?php if(!isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] != true)
                                { ?>
                                        <button data-toggle="modal" data-target="#myModal">View Contact No</button>
                               <?php }
                                elseif(isset($single_data['phone_no']) && !empty($single_data['phone_no'])){ 
                                  echo  '<a href="tel:'.$single_data['phone_no'].'"><button >'. $single_data['phone_no'] .'</button></a>';
                                  }else{
                                        echo  '<button>Contact No. Unavailable</button>';
                                  }

                                ?>
                    <!--<button id="vendorquerysubmitbtn" onclick="showqueryform();"> Send Query</button>-->
                      <button class="vendorquerysubmitbtn1"> Send Query</button>
                    </div>
                   
                    <!-- Send Query -->
                    <div class="query-form-section1" style="display: none; margin-top:22px;">
                      <hr style="color: #ee182b;">
                        <form name="vendordetail" action="<?php echo base_url() ?>VendorQuery/vendorquerynewsubmit" method="POST">
                            <div class="container py-3">
                                <div class="row">
                                    <div class="col-md-12">
                                        <h6 style="color:#ee182b;" class="query-form-title">Personal Information</h6>
                                        <hr style="border-bottom: 1px solid #ee182b;">
                                    </div>
                                    <!-- <hr style="color: #ee182b;"> -->
                                  <input type="hidden" id="is_paid_vendor" class="form-control query-form-input desk-name" autofocus  name="is_paid_vendor" value="<?php echo $is_paid_vendor; ?>">
                                  <input type="hidden" id="category" class="form-control query-form-input desk-name" autofocus  name="category" value="<?php echo $single_data[0]['category']; ?>">
                                  <input type="hidden" id="vendor_id" class="form-control query-form-input desk-name" autofocus  name="vendor_id" value="<?php echo $single_data[0]['dv_id']; ?>">
                                  <?php 
                                        //check is paid
        if($is_paid_vendor){
            //common fields 
            ?>
<!-- // Name  [Text Entry] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Name</p>
                                        <input type="text" id="name" class="form-control query-form-input desk-name" autofocus  name="name" required>
                                    </div>
<!-- // Phone Number  [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Phone Number</p>
                                        <input type="text" id="phone-no" class="form-control query-form-input" autofocus  name="phone_no" required>
                                    </div>
<!-- // Email Address  [Text Entry] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Email Address</p>
                                        <input type="email" id="email" class="form-control query-form-input" autofocus  name="email" required>
                                    </div>
<!-- // Function date [Date Picker] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Function date</p>
                                        <input type="date" id="function-date" class="form-control query-form-input" autofocus  name="function_date" required>
                                    </div>
<?php
            switch ($single_data[0]['category']) {
            case 1:
                // echo "Venues";
                ?>
<!-- // Type of Venue Space required: [Dropdown: Indoor / Outdoor / Both] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Type of Venue Space required</p>
                                        <select name="venue_type" class="form-control query-form-input" id="venue-type" required="">
                                            <option value="">Select</option>
                                            <option value="Indoor">Indoor</option>
                                            <option value="Outdoor">Outdoor</option>
                                            <option value="Both">Both</option>                  
                                        </select>
                                    </div>
<!-- // Approximate Guest Count: [Number Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Approximate Guest Count</p>
                                        <input type="number" id="venue-guest-count" class="form-control query-form-input" autofocus  name="venue_guest_count" required>
                                    </div>
<!-- // Budget Range for Venue: [Dropdown: Below 1 Lakh, 1-2 Lakhs, 2-5 Lakhs, 5-10 Lakhs, Above 10 lakhs] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Budget Range for Venue</p>
                                        <select name="venue_budget_range" class="form-control query-form-input" id="venue-budget-range" required="">
                                            <option value="">Select</option>
                                            <option value="Below 1 Lakh">Below 1 Lakh</option>
                                            <option value="1 Lakh - 2 Lakhs">1 Lakh - 2 Lakhs</option>
                                            <option value="2 Lakhs - 5 Lakhs">2 Lakhs - 5 Lakhs</option>                  
                                            <option value="5 Lakhs - 10 Lakhs">5 Lakhs - 10 Lakhs</option>                  
                                            <option value="Above 10 lakhs">Above 10 lakhs</option>                  
                                        </select>
                                    </div>
            <?php     
            break;
            case 2:
                // echo "Bridal Wear";
                ?>
<!-- // Preferred Outfit Style: [Dropdown: Traditional / Contemporary / Fusion/ Designer] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Preferred Outfit Style</p>
                                        <select name="bridal_outfit_style" class="form-control query-form-input" id="bridal-outfit-style" required="">
                                            <option value="">Select</option>
                                            <option value="Traditional">Traditional</option>
                                            <option value="Contemporary">Contemporary</option>
                                            <option value="Fusion">Fusion</option>                  
                                            <option value="Designer">Designer</option>                                    
                                        </select>
                                    </div>
<!-- // Budget Range for Bridal Wear: [Dropdown: Below 5000 / 5000 – 10,000 /10,000-25,000/25,000-50,000/ 50,000- 1 lakh/ Above 1 Lakh] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Budget Range for Bridal Wear</p>
                                        <select name="bridal_budget_range" class="form-control query-form-input" id="bridal-budget-range" required="">
                                            <option value="">Select</option>
                                            <option value="Below 5000">Below 5000</option>
                                            <option value="5000 - 10,000">5000 - 10,000</option>
                                            <option value="10,000 - 25,000">10,000 - 25,000</option>                  
                                            <option value="25,000 - 50,000">25,000 - 50,000</option>                                    
                                            <option value="50,000 - 1 lakh">50,000 - 1 lakh</option>                                    
                                            <option value="Above 1 Lakh">Above 1 Lakh</option>                                    
                                        </select>
                                    </div>
            <?php
            break;
            case 3:
                // echo "Groom Wear";
                ?>
<!-- // Preferred Outfit Style: [Dropdown: Traditional / Western / Indo-Western] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Preferred Outfit Style</p>
                                        <select name="groom_outfit_style" class="form-control query-form-input" id="groom-outfit-style" required="">
                                            <option value="">Select</option>
                                            <option value="Traditional">Traditional</option>
                                            <option value="Western">Western</option>
                                            <option value="Indo-Western">Indo-Western</option>                                                      
                                        </select>
                                    </div>
<!-- // Budget Range for Groom Wear: [Dropdown: Below 50,000 / 5,000 - 10,000 /10,000-25,000/ 25,000 – 50,000/ Above 50,000] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Budget Range for Groom Wear</p>
                                        <select name="groom_budget_range" class="form-control query-form-input" id="groom-budget-range" required="">
                                            <option value="">Select</option>
                                            <option value="Below 5000">Below 5000</option>
                                            <option value="5000 - 10,000">5000 - 10,000</option>
                                            <option value="10,000 - 25,000">10,000 - 25,000</option>                  
                                            <option value="25,000 - 50,000">25,000 - 50,000</option>                                    
                                            <option value="Above 50,000">Above 50,000</option>                                    
                                        </select>
                                    </div>
            <?php
            break;
            case 4:
                // echo "Photographers";
                ?>
<!-- // Type of Event Coverage Needed: [Checkbox: Wedding Ceremony / Pre-Wedding Shoot / Reception / Full Wedding Package] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Type of Event Coverage Needed</p>
                                        <div class="row py-3">
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="photo_type_of_event[]" id="photo_type_of_event1" value="Wedding Ceremony"> <span> Wedding Ceremony</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="photo_type_of_event[]" id="photo_type_of_event2" value="Pre-Wedding Shoot"><span>Pre-Wedding Shoot</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="photo_type_of_event[]" id="photo_type_of_event3" value="Reception"><span>Reception</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="photo_type_of_event[]" id="photo_type_of_event4" value="Full Wedding Package"><span>Full Wedding Package</span></label>
                                            </div>
                                        </div>
                                    </div>
<!-- // Per day Budget Range for Photography Services: [Dropdown: Below 50,000 / 50,000 - 1,00,000 / Above 1,00,000] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Per day Budget Range for Photography Services</p>
                                        <select name="photo_day_budget" class="form-control query-form-input" id="photo-day-budget" required="">
                                            <option value="">Select</option>
                                            <option value="Below 50,000">Below 50,000</option>
                                            <option value="50,000 - 1 Lakh">50,000 - 1 Lakh</option>
                                            <option value="Above 1 Lakh">Above 1 Lakh</option>                                                     
                                        </select>
                                    </div>
<!-- // Expected Number of Guests: [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Expected Number of Guests</p>
                                        <input type="number" id="phpto-number-of-guest" class="form-control query-form-input" autofocus  name="phpto_number_of_guest" required>
                                    </div>
<!-- // Location of Event: [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Location of Event</p>
                                        <input type="text" id="photo-event-location" class="form-control query-form-input" autofocus  name="photo_event_location" required>
                                    </div>
            <?php
            break;
            case 5:
                // echo "Make Up Artists";
                ?>
<!-- // Type of Makeup Services Needed: [Checkbox: Bridal Makeup / Party Makeup / Engagement Makeup / Other] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Type of Makeup Services Needed</p>
                                        <div class="row py-3">
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="make_up_type[]" id="make_up_type1" value="Bridal Makeup"> <span> Bridal Makeup</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="make_up_type[]" id="make_up_type2" value="Party Makeup"><span>Party Makeup</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="make_up_type[]" id="make_up_type3" value="Engagement Makeup"><span>Engagement Makeup</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="make_up_type[]" id="make_up_type4" value="Others"><span>Others</span></label>
                                            </div>
                                        </div>
                                    </div>
<!-- // Number of People Requiring Makeup: [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Number of People Requiring Makeup</p>
                                        <input type="number" id="make-up-people-requiring" class="form-control query-form-input" autofocus  name="make_up_people_requiring" required>
                                    </div>
<!-- // Budget Range for Bridal Makeup Services: [Dropdown: Below 5,000 / 5,000 - 10,000 /10,000-20,000/ Above 20,000] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Budget Range for Bridal Makeup Services</p>
                                        <select name="make_up_budget_range" class="form-control query-form-input" id="make-up-budget-range" required="">
                                            <option value="">Select</option>
                                            <option value="Below 5,000">Below 5,000</option>
                                            <option value="5,000 - 10,000">5,000 - 10,000</option>
                                            <option value="10,000 - 20,000">10,000 - 20,000</option>
                                            <option value="Above 20,000">Above 20,000</option>                                                     
                                        </select>
                                    </div>
<!-- // Brands or Products Requested: [Dropdown: International/ Indian/ Local/ Mix of all] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Brands or Products Requested</p>
                                        <select name="make_up_brands" class="form-control query-form-dropdown" id="make-up-brands" required="">
                                            <option value="">Select</option>
                                            <option value="International">International</option>
                                            <option value="Indian">Indian</option>
                                            <option value="Local">Local</option>
                                            <option value="Mix of all">Mix of all</option>                                                     
                                        </select>
                                    </div>
<!-- // Location for Makeup Session: [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Location for Makeup Session</p>
                                        <input type="text" id="make-up-session-location" class="form-control query-form-input" autofocus  name="make_up_session_location" required>
                                    </div>
            <?php
            break;
            case 6:
                // echo "Mehendi Artists";
                ?>
<!-- // Number of People Getting Mehendi Applied: [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Number of People Getting Mehendi Applied</p>
                                        <input type="number" id="mehendi-no-of-people" class="form-control query-form-input" autofocus  name="mehendi_no_of_people" required>
                                    </div>
<!-- // Budget Range for Mehendi Services: [Dropdown: Below 10,000 / 10,000 - 20,000 / Above 20,000] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Budget Range for Mehendi Services</p>
                                        <select name="mehendi_budget_range" class="form-control query-form-input" id="mehendi-budget-range" required="">
                                            <option value="">Select</option>
                                            <option value="Below 10,000">Below 10,000</option>
                                            <option value="10,000 - 20,000">10,000 - 20,000</option>
                                            <option value="Above 20,000">Above 20,000</option>                                                     
                                        </select>
                                    </div>
<!-- // Preferred Mehendi Application Style: [Checkbox: Traditional / Arabic / Bridal / Intricate Designs / Minimalist Designs / Other] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Preferred Mehendi Application Style</p>
                                        <div class="row py-3">
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="mehendi_style[]" id="mehendi_style1" value="Traditional"> <span> Traditional</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="mehendi_style[]" id="mehendi_style2" value="Arabic"><span>Arabic</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="mehendi_style[]" id="mehendi_style3" value="Bridal"><span>Bridal</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="mehendi_style[]" id="mehendi_style4" value="Intricate Designs"><span>Intricate Designs</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="mehendi_style[]" id="mehendi_style4" value="Minimalist Designs"><span>Minimalist Designs</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="mehendi_style[]" id="mehendi_style5" value="Others"><span>Others</span></label>
                                            </div>
                                        </div>
                                    </div>
<!-- // Location for Mehendi Application: [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Location for Mehendi Application</p>
                                        <input type="text" id="mehendi-location" class="form-control query-form-input" autofocus  name="mehendi_location" required>
                                    </div>
            <?php
            break;
            case 7:
                // echo "Bridal Jewellery";
                ?>
<!-- // Type of Jewellery Needed: [Checkbox: Bridal Necklace / Earrings / Maang Tikka /Bridal Accessories / Others] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Type of Jewellery Needed</p>
                                        <div class="row py-3">
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="jewellery_type[]" id="jewellery_type1" value="Bridal Necklace"> <span> Bridal Necklace</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="jewellery_type[]" id="jewellery_type2" value="Earrings"><span>Earrings</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="jewellery_type[]" id="jewellery_type3" value="Maang Tikka"><span>Maang Tikka</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="jewellery_type[]" id="jewellery_type4" value="Bridal Accessories"><span>Bridal Accessories</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="jewellery_type[]" id="jewellery_type5" value="Others"><span>Others</span></label>
                                            </div>
                                        </div>
                                    </div>
<!-- // Budget Range for Jewelry: [Dropdown: Below 30,000 / 30,000 - 50,000 / 50,000- 1 lakh/ 1 lakh – 2 lakh/ Above 2 Lakhs] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Budget Range for Jewelry</p>
                                        <select name="jewellery_budget_range" class="form-control query-form-input" id="jewellery-budget-range" required="">
                                            <option value="">Select</option>
                                            <option value="Below 30,000">Below 30,000</option>
                                            <option value="30,000 - 50,000">30,000 - 50,000</option>
                                            <option value="50,000 - 1 lakh">50,000 - 1 lakh</option>                                                     
                                            <option value="1 lakh - 2 lakhs">1 lakh - 2 lakhs</option>                                                     
                                            <option value="Above 2 Lakhs">Above 2 Lakhs</option>                                                     
                                        </select>
                                    </div>

            <?php
            break;
            case 8:
                // echo "Decoration";
                ?>
<!-- // Type of Decoration Services Needed: [Checkbox: Mandap Decoration / Stage Decoration / Venue Entrance / Full Event decoration/ Others] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Type of Decoration Services Needed</p>
                                        <div class="row py-3">
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="decoration_type[]" id="decoration_type1" value="Mandap Decoration"> <span>Mandap Decoration</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="decoration_type[]" id="decoration_type2" value="Stage Decoration"><span>Stage Decoration</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="decoration_type[]" id="decoration_type3" value="Venue Entrance"><span>Venue Entrance</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="decoration_type[]" id="decoration_type4" value="Full Event decoration"><span>Full Event decoration</span></label>
                                            </div>
                                            <div class="col-md-6">
                                                <label><input type="checkbox" name="decoration_type[]" id="decoration_type5" value="Others"><span>Others</span></label>
                                            </div>
                                        </div>
                                    </div>
<!-- // Estimated Guest Count: [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Estimated Guest Count</p>
                                        <input type="number" id="decoration-guest-count" class="form-control query-form-input" autofocus  name="decoration_guest_count" required>
                                    </div>
<!-- // Budget Range for Decoration:[Dropdown: Below 50,000 / 50,000 - 1,00,000 / 1-2 Lakhs/ 2-5 lakhs/ Above 5 lakhs] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Budget Range for Decoration</p>
                                        <select name="decoration_budget_range" class="form-control query-form-input" id="decoration-budget-range" required="">
                                            <option value="">Select</option>
                                            <option value="Below 50,000">Below 50,000</option>
                                            <option value="50,000 - 1 Lakh">50,000 - 1 Lakh</option>
                                            <option value="1 Lakh - 2 Lakhs">1 Lakh - 2 Lakhs</option>                                                     
                                            <option value="2 Lakhs - 5 lakhs">2 Lakhs - 5 lakhs</option>                                                     
                                            <option value="Above 5 lakhs">Above 5 lakhs</option>                                                     
                                        </select>
                                    </div>
<!-- // Preferred Style of Decoration: [Dropdown: Traditional / Contemporary / Fusion / Customised/ Other] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Preferred Style of Decoration</p>
                                        <select name="decoration_style" class="form-control query-form-input" id="decoration-style" required="">
                                            <option value="">Select</option>
                                            <option value="Traditional">Traditional</option>
                                            <option value="Contemporary">Contemporary</option>
                                            <option value="Fusion">Fusion</option>
                                            <option value="Customised">Customised</option>                                                     
                                            <option value="Other">Other</option>                                                     
                                        </select>
                                    </div>
<!-- // Venue Address for Decoration Setup: [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Venue Address for Decoration Setup</p>
                                        <input type="text" id="decoration-address" class="form-control query-form-input" autofocus  name="decoration_address" required>
                                    </div>
            <?php
            break;
            case 9:
                // echo "Gifts";
                ?>
<!-- // Type of Gift/favours required [Edible/Non-Edible/Both] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Type of Gift/favours required</p>
                                        <select name="gift_type" class="form-control query-form-input" id="gift-type" required="">
                                            <option value="">Select</option>
                                            <option value="Edible">Edible</option>
                                            <option value="Non-Edible">Non-Edible</option>
                                            <option value="Both">Both</option>                                                     
                                        </select>
                                    </div>
<!-- // Minimum number of Gifts required: [Text entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Minimum number of Gifts required</p>
                                        <input type="number" id="gift-number-of" class="form-control query-form-input" autofocus  name="gift_number_of" required>
                                    </div>
<!-- // Per Gift range: [Dropdown: Below Rs. 100/ Rs. 100-250/ Rs. 250-500/ Rs. 500-1000/ Above Rs. 1000 -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Per Gift range</p>
                                        <select name="gift_price_range" class="form-control query-form-input" id="gift-price-range" required="">
                                            <option value="">Select</option>
                                            <option value="Below Rs. 100">Below Rs. 100</option>
                                            <option value="Rs. 100 - 250">Rs. 100 - 250</option>
                                            <option value="Rs. 250 - 500">Rs. 250 - 500</option>                                                     
                                            <option value="Rs. 500 - 1000">Rs. 500 - 1000</option>                                                     
                                            <option value="Above Rs. 1000">Above Rs. 1000</option>                                                     
                                        </select>
                                    </div>
            <?php
            break;
            case 10:
                // echo "Catering";
                ?>
<!-- // Number of People to be served: [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Number of People to be served</p>
                                        <input type="number" id="catering-no-of-people" class="form-control query-form-input" autofocus  name="catering_no_of_people" required>
                                    </div>
<!-- // Total number of functions: [Text entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Total number of functions</p>
                                        <input type="number" id="catering-no-of-function" class="form-control query-form-input" autofocus  name="catering_no_of_function" required>
                                    </div>
<!-- // Per Plate budget for reception: [Dropdown: Less than 250/ 250-500/ 500-750/750-1000/ 1000-1500/ 1500-2000/ above 2000] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Per Plate budget for reception</p>
                                        <select name="catering_per_plate_budget" class="form-control query-form-input" id="catering-per-plate-budget" required="">
                                            <option value="">Select</option>
                                            <option value="Less than Rs. 250">Less than Rs. 250</option>
                                            <option value="Rs. 250 - 500">Rs. 250 - 500</option>
                                            <option value="Rs. 500 - 750">Rs. 500 - 750</option>                                                     
                                            <option value="Rs. 750 - 1000">Rs. 750 - 1000</option>                                                     
                                            <option value="Rs. 1000 - 1500">Rs. 1000 - 1500</option>                                                     
                                            <option value="Rs. 1500 - 2000">Rs. 1500 - 2000</option>                                                     
                                            <option value="Above Rs. 2000">Above Rs. 2000</option>                                                     
                                        </select>
                                    </div>     
<!-- // Preferred food type: [Dropdown: Veg/ Non-veg/ Both] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Preferred food type</p>
                                        <select name="catering_food_type" class="form-control query-form-input" id="catering-food-type" required="">
                                            <option value="">Select</option>
                                            <option value="Veg">Veg</option>
                                            <option value="Non-veg">Non-veg</option>
                                            <option value="Both">Both</option>                                                     
                                        </select>
                                    </div>
<!-- // Location of event: [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Location of event</p>
                                        <input type="text" id="catering-event-location" class="form-control query-form-input" autofocus  name="catering_event_location" required>
                                    </div>
            <?php
            break;
            case 13:
                // echo "Invitations";
                ?>
<!-- // Type of Invitation cards required: [ Traditional/ Artsistic/ Boxed/ Luxurious/ Others] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Type of Invitation cards required</p>
                                        <select name="invitation_type" class="form-control query-form-input" id="invitation-type" required="">
                                            <option value="">Select</option>
                                            <option value="Traditional">Traditional</option>
                                            <option value="Artsistic">Artsistic</option>
                                            <option value="Boxed">Boxed</option>                                                     
                                            <option value="Luxurious">Luxurious</option>                                                     
                                            <option value="Others">Others</option>                                                     
                                        </select>
                                    </div>
<!-- // Minimum Number of cards required: [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Minimum Number of cards required</p>
                                        <input type="number" id="invitation-number-of-cards" class="form-control query-form-input" autofocus  name="invitation_number_of_cards" required>
                                    </div>
<!-- // Per Card Budget range: [Dropdown: Below Rs. 10/ Rs. 10-20/ Rs. 20-50/ Rs. 50-100/ Rs.100-200/ Rs.200 – 500/ Above Rs. 500 -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Per Card Budget range</p>
                                        <select name="invitation_card_budget" class="form-control query-form-input" id="invitation-card-budget" required="">
                                            <option value="">Select</option>
                                            <option value="Below Rs. 10">Below Rs. 10</option>
                                            <option value="Rs. 10 - 20">Rs. 10 - 20</option>
                                            <option value="Rs. 20 - 50">Rs. 20 - 50</option>                                                     
                                            <option value="Rs. 50 - 100">Rs. 50 - 100</option>                                                     
                                            <option value="Rs. 100 - 200">Rs. 100 - 200</option>                                                     
                                            <option value="Rs. 200 - 500">Rs. 200 - 500</option>                                                     
                                            <option value="Above Rs. 500">Above Rs. 500</option>                                                     
                                        </select>
                                    </div>

            <?php
            break;                                        
            default:
                // echo "default";
            break;
        }
        ?>
<!-- // Additional Comments or Questions [Text Area]            -->
                                    <div class="col-12">
                                        <p class="query-form-label">Additional Comments or Questions</p>
                                        <textarea id="comment" class="form-control query-form-input" autofocus  name="comment" required></textarea>
                                    </div>
        <?php
        }else{
            ?>
            <!-- //default form -->
<!-- // Name  [Text Entry] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Name</p>
                                        <input type="text" id="name" class="form-control query-form-input desk-name" autofocus  name="name" required>
                                    </div>
<!-- // Phone Number  [Text Entry] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Phone Number</p>
                                        <input type="text" id="phone-no" class="form-control query-form-input" autofocus  name="phone_no" required>
                                    </div>
<!-- // Email Address  [Text Entry] -->
                                    <div class="col-md-12">
                                        <p class="query-form-label">Email Address</p>
                                        <input type="email" id="email" class="form-control query-form-input" autofocus  name="email" required>
                                    </div>
<!-- // Function date [Date Picker] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Function date</p>
                                        <input type="date" id="function-date" class="form-control query-form-input" autofocus  name="function_date" required>
                                    </div>
<!-- // A message box to input the details that customer wants. [Text Area] -->
                                    <div class="col-12">
                                        <p class="query-form-label">Message</p>
                                        <textarea id="message" class="form-control query-form-input" autofocus  name="message" required></textarea>
                                    </div>
        <?php
        }
                                  ?>

                                    <div class="col-12" style="text-align: left;">
                                        <button type="submit" class="plnningModalbtn" name="vendorquerysubmitbtn">Submit</button>
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                <!--</div>-->
            <!--</div>-->
            
            <!--<div class="col-lg-5 right_col desktop_area">-->
                <!--<div class="vendor_price price_sec_desk">-->
                <?php if (!empty($deals_data[0]['image'])) { ?>
                        <!--deals & coupon-->
                        <div class="vendor_img mt-10" style="margin-top:25px;">
                            <div class="price_drop_down">
                        <!--<h5 class="vendor_price_drop" id="vendor_price">-->
                            <!-- &#8377  -->
                            <!--₹680 - ₹771                        </h5>-->
                        <p>Deals & Coupons</p>
                        <hr>
                    </div>
                            <!--<span>Deals & Coupons</span>-->
                                  <!--<span id="theList" value='<?php echo $deals_data[0]['coupon_code']; ?>'><?php echo $deals_data[0]['coupon_code']; ?></span>-->
          <!--<button style="margin-top:-35px;" onclick="copyToClipboardWithJavascript()"><h4><?php echo $deals_data[0]['custom_text']; ?></h4></button>-->
                        <div class="body" style="margin-top:20px;">
      <div class="inner-body d-flex flex-nowrap owl-carousel" id="categorySliderCarousel2">
                            <?php
                            // image slider 
                            if (!empty($deals_data[0]['image'])) {
//                                $image = explode(',', $single_data[0]['images']);
                                $image = $deals_data;
                                $count_img = count($image);
                                $i = 1;
                                foreach ($image as $img) {
                                $path = FCPATH . 'uploads/deals/' . $img['image']; 
                                    if (file_exists($path)) { ?>
                                        <?php if($img['start_date'] < DATETIME && $img['end_date'] > DATETIME){ ?>               
          <!--<a href="<?php echo base_url() ?>Single-Deal-Details/<?php $img['deal_id']; ?>" class="box d-flex flex-column align-items-center justify-content-center">-->
          <a style="pointer-events: none;color:#000000" href="void(0)" class="box d-flex flex-column align-items-center justify-content-center">
                                            <div style="margin-top:0px;padding-top:15px;"><h4><?php echo $img['title'].' | <span style="border: 1px dashed lightgray;padding: 5px;background-color: ghostwhite;">'.$img['coupon_code'].'</span> | '.$img['discount_value']; ?></h4></div>
                                             <div style="margin-top:0px;"><h4><?php echo $img['description']; ?></h4></div>  
                                             <div class="image" style="margin-top:10px;">
          <!--<div class="carousel-item">-->
            <img src="<?php echo base_url() ?>uploads/deals/<?php echo $img['image']; ?>" alt="image" class="white">
            <!--<img src="<?php echo base_url() ?>assets/front/image/home-icon/MWP-BRIDAL-JEWELLERY-PINK.png" alt="image" class="hover">-->
          </div>
        </a>
<!--//                                        echo '<div class="carousel-item ' . ($i == 1 ? 'active' : '') . '">-->
<!--//                                        <img class="img-fluid vf_img w-100" src="' . base_url() . 'uploads/deals/' . $img['image'] . '" class="img-fluid Card image cap">-->
<!--//                                    </div>';-->
                                    <?php 
                                    }
                                    } else {
//                                        echo '<div class="carousel-item ' . ($i == 1 ? 'active' : '') . '">
//                                        <img class="img-fluid vf_img w-100" src="' . base_url() . 'uploads/deals/MWP NA.png" class="img-fluid Card image cap">
//                                    </div>';
                                    }
                                    $i++;
                                }
                            } else {
//                                echo '<img class="img-fluid vf_img w-100" src="' . base_url() . 'uploads/MWP NA.png" class="img-fluid Card image cap">';
                            }

                            ?>
                </div>
                        <?php } ?>
                
                </div>          
            </div>
    </div>
</section>
<!-- ===============  -->
<section class="bridal_sec common_Section">
    <div class="container">
        <hr>
        <div class="heading">
            <?php
            $vendor_type = $this->uri->segment(2);
            foreach ($similar_data['category_count'] as $count1) {
                $count = $count1['category_count'];
            }
            ?>
            <h2 style="color: #FD152A;font-weight: 700">Similar <?php echo $single_data[0]['cat_name'] ?>: (<?php echo isset($count) ? $count : 0 ?>)</h2>
        </div>
        <div class="row">
            <div class="owl-carousel vendor_slider">
                <?php
                $type = $this->uri->segment(2);
                
                foreach ($similar_data['result'] as $similar_data) {
                    $path = FCPATH . 'uploads/vendors/' . $similar_data['images'];
                    $output = '<div class="col-12 vendor-col my-2">
                <span class="vendor-tag"><i class="fas fa-heart"></i> '.$similar_data['tag_name'].'</span>
                <a href="' . base_url() . 'vendor-detail/' . $type . '/' . $similar_data['vendor_seo_url'] . '">
                <div class="card">
                    <div class="view overlay">';

                    if (file_exists($path)) {
                        $output .= '<img class="card-img-top" src="' . base_url() . 'uploads/vendors/' . $similar_data['images'] . '" class="img-fluid Card image cap">';
                    } else {
                        $output .= '<img class="card-img-top" src="' . base_url() . 'uploads/vendors/MWP NA.png" class="img-fluid Card image cap">';
                    }

                    $output .= '<a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>
                    <div class="card-body elegant-color white-text rounded-bottom">
                    <span class="text-muted category-text">' . $similar_data['cat_name'] . '</span>
                    <h4 class="card-title font-weight-bold" title="' . $similar_data['vendor_name'] . '">' . $similar_data['vendor_name'] . '</h4>
                    <hr class="hr-light">
                    <p class="mb-2"><b>Ratings </b>
                      ' . decimal_to_stars($similar_data['rating']) . ' (' . $similar_data['review'] . ' Review)
                    </p>
                    <p class="card-text money-symbol"> <b></b><b>';
                    if (isset($similar_data['price_range'])) {
                        if ($similar_data['price_range'] == '₹') {
                            $output .=  $similar_data['price_range'] . '(Budget friendly)';
                        } elseif ($similar_data['price_range'] == '₹₹') {
                            $output .=  $similar_data['price_range'] . '(Value for money)';
                        } elseif ($similar_data['price_range'] == '₹₹₹') {
                            $output .=  $similar_data['price_range'] . '(Exclusive / Premium)';
                        }
                    }
                    $output .= '</b> </p>
                    <p class="lead"><strong><i class="fas fa-location"></i>' . $similar_data['area'] . ', ' . $similar_data['city_name'] . '</strong></p>
                    <!-- Link -->
                    <a href="' . base_url() . 'vendor-detail/' . $type . '/' . $similar_data['vendor_seo_url'] . '" class="white-text d-flex justify-content-end view-category">
                        <span class="fa-solid fa-caret-right" style="color:#FD4251; margin-top: 3px;margin-right: 5px"></span> View
                    </a>
                    </div>
                </div>
                </a>
            </div>';
                    echo $output;
                ?>
                <?php
                }
                ?>
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
                <a href="<?php echo base_url()?>service/vendorrecommendation"><button class="btn get_start">Get Started</button></a>
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
                    <!-- <img src="<?php echo base_url() . SERVICE ?>Group1438.png" class="img-fluid w-50" alt=""> -->
                </div>
            </div>
            <div class="col-md-12 text-center">
               <a href="https://www.facebook.com/myweddingpaletteofficial"> <img src="<?php echo base_url() . SERVICE ?>s1.png" class="img-fluid" alt=""></a>
               <a href="https://www.instagram.com/myweddingpaletteofficial/"> <img src="<?php echo base_url() . SERVICE ?>s2.png" class="img-fluid" alt=""></a>
               <a href="https://mail.google.com/mail/u/0/?fs=1&to=mwp@myweddingpalette.com&tf=cm"> <img src="<?php echo base_url() . SERVICE ?>s4.png" class="img-fluid" alt=""></a>
               <a href="https://in.pinterest.com/myweddingpalette/"> <img src="<?php echo base_url() . SERVICE ?>pinterest.png" class="img-fluid" alt=""></a>
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); ?>

<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.9.0/js/bootstrap-datepicker.min.js"></script>

<script type="text/javascript">
function setFocusToTextBox(){
    document.getElementById("weddingplanningfname").focus();
}
setFocusToTextBox();
// document.addEventListener("DOMContentLoaded", function() {
//   var rightColumn = document.querySelector('.right_col');
//   var leftColumn = document.querySelector('.left_col');

//   window.addEventListener('scroll', function() {
//     var leftColumnHeight = leftColumn.offsetHeight;
//     var scrollTop = window.scrollY;

//     if (scrollTop < leftColumnHeight) {
//       rightColumn.style.position = 'sticky';
//       rightColumn.style.top = '0';
//     } else {
//       rightColumn.style.position = 'static';
//     }
//   });
// });

</script>
<script>
function copyToClipboardWithJavascript() {
////    alert();
//  /* Get the text field */
//  var copyText = document.getElementById("theList");
//  /* Select the text field */
//  copyText.select();
//  /* Copy the text inside the text field */
//  document.execCommand("copy");
//}
</script>