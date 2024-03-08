<!DOCTYPE HTML>
<?php $this->load->view('front/layout/head'); ?>
<?php $this->load->view('front/layout/header'); ?>
<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/home.css"> -->
<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/style.css"> -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendors.css">
<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    /* .city_main {
        position: absolute;
        bottom: 32%;
    }

    .filter_city {
        background-color: #fff;
        border-radius: 30px;
        padding: 20px 0;
    }

    .filter_city img {
        height: 90px;
    }

    .filter_div {

        overflow-y: hidden;
        white-space: nowrap;

    } */

    /*#style-4::-webkit-scrollbar {*/
    /*    width: 0px;*/
    /*    background-color: none;*/
    /*}*/

    /*#style-4::-webkit-scrollbar-thumb {*/
    /*    display:none;*/
    /*}*/

    /* Style for the slider buttons (optional) */
    .prevBtn,
    .nextBtn {
        /* Define your styles for the buttons */
    }
</style>
<script>
    let slideIndex = 0;
    const slider = document.querySelector('.filter_div');
    const buttons = document.querySelectorAll('.filter_button');
    const buttonWidth = buttons[0].offsetWidth; // Assuming all buttons have the same width

    function moveSlider(n) {
        slideIndex += n;

        if (slideIndex < 0) {
            slideIndex = 0;
        } else if (slideIndex > buttons.length - 1) {
            slideIndex = buttons.length - 1;
        }

        const displacement = -slideIndex * buttonWidth;
        slider.style.transform = `translateX(${displacement}px)`;
    }
</script>
<section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url() ?>assets/front/image/hero-banner/MWP-Vendor-listing-page-hero-banner.jpg' )">
    <div class="overlay1"></div>
        <div class="container-fluid filter_div">
        <?php
        $vendor_name = $this->uri->segment(2);
        $city_name = !empty($this->session->userdata('selectedCity')) ? $this->session->userdata('selectedCity') : 'City';
        // echo $Get_Vendor_cat['cat_seo_url'];
        $ven_seo = array();
        foreach ($Get_Vendor_cat as $cat) {
            $ven_seo[] = $cat['cat_seo_url'];
        }
        // pr($ven_seo, '');exit;
            // echo  $ven_seo[0];exit;
        if ($ven_seo[0] == $vendor_name) {

            echo '<div class="filter_button showPopup">
                <p>'.str_replace('-',' ',$vendor_name).' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>'.$city_name.' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Type of Venue <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Price Range <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Per Plate budget <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Sort <i class="fa fa-sort-desc"></i></p>
                </div>';
        } elseif ($ven_seo[1] == $vendor_name) {
            echo '<div class="filter_button showPopup">
                    <p>'.str_replace('-',' ',$vendor_name).' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>'.$city_name.' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Price range <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Dress Types <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Sort <i class="fa fa-sort-desc"></i></p>
                </div>';
        } elseif ($ven_seo[2] == $vendor_name) {
            echo '<div class="filter_button showPopup">
            <p>'. str_replace('-',' ',$vendor_name) .' <i class="fa fa-sort-desc"></i></p>
            </div>
            <div class="filter_button showPopup">
                <p>'.$city_name.' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Price range <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Dress Types <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Sort <i class="fa fa-sort-desc"></i></p>
                </div>';
        } elseif ($ven_seo[3] == $vendor_name) {
            echo '<div class="filter_button showPopup">
            <p>'.str_replace('-',' ',$vendor_name).' <i class="fa fa-sort-desc"></i></p>
            </div>
            <div class="filter_button showPopup">
                <p>'.$city_name.' <i class="fa fa-sort-desc"></i></p>
        </div>
        <div class="filter_button showPopup">
            <p>Price range <i class="fa fa-sort-desc"></i></p>
        </div>
        <div class="filter_button showPopup">
            <p>Per day budget <i class="fa fa-sort-desc"></i></p>
        </div>
        <div class="filter_button showPopup">
            <p>Experience <i class="fa fa-sort-desc"></i></p>
        </div>
        <div class="filter_button showPopup">
            <p>Sort <i class="fa fa-sort-desc"></i></p>
        </div>';
        } elseif ($ven_seo[4] == $vendor_name) {
            echo '<div class="filter_button showPopup">
                <p>'.str_replace('-',' ',$vendor_name).' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>'.$city_name.' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Make Up Types <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Price Range <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Service Location <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Sort <i class="fa fa-sort-desc"></i></p>
                </div>';
        } elseif ($ven_seo[5] == $vendor_name) {
            echo '<div class="filter_button showPopup">
                <p>'.str_replace('-',' ',$vendor_name).' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>'.$city_name.' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Guest count to be attended <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Price Range <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Experience <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Sort <i class="fa fa-sort-desc"></i></p>
                </div>';
        } elseif ($ven_seo[6] == $vendor_name) {
            echo '<div class="filter_button showPopup">
                <p>'.str_replace('-',' ',$vendor_name).' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>'.$city_name.' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Jewellery Type <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Price Range <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Sort <i class="fa fa-sort-desc"></i></p>
                </div>';
        } elseif ($ven_seo[7] == $vendor_name) {
            echo '<div class="filter_button showPopup">
            <p>'.str_replace('-',' ',$vendor_name).' <i class="fa fa-sort-desc"></i></p>
            </div>
            <div class="filter_button showPopup">
                <p>'.$city_name.' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Price range <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Sort <i class="fa fa-sort-desc"></i></p>
                </div>';
        } elseif ($ven_seo[8] == $vendor_name) {
            echo '<div class="filter_button showPopup">
                <p>'.str_replace('-',' ',$vendor_name).' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>'.$city_name.' <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Gift Type <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Price Range <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Minimum Order Quantity <i class="fa fa-sort-desc"></i></p>
                </div>
                <div class="filter_button showPopup">
                    <p>Sort <i class="fa fa-sort-desc"></i></p>
                </div>';
        } elseif ($ven_seo[9] == $vendor_name) {
            echo '<div class="filter_button showPopup">
            <p>'.str_replace('-',' ',$vendor_name).' <i class="fa fa-sort-desc"></i></p>
            </div>
            <div class="filter_button showPopup">
                <p>'.$city_name.' <i class="fa fa-sort-desc"></i></p>
            </div>
            <div class="filter_button showPopup">
                <p>Food Options <i class="fa fa-sort-desc"></i></p>
            </div>
            <div class="filter_button showPopup">
                <p>Price Range <i class="fa fa-sort-desc"></i></p>
            </div>
            <div class="filter_button showPopup">
                <p>Relevance <i class="fa fa-sort-desc"></i></p>
            </div>';
        } elseif ($ven_seo[10] == $vendor_name) {
            echo '<div class="filter_button showPopup">
            <p>'.str_replace('-',' ',$vendor_name).' <i class="fa fa-sort-desc"></i></p>
            </div>
            <div class="filter_button showPopup">
                <p>'.$city_name.' <i class="fa fa-sort-desc"></i></p>
            </div>
            <div class="filter_button showPopup">
                <p>Product Types <i class="fa fa-sort-desc"></i></p>
            </div>
            <div class="filter_button showPopup">
                <p>Price Range <i class="fa fa-sort-desc"></i></p>
            </div>
            <div class="filter_button showPopup">
                <p>Paper Styles <i class="fa fa-sort-desc"></i></p>
            </div>
            <div class="filter_button showPopup">
                <p>Sort <i class="fa fa-sort-desc"></i></p>
            </div>';
        }
        ?>
    </div>
    <!-- </form> -->
