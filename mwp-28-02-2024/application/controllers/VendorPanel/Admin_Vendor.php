<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Vendor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('VendorPanel/VendorPanelModel');
        $this->load->model('VendorModel');
    }

    public function index() {
        $this->list_data();
    }

    function Bridal_Wear() {
        $data['bridal_wear'] = $this->VendorPanelModel->Get_Bridal_Data();
        $this->load->view('VendorPanel/vendor/bridal_wear', $data);
    }

    function Jewellery() {
        $data['Jewellery'] = $this->VendorPanelModel->Get_Jewellery();
        $this->load->view('VendorPanel/vendor/jewellery', $data);
    }
    function Catering() {
        $data['Catering'] = $this->VendorPanelModel->Get_Catering();
        $this->load->view('VendorPanel/vendor/catering', $data);
    }
    function Decoration() {
        $data['Decoration'] = $this->VendorPanelModel->Get_Decoration();
        $this->load->view('VendorPanel/vendor/decoration', $data);
    }
    function Gift() {
        $data['Gift'] = $this->VendorPanelModel->Get_Gift();
        $this->load->view('VendorPanel/vendor/gift', $data);
    }
    function Groom_wear() {
        $data['Groom_wear'] = $this->VendorPanelModel->Get_Groom_wear();
        $this->load->view('VendorPanel/vendor/groom_wear', $data);
    }
    function Inivitation() {
        $data['Inivitation'] = $this->VendorPanelModel->Get_Inivitation();
        $this->load->view('VendorPanel/vendor/inivitation', $data);
    }
    function MakeUp() {
        $data['MakeUp'] = $this->VendorPanelModel->Get_MakeUp();
        $this->load->view('VendorPanel/vendor/makeUp', $data);
    }
    function Mehendi() {
        $data['Mehendi'] = $this->VendorPanelModel->Get_Mehendi();
        $this->load->view('VendorPanel/vendor/mehendi', $data);
    }
    function Photography() {
        $data['Photography'] = $this->VendorPanelModel->Get_Photography();
        $this->load->view('VendorPanel/vendor/photography', $data);
    }
    function Venue() {
        $data['Venue'] = $this->VendorPanelModel->Get_Venue();
        $this->load->view('VendorPanel/vendor/venue', $data);
    }


    function Vendor_all_Data($tab, $id) {
        $data['vendor_data'] = $this->VendorPanelModel->Fetch_single_data($tab, $id);
        $data['allcity'] = $this->VendorPanelModel->fetch_vendor_city();
        $data['allcategory'] = $this->VendorPanelModel->fetch_vendor_categories();
        $data['alltag'] = $this->VendorPanelModel->fetch_vendor_tags();
        $this->load->view('VendorPanel/vendor/view_all_data', $data);
    }

    // shankar panaskar
    function deleteimage() {
            $image_name  = $this->input->post('image_name');
            $id = $this->input->post('vendor_count');

            //fetch existing images & update array
            // $image = explode(',', $vendor_data[0]['images']);
            $data['vendor_data'] = $this->VendorPanelModel->GetDataVin(array('dv_id'=> $id));
            $images = $vendor_data[0]['images'];
            //$images = 'Sample 1.png,Sample 2.png,Sample 3.png,Sample 4.png,Sample 5.png,Sample 6.png,Sample 7.png';
            $image = explode(',', $images);
            $updated_images = array();
            foreach($image as $img){
                if($img!=$image_name){
                    $updated_images[]=$img;
                }
            }
            $new_image = implode(',', $updated_images);
  
            $data= array(
                'images' => $new_image
            );
        
            $this->VendorModel->update_vendor($vid, $data);
            // $this->db->delete('photos', array('id' => $image_name)); 
            // $verify = $this->db->affected_rows();
            $verify = 1;
            unlink("uploads/vendor-test/".$image_name); //??path
            echo $verify;
    }
    
    // shankar panaskar
    function deletelogo() {
        $image_name  = $this->input->post('image_name');
        $vid = $this->input->post('vendor_count');

        $data= array(
            'comp_logo' => ''
        );
        
        $this->VendorModel->update_vendor($vid, $data);
        // $this->db->delete('photos', array('id' => $image_name)); 
        // $verify = $this->db->affected_rows();
        $verify = 1;
        unlink("uploads/logo-test/".$image_name); //??path
        echo $verify;
}

    function Status_update(){
        $link = $this->input->get('tab');
        $statusString = $this->input->get('status');
         $statusInt = (int)$statusString;

        $id = $this->input->get('vid');
        if ($statusInt == 0) {
			$this->session->set_flashdata('error', 'Vendor has been Deactivated');
		} else {
            
			$this->session->set_flashdata('success', 'Vendor has been Activated');
		}
        // echo $new_status;exit;
		$data = array('vendor_status' => $statusInt);
		$this->db->where('dv_id', $id);
		$this->db->update('default_vendor_inp', $data);
        
        if($link == 'bridal'){
            redirect('VendorPanel/Admin_Vendor/Bridal_Wear');
        }elseif($link == 'jewel'){
            redirect('VendorPanel/Admin_Vendor/Jewellery');
        }elseif($link == 'cater'){
            redirect('VendorPanel/Admin_Vendor/Catering');
        }elseif($link == 'decor'){
            redirect('VendorPanel/Admin_Vendor/Decoration');
        }elseif($link == 'gift'){
            redirect('VendorPanel/Admin_Vendor/Gift');
        }elseif($link == 'groom'){
            redirect('VendorPanel/Admin_Vendor/Groom_wear');
        }elseif($link == 'iniv'){
            redirect('VendorPanel/Admin_Vendor/Inivitation');
        }elseif($link == 'make'){
            redirect('VendorPanel/Admin_Vendor/MakeUp');
        }elseif($link == 'mehen'){
            redirect('VendorPanel/Admin_Vendor/Mehendi');
        }elseif($link == 'photo'){
            redirect('VendorPanel/Admin_Vendor/Photography');
        }elseif($link == 'venue'){
            redirect('VendorPanel/Admin_Vendor/Venue');
        }
    }


    function Insert_Data()
    {
        if ($this->input->post()) {
           pr($this->input->post(), '');exit;
            $venue_service_offer = $this->input->post('venue_service_offer');
            $bridal_service_offer = $this->input->post('bridal_service_offer');
            $groom_service_offer = $this->input->post('groom_service_offer');
            $photo_service_offer = $this->input->post('photo_service_offer');
            $makeup_service_offer = $this->input->post('makeup_service_offer');
            $meh_service_offer = $this->input->post('meh_service_offer');
            $jewel_service_offer = $this->input->post('jewel_service_offer');
            $decor_service_offer = $this->input->post('decor_service_offer');
            $cat_service_offer = $this->input->post('cat_service_offer');
            $gift_service_offer = $this->input->post('gift_service_offer');
            $ini_service_offer = $this->input->post('ini_service_offer');

            // features
            $venue_features = !empty($this->input->post('venue_features')) ? implode(', ', $this->input->post('venue_features')) : ''   ;
            $wear_feature = !empty($this->input->post('wear_feature')) ? implode(', ', $this->input->post('wear_feature')) : '' ;
            $groom_feature = !empty($this->input->post('groom_feature')) ? implode(', ', $this->input->post('groom_feature')) : ''  ;
            $photo_feature = !empty($this->input->post('photo_feature')) ? implode(', ', $this->input->post('photo_feature')) : ''  ;
            $make_feature = !empty($this->input->post('make_feature')) ? implode(', ', $this->input->post('make_feature')) : '' ;
            $mehendi_feature = !empty($this->input->post('mehendi_feature')) ? implode(', ', $this->input->post('mehendi_feature')) : '';
            $jewl_feature = !empty($this->input->post('jewl_feature')) ? implode(', ', $this->input->post('jewl_feature')) : '' ;
            $deco_feature = !empty($this->input->post('deco_feature')) ? implode(', ', $this->input->post('deco_feature')) : '' ;
            $cater_feature = !empty($this->input->post('cater_feature')) ? implode(', ', $this->input->post('cater_feature')) : ''  ;
            $gift_feature = !empty($this->input->post('gift_feature')) ? implode(', ', $this->input->post('gift_feature')) : '' ;
            $invi_feature = !empty($this->input->post('invi_feature')) ? implode(', ', $this->input->post('invi_feature')) : '' ;

            $exp_count = $this->input->post('no_of_yrs');

            if (isset($venue_service_offer) || !empty($venue_features)) {
                $service = $venue_service_offer;
                $features = $venue_features;
            } elseif (isset($bridal_service_offer) || !empty($wear_feature)) {
                $service = $bridal_service_offer;
                $features = $wear_feature . ', ' . $exp_count;
            } elseif (isset($groom_service_offer) || !empty($groom_feature)) {
                $service = $groom_service_offer;
                $features = $groom_feature . ', ' . $exp_count;
            } elseif (isset($photo_service_offer) || !empty($photo_feature)) {
                $service = $photo_service_offer;
                $features = $photo_feature . ', ' . $exp_count;
            } elseif (isset($makeup_service_offer) || !empty($make_feature)) {
                $service = $makeup_service_offer;
                $features = $make_feature . ', ' . $exp_count;
            } elseif (isset($meh_service_offer) || !empty($mehendi_feature)) {
                $service = $meh_service_offer;
                $features = $mehendi_feature . ', ' . $exp_count;
            } elseif (isset($jewel_service_offer) || !empty($jewl_feature)) {
                $service = $jewel_service_offer;
                $features = $jewl_feature . ', ' . $exp_count;
            } elseif (isset($decor_service_offer) || !empty($deco_feature)) {
                $service = $decor_service_offer;
                $features = $deco_feature . ', ' . $exp_count;
            } elseif (isset($cat_service_offer) || !empty($cater_feature)) {
                $service = $cat_service_offer;
                $features = $cater_feature . ', ' . $exp_count;
            } elseif (isset($gift_service_offer) || !empty($gift_feature)) {
                $service = $gift_service_offer;
                $features = $gift_feature . ', ' . $exp_count;
            } elseif (isset($ini_service_offer) || !empty($invi_feature)) {
                $service = $ini_service_offer;
                $features = $invi_feature . ', ' . $exp_count;
            }else{
                $service = '';
                $features = '';
            }

            $config['upload_path'] = 'uploads';
            $config['allowed_types'] = 'gif|jpg|png|jpeg|webp';
            // $config['max_size']      = 2048; 

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $logo = 'logo.tls';
            if ($this->upload->do_upload('comp_logo')) {
                $comp_logo = $this->upload->data();
                $logo = $comp_logo['file_name'];
            }

            
            $image_path = array();
            if (!empty($_FILES['images']['name'][0])) {
                // Upload multiple images
                $files = $_FILES['images'];
                // print_r($_FILES['images']);
                $file_count = is_array($files['name']) ? count($files['name']) : 0;

                for ($i = 0; $i < $file_count; $i++) {
                    $_FILES['images']['name'] = $files['name'][$i];
                    $_FILES['images']['type'] = $files['type'][$i];
                    $_FILES['images']['tmp_name'] = $files['tmp_name'][$i];
                    $_FILES['images']['error'] = $files['error'][$i];
                    $_FILES['images']['size'] = $files['size'][$i];

                    if ($this->upload->do_upload('images')) {
                        $images = $this->upload->data();
                        $image_path[] = $images['file_name'];
                    }
                }
            }
            $vendor_img = implode(', ', $image_path);

            // get cat in var to make a condition for hidden form 
            $category = (!empty($this->input->post('default_cat')) && $this->input->post('default_cat') !== '') ? $this->input->post('default_cat'): $this->input->post('main_category');

            // get tag in var to make a condition for hidden form 
            $vendor_tag = (!empty($this->input->post('default_vendor_tag')) && $this->input->post('default_vendor_tag') !== '') ? $this->input->post('default_vendor_tag'): $this->input->post('main_vendor_tag');
            
            $Current_vendor_id = $this->input->post('vendor_count');
             
            // get last inserted unique id 
            if(!empty($this->input->post('vendor_count')) || $this->input->post('vendor_count') != '') {
                $Current_vendor_id = $this->input->post('vendor_count');
            // echo $this->input->post('vendor_count');exit;
                
                
                $last_id = $this->VendorModel->Get_last_Vendor_id();
                // validate vendor exist or not
                $validate_db_id = $this->VendorModel->Validate_Vendor($Current_vendor_id);
                
                $vendor_uid = $validate_db_id['vendor_uid'];
                
            }
            
            // exit('false');
            $data = array(
                'vendor_uid' =>  $vendor_uid,
                'vendor_seo_url' => strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', str_replace(' ', '-', $this->input->post('vendor_name')))),
                'vendor_name' => $this->input->post('vendor_name'),
                'vendor_email' => $this->input->post('vendor_email'),
                'city' => $this->input->post('city'),
                'area' => $this->input->post('area'),
                'phone_no' => $this->input->post('phone_no'),
                'address' => $this->input->post('address'),
                'website' => $this->input->post('website'),
                'sub_category' => $this->input->post('sub_category'),
                'rating' => $this->input->post('rating'),
                'review' => $this->input->post('review'),
                'price_range' => $this->input->post('price_range'),
                'dv_start_price' => $this->input->post('start_price'),
                'end_price' => $this->input->post('end_price'),
                'business_day' => implode(', ', $this->input->post('business_day')),
                'business_hr' => implode(', ', $this->input->post('business_hr')),
                'social_media' => !empty($this->input->post('social_media')) ? implode(', ', $this->input->post('social_media')) : '',
                'social_link' => !empty($this->input->post('social_link')) ? implode(', ', $this->input->post('social_link')) : '',
                'about' => $this->input->post('about'),
                'images' => $vendor_img,
                'comp_logo' => $logo,
                'service_offer' => (isset($service) && $service != '') ? $service :'',
                'vid_exp_since' => $this->input->post('vid_exp_since'),
                'no_of_yrs' => $this->input->post('no_of_yrs'),
                'payment_opt' => !empty($this->input->post('payment_opt')) ? implode(', ', $this->input->post('payment_opt')) : '',
                'advance_per' => $this->input->post('advance_per'),
                'cancel_policy' => $this->input->post('cancel_policy'),
                'features' => $features,
            );
                $vid = $this->input->post('vendor_count');
                $this->VendorModel->update_vendor($vid, $data);
                
            //venue
            if ($category == 1) {

                $general_cap_min  = $this->input->post('general_cap_min');
                $general_cap_max  = $this->input->post('general_cap_max');
                $general_cap = $general_cap_min . '-' . $general_cap_max;

                $veg_menu_range_start  = $this->input->post('veg_menu_range_start');
                $veg_menu_range_end  = $this->input->post('veg_menu_range_end');
                $veg_menu_range = $veg_menu_range_start . '-' . $veg_menu_range_end;

                $non_veg_range_start  = $this->input->post('non_veg_range_start');
                $non_veg_range_end  = $this->input->post('non_veg_range_end');
                $non_veg_range = $non_veg_range_start . '-' . $non_veg_range_end;

                // echo $this->input->post('venue_service_avail');exit;
                $venue_data = array(
                    'vin_id' => $vendor_uid,
                    // 'venue_service' => $this->input->post('venue_service'),
                    'price_per_plate' => $this->input->post('price_per_plate'),
                    'general_cap' => $general_cap,
                    'fac_cap' => $this->input->post('fac_cap'),
                    'rental_price' => $this->input->post('rental_price'),
                    'space_avail' => $this->input->post('space_avail'),
                    'fn_size_allow' =>  $this->input->post('fn_size_allow'),
                    'guest_accom' => $this->input->post('guest_accom'),
                    'no_room' => $this->input->post('no_room'),
                    'inhouse_vendor' => !empty($this->input->post('inhouse_vendor')) ? implode(', ', $this->input->post('inhouse_vendor')) : '',
                    'external_vendor' => !empty($this->input->post('external_vendor')) ? implode(', ', $this->input->post('external_vendor')) : '',
                    'cuisines' => !empty($this->input->post('cuisines')) ? implode(', ', $this->input->post('cuisines')) : '',
                    'alcohol_policy' => $this->input->post('alcohol_policy'),
                    'veg_menu_range' => $veg_menu_range,
                    'non_veg_range' => $non_veg_range,
                );
                
                $validate_venue = $this->VendorModel->validate_vendor_existance('venue', $vendor_uid);
                if($validate_venue > 0){
                    $this->VendorModel->Update_Vendor_table('venue',$venue_data, $vendor_uid);
                }else{
                    $this->VendorModel->insert_venue($venue_data);
                }
                

            } elseif ($category == 2) {
                // bridal wear
                $wear_price_start = $this->input->post('wear_price_start');
                $wear_price_end = $this->input->post('wear_price_end');
                $price_range = $wear_price_start . '-' . $wear_price_end;

                $wear_data = array(
                    'vin_id' => $vendor_uid,
                    'shop_type' => $this->input->post('shop_types'),
                    'prod_offer' => $this->input->post('prod_offer'),
                    'bridal_start_price' => $this->input->post('bridal_start_price'),
                    'app_req' => $this->input->post('app_req'),
                    'occations' => implode(', ', $this->input->post('occations')),
                    'fabric_used' => implode(', ', $this->input->post('fabric_used')),
                    'prod_type' => implode(', ', $this->input->post('prod_type')),
                    'emblishments' => implode(', ', $this->input->post('emblishments')),
                    'collection_type' => implode(', ', $this->input->post('collection_type')),
                    'design_style' => implode(', ', $this->input->post('design_style')),
                    'customize_avail' => $this->input->post('customize_avail'),
                    'lead_time' => $this->input->post('lead_time'),
                    'wear_price_range' => isset($price_range) ? $price_range : '',
                    'ship_out' => $this->input->post('ship_out'),

                );
                
                $validate_wear = $this->VendorModel->validate_vendor_existance('bridal_wear', $vendor_uid);
                if($validate_wear > 0){
                    $this->VendorModel->Update_Vendor_table('bridal_wear',$wear_data, $vendor_uid);
                }else{
                    $this->VendorModel->insert_wear($wear_data);
                }
                
            } elseif ($category == 3) {
                // groom wear
                // echo "test";exit;
                $groom_wear_data = array(
                    'vin_id' => $vendor_uid,
                    'shop_type' => $this->input->post('groom_shop_type'),
                    'design_offer' => $this->input->post('groom_design_offer'),
                    'groom_start_price' => $this->input->post('groom_start_price'),
                    'ap_require' => $this->input->post('ap_require'),
                    'prod_type' => !empty($this->input->post('prod_type')) ? implode(', ', $this->input->post('prod_type')) : '',
                    'occation' => !empty($this->input->post('occation')) ? implode(', ', $this->input->post('occation')) : '',
                    'col_type' => !empty($this->input->post('col_type')) ? implode(', ', $this->input->post('col_type')) : '',
                    'design_type' => !empty($this->input->post('design_type')) ? implode(', ', $this->input->post('design_type')) : '',
                    'ship_out' => $this->input->post('ship_out'),
                    'lead_time' => $this->input->post('lead_time'),
                    'print_opt' => !empty($this->input->post('print_opt')) ? implode(', ', $this->input->post('print_opt')) : '',
                    'custom_order' => $this->input->post('custom_order'),
                    'fabric' => !empty($this->input->post('fabric')) ? implode(', ', $this->input->post('fabric')) : '',
                );
                
                $validate_groom = $this->VendorModel->validate_vendor_existance('groom_wear', $vendor_uid);
                if($validate_groom > 0){
                    $this->VendorModel->Update_Vendor_table('groom_wear',$groom_wear_data, $vendor_uid);
                }else{
                    $this->VendorModel->insert_groom_wear($groom_wear_data);
                }


            } elseif ($category == 4) {
                // photo
                $photo_package_range1_start = $this->input->post('photo_package_range1_start');
                $photo_package_range1_end = $this->input->post('photo_package_range1_end');
                $ppackage_range1 = $photo_package_range1_start . '-' . $photo_package_range1_end;

                $photo_package_range2_start = $this->input->post('photo_package_range2_start');
                $photo_package_range2_end = $this->input->post('photo_package_range2_end');
                $ppackage_range2 = $photo_package_range2_start . '-' . $photo_package_range2_end;

                $photo_package_range3_start = $this->input->post('photo_package_range3_start');
                $photo_package_range3_end = $this->input->post('photo_package_range3_end');
                $ppackage_range3 = $photo_package_range3_start . '-' . $photo_package_range3_end;

                $photo_package_range4_start = $this->input->post('photo_package_range4_start');
                $photo_package_range4_end = $this->input->post('photo_package_range4_end');
                $ppackage_range4 = $photo_package_range4_start . '-' . $photo_package_range4_end;

                $photography_data = array(
                    'vin_id' => $vendor_uid,
                    // 'photo_service' => $this->input->post('photo_service'),
                    'photo_start_price' => $this->input->post('photo_start_price'),
                    'package1' => $this->input->post('photo_package1'),
                    'package2' => $this->input->post('photo_package2'),
                    'package3' => $this->input->post('photo_package3'),
                    'ppackage_range1' => $ppackage_range1,
                    'ppackage_range2' => $ppackage_range2,
                    'ppackage_range3' => $ppackage_range3,
                    'ppackage_range4' => $ppackage_range4,
                    'occations' => !empty($this->input->post('occations')) ? implode(', ', $this->input->post('occations')) : '',
                    'travel_out' => $this->input->post('travel_out'),
                    'delivery_time' => $this->input->post('delivery_time'),

                );
                
               
                $validate_photo = $this->VendorModel->validate_vendor_existance('photography', $vendor_uid);
                if($validate_photo > 0){
                    $this->VendorModel->Update_Vendor_table('photography',$photography_data, $vendor_uid);
                }else{
                    $this->VendorModel->insert_photography($photography_data);
                }
                

            } elseif ($category == 5) {
                // makeup
                $makeup_price_start = $this->input->post('makeup_price_start');
                $makeup_price_end = $this->input->post('makeup_price_end');
                $price_range1 = $makeup_price_start . '-' . $makeup_price_end;

                $makeup_price_start2 = $this->input->post('makeup_price_start2');
                $makeup_price_end2 = $this->input->post('makeup_price_end2');
                $price_range2 = $makeup_price_start2 . '-' . $makeup_price_end2;
                $make_up_data = array(
                    'vin_id' => $vendor_uid,
                    // 'make_service' => $this->input->post('make_service'),
                    'makeup_start_price' => $this->input->post('makeup_start_price'),
                    'package1' => $this->input->post('makeup_package1'),
                    'package2' => $this->input->post('makeup_package2'),
                    'package1_range' => !isset($price_range1) ? $price_range1 : '',
                    'package2_range' => !isset($price_range2) ? $price_range2 : '',
                    'make_tech' => !empty($this->input->post('make_tech')) ? implode(', ', $this->input->post('make_tech')) : '',
                    'travel_out' => $this->input->post('travel_out'),
                    'groom_service' => !empty($this->input->post('groom_service')) ? implode(', ', $this->input->post('groom_service')) : '',
                );
                
                $validate_makeup = $this->VendorModel->validate_vendor_existance('make_up', $vendor_uid);
                if($validate_makeup > 0){
                    $this->VendorModel->Update_Vendor_table('make_up',$make_up_data, $vendor_uid);
                }else{
                    $this->VendorModel->insert_make_up($make_up_data);
                }
                
            } elseif ($category == 6) {
                // mehendi
                $Meh_price_range_start = $this->input->post('Meh_price_range_start');
                $Meh_price_range_end = $this->input->post('Meh_price_range_end');
                $meh_range = $Meh_price_range_start . '-' . $Meh_price_range_end;

                $guest_price_range_start = $this->input->post('guest_price_range_start');
                $Meh_price_range_end = $this->input->post('Meh_price_range_end');
                $guest_range = $guest_price_range_start . '-' . $Meh_price_range_end;

                $mehendi_data = array(
                    'vin_id' => $vendor_uid,
                    'mahendi_start_price' => $this->input->post('mahendi_start_price'),
                    'price_hand' => $this->input->post('price_hand'),
                    'max_people' => $this->input->post('max_people'),
                    'style_know' => !empty($this->input->post('style_know')) ? implode(', ', $this->input->post('style_know')) : '',
                    'meh_range' => $meh_range,
                    'guest_range' => $guest_range,
                    'mehendi_style' => implode(', ', $this->input->post('mehendi_style')),
                );
                
                $validate_mehendi = $this->VendorModel->validate_vendor_existance('mehendi', $vendor_uid);
                if($validate_mehendi > 0){
                    $this->VendorModel->Update_Vendor_table('mehendi',$mehendi_data, $vendor_uid);
                }else{
                    $this->VendorModel->insert_mehendi($mehendi_data);
                }
                
            } elseif ($category == 7) {
                // bridal jewellery
                $jewellery_data = array(
                    'vin_id' => $vendor_uid,
                    'design_offer' => $this->input->post('design_offer'),
                    'jewel_start_price' => $this->input->post('jewel_start_price'),
                    'jew_type' => !empty($this->input->post('jew_type')) ? implode(', ', $this->input->post('jew_type')) : '',
                    'design_style' => !empty($this->input->post('design_style')) ? implode(', ', $this->input->post('design_style')) : '',
                    'cat_avail' => !empty($this->input->post('cat_avail')) ? implode(', ', $this->input->post('cat_avail')) : '',

                );
                
                $validate_jewellery = $this->VendorModel->validate_vendor_existance('bridal_jewellery', $vendor_uid);
                if($validate_jewellery > 0){
                    $this->VendorModel->Update_Vendor_table('bridal_jewellery',$jewellery_data, $vendor_uid);
                }else{
                    $this->VendorModel->insert_bridal_jewellery($jewellery_data);
                }
                
            } elseif ($category == 8) {
                // decoration
                $price_range_min = $this->input->post('decorator_price_range');
                $price_range_max = $this->input->post('price_range_max');
                $deco_price_range = $price_range_min . '-' . $price_range_max;

                $min_range_min = $this->input->post('min_range');
                $min_range_max = $this->input->post('min_range_max');
                $min_range = $min_range_min . '-' . $min_range_max;

                $package1_min_range = $this->input->post('package1_min_range');
                $package1_range_max = $this->input->post('package1_range_max');
                $package1_range = $package1_min_range . '-' . $package1_range_max;

                $package2_min_range = $this->input->post('package2_min_range');
                $package2_range_max = $this->input->post('package2_range_max');
                $package2_range = $package2_min_range . '-' . $package2_range_max;

                $decorator_data = array(
                    'vin_id' => $vendor_uid,
                    'design_offer' => $this->input->post('decorator_design_offers'),
                    'based_price' => $this->input->post('based_price'),
                    'decorator_start_price' => $this->input->post('decorator_start_price'),
                    'package1' => $package1_range,
                    'package2' => $package2_range,
                    'deco_price_range' =>  $deco_price_range,
                    'min_range' => $min_range,
                    'deco_style' => implode(', ', $this->input->post('deco_style')),
                    'modern_style' => implode(', ', $this->input->post('modern_style')),

                );
                
                $validate_deco = $this->VendorModel->validate_vendor_existance('decorator', $vendor_uid);
                if($validate_deco > 0){
                    $this->VendorModel->Update_Vendor_table('decorator',$decorator_data, $vendor_uid);
                }else{
                    $this->VendorModel->insert_decorator($decorator_data);
                }
                
            } elseif ($category == 9) {
                // gift
                $gift_data = array(
                    'vin_id' => $vendor_uid,
                    'gift_start_price' => $this->input->post('gift_start_price'),
                    'gift_type' => !empty($this->input->post('gift_type')) ? implode(', ', $this->input->post('gift_type')) : '',
                    'editable' => $this->input->post('editable'),
                    'non_editable' => $this->input->post('non_editable'),
                    'price_range_edit' => $this->input->post('price_range_edit'),
                    'price_range_non_edit' => $this->input->post('price_range_non_edit'),
                    'range_editable' => $this->input->post('range_editable'),
                    'range_non_editable' => $this->input->post('range_non_editable'),
                );
                
                $validate_gift = $this->VendorModel->validate_vendor_existance('gift', $vendor_uid);
                if($validate_gift > 0){
                    $this->VendorModel->Update_Vendor_table('gift',$gift_data, $vendor_uid);
                }else{
                    $this->VendorModel->insert_gift($gift_data);
                }
                
            } elseif ($category == 10) {
                // catering
                $veg_menu_Start = $this->input->post('veg_menu_Start');
                $veg_menu_max = $this->input->post('veg_menu_max');
                $veg_menu = $veg_menu_Start . '-' . $veg_menu_max;

                $non_veg_menu_min = $this->input->post('non_veg_menu_min');
                $non_veg_menu_max = $this->input->post('non_veg_menu_max');
                $non_veg_menu = $non_veg_menu_min . '-' . $non_veg_menu_max;

                $catering_data = array(
                    'vin_id' => $vendor_uid,
                    'catering_start_price' => $this->input->post('catering_start_price'),
                    'veg_menu' => $veg_menu,
                    'non_veg_menu' => $non_veg_menu,
                    'menu_opt' => !empty($this->input->post('menu_opt')) ? implode(', ', $this->input->post('menu_opt')) : '',
                    'service_avail' => !empty($this->input->post('service_avail')) ? implode(', ', $this->input->post('service_avail')) : '',
                );
                
                $validate_catering = $this->VendorModel->validate_vendor_existance('catering', $vendor_uid);
                if($validate_catering > 0){
                    $this->VendorModel->Update_Vendor_table('catering',$catering_data, $vendor_uid);
                }else{
                    $this->VendorModel->insert_catering($catering_data);
                }
                
            } elseif ($category == 13) {
                // inivitation

                $start_price_range_min = $this->input->post('start_price_range');
                $start_price_range_max = $this->input->post('start_price_range_max');
                $start_price_range = $start_price_range_min . '-' . $start_price_range_max;

                $price_range_box_min = $this->input->post('price_range_box');
                $price_range_box_max = $this->input->post('price_range_box_max');
                $price_range_box = $price_range_box_min . '-' . $price_range_box_max;

                $printed_card_min = $this->input->post('printed_card');
                $printed_card_max = $this->input->post('printed_card_max');
                $printed_card = $printed_card_min . '-' . $printed_card_max;

                $box_card_min = $this->input->post('box_card');
                $box_card_max = $this->input->post('box_card_max');
                $box_card = $box_card_min . '-' . $box_card_max;

                $inivitations_data = array(
                    'vin_id' => $vendor_uid,
                    'invitation_start_price' => $this->input->post('invitation_start_price'),
                    'design_offer' => $this->input->post('invitation_design_offer'),
                    'price_box' => $this->input->post('price_box'),
                    'box_invite' => $this->input->post('box_invite'),
                    'print_card' => $this->input->post('print_card'),
                    'start_price_range' => $start_price_range,
                    'price_range_box' => $price_range_box,
                    'printed_card' => $printed_card,
                    'box_card' => $box_card,
                    'type_avail' => !empty($this->input->post('type_avail')) ? implode(', ', $this->input->post('type_avail')) : '',
                    'paper_style_avail' => !empty($this->input->post('paper_style_avail')) ? implode(', ', $this->input->post('paper_style_avail')) : '',
                );
                
                $validate_invi = $this->VendorModel->validate_vendor_existance('inivitations', $vendor_uid);
                if($validate_invi > 0){
                    $this->VendorModel->Update_Vendor_table('inivitations',$inivitations_data, $vendor_uid);
                }else{
                    $this->VendorModel->insert_inivitations($inivitations_data);
                }
                
            }
        }
        echo '<script>alert("Data has been updated!"); window.location.href = "'.base_url().'VendorPanel/index/"</script>';
    }
}
