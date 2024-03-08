<!-- NEW VERSION OF HEADER START HERE  -->

<header id="newHeaderSection">
  <div class="top-header d-flex flex-column">
   <a href="https://myweddingpalette.com/service/weddingplanning"> <div class="mobileTagline pt-2">Make One for Your Own!</div></a>
    <div class="innerTopHeader d-flex flex-wrap justify-content-between align-items-center">
      <div class="left d-flex flex-nowrap align-items-center">
        <div class="desktopTagline">Make One for Your Own!</div>
        <div class="selectCitySection">
          <form id="cityForm" method="post" action="<?php echo base_url('Vendor/updateCity') ?>">
            <select name="selectedCity" id="header_city">
              <option value="">Select City</option>
              <?php
              $url_city = $this->session->userdata('selectedCity');
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
          </form>
        </div>
      </div>
      <div class="right d-flex flex-nowrap align-items-center">
        <a href="<?php echo base_url() ?>service/weddingplanning" class="bookNowButton">Book Us!</a>

        <a href="<?php echo base_url() ?>Vendor/vendor_pricing_plan" class="vendorLoginButton">
          <img src="<?php echo base_url() ?>assets/front/image/icon/user.png">
          <span class="desktopTagline">Are you a vendor?</span>
        </a>
      </div>
    </div>
  </div>
  <div class="bottom-header">
    <div class="innerBotttomHeader">
      <nav class="navbar navbar-expand-xl navbar-light justify-content-between">
        <a class="navbar-brand" href="<?php echo  base_url() ?>">
          <img src="<?php echo  base_url() ?>assets/front/image/log.png" alt="Logo" class="mobileLogo">
          <img src="<?php echo  base_url() ?>assets/front/image/logo/header-logo.png" alt="Logo" class="desktopLogo">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse justify-content-end " id="navbarNavDropdown">
          <ul class="navbar-nav">
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>" class="home"><i class="fa-solid fa-house"></i></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>about-my-wedding-palette">About Us</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="vendorDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Vendor
              </a>
              <div class="dropdown-menu" aria-labelledby="vendorDropdownMenuLink">
                <?php
                $vendor = Vendor_category();
                foreach ($vendor as $vend) {
                ?>
                  <a class="dropdown-item d-flex flex-nowrap align-items-center" href="<?php echo base_url() . "Single-Vendor/" . $vend['cat_seo_url'] ?>">
                    <img width="25" src="<?php echo base_url() . "uploads/" . $vend['cat_img'] ?>" alt="Icon">
                    <span class="m-0"><?php echo $vend['name'] ?></span>
                  </a>
                <?php
                }
                ?>
              </div>
            </li>
            
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="#" id="vendorDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Services
              </a>
              <div class="dropdown-menu" aria-labelledby="vendorDropdownMenuLink">
                <a class="dropdown-item d-flex flex-nowrap align-items-center" href="<?php echo base_url() ?>service/wedding-planning">
                  <img width="30" src="<?php echo base_url() ?>assets/front/image/home-icon/Complete-Wedding-Planning-Service-Red.png" alt="Icon">
                  <span class="m-0">Wedding Planning</span>
                </a>
                <a class="dropdown-item d-flex flex-nowrap align-items-center" href="<?php echo base_url() ?>service/vendor-recommendation-for-wedding">
                  <img width="30" src="<?php echo base_url() ?>assets/front/image/home-icon/Vendor-Recommendation-Red.png" alt="Icon">
                  <span class="m-0">Vendor Recommendations</span>
                </a>
               
                <a class="dropdown-item d-flex flex-nowrap align-items-center" href="<?php echo base_url() ?>service/destination-wedding">
                  <img width="30" src="<?php echo base_url() ?>assets/front/image/home-icon/Destination-Wedding-Red.png" alt="Icon">
                  <span class="m-0">Destination Wedding</span>
                </a>
                <a class="dropdown-item d-flex flex-nowrap align-items-center" href="<?php echo base_url() ?>service/wedding-decoration-design-ideas">
                  <img width="30" src="<?php echo base_url() ?>assets/front/image/home-icon/Design-and-Decor-Red.png" alt="Icon">
                  <span class="m-0">Design and Decor</span>
                </a>
                <a class="dropdown-item d-flex flex-nowrap align-items-center" href="<?php echo base_url() ?>service/wedding-planning-tool">
                  <img width="30" src="<?php echo base_url() ?>assets/front/image/home-icon/Wedding-Planning-Tools-Red.png" alt="Icon">
                  <span class="m-0">Wedding Planning Tool</span>
                </a>
                <a class="dropdown-item d-flex flex-nowrap align-items-center" href="<?php echo base_url() ?>service/customized-wedding-add-ons">
                  <img width="30" src="<?php echo base_url() ?>assets/front/image/home-icon/Customised-Add-Ons-Red.png" alt="Icon">
                  <span class="m-0">Customized Add-ons</span>
                </a>
              </div>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>trends-and-ideas-for-wedding-photos">Gallery</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>Blog">Blogs</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="<?php echo base_url() ?>contact-us">Contact Us</a>
            </li>
            <?php 
            
            
            if(!empty($this->session->userdata('logged_in'))==TRUE){
                //echo "1";
                
              ?>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="vendorDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                 <?php //echo $this->session->userdata('firstname')." ".$this->session->userdata('lastname'); ?>
                  <?php echo $this->session->userdata('firstname')." ".$this->session->userdata('lastname'); ?>
                </a>
                <div class="dropdown-menu" aria-labelledby="vendorDropdownMenuLink">
                  <a class="dropdown-item d-flex flex-nowrap align-items-center" href="<?php echo base_url(); ?>Myaccount">
                    <span class="m-0">My Account</span>
                  </a>
                  <a class="dropdown-item d-flex flex-nowrap align-items-center" href="<?php echo base_url(); ?>User/profile">
                    <span class="m-0">Update Profile</span>
                  </a>
                  <a class="dropdown-item d-flex flex-nowrap align-items-center" onclick="return confirm('Are you sure! ')" href="<?php echo base_url() ?>Login/logout">
                    <span class="m-0">Logout</span>
                  </a>
                </div>
              </li>
              <?php
            }else{
              ?>
              <li class="nav-item">
                <a class="nav-link" href="javascript:void(0);" data-toggle="modal" data-target="#myModal">Login</a>
              </li>
              <?php
            }
            
            ?>

            <li class="nav-item">
             <a class="nav-link" href="#search">
               <img src="<?php echo base_url() ?>assets/front/image/icon/search.png" alt="">
             </a>
            </li>

          </ul>
        </div>
      </nav>
    </div>
  </div>
