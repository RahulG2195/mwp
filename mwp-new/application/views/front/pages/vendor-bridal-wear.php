<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/WPmodel.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/vendor-recommendation-form.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/responsive.css' ?>">
<style>
.radio_sec {
    display: block!important;
}
.form-check-input{
    position:relative!important;
}
.form-control {
    margin: 10px 20px!important;
}
label{
    margin-left: 20px!important;
}
input[type="checkbox"] {
	margin-left: 20px!important;
}
</style>
<section class="vendor-decommendation-venue-form">
	<div class="conatiner">
		<div class="row">
			<div class="col-md-2"></div>
			  <div class="col-md-8">
      			<div class="form-heading">
      				<h3>MWP Bridal Enchantment</h3>
      					<p>Craft Your Bridal Look with Unmatched Elegance</p>
      			</div>
      			<form class="vendor-service-form" action="<?php echo base_url(); ?>Vendorserviceform/addbridalvendor" method="POST" enctype="multipart/form-data" style="padding: 60px;">
                <input type="hidden"  name="first_name" value="<?php if(!empty($userdata)){ echo  $userdata[0]["first_name"]; }else{ echo ""; }  ?>" id="priceplan" />
                <input type="hidden"  name="uids" value="<?php if(!empty($userdata)){ echo  $userdata[0]["userid"]; }else{ echo ""; }  ?>" id="priceplan" />
                <input type="hidden"  name="last_name" value="<?php if(!empty($userdata)){ echo  $userdata[0]["last_name"]; }else{ echo ""; }   ?>" id="priceplan"/>
                <input type="hidden"  name="email_id"  value="<?php  if(!empty($userdata)){ echo  $userdata[0]["email_id"]; }else{ echo ""; }  ?>" id="priceplan"/>
                <input type="hidden"  name="phone_no"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["phone_no"]; }else{ echo ""; }    ?>" id="priceplan"/>
                <input type="hidden"  name="plan_name"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["plan_name"]; }else{ echo ""; }    ?>" id="priceplan"/>
                <input type="hidden"  name="plan_price"  value="<?php if(!empty($userdata)){ echo  $userdata[0]["plan_price"]; }else{ echo ""; }    ?>" id="priceplan"/>

      	        <div class="row">
                    <div class="col-md-12">
                        <label>What style of bridal wear do you prefer?</label>
                        <div class="radio_sec">
                          <div class="radio1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="prefer_bridal_wear[]" id="groom_radio" value="Traditional elegance">
                                <label class="form-check-label" for="groom_radio">
                                     Traditional elegance
                                </label>
                            </div>
                            <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="prefer_bridal_wear[]" id="parent_radio" value="Modern chic">
                                   <label class="form-check-label" for="parent_radio" value="Groom">
                                      Modern chic
                                   </label>
                            </div>
                          </div>
                          <div class="radio2">
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="prefer_bridal_wear[]" id="bride_radio" value="Bohemian flair">
                                 <label class="form-check-label" for="bride_radio" value="Parent">
                                    Bohemian flair
                                 </label>
                            </div>
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="prefer_bridal_wear[]" id="bride_radio" value="Vintage charm">
                                 <label class="form-check-label" for="bride_radio" value="Parent">
                                    Vintage charm
                                 </label>
                            </div>
                            <!-- <div class="form-check"> -->
                                 <input class="form-control" type="text" name="prefer_bridal_wear[]" id="bride_radio" placeholder="Something else Please tell us!">
                            <!-- </div> -->
                          </div>
                        </div>    
                    </div> 
                </div>

                <div class="row">
                  <div class="col-md-12">
                      <p>Do you have specific color preferences for your bridal wear?</p>
                      <input type="text" id="lname" class="form-control ven-bridal-class" placeholder="If Yes, Please mention your color preference here" name="color_preference">
                  </div>
                  <!-- <div class="col-md-12">
                    <p>Tell us about your body type. Are you:</p>
                    <div class="radio_sec">
                          <div class="radio1">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" name="body_type" id="groom_radio" value="Slim and slender">
                                <label class="form-check-label" for="groom_radio">
                                     Slim and slender

                                </label>
                            </div>
                            <div class="form-check">
                                   <input class="form-check-input" type="radio" name="body_type" id="parent_radio" value="Curvy and Fabulous">
                                   <label class="form-check-label" for="parent_radio">
                                      Curvy and Fabulous
                                   </label>
                            </div>
                          </div>
                          <div class="radio2">
                            <div class="form-check">
                                 <input class="form-check-input" type="radio" name="body_type" id="bride_radio" value="Petite and charming">
                                 <label class="form-check-label" for="bride_radio">
                                    Petite and charming
                                 </label>
                            </div>
                            <div class="form-check">
                                 <input class="form-check-input" type="radio" name="body_type" id="bride_radio">
                                 <label class="form-check-label" for="bride_radio" value="Tall and elegant">
                                   Tall and elegant
                                 </label>
                            </div>
                             <input class="form-check-input bridal-input-text form-control" type="text" name="body_type" id="other_radio" placeholder=" Describe your unique body type">
                            <br>
                          </div>
                          <div class="radio3">
                         </div>
                    </div> 
                  </div> -->
                </div>
                <div class="row">
                 <!--  <div class="col-md-12" style="margin-top: 40px;">
                      <p>Any particular embellishments you love? Choose one:</p>
                      <div class="radio_sec">
                          <div class="radio1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="embellishments" id="groom_radio">
                                <label class="form-check-label" for="groom_radio" value="Bride">
                                     Slim and slender

                                </label>
                            </div>
                            <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="embellishments" id="parent_radio">
                                   <label class="form-check-label" for="parent_radio" value="Groom">
                                      Curvy and Fabulous
                                   </label>
                            </div>
                          </div>
                          <div class="radio2">
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments" id="bride_radio">
                                 <label class="form-check-label" for="bride_radio" value="Parent">
                                    Petite and charming
                                 </label>
                            </div>
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="decoration_ocassion" id="bride_radio">
                                 <label class="form-check-label" for="bride_radio" value="Parent">
                                   Tall and elegant
                                 </label>
                            </div>
                            <div class="form-check">

                                 <input class="form-check-input bridal-input-text" type="text" name="decoration_ocassion" id="other_radio" placeholder=" Describe your unique body type">
                                  <label class="form-check-label" for="bride_radio" value="Parent">
                                   Describe your unique body type:

                                 </label> 
                            </div>     
                          </div>
                      </div> 
                  </div> -->
                  <div class="col-md-12">
                    <p>Any particular embellishments that you want in your Bridal wear outfit? </p>
                    <div class="radio_sec">
                          <div class="radio1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="embellishments[]" id="groom_radio" value="Gota Patti">
                                <label class="form-check-label" for="groom_radio">
                                    Gota Patti

                                </label>
                            </div>
                            <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="embellishments[]" id="parent_radio" value="Mirror work">
                                   <label class="form-check-label" for="parent_radio">
                                     Mirror work
                                   </label>
                            </div>
                            <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="embellishments[]" id="parent_radio" value="Benarasi">  
                                   <label class="form-check-label" for="parent_radio">
                                     Benarasi
                                   </label>
                            </div>
                            <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="embellishments[]" id="parent_radio" value="Thread work">
                                   <label class="form-check-label" for="parent_radio">
                                     Thread work
                                   </label>
                            </div>

                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments[]" id="bride_radio" value="Muqaish">
                                 <label class="form-check-label" for="bride_radio">
                                 Muqaish
                                 </label>
                            </div>

                            
                          </div>
                          <div class="radio2">
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments[]" id="bride_radio" value="Brocade">
                                 <label class="form-check-label" for="bride_radio">
                                   Brocade
                                 </label>
                            </div>
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments[]" id="bride_radio" value="Embroidery">
                                 <label class="form-check-label" for="bride_radio">
                                  Embroidery
                                 </label>
                            </div>
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments[]" id="bride_radio" value="Kanjivaram">
                                 <label class="form-check-label" for="bride_radio">
                                 Kanjivaram
                                 </label>
                            </div>

                             <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments[]" id="bride_radio" value="Zari">
                                 <label class="form-check-label" for="bride_radio" >
                                  Zari
                                 </label>
                            </div>

                             <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments[]" id="bride_radio" value="Sequins">
                                 <label class="form-check-label" for="bride_radio">
                                  Sequins
                                 </label>
                            </div>
                             <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments[]" id="bride_radio" value="Kamdani">
                                 <label class="form-check-label" for="bride_radio">
                                 Kamdani
                                 </label>
                            </div>
                          </div>
                          <div class="radio2">
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments[]" id="bride_radio" value="Pearls">
                                 <label class="form-check-label" for="bride_radio">
                                  Pearls
                                 </label>
                            </div>
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments[]" id="bride_radio" value="Kardana">
                                 <label class="form-check-label" for="bride_radio">
                                 Kardana
                                 </label>
                            </div>
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments[]" id="bride_radio" value="Chikankari">
                                 <label class="form-check-label" for="bride_radio">
                                 Chikankari
                                 </label>
                            </div>

                             <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments[]" id="bride_radio" value="Nakshi">
                                 <label class="form-check-label" for="bride_radio" >
                                  Nakshi
                                 </label>
                            </div>

                             <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="embellishments[]" id="bride_radio" value="Dabka">
                                 <label class="form-check-label" for="bride_radio">
                                 Dabka
                                 </label>
                            </div>
                            <div class="form-check">
                                 <input class="form-check-input bridal-input-text" type="text" name="embellishments[]" id="other_radio" placeholder=" Others">
                                 <!-- <label class="form-check-label" for="bride_radio" value="Parent">
                                   Describe your unique body type
                                 </label> -->
                            </div>     
                          </div>
                    </div> 
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <p>Is there a cultural influence you'd like to incorporate, If Yes, Please select</p>
                      <select name="cultural_influence" class="form-control" id="">
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
                    <div class="col-md-6">
                        <p>Are there any favorite designers that inspire you, If yes, Please mention them.</p>
                        <input type="text" name="favorite_designer" class="form-control" id="">
                    </div>
                  </div>
                  <div class="row">
                    <!-- <div class="col-md-12">
                       <p>Are there any favorite designers that inspire you?</p>
                       <input type="text" name="designer-inspired-by-you" class="form-control">
                    </div> -->
                    <div class="col-md-12">
                       <p>What's your budget range for your bridal wear? (Looking for something affordable/ Willing to invest a bit more/ Ready for a luxurious touch)</p>
                       <select name="bridal_budget_range" class="form-control" id="">
                        <option value="">Select Option</option>
                        <option value="Looking for something affordable">Looking for something affordable</option>
                        <option value="Willing to invest a bit more">Willing to invest a bit more</option>
                        <option value="Ready for a luxurious touch">Ready for a luxurious touch</option>
                       </select>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-md-12">
                       <p>What's your desired price range for bridal wear?</p>
                    </div>
                    <div class="col-md-6">
                      
                       <p>From</p>
                       <input type="text" name="desired_bridal_budget_from" class="form-control">
                    </div>
                    <div class="col-md-6">
                       <p>To</p>
                       <input type="text" name="desired_bridal_budget_range_to" class="form-control">
                    </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                        <p>Would you prefer a boutique experience or a retail store?</p>
                        <select name="retail_store" class="form-control" id="" placeholder="City">
                          <option>Select</option>
                          <option value="Boutique store only">Boutique store only</option>
                          <option value="Retail Stores only"> Retail Stores only</option>
                          <option value="No such preference">No such preference</option>
                        </select>
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                      <p>For which occasions do you need bridal wear?</p>
                      <div class="radio_sec">
                          <div class="radio1">
                            <div class="form-check">
                                <input class="form-check-input" type="checkbox" name="bridal-wear-ocassion[]" id="groom_radio" value="Wedding">
                                <label class="form-check-label" for="groom_radio" >
                                    Wedding
                                </label>
                            </div>
                            <div class="form-check">
                                   <input class="form-check-input" type="checkbox" name="bridal-wear-ocassion[]" id="parent_radio" value="Reception">
                                   <label class="form-check-label" for="parent_radio">
                                     Reception
                                   </label>
                            </div>
                          </div>
                          <div class="radio2">
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="bridal-wear-ocassion[]" id="bride_radio" value="Sangeet">
                                 <label class="form-check-label" for="bride_radio">
                                   Sangeet
                                 </label>
                            </div>
                            <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="bridal-wear-ocassion[]" id="bride_radio" value="Mehendi">
                                 <label class="form-check-label" for="bride_radio">
                                  Mehendi
                                 </label>
                            </div>
                             <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="bridal-wear-ocassion[]" id="bride_radio" value="Cocktail">
                                 <label class="form-check-label" for="bride_radio" >
                                 Cocktail
                                 </label>
                            </div>
                            <div class="form-check">
                                 <input class="form-check-input bridal-input-text" type="text" name="bridal-wear-ocassion[]" id="other_radio" placeholder="Tell us more">
                                 <!-- <label class="form-check-label" for="bride_radio" value="Parent">
                                   Describe your unique body type:

                                 </label> -->
                            </div>     
                          </div>
                      </div> 
                  </div>
                  <div class="row">
                        <div class="col-md-12">
                          <p>Any preferred fabrics for your bridal wear?</p>
                          <div class="radio_sec">
                              <div class="radio1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="groom_radio" value="Cotton">
                                    <label class="form-check-label" for="groom_radio">
                                       Cotton
                                    </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="parent_radio" value="Silk">
                                       <label class="form-check-label" for="parent_radio">
                                         Silk
                                       </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="parent_radio" value="Satin">
                                       <label class="form-check-label" for="parent_radio">
                                         Satin
                                       </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="parent_radio" value="Raw Silk">
                                       <label class="form-check-label" for="parent_radio" >
                                         Raw Silk
                                       </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="parent_radio" value="Net fabric">
                                       <label class="form-check-label" for="parent_radio">
                                         Net fabric
                                       </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="parent_radio" value="Velvet">
                                       <label class="form-check-label" for="parent_radio">
                                         Velvet
                                       </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="parent_radio" value="Gaji">
                                       <label class="form-check-label" for="parent_radio" >
                                         Gaji
                                       </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="parent_radio" value="Crepe">
                                       <label class="form-check-label" for="parent_radio">
                                         Crepe
                                       </label>
                                </div>
                               

                              </div>
                              <div class="radio2">
                                 <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="parent_radio" value="Pure Georgette">
                                       <label class="form-check-label" for="parent_radio">
                                         Pure Georgette
                                       </label>
                                </div>
                                <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="bride_radio" value="Georgette">
                                     <label class="form-check-label" for="bride_radio">
                                       Georgette
                                     </label>
                                </div>
                                <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="bride_radio" value="Jacquard">
                                     <label class="form-check-label" for="bride_radio" >
                                      Jacquard
                                     </label>
                                </div>
                                <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="bride_radio" value="Organza">
                                     <label class="form-check-label" for="bride_radio">
                                    Organza
                                     </label>
                                </div>
                                <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="bride_radio" value="Chanderi">
                                     <label class="form-check-label" for="bride_radio">
                                    Chanderi
                                     </label>
                                </div>
                                <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="bride_radio" value="Faux Georgette">
                                     <label class="form-check-label" for="bride_radio" >
                                    Faux Georgette
                                     </label>
                                </div>
                                <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="bride_radio" value="Viscose">
                                     <label class="form-check-label" for="bride_radio">
                                    Viscose 
                                     </label>
                                </div>   
                                <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="bride_radio" value="Tussar Silk">
                                     <label class="form-check-label" for="bride_radio">
                                    Tussar Silk 
                                     </label>
                                </div>
                                <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="bride_radio" value="Ghicha Silk">
                                     <label class="form-check-label" for="bride_radio">
                                    Ghicha Silk 
                                     </label>
                                </div>
                                <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="bride_radio" value="Tissue">
                                     <label class="form-check-label" for="bride_radio">
                                    Tissue 
                                     </label>
                                </div>
                                <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="bride_radio" value="Modal">
                                     <label class="form-check-label" for="bride_radio">
                                    Modal 
                                     </label>
                                </div>
                                <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="bride_radio" value="Mulmul">
                                     <label class="form-check-label" for="bride_radio">
                                    Mulmul 
                                     </label>
                                </div>
                                <div class="form-check">
                                     <input class="form-check-input" type="checkbox" name="bridal-wear-fabrics[]" id="bride_radio" value="Rayon">
                                     <label class="form-check-label" for="bride_radio">
                                    Rayon 
                                     </label>
                                </div>
                              </div>
                          </div> 
                         </div>
                  </div>
                  <div class="row">
                      <div class="col-md-12">
                          <p>What types of products are you looking for?</p>
                          <div class="radio_sec">
                              <div class="radio1">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="products-looking-for[]" id="groom_radio" value="Bridal Lehenga">
                                    <label class="form-check-label" for="groom_radio">
                                      Bridal Lehenga
                                    </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="products-looking-for[]" id="parent_radio" value="Bridal Saree">
                                       <label class="form-check-label" for="parent_radio" >
                                         Bridal Saree
                                       </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="products-looking-for[]" id="parent_radio" value="Cocktail Dresses">
                                       <label class="form-check-label" for="parent_radio" >
                                         Cocktail Dresses
                                       </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="products-looking-for[]" id="parent_radio" value="Indo-western Dresses">
                                       <label class="form-check-label" for="parent_radio" >
                                        Indo-western Dresses
                                       </label>
                                </div>
                                
                              </div>
                              <div class="radio2">
                                 <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="products-looking-for[]" id="parent_radio" value="Bridal Suits">
                                       <label class="form-check-label" for="parent_radio">
                                          Bridal Suits
                                       </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="products-looking-for[]" id="parent_radio" value="Gowns">
                                       <label class="form-check-label" for="parent_radio" >
                                         Gowns
                                       </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="products-looking-for[]" id="parent_radio" value="Crepe">
                                       <label class="form-check-label" for="parent_radio">
                                         Crepe
                                       </label>
                                </div>
                                <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="products-looking-for[]" id="parent_radio" value="Dress fabrics">
                                       <label class="form-check-label" for="parent_radio">
                                          Dress fabrics
                                       </label>
                                </div>
                                <div class="form-check">
                                     <input class="form-check-input bridal-input-text" type="text" name="products-looking-for[]" id="other_radio" placeholder="Others">
                                     <!-- <label class="form-check-label" for="bride_radio" value="Parent">
                                       Describe your unique body type:

                                     </label> -->
                                </div>     
                              </div>
                          </div> 
                         </div>
                  </div>
                  <div class="row">
                      <!-- <div class="col-md-12">
                          <label>What design styles resonate with you?</label>
                          <input type="text" name="design-style-resonate" class="form-control">
                      </div> -->
                      <div class="col-md-12">
                          <label>Do you want your bridal wear to be customizable?</label>
                          <select class="form-control" name="customize-birdal-wear">
                            <option>Select</option>
                            <option value="yes">Yes</option>
                            <option value="no">No</option>
                          </select>
                          
                      </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <label>How many days do you want the dress to be ready after confirming the order?</label>
                        <select class="form-control" name="dress-ready-to-be">
                            <option>Select</option>
                            <option value="1week">Within 1 Week</option>
                            <option value="7-15">7-15 days</option>
                            <option value="15-30">15-30 Days</option>
                            <option value="30-45">30-45 days</option>
                            <option value="45-60">45-60 days</option>
                            <option value="more than 60">More than 60 days</option>
                        </select>
                    </div>
                  </div>

                   <div class="row">
                    <div class="col-md-12">
                        <label>Are you interested in any additional services?</label><br>
                         <input type="checkbox" id="vehicle1" name="additional_service[]" value="Styling assistance">
                         <label for="vehicle1"> Styling assistance</label><br>
                         <input type="checkbox" id="vehicle2" name="additional_service[]" value="Trial availability">
                         <label for="vehicle2"> Trial availability</label><br>
                         <input type="checkbox" id="vehicle3" name="additional_service[]" value="Alteration options">
                         <label for="vehicle3"> Alteration options</label><br>
                         <input type="checkbox" id="vehicle1" name="additional_service[]" value="Alteration options">
                         <label for="vehicle1"> Rental choices</label><br>
                         <input type="checkbox" id="vehicle2" name="additional_service[]" value=" Rental choices">
                         <label for="vehicle2"> Bridal accessories</label><br>
                         <input type="checkbox" id="vehicle3" name="additional_service[]" value="Bridal accessories">
                         <label for="vehicle3"> International shipping
                         </label><br>
                         <!-- <input type="checkbox" id="vehicle3" name="additional_service[]" value="International shipping">
                         <br> -->
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-12">
                        <label>Any other details or preferences you'd like to share with us?</label><br>
                         <input type="text" id="vehicle1" name="other_detail" class="form-control">
                         
                    </div>
                  </div>
                  <div class="row">
                    <div class="col-md-12">
                        <label>Are you open to a slight budget increase for the perfect outfit?</label><br>
                        <select class="form-control" name="open_to_slight_budget_increase">
                          <option value=''>Select</option>
                          <option value="yes">Yes</option>
                          <option value="no">No</option>
                        </select>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                      <label>Please upload any inspiration photos you may have for the Bridal wear.</label>
                      <input type="file" name="inspiration_photo" class="form-control" id="">
                      </div>
                    </div>
                    <div class="col-md-6">
                    <div class="form-group">
                      <label>In which city are you looking to shop for Bridal wear?</label>
                      <input type="text" name="shop_location" class="form-control" id="">
                      </div>
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