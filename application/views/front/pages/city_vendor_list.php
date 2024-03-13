<?php  $this->load->view('front/layout/head'); ?>
<?php  $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/home.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">
<section class="service_banner" id="service_banner" style="background-image: url('<?php echo base_url() . SERVICE . 'service_sub_banner.png' ?>')">
    <div class="overlay1"></div>
</section>
<nav aria-label="breadcrumb" >
  <ol class="breadcrumb" style="background:none;">
    <li class="breadcrumb-item"><a href="<?php echo base_url() ?>" style="color: #FD152A;">Home</a></li>
    <li class="breadcrumb-item"><a href="<?php echo  base_url() ?>vendor/vendorlisting" style="color: #4D4D4D;">City Vendor</a></li>
  </ol>
</nav>
<section class="category-slider">
	<!-- cat slider  -->
  <?php echo vendor_slider();?>
</section>

<!-- Bridal Jewellery -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
        			<?php
						foreach ($citys['city_count'] as $count1) {
							$count = $count1['city_count'];
						}
					?>
				    <h2>City Vendors (<?php echo isset($count) ? $count : 0 ?>):</h2>
			    </div>
			</div>
		</div>
    
    <div class="row" id="city_row">
			<!-- data come from ajax  -->
		</div>
		<div id="loadingSpinner" class=" mx-auto text-center" style="display: none;">
            <!-- Your loading animation HTML or image goes here -->
            Loading...
        </div>
	</div>
</section>


<!-- <section class=""></section> -->
<?php  $this->load->view('front/layout/footer'); ?>
<?php  $this->load->view('front/layout/script'); ?>
<script>

	var load_flag = 0;
    var url_city = '<?php echo $this->uri->segment(2)?>';
    var loadInProgress = false;
	LoadMoreDataCity(load_flag);

	function LoadMoreDataCity(start){

        $.ajax({
          url: '<?php echo base_url()?>Vendor/Load_more_city_data/' + url_city,
          data: 'start=' + start,
          type: 'post',
          success: function(result){
            
            if (result.trim() !== "") {
                  $('#city_row').append(result);
                  load_flag += 12;
                  if(load_flag > 0) active = 'active'; 
            } else {
				$('#city_row').append('<h4 class="text-center mx-auto">No More Data</h4>');
            }
        }

      })
    }

    $(document).ready(function () {
      $(window).scroll(function () {
          if($(window).scrollTop() + $(window).height() > $('#city_row').height() - 200) {
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