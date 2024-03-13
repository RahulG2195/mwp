<?php $this->load->view('front/layout/head'); ?>
<?php $this->load->view('front/layout/header'); ?>
<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor.css"> -->
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendors.css">
<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/style.css"> -->
<!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css"> -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

<section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url() ?>assets/front/image/hero-banner/MWP-Vendor-listing-page-hero-banner.jpg' )">
	<div class="banner-section-heading">
        <h1>Explore Vendors With Us!</h1>
    </div>
	
</section>
<nav aria-label="breadcrumb">
	<ol class="breadcrumb" style="background:none;">
		<i>
			<li class="breadcrumb-item"><a href="<?php echo base_url() ?>" style="color: #FD152A;">Home </a></li>
		</i>
		<i>
			<li class="breadcrumb-item"><a href="<?php echo  base_url() ?>vendor/vendorlisting" style="color:#4D4D4D;">/ Vendor Listing</a></li>
		</i>

	</ol>
</nav>
<!-- Bridal wear -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
					<?php
					
					foreach ($bridal_wear['category_count'] as $count1) {
						$wear = $count1['category_count'];
					}
					?>
					<a href="<?php echo base_url() . 'Single-Vendor/' . $bridal_wear['result'][0]['cat_seo_url']?>"><h2>Top Bridal Wear Artists: (<?php echo isset($wear) ? $wear : 0 ?>)</h2></a>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			foreach ($bridal_wear['result'] as $wear) {
				echo Vendor_card('bw', $wear['cat_name'], $wear['vendor_seo_url'], $wear['images'], $wear['vendor_name'], $wear['rating'], $wear['review'], $wear['price_range'], $wear['area'], $wear['city_name'], $wear['tag_name']);
			}
			?>
		</div>
	</div>
</section>


<!-- Photograph section -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
					<?php
					foreach ($photo['category_count'] as $count1) {
						$pho = $count1['category_count'];
					}
					?>
					<a href="<?php echo base_url() . 'Single-Vendor/' . $photo['result'][0]['cat_seo_url']?>"><h2>Top Photographers: (<?php echo isset($pho) ? $pho : 0 ?>)</h2></a>
				</div>
			</div>
		</div>
		<div class="row">
		<?php
		
			foreach ($photo['result'] as $photo) {
				echo Vendor_card('ph', $photo['cat_name'], $photo['vendor_seo_url'], $photo['images'], $photo['vendor_name'], $photo['rating'], $photo['review'], $photo['price_range'], $photo['area'], $photo['city_name'], $photo['tag_name']);
			}
			?>
		</div>
	</div>
</section>


<!-- Decorators section -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
				<?php
					foreach ($decoration['category_count'] as $count1) {
						$deco = $count1['category_count'];
					}
					?>
					<a href="<?php echo base_url() . 'Single-Vendor/' . $decoration['result'][0]['cat_seo_url']?>"><h2>Top Decorators: (<?php echo isset($deco) ? $deco : 0 ?>)</h2></a>
				</div>
			</div>
		</div>
		<div class="row">
		<?php
			foreach ($decoration['result'] as $deco) {
				echo Vendor_card('dc', $deco['cat_name'], $deco['vendor_seo_url'], $deco['images'], $deco['vendor_name'], $deco['rating'], $deco['review'], $deco['price_range'], $deco['area'], $deco['city_name'], $deco['tag_name']);
			}
			?>
		</div>
	</div>
</section>

<!-- Venue section -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
				<?php
					foreach ($venue['category_count'] as $count1) {
						$ven = $count1['category_count'];
					}
					?>
					<a href="<?php echo base_url() . 'Single-Vendor/' . $venue['result'][0]['cat_seo_url']?>"><h2>Top Venues: (<?php echo isset($ven) ? $ven : 0 ?>)</h2></a>
				</div>
			</div>
		</div>
		<div class="row">
		<?php
			foreach ($venue['result'] as $venue) {
				echo Vendor_card('ve', $venue['cat_name'], $venue['vendor_seo_url'], $venue['images'], $venue['vendor_name'], $venue['rating'], $venue['review'], $venue['price_range'], $venue['area'], $venue['city_name'], $venue['tag_name']);
			}
			?>
		</div>
	</div>
</section>

<!-- Groom section -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
					<?php
					foreach ($groom['category_count'] as $count1) {
						$gro = $count1['category_count'];
					}
					?>
					<a href="<?php echo base_url() . 'Single-Vendor/' . $groom['result'][0]['cat_seo_url']?>"><h2>Top Groom wear: (<?php echo isset($gro) ? $gro : 0 ?>)</h2></a>
				</div>
			</div>
		</div>
		<div class="row">
		<?php
			foreach ($groom['result'] as $groom) {
				echo Vendor_card('gw', $groom['cat_name'], $groom['vendor_seo_url'], $groom['images'], $groom['vendor_name'], $groom['rating'], $groom['review'], $groom['price_range'], $groom['area'], $groom['city_name'], $groom['tag_name']);
			}
			?>
		</div>
	</div>
</section>

