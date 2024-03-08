<?php  $this->load->view('front/layout/head'); ?>
<?php  $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/home.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">
<style>
    a:hover{
        text-decoration: none;
    }
</style>
<section class="service_banner" id="service_banner" style="background-image: url('<?php echo base_url() . SERVICE?>service_sub_banner.png' ?>')">
    <div class="overlay1"></div>
</section>
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb" style="background:none;">
    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>" style="color: #FD152A;">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo  base_url() ?>vendor/vendorlisting" style="color: #4D4D4D;">Trusted Vendor</a></li>
  </ol>
</nav>
<section class="category-slider">
	<!-- cat slider  -->
  <?php //echo vendor_slider();?>
  <div class="container text-center my-3">
      <div class="row mx-auto my-auto">
        <div id="recipeCarousel" class="carousel slide w-100" data-ride="carousel">
          <div class="carousel-inner w-100" role="listbox">
            <div class="carousel-item active">
              <div class="col-md-4">
                <a href="<?php echo base_url('Trusted-Vendor/Venues')?>">
                  <div class="card card-body category-card-1">
                    <div class="category-img-box img-1">
                      <!-- <img  src="<?php echo  base_url()?>assets/front/image/icon/Venues.png">  -->
                    </div>
                    <div class="category-box-content">
                      <h2 id="category-box-caption-1">Venues</h2>
                      <!-- <span><h6 id="category-box-sub-caption-1"> 490+</h6></span> -->
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-4">
                <a href="<?php echo base_url('Trusted-Vendor/Bridal-Wear')?>">
                  <div class="card card-body category-card-2">
                    <div class="category-img-box img-2">
                      <!-- <img  src="<?php echo  base_url()?>assets/front/image/icon/Bridal_Wear.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2>Bridal Wear</h2>
                      <!--  <span> <h6>490+</h6></span> -->
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-4">
                <a href="<?php echo base_url('Trusted-Vendor/Groom-Wear')?>">
                  <div class="card card-body category-card-3">
                    <div class="category-img-box img-3">
                      <!-- <img  src="<?php echo  base_url()?>assets/front/image/icon/Groom_Wear.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2>Groom Wear</h2>
                      <!-- <span><h6> 490+</h6></span> -->
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-4">
                <a href="<?php echo base_url('Trusted-Vendor/Photographers')?>">
                  <div class="card card-body category-card-4">
                    <div class="category-img-box img-4">
                      <!-- <img  src="<?php echo  base_url()?>assets/front/image/icon/Photographers.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2>Photographers</h2>
                      <!-- <span><h6> 490+</h6></span> -->
                    </div>
                  </div>
                </a>
              </div>
            </div>
  
            <div class="carousel-item">
              <div class="col-md-4">
                <a href="<?php echo base_url('Trusted-Vendor/Make-Up-Artists')?>">
                  <div class="card card-body category-card-5">
                    <div class="category-img-box img-5">
                      <!-- <img  src="<?php echo  base_url()?>assets/front/image/icon/Make_Up_Artists.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2>Make Up Artists</h2>
                      <!-- <span><h6> 490+</h6></span> -->
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-4">
                <a href="<?php echo base_url('Trusted-Vendor/Mehendi-Artists')?>">
                  <div class="card card-body category-card-6">
                    <div class="category-img-box img-6">
                      <!-- <img  src="<?php echo  base_url()?>assets/front/image/icon/Mehendi_Artists.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2>Mehendi Artists</h2>
                      <!-- <span><h6> 490+</h6></span> -->
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-4">
                <a href="<?php echo base_url('Trusted-Vendor/Bridal-Jewellery')?>">
                  <div class="card card-body category-card-7">
                    <div class="category-img-box img-7">
                      <!-- <img  src="<?php echo  base_url()?>assets/front/image/icon/Bridal_Jewellery.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2>Bridal Jewellery</h2>
                      <!-- <span><h6>490+</h6></span> -->
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-4">
                <a href="<?php echo base_url('Trusted-Vendor/Decoration')?>">
                  <div class="card card-body category-card-8">
                    <div class="category-img-box img-8">
                      <!-- <img  src="<?php echo  base_url()?>assets/front/image/icon/Decoration.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2>Decoration</h2>
                      <!-- <span><h6> 490+</h6></span> -->
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-4">
                <a href="<?php echo base_url('Trusted-Vendor/Gifts')?>">
                  <div class="card card-body category-card-9">
                    <div class="category-img-box img-9">
                      <!-- <img  src="<?php echo  base_url()?>assets/front/image/icon/Gifts-Invitations.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2>Gifts</h2>
                      <!-- <span><h6>490+</h6></span> -->
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-4">
                <a href="<?php echo base_url('Trusted-Vendor/Catering')?>">
                  <div class="card card-body category-card-10">
                    <div class="category-img-box img-10">
                      <!-- <img  src="<?php echo  base_url()?>assets/front/image/icon/Catering.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2>Catering</h2>
                      <!--  <span> <h6>490+</h6></span> -->
                    </div>
                  </div>
                </a>
              </div>
            </div>
            <div class="carousel-item">
              <div class="col-md-4">
                <a href="<?php echo base_url('Trusted-Vendor/Invitations')?>">
                  <div class="card card-body category-card-11">
                    <div class="category-img-box img-11">
                      <!-- <img  src="<?php echo  base_url()?>assets/front/image/icon/Wedding_Entertainment.png"> -->
                    </div>
                    <div class="category-box-content">
                      <h2>Invitations</h2>
                      <!--  <span><h6>490+</h6></span> -->
                    </div>
                  </div>
                </a>
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

