<?php  $this->load->view('front/layout/head'); ?>
<?php  $this->load->view('front/layout/header'); ?>
        <form  class="registersubmit" action="<?php echo base_url() ?>User/updateprofile" method="POST" autocomplete="off">
            <div class="step left_form" data-step="1"> 
               <div class="container">
                  <div class="row">
                    <div class="col-md-6">
                      <!-- <div class="heading">
                             <img src="<?php echo base_url() . IMAGES ?>small_logo.png" class="img-fluid small_logo" alt="">
                             <h3>Welcome to <br><span class="text_border">My Wedding palette</span></h3>
                      </div>
                          
                      <p>Your celebration journey begins with us, and we're here to make it extraordinary.</p> -->
                        <?php 
                           if(!empty($this->session->userdata('profileupdatesucess')))
                              {
                                 echo '<span class="text-sucess">'.$this->session->userdata('profileupdatesucess').'</span>';
                                 $this->session->unset_userdata('profileupdatesucess');
                              }
                        ?>
                      <form class="registersubmit" action="<?php echo base_url() ?>User/updateprofile" method="POST" autocomplete="off">
                          <div class="row">
                               <div class="col-12">
                                  <h4 class="mx-auto text-center" style="color: #ff4558; text-transform: uppercase; margin-top: 15px; font-weight: 700;">Update profile</h4>
                               </div>

                               <!-- <input type="hidden" name="redirect_url" id="redirect_url33" value="<?php echo current_url()?>">
                               <input type="hidden" name="reg_data" id="service_redirect22" value=""> -->
                               <input type="hidden" name="login_id" id="service_redirect22" value="<?php echo $this->session->userdata('userid'); ?>">
                               <div class="col-md-6">
                                  <input type="text" id="createfname" class="form-control registerInput" placeholder="First Name" name="first_name" value="<?php echo $this->session->userdata('firstname'); ?>"> 
                                  <p id="error_fname"></p>
                               </div>
                               <div class="col-md-6">
                                  <input type="text" id="createlname" class="form-control registerInput" placeholder="Last Name" name="last_name" value="<?php echo $this->session->userdata('lastname'); ?>">
                                  <p id="error_lname"></p>
                               </div>
                              <!-- <div class="col-md-6">
                                  <input type="text" id="createuser_name" class="form-control registerInput" placeholder="User Name/ Email id" name="username" required>
                                   <p id="error_user_name"></p>
                               </div>-->
                               <div class="col-md-6">
                                  <input type="text" id="createphoneno" class="form-control registerInput" placeholder="Phone Number" name="phone_no" value="<?php echo $this->session->userdata('phoneno'); ?>">
                                   <p id="error_phoneno"></p>
                               </div>
                               <div class="col-md-6">
                                 <input type="email" id="createregsisteremailid" class="form-control" placeholder="Enter Email Id" name="email_id"   required="required" class="regsisteremailid" value="<?php echo $this->session->userdata('email'); ?>">
                                   <p id="error_regsisteremailid"></p>
                                   <small class="text-help" id="userNameErrorMsg"></small>
                               </div>
                               <div class="col-12">
                                  <p>Tell us your role in this magical day</p>
                                  <div class="radio_sec">
                                     <label for="gender">I'm:</label>
                                     <div class="radio1">
                                        <div class="form-check">
                                           <input class="form-check-input user_role" type="radio" name="user_role"  value="Groom"  id="user_role_1" <?php if($this->session->userdata('user_role')=="Groom"){ echo "checked=true"; }else{echo " ";} ?> required>
                                           <label class="form-check-label" for="user_role_1">
                                              Groom
                                           </label>
                                        </div>
                                        <div class="form-check">
                                           <input class="form-check-input user_role" type="radio" name="user_role"  value="Parents" id="user_role_2" <?php if($this->session->userdata('user_role')=="Parent"){ echo "checked"; }else{echo " ";} ?> required>
                                           <label class="form-check-label" for="user_role_2">
                                              Parent
                                           </label>
                                        </div>
                                     </div>
                                     <div class="radio2">
                                        <div class="form-check">
                                           <input class="form-check-input user_role" type="radio" name="user_role"  value="Bride" id="user_role_3" <?php if($this->session->userdata('user_role')=="Bride"){ echo "checked"; }else{echo " ";} ?> required>
                                           <label class="form-check-label" for="user_role_3">
                                              Bride
                                           </label>
                                        </div>

                                        <div class="form-check">
                                           <input class="form-check-input user_role" type="radio" name="user_role"  value="other" id="user_role_4" <?php if($this->session->userdata('user_role')=="Other"){ echo "checked"; }else{echo " ";} ?> required>
                                           <label class="form-check-label" for="user_role_4">
                                              Other
                                           </label>
                                        </div>
                                     </div>
                                    
                                  </div>
                               </div>
                               <div class="col-12">
                                    <p>What is the budget of the complete Wedding ?</p>
                                    <select name="wedding_budget" class="form-control" id="">
                                        <option value="less_than_5"  <?php if($result[0]["wedding_budget"]=="less_than_5"){ echo "selected"; }else{ echo ""; } ?>>Less then 5 lacs</option>
                                        <option value="less_than_10" <?php if($result[0]["wedding_budget"]=="less_than_5"){ echo "selected"; }else{ echo ""; } ?>>Less then 10 lacs</option>
                                        <option value="less_than_15" <?php if($result[0]["wedding_budget"]=="less_than_5"){ echo "selected"; }else{ echo ""; } ?>>Less then 15 lacs</option>
                                    </select>
                                </div>
                                <div class="col-12">
                                    <p>Please enter start date and end date of wedding</p>
                                     <input type="text" name="wedding_start_date" class="form-control my_date_picker" id="" value="<?php if(!empty($result[0]["wedding_start_date"])){ echo $result[0]["wedding_start_date"]; }else{ echo ""; } ?>">
                                </div>
                                <div class="col-12">
                                    <p>To</p>
                                    <input type="text" name="wedding_end_date" class="form-control my_date_picker" id="" value="<?php if(!empty($result[0]["wedding_end_date"])){ echo $result[0]["wedding_end_date"]; }else{ echo ""; } ?>">
                                </div>
                                <div class="col-12">
                                    <p>What is the style (culture) of the Wedding ?</p>
                                    <select name="wedding_style" class="form-control" id="">
                                        <option value="marathi" <?php if($result[0]["wedding_style"]=="marathi"){ echo "selected"; }else{ echo ""; } ?>>Marathi</option>
                                        <option value="marwari" <?php if($result[0]["wedding_style"]=="marwari"){ echo "selected"; }else{ echo ""; } ?>>Marwari</option>
                                        <option value="punjabi" <?php if($result[0]["wedding_style"]=="punjabi"){ echo "selected"; }else{ echo ""; } ?>>Punjabi</option>
                                        <option value="sikh"    <?php if($result[0]["wedding_style"]=="sikh"){ echo "selected"; }else{ echo ""; } ?>>Sikh</option>
                                        <option value="christian" <?php if($result[0]["wedding_style"]=="christian"){ echo "selected"; }else{ echo ""; } ?>>Christian</option>
                                        <option value="muslim" <?php if($result[0]["wedding_style"]=="muslim"){ echo "selected"; }else{ echo ""; } ?>>Muslim</option>
                                        <option value="gujarati" <?php if($result[0]["wedding_style"]=="gujarati"){ echo "selected"; }else{ echo ""; } ?>>Gujarati</option>
                                        <option value="kannada" <?php if($result[0]["wedding_style"]=="kannada"){ echo "selected"; }else{ echo ""; } ?>>Kannada</option>
                                        <option value="malayali" <?php if($result[0]["wedding_style"]=="malayali"){ echo "selected"; }else{ echo ""; } ?>>Malayali</option>
                                        <option value="tamil"    <?php if($result[0]["wedding_style"]=="tamil"){ echo "selected"; }else{ echo ""; } ?>>Tamil</option>
                                        <option value="telugu" <?php if($result[0]["wedding_style"]=="telugu"){ echo "selected"; }else{ echo ""; } ?>>Telugu</option>
                                        <option value="bengali" <?php if($result[0]["wedding_style"]=="bengali"){ echo "selected"; }else{ echo ""; } ?>>Bengali</option>
                                        <option value="parsi" <?php if($result[0]["wedding_style"]=="parsi"){ echo "selected"; }else{ echo ""; } ?>>Parsi</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label>Does the Bride and Groom family belongs to the same city ?</label>
                                    <select name="same_city" class="form-control" id="samecityid">
                                        <option value="yes" <?php if($result[0]["same_city"]=="yes"){ echo "selected"; }else{ echo ""; } ?>>Yes</option>
                                        <option value="no" <?php  if($result[0]["same_city"]=="no"){ echo "selected"; }else{ echo ""; } ?>>No</option>
                                    </select>
                                </div>
                                <div class="col-md-12">
                                    <label for="">City</label>
                                    <input type="text" name="bride_city" class="form-control" id="" placeholder="City" value="<?php if(!empty($result[0]["bride_city"])){ echo $result[0]["bride_city"]; }else{ echo ""; } ?>">
                                    <input type="text" name="groom_city" class="form-control" id="citydiv" placeholder="City" style="display:none" value="<?php if(!empty($result[0]["groom_city"])){ echo $result[0]["groom_city"]; }else{ echo ""; } ?>">
                                </div>

                                <div class="col-12">
                                    <p>What is the approximate number of guest's in different wedding functions ?</p>
                                    <div class="row">
                                        <div class="col-md-4">
                                            <label for="">Pre Wedding</label>
                                            <input type="text" name="pre_wedding_guest" class="form-control" id="pre-wedding-guest" placeholder="No of guest" value="<?php if(!empty($result[0]["pre_wedding_guest"])){ echo $result[0]["pre_wedding_guest"]; }else{ echo ""; } ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Wedding</label>
                                            <input type="text" name="wedding_guest" class="form-control" id="wedding-guest" placeholder="No of guest" value="<?php if(!empty($result[0]["wedding_guest"])){ echo $result[0]["wedding_guest"]; }else{ echo ""; } ?>">
                                        </div>
                                        <div class="col-md-4">
                                            <label for="">Post Wedding</label>
                                            <input type="text" name="post_wedding_guest" class="form-control" id="post-wedding-guest" placeholder="No of guest" value="<?php if(!empty($result[0]["post_wedding_guest"])){ echo $result[0]["post_wedding_guest"]; }else{ echo ""; } ?>">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-12">
                                    <p>Will all the Wedding functions take place in the same location ?</p>
                                    <div class="radio_sec">
                                        <div class="radio1">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="samewedding_location" id="home_location" value="Home" checked="true" <?php if($result[0]["samewedding_location"]=="Home"){ echo "checked"; }else{ echo ""; } ?>>
                                            <label class="form-check-label" for="home_location">
                                                Home
                                            </label>
                                            </div>
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="samewedding_location" id="outdoor_venue_location" value="outdoor-venue" <?php if($result[0]["samewedding_location"]=="outdoor-venue"){ echo "checked"; }else{ echo ""; } ?>>
                                            <label class="form-check-label" for="outdoor_venue_location">
                                                Outdoor Venue
                                            </label>
                                            </div>
                                        </div>
                                        <div class="radio2">
                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="samewedding_location" id="home_outdoor_venue_location" value="home-outdoor-venue" <?php if($result[0]["samewedding_location"]=="home-outdoor-venue"){ echo "checked"; }else{ echo ""; } ?>>
                                            <label class="form-check-label" for="home_outdoor_venue_location">
                                                Home & Outdoor Venue
                                            </label>
                                            </div>

                                            <div class="form-check">
                                            <input class="form-check-input" type="radio" name="samewedding_location" id="multiple_outdoor_venue" value="multiple-outdoor-venue" <?php if($result[0]["samewedding_location"]=="multiple-outdoor-venue"){ echo "checked"; }else{ echo ""; } ?>>
                                            <label class="form-check-label" for="multiple_outdoor_venue">
                                                Multiple Outdoor Venue
                                            </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                 <div class="col-12">
                              <p>What's the overall theme or vibe you envision for your wedding?</p>
                           </div>
                           <div class="col-md-4">
                              <div class="radio1">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="weddinng_theme[]" id="romantic_elegant" value="1" <?php if($result[0]["weddinng_theme"]=="1"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="romantic_elegant">
                                       Romantic and elegant
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="weddinng_theme[]" id="rustic_charming" value="2" <?php if($result[0]["weddinng_theme"]=="2"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="rustic_charming">
                                       Rustic and charming
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="radio2">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="weddinng_theme[]" id="glamors_opulent" value="3" <?php if($result[0]["weddinng_theme"]=="3"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="glamors_opulent">
                                       Glamorous and opulent
                                    </label>
                                 </div>

                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="weddinng_theme[]" id="minimilistic_modern" value="4" <?php if($result[0]["weddinng_theme"]=="4"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="minimilistic_modern">
                                       Minimalistic and modern
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="radio3">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="weddinng_theme[]" id="other_wedding_theme" value="5" <?php if($result[0]["weddinng_theme"]=="5"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="other_wedding_theme">
                                       Other
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-12">
                              <p>What are your top three priorities for your wedding?</p>
                           </div>
                           <div class="col-md-4 form-group">
                              <div class="radio1">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="venue_priority" value="venue" <?php if($result[0]["top_three_priorities"]=="venue"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="venue_priority">
                                       Venue
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="decor_priority" value="decor" <?php if($result[0]["top_three_priorities"]=="decor"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="decor_priority">
                                      Decor
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="photography_priority"  value="photography" <?php if($result[0]["top_three_priorities"]=="photography"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="photography_priority">
                                       Photography
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="catering_priority" value="catering" <?php if($result[0]["top_three_priorities"]=="catering"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="catering_priority">
                                       Catering
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="radio2">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="florists_priority" value="florists" <?php if($result[0]["top_three_priorities"]=="florists"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="florists_priority" >
                                       Florists
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="gift_favors_priority" value="gifts_and_favors" <?php if($result[0]["top_three_priorities"]=="gifts_and_favors"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="gift_favors_priority" >
                                       Gifts and favors
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="bridal_wear_priority" value="bridal_wear" <?php if($result[0]["top_three_priorities"]=="bridal_wear"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="bridal_wear_priority">
                                       Bridal Wear
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="groom_wear_priority" value="groom_wear" <?php if($result[0]["top_three_priorities"]=="groom_wear"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="groom_wear_priority">
                                      Groom Wear
                                    </label>
                                 </div>
                              </div>
                           </div>
                           <div class="col-md-4">
                              <div class="radio3">
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="make_up_priority" <?php if($result[0]["top_three_priorities"]=="makeup"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="make_up_priority" value="makeup">
                                      Makeup
                                    </label>
                                 </div>
                                 <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="mehendi_artist_priority" <?php if($result[0]["top_three_priorities"]=="mehendi_artists"){ echo "checked"; }else{ echo ""; } ?>>
                                    <label class="form-check-label" for="mehendi_artist_priority" value="mehendi_artists">
                                       Mehendi Artists
                                    </label>
                                 </div>
                                
                              </div>
                           </div>
                           <div class="col-12">
                              <p>Are you open to destination weddings, or do you prefer your wedding to be held locally?</p>
                              <div class="radio_sec">
                                 <div class="radio1">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="destination_wedding" id="destination_wedding_preference" value="yes" checked="true" <?php if($result[0]["destination_wedding"]=="yes"){ echo "checked"; }else{ echo ""; } ?>>
                                       <label class="form-check-label" for="destination_wedding_preference">
                                       I would love Destination Wedding
                                       </label>
                                    </div>
                                 </div>
                                 <div class="radio2">
                                    <div class="form-check">
                                       <input class="form-check-input" type="radio" name="destination_wedding" id="local_wedding_preference" value="no" <?php if($result[0]["destination_wedding"]=="no"){ echo "checked"; }else{ echo ""; } ?>>
                                       <label class="form-check-label" for="local_wedding_preference">
                                       I want to do it Locally
                                       </label>
                                    </div>
                                 </div>
                              </div>
                           </div>
                           <div class="button-li col-12" style="display: inline-flex; margin: auto">
                           <button type="submit" class="btn loginsubmit" id="create_ac" style="display: block;" >Save Changes</button>
                           </div>
                           </br>
                          </div>
                      </form>

                    </div>
                    <div class="col-md-6 login-desk">
                      <img src="<?php echo base_url() . IMAGES ?>form_img.png" class="img-fluid" alt="">
                    </div>
                  </div>
               </div>
            </div> 
        </form>
           
<?php $this->load->view('front/layout/footer'); ?>
<?php $this->load->view('front/layout/script'); ?>
        