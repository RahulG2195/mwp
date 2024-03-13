<!DOCTYPE HTML>
<?php $this->load->view('front/layout/head'); ?>
<?php $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/home.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/style.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    .city_main{
        position: absolute;
    bottom: 32%;
    }
	.filter_city{
		background-color: #fff;
		border-radius: 30px;
		padding: 20px 0;
	}
	.filter_city img{
		height: 90px;
	}
    </style>
<section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url() ?>assets/front/image/hero-banner/MWP-Vendor-listing-page-hero-banner.jpg' )">
    <div class="overlay1"></div>
    <?php 
        $segment = $this->uri->Segment(2);
        $tml = '<div class="col-md-12 city_main">
        <div class="customer-logos slider">
        <div class="slide filter_city"><a href="'. base_url() . $segment .'-in-Ahmedabad"><img src="'. base_url() . 'assets/front/image/cities/Banglore.png"> <h6 class="city-text">Ahmedabad</h6></a></div>
        <div class="slide filter_city"><a href="'. base_url() . $segment .'-in-Chandigarh"><img src="'. base_url() . 'assets/front/image/cities/Chandigarh.png"> <h6 class="city-text">Chandigarh</h6></a></div>
        <div class="slide filter_city"><a href="'. base_url() . $segment .'-in-Delhi"><img src="'. base_url() . 'assets/front/image/cities/Chennai.png"> <h6 class="city-text">Delhi</h6></a></div>
        <div class="slide filter_city"><a href="'. base_url() . $segment .'-in-Gurgaon"><img src="'. base_url() . 'assets/front/image/cities/Gurgoan.png"> <h6 class="city-text">Gurugram</h6></a></div>
        <div class="slide filter_city"><a href="'. base_url() . $segment .'-in-Hyderabad"><img src="'. base_url() . 'assets/front/image/cities/Hyderabad.png"> <h6 class="city-text">Hyderabad</h6></a></div>
        <div class="slide filter_city"><a href="'. base_url() . $segment .'-in-Kolkata"><img src="'. base_url() . 'assets/front/image/cities/Kolkatta.png"> <h6 class="city-text">Kolkata</h6></a></div>
        <div class="slide filter_city"><a href="'. base_url() . $segment .'-in-Mumbai"><img src="'. base_url() . 'assets/front/image/cities/Mumbai.png"> <h6 class="city-text">Mumbai</h6></a></div>
        <div class="slide filter_city"><a href="'. base_url() . $segment .'-in-Noida"><img src="'. base_url() . 'assets/front/image/cities/Noida.png"> <h6 class="city-text">Noida</h6></a></div>
        <div class="slide filter_city"><a href="'. base_url() . $segment .'-in-Pune"><img src="'. base_url() . 'assets/front/image/cities/Pune.png"> <h6 class="city-text">Pune</h6></a></div>
        </div>
    </div>';
    echo $tml;
	?>
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
// echo "<pre>";
// print_r($vendors['result']);
// echo"</pre>";
?>
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
<div id="popupContainer">
    <div class="container-fluid">
        <div class="top_header">
            <p>Filter result for: </p>
            <select name="" id="vendor_ajax1">
                <option value="">Select Vendor</option>
                <?php
                $vendor = Vendor_category();
                foreach ($vendor as $vend) {
                    echo '<option value="' . $vend['cat_seo_url'] . '">' . $vend['name'] . '</option>';
                }
                ?>
            </select>
            <span>IN</span>
            <select name="" id="filter_city1">
                <option value="">Select City</option>
                <?php
                $url_city = $this->uri->segment(2);
                $city = Vendor_city();
                foreach ($city as  $value) {
                    if ($url_city == $value['name']) {
                        echo '<option value="' . $value['name'] . '" Selected>' . $value['name'] . '</option>';
                    } else {
                        echo '<option value="' . $value['name'] . '">' . $value['name'] . '</option>';
                    }
                }
                ?>
            </select>
        </div>
        <hr>
        <div class="filter_list">
            <div class="row">
                <div class="col-lg">
                    <div class="first_filter">
                        <h5>Services Required</h5>
                        <div class="cat_lists form-group">
                            <div>
                                <label>
                                    <input type="radio" name="services_required" value="Bride’s Regular Makeup"> Bride’s Regular Makeup
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="services_required" value="Bride’s AirBrush Makeup"> Bride’s AirBrush Makeup
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="services_required" value="Guest's Makeup"> Guest's Makeup
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="first_filter">
                        <h5>Makeup to be done at</h5>
                        <div class="cat_lists form-group">
                            <div>
                                <label>
                                    <input type="radio" name="makeup_location" value="My Venue"> My Venue
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="makeup_location" value="Makeup Artist's Studio"> Makeup Artist's Studio
                                </label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="makeup_location" value="Anywhere is fine"> Anywhere is fine
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="first_filter">
                        <h5>Makeup Budget</h5>
                        <div class="cat_lists form-group">
                            <div>
                                <label>
                                    <input type="radio" name="range" value="0-20000"> Less than ₹ 20,000</label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="range" value="20000-30000">₹ 20,000 - 30,000</label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="range" value="30000-50000">₹ 30,000 - 50,000</label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="range" value="50000"> Above ₹ 50,000</label>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- <div class="col-lg">
                    <div class="first_filter">
                        <h5>Special Badges</h5>
                        <div class="cat_lists">
                        <div>
                            <input type="checkbox" id="scales" name="scales" />
                            <label for="scales">Available for Video Meetings</label>
                        </div>
                        <div>
                            <input type="checkbox" id="scales" name="scales" />
                            <label for="scales">Most Popular</label>
                        </div>
                        <div>
                            <input type="checkbox" id="scales" name="scales" />
                            <label for="scales">Premium</label>
                        </div>
                        <div>
                            <input type="checkbox" id="scales" name="scales" />
                            <label for="scales">Prime</label>
                        </div>
                        </div>
                    </div>
                </div> -->
                <div class="col-lg">
                    <div class="first_filter">
                        <h5>Sort Vendors by</h5>
                        <div class="cat_lists form-group">
                            <div>
                                <label>
                                    <input type="radio" name="sort" value="Relevance"> Relevance</label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="sort" value="Low"> Price (Low to High)</label>
                            </div>
                            <div>
                                <label>
                                    <input type="radio" name="sort" value="High"> Price (High to Low)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popupContent" class="filter_btn">
        <button id="clear_all" class="btn btn-clear">clear all</button>
        <button id="search_btn" class="btn btn-submit"  onclick="updateUrl()">See makeup artist</button>
        <button id="closePopups" class="btn btn-clear">Close</button>
    </div>
