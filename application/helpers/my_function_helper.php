<?php

if (!function_exists('decimal_to_stars')) {
  function decimal_to_stars($rating)
  {
    if ($rating > 0) {
      $stars = '';
      $fullStars = floor($rating);
      $halfStar = round($rating - $fullStars, 1) > 0 ? 1 : 0;

      // Full stars
      for ($i = 0; $i < $fullStars; $i++) {
        $stars .= '<i class="fa fa-star rating_star checked"></i> ';
      }

      // Half star
      if ($halfStar) {
        $stars .= '<i class="fa fa-star-half-o checked" aria-hidden="true"></i>';
      }

      // Empty stars
      $emptyStars = 5 - $fullStars - $halfStar;
      for ($i = 0; $i < $emptyStars; $i++) {
        $stars .= '<i class="fa fa-star-half-o checked" aria-hidden="true"></i> ';
      }

      return $stars;
    } else {
      $dash = '-';
      return $dash;
    }
  }
}

function Vendor_card($type, $cat_name, $seo_url, $image, $vendor_name, $rating, $review, $price_range, $area, $city, $tag_name)
{
 
  $path = FCPATH . 'uploads/vendors/' . $image;  // Use FCPATH to get the absolute server path

  $output = '<div class="col-12 col-md-6 col-lg-4 vendor-col my-2">
                <span class="vendor-tag"><i class="fas fa-heart"></i> '. $tag_name .'</span>
                <a href="' . base_url() . 'vendor-detail/' . $type . '/' . $seo_url . '">
                <div class="card">
                    <div class="view overlay">';

  if (file_exists($path)) {
    $output .= '<img class="card-img-top" src="' . base_url() . 'uploads/vendors/' . $image . '" class="img-fluid Card image cap">';
  } else {
    $output .= '<img class="card-img-top" src="' . base_url() . 'uploads/vendors/MWP NA.png" class="img-fluid Card image cap">';
  }

  $output .= '<a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>
                    <div class="card-body elegant-color white-text rounded-bottom">
                    <span class="text-muted category-text">' . $cat_name . '</span>
                    <h4 class="card-title font-weight-bold" title="' . $vendor_name . '">' . $vendor_name . '</h4>
                    <hr class="hr-light">
                    <p class="mb-2"><b>Ratings </b>
                      ' . decimal_to_stars($rating) . ' (' . $review . ' Review)
                    </p>
                    <p class="card-text money-symbol"> <b></b><b>';
  if (isset($price_range)) {
    if ($price_range == '₹') {
      $output .=  $price_range . '(Budget friendly)';
    } elseif ($price_range == '₹₹') {
      $output .=  $price_range . '(Value for money)';
    } elseif ($price_range == '₹₹₹') {
      $output .=  $price_range . '(Exclusive / Premium)';
    }
  }
  $output .= '</b> </p>
                    <p class="lead"><strong><i class="fas fa-location"></i>' . $area . ', ' . $city . '</strong></p>
                    <!-- Link -->
                    <a href="' . base_url() . 'vendor-detail/' . $type . '/' . $seo_url . '" class="white-text d-flex justify-content-end view-category">
                        <span class="fa-solid fa-caret-right" style="color:#FD4251; margin-top: 3px;margin-right: 5px"></span> View
                    </a>
                    </div>
                </div>
                </a>
            </div>';
  return $output;
}


