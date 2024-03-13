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

   /* .city_div{
      display: none;
   } */
</style>
<section class="vendor-decommendation-venue-form">
   <div class="conatiner">
      <div class="row">
         <div class="col-md-2"></div>
         <div class="col-md-8">
            <div class="form-heading">
               <h3>MWP Blissful Venue</h3>
               <p>Discover Your Perfect Wedding Venue</p>
            </div>

            <form class="vendor-service-form" action="<?php echo base_url() ?>Vendorserviceform/addvenuedata/" method="POST" enctype="multipart/form-data">
               <input type="hidden" name="first_name" value="<?php if (!empty($userdata)) {
                                                                  echo  $userdata[0]["first_name"];
                                                               } else {
                                                                  echo "";
                                                               }  ?>" id="priceplan" />
               <input type="hidden" name="uids" value="<?php if (!empty($userdata)) {
                                                            echo  $userdata[0]["userid"];
                                                         } else {
                                                            echo "";
                                                         }  ?>" id="priceplan" />
               <input type="hidden" name="uids" value="<?php if (!empty($userdata)) {
                                                            echo  $userdata[0]["userid"];
                                                         } else {
                                                            echo "";
                                                         }  ?>" id="priceplan" />
               <input type="hidden" name="last_name" value="<?php if (!empty($userdata)) {
                                                               echo  $userdata[0]["last_name"];
                                                            } else {
                                                               echo "";
                                                            }   ?>" id="priceplan" />
               <input type="hidden" name="email_id" value="<?php if (!empty($userdata)) {
                                                               echo  $userdata[0]["email_id"];
                                                            } else {
                                                               echo "";
                                                            }  ?>" id="priceplan" />
               <input type="hidden" name="phone_no" value="<?php if (!empty($userdata)) {
                                                               echo  $userdata[0]["phone_no"];
                                                            } else {
                                                               echo "";
                                                            }    ?>" id="priceplan" />
               <input type="hidden" name="plan_name" value="<?php if (!empty($userdata)) {
                                                               echo  $userdata[0]["plan_name"];
                                                            } else {
                                                               echo "";
                                                            }    ?>" id="priceplan" />

               <input type="hidden" name="plan_price" value="<?php if (!empty($userdata)) {
                                                                  echo  $userdata[0]["plan_price"];
                                                               } else {
                                                                  echo "";
                                                               }    ?>" id="priceplan" />

               <!-- <div class="col-md-6">
            <label>Tell us your role in this magical day:</label>
              <div class="radio_sec">
                <div class="radio1">
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="role" id="groom_radio">
                     <label class="form-check-label" for="groom_radio" value="Bride">
                        Bride
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="role" id="parent_radio">
                     <label class="form-check-label" for="parent_radio" value="Groom">
                        Groom
                     </label>
                  </div>
                  <div class="form-check">
                     <input class="form-check-input" type="radio" name="role" id="bride_radio">
                     <label class="form-check-label" for="bride_radio" value="Parent">
                        Parent
                     </label>
                  </div>
                </div>
              </div>
          </div> -->
               <div class="col-md-12">
                  <p>What is the budget of the complete Wedding ?</p>
                  <select name="amount" class="form-control" id="">
                     <option>Select</option>
                     <option value="Less then 5 lacs">Less then 5 lacs</option>
                     <option value="5 lacs to 10 Lacs">5 lacs to 10 Lacs</option>
                     <option value="10 Lacs to 15 Lacs">10 Lacs to 15 Lacs</option>
                     <option value="15 to 20 Lacs">15 to 20 Lacs</option>
                     <option value="20 to 25 lacs">20 to 25 lacs</option>
                     <option value="25 to 30 Lacs">25 to 30 Lacs</option>
                     <option value="30 to 35 Lacs">30 to 35 Lacs</option>
                     <option value="35 to 40 Lacs">35 to 40 Lacs</option>
                     <option value="40 to 45 Lacs">40 to 45 Lacs</option>
                     <option value="45 to 50 Lacs">45 to 50 Lacs</option>
                     <option value="Above 50 Lacs">Above 50 Lacs</option>
                  </select>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <p>What is the style (culture) of the Wedding ?</p>
                     <select name="culture" class="form-control" id="">
                        <option value="Hindu">Hindu</option>
                        <option value="Marathi">Marathi</option>
                        <option value="Marwari">Marwari</option>
                        <option value="Punjabi">Punjabi</option>
                        <option value="Sikh">Sikh</option>
                        <option value="Christian">Christian</option>
                        <option value="Muslim">Muslim</option>
                        <option value="Gujarati">Gujarati</option>
                        <option value="Kannada">Kannada</option>
                        <option value="Malayali">Malayali</option>
                        <option value="Tamil">Tamil</option>
                        <option value="Telugu">Telugu</option>
                        <option value="Bengali">Bengali</option>
                        <option value="Parsi">Parsi</option>

                        <option value="Others">Others</option>
                     </select>
                  </div>
                  <div class="col-md-6">
                     <p class="form-check-label" for="bride_radio">
                        What is the date of the wedding?
                     </p>
                     <input class="form-control" type="date" name="wedding-date" id="other_radio" placeholder="Please Specify">
                  </div>
               </div>
               <div class="row">
                  <div class="col-md-6">
                     <p>Does the Bride and Groom family belongs to the same city ?</p>
                     <select name="belong-to-same-city" class="form-control" id="selet_city">
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                     </select>
                  </div>
                  <div class="col-md-6">
                     <p>City</p>
                     <input type="text" name="both_city" class="form-control" id="both_city" placeholder="City">
                     <div class="city_div" id="city_div">
                        <input type="text" name="groom-city" class="form-control" id="" placeholder="Groom City">
                        <input type="text" name="brid-city" class="form-control" id="" placeholder="Bride City">
                     </div>
                  </div>
               </div>
               <div class="col-md-12">
                  <p>What is the approximate number of guests at pre wedding functions?</p>
                  <div class="row">
                     <div class="col-md-4">
                        <div class="form-group">
                           <input type="text" name="pre-no-of-guest[]" id="" placeholder="Pre-wedding functions" class="form-control">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <input type="text" name="pre-no-of-guest[]" id="" placeholder="Wedding functions" class="form-control">
                        </div>
                     </div>
                     <div class="col-md-4">
                        <div class="form-group">
                           <input type="text" name="pre-no-of-guest[]" id="" placeholder="Post Wedding functions" class="form-control">
                        </div>
                     </div>
                  </div>
               </div>

               <div class="col-md-12">
                  <p>Will all the Wedding functions take place in the same location?</p>
                  <select name="same-wedding-location" class="form-control" id="">
                     <option>Select</option>
                     <option value="Everything at Home">Everything at Home</option>
                     <option value="Everything at Outdoor Venue">Everything at Outdoor Venue</option>
                     <option value="Some at Home & Some at Outdoor Venue">Some at Home & Some at Outdoor Venue</option>
                     <option value="Multiple Outdoor venues">Multiple Outdoor venues</option>
                  </select>
               </div>
               
               <div class="col-md-12">
                  <label>What is the approximate budget for the venue?</label>
                  <select name="approx_venue_budget" class="form-control" id="myRange">
                     <option>Select</option> 
                     <option value="below 1 lac">below 1lac</option>
                     <option value="1lac - 2lac">1lac - 2lac</option> 
                     <option value="5lac - 10lac">5lac - 10lac</option>
                     <option value="10lac - 20lac">10lac - 20lac</option>
                     <option value="20lac - 50lac">20lac - 50lac</option>
                     <option value="above 50 lac">above 50 lac</option>
                  </select>
               </div>

               <!--<div class="col-md-12">-->
               <!--   <label>What is the approximate budget for the venue?</label>-->
               <!--   <input type="range" min="100000" max="10000000" class="slider" id="myRange" name="approx_venue_budget">-->
               <!--   <p>Value: <span id="demo"></span></p>-->
               <!--</div>-->
               <div class="row">
                  <div class="col-md-12">
                     <p style="margin-top: 20px;">What are the dates for which the venue needs to be booked?</p>
                  </div>
                  <div class="col-6">
                     Start Date: <input type="date" class="form-control" name="start-date" />
                  </div>
                  <div class="col-6">
                     End Date: <input type="date" class="form-control" name="end-date" />
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-13">
                     <p>Which city are you looking to book the venue in(city/state
                        )</p>
                     <input type="text" name="venue-city" class="form-control" id="" placeholder="City">
                  </div>
                  <div class="col-md-12">
                     <p>What type of Venues are you looking for in the venue preferably?</p>
                     <div class="row">

                        <div class="col-md-3">
                           <label for="banquetHalls"><input type="checkbox" id="banquetHalls" name="venue-type[]" value="Banquet Halls"> Banquet Halls</label>
                        </div>

                        <div class="col-md-3">
                           <label for="lawnsFarmhouse"><input type="checkbox" id="lawnsFarmhouse" name="venue-type[]" value="Lawns & Farmhouse"> Lawns & Farmhouse</label>
                        </div>

                        <div class="col-md-3">
                           <label for="resorts"><input type="checkbox" id="resorts" name="venue-type[]" value="Resorts"> Resorts</label>
                        </div>

                        <div class="col-md-3">
                           <label for="hotels"><input type="checkbox" id="hotels" name="venue-type[]" value="Hotels"> Hotels</label>
                        </div>

                        <div class="col-md-3">
                           <label for="destinationFeels"><input type="checkbox" id="destinationFeels" name="venue-type[]" value="Destination Feels"> Destination Feels</label>
                        </div>

                        <div class="col-md-3">
                           <label for="marriageGarden"><input type="checkbox" id="marriageGarden" name="venue-type[]" value="Marriage Garden"> Marriage Garden</label>
                        </div>

                        <div class="col-md-3">
                           <label for="palaceFort"><input type="checkbox" id="palaceFort" name="venue-type[]" value="Palace or Fort"> Palace or Fort</label>
                        </div>

                     </div>
                  </div>
               </div>

               <div class="row">
                  <div class="col-md-12">
                     <p>What all services are compulsorily required at the venue?</p>
                     <div class="row">

                        <div class="col-md-3">
                           <label for="inHouseCatering"><input type="checkbox" id="inHouseCatering" name="venue-service[]" value="In-house catering"> In-house Catering</label>
                        </div>

                        <div class="col-md-3">
                           <label for="inHouseDecorators"><input type="checkbox" id="inHouseDecorators" name="venue-service[]" value="In-house Decorators"> In-house Decorators</label>
                        </div>

                        <div class="col-md-3">
                           <label for="musicAndDJ"><input type="checkbox" id="musicAndDJ" name="venue-service[]" value="Music and DJ"> Music and DJ</label>
                        </div>

                        <div class="col-md-3">
                           <label for="inBuiltStageMandap"><input type="checkbox" id="inBuiltStageMandap" name="venue-service[]" value="In-built Stage/ Mandap"> In-built Stage/ Mandap</label>
                        </div>

                        <div class="col-md-3">
                           <label for="accommodation"><input type="checkbox" id="accommodation" name="venue-service[]" value="Accommodation"> Accommodation</label>
                        </div>

                        <div class="col-md-3">
                           <label for="outsideCatering"><input type="checkbox" id="outsideCatering" name="venue-service[]" value="Outside Catering"> Outside Catering</label>
                        </div>

                        <div class="col-md-3">
                           <label for="outsideDecorators"><input type="checkbox" id="outsideDecorators" name="venue-service[]" value="Outside Decorators"> Outside Decorators</label>
                        </div>

                        <div class="col-md-3">
                           <label for="others"><input type="checkbox" id="others" name="venue-service[]" value="Others"> Others</label>
                        </div>

                     </div>
                  </div>
               </div>

               <div class="col-md-12">
                  <div class="row">
                     <div class="col-md-6">
                        <label>How many Outstation guests (as of now) need to be accommodated at the venue?</label>
                        <input type="range" min="0" max="500" class="slider rangeslider" id="myRange2" name="no_of_guest">

                        <p>Value: <span id="demo2"></span></p>
                     </div>
                     <div class="col-md-6">
                        <label>What is the minimum number of rooms required at the venue?</label>
                        <input type="range" min="0" max="150" class="slider rangeslider" id="myRange1" name="no_of_rooms">

                        <p>Value: <span id="demo1"></span></p>
                     </div>
                  </div>

               </div>


                <!--<div class="row">
                  <div class="col-md-6">
                    Arrival Start Date: <input type="datetime-local" class="form-control" name="arrival-start-date" />
                  </div>
                  <div class="col-md-6">
                  Arrival End Date: <input type="datetime-local" class="form-control" name="arrival-end-date" />
                  </div>
                </div>-->

               <div class="row">
                  <!-- <div class="col-md-6">
                     <p>Are there any specific themes or styles you're envisioning for your wedding?</p>
                     <select name="themes" class="form-control" id="">
                        <option>Select</option>
                        <option value="Elegant and Sophisticated">Elegant and Sophisticated</option>
                        <option value="Rustic and Vintage">Rustic and Vintage</option>
                        <option value="Beachside or Destination">Beachside or Destination</option>
                        <option value="Traditional and Cultural">Traditional and Cultural</option>
                        <option value="Modern and Contemporary">Modern and Contemporary</option>
                        <option value="Others">Others</option>
                     </select>
                  </div> -->
                  <div class="col-md-6">
                     <p>Do you want a venue with multiple event spaces with varied capacity requirements?</p>
                     <select name="capecity" class="form-control" id="">
                        <option>Select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                     </select>
                  </div>
                  <div class="col-md-6">
                     <p>Would you prefer indoor, outdoor, or a combination of both event spaces?</p>
                     <select name="event-spaces" class="form-control" id="">
                        <option>Select</option>
                        <option value="Indoor Only">Indoor Only</option>
                        <option value="Outdoor Only">Outdoor Only</option>
                        <option value="Combination preferred">Combination preferred</option>
                        <option value="Does Not Matter">Does Not Matter</option>
                     </select>
                  </div>
               </div>
               <div class="row">

                  <div class="col-md-12">
                     <p>Are there any specific features or facilities you're looking for in the venue?</p>
                     <div class="radio_sec">
                        <div class="col-md-4">
                           <div class="radio1">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="facility[]" id="groom_radio" value="Alcohol Allowed">
                                 <label class="form-check-label" for="groom_radio">
                                    Alcohol Allowed
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="facility[]" id="parent_radio" value="Bridal/Groom Suite">
                                 <label class="form-check-label" for="parent_radio">
                                    Bridal/Groom Suite
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="facility[]" id="parent_radio" value="Gym Facilities">
                                 <label class="form-check-label" for="parent_radio">
                                    Gym Facilities
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="facility[]" id="parent_radio" value="Décor Lighting Facilities">
                                 <label class="form-check-label" for="parent_radio">
                                    Décor Lighting Facilities

                                 </label>
                              </div>
                           </div>
                        </div>


                        <div class="col-md-4">
                           <div class="radio2">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="facility[]" id="bride_radio" value="Swimming Pool">
                                 <label class="form-check-label" for="bride_radio">
                                    Swimming Pool
                                 </label>
                              </div>

                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="facility[]" id="other_radio" value="In-house Restaurant">
                                 <label class="form-check-label" for="other_radio">
                                    In-house Restaurant
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="facility[]" id="other_radio" value="Bar and Night Club Area">
                                 <label class="form-check-label" for="other_radio">
                                    Bar and Night Club Area
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="facility[]" id="other_radio" value=" Wi-Fi Services">
                                 <label class="form-check-label" for="other_radio">
                                    Wi-Fi Services
                                 </label>
                              </div>
                           </div>
                        </div>

                        <div class="col-md-4">
                           <div class="radio2">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="facility[]" id="bride_radio" value="Ample Parking Space facility">
                                 <label class="form-check-label" for="bride_radio">
                                    Ample Parking Space facility
                                 </label>
                              </div>

                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="facility[]" id="other_radio" value="Valet Parking Facility">
                                 <label class="form-check-label" for="other_radio">
                                    Valet Parking Facility
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="facility[]" id="other_radio" value="Sound System facilities">
                                 <label class="form-check-label" for="other_radio">
                                    Sound System facilities
                                 </label>
                              </div>
                           </div>
                        </div>

                     </div>
                  </div>
                  <div class="col-md-12">
                     <p>Do you need Venue managed transportation services for your guests?</p>
                     <select name="transport-service" class="form-control" id="">
                        <option>Select</option>
                        <option value="Yes">Yes</option>
                        <option value="No">No</option>
                     </select>
                  </div>
               </div>
               <div class="col-12">
                  <button type="submit" class="plnningModalbtn">Submit</button>
               </div>

         </div>




         </form>
      </div>
      <div class="col-md-2"></div>
   </div>
   </div>
