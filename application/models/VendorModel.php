<?php

defined('BASEPATH') or exit('No direct script access allowed');

class VendorModel extends CI_Model {
    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    function Display_sub_category($data = array()) {
        if(!empty($data)){
            $this->db->where($data);
            $this->db->from('master_sub_category');
            $query = $this->db->get();
            $result = $query->result_object();
            return $result;
        }
    }

    function Top_Vendor($cat_id, $allData) {
        $this->db->select('COUNT(category) as category_count, master_city.*', false); // Count rows per category
          $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
          $this->db->where(array('vendor_status' => 1, 'category' => $cat_id));
          if(!empty($this->session->userdata('selectedCity')) && $this->session->userdata('selectedCity')){
            $city_name = $this->session->userdata('selectedCity');
            $this->db->where('master_city.name', $city_name);
          }
          $this->db->from('default_vendor_inp');
          $this->db->group_by('category');
          $count_query = $this->db->get();

        // display data only if admin approve. 
        $this->db->select('default_vendor_inp.*,  master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
        $this->db->from('default_vendor_inp');
        $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
        $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
        $this->db->join('master_vendor_tags', 'default_vendor_inp.tag_id = master_vendor_tags.tag_id ', 'left');
        $this->db->where(array('default_vendor_inp.vendor_status' => 1, 'default_vendor_inp.category' => $cat_id));
         if(!empty($this->session->userdata('selectedCity')) && $this->session->userdata('selectedCity')){
          $city_name = $this->session->userdata('selectedCity');
          $this->db->where('master_city.name', $city_name);
        }
        if($allData !== 'all-data'){
          $this->db->limit(3);
        }
        $this->db->order_by('rating', 'DESC');
        // $this->db->order_by('review', 'DESC');
        // $this->db->order_by('price_range', 'Asc');
        $query = $this->db->get()->result_array();
        // return ($query);
        // echo $this->db->last_query(); 
        return array(
            'category_count' => $count_query->result_array(),
            'result' => $query
        );
    }

    function get_Single_vendor($tab, $seo) {

        if($tab == 'bw'){
            $this->db->select('bridal_wear.*, default_vendor_inp.*, master_category.category_id, master_category.name as cat_name, master_city.city_id, master_city.name As city_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
            $this->db->from('bridal_wear');
            $this->db->join('default_vendor_inp', 'bridal_wear.vin_id = default_vendor_inp.vendor_uid', 'left');
        
        }elseif($tab == 'bj'){
        
          $this->db->select('bridal_jewellery.*, default_vendor_inp.*, master_category.category_id, master_category.name as cat_name, master_city.city_id, master_city.name As city_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
          $this->db->from('bridal_jewellery');
          $this->db->join('default_vendor_inp', 'bridal_jewellery.vin_id = default_vendor_inp.vendor_uid', 'left');
        
        }elseif($tab == 'ct'){
        
          $this->db->select('catering.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_city.city_id, master_city.name As city_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
          $this->db->from('catering');
          $this->db->join('default_vendor_inp', 'catering.vin_id = default_vendor_inp.vendor_uid', 'left');
        
        }elseif($tab == 'dc'){
        
          $this->db->select('decorator.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_city.city_id, master_city.name As city_nam, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
          $this->db->from('decorator');
          $this->db->join('default_vendor_inp', 'decorator.vin_id = default_vendor_inp.vendor_uid', 'left');
        
        }elseif($tab == 'gf'){
        
          $this->db->select('gift.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_city.city_id, master_city.name As city_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
          $this->db->from('gift');
          $this->db->join('default_vendor_inp', 'gift.vin_id = default_vendor_inp.vendor_uid', 'left');
        
        }elseif($tab == 'gw'){
          
          $this->db->select('groom_wear.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_city.city_id, master_city.name As city_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
          $this->db->from('groom_wear');
          $this->db->join('default_vendor_inp', 'groom_wear.vin_id = default_vendor_inp.vendor_uid', 'left');
        
        }elseif($tab == 'in'){
        
          $this->db->select('inivitations.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_city.city_id, master_city.name As city_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
          $this->db->from('inivitations');
          $this->db->join('default_vendor_inp', 'inivitations.vin_id = default_vendor_inp.vendor_uid', 'left');
        
        }elseif($tab == 'mu'){
        
          $this->db->select('make_up.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_city.city_id, master_city.name As city_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
          $this->db->from('make_up');
          $this->db->join('default_vendor_inp', 'make_up.vin_id = default_vendor_inp.vendor_uid', 'left');
        
        }elseif($tab == 'me'){
        
          $this->db->select('mehendi.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_city.city_id, master_city.name As city_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
          $this->db->from('mehendi');
          $this->db->join('default_vendor_inp', 'mehendi.vin_id = default_vendor_inp.vendor_uid', 'left');
        
        }elseif($tab == 'ph'){
        
          $this->db->select('photography.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_city.city_id, master_city.name As city_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
          $this->db->from('photography');
          $this->db->join('default_vendor_inp', 'photography.vin_id = default_vendor_inp.vendor_uid', 'left');
        
        }elseif($tab == 've'){
        
          $this->db->select('venue.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_city.city_id, master_city.name As city_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
          $this->db->from('venue');
          $this->db->join('default_vendor_inp', 'venue.vin_id = default_vendor_inp.vendor_uid', 'left');
        
        }

        $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id ', 'left');
        $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
        $this->db->join('master_vendor_tags', 'default_vendor_inp.tag_id = master_vendor_tags.tag_id', 'left');
        $this->db->where('vendor_seo_url', $seo);

        $this->db->order_by('rating', 'DESC');
        $this->db->order_by('review', 'DESC');
        $this->db->order_by('price_range', 'Asc');
        
        $result = $this->db->get()->result_array();
        // echo $this->db->last_query();
        // $this->db->last_query();
        return $result;
    }
    
    function Similar_Data($seo) {
      // echo $seo;
      $subquery = $this->db->select('category, price_range, city')
      ->from('default_vendor_inp')
      ->where('vendor_seo_url', $seo)
      ->get();

      if ($subquery->num_rows() > 0) {
          $category_array = $subquery->result_array();
          $categories = array_column($category_array, 'category');
          $price_range = array_column($category_array, 'price_range');
          $city = array_column($category_array, 'city');
          
          // get count of vendor 
          $this->db->select('COUNT(category) as category_count', false); // Count rows per category
          $this->db->where(array('vendor_status' => 1, 'category' => $categories[0]));
          $this->db->from('default_vendor_inp');
          $this->db->group_by('category');
          $count_query = $this->db->get();


          // get similar data 
          $this->db->select('default_vendor_inp.*, master_city.city_id, master_city.name AS city_name, master_category.category_id, master_category.name as cat_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
          $this->db->from('default_vendor_inp');
          $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id ', 'left');
          $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
          $this->db->join('master_vendor_tags', 'default_vendor_inp.tag_id = master_vendor_tags.tag_id', 'left');
          $this->db->where(
            array(
              'default_vendor_inp.vendor_status'=> 1, 
              'default_vendor_inp.category' => $categories[0], 
              'default_vendor_inp.price_range' => $price_range[0], 
              'default_vendor_inp.city' => $city[0], 
              'default_vendor_inp.vendor_seo_url!=' => $seo
            ));

          // $this->db->where_in(array());
          // if global city selected 
           if(!empty($this->session->userdata('selectedCity')) && $this->session->userdata('selectedCity')){
              $city_name = $this->session->userdata('selectedCity');
              $this->db->where(array('category' => $categories[0], 'price_range' => $price_range[0], 'master_city.name', $city_name));
            }
          $this->db->limit(10);
          $this->db->order_by('rating', 'DESC');
          $this->db->order_by('review', 'DESC');
          $this->db->order_by('price_range', 'Asc');

          $result = $this->db->get();
          // echo $this->db->last_query();
          $result = $result->result_array();
          return array(
            'category_count' => $count_query->result_array(),
            'result' => $result
        );
        
      }
    }
    
    function fetch_vendor_deals($vendor_id){
      $this->db->select('*');
      $this->db->from('vendor-deals');
      $this->db->where('vendor_id', $vendor_id);
      $this->db->where('is_active', 1);
      return $this->db->get()->result_array();
    }

    function Get_Vendor_By_Cat_Model($vendor_seo, $start = 0) {
      // join to get cat 
      $subquery = $this->db->select('category_id')
      ->from('master_category')
      ->where('cat_seo_url', $vendor_seo)
      ->get();

      // echo $this->db->last_query();

      if ($subquery->num_rows() > 0) {
          $category_array = $subquery->row_array();
          // $categories = array_column($category_array, 'category');
          
          // get count of vendor 
          $this->db->select('COUNT(category) as category_count, master_city.*', false); // Count rows per category
          $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
          $this->db->where(array('vendor_status' => 1, 'category' => $category_array['category_id']));
          if(!empty($this->session->userdata('selectedCity')) && $this->session->userdata('selectedCity')){
            $city_name = $this->session->userdata('selectedCity');
            $this->db->where('master_city.name', $city_name);
          }
          $this->db->from('default_vendor_inp');
          $this->db->group_by('category');
          $count_query = $this->db->get();


          // get all data vendor wise
          $this->db->select('default_vendor_inp.*, master_city.city_id, master_city.name AS city_name, master_category.category_id, master_category.name as cat_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
          $this->db->from('default_vendor_inp');
          $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id ', 'left');
          $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
          $this->db->join('master_vendor_tags', 'default_vendor_inp.tag_id = master_vendor_tags.tag_id', 'left');
          $this->db->where(array('default_vendor_inp.vendor_status'=> 1));
          if(!empty($this->session->userdata('selectedCity')) && $this->session->userdata('selectedCity')){
            $city_name = $this->session->userdata('selectedCity');
            $this->db->where('master_city.name', $city_name);
          }
          $this->db->where_in('category', $category_array);
          $this->db->order_by('rating','DESC');
          $this->db->order_by('review','DESC');
          $this->db->order_by('dv_start_price','ASC');
          $this->db->limit(24, $start);
          
          $result = $this->db->get();
          // echo $this->db->last_query();
          return array(
            'category_count' => $count_query->result_array(),
            'result' => $result->result_array()
        );
        
      }else{
        return false;
      }
    }
    
    function fetch_vendor_categories(){
      $this->db->select('*');
      $this->db->from('master_category');
      $this->db->where('is_deleted !=', 1);
      return $this->db->get()->result_array();
    }

    function fetch_vendor_city() {
      $this->db->select('*');
      $this->db->from('master_city');
      $this->db->where('is_deleted !=', 1);
      $this->db->order_by('name', 'Asc');
      // $this->db->order_by('city_id','ASC');
      return $this->db->get()->result_array();
    }

    function Get_City_data($citys, $start = 0) {
      
      $subquery = $this->db->select('*')
      ->from('master_city')
      ->where('name', $citys)
      ->order_by('city_id','ASC')
      ->limit(1)
      ->get();

      // echo $this->db->last_query();

      // echo $citys;exit;
      if ($subquery->num_rows() > 0) {
        $city = $subquery->result_array();
       
        // $city_id = array_column($city, 'city');
        // print_r($city_id);
        $this->db->select('COUNT(city) as city_count', false); // Count rows per category
        $this->db->where(array('vendor_status' => 1, 'city' => (int)$city[0]['city_id']));
        $this->db->from('default_vendor_inp');
        $this->db->group_by('city');
        $count_query = $this->db->get();
      // echo $this->db->last_query();


        // display data only if admin approve. 
        $this->db->select('default_vendor_inp.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name,master_vendor_tags.tag_id, master_vendor_tags.tag_name');
        $this->db->from('default_vendor_inp');
        $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
        $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
        $this->db->join('master_vendor_tags', 'default_vendor_inp.tag_id = master_vendor_tags.tag_id', 'left');
        $this->db->where(array('default_vendor_inp.vendor_status' => 1, 'default_vendor_inp.city' => (int)$city[0]['city_id']));
        $this->db->limit(12, $start);
        // if($allData !== 'all-data'){
        //   $this->db->limit(3);
        // }
        $this->db->order_by('rating', 'DESC');
        $this->db->order_by('review', 'DESC');
        $this->db->order_by('price_range', 'Asc');
        $query = $this->db->get()->result_array();
        
        return array(
            'city_count' => $count_query->result_array(),
            'result' => $query,
        );
      }
    }
    // display vendor data on vendor form of plan buyed customer
    function Get_Vendor_data($vendor_uid){
      
      $this->db->select('dv_id, vendor_name, vendor_email, phone_no, user_name, password, city, category');
      $this->db->from('default_vendor_inp');
      $this->db->where('dv_id', $vendor_uid);
      $this->db->order_by('dv_id', 'Desc');
      $this->db->limit(1);
      $query = $this->db->get();
    //   echo $this->db->last_query();
      return $query->result_array();
    }

    function insert_vendor($data = array()) {
      $this->db->insert('default_vendor_inp', $data);
      return $this->db->insert_id();
    }
    function insert_visit_user($data = array()) {
      $this->db->insert('vendor-visitor-table', $data);
      return $this->db->insert_id();
    }
    
    function InserDataNotification($data){
      $this->db->insert('vendor_notification',$data);
      $id=$this->db->insert_id();
      return $id;
    }
    function InserDataNotificationAdmin($data){
      $this->db->insert('admin_notification',$data);
      $id=$this->db->insert_id();
      return $id;
    }
    
    function update_vendor($id, $data) {
      // echo $id;exit;
      // pr($data, 'exit');exit;
      $this->db->where('dv_id', $id); 
      $this->db->update('default_vendor_inp', $data);
      // $this->db->get();
      // echo $this->db->last_query();
      return $this->db->affected_rows();
    }

    function insert_wear($data = array()) {
        return  $this->db->insert('bridal_wear', $data);
    }
    function insert_bridal_jewellery($data = array()) {
        return  $this->db->insert('bridal_jewellery', $data);
    }
    function insert_catering($data = array()) {
        return  $this->db->insert('catering', $data);
    }
    function insert_decorator($data = array()) {
        return  $this->db->insert('decorator', $data);
    }
    function insert_gift($data = array()) {
        return  $this->db->insert('gift', $data);
    }
    function insert_groom_wear($data = array()) {
        return  $this->db->insert('groom_wear', $data);
    }
    function insert_inivitations($data = array()) {
        return  $this->db->insert('inivitations', $data);
    }
    function insert_make_up($data = array()) {
        return  $this->db->insert('make_up', $data);
    }
    function insert_mehendi($data = array()) {
        return  $this->db->insert('mehendi', $data);
    }
    function insert_photography($data = array()) {
        return  $this->db->insert('photography', $data);
    }
    function insert_venue($data = array()) {
        return  $this->db->insert('venue', $data);
    }
    
    
    // validate vendor category 
    function validate_vendor_existance($table, $id){
        $this->db->select('vin_id');
        $this->db->from($table);
        $this->db->where('vin_id', $id);
        return $this->db->get()->num_rows();
    }
    
    
    // update category if exist 
    function Update_Vendor_table($table, $data, $id){
      $this->db->where('vin_id', $id); 
      $this->db->update($table, $data);
      return $this->db->affected_rows();
    }

    // validatete vendor already exist
    function Validate_Vendor($id){
        $this->db->select('vendor_uid');
          $this->db->from('default_vendor_inp');
          $this->db->where('dv_id', $id);
          $result = $this->db->get();
        //   echo $this->db->last_query();
          return $result->row_array();
    }

    // get vendor email & name
    function Get_Vendor_email_name($id){
        $this->db->select('vendor_email, vendor_name');
          $this->db->from('default_vendor_inp');
          $this->db->where('dv_id', $id);
          $result = $this->db->get();
        //   echo $this->db->last_query();
          return $result->row_array();
    }

    //fetch foe inc by 1 during insert
    function Get_last_Vendor_id() {
      $this->db->select('vendor_uid');
      $this->db->from('default_vendor_inp');
      $this->db->limit(1);
      $this->db->order_by('vendor_uid','DESC');
      $result = $this->db->get()->row_array();
      // echo $this->db->last_query();
      return  $result;
    }
    
    function insert_vendorpayment($data = array(), $id) {
      $this->db->insert('vendor-payment-table', $data);

      $this->db->where('dv_id', $id);
      $this->db->update('default_vendor_inp', array('trusted_vendor' => 1));
      return $this->db->affected_rows();
    }

    public function getvendorpaymentdata($transactionid)
    {
        $this->db->select('*');
        $this->db->where('merchant_transaction_id',$transactionid);
        $this->db->from('vendor-payment-table');
        $query=$this->db->get();
        
         if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
        // echo $this->db->last_query();
        /*$result=$query->result_array();
        return $result;*/
    }

    public function updatepaymentstatus($transactionid,$status)
    {
        $this->db->where('merchant_transaction_id', $transactionid);
        $this->db->update('vendor-payment-table', $status);
    }

    public function getuserinfo($userid)
    {
        $this->db->select('default_vendor_inp.*,master_city.name as city_name,master_category.name AS category_name');
        $this->db->where('dv_id',$userid);
        $this->db->from('default_vendor_inp');
        $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id','left');
        $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
        $query=$this->db->get();
         if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
       /* $result=$query->result_array();
        return $result;*/
    }

    function Trusted_Vendor($allData = '', $seo='', $start = 0){
      // echo $seo;
      $this->db->select('default_vendor_inp.*,  master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name, master_vendor_tags.tag_id, master_vendor_tags.tag_name');
      $this->db->from('default_vendor_inp');
      $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
      $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
      $this->db->join('master_vendor_tags', 'default_vendor_inp.tag_id = master_vendor_tags.tag_id', 'left');
      $this->db->where(array('default_vendor_inp.vendor_status' => 1, 'default_vendor_inp.trusted_vendor' => 1, 'rating' => 5));
      if(!empty($this->session->userdata('selectedCity')) && $this->session->userdata('selectedCity')){
        $city_name = $this->session->userdata('selectedCity');
        $this->db->where('master_city.name', $city_name);
      }

      if(!empty($seo) && $seo !== ''){
        $this->db->where('master_category.cat_seo_url', $seo);
      }

      $this->db->order_by('rating', 'DESC');
        $count_query = $this->db->get();

        // display trusted vendor
        $this->db->select('default_vendor_inp.*,  master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url, master_city.city_id, master_city.name AS city_name,  master_vendor_tags.tag_id,  master_vendor_tags.tag_name');
        $this->db->from('default_vendor_inp');
        $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
        $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
        $this->db->join('master_vendor_tags', 'default_vendor_inp.tag_id = master_vendor_tags.tag_id', 'left');
        $this->db->where(array('default_vendor_inp.vendor_status' => 1, 'default_vendor_inp.trusted_vendor' => 1, 'rating' => 5));
        if(!empty($this->session->userdata('selectedCity')) && $this->session->userdata('selectedCity')){
          $city_name = $this->session->userdata('selectedCity');
          $this->db->where('master_city.name', $city_name);
        }

        if(!empty($seo) && $seo !== ''){
          // echo $seo . '--';
          $this->db->where('master_category.cat_seo_url', $seo);
        }

        if($allData == 'limit'){
          $this->db->limit(24, $start);
        }elseif($allData !== 'all-data'){
          $this->db->limit(3);
        }
        $this->db->order_by('rating', 'DESC');
        $query = $this->db->get();
        // if($_SERVER['REMOTE_ADDR'] == '60.254.0.49'){
        // echo $this->db->last_query();
            
        // }
        return array(
          'category_count' => $count_query->num_rows(),
          'result' => $query->result_array(),
      );
        
    }
    
    function Vendor_Deals($allData = '', $seo='', $start = 0){
      // echo $seo;
      $this->db->select('default_vendor_inp.*,vendor-deals.*, master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url');
      $this->db->from('vendor-deals');
//      $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
      $this->db->join('default_vendor_inp', 'vendor-deals.vendor_id = default_vendor_inp.dv_id', 'left');
      $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
//      $this->db->join('master_vendor_tags', 'default_vendor_inp.tag_id = master_vendor_tags.tag_id', 'left');
//      $this->db->where(array('default_vendor_inp.vendor_status' => 1, 'default_vendor_inp.trusted_vendor' => 1, 'rating' => 5));
//      if(!empty($this->session->userdata('selectedCity')) && $this->session->userdata('selectedCity')){
//        $city_name = $this->session->userdata('selectedCity');
//        $this->db->where('master_city.name', $city_name);
//      }

      if(!empty($seo) && $seo !== ''){
        $this->db->where('master_category.cat_seo_url', $seo);
      }

//      $this->db->order_by('rating', 'DESC');
        $this->db->where('vendor-deals.is_active', '1');
        $count_query = $this->db->get();

        // display trusted vendor
        $this->db->select('default_vendor_inp.*,vendor-deals.*,  master_category.category_id, master_category.name AS cat_name, master_category.cat_seo_url');
        $this->db->from('vendor-deals');
//        $this->db->join('master_city', 'default_vendor_inp.city = master_city.city_id', 'left');
        $this->db->join('default_vendor_inp', 'vendor-deals.vendor_id = default_vendor_inp.dv_id', 'left');
        $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id', 'left');
//        $this->db->join('master_vendor_tags', 'default_vendor_inp.tag_id = master_vendor_tags.tag_id', 'left');
//        $this->db->where(array('default_vendor_inp.vendor_status' => 1, 'default_vendor_inp.trusted_vendor' => 1, 'rating' => 5));
//        if(!empty($this->session->userdata('selectedCity')) && $this->session->userdata('selectedCity')){
//          $city_name = $this->session->userdata('selectedCity');
//          $this->db->where('master_city.name', $city_name);
//        }

        if(!empty($seo) && $seo !== ''){
          // echo $seo . '--';
          $this->db->where('master_category.cat_seo_url', $seo);
        }

        if($allData == 'limit'){
          $this->db->limit(24, $start);
        }elseif($allData !== 'all-data'){
          $this->db->limit(30);
        }
//        $this->db->order_by('rating', 'DESC');
        $this->db->where('vendor-deals.is_active', '1');
        $query = $this->db->get();
        // if($_SERVER['REMOTE_ADDR'] == '60.254.0.49'){
        // echo $this->db->last_query();
            
        // }
        return array(
          'category_count' => $count_query->num_rows(),
          'result' => $query->result_array(),
      );
        
    }
    
    public function Get_Vendor_cat(){
        $this->db->where('is_deleted', '0');
      $query = $this->db->get('master_category');
      return $query->result_array();
    }

    public function Get_Vendor_payment($vendor_id){
        $this->db->where('vendor_id', $vendor_id);
        $this->db->where('is_active', '1');
      $query = $this->db->get('vendor-payment-table');
      return $query->result_array();
    }

    public function getpassword($username)
    {
      $this->db->where('user_name', $username);
      $query = $this->db->get('default_vendor_inp');
      return $query->result_array();
    }
    
    public function getuserlogindata($username)
    {
       $this->db->where('username', $username);
       //$this->db->where('user_password', $password);
       $query = $this->db->get('login-table');
       return $query->result_array();
    }
    // public function updatepassword($username,$pass)
    // {
    //    $this->db->where('user_name', $username);
    //    $this->db->update('default_vendor_inp', array('password' => $pass));
    //    return true;
    // }
}