// use only for  carousel 
function Vendor_card_without_col($type, $cat_name, $seo_url, $image, $vendor_name, $rating, $review, $price_range, $area, $city, $tag_name)
{
 
  $path = FCPATH . 'uploads/vendors/' . $image;  // Use FCPATH to get the absolute server path

  $output = '<div class="col-12 vendor-col my-2">
                <span class="vendor-tag"><i class="fas fa-heart"></i> '. $tag_name .'</span>
                <a href="' . base_url() . 'vendor-detail/' . $type . '/' . $seo_url . '">
                <div class="card">
                    <div class="view overlay">';

  if (file_exists($path)) {
    $output .= '<img class="card-img-top" src="' . base_url() . 'uploads/vendors/' . $image . '" class="img-fluid Card image cap">';
  } else {
    $output .= '<img class="card-img-top" src="' . base_url() . 'uploads/vendors/MWP NA.png" class="img-fluid Card image cap">';
  }

  $output .= '<a>
                        <div class="mask rgba-white-slight"></div>
                    </a>
                    </div>
                    <div class="card-body elegant-color white-text rounded-bottom">
                    <span class="text-muted category-text">' . $cat_name . '</span>
                    <h4 class="card-title font-weight-bold" title="' . $vendor_name . '">' . $vendor_name . '</h4>
                    <hr class="hr-light">
                    <p class="mb-2"><b>Ratings </b>
                      ' . decimal_to_stars($rating) . ' (' . $review . ' Review)
                    </p>
                    <p class="card-text money-symbol"> <b></b><b>';
  if (isset($price_range)) {
    if ($price_range == '₹') {
      $output .=  $price_range . '(Budget friendly)';
    } elseif ($price_range == '₹₹') {
      $output .=  $price_range . '(Value for money)';
    } elseif ($price_range == '₹₹₹') {
      $output .=  $price_range . '(Exclusive / Premium)';
    }
  }
  $output .= '</b> </p>
                    <p class="lead"><strong><i class="fas fa-location"></i>' . $area . ', ' . $city . '</strong></p>
                    <!-- Link -->
                    <a href="' . base_url() . 'vendor-detail/' . $type . '/' . $seo_url . '" class="white-text d-flex justify-content-end view-category">
                        <span class="fa-solid fa-caret-right" style="color:#FD4251; margin-top: 3px;margin-right: 5px"></span> View
                    </a>
                    </div>
                </div>
                </a>
            </div>';
  return $output;
}
// display vendor on header nav 
function Vendor_category()
{
  $CI = &get_instance(); // Get the CodeIgniter instance
  $CI->load->model('VendorModel'); // Load your model
  $categories = $CI->VendorModel->fetch_vendor_categories(); // Assuming this is your model function
  return $categories;
}

function Vendor_city()
{
  $CI = &get_instance(); // Get the CodeIgniter instance
  $CI->load->model('VendorModel'); // Load your model
  $city = $CI->VendorModel->fetch_vendor_city(); // Assuming this is your model function
  return $city;
}

// print array in format for testing
function pr($array, $exit)
{
  echo "<pre>";
  print_r($array);
  echo "</pre>";
  $exit;
}