</section>
<script>
   document.addEventListener('DOMContentLoaded', function() {
      let selet_city = document.getElementById('selet_city');
      let both_city = document.getElementById('both_city');
      let city_div = document.getElementById('city_div');

      // Initially hide city_div
      city_div.style.display = 'none';

      selet_city.addEventListener('change', function() {
         // Get the selected value
         let selectedValue = selet_city.value;

         // Show or hide divs based on the selected value
         if (selectedValue === 'Yes') {
            both_city.style.display = 'block'; // Show the both_city div
            city_div.style.display = 'none'; // Hide the city_div div
         } else if (selectedValue === 'No') {
            both_city.style.display = 'none'; // Hide the both_city div
            city_div.style.display = 'block'; // Show the city_div div
         }
      });
   });
</script>
<script type="text/javascript">
   var slider = document.getElementById("myRange");
   var output = document.getElementById("demo");
   output.innerHTML = slider.value;

   slider.oninput = function() {
      output.innerHTML = this.value;
   }
</script>

<script type="text/javascript">
   var slider1 = document.getElementById("myRange1");
   var output1 = document.getElementById("demo1");
   output1.innerHTML = slider1.value;

   slider1.oninput = function() {
      // alert(typeof(this.value))
      if (this.value == '150') {
         var sign = '>';
      } else {
         var sign = '';
      }
      // alert(sign)
      output1.innerHTML = sign + this.value;
   }
</script>

<script type="text/javascript">
   var slider2 = document.getElementById("myRange2");
   var output2 = document.getElementById("demo2");
   output2.innerHTML = slider2.value;

   slider2.oninput = function() {
      if (this.value == '500') {
         var sign = '>';
      } else {
         var sign = '';
      }
      output2.innerHTML = sign + this.value;
   }
</script>
<?php $this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); ?>