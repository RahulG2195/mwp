<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Filter extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->model('FilterModel');
        $this->load->model('VendorModel');
    }
    public function index()
    {
        // Retrieve filter parameters from the URL
        // get city and vendor 
        $url = $this->uri->segment(1);
        $output = explode('-in-', $url);
        $vendor = $output[0];
        //remove special char from city
        $city = urldecode($output[1]);

        $Get_Vendor_cat = $this->VendorModel->Get_Vendor_cat();
        $ven_seo = array();
        foreach ($Get_Vendor_cat as $cat) {
            $ven_seo[] = $cat['cat_seo_url'];
        }

        // pr($ven_seo, '');exit;

        if($ven_seo[0] == $vendor){
             $event_spaces = $this->input->get('event_spaces');
            $price_plate = $this->input->get('price_plate');
            $price_detail = $this->input->get('price_detail');  

            $dataArray = array('event_spaces' => $event_spaces, 'price_plate' => $price_plate, 'price_detail' => $price_detail);
            // pr($dataArray, '');exit;
        }elseif($ven_seo[1] == $vendor){
            // inputs 
            $prod_type = $this->input->get('prod_type');
            $price_detail = $this->input->get('price_detail');
            $dataArray = array('prod_type' => $prod_type, 'price_detail' => $price_detail);

        }elseif($ven_seo[2] == $vendor){
            $prod_type = $this->input->get('prod_type');
            $price_detail = $this->input->get('price_detail');
            $dataArray = array('prod_type' => $prod_type, 'price_detail' => $price_detail);
        }elseif($ven_seo[3] == $vendor){
            $price_detail = $this->input->get('price_detail');
            $ppackage_range2 = $this->input->get('ppackage_range2');
            $vendor_exp = $this->input->get('vendor_exp');
            $dataArray = array('ppackage_range2' => $ppackage_range2, 'vendor_exp' => $vendor_exp, 'price_detail' => $price_detail);

        }elseif($ven_seo[4] == $vendor){
            $price_detail = $this->input->get('price_detail');
            $make_techs = $this->input->get('make_techs');
            $make_feature = $this->input->get('make_feature');

            $dataArray = array('make_techs' => $make_techs, 'make_feature' => $make_feature, 'price_detail' => $price_detail);
        }elseif($ven_seo[5] == $vendor){
            $price_detail = $this->input->get('price_detail');
            $max_people = $this->input->get('max_people');
            $vendor_exp = $this->input->get('vendor_exp');
            
            $dataArray = array('max_people' => $max_people, 'vendor_exp' => $vendor_exp, 'price_detail' => $price_detail);
        }elseif($ven_seo[6] == $vendor){
            $price_detail = $this->input->get('price_detail');
            $jew_type = $this->input->get('jew_type');
            $dataArray = array('jew_type' => $jew_type, 'price_detail' => $price_detail);
        }elseif($ven_seo[7] == $vendor){
            $price_detail = $this->input->get('price_detail');
            $dataArray = array('price_detail' => $price_detail);
        }elseif($ven_seo[8] == $vendor){
            $price_detail = $this->input->get('price_detail');
            $gift_types = $this->input->get('gift_types');
            $moq_ranger = $this->input->get('moq_ranger');
            $dataArray = array('gift_types' => $gift_types, 'moq_ranger' => $moq_ranger, 'price_detail' => $price_detail);
        }elseif($ven_seo[9] == $vendor){
            $price_detail = $this->input->get('price_detail');
            $menu_opt = $this->input->get('menu_opt');
            $dataArray = array('menu_opt' => $menu_opt, 'price_detail' => $price_detail);
        }elseif($ven_seo[10] == $vendor){
            $price_detail = $this->input->get('price_detail');
            $type_avail = $this->input->get('type_avail');
            $paper_style_avail = $this->input->get('paper_style_avail');
            $dataArray = array('type_avail' => $type_avail, 'paper_style_avail' => $paper_style_avail, 'price_detail' => $price_detail);
        }

        $sort = $this->input->get('sort');  

        if(isset($sort) && $sort != ''){
            $dataArray = array_merge($dataArray, array('sort'=> $sort));
        }
        // pr(array_filter($dataArray), '');exit;
        $data['filter_data'] = $this->FilterModel->Get_Filter_output($vendor, $city, array_filter($dataArray));
        $data['Get_Vendor_cat'] = $this->VendorModel->Get_Vendor_cat();
        $this->load->view('front/pages/vendor_filter', $data);
    }



    // ========================================== pagination ===========================================
    function Load_more_filter_data(){
        $start = $this->input->post('start');
        $url =  explode('-in-', $this->input->post('url'));
        // $rawData = file_get_contents("php://input");
        $parameters =  json_decode($this->input->post('parameters'));

        // pr($parameters, '');
        $sort = $parameters->sort;
      
        $vendor = $url[0];

        $Get_Vendor_cat = $this->VendorModel->Get_Vendor_cat();
        $ven_seo = array();
        foreach ($Get_Vendor_cat as $cat) {
            $ven_seo[] = $cat['cat_seo_url'];
        }
        //remove special char from city
        $city = urldecode($url[1]);

        if($ven_seo[0] == $vendor){
            $event_spaces = $parameters->{'event_spaces[]'};
            $pricePlate = $parameters->{'price_plate[]'};
            $priceDetail = $parameters->{'price_detail[]'};

           $dataArray = array('event_spaces' => $event_spaces, 'price_plate' => $pricePlate, 'price_detail' => $priceDetail);
       }elseif($ven_seo[1] == $vendor){
           // inputs 
           $prod_type = $parameters->{'prod_type[]'};
           $price_detail = $parameters->{'price_detail[]'};
           $dataArray = array('prod_type' => $prod_type, 'price_detail' => $price_detail);

       }elseif($ven_seo[2] == $vendor){
           $prod_type = $parameters->{'prod_type[]'};
           $price_detail = $parameters->{'price_detail[]'};
           $dataArray = array('prod_type' => $prod_type, 'price_detail' => $price_detail);
       }elseif($ven_seo[3] == $vendor){
           $price_detail = $parameters->{'price_detail[]'};
           $ppackage_range2 = $parameters->{'ppackage_range2[]'};
           $vendor_exp =$parameters->{'vendor_exp[]'};
           $dataArray = array('ppackage_range2' => $ppackage_range2, 'vendor_exp' => $vendor_exp, 'price_detail' => $price_detail);

       }elseif($ven_seo[4] == $vendor){
           $price_detail = $parameters->{'price_detail[]'};
           $make_techs = $parameters->{'make_techs[]'};
           $make_feature = $parameters->{'make_feature[]'};

           $dataArray = array('make_techs' => $make_techs, 'make_feature' => $make_feature, 'price_detail' => $price_detail);
       }elseif($ven_seo[5] == $vendor){
           $price_detail = $parameters->{'price_detail[]'};
           $max_people = $parameters->{'max_people[]'};
           $vendor_exp = $parameters->{'vendor_exp[]'};
           
           $dataArray = array('max_people' => $max_people, 'vendor_exp' => $vendor_exp, 'price_detail' => $price_detail);
       }elseif($ven_seo[6] == $vendor){
           $price_detail = $parameters->{'price_detail[]'};
           $jew_type = $parameters->{'jew_type[]'};
           $dataArray = array('jew_type' => $jew_type, 'price_detail' => $price_detail);
       }elseif($ven_seo[7] == $vendor){
           $price_detail = $parameters->{'price_detail[]'};
           $dataArray = array('price_detail' => $price_detail);
       }elseif($ven_seo[8] == $vendor){
           $price_detail = $parameters->{'price_detail[]'};
           $gift_types = $parameters->{'gift_types[]'};
           $moq_ranger = $parameters->{'moq_ranger[]'};
           $dataArray = array('gift_types' => $gift_types, 'moq_ranger' => $moq_ranger, 'price_detail' => $price_detail);
       }elseif($ven_seo[9] == $vendor){
           $price_detail = $parameters->{'price_detail[]'};
           $menu_opt = $parameters->{'menu_opt[]'};
           $dataArray = array('menu_opt' => $menu_opt, 'price_detail' => $price_detail);
       }elseif($ven_seo[10] == $vendor){
           $price_detail = $parameters->{'price_detail[]'};
           $type_avail = $parameters->{'type_avail[]'};
           $paper_style_avail = $parameters->{'paper_style_avail[]'};
           $dataArray = array('type_avail' => $type_avail, 'paper_style_avail' => $paper_style_avail, 'price_detail' => $price_detail);
       }

    //   $sort = $sort;  
// exit;
       if(isset($sort) && $sort != ''){
           $dataArray = array_merge($dataArray, array('sort'=> $sort));
       }
    //    pr(array_filter($dataArray), '');
    //    exit;
        // echo (int) $start;
        $data['filter_data'] = $this->FilterModel->Get_Filter_output($vendor, $city, array_filter($dataArray), (int) $start);

        $output = '';
        foreach ($data['filter_data']['result'] as $value) {
            $category = $value['category'];

            if($category == 1){
                $output .= Vendor_card('ve', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
            }elseif($category == 2){
                 $output .= Vendor_card('bw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
            }elseif($category == 3){
                 $output .= Vendor_card('gw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
            }elseif($category == 4){
                 $output .= Vendor_card('ph', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
            }elseif($category == 5){
                 $output .= Vendor_card('mu', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
            }elseif($category == 6){
                 $output .= Vendor_card('me', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
            }elseif($category == 7){
                 $output .= Vendor_card('bj', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
            }elseif($category == 8){
                 $output .= Vendor_card('dc', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
            }elseif($category == 9){
                 $output .= Vendor_card('gf', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
            }elseif($category == 10){
                 $output .= Vendor_card('ct', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
            }elseif($category == 13){
                 $output .= Vendor_card('in', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name'], $value['tag_name']);
            }

        }
        echo $output;
    }

   
}
