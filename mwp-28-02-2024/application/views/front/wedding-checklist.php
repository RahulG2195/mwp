<?php  $this->load->view('front/layout/head'); ?>
<?php  $this->load->view('front/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/version_2/wedding-checklist.css">
<section class="checklist-banner-section">
    <div class="checklist-content">
   	    <img src="<?php echo  base_url() ?>assets/front/image/wedding-checklist/email-logo.png">
        <h1>Wedding Timeline & Milestones</h1>
        <h5>FOLLOW THIS TO ENSURE SEAMLESS PLANNING AND EXECUTION</h5>
    </div>
            <div class="note" >Please press the submit button below on wedding checklist</div>
</section>

<form action="<?php echo base_url() ?>Weddingchecklist/submitchecklist" method="POST" id="weddingchecklist">

<input type="hidden" name="user_id" value="<?php if(isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] = true){ echo  $this->session->userdata['userid']; }else{ echo "";  } ?>">    
<section class="checklist-service-1">
	<div class="container">
         <div class="row">
         	  <div class="col-md-6">
         	  	  <div class="checklist-btn" id="nine-twelve-months-btn">
         	  	  	 <a href="#">
         	  	  	 	9 to 12 Months
         	  	  	 </a>
         	  	  </div>
         	  	  <div class="chekclist-list">
         	  	  	<ul>
         	  	  	  	<li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Searchicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="wedding_outfit" id="wedding_outfit" value="<?php if (!empty($checklistdata[0]["wedding_outfit"])) {
                                     echo $checklistdata[0]["wedding_outfit"] ; }else{ echo "1";} ?>" <?php if (!empty($checklistdata[0]["wedding_outfit"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="wedding_outfit">Explore and Save Trending Wedding Outfit Ideas</label>
                            </div>
                        </li>
                        <li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Lockicons-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="wedding_budget" id="wedding_budget" value="<?php if (!empty($checklistdata[0]["wedding_budget"])) {
                                     echo $checklistdata[0]["wedding_budget"] ; }else{ echo "2";} ?>" <?php if (!empty($checklistdata[0]["wedding_budget"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="wedding_budget">Establish Your Wedding Budget </label>
                            </div>
                        </li>
                        <li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Searchicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="explore_venue" id="explore_venue" value="<?php if (!empty($checklistdata[0]["explore_venue"])) {
                                     echo $checklistdata[0]["explore_venue"] ; }else{ echo "3";} ?>" <?php if (!empty($checklistdata[0]["explore_venue"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="explore_venue">Explore & Visit Venue Options</label>
                            </div>
                        </li>
         	  	  	</ul>
         	  	  </div>
         	  </div>
         	  <div class="col-md-6">
	         	  	<div class="chekclist-list checklist-col-2">
	         	  	  	<ul>
	         	  	  	  	<li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Webicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="research_planner" id="research_planner" value="<?php if (!empty($checklistdata[0]["research_planner"])) {
                                     echo $checklistdata[0]["research_planner"] ; }else{ echo "4";} ?>" <?php if (!empty($checklistdata[0]["research_planner"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="research_planner">Research Wedding Planners</label>
	                            </div>
	                        </li>
	                        <li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Shortlisticon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="create_guest_list" id="create_guest_list" value="<?php if (!empty($checklistdata[0]["create_guest_list"])) {
                                     echo $checklistdata[0]["create_guest_list"] ; }else{ echo "5";} ?>" <?php if (!empty($checklistdata[0]["create_guest_list"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="create_guest_list">Create a Tentative Guest List </label>
	                            </div>
	                        </li>
	                        <li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="book_dream_venue" id="book_dream_venue" value="<?php if (!empty($checklistdata[0]["book_dream_venue"])) {
                                     echo $checklistdata[0]["book_dream_venue"] ; }else{ echo "6";} ?>" <?php if (!empty($checklistdata[0]["book_dream_venue"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="book_dream_venue">Book Your Dream Venues</label>
	                            </div>
	                        </li>
	         	  	  	</ul>
	         	  	</div>
	         	  	<!-- <div class="checklist-btn-right">
         	  	  	    <a href="#">9 to 12 Months</a>
         	  	    </div> -->
         	  </div>
         </div>
	 </div>