<!-- Bridal Jewellery -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
				    <h2>Trusted Vendors (<?php echo isset($trust['category_count']) ? $trust['category_count'] : 0 ?>):</h2>
			    </div>
			</div>
		</div>
    
    <div class="row" id="trusted_vendor">
			<?php
			// foreach ($trust['result'] as $value) {
			// 	$category = $value['category'];
			// 	if($category == 1){
			// 		echo Vendor_card('ve', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
			// 	}elseif($category == 2){
			// 		 echo Vendor_card('bw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
			// 	}elseif($category == 3){
			// 		 echo Vendor_card('gw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
			// 	}elseif($category == 4){
			// 		 echo Vendor_card('ph', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
			// 	}elseif($category == 5){
			// 		 echo Vendor_card('mu', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
			// 	}elseif($category == 6){
			// 		 echo Vendor_card('me', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
			// 	}elseif($category == 7){
			// 		 echo Vendor_card('bj', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
			// 	}elseif($category == 8){
			// 		 echo Vendor_card('dc', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
			// 	}elseif($category == 9){
			// 		 echo Vendor_card('gf', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
			// 	}elseif($category == 10){
			// 		 echo Vendor_card('ct', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
			// 	}elseif($category == 13){
			// 		 echo Vendor_card('in', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
			// 	}
			// }
			?>
		</div>
	</div>
</section>


<!-- <section class=""></section> -->
<?php  $this->load->view('front/layout/footer'); ?>
<?php  $this->load->view('front/layout/script'); ?>

<script>

	var load_flag = 0;
  var url_vendor = '<?php echo $this->uri->segment(2)?>';
  var loadInProgress = false;
	LoadMoreDataCity(load_flag);
  
	function LoadMoreDataCity(start){

        $.ajax({
          url: '<?php echo base_url()?>Vendor/Load_more_Trusted_data',
          data: {start: start, url_vendor: url_vendor},
          type: 'post',
          success: function(result){
            
            if (result.trim() !== "") {
                  $('#trusted_vendor').append(result);
                  load_flag += 12;
                  if(load_flag > 0) active = 'active'; 
            } else {
				      $('#trusted_vendor').append('<h4 class="text-center mx-auto">No More Data</h4>');
            }
        }

      })
    }

    $(document).ready(function () {
      $(window).scroll(function () {
          if($(window).scrollTop() + $(window).height() > $('#trusted_vendor').height() - 200) {
            if(active == 'active'){
              loadInProgress = true;
            $('#loadingSpinner').show();
              // if blog is open on website then only it will run 
              LoadMoreDataCity(load_flag);
              setTimeout(function () {
                  loadInProgress = false;
                  $('#loadingSpinner').hide();
              }, 2000);
              active = 'inactive';

            }
          }
      });
    });
</script>