//  common vendor slider for all required page
function vendor_slider()
{
  $html = '<div class="col-md-12">
  <div class="vendor-category-slider slider" id="vendor-category-slider">
    <div class="slide">
       <!--  <div class="col-md-4"> -->
                <a style="text-decoration:none" href="' . base_url('Single-Vendor/destination-wedding-venues') . '">
                  <div class="card card-body category-card-1" style="height: 154px!important;background-color: #AA4D4F;">
                    <div class="category-img-box img-1">
                      <!-- <img  src="' .  base_url() . 'assets/front/image/icon/Venues.png">  -->
                    </div>
                    <div class="category-box-content">
                      <h2 id="category-box-caption-1" style="text-align: center;">Venues</h2>
                      <!-- <span><h6 id="category-box-sub-caption-1"> 490+</h6></span> -->
                    </div>
                  </div>
                </a>
        <!-- </div> -->
    </div>
    <div class="slide">
       <!--  <div class="col-md-4"> -->
                <a style="text-decoration:none" href="' . base_url('Single-Vendor/bridal-wear-vendors') . '">
                  <div class="card card-body category-card-2" style="height: 154px!important;background-color: #AA4D4F;">
                    <div class="category-img-box img-2">
                      <!-- <img  src="' .  base_url() . 'assets/front/image/icon/Bridal_Wear.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2 style="text-align: center;">Bridal Wear</h2>
                      <!--  <span> <h6>490+</h6></span> -->
                    </div>
                  </div>
                </a>
       <!--  </div> -->
    </div>
    <div class="slide">
       <!--  <div class="col-md-4"> -->
                <a style="text-decoration:none" href="' . base_url('Single-Vendor/groom-wear-vendors') . '">
                  <div class="card card-body category-card-3" style="height: 154px!important;background-color: #AA4D4F;">
                    <div class="category-img-box img-3">
                      <!-- <img  src="' .  base_url() . 'assets/front/image/icon/Groom_Wear.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2 style="text-align: center;">Groom Wear</h2>
                      <!-- <span><h6> 490+</h6></span> -->
                    </div>
                  </div>
                </a>
       <!--  </div> -->
    </div>
    <div class="slide">
        <!-- <div class="col-md-4"> -->
                <a style="text-decoration:none" href="' . base_url('Single-Vendor/wedding-photographers-near-me') . '">
                  <div class="card card-body category-card-4" style="height: 154px!important;background-color: #AA4D4F;">
                    <div class="category-img-box img-4">
                      <!-- <img  src="' .  base_url() . 'assets/front/image/icon/Photographers.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2 style="text-align: center;">Photographers</h2>
                      <!-- <span><h6> 490+</h6></span> -->
                    </div>
                  </div>
                </a>
        <!-- </div> -->
    </div>
    <div class="slide">
        <!-- <div class="col-md-4"> -->
                <a style="text-decoration:none" href="' . base_url('Single-Vendor/make-up-artists-near-me') . '">
                  <div class="card card-body category-card-5" style="height: 154px!important;background-color: #AA4D4F;">
                    <div class="category-img-box img-5">
                      <!-- <img  src="' .  base_url() . 'assets/front/image/icon/Make_Up_Artists.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2 style="text-align: center;">Make Up Artists</h2>
                      <!-- <span><h6> 490+</h6></span> -->
                    </div>
                  </div>
                </a>
      <!--   </div> -->

    </div>
    <div class="slide">
        <!-- <div class="col-md-4"> -->
                <a style="text-decoration:none" href="' . base_url('Single-Vendor/mehendi-artists-near-me') . '">
                  <div class="card card-body category-card-6" style="height: 154px!important;background-color: #AA4D4F;">
                    <div class="category-img-box img-6">
                      <!-- <img  src="' .  base_url() . 'assets/front/image/icon/Mehendi_Artists.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2 style="text-align: center;">Mehendi Artists</h2>
                      <!-- <span><h6> 490+</h6></span> -->
                    </div>
                  </div>
                </a>
       <!--  </div> -->
    </div>
    <div class="slide">
        <!-- <div class="col-md-4"> -->
                <a style="text-decoration:none" href="' . base_url('Single-Vendor/bridal-jewellery') . '">
                  <div class="card card-body category-card-7" style="height: 154px!important;background-color: #AA4D4F;">
                    <div class="category-img-box img-7">
                      <!-- <img  src="' .  base_url() . 'assets/front/image/icon/Bridal_Jewellery.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2 style="text-align: center;">Bridal Jewellery</h2>
                      <!-- <span><h6>490+</h6></span> -->
                    </div>
                  </div>
                </a>
        <!-- </div> -->
    </div>
    <div class="slide">
        <!-- <div class="col-md-4"> -->
                <a style="text-decoration:none" href="' . base_url('Single-Vendor/wedding-decoration') . '">
                  <div class="card card-body category-card-8" style="height: 154px!important;background-color: #AA4D4F;">
                    <div class="category-img-box img-8">
                      <!-- <img  src="' .  base_url() . 'assets/front/image/icon/Decoration.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2 style="text-align: center;">Decoration</h2>
                      <!-- <span><h6> 490+</h6></span> -->
                    </div>
                  </div>
                </a>
        <!-- </div> -->

    </div>
    <div class="slide">
        <!-- <div class="col-md-4"> -->
                <a style="text-decoration:none" href="' . base_url('Single-Vendor/wedding-gifts') . '">
                  <div class="card card-body category-card-9" style="height: 154px!important;background-color: #AA4D4F;">
                    <div class="category-img-box img-9">
                      <!-- <img  src="' .  base_url() . 'assets/front/image/icon/Gifts-Invitations.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2 style="text-align: center;">Gifts</h2>
                      <!-- <span><h6>490+</h6></span> -->
                    </div>
                  </div>
                </a>
             <!--  </div> -->
    </div>
  </div>
  </div>';

  return $html;
}

// ciry slder 

