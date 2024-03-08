<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/style.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor.css' ?>">

<section class="service_banner" id="service_banner" style="background-image: url('<?php echo base_url() . SERVICE . 'service_sub_banner.png' ?>')">
    <div class="overlay1"></div>
    <div class="container-fluid filter_div">
        <div class="filter_button" id="showPopup">
            <p>Select Vendor <i class="fa fa-sort-desc"></i></p>
        </div>
        <div class="filter_button">
            <p>Cities <i class="fa fa-sort-desc"></i></p>
        </div>
        <div class="filter_button">
            <p>Select Budget <i class="fa fa-sort-desc"></i></p>
        </div>
        <div class="filter_button">
            <p>Services Required <i class="fa fa-sort-desc"></i></p>
        </div>
        <div class="filter_button">
            <p>Makeup to be done at <i class="fa fa-sort-desc"></i></p>
        </div>
        <div class="filter_button">
            <p>Select Badge <i class="fa fa-sort-desc"></i></p>
        </div>
        <div class="filter_button">
            <p>Locality <i class="fa fa-sort-desc"></i></p>
        </div>
        <!-- <div class="filter_button">
           <p>Select Vendor <i class="fa fa-sort-desc"></i></p>
        </div> -->
    </div>
</section>
<section class="bread_sec mt-md-2">
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
</section>
<section class="category-slider">
    <div class="container text-center my-3">
      <div class="row mx-auto my-auto">
          <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
        <div class="carousel-inner w-100" role="listbox">
              <div class="carousel-item active"> 
                  <div class="col-md-4">
                      <div class="card card-body category-card-1">
                        <div class="category-img-box img-1">
                          <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Venues.png">  -->
                        </div>
                        <div class="category-box-content">
                           <h2 id="category-box-caption-1">Venues</h2>
                           <!-- <span><h6 id="category-box-sub-caption-1"> 490+</h6></span> -->
                        </div>
                      </div>
                  </div>
              </div>
               <div class="carousel-item">
                  <div class="col-md-4">
                      <div class="card card-body category-card-2">
                        <div class="category-img-box img-2">
                          <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Bridal_Wear.png"> -->
                        </div>
                        <div class="category-box-content">
                           <h2>Bridal Wear</h2>
                          <!--  <span> <h6>490+</h6></span> -->
                        </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="col-md-4">
                      <div class="card card-body category-card-3">
                        <div class="category-img-box img-3">
                         <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Groom_Wear.png"> -->
                        </div>
                        <div class="category-box-content">
                           <h2>Groom Wear</h2>
                           <!-- <span><h6> 490+</h6></span> -->
                        </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="col-md-4">
                      <div class="card card-body category-card-4">
                        <div class="category-img-box img-4">
                         <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Photographers.png"> -->
                        </div>
                        <div class="category-box-content">
                           <h2>Photographers</h2>
                           <!-- <span><h6> 490+</h6></span> -->
                        </div>
                      </div>
                  </div>
              </div>
              
              <div class="carousel-item">
                  <div class="col-md-4">
                     <div class="card card-body category-card-5">
                        <div class="category-img-box img-5">
                          <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Make_Up_Artists.png"> -->
                        </div>
                        <div class="category-box-content">
                           <h2>Make Up Artists</h2>
                           <!-- <span><h6> 490+</h6></span> -->
                        </div>
                      </div>
                  </div>
              </div> 
              <div class="carousel-item">
                  <div class="col-md-4">
                     <div class="card card-body category-card-6">
                        <div class="category-img-box img-6">
                         <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Mehendi_Artists.png"> -->
                        </div>
                        <div class="category-box-content">
                           <h2>Mehendi Artists</h2>
                           <!-- <span><h6> 490+</h6></span> -->
                        </div>
                      </div>
                  </div>
              </div> 
              <div class="carousel-item">
                  <div class="col-md-4">
                     <div class="card card-body category-card-7">
                        <div class="category-img-box img-7">
                         <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Bridal_Jewellery.png"> -->
                        </div>
                        <div class="category-box-content">
                           <h2>Bridal Jewellery</h2>
                           <!-- <span><h6>490+</h6></span> -->
                        </div>
                      </div>
                  </div>
              </div> 
              <div class="carousel-item">
                  <div class="col-md-4">
                     <div class="card card-body category-card-8">
                        <div class="category-img-box img-8">
                          <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Decoration.png"> -->
                        </div>
                        <div class="category-box-content">
                           <h2>Decoration</h2>
                           <!-- <span><h6> 490+</h6></span> -->
                        </div>
                      </div>
                  </div>
              </div>
              <div class="carousel-item">
                  <div class="col-md-4">
                     <div class="card card-body category-card-9">
                        <div class="category-img-box img-9">
                          <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Gifts-Invitations.png"> -->
                        </div>
                        <div class="category-box-content">
                           <h2>Gifts</h2>
                           <!-- <span><h6>490+</h6></span> -->
                        </div>
                      </div>
                  </div>
              </div> 
              <div class="carousel-item">
                  <div class="col-md-4">
                     <div class="card card-body category-card-10">
                        <div class="category-img-box img-10">
                          <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Catering.png"> -->
                        </div>
                        <div class="category-box-content">
                           <h2>Catering</h2>
                          <!--  <span> <h6>490+</h6></span> -->
                        </div>
                      </div>
                  </div>
              </div> 
              <div class="carousel-item">
                  <div class="col-md-4">
                      <div class="card card-body category-card-11">
                        <div class="category-img-box img-11">
                          <!-- <img  src="<?php echo  base_url() ?>assets/front/image/icon/Wedding_Entertainment.png"> -->
                        </div>
                        <div class="category-box-content">
                           <h2>Invitations</h2>
                          <!--  <span><h6>490+</h6></span> -->
                        </div>
                      </div>
                  </div>
              </div>
              
        </div>
        <a class="carousel-control-prev w-auto" href="#recipeCarousel" role="button" data-slide="prev">
          <span class="carousel-control-prev-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
          <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next w-auto" href="#recipeCarousel" role="button" data-slide="next">
          <span class="carousel-control-next-icon bg-dark border border-dark rounded-circle" aria-hidden="true"></span>
          <span class="sr-only">Next</span>
        </a>
          </div>
      </div>
    </div>
