<?php $this->load->view('front/layout/head'); ?>
<?php $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">
<section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url() ?>assets/front/image/hero-banner/MWP-Vendor-listing-page-hero-banner.jpg' )">
	<div class="overlay1"></div>
</section>
<nav aria-label="breadcrumb">
	<ol class="breadcrumb" style="background:none;">
		<i>
			<li class="breadcrumb-item"><a href="<?php echo base_url() ?>" style="color: #FD152A;">Home </a></li>
		</i>
		<i>
			<li class="breadcrumb-item"><a href="<?php echo  base_url() ?>vendor/vendorlisting" style="color:#4D4D4D;">/ <?php echo !empty($search_result['result'][0]['cat_name']) ? $search_result['result'][0]['cat_name'] : 'Data Not found';?></a></li>
		</i>

	</ol>
</nav>

<!-- Bridal wear -->
<?php 

if(!empty($search_result['result'])){
	// pr($search_result['category_count'], '');
?>
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
					<h2>Total Result found: (<?php echo isset($search_result['category_count'][0]['vendor_count']) ? $search_result['category_count'][0]['vendor_count'] : 0 ?>)</h2>
				</div>
			</div>
		</div>
		<div class="row" id="search_row">
			<?php
            // foreach ($search_result['result'] as $value) {
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
<?php 
}else{
	echo "data not found";
}
?>
<!-- <section class=""></section> -->
<?php $this->load->view('front/layout/footer'); ?>
<?php $this->load->view('front/layout/script'); ?>
<script>

	var load_flag = 0;
    var vendor_cat = '<?php echo $this->input->get('vendor_cat')?>';
    var vendor_city = '<?php echo $this->input->get('vendor_city')?>';
    var loadInProgress = false;
	// alert(vendor_cat);
	LoadMoreDataSearch(load_flag);
	function LoadMoreDataSearch(start){

        $.ajax({
          url: '<?php echo base_url()?>Search/Load_more_Search_data?vendor_cat=' + vendor_cat + '&vendor_city=' + vendor_city,
          data: 'start=' + start,
          type: 'post',
          success: function(result){
            // alert(result);
            if (result.trim() !== "") {
                  $('#search_row').append(result);
                  load_flag += 12;
                  if(load_flag > 0) active = 'active'; 
            } else {
				// $('#search_row').append('<h4 class="text-center mx-auto">No More Data</h4>');
            }
        }

      })
    }

    $(document).ready(function () {
      $(window).scroll(function () {
          if($(window).scrollTop() + $(window).height() > $('#search_row').height() - 200) {
            if(active == 'active'){
              loadInProgress = true;
            $('#loadingSpinner').show();
              // if blog is open on website then only it will run 
              LoadMoreDataSearch(load_flag);
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