</section>
<nav aria-label="breadcrumb">
    <ol class="breadcrumb" style="background:none;">
        <li class="breadcrumb-item"><a href="<?php echo base_url() ?>" style="color: #FD152A;">Home</a></li>
        <li class="breadcrumb-item"><a href="<?php echo  base_url() ?>vendor/vendorlisting" style="color: #4D4D4D;">Vendor Listing</a></li>
        <li class="breadcrumb-item active" aria-current="page" style="color: #4D4D4D;"><?php echo $vendors['result'][0]['cat_name'] ?></li>
    </ol>
</nav>
<?php
$get = $this->input->get();
// echo $city_name;
$url = $vendor_name . '-in-' . $this->session->userdata('selectedCity');
?>
<!-- filter popup -->
<div id="popupContainer">
    <div class="container-fluid">
        <div class="top_header">
            <p>Filter result for:</p>
            <select name="" id="vendor_ajax1">
                <!-- <option value="">Select Vendor</option> -->
                <?php
                $vendor = Vendor_category();
                foreach ($vendor as $vend) {
                    if ($vend['cat_seo_url'] == $vendor_name) {
                        echo '<option value="' . $vend['cat_seo_url'] . '" Selected>' . $vend['name'] . '</option>';
                    } else {
                        echo '<option value="' . $vend['cat_seo_url'] . '">' . $vend['name'] . '</option>';
                    }
                }
                ?>
            </select>
            <span>IN</span>
            <select name="" id="filter_city1" required>
                <option value="">Select City</option>
                <?php
                $city = Vendor_city();
                foreach ($city as  $value) {
                    if ($city_name == $value['name']) {
                        echo '<option value="' . $value['name'] . '" Selected>' . $value['name'] . '</option>';
                    } else {
                        echo '<option value="' . $value['name'] . '">' . $value['name'] . '</option>';
                    }
                }
                ?>
            </select>
        </div>
        <hr>
        <form action="<?php echo base_url() . $url ?>" method="get" id="filter_form">
            <div class="filter_list">
                <div class="row">
                    <?php
                    if ($ven_seo[0] == $vendor_name) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Event Spaces</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="event_spaces[]" value="Banquet Halls" <?php echo (isset($get['event_spaces']) && in_array('Banquet Halls', $get['event_spaces'])) ? 'Checked' : '';?>> Banquet Halls
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="event_spaces[]" value="Lawns & Farmhouse" <?php echo (isset($get['event_spaces']) && in_array('Lawns & Farmhouse', $get['event_spaces'])) ? 'Checked' : '';?>> Lawns & Farmhouse
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="event_spaces[]" value="Resorts" <?php echo (isset($get['event_spaces']) && in_array('Resorts', $get['event_spaces'])) ? 'Checked' : '';?>> Resorts
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="event_spaces[]" value="Hotels" <?php echo (isset($get['event_spaces']) && in_array('Hotels', $get['event_spaces'])) ? 'Checked' : '';?>> Hotels
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="event_spaces[]" value="Destination Feels" <?php echo (isset($get['event_spaces']) && in_array('Destination Feels', $get['event_spaces'])) ? 'Checked' : '';?>> Destination Feels
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="event_spaces[]" value="Marriage Garden" <?php echo (isset($get['event_spaces']) && in_array('Marriage Garden', $get['event_spaces'])) ? 'Checked' : '';?>> Marriage Garden
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="event_spaces[]" value="Palace/ Fort" <?php echo (isset($get['event_spaces']) && in_array('Palace/ Fort', $get['event_spaces'])) ? 'Checked' : '';?>> Palace/ Fort
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Price Per Plate</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_plate[]" class="sortEnable" value="0-500" <?php echo (isset($get['price_plate']) && ($get['price_plate'] == '0-500')) ? 'Checked' : ''?>> Less than 500
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_plate[]" class="sortEnable" value="500-1000" <?php echo (isset($get['price_plate']) && ($get['price_plate'] == '500-1000')) ? 'Checked' : ''?>> 500-1000
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_plate[]" class="sortEnable" value="1000-1500" <?php echo (isset($get['price_plate']) && ($get['price_plate'] == '1000-1500')) ? 'Checked' : ''?>> 1000-1500
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_plate[]" class="sortEnable" value="1500-2000" <?php echo (isset($get['price_plate']) && ($get['price_plate'] == '1500-2000')) ? 'Checked' : ''?>> 1500-2000
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_plate[]"class="sortEnable"  value="2000" <?php echo (isset($get['price_plate']) && ($get['price_plate'] == '2000')) ? 'Checked' : ''?>> 2000 & more
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Price detail</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹')) ? 'Checked' : ''?>> ₹ (Budget friendly)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹')) ? 'Checked' : ''?>> ₹₹ (Value for money)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹₹')) ? 'Checked' : ''?>> ₹₹₹ (Exclusive / Premium)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    } elseif ($ven_seo[1] == $vendor_name) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Product Types</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" class="sortEnable" value="Lehenga" <?php echo (isset($get['prod_type']) && in_array('Lehenga', $get['prod_type'])) ? 'Checked' : '';?>> Bridal Lehenga </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" class="sortEnable" value="Saree" <?php echo (isset($get['prod_type']) && in_array('Saree', $get['prod_type'])) ? 'Checked' : '';?>> Bridal Saree </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" class="sortEnable" value="Cocktail Dresses" <?php echo (isset($get['prod_type']) && in_array('Cocktail Dresses', $get['prod_type'])) ? 'Checked' : '';?>> Cocktail Dresses </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" class="sortEnable" value="Indo-western Dresses" <?php echo (isset($get['prod_type']) && in_array('Indo-western Dresses', $get['prod_type'])) ? 'Checked' : '';?>> Indo-western Dresses </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" class="sortEnable" value="Dress fabrics" <?php echo (isset($get['prod_type']) && in_array('Dress fabrics', $get['prod_type'])) ? 'Checked' : '';?>> Dress fabrics </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" value="Bridal Suits" <?php echo (isset($get['prod_type']) && in_array('Bridal Suits', $get['prod_type'])) ? 'Checked' : '';?>> Bridal Suits </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" value="Gowns" <?php echo (isset($get['prod_type']) && in_array('Gowns', $get['prod_type'])) ? 'Checked' : '';?>> Gowns </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Price detail</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹')) ? 'Checked' : ''?>> ₹ (Budget friendly)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹')) ? 'Checked' : ''?>> ₹₹ (Value for money)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹₹')) ? 'Checked' : ''?>> ₹₹₹ (Exclusive / Premium)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    } elseif ($ven_seo[2] == $vendor_name) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Product Types</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" value="Sherwani" <?php echo (isset($get['prod_type']) && in_array('Sherwani', $get['prod_type'])) ? 'Checked' : '';?>> Sherwani</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" value="Suits & tuxedos" <?php echo (isset($get['prod_type']) && in_array('Suits & tuxedos', $get['prod_type'])) ? 'Checked' : '';?>> Suits & tuxedos</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" value="Bandhgala" <?php echo (isset($get['prod_type']) && in_array('Bandhgala', $get['prod_type'])) ? 'Checked' : '';?>> Bandhgala</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" value="Indo-western" <?php echo (isset($get['prod_type']) && in_array('Indo-western', $get['prod_type'])) ? 'Checked' : '';?>> Indo-western</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" value="Kurta Pyjamas" <?php echo (isset($get['prod_type']) && in_array('Kurta Pyjamas', $get['prod_type'])) ? 'Checked' : '';?>> Kurta Pyjamas</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" value="Waistcoat sets" <?php echo (isset($get['prod_type']) && in_array('Waistcoat sets', $get['prod_type'])) ? 'Checked' : '';?>> Waistcoat sets</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" value="Designer wear" <?php echo (isset($get['prod_type']) && in_array('Designer wear', $get['prod_type'])) ? 'Checked' : '';?>> Designer wear</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" value="Custom Made Wear" <?php echo (isset($get['prod_type']) && in_array('Custom Made Wear', $get['prod_type'])) ? 'Checked' : '';?>> Custom Made Wear</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" value="Jackets" <?php echo (isset($get['prod_type']) && in_array('Jackets', $get['prod_type'])) ? 'Checked' : '';?>> Jackets</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="prod_type[]" value="Jodhpuri" <?php echo (isset($get['prod_type']) && in_array('Jodhpuri', $get['prod_type'])) ? 'Checked' : '';?>> Jodhpuri</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Price detail</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹')) ? 'Checked' : ''?>> ₹ (Budget friendly)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹')) ? 'Checked' : ''?>> ₹₹ (Value for money)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹₹')) ? 'Checked' : ''?>> ₹₹₹ (Exclusive / Premium)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    } elseif ($ven_seo[3] == $vendor_name) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Price detail</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹')) ? 'Checked' : ''?>> ₹ (Budget friendly)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹')) ? 'Checked' : ''?>> ₹₹ (Value for money)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹₹')) ? 'Checked' : ''?>> ₹₹₹ (Exclusive / Premium)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Package 2: Price for 1-day wedding photoshoot</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="ppackage_range2[]" class="sortEnable" value="Under - 25,000"<?php echo (isset($get['ppackage_range2']) && ($get['ppackage_range2'] == 'Under - 25000')) ? 'Checked' : ''?>> Under - 25,000</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="ppackage_range2[]" class="sortEnable" value="25,000 - 49,999"<?php echo (isset($get['ppackage_range2']) && ($get['ppackage_range2'] == '5,000 - 49,999')) ? 'Checked' : ''?>> 25,000 - 49,999</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="ppackage_range2[]" class="sortEnable" value="50,000 - 74,999"<?php echo (isset($get['ppackage_range2']) && ($get['ppackage_range2'] == '50,000 - 74,999')) ? 'Checked' : ''?>> 50,000 - 74,999</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="ppackage_range2[]" class="sortEnable" value="75,000 - 99,999"<?php echo (isset($get['ppackage_range2']) && ($get['ppackage_range2'] == '75,000 - 99,999')) ? 'Checked' : ''?>> 75,000 - 99,999</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="ppackage_range2[]" value="1,00,000 - 1,24,999"<?php echo (isset($get['ppackage_range2']) && ($get['ppackage_range2'] == '1,00,000 - 1,24,999')) ? 'Checked' : ''?>> 1,00,000 - 1,24,999</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="ppackage_range2[]" value="1,25,000 - 1,49,999"<?php echo (isset($get['ppackage_range2']) && ($get['ppackage_range2'] == '1,25,000 - 1,49,999')) ? 'Checked' : ''?>> 1,25,000 - 1,49,999</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="ppackage_range2[]" value="1,50,000 - 1,99,999"<?php echo (isset($get['ppackage_range2']) && ($get['ppackage_range2'] == '1,50,000 - 1,99,999')) ? 'Checked' : ''?>> 1,50,000 - 1,99,999</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="ppackage_range2[]" value="2,00,000 - and more"<?php echo (isset($get['ppackage_range2']) && ($get['ppackage_range2'] == '2,00,000 - and more')) ? 'Checked' : ''?>> 2,00,000 - and more</label>
                                </div>
                            </div>
                        </div>
                    </div>
                     <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Experience</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="1+ years of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '1+ years of Experience')) ? 'Checked' : ''?>> 1+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="5 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '5 years+ of Experience')) ? 'Checked' : ''?>> 5+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="10 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '10 years+ of Experience')) ? 'Checked' : ''?>> 10+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="15 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '15 years+ of Experience')) ? 'Checked' : ''?>> 15+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="20 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '20 years+ of Experience')) ? 'Checked' : ''?>> 20+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="30 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '30 years+ of Experience')) ? 'Checked' : ''?>> 30+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="50 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '50 years+ of Experience')) ? 'Checked' : ''?>> 50+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="100 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '100 years+ of Experience')) ? 'Checked' : ''?>> 100+ years of Experience</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <?php
                    } elseif ($ven_seo[4] == $vendor_name) {
                    ?>
                     <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Makeup Techniques Know How</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="make_techs[]" value="Regular" <?php echo (isset($get['make_techs']) && in_array('Regular', $get['make_techs'])) ? 'Checked' : '';?>> Regular
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="make_techs[]" value="HD" <?php echo (isset($get['make_techs']) && in_array('HD', $get['make_techs'])) ? 'Checked' : '';?>> HD
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="make_techs[]" value="Airbrush" <?php echo (isset($get['make_techs']) && in_array('Airbrush', $get['make_techs'])) ? 'Checked' : '';?>> Airbrush
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="make_techs[]" value="Others" <?php echo (isset($get['make_techs']) && in_array('Others', $get['make_techs'])) ? 'Checked' : '';?>> Others
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>It's available in features</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="make_feature[]" value="Services available at Venue Only" <?php echo (isset($get['make_feature']) && ($get['make_feature'] == 'Services available at Venue Only')) ? 'Checked' : ''?>> At the venue
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="make_feature[]" value="Services available at Salon only" <?php echo (isset($get['make_feature']) && ($get['make_feature'] == 'Services available at Salon only')) ? 'Checked' : ''?>> At the salon
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="make_feature[]" value="Services Available at Venue and Salon" <?php echo (isset($get['make_feature']) && ($get['make_feature'] == 'Services Available at Venue and Salon')) ? 'Checked' : ''?>> Anywhere is possible
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Price detail</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹')) ? 'Checked' : ''?>> ₹ (Budget friendly)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹')) ? 'Checked' : ''?>> ₹₹ (Value for money)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹₹')) ? 'Checked' : ''?>> ₹₹₹ (Exclusive / Premium)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    } elseif ($ven_seo[5] == $vendor_name) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Max. People that can be attended</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="max_people[]" value="0-9" <?php echo (isset($get['max_people']) && ($get['price_detail'] == '0-9')) ? 'Checked' : ''?>> 0-9
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="max_people[]" value="10-19" <?php echo (isset($get['max_people']) && ($get['price_detail'] == '10-19')) ? 'Checked' : ''?>> 10-19
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="max_people[]" value="20-29" <?php echo (isset($get['max_people']) && ($get['price_detail'] == '20-29')) ? 'Checked' : ''?>> 20-29
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="max_people[]" value="30-39" <?php echo (isset($get['max_people']) && ($get['price_detail'] == '30-39')) ? 'Checked' : ''?>> 30-39
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="max_people[]" value="40-49" <?php echo (isset($get['max_people']) && ($get['price_detail'] == '40-49')) ? 'Checked' : ''?>> 40-49
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="max_people[]" value="50 and more" <?php echo (isset($get['max_people']) && ($get['price_detail'] == '50 and more')) ? 'Checked' : ''?>> 50 and more
                                    </label>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Experience</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="1+ years of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '1 years+ of Experience')) ? 'Checked' : ''?>> 1+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="5 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '5 years+ of Experience')) ? 'Checked' : ''?>> 5+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="10 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '10 years+ of Experience')) ? 'Checked' : ''?>> 10+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="15 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '15 years+ of Experience')) ? 'Checked' : ''?>> 15+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="20 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '20 years+ of Experience')) ? 'Checked' : ''?>> 20+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="30 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '30 years+ of Experience')) ? 'Checked' : ''?>> 30+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="50 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '50 years+ of Experience')) ? 'Checked' : ''?>> 50+ years of Experience</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="vendor_exp[]" value="100 years+ of Experience" <?php echo (isset($get['vendor_exp']) && ($get['vendor_exp'] == '100 years+ of Experience')) ? 'Checked' : ''?>> 100+ years of Experience</label>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Price detail</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹')) ? 'Checked' : ''?>> ₹ (Budget friendly)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹')) ? 'Checked' : ''?>> ₹₹ (Value for money)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹₹')) ? 'Checked' : ''?>> ₹₹₹ (Exclusive / Premium)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    } elseif ($ven_seo[6] == $vendor_name) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Jewellery Type</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="jew_type[]" value="Custom made Gold Jewellery" <?php echo (isset($get['jew_type']) && in_array('Custom made Gold Jewellery', $get['jew_type'])) ? 'Checked' : ''?>> Custom made Gold Jewellery
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="jew_type[]" value="Diamond Jewellery" <?php echo (isset($get['jew_type']) && in_array('Diamond Jewellery"', $get['jew_type'])) ? 'Checked' : ''?>> Diamond Jewellery
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="jew_type[]" value="Precious and Semi Precious Stone Jewellery" <?php echo (isset($get['jew_type']) && in_array('Precious and Semi Precious Stone Jewellery', $get['jew_type'])) ? 'Checked' : ''?>> Precious and Semi Precious Stone Jewellery
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="jew_type[]" value="American Diamond Jewellery" <?php echo (isset($get['jew_type']) && in_array('American Diamond Jewellery', $get['jew_type'])) ? 'Checked' : ''?>> American Diamond Jewellery
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="jew_type[]" value="Kemp Jewellery" <?php echo (isset($get['jew_type']) && in_array('Kemp Jewellery', $get['jew_type'])) ? 'Checked' : ''?>> Kemp Jewellery
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="jew_type[]" value="Imitation Jewellery" <?php echo (isset($get['jew_type']) && in_array('Imitation Jewellery', $get['jew_type'])) ? 'Checked' : ''?>> Imitation Jewellery
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Price detail</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹')) ? 'Checked' : ''?>> ₹ (Budget friendly)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹')) ? 'Checked' : ''?>> ₹₹ (Value for money)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹₹')) ? 'Checked' : ''?>> ₹₹₹ (Exclusive / Premium)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    } elseif ($ven_seo[7] == $vendor_name) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Price detail</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹')) ? 'Checked' : ''?>> ₹ (Budget friendly)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹')) ? 'Checked' : ''?>> ₹₹ (Value for money)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹₹')) ? 'Checked' : ''?>> ₹₹₹ (Exclusive / Premium)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    } elseif ($ven_seo[8] == $vendor_name) {
                    ?>
                     <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Gift Type</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="gift_types[]" value="Edible" <?php echo (isset($get['gift_types']) && in_array('Edible', $get['gift_types'])) ? 'Checked' : '';?>> Edible
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="gift_types[]" value="Non- Edible" <?php echo (isset($get['gift_types']) && in_array('Non- Edible', $get['gift_types'])) ? 'Checked' : '';?>> Non- Edible
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="gift_types[]" value="Edible & Non Edible" <?php echo (isset($get['gift_types']) && in_array('Edible & Non Edible', $get['gift_types'])) ? 'Checked' : '';?>> Edible & Non Edible
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="gift_types[]" value="Others" <?php echo (isset($get['gift_types']) && in_array('Others', $get['gift_types'])) ? 'Checked' : '';?>> Others
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Minimum Order Quantity</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="moq_ranger[]" value="0-19" <?php echo (isset($get['moq_ranger']) && ($get['moq_ranger'] == '0-19')) ? 'Checked' : ''?>> 0-19</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="moq_ranger[]" value="20-49" <?php echo (isset($get['moq_ranger']) && ($get['moq_ranger'] == '20-49')) ? 'Checked' : ''?>> 20-49</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="moq_ranger[]" value="50-99" <?php echo (isset($get['moq_ranger']) && ($get['moq_ranger'] == '50-99')) ? 'Checked' : ''?>> 50-99</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="moq_ranger[]" value="100-199" <?php echo (isset($get['moq_ranger']) && ($get['moq_ranger'] == '100-199')) ? 'Checked' : ''?>> 100-199</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="moq_ranger[]" value="200-299" <?php echo (isset($get['moq_ranger']) && ($get['moq_ranger'] == '200-299')) ? 'Checked' : ''?>> 200-299</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="moq_ranger[]" value="300 - and more" <?php echo (isset($get['moq_ranger']) && ($get['moq_ranger'] == '300 - and more')) ? 'Checked' : ''?>> 300 - and more</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Price detail</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹')) ? 'Checked' : ''?>> ₹ (Budget friendly)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹')) ? 'Checked' : ''?>> ₹₹ (Value for money)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹₹')) ? 'Checked' : ''?>> ₹₹₹ (Exclusive / Premium)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    } elseif ($ven_seo[9] == $vendor_name) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Menu & Catering</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="menu_opt[]" value="North indian/ mughlai" <?php echo (isset($get['menu_opt']) && in_array('North indian/ mughlai', $get['menu_opt'])) ? 'Checked' : ''?>> North indian/ mughlai
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="menu_opt[]" value="Italian/ european/ continental" <?php echo (isset($get['menu_opt']) && in_array('Italian/ european/ continental', $get['menu_opt'])) ? 'Checked' : ''?>> Italian/ european/ continental
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="menu_opt[]" value="Chinese/ thai/ oriental" <?php echo (isset($get['menu_opt']) && in_array('Chinese/ thai/ oriental', $get['menu_opt'])) ? 'Checked' : ''?>> Chinese/ thai/ oriental
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="menu_opt[]" value="Seafood" <?php echo (isset($get['menu_opt']) && in_array('Seafood', $get['menu_opt'])) ? 'Checked' : ''?>> Seafood
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="menu_opt[]" value="Chaat & indian street food" <?php echo (isset($get['menu_opt']) && in_array('Chaat & indian street food', $get['menu_opt'])) ? 'Checked' : ''?>> Chaat & indian street food
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="menu_opt[]" value="South indian" <?php echo (isset($get['menu_opt']) && in_array('South indian', $get['menu_opt'])) ? 'Checked' : ''?>> South indian
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="menu_opt[]" value="Garlic Free/ Onion Free" <?php echo (isset($get['menu_opt']) && in_array('Garlic Free/ Onion Free', $get['menu_opt'])) ? 'Checked' : ''?>> Garlic Free/ Onion Free
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                   
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Price detail</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹')) ? 'Checked' : ''?>> ₹ (Budget friendly)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹')) ? 'Checked' : ''?>> ₹₹ (Value for money)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹₹')) ? 'Checked' : ''?>> ₹₹₹ (Exclusive / Premium)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    } elseif ($ven_seo[10] == $vendor_name) {
                    ?>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Product Types</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="type_avail[]" value="Cards" <?php echo (isset($get['type_avail']) && in_array('Cards', $get['type_avail'])) ? 'Checked' : '';?>> Cards
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="type_avail[]" value="Boxed Gift Types" <?php echo (isset($get['type_avail']) && in_array('Boxed Gift Types', $get['type_avail'])) ? 'Checked' : '';?>> Boxed Gift Types
                                    </label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="type_avail[]" value="Novel Concepts" <?php echo (isset($get['type_avail']) && in_array('Novel Concepts', $get['type_avail'])) ? 'Checked' : '';?>> Novel Concepts
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Paper Styles</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="paper_style_avail[]" value="Matte Finish" <?php echo (isset($get['paper_style_avail']) && ($get['paper_style_avail'] == 'Matte Finish')) ? 'Checked' : ''?>> Matte Finish</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="paper_style_avail[]" value="Glossy Finish" <?php echo (isset($get['paper_style_avail']) && ($get['paper_style_avail'] == 'Glossy Finish')) ? 'Checked' : ''?>> Glossy Finish</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="paper_style_avail[]" value="Recycled/ Ecofriendly Gifts" <?php echo (isset($get['paper_style_avail']) && ($get['paper_style_avail'] == 'Recycled/ Ecofriendly Gifts')) ? 'Checked' : ''?>> Recycled/ Ecofriendly Gifts</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="paper_style_avail[]" value="Mylar Style" <?php echo (isset($get['paper_style_avail']) && ($get['paper_style_avail'] == 'Mylar Style')) ? 'Checked' : ''?>> Mylar Style</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="paper_style_avail[]" value="Parchment Style" <?php echo (isset($get['paper_style_avail']) && ($get['paper_style_avail'] == 'Parchment Style')) ? 'Checked' : ''?>> Parchment Style</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="paper_style_avail[]" value="Handmade Gifts" <?php echo (isset($get['paper_style_avail']) && ($get['moq_ranger'] == 'Handmade Gifts')) ? 'Checked' : ''?>> Handmade Gifts</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter">
                            <h5>Price detail</h5>
                            <div class="cat_lists form-group">
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹')) ? 'Checked' : ''?>> ₹ (Budget friendly)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹')) ? 'Checked' : ''?>> ₹₹ (Value for money)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="checkbox" name="price_detail[]" value="₹₹₹" <?php echo (isset($get['price_detail']) && ($get['price_detail'] == '₹₹₹')) ? 'Checked' : ''?>> ₹₹₹ (Exclusive / Premium)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <?php
                    }
                    ?>
                    <div class="col-12 col-sm-6 col-lg">
                        <div class="first_filter" id="disabledDivs">
                            <h5>Sort Vendors by</h5>
                            <div class="cat_lists form-group">
                                <!-- <div>
                                    <label><input type="radio" name="sort" value="Relevance" Checked>  Relevance</label>
                                </div> -->
                                <div>
                                    <label>
                                        <input type="radio" name="sort" value="Low" <?php echo (isset($get['sort']) && ($get['sort'] == 'Low')) ? 'Checked' : ''?>> Price (Low to High)</label>
                                </div>
                                <div>
                                    <label>
                                        <input type="radio" name="sort" value="High" <?php echo (isset($get['sort']) && ($get['sort'] == 'High')) ? 'Checked' : ''?>> Price (High to Low)</label>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div id="popupContent" class="filter_btn">
                <!-- <button id="clear_all" type="button" class="btn btn-clear">clear all</button> -->
                <button id="search_btn" class="btn btn-submit">See vendors</button>
                <button id="closePopups" type="button" class="btn btn-clear">Close</button>
            </div>
        </form>
    </div>
