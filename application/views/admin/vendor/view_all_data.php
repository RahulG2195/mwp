<?php $this->load->view('admin/layout/header'); ?>

<?php $this->load->view('admin/layout/sidebar'); ?>

<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/style.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor_form.css">
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
    <?php
    // echo "<pre>";
    // print_r($vendor_data);
    // echo "</pre>";

    foreach ($vendor_data as $val) {
        $bw_idc = !empty($val['bw_idc']) ? $val['bw_idc'] : 'N/A';
        $vin_id = !empty($val['vin_id']) ? $val['vin_id'] : 'N/A';
        $shop_type = !empty($val['shop_type']) ? $val['shop_type'] : 'N/A';
        $prod_offer = !empty($val['prod_offer']) ? $val['prod_offer'] : 'N/A';
        $start_price = !empty($val['start_price']) ? $val['start_price'] : 'N/A';
        $exp_since = !empty($val['exp_since']) ? $val['exp_since'] : 'N/A';
        $app_req = !empty($val['app_req']) ? $val['app_req'] : 'N/A';
        $occations = !empty($val['occations']) ? explode(',', $val['occations']) : 'N/A';
        $fabric_used = !empty($val['fabric_used']) ? explode(',', $val['fabric_used']) : 'N/A';
        $prod_type = !empty($val['prod_type']) ? explode(',', $val['prod_type']) : 'N/A';
        $emblishments = !empty($val['emblishments']) ? explode(',', $val['emblishments']) : 'N/A';
        $collection_type = !empty($val['collection_type']) ? explode(',', $val['collection_type']) : 'N/A';
        $design_style = !empty($val['design_style']) ? explode(',', $val['design_style']) : 'N/A';
        $customize_avail = !empty($val['customize_avail']) ? $val['customize_avail'] : 'N/A';
        $lead_time = !empty($val['lead_time']) ? $val['lead_time'] : 'N/A';
        $ship_out = !empty($val['ship_out']) ? $val['ship_out'] : 'N/A';
        $availability = !empty($val['availability']) ? explode(',', $val['availability']) : 'N/A';
        $dv_id = !empty($val['dv_id']) ? $val['dv_id'] : 'N/A';
        $vendor_name = !empty($val['vendor_name']) ? $val['vendor_name'] : 'N/A';
        $vendor_email = !empty($val['vendor_email']) ? $val['vendor_email'] : 'N/A';
        $vendor_prof_mobile = !empty($val['vendor_prof_mobile']) ? $val['vendor_prof_mobile'] : 'N/A';
        $user_name = !empty($val['user_name']) ? $val['user_name'] : 'N/A';
        $password = !empty($val['password']) ? $val['password'] : 'N/A';
        $city = !empty($val['city']) ? $val['city'] : 'N/A';
        $area = !empty($val['area']) ? $val['area'] : 'N/A';
        $phone_no = !empty($val['phone_no']) ? $val['phone_no'] : 'N/A';
        $address = !empty($val['address']) ? $val['address'] : 'N/A';
        $website = !empty($val['website']) ? $val['website'] : 'N/A';
        $category = !empty($val['category']) ? $val['category'] : 'N/A';
        $sub_category = !empty($val['sub_category']) ? $val['sub_category'] : 'N/A';
        $price_range = !empty($val['price_range']) ? $val['price_range'] : 'N/A';
        $end_price = !empty($val['end_price']) ? $val['end_price'] : 'N/A';
        $business_day = !empty($val['business_day']) ? explode(',', $val['business_day']) : 'N/A';
        $business_hr = !empty($val['business_hr']) ? explode(',', $val['business_hr']) : 'N/A';
        $social_media = !empty($val['social_media']) ? explode(',', $val['social_media']) : 'N/A';
        $social_link = !empty($val['social_link']) ? explode(',', $val['social_link']) : 'N/A';
        $about = !empty($val['about']) ? $val['about'] : 'N/A';
        $images = !empty($val['images']) ? $val['images'] : 'N/A';
        $comp_logo = !empty($val['comp_logo']) ? $val['comp_logo'] : 'N/A';
        $service_offer = !empty($val['service_offer']) ? $val['service_offer'] : 'N/A';
        $payment_opt = !empty($val['payment_opt']) ? explode(',', $val['payment_opt']) : 'N/A';
        $advance_per = !empty($val['advance_per']) ? $val['advance_per'] : 'N/A';
        $cancel_policy = !empty($val['cancel_policy']) ? $val['cancel_policy'] : 'N/A';
        $vendor_status = !empty($val['vendor_status']) ? $val['vendor_status'] : 'N/A';
        $created_on = !empty($val['created_on']) ? $val['created_on'] : 'N/A';
        $category_id = !empty($val['category_id']) ? $val['category_id'] : 'N/A';
        $cat_name = !empty($val['cat_name']) ? $val['cat_name'] : 'N/A';
        $sub_category_id = !empty($val['sub_category_id']) ? $val['sub_category_id'] : 'N/A';
        $name = !empty($val['name']) ? $val['name'] : 'N/A';
        $city_id = !empty($val['city_id']) ? $val['city_id'] : 'N/A';
        $city_name = !empty($val['city_name']) ? $val['city_name'] : 'N/A';
    }


    ?>
    <section class="vendor_form_section common_section">
        <div class="container" id="form_cont">
            <div class="row">
                <div class="col-md-12">
                    <form action="<?php echo base_url() . 'Vendor/Insert_Data' ?>" method="post" enctype="multipart/form-data">
                        <div class="card px-3 py-1">
                            <div class="card-header">
                                <h4 class="text-capitalize primary-form-heading">Primary Listing details</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="text" class="form-label vendor-form-label">Vendor Name</label>
                                    <input type="text" class="form-control" id="vendor_name" placeholder="Staple & Fancy Hotel" value="<?php echo $vendor_name ?>" name="vendor_name" Required>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="vendor_email" class="form-label vendor-form-label">Email</label>
                                    <input type="email" class="form-control" id="vendor_email" placeholder="Profession Email" name="vendor_email" Required value="<?php echo $vendor_email ?>">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="phone_no" class="form-label vendor-form-label" Required>Phone</label>
                                    <input type="number" class="form-control" id="phone_no" placeholder="Phone" name="phone_no" value="<?php echo $phone_no ?>">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="vendor_prof_mobile" class="form-label vendor-form-label">Professional Mobile No</label>
                                    <input type="number" class="form-control" id="vendor_prof_mobile" minlength="10" maxlength="13" placeholder="Professional Mobile No" name="vendor_prof_mobile" Required value="<?php echo $vendor_prof_mobile ?>">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="website" class="form-label vendor-form-label">Website</label>
                                    <input type="url" class="form-control" id="website" placeholder="Website" name="website" value="<?php echo $website ?>">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="user_name" class="form-label vendor-form-label">User Name</label>
                                    <input type="text" class="form-control" id="user_name" minlength="10" maxlength="13" placeholder="User Name" name="user_name" Required value="<?php echo $user_name ?>">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="password" class="form-label vendor-form-label">Password</label>
                                    <input type="password" class="form-control" id="password" minlength="10" maxlength="13" placeholder="Password" name="password" Required>
                                    <span id="passwordMessage" class="message"></span>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="pwd" class="form-label vendor-form-label">City</label>
                                    <select name="city" class="form-control" id="city" Required>
                                        <option value="">Select City</option>
                                        <?php
                                        if(isset($city)){
                                            echo '<option value="' . $city . '" selected>' . $city_name . '</option>';
                                        }else{
                                            foreach ($sub_city as $value) {
                                                echo '<option value="' . $value['city_id'] . '">' . $value['name'] . '</option>';
                                            }
                                        }
                                        
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="area" class="form-label vendor-form-label">Area</label>
                                    <input type="text" class="form-control" id="area" placeholder="Your Area" name="area" value="<?php echo $area ?>">
                                </div>
                                <div class="col-12 form-group">
                                    <label for="address" class="form-label vendor-form-label">Full Address</label>
                                    <textarea name="address" id="address" class="form-control" cols="30" rows="2"><?php echo $address ?></textarea>
                                </div>

                                <!-- <div class="col-md-4 form-group">
                                <label for="pwd" class="form-label">Website</label>
                                <input type="text" class="form-control" id="pwd" placeholder="Website" name="website">
                            </div> -->
                                <div class="col-12 form-group">
                                    <label for="payment_opt" class="form-label vendor-form-label">Payment Options</label>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox" name="payment_opt[]" id="payment_opt" value="Cash" <?php echo in_array('Cash', $payment_opt) ? "checked" : '' ?>> <span>Cash</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox" name="payment_opt[]" id="payment_opt" value="Cheque" <?php echo in_array('Cheque', $payment_opt) ? "checked" : '' ?>><span>Cheque/ DD</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox" name="payment_opt[]" id="payment_opt" value="Credit-Debit" <?php echo in_array('Credit-Debit', $payment_opt) ? "checked" : '' ?>><span>Credit/ Debit card</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox" name="payment_opt[]" id="payment_opt" value="Net banking" <?php echo in_array('banking', $payment_opt) ? "checked" : '' ?>><span>Net banking</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox" name="payment_opt[]" id="payment_opt" value="UPI" <?php echo in_array('UPI', $payment_opt) ? "checked" : '' ?>><span>UPI</span>
                                            </label>
                                        </div>
                                        <div class="col-md-4">
                                            <label>
                                                <input type="checkbox" name="payment_opt[]" id="payment_opt" value="Wallets" <?php echo in_array('Wallets', $payment_opt) ? "checked" : '' ?>><span>Mobile Wallets</span>
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-capitalize primary-form-heading">SERVICES</h4>
                            </div>
                            <div class="row">
                                <div class="col-4 form-group">
                                    <label for="service_offer" class="form-label vendor-form-label">Services Offered</label>
                                    <input type="text" class="form-control" id="service_offer" placeholder="Services Offered" name="service_offer" value="<?php echo $service_offer ?>">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="advance_per" class="form-label vendor-form-label">Percentage advance</label>
                                    <input type="number" class="form-control" id="advance_per" placeholder="Percentage advance" name="advance_per" value="<?php echo $advance_per ?>">
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="cancel_policy" class="form-label vendor-form-label">Cancellation Policy</label>
                                    <input type="number" class="form-control" id="cancel_policy" placeholder="Cancellation Policy" name="cancel_policy" value="<?php echo $cancel_policy ?>">
                                </div>
                            </div>
                        </div>
                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-capitalize primary-form-heading">CATEGORY</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-6 form-group">
                                    <label for="category" class="form-label vendor-form-label">Category</label>
                                    <select name="main_category" class="form-control cat_dropdown" id="category" required>
                                        
                                        <?php
                                        if (isset($sub_category)) {
                                            echo '<option value="' . $category . '" selected>' . $cat_name . '</option>';
                                        }else{
                                            echo '<option value="">Select Category</option>';
                                        }
                                        ?>
                                        
                                    </select>
                                </div>
                                <div class="col-md-6 form-group">
                                    <label for="sub_category" class="form-label vendor-form-label">Sub Category</label>
                                    <select name="sub_category" class="form-control" id="sub_category">
                                        <option value="">Please select sub category</option>
                                        <?php
                                        if (isset($sub_category)) {
                                            echo '<option value="' . $sub_category_id . '" selected>' . $name . '</option>';
                                        }
                                        ?>
                                        <!-- data will come after select of category  -->
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-capitalize primary-form-heading">PRICE RANGE</h4>
                            </div>
                            <div class="row">
                                <div class="col-md-4 form-group">
                                    <label for="price_range" class="form-label vendor-form-label">Price Details</label>
                                    <select name="price_range" class="form-control" id="price_range" required>
                                        <option value="">Not To Say</option>
                                        <option value="₹ - Inexpensive" <?php echo ($price_range == '₹ - Inexpensive') ? 'selected' : '' ?>>₹ - Inexpensive</option>
                                        <option value="₹₹ - Moderate" <?php echo ($price_range == '₹₹ - Moderate') ? 'selected' : '' ?>>₹₹ - Moderate</option>
                                        <option value="₹₹₹ - Pricey" <?php echo ($price_range == '₹₹₹ - Pricey') ? 'selected' : '' ?>>₹₹₹ - Pricey</option>
                                        <option value="₹₹₹₹ - Ultra High" <?php echo ($price_range == '₹₹₹₹ - Ultra High') ? 'selected' : '' ?>>₹₹₹₹ - Ultra High</option>
                                    </select>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="start_price" class="form-label vendor-form-label">Price From</label>
                                    <input type="text" class="form-control" id="start_price" value="<?php echo $start_price ?>" placeholder="Price From" name="start_price" required>
                                </div>
                                <div class="col-md-4 form-group">
                                    <label for="end_price" class="form-label vendor-form-label">Price To</label>
                                    <input type="text" class="form-control" id="end_price" value="<?php echo $end_price ?>" placeholder="Price To" name="end_price" required>
                                </div>
                            </div>
                        </div>
                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-capitalize primary-form-heading">BUSINESS HOURS</h4>
                            </div>
                            <div class="row">
                                <div class="col-12">
                                    <!-- remove s from id to make js workable  -->
                                    <div class="default_time" id="dataDisplays">
                                        <?php
                                        for ($i = 0; $i < count($business_day); $i++) {
                                            $val1 = $business_day[$i];
                                            $val2 = $business_hr[$i];
                                        ?>
                                            <div class="day_div">
                                                <strong>
                                                    <p><input class="form-control" id="pwd" name="business_day[]" value="<?php echo $val1 ?>"></p>
                                                </strong>
                                                <p>
                                                    <input class="form-control" id="pwd" name="business_hr[]" value="<?php echo $val2 ?>">
                                                </p>
                                            </div>
                                        <?php
                                        }
                                        ?>

                                    </div>
                                </div>
                                <div class="col-12">
                                    <div class="row busin_row">
                                        <div class="col-2 business_hr">
                                            <select name="" id="day">
                                                <option value="Sunday">Sunday</option>
                                                <option value="Monday">Monday</option>
                                                <option value="Tuesday">Tuesday</option>
                                                <option value="Wednesday">Wednesday</option>
                                                <option value="Thursday">Thursday</option>
                                                <option value="Friday">Friday</option>
                                                <option value="Saturday">Saturday</option>
                                            </select>
                                        </div>
                                        <div class="col-2 business_hr">
                                            <select name="" id="start_time" class="form-control start_time">
                                                <option value="12:00 AM">12:00 AM</option>
                                                <option value="12:30 AM">12:30 AM</option>
                                                <option value="01:00 AM">01:00 AM</option>
                                                <option value="01:30 AM">01:30 AM</option>
                                                <option value="02:00 AM">02:00 AM</option>
                                                <option value="02:30 AM">02:30 AM</option>
                                                <option value="03:00 AM">03:00 AM</option>
                                                <option value="03:30 AM">03:30 AM</option>
                                                <option value="04.00 AM">04.00 AM</option>
                                                <option value="04:30 AM">04:30 AM</option>
                                                <option value="05:00 AM">05:00 AM</option>
                                                <option value="05:30 AM">05:30 AM</option>
                                                <option value="06:00 AM">06:00 AM</option>
                                                <option value="06:30 AM">06:30 AM</option>
                                                <option value="07:00 AM">07:00 AM</option>
                                                <option value="07:30 AM">07:30 AM</option>
                                                <option value="08:00 AM">08:00 AM</option>
                                                <option value="08:30 AM">08:30 AM</option>
                                                <option value="09:00 AM" selected>09:00 AM</option>
                                                <option value="09:30 AM">09:30 AM</option>
                                                <option value="10:00 AM">10:00 AM</option>
                                                <option value="10:30 AM">10:30 AM</option>
                                                <option value="11:00 AM">11:00 AM</option>
                                                <option value="11:30 AM">11:30 AM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="12:30 PM">12:30 PM</option>
                                                <option value="01:00 PM">01:00 PM</option>
                                                <option value="01:30 PM">01:30 PM</option>
                                                <option value="02:00 PM">02:00 PM</option>
                                                <option value="02:30 PM">02:30 PM</option>
                                                <option value="03:00 PM">03:00 PM</option>
                                                <option value="03:30 PM">03:30 PM</option>
                                                <option value="04.00 PM">04.00 PM</option>
                                                <option value="04:30 PM">04:30 PM</option>
                                                <option value="05:00 PM">05:00 PM</option>
                                                <option value="05:30 PM">05:30 PM</option>
                                                <option value="06:00 PM">06:00 PM</option>
                                                <option value="06:30 PM">06:30 PM</option>
                                                <option value="07:00 PM">07:00 PM</option>
                                                <option value="07:30 PM">07:30 PM</option>
                                                <option value="08:00 PM">08:00 PM</option>
                                                <option value="08:30 PM">08:30 PM</option>
                                                <option value="09:00 PM">09:00 PM</option>
                                                <option value="09:30 PM">09:30 PM</option>
                                                <option value="10:00 PM">10:00 PM</option>
                                                <option value="10:30 PM">10:30 PM</option>
                                                <option value="11:00 PM">11:00 PM</option>
                                                <option value="11:30 PM">11:30 PM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                            </select>
                                        </div>
                                        <div class="col-2 business_hr">
                                            <select name="" id="end_time" class="form-control end_time">
                                                <option value="12:00 AM">12:00 AM</option>
                                                <option value="12:30 AM">12:30 AM</option>
                                                <option value="01:00 AM">01:00 AM</option>
                                                <option value="01:30 AM">01:30 AM</option>
                                                <option value="02:00 AM">02:00 AM</option>
                                                <option value="02:30 AM">02:30 AM</option>
                                                <option value="03:00 AM">03:00 AM</option>
                                                <option value="03:30 AM">03:30 AM</option>
                                                <option value="04.00 AM">04.00 AM</option>
                                                <option value="04:30 AM">04:30 AM</option>
                                                <option value="05:00 AM">05:00 AM</option>
                                                <option value="05:30 AM">05:30 AM</option>
                                                <option value="06:00 AM">06:00 AM</option>
                                                <option value="06:30 AM">06:30 AM</option>
                                                <option value="07:00 AM">07:00 AM</option>
                                                <option value="07:30 AM">07:30 AM</option>
                                                <option value="08:00 AM">08:00 AM</option>
                                                <option value="08:30 AM">08:30 AM</option>
                                                <option value="09:00 AM">09:00 AM</option>
                                                <option value="09:30 AM">09:30 AM</option>
                                                <option value="10:00 AM">10:00 AM</option>
                                                <option value="10:30 AM">10:30 AM</option>
                                                <option value="11:00 AM">11:00 AM</option>
                                                <option value="11:30 AM">11:30 AM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                                <option value="12:30 PM">12:30 PM</option>
                                                <option value="01:00 PM">01:00 PM</option>
                                                <option value="01:30 PM">01:30 PM</option>
                                                <option value="02:00 PM">02:00 PM</option>
                                                <option value="02:30 PM">02:30 PM</option>
                                                <option value="03:00 PM">03:00 PM</option>
                                                <option value="03:30 PM">03:30 PM</option>
                                                <option value="04.00 PM">04.00 PM</option>
                                                <option value="04:30 PM">04:30 PM</option>
                                                <option value="05:00 PM" selected>05:00 PM</option>
                                                <option value="05:30 PM">05:30 PM</option>
                                                <option value="06:00 PM">06:00 PM</option>
                                                <option value="06:30 PM">06:30 PM</option>
                                                <option value="07:00 PM">07:00 PM</option>
                                                <option value="07:30 PM">07:30 PM</option>
                                                <option value="08:00 PM">08:00 PM</option>
                                                <option value="08:30 PM">08:30 PM</option>
                                                <option value="09:00 PM">09:00 PM</option>
                                                <option value="09:30 PM">09:30 PM</option>
                                                <option value="10:00 PM">10:00 PM</option>
                                                <option value="10:30 PM">10:30 PM</option>
                                                <option value="11:00 PM">11:00 PM</option>
                                                <option value="11:30 PM">11:30 PM</option>
                                                <option value="12:00 PM">12:00 PM</option>
                                            </select>
                                        </div>
                                        <div class="col-2 business_hr">
                                            <div class="form-group">
                                                <label>
                                                    <input type="checkbox" name="24hr" id="tfhr">&nbsp; 24 hours
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-2 business_hr">
                                            <div class="add_div">
                                                <i class="fa fa-plus" id="addButton"></i>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-capitalize primary-form-heading">SOCIAL MEDIA</h4>
                            </div>
                            <div class="row busin_row">
                                <div class="col-12">
                                    <div class="social_display" id="social_displays">
                                        <?php
                                        if(!empty($social_media) && isset($social_media) && $social_media !== 'N/A'){
                                        for ($i = 0; $i < count($social_media); $i++) {
                                            $val1 = $social_media[$i];
                                            $val2 = $social_link[$i];
                                            echo '<div class="day_div">
                                            <strong><p><input class="form-control" id="pwd" name="social_media[]" value="' . $val1 . '" readonly></p></strong>
                                            <p>
                                            <input class="form-control" id="pwd" name="social_link[]" value="' . $val2 . '" readonly></p>
                                            </p>
                                        </div>';
                                        }
                                    }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-2 business_hr">
                                    <label for="" class="vendor-form-label">Social Media</label>
                                </div>
                                <div class="col-3 business_hr">
                                    <select name="" id="media_type">
                                        <option value="">Please Select Social</option>
                                        <option value="FaceBook">FaceBook</option>
                                        <option value="Instagram">Instagram</option>
                                        <option value="Pinterest">Pinterest</option>
                                    </select>
                                </div>
                                <div class="col-3 business_hr">
                                    <input type="url" name="" id="social_link" class="form-control" placeholder="Please add social link">
                                </div>
                                <div class="col-1 business_hr">
                                    <div class="add_div">
                                        <i class="fa fa-plus" id="addSocialButton"></i>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="card my-2 px-3 py-2">
                            <div class="card-header">
                                <h4 class="text-capitalize primary-form-heading">MORE INFO</h4>
                            </div>
                            <div class="common_about">
                                <div class="col-12 form-group">
                                    <label for="about vendor-form-label">About</label>
                                    <textarea name="about" id="about" class="form-control" cols="30" rows="10" required><?php echo $about ?></textarea>
                                </div>
                            </div>
                            <!-- venue  -->
                            <?php
                            if ($category == 1) {
                                $price_per_plate = explode('-', $val['price_per_plate']);
                                $ppps = $price_per_plate[0];
                                $pppe = $price_per_plate[1];

                                $general_cap = explode('-', $val['general_cap']);
                                $gcs = $general_cap[0];
                                $gce = $general_cap[1];

                                $event_spaces = array();
                                if(isset($val['event_spaces'])){
                                    $event_spaces =  explode(',', $val['event_spaces']);
                                }
                                $inhouse_vendor = array();
                                if(isset($val['inhouse_vendor'])){
                                    $inhouse_vendor =  explode(',', $val['inhouse_vendor']);
                                }
                                $external_vendor = array();
                                if(isset($val['external_vendor'])){
                                    $external_vendor =  explode(',', $val['external_vendor']);
                                }
                                $cuisines = array();
                                if(isset($val['cuisines'])){
                                    $cuisines =  explode(',', $val['cuisines']);
                                }
                                $service_avail = array();
                                if(isset($val['service_avail'])){
                                    $service_avail =  explode(',', $val['service_avail']);
                                }   
                            ?>
                                <div class="venue_sec vendor_cat_inputs-admin" id="venue_secs">
                                    <div class="row">
                                        <div class="col-md-4 form-group">
                                            <label for="" class="vendor-form-label">Price per Plate</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="price_per_plate" class="form-label vendor-form-label">Price From</label>
                                            <input type="text" class="form-control" id="price_per_plate" placeholder="Price From" name="price_per_plate_min" value="<?php echo isset($ppps) ? $ppps : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="price_per_plate_max" class="form-label vendor-form-label">Price To</label>
                                            <input type="text" class="form-control" id="price_per_plate_max" placeholder="Price To" name="price_per_plate_max" value="<?php echo isset($pppe) ? $pppe : ''?>">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="" class="vendor-form-label">General Capacity</label>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="general_cap" class="form-label vendor-form-label">Price From</label>
                                            <input type="number" class="form-control" id="general_cap" placeholder="Price From" name="general_cap_min" value="<?php echo isset($gcs) ? $gcs : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="general_cap_max" class="form-label vendor-form-label">Price To</label>
                                            <input type="number" class="form-control" id="general_cap_max" placeholder="Price To" name="general_cap_max" value="<?php echo isset($gce) ? $gce : ''?>">
                                        </div>
                                        <div class="col-6">
                                            <label for="fac_cap" class="form-label vendor-form-label">Facilities and Capacity</label>
                                            <input type="text" class="form-control" id="fac_cap" placeholder="Facilities and capacity" name="fac_cap" value="<?php echo isset($val['fac_cap']) ? $val['fac_cap'] : ''?>">
                                        </div>
                                        <div class="col-6">
                                            <label for="fn_size_allow" class="form-label vendor-form-label">Function Size Allowed</label>
                                            <select name="fn_size_allow" class="form-control" id="fn_size_allow">
                                                <option value="">Select Function size</option>
                                                <option value="0-99" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '0-99') ? 'selected' : ''?>>0-99</option>
                                                <option value="100-199" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '100-199') ? 'selected' : ''?>>100-199</option>
                                                <option value="200-299" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '200-299') ? 'selected' : ''?>>200-299</option>
                                                <option value="300-399" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '300-399') ? 'selected' : ''?>>300-399</option>
                                                <option value="400-499" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '400-499') ? 'selected' : ''?>>400-499</option>
                                                <option value="500-599" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '500-599') ? 'selected' : ''?>>500-599</option>
                                                <option value="600-699" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '600-699') ? 'selected' : ''?>>600-699</option>
                                                <option value="700-799" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '700-799') ? 'selected' : ''?>>700-799</option>
                                                <option value="800 and more" <?php echo (isset($val['fn_size_allow']) && $val['fn_size_allow'] == '800 and more') ? 'selected' : ''?>>800 and more</option>
                                            </select>
                                        </div>
                                        <div class="col-6">
                                            <label for="rental_price" class="form-label vendor-form-label">Rental Price</label>
                                            <input type="text" class="form-control" id="rental_price" placeholder="Rental Price" name="rental_price" value="<?php echo isset($val['rental_price']) ? $val['rental_price'] : ''?>">
                                        </div>

                                        <div class="col-12 my-2">
                                            <label for="">Event Spaces</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Banquet Halls" <?php echo in_array('Banquet Halls', $event_spaces) ? 'checked' : ''?>> Banquet Halls
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Lawns & Farmhouse" <?php echo in_array('Lawns & Farmhouse', $event_spaces) ? 'checked' : ''?>> Lawns & Farmhouse
                                                    </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Resorts" <?php echo in_array('Resorts', $event_spaces) ? 'checked' : ''?>> Resorts
                                                    </label>
                                                </div>
                                                <div class="col-md-2">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Hotels" <?php echo in_array('Hotels', $event_spaces) ? 'checked' : ''?>> Hotels
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Destination Feels" <?php echo in_array('Destination Feels', $event_spaces) ? 'checked' : ''?>> Destination Feels
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Marriage Garden" <?php echo in_array('Marriage Garden', $event_spaces) ? 'checked' : ''?>> Marriage Garden
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="event_spaces[]" value="Palace/ Fort" <?php echo in_array('Palace/ Fort', $event_spaces) ? 'checked' : ''?>> Palace/ Fort
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-6">
                                            <label for="space_avail" class="form-label vendor-form-label">Number of Spaces Available</label>
                                            <input type="number" class="form-control" id="space_avail" placeholder="Number of Spaces Available" name="space_avail" value="<?php echo isset($val['space_avail']) ? $val['space_avail'] : ''?>">
                                        </div>
                                        <div class="col-6">
                                            <label for="guest_accom" class="form-label vendor-form-label">Guest Accommodation (People)</label>
                                            <input type="number" class="form-control" id="guest_accom" placeholder="Guest Accommodation (People)" name="guest_accom" value="<?php echo isset($val['guest_accom']) ? $val['guest_accom'] : ''?>">
                                        </div>

                                        <div class="col-6">
                                            <label for="no_room" class="form-label vendor-form-label">Number Of Rooms</label>
                                            <input type="number" class="form-control" id="no_room" placeholder="Number Of Rooms" name="no_room" value="<?php echo isset($val['no_room']) ? $val['no_room'] : ''?>">
                                        </div>
                                        <div class="col-12">
                                            <label for="inhouse_vendor vendor-form-label">Inhouse Vendors Available</label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="inhouse_vendor[]" value="Catering" <?php echo in_array('Catering', $inhouse_vendor) ? 'checked' : ''?>> Catering
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="inhouse_vendor[]" value="Decorators" <?php echo in_array('Decorators', $inhouse_vendor) ? 'checked' : ''?>>Decorators
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="inhouse_vendor[]" value="DJ" <?php echo in_array('DJ', $inhouse_vendor) ? 'checked' : ''?>> DJ
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="inhouse_vendor[]" value="Others" <?php echo in_array('Others', $inhouse_vendor) ? 'checked' : ''?>> Others
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <label for="external_vendor">External vendors Allowed</label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="external_vendor[]" value="Catering" <?php echo in_array('Catering', $external_vendor) ? 'checked' : ''?>> Catering
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="external_vendor[]" value="Decorators" <?php echo in_array('Decorators', $external_vendor) ? 'checked' : ''?>>Decorators
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="external_vendor[]" value="DJ" <?php echo in_array('DJ', $external_vendor) ? 'checked' : ''?>> DJ
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="external_vendor[]" value="Others" <?php echo in_array('Others', $external_vendor) ? 'checked' : ''?>> Others
                                            </label>
                                        </div>
                                        <div class="col-12">
                                            <label for="cuisines">Cuisines</label>
                                            <div class="row">
                                                <div class="col-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="North Indian / Mughlai" <?php echo in_array('North Indian / Mughlai', $cuisines) ? 'checked' : ''?>> North Indian / Mughlai
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="South Indian" <?php echo in_array('South Indian', $cuisines) ? 'checked' : ''?>> South Indian
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Chinese/Thai/Oriental" <?php echo in_array('Chinese/Thai/Oriental', $cuisines) ? 'checked' : ''?>> Chinese / Thai / Oriental
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Italian / European / Continental" <?php echo in_array('Italian / European / Continental', $cuisines) ? 'checked' : ''?>> Italian / European / Continental
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Garlic Free / Onion Free" <?php echo in_array('Garlic Free / Onion Free', $cuisines) ? 'checked' : ''?>> Garlic Free / Onion Free
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Live Food Counters" <?php echo in_array('Live Food Counters', $cuisines) ? 'checked' : ''?>> Live Food Counters
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Chaat & Indian Street Food" <?php echo in_array('Chaat & Indian Street Food', $cuisines) ? 'checked' : ''?>> Chaat & Indian Street Food
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Drinks (Non-Alcoholic)" <?php echo in_array('Drinks (Non-Alcoholic)', $cuisines) ? 'checked' : ''?>> Drinks (Non-Alcoholic)
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Seafood" <?php echo in_array('Seafood', $cuisines) ? 'checked' : ''?>> Seafood
                                                    </label>
                                                </div>
                                                <div class="col-3">
                                                    <label>
                                                        <input type="checkbox" name="cuisines[]" value="Others" <?php echo in_array('Others', $cuisines) ? 'checked' : ''?>> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4">
                                            <label for="alcohol_policy" class="form-label vendor-form-label">Alcohol Policy Permitted</label>
                                            <select name="alcohol_policy" class="form-control" id="alcohol_policy">
                                                <option value="Yes" <?php echo (isset($val['alcohol_policy']) && $val['alcohol_policy'] == 'Yes') ? 'selected' : ''?>>Yes</option>
                                                <option value="No" <?php echo (isset($val['alcohol_policy']) && $val['alcohol_policy'] == 'No') ? 'selected' : ''?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="veg_menu_range" class="form-label vendor-form-label">Veg Menu range</label>
                                            <select name="veg_menu_range" class="form-control" id="veg_menu_range">
                                                <?php
                                                for ($i = 1; $i <= 250; $i++) {
                                                    if($val['veg_menu_range'] == $i){
                                                        echo '<option value="' . $i . '" selected>' . $i . '</option>';
                                                    }else{
                                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-md-4">
                                            <label for="non_veg_range" class="form-label vendor-form-label">Non Veg Menu range</label>
                                            <select name="non_veg_range" class="form-control" id="non_veg_range">
                                                <?php
                                                for ($i = 1; $i <= 250; $i++) {
                                                    if($val['veg_menu_range'] == $i){
                                                        echo '<option value="' . $i . '" selected>' . $i . '</option>';
                                                    }else{
                                                        echo '<option value="' . $i . '">' . $i . '</option>';
                                                    }
                                                }
                                                ?>
                                            </select>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Multiple Event Spaces Available" <?php echo in_array('Multiple Event Spaces Available', $service_avail) ? 'checked' : ''?>> Multiple Event Spaces Available
                                            </label>
                                        </div>
                                        <div class="col-3"><label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Varied Size Events Possible" <?php echo in_array('Varied Size Events Possible', $service_avail) ? 'checked' : ''?>> Varied Size Events Possible
                                            </label></div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Indoor & Outdoor Spaces Available" <?php echo in_array('Indoor & Outdoor Spaces Available', $service_avail) ? 'checked' : ''?>> Indoor & Outdoor Spaces Available
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Indoor Spaces Only" <?php echo in_array('Indoor Spaces Only', $service_avail) ? 'checked' : ''?>> Indoor Spaces Only
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Outdoor Spaces Only" <?php echo in_array('Outdoor Spaces Only', $service_avail) ? 'checked' : ''?>> Outdoor Spaces Only
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Inhouse Catering Only" <?php echo in_array('Inhouse Catering Only', $service_avail) ? 'checked' : ''?>> Inhouse Catering Only
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Inhouse and External Catering Allowed" <?php echo in_array('Inhouse and External Catering Allowed', $service_avail) ? 'checked' : ''?>> Inhouse and External Catering Allowed
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="External Catering Only" <?php echo in_array('External Catering Only', $service_avail) ? 'checked' : ''?>> External Catering Only
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Inhouse Decorators Only" <?php echo in_array('Inhouse Decorators Only', $service_avail) ? 'checked' : ''?>> Inhouse Decorators Only
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Inhouse and External Decorators Allowed" <?php echo in_array('Inhouse and External Decorators Allowed', $service_avail) ? 'checked' : ''?>> Inhouse and External Decorators Allowed
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="External Decorators Only" <?php echo in_array('External Decorators Only', $service_avail) ? 'checked' : ''?>> External Decorators Only
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Inhouse DJ Only" <?php echo in_array('Inhouse DJ Only', $service_avail) ? 'checked' : ''?>> Inhouse DJ Only
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Inhouse and External DJ Allowed" <?php echo in_array('Inhouse and External DJ Allowed', $service_avail) ? 'checked' : ''?>> Inhouse and External DJ Allowed
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="External DJ Only" <?php echo in_array('External DJ Only', $service_avail) ? 'checked' : ''?>> External DJ Only
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Multi-Cuisine Expertise" <?php echo in_array('Multi-Cuisine Expertise', $service_avail) ? 'checked' : ''?>> Multi-Cuisine Expertise
                                            </label><br>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Alcohol Allowed" <?php echo in_array('Alcohol Allowed', $service_avail) ? 'checked' : ''?>> Alcohol Allowed
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Alcohol Not Allowed" <?php echo in_array('Alcohol Not Allowed', $service_avail) ? 'checked' : ''?>> Alcohol Not Allowed
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Bridal/Groom Suite Not Available" <?php echo in_array('Bridal/Groom Suite Not Available', $service_avail) ? 'checked' : ''?>> Bridal/Groom Suite Not Available
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Bridal/Groom Suite Available" <?php echo in_array('Bridal/Groom Suite Available', $service_avail) ? 'checked' : ''?>> Bridal/Groom Suite Available
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Guest Accommodation Avaiable" <?php echo in_array('Guest Accommodation Avaiable', $service_avail) ? 'checked' : ''?>> Guest Accommodation Avaiable
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Guest Accommodation Not Avaiable" <?php echo in_array('Guest Accommodation Not Avaiable', $service_avail) ? 'checked' : ''?>> Guest Accommodation Not Avaiable
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Has Swimming Pool" <?php echo in_array('Has Swimming Pool', $service_avail) ? 'checked' : ''?>> Has Swimming Pool
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Has Inhouse Restaurant" <?php echo in_array('Has Inhouse Restaurant', $service_avail) ? 'checked' : ''?>> Has Inhouse Restaurant
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Ample Parking Space facility" <?php echo in_array('Ample Parking Space facility', $service_avail) ? 'checked' : ''?>> Ample Parking Space facility
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Valet Parking Facility Available" <?php echo in_array('Valet Parking Facility Available', $service_avail) ? 'checked' : ''?>> Valet Parking Facility Available
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Has Gym Facilities" <?php echo in_array('Has Gym Facilities', $service_avail) ? 'checked' : ''?>> Has Gym Facilities
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Has Bar and NightClub Area" <?php echo in_array('Has Bar and NightClub Area', $service_avail) ? 'checked' : ''?>> Has Bar and NightClub Area
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Transporation Services Available" <?php echo in_array('Transporation Services Available', $service_avail) ? 'checked' : ''?>> Transporation Services Available
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Back-Up Plan (in-case of rain) Available" <?php echo in_array('Back-Up Plan (in-case of rain) Available', $service_avail) ? 'checked' : ''?>> Back-Up Plan (in-case of rain) Available
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Sound System facilities Available" <?php echo in_array('Sound System facilities Available', $service_avail) ? 'checked' : ''?>> Sound System facilities Available
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Wifi Services Available" <?php echo in_array('Wifi Services Available', $service_avail) ? 'checked' : ''?>> Wifi Services Available
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Provides Customised Décor Lighting Facilities" <?php echo in_array('Provides Customised Décor Lighting Facilities', $service_avail) ? 'checked' : ''?>> Provides Customised Décor Lighting Facilities
                                            </label>
                                        </div>
                                        <div class="col-3">
                                            <label>
                                                <input type="checkbox" name="venue_service_avail[]" value="Multiple Payment Options Accepted" <?php echo in_array('Multiple Payment Options Accepted', $service_avail) ? 'checked' : ''?>> Multiple Payment Options Accepted
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <!-- Bridal wear  -->
                            <?php
                            } elseif ($category == 2) {
                            ?>
                                <div class="bridal_sec vendor_cat_inputs-admin" id="bridal_secs">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="type" class="vendor-form-label">Shop Type</label>
                                            <select name="shop_types" class="form-control" id="type">
                                                <option value="">Select shop Type</option>
                                                <option value="Boutique" <?php echo ($shop_type == 'Boutique' ? 'selected' : '') ?>>Boutique</option>
                                                <option value="Retail Store" <?php echo ($shop_type == 'Retail Store' ? 'selected' : '') ?>>Retail Store</option>
                                                <option value="Others" <?php echo ($shop_type == 'Others' ? 'selected' : '') ?>>Others</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="design" class="form-label vendor-form-label">Designs / Products Offered</label>
                                            <input type="text" class="form-control" id="design" placeholder="Designs / Products Offered" name="prod_offer" value="<?php echo $prod_offer ?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="design" class="form-label vendor-form-label">Starting Price</label>
                                            <input type="text" class="form-control" id="start_price" placeholder="Starting Price" value="<?php echo $start_price ?>" name="start_price">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="app_req" class="vendor-form-label">Appointment Required</label>
                                            <select name="app_req" class="form-control" id="app_req">
                                                <option value="">Appointment Required</option>
                                                <option value="1" <?php echo ($app_req == '1') ? 'Selected' : '' ?>>Yes</option>
                                                <option value="0" <?php echo ($app_req == '0') ? 'Selected' : '' ?>>No</option>
                                            </select>
                                        </div>
                                        <!-- <div class="col-md-6 form-group">
                                    <label for="design" class="form-label">Designs / Products Offered</label>
                                    <input type="text" class="form-control" id="design" placeholder="Designs / Products Offered" name="design_offer">
                                </div> -->

                                        <div class="col-12 form-group">
                                            <label for="" class="vendor-form-label">Occassions</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Engagement" <?php echo (in_array('Engagement', $occations)) ? 'checked' : '' ?>> Engagement
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Wedding" <?php echo (in_array('Wedding', $occations)) ? 'checked' : '' ?>> Wedding
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Haldi" <?php echo (in_array('Haldi', $occations)) ? 'checked' : '' ?>> Haldi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Mehendi" <?php echo (in_array('Mehendi', $occations)) ? 'checked' : '' ?>> Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Sangeet" <?php echo (in_array('Sangeet', $occations)) ? 'checked' : '' ?>> Sangeet
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Reception" <?php echo (in_array('Reception', $occations)) ? 'checked' : '' ?>> Reception
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Cocktail" <?php echo (in_array('Cocktail', $occations)) ? 'checked' : '' ?>> Cocktail
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Others" <?php echo (in_array('Others', $occations)) ? 'checked' : '' ?>> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="" class="vendor-form-label">Fabrics used</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Cotton" <?php echo (in_array('Cotton', $fabric_used)) ? 'checked' : '' ?>> Cotton
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Silk" <?php echo (in_array('Silk', $fabric_used)) ? 'checked' : '' ?>> Silk
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Satin" <?php echo (in_array('Satin', $fabric_used)) ? 'checked' : '' ?>> Satin
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Raw silk" <?php echo (in_array('Raw silk', $fabric_used)) ? 'checked' : '' ?>> Raw silk
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Net fabric" <?php echo (in_array('Net fabric', $fabric_used)) ? 'checked' : '' ?>> Net fabric
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Velvet" <?php echo (in_array('Velvet', $fabric_used)) ? 'checked' : '' ?>> Velvet
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Georgette" <?php echo (in_array('Georgette', $fabric_used)) ? 'checked' : '' ?>> Georgette
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Jacquard" <?php echo (in_array('Jacquard', $fabric_used)) ? 'checked' : '' ?>> Jacquard
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Organza" <?php echo (in_array('Organza', $fabric_used)) ? 'checked' : '' ?>> Organza
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Gaji" <?php echo (in_array('Gaji', $fabric_used)) ? 'checked' : '' ?>> Gaji
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Crepe" <?php echo (in_array('Crepe', $fabric_used)) ? 'checked' : '' ?>> Crepe
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Chanderi" <?php echo (in_array('Chanderi', $fabric_used)) ? 'checked' : '' ?>> Chanderi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Faux Georgette" <?php echo (in_array('Faux Georgette', $fabric_used)) ? 'checked' : '' ?>> Faux Georgette
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Pure Georgette" <?php echo (in_array('Pure Georgette', $fabric_used)) ? 'checked' : '' ?>> Pure Georgette
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Viscose Georgette" <?php echo (in_array('Viscose Georgette', $fabric_used)) ? 'checked' : '' ?>> Viscose Georgette
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Tussar Silk" <?php echo (in_array('Tussar Silk', $fabric_used)) ? 'checked' : '' ?>> Tussar Silk
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Ghicha Silk" <?php echo (in_array('Ghicha Silk', $fabric_used)) ? 'checked' : '' ?>> Ghicha Silk
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Tissue" <?php echo (in_array('Tissue', $fabric_used)) ? 'checked' : '' ?>> Tissue
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Modal" <?php echo (in_array('Modal', $fabric_used)) ? 'checked' : '' ?>> Modal
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Mulmul" <?php echo (in_array('Mulmul', $fabric_used)) ? 'checked' : '' ?>> Mulmul
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric_used[]" value="Rayon" <?php echo (in_array('Rayon', $fabric_used)) ? 'checked' : '' ?>> Rayon
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="" class="vendor-form-label">Product Types</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Bridal Lehenga" <?php echo (in_array('Bridal Lehenga', $prod_type)) ? 'checked' : '' ?>> Bridal Lehenga
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Bridal Saree" <?php echo (in_array('Bridal Saree', $prod_type)) ? 'checked' : '' ?>> Bridal Saree
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Cocktail Dresses" <?php echo (in_array('Cocktail Dresses', $prod_type)) ? 'checked' : '' ?>> Cocktail Dresses
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Indo-western Dresses" <?php echo (in_array('Indo-western Dresses', $prod_type)) ? 'checked' : '' ?>> Indo-western Dresses
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Dress fabrics" <?php echo (in_array('Dress fabrics', $prod_type)) ? 'checked' : '' ?>> Dress fabrics
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Bridal Suits" <?php echo (in_array('Bridal Suits', $prod_type)) ? 'checked' : '' ?>> Bridal Suits
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Gowns" <?php echo (in_array('Gowns', $prod_type)) ? 'checked' : '' ?>> Gowns
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="prod_type[]" id="" placeholder="Other" value="">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="">Embellishments</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Gota patti" <?php echo (in_array('Gota patti', $emblishments)) ? 'checked' : '' ?>> Gota patti
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Mirror work" <?php echo (in_array('Mirror work', $emblishments)) ? 'checked' : '' ?>> Mirror work
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Zardosi" <?php echo (in_array('Zardosi', $emblishments)) ? 'checked' : '' ?>> Zardosi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Embellished" <?php echo (in_array('Embellished', $emblishments)) ? 'checked' : '' ?>> Embellished
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Benarasi" <?php echo (in_array('Benarasi', $emblishments)) ? 'checked' : '' ?>> Benarasi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Threadwork" <?php echo (in_array('Threadwork', $emblishments)) ? 'checked' : '' ?>> Threadwork
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Brocade" <?php echo (in_array('Brocade', $emblishments)) ? 'checked' : '' ?>> Brocade
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Embroidery" <?php echo (in_array('Embroidery', $emblishments)) ? 'checked' : '' ?>> Embroidery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Kanjivaram" <?php echo (in_array('Kanjivaram', $emblishments)) ? 'checked' : '' ?>> Kanjivaram
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Zari" <?php echo (in_array('Zari', $emblishments)) ? 'checked' : '' ?>> Zari
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Sequins" <?php echo (in_array('Sequins', $emblishments)) ? 'checked' : '' ?>> Sequins
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Pearls" <?php echo (in_array('Pearls', $emblishments)) ? 'checked' : '' ?>> Pearls
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Kardana" <?php echo (in_array('Kardana', $emblishments)) ? 'checked' : '' ?>> Kardana
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Chikankari" <?php echo (in_array('Chikankari', $emblishments)) ? 'checked' : '' ?>> Chikankari
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Nakshi" <?php echo (in_array('Nakshi', $emblishments)) ? 'checked' : '' ?>> Nakshi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Kundan" <?php echo (in_array('Kundan', $emblishments)) ? 'checked' : '' ?>> Kundan
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Dabka" <?php echo (in_array('Dabka', $emblishments)) ? 'checked' : '' ?>> Dabka
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Muqaish" <?php echo (in_array('Muqaish', $emblishments)) ? 'checked' : '' ?>> Muqaish
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="emblishments[]" value="Kamdani" <?php echo (in_array('Gowns', $emblishments)) ? 'checked' : '' ?>> Kamdani
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="emblishments[]" id="" placeholder="Others">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="" class="vendor-form-label">Collection Type</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="collection_type[]" value="Mens" <?php echo (in_array('Mens', $collection_type)) ? 'checked' : '' ?>> Mens
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="collection_type[]" value="Womens" <?php echo (in_array('Womens', $collection_type)) ? 'checked' : '' ?>> Womens
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="collection_type[]" value="Kids" <?php echo (in_array('Kids', $collection_type)) ? 'checked' : '' ?>> Kids
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="" class="vendor-form-label">Design Styles</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Flare" <?php echo (in_array('Flare', $design_style)) ? 'checked' : '' ?>> Flare
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Double Flare" <?php echo (in_array('Double Flare', $design_style)) ? 'checked' : '' ?>> Double Flare
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Mermaid" <?php echo (in_array('Mermaid', $design_style)) ? 'checked' : '' ?>> Mermaid
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="A-line" <?php echo (in_array('A-line', $design_style)) ? 'checked' : '' ?>> A-line
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Printed Simple" <?php echo (in_array('Printed Simple', $design_style)) ? 'checked' : '' ?>> Printed Simple
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Sharara" <?php echo (in_array('Sharara', $design_style)) ? 'checked' : '' ?>> Sharara
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Trail" <?php echo (in_array('Trail', $design_style)) ? 'checked' : '' ?>> Trail
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Panelled" <?php echo (in_array('Panelled', $design_style)) ? 'checked' : '' ?>> Panelled
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="design_style[]" placeholder="Other">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="" class="vendor-form-label">Customising Available</label>
                                            <select name="customize_avail" class="form-control" id="">
                                                <option value="Yes" <?php echo ($customize_avail == 'Yes') ? 'selected' : ''?>>Yes</option>
                                                <option value="No" <?php echo ($customize_avail == 'No') ? 'selected' : ''?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="" class="vendor-form-label">Lead Time</label>
                                            <select name="lead_time" class="form-control" id="">
                                                <option value="Within 1 Week" <?php echo ($lead_time == 'Within 1 Week') ? 'selected' : ''?>>Within 1 Week</option>
                                                <option value="7-15 days" <?php echo ($lead_time == '7-15 days') ? 'selected' : ''?>>7-15 days</option>
                                                <option value="15-30 Days" <?php echo ($lead_time == '15-30 Days') ? 'selected' : ''?>>15-30 Days</option>
                                                <option value="30-45 days" <?php echo ($lead_time == '30-45 days') ? 'selected' : ''?>>30-45 days</option>
                                                <option value="45-60 days" <?php echo ($lead_time == '45-60 days') ? 'selected' : ''?>>45-60 days</option>
                                                <option value="More than 60 days" <?php echo ($lead_time == 'More than 60 days') ? 'selected' : ''?>>More than 60 days</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="" class="vendor-form-label">Ship Outstation</label>
                                            <select name="ship_out" class="form-control" id="">
                                                <option value="Yes" <?php echo ($ship_out == 'Yes') ? 'selected' : ''?>>Yes</option>
                                                <option value="No" <?php echo ($ship_out == 'No') ? 'selected' : ''?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="availability[]" value="Styling Services Available" <?php echo (in_array('Styling Services Available', $availability)) ? 'checked' : '' ?>> Styling Services Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="availability[]" value="Trial Availability Possible" <?php echo (in_array('Trial Availability Possible', $availability)) ? 'checked' : '' ?>> Trial Availability Possible
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="availability[]" value="Alteration Services Available" <?php echo (in_array('Alteration Services Available', $availability)) ? 'checked' : '' ?>> Alteration Services Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="availability[]" value="Rental Options Available" <?php echo (in_array('Rental Options Available', $availability)) ? 'checked' : '' ?>> Rental Options Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="availability[]" value="Bridal Accessories Available" <?php echo (in_array('Bridal Accessories Available', $availability)) ? 'checked' : '' ?>> Bridal Accessories Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="availability[]" value="International Shipping Available" <?php echo (in_array('International Shipping Available', $availability)) ? 'checked' : '' ?>> International Shipping Available
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- groom wear  -->
                                <?php
                            
                            
                            } elseif ($category == 3) {

                                $prod_type = array();
                                if(isset($val['prod_type'])){
                                    $prod_type =  explode(',', $val['prod_type']);
                                }

                                $occation = array();
                                if(isset($val['occation'])){
                                    $occation =  explode(',', $val['occation']);
                                }

                                $col_type = array();
                                if(isset($val['col_type'])){
                                    $col_type =  explode(',', $val['col_type']);
                                }

                                $design_type = array();
                                if(isset($val['design_type'])){
                                    $design_type =  explode(',', $val['design_type']);
                                }

                                $print_opt = array();
                                if(isset($val['print_opt'])){
                                    $print_opt =  explode(',', $val['print_opt']);
                                }

                                $fabric = array();
                                if(isset($val['fabric'])){
                                    $fabric =  explode(',', $val['fabric']);
                                }

                                $ser_avail = array();
                                if(isset($val['ser_avail'])){
                                    $ser_avail =  explode(',', $val['ser_avail']);
                                }
                            ?>
                                <div class="groom_sec vendor_cat_inputs-admin" id="groom_secs">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="shop_type" class="vendor-form-label">Shop Type</label>
                                            <select name="groom_shop_type" class="form-control" id="shop_type">
                                                <option value="">Select shop type</option>
                                                <option value="Boutique" <?php echo (isset($val['shop_type']) && $val['shop_type'] == 'Boutique') ? 'selected' : ''?>>Boutique</option>
                                                <option value="Retail Store" <?php echo (isset($val['shop_type']) && $val['shop_type'] == 'Retail Store') ? 'selected' : ''?>>Retail Store</option>
                                                <option value="Others" <?php echo (isset($val['shop_type']) && $val['shop_type'] == 'Others') ? 'selected' : ''?>>Others</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="design_offer" class="form-label vendor-form-label">Designs / Products Offered</label>
                                            <input type="text" class="form-control" id="design_offer" placeholder="Designs / Products Offered" name="groom_design_offer" value="<?php echo isset($val['design_offer']) ? $val['design_offer'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="start_price" class="form-label vendor-form-label">Starting Price</label>
                                            <input type="number" class="form-control" id="start_price" placeholder="Starting Price" name="groom_start_price" value="<?php echo isset($val['start_price']) ? $val['start_price'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="ap_require vendor-form-label">Appointment Required</label>
                                            <select name="ap_require" class="form-control" id="ap_require">
                                                <option value="">Appointment Required</option>
                                                <option value="Yes" <?php echo (isset($val['ap_require']) && $val['ap_require'] == 'Yes') ? 'selected' : ''?>>Yes</option>
                                                <option value="No" <?php echo (isset($val['ap_require']) && $val['ap_require'] == 'No') ? 'selected' : ''?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="exp_since" class="form-label vendor-form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Experience Since" name="groom_exp_since" value="<?php echo isset($val['exp_since']) ? $val['exp_since'] : ''?>">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="occation" class="vendor-form-label">Occassions</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Engagement" <?php echo in_array('Engagement', $occation) ? 'checked' : '' ?>>
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Wedding" <?php echo in_array('Wedding', $occation) ? 'checked' : '' ?>> Wedding
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Haldi" <?php echo in_array('Haldi', $occation) ? 'checked' : '' ?>> Haldi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Mehendi" <?php echo in_array('Mehendi', $occation) ? 'checked' : '' ?>> Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Sangeet" <?php echo in_array('Sangeet', $occation) ? 'checked' : '' ?>> Sangeet
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Reception" <?php echo in_array('Reception', $occation) ? 'checked' : '' ?>> Reception
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Cocktail" <?php echo in_array('Cocktail', $occation) ? 'checked' : '' ?>> Cocktail
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occation[]" value="Others" <?php echo in_array('Others', $occation) ? 'checked' : '' ?>> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="prod_type" class="vendor-form-label">Product Types</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Sherwani" <?php echo in_array('Sherwani', $prod_type) ? 'checked' : '' ?>> Sherwani
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Suits & tuxedos" <?php echo in_array('Suits & tuxedos', $prod_type) ? 'checked' : '' ?>> Suits & tuxedos
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Bandhgala" <?php echo in_array('Bandhgala', $prod_type) ? 'checked' : '' ?>> Bandhgala
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Indo-western" <?php echo in_array('Indo-western', $prod_type) ? 'checked' : '' ?>> Indo-western
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Kurta Pyjamas" <?php echo in_array('Kurta Pyjamas', $prod_type) ? 'checked' : '' ?>> Kurta Pyjamas
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Waistcoat sets" <?php echo in_array('Waistcoat sets', $prod_type) ? 'checked' : '' ?>> Waistcoat sets
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Designer wear" <?php echo in_array('Designer wear', $prod_type) ? 'checked' : '' ?>> Designer wear
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Custom Made Wear" <?php echo in_array('Custom Made Wear', $prod_type) ? 'checked' : '' ?>> Custom Made Wear
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Jackets" <?php echo in_array('Jackets', $prod_type) ? 'checked' : '' ?>> Jackets
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="prod_type[]" value="Jodhpuri" <?php echo in_array('Jodhpuri', $prod_type) ? 'checked' : '' ?>> Jodhpuri
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="prod_type[]" id="" placeholder="Other" >
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="col_type" class="vendor-form-label">Collection Type</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="col_type[]" value="Mens" <?php echo in_array('Mens', $col_type) ? 'checked' : '' ?>> Men
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="col_type[]" value="Womens" <?php echo in_array('Womens', $col_type) ? 'checked' : '' ?>> Women
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="col_type[]" value="Kids" <?php echo in_array('Kids', $col_type) ? 'checked' : '' ?>> Kid
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="design_type" class="vendor-form-label">Design Styles</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Indo-western" <?php echo in_array('Indo-western', $design_type) ? 'checked' : '' ?>> Indo-western
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Jodhpuri" <?php echo in_array('Jodhpuri', $design_type) ? 'checked' : '' ?>> Jodhpuri
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Angrakha" <?php echo in_array('Angrakha', $design_type) ? 'checked' : '' ?>> Angrakha
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Chipkan style" <?php echo in_array('Chipkan style', $design_type) ? 'checked' : '' ?>> Chipkan style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Achkan" <?php echo in_array('Achkan', $design_type) ? 'checked' : '' ?>> Achkan
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Jacket style" <?php echo in_array('Jacket style', $design_type) ? 'checked' : '' ?>> Jacket style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Printed modern" <?php echo in_array('Printed modern', $design_type) ? 'checked' : '' ?>> Printed modern
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Anarkali style" <?php echo in_array('Anarkali style', $design_type) ? 'checked' : '' ?>> Anarkali style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Nawabi" <?php echo in_array('Nawabi', $design_type) ? 'checked' : '' ?>> Nawabi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Designer" <?php echo in_array('Designer', $design_type) ? 'checked' : '' ?>> Designer
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Assymetrical" <?php echo in_array('Assymetrical', $design_type) ? 'checked' : '' ?>> Assymetrical
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Bandi" <?php echo in_array('Bandi', $design_type) ? 'checked' : '' ?>> Bandi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_type[]" value="Cocktail" <?php echo in_array('Cocktail', $design_type) ? 'checked' : '' ?>> Cocktail
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <input type="text" name="design_type[]" placeholder="Other">
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="custom_order" class="vendor-form-label">Custom order</label>
                                            <select name="custom_order" class="form-control" id="custom_order">
                                                <option value="Yes" <?php echo (isset($val['custom_order']) && $val['custom_order'] == 'Yes') ? 'selected' : ''?>>Yes</option>
                                                <option value="No" <?php echo (isset($val['custom_order']) && $val['custom_order'] == 'No') ? 'selected' : ''?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="lead_time">Lead Time</label>
                                            <select name="lead_time" class="form-control" id="lead_time">
                                                <option value="Within 1 Week" <?php echo (isset($val['lead_time']) && $val['lead_time'] == 'Within 1 Week') ? 'selected' : ''?>>Within 1 Week</option>
                                                <option value="7-15 days" <?php echo (isset($val['lead_time']) && $val['lead_time'] == '7-15 days') ? 'selected' : ''?>>7-15 days</option>
                                                <option value="15-30 Days" <?php echo (isset($val['lead_time']) && $val['lead_time'] == '15-30 Days') ? 'selected' : ''?>>15-30 Days</option>
                                                <option value="30-45 days" <?php echo (isset($val['lead_time']) && $val['lead_time'] == '30-45 days') ? 'selected' : ''?>>30-45 days</option>
                                                <option value="45-60 days" <?php echo (isset($val['lead_time']) && $val['lead_time'] == '45-60 days') ? 'selected' : ''?>>45-60 days</option>
                                                <option value="More than 60 days" <?php echo (isset($val['lead_time']) && $val['lead_time'] == 'More than 60 days') ? 'selected' : ''?>>More than 60 days</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="ship_out" class="vendor-form-label">Ship Outstation</label>
                                            <select name="ship_out" class="form-control" id="ship_out">
                                                <option value="Yes" <?php echo (isset($val['ship_out']) && $val['ship_out'] == 'Yes') ? 'selected' : ''?>>Yes</option>
                                                <option value="No" <?php echo (isset($val['ship_out']) && $val['ship_out'] == 'No') ? 'selected' : ''?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="print_opt" class="vendor-form-label">Print/Handwork</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Cutbeads" <?php echo in_array('Cutbeads', $print_opt) ? 'checked' : ''?>> Cutbeads
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Block print" <?php echo in_array('Block print', $print_opt) ? 'checked' : ''?>> Block print
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Zari" <?php echo in_array('Zari', $print_opt) ? 'checked' : ''?>> Zari
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Digital print" <?php echo in_array('Digital print', $print_opt) ? 'checked' : ''?>> Digital print
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Embroidery" <?php echo in_array('Embroidery', $print_opt) ? 'checked' : ''?>> Embroidery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Hand work" <?php echo in_array('Hand work', $print_opt) ? 'checked' : ''?>> Hand work
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Floral print" <?php echo in_array('Floral print', $print_opt) ? 'checked' : ''?>> Floral print
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Zardosi" <?php echo in_array('Zardosi', $print_opt) ? 'checked' : ''?>> Zardosi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="print_opt[]" value="Others" <?php echo in_array('Others', $print_opt) ? 'checked' : ''?>> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="fabric" class="vendor-form-label">Fabrics</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric[]" value="Silk" <?php echo in_array('Silk', $fabric) ? 'checked' : ''?>>Silk
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric[]" value="Satin" <?php echo in_array('Satin', $fabric) ? 'checked' : ''?>>Satin

                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="fabric[]" value="Others" <?php echo in_array('Others', $fabric) ? 'checked' : ''?>> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                       
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="ser_avail[]" value="Styling Services Available" <?php echo in_array('Styling Services Available', $ser_avail) ? 'checked' : ''?>> Styling Services Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="ser_avail[]" value="Trial Availability Possible" <?php echo in_array('Trial Availability Possible', $ser_avail) ? 'checked' : ''?>> Trial Availability Possible
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="ser_avail[]" value="Alteration Services Available" <?php echo in_array('Alteration Services Available', $ser_avail) ? 'checked' : ''?>> Alteration Services Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="ser_avail[]" value="Rental Options Available" <?php echo in_array('Rental Options Available', $ser_avail) ? 'checked' : ''?>> Rental Options Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="ser_avail[]" value="Bridal Accessories Available" <?php echo in_array('Bridal Accessories Available', $ser_avail) ? 'checked' : ''?>> Bridal Accessories Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="ser_avail[]" value="International Shipping Available" <?php echo in_array('International Shipping Available', $ser_avail) ? 'checked' : ''?>> International Shipping Available
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Photography  -->
                            <?php
                            } elseif ($category == 4) {

                                $occations = array();
                                if(isset($val['occations'])){
                                    $occations =  explode(',', $val['occations']);
                                }

                                $avail_service = array();
                                if(isset($val['avail_service'])){
                                    $avail_service =  explode(',', $val['avail_service']);
                                }
                            ?>
                                <div class="photo_sec vendor_cat_inputs-admin" id="photo_secs">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="start_price" class="form-label vendor-form-label">Starting Price</label>
                                            <input type="number" class="form-control" id="start_price" placeholder="Starting Price" name="photo_start_price" value="<?php echo isset($val['start_price']) ? $val['start_price'] : ''?>">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="package1" class="form-label vendor-form-label">Package 1: 1-day pre-wedding photoshoot</label>
                                            <input type="number" class="form-control" id="package1" placeholder="Price for 1-day pre-wedding photoshoot" name="photo_package1" value="<?php echo isset($val['package1']) ? $val['package1'] : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="package2" class="form-label vendor-form-label">Package 2: Price for 2 days wedding photoshoot</label>
                                            <input type="number" class="form-control" id="package2" placeholder="Price for 2 days wedding photoshoot" name="photo_package2" value="<?php echo isset($val['package2']) ? $val['package2'] : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="package3" class="form-label vendor-form-label">Package 3: Price for 3 days wedding photoshoot</label>
                                            <input type="number" class="form-control" id="package3" placeholder="Price for 3 days wedding photoshoot" name="photo_package3" value="<?php echo isset($val['package3']) ? $val['package3'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="exp_since" class="form-label vendor-form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Experience Since in Number" name="photo_exp_since" value="<?php echo isset($val['exp_since']) ? $val['exp_since'] : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="delivery_time" class="vendor-form-label">Delivery Time</label>
                                            <select name="delivery_time" class="form-control" id="delivery_time">
                                                <option value="15-30 Days" <?php echo (isset($val['delivery_time']) && $val['delivery_time'] == '15-30 Days') ? 'selected' : ''?>>15-30 Days</option>
                                                <option value="30-45 days" <?php echo (isset($val['delivery_time']) && $val['delivery_time'] == '30-45 days') ? 'selected' : ''?>>30-45 days</option>
                                                <option value="45-60 days" <?php echo (isset($val['delivery_time']) && $val['delivery_time'] == '45-60 days') ? 'selected' : ''?>>45-60 days</option>
                                                <option value="More than 60 days" <?php echo (isset($val['delivery_time']) && $val['delivery_time'] == 'More than 60 days') ? 'selected' : ''?>>More than 60 days</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="travel_out" class="vendor-form-label">Travels Outstation</label>
                                            <select name="travel_out" class="form-control" id="travel_out">
                                                <option value="Yes" <?php echo (isset($val['travel_out']) && $val['travel_out'] == 'dfs') ? 'selected' : ''?>>Yes</option>
                                                <option value="No" <?php echo (isset($val['travel_out']) && $val['travel_out'] == 'dfs') ? 'selected' : ''?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="occations" class="vendor-form-label">Occassions Covered</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Pre-wedding" <?php echo in_array('Pre-wedding', $occations) ? 'checked' : ''?>> Pre-wedding
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Engagement" <?php echo in_array('Engagement', $occations) ? 'checked' : ''?>> Engagement
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Wedding" <?php echo in_array('Wedding', $occations) ? 'checked' : ''?>> Wedding
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Haldi" <?php echo in_array('Haldi', $occations) ? 'checked' : ''?>> Haldi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Mehendi" <?php echo in_array('Mehendi', $occations) ? 'checked' : ''?>> Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Sangeet" <?php echo in_array('Sangeet', $occations) ? 'checked' : ''?>> Sangeet
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Reception" <?php echo in_array('Reception', $occations) ? 'checked' : ''?>> Reception
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Cocktail" <?php echo in_array('Cocktail', $occations) ? 'checked' : ''?>> Cocktail
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Home Functions" <?php echo in_array('Home Functions', $occations) ? 'checked' : ''?>> Home Functions
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="occations[]" value="Others" <?php echo in_array('Others', $occations) ? 'checked' : ''?>> Others
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="photo_avail_service[]" value="Candid Photography Expertise" <?php echo in_array('Candid Photography Expertise', $avail_service) ? 'checked' : ''?>> Candid Photography Expertise
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="photo_avail_service[]" value="Traditional Photography Know How" <?php echo in_array('Traditional Photography Know How', $avail_service) ? 'checked' : ''?>> Traditional Photography Know How
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="photo_avail_service[]" value="Cinematic Editing Expertise" <?php echo in_array('Cinematic Editing Expertise', $avail_service) ? 'checked' : ''?>> Cinematic Editing Expertise
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="photo_avail_service[]" value="Has Drone Shoot Capability" <?php echo in_array('Has Drone Shoot Capability', $avail_service) ? 'checked' : ''?>> Has Drone Shoot Capability
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="photo_avail_service[]" value="Photobooth facilities Available" <?php echo in_array('Photobooth facilities Available', $avail_service) ? 'checked' : ''?>> Photobooth facilities Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="photo_avail_service[]" value="Live Screening Feature available" <?php echo in_array('Live Screening Feature available', $avail_service) ? 'checked' : ''?>> Live Screening Feature available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="photo_avail_service[]" value="Same Day Edits provided" <?php echo in_array('Same Day Edits provided', $avail_service) ? 'checked' : ''?>> Same Day Edits provided
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="photo_avail_service[]" value="Professional Printing for Albums Available" <?php echo in_array('Professional Printing for Albums Available', $avail_service) ? 'checked' : ''?>> Professional Printing for Albums Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="photo_avail_service[]" value="Inhouse Editing Services" <?php echo in_array('Inhouse Editing Services', $avail_service) ? 'checked' : ''?>> Inhouse Editing Services
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="photo_avail_service[]" value="Outsourced Editing Services" <?php echo in_array('Outsourced Editing Services', $avail_service) ? 'checked' : ''?>> Outsourced Editing Services
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="photo_avail_service[]" value="Inhouse and Outsourced Editing services Allowed" <?php echo in_array('Inhouse and Outsourced Editing services Allowed', $avail_service) ? 'checked' : ''?>> Inhouse and Outsourced Editing services Allowed
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="photo_avail_service[]" value="Has Creative Photography Approaches" <?php echo in_array('Has Creative Photography Approaches', $avail_service) ? 'checked' : ''?>> Has Creative Photography Approaches
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Makeup  -->
                            <?php
                            } elseif ($category == 5) {
                                $avail_service = array();
                                if(isset($val['avail_service'])){
                                    $avail_service =  explode(',', $val['avail_service']);
                                }
                                $groom_service = array();
                                if(isset($val['groom_service'])){
                                    $groom_service =  explode(',', $val['groom_service']);
                                }
                            ?>
                                <div class="makeup_sec vendor_cat_inputs-admin" id="makeup_secs">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="start_price" class="form-label vendor-form-label">Starting Price</label>
                                            <input type="number" class="form-control" id="start_price" placeholder="Starting Price" name="makeup_start_price" value="<?php echo isset($val['start_price']) ? $val['start_price'] : ''?>">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="package1" class="form-label vendor-form-label">Package 1: party makeup for Bride</label>
                                            <input type="number" class="form-control" id="package1" placeholder="party makeup for Bride" name="makeup_package1" value="<?php echo isset($val['package1']) ? $val['package1'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="package2" class="form-label vendor-form-label">Package 2: Regular party makeup for bride's relatives/ friends</label>
                                            <input type="number" class="form-control" id="package2" placeholder="Regular party makeup for bride's relatives" name="makeup_package2" value="<?php echo isset($val['package2']) ? $val['package2'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="exp_since" class="form-label vendor-form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Experience Since in Number" name="makeup_exp_since" value="<?php echo isset($val['exp_since']) ? $val['exp_since'] : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="make_tech" class="vendor-form-label">Make Up Techniques Know How</label>
                                            <select name="make_tech" class="form-control" id="make_tech">
                                                <option value="Regular" <?php echo (isset($val['make_tech']) && $val['make_tech'] == 'Regular') ? 'selected' : ''?>>Regular</option>
                                                <option value="HD" <?php echo (isset($val['make_tech']) && $val['make_tech'] == 'HD') ? 'selected' : ''?>>HD</option>
                                                <option value="Airbrush" <?php echo (isset($val['make_tech']) && $val['make_tech'] == 'Airbrush') ? 'selected' : ''?>>Airbrush</option>
                                                <option value="Others" <?php echo (isset($val['make_tech']) && $val['make_tech'] == 'Others') ? 'selected' : ''?>>Others</option>
                                            </select>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="travel_out" class="vendor-form-label">Travels Outstation</label>
                                            <select name="travel_out" class="form-control" id="travel_out">
                                                <option value="Yes" <?php echo (isset($val['travel_out']) && $val['travel_out'] == 'Yes') ? 'selected' : ''?>>Yes</option>
                                                <option value="No" <?php echo (isset($val['travel_out']) && $val['travel_out'] == 'No') ? 'selected' : ''?>>No</option>
                                            </select>
                                        </div>
                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="makeup_avail_service[]" value="Services available at Venue Only" <?php echo in_array('Services available at Venue Only', $avail_service) ? 'checked' : ''?>> Services available at Venue Only
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="makeup_avail_service[]" value="Services available at Salon only" <?php echo in_array('Services available at Salon only', $avail_service) ? 'checked' : ''?>> Services available at Salon only
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="makeup_avail_service[]" value="Services Available at Venue and Salon" <?php echo in_array('Services Available at Venue and Salon', $avail_service) ? 'checked' : ''?>> Services Available at Venue and Salon
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="makeup_avail_service[]" value="HD Make Up Expertise" <?php echo in_array('HD Make Up Expertise', $avail_service) ? 'checked' : ''?>> HD Make Up Expertise
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="makeup_avail_service[]" value="AirBrush Make Up Technique Available" <?php echo in_array('AirBrush Make Up Technique Available', $avail_service) ? 'checked' : ''?>> AirBrush Make Up Technique Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="makeup_avail_service[]" value="Friends and Family Package Available" <?php echo in_array('Friends and Family Package Available', $avail_service) ? 'checked' : ''?>> Friends and Family Package Available
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="groom_service" class="vendor-form-label">Grooming Services Available</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="groom_service[]" value="Provides Hairstyling Services" <?php echo in_array('Provides Hairstyling Services', $groom_service) ? 'checked' : ''?>> Provides Hairstyling Services
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="groom_service[]" value="Hair extensions Available" <?php echo in_array('Hair extensions Available', $groom_service) ? 'checked' : ''?>> Hair extensions Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="groom_service[]" value="Provides Eyelashes" <?php echo in_array('Provides Eyelashes', $groom_service) ? 'checked' : ''?>> Provides Eyelashes
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="groom_service[]" value="Provides Eyelenses" <?php echo in_array('Provides Eyelenses', $groom_service) ? 'checked' : ''?>> Provides Eyelenses
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="groom_service[]" value="Nail Extension Services Available" <?php echo in_array('Nail Extension Services Available', $groom_service) ? 'checked' : ''?>> Nail Extension Services Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="groom_service[]" value="Garment Draping Services Available" <?php echo in_array('Garment Draping Services Available', $groom_service) ? 'checked' : ''?>> Garment Draping Services Available
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Mahendi  -->
                            <?php
                            } elseif ($category == 6) {
                                $mehendi_style = array();
                                if(isset($val['mehendi_style'])){
                                    $mehendi_style =  explode(',', $val['mehendi_style']);
                                }
                            ?>
                                <div class="mahendi_sec vendor_cat_inputs-admin" id="mahendi_secs">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="start_price" class="form-label vendor-form-label">Starting Price</label>
                                            <input type="number" class="form-control" id="start_price" placeholder="Starting Price" name="mahendi_start_price" value="<?php echo isset($val['start_price']) ? $val['start_price'] : ''?>">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="price_hand" class="form-label">Price/ hand for family/ guests </label>
                                            <input type="number" class="form-control" id="price_hand" placeholder="Price/ hand for family/ guests " name="price_hand" value="<?php echo isset($val['price_hand']) ? $val['price_hand'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Experience Since in Number" name="mahendi_exp_since" value="<?php echo isset($val['exp_since']) ? $val['exp_since'] : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="max_people">Max. People that can be attended</label>
                                            <select name="max_people" class="form-control" id="max_people">
                                                <option value="0-9" <?php echo (isset($val['max_people']) && $val['max_people'] == '0-9') ? 'selected' : ''?>>0-9</option>
                                                <option value="10-19" <?php echo (isset($val['max_people']) && $val['max_people'] == '10-19') ? 'selected' : ''?>>10-19</option>
                                                <option value="20-29" <?php echo (isset($val['max_people']) && $val['max_people'] == '20-29') ? 'selected' : ''?>>20-29</option>
                                                <option value="30-39" <?php echo (isset($val['max_people']) && $val['max_people'] == '30-39') ? 'selected' : ''?>>30-39</option>
                                                <option value="40-49" <?php echo (isset($val['max_people']) && $val['max_people'] == '40-49') ? 'selected' : ''?>>40-49</option>
                                                <option value="50 and more" <?php echo (isset($val['max_people']) && $val['max_people'] == '50 and more') ? 'selected' : ''?>>50 and more</option>
                                            </select>
                                        </div>
                                        <div class="col-md-12 form-group">
                                            <label for="style_know">Mehendi Styles Know How</label>
                                            <select name="style_know" class="form-control" id="style_know">
                                                <option value="Moroccon" <?php echo (isset($val['style_know']) && $val['style_know'] == 'Moroccon') ? 'selected' : ''?>>Moroccon</option>
                                                <option value="Arabic" <?php echo (isset($val['style_know']) && $val['style_know'] == 'Arabic') ? 'selected' : ''?>>Arabic</option>
                                                <option value="Indian" <?php echo (isset($val['style_know']) && $val['style_know'] == 'Indian') ? 'selected' : ''?>>Indian</option>
                                                <option value="Indo-Western" <?php echo (isset($val['style_know']) && $val['style_know'] == 'Indo-Western') ? 'selected' : ''?>>Indo-Western</option>
                                                <option value="Indo-Arabic" <?php echo (isset($val['style_know']) && $val['style_know'] == 'Indo-Arabic') ? 'selected' : ''?>>Indo-Arabic</option>
                                                <option value="Western" <?php echo (isset($val['style_know']) && $val['style_know'] == 'Western') ? 'selected' : ''?>>Western</option>
                                                <option value="Others" <?php echo (isset($val['style_know']) && $val['style_know'] == 'Others') ? 'selected' : ''?>>Others</option>
                                            </select>
                                        </div>
                                        
                                        <div class="col-12 form-group">
                                            <label for="">Mehendi Styles</label>
                                            <div class="row">
                                                <!-- Radio buttons arranged in columns -->
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Arabic design"<?php echo in_array('Arabic design', $mehendi_style) ? 'checked' : ''?>> Arabic design
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Zardosi design"<?php echo in_array('Zardosi design', $mehendi_style) ? 'checked' : ''?>> Zardosi design
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Bridal Mehendi"<?php echo in_array('Bridal Mehendi', $mehendi_style) ? 'checked' : ''?>> Bridal Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Rajasthani design"<?php echo in_array('Rajasthani design', $mehendi_style) ? 'checked' : ''?>> Rajasthani design
                                                    </label>
                                                </div>
                                            </div>

                                            <!-- Add more radio buttons here -->
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Dubai style mehendi"<?php echo in_array('Dubai style mehendi', $mehendi_style) ? 'checked' : ''?>> Dubai style mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Gujarati designs"<?php echo in_array('Gujarati designs', $mehendi_style) ? 'checked' : ''?>> Gujarati designs
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Bombay style design"<?php echo in_array('Bombay style design', $mehendi_style) ? 'checked' : ''?>> Bombay style design
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Indo-Islamic Mehendi Style"<?php echo in_array('Indo-Islamic Mehendi Style', $mehendi_style) ? 'checked' : ''?>> Indo-Islamic Mehendi Style
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Floral Mehendi"<?php echo in_array('Floral Mehendi', $mehendi_style) ? 'checked' : ''?>> Floral Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Indo-Arabic design"<?php echo in_array('Indo-Arabic design', $mehendi_style) ? 'checked' : ''?>> Indo-Arabic design
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Herbal designs"<?php echo in_array('Herbal designs', $mehendi_style) ? 'checked' : ''?>> Herbal designs
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Western designs"<?php echo in_array('Western designs', $mehendi_style) ? 'checked' : ''?>> Western designs
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Moroccan design"<?php echo in_array('Moroccan design', $mehendi_style) ? 'checked' : ''?>> Moroccan design
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Marwadi design"<?php echo in_array('Marwadi design', $mehendi_style) ? 'checked' : ''?>> Marwadi design
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Designer mehndi"<?php echo in_array('Designer mehndi', $mehendi_style) ? 'checked' : ''?>> Designer mehndi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Paisley designs"<?php echo in_array('Paisley designs', $mehendi_style) ? 'checked' : ''?>> Paisley designs
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Indo-western designs"<?php echo in_array('Indo-western designs', $mehendi_style) ? 'checked' : ''?>> Indo-western designs
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Pakistani design"<?php echo in_array('Pakistani design', $mehendi_style) ? 'checked' : ''?>> Pakistani design
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Bandhani Design"<?php echo in_array('Bandhani Design', $mehendi_style) ? 'checked' : ''?>> Bandhani Design
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Colorful Mehendi Art"<?php echo in_array('Colorful Mehendi Art', $mehendi_style) ? 'checked' : ''?>> Colorful Mehendi Art
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Jewellery design"<?php echo in_array('Jewellery design', $mehendi_style) ? 'checked' : ''?>> Jewellery design
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Customised Mehendi Designs"<?php echo in_array('Customised Mehendi Designs', $mehendi_style) ? 'checked' : ''?>> Customised Mehendi Designs
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Mandala design"<?php echo in_array('Mandala design', $mehendi_style) ? 'checked' : ''?>> Mandala design
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Maharashtrian designs"<?php echo in_array('Maharashtrian designs', $mehendi_style) ? 'checked' : ''?>> Maharashtrian designs
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Mughal Mehendi"<?php echo in_array('Mughal Mehendi', $mehendi_style) ? 'checked' : ''?>> Mughal Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Caricature designs"<?php echo in_array('Caricature designs', $mehendi_style) ? 'checked' : ''?>> Caricature designs
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Gods and Goddesses"<?php echo in_array('Gods and Goddesses', $mehendi_style) ? 'checked' : ''?>> Gods and Goddesses
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Butta designs"<?php echo in_array('Butta designs', $mehendi_style) ? 'checked' : ''?>> Butta designs
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Glitter Mehendi"<?php echo in_array('Glitter Mehendi', $mehendi_style) ? 'checked' : ''?>> Glitter Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Minimal Mehendi"<?php echo in_array('Minimal Mehendi', $mehendi_style) ? 'checked' : ''?>> Minimal Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Peacock design"<?php echo in_array('Peacock design', $mehendi_style) ? 'checked' : ''?>> Peacock design
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="3D Mehndi Designs"<?php echo in_array('3D Mehndi Designs', $mehendi_style) ? 'checked' : ''?>> 3D Mehndi Designs
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Mehndi tattoos"<?php echo in_array('Mehndi tattoos', $mehendi_style) ? 'checked' : ''?>> Mehndi tattoos
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Leheriya designs"<?php echo in_array('Leheriya designs', $mehendi_style) ? 'checked' : ''?>> Leheriya designs
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Jaipuri style design"<?php echo in_array('Jaipuri style design', $mehendi_style) ? 'checked' : ''?>> Jaipuri style design
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Fancy Mehendi"<?php echo in_array('Fancy Mehendi', $mehendi_style) ? 'checked' : ''?>> Fancy Mehendi
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Hira-Moti designs"<?php echo in_array('Hira-Moti designs', $mehendi_style) ? 'checked' : ''?>> Hira-Moti designs
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Radha Krishan designs"<?php echo in_array('Radha Krishan designs', $mehendi_style) ? 'checked' : ''?>> Radha Krishan designs
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Kolkata mehendi"<?php echo in_array('Kolkata mehendi', $mehendi_style) ? 'checked' : ''?>> Kolkata mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Kashmiri designs"<?php echo in_array('Kashmiri designs', $mehendi_style) ? 'checked' : ''?>> Kashmiri designs
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Bride-groom face designs" <?php echo in_array('Bride-groom face designs', $mehendi_style) ? 'checked' : ''?>> Bride-groom face designs
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Theme Mehndi"<?php echo in_array('Theme Mehndi', $mehendi_style) ? 'checked' : ''?>> Theme Mehndi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Bengali designs"<?php echo in_array('Bengali designs', $mehendi_style) ? 'checked' : ''?>> Bengali designs
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Mohalai mehandi designs"<?php echo in_array('Mohalai mehandi designs', $mehendi_style) ? 'checked' : ''?>> Mohalai mehandi designs
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Nail Paint Mehendi"<?php echo in_array('Nail Paint Mehendi', $mehendi_style) ? 'checked' : ''?>> Nail Paint Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Hyderabadi Mehndi"<?php echo in_array('Hyderabadi Mehndi', $mehendi_style) ? 'checked' : ''?>> Hyderabadi Mehndi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Sona Chandi Mehendi"<?php echo in_array('Sona Chandi Mehendi', $mehendi_style) ? 'checked' : ''?>> Sona Chandi Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Pen mehendi"<?php echo in_array('Pen mehendi', $mehendi_style) ? 'checked' : ''?>> Pen mehendi
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Fusion style mehendi"<?php echo in_array('Fusion style mehendi', $mehendi_style) ? 'checked' : ''?>> Fusion style mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Mathick mehandi designs"<?php echo in_array('Mathick mehandi designs', $mehendi_style) ? 'checked' : ''?>> Mathick mehandi designs
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Stone or Diamond Mehendi"<?php echo in_array('Stone or Diamond Mehendi', $mehendi_style) ? 'checked' : ''?>> Stone or Diamond Mehendi
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Kalamkaari Mehndi"<?php echo in_array('Kalamkaari Mehndi', $mehendi_style) ? 'checked' : ''?>> Kalamkaari Mehndi
                                                    </label>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="mehendi_style[]" value="Box mehndi design"<?php echo in_array('Box mehndi design', $mehendi_style) ? 'checked' : ''?>> Box mehndi design
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Bridal Jewellery  -->
                            <?php
                            } elseif ($category == 7) {
                            ?>
                                <div class="jewellery_sec vendor_cat_inputs-admin" id="jewellery_secs">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="start_price" class="form-label">Starting Price</label>
                                            <input type="number" class="form-control" id="start_price" placeholder="Starting Price" name="start_price" value="<?php echo isset($val['start_price']) ? $val['start_price'] : ''?>">
                                        </div>

                                        <div class="col-md-6 form-group">
                                            <label for="design_offer" class="form-label">Designs Offered</label>
                                            <input type="number" class="form-control" id="design_offer" placeholder="Designs Offered" name="design_offer" value="<?php echo isset($val['design_offer']) ? $val['design_offer'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Experience Since in Number" name="bridal_exp_since" value="<?php echo isset($val['exp_since']) ? $val['exp_since'] : ''?>">
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="">Jewellery Types</label>
                                            <?php 
                                            $jewel_type = array();
                                            if(isset($val['jew_type'])){
                                              $jewel_type =  explode(',', $val['jew_type']);
                                            }
                                            ?>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="jew_type[]" value="Custom made Gold Jewellery" <?php echo in_array('Custom made Gold Jewellery', $jewel_type) ? 'checked' : ''?>> Custom made Gold Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="jew_type[]" value="Diamond Jewellery" <?php echo in_array('Diamond Jewellery', $jewel_type)  ? 'checked': ''?>> Diamond Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="jew_type[]" value="Precious and Semi Precious Stone Jewellery" <?php echo in_array('Precious and Semi Precious Stone Jewellery', $jewel_type) ? 'checked' : ''?>> Precious and Semi Precious Stone Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="jew_type[]" value="American Diamond Jewellery" <?php echo in_array('American Diamond Jewellery', $jewel_type) ? 'checked' : ''?>> American Diamond Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="jew_type[]" value="Kemp Jewellery" <?php echo in_array('Kemp Jewellery', $jewel_type)  ? 'checked': ''?>> Kemp Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="jew_type[]" value="Imitation Jewellery" <?php echo in_array('Imitation Jewellery', $jewel_type) ? 'checked' : ''?>> Imitation Jewellery
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="design_style">Design Styles</label>
                                            <?php 
                                                $design_style = array();
                                                if(isset($val['design_style'])){
                                                $design_style =  explode(',', $val['design_style']);
                                                }
                                            ?>
                                            <div class="row">
                                                <!-- Radio buttons arranged in columns -->
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Kundan Jewellery" <?php echo in_array('Kundan Jewellery', $design_style) ? 'checked' : ''?>> Kundan Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Navratna Jewellery" <?php echo in_array('Navratna Jewellery', $design_style) ? 'checked' : ''?>> Navratna Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Meenakari Jewellery" <?php echo in_array('Meenakari Jewellery', $design_style) ? 'checked' : ''?>> Meenakari Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Antique Jewellery" <?php echo in_array('Antique Jewellery', $design_style) ? 'checked' : ''?>> Antique Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Polki and Emerald Jewellery" <?php echo in_array('Polki and Emerald Jewellery', $design_style) ? 'checked' : ''?>> Polki and Emerald Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Floral Jewellery" <?php echo in_array('Floral Jewellery', $design_style) ? 'checked' : ''?>> Floral Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Temple Jewellery" <?php echo in_array('Temple Jewellery', $design_style) ? 'checked' : ''?>> Temple Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="design_style[]" value="Kaasu Malai Jewellery" <?php echo in_array('Kaasu Malai Jewellery', $design_style) ? 'checked' : ''?>> Kaasu Malai Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="opt_avail" value="Rental Options Available" <?php echo in_array('Rental Options Available', $design_style) ? 'checked' : ''?>> Rental Options Available
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="">Categories Available</label>
                                            <?php 
                                                $cat_avail = array();
                                                if(isset($val['cat_avail'])){
                                                $cat_avail =  explode(',', $val['cat_avail']);
                                                }
                                            ?>
                                            <div class="row">
                                                <!-- Radio buttons arranged in columns -->
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cat_avail[]" value="Bridal Jewellery" <?php echo in_array('Bridal Jewellery', $cat_avail) ? 'checked' : ''?>> Bridal Jewellery
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cat_avail[]" value="Necklaces" <?php echo in_array('Necklaces', $cat_avail) ? 'checked' : ''?>> Necklaces
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cat_avail[]" value="Earrings" <?php echo in_array('Earrings', $cat_avail) ? 'checked' : ''?>> Earrings
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cat_avail[]" value="Wedding Rings" <?php echo in_array('Wedding Rings', $cat_avail) ? 'checked' : ''?>> Wedding Rings
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cat_avail[]" value="Nose Rings" <?php echo in_array('Nose Rings', $cat_avail) ? 'checked' : ''?>> Nose Rings
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cat_avail[]" value="Pendant Sets" <?php echo in_array('Pendant Sets', $cat_avail) ? 'checked' : ''?>> Pendant Sets
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cat_avail[]" value="Solitaires" <?php echo in_array('Solitaires', $cat_avail) ? 'checked' : ''?>> Solitaires
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cat_avail[]" value="MangalSutra" <?php echo in_array('MangalSutra', $cat_avail) ? 'checked' : ''?>> MangalSutra
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cat_avail[]" value="Choker" <?php echo in_array('Choker', $cat_avail) ? 'checked' : ''?>> Choker
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cat_avail[]" value="Bracelets" <?php echo in_array('Bracelets', $cat_avail) ? 'checked' : ''?>> Bracelets
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cat_avail[]" value="Anklets" <?php echo in_array('Anklets', $cat_avail) ? 'checked' : ''?>> Anklets
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="cat_avail[]" value="Kamarbandh" <?php echo in_array('Kamarbandh', $cat_avail) ? 'checked' : ''?>> Kamarbandh
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- decorator  -->
                            <?php
                            } elseif ($category == 8) {
                                $price_range = explode('-', $val['price_range']);
                                $sp = $price_range[0];
                                $se = $price_range[1];

                                $min_range = explode('-', $val['min_range']);
                                $spp = $min_range[0];
                                $see = $min_range[1];

                                $deco_style = array();
                                            if(isset($val['deco_style'])){
                                              $deco_style =  explode(',', $val['deco_style']);
                                            }
                                            
                                $modern_style = array();
                                if(isset($val['modern_style'])){
                                    $modern_style =  explode(',', $val['modern_style']);
                                }
                            ?>
                                <div class="decorator_sec vendor_cat_inputs-admin" id="decorator_secs">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="start_price" class="form-label">Starting Price</label>
                                            <input type="number" class="form-control" id="start_price" placeholder="Starting Price" name="decorator_start_price" value="<?php echo isset($val['start_price']) ? $val['start_price'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="design_offer" class="form-label">Designs/ Products Offered</label>
                                            <input type="text" class="form-control" id="design_offer" placeholder="Designs/ Products Offered" name="decorator_design_offers" value="<?php echo isset($val['design_offer']) ? $val['design_offer'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="based_price" class="form-label">Flower based traditional decoration Price</label>
                                            <input type="number" class="form-control" id="based_price" placeholder="Flower based traditional decoration Price" name="based_price" value="<?php echo isset($val['based_price']) ? $val['based_price'] : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Experience Since in Number" name="decorator_exp_since" value="<?php echo isset($val['exp_since']) ? $val['exp_since'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="package1" class="form-label">Package 1: Price range for flower based traditional decoration</label>
                                            <input type="number" class="form-control" id="package1" placeholder="Price range for flower based traditional decoration" name="decorator_package1" value="<?php echo isset($val['package1']) ? $val['package1'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="package2" class="form-label">Package 2: price range for flower based traditional decoration </label>
                                            <input type="number" class="form-control" id="package2" placeholder="price range for flower based traditional decoration" name="decorator_package2" value="<?php echo isset($val['package2']) ? $val['package2'] : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="price_range" class="form-label">price range of your fixed planning fee</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="price_range" class="form-label">Start Price</label>
                                            <input type="number" class="form-control" id="price_range" placeholder="Start Price" name="decorator_price_range" value="<?php echo isset($sp) ? $sp : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="price_range_max" class="form-label">Max Price</label>
                                            <input type="number" class="form-control" id="price_range_max" placeholder="Max Price" name="price_range_max" value="<?php echo isset($se) ? $se : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="price_range" class="form-label">minimum wedding budget range required</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="min_range" class="form-label">Start Price</label>
                                            <input type="number" class="form-control" id="min_range" placeholder="Start Price" name="min_range" value="<?php echo isset($spp) ? $spp : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="min_range_max" class="form-label">Max Price</label>
                                            <input type="number" class="form-control" id="min_range_max" placeholder="Max Price" name="min_range_max" value="<?php echo isset($see) ? $see : ''?>">
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="">Traditional Decoration Styles</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="deco_style[]" value="Floral Decoration"<?php echo in_array('Floral Decoration', $deco_style) ? 'checked' : ''?>> Floral Decoration
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="deco_style[]" value="Rajasthani Decoration" <?php echo in_array('Rajasthani Decoration', $deco_style) ? 'checked' : ''?>> Rajasthani Decoration
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="deco_style[]" value="Punjabi Decoration" <?php echo in_array('Punjabi Decoration', $deco_style) ? 'checked' : ''?>> Punjabi Decoration
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="deco_style[]" value="South Indian Decoration" <?php echo in_array('South Indian Decoration', $deco_style) ? 'checked' : ''?>> South Indian Decoration
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="deco_style[]" value="Royal Style Decoration" <?php echo in_array('Royal Style Decoration', $deco_style) ? 'checked' : ''?>> Royal Style Decoration
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="deco_style[]" value="Bollywood Style Decoration" <?php echo in_array('Bollywood Style Decoration', $deco_style) ? 'checked' : ''?>> Bollywood Style Decoration
                                                    </label>
                                                </div>

                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="">Modern Decoration Styles</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="modern_style[]" value="Vintage Decoration Style" <?php echo in_array('Vintage Decoration Style', $modern_style) ? 'checked' : ''?>> Vintage Decoration Style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="modern_style[]" value="Bohemian Decoration Style" <?php echo in_array('Bohemian Decoration Style', $modern_style) ? 'checked' : ''?>> Bohemian Decoration Style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="modern_style[]" value="Greenhouse Decoration Style" <?php echo in_array('Greenhouse Decoration Style', $modern_style) ? 'checked' : ''?>> Greenhouse Decoration Style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="modern_style[]" value="Moroccan Decoration Style" <?php echo in_array('Moroccan Decoration Style', $modern_style) ? 'checked' : ''?>> Moroccan Decoration Style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="modern_style[]" value="Metallic Decoration Style" <?php echo in_array('Metallic Decoration Style', $modern_style) ? 'checked' : ''?>> Metallic Decoration Style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="modern_style[]" value="Theatrical Decoration Style" <?php echo in_array('Theatrical Decoration Style', $modern_style) ? 'checked' : ''?>> Theatrical Decoration Style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="modern_style[]" value="Rustic Decoration Style" <?php echo in_array('Rustic Decoration Style', $modern_style) ? 'checked' : ''?>> Rustic Decoration Style
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="modern_style[]" value="Sundowner Decoration Style" <?php echo in_array('Sundowner Decoration Style', $modern_style) ? 'checked' : ''?>> Sundowner Decoration Style
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- catering  -->
                            <?php
                            } elseif ($category == 10) {
                                $veg_menu = explode('-', $val['veg_menu']);
                                $veg_start = $veg_menu[0];
                                $veg_end = $veg_menu[1];

                                $non_veg_menu = explode('-', $val['non_veg_menu']);
                                $nveg_start = $non_veg_menu[0];
                                $nveg_end = $non_veg_menu[1];

                                $menu_opt = array();
                                            if(isset($val['menu_opt'])){
                                              $menu_opt =  explode(',', $val['menu_opt']);
                                            }
                                            
                                $service_avail = array();
                                if(isset($val['service_avail'])){
                                    $service_avail =  explode(',', $val['service_avail']);
                                }
                                
                            ?>
                                <div class="catering_sec vendor_cat_inputs-admin" id="catering_secs">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="start_price" class="form-label">Starting Price per plate</label>
                                            <input type="number" class="form-control" id="start_price" placeholder="Starting Price" name="catering_start_price" value="<?php echo isset($val['start_price']) ? $val['start_price'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Experience Since in Number" name="catering_exp_since" value="<?php echo isset($val['exp_since']) ? $val['exp_since'] : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="veg_menu" class="form-label">Price range of veg menu</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="veg_menu" class="form-label">Start Price</label>
                                            <input type="number" class="form-control" id="veg_menu" placeholder="Start Price" name="veg_menu"<?php echo isset($veg_start) ? $veg_start : ''?>>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="veg_menu_max" class="form-label">Max Price</label>
                                            <input type="number" class="form-control" id="veg_menu_max" placeholder="Max Price" name="veg_menu_max" <?php echo isset($veg_end) ? $veg_end : ''?>>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="non_veg_menu" class="form-label">Price range of non veg menu </label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="non_veg_menu" class="form-label">Start Price</label>
                                            <input type="number" class="form-control" id="non_veg_menu" placeholder="Start Price" name="non_veg_menu" <?php echo isset($nveg_start) ? $nveg_start : ''?>>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="non_veg_menu_max" class="form-label">Max Price</label>
                                            <input type="number" class="form-control" id="non_veg_menu_max" placeholder="Max Price" name="non_veg_menu_max" <?php echo isset($nveg_end) ? $nveg_end : ''?>>
                                        </div>

                                        <div class="col-12 form-group">
                                            <label for="">Menu & Catering</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="menu_opt[]" value="North indian/ mughlai" <?php echo in_array('North indian/ mughlai', $menu_opt) ? 'checked' : ''?>> North indian/ mughlai
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="menu_opt[]" value="Italian/ european/ continental" <?php echo in_array('Italian/ european/ continental', $menu_opt) ? 'checked' : ''?>> Italian/ european/ continental
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="menu_opt[]" value="Chinese/ thai/ oriental" <?php echo in_array('Chinese/ thai/ oriental', $menu_opt) ? 'checked' : ''?>> Chinese/ thai/ oriental
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="menu_opt[]" value="Seafood" <?php echo in_array('Seafood', $menu_opt) ? 'checked' : ''?>> Seafood
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="menu_opt[]" value="Chaat & indian street food" <?php echo in_array('Chaat & indian street food', $menu_opt) ? 'checked' : ''?>> Chaat & indian street food
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="menu_opt[]" value="South indian" <?php echo in_array('South indian', $menu_opt) ? 'checked' : ''?>> South indian
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="menu_opt[]" value="Garlic Free/ Onion Free" <?php echo in_array('Garlic Free/ Onion Free', $menu_opt) ? 'checked' : ''?>> Garlic Free/ Onion Free
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-12 form-group">
                                            <label for="">Under Other Services Available</label>
                                            <div class="row">
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Live food counters" <?php echo in_array('Live food counters', $service_avail) ? 'checked' : ''?>> Live food counters
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Drinks (non-alcoholic)" <?php echo in_array('Drinks (non-alcoholic)', $service_avail) ? 'checked' : ''?>> Drinks (non-alcoholic)
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Provides Bartender Services" <?php echo in_array('Provides Bartender Services', $service_avail) ? 'checked' : ''?>> Provides Bartender Services
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Bar SetUp Available" <?php echo in_array('Bar SetUp Available', $service_avail) ? 'checked' : ''?>> Bar SetUp Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Food Presentation Expertise" <?php echo in_array('Food Presentation Expertise', $service_avail) ? 'checked' : ''?>> Food Presentation Expertise
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Crockery/ Cutlery / Glassware Provided" <?php echo in_array('Crockery/ Cutlery / Glassware Provided', $service_avail) ? 'checked' : ''?>> Crockery/ Cutlery / Glassware Provided
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Lighting Setup for Food Available" <?php echo in_array('Lighting Setup for Food Available', $service_avail) ? 'checked' : ''?>> Lighting Setup for Food Available
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Service Staff facilities" <?php echo in_array('Service Staff facilities', $service_avail) ? 'checked' : ''?>> Service Staff facilities
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Uniformed Service staff Facilities" <?php echo in_array('Uniformed Service staff Facilities', $service_avail) ? 'checked' : ''?>> Uniformed Service staff Facilities
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Travels Outstation" <?php echo in_array('Travels Outstation', $service_avail) ? 'checked' : ''?>> Travels Outstation
                                                    </label>
                                                </div>
                                                <div class="col-md-3">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Does not Travel Outstation" <?php echo in_array('Does not Travel Outstation', $service_avail) ? 'checked' : ''?>> Does not Travel Outstation
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- Gift  -->
                            <?php
                            } elseif ($category == 9) {

                                $price_range_edit = explode('-', $val['price_range_edit']);
                                $prs = $price_range_edit[0];
                                $pre = $price_range_edit[1];

                                $price_range_non_edit = explode('-', $val['price_range_non_edit']);
                                $prns = $price_range_non_edit[0];
                                $prnse = $price_range_non_edit[1];

                                $range_editable = explode('-', $val['range_editable']);
                                $res = $range_editable[0];
                                $ree = $range_editable[1];

                                $range_non_editable = explode('-', $val['range_non_editable']);
                                $rnes = $range_non_editable[0];
                                $rnee = $range_non_editable[1];

                                $service_avail = array();
                                if(isset($val['service_avail'])){
                                  $service_avail =  explode(',', $val['service_avail']);
                                }
                            ?>
                                <div class="gift_sec vendor_cat_inputs-admin" id="gift_secs">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="start_price" class="form-label">Gifts Starting Price</label>
                                            <input type="number" class="form-control" id="start_price" placeholder="Starting Price" name="gift_start_price" value="<?php echo isset($val['start_price']) ? $val['start_price'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Experience Since in Number" name="gift_exp_since" value="<?php echo isset($val['exp_since']) ? $val['exp_since'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="design_offer" class="form-label">Designs/Products/Services offered</label>
                                            <input type="text" class="form-control" id="design_offer" placeholder="Designs/Products/Services offered" name="gift_design_offer" value="<?php echo isset($val['design_offer']) ? $val['design_offer'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="gift_type" class="form-label">Gift Type</label>
                                            <select name="gift_type" class="form-control" id="gift_type">
                                                <option value="Edible"<?php echo (isset($val['gift_type']) && $val['gift_type'] == 'Edible') ? 'selected' : ''?>>Edible</option>
                                                <option value="Non- Edible"<?php echo (isset($val['gift_type']) && $val['gift_type'] == 'Non- Edible') ? 'selected' : ''?>>Non- Edible</option>
                                                <option value="Edible & Non Edible"<?php echo (isset($val['gift_type']) && $val['gift_type'] == 'Edible & Non Edible') ? 'selected' : ''?>>Edible & Non Edible</option>
                                                <option value="Others"<?php echo (isset($val['gift_type']) && $val['gift_type'] == 'Others') ? 'selected' : ''?>>Others</option>
                                            </select>
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="editable" class="form-label">MOQ for Edible gifts & favors</label>
                                            <input type="number" class="form-control" id="editable" placeholder="MOQ  for Edible gifts & favors" name="editable" value="<?php echo isset($val['editable']) ? $val['editable'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="non_editable" class="form-label">MOQ for Non-Edible gifts & favors</label>
                                            <input type="number" class="form-control" id="non_editable" placeholder="MOQ  for Non-Edible gifts & favors" name="non_editable" value="<?php echo isset($val['non_editable']) ? $val['non_editable'] : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="design" class="form-label">Price range per kg for edible gifts or favors </label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="price_range_edit" class="form-label">Start Price</label>
                                            <input type="number" class="form-control" id="price_range_edit" placeholder="Start Price" name="price_range_edit"
                                            value="<?php echo isset($res) ? $res : ''?>"
                                            >
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="price_range_edit_max" class="form-label">Max Price</label>
                                            <input type="number" class="form-control" id="price_range_edit_max" placeholder="Max Price" name="price_range_edit_max" value="<?php echo isset($ree) ? $ree : ''?>">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="price_range_non_edit" class="form-label">Price range per gift/ pack for non-edible gifts or favors</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="price_range_non_edit" class="form-label">Start Price</label>
                                            <input type="number" class="form-control" id="price_range_non_edit" placeholder="Start Price" name="price_range_non_edit" value="<?php echo isset($rnes) ? $rnes : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="price_range_non_edit_max" class="form-label">Max Price</label>
                                            <input type="number" class="form-control" id="price_range_non_edit_max" placeholder="Max Price" name="price_range_non_edit_max" value="<?php echo isset($rnee) ? $rnee : ''?>">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="range_editable" class="form-label">MOQ range for edible gifts or favors</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="range_editable" class="form-label">Start Price</label>
                                            <input type="number" class="form-control" id="range_editable" placeholder="Start Price" name="range_editable" value="<?php echo isset($res) ? $res : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="range_editable_max" class="form-label">Max Price</label>
                                            <input type="number" class="form-control" id="range_editable_max" placeholder="Max Price" name="range_editable_max" value="<?php echo isset($ree) ? $ree : ''?>">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="range_non_editable" class="form-label">MOQ range for non-edible gifts or favors</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="range_non_editable" class="form-label">Start Price</label>
                                            <input type="number" class="form-control" id="range_non_editable" placeholder="Start Price" name="range_non_editable" value="<?php echo isset($rnes) ? $rnes : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="range_non_editable_max" class="form-label">Max Price</label>
                                            <input type="number" class="form-control" id="range_non_editable_max" placeholder="Max Price" name="range_non_editable_max" value="<?php echo isset($rnee) ? $rnee : ''?>">
                                        </div>

                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Edible Gifts & Favours Available" <?php echo in_array('Edible Gifts & Favours Available', $service_avail) ? 'checked' : ''?>> Edible Gifts & Favours Available
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Non-Edible Gifts & Favours Available" <?php echo in_array('Non-Edible Gifts & Favours Available', $service_avail) ? 'checked' : ''?>> Non-Edible Gifts & Favours Available
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Edible and Non-Edible Gifts & Favours Available" <?php echo in_array('Edible and Non-Edible Gifts & Favours Available', $service_avail) ? 'checked' : ''?>> Edible and Non-Edible Gifts & Favours Available
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="No Minimum Order Quantity (MOQ) Requirement" <?php echo in_array('No Minimum Order Quantity (MOQ) Requirement', $service_avail) ? 'checked' : ''?>> No Minimum Order Quantity (MOQ) Requirement
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="service_avail[]" value="Minimal Minimum Order Quantity (MOQ) Requirement" <?php echo in_array('Minimal Minimum Order Quantity (MOQ) Requirement', $service_avail) ? 'checked' : ''?>> Minimal Minimum Order Quantity (MOQ) Requirement
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- invitation  -->
                            <?php
                            } elseif ($category == 13) {

                                $start_price_range = explode('-', $val['start_price_range']);
                                $sprs = $start_price_range[0];
                                $spre = $start_price_range[1];

                                $price_range_box = explode('-', $val['price_range_box']);
                                $prbs = $price_range_box[0];
                                $prbe = $price_range_box[1];

                                $printed_card = explode('-', $val['printed_card']);
                                $pcs = $printed_card[0];
                                $pce = $printed_card[1];

                                $box_card = explode('-', $val['box_card']);
                                $bcs = $box_card[0];
                                $bce = $box_card[1];

                                $requirement = array();
                                if(isset($val['requirement'])){
                                  $requirement =  explode(',', $val['requirement']);
                                }

                                $type_avail = array();
                                if(isset($val['type_avail'])){
                                  $type_avail =  explode(',', $val['type_avail']);
                                }

                                $paper_style_avail = array();
                                if(isset($val['paper_style_avail'])){
                                  $paper_style_avail =  explode(',', $val['paper_style_avail']);
                                }
                            ?>
                                <div class="invi_sec vendor_cat_inputs-admin" id="invi_secs">
                                    <div class="row">
                                        <div class="col-md-6 form-group">
                                            <label for="start_price" class="form-label">Invites Starting Price</label>
                                            <input type="number" class="form-control" id="start_price" placeholder="Starting Price" name="invitation_start_price" value="<?php echo isset($val['start_price']) ? $val['start_price'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="exp_since" class="form-label">Experience Since</label>
                                            <input type="number" class="form-control" id="exp_since" placeholder="Experience Since in Number" name="invitation_exp_since" value="<?php echo isset($val['exp_since']) ? $val['exp_since'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="design_offer" class="form-label">Designs/ Products/ Services</label>
                                            <input type="text" class="form-control" id="design_offer" placeholder="Designs/ Products/ Services" name="invitation_design_offer" value="<?php echo isset($val['design_offer']) ? $val['design_offer'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="price_box" class="form-label">Starting price for packaged (boxed) invitations</label>
                                            <input type="text" class="form-control" id="price_box" placeholder="Starting price for packaged (boxed) invitations" name="price_box" value="<?php echo isset($val['price_box']) ? $val['price_box'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="box_invite" class="form-label">MOQ (Boxed Invites)</label>
                                            <input type="text" class="form-control" id="box_invite" placeholder="MOQ (Boxed Invites)" name="box_invite" value="<?php echo isset($val['box_invite']) ? $val['box_invite'] : ''?>">
                                        </div>
                                        <div class="col-md-6 form-group">
                                            <label for="print_card" class="form-label">MOQ (printed Cards)</label>
                                            <input type="text" class="form-control" id="print_card" placeholder="MOQ (printed Cards)" name="print_card" value="<?php echo isset($val['print_card']) ? $val['print_card'] : ''?>">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="start_price_range" class="form-label">starting price range per invite for wedding cards</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="start_price_range" class="form-label">Start Price</label>
                                            <input type="number" class="form-control" id="start_price_range" placeholder="Start Price" name="start_price_range" value="<?php echo isset($sprs) ? $sprs : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="start_price_range_max" class="form-label">Max Price</label>
                                            <input type="number" class="form-control" id="start_price_range_max" placeholder="Max Price" name="start_price_range_max" value="<?php echo isset($spre) ? $spre : ''?>">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="price_range_box" class="form-label">starting price range - packaged (boxed) invitations</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="price_range_box" class="form-label">Start Price</label>
                                            <input type="number" class="form-control" id="price_range_box" placeholder="Start Price" name="price_range_box" value="<?php echo isset($prbs) ? $prbs : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="price_range_box_max" class="form-label">Max Price</label>
                                            <input type="number" class="form-control" id="price_range_box_max" placeholder="Max Price" name="price_range_box_max" value="<?php echo isset($prbe) ? $prbe : ''?>">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="printed_card" class="form-label">MOQ Range (Printed Cards)</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="printed_card" class="form-label">Start Price</label>
                                            <input type="number" class="form-control" id="printed_card" placeholder="Start Price" name="printed_card" value="<?php echo isset($pcs) ? $pcs : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="printed_card_max" class="form-label">Max Price</label>
                                            <input type="number" class="form-control" id="printed_card_max" placeholder="Max Price" name="printed_card_max" value="<?php echo isset($pce) ? $pce : ''?>">
                                        </div>

                                        <div class="col-md-4 form-group">
                                            <label for="box_card" class="form-label">MOQ Range (Boxed Cards)</label>
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="box_card" class="form-label">Start Price</label>
                                            <input type="number" class="form-control" id="box_card" placeholder="Start Price" name="box_card" value="<?php echo isset($bcs) ? $bcs : ''?>">
                                        </div>
                                        <div class="col-md-4 form-group">
                                            <label for="box_card_max" class="form-label">Max Price</label>
                                            <input type="number" class="form-control" id="box_card_max" placeholder="Max Price" name="box_card_max" value="<?php echo isset($bce) ? $bce : ''?>">
                                        </div>

                                        <div class="col-12 form-group">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <label>
                                                        <input type="checkbox" name="requirement[]" value="No Minimum Order Quantity (MOQ) Requirement" <?php echo in_array('No Minimum Order Quantity (MOQ) Requirement', $requirement) ? 'checked' : ''?>> No Minimum Order Quantity (MOQ) Requirement
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>
                                                        <input type="checkbox" name="requirement[]" value="Minimal Minimum Order Quantity (MOQ) Requirement" <?php echo in_array('Minimal Minimum Order Quantity (MOQ) Requirement', $requirement) ? 'checked' : ''?>> Minimal Minimum Order Quantity (MOQ) Requirement
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>
                                                        <input type="checkbox" name="requirement[]" class="check_toggle" id="prod_toggles" value="Multiple Product Types Available" <?php echo in_array('Multiple Product Types Available', $requirement) ? 'checked' : ''?>> Multiple Product Types Available
                                                    </label>
                                                </div>
                                                <div class="col-md-6">
                                                    <label>
                                                        <input type="checkbox" name="requirement[]" class="check_toggle" id="paper_toggles" value="Multiple Paper Styles Available" <?php echo in_array('Multiple Paper Styles Available', $requirement) ? 'checked' : ''?>> Multiple Paper Styles Available
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 form-group" id="prod_div">
                                            <label for="">Product Types</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="type_avail[]" value="Cards" <?php echo in_array('Cards', $type_avail) ? 'checked' : ''?>> Cards
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="type_avail[]" value="Boxed Gift Types" <?php echo in_array('Boxed Gift Types', $type_avail) ? 'checked' : ''?>> Boxed Gift Types
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="type_avail[]" value="Novel Concepts" <?php echo in_array('Novel Concepts', $type_avail) ? 'checked' : ''?>> Novel Concepts
                                                    </label>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="col-12 form-group" id="paper_div">
                                            <label for="">Paper Styles</label>
                                            <div class="row">
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="paper_style_avail[]" value="Matte Finish" <?php echo in_array('Matte Finish', $paper_style_avail) ? 'checked' : ''?>> Matte Finish
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="paper_style_avail[]" value="Glossy Finish" <?php echo in_array('Glossy Finish', $paper_style_avail) ? 'checked' : ''?>> Glossy Finish
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="paper_style_avail[]" value="Recycled/ Ecofriendly Gifts" <?php echo in_array('Recycled/ Ecofriendly Gifts', $paper_style_avail) ? 'checked' : ''?>> Recycled/ Ecofriendly Gifts
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="paper_style_avail[]" value="Mylar Style" <?php echo in_array('Mylar Style', $paper_style_avail) ? 'checked' : ''?>> Mylar Style
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="paper_style_avail[]" value="Parchment Style" <?php echo in_array('Parchment Style', $paper_style_avail) ? 'checked' : ''?>> Parchment Style
                                                    </label>
                                                </div>
                                                <div class="col-md-4">
                                                    <label>
                                                        <input type="checkbox" name="paper_style_avail[]" value="Handmade Gifts" <?php echo in_array('Handmade Gifts', $paper_style_avail) ? 'checked' : ''?>> Handmade Gifts
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            <?php } ?>
                        </div>
                        <div class="card my-2 px-3 py-2 d-none">
                            <div class="col-12">
                                <div class="row">
                                    <div class="col-md-6 form-group">
                                        <label for="images" class="vendor-form-image">Images</label>
                                        <input type="file" name="images[]" id="images" multiple accept="image/*">
                                    </div>
                                    <div class="col-md-6 form-group">
                                        <label for="comp_logo" class="vendor-form-image">Business Logo (Optional)</label>
                                        <input type="file" name="comp_logo" id="comp_logo">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="col-12 text-center my-md-4 my-2">
                            <button class="btn vendor-btn-submit  btn-success" type="submit">Submit</button>
                        </div> -->
                    </form>
                </div>
            </div>
        </div>
    </section>
    <script src="<?php echo base_url() ?>assets/front/js/vendor.js"></script>

</div>
<?php $this->load->view('admin/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>

<script>
    $(document).ready(function() {
        $('#category').change(function() {
            const cat_id = $(this).val();
            $.ajax({
                url: '<?php echo base_url() ?>Vendor/SubCat',
                type: 'post',
                data: {
                    cat_id: cat_id
                },
                dataType: 'json',
                success: function(res) {
                    $('#sub_category').empty();
                    $('#sub_category').append('<option value="">Please select sub category</option>');
                    $.each(res, function(key, value) {
                        $('#sub_category').append('<option value="' + value.sub_category_id + '">' + value.name + '</option>');
                    })
                }
            })
        })
    })

    function disableInputsInDiv(divId) {
        const div = document.getElementById(divId);
        const selectFields = div.querySelectorAll('select');
        const inputFields = div.getElementsByTagName('input');
        const textareaFields = div.querySelectorAll('textarea');

        // selectFields.disabled = true;
        for (let i = 0; i < selectFields.length; i++) {
            selectFields[i].disabled = true;
        }
        for (let i = 0; i < inputFields.length; i++) {
            inputFields[i].disabled = true;
            // selectFields[i].disabled = true;
        }

        for (let i = 0; i < textareaFields.length; i++) {
            textareaFields[i].disabled = true;
        }
    }
    disableInputsInDiv('form_cont');
</script>