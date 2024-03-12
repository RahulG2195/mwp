<?php $this->load->view('admin/layout/header'); ?>
<?php $this->load->view('admin/layout/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
<!-- Content Header (Page header) -->
    <div class="content-header">
        <div class="container-fluid">
            <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0">Query Leads Data</h1>
                </div><!-- /.col -->
                <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>admin/index">Home</a></li>
                    <li class="breadcrumb-item active">Vendor Dashboard</li>
                </ol>
                </div> -->
                <!-- /.col -->
            </div><!-- /.row -->
        </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->
           
               <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Query Lead</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="example1" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                                    <tbody>

                                                                           <?php 
                                            if(!empty($result))
                                            { 
                                                    //    echo "<pre>";
    //    print_r($result);
                                                    // foreach($result as $row)
                                                // {  
                                                    // echo "row ".$row."</br>";
                                                // }
                                                // exit;
                                             ?>
                                                <!-- // Name  [Text Entry] -->
                                    <tr>
                                        <td>Category:</td>
                                        <td><?php echo $result["category_name"]; ?></td>
                                    </tr>
                                    <?php
                if($result['is_paid_vendor']){
            //common fields 
            ?>
                                    <!-- // Name  [Text Entry] -->
                                    <tr>
                                        <td>Name:</td>
                                        <td><?php echo $result["name"]; ?></td>
                                    </tr>
                                    <!-- // Phone Number  [Text Entry] -->
                                    <tr>
                                        <td>Phone Number:</td>
                                        <td><?php echo $result["phone_no"]; ?></td>
                                    </tr>
                                    <!-- // Email Address  [Text Entry] -->
                                    <tr>
                                        <td>Email Address:</td>
                                        <td><?php echo $result["email"]; ?></td>
                                    </tr>
                                    <!-- // Function date [Date Picker] -->
                                    <tr>
                                        <td>Function date:</td>
                                        <td><?php echo $result["function_date"]; ?></td>
                                    </tr>
                                    <?php
            switch ($result['cat_id']) {
            case 1:
                // echo "Venues";
                ?>
                                    <!-- // Type of Venue Space required: [Dropdown: Indoor / Outdoor / Both] -->
                                    <tr>
                                        <td>Type of Venue Space required:</td>
                                        <td><?php echo $result["venue_type"]; ?></td>
                                    </tr>
                                    <!-- // Approximate Guest Count: [Number Entry] -->
                                    <tr>
                                        <td>Approximate Guest Count:</td>
                                        <td><?php echo $result["venue_guest_count"]; ?></td>
                                    </tr>
                                    <!-- // Budget Range for Venue: [Dropdown: Below 1 Lakh, 1-2 Lakhs, 2-5 Lakhs, 5-10 Lakhs, Above 10 lakhs] -->
                                    <tr>
                                        <td>Budget Range for Venue:</td>
                                        <td><?php echo $result["venue_budget_range"]; ?></td>
                                    </tr>
                                    <?php     
            break;
            case 2:
                // echo "Bridal Wear";
                ?>
                                    <!-- // Preferred Outfit Style: [Dropdown: Traditional / Contemporary / Fusion/ Designer] -->
                                    <tr>
                                        <td>Preferred Outfit Style:</td>
                                        <td><?php echo $result["bridal_outfit_style"]; ?></td>
                                    </tr>
                                    <!-- // Budget Range for Bridal Wear: [Dropdown: Below 5000 / 5000 – 10,000 /10,000-25,000/25,000-50,000/ 50,000- 1 lakh/ Above 1 Lakh] -->
                                    <tr>
                                        <td>Budget Range for Bridal Wear:</td>
                                        <td><?php echo $result["bridal_budget_range"]; ?></td>
                                    </tr>
                                    <?php
            break;
            case 3:
                // echo "Groom Wear";
                ?>
                                    <!-- // Preferred Outfit Style: [Dropdown: Traditional / Western / Indo-Western] -->
                                    <tr>
                                        <td>Preferred Outfit Style:</td>
                                        <td><?php echo $result["groom_outfit_style"]; ?></td>
                                    </tr>
                                    <!-- // Budget Range for Groom Wear: [Dropdown: Below 50,000 / 5,000 - 10,000 /10,000-25,000/ 25,000 – 50,000/ Above 50,000] -->
                                    <tr>
                                        <td>Budget Range for Groom Wear:</td>
                                        <td><?php echo $result["groom_budget_range"]; ?></td>
                                    </tr>
                                    <?php
            break;
            case 4:
                // echo "Photographers";
                ?>
                                    <!-- // Type of Event Coverage Needed: [Checkbox: Wedding Ceremony / Pre-Wedding Shoot / Reception / Full Wedding Package] -->
                                    <tr>
                                        <td>Type of Event Coverage Needed:</td>
                                        <td><?php echo $result["photo_type_of_event"]; ?></td>
                                    </tr>
                                    <!-- // Per day Budget Range for Photography Services: [Dropdown: Below 50,000 / 50,000 - 1,00,000 / Above 1,00,000] -->
                                    <tr>
                                        <td>Per day Budget Range for Photography Services:</td>
                                        <td><?php echo $result["photo_day_budget"]; ?></td>
                                    </tr>
                                    <!-- // Expected Number of Guests: [Text Entry] -->
                                    <tr>
                                        <td>Expected Number of Guests:</td>
                                        <td><?php echo $result["phpto_number_of_guest"]; ?></td>
                                    </tr>
                                    <!-- // Location of Event: [Text Entry] -->
                                    <tr>
                                        <td>Location of Event:</td>
                                        <td><?php echo $result["photo_event_location"]; ?></td>
                                    </tr>
                                    <?php
            break;
            case 5:
                // echo "Make Up Artists";
                ?>
                                    <!-- // Type of Makeup Services Needed: [Checkbox: Bridal Makeup / Party Makeup / Engagement Makeup / Other] -->
                                    <tr>
                                        <td>Type of Makeup Services Needed:</td>
                                        <td><?php echo $result["make_up_type"]; ?></td>
                                    </tr>
                                    <!-- // Number of People Requiring Makeup: [Text Entry] -->
                                    <tr>
                                        <td>Number of People Requiring Makeup:</td>
                                        <td><?php echo $result["make_up_people_requiring"]; ?></td>
                                    </tr>
                                    <!-- // Budget Range for Bridal Makeup Services: [Dropdown: Below 5,000 / 5,000 - 10,000 /10,000-20,000/ Above 20,000] -->
                                    <tr>
                                        <td>Budget Range for Bridal Makeup Services:</td>
                                        <td><?php echo $result["make_up_budget_range"]; ?></td>
                                    </tr>
                                    <!-- // Brands or Products Requested: [Dropdown: International/ Indian/ Local/ Mix of all] -->
                                    <tr>
                                        <td>Brands or Products Requested:</td>
                                        <td><?php echo $result["make_up_brands"]; ?></td>
                                    </tr>
                                    <!-- // Location for Makeup Session: [Text Entry] -->
                                    <tr>
                                        <td>Location for Makeup Session:</td>
                                        <td><?php echo $result["make_up_session_location"]; ?></td>
                                    </tr>
                                    <?php
            break;
            case 6:
                // echo "Mehendi Artists";
                ?>
                                    <!-- // Number of People Getting Mehendi Applied: [Text Entry] -->
                                    <tr>
                                        <td>Number of People Getting Mehendi Applied:</td>
                                        <td><?php echo $result["mehendi_no_of_people"]; ?></td>
                                    </tr>
                                    <!-- // Budget Range for Mehendi Services: [Dropdown: Below 10,000 / 10,000 - 20,000 / Above 20,000] -->
                                    <tr>
                                        <td>Budget Range for Mehendi Services:</td>
                                        <td><?php echo $result["mehendi_budget_range"]; ?></td>
                                    </tr>
                                    <!-- // Preferred Mehendi Application Style: [Checkbox: Traditional / Arabic / Bridal / Intricate Designs / Minimalist Designs / Other] -->
                                    <tr>
                                        <td>Preferred Mehendi Application Style:</td>
                                        <td><?php echo $result["mehendi_style"]; ?></td>
                                    </tr>
                                    <!-- // Location for Mehendi Application: [Text Entry] -->
                                    <tr>
                                        <td>Location for Mehendi Application:</td>
                                        <td><?php echo $result["mehendi_location"]; ?></td>
                                    </tr>
                                    <?php
            break;
            case 7:
                // echo "Bridal Jewellery";
                ?>
                                    <!-- // Type of Jewellery Needed: [Checkbox: Bridal Necklace / Earrings / Maang Tikka /Bridal Accessories / Others] -->
                                    <tr>
                                        <td>Type of Jewellery Needed:</td>
                                        <td><?php echo $result["jewellery_type"]; ?></td>
                                    </tr>
                                    <!-- // Budget Range for Jewelry: [Dropdown: Below 30,000 / 30,000 - 50,000 / 50,000- 1 lakh/ 1 lakh – 2 lakh/ Above 2 Lakhs] -->
                                    <tr>
                                        <td>Budget Range for Jewelry:</td>
                                        <td><?php echo $result["jewellery_budget_range"]; ?></td>
                                    </tr>
                                    <?php
            break;
            case 8:
                // echo "Decoration";
                ?>
                                    <!-- // Type of Decoration Services Needed: [Checkbox: Mandap Decoration / Stage Decoration / Venue Entrance / Full Event decoration/ Others] -->
                                    <tr>
                                        <td>Type of Decoration Services Needed:</td>
                                        <td><?php echo $result["decoration_type"]; ?></td>
                                    </tr>
                                    <!-- // Estimated Guest Count: [Text Entry] -->
                                    <tr>
                                        <td>Estimated Guest Count:</td>
                                        <td><?php echo $result["decoration_guest_count"]; ?></td>
                                    </tr>
                                    <!-- // Budget Range for Decoration:[Dropdown: Below 50,000 / 50,000 - 1,00,000 / 1-2 Lakhs/ 2-5 lakhs/ Above 5 lakhs] -->
                                    <tr>
                                        <td>Budget Range for Decoration:</td>
                                        <td><?php echo $result["decoration_budget_range"]; ?></td>
                                    </tr>
                                    <!-- // Preferred Style of Decoration: [Dropdown: Traditional / Contemporary / Fusion / Customised/ Other] -->
                                    <tr>
                                        <td>Preferred Style of Decoration:</td>
                                        <td><?php echo $result["decoration_style"]; ?></td>
                                    </tr>
                                    <!-- // Venue Address for Decoration Setup: [Text Entry] -->
                                    <tr>
                                        <td>Venue Address for Decoration Setup:</td>
                                        <td><?php echo $result["decoration_address"]; ?></td>
                                    </tr>
                                    <?php
            break;
            case 9:
                // echo "Gifts";
                ?>
                                    <!-- // Type of Gift/favours required [Edible/Non-Edible/Both] -->
                                    <tr>
                                        <td>Type of Gift/favours required:</td>
                                        <td><?php echo $result["gift_type"]; ?></td>
                                    </tr>
                                    <!-- // Minimum number of Gifts required: [Text entry] -->
                                    <tr>
                                        <td>Minimum number of Gifts required:</td>
                                        <td><?php echo $result["gift_number_of"]; ?></td>
                                    </tr>
                                    <!-- // Per Gift range: [Dropdown: Below Rs. 100/ Rs. 100-250/ Rs. 250-500/ Rs. 500-1000/ Above Rs. 1000 -->
                                    <tr>
                                        <td>Per Gift range:</td>
                                        <td><?php echo $result["gift_price_range"]; ?></td>
                                    </tr>
                                    <?php
            break;
            case 10:
                // echo "Catering";
                ?>
                                    <!-- // Number of People to be served: [Text Entry] -->
                                    <tr>
                                        <td>Number of People to be served:</td>
                                        <td><?php echo $result["catering_no_of_people"]; ?></td>
                                    </tr>
                                    <!-- // Total number of functions: [Text entry] -->
                                    <tr>
                                        <td>Total number of functions:</td>
                                        <td><?php echo $result["catering_no_of_function"]; ?></td>
                                    </tr>
                                    <!-- // Per Plate budget for reception: [Dropdown: Less than 250/ 250-500/ 500-750/750-1000/ 1000-1500/ 1500-2000/ above 2000] -->
                                    <tr>
                                        <td>Per Plate budget for reception:</td>
                                        <td><?php echo $result["catering_per_plate_budget"]; ?></td>
                                    </tr>
                                    <!-- // Preferred food type: [Dropdown: Veg/ Non-veg/ Both] -->
                                    <tr>
                                        <td>Preferred food type:</td>
                                        <td><?php echo $result["catering_food_type"]; ?></td>
                                    </tr>
                                    <!-- // Location of event: [Text Entry] -->
                                    <tr>
                                        <td>Location of event:</td>
                                        <td><?php echo $result["catering_event_location"]; ?></td>
                                    </tr>
                                    <?php
            break;
            case 13:
                // echo "Invitations";
                ?>
                                    <!-- // Type of Invitation cards required: [ Traditional/ Artsistic/ Boxed/ Luxurious/ Others] -->
                                    <tr>
                                        <td>Type of Invitation cards required:</td>
                                        <td><?php echo $result["invitation_type"]; ?></td>
                                    </tr>
                                    <!-- // Minimum Number of cards required: [Text Entry] -->
                                    <tr>
                                        <td>Minimum Number of cards required:</td>
                                        <td><?php echo $result["invitation_number_of_cards"]; ?></td>
                                    </tr>
                                    <!-- // Per Card Budget range: [Dropdown: Below Rs. 10/ Rs. 10-20/ Rs. 20-50/ Rs. 50-100/ Rs.100-200/ Rs.200 – 500/ Above Rs. 500 -->
                                    <tr>
                                        <td>Per Card Budget range:</td>
                                        <td><?php echo $result["invitation_card_budget"]; ?></td>
                                    </tr>
                                    <?php
            break;                                        
            default:
                // echo "default";
            break;
        }
        ?>
                                    <!-- // Additional Comments or Questions [Text Area]            -->
                                    <tr>
                                        <td>Additional Comments or Questions:</td>
                                        <td><?php echo $result["comment"]; ?></td>
                                    </tr>

                                    <?php
        } else{
            ?>
                                    <!-- //default form -->
                                    <!-- // Name  [Text Entry] -->
                                    <tr>
                                        <td>Name:</td>
                                        <td><?php echo $result["name"]; ?></td>
                                    </tr>
                                    <!-- // Phone Number  [Text Entry] -->
                                    <tr>
                                        <td>Phone Number:</td>
                                        <td><?php echo $result["phone_no"]; ?></td>
                                    </tr>
                                    <!-- // Email Address  [Text Entry] -->
                                    <tr>
                                        <td>Email Address:</td>
                                        <td><?php echo $result["email"]; ?></td>
                                    </tr>
                                    <!-- // Function date [Date Picker] -->
                                    <tr>
                                        <td>Function date:</td>
                                        <td><?php echo $result["function_date"]; ?></td>
                                    </tr>
                                    <!-- // A message box to input the details that customer wants. [Text Area] -->
                                    <tr>
                                        <td>Message:</td>
                                        <td><?php echo $result["message"]; ?></td>
                                    </tr>
                                    <?php
        }
                                  ?>
                                    <?php   
                                        } else {
                                                echo "No records Found";
                                        } 
                                         ?>
                                
                                    
                                    </tbody>
                                </table>
                            </div>
                            <div class="card-footer" style="text-align:center;">
                                <a href="<?php echo base_url() ?>admin/VendorLead" class="btn btn-info">Back</a>
                            </div>
                            <!-- /.card-body -->
                        </div>

                               
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
               <!-- /.content -->
    </div>
<?php $this->load->view('admin/layout/footer'); ?>
    </div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>
                   
            
            