</section>
<section class="checklist-service-2">
	<div class="container">
         <div class="row">
         	  <div class="col-md-6">

                    <div class="six-eight-months-btn  six-btn-mobile">
                        <a href="#" style="color: #fff;">6 to 8 Months</a>
                    </div> 
         	  	  <!-- <div class="checklist-btn">
         	  	  	 <a href="#">
         	  	  	 	9 to 12 Months
         	  	  	 </a>
         	  	  </div> -->
         	  	  <div class="chekclist-list">
         	  	  	<ul>
         	  	  	  	<li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Searchicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="looking_caterers" id="looking_caterers" value="<?php if (!empty($checklistdata[0]["looking_caterers"])) {
                                     echo $checklistdata[0]["looking_caterers"] ; }else{ echo "7";} ?>" <?php if (!empty($checklistdata[0]["looking_caterers"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="looking_caterers">Start Looking out for Caterers</label>
                            </div>
                        </li>
                        <li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Webicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="search_photographer" id="search_photographer" value="<?php if (!empty($checklistdata[0]["search_photographer"])) {
                                     echo $checklistdata[0]["search_photographer"] ; }else{ echo "8";} ?>" <?php if (!empty($checklistdata[0]["search_photographer"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="search_photographer">Research and Book Photographer </label>
                            </div>
                        </li>
                        <li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/saveicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="brows_decor_ideas" id="brows_decor_ideas" value="<?php if (!empty($checklistdata[0]["brows_decor_ideas"])) {
                                     echo $checklistdata[0]["brows_decor_ideas"] ; }else{ echo "9";} ?>" <?php if (!empty($checklistdata[0]["brows_decor_ideas"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="brows_decor_ideas">Browse and save décor ideas</label>
                            </div>
                        </li>
         	  	  	</ul>
         	  	  </div>
         	  </div>
         	  <div class="col-md-6">
         	  	    <div class="six-eight-months-btn  six-btn-desktop">
         	  	  	    <a href="#" style="color: #fff;">6 to 8 Months</a>
         	  	    </div> 
	         	  	<div class="chekclist-list checklist-col-2">
	         	  	  	<ul>
	         	  	  	  	<li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Searchicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="explore_trending_design" id="explore_trending_design" value="<?php if (!empty($checklistdata[0]["explore_trending_design"])) {
                                     echo $checklistdata[0]["explore_trending_design"] ; }else{ echo "10";} ?>" <?php if (!empty($checklistdata[0]["explore_trending_design"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="explore_trending_design">Explore trending Make-up and Mehndi artists and designs</label>
	                            </div>
	                        </li>
	                        <li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Shortlisticon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="find_h_destination" id="find_h_destination" value="<?php if (!empty($checklistdata[0]["find_h_destination"])) {
                                     echo $checklistdata[0]["find_h_destination"] ; }else{ echo "11";} ?>" <?php if (!empty($checklistdata[0]["find_h_destination"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="find_h_destination">Find out and start shortlisting Honeymoon destinations </label>
	                            </div>
	                        </li>
	                        <li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="book_artist" id="book_artist" value="<?php if (!empty($checklistdata[0]["find_h_destination"])) {
                                     echo $checklistdata[0]["find_h_destination"] ; }else{ echo "12";} ?>" <?php if (!empty($checklistdata[0]["find_h_destination"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="book_artist">Book the Make-up and Mehndi artist</label>
	                            </div>
	                        </li>
	         	  	  	</ul>
	         	  	</div>
	         	  
         	  </div>
         </div>
	 </div>