</header>

<script>
  // Function to handle hover effect based on window width
  function handleDropdownHover() {
    var dropdowns = document.querySelectorAll('.dropdown');

    dropdowns.forEach(function(dropdown) {
      var dropdownMenu = dropdown.querySelector('.dropdown-menu');

      // Check if window width is above 1200px
      if (window.innerWidth > 1200) {
        // Add event listener for hover
        dropdown.addEventListener('mouseover', function() {
          dropdownMenu.style.display = 'block';
        });

        // Add event listener for mouse leave
        dropdown.addEventListener('mouseleave', function() {
          dropdownMenu.style.display = 'none';
        });
      }
    });
  }

  // Initial call to set up the hover effect based on the initial window width
  handleDropdownHover();

  // Add event listener for window resize to adjust hover effect
  window.addEventListener('resize', handleDropdownHover);
</script>
<!-- END OF NEW VERSION OF HEADER -->

<!-- SEARCH SECTION STYLE -->
<style>
  #search {
    position: fixed;
    top: 0px;
    left: 0px;
    width: 100%;
    height: 100%;
    background-color: #fff;
    -webkit-transition: all 0.5s ease-in-out;
    -moz-transition: all 0.5s ease-in-out;
    -o-transition: all 0.5s ease-in-out;
    -ms-transition: all 0.5s ease-in-out;
    transition: all 0.5s ease-in-out;
    -webkit-transform: translate(0px, -100%) scale(0, 0);
    -moz-transform: translate(0px, -100%) scale(0, 0);
    -o-transform: translate(0px, -100%) scale(0, 0);
    -ms-transform: translate(0px, -100%) scale(0, 0);
    transform: translate(0px, -100%) scale(0, 0);
    opacity: 0;
    z-index: 999;
  }

  #search input[type=search] {
    position: absolute;
    top: 50%;
    width: 100%;
    color: #000;
    background: rgba(0, 0, 0, 0);
    font-size: 60px;
    font-weight: 300;
    text-align: center;
    border: 0px;
    margin: 0px auto;
    margin-top: -51px;
    padding-left: 30px;
    padding-right: 30px;
    outline: none;
  }

  #search .btn {
    position: absolute;
    top: 50%;
    left: 50%;
    margin-top: 61px;
    margin-left: -45px;
    background-color: #FD152A;
    border: black;
  }

  #search .close {
    position: fixed;
    top: 15px;
    right: 15px;
    color: #fff;
    background-color: #FD152A;
    border-color: #973838;
    opacity: 1;
    padding: 10px 17px;
    font-size: 27px;
  }

  #search.open {
    -webkit-transform: translate(0px, 0px) scale(1, 1);
    -moz-transform: translate(0px, 0px) scale(1, 1);
    -o-transform: translate(0px, 0px) scale(1, 1);
    -ms-transform: translate(0px, 0px) scale(1, 1);
    transform: translate(0px, 0px) scale(1, 1);
    opacity: 1;
  }
</style>

<!-- END OF SEARCH SECTION STYLE -->



<div id="search">
  <button type="button" class="close" id="search_close">×</button>
  <form action="<?php echo base_url() . 'Search/DisplayAll' ?>" method="get" role="search">
    <input type="search" name="search" required placeholder="Search for vendor, city, blog...." />
    <button type="submit" class="btn btn-primary">Search</button>
  </form>
</div>