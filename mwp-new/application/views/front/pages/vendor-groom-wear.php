<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/WPmodel.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor-recommendation-form.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/responsive.css' ?>">

<section class="vendor-decommendation-venue-form">
	<div class="conatiner">
		<div class="row">
			<div class="col-md-2"></div>
			  <div class="col-md-8">
    			<div class="form-heading">
    					<h3>MWP Groom's Elegance</h3>
    					<p>Elevate Your Groom's Look to the Pinnacle of Elegance</p>
    			</div>

          <form class="groom-wear-form vendor-service-form" action="<?php echo base_url() ?>Vendorserviceform/addvgroomwear" method="POST" enctype="multipart/form-data">

                <input type="hidden"  name="first_name" value="<?php if(!empty($userdata)){ echo  $userdata[0]["first_name"]; }else{ echo ""; }  ?>" id="priceplan" />
                <input type="hidden"  name="uids" value="<?php if(!empty($userdata)){ echo  $userdata[0]["userid"]; }else{ echo ""; }  ?>" id="priceplan" />
                <input type="hidden"  name="last_name" value="<?php if(!empty($userdata)){ echo  $userdata[0]["last_name"]; }else{ echo ""; }   ?>" id="priceplan"/>
                <input type="hidden"  name="email_id"  value="<?php  if(!empty($userdata)){ echo  $userdata[0]["email_id"]; }else{ echo ""; }  ?>" id="priceplan"/>
                <input type="hidden"  name="phone_no"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["phone_no"]; }else{ echo ""; }    ?>" id="priceplan"/>

                 <input type="hidden"  name="plan_name"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["plan_name"]; }else{ echo ""; }    ?>" id="priceplan"/>

                 <input type="hidden"  name="plan_price"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["plan_price"]; }else{ echo ""; }    ?>" id="priceplan"/>           
                <div class="row">
                  <div class="col-md-12">
                     <label>What's your budget for Groom Wear? Looking for something affordable/ Willing to invest a bit more/ Ready for a luxurious touch)</label>
                     <select name="groom-wear-budget" class="form-control" id="">
                      <option value="">Select any option</option>
                      <option value="Looking for something affordable">Looking for something affordable</option>
                      <option value="Willing to invest a bit more">Willing to invest a bit more</option>
                      <option value="Ready for a luxurious touch">Ready for a luxurious touch</option>
                     </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label>What's your desired price range for Groom wear?</label> 
                  </div>
                  <div class="col-md-6">
                      <label>To</label>
                      <input type="text" name="to-groom-budget" class="form-control">
                  </div>
                  <div class="col-md-6">
                      <label>From</label>
                      <input type="text" name="from-groom-budget" class="form-control">
                  </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>Tell us about your preferred culture for the Groom's attire?</label>
                     <!-- <input type="text" name="preffered-culture-attire" class="form-control ven-bridal-class"> -->
                     <select name="preffered-culture-attire" class="form-control ven-bridal-class" id="">
                      <option value="">Select You Culture</option>
                      <option value="Hindu">Hindu</option>
                      <option value="Muslim">Muslim</option>
                      <option value="Christian">Christian</option>
                      <option value="Parsi">Parsi</option>
                      <option value="Gujarati">Gujarati</option>
                      <option value="Kannada">Kannada</option>
                      <option value="Telugu">Telugu</option>
                      <option value="Tamil">Tamil</option>
                      <option value="Malyali">Malyali</option>
                      <option value="Marwari">Marwari</option>
                      <option value="Punjabi">Punjabi</option>
                      <option value="Sindhi">Sindhi</option>
                      <option value="Others">Others</option>
                     </select>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>Are there any specific design elements or embellishments you're looking for? </label><br>
                     <input type="checkbox" id="vehicle1" name="design_element[]" value="Cut beads">
                     <label for="vehicle1"> Cut beads</label><br>
                     <input type="checkbox" id="vehicle2" name="design_element[]" value="Block print">
                     <label for="vehicle2"> Block print</label><br>
                     <input type="checkbox" id="vehicle3" name="design_element[]" value="Zari">
                     <label for="vehicle3">  Zari</label><br>
                     <input type="checkbox" id="vehicle1" name="design_element[]" value="Digital print">
                     <label for="vehicle1"> Digital print</label><br>
                     <input type="checkbox" id="vehicle2" name="design_element[]" value="Embroidery">
                     <label for="vehicle2"> Embroidery</label><br>
                     <input type="checkbox" id="vehicle3" name="design_element[]" value="Handwork">
                     <label for="vehicle3"> Handwork</label><br>
                     <input type="checkbox" id="vehicle1" name="design_element[]" value="Floral print">
                     <label for="vehicle1">  Floral print</label><br>
                     <input type="checkbox" id="vehicle2" name="design_element[]" value="Zardosi">
                     <label for="vehicle2"> Zardosi</label><br>
                     <input type="checkbox" id="vehicle3" name="design_element[]" value="Others">
                     <label for="vehicle3"> Others</label><br>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-12">
                     <label>Do you have any preferred color choices for the attire?</label>
                     <input type="text" name="preffered-color-choice-attire" placeholder="If Yes, Please mention the color preference" class="form-control ven-bridal-class">
                   </div>
                </div>
                <!-- <div class="row">
                   <div class="col-md-12">
                     <label>What's your preferred fit for the outfit?</label><br>
                     <input type="radio" id="vehicle1" name="prefered_outfit[]" value="Slim Fit">
                     <label for="vehicle1"> Slim Fit</label><br>
                     <input type="radio" id="vehicle2" name="prefered_outfit[]" value="Regular fit">
                     <label for="vehicle2"> Regular fit</label><br>
                     <input type="radio" id="vehicle3" name="prefered_outfit[]" value="Custom fit">
                     <label for="vehicle3">  Custom fit</label><br>
                   </div>
                </div> -->
                <div class="row">
                   <div class="col-md-12">
                     <label>Are there any specific accessories you'd like to include with the outfit? </label><br>
                     <input type="checkbox" id="vehicle1" name="accessories_outfit[]" value="Turban">
                     <label for="vehicle1"> Turban</label><br>
                     <input type="checkbox" id="vehicle2" name="accessories_outfit[]" value="Block print">
                     <label for="vehicle2"> Pocket Square</label><br>
                     <input type="checkbox" id="vehicle3" name="accessories_outfit[]" value="Pocket Square">
                     <label for="vehicle3">  Footwear</label><br>
                     <input type="checkbox" id="vehicle1" name="accessories_outfit[]" value="Footwear">
                     <label for="vehicle1"> Groom Jewellery</label><br>
                     <input type="checkbox" id="vehicle2" name="accessories_outfit[]" value="Groom Jewellery">
                     <label for="vehicle2"> Shawl</label><br>
                     <input type="checkbox" id="vehicle3" name="accessories_outfit[]" value="Shawl">
                     <label for="vehicle3"> Rings</label><br>
                     <input type="checkbox" id="vehicle1" name="accessories_outfit[]" value="Rings print">
                     <label for="vehicle1">  Broche</label><br>
                     <input type="checkbox" id="vehicle2" name="accessories_outfit[]" value="Broche">
                     <label for="vehicle2"> Other</label><br>
                     <input type="text" name="accessories_outfit[]" value="">
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>Would you like the Groom's attire to match or coordinate with the Bride's outfit?</label>
                     <select name="match_attire" class="form-control">
                        <option>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                     </select>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-12">
                     <label>For which occasions do you need groom wear?</label><br>
                     <input type="checkbox" id="vehicle1" name="occassion-groom-wear[]" value="Wedding">
                     <label for="vehicle1"> Wedding</label><br>
                     <input type="checkbox" id="vehicle2" name="occassion-groom-wear[]" value="Wedding">
                     <label for="vehicle2"> Reception</label><br>
                     <input type="checkbox" id="vehicle3" name="occassion-groom-wear[]" value="Reception">
                     <label for="vehicle3">  Sangeet</label><br>
                     <input type="checkbox" id="vehicle1" name="occassion-groom-wear[]" value="Sangeet">
                     <label for="vehicle1"> Mehendi</label><br>
                     <input type="checkbox" id="vehicle2" name="occassion-groom-wear[]" value="Mehendi">
                     <label for="vehicle2"> Cocktail</label><br>
                     <!-- <input type="checkbox" id="vehicle2" name="occassion-groom-wear[]"  placeholder="Tell us more" value="Cocktail"> -->
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>Please upload any inspiration photos you may have for the groom's attire.</label>
                     <input type="file" name="style-image" class="form-control">
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>What types of products are you looking for? </label><br>
                     <input type="checkbox" id="vehicle1" name="products_looking_for[]" value="Sherwani">
                     <label for="vehicle1"> Sherwani</label><br>
                     <input type="checkbox" id="vehicle2" name="products_looking_for[]" value="Block print">
                     <label for="vehicle2"> Suits & tuxedos</label><br>
                     <input type="checkbox" id="vehicle3" name="products_looking_for[]" value="Suits & tuxedos">
                     <label for="vehicle3">  Bandhgala</label><br>
                     <input type="checkbox" id="vehicle1" name="products_looking_for[]" value="Bandhgala">
                     <label for="vehicle1"> Indo-western</label><br>
                     <input type="checkbox" id="vehicle2" name="products_looking_for[]" value="Indo-western">
                     <label for="vehicle2"> Kurta Pyjamas</label><br>
                     <input type="checkbox" id="vehicle3" name="products_looking_for[]" value="Kurta Pyjamas">
                     <label for="vehicle3"> Waistcoat sets</label><br>
                     <input type="checkbox" id="vehicle1" name="products_looking_for[]" value="Waistcoat sets">
                     <label for="vehicle1"> Designer wear</label><br>
                     <input type="checkbox" id="vehicle2" name="products_looking_for[]" value="Designer wear">
                     <label for="vehicle2">  Custom Made Wear</label><br>
                     <input type="checkbox" id="vehicle2" name="products_looking_for[]" value="Custom Made Wear">
                     <label for="vehicle2">  Jackets</label><br>
                     <input type="checkbox" id="vehicle2" name="products_looking_for[]" value="Jackets">
                     <label for="vehicle2">  Jodhpuri</label><br>
                     <!-- <input type="checkbox" id="vehicle2" name="products_looking_for[]" value="Jodhpuri"> -->
                     <!-- <label for="vehicle2">  Others</label><br> -->
                     <input type="text" id="vehicle2" name="products_looking_for[]" placeholder="Others">
                   </div>
                </div>
                <!-- <div class="row">
                   <div class="col-md-12">
                     <label>Do you have a preferred fabric for the outfit?</label><br>
                     <input type="checkbox" id="vehicle1" name="fabric_for_outfit[]" value="Cut beads">
                     <label for="vehicle1"> Silk</label><br>
                     <input type="checkbox" id="vehicle2" name="fabric_for_outfit[]" value="Block print">
                     <label for="vehicle2"> Satin </label><br>
                     <input type="checkbox" id="vehicle3" name="fabric_for_outfit[]" value="Zari">
                     <label for="vehicle3">  Other</label><br>
                   </div>
                </div> -->
                <div class="row">
                   <div class="col-md-12">
                     <label>Are you looking for outfits that come with matching accessories? </label>
                     <select name="match_outfit" class="form-control">
                        <option>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                     </select>
                   </div>
                </div>

                <div class="row">
                   <div class="col-md-12">
                     <label>How soon do you need the Groom's attire? </label>
                      <select name="require_time" class="form-control">
                        <option>Select</option>
                        <option value="yes">Within 1 week</option>
                        <option value="no">7-15 days</option>
                        <option value="yes">Within 1 week</option>
                        <option value="no"> 15-30 days </option>
                        <option value="yes">30-45 days</option>
                        <option value="no"> 45-60 days</option>
                        <option value="yes">More than 60 days</option>
                      </select>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>Are you interested in any additional services? </label><br>
                     <input type="checkbox" id="vehicle1" name="additional_service[]" value="Styling assistance">
                     <label for="vehicle1"> Styling assistance</label><br>
                     <input type="checkbox" id="vehicle2" name="additional_service[]" value="Trial availability">
                     <label for="vehicle2"> Trial availability</label><br>
                     <input type="checkbox" id="vehicle3" name="additional_service[]" value="Alteration options">
                     <label for="vehicle3">  Alteration options</label><br>
                     <input type="checkbox" id="vehicle1" name="additional_service[]" value="Rental choices">
                     <label for="vehicle1"> Rental choices</label><br>
                     <input type="checkbox" id="vehicle2" name="additional_service[]" value="Groom accessories">
                     <label for="vehicle2"> Groom accessories</label><br>
                     <input type="checkbox" id="vehicle3" name="additional_service[]" value="International shipping">
                     <label for="vehicle3"> International shipping</label><br>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>Are there any favorite designers that inspire you, If yes, Please mention them.</label>
                     <input type="text" name="style-image" class="form-control ven-bridal-class">
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>Are you open to a slight budget increase for the perfect outfit?</label>
                     <select name="match_attire" class="form-control ven-bridal-class">
                        <option>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no">No</option>
                     </select>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>In which city are you looking to shop for Groom wear?</label>
                     <input type="text" name="shop_location" class="form-control ven-bridal-class">
                   </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="plnningModalbtn">Submit</button>
                </div>
          </form>
			  </div>
			<div class="col-md-2"></div>
		</div>
	</div>
</section>


<?php $this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); ?>