</div>
<section class="category-slider">
    <!-- cat slider  -->
    <?php echo vendor_slider(); ?>
</section>

<!-- Bridal Jewellery -->
<section class="vendor-catalogue-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="vendor-catalogue-heading">
                    <?php
                    foreach ($vendors['category_count'] as $count1) {
                        $count = $count1['category_count'];
                    }
                    ?>
                    <h2>Top <?php echo $vendors['result'][0]['cat_name'] ?> (<?php echo isset($count) ? $count : 0 ?>):</h2>
                </div>
            </div>
        </div>

        <div class="row">
            <!-- <div id="loading-message">Loading...</div> -->
        </div>

        <!-- infinite loader div -->
        <div class="row" id="ven_pagination"></div>
        <div id="loadingSpinner" class=" mx-auto text-center" style="display: none;">
            <!-- Your loading animation HTML or image goes here -->
            Loading...
        </div>
    </div>
</section>

<!-- <section class=""></section> -->
<?php $this->load->view('front/layout/footer'); ?>
<?php $this->load->view('front/layout/script'); ?>

<script>
    const showPopupButton = document.querySelectorAll('.showPopup');
    const popupContainer = document.getElementById('popupContainer');
    const closePopupButton = document.getElementById('closePopups');
    const clearAllButton = document.getElementById('clear_all');

    showPopupButton.forEach(button => {
        button.addEventListener('click', () => {
            popupContainer.style.display = 'block';
            setTimeout(() => {
                popupContainer.style.transform = 'translateY(0)';
            }, 10);
        });
    });

    closePopupButton.addEventListener('click', () => {
        closePopup();
    });

    popupContainer.addEventListener('click', (event) => {
        if (event.target === popupContainer) {
            closePopup();
        }
    });

     clearAllButton.addEventListener('click', () => {
        // Call a function to clear all selected inputs
        clearAllInputs();
    });

    function clearAllInputs() {
        // Assuming your inputs have a specific class like '.selected'
        const selectedInputs = document.querySelectorAll('.Selected');
        selectedInputs.forEach(input => {
            // Clear the selected state or perform any other actions
            input.classList.remove('selected');
        });
    }

    function closePopup() {
        popupContainer.style.transform = 'translateY(-100%)';
        setTimeout(() => {
            popupContainer.style.display = 'none';
        }, 300);
    }
