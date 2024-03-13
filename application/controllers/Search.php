<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Search extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('SearchModel');
    }
    public function DisplayData()
    {
        if (!empty($this->input->get())) {

            $category =  trim(strip_tags($this->input->get('vendor_cat', true)));
            $city = trim(strip_tags($this->input->get('vendor_city', true)));

            if ($category != 'Select Vendor' && $city != 'Select city') {
                $validate = $this->SearchModel->Validate_Inputs($category, $city);
                if (!empty($validate)) {
                    // echo 11;exit;
                    $data['search_result'] = $this->SearchModel->SearchData($validate['cat_name']['category_id'], $validate['city_name']['city_id']);

                    // pr($data['search_result'], '');exit;
                    $this->load->view('front/pages/search', $data);
                    // exit;
                }
                // if city is empty then will redirect to vendor page 
            } elseif ($category !== 'Select Vendor' && $city === 'Select city') {
                // echo 11;exit;
                redirect('Single-Vendor/' . $category);
                // if vendor is empty then will redirect to vendor page 
            } elseif ($city !== 'Select city' && $category === 'Select Vendor') {
                redirect('Citys/' . $city);
            } else {
                // echo 1;exit;
                redirect('Home');
            }
        } else {
            redirect('Home/index');
        }
    }

    function Load_more_Search_data()
    {
        $category =  trim(strip_tags($this->input->get('vendor_cat', true)));
        $city = trim(strip_tags($this->input->get('vendor_city', true)));
        $start = $this->input->post('start');
        $validate = $this->SearchModel->Validate_Inputs($category, $city);
        //remove special char from city

        $data['search_result'] = $this->SearchModel->SearchData($validate['cat_name']['category_id'], $validate['city_name']['city_id'], (int) $start);

        $output = '';
        foreach ($data['search_result']['result'] as $value) {
            $category = $value['category'];

            if ($category == 1) {
                $output .= Vendor_card('ve', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            } elseif ($category == 2) {
                $output .= Vendor_card('bw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            } elseif ($category == 3) {
                $output .= Vendor_card('gw', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            } elseif ($category == 4) {
                $output .= Vendor_card('ph', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            } elseif ($category == 5) {
                $output .= Vendor_card('mu', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            } elseif ($category == 6) {
                $output .= Vendor_card('me', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            } elseif ($category == 7) {
                $output .= Vendor_card('bj', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            } elseif ($category == 8) {
                $output .= Vendor_card('dc', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            } elseif ($category == 9) {
                $output .= Vendor_card('gf', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            } elseif ($category == 10) {
                $output .= Vendor_card('ct', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            } elseif ($category == 13) {
                $output .= Vendor_card('in', $value['cat_name'], $value['vendor_seo_url'], $value['images'], $value['vendor_name'], $value['rating'], $value['review'], $value['price_range'], $value['area'], $value['city_name']);
            }
        }
        echo $output;
    }

    // navbar search method 
    function DisplayAll()
    {
        $search = $this->input->get('search');
        if (isset($search) && !empty($search)) {

            $data['allData'] = $this->SearchModel->Get_All_Result($search);

            $this->load->view('front/pages/searchdata', $data);
        } else {
            redirect('Home/index');
        }
    }

    function Load_more_SearchAll_data()
    {
        $search = $this->input->post('search');
        
        if ($this->input->post('page')) {
            $page = $this->input->post('page');
        } else {
            $page = 0;
        }
// echo $page;
        
        $data['allData'] = $this->SearchModel->Get_All_Result($search, $page);
        if($data['allData'] > 0){
            $output = '';
            foreach ($data['allData']['combined_result'] as $result) {
                // pr($result,'');exit;
                $cat = $result['category'];
                if ($cat == 1) {
                    $short_cut = 've';
                } elseif ($cat == 2) {
                    $short_cut = 'bw';
                } elseif ($cat == 3) {
                    $short_cut = 'gw';
                } elseif ($cat == 4) {
                    $short_cut = 'ph';
                } elseif ($cat == 5) {
                    $short_cut = 'mu';
                } elseif ($cat == 6) {
                    $short_cut = 'me';
                } elseif ($cat == 7) {
                    $short_cut = 'bj';
                } elseif ($cat == 8) {
                    $short_cut = 'dc';
                } elseif ($cat == 9) {
                    $short_cut = 'gf';
                } elseif ($cat == 10) {
                    $short_cut = 'ct';
                } elseif ($cat == 13) {
                    $short_cut = 'in';
                } else {
                    $short_cut = '';
                }
                $output .=  Vendor_card($short_cut, $result['cat_name'], $result['vendor_seo_url'], $result['images'], $result['vendor_name'], $result['rating'], $result['review'], $result['price_range'], $result['area'], $result['city_name']);
    
            }
            // $output .= '<div class="col-12 mx-auto justify-content-center" id="pagination">
            // <button id="ajaxBtn" data-id="'.$result['dv_id'].'">Load More</button>
            // </div>';
            echo $output;
        }else{
            echo '';
        }
        
    }
}
