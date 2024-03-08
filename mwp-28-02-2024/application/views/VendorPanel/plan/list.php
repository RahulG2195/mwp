<?php $this->load->view('VendorPanel/layout/header'); ?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/style.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/version_2/price.css' ?>">
			  <style>
				.shankar{
					display:none;
				}
			  </style>
<?php $this->load->view('VendorPanel/layout/sidebar'); ?>
           
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <!--<h1>DataTables</h1>-->
            <h1>Master</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>vendor-dashboard">Home</a></li>
              <li class="breadcrumb-item active">Plan</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
     
            <!-- /.card -->
			  <?php
			  //replace this arry with database
			  $plans[0] = array('plan_id'=>'1','title'=>'Palette Express','plan_type'=>'Free','price'=>'0','features'=>'Claimed Listing Tag, Basic Lead Generation Mechanism, Limited Photo Uploads (Max 5)','duration'=>'0');
			  $plans[1] = array('plan_id'=>'2','title'=>'Palette Pro','plan_type'=>'Q','price'=>'3000','features'=>'Visibility in the Spotlight section, Visibility in Top of the Search, Appointment booking feature, Deal & Coupons Visibility, Limited Photo Upload (Max 10), Call Support, Analytics access','duration'=>'90');
			  $plans[2] = array('plan_id'=>'3','title'=>'Palette Pro','plan_type'=>'A','price'=>'9000','features'=>'Visibility in the Spotlight section, Visibility in Top of the Search, Appointment booking feature, Deal & Coupons Visibility, Limited Photo Upload (Max 10), Call Support, Analytics access','duration'=>'365');
			  $plans[3] = array('plan_id'=>'4','title'=>'Palette Elite','plan_type'=>'Q','price'=>'6000','features'=>'Visibility in the Spotlight section , Visibility in Top of the Search , Visibility in Side Ads, Appointment booking feature, Customized Lead Generation Mechanism, Event Promotion on the Vendor detail page, Deal & Coupons Visibility, Dedicated Profile Management support, Unlimited Photo Upload, Call Support, Analytics access, Lead Updates via SMS','duration'=>'90');
			  $plans[4] = array('plan_id'=>'5','title'=>'Palette Elite','plan_type'=>'A','price'=>'18000','features'=>'Visibility in the Spotlight section, Visibility in Top of the Search , Visibility in Side Ads, Appointment booking feature, Customized Lead Generation Mechanism, Event Promotion on the Vendor detail page, Deal & Coupons Visibility, Dedicated Profile Management support, Unlimited Photo Upload, Call Support, Analytics access, Lead Updates via SMS','duration'=>'365');
								
				$plan_id_string_and_int_array = array(
					'Palette Express' => array('Free' => 0),
					'Palette Pro' => array('Q' => 1,'A' => 2),
					'Palette Elite' => array('Q' => 3,'A' =>4)
				);
				//Palette Express, Palette Pro, Palette Elite, //Free, Q, A
				$active_plane_id = $plan_id_string_and_int_array[$list[0]['plan_name']][$list[0]['plan_type']];					
	 			
				$origin = new DateTime($list[0]['created_date']);
				$target = new DateTime($list[0]['expire_date']);
				$interval = $origin->diff($target); //$interval->format('%R%a days') // Output: +12 days
				$no_of_days_left_in_expire = $interval->format('%a'); 
											  			  						  
				//calculate updrade price & monthly price 
				foreach($plans as $index => $plan ){
					//calculate updrade price & based on remening days & plan type push into array
					$upgrade_price = 0;
					if($active_plane_id=='0'){	
						$upgrade_price = $plans[$index]['price'];
					}else if($active_plane_id=='1'){
						if($index===3){
							$upgrade_price = ($no_of_days_left_in_expire)*33.33+(($plans[$index]['duration']-$no_of_days_left_in_expire)*66.7);
						}else if($index===4){
							$upgrade_price = ($no_of_days_left_in_expire)*16+(($plans[$index]['duration']-$no_of_days_left_in_expire)*49.3);
						}		
					}else if($active_plane_id=='2'){
						if($index===4){
							$upgrade_price = ($no_of_days_left_in_expire)*24.7+(($plans[$index]['duration']-$no_of_days_left_in_expire)*49.3);
						}
					}	
					$plans[$index]['upgrade_price']=$upgrade_price;
					
					//calculate monthly price & push into array
					$no_of_months = 1;
					if($plans[$index]['plan_type']=='Q'){
						$no_of_months = 3;
					}else if($plans[$index]['plan_type']=='A'){
						$no_of_months = 12;
					}	
					$plans[$index]['monthly_price']=(int)$upgrade_price/$no_of_months;
				}		  	  
			  ?>
			
            <div class="card">
              <div class="card-header">
                <!--<h3 class="card-title">DataTable with default features</h3>-->
                <h3 class="card-title">Plan Data (<b style="color:green;">Active</b>) [<?php echo md5($active_plane_id)."".$active_plane_id; ?>]</h3>
                <!-- <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;float: right;" href="<?php echo $addlink; ?>"><i class="fas fa-plus" style="font-size: 14px;"> Add New</i></a> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body"> 
			  <!-- for working below table use id example1-->
                <table id="example1hide" class="table table-bordered table-striped">
                  <thead>
                  <tr>
                    <th>ID</th>
                    <th>Plan Name</th>
                    <th>Plan Type</th>
                    <th>Price</th>
                    <th>Created On</th>
					<th>Exprired On</th>
                  </tr>
                  </thead>
                  <tbody>
                      <?php 
                      $i = 1;
                      foreach ($list as $row) {
						$active_duration = $active_plan_type;  
						if($row['plan_type']=='Q'){
							$active_duration = 'Billed Quarterly';
						}else if($row['plan_type']=='A'){
							$active_duration = 'Billed Annually';
						}
						  $price = $row['amount'];
						  $monthly_price = ($price/$no_of_months)
                          ?>
                  <tr>
                    <td><?php echo $i; ?> </td>
                    <td><?php echo $row['plan_name']; ?> </td>
                    <td><?php echo $active_duration; ?></td>
                    <td><?php echo "INR ".$price." (INR ".$monthly_price."/mothly)"; ?> </td>
					<td><?php echo date("d M Y - h:i A", strtotime($row['created_date'])); ?> </td>
					<td><?php echo date("d M Y - h:i A", strtotime($row['expire_date'])); ?> </td>
                     <!-- <td>-->
                       <!-- <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php //echo $editlink.''.$row['category_id']; ?>"><i class="fas fa-edit" style="font-size: 14px;">edit</i></a>
                        <a class="btn btn-app" style="height: auto;margin: auto;padding: 5px 5px;" href="<?php //echo $deletelink.''.$row['category_id']; ?>"><i class="fas fa-trash-alt" style="font-size: 14px;"> delete</i></a>
                    </td> -->
                  </tr>
                  
                   <?php
						$i++;
                      }
                      ?>
                  
                  </tbody>
                  <tfoot>
                  <tr>
                    <th>ID</th>
                    <th>Plan Name</th>
                    <th>Plan Type</th>
                    <th>Price</th>
                    <th>Created On</th>
					<th>Exprired On</th>
