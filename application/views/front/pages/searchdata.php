<?php $this->load->view('front/layout/head'); ?>
<?php $this->load->view('front/layout/header'); ?>
<?php 
// $allDatas = [...$allData['ven_result'], $allData['cven_result'], $allData['city_result']];
?>
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
			<li class="breadcrumb-item"><a href="<?php echo  base_url() ?>vendor/vendorlisting" style="color:#4D4D4D;">/ <?php echo !empty($allData['result'][0]['ven_result']) ? $allData['result'][0]['ven_result'] : 'Data Not found';?></a></li>
		</i>

	</ol>
</nav>

<!-- Bridal wear -->
<?php 

if(!empty($allData['combined_result'])){
	
?>
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
					<h2>Result found of : <u><?php echo urldecode($this->input->get('search'))?></u></h2>
				</div>
			</div>
		</div>
		<div class="row" id="all_row">
		
		</div>
		
	</div>
</section>
<?php 
// }elseif(){
}else{
	echo "data not found";
}
?>
<!-- <section class=""></section> -->
<?php $this->load->view('front/layout/footer'); ?>
<?php $this->load->view('front/layout/script'); ?>

<script>
	/* $(document).ready(function(){
		let search = '<?php echo $this->input->get('search')?>';
		// let page = 0;
		function loadMore(page){
			$.ajax({
				url:'<?php echo base_url()?>Search/Load_more_SearchAll_data',
				type: 'post',
				data: {page: page, search: search},
				success: function(result){
					// console.log(result);
					if(result !== ''){
						$('#pagination').remove();
						$('#all_row').append(result);
					}else{
						$('#pagination').prop('disabled', true)
					}
					// page++;
				}
			})
		}
		loadMore();

		$(document).on('click', '#ajaxBtn', function(){
			let id = $(this).data('id');
			// alert(id)
			loadMore(id);
		});
	}) */
	
	

	var load_flag = 0;
    var search = '<?php echo $this->input->get('search')?>';
    var loadInProgress = false;
	// alert(vendor_cat);
	LoadMoreDataSearchAll(load_flag);
	function LoadMoreDataSearchAll(start){

        $.ajax({
          url: '<?php echo base_url()?>Search/Load_more_SearchAll_data',
          type: 'post',
          data: {page: load_flag, search: search},
          success: function(result){
            if (result.trim() !== "") {
                  $('#all_row').append(result);
                  load_flag += 12;
                  if(load_flag > 0) active = 'active'; 
            }
        }

      })
    }

    $(document).ready(function () {
      $(window).scroll(function () {
          if($(window).scrollTop() + $(window).height() > $('#all_row').height() - 200) {
            if(active == 'active'){
              loadInProgress = true;
            $('#loadingSpinner').show();
              // if blog is open on website then only it will run 
              LoadMoreDataSearchAll(load_flag);
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