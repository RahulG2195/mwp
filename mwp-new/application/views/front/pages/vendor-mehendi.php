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
          <h3>MWP Mehendi Magic</h3>
          <p>Adorn Your Hands with Exquisite Mehendi Artistry</p>
        </div>

        <form class="groom-wear-form vendor-service-form" action="<?php echo base_url() ?>Vendorserviceform/addmehendidata/" method="POST" enctype="multipart/form-data">

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
          <div class="row">
            <div class="col-md-6">
              <label>What is the date and time of your event? </label>
              <input type="datetime-local" name="event-date" class="form-control">
            </div>
            <div class="col-md-6">
              <label>Provide the city where your mehendi function will be organized?</label>
              <input type="text" name="event_city" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-6">
              <label>What is your preferred Bridal mehendi budget range for mehendi services? </label>
              <select name="mehendi_budget" class="form-control">
                <option>Select</option>
                <option value="under 1000">Under 1000</option>
                <option value="1000 to 2000"> 1000 to 2000</option>
                <option value="2000 to 3000">2000 to 3000</option>
                <option value="3000 to 5000"> 3000 to 5000</option>
                <option value="above 5000">above 5000</option>
              </select>
            </div>
            <div class="col-md-6">
              <label>What is your preferred Family/Guest budget range for mehendi Services? </label>
              <select name="guest_budget_range" class="form-control">
                <option>Select</option>
                <option value="Under 200 per guest">Under 200 per guest</option>
                <option value="200 to 500 per guest"> 200 to 500 per guest</option>
                <option value="500 to 1000 per guest">500 to 1000 per guest</option>
                <option value="1000 to 2000 per guest"> 1000 to 2000 per guest</option>
                <option value="Above 2000 per guest"> Above 2000 per guest</option>
              </select>
            </div>
            <div class="col-md-6">
              <label>Please provide Images (if any) that inspire your mehendi design preferences:</label>
              <input type="file" name="mehendi-design-image" class="form-control">
            </div>
            <div class="col-md-6">
              <label>Have you decided on the type of mehendi Services you're looking for?</label>
              <select name="mehendi_service_type" class="form-control">
                <option>Select</option>
                <option value="Bridal Mehendi">Bridal Mehendi</option>
                <option value="Family/Guest Mehendi"> Family/Guest Mehendi</option>
                <option value="Both"> Both</option>
              </select>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label>What is your maximum guest count for the mehendi application?</label>
              <input type="text" name="mehendi_guest_count" class="form-control">
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <label>Are there specific mehendi styles that you're interested in? </label><br>
              <div class="row">

                <div class="col-md-3">
                  <label for="arabicDesign"><input type="checkbox" id="arabicDesign" name="mehendi_style[]" value="Arabic Design"> Arabic Design</label>
                </div>

                <div class="col-md-3">
                  <label for="zardosiDesign"><input type="checkbox" id="zardosiDesign" name="mehendi_style[]" value="Zardosi Design"> Zardosi Design</label>
                </div>

                <div class="col-md-3">
                  <label for="bridalMehendi"><input type="checkbox" id="bridalMehendi" name="mehendi_style[]" value="Bridal Mehendi"> Bridal Mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="rajasthaniDesign"><input type="checkbox" id="rajasthaniDesign" name="mehendi_style[]" value="Rajasthani Design"> Rajasthani Design</label>
                </div>

                <div class="col-md-3">
                  <label for="dubaiStyleMehendi"><input type="checkbox" id="dubaiStyleMehendi" name="mehendi_style[]" value="Dubai Style Mehendi"> Dubai Style Mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="gujaratiDesigns"><input type="checkbox" id="gujaratiDesigns" name="mehendi_style[]" value="Gujarati Designs"> Gujarati Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="bombayStyleDesign"><input type="checkbox" id="bombayStyleDesign" name="mehendi_style[]" value="Bombay Style Design"> Bombay Style Design</label>
                </div>

                <div class="col-md-3">
                  <label for="indoIslamicMehendiStyle"><input type="checkbox" id="indoIslamicMehendiStyle" name="mehendi_style[]" value="Indo-Islamic Mehendi Style"> Indo-Islamic Mehendi Style</label>
                </div>

                <div class="col-md-3">
                  <label for="floralMehendi"><input type="checkbox" id="floralMehendi" name="mehendi_style[]" value="Floral Mehendi"> Floral Mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="indoArabicDesign"><input type="checkbox" id="indoArabicDesign" name="mehendi_style[]" value="Indo-Arabic Design"> Indo-Arabic Design</label>
                </div>

                <div class="col-md-3">
                  <label for="herbalDesigns"><input type="checkbox" id="herbalDesigns" name="mehendi_style[]" value="Herbal Designs"> Herbal Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="westernDesigns"><input type="checkbox" id="westernDesigns" name="mehendi_style[]" value="Western Designs"> Western Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="moroccanDesign"><input type="checkbox" id="moroccanDesign" name="mehendi_style[]" value="Moroccan Design"> Moroccan Design</label>
                </div>

                <div class="col-md-3">
                  <label for="marwadiDesign"><input type="checkbox" id="marwadiDesign" name="mehendi_style[]" value="Marwadi Design"> Marwadi Design</label>
                </div>

                <div class="col-md-3">
                  <label for="designermehendi"><input type="checkbox" id="designermehendi" name="mehendi_style[]" value="Designer mehendi"> Designer mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="paisleyDesigns"><input type="checkbox" id="paisleyDesigns" name="mehendi_style[]" value="Paisley Designs"> Paisley Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="indoWesternDesigns"><input type="checkbox" id="indoWesternDesigns" name="mehendi_style[]" value="Indo-Western Designs"> Indo-Western Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="pakistaniDesign"><input type="checkbox" id="pakistaniDesign" name="mehendi_style[]" value="Pakistani Design"> Pakistani Design</label>
                </div>

                <div class="col-md-3">
                  <label for="bandhaniDesign"><input type="checkbox" id="bandhaniDesign" name="mehendi_style[]" value="Bandhani Design"> Bandhani Design</label>
                </div>

                <div class="col-md-3">
                  <label for="colorfulMehendiArt"><input type="checkbox" id="colorfulMehendiArt" name="mehendi_style[]" value="Colorful Mehendi Art"> Colorful Mehendi Art</label>
                </div>

                <div class="col-md-3">
                  <label for="jewelleryDesign"><input type="checkbox" id="jewelleryDesign" name="mehendi_style[]" value="Jewellery Design"> Jewellery Design</label>
                </div>

                <div class="col-md-3">
                  <label for="customisedmehendi_style[]s va<inputlue="""><input type="checkbox" id="customisedmehendi_style[]s value=" name=""" name=" mehendi_style[]" value="Customised Mehendi Designs"> Customised Mehendi Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="mandalaDesign"><input type="checkbox" id="mandalaDesign" name="mehendi_style[]" value="Mandala Design"> Mandala Design</label>
                </div>

                <div class="col-md-3">
                  <label for="maharashtrianDesigns"><input type="checkbox" id="maharashtrianDesigns" name="mehendi_style[]" value="Maharashtrian Designs"> Maharashtrian Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="mughalMehendi"><input type="checkbox" id="mughalMehendi" name="mehendi_style[]" value="Mughal Mehendi"> Mughal Mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="caricatureDesigns"><input type="checkbox" id="caricatureDesigns" name="mehendi_style[]" value="Caricature Designs"> Caricature Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="godsAndGoddesses"><input type="checkbox" id="godsAndGoddesses" name="mehendi_style[]" value="Gods and Goddesses"> Gods and Goddesses</label>
                </div>

                <div class="col-md-3">
                  <label for="buttaDesigns"><input type="checkbox" id="buttaDesigns" name="mehendi_style[]" value="Butta Designs"> Butta Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="glitterMehendi"><input type="checkbox" id="glitterMehendi" name="mehendi_style[]" value="Glitter Mehendi"> Glitter Mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="minimalMehendi"><input type="checkbox" id="minimalMehendi" name="mehendi_style[]" value="Minimal Mehendi"> Minimal Mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="peacockDesign"><input type="checkbox" id="peacockDesign" name="mehendi_style[]" value="Peacock Design"> Peacock Design</label>
                </div>

                <div class="col-md-3">
                  <label for="3dmehendiDesigns"><input type="checkbox" id="3dmehendiDesigns" name="mehendi_style[]" value="3D mehendi Designs"> 3D mehendi Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="mehendiTattoos"><input type="checkbox" id="mehendiTattoos" name="mehendi_style[]" value="mehendi Tattoos"> mehendi Tattoos</label>
                </div>

                <div class="col-md-3">
                  <label for="leheriyaDesigns"><input type="checkbox" id="leheriyaDesigns" name="mehendi_style[]" value="Leheriya Designs"> Leheriya Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="jaipuriStyleDesign"><input type="checkbox" id="jaipuriStyleDesign" name="mehendi_style[]" value="Jaipuri Style Designs"> Jaipuri Style Design</label>
                </div>

                <div class="col-md-3">
                  <label for="fancyMehendi"><input type="checkbox" id="fancyMehendi" name="mehendi_style[]" value="Fancy Mehendi"> Fancy Mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="hiraMotiDesigns"><input type="checkbox" id="hiraMotiDesigns" name="mehendi_style[]" value="Hira-Moti Designs"> Hira-Moti Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="radhaKrishanDesigns"><input type="checkbox" id="radhaKrishanDesigns" name="mehendi_style[]" value="Radha Krishan Designs"> Radha Krishan Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="kolkataMehendi"><input type="checkbox" id="kolkataMehendi" name="mehendi_style[]" value="Kolkata Mehendi"> Kolkata Mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="kashmiriDesigns"><input type="checkbox" id="kashmiriDesigns" name="mehendi_style[]" value="Kashmiri Designs"> Kashmiri Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="brideGroomFaceDesigns"><input type="checkbox" id="brideGroomFaceDesigns" name="mehendi_style[]" value="Bride-Groom Face Designs"> Bride-Groom Face Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="thememehendi"><input type="checkbox" id="thememehendi" name="mehendi_style[]" value="Theme mehendi"> Theme mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="bengaliDesigns"><input type="checkbox" id="bengaliDesigns" name="mehendi_style[]" value="Bengali Designs"> Bengali Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="mohalaimehendiDesigns"><input type="checkbox" id="mohalaimehendiDesigns" name="mehendi_style[]" value="Mohalai mehendi Designs"> Mohalai mehendi Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="nailPaintMehendi"><input type="checkbox" id="nailPaintMehendi" name="mehendi_style[]" value="Nail Paint Mehendi"> Nail Paint Mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="hyderabadimehendi"><input type="checkbox" id="hyderabadimehendi" name="mehendi_style[]" value="Hyderabadi mehendi"> Hyderabadi mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="sonaChandiMehendi"><input type="checkbox" id="sonaChandiMehendi" name="mehendi_style[]" value="Sona Chandi Mehendi"> Sona Chandi Mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="penMehendi"><input type="checkbox" id="penMehendi" name="mehendi_style[]" value="Pen Mehendi"> Pen Mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="fusionStyleMehendi"><input type="checkbox" id="fusionStyleMehendi" name="mehendi_style[]" value="Fusion Style Mehendi"> Fusion Style Mehendi</label>
                </div>

                <div class="col-md-3">
                  <label for="Mathick"><input type="checkbox" id="Mathick" name="mehendi_style[]" value="Mathick mehendi Designs"> Mathick mehendi Designs</label>
                </div>

                <div class="col-md-3">
                  <label for="mathickmehendiDesigns"><input type="checkbox" id="mathickmehendiDesigns" name="mehendi_style[]" value="Stone or Diamond Mehendi"> Stone or Diamond Mehendi</label>
                </div>
                <div class="col-md-3">
                  <label for="Kalamkaari"><input type="checkbox" id="Kalamkaari" name="mehendi_style[]" value="Kalamkaari mehendi"> Kalamkaari mehendi</label>
                </div>
                <div class="col-md-3">
                  <label for="Box"><input type="checkbox" id="Box" name="mehendi_style[]" value="Box mehendi Design"> Box mehendi Design</label>
                </div>
              </div>
            </div>
            <div class="row">
              <div class="col-md-12">
                <label>How many years of experience would you prefer the mehendi artist to have? </label>
                <select name="mehendi_experience" class="form-control">
                  <option>Select</option>
                  <option value="5 years+">5 years+</option>
                  <option value="10 years+"> 10 years+</option>
                  <option value="15 years+">15 years+</option>
                  <option value="20 years+"> 20 years+</option>
                  <option value="30 years+"> 30 years+</option>
                </select>
              </div>
              <!-- <div class="col-md-6">
                    <label>Would you like a same-day edit feature for your photos?  </label>
                    <select name="photography_budget" class="form-control">
                        <option>Select</option>
                        <option value="yes">Yes</option>
                        <option value="no"> No</option>
                    </select>
                  </div> -->
            </div>
            <div class="row">
              <div class="col-md-12">
                <label>Any other preferences or requirements you'd like to mention?</label><br>
                <input type="checkbox" id="vehicle1" name="other_requirements[]" value="Organic mehendi Cones Required">
                <label for="vehicle1"> Organic mehendi Cones Required</label><br>
                <input type="checkbox" id="vehicle2" name="other_requirements[]" value="Other design elements like glitter and ink cones may be required">
                <label for="vehicle2"> Other design elements like glitter and ink cones may be required </label><br>
                <input type="checkbox" id="vehicle3" name="other_requirements[]" value="Need a team to cater to multiple people at the same time">
                <label for="vehicle3"> Need a team to cater to multiple people at the same time</label><br>
                <input type="text" id="vehicle1" name="other_requirements[]" placeholder="Others (Please Specify)">

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