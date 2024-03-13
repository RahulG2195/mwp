<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Excel_Import extends CI_Controller {
    public function __construct() {
        parent::__construct();
        $this->load->database();
        $this->load->model('Excel_Import_Model');
        $this->load->library('excel');
    }

    function index() {
        $this->load->view('VendorPanel/Excel_upload/bulk_upload');
    }

    function Data_Import() {
        
        if(isset($_FILES['file']['name'])) {
            $path = $_FILES['file']['tmp_name'];
            $object = PHPExcel_IOFactory::load($path);
            
            foreach ($object->getWorksheetIterator() as $sheetdata) {
                
                $higestRow = $sheetdata->getHighestRow();
                $highestColumn = $sheetdata->getHighestColumn();

                for($i = 2; $i <= $higestRow; $i++) {  
                    
                    $id = trim($sheetdata->getCellByColumnAndRow(0, $i)->getValue());
                    // $verify = $this->Excel_Import_Model->verify_vendor_id($id);
                    // if($verify) {
                    $seo_url = trim($sheetdata->getCellByColumnAndRow(1, $i)->getValue());
                    $name = trim($sheetdata->getCellByColumnAndRow(2, $i)->getValue());
                    $email = trim($sheetdata->getCellByColumnAndRow(3, $i)->getValue());
                    $Phone = trim($sheetdata->getCellByColumnAndRow(4, $i)->getValue());
                    $Website= trim($sheetdata->getCellByColumnAndRow(5, $i)->getValue());
                    $username= trim($sheetdata->getCellByColumnAndRow(6, $i)->getValue());
                    $password= trim($sheetdata->getCellByColumnAndRow(7, $i)->getValue());
                    $vendor_status = trim($sheetdata->getCellByColumnAndRow(8, $i)->getValue());
                    $city = trim($sheetdata->getCellByColumnAndRow(9, $i)->getValue());
                    $area = trim($sheetdata->getCellByColumnAndRow(10, $i)->getValue());
                    $address = trim($sheetdata->getCellByColumnAndRow(11, $i)->getValue());
                    $category = (int)trim($sheetdata->getCellByColumnAndRow(12, $i)->getValue());
                    $pricedetail = trim($sheetdata->getCellByColumnAndRow(13, $i)->getValue());
                    $priceFrom = trim($sheetdata->getCellByColumnAndRow(14, $i)->getValue());
                    $priceTo = trim($sheetdata->getCellByColumnAndRow(15, $i)->getValue());
                    $payment = trim($sheetdata->getCellByColumnAndRow(16, $i)->getValue());
                    $percentage = trim($sheetdata->getCellByColumnAndRow(17, $i)->getValue());
                    $cancellation = trim($sheetdata->getCellByColumnAndRow(18, $i)->getValue());
                    $rating = trim((float) $sheetdata->getCellByColumnAndRow(19, $i)->getValue());
                    $review = trim($sheetdata->getCellByColumnAndRow(20, $i)->getValue());
                    $day = trim($sheetdata->getCellByColumnAndRow(21, $i)->getValue());
                    $hr = trim($sheetdata->getCellByColumnAndRow(22, $i)->getValue());
                    $social = trim($sheetdata->getCellByColumnAndRow(23, $i)->getValue());
                    $social_link = trim($sheetdata->getCellByColumnAndRow(24, $i)->getValue());
                    $about = trim($sheetdata->getCellByColumnAndRow(25, $i)->getValue());
                    $images = trim($sheetdata->getCellByColumnAndRow(26, $i)->getValue());
                    $logo = trim($sheetdata->getCellByColumnAndRow(27, $i)->getValue());
                    $service = trim($sheetdata->getCellByColumnAndRow(28, $i)->getValue());
                    $exp = trim($sheetdata->getCellByColumnAndRow(29, $i)->getValue());
                    $no_of_yrs = trim($sheetdata->getCellByColumnAndRow(30, $i)->getValue());
                    $features = trim($sheetdata->getCellByColumnAndRow(31, $i)->getValue());
                    
                    //status will be last 
                    // $vendor_status = trim($sheetdata->getCellByColumnAndRow(48, $i)->getValue());

                    // default array for all category 
                        $data = array(
                        'vendor_uid'=> $id,
                        'vendor_seo_url'=> strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', str_replace(' ', '-', $seo_url))),
                        'vendor_name'=> $name,
                        'vendor_email'=> $email,
                        'phone_no'=> $Phone,
                        'website'=> $Website,
                        'user_name'=> $username,
                        'password'=> md5($password),
                        'city'=> $city,
                        'area'=> $area,
                        'address'=> $address,
                        'category'=> $category,
                        'price_range'=> $pricedetail,
                        'dv_start_price'=> $priceFrom,
                        'end_price'=> $priceTo,
                        'payment_opt'=> $payment,
                        'advance_per'=> $percentage,
                        'cancel_policy'=> $cancellation,
                        'rating'=> $rating,
                        'review'=> $review,
                        'business_day'=> $day,
                        'business_hr'=> $hr,
                        'social_media'=> $social,
                        'social_link'=> $social_link,
                        'about'=> $about,
                        'images'=> $images,
                        'comp_logo'=> $logo,
                        'service_offer'=> $service,
                        'vid_exp_since'=> $exp,
                        'no_of_yrs'=> $no_of_yrs,
                        'features'=> $features,
                        'vendor_status'=> $vendor_status,
                    );

                  $result = $this->db->insert('default_vendor_inp', $data);

                    if (!$result) {
                        // Insertion failed, log the error
                        $error_message = $this->db->error()['message'];
                        log_message('error', 'Database Error: ' . $error_message);
                    }
                    // venue
                    if($category == 1) {
                        $perplate = trim($sheetdata->getCellByColumnAndRow(32, $i)->getValue());
                        $general = trim($sheetdata->getCellByColumnAndRow(33, $i)->getValue());
                        $capicity = trim($sheetdata->getCellByColumnAndRow(34, $i)->getValue());
                        $allowsize = trim($sheetdata->getCellByColumnAndRow(35, $i)->getValue());
                        $rentalPrice = trim($sheetdata->getCellByColumnAndRow(36, $i)->getValue());
                        $alcohol = trim($sheetdata->getCellByColumnAndRow(37, $i)->getValue());
                        $eventspac = trim($sheetdata->getCellByColumnAndRow(38, $i)->getValue());
                        $space_avail = trim($sheetdata->getCellByColumnAndRow(39, $i)->getValue());
                        $guest = trim($sheetdata->getCellByColumnAndRow(40, $i)->getValue());
                        $noroom = trim($sheetdata->getCellByColumnAndRow(41, $i)->getValue());
                        $inhouse = trim($sheetdata->getCellByColumnAndRow(42, $i)->getValue());
                        $external = trim($sheetdata->getCellByColumnAndRow(43, $i)->getValue());
                        $cusiness = trim($sheetdata->getCellByColumnAndRow(44, $i)->getValue());
                        $vegrange = trim($sheetdata->getCellByColumnAndRow(45, $i)->getValue());
                        $nonveg = trim($sheetdata->getCellByColumnAndRow(46, $i)->getValue());
                        // $avail_service = trim($sheetdata->getCellByColumnAndRow(47, $i)->getValue());
                        // $features = trim($sheetdata->getCellByColumnAndRow(48, $i)->getValue());

                        $venue = array(
                            'vin_id'=> $id,
                            'price_per_plate'=> $perplate,
                            'general_cap'=> $general,
                            'fac_cap'=> $capicity,
                            'fn_size_allow'=> $allowsize,
                            'rental_price'=> $rentalPrice,
                            'alcohol_policy'=> $alcohol,
                            'event_spaces'=> $eventspac,
                            'space_avail'=> $space_avail,
                            'guest_accom'=> $guest,
                            'no_room'=> $noroom,
                            'inhouse_vendor'=> $inhouse,
                            'external_vendor'=> $external,
                            'cuisines'=> $cusiness,
                            'veg_menu_range'=> $vegrange,
                            'non_veg_range'=> $nonveg,
                            // 'space_avail'=> $avail_service,
                            // 'ven_opt'=> $features,
                        );
                        $this->db->insert('venue', $venue);

                    }elseif($category == 2) {
                        // bridal wear 
                        $shop_type = trim($sheetdata->getCellByColumnAndRow(32, $i)->getValue());
                        $bridal_start_price = trim($sheetdata->getCellByColumnAndRow(33, $i)->getValue());
                        $app_req = trim($sheetdata->getCellByColumnAndRow(34, $i)->getValue());
                        $occations = trim($sheetdata->getCellByColumnAndRow(35, $i)->getValue());
                        $fabric_used = trim($sheetdata->getCellByColumnAndRow(36, $i)->getValue());
                        $prod_type = trim($sheetdata->getCellByColumnAndRow(37, $i)->getValue());
                        $emblishments = trim($sheetdata->getCellByColumnAndRow(38, $i)->getValue());
                        $collection_type = trim($sheetdata->getCellByColumnAndRow(39, $i)->getValue());
                        $design_style = trim($sheetdata->getCellByColumnAndRow(40, $i)->getValue());
                        $customize_avail = trim($sheetdata->getCellByColumnAndRow(41, $i)->getValue());
                        $lead_time = trim($sheetdata->getCellByColumnAndRow(42, $i)->getValue());
                        $ship_out = trim($sheetdata->getCellByColumnAndRow(43, $i)->getValue());
                        $wear_price_range = trim($sheetdata->getCellByColumnAndRow(44, $i)->getValue());
                        // $availability = trim($sheetdata->getCellByColumnAndRow(45, $i)->getValue());
                        // $wear_opt = trim($sheetdata->getCellByColumnAndRow(46, $i)->getValue());
                               
                        $bridal = array(
                            'vin_id' => $id,
                            'shop_type' => $shop_type,
                            'bridal_start_price' => $bridal_start_price,
                            'app_req' => $app_req,
                            'occations' => $occations,
                            'fabric_used' => $fabric_used,
                            'prod_type' => $prod_type,
                            'emblishments' => $emblishments,
                            'collection_type' => $collection_type,
                            'design_style' => $design_style,
                            'customize_avail' => $customize_avail,
                            'lead_time' => $lead_time,
                            'wear_price_range' => $wear_price_range,
                            'ship_out' => $ship_out,
                            // 'availability' => $availability,
                            // 'wear_opt' => $wear_opt,
                        );
                        $this->db->insert('bridal_wear', $bridal);
                        // groom wear 
                    }elseif($category == 3) {
                        // groom 
                        $shop_type = trim($sheetdata->getCellByColumnAndRow(32, $i)->getValue());
                        $groom_start_price = trim($sheetdata->getCellByColumnAndRow(33, $i)->getValue());
                        $ap_require = trim($sheetdata->getCellByColumnAndRow(34, $i)->getValue());
                        $prod_type = trim($sheetdata->getCellByColumnAndRow(35, $i)->getValue());
                        $occation = trim($sheetdata->getCellByColumnAndRow(36, $i)->getValue());
                        $col_type = trim($sheetdata->getCellByColumnAndRow(37, $i)->getValue());
                        $design_type = trim($sheetdata->getCellByColumnAndRow(38, $i)->getValue());
                        $ship_out = trim($sheetdata->getCellByColumnAndRow(39, $i)->getValue());
                        $lead_time = trim($sheetdata->getCellByColumnAndRow(40, $i)->getValue());
                        $print_opt = trim($sheetdata->getCellByColumnAndRow(41, $i)->getValue());
                        $custom_order = trim($sheetdata->getCellByColumnAndRow(42, $i)->getValue());
                        $fabric = trim($sheetdata->getCellByColumnAndRow(43, $i)->getValue());
                        // $ser_avail = trim($sheetdata->getCellByColumnAndRow(43, $i)->getValue());
                        // $gw_opt = trim($sheetdata->getCellByColumnAndRow(44, $i)->getValue());
                        $groom = array(
                            'vin_id' => $id,
                            'shop_type' => $shop_type,
                            'groom_start_price' => $groom_start_price,
                            'ap_require' => $ap_require,
                            'col_type' => $col_type,
                            'occation' => $occation,
                            'prod_type' => $prod_type,
                            'design_type' => $design_type,
                            'ship_out' => $ship_out,
                            'lead_time' => $lead_time,
                            'print_opt' => $print_opt,
                            'custom_order' => $custom_order,
                            'fabric' => $fabric,
                            // 'ser_avail' => $ser_avail,
                            // 'gw_opt' => $gw_opt,
                        );
                        $this->db->insert('groom_wear', $groom);
                    }elseif($category == 4) {
                        // photo
                        $photo_start_price = trim($sheetdata->getCellByColumnAndRow(32, $i)->getValue());
                        $package1 = trim($sheetdata->getCellByColumnAndRow(33, $i)->getValue());
                        $package2 = trim($sheetdata->getCellByColumnAndRow(34, $i)->getValue());
                        $package3 = trim($sheetdata->getCellByColumnAndRow(35, $i)->getValue());
                        $ppackage_range1 = trim($sheetdata->getCellByColumnAndRow(36, $i)->getValue());
                        $ppackage_range2 = trim($sheetdata->getCellByColumnAndRow(37, $i)->getValue());
                        $ppackage_range3 = trim($sheetdata->getCellByColumnAndRow(38, $i)->getValue());
                        $ppackage_range4 = trim($sheetdata->getCellByColumnAndRow(39, $i)->getValue());
                        $occations = trim($sheetdata->getCellByColumnAndRow(40, $i)->getValue());
                        $travel_out = trim($sheetdata->getCellByColumnAndRow(41, $i)->getValue());
                        $delivery_time = trim($sheetdata->getCellByColumnAndRow(42, $i)->getValue());
                        // $avail_service = trim($sheetdata->getCellByColumnAndRow(42, $i)->getValue());

                        $photo = array(
                            'vin_id' => $id,
                            'photo_start_price' => $photo_start_price,
                            'package1' => $package1,
                            'package2' => $package2,
                            'package3' => $package3,
                            'ppackage_range1' => $ppackage_range1,
                            'ppackage_range2' => $ppackage_range2,
                            'ppackage_range3' => $ppackage_range3,
                            'ppackage_range4' => $ppackage_range4,
                            'occations' => $occations,
                            'travel_out' => $travel_out,
                            'delivery_time' => $delivery_time,
                        );
                        $this->db->insert('photography', $photo);
                    }elseif($category == 5) {
                        // make up
                        $makeup_start_price = trim($sheetdata->getCellByColumnAndRow(32, $i)->getValue());
                        $package1 = trim($sheetdata->getCellByColumnAndRow(33, $i)->getValue());
                        $package2 = trim($sheetdata->getCellByColumnAndRow(34, $i)->getValue());
                        $package1_range = trim($sheetdata->getCellByColumnAndRow(35, $i)->getValue());
                        $package2_range = trim($sheetdata->getCellByColumnAndRow(36, $i)->getValue());
                        $make_tech = trim($sheetdata->getCellByColumnAndRow(37, $i)->getValue());
                        $travel_out = trim($sheetdata->getCellByColumnAndRow(38, $i)->getValue());
                        // $avail_service = trim($sheetdata->getCellByColumnAndRow(38, $i)->getValue());
                        // $groom_service = trim($sheetdata->getCellByColumnAndRow(39, $i)->getValue());
                        // $mu_opt = trim($sheetdata->getCellByColumnAndRow(40, $i)->getValue());

                        $make = array(
                            'vin_id' => $id,
                            'makeup_start_price' => $makeup_start_price,
                            'package1' => $package1,
                            'package2' => $package2,
                            'package1_range' => $package1_range,
                            'package2_range' => $package2_range,
                            'make_tech' => $make_tech,
                            'travel_out' => $travel_out,
                            // 'avail_service' => $avail_service,
                            // 'groom_service' => $groom_service,
                            // 'mu_opt' => $mu_opt,
                        );
                        $this->db->insert('make_up', $make);

                    }elseif($category == 6) {
                        // mehendi
                        $mahendi_start_price = trim($sheetdata->getCellByColumnAndRow(32, $i)->getValue());
                        $price_hand = trim($sheetdata->getCellByColumnAndRow(33, $i)->getValue());
                        $max_people = trim($sheetdata->getCellByColumnAndRow(34, $i)->getValue());
                        $style_know = trim($sheetdata->getCellByColumnAndRow(35, $i)->getValue());
                        $meh_range = trim($sheetdata->getCellByColumnAndRow(36, $i)->getValue());
                        $guest_range = trim($sheetdata->getCellByColumnAndRow(37, $i)->getValue());
                        $mehendi_style = trim($sheetdata->getCellByColumnAndRow(38, $i)->getValue());

                        $mehendi = array(
                            'vin_id' => $id,
                            'mahendi_start_price' => $mahendi_start_price,
                            'price_hand' => $price_hand,
                            'max_people' => $max_people,
                            'style_know' => $style_know,
                            'meh_range' => $meh_range,
                            'guest_range' => $guest_range,
                            'mehendi_style' => $mehendi_style,
                        );
                        $this->db->insert('mehendi', $mehendi);
                    }elseif($category == 7) {
                        // jewellery
                        $jewel_start_price = trim($sheetdata->getCellByColumnAndRow(32, $i)->getValue());
                        $jew_type = trim($sheetdata->getCellByColumnAndRow(33, $i)->getValue());
                        $design_style = trim($sheetdata->getCellByColumnAndRow(34, $i)->getValue());
                        $cat_avail = trim($sheetdata->getCellByColumnAndRow(35, $i)->getValue());

                        $jewellery = array(
                            'vin_id' => $id,
                            'jewel_start_price' => $jewel_start_price,
                            'jew_type' => $jew_type,
                            'design_style' => $design_style,
                            'cat_avail' => $cat_avail,
                            // 'opt_avail' => $opt_avail,
                            // 'jewl_opt' => $jewl_opt,
                        );
                        $this->db->insert('bridal_jewellery', $jewellery);
                    }elseif($category == 8) {

                        // decorators
                        $decorator_start_price = trim($sheetdata->getCellByColumnAndRow(32, $i)->getValue());
                        $based_price = trim($sheetdata->getCellByColumnAndRow(33, $i)->getValue());
                        $package1_range = trim($sheetdata->getCellByColumnAndRow(34, $i)->getValue());
                        $package2_range = trim($sheetdata->getCellByColumnAndRow(35, $i)->getValue());
                        $deco_price_range = trim($sheetdata->getCellByColumnAndRow(36, $i)->getValue());
                        $min_range = trim($sheetdata->getCellByColumnAndRow(37, $i)->getValue());
                        $deco_style = trim($sheetdata->getCellByColumnAndRow(38, $i)->getValue());
                        $modern_style = trim($sheetdata->getCellByColumnAndRow(39, $i)->getValue());

                        $decorators = array(
                            'vin_id' => $id,
                            'decorator_start_price' => $decorator_start_price,
                            'based_price' => $based_price,
                            'package1_range' => $package1_range,
                            'package2_range' => $package2_range,
                            'deco_price_range' => $deco_price_range,
                            'min_range' => $min_range,
                            'deco_style' => $deco_style,
                            'modern_style' => $modern_style,
                        );
                        $this->db->insert('decorator', $decorators);

                    }elseif($category == 9) {
                        // gift
                        $gift_start_price = trim($sheetdata->getCellByColumnAndRow(32, $i)->getValue());
                        $gift_pack_price = trim($sheetdata->getCellByColumnAndRow(33, $i)->getValue());
                        $gift_type = trim($sheetdata->getCellByColumnAndRow(34, $i)->getValue());
                        $editable = trim($sheetdata->getCellByColumnAndRow(35, $i)->getValue());
                        $non_editable = trim($sheetdata->getCellByColumnAndRow(36, $i)->getValue());
                        $price_range_edit = trim($sheetdata->getCellByColumnAndRow(37, $i)->getValue());
                        $price_range_non_edit = trim($sheetdata->getCellByColumnAndRow(38, $i)->getValue());
                        $range_editable = trim($sheetdata->getCellByColumnAndRow(39, $i)->getValue());
                        $range_non_editable = trim($sheetdata->getCellByColumnAndRow(40, $i)->getValue());
                        // $service_avail = trim($sheetdata->getCellByColumnAndRow(41, $i)->getValue());
                        // $gift_opt = trim($sheetdata->getCellByColumnAndRow(42, $i)->getValue());

                        $gift = array(
                            'vin_id' => $id,
                            'gift_start_price' => $gift_start_price,
                            'gift_pack_price' => $gift_pack_price,
                            'gift_type' => $gift_type,
                            'editable' => $editable,
                            'non_editable' => $non_editable,
                            'price_range_edit' => $price_range_edit,
                            'price_range_non_edit' => $price_range_non_edit,
                            'range_editable' => $range_editable,
                            'range_non_editable' => $range_non_editable,
                            // 'service_avail' => $service_avail,
                            // 'gift_opt' => $gift_opt,
                        );
                        $this->db->insert('gift', $gift);

                    }elseif($category == 10) {
                        // Catering
                        $catering_start_price = trim($sheetdata->getCellByColumnAndRow(32, $i)->getValue());
                        $veg_menu = trim($sheetdata->getCellByColumnAndRow(33, $i)->getValue());
                        $non_veg_menu = trim($sheetdata->getCellByColumnAndRow(34, $i)->getValue());
                        $menu_opt = trim($sheetdata->getCellByColumnAndRow(35, $i)->getValue());
                        $service_avail = trim($sheetdata->getCellByColumnAndRow(36, $i)->getValue());

                        $Catering = array(
                            'vin_id' => $id,
                            'catering_start_price' => $catering_start_price,
                            'veg_menu' => $veg_menu,
                            'non_veg_menu' => $non_veg_menu,
                            'menu_opt' => $menu_opt,
                            'service_avail' => $service_avail,
                        );
                        $this->db->insert('catering', $Catering);
                    }elseif($category == 13) {
                        // inivitation
                        $invitation_start_price = trim($sheetdata->getCellByColumnAndRow(32, $i)->getValue());
                        $price_box = trim($sheetdata->getCellByColumnAndRow(33, $i)->getValue());
                        $box_invite = trim($sheetdata->getCellByColumnAndRow(34, $i)->getValue());
                        $print_card = trim($sheetdata->getCellByColumnAndRow(35, $i)->getValue());
                        $start_price_range = trim($sheetdata->getCellByColumnAndRow(36, $i)->getValue());
                        $price_range_box = trim($sheetdata->getCellByColumnAndRow(37, $i)->getValue());
                        $printed_card = trim($sheetdata->getCellByColumnAndRow(38, $i)->getValue());
                        $box_card = trim($sheetdata->getCellByColumnAndRow(39, $i)->getValue());
                        $type_avail = trim($sheetdata->getCellByColumnAndRow(40, $i)->getValue());
                        $paper_style_avail = trim($sheetdata->getCellByColumnAndRow(41, $i)->getValue());
                        // $requirement = trim($sheetdata->getCellByColumnAndRow(39, $i)->getValue());
                        // $invi_opt = trim($sheetdata->getCellByColumnAndRow(42, $i)->getValue());

                        $inivitation = array(
                            'vin_id' => $id,
                            'invitation_start_price' => $invitation_start_price,
                            'price_box' => $price_box,
                            'box_invite' => $box_invite,
                            'print_card' => $print_card,
                            'start_price_range' => $start_price_range,
                            'price_range_box' => $price_range_box,
                            'printed_card' => $printed_card,
                            'box_card' => $box_card,
                            // 'requirement' => $requirement,
                            'type_avail' => $type_avail,
                            'paper_style_avail' => $paper_style_avail,
                            // 'invi_opt' => $invi_opt,
                        );
                        $this->db->insert('inivitations', $inivitation);
                    }
                    // }else{
                        // unique id velidation keeps on hold
                    // }
                    
                }
            } 
             redirect('VendorPanel/Excel_Import');
        }else{
            echo 'data not found';
            exit; 
        }
    }
}

?>