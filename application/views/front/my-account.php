<?php  $this->load->view('front/layout/head'); ?>
<?php  $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/my-account.css">
<div class="container light-style flex-grow-1 container-p-y profile-container">
   <h4 class="font-weight-bold py-3 mb-4 text-center">Account settings</h4>
   <div class="card overflow-hidden">
      <div class="row no-gutters row-bordered row-border-light">
         <div class="col-md-3 pt-0" style="background-color: #ed404c;">
               <div class="list-group list-group-flush account-settings-links">
                  <a class="list-group-item list-group-item-action active" data-toggle="list" href="#account-general">Profile</a>
                  <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-change-password">Plan Purchase</a>
                  <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Wishlist</a>
                  <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Checklist</a>
                  <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Settings</a>
                  <!-- <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notifications</a> -->
               </div>
         </div>
         <div class="col-md-9">
            <div class="tab-content">
               <div class="tab-pane fade active show" id="account-general">
                  <!-- <div class="card-body media align-items-center">
                     <img src="https://bootdey.com/img/Content/avatar/avatar1.png" alt class="d-block ui-w-80">
                        <div class="media-body ml-4">
                           <label style="color:#dc3545" class="profile-image-label">Upload new photo</label> &nbsp;
                           <input type="file" class="account-settings-fileinput" name="profile-image">
                           <button type="button" class="btn btn-default md-btn-flat">Reset</button>
                           <div class="text-light small mt-1">Allowed JPG, GIF or PNG.</div>
                        </div>
                  </div>
                  <hr class="border-light m-0" style="border-color: #ff142a !important;margin: 9px !important;"> -->
                  <div class="card-body">
                     <div class="form-group">
                        <label class="form-label">First name</label>
                        <input type="text" class="form-control" value=" <?php echo $this->session->userdata('firstname'); ?>" name="first_name">
                     </div>
                     <div class="form-group">
                        <label class="form-label">Last name</label>
                        <input type="text" class="form-control" value=" <?php echo $this->session->userdata('lastname'); ?>" name="last_name">
                     </div>
                     <div class="form-group">
                        <label class="form-label">E-mail</label>
                        <input type="text" class="form-control mb-1" value=" <?php echo  $this->session->userdata('email'); ?>">
                     </div>
                     <div class="form-group">
                        <label class="form-label">Phone No</label>
                        <input type="text" class="form-control" value=" <?php echo  $this->session->userdata('phoneno'); ?>">
                     </div>
                     <div class="form-group">
                        <label class="form-label">Role</label>
                        <select class="form-control">
                           <option value="Groom" <?php if($this->session->userdata('user_role')=="Groom"){ echo "selected"; } ?>>Groom</option>
                           <option value="Bride" <?php if($this->session->userdata('user_role')=="Bride"){ echo "selected" ; } ?>>Bride</option>
                           <option value="Parents" <?php if($this->session->userdata('user_role')=="Parents"){ echo "selected" ; } ?>>Parent</option>
                           <option value="Other" <?php if($this->session->userdata('user_role')=="Other"){ echo "selected" ; } ?>>Other</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label class="form-label">Wedding budget</label>
                        <select name="wedding_budget" class="form-control" id="">
                           <option value="less_than_5"  <?php if($result[0]["wedding_budget"]=="less_than_5"){ echo "selected"; }else{ echo ""; } ?>>Less then 5 lacs</option>
                           <option value="less_than_10" <?php if($result[0]["wedding_budget"]=="less_than_5"){ echo "selected"; }else{ echo ""; } ?>>Less then 10 lacs</option>
                           <option value="less_than_15" <?php if($result[0]["wedding_budget"]=="less_than_5"){ echo "selected"; }else{ echo ""; } ?>>Less then 15 lacs</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label class="form-label">Wedding start date </label>
                        <?php //if(!empty($result[0]["wedding_start_date"])){ echo $result[0]["wedding_start_date"]; }else{ echo ""; } ?>
                              <!-- <input type="text" value="Company Ltd."> -->
                        <input type="text" name="wedding_start_date" class="form-control my_date_picker" id="" value="<?php if(!empty($result[0]["wedding_start_date"])){ echo $result[0]["wedding_start_date"]; }else{ echo ""; } ?>">
                     </div>
                     <div class="form-group">
                        <label class="form-label">Wedding end date date </label>
                           <!-- <input type="text" value="Company Ltd."> -->
                        <input type="text" name="wedding_end_date" class="form-control my_date_picker" id="" value="<?php if(!empty($result[0]["wedding_end_date"])){ echo $result[0]["wedding_end_date"]; }else{ echo ""; } ?>">
                     </div>
                     <div class="form-group">
                        <label class="form-label">Wedding style </label>
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
                     <div class="form-group">
                        <label class="form-label">Wedding city </label>
                        <!-- <input type="text" value="Company Ltd."> -->
                        <input type="text" name="bride_city" class="form-control" id="" placeholder="Bride city" value="<?php if(!empty($result[0]["bride_city"])){ echo $result[0]["bride_city"]; }else{ echo ""; } ?>">

                        <?php if(!empty($result[0]["groom_city"])){ ?>
                           <input type="text" name="groom_city" class="form-control" id="citydiv" placeholder="Groom city" style="display:none" value="<?php if(!empty($result[0]["groom_city"])){ echo $result[0]["groom_city"]; }else{ echo ""; } ?>">
                        <?php   
                           } 
                           else{
                              echo "";
                           }
                        ?>
                     </div>
                     <div class="form-group">
                        <label class="form-label">Pre wedding guest </label>
                        <!-- <input type="text" value="Company Ltd."> -->
                        <input type="text" name="wedding_end_date" class="form-control my_date_picker" id="" value="<?php if(!empty($result[0]["pre_wedding_guest"])){ echo $result[0]["pre_wedding_guest"]; }else{ echo ""; } ?>">
                     </div>
                     <div class="form-group">
                        <label class="form-label">Wedding guest </label>
                        <!-- <input type="text" value="Company Ltd."> -->
                        <input type="text" name="wedding_end_date" class="form-control my_date_picker" id="" value="<?php if(!empty($result[0]["wedding_guest"])){ echo $result[0]["wedding_guest"]; }else{ echo ""; } ?>">
                     </div>
                     <div class="form-group">
                        <label class="form-label">Post wedding guest </label>
                        <!-- <input type="text" value="Company Ltd."> -->
                        <input type="text" name="wedding_end_date" class="form-control my_date_picker" id="" value="<?php if(!empty($result[0]["post_wedding_guest"])){ echo $result[0]["post_wedding_guest"]; }else{ echo ""; } ?>">
                     </div>
                     <div class="form-group">
                       <?php 
                          $weddinglocations = explode(",", $result[0]["samewedding_location"]);
                          foreach ($weddinglocations as $weddinglocation) { 
                                 $wlocation=$weddinglocation;
                          }
                       ?>
                        <label class="form-label">Wedding location </label>
                        <div class="radio_sec">
                           <div class="radio1">
                              <div class="form-check">
                              <input class="form-check-input" type="radio" name="samewedding_location" id="home_location" value="Home" checked="true" <?php if($wlocation=="Home"){ echo "checked"; }else{ echo ""; } ?>>
                              <label class="form-check-label" for="home_location">
                                 Home
                              </label>
                              </div>
                              <div class="form-check">
                              <input class="form-check-input" type="radio" name="samewedding_location" id="outdoor_venue_location" value="outdoor-venue" <?php if($wlocation=="outdoor-venue"){ echo "checked"; }else{ echo ""; } ?>>
                              <label class="form-check-label" for="outdoor_venue_location">
                                 Outdoor Venue
                              </label>
                              </div>
                           </div>
                           <div class="radio2">
                              <div class="form-check">
                              <input class="form-check-input" type="radio" name="samewedding_location" id="home_outdoor_venue_location" value="home-outdoor-venue" <?php if($wlocation=="home-outdoor-venue"){ echo "checked"; }else{ echo ""; } ?>>
                              <label class="form-check-label" for="home_outdoor_venue_location">
                                 Home & Outdoor Venue
                              </label>
                              </div>

                              <div class="form-check">
                              <input class="form-check-input" type="radio" name="samewedding_location" id="multiple_outdoor_venue" value="multiple-outdoor-venue" <?php if($wlocation=="multiple-outdoor-venue"){ echo "checked"; }else{ echo ""; } ?>>
                              <label class="form-check-label" for="multiple_outdoor_venue">
                                 Multiple Outdoor Venue
                              </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="form-label">Wedding theme </label>
                        <?php 
                          $weddingthemes= explode(",", $result[0]["weddinng_theme"]);
                          foreach ($weddingthemes as $weddingtheme) { 
                                 $wtheme=$weddingtheme;
                          }
                       ?>
                        <div class="radio_sec">
                           <div class="radio1">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="weddinng_theme[]" id="romantic_elegant" value="1" <?php if($wtheme=="1"){ echo "checked"; }else{ echo ""; } ?>>
                                 <label class="form-check-label" for="romantic_elegant">
                                    Romantic and elegant
                                 </label>
                              </div>
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="weddinng_theme[]" id="rustic_charming" value="2" <?php if($wtheme=="2"){ echo "checked"; }else{ echo ""; } ?>>
                                 <label class="form-check-label" for="rustic_charming">
                                    Rustic and charming
                                 </label>
                              </div>
                           </div>
                           <div class="radio2">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="weddinng_theme[]" id="glamors_opulent" value="3" <?php if($wtheme=="3"){ echo "checked"; }else{ echo ""; } ?>>
                                 <label class="form-check-label" for="glamors_opulent">
                                    Glamorous and opulent
                                 </label>
                              </div>

                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="weddinng_theme[]" id="minimilistic_modern" value="4" <?php if($wtheme=="4"){ echo "checked"; }else{ echo ""; } ?>>
                                 <label class="form-check-label" for="minimilistic_modern">
                                    Minimalistic and modern
                                 </label>
                              </div>
                           </div>
                           <div class="radio3">
                              <div class="form-check">
                                 <input class="form-check-input" type="checkbox" name="weddinng_theme[]" id="other_wedding_theme" value="5" <?php if($wtheme=="5"){ echo "checked"; }else{ echo ""; } ?>>
                                 <label class="form-check-label" for="other_wedding_theme">
                                    Other
                                 </label>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="form-group">
                        <label class="form-label">Wedding priorities </label>
                        <div class="radio_sec">
                        <?php 
                          $priorities= explode(",", $result[0]["top_three_priorities"]);
                          foreach ($priorities as $priority) { 
                                 $wpriority=$priority;

                                 //echo $wpriority;
                          }
                       ?>
                                 <div class="radio1">
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="venue_priority" value="<?php echo $wpriority; ?>" <?php if($wpriority=="venue"){ echo "checked"; }else{ echo ""; } ?>>
                                          <label class="form-check-label" for="venue_priority">
                                             Venue
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="decor_priority" value="decor" <?php if($wpriority=="decor"){ echo "checked"; }else{ echo ""; } ?>>
                                          <label class="form-check-label" for="decor_priority">
                                          Decor
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="photography_priority"  value="photography" <?php if($wpriority=="photography"){ echo "checked"; }else{ echo ""; } ?>>
                                          <label class="form-check-label" for="photography_priority">
                                             Photography
                                          </label>
                                       </div>
                                       <div class="form-check">
                                          <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="catering_priority" value="catering" <?php if($wpriority=="catering"){ echo "checked"; }else{ echo ""; } ?>>
                                          <label class="form-check-label" for="catering_priority">
                                             Catering
                                          </label>
                                       </div>
                                    </div>
                                 </div>
                                 <div class="radio2">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="florists_priority" value="florists" <?php if($wpriority=="florists"){ echo "checked"; }else{ echo ""; } ?>>
                                       <label class="form-check-label" for="florists_priority" >
                                          Florists
                                       </label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="gift_favors_priority" value="gifts_and_favors" <?php if($wpriority=="gifts_and_favors"){ echo "checked"; }else{ echo ""; } ?>>
                                       <label class="form-check-label" for="gift_favors_priority" >
                                          Gifts and favors
                                       </label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="bridal_wear_priority" value="bridal_wear" <?php if($wpriority=="bridal_wear"){ echo "checked"; }else{ echo ""; } ?>>
                                       <label class="form-check-label" for="bridal_wear_priority">
                                          Bridal Wear
                                       </label>
                                    </div>
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="groom_wear_priority" value="groom_wear" <?php if($wpriority=="groom_wear"){ echo "checked"; }else{ echo ""; } ?>>
                                       <label class="form-check-label" for="groom_wear_priority">
                                       Groom Wear
                                       </label>
                                    </div>
                                 </div>
                                 <div class="radio3">
                                    <div class="form-check">
                                       <input class="form-check-input" type="checkbox" name="top_three_priorities[]" id="make_up_priority" value="makeup" <?php if($result[0]["top_three_priorities"]=="makeup"){ echo "checked"; }else{ echo ""; } ?>>
                                       <label class="form-check-label" for="make_up_priority" >
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
                     </div>
                     <div class="form-group">
                        <label class="form-label preferedlabel">Prefered wedding location </label>
                        <?php 
                          $destinationweddings= explode(",", $result[0]["destination_wedding"]);
                          foreach ($destinationweddings as $destinationwedding) { 
                                 $dwedding=$destinationwedding;
                          }
                       ?>
                        <div class="radio_sec">
                           <div class="radio1">
                              <div class="form-check">
                                 <input class="form-check-input" type="radio" name="destination_wedding" id="destination_wedding_preference" value="yes" checked="true" <?php if($dwedding=="yes"){ echo "checked"; }else{ echo ""; } ?>>
                                 <label class="form-check-label" for="destination_wedding_preference">
                                    I would love Destination Wedding
                                 </label>
                              </div>
                        </div>
                        <div class="radio2">
                           <div class="form-check">
                              <input class="form-check-input" type="radio" name="destination_wedding" id="local_wedding_preference" value="no" <?php if($dwedding=="no"){ echo "checked"; }else{ echo ""; } ?>>
                              <label class="form-check-label" for="local_wedding_preference">
                              I want to do it Locally
                              </label>
                           </div>
                        </div>
                        </div>
                     </div>
                     <div class="mt-3">
                            <a href="<?php echo base_url() ?>User/profile" type="button" class="btn profile-btn" style="background-color: #ff142a;">Updat profile</a>&nbsp;
                     </div>
                  </div>
                  <div class="tab-pane fade" id="account-change-password">
                     <!-- Design and decor plan details -->
                     
                     <div class="card-body pb-2">
                        <section class="h-100 gradient-custom">
                           <div class="container py-5 h-100">
                              <div class="row d-flex justify-content-center align-items-center h-100">
                                 <div class="col-lg-10 col-xl-8">
                                    <div class="card" style="border-radius: 10px;">
                                       <div class="card-header px-4 py-5">
                                          <h5 class="text-muted mb-0">Thanks for purchasing the plan, <span style="color: #ed404c;"><?php echo $this->session->userdata('firstname')." ".$this->session->userdata('lastname'); ?></span>!</h5>
                                       </div>
                                       <div class="card-body p-4">
                                          <div class="d-flex justify-content-between align-items-center mb-4">
                                             <p class="lead fw-normal mb-0" style="color: #ed404c;">Plan details</p>
                                              <!-- <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p> -->
                                          </div>
                                          <div class="card shadow-0 border mb-4">
                                             <div class="card-body">
                                                <div class="row">
                                                   <div class="col-md-6 text-center d-flex justify-content-center align-items-center">
                                                      <p class="text-muted mb-0"><?php if(!empty($decorplan)){ echo $decorplan[0]["decorplanname"]; } ?></p>
                                                   </div>
                                                   <div class="col-md-6 text-center d-flex justify-content-center align-items-center">
                                                      <p class="text-muted mb-0 small">INR <?php if(!empty($decorplan)){ echo $decorplan[0]["decorplanprice"]; } ?></p>
                                                   </div>
                                                </div>
                                                <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                                <div class="row d-flex align-items-center">
                                                   <div class="col-md-4">
                                                      <p class="text-muted mb-0 small payment-label">Payment status</p>
                                                   </div>
                                                   <div class="col-md-8">
                                                      <?php if(!empty($decorplan[0]["payment_status"]=="PAYMENT_SUCCESS")){  ?>
                                                      <div class="progress" style="height: 6px; border-radius: 16px;">
                                                         <div class="progress-bar" role="progressbar"
                                                         style="width: 100%; border-radius: 16px; background-color: #28a745;" aria-valuenow="65"
                                                         aria-valuemin="95" aria-valuemax="100">
                                                         </div>
                                                      </div>
                                                      <?php }
                                                      else{ ?>
                                                      <div class="progress" style="height: 6px; border-radius: 16px;">
                                                         <div class="progress-bar" role="progressbar"
                                                             style="width: 65%; border-radius: 16px; background-color: #ed404c;" aria-valuenow="65"
                                                            aria-valuemin="95" aria-valuemax="100">
                                                         </div>
                                                      </div>
                                                      <?php }?>
                                                      <div class="d-flex justify-content-around mb-1">
                                                         <?php if(!empty($decorplan[0]["payment_status"]=="PAYMENT_SUCCESS")){  ?>

                                                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Payment success</p>
                                                            <?php }
                                                           else{  ?>
                                                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Payment  failed</p>
                                                      </div>
                                                      <?php } ?>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex justify-content-between pt-2">
                                             <p class="fw-bold mb-0 detail-label" style="font-weight: 600;">Order Details</p>
                                             <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span> </p>
                                          </div>
                                          <div class="d-flex justify-content-between pt-2">
                                             <p class="text-muted mb-0 detail-label">Plan Amount :</p>
                                             <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span> INR <?php if(!empty($decorplan)){ echo $decorplan[0]["plan_price"]; } ?> </p>
                                          </div>
                                          <div class="d-flex justify-content-between pt-2">
                                             <p class="text-muted mb-0 detail-label">Transaction Id :</p>
                                             <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["merchant_transaction_id"]; } ?></p>
                                          </div>

                                       </div>
                                       <div class="card-body p-4" id="other-plan-details" style="display:none;">
                                          <div class="card shadow-0 border mb-4 other-detail-card">
                                             <div class="card-body">
                                                
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Email id :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["email_id"]; } ?> </p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Phone no :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["phoneno"]; } ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Decoration budget :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["decoration_budget"]; } ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Venue name :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["venue_name"]; } ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Decoration ocassion :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["decoration_occassion"]; } ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Venue type :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["venue_type"]; } ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">City :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["city"]; } ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Decoration type :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["decoration_type"]; } ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Theme color :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["theme_color"]; } ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Outfit color :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["outfit_color"]; } ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Colour blend:</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["colour_blend"]; } ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Reference image:</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span> <img src="<?php echo base_url() ?>uploads/decorvenueimage/<?php if(!empty($decorplan)){ echo $decorplan[0]["venue_image"]; } ?>" width="50px" height="50px"></p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Comment:</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($decorplan)){ echo $decorplan[0]["decorcomment"]; } ?></p>
                                                </div>             


                                             </div>
                                          </div>
                                          

                                       </div>
                                       <div class="card-footer border-0 px-4 py-5" style="background-color: #ed404c; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                          <div class="btn-footer">
                                             <a href="javascript:void(0)" class="btn btn-small" style="background-color:#fff;color:#ed404c" onclick="showotherdetails()">View details</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                     <!-- Vendor recommendation plan details -->
                     <div class="card-body pb-2">
                        <section class="h-100 gradient-custom">
                           <div class="container py-5 h-100">
                              <div class="row d-flex justify-content-center align-items-center h-100">
                                 <div class="col-lg-10 col-xl-8">
                                    <div class="card" style="border-radius: 10px;">
                                       <div class="card-header px-4 py-5">
                                          <h5 class="text-muted mb-0">Thanks for purchasing the plan, <span style="color: #ed404c;"><?php echo $this->session->userdata('firstname')." ".$this->session->userdata('lastname'); ?></span>!</h5>
                                       </div>
                                       <div class="card-body p-4">
                                          <div class="d-flex justify-content-between align-items-center mb-4">
                                             <p class="lead fw-normal mb-0" style="color: #ed404c;">Plan details</p>
                                              <!-- <p class="small text-muted mb-0">Receipt Voucher : 1KAU9-84UIL</p> -->
                                          </div>
                                          <div class="card shadow-0 border mb-4">
                                             <div class="card-body">
                                                <div class="row">
                                                   <div class="col-md-6 text-center d-flex justify-content-center align-items-center">
                                                      <p class="text-muted mb-0"><?php if(!empty($recommendplan)){
                                                           if($recommendplan[0]["plan_name"]=="solo_spark")
                                                         
                                                            echo "Solo Spark"; 
                                                         
                                                         }
                                                         elseif($recommendplan[0]["plan_name"]=="trio_fusion")
                                                         {
                                                            echo "Trio Fusion";
                                                         } 
                                                         elseif($recommendplan[0]["plan_name"]=="grand_symphony")
                                                         {
                                                            echo "Grand Symphony";
                                                         } 
                                                         elseif($recommendplan[0]["plan_name"]=="quintessential")
                                                         {
                                                            echo "Quintessential";
                                                         } 
                                                         
                                                         
                                                         ?></p>
                                                   </div>
                                                   <div class="col-md-6 text-center d-flex justify-content-center align-items-center">
                                                      <p class="text-muted mb-0 small">INR <?php if(!empty($recommendplan)){ echo $recommendplan[0]["amount"]; } ?></p>
                                                   </div>
                                                </div>
                                                <hr class="mb-4" style="background-color: #e0e0e0; opacity: 1;">
                                                <div class="row d-flex align-items-center">
                                                   <div class="col-md-4">
                                                      <p class="text-muted mb-0 small payment-label">Payment status</p>
                                                   </div>
                                                   <div class="col-md-8">
                                                      <?php if(!empty($recommendplan[0]["payment_status"]=="PAYMENT_SUCCESS")){  ?>
                                                      <div class="progress" style="height: 6px; border-radius: 16px;">
                                                         <div class="progress-bar" role="progressbar"
                                                         style="width: 100%; border-radius: 16px; background-color: #28a745;" aria-valuenow="65"
                                                         aria-valuemin="95" aria-valuemax="100">
                                                         </div>
                                                      </div>
                                                      <?php }
                                                      else{ ?>
                                                      <div class="progress" style="height: 6px; border-radius: 16px;">
                                                         <div class="progress-bar" role="progressbar"
                                                             style="width: 65%; border-radius: 16px; background-color: #ed404c;" aria-valuenow="65"
                                                            aria-valuemin="95" aria-valuemax="100">
                                                         </div>
                                                      </div>
                                                      <?php }?>
                                                      <div class="d-flex justify-content-around mb-1">
                                                         <?php if(!empty($recommendplan[0]["payment_status"]=="PAYMENT_SUCCESS")){  ?>

                                                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Payment success</p>
                                                            <?php }
                                                           else{  ?>
                                                            <p class="text-muted mt-1 mb-0 small ms-xl-5">Payment  failed</p>
                                                      </div>
                                                      <?php } ?>
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                          <div class="d-flex justify-content-between pt-2">
                                             <p class="fw-bold mb-0 detail-label" style="font-weight: 600;">Order Details</p>
                                             <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span> </p>
                                          </div>
                                          <div class="d-flex justify-content-between pt-2">
                                             <p class="text-muted mb-0 detail-label">Plan Amount :</p>
                                             <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span> INR <?php if(!empty($recommendplan)){ echo $recommendplan[0]["plan_price"]; } ?> </p>
                                          </div>
                                          <div class="d-flex justify-content-between pt-2">
                                             <p class="text-muted mb-0 detail-label">Transaction Id :</p>
                                             <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan)){ echo $recommendplan[0]["merchant_transaction_id"]; } ?></p>
                                          </div>

                                       </div>
                                       <div class="card-body p-4" id="other-plan-details-recommend" style="display:none;">
                                          <div class="card shadow-0 border mb-4 other-detail-card">
                                             <div class="card-body">
                                                
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Email id :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan)){ echo $recommendplan[0]["email_id"]; } ?> </p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Phone no :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan)){ echo $recommendplan[0]["phone_no"]; } ?></p>
                                                </div>
                                                <div class="d-flex justify-content-between pt-2">
                                                   <p class="text-muted mb-0 detail-label">Category selected :</p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan) )
                                                      { 
                                                         if($recommendplan[0]["venuecat"]=="viral_venue"){
                                                              echo "MWP Viral Venues" ;
                                                         }
                                                        
                                                      } ?>
                                                   </p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan) )
                                                      { 
                                                         if($recommendplan[0]["bridalcat"]=="bridal-boutique"){
                                                              echo "MWP Bridal Boutiques" ;
                                                         }
                                                        
                                                      } ?>
                                                   </p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan) )
                                                      { 
                                                         if($recommendplan[0]["groomcat"]=="groom-gear"){
                                                              echo "MWP Groom Gear" ;
                                                         }
                                                        
                                                      } ?>
                                                   </p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan) )
                                                      { 
                                                         if($recommendplan[0]["photographcat"]=="perfect-photograph"){
                                                              echo "MWP Perfect Photographers" ;
                                                         }
                                                        
                                                      } ?>
                                                   </p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan) )
                                                      { 
                                                         if($recommendplan[0]["muacat"]=="mua"){
                                                              echo "MWP Mesmerizing MUAs" ;
                                                         }
                                                        
                                                      } ?>
                                                   </p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan) )
                                                      { 
                                                         if($recommendplan[0]["mehendicat"]=="mehendi-magic"){
                                                              echo "MWP Mehendi Magic" ;
                                                         }
                                                        
                                                      } ?>
                                                   </p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan) )
                                                      { 
                                                         if($recommendplan[0]["decorcat"]=="decor-delight"){
                                                              echo "MWP Decor Delight" ;
                                                         }
                                                        
                                                      } ?>
                                                   </p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan) )
                                                      { 
                                                         if($recommendplan[0]["giftcat"]=="gift-galore"){
                                                              echo "MWP Gifts Galore" ;
                                                         }
                                                        
                                                      } ?>
                                                   </p>

                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                       <div class="card-footer border-0 px-4 py-5" style="background-color: #ed404c; border-bottom-left-radius: 10px; border-bottom-right-radius: 10px;">
                                          <div class="btn-footer">
                                             <a href="javascript:void(0)" class="btn btn-small" style="background-color:#fff;color:#ed404c" onclick="showotherdetailsvendor()">View details</a>
                                          </div>
                                       </div>
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </section>
                     </div>
                  </div>
                  <div class="tab-pane fade" id="account-info">
                        <div class="card-body pb-2">
                           <div class="form-group">
                              <label class="form-label">Bio</label>
                              <textarea class="form-control" rows="5">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris nunc arcu, dignissim sit amet sollicitudin iaculis, vehicula id urna. Sed luctus urna nunc. Donec fermentum, magna sit amet rutrum pretium, turpis dolor molestie diam, ut lacinia diam risus eleifend sapien. Curabitur ac nibh nulla. Maecenas nec augue placerat, viverra tellus non, pulvinar risus.</textarea>
                           </div>
                           <div class="form-group">
                              <label class="form-label">Birthday</label>
                              <input type="text" class="form-control" value="May 3, 1995">
                           </div>
                           <div class="form-group">
                              <label class="form-label">Country</label>
                              <select class="custom-select">
                                 <option>USA</option>
                                 <option selected>Canada</option>
                                 <option>UK</option>
                                 <option>Germany</option>
                                 <option>France</option>
                              </select>
                           </div>
                        </div>
                        <hr class="border-light m-0">
                        <div class="card-body pb-2">
                           <h6 class="mb-4">Contacts</h6>
                           <div class="form-group">
                              <label class="form-label">Phone</label>
                              <input type="text" class="form-control" value="+0 (123) 456 7891">
                           </div>
                           <div class="form-group">
                              <label class="form-label">Website</label>
                              <input type="text" class="form-control" value>
                           </div>
                        </div>
                  </div>
                  <div class="tab-pane fade" id="account-social-links">
                        <div class="card-body pb-2">
                           <div class="form-group">
                              <label class="form-label">Twitter</label>
                              <input type="text" class="form-control" value="https://twitter.com/user">
                           </div>
                           <div class="form-group">
                              <label class="form-label">Facebook</label>
                              <input type="text" class="form-control" value="https://www.facebook.com/user">
                           </div>
                           <div class="form-group">
                              <label class="form-label">Google+</label>
                              <input type="text" class="form-control" value>
                           </div>
                           <div class="form-group">
                              <label class="form-label">LinkedIn</label>
                              <input type="text" class="form-control" value>
                           </div>
                           <div class="form-group">
                              <label class="form-label">Instagram</label>
                              <input type="text" class="form-control" value="https://www.instagram.com/user">
                           </div>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="account-connections">
                        <div class="card-body">
                           <button type="button" class="btn btn-twitter">Connect to <strong>Twitter</strong></button>
                        </div>
                        <hr class="border-light m-0">
                        <div class="card-body">
                           <h5 class="mb-2">
                              <a href="javascript:void(0)" class="float-right text-muted text-tiny"><i class="ion ion-md-close"></i> Remove</a>
                              <i class="ion ion-logo-google text-google"></i>
                              You are connected to Google:
                           </h5>
                           <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="620c0f031a15070e0e220f030b0e4c010d0f">[email&#160;protected]</a>
                        </div>
                        <hr class="border-light m-0">
                        <div class="card-body">
                           <button type="button" class="btn btn-facebook">Connect to <strong>Facebook</strong></button>
                        </div>
                        <hr class="border-light m-0">
                        <div class="card-body">
                           <button type="button" class="btn btn-instagram">Connect to <strong>Instagram</strong></button>
                        </div>
                     </div>
                     <div class="tab-pane fade" id="account-notifications">
                        <div class="card-body pb-2">
                           <h6 class="mb-4">Activity</h6>
                           <div class="form-group">
                              <label class="switcher">
                              <input type="checkbox" class="switcher-input" checked>
                              <span class="switcher-indicator">
                              <span class="switcher-yes"></span>
                              <span class="switcher-no"></span>
                              </span>
                              <span class="switcher-label">Email me when someone comments on my article</span>
                              </label>
                           </div>
                           <div class="form-group">
                              <label class="switcher">
                              <input type="checkbox" class="switcher-input" checked>
                              <span class="switcher-indicator">
                              <span class="switcher-yes"></span>
                              <span class="switcher-no"></span>
                              </span>
                              <span class="switcher-label">Email me when someone answers on my forum thread</span>
                              </label>
                           </div>
                           <div class="form-group">
                              <label class="switcher">
                              <input type="checkbox" class="switcher-input">
                              <span class="switcher-indicator">
                              <span class="switcher-yes"></span>
                              <span class="switcher-no"></span>
                              </span>
                              <span class="switcher-label">Email me when someone follows me</span>
                              </label>
                           </div>
                        </div>
                        <hr class="border-light m-0">
                        <div class="card-body pb-2">
                           <h6 class="mb-4">Application</h6>
                           <div class="form-group">
                              <label class="switcher">
                              <input type="checkbox" class="switcher-input" checked>
                              <span class="switcher-indicator">
                              <span class="switcher-yes"></span>
                              <span class="switcher-no"></span>
                              </span>
                              <span class="switcher-label">News and announcements</span>
                              </label>
                           </div>
                           <div class="form-group">
                              <label class="switcher">
                              <input type="checkbox" class="switcher-input">
                              <span class="switcher-indicator">
                              <span class="switcher-yes"></span>
                              <span class="switcher-no"></span>
                              </span>
                              <span class="switcher-label">Weekly product updates</span>
                              </label>
                           </div>
                           <div class="form-group">
                              <label class="switcher">
                              <input type="checkbox" class="switcher-input" checked>
                              <span class="switcher-indicator">
                              <span class="switcher-yes"></span>
                              <span class="switcher-no"></span>
                              </span>
                              <span class="switcher-label">Weekly blog digest</span>
                              </label>
                           </div>
                        </div>
                     </div>
               </div>
            </div>
               
         </div>
      </div>
   </div>
</div>


<?php  $this->load->view('front/layout/footer'); ?>
<?php  $this->load->view('front/layout/script'); ?>
<script>
   function showotherdetails() {
  var htmlShow = document.getElementById("other-plan-details");
  if (htmlShow.style.display === "none") {
    htmlShow.style.display = "block";
  } else {
    htmlShow.style.display = "none";
  }
}
</script>
<script>
   function showotherdetailsvendor() {
  var htmlShow = document.getElementById("other-plan-details-recommend");
  if (htmlShow.style.display === "none") {
    htmlShow.style.display = "block";
  } else {
    htmlShow.style.display = "none";
  }
}
</script>