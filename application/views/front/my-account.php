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
                  <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-info">Checklist</a>
                  <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-social-links">Wishlist</a>
                  <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-connections">Change Password</a>
                  <!-- <a class="list-group-item list-group-item-action" data-toggle="list" href="#account-notifications">Notifications</a> -->
               </div>
         </div>
         <div class="col-md-9">
               <?php 
                    // error display
                  //   if(!empty($this->session->flashdata('pwd_change'))){
                  //       echo '<span class="text-sucess">'.$this->session->flashdata('pwd_change').'</span>';
                  //       $this->session->unset_flashdata('pwd_change');
                  //   }
                  //   else{
                  //        echo " ";
                  //   }
                ?>
            <div class="tab-content">
               <div class="tab-pane fade active show" id="account-general">
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
                     <?php// if(!empty()) ?>
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
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span>
                                                   <?php if(!empty($recommendplan) )
                                                      { 
                                                         if($recommendplan[0]["venuecat"]=="viral_venue"){
                                                              echo "MWP Viral Venues" ;
                                                         }
                                                        
                                                      } ?>
                                                   </p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span>
                                                     <?php if(!empty($recommendplan) )
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
                                                         if($recommendplan[0]["mehendicat"]=="mehendi-magic")
                                                         {
                                                              echo "MWP Mehendi Magic" ;
                                                         }
                                                        
                                                      } ?>
                                                   </p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan) )
                                                      { 
                                                         if($recommendplan[0]["decorcat"]=="decor-delight")
                                                         {
                                                              echo "MWP Decor Delight" ;
                                                         }
                                                        
                                                      } ?>
                                                   </p>
                                                   <p class="text-muted mb-0 value-label"><span class="fw-bold me-4"></span><?php if(!empty($recommendplan) )
                                                      { 
                                                         if($recommendplan[0]["giftcat"]=="gift-galore")
                                                         {
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
                        <section  style="background-color: #ffdceb;">
                           <div class="container   checklist-container">
                              <div class="row d-flex  h-100">
                                 <div class="col col-lg-12 col-xl-6">
                                    <div class="card rounded-3 checklist-card">
                                       <div class="card-body p-4">
                                          <p class="mb-2 my-accnt-wedding-checklist-head"><span class="me-2">Wedding Timeline & Milestones</span> </p>
                                          <form action="<?php echo base_url() ?>Weddingchecklist/submitchecklist" method="POST" id="weddingchecklist">
                                             <input type="hidden" name="user_id" value="<?php if(isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] = true){ echo  $this->session->userdata['userid']; }else{ echo "";  } ?>">    
                                             <ul class="list-group rounded-0">
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="wedding_outfit" id="wedding_outfit" value="<?php if (!empty($checklistdata[0]["wedding_outfit"])) {
                                                   echo $checklistdata[0]["wedding_outfit"] ; }else{ echo "1";} ?>" <?php if (!empty($checklistdata[0]["wedding_outfit"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="wedding_outfit">Explore and Save Trending Wedding Outfit Ideas</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="wedding_budget" id="wedding_budget" value="<?php if (!empty($checklistdata[0]["wedding_budget"])) {
                                                   echo $checklistdata[0]["wedding_budget"] ; }else{ echo "2";} ?>" <?php if (!empty($checklistdata[0]["wedding_budget"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="wedding_budget">Establish Your Wedding Budget </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="explore_venue" id="explore_venue" value="<?php if (!empty($checklistdata[0]["explore_venue"])) {
                                                   echo $checklistdata[0]["explore_venue"] ; }else{ echo "3";} ?>" <?php if (!empty($checklistdata[0]["explore_venue"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="explore_venue">Explore & Visit Venue Options</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="research_planner" id="research_planner" value="<?php if (!empty($checklistdata[0]["research_planner"])) {
                                                   echo $checklistdata[0]["research_planner"] ; }else{ echo "4";} ?>" <?php if (!empty($checklistdata[0]["research_planner"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="research_planner">Research Wedding Planners</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="create_guest_list" id="create_guest_list" value="<?php if (!empty($checklistdata[0]["create_guest_list"])) {
                                                   echo $checklistdata[0]["create_guest_list"] ; }else{ echo "5";} ?>" <?php if (!empty($checklistdata[0]["create_guest_list"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="create_guest_list">Create a Tentative Guest List </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="book_dream_venue" id="book_dream_venue" value="<?php if (!empty($checklistdata[0]["book_dream_venue"])) {
                                                   echo $checklistdata[0]["book_dream_venue"] ; }else{ echo "6";} ?>" <?php if (!empty($checklistdata[0]["book_dream_venue"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="book_dream_venue">Book Your Dream Venues</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="looking_caterers" id="looking_caterers" value="<?php if (!empty($checklistdata[0]["looking_caterers"])) {
                                                   echo $checklistdata[0]["looking_caterers"] ; }else{ echo "7";} ?>" <?php if (!empty($checklistdata[0]["looking_caterers"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="looking_caterers">Start Looking out for Caterers</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="search_photographer" id="search_photographer" value="<?php if (!empty($checklistdata[0]["search_photographer"])) {
                                                   echo $checklistdata[0]["search_photographer"] ; }else{ echo "8";} ?>" <?php if (!empty($checklistdata[0]["search_photographer"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="search_photographer">Research and Book Photographer </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="brows_decor_ideas" id="brows_decor_ideas" value="<?php if (!empty($checklistdata[0]["brows_decor_ideas"])) {
                                                   echo $checklistdata[0]["brows_decor_ideas"] ; }else{ echo "9";} ?>" <?php if (!empty($checklistdata[0]["brows_decor_ideas"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="brows_decor_ideas">Browse and save décor ideas</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="explore_trending_design" id="explore_trending_design" value="<?php if (!empty($checklistdata[0]["explore_trending_design"])) {
                                                   echo $checklistdata[0]["explore_trending_design"] ; }else{ echo "10";} ?>" <?php if (!empty($checklistdata[0]["explore_trending_design"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="explore_trending_design">Explore trending Make-up and Mehndi artists and designs</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="find_h_destination" id="find_h_destination" value="<?php if (!empty($checklistdata[0]["find_h_destination"])) {
                                                   echo $checklistdata[0]["find_h_destination"] ; }else{ echo "11";} ?>" <?php if (!empty($checklistdata[0]["find_h_destination"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="find_h_destination">Find out and start shortlisting Honeymoon destinations </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="book_artist" id="book_artist" value="<?php if (!empty($checklistdata[0]["find_h_destination"])) {
                                                   echo $checklistdata[0]["find_h_destination"] ; }else{ echo "12";} ?>" <?php if (!empty($checklistdata[0]["find_h_destination"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="book_artist">Book the Make-up and Mehndi artist</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="brows_templates" id="brows_templates" value="<?php if (!empty($checklistdata[0]["brows_templates"])) {
                                                   echo $checklistdata[0]["brows_templates"] ; }else{ echo "13";} ?>" <?php if (!empty($checklistdata[0]["brows_templates"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="brows_templates">Browse Invitation ideas & templates</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="hire_decorator" id="hire_decorator" value="<?php if (!empty($checklistdata[0]["hire_decorator"])) {
                                                   echo $checklistdata[0]["hire_decorator"] ; }else{ echo "14";} ?>" <?php if (!empty($checklistdata[0]["hire_decorator"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="hire_decorator">Hire a decorator </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="order_ivitation" id="order_ivitation" value="<?php if (!empty($checklistdata[0]["order_ivitation"])) {
                                                   echo $checklistdata[0]["order_ivitation"] ; }else{ echo "15";} ?>" <?php if (!empty($checklistdata[0]["order_ivitation"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="order_ivitation">Order invitations </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="book_hotels" id="book_hotels" value="<?php if (!empty($checklistdata[0]["book_hotels"])) {
                                                   echo $checklistdata[0]["book_hotels"] ; }else{ echo "16";} ?>" <?php if (!empty($checklistdata[0]["book_hotels"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="book_hotels">Book flights and hotels for the honeymoon</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="research_bridal_groom_wear" id="research_bridal_groom_wear" value="<?php if (!empty($checklistdata[0]["research_bridal_groom_wear"])) {
                                                   echo $checklistdata[0]["research_bridal_groom_wear"] ; }else{ echo "17";} ?>" <?php if (!empty($checklistdata[0]["research_bridal_groom_wear"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="research_bridal_groom_wear">Research Bridal and Groom wear stores</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="book_dj" id="book_dj" value="<?php if (!empty($checklistdata[0]["book_dj"])) {
                                                   echo $checklistdata[0]["book_dj"] ; }else{ echo "18";} ?>" <?php if (!empty($checklistdata[0]["book_dj"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="groom_radio">Book DJ and Choreographer if required </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="order_outfit" id="order_outfit" value="<?php if (!empty($checklistdata[0]["order_outfit"])) {
                                                   echo $checklistdata[0]["order_outfit"] ; }else{ echo "19";} ?>" <?php if (!empty($checklistdata[0]["order_outfit"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="order_outfit">Finalise and Order outfits along with the accessories</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="explore_latest_design" id="explore_latest_design" value="<?php if (!empty($checklistdata[0]["explore_latest_design"])) {
                                                   echo $checklistdata[0]["explore_latest_design"] ; }else{ echo "20";} ?>" <?php if (!empty($checklistdata[0]["explore_latest_design"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="explore_latest_design">Explore the latest designs and Buy Jewelry</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="prewedding_shoot" id="prewedding_shoot" value="<?php if (!empty($checklistdata[0]["prewedding_shoot"])) {
                                                   echo $checklistdata[0]["prewedding_shoot"] ; }else{ echo "21";} ?>" <?php if (!empty($checklistdata[0]["prewedding_shoot"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="prewedding_shoot">Have your pre-wedding shoot</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="send_date_invites" id="send_date_invites" value="<?php if (!empty($checklistdata[0]["send_date_invites"])) {
                                                   echo $checklistdata[0]["send_date_invites"] ; }else{ echo "22";} ?>" <?php if (!empty($checklistdata[0]["send_date_invites"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="send_date_invites">Send out save the dates Invites</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="brows_song" id="brows_song" value="<?php if (!empty($checklistdata[0]["brows_song"])) {
                                                   echo $checklistdata[0]["brows_song"] ; }else{ echo "23";} ?>" <?php if (!empty($checklistdata[0]["brows_song"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="brows_song">Browse and Shortlist bridal entry songs and ideas </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="book_priest" id="book_priest" value="<?php if (!empty($checklistdata[0]["book_priest"])) {
                                                   echo $checklistdata[0]["book_priest"] ; }else{ echo "24";} ?>" <?php if (!empty($checklistdata[0]["book_priest"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="book_priest">Book your priest</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="buy_sweets" id="buy_sweets" value="<?php if (!empty($checklistdata[0]["buy_sweets"])) {
                                                   echo $checklistdata[0]["buy_sweets"] ; }else{ echo "25";} ?>" <?php if (!empty($checklistdata[0]["buy_sweets"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="buy_sweets">Buy sweets / favors to distribute on Mehndi</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="site_visit" id="site_visit" value="<?php if (!empty($checklistdata[0]["site_visit"])) {
                                                   echo $checklistdata[0]["site_visit"] ; }else{ echo "26";} ?>" <?php if (!empty($checklistdata[0]["site_visit"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="site_visit">Site visit with the decorator </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="start_dance_practice" id="start_dance_practice" value="<?php if (!empty($checklistdata[0]["start_dance_practice"])) {
                                                   echo $checklistdata[0]["start_dance_practice"] ; }else{ echo "27";} ?>" <?php if (!empty($checklistdata[0]["start_dance_practice"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="start_dance_practice">Start dance practices</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="distribute_invitation" id="distribute_invitation" value="<?php if (!empty($checklistdata[0]["distribute_invitation"])) {
                                                   echo $checklistdata[0]["distribute_invitation"] ; }else{ echo "28";} ?>" <?php if (!empty($checklistdata[0]["distribute_invitation"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="distribute_invitation">Start distributing invitations</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="food_taste" id="food_taste" value="<?php if (!empty($checklistdata[0]["food_taste"])) {
                                                   echo $checklistdata[0]["food_taste"] ; }else{ echo "29";} ?>" <?php if (!empty($checklistdata[0]["food_taste"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="food_taste">Have a food tasting </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="brows_hairstyle" id="brows_hairstyle" value="<?php if (!empty($checklistdata[0]["brows_hairstyle"])) {
                                                   echo $checklistdata[0]["brows_hairstyle"] ; }else{ echo "30";} ?>" <?php if (!empty($checklistdata[0]["brows_hairstyle"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="brows_hairstyle">Browse hairstyle ideas & Finalize the look with the makeup artist</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="guest_rsvp" id="guest_rsvp" value="<?php if (!empty($checklistdata[0]["guest_rsvp"])) {
                                                   echo $checklistdata[0]["guest_rsvp"] ; }else{ echo "31";} ?>" <?php if (!empty($checklistdata[0]["guest_rsvp"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="guest_rsvp">Take guest RSVPs for an accurate count</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="find_packer" id="find_packer" value="<?php if (!empty($checklistdata[0]["find_packer"])) {
                                                   echo $checklistdata[0]["find_packer"] ; }else{ echo "32";} ?>" <?php if (!empty($checklistdata[0]["find_packer"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="find_packer">Find Trousseau Packer </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="arrange_vehicle" id="arrange_vehicle" value="<?php if (!empty($checklistdata[0]["arrange_vehicle"])) {
                                                   echo $checklistdata[0]["arrange_vehicle"] ; }else{ echo "33";} ?>" <?php if (!empty($checklistdata[0]["arrange_vehicle"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="arrange_vehicle">Arrange Vidai vehicle </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="book_cake" id="book_cake" value="<?php if (!empty($checklistdata[0]["book_cake"])) {
                                                   echo $checklistdata[0]["book_cake"] ; }else{ echo "34";} ?>" <?php if (!empty($checklistdata[0]["book_cake"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="book_cake">Book the Cake (If Needed)</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="role" id="role" value="<?php if (!empty($checklistdata[0]["role"])) {
                                                   echo $checklistdata[0]["role"] ; }else{ echo "35";} ?>" <?php if (!empty($checklistdata[0]["role"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="role">Organise logistics and transport for out-of-town guests</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="purchase_alcohol" id="purchase_alcohol" value="<?php if (!empty($checklistdata[0]["purchase_alcohol"])) {
                                                   echo $checklistdata[0]["purchase_alcohol"] ; }else{ echo "36";} ?>" <?php if (!empty($checklistdata[0]["purchase_alcohol"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="purchase_alcohol">Purchase alcohol if required </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="pre_bridal_skincare" id="pre_bridal_skincare" value="<?php if (!empty($checklistdata[0]["pre_bridal_skincare"])) {
                                                   echo $checklistdata[0]["pre_bridal_skincare"] ; }else{ echo "37";} ?>" <?php if (!empty($checklistdata[0]["pre_bridal_skincare"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="pre_bridal_skincare">Start your pre-bridal skincare routine</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="buy_makeup" id="buy_makeup" value="<?php if (!empty($checklistdata[0]["buy_makeup"])) {
                                                   echo $checklistdata[0]["buy_makeup"] ; }else{ echo "38";} ?>" <?php if (!empty($checklistdata[0]["buy_makeup"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="buy_makeup">Buy all essential Makeup trousseau </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="steam_outfit" id="steam_outfit" value="<?php if (!empty($checklistdata[0]["steam_outfit"])) {
                                                   echo $checklistdata[0]["steam_outfit"] ; }else{ echo "39";} ?>" <?php if (!empty($checklistdata[0]["steam_outfit"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="steam_outfit">Give your Outfits steam iron </label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="pack_honeymoon" id="pack_honeymoon" value="<?php if (!empty($checklistdata[0]["pack_honeymoon"])) {
                                                   echo $checklistdata[0]["pack_honeymoon"] ; }else{ echo "40";} ?>" <?php if (!empty($checklistdata[0]["pack_honeymoon"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="pack_honeymoon">Pack for your honeymoon</label>
                                                </li>
                                                <li class="list-group-item border-0 d-flex align-items-center ps-0">
                                                   <input class="form-check-input checklist-input" type="checkbox" name="enjoy_function" id="enjoy_function" value="<?php if (!empty($checklistdata[0]["enjoy_function"])) {
                                                   echo $checklistdata[0]["enjoy_function"] ; }else{ echo "41";} ?>" <?php if (!empty($checklistdata[0]["enjoy_function"])) { echo "checked"; }else{ echo " ";} ?>>
                                                   <label class="form-check-label strikethrough myaccnt-checklist-li" for="enjoy_function">Start Taking your Beauty sleep & Enjoy the Functions</label>
                                                </li>
                                             </ul>
                                             <div class="divider d-flex align-items-center my-4">
                                             <input type="submit" name="updatelist" value="Update Checklist" class="update-btn">
                                             </div>
                                          </form>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           </div>
                        </section>
                          
                           
                     </div>
                     <hr class="border-light m-0">
                        
                  </div>
                  <div class="tab-pane fade" id="account-social-links">
                     <!-- <div class="card-body pb-2">  -->
                       
                     <!-- </div>  -->

                     <section class="h-100 h-custom" style="background-color: #eee;">
                        <div class="container py-5 h-100">
                           <div class="row d-flex justify-content-center align-items-center h-100">
                              <div class="col">
                              <div class="card">
                                 <div class="card-body p-4">
                                    <div class="row">
                                    <div class="col-lg-12">
                                    <?php 
                                       if (!empty($wishlistdata))
                                       {
                                          foreach( $wishlistdata as $wishlist)
                                          {
                                             $id=$wishlist["vendorseourl"];
                                             $vendordata=$this->WishlistModel->getwishlistvendordetail($id);
                                             $category=$vendordata[0]["category"];
                                    ?>
                                       <div class="card mb-3">
                                          <div class="card-body">
                                             <div class="d-flex justify-content-between">
                                                <div class="d-flex flex-row align-items-center">
                                                   <div>
                                                      <img src="<?php echo base_url() ?>uploads/vendors/<?php echo $vendordata[0]["images"] ?>" class="img-fluid rounded-3" alt="Shopping item" style="width: 160px; border-radius: 6px;">
                                                   </div>
                                                   <div class="ms-3 wishlist-vendor-name">
                                                      <h5><?php echo $vendordata[0]["vendor_name"]; ?></h5>
                                                         <?php 
                                                            if($category == 1){  ?>
                                                               <p class="card-title" style="white-space: normal;color: #ff142a;">Venue</p>
                                                         <?php }elseif($category == 2){  ?>
                                                            <p class="card-title" style="white-space: normal;color: #ff142a;">Bridal Wear</p>
                                                         <?php }elseif($category == 3){?>
                                                               <p class="card-title" style="white-space: normal;color: #ff142a;">Groom Wear</p>
                                                         <?php }elseif($category == 4){ ?>
                                                               <p class="card-title" style="white-space: normal;color: #ff142a;">Photography</p>
                                                         <?php }elseif($category == 5){ ?>
                                                               <p class="card-title" style="white-space: normal;color: #ff142a;">Makeup Artist</p>
                                                         <?php }elseif($category == 6){ ?>
                                                               <p class="card-title" style="white-space: normal;color: #ff142a;">Mehendi Artist</p>
                                                         <? }elseif($category == 7){ ?>
                                                               <p class="card-title" style="white-space: normal;color: #ff142a;">Bridal Jwellery</p>
                                                         <?php }elseif($category == 8){ ?>
                                                               <p class="card-title" style="white-space: normal;color: #ff142a;">Decoration</p>
                                                         <?php }elseif($category == 9){ ?>
                                                               <p class="card-title" style="white-space: normal;color: #ff142a;">Gifts</p>
                                                         <?php  }elseif($category == 10){ ?>
                                                               <p class="card-title" style="white-space: normal;color: #ff142a;">Catering</p>
                                                         <?php }elseif($category == 13){ ?>
                                                               <p class="card-title" style="white-space: normal;color: #ff142a;">Invitation</p>
                                                         <?php }
                                                         ?>
                                                   </div>
                                                </div>
                                                <div class="d-flex flex-row align-items-center">
                                                   <!-- <div>
                                                      <h5 class="mb-0"><i class="fas fa-location"></i>
                                                         <?php echo $vendordata[0]["area"]." ".$vendordata[0]["city_name"] ; ?>
                                                      </h5>
                                                   </div> -->
                                                   <div>
                                                         <?php 
                                                            if($vendordata[0]["category"] == 1){ ?>
                                                               <a href="<?php echo base_url() ?>vendor-detail/ve/<?php echo $vendordata[0]["vendor_seo_url"] ?>" class="btn btn-primary wishlist-view-detail">View detail</a>
                                                         <?php  }elseif($vendordata[0]["category"] == 2){ ?>
                                                               <a href="<?php echo base_url() ?>vendor-detail/bw/<?php echo $vendordata[0]["vendor_seo_url"] ?>" class="btn btn-primary wishlist-view-detail">View detail</a>
                                                         <?php }elseif($vendordata[0]["category"] == 3){ ?>
                                                               <a href="<?php echo base_url() ?>vendor-detail/gw/<?php echo $vendordata[0]["vendor_seo_url"] ?>" class="btn btn-primary wishlist-view-detail">View detail</a>
                                                         <?php }elseif($vendordata[0]["category"] == 4){ ?>
                                                               <a href="<?php echo base_url() ?>vendor-detail/ph/<?php echo $vendordata[0]["vendor_seo_url"] ?>" class="btn btn-primary wishlist-view-detail">View detail</a>
                                                         <?php }elseif($vendordata[0]["category"] == 5){ ?>
                                                               <a href="<?php echo base_url() ?>vendor-detail/mu/<?php echo $vendordata[0]["vendor_seo_url"] ?>" class="btn btn-primary wishlist-view-detail">View detail</a>
                                                               
                                                         <?php }elseif($vendordata[0]["category"] == 6){ ?>
                                                               <a href="<?php echo base_url() ?>vendor-detail/mu/<?php echo $vendordata[0]["vendor_seo_url"] ?>" class="btn btn-primary wishlist-view-detail">View detail</a>
                                                         <?php }elseif($vendordata[0]["category"] == 7){ ?>
                                                               <a href="<?php echo base_url() ?>vendor-detail/bj/<?php echo $vendordata[0]["vendor_seo_url"] ?>" class="btn btn-primary wishlist-view-detail">View detail</a>
                                                               
                                                         <?php }elseif($vendordata[0]["category"] == 8){ ?>
                                                               <a href="<?php echo base_url() ?>vendor-detail/dc/<?php echo $vendordata[0]["vendor_seo_url"] ?>" class="btn btn-primary wishlist-view-detail">View detail</a>
                                                         <?php }elseif($vendordata[0]["category"] == 9){ ?>
                                                               <a href="<?php echo base_url() ?>vendor-detail/dc/<?php echo $vendordata[0]["vendor_seo_url"] ?>" class="btn btn-primary wishlist-view-detail">View detail</a>
                                                         <?php }elseif($vendordata[0]["category"] == 10){ ?>
                                                               <a href="<?php echo base_url() ?>vendor-detail/ct/<?php echo $vendordata[0]["vendor_seo_url"] ?>" class="btn btn-primary wishlist-view-detail">View detail</a>
                                                         <?php }elseif($vendordata[0]["category"] == 13){ ?>
                                                            <a href="<?php echo base_url() ?>vendor-detail/in/<?php echo $vendordata[0]["vendor_seo_url"] ?>" class="btn btn-primary wishlist-view-detail">View detail</a>
                                                         <?php }
                                                         ?>
                                                
                                                   </div>
                                                </div>
                                             </div>
                                          </div>
                                       </div>
                                    <?php    
                                          }
                                       }
                                    ?>

                                    </div>
                                    </div>
                                 </div>
                              </div>
                              </div>
                           </div>
                        </div>
                     </section>
                  </div>
                  <div class="tab-pane fade" id="account-connections">
                     <div class="card-body">
                        <form action="<?php echo base_url() ?>myaccount/changepassword" method="POST">
                           <input type="hidden" name="userid" value="<?php echo  $this->session->userdata('userid'); ?>">
                           <!-- <div class="form-group">
                              <input type="text" class="form-control" name="old-password" placeholder="Enter old password" require>
                           </div> -->
                           <div class="form-group">
                              <input type="text" class="form-control" name="new-password" placeholder="Enter new password" require>
                           </div>
                           <div class="form-group">
                              <!-- <button  class="btn-password-submit">Submit</button> -->
                              <input type="submit" name="submit" value="Submit" class="btn-password-submit">
                           </div>
                        </form>
                     </div>
                     <hr class="border-light m-0">
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