</section>
<section class="checklist-service-2">
	<div class="container">
         <div class="row">
         	  <div class="col-md-6">
         	  	  <div class="checklist-btn-right months-btn-1">
         	  	  	    <a href="#">4 to 5 Months</a>
         	  	  </div> 
         	  	<div class="chekclist-list">
         	  	  	<ul>
         	  	  	  	<li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Webicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="brows_templates" id="brows_templates" value="<?php if (!empty($checklistdata[0]["brows_templates"])) {
                                     echo $checklistdata[0]["brows_templates"] ; }else{ echo "13";} ?>" <?php if (!empty($checklistdata[0]["brows_templates"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="brows_templates">Browse Invitation ideas & templates</label>
                            </div>
                        </li>
                        <li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="hire_decorator" id="hire_decorator" value="<?php if (!empty($checklistdata[0]["hire_decorator"])) {
                                     echo $checklistdata[0]["hire_decorator"] ; }else{ echo "14";} ?>" <?php if (!empty($checklistdata[0]["hire_decorator"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="hire_decorator">Hire a decorator </label>
                            </div>
                        </li>
                        <li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="order_ivitation" id="order_ivitation" value="<?php if (!empty($checklistdata[0]["order_ivitation"])) {
                                     echo $checklistdata[0]["order_ivitation"] ; }else{ echo "15";} ?>" <?php if (!empty($checklistdata[0]["order_ivitation"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="order_ivitation">Order invitations </label>
                            </div>
                        </li>
         	  	  	</ul>
         	  	</div>
         	  </div>
         	  <div class="col-md-6">
	         	  	<div class="chekclist-list checklist-col-2">
	         	  	  	<ul>
	         	  	  	  	<li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="book_hotels" id="book_hotels" value="<?php if (!empty($checklistdata[0]["book_hotels"])) {
                                     echo $checklistdata[0]["book_hotels"] ; }else{ echo "16";} ?>" <?php if (!empty($checklistdata[0]["book_hotels"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="book_hotels">Book flights and hotels for the honeymoon</label>
	                            </div>
	                        </li>
	                        <li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Webicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="research_bridal_groom_wear" id="research_bridal_groom_wear" value="<?php if (!empty($checklistdata[0]["research_bridal_groom_wear"])) {
                                     echo $checklistdata[0]["research_bridal_groom_wear"] ; }else{ echo "17";} ?>" <?php if (!empty($checklistdata[0]["research_bridal_groom_wear"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="research_bridal_groom_wear">Research Bridal and Groom wear stores</label>
	                            </div>
	                        </li>
	                        <li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="book_dj" id="book_dj" value="<?php if (!empty($checklistdata[0]["book_dj"])) {
                                     echo $checklistdata[0]["book_dj"] ; }else{ echo "18";} ?>" <?php if (!empty($checklistdata[0]["book_dj"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="groom_radio">Book DJ and Choreographer if required </label>
	                            </div>
	                        </li>
	         	  	  	</ul>
	         	  	</div>
	         	  
         	  </div>
         </div>
	 </div>

