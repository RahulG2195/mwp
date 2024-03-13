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

    function Get_All_Result($search, $page=0) {
        
        //vendor name wise data 
        $this->db->select('default_vendor_inp.*, master_city.city_id, master_city.name AS city_name, master_category.category_id, master_category.name as cat_name');
        $this->db->from('default_vendor_inp');
        $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id ', 'left');
        $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');

        // Search conditions
        $searchConditions = [
            'LOWER(vendor_name)' => strtolower($search),
            'LOWER(about)' => strtolower($search),
            'LOWER(service_offer)' => strtolower($search),
            'LOWER(area)' => strtolower($search),
            'LOWER(master_category.name)' => strtolower($search),
            'LOWER(master_city.name)' => strtolower($search),
        ];

        $this->db->group_start();
        $this->db->or_like($searchConditions);
        $this->db->group_end();

        // Where conditions for vendor status
        $this->db->where('default_vendor_inp.vendor_status', 1);
        $this->db->limit(24, $page);
        // Execute query
        $combined_data = $this->db->get();

        // echo $this->db->last_query();

        if ($combined_data->num_rows() > 0) {
            return array(
                'combined_result' => $combined_data->result_array(),
                'combined_count' => $combined_data->num_rows(),
            );
            // Handle results
        }else{
            return array(
                'combined_result' => array(),
                'combined_count' => array(),
            );
        }
    }
    
}
