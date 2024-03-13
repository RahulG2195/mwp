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
<?php 
//  if($_SERVER['REMOTE_ADDR'] == '60.254.0.49'){
//     pr($Get_Vendor_cat, '');
//     echo '==';
// }
?>
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
              <?php 
              $i = 1;
              foreach($Get_Vendor_cat as $val){
                echo '<div class="carousel-item '.($i == 1 ? 'active' : '').'">
              <div class="col-md-4">
                <a href="'. base_url() .'Trusted-Vendor/'.$val['cat_seo_url'].'">
                  <div class="card card-body category-card-1">
                    <div class="category-img-box img-1">
                    </div>
                    <div class="category-box-content">
                      <h2 id="category-box-caption-1">'.$val['name'].'</h2>
                    </div>
                  </div>
                </a>
              </div>
            </div>';
            $i++;
              }
              ?>
            
            
  
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