</section>
<section class="checklist-service-1">
	<div class="container">
         <div class="row">
         	  <div class="col-md-6">
         	  	  <div class="checklist-btn months-btn-1">
         	  	  	 <a href="#">
         	  	  	 	3 Months
         	  	  	 </a>
         	  	  </div>
         	  	  <div class="chekclist-list">
         	  	  	<ul>
         	  	  	  	<li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="order_outfit" id="order_outfit" value="<?php if (!empty($checklistdata[0]["order_outfit"])) {
                                     echo $checklistdata[0]["order_outfit"] ; }else{ echo "19";} ?>" <?php if (!empty($checklistdata[0]["order_outfit"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="order_outfit">Finalise and Order outfits along with the accessories</label>
                            </div>
                        </li>
                        <li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Webicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="explore_latest_design" id="explore_latest_design" value="<?php if (!empty($checklistdata[0]["explore_latest_design"])) {
                                     echo $checklistdata[0]["explore_latest_design"] ; }else{ echo "20";} ?>" <?php if (!empty($checklistdata[0]["explore_latest_design"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="explore_latest_design">Explore the latest designs and Buy Jewelry</label>
                            </div>
                        </li>
                        <li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Cameraicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="prewedding_shoot" id="prewedding_shoot" value="<?php if (!empty($checklistdata[0]["prewedding_shoot"])) {
                                     echo $checklistdata[0]["prewedding_shoot"] ; }else{ echo "21";} ?>" <?php if (!empty($checklistdata[0]["prewedding_shoot"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="prewedding_shoot">Have your pre-wedding shoot</label>
                            </div>
                        </li>
         	  	  	</ul>
         	  	  </div>
         	  </div>
         	  <div class="col-md-6">
	         	  	<div class="chekclist-list checklist-col-2">
	         	  	  	<ul>
	         	  	  	  	<li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/saveicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="send_date_invites" id="send_date_invites" value="<?php if (!empty($checklistdata[0]["send_date_invites"])) {
                                     echo $checklistdata[0]["send_date_invites"] ; }else{ echo "22";} ?>" <?php if (!empty($checklistdata[0]["send_date_invites"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="send_date_invites">Send out save the dates Invites</label>
	                            </div>
	                        </li>
	                        <li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Searchicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="brows_song" id="brows_song" value="<?php if (!empty($checklistdata[0]["brows_song"])) {
                                     echo $checklistdata[0]["brows_song"] ; }else{ echo "23";} ?>" <?php if (!empty($checklistdata[0]["brows_song"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="brows_song">Browse and Shortlist bridal entry songs and ideas </label>
	                            </div>
	                        </li>
	                        <li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="book_priest" id="book_priest" value="<?php if (!empty($checklistdata[0]["book_priest"])) {
                                     echo $checklistdata[0]["book_priest"] ; }else{ echo "24";} ?>" <?php if (!empty($checklistdata[0]["book_priest"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="book_priest">Book your priest</label>
	                            </div>
	                        </li>
	         	  	  	</ul>
	         	  	</div>
	         	  	<!-- <div class="checklist-btn-right">
         	  	  	    <a href="#">9 to 12 Months</a>
         	  	    </div> -->
         	  </div>
         </div>
	 </div>

</section>
<section class="checklist-service-2">
	<div class="container">
         <div class="row">
         	  <div class="col-md-6">
                    <div  id="two-months-btn" class="two-btn-months-mobile">
                        <a href="#" style="color: #fff;">2 Months</a>
                    </div> 
         	  	  <!-- <div class="checklist-btn">
         	  	  	 <a href="#">
         	  	  	 	9 to 12 Months
         	  	  	 </a>
         	  	  </div> -->
         	  	  <div class="chekclist-list">
         	  	  	<ul>
         	  	  	  	<li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Carticon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="buy_sweets" id="buy_sweets" value="<?php if (!empty($checklistdata[0]["buy_sweets"])) {
                                     echo $checklistdata[0]["buy_sweets"] ; }else{ echo "25";} ?>" <?php if (!empty($checklistdata[0]["buy_sweets"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="buy_sweets">Buy sweets / favors to distribute on Mehndi</label>
                            </div>
                        </li>
                        <li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Mapicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="site_visit" id="site_visit" value="<?php if (!empty($checklistdata[0]["site_visit"])) {
                                     echo $checklistdata[0]["site_visit"] ; }else{ echo "26";} ?>" <?php if (!empty($checklistdata[0]["site_visit"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="site_visit">Site visit with the decorator </label>
                            </div>
                        </li>
                        <li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/musicicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="start_dance_practice" id="start_dance_practice" value="<?php if (!empty($checklistdata[0]["start_dance_practice"])) {
                                     echo $checklistdata[0]["start_dance_practice"] ; }else{ echo "27";} ?>" <?php if (!empty($checklistdata[0]["start_dance_practice"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="start_dance_practice">Start dance practices</label>
                            </div>
                        </li>
         	  	  	</ul>
         	  	  </div>
         	  </div>
         	  <div class="col-md-6">
         	  	    <div  id="two-months-btn" class="two-btn-month-desktop">
         	  	  	    <a href="#" style="color: #fff;">2 Months</a>
         	  	    </div> 
	         	  	<div class="chekclist-list checklist-col-2">
	         	  	  	<ul>
	         	  	  	  	<li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Mailicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="distribute_invitation" id="distribute_invitation" value="<?php if (!empty($checklistdata[0]["distribute_invitation"])) {
                                     echo $checklistdata[0]["distribute_invitation"] ; }else{ echo "28";} ?>" <?php if (!empty($checklistdata[0]["distribute_invitation"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="distribute_invitation">Start distributing invitations</label>
	                            </div>
	                        </li>
	                        <li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Kicthenicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="food_taste" id="food_taste" value="<?php if (!empty($checklistdata[0]["food_taste"])) {
                                     echo $checklistdata[0]["food_taste"] ; }else{ echo "29";} ?>" <?php if (!empty($checklistdata[0]["food_taste"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="food_taste">Have a food tasting </label>
	                            </div>
	                        </li>
	                        <li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="brows_hairstyle" id="brows_hairstyle" value="<?php if (!empty($checklistdata[0]["brows_hairstyle"])) {
                                     echo $checklistdata[0]["brows_hairstyle"] ; }else{ echo "30";} ?>" <?php if (!empty($checklistdata[0]["brows_hairstyle"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="brows_hairstyle">Browse hairstyle ideas & Finalize the look with the makeup artist</label>
	                            </div>
	                        </li>
	         	  	  	</ul>
	         	  	</div>
	         	  
         	  </div>
         </div>
	 </div>

