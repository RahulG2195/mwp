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
    					<h3>MWP Decor Delight</h3>
    					<p>Create an Enchanted Ambiance with Remarkable Decor</p>
    			</div>

          <form class="groom-wear-form vendor-service-form" action="<?php echo base_url() ?>Vendorserviceform/adddecrodata" method="POST" enctype="multipart/form-data">
                <input type="hidden"  name="first_name" value="<?php if(!empty($userdata)){ echo  $userdata[0]["first_name"]; }else{ echo ""; }  ?>" id="priceplan" />
                <input type="hidden"  name="uids" value="<?php if(!empty($userdata)){ echo  $userdata[0]["userid"]; }else{ echo ""; }  ?>" id="priceplan" />
                <input type="hidden"  name="last_name" value="<?php if(!empty($userdata)){ echo  $userdata[0]["last_name"]; }else{ echo ""; }   ?>" id="priceplan"/>
                <input type="hidden"  name="email_id"  value="<?php  if(!empty($userdata)){ echo  $userdata[0]["email_id"]; }else{ echo ""; }  ?>" id="priceplan"/>
                <input type="hidden"  name="phone_no"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["phone_no"]; }else{ echo ""; }    ?>" id="priceplan"/>

                 <input type="hidden"  name="plan_name"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["plan_name"]; }else{ echo ""; }    ?>" id="priceplan"/>

                 <input type="hidden"  name="plan_price"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["plan_price"]; }else{ echo ""; }    ?>" id="priceplan"/>
                <div class="row">
                  <div class="col-md-12">
                    <label>What is your estimated budget for the decoration? (Select a range)</label>
                    <select name="decoration_budget" class="form-control">
                        <option>Select</option>
                        <option value="Below 1 lakhs">Below 1 lakhs</option>
                        <option value="1 to 3 lakhs"> 1 to 3 lakhs</option>
                        <option value="3 to 5 lakhs">3 to 5 lakhs</option>
                        <option value="5 to 10 lakhs"> 5 to 10 lakhs </option>
                        <option value="10 to 20 lakhs">10 to 20 lakhs</option>
                        <option value="Above 20 Lakhs">Above 20 Lakhs</option>
                      </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label>What is the type of event you're planning?</label> <br>
                     <input type="checkbox" id="vehicle1" name="event_type[]" value="Engagement">
                     <label for="vehicle1"> Wedding</label><br>
                     <input type="checkbox" id="vehicle2" name="event_type[]" value="Block print">
                     <label for="vehicle2"> Engagement </label><br>
                     <input type="checkbox" id="vehicle3" name="event_type[]" value="Wedding">
                     <label for="vehicle3">  Sangeet</label><br>
                     <input type="checkbox" id="vehicle1" name="event_type[]" value="Pre-Wedding">
                     <label for="vehicle1"> Mehendi </label><br>
                     <input type="checkbox" id="vehicle2" name="event_type[]" value="Mehendi">
                     <label for="vehicle2"> Reception </label><br>
                     
                    <!--  <label for="vehicle3"> Others</label><br> -->
                     <!-- <input type="text" id="vehicle3" name="event_type[]"  placeholder="others"> -->
                  </div>
                <div class="row">
                   <div class="col-md-12">
                    <label>Which decoration style resonates with you the most? (Select one or more)</label> <br>
                     <input type="checkbox" id="vehicle1" name="decoration_style[]" value="Floral and Elegant">
                     <label for="vehicle1"> Floral and Elegant</label><br>
                     <input type="checkbox" id="vehicle2" name="decoration_style[]" value="Royal and Luxurious">
                     <label for="vehicle2">Royal and Luxurious</label><br>
                     <input type="checkbox" id="vehicle3" name="decoration_style[]" value="Vintage and Rustic">
                     <label for="vehicle3">  Vintage and Rustic</label><br>
                     <input type="checkbox" id="vehicle1" name="decoration_style[]" value="Modern and Contemporary">
                     <label for="vehicle1"> Modern and Contemporary</label><br>
                     <input type="checkbox" id="vehicle2" name="decoration_style[]" value="Bollywood Glam">
                     <label for="vehicle2"> Bollywood Glam </label><br>
                     <input type="checkbox" id="vehicle2" name="decoration_style[]" value="Cultural Theme">
                     <label for="vehicle2"> Cultural Theme (e.g., Rajasthani, Punjabi, South Indian) </label><br>
                     <input type="checkbox" id="vehicle2" name="decoration_style[]" value="Artistic and Creative">
                     <label for="vehicle2"> Artistic and Creative </label><br>                  
                     <!--<input type="checkbox" id="vehicle3" name="decoration_style[]"  placeholder="others" value="Artistic and Creative">-->
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-6">
                      <label>What is the estimated number of guests attending your event? </label><br>
                      <select name="no_of_guest" class="form-control">
                        <option>Select</option>
                        <option value="less than 100">Less than 100</option>
                        <option value="100-200"> 100 - 200</option>
                        <option value="200-300">200 - 300</option>
                        <option value="300-500"> 300 - 500</option>
                        <option value="more than 500"> More than 500</option>
                      </select>
                    </div>
                    <div class="col-md-6">
                      <label>Where is your event taking place? </label><br>
                      <select name="event_place" class="form-control">
                        <option>Select</option>
                        <option value="Indoor Venue">Indoor Venue</option>
                        <option value="Outdoor Venue"> Outdoor Venue</option>
                        <option value="both">Both Indoor and Outdoor</option>
                      </select>
                    </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label>Do you have any specific color preferences or themes for the decoration? </label>
                     <textarea class="form-control" name="decoration_color_preference" placeholder="Please describe briefly"></textarea>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                     <label>Are there any specific spaces you want to highlight in the decoration? </label>
                     <br>
                     <input type="checkbox" id="vehicle1" name="hilight_spaces[]" value="Entrance">
                     <label for="vehicle1"> Entrance</label><br>
                     <input type="checkbox" id="vehicle2" name="hilight_spaces[]" value="Stage">
                     <label for="vehicle2">Stage</label><br>
                     <input type="checkbox" id="vehicle3" name="hilight_spaces[]" value="Mandap">
                     <label for="vehicle3">  Mandap</label><br>
                     <input type="checkbox" id="vehicle1" name="hilight_spaces[]" value="Seating area">
                     <label for="vehicle1"> Seating area</label><br>
                     <input type="checkbox" id="vehicle2" name="hilight_spaces[]" value="Home Décor">
                     <label for="vehicle2"> Home Décor </label><br>
                     
                     <input type="text" id="vehicle3" name="hilight-spaces"  placeholder="Other Please Specify">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                    <label>Is there a particular cultural or regional influence you'd like to incorporate into the decoration?  </label>
                     <textarea class="form-control" name="regional_influence" placeholder="Please describe briefly"></textarea>
                  </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                       <label>Would you prefer traditional or modern decor elements?</label>
                       <select name="decor_elements" class="form-control">
                          <option>Select</option>
                          <option value="Traditional">Traditional</option>
                          <option value="Modern">Modern</option>
                          <option value="both">A mix of both</option>
                       </select>
                    </div>
                </div>

                <div class="row">
                   <div class="col-md-12">
                     <label>Do you have any Pinterest boards or reference images you'd like to share with us?</label><br>
                     <input type="file" name="reference_image" class="form-control">
                    <!--  <textarea name="reference-image" class="form-control" placeholder="If yes, please provide the link or details"></textarea> -->
                      
                   </div>
                </div>
               
                <div class="row">
                  <div class="col-md-6">
                       <label>What is the date of your event?</label>
                       <input type="date" name="event_date" class="form-control">
                    </div>
                   <div class="col-md-6">
                     <label>In which city are your wedding events scheduled?</label><br>
                     <input type="text" name="finalize_date" class="form-control">
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