<!-- make up -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
				<?php
					foreach ($make_up['category_count'] as $count1) {
						$make = $count1['category_count'];
					}
					?>
					<a href="<?php echo base_url() . 'Single-Vendor/' . $make_up['result'][0]['cat_seo_url']?>"><h2>Top make up Artists: (<?php echo isset($make) ? $make : 0 ?>)</h2></a>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			foreach ($make_up['result'] as $make_up) {
				echo Vendor_card('mu', $make_up['cat_name'], $make_up['vendor_seo_url'], $make_up['images'], $make_up['vendor_name'], $make_up['rating'], $make_up['review'], $make_up['price_range'], $make_up['area'], $make_up['city_name'], $make_up['tag_name']);
			}
			?>
		</div>
	</div>
</section>

<!-- Mehendi Artists -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
				<?php
					foreach ($mehendi['category_count'] as $count1) {
						$meh = $count1['category_count'];
					}
					?>
					<a href="<?php echo base_url() . 'Single-Vendor/' . $mehendi['result'][0]['cat_seo_url']?>"><h2>Top Mehendi Artists: (<?php echo isset($meh) ? $meh : 0 ?>)</h2></a>
				</div>
			</div>
		</div>
		<div class="row">
			<?php
			foreach ($mehendi['result'] as $mehendi) {
				echo Vendor_card('me', $mehendi['cat_name'], $mehendi['vendor_seo_url'], $mehendi['images'], $mehendi['vendor_name'], $mehendi['rating'], $mehendi['review'], $mehendi['price_range'], $mehendi['area'], $mehendi['city_name'], $mehendi['tag_name']);
			}
			?>
		</div>
	</div>
</section>


<!-- Bridal Jewellery -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
				<?php
					foreach ($jewellry['category_count'] as $count1) {
						$jewel = $count1['category_count'];
					}
					?>
					<a href="<?php echo base_url() . 'Single-Vendor/' . $jewellry['result'][0]['cat_seo_url']?>"><h2>Top Bridal Jewellery: (<?php echo isset($jewel) ? $jewel : 0 ?>)</h2></a>
				</div>
			</div>
		</div>
		<div class="row">
		<?php
			foreach ($jewellry['result'] as $jewellry) {
				echo Vendor_card('bj', $jewellry['cat_name'], $jewellry['vendor_seo_url'], $jewellry['images'], $jewellry['vendor_name'], $jewellry['rating'], $jewellry['review'], $jewellry['price_range'], $jewellry['area'], $jewellry['city_name'], $jewellry['tag_name']);
			}
			?>
		</div>
	</div>
</section>

<!-- Gifts -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
				<?php
					foreach ($gift['category_count'] as $count1) {
						$gift_count = $count1['category_count'];
					}
					?>
					<a href="<?php echo base_url() . 'Single-Vendor/' . $gift['result'][0]['cat_seo_url']?>"><h2>Top Gifts : (<?php echo (isset($gift_count) && !empty($gift_count)) ? $gift_count : 0 ?>)</h2></a>
				</div>
			</div>
		</div>
		<div class="row">
		<?php
		// echo "<pre>";
		// print_r($gift);
			foreach ($gift['result'] as $gift) {
				echo Vendor_card('gf', $gift['cat_name'], $gift['vendor_seo_url'], $gift['images'], $gift['vendor_name'], $gift['rating'], $gift['review'], $gift['price_range'], $gift['area'], $gift['city_name'], $gift['tag_name']);
			
			}
			?>
		</div>
	</div>
</section>

<!-- Invitations -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
				<?php
					foreach ($inivitation['category_count'] as $count1) {
						$ini = $count1['category_count'];
					}
					?>
					<a href="<?php echo base_url() . 'Single-Vendor/' . $inivitation['result'][0]['cat_seo_url']?>"><h2>Top Invitations : (<?php echo isset($ini) ? $ini : 0 ?>)</h2></a>
				</div>
			</div>
		</div>
		<div class="row">
		<?php
			foreach ($inivitation['result'] as $inivitation) {
				echo Vendor_card('in', $inivitation['cat_name'], $inivitation['vendor_seo_url'], $inivitation['images'], $inivitation['vendor_name'], $inivitation['rating'], $inivitation['review'], $inivitation['price_range'], $inivitation['area'], $inivitation['city_name'], $inivitation['tag_name']);
			}
			?>
		</div>
	</div>
</section>

<!-- Catering -->
<section class="vendor-catalogue-section">
	<div class="container">
		<div class="row">
			<div class="col-md-12">
				<div class="vendor-catalogue-heading">
					<?php
					
					foreach ($catering['category_count'] as $count1) {
						$cat = $count1['category_count'];
					}
					?>
					<a href="<?php echo base_url() . 'Single-Vendor/' . $bridal_wear['result'][0]['cat_seo_url']?>"><h2>Top Catering : (<?php echo isset($cat) ? $cat : 0 ?>)</h2></a>
				</div>
			</div>
		</div>
		<div class="row">
		<?php
			foreach ($catering['result'] as $catering) {
				echo Vendor_card('ct', $catering['cat_name'], $catering['vendor_seo_url'], $catering['images'], $catering['vendor_name'], $catering['rating'], $catering['review'], $catering['price_range'], $catering['area'], $catering['city_name'], $catering['tag_name']);
			}
			?>
		</div>
	</div>
</section>

<!-- <section class=""></section> -->
<?php $this->load->view('front/layout/footer'); ?>
<?php $this->load->view('front/layout/script'); ?>
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
