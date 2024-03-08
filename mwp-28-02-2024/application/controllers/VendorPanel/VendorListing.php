<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class VendorListing extends CI_Controller {

    public function __construct() {
        
        parent::__construct();
        $this->load->model('VendorPanel/CategoryModel');
        $this->load->model('VendorPanel/SubCategoryModel');
    }

    
    public function vendordata()
    {

        $venue = array(
                    'price_from'=>array( 
                    'section' => 'Price Details',
                    'price_from' => array(
                            "lable" => "price_from", 
                            "class" => "class3",
                            "data_type" => "text",
                            "value" => ""
                    )),
                    'price_to'=>array( 
                    'section' => 'Price Details',
                    'price_to' => array(
                            "lable" => "price_to", 
                            "class" => "class3",
                            "data_type" => "text",
                            "value" => ""
                    )),
                    'price_per_plate'=>array( 
                    'section' => 'Price Details',
                    'price_per_plate' => array(
                            "lable" => "price_per_plate", 
                            "class" => "class3",
                            "data_type" => "text",
                            "value" => ""
                    )),
                    'general_capacity'=>array( 
                    'section' => 'More Info',
                    'general_capacity' => array(
                            "lable" => "general_capacity", 
                            "class" => "class3",
                            "data_type" => "text",
                            "value" => ""
                    )),
                    'facility_and_capacity'=>array( 
                    'section' => 'More Info',
                    'facility_and_capacity' => array(
                            "lable" => "facility_and_capacity", 
                            "class" => "class3",
                            "data_type" => "text",
                            "value" => ""
                    )),
                    'rental_price' => array(
                    'section' => 'more info',
                    'rental_price' => array(
                            "lable" => "rental_price", 
                            "class" => "class2",
                            "data_type" => "text",
                            "value" => ""
                    )),
                    'event_spaces' => array(
                    'section' => 'more info',
                    'banquet_halls' => array(
                            "lable" => "banquet_halls", 
                            "class" => "class1", 
                            "data_type" => "checkbox",
                            "value" => "Banquet Halls"
                    ),
                    'lawns_and_farmhouse' => array(
                            "lable" => "lawns_and_farmhouse", 
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Lawns & Farmhouse"
                    ),
                    'resorts' => array(
                            "lable" => "resorts", 
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Resorts"
                    ),
                    'hotels' => array(
                            "lable" => "hotels",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Hotels"
                    ),
                    'destination_feels' => array(
                            "lable" => "hotels",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Destination Feels"
                    ),
                    'marriage_garden' => array(
                            "lable" => "hotels",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Marriage Garden"
                    ),
                    'palace_or_fort' => array(
                            "lable" => "hotels",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Palace/ Fort"
                    )),
                    'no_of_spaces_available' => array(
                    'section' => 'more info',
                    'no_of_spaces_available' => array(
                            "lable" => "no_of_spaces_available", 
                            "class" => "class3",
                            "data_type" => "text",
                            "value" => ""
                    )),
                    'guest_accomodation'=>array( 
                    'section' => 'More Info',
                    'guest_accomodation' => array(
                            "lable" => "guest_accomodation", 
                            "class" => "class3",
                            "data_type" => "text",
                            "value" => ""
                    )),
                    'no_of_rooms'=>array( 
                    'section' => 'More Info',
                    'no_of_rooms' => array(
                            "lable" => "no_of_rooms", 
                            "class" => "class3",
                            "data_type" => "text",
                            "value" => ""
                    )),
                    'inhouse_vendors_available' => array(
                    'section' => 'more info',
                    'categring' => array(
                            "lable" => "categring", 
                            "class" => "class1", 
                            "data_type" => "checkbox",
                            "value" => "0"
                    ),
                    'decorators' => array(
                            "lable" => "decorators", 
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "0"
                    ),
                    'dj' => array(
                            "lable" => "dj", 
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "0"
                    ),
                    'others' => array(
                            "lable" => "dj",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "0"
                    )),
                    'external_vendors_allowed' => array(
                    'section' => 'more info',
                    'catering' => array(
                            "lable" => "catering", 
                            "class" => "class1", 
                            "data_type" => "checkbox",
                            "value" => "0"
                    ),
                    'decorators' => array(
                            "lable" => "decorators", 
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "0"
                    ),
                    'dj' => array(
                            "lable" => "dj", 
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "0"
                    ),
                    'others' => array(
                            "lable" => "dj",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "0"
                    )),
                    'cuisines' => array(
                    'section' => 'more info',
                    'north_indian_or_mughlai' => array(
                            "lable" => "north_indian_or_mughlai", 
                            "class" => "class1", 
                            "data_type" => "checkbox",
                            "value" => "North indian/ Mughlai"
                    ),
                    'south_indian' => array(
                            "lable" => "south_indian", 
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "South indian"
                    ),
                    'chinese_thai_oriental' => array(
                            "lable" => "resorts", 
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Chinese/ thai/ oriental"
                    ),
                    'italian_european_continental' => array(
                            "lable" => "italian_european_continental",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Italian/ european/ continental"
                    ),
                    'garlic_free_or_onion_free' => array(
                            "lable" => "garlic_free_or_onion_free",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Garlic Free/ Onion Free"
                    ),
                    'live_food_counters' => array(
                            "lable" => "live_food_counters",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Live food counters"
                    ), 
                    'chat_indian_street_food' => array(
                            "lable" => "chat_indian_street_food",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Chaat & indian street food"
                    ),
                    'drinks_non_alcoholic' => array(
                            "lable" => "drinks_non_alcoholic",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Drinks (non-alcoholic)"
                    ),
                    'seafood' => array(
                            "lable" => "seafood",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Seafood,"
                    ),
                    'seafood' => array(
                            "lable" => "seafood",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Seafood,"
                    ),
                    'others' => array(
                            "lable" => "others",
                            "class" => "class1",
                            "data_type" => "checkbox",
                            "value" => "Others,"
                    )),
                    'veg_menu_range' => array(
                    'section' => 'more info',
                    'veg_menu_range' => array(
                            "lable" => "veg_menu_range", 
                            "class" => "class2",
                            "data_type" => "text",
                            "value" => ""
                    )),
                    'nonveg_menu_range' => array(
                    'section' => 'more info',
                    'nonveg_menu_range' => array(
                            "lable" => "nonveg_menu_range", 
                            "class" => "class2",
                            "data_type" => "text",
                            "value" => ""
                    )),

                    'features' => array(
                    'section' => 'more info',
                    'multiple_event_space_available' => array(
                            "lable" => "north_indian", 
                            "class" => "class1", 
                            "data_type" => "radio",
                            "value" => "Multiple Event Spaces Available"
                    ),
                    'varied_size_event_possible' => array(
                            "lable" => "varied_size_event_possible", 
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Varied Size Events Possible"
                    ),
                    'indoor_outdoor_space_availabel' => array(
                            "lable" => "indoor_outdoor_space_availabel", 
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Indoor & Outdoor Spaces Available"
                    ),
                    'indoor_spaces_only' => array(
                            "lable" => "indoor_spaces_only",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Indoor Spaces Only"
                    ),
                    'outdoor_spaces_only' => array(
                            "lable" => "outdoor_spaces_only",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Outdoor Spaces Only"
                    ),
                    'inhouse_catering_only' => array(
                            "lable" => "inhouse_catering_only",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Inhouse Catering Only"
                    ),
                    'inhouse_external_catering_allowed' => array(
                            "lable" => "inhouse_external_catering_allowed",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Inhouse and External Catering Allowed"
                    ),
                    'external_catering_only' => array(
                            "lable" => "external_catering_only",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "External Catering Only"
                    ),
                    'inhouse_decorators_only' => array(
                            "lable" => "inhouse_decorators_only",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Inhouse Decorators Only"
                    ),
                    'inhouse_and_external_decorators_allowed' => array(
                            "lable" => "inhouse_and_external_decorators_allowed",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Inhouse and External Decorators Allowed"
                    ),
                    'external_decorators_only' => array(
                            "lable" => "external_decorators_only",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "External Decorators Only"
                    ),
                    'inhouse_dj_only' => array(
                            "lable" => "inhouse_dj_only",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Inhouse DJ Only"
                    ),
                    'inhouse_and_external_dj_allowed' => array(
                            "lable" => "inhouse_and_external_dj_allowed",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Inhouse and external DJ Allowed"
                    ),
                    'external_dj_only' => array(
                            "lable" => "external_dj_only",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "External DJ Only"
                    ),
                    'multi_cuisine_expertise' => array(
                            "lable" => "multi_cuisine_expertise",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Multi-Cuisine Expertise"
                    ),
                    'alcohol_allowed' => array(
                            "lable" => "alcohol_allowed",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Alcohol Allowed"
                    ),
                    'alcohol_not_allowed' => array(
                            "lable" => "alcohol_not_allowed",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Alcohol Not Allowed"
                    ),
                    'bridal_or_groom_not_available' => array(
                            "lable" => "bridal_or_groom_not_available",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Bridal/Groom Suite Not Available"
                    ),
                    'bridal_or_groom_suit_available' => array(
                            "lable" => "bridal_or_groom_not_available",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Bridal/Groom Suite Available"
                    ),
                    'guest_accomodation_available' => array(
                            "lable" => "guest_accomodation_available",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Guest Accommodation Avaiable"
                    ),
                    'guest_accomodation_not_available' => array(
                            "lable" => "guest_accomodation_not_available",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Guest Accommodation Not Avaiable"
                    ),
                    'has_swimming_pool' => array(
                            "lable" => "has_swimming_pool",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Has Swimming Pool"
                    ),
                     'has_inhouse_restaurant' => array(
                            "lable" => "has_inhouse_restaurant",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Has Inhouse Restaurant"
                    ),
                    'ample_parking_space_facility' => array(
                            "lable" => "has_inhouse_restaurant",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Ample Parking Space facility"
                    ),
                     'valet_parking_facility_available' => array(
                            "lable" => "valet_parking_facility_available",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Valet Parking Facility Available"
                    ),
                    'has_gym_facilities' => array(
                            "lable" => "has_gym_facilities",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Has Gym Facilities"
                    ),
                    'has_bar_nightclub_area' => array(
                            "lable" => "has_bar_nightclub_area",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Has Bar and NightClub Area"
                    ),
                    'transportaion_service_available' => array(
                            "lable" => "transportaion_service_available",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Transporation Services Available"
                    ),
                    'backup_plan_available' => array(
                            "lable" => "transportaion_service_available",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Back-Up Plan (in-case of rain) Available"
                    ),
                    'sound_system_facilities_available' => array(
                            "lable" => "sound_system_facilities_available",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Sound System facilities Available"
                    ),
                    'wifi_services_available' => array(
                            "lable" => "wifi_services_available",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Wifi Services Available"
                    ),
                    'provides_customized_deor_lighting_facilities' => array(
                            "lable" => "provides_customized_deor_lighting_facilities",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Provides Customised Décor Lighting Facilities"
                    ),
                    'multiple_payment_option_accepted'=> array(
                            "lable" => "multiple_payment_option_accepted",
                            "class" => "class1",
                            "data_type" => "radio",
                            "value" => "Multiple Payment Options Accepted"
                    ),));
            $venue = json_encode($venue);

            echo "Venue json String <br><br>".$venue;
            echo "<br>---------------------------------------------------------------------------------------------------";
            
            echo "<br><br>Venue array";
            echo "<pre>";
            $fields = json_decode($venue,true);
            print_r($fields);
            echo "<br>---------------------------------------------------------------------------------------------------";
            
            echo "<br><br>Venue array for each<br><br>";
            $table = "<table style='border:1px solid gray;'>";
            foreach ($fields as $key => $fieldArray) {
                $table .= "<tr>";
                $table .= "<td><b>Fields Key -> </b>";
                $table .= "$key</td>";
                $table .= "</tr>";

                foreach ($fieldArray as $key2 => $field) {
                    $table .= "<tr>";
                    $table .= "<td><b>FieldArray Key2 -> </b>";
                    $table .= "$key2</td>";
                    $table .= "</tr>";

                    if(is_array($field)){
                        $table .= "<tr>";
                        $table .= "<td></td>";
                        $table .= "<td><b>Lable -> </b>";
                        $table .= "".$field['lable']."</td>";
                        
                        $table .= "<td><b>Class -> </b>";
                        $table .= "".$field['class']."</td>";
                        
                        $table .= "<td><b>Data Type -> </b>";
                        $table .= "".$field['data_type']."</td>";
                        
                        $table .= "<td><b>Value -> </b>";
                        $table .= "".$field['value']."</td>";
                        $table .= "</tr>";
                    }else{
                        $table .= "<tr>";
                        $table .= "<td></td>";
                        $table .= "<td><b>".$key2." --> </b>";
                        $table .= "$field</td>";
                        $table .= "</tr>";
                    }
                }
                $table .= "</tr>";
            }
             $table .= "</table>";
             echo $table;
            exit;

    }

    public function addvendordata()
    {

        $response['list'] = $this->CategoryModel->GetList(array());
        $this->load->view('VendorPanel/vendors/add-vendors', $response);

    }
    
    
}
