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
    					<h3>MWP Gifts Galore</h3>
    					<p>Impress Your Guests with Thoughtful Gifts and Favors</p>
    			</div>
          
          <form class="groom-wear-form vendor-service-form" action="<?php echo base_url() ?>Vendorserviceform/addgiftdata" method="POST" enctype="multipart/form-data">
                <input type="hidden"  name="first_name" value="<?php if(!empty($userdata)){ echo  $userdata[0]["first_name"]; }else{ echo ""; }  ?>" id="priceplan" />
                <input type="hidden"  name="uids" value="<?php if(!empty($userdata)){ echo  $userdata[0]["userid"]; }else{ echo ""; }  ?>" id="priceplan" />
                <input type="hidden"  name="last_name" value="<?php if(!empty($userdata)){ echo  $userdata[0]["last_name"]; }else{ echo ""; }   ?>" id="priceplan"/>
                <input type="hidden"  name="email_id"  value="<?php  if(!empty($userdata)){ echo  $userdata[0]["email_id"]; }else{ echo ""; }  ?>" id="priceplan"/>
                <input type="hidden"  name="phone_no"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["phone_no"]; }else{ echo ""; }    ?>" id="priceplan"/>

                 <input type="hidden"  name="plan_name"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["plan_name"]; }else{ echo ""; }    ?>" id="priceplan"/>

                 <input type="hidden"  name="plan_price"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["plan_price"]; }else{ echo ""; }    ?>" id="priceplan"/>
                <div class="row">
                  <div class="col-md-6">
                    <label>What is your estimated per-gift budget for the gifts or favors? (Select a range)</label>
                    <select name="gift_budget" class="form-control">
                        <option>Select</option>
                        <option value="Below INR 500">Below INR 500</option>
                        <option value="INR 500 - INR 1,000"> INR 500 - INR 1,000</option>
                        <option value="INR 1,000 - INR 2,000">INR 1,000 - INR 2,000</option>
                        <option value="INR 2,000 - INR 3,000"> INR 2,000 - INR 3,000 </option>
                        <option value="Above INR 3,000">Above INR 3,000</option>
                      </select>
                  </div>
                  <div class="col-md-6">
                    <label>What type of gift or favor are you looking for?</label>
                    <select name="type_of_gift" class="form-control">
                        <option>Select</option>
                        <option value="Edible Gifts & Favors">Edible Gifts & Favors</option>
                        <option value="Non-Edible Gifts & Favors"> Non-Edible Gifts & Favors</option>
                        <option value="Both Edible and Non-Edible">Both Edible and Non-Edible</option>
                      </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label>Do you have any specific theme or concept for the gifts/favors?</label> <br>
                     <input type="checkbox" id="vehicle1" name="gift_theme[]" value="Personalized/customized gifts">
                     <label for="vehicle1"> Personalized/customized gifts</label><br>
                     <input type="checkbox" id="vehicle2" name="gift_theme[]" value="Block print">
                     <label for="vehicle2"> Eco-friendly and sustainable gifts</label><br>
                     <input type="checkbox" id="vehicle3" name="gift_theme[]" value="Eco-friendly and sustainable gifts">
                     <label for="vehicle3">  Luxury and premium gifts</label><br>
                     <input type="checkbox" id="vehicle1" name="gift_theme[]" value="Luxury and premium gifts">
                     <label for="vehicle1"> Traditional and cultural gifts</label><br>
                     <input type="checkbox" id="vehicle2" name="gift_theme[]" value="Traditional and cultural gifts">
                     <label for="vehicle2"> Handmade or artisanal products</label><br>

                     <input type="checkbox" id="vehicle2" name="gift_theme[]" value="Practical and functional gifts">
                     <label for="vehicle2"> Practical and functional gifts</label><br>
                     
                     <input type="checkbox" id="vehicle2" name="gift_theme[]" value="Wellness and self-care gifts">
                     <label for="vehicle2"> Wellness and self-care gifts</label><br>

                     <input type="checkbox" id="vehicle2" name="gift_theme[]" value="Mehendi">
                     <label for="vehicle2"> Experiential gifts or vouchers</label><br>

                     <input type="checkbox" id="vehicle2" name="gift_theme[]" value="Mehendi">
                     <label for="vehicle2"> Decorative and ornamental gifts</label><br>
                     <input type="text" id="vehicle3" name="gift_theme[]"  placeholder="Others (Please Specify)">
                     
                  </div>
                <div class="row">
                   <div class="col-md-12">
                    <label>What is the minimum order quantity (MOQ) for the gifts or favors you require?</label> <br>
                     <input type="text" name="moq" class="form-control"> 
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                      <label>Are there any specific occasions for which you need these gifts/favors? (Select one or more)</label><br>
                       <input type="checkbox" id="vehicle1" name="gift_occassion[]" value="Baraat favors">
                       <label for="vehicle1"> Baraat favors</label><br>
                       <input type="checkbox" id="vehicle2" name="gift_occassion[]" value="Sangeet Give Aways">
                       <label for="vehicle2"> Sangeet Give Aways</label><br>
                       <input type="checkbox" id="vehicle3" name="gift_occassion[]" value="Mehendi Favors">
                       <label for="vehicle3">  Mehendi Favors</label><br>
                       <input type="checkbox" id="vehicle1" name="gift_occassion[]" value="Mehendi Favors">
                       <label for="vehicle1"> Reception Give Aways</label><br>
                       <input type="checkbox" id="vehicle2" name="gift_occassion[]" value="Reception Give Aways">
                       <label for="vehicle2"> Room Hampers</label><br>
                       <input type="text" id="vehicle3" name="gift_occassion[]"  placeholder="Others">
                    </div>
                    <!-- <div class="col-md-6">
                      <label>Is there a particular price range you're looking for per kg for edible gifts or per gift/pack for non-edible gifts? </label><br>
                      <input type="text" name="per_kg_price_range" class="form-control">
                    </div> -->
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Are you looking out for customized options for gifts or favors?</label>
                    <select name="per_gift_budget" class="form-control">
                        <option>Select</option>
                        <option value="yes">Yes, I'm looking for customized options</option>
                        <option value="no"> No, ready-made options are preferred</option>
                      </select>
                  </div>
                  <div class="col-md-6">
                    <label>when you require the gifts to be delivered?</label>
                    <select name="finalize_gift_vendor" class="form-control">
                        <option>Select</option>
                        <option value="Within a week">Within a week</option>
                        <option value="Within a month"> Within a month</option>
                        <option value="More than a month"> More than a month</option>
                      </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                     <label>Are there any specific features you're interested in? (Select one or more)</label>
                     <br>
                     <input type="checkbox" id="vehicle1" name="specific_features[]" value="Minimalistic Packaging">
                     <label for="vehicle1"> Minimalistic Packaging</label><br>
                     <input type="checkbox" id="vehicle2" name="specific_features[]" value="Premium Packaging">
                     <label for="vehicle2">Premium Packaging</label><br>
                     <input type="checkbox" id="vehicle3" name="specific_features[]" value="Eco-Friendly Options">
                     <label for="vehicle3">  Eco-Friendly Options</label><br>
                     <input type="checkbox" id="vehicle1" name="specific_features[]" value="Personalized Tags/Labels">
                     <label for="vehicle1"> Personalized Tags/Labels</label><br>
                     <input type="checkbox" id="vehicle2" name="specific_features[]" value="Unique Designs/Themes">
                     <label for="vehicle2"> Unique Designs/Themes </label><br>
                     <input type="checkbox" id="vehicle2" name="specific_features[]" value="Specific Gift Wrapping Style">
                     <label for="vehicle2"> Specific Gift Wrapping Style</label><br>
                     <input type="text" name="specific_features[]" id="veh4" placeholder="Others">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Do you have any reference images or ideas for the gifts or favors?  </label>
                     <input type="file" class="form-control" name="reference_image" placeholder="If yes, please provide details">
                  </div>
                  <div class="col-md-6">
                       <label>What is the date of the event or occasion for which you need these gifts/favors?</label>
                       <input type="date" name="event-date" class="form-control"> 
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                       <label>In which city do you want Gifts to be delivered in?</label>
                       <input type="text" name="gift_location" class="form-control"> 
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