</div>

<!-- <section class=""></section> -->
<?php $this->load->view('front/layout/footer'); ?>
<?php $this->load->view('front/layout/script'); ?>
<script>
    const showPopupButton = document.querySelectorAll('.showPopup');
    const popupContainer = document.getElementById('popupContainer');
    const closePopupButton = document.getElementById('closePopups');

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

    function closePopup() {
        popupContainer.style.transform = 'translateY(-100%)';
        setTimeout(() => {
            popupContainer.style.display = 'none';
        }, 300);
    }
</script>
<script>

/* function updateUrl() {
        var vendor = document.getElementById('vendor_ajax1').value;
        var city = document.getElementById('filter_city1').value;
        // var radioValue = document.querySelector('input[name="radio"]:checked').value;

        var url = '<?php //echo base_url()?>' + vendor + '-in-' + city;
        window.location.href = url;
    } */
    /* $(document).ready(function() {
        
        $('#vendor_ajax1, #filter_city1').change(function() {
            updateDynamicURL();
        });

        function updateDynamicURL() {
            var vendor = $('#vendor_ajax1').val();
            var city = $('#filter_city1').val();
            
            $.ajax({
                type: 'POST',
                url: '<?php //echo base_url("Filter/index") 
                        ?>',
                data: {vendor: vendor, city: city},
                dataType: 'json',
                success: function(response) {
                    // Update the URL as needed
                    var dynamicURL = response.url;
                    console.log('Dynamic URL:', dynamicURL);
                    window.location.href = dynamicURL;
                },
                error: function(error) {
                    console.error('Error:', error);
                }
            });
        }
    }); */
</script>