</section>
<section class="bridal_sec common_Section">
    <div class="container">
        <div class="heading">
            <h2>Top Bridal Makeup Artists in Mumbai (583):</h2>
            <span>To improve these suggestions - Fill Requirements for Makeup Artists</span>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bitmap-2.png" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Wedding Catering</p>
                        <h4 class="card-title">Nalabhagam Caterers</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>80</strong> Reviews</li>
                            <li><strong>Rs</strong> 5,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bhandup, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bitmap-2.png" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Wedding Catering</p>
                        <h4 class="card-title">Nalabhagam Caterers</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>80</strong> Reviews</li>
                            <li><strong>Rs</strong> 5,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bhandup, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bitmap-2.png" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Wedding Catering</p>
                        <h4 class="card-title">Nalabhagam Caterers</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>80</strong> Reviews</li>
                            <li><strong>Rs</strong> 5,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bhandup, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bridal_sec common_Section">
    <div class="container">
        <div class="heading">
            <h2>Top Photographers in Mumbai (583):</h2>
            <span>To improve these suggestions - Fill Requirements for Photographers</span>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bitmap-2.png" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Wedding Catering</p>
                        <h4 class="card-title">Nalabhagam Caterers</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>80</strong> Reviews</li>
                            <li><strong>Rs</strong> 5,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bhandup, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bitmap-2.png" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Wedding Catering</p>
                        <h4 class="card-title">Nalabhagam Caterers</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>80</strong> Reviews</li>
                            <li><strong>Rs</strong> 5,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bhandup, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bitmap-2.png" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Wedding Catering</p>
                        <h4 class="card-title">Nalabhagam Caterers</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>80</strong> Reviews</li>
                            <li><strong>Rs</strong> 5,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bhandup, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="bridal_sec common_Section">
    <div class="container">
        <div class="heading">
            <h2>Top Decorators in Mumbai (583):</h2>
            <span>To improve these suggestions - Fill Requirements for Decorators</span>
        </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bitmap-2.png" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Wedding Catering</p>
                        <h4 class="card-title">Nalabhagam Caterers</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>80</strong> Reviews</li>
                            <li><strong>Rs</strong> 5,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bhandup, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bitmap-2.png" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Wedding Catering</p>
                        <h4 class="card-title">Nalabhagam Caterers</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>80</strong> Reviews</li>
                            <li><strong>Rs</strong> 5,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bhandup, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <img class="card-img-top" src="<?php echo base_url() . VENDOR ?>Bitmap-2.png" class="img-fluid" alt="">
                    <div class="card-body">
                        <p>Wedding Catering</p>
                        <h4 class="card-title">Nalabhagam Caterers</h4>
                        <hr>
                        <ul>
                            <li><i class="fa fa-star"></i>4.8</li>
                            <li><strong>80</strong> Reviews</li>
                            <li><strong>Rs</strong> 5,000</li>
                        </ul>
                        <hr>
                        <div class="vendor_location">
                            <p><i class="fa fa-map-marker" aria-hidden="true"></i> Bhandup, Mumbai</p>
                            <button><i class="fa fa-play" aria-hidden="true"></i> View</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="awaits_sec blog_cont common_Section">
    <div class="container couple_container">
        <div class="couple_div">
            <div class="row">
                <div class="col-md-2">
                    <img src="<?php echo base_url() . SERVICE ?>reach1.png" class="img-fluid reach_img" alt="">
                </div>
                <div class="col-md-8">
                    <form action="">
                        <div class="reach_content text-center">
                            <h2>Find the <span>best wedding </span>Vendors with</h2>
                            <h2> thousands of trusted reviews</h2>
                            <div class="form-group d-flex blog_form">
                                <label for="cat" class="cat_label">Im Looking for </label>
                                <select name="cat" class="form-control cat_select" id="">
                                    <option value="">Wedding Vendor</option>
                                    <option value="">Wedding Vendor</option>
                                    <option value="">Wedding Vendor</option>
                                    <option value="">Wedding Vendor</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn reach_btn">Contact Us!</button>
                    </form>
                </div>
                <div class="col-md-2">
                    <img src="<?php echo base_url() . SERVICE ?>reach2.png" class="img-fluid reach_img" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<div id="popupContainer">
    <div class="container-fluid">
        <div class="top_header">
            <p>Filter result for: </p>
            <select name="" id="">
                <option value="">Select Vendor</option>
                <option value="">Select Vendor</option>
                <option value="">Select Vendor</option>
                <option value="">Select Vendor</option>
                <option value="">Select Vendor</option>
                <option value="">Select Vendor</option>
                <option value="">Select Vendor</option>
                <option value="">Select Vendor</option>
            </select>
            <span>IN</span>
            <select name="" id="">
                <option value="">Select Location</option>
                <option value="">Select Location</option>
                <option value="">Select Location</option>
                <option value="">Select Location</option>
                <option value="">Select Location</option>
                <option value="">Select Location</option>
                <option value="">Select Location</option>
                <option value="">Select Location</option>
            </select>
            <span>IN</span>
            <select name="" id="">
                <option value="">Select locality</option>
                <option value="">Select locality</option>
                <option value="">Select locality</option>
                <option value="">Select locality</option>
                <option value="">Select locality</option>
                <option value="">Select locality</option>
                <option value="">Select locality</option>
                <option value="">Select locality</option>
            </select>
        </div>
        <hr>
        <div class="filter_list">
            <div class="row">
                <div class="col-lg">
                    <div class="first_filter">
                        <h5>Services Required</h5>
                        <div class="cat_lists">
                            <p>Bride’s Regular Makeup</p>
                            <p>Bride’s AirBrush Makeup</p>
                            <p>Guest's Makeup</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="first_filter">
                        <h5>Makeup to be done at</h5>
                        <div class="cat_lists">
                            <div>
                                <input type="radio" id="MyVenue" name="drone" value="My Venue" checked />
                                <label for="MyVenue">My Venue</label>
                            </div>
                            <div>
                                <input type="radio" id="Makeup" name="drone" value="Makeup Artist's Studio" checked />
                                <label for="Makeup">Makeup Artist's Studio</label>
                            </div>
                            <div>
                                <input type="radio" id="Anywhere" name="drone" value="Anywhere is fine" checked />
                                <label for="Anywhere">Anywhere is fine</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
                    <div class="first_filter">
                        <h5>Makeup Budget</h5>
                        <div class="cat_lists">
                            <div>
                                <input type="radio" id="Anywhere" name="drone" value="Less than ₹ 20,000" checked />
                                <label for="Anywhere">Less than ₹ 20,000</label>
                            </div>
                            <div>
                                <input type="radio" id="Anywhere" name="drone" value="₹ 20,000 - 30,000" checked />
                                <label for="Anywhere">₹ 20,000 - 30,000</label>
                            </div>
                            <div>
                                <input type="radio" id="Anywhere" name="drone" value="₹ 30,000 - 50,000" checked />
                                <label for="Anywhere">₹ 30,000 - 50,000</label>
                            </div>
                            <div>
                                <input type="radio" id="Anywhere" name="drone" value="₹ Above 50,000    " checked />
                                <label for="Anywhere">₹ Above 50,000</label>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg">
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
                </div>
                <div class="col-lg">
                    <div class="first_filter">
                        <h5>Sort Vendors by</h5>
                        <div class="cat_lists">
                            <div>
                                <input type="radio" id="Anywhere" name="drone" value="Relevance" checked />
                                <label for="Anywhere">Relevance</label>
                            </div>
                            <div>
                                <input type="radio" id="Anywhere" name="drone" value="Price (Low to High)" checked />
                                <label for="Anywhere">Price (Low to High)</label>
                            </div>
                            <div>
                                <input type="radio" id="Anywhere" name="drone" value="Price (High to Low)" checked />
                                <label for="Anywhere">Price (High to Low)</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="popupContent" class="filter_btn">
        <button id="clear_all" class="btn btn-clear">clear all</button>
        <button id="search_btn" class="btn btn-submit">See makeup artist</button>
    </div>
</div>
<?php $this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); ?>
<script>
    const showPopupButton = document.getElementById('showPopup');
    const popupContainer = document.getElementById('popupContainer');
    const closePopupButton = document.getElementById('closePopup');

    showPopupButton.addEventListener('click', () => {
        popupContainer.style.display = 'block';
        setTimeout(() => {
            popupContainer.style.transform = 'translateY(0)';
        }, 10);
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