function Happening_city()
{
  $output = '<div class="col-md-12">
  <div class="customer-logos owl-carousel slider">
    <div class="slide"><a href="'. base_url() . 'Citys/Ahmedabad" style="text-decoration:none;!important"><img src="'. base_url() . 'assets/front/image/cities/Banglore.png"> <h6 class="city-text">Ahmedabad</h6></a></div>
    <div class="slide"><a href="'. base_url() . 'Citys/Chandigarh" style="text-decoration:none;!important"><img src="'. base_url() . 'assets/front/image/cities/Chandigarh.png"> <h6 class="city-text">Chandigarh</h6></a></div>
    <div class="slide"><a href="'. base_url() . 'Citys/Delhi" style="text-decoration:none;!important"><img src="'. base_url() . 'assets/front/image/cities/Chennai.png"> <h6 class="city-text">Delhi</h6></a></div>
    <div class="slide"><a href="'. base_url() . 'Citys/Gurgaon" style="text-decoration:none;!important"><img src="'. base_url() . 'assets/front/image/cities/Gurgoan.png"> <h6 class="city-text">Gurugram</h6></a></div>
    <div class="slide"><a href="'. base_url() . 'Citys/Hyderabad" style="text-decoration:none;!important"><img src="'. base_url() . 'assets/front/image/cities/Hyderabad.png"> <h6 class="city-text">Hyderabad</h6></a></div>
    <div class="slide"><a href="'. base_url() . 'Citys/Kolkata" style="text-decoration:none;!important"><img src="'. base_url() . 'assets/front/image/cities/Kolkatta.png"> <h6 class="city-text">Kolkata</h6></a></div>
    <div class="slide"><a href="'. base_url() . 'Citys/Mumbai" style="text-decoration:none;!important"><img src="'. base_url() . 'assets/front/image/cities/Mumbai.png"> <h6 class="city-text">Mumbai</h6></a></div>
    <div class="slide"><a href="'. base_url() . 'Citys/Noida" style="text-decoration:none;!important"><img src="'. base_url() . 'assets/front/image/cities/Noida.png"> <h6 class="city-text">Noida</h6></a></div>
    <div class="slide"><a href="'. base_url() . 'Citys/Pune" style="text-decoration:none;!important"><img src="'. base_url() . 'assets/front/image/cities/Pune.png"> <h6 class="city-text">Pune</h6></a></div>
  </div>
</div>';

  return $output;
}

function price_symbol($data)
{
  if (is_array($data)) {
    foreach ($data as $value) {
      $result = $value;
    }
  }
  return $result;
}