</section>
<section class="checklist-service-2">
	<div class="container">
         <div class="row">
         	  <div class="col-md-6">
         	  	  <div class="checklist-btn-right months-btn-1">
         	  	  	    <a href="#">1 Month</a>
         	  	  </div> 
         	  	  <div class="chekclist-list">
         	  	  	<ul>
         	  	  	  	<li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Datesicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="guest_rsvp" id="guest_rsvp" value="<?php if (!empty($checklistdata[0]["guest_rsvp"])) {
                                     echo $checklistdata[0]["guest_rsvp"] ; }else{ echo "31";} ?>" <?php if (!empty($checklistdata[0]["guest_rsvp"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="guest_rsvp">Take guest RSVPs for an accurate count</label>
                            </div>
                        </li>
                        <li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="find_packer" id="find_packer" value="<?php if (!empty($checklistdata[0]["find_packer"])) {
                                     echo $checklistdata[0]["find_packer"] ; }else{ echo "32";} ?>" <?php if (!empty($checklistdata[0]["find_packer"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="find_packer">Find Trousseau Packer </label>
                            </div>
                        </li>
                        <li> 
         	  	  	  		<div class="form-check-checklist">
         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="arrange_vehicle" id="arrange_vehicle" value="<?php if (!empty($checklistdata[0]["arrange_vehicle"])) {
                                     echo $checklistdata[0]["arrange_vehicle"] ; }else{ echo "33";} ?>" <?php if (!empty($checklistdata[0]["arrange_vehicle"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="arrange_vehicle">Arrange Vidai vehicle </label>
                            </div>
                        </li>
         	  	  	</ul>
         	  	  </div>
         	  </div>
         	  <div class="col-md-6">
	         	  	<div class="chekclist-list checklist-col-2">
	         	  	  	<ul>
	         	  	  	  	<li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="book_cake" id="book_cake" value="<?php if (!empty($checklistdata[0]["book_cake"])) {
                                     echo $checklistdata[0]["book_cake"] ; }else{ echo "34";} ?>" <?php if (!empty($checklistdata[0]["book_cake"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="book_cake">Book the Cake (If Needed)</label>
	                            </div>
	                        </li>
	                        <li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="role" id="role" value="<?php if (!empty($checklistdata[0]["role"])) {
                                     echo $checklistdata[0]["role"] ; }else{ echo "35";} ?>" <?php if (!empty($checklistdata[0]["role"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="role">Organise logistics and transport for out-of-town guests</label>
	                            </div>
	                        </li>
	                        <li> 
	         	  	  	  		<div class="form-check-checklist">
	         	  	  	  			<img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
	                                <input class="form-check-input checklist-input" type="checkbox" name="purchase_alcohol" id="purchase_alcohol" value="<?php if (!empty($checklistdata[0]["purchase_alcohol"])) {
                                     echo $checklistdata[0]["purchase_alcohol"] ; }else{ echo "36";} ?>" <?php if (!empty($checklistdata[0]["purchase_alcohol"])) { echo "checked"; }else{ echo " ";} ?>>
	                                <label class="form-check-label strikethrough" for="purchase_alcohol">Purchase alcohol if required </label>
	                            </div>
	                        </li>
	         	  	  	</ul>
	         	  	</div>
	         	  
         	  </div>
         </div>
	 </div>

