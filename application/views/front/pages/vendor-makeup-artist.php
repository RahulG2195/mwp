<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/WPmodel.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor-recommendation-form.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/responsive.css' ?>">
<style>
.slidecontainer {
  width: 100%;
}

.slider {
  -webkit-appearance: none;
  width: 100%;
  height: 25px;
  background: #d3d3d3;
  outline: none;
  opacity: 0.7;
  -webkit-transition: .2s;
  transition: opacity .2s;
}

.slider:hover {
  opacity: 1;
}

.slider::-webkit-slider-thumb {
  -webkit-appearance: none;
  appearance: none;
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}

.slider::-moz-range-thumb {
  width: 25px;
  height: 25px;
  background: #04AA6D;
  cursor: pointer;
}
</style>
<section class="vendor-decommendation-venue-form">
	<div class="conatiner">
		<div class="row">
			<div class="col-md-2"></div>
			  <div class="col-md-8">
    			  <div class="form-heading">
    					<h3>MWP Mesmerizing Makeup Artists</h3>
    					<p>Transform into a Radiant Bride with Exceptional Makeup Artists</p>
    			  </div>

          <form class="groom-wear-form vendor-service-form" action="<?php echo base_url() ?>Vendorserviceform/addmakeupdata" method="POST" enctype="multipart/form-data">
                 <input type="hidden"  name="first_name" value="<?php if(!empty($userdata)){ echo  $userdata[0]["first_name"]; }else{ echo ""; }  ?>" id="priceplan" />
                 <input type="hidden"  name="uids" value="<?php if(!empty($userdata)){ echo  $userdata[0]["userid"]; }else{ echo ""; }  ?>" id="priceplan" />
                <input type="hidden"  name="last_name" value="<?php if(!empty($userdata)){ echo  $userdata[0]["last_name"]; }else{ echo ""; }   ?>" id="priceplan"/>
                <input type="hidden"  name="email_id"  value="<?php  if(!empty($userdata)){ echo  $userdata[0]["email_id"]; }else{ echo ""; }  ?>" id="priceplan"/>
                <input type="hidden"  name="phone_no"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["phone_no"]; }else{ echo ""; }    ?>" id="priceplan"/>

                 <input type="hidden"  name="plan_name"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["plan_name"]; }else{ echo ""; }    ?>" id="priceplan"/>

                 <input type="hidden"  name="plan_price"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["plan_price"]; }else{ echo ""; }    ?>" id="priceplan"/>
                <div class="row">
                  <div class="col-md-6">
                    <label>What is the date of your event? </label>
                    <input type="date" name="event_date" class="form-control">
                  </div>
                  <div class="col-md-6">
                    <label>How many days you want Make Up Services for?</label>
                    <input type="text" name="no_of_makeup_service" class="form-control">
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>What is your preferred location for the makeup session?</label>
                    <select name="preferred_location" class="form-control">
                        <option>Select</option>
                        <option value="Salon Only">Salon Only</option>
                        <option value="Venue Only"> Venue Only</option>
                        <option value="Either will do">Either will do</option>
                       
                    </select>
                  </div>
                   <div class="col-md-6">
                    <label>Are you Ok with Makeup Artist traveling from an outstation location?</label>
                    <select name="out_station_ok" class="form-control">
                        <option>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no"> No</option>
                    </select>
                  </div>
                </div>
                <div class="row">
                  <div class="col-md-6">
                    <label>What is your budget range for makeup services?</label>
                    <input type="range" min="1000" max="100000"  class="slider" id="myRange" name="makeup-budget-range">
                    <!-- <input type="text" name="makeup-budget-range" id="demo" value=""> -->
                    <p>Value: <span id="demo"></span></p> 
                   <!--    <label>What is your budget range for makeup services?</label>
                      <div class="price-input">
                            <div class="field">
                              <span>Min</span>
                              <input type="number" class="input-min" value="1000" name="makeup_budget_min">
                            </div>
                            <div class="separator">-</div>
                            <div class="field">
                              <span>Max</span>
                              <input type="number" class="input-max" value="1,000,00" name="makeup_budget_max">
                            </div>
                        </div>
                        <div class="slider">
                          <div class="progress"></div>
                        </div>
                        <div class="range-input">
                            <input type="range" class="range-min" min="0" max="10000" value="1000" step="100" name="range-min">
                            <input type="range" class="range-max" min="0" max="10000" value="1,000,00" step="100" name="range-max">
                        </div> -->
                  </div>
                  <div class="col-md-6">
                    <label>Which city are your wedding events scheduled?</label>
                    <input type="text" name="event_schedule" class="form-control">
                  </div>
                </div>
                
                <div class="row">
                   <div class="col-md-12">
                     <label>Are you interested in specific makeup techniques or styles? </label><br>
                     <input type="checkbox" id="vehicle1" name="makeup_technique[]" value="HD Make Up">
                     <label for="vehicle1"> HD Make Up</label><br>
                     <input type="checkbox" id="vehicle2" name="makeup_technique[]" value="Airbrush Make Up">
                     <label for="vehicle2">Airbrush Make Up</label><br>
                     <input type="text" name="makeup_technique[]" placeholder="Other">
                   </div>
                </div>
                <div class="row">
                  <div class="col-md-12">
                     <label>Are you looking for makeup services for a specific occasion? </label><br>
                     <input type="checkbox" id="vehicle1" name="makeup_service_for_ocassion[]" value="Bridal Make Up">
                     <label for="vehicle1"> Bridal Make Up</label><br>
                     <input type="checkbox" id="vehicle2" name="makeup_service_for_ocassion[]" value="Party Makeup">
                     <label for="vehicle2">Party Makeup</label><br>
                     <input type="checkbox" id="vehicle2" name="makeup_service_for_ocassion[]" value="Regular Party Makeup for Bride's Relatives/Friends">
                     <label for="vehicle2">Regular Party Makeup for Bride's Relatives/Friends</label>
                     <!--<input type="checkbox" id="vehicle2" name="makeup_service_for_ocassion[]" value="Regular Party Makeup for Bride's Relatives/Friends"><br>-->
                  </div>
                  <div class="col-md-12">
                    <label>Which Type of Products do you want to Make Up Artist to use for your make Up?</label><br>
                        <input type="checkbox" id="vehicle1" name="product_type[]" value="No Such Preference">
                        <label for="vehicle1"> No Such Preference</label><br>
                        <input type="checkbox" id="vehicle2" name="product_type[]" value="Require International brands only">
                        <label for="vehicle2">Require International brands only</label><br>
                        <input type="checkbox" id="vehicle2" name="product_type[]" value="Trusted Local Brands will do">
                        <label for="vehicle2">Trusted Local Brands will do</label><br>
                        <input type="checkbox" id="vehicle2" name="product_type[]" value="Mix of both International and trusted local brands">
                        <label for="vehicle2">Mix of both International and trusted local brands</label><br>
                        <input type="text" id="vehicle2" name="product_type[]" placeholder="Others (Please Specify)">
                  </div>
                </div>
                <div class="row">
                   <div class="col-md-6">
                     <label>Do you require additional services? </label><br>
                     <input type="checkbox" id="vehicle1" name="additional_service[]" value="Hairstyling">
                     <label for="vehicle1"> Hairstyling</label><br>
                     <input type="checkbox" id="vehicle2" name="additional_service[]" value="Hair Extensions">
                     <label for="vehicle2">Hair Extensions</label><br>
                     <input type="checkbox" id="vehicle2" name="additional_service[]" value="Eyelashes">
                     <label for="vehicle2">Eyelashes</label><br>
                     <input type="checkbox" id="vehicle1" name="additional_service[]" value="Eye lenses">
                     <label for="vehicle1"> Eye lenses</label><br>
                     <input type="checkbox" id="vehicle2" name="additional_service[]" value="Nail Extensions">
                     <label for="vehicle2">Nail Extensions</label><br>
                     <input type="checkbox" id="vehicle2" name="additional_service[]" value="Garment Draping">
                     <label for="vehicle2">Garment Draping</label><br>
                  </div>
                  <div class="col-md-6">
                     <label>How many years of experience do you prefer the makeup artist to have?</label><br>
                     <input type="checkbox" id="vehicle1" name="experience_prefer[]" value="5 years+">
                     <label for="vehicle1"> 5 years+</label><br>
                     <input type="checkbox" id="vehicle2" name="experience_prefer[]" value="10 years+">
                     <label for="vehicle2">10 years+</label><br>
                     <input type="checkbox" id="vehicle2" name="experience_prefer[]" value="15 years+">
                     <label for="vehicle2">15 years+</label><br>
                     <input type="checkbox" id="vehicle1" name="experience_prefer[]" value="20 years+">
                     <label for="vehicle1"> 20 years+</label><br>
                     <input type="checkbox" id="vehicle2" name="experience_prefer[]" value="30 years+">
                     <label for="vehicle2">30 years+</label><br>
                     
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
<script type="text/javascript">
  var slider = document.getElementById("myRange");
var output = document.getElementById("demo");
output.innerHTML = slider.value;

slider.oninput = function() {
  output.innerHTML = this.value;
}
</script>

<?php $this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); ?>