</script>
<script>
     document.addEventListener('DOMContentLoaded', function () {
        // Disable the entire div and its child radio buttons on page load
        const disabledDiv = document.getElementById('disabledDiv');
        disableElement(disabledDiv);

        // Add event listeners to relevant radio buttons
        const radioButtons = document.querySelectorAll('.sortEnable');
        radioButtons.forEach(radioButton => {
            radioButton.addEventListener('click', function () {
                // Enable the entire div and its child radio buttons when a relevant radio button is clicked
                enableElement(disabledDiv);
            });
        });
    });

    function disableElement(element) {
        element.classList.add('disabled');
        const inputs = element.querySelectorAll('input');
        inputs.forEach(input => {
            input.setAttribute('disabled', true);
        });
    }

    function enableElement(element) {
        element.classList.remove('disabled');
        const inputs = element.querySelectorAll('input');
        inputs.forEach(input => {
            input.removeAttribute('disabled');
        });
    }
</script>
<script>
    function updateUrl() {
        var vendor = document.getElementById('vendor_ajax1').value;
        // alert(vendor)
        var city = document.getElementById('filter_city1').value;
        // var radioValue = document.querySelector('input[name="radio"]:checked').value;
        
        // Need to check if city is selected or not 
        if( city == null || city == ''){
            // alert when not selected
            alert("Please select city");
            return;
        }else{
            // proceed if selected
           var url = '<?php echo base_url() ?>' + vendor + '-in-' + city;
            window.location.href = url; 
        }
        
    }

    $('#vendor_ajax1').on('change', function(){
        updateUrl();
    })
    $('#filter_city1').on('change', function(){
        updateUrl();
    })

    
    $('#search_btn').on('click', function(){
        var selectedCity = $('#filter_city1').val();

        if (!selectedCity) {
            alert('Please select a city.');
            return false;
        }
});
</script>