function TrustedVendor($trusted_array = array()){
  $output = '<div class="container">
  <div class="row">
    <div class="header d-flex flex-nowrap justify-content-between align-items-center col-12">
      <div>
        <div class="vendor-small-text">
          <h6>Vendor Categories</h6>
        </div>
        <div class="vendor-main-text">
          <h2 class="wow fadeInUp animated" style="visibility: visible;-webkit-animation-duration: 2s; -moz-animation-duration: 2s; animation-duration: 2s;">Trusted <span style="color:#FF142A; ">Vendors</span></h2>
        </div>
      </div>
      <div class="vendor-btn-col desktop_area">
        <a href="'. base_url() .'Trusted-Vendor" class="vendor-btn btn-number-one">View All</a>
      </div>
    </div>
    <div class="body d-flex flex-wrap justify-content-center w-100">
    <div class="owl-carousel vendor_slider">';
      foreach ($trusted_array as $value) {
        $category = $value['category'];
        if ($category == 1) {
          $output .= Vendor_card_without_col('ve', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
        } elseif ($category == 2) {
          $output .= Vendor_card_without_col('bw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
        } elseif ($category == 3) {
          $output .= Vendor_card_without_col('gw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
        } elseif ($category == 4) {
          $output .= Vendor_card_without_col('ph', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
        } elseif ($category == 5) {
          $output .= Vendor_card_without_col('mu', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
        } elseif ($category == 6) {
          $output .= Vendor_card_without_col('me', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
        } elseif ($category == 7) {
          $output .= Vendor_card_without_col('bj', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
        } elseif ($category == 8) {
          $output .= Vendor_card_without_col('dc', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
        } elseif ($category == 9) {
          $output .= Vendor_card_without_col('gf', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
        } elseif ($category == 10) {
          $output .= Vendor_card_without_col('ct', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
        } elseif ($category == 13) {
          $output .= Vendor_card_without_col('in', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
        }
      }
    $output .= '</div></div>
    <div class="footer flex-column justify-content-center align-items-center w-100">
      <div class="col-12 vendor-btn-col">
        <a href="'. base_url() .'Trusted-Vendor" class="vendor-btn second-btn">View All</a>
      </div>
    </div>

  </div>
</div>';

  return $output;
}


// function FormatPrice($inputArray, $seprate = false) {
//   $formattedArray = array();
//   if(is_array($inputArray)){
//   foreach ($inputArray as $value) {
//       if (strpos($value, ',') !== false) {
//           $formattedValue = '₹ ' . number_format(str_replace(',', '', $value));
//       } else {
//           $formattedValue = $value;
//       }

//       $formattedArray[] = $formattedValue;
//   }
// }

//   $val = $formattedArray[0] . ' - ' . $formattedArray[1];

//   if($seprate == true){
//     return $formattedArray;
//   }else{
//     return $val;
//   }
  
// }

/* function FormatPrice($inputString) {
  // Remove symbols like comma and rupee symbol
  
 $filteredString = preg_replace('/[^0-9-]+/', '', $inputString);

  // Check if the string contains a range separated by '-'
  if (strpos($filteredString, '-') !== false) {
      // Split the string into values based on '-'
      $ranges = explode('-', $filteredString);
      pr($ranges, '');
      if(is_numeric($ranges[0]) && is_numeric($ranges[1])) {
        // Format each range
        $formattedRanges = array_map(function ($range) {
          $formattedValue = '₹ ' . number_format($range);
          return is_numeric($range) ? $formattedValue : $range;
        }, $ranges);

        // Join the formatted ranges
        return implode(' - ', $formattedRanges);
      }elseif(is_numeric($ranges[0])){
        $data = '₹' . number_format($ranges[0]) . ' ' . $ranges[1];
        return $data;
      }elseif(is_numeric($ranges[1])){
        $data = $ranges[0] . ' ' . '₹' . number_format($ranges[1]);
        return $data;
      }
  } else {
      // If the string is not a range, just format the single value
      return '₹ ' . number_format($filteredString);
  }
} */

function FormatPrice($inputString)
{
  // Remove symbols like comma and rupee symbol
  $filteredString = preg_replace('/[^\d-]/', '', $inputString);

   // Check if the string contains a range separated by '-'
   if (strpos($inputString, '-') !== false) {
       // Split the string into values based on '-'
       list($start, $end) = explode('-', $filteredString);

       // Format the values with commas and rupee symbol
       $formattedStart = '₹' . number_format((float) $start);
       $formattedEnd = '₹' . number_format((float) $end);

       // Check if both values are numeric
        if (is_numeric($start) && is_numeric($end)) {
            return $formattedStart . ' - ' . $formattedEnd;
        } elseif(!is_numeric($start)) {
            return 'under - ' . $formattedEnd;
        }elseif(!is_numeric($end)) {
          return $formattedStart . ' and more';
        }
   } else {
       // If the string is not a range, just format the single value
       if ($filteredString === 'NA' || $filteredString === '' || $filteredString === '-') {
        return 'Information Not Available';
        } else {
            return '₹' . number_format((float) $filteredString);
        }
   }
}

function format_number_indian($number)
{
  // Set the locale to 'en_IN'
setlocale(LC_NUMERIC, 'en_IN');
  $formatted_number = number_format($number, 0, '.', ',');

  // Replace commas with spaces
  $formatted_number = str_replace(',', ' ', $formatted_number);

  // Add commas for the lakh separator
  $formatted_number = str_replace(' ', ',', $formatted_number);

  return $formatted_number;
}


function Get_Vendor_detail() {
  $CI = &get_instance(); // Get the CodeIgniter instance
  if(!empty($CI->session->userdata('dv_id'))){
      
      $id = $CI->session->userdata('dv_id');
      $CI->load->model('VendorPanel/VendorPanelModel'); // Load your model
      $categories = $CI->VendorPanelModel->Get_vendor_detail($id); // Assuming this is your model function
      $cat = $categories['category'];
      if($cat == 1){
          $tab = 've';
      }elseif($cat == 2){
          $tab = 'bw';
      }elseif($cat == 3){
          $tab = 'gw';
      }elseif($cat == 4){
          $tab = 'ph';
      }elseif($cat == 5){
          $tab = 'mu';
      }elseif($cat == 6){
          $tab = 'me';
      }elseif($cat == 7){
          $tab = 'bj';
      }elseif($cat == 8){
          $tab = 'dc';
      }elseif($cat == 9){
          $tab = 'gf';
      }elseif($cat == 10){
          $tab = 'ct';
      }elseif($cat == 13){
          $tab = 'in';
      }
      return $tab;
  }   
}