</section>

<section class="checklist-service-2">
    <div class="container">
         <div class="row">
              <div class="col-md-6" id="one-month-col">
                <div class="months-btn-15 months-mobile-20">
                    <a href="#" style="color: #fff;">20 to 15 Days </a>
                </div> 
                  <div class="chekclist-list">
                    <ul>
                        <li> 
                            <div class="form-check-checklist">
                                <img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Skincareicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="pre_bridal_skincare" id="pre_bridal_skincare" value="<?php if (!empty($checklistdata[0]["pre_bridal_skincare"])) {
                                     echo $checklistdata[0]["pre_bridal_skincare"] ; }else{ echo "37";} ?>" <?php if (!empty($checklistdata[0]["pre_bridal_skincare"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="pre_bridal_skincare">Start your pre-bridal skincare routine</label>
                            </div>
                        </li>
                        <li> 
                            <div class="form-check-checklist">
                                <img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Makeupessentialicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="buy_makeup" id="buy_makeup" value="<?php if (!empty($checklistdata[0]["buy_makeup"])) {
                                     echo $checklistdata[0]["buy_makeup"] ; }else{ echo "38";} ?>" <?php if (!empty($checklistdata[0]["buy_makeup"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="buy_makeup">Buy all essential Makeup trousseau </label>
                            </div>
                        </li>
                        <li> 
                            <div class="form-check-checklist">
                                <img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Outfitsicon-01.png">
                                <input class="form-check-input checklist-input" type="checkbox" name="steam_outfit" id="steam_outfit" value="<?php if (!empty($checklistdata[0]["steam_outfit"])) {
                                     echo $checklistdata[0]["steam_outfit"] ; }else{ echo "39";} ?>" <?php if (!empty($checklistdata[0]["steam_outfit"])) { echo "checked"; }else{ echo " ";} ?>>
                                <label class="form-check-label strikethrough" for="steam_outfit">Give your Outfits steam iron </label>
                            </div>
                        </li>
                    </ul>
                  </div>
              </div>
              <div class="col-md-6">
                <div class="months-btn-15 months-desktop-20">
                    <a href="#" style="color: #fff;">20 to 15 Days </a>
                </div> 
                    <div class="chekclist-list checklist-col-2">
                        <ul>
                            <li> 
                                <div class="form-check-checklist">
                                    <img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Honeymoonicon-01.png">
                                    <input class="form-check-input checklist-input" type="checkbox" name="pack_honeymoon" id="pack_honeymoon" value="<?php if (!empty($checklistdata[0]["pack_honeymoon"])) {
                                     echo $checklistdata[0]["pack_honeymoon"] ; }else{ echo "40";} ?>" <?php if (!empty($checklistdata[0]["pack_honeymoon"])) { echo "checked"; }else{ echo " ";} ?>>
                                    <label class="form-check-label strikethrough" for="pack_honeymoon">Pack for your honeymoon</label>
                                </div>
                            </li>
                            <li> 
                                <div class="form-check-checklist">
                                    <img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/beauty-sleep.png">
                                    <input class="form-check-input checklist-input" type="checkbox" name="enjoy_function" id="enjoy_function" value="<?php if (!empty($checklistdata[0]["enjoy_function"])) {
                                     echo $checklistdata[0]["enjoy_function"] ; }else{ echo "41";} ?>" <?php if (!empty($checklistdata[0]["enjoy_function"])) { echo "checked"; }else{ echo " ";} ?>>
                                    <label class="form-check-label strikethrough" for="enjoy_function">Start Taking your Beauty sleep & Enjoy the Functions</label>
                                </div>
                            </li>
                            <!-- <li> 
                                <div class="form-check-checklist">
                                    <img src="<?php echo base_url() ?>assets/front/image/wedding-checklist/Handshakeicon-01.png">
                                    <input class="form-check-input checklist-input" type="radio" name="role" id="groom_radio" value="Groom">
                                    <label class="form-check-label" for="groom_radio">Give your Outfits steam iron </label>
                                </div>
                            </li> -->
                        </ul>
                    </div>
                  
              </div>
            

         </div>
     </div>

