<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendor extends CI_Controller {

	 public function __construct() {
       parent::__construct();
       $this->load->database();
        $this->load->model('admin/CategoryModel');
        $this->load->model('admin/SubCategoryModel');
        $this->load->model('admin/CityModel');
        $this->load->model('VendorModel');
        // $this->load->helper('my_function');
    }
   
    public function index()
    {
        $this->load->view('front/pages/vendor');
    }

    // curentlly not using subcat function 
    function SubCat() {
        $cat_id = $this->input->post('cat_id');
        $data = $this->VendorModel->Display_sub_category(array('category_id' => $cat_id));
        echo json_encode($data);
    }

    // vendor detail 
    public function Vender_Detail($tab, $seo) {
        $data['single_data'] = $this->VendorModel->get_Single_vendor($tab, $seo);
        $data['similar_data'] = $this->VendorModel->Similar_Data($seo);
        // $data['single_data'][0]['category']=13; //temp shankar
        // $vendor_id = '28922'; //90 //temp 
        $vendor_id = $data['single_data'][0]['dv_id'];
        $payment_data = $this->VendorModel->Get_Vendor_payment($vendor_id);
        $data['is_paid_vendor'] = 0;
        if(count($payment_data) > 0){
            $data['is_paid_vendor'] = 1;
        } 
        $this->load->view('front/pages/vendor_detail', $data);
    }

   
    
    // all vendor 
    public function vendorlisting()
    {
        // $this->load->helper('My_function');
        $top3 = '';
        //sending id as a parameter to get category wise data
        $data['venue'] = $this->VendorModel->Top_Vendor(1, $top3);
        $data['bridal_wear'] = $this->VendorModel->Top_Vendor(2, $top3);
        $data['groom'] = $this->VendorModel->Top_Vendor(3, $top3);
        $data['photo'] = $this->VendorModel->Top_Vendor(4, $top3);
        $data['make_up'] = $this->VendorModel->Top_Vendor(5, $top3);
        $data['mehendi'] = $this->VendorModel->Top_Vendor(6, $top3);
        $data['jewellry'] = $this->VendorModel->Top_Vendor(7, $top3);
        $data['decoration'] = $this->VendorModel->Top_Vendor(8, $top3);
        $data['gift'] = $this->VendorModel->Top_Vendor(9, $top3);
        $data['catering'] = $this->VendorModel->Top_Vendor(10, $top3);
        $data['inivitation'] = $this->VendorModel->Top_Vendor(13, $top3);
    	$this->load->view('front/vendor-listing', $data);
    }
   
    // get vendor cat wise data
    function Get_vendor_By_Cat($vendor_seo) {
       
        $data['vendors'] = $this->VendorModel->Get_Vendor_By_Cat_Model($vendor_seo);
        $this->load->view('front/pages/cat_vendor', $data);
    }

    function Load_more_data($vendor_seo){

        $start = $this->input->post('start');

        $data['vendors'] = $this->VendorModel->Get_Vendor_By_Cat_Model($vendor_seo, (int) $start);

        $output = '';
        foreach ($data['vendors']['result'] as $value) {
            $category = $value['category'];

            if($category == 1){
                $output .= Vendor_card('ve', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 2){
                 $output .= Vendor_card('bw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 3){
                 $output .= Vendor_card('gw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 4){
                 $output .= Vendor_card('ph', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 5){
                 $output .= Vendor_card('mu', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 6){
                 $output .= Vendor_card('me', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 7){
                 $output .= Vendor_card('bj', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 8){
                 $output .= Vendor_card('dc', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 9){
                 $output .= Vendor_card('gf', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 10){
                 $output .= Vendor_card('ct', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 13){
                 $output .= Vendor_card('in', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }

        }
        echo $output;
    }


    // vendor loging for panel 
    function VendorLogin() {

        $username = $this->input->post("vendor_username");
        $password = $this->input->post("user_password");
        $pass = md5($password);
        $data["password"] = $this->VendorModel->getpassword($username);
       
       if (!empty($data["password"][0]["user_password"]) == $password) 
       {
            // $data["password"] = $this->VendorModel->updatepassword($username,$pass);
       }
        
       $result["user"] = $this->VendorModel->getuserlogindata($username);

       if (!empty($result["user"]))  
       {
             $vendor_id = $result["user"][0]["dv_id"];
             $email = $result["user"][0]["email"];
             $role = $result["user"][0]["role"];

             $session_data = array(
             'email'=> $email,
             'vendor_id'=> $vendor_id,
             'role'=> $role,
              'logged_in' => TRUE
             );

             $this->session->set_userdata($session_data);  
                      
             redirect('admin/admin');
             //echo "log in succesfully"; 
          
       }
       else
       {
           echo "Invalid credentials";
           redirect('home');
          
       }
    }

    function Vendor_Form() {
        $vendor_user_id = $this->input->get('uid');
        if($this->VendorModel->Get_Vendor_data($vendor_user_id) !== NULL){
            $data['vdata'] = $this->VendorModel->Get_Vendor_data($vendor_user_id);
        }
        $data['category'] = $this->CategoryModel->GetList();
        $data['sub_city'] = $this->CityModel->GetList();
        $this->load->view('front/pages/vendor_form', $data);
    }

    function Insert_Data()
    {
        if ($this->input->post()) {
           
            $venue_service_offer = trim($this->input->post('venue_service_offer'));
            $bridal_service_offer = trim($this->input->post('bridal_service_offer'));
            $groom_service_offer = trim($this->input->post('groom_service_offer'));
            $photo_service_offer = trim($this->input->post('photo_service_offer'));
            $makeup_service_offer = trim($this->input->post('makeup_service_offer'));
            $meh_service_offer = trim($this->input->post('meh_service_offer'));
            $jewel_service_offer = trim($this->input->post('jewel_service_offer'));
            $decor_service_offer = trim($this->input->post('decor_service_offer'));
            $cat_service_offer = trim($this->input->post('cat_service_offer'));
            $gift_service_offer = trim($this->input->post('gift_service_offer'));
            $ini_service_offer = trim($this->input->post('ini_service_offer'));

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

            if (!empty($venue_service_offer) || !empty($venue_features)) {
                $service = $venue_service_offer;
                $features = $venue_features;
            } elseif (!empty($bridal_service_offer) || !empty($wear_feature)) {
                $service = $bridal_service_offer;
                $features = $wear_feature . ', ' . $exp_count;
            } elseif (!empty($groom_service_offer) || !empty($groom_feature)) {
                $service = $groom_service_offer;
                $features = $groom_feature . ', ' . $exp_count;
            } elseif (!empty($photo_service_offer) || !empty($photo_feature)) {
                $service = $photo_service_offer;
                $features = $photo_feature . ', ' . $exp_count;
            } elseif (!empty($makeup_service_offer) || !empty($make_feature)) {
                $service = $makeup_service_offer;
                $features = $make_feature . ', ' . $exp_count;
            } elseif (!empty($meh_service_offer) || !empty($mehendi_feature)) {
                $service = $meh_service_offer;
                $features = $mehendi_feature . ', ' . $exp_count;
            } elseif (!empty($jewel_service_offer) || !empty($jewl_feature)) {
                $service = $jewel_service_offer;
                $features = $jewl_feature . ', ' . $exp_count;
            } elseif (!empty($decor_service_offer) || !empty($deco_feature)) {
                $service = $decor_service_offer;
                $features = $deco_feature . ', ' . $exp_count;
            } elseif (!empty($cat_service_offer) || !empty($cater_feature)) {
                $service = $cat_service_offer;
                $features = $cater_feature . ', ' . $exp_count;
            } elseif (!empty($gift_service_offer) || !empty($gift_feature)) {
                $service = $gift_service_offer;
                $features = $gift_feature . ', ' . $exp_count;
            } elseif (!empty($ini_service_offer) || !empty($invi_feature)) {
                $service = $ini_service_offer;
                $features = $invi_feature . ', ' . $exp_count;
            }else{
                $service = '';
                $features = '';
            }
            
            $config['upload_path'] = 'uploads/comp-logo';
            $config['allowed_types'] = '*';
            // $config['max_size']      = 2048; 

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            $logo = 'logo.tls';
            if ($this->upload->do_upload('comp_logo')) {
                $comp_logo = $this->upload->data();
                $logo = $comp_logo['file_name'];
            }
            
            $config['upload_path'] = 'uploads/vendors';
            $config['allowed_types'] = '*';
            // $config['max_size']      = 2048; 

            $this->load->library('upload', $config);
            $this->upload->initialize($config);            
            
            $image_path = array();
            if (!empty($_FILES['images']['name'][0])) {
                // pr($_FILES['images'], '');exit;
                // Upload multiple images
                $files = $_FILES['images'];
                $file_count = is_array($files['name']) ? count($files['name']) : 0;
                // print_r($file_count);

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
                    // pr($image_path, '');
                }
            }
            $vendor_img = implode(',', $image_path);
            // pr($vendor_img, '');exit;
            // get cat in var to make a condition for hidden form 
            $category = (!empty($this->input->post('default_cat')) && $this->input->post('default_cat') !== '') ? $this->input->post('default_cat'): $this->input->post('main_category');

             $Current_vendor_id = $this->input->post('vendor_count');
             
            // get last inserted unique id 
            if(!empty($this->input->post('vendor_count')) || $this->input->post('vendor_count') != '') {
                $Current_vendor_id = $this->input->post('vendor_count');
            // echo $this->input->post('vendor_count');exit;
                
                
                // $last_id = $this->VendorModel->Get_last_Vendor_id();
                // validate vendor exist or not
                $validate_db_id = $this->VendorModel->Validate_Vendor($Current_vendor_id);
                
                $vendor_uid = $validate_db_id['vendor_uid'];
                
            }else{
                // $vendor_uid =  $this->session->userdata('vendor_uid');
            }
            
            // exit('false');
            $data = array(
                'vendor_uid' =>  $vendor_uid,
                'vendor_seo_url' => strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', str_replace(' ', '-', $this->input->post('vendor_name')))),
                'vendor_name' => trim($this->input->post('vendor_name')),
                'vendor_email' => trim($this->input->post('vendor_email')),
                // 'vendor_prof_mobile' => trim($this->input->post('vendor_prof_mobile')),
                // 'user_name' => trim($this->input->post('user_name')),
                // 'password' => trim($this->input->post('password')),
                'city' => trim($this->input->post('city')),
                'area' => trim($this->input->post('area')),
                'phone_no' => trim($this->input->post('phone_no')),
                'address' => trim($this->input->post('address')),
                'website' => trim($this->input->post('website')),
                'category' => $category,
                'sub_category' => trim($this->input->post('sub_category')),
                'rating' => trim($this->input->post('rating')),
                'review' => trim($this->input->post('review')),
                'price_range' => trim($this->input->post('price_range')),
                'dv_start_price' => trim($this->input->post('start_price')),
                'end_price' => trim($this->input->post('end_price')),
                'business_day' => implode(', ', $this->input->post('business_day')),
                'business_hr' => implode(', ', $this->input->post('business_hr')),
                'social_media' => !empty($this->input->post('social_media')) ? implode(', ', $this->input->post('social_media')) : '',
                'social_link' => !empty($this->input->post('social_link')) ? implode(', ', $this->input->post('social_link')) : '',
                'about' => trim($this->input->post('about')),
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

            // print_r($data);exit;
            
            // insert into vendor
            // if(!empty($this->input->post('vendor_count')) && $this->input->post('vendor_count') !== '') {
                
                $vid = $this->input->post('vendor_count');
                $this->VendorModel->update_vendor($vid, $data);
                
            // }else{
            //     $this->VendorModel->insert_vendor($data);
            // }
            // $vendor_list = $this->db->insert_id();

            //venue
            if ($category == 1) {

                $general_cap_min  = $this->input->post('general_cap_min');
                $general_cap_max  = $this->input->post('general_cap_max');
                $general_cap = $general_cap_min . '-' . $general_cap_max;

                // price per plate 
                // $venue_min_price  = $this->input->post('venue_min_price');
                // $venue_max_price  = $this->input->post('venue_max_price');
                // $price_per_plate = $venue_min_price . '-' . $venue_max_price;

                $veg_menu_range_start  = $this->input->post('veg_menu_range_start');
                $veg_menu_range_end  = $this->input->post('veg_menu_range_end');
                $veg_menu_range = $veg_menu_range_start . '-' . $veg_menu_range_end;

                $non_veg_range_start  = $this->input->post('non_veg_range_start');
                $non_veg_range_end  = $this->input->post('non_veg_range_end');
                $non_veg_range = $non_veg_range_start . '-' . $non_veg_range_end;

                $event_spaces = implode(',', $this->input->post('event_spaces'));

                // echo $this->input->post('venue_service_avail');exit;
                $venue_data = array(
                    'vin_id' => $vendor_uid,
                    // 'venue_service' => $this->input->post('venue_service'),
                    'price_per_plate' => $this->input->post('price_per_plate'),
                    'general_cap' => $general_cap,
                    'fac_cap' => $this->input->post('fac_cap'),
                    'rental_price' => $this->input->post('rental_price'),
                    'space_avail' => $this->input->post('space_avail'),
                    'event_spaces' => $event_spaces,
                    'fn_size_allow' =>  $this->input->post('fn_size_allow'),
                    'guest_accom' => $this->input->post('guest_accom'),
                    'no_room' => $this->input->post('no_room'),
                    'inhouse_vendor' => !empty($this->input->post('inhouse_vendor')) ? implode(', ', $this->input->post('inhouse_vendor')) : '',
                    'external_vendor' => !empty($this->input->post('external_vendor')) ? implode(', ', $this->input->post('external_vendor')) : '',
                    'cuisines' => !empty($this->input->post('cuisines')) ? implode(', ', $this->input->post('cuisines')) : '',
                    'alcohol_policy' => $this->input->post('alcohol_policy'),
                    'veg_menu_range' => $veg_menu_range,
                    'non_veg_range' => $non_veg_range,
                    // 'service_avail' => !empty($this->input->post('venue_service_avail')) ? implode(', ', $this->input->post('venue_service_avail')) : '',
                    // 'ven_opt' => !empty($this->input->post('ven_opt')) ? implode(', ', $this->input->post('ven_opt')): '',
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
                    // 'availability' => !empty($this->input->post('availability')) ? implode(', ', $this->input->post('availability')) : '',
                    // 'wear_opt' => !empty($this->input->post('wear_opt')) ? implode(', ', $this->input->post('wear_opt')) : '',

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
                    // 'ser_avail' => !empty($this->input->post('ser_avail')) ? implode(', ', $this->input->post('ser_avail')) : '',
                    // 'gw_opt' => (!empty($this->input->post('gw_opt'))) ? implode(', ', $this->input->post('gw_opt')) : '',
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
                    'package4' => $this->input->post('photo_package4'),
                    'ppackage_range1' => $ppackage_range1,
                    'ppackage_range2' => $ppackage_range2,
                    'ppackage_range3' => $ppackage_range3,
                    'ppackage_range4' => $ppackage_range4,
                    'occations' => !empty($this->input->post('occations')) ? implode(', ', $this->input->post('occations')) : '',
                    'travel_out' => $this->input->post('travel_out'),
                    'delivery_time' => $this->input->post('delivery_time'),
                    // 'avail_service' => !empty($this->input->post('photo_avail_service')) ? implode(', ', $this->input->post('photo_avail_service')) : '',
                    // 'pho_opt' => !empty($this->input->post('pho_opt')) ? implode(', ', $this->input->post('pho_opt')) : '',

                );
                
                // if($_SERVER['REMOTE_ADDR'] === '2401:4900:1c20:66c1:286a:d048:d153:617'){
                // pr($photography_data, '');
                // exit;
                // }
                
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
                    // 'makeup_start_price' => $this->input->post('makeup_start_price'),
                    'package1' => $this->input->post('makeup_package1'),
                    'package2' => $this->input->post('makeup_package2'),
                    'package1_range' => isset($price_range1) ? $price_range1 : '',
                    'package2_range' => isset($price_range2) ? $price_range2 : '',
                    'make_tech' => !empty($this->input->post('make_tech')) ? implode(', ', $this->input->post('make_tech')) : '',
                    'travel_out' => $this->input->post('travel_out'),
                    // 'avail_service' => !empty($this->input->post('makeup_avail_service')) ? implode(', ', $this->input->post('makeup_avail_service')) : '',
                    'groom_service' => !empty($this->input->post('groom_service')) ? implode(', ', $this->input->post('groom_service')) : '',
                    // 'mu_opt' => !empty($this->input->post('mu_opt')) ? implode(', ', $this->input->post('mu_opt')) : '',
                );
                // pr($make_up_data, '');exit;
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
                    // 'meh_opt' => !empty($this->input->post('meh_opt')) ? implode(', ', $this->input->post('meh_opt')) : '',
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
                    'opt_avail' => $this->input->post('rental_opt'),
                    // 'jewl_opt' => !empty($this->input->post('jewl_opt')) ? implode(', ', $this->input->post('jewl_opt')) : '',

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
                    // 'package1' => $this->input->post('decorator_package1'),
                    // 'package2' => $this->input->post('decorator_package2'),
                    'package2' => $package1_range,
                    'package2' => $package2_range,
                    'deco_price_range' =>  $deco_price_range,
                    'min_range' => $min_range,
                    'deco_style' => implode(', ', $this->input->post('deco_style')),
                    'modern_style' => implode(', ', $this->input->post('modern_style')),
                    // 'deco_opt' => !empty($this->input->post('deco_opt')) ? implode(', ', $this->input->post('deco_opt')) : '',

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
                    'gift_pack_price' => $this->input->post('gift_pack_price'),
                    'gift_type' => !empty($this->input->post('gift_type')) ? implode(', ', $this->input->post('gift_type')) : '',
                    'editable' => $this->input->post('editable'),
                    'non_editable' => $this->input->post('non_editable'),
                    'price_range_edit' => $this->input->post('price_range_edit'),
                    'price_range_non_edit' => $this->input->post('price_range_non_edit'),
                    'range_editable' => $this->input->post('range_editable'),
                    'range_non_editable' => $this->input->post('range_non_editable'),
                    // 'service_avail' => !empty($this->input->post('service_avail')) ? implode(', ', $this->input->post('service_avail')) : '',
                    // 'gift_opt' => !empty($this->input->post('gift_opt')) ? implode(', ', $this->input->post('gift_opt')) : '',

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
                    // 'cat_service' => $this->input->post('cat_service'),
                    'catering_start_price' => $this->input->post('catering_start_price'),
                    'veg_menu' => $veg_menu,
                    'non_veg_menu' => $non_veg_menu,
                    'menu_opt' => !empty($this->input->post('menu_opt')) ? implode(', ', $this->input->post('menu_opt')) : '',
                    'service_avail' => !empty($this->input->post('service_avail')) ? implode(', ', $this->input->post('service_avail')) : '',
                    // 'cater_opt' => !empty($this->input->post('cater_opt')) ? implode(', ', $this->input->post('cater_opt')) : '',

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
                    // 'requirement' => !empty($this->input->post('requirement')) ? implode(', ', $this->input->post('requirement')) : '',
                    // 'invi_opt' => !empty($this->input->post('invi_opt')) ? implode(', ', $this->input->post('invi_opt')) : '',
                );
                
                $validate_invi = $this->VendorModel->validate_vendor_existance('inivitations', $vendor_uid);
                if($validate_invi > 0){
                    $this->VendorModel->Update_Vendor_table('inivitations',$inivitations_data, $vendor_uid);
                }else{
                    $this->VendorModel->insert_inivitations($inivitations_data);
                }
                
            }
        }
        echo '<script>alert("Data has been updated!"); window.location.href = "'.base_url().'"</script>';
        // $this->session->set_flashdata('success', 'Vendor has been added');
        // redirect('Vendor/Vendor_Form');
    }

    // trusted vendor list
    function TrustedVendor($seo='') {
        $data['trust'] = $this->VendorModel->Trusted_Vendor('all-data', $seo);
        $data['Get_Vendor_cat'] = $this->VendorModel->Get_Vendor_cat();
        $this->load->view('front/pages/trusted_vendor_list', $data);
    }

    function Load_more_Trusted_data(){

        $start = $this->input->post('start');
        $url_vendor = $this->input->post('url_vendor');

        if(isset($url_vendor) && !empty($url_vendor)){
         $data['vendor'] = $this->VendorModel->Trusted_Vendor('limit', $url_vendor, (int) $start);
        }else{
            $data['vendor'] = $this->VendorModel->Trusted_Vendor('limit', '', (int) $start);
        }
        
        $output = '';
        foreach ($data['vendor']['result'] as $value) {
            $category = $value['category'];

            if($category == 1){
                $output .= Vendor_card('ve', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 2){
                 $output .= Vendor_card('bw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 3){
                 $output .= Vendor_card('gw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 4){
                 $output .= Vendor_card('ph', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 5){
                 $output .= Vendor_card('mu', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 6){
                 $output .= Vendor_card('me', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 7){
                 $output .= Vendor_card('bj', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 8){
                 $output .= Vendor_card('dc', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 9){
                 $output .= Vendor_card('gf', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 10){
                 $output .= Vendor_card('ct', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 13){
                 $output .= Vendor_card('in', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }

        }
        echo $output;
    }


    // city wise filter vendor 
    function Get_City_vendor($city){
        $data['citys'] = $this->VendorModel->Get_City_data($city);
        $this->load->view('front/pages/city_vendor_list', $data);
    }

    function Load_more_city_data($city){

        $start = $this->input->post('start');

        $data['citys'] = $this->VendorModel->Get_City_data($city, (int) $start);

        $output = '';
        foreach ($data['citys']['result'] as $value) {
            $category = $value['category'];

            if($category == 1){
                $output .= Vendor_card('ve', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 2){
                 $output .= Vendor_card('bw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 3){
                 $output .= Vendor_card('gw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 4){
                 $output .= Vendor_card('ph', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 5){
                 $output .= Vendor_card('mu', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 6){
                 $output .= Vendor_card('me', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 7){
                 $output .= Vendor_card('bj', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 8){
                 $output .= Vendor_card('dc', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 9){
                 $output .= Vendor_card('gf', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 10){
                 $output .= Vendor_card('ct', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }elseif($category == 13){
                 $output .= Vendor_card('in', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }

        }
        echo $output;
    }
    public function updateCity(){
        $selectedCity = $this->input->post('selectedCity');
        $this->session->set_userdata('selectedCity', $selectedCity);

        // Redirect back to the current page
        redirect($this->input->server('HTTP_REFERER'));
    }
    // vendor price list on front end 
    public function  vendor_pricing_plan(){
        $this->load->view('front/pages/vendor-pricing-plan');
    }
   
    
         public function seedpaper() {
        $this->load->view('front/pages/seedpaper');
    }
    public function blessings_by_trupti() {
        $this->load->view('front/pages/blessings_by_trupti');
    }
    public function Bridal_Jewellery() {
        // Here all-data is used to fetch vendor-wise all data on separate page
        $data['result'] = $this->VendorModel->Top_Vendor(7, 'all-data');
        $this->load->view('front/pages/bridal_jewellery', $data);
    }
    public function Wedding_Gifts() {
        $data['result'] = $this->VendorModel->Top_Vendor(9, 'all-data');
        $this->load->view('front/pages/Wedding_Gifts', $data);
    }
    function Bridal_Makeup() {
        $data['result'] = $this->VendorModel->Top_Vendor(5, 'all-data');
        // print_r($data['make']);
        $this->load->view('front/pages/bridal_makeup', $data);
    }
    function Bridal_Wear() {
        $data['result'] = $this->VendorModel->Top_Vendor(2, 'all-data');
        $this->load->view('front/pages/Bridal_Wear', $data);
    }
    function Catering() {
        $data['result'] = $this->VendorModel->Top_Vendor(10, 'all-data');
        $this->load->view('front/pages/catering', $data);
    }
    function Decorators() {
        $data['result'] = $this->VendorModel->Top_Vendor(8, 'all-data');
        $this->load->view('front/pages/decorators', $data);
    }
    function Groom_Wear() {
        $data['result'] = $this->VendorModel->Top_Vendor(3, 'all-data');
        $this->load->view('front/pages/groom_wear', $data);
    }
    function Mehendi_Artist() {
        $data['result'] = $this->VendorModel->Top_Vendor(6, 'all-data');
        $this->load->view('front/pages/mehendi_artist', $data);
    }
    function Photography() {
        $data['result'] = $this->VendorModel->Top_Vendor(4, 'all-data');
        $this->load->view('front/pages/Photography', $data);
    }
    function Venue() {
        $data['result'] = $this->VendorModel->Top_Vendor(1, 'all-data');
        $this->load->view('front/pages/Venue', $data);
    }
    function Wedding_Invitation() {
        $data['result'] = $this->VendorModel->Top_Vendor(13, 'all-data');
        $this->load->view('front/pages/Wedding_Invitation', $data);
    }
    public function romoch() {
        $this->load->view('front/pages/romoch');
    }
    public function jet_gems() {
        $this->load->view('front/pages/jet_gems');
    }
    public function diagold_creation() {
        $this->load->view('front/pages/diagold_creation');
    }
    public function victoria_makeovers() {
        $this->load->view('front/pages/victoria_makeovers');
    }
    public function polished_by_nidhi() {
        $this->load->view('front/pages/polished_by_nidhi');
    }
    public function ella() {
        $this->load->view('front/pages/ella');
    }
     public function girish_cold_drink_n_caterers() {
        $this->load->view('girish_cold_drink_n_caterers');
    }
    public function arsim_international_decorators_n_events() {
        $this->load->view('vendor/arsim_international_decorators_n_events');
    }
    
    
    function Wedding_Gifts9() {
        $this->load->view('front/pages/Wedding_Gifts');
    }
    
     
    
}

    
?>