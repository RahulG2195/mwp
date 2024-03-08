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
    					<h3>MWP Picture Perfect Photographers</h3>
    					<p>Capture Timeless Memories with Expert Photographers</p>
    			  </div>

          <form class="groom-wear-form vendor-service-form" action="<?php echo base_url() ?>Vendorserviceform/addvendorphotograph/" method="POST">
                <input type="hidden"  name="first_name" value="<?php if(!empty($userdata)){ echo  $userdata[0]["first_name"]; }else{ echo ""; }  ?>" id="priceplan" />
                <input type="hidden"  name="uids" value="<?php if(!empty($userdata)){ echo  $userdata[0]["userid"]; }else{ echo ""; }  ?>" id="priceplan" />
                <input type="hidden"  name="last_name" value="<?php if(!empty($userdata)){ echo  $userdata[0]["last_name"]; }else{ echo ""; }   ?>" id="priceplan"/>
                <input type="hidden"  name="email_id"  value="<?php  if(!empty($userdata)){ echo  $userdata[0]["email_id"]; }else{ echo ""; }  ?>" id="priceplan"/>
                <input type="hidden"  name="phone_no"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["phone_no"]; }else{ echo ""; }    ?>" id="priceplan"/>

                 <input type="hidden"  name="plan_name"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["plan_name"]; }else{ echo ""; }    ?>" id="priceplan"/>

                 <input type="hidden"  name="plan_price"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["plan_price"]; }else{ echo ""; }    ?>" id="priceplan"/>
                <div class="row">
                  <div class="col-md-12">
                    <label>What's your per-day budget for Photography? </label>
                    <select name="photography_budget" class="form-control">
                        <option>Select</option>
                        <option value="Less than 50k">Less than 50k</option>
                        <option value="50k to 1 L"> 50k to 1 L</option>
                        <option value="1L to 1.5 L">1L to 1.5 L</option>
                        <option value="1.5L to 2L"> 1.5L to 2L </option>
                        <option value="Above 2 L">Above 2 L</option>
                      </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label>Tell us about the style of photography you prefer:</label> 
                     <select name="photography_style" class="form-control">
                        <option>Select</option>
                        <option value="Traditional">Traditional</option>
                        <option value="Candid"> Candid </option>
                        <option value="Cinematic">Cinematic </option>
                        <option value="Artistic"> Artistic </option>
                        <option value="A mix of styles">A mix of styles</option>
                      </select>
                  </div>
                  <div class="col-md-6">
                      <label>What's the date of your wedding?</label>
                      <input type="date" name="wedding_date" class="form-control">
                  </div>
                  <div class="col-md-6">
                      <label>Which city will your wedding take place in?</label>
                      <input type="text" name="wedding_location" class="form-control" placeholder="city/state">  
                  </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>How many days of photography coverage are you looking for?</label>
                     <input type="text" name="no_of_photography_days" class="form-control" placeholder="Number of Days">
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>Are there any specific occasions you want to be covered? </label><br>
                     <input type="checkbox" id="vehicle1" name="occssion_covered[]" value="Engagement">
                     <label for="vehicle1"> Engagement</label><br>
                     <input type="checkbox" id="vehicle2" name="occssion_covered[]" value="Block print">
                     <label for="vehicle2"> Wedding </label><br>
                     <input type="checkbox" id="vehicle3" name="occssion_covered[]" value="Wedding">
                     <label for="vehicle3">  Pre-Wedding</label><br>
                     <input type="checkbox" id="vehicle1" name="occssion_covered[]" value="Pre-Wedding">
                     <label for="vehicle1"> Mehendi </label><br>
                     <input type="checkbox" id="vehicle2" name="occssion_covered[]" value="Mehendi">
                     <label for="vehicle2"> Reception </label><br>
                     <input type="checkbox" id="vehicle3" name="occssion_covered[]" value="Reception">
                     <label for="vehicle3"> Others</label><br>
                     <!-- <input type="checkbox" id="vehicle3" name="occssion_covered[]" value="Others"> -->
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>Do you want cinematic editing for your wedding photos and videos? </label>
                    <select name="cinematic_editing" class="form-control">
                        <option>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no"> No</option>
                      </select>
                  </div>
                  <div class="col-md-6">
                    <label>Would you like a same-day edit feature for your photos?  </label>
                    <select name="same_day_edit" class="form-control">
                        <option>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no"> No</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label>Are professional printing services for wedding albums important to you?</label>
                    <select name="professional_service_printing" class="form-control">
                        <option>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no"> No</option>
                      </select>
                  </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>How much experience do you prefer the photographer to have?</label><br>
                      <select name="photography_experience" class="form-control">
                        <option>Select</option>
                        <option value="newcomers">Ok with newcomers, Brings fresh perspective</option>
                        <option value="little-experience">Need at least a little experience</option>
                        <option value="master"> Should be a Master of his trade</option>
                      </select>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                       <label>Are you open to both in-house and outsourced editing services? </label>
                       <select name="open_to_edit_service" class="form-control">
                          <option>Select</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                       </select>
                    </div>
                    <div class="col-md-6">
                       <label>Are you interested in videography services as well? </label>
                       <select name="videography_service" class="form-control">
                          <option>Select</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                       </select>
                    </div>
                </div>

                <div class="row">
                   <div class="col-md-12">
                     <label>Please mention the guest count which will be part of the function, it helps us determine the number of Photographers required</label><br>
                      <select name="guest_count" class="form-control">
                        <option>Select</option>
                        <option value="It is an intimate wedding (less than 100 guests)">It is an intimate wedding (less than 100 guests)</option>
                        <option value="It is medium size wedding (100 to 500 guests)"> It is medium size wedding (100 to 500 guests)</option>
                        <option value="It is a large affair (More than 500 guests)">It is a large affair (More than 500 guests)</option>
                      </select>
                   </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                       <label>Are you Ok with Outstation Photographers (If Yes, it increases the options to choose from)?  </label>
                       <select name="outstation_photographers" class="form-control">
                          <option>Select</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                       </select>
                    </div>
                </div>
                <div class="row">
                   <div class="col-md-6">
                     <label>Do you plan to arrange accommodation for photographers? </label><br>
                     <select name="photographer_accomodation" class="form-control">
                          <option>Select</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                       </select>
                   </div>
                   <div class="col-md-6">
                     <label>How soon would you like to receive the final photographs after the event? </label><br>
                     <select name="receive_photograph_date" class="form-control">
                          <option>Select</option>
                          <option value="15-30 Days">15-30 Days</option>
                          <option value="30-45 days">30-45 days</option>
                          <option value="45-60 days">45-60 days</option>
                          <option value="More than 60 days">More than 60 days</option>
                       </select>
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-6">
                     <label>Do you prefer photographers who actively engage with the couple to understand their preferences?</label><br>
                     <select name="understand_preferences" class="form-control">
                          <option>Select</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                       </select>
                   </div>
                   <div class="col-md-6">
                     <label>What kind of photo editing style do you prefer? </label><br>
                     <input type="text"  name="editing_style" class="form-control" placeholder="e.g., Vintage, Modern, Cinematic">
                   </div>
                </div>
                <!--<div class="row">
                   <div class="col-md-12">
                     <label>Delivery Formats: How would you like to receive the final photographs?</label><br>
                     <input type="checkbox" id="vehicle1" name="delivery_format[]" value="Digital files">
                     <label for="vehicle1"> Digital files</label><br>
                     <input type="checkbox" id="vehicle2" name="delivery_format[]" value="Prints">
                     <label for="vehicle2"> Prints </label><br>
                     <input type="checkbox" id="vehicle3" name="delivery_format[]" value="Albums">
                     <label for="vehicle3">  Albums</label><br>
                       <input type="checkbox" id="vehicle3" name="delivery_format[]" value="All">
                     <label for="vehicle3">  All</label><br>
                   </div>
                </div>-->
                <div class="row">
                   <div class="col-md-6">
                     <label>Are you interested in photographers who offer album design services?</label><br>
                     <select name="album_design_offers" class="form-control">
                          <option>Select</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                       </select>
                   </div>
                   <div class="col-md-6">
                     <label>You belong to which culture? <small>It helps us shortlist photographers who have some experience in capturing relevant cultural elements</small></label><br>
                     <select name="culture_belong" class="form-control" id="">
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

                <!-- <div class="row">
                   <div class="col-md-12">
                     <label>How important is it for you that Photographer has captured similar cultural weddings in the past?</label><br>
                     <input type="text"  name="similar_culture_wedding" class="form-control" >
                   </div>
                </div> -->
                <div class="row">
                   <div class="col-md-12">
                     <label>Additional Services: Would you like to include any of the following additional services</label><br>

                     <input type="checkbox" id="vehicle1" name="additional_services[]" value="Has Drone Shoot Capability">
                     <label for="vehicle1"> Has Drone Shoot Capability</label><br>

                     <input type="checkbox" id="vehicle2" name="additional_services[]" value="photo booth">
                     <label for="vehicle2"> Photo booth facilities Available</label><br>
                     <input type="checkbox" id="vehicle3" name="additional_services[]" value="Photo booth facilities Available">
                     <label for="vehicle3">  Live Screening Feature available</label><br>
                     <input type="checkbox" id="vehicle1" name="additional_services[]" value="Live Screening Feature available">
                     <label for="vehicle1"> Same Day Edits provided</label><br>
                     <input type="checkbox" id="vehicle2" name="additional_services[]" value="Same Day Edits provided">
                     <label for="vehicle2"> Professional Printing for Albums Available</label><br>
                     <input type="checkbox" id="vehicle3" name="additional_services[]" value="Professional Printing for Albums Available">
                     <label for="vehicle3"> In-house Editing Services</label><br>
                     <input type="checkbox" id="vehicle3" name="additional_services[]" value="In-house Editing Services">
                     <label for="vehicle3"> Has Creative Photography Approaches</label><br>
                     <!-- <input type="checkbox" id="vehicle3" name="additional_services[]" value="Has Creative Photography Approaches"> -->
                   </div>
                </div>
                <div class="row">
                   <div class="col-md-12">
                     <label>Anything Else: Is there anything else you'd like to mention or specific preferences you have?</label>
                     <textarea name="specific_preference" class="form-control" ></textarea>
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