<!--                    <th>Rendering engine</th>
                    <th>Browser</th>
                    <th>Platform(s)</th>
                    <th>Engine version</th>
                    <th>CSS grade</th>-->
                  </tr>
                  </tfoot>
                </table>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    <!-- /.content -->
	
	<!-- /.Vendor Registration Plans -->
	<section class="price_list common_section">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="top">
                    <h1>Plans & Pricing</h1>
					<?php 
					//hide show plans as per logic
					$express='';
					$pro='';
					$elite='';
			
					if($active_plane_id == '0'){
						$express = "shankar";
					}else if($active_plane_id == '1'){
						$express = "shankar";
						$pro='shankar';
					}else if($active_plane_id == '2'){
						$express = "shankar";
						$pro='shankar';
						$elite='shankar';
					}
					?>
                    <div class="toggle-btn <?php echo $elite; ?>">
                        <span style="margin: 0.8em;">Annually</span>
                        <label class="switch">
                          <input type="checkbox" id="checbox" onclick="check()" ; />
                          <span class="slider round"></span>
                        </label>
                        <span style="margin: 0.8em;">Quarterly</span>
                    </div>
					<?php //} ?>
                </div>
            </div>

            <div class="col-md-12">
                <div class="snip1255">
                    <div class="plan plan-4 <?php echo $express; ?>">
                        <header>
                            <!-- <p>MWP</p> -->
                            <h4 class="plan-title planname3" data-plan3="palette-express"><?php echo $plans[0]['title']; ?></h4>
                             <h2 class="text1 free-plan-text">
								<small>
									<?php echo $plans[0]['plan_type']; ?>
									<strike><span class="text-muted">INR <?php echo $plans[1]['price']; ?> </span></strike><br>
								</small></h2>
                             <h2 class="text2 free-plan-text">
								<small>
									<?php echo $plans[0]['plan_type']; ?>
									<strike><span class="text-muted">INR <?php echo $plans[1]['price']; ?> </span></strike><br>
								</small>
							</h2>
                            <!-- <div class="plan-cost"><span class="plan-price">$8</span><span class="plan-type">/month</span></div> -->
                            <div class="plan-select" id="free-plan-btn"><a href="#vendorPaymentModel" type="button" class="vendorPlan3">Upgrade</a></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="fa fa-check" aria-hidden="true"></i> Claimed Listing Tag</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Basic Lead Generation Mechanism</li>
                            <li> <i class="fa fa-check" aria-hidden="true"></i>Limited Photo Uploads (Max 5)</li>
                            <!-- <li><i class="fa fa-check" aria-hidden="true"></i> Exclusive Access to Our Preferred Vendors</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Regular Updates and Consultations</li> -->
                            <!-- <li>Daily Backups</li> -->
                        </ul>
                    </div>
                    <div class="plan featured plan-5 <?php echo $pro; ?>">
                        <header>
                            <!-- <p>MWP </p> -->
                            <h4 class="plan-title planname1" data-plan1="palette-pro"><?php echo $plans[1]['title']; ?></h4>
                             <h2 class="text1">
								<small>
									<strike><span class="text-muted">INR 3000/month</span></strike><br>
									<strike><span class="text-muted">INR <?php echo $plans[1]['price']; ?> </span></strike><br>
									<span style="font-size: 18px;color:#fd152a;font-weight:600;margin-top:6px" class="planpriceannual" data-annual1="inr-1000">INR <?php echo $plans[1]['monthly_price']; ?> /month</span>  <br> 
									(Billed Quarterly)
								</small>
							</h2>
                             <h2 class="text2">
								<small>
									<strike><span class="text-muted">INR 2000/month</span></strike><br>
									<strike><span class="text-muted">INR <?php echo $plans[2]['price']; ?> </span></strike><br>
									<span style="font-size: 18px;color:#fd152a;font-weight:600;margin-top:6px" class="planpricemonth" data-month1="inr-750">INR <?php echo $plans[2]['monthly_price']; ?> /month</span>  <br> 
									(Billed Annually)
								</small>
							</h2>
                            <!-- <div class="plan-cost"><span class="plan-price">$49</span><span class="plan-type">/month</span></div> -->
                            <div class="plan-select"><a href="#vendorPaymentModel" type="button" class="vendorPlan">Upgrade</a></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="fa fa-check" aria-hidden="true"></i> Visibility in the Spotlight section</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Visibility in Top of the Search</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Appointment booking feature</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Deal & Coupons Visibility</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Limited Photo Upload (Max 10)</li>    
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Call Support</li>
                            <!--<li><i class="fa fa-check" aria-hidden="true"></i>  Call Support</li>-->
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Analytics access</li>
                        </ul>
                    </div>
                    <div class="plan plan-6">
                        <header>
                           <!--  <p>MWP </p> -->
                            <h4 class="plan-title planname1" data-plan2="palette-elite"><?php echo $plans[3]['title']; ?></h4>
                           <h2 class="text1 strikeprice1">
								<small>
									<strike><span class="text-muted">INR 6000/month</span></strike><br>
									<strike><span class="text-muted">INR <?php echo $plans[3]['price']; ?> </span></strike><br>
									<span  style="font-size: 18px;color:#fd152a;font-weight:600;margin-top:6px" class="planpriceannual1" data-annual2="inr-2000">INR <?php echo $plans[3]['monthly_price']; ?> /month </span><br>
									(Billed Quarterly)
								</small>
							</h2>
                            <h2 class="text2 strikeprice2">
								<small>
									<strike><span class="text-muted">INR 4500/month</span></strike><br>
									<strike><span class="text-muted">INR <?php echo $plans[4]['price']; ?> </span></strike><br>
									<span  style="font-size: 18px;color:#fd152a;font-weight:600;margin-top:6px" class="planpricemonth1" data-month12="inr-1500">INR <?php echo $plans[4]['monthly_price']; ?> /month </span><br> 
									(Billed Annually)
								</small>
							</h2>
                            <div class="plan-select"><a href="#vendorPaymentModel" class="vendorPlan2">Upgrade</a></div>
                        </header>
                        <ul class="plan-features">
                            <li><i class="fa fa-check" aria-hidden="true"></i> Visibility in the Spotlight section</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Visibility in Top of the Search</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Visibility in Side Ads</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Appointment booking feature</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Customized Lead Generation Mechanism</li>
                            <!--<li><i class="fa fa-check" aria-hidden="true"></i> Events Calendar Visibility</li>-->
                            <li><i class="fa fa-check" aria-hidden="true"></i> Event Promotion on the Vendor detail page</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Deal & Coupons Visibility</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Dedicated Profile Management support</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Unlimited Photo Upload</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Call Support</li>
                           <!-- <li><i class="fa fa-check" aria-hidden="true"></i>  Can Reply to reviews</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i>  Can Pin reviews to top</li>-->
                            <li><i class="fa fa-check" aria-hidden="true"></i> Analytics access</li>
                            <li><i class="fa fa-check" aria-hidden="true"></i> Lead Updates via SMS</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- /.Vendor Registration Plans -->
  </div>
  <!-- /.content-wrapper -->
         <?php $this->load->view('VendorPanel/layout/footer'); 
		 $this->load->view('front/layout/script'); ?>
    </div>

    <?php $this->load->view('VendorPanel/layout/script'); ?>