</section>

<section>
    <div class="container">
         <div class="row">
             <div class="col-md-12">                 
                <button href="#" type="submit" class="submitchecklist">Submit</button>
             </div>
         </div>
    </div>

</section>

</form>
<!-- <section class="checklist-service-5">
	<div class="container">
		<div class="row">
			
			<div class="col-md-12">
				<div class="bride-checklist-btn">
					<div  id="bride-checklist-btn-right">
         	  	         <a href="#">1 Month Away</a>
         	        </div>
				</div>
				
				<div class="bride-checklist-1">
					 
					 <div class="bride-checklist-image-1 bridal-checklist-img-1" style="background-image:url('<?php echo base_url() ?>assets/front/image/wedding-checklist/Skincareicon-01.png');">
					 	<h4 class="bride-checklist-heading">Start your pre-bridal skincare routine</h4>
					 </div>
					 <div class="bride-checklist-para-1">
					 	  Consult with a skincare expert who can recommend personalized packages to address your specific needs and start your Spa Routine(at least 3 seatings)
					 </div>
				</div>
				<div class="bride-checklist-1">
					 <div class="bride-checklist-image-1 bridal-checklist-img-2" style="background-image:url('<?php echo base_url() ?>assets/front/image/wedding-checklist/Makeupessentialicon-01.png');">
					 	<h4 class="bride-checklist-heading">Buy all essential Makeup trousseau</h4>
					 </div>
					 <div class="bride-checklist-para-1 check-para-1">
					    Gather all your essential makeup products and tools and pack them neatly in your bridal trousseau. From foundation to lipstick and brushes, ensure everything is organized, easily accessible, and ready for your wedding day.
					 </div>
				</div>
				<div class="bride-checklist-1">
					 <div class="bride-checklist-image-1 bridal-checklist-img-3" style="background-image:url('<?php echo base_url() ?>assets/front/image/wedding-checklist/Outfitsicon-01.png');">
					 	<h4 class="bride-checklist-heading">Give your Outfits steam iron</h4>
					 </div>
					 <div class="bride-checklist-para-1 check-para-2">
					   Ensure your wedding attire looks impeccable by sending them for professional steam ironing. Wrinkles and creases will be smoothed out, ensuring you radiate elegance and sophistication on your special day.
					 </div>
				</div>
				<div class="bride-checklist-1">
					 <div class="bride-checklist-image-1 bridal-checklist-img-4" style="background-image:url('<?php echo base_url() ?>assets/front/image/wedding-checklist/Honeymoonicon-01.png');">
					 	<h4 class="bride-checklist-heading">Pack for your honeymoon</h4>
					 </div>
					 <div class="bride-checklist-para-1 check-para-3">
					     Pack your honeymoon essentials. Check the weather and destination requirements to ensure you have appropriate clothing, accessories, and travel documents, creating unforgettable memories with your partner
					 </div>
				</div>
				<div class="bride-checklist-1">
					 <div class="bride-checklist-image-1 bridal-checklist-img-5" style="background-image:url('<?php echo base_url() ?>assets/front/image/wedding-checklist/Sleepicon-01.png');">
					 	<h4 class="bride-checklist-heading check-head-4">Start Taking your Beauty sleep & <br> Enjoy the Functions</h4>
					 </div>
					 <div class="bride-checklist-para-1 check-para-4">
					   No Tip or Explanation Required
					 </div>
				</div>
			</div>
		</div>
	</div>
</section> -->

<section class="empty-service">
	<h6>My Wedding Palette</h6>
</section>
<?php  $this->load->view('front/layout/footer'); ?>
<?php  $this->load->view('front/layout/script'); ?>
 


