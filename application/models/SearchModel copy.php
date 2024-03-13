<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class SearchModel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }

    public function Validate_Inputs($category, $city)
    {
       $this->db->where('cat_seo_url', $category);
       $this->db->select('category_id');
       $this->db->from('master_category');
       $cat = $this->db->get()->row_array();
       
    //    echo $this->db->last_query();
       $this->db->where('name', $city);
       $this->db->select('city_id');
       $this->db->from('master_city');
       $city = $this->db->get()->row_array();
       
       return array(
        'cat_name' => $cat,
        'city_name' => $city,
       );
    }

    function SearchData($cat, $city, $start=0) {
        $this->db->select('COUNT(dv_id) as vendor_count', false); // Count rows per category
        $this->db->where(array('vendor_status' => 1, 'city' => (int)$city, 'category' => $cat));
        $this->db->from('default_vendor_inp');
        // $this->db->group_by(array('city', 'category'));
        $count_query = $this->db->get();
        // display data only if admin approve. 
        $this->db->select('default_vendor_inp.*, master_category.category_id, master_category.name AS cat_name, master_city.city_id, master_city.name AS city_name');
        $this->db->from('default_vendor_inp');
        $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
        $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
        $this->db->where(
                array(
                    'default_vendor_inp.vendor_status' => 1, 
                    'default_vendor_inp.city' => $city,
                    'default_vendor_inp.category' => $cat
                    )
                );
        $this->db->limit(24,  $start);
        $this->db->order_by('dv_id', 'DESC');

        $query = $this->db->get();
        // echo $this->db->last_query();
        return array(
            'category_count' =>  $count_query->result_array(),
            'result' => $query->result_array()
        );
    }

    function Get_All_Result($search) {

        // blog 
        /* $this->db->select('*');
        $this->db->from('blog-table');
        $this->db->or_like('LOWER(blog-title)', strtolower($search), 'both');
        $this->db->or_like('LOWER(short-description)', strtolower($search), 'both');
        $this->db->or_like('LOWER(description)', strtolower($search), 'both');
        $blog = $this->db->get();
        if($blog->num_rows() > 0) {
            $blog_result = $blog->result_array();
        } */

        //vendor name wise data 
        $this->db->select('default_vendor_inp.*, master_city.city_id, master_city.name AS city_name, master_category.category_id, master_category.name as cat_name');
        $this->db->from('default_vendor_inp');
        $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id ', 'left');
        $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
        $this->db->or_like('LOWER(vendor_name)', strtolower($search), 'both');
        $this->db->or_like('LOWER(about)', strtolower($search), 'both');
        $this->db->or_like('LOWER(service_offer)', strtolower($search), 'both');
        $this->db->or_like('LOWER(area)', strtolower($search), 'both');
        $this->db->where(array('default_vendor_inp.vendor_status'=> 1));
        $ven_data = $this->db->get();

        if($ven_data->num_rows() > 0) {
            $ven_result = $ven_data->result_array();
            // print_r($ven_result);
        }

        //vendor category wise data
        $this->db->select('*');
        $this->db->from('master_category');
        $this->db->like('LOWER(name)', strtolower($search), 'both');
        $cat_data = $this->db->get();
        
        if($cat_data->num_rows() > 0) {
            $cat_result = $cat_data->result_array();
            
            $this->db->select('default_vendor_inp.*, master_city.city_id, master_city.name AS city_name, master_category.category_id, master_category.name as cat_name');
            $this->db->from('default_vendor_inp');
            $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id ', 'left');
            $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
            $this->db->where(array('default_vendor_inp.vendor_status'=> 1));
            foreach ($cat_result as  $value) {
                $this->db->where('category', $value['category_id']);
            }
            $cat_ven_data = $this->db->get();
            if($cat_ven_data->num_rows() > 0) {
                $cven_result = $cat_ven_data->result_array();
                // print_r($cven_result);
            }
        }

        // city wise data 
        $this->db->select('*');
        $this->db->from('master_city');
        $this->db->like('LOWER(name)', strtolower($search), 'both');
        $city_data = $this->db->get();
        // echo $this->db->last_query();
        if($city_data->num_rows() > 0) {
            // echo $search;
            $city_result = $city_data->result_array();
            
            $this->db->select('default_vendor_inp.*, master_city.city_id, master_city.name AS city_name, master_category.category_id, master_category.name as cat_name');
            $this->db->from('default_vendor_inp');
            $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id ', 'left');
            $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
            $this->db->where(array('default_vendor_inp.vendor_status'=> 1));
            foreach ($city_result as  $value) {
                $this->db->where('city', $value['city_id']);
            }
            $city_ven_data = $this->db->get();
            if($city_ven_data->num_rows() > 0) {
                $city_result = $city_ven_data->result_array();
                // print_r($city_result);
            }
        }else{
            $city_result = array();
        }

        return array(
            // 'blog_result' =>  $blog_result,
            'ven_result' =>  $ven_result,
            'cven_result' =>  $cven_result,
            'city_result' =>  $city_result,
            
        );

    }
    
}
