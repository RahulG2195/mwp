<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class VendorPanelModel extends CI_Model
{
  public $table = 'admin';
  function __construct()
  {
    parent::__construct();
    $this->load->database();
  }

  function GetList($cond = array())
  {

    if (!empty($cond)) {
      $this->db->where($cond);
    }

    $this->db->select('*');
    $this->db->from($this->table);
    $query = $this->db->get();
    $result = $query->result_array();
    return $result;
  }

  function GetData($cond = array())
  {
    if (!empty($cond)) {
      $this->db->where($cond);
      $this->db->select('*');
      $this->db->from($this->table);
      $query = $this->db->get();
      $result = $query->result_array();
      if (!empty($result)) {
        $result = $result[0];
      }
      return $result;
    }
  }

  // shankar panaskar
  function GetDataVin($cond = array())
  {
    if (!empty($cond)) {
      $this->db->where($cond);
      $this->db->select('*');
      $this->db->from('default_vendor_inp ');
      $query = $this->db->get();
      $result = $query->result_array();
      if (!empty($result)) {
        $result = $result[0];
      }
      return $result;
    }
  }
  
  // fetch all vendor of all cat in admin panel
  function Vendor_Data()
  {
    $this->db->select('
        default_vendor_inp.*, 
        bridal_jewellery.*, 
        bridal_wear.*, 
        catering.*, 
        decorator.*, 
        gift.*, 
        groom_wear.*, 
        inivitations.*, 
        make_up.*, 
        mehendi.*, 
        photography.*, 
        venue.*, 
        master_category.category_id, master_category.name, master_category.is_deleted,
        master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_sub_category.is_deleted
        ');
    $this->db->from('default_vendor_inp');
    $this->db->join('');
    $query = $this->db->get();
    return $query->result_array();
  }

  function Get_Bridal_Data()
  {
    $this->db->select('bridal_wear.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
    $this->db->from('bridal_wear');
    $this->db->join('default_vendor_inp', 'bridal_wear.vin_id = default_vendor_inp.dv_id', 'left');
    $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
    $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
    $query = $this->db->get();
    return $query->result_array();
  }

  function Get_Jewellery()
  {
    $this->db->select('bridal_jewellery.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
    $this->db->from('bridal_jewellery');
    $this->db->join('default_vendor_inp', 'bridal_jewellery.vin_id = default_vendor_inp.dv_id', 'left');
    $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
    $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
    $query = $this->db->get();
    return $query->result_array();
  }
  function Get_Catering()
  {
    $this->db->select('catering.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
    $this->db->from('catering');
    $this->db->join('default_vendor_inp', 'catering.vin_id = default_vendor_inp.dv_id', 'left');
    $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
    $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
    $query = $this->db->get();
    return $query->result_array();
  }
  function Get_Decoration()
  {
    $this->db->select('decorator.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
    $this->db->from('decorator');
    $this->db->join('default_vendor_inp', 'decorator.vin_id = default_vendor_inp.dv_id', 'left');
    $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
    $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
    $query = $this->db->get();
    return $query->result_array();
  }
  function Get_Gift()
  {
    $this->db->select('gift.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
    $this->db->from('gift');
    $this->db->join('default_vendor_inp', 'gift.vin_id = default_vendor_inp.dv_id', 'left');
    $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
    $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
    $query = $this->db->get();
    return $query->result_array();
  }
  function Get_Groom_wear()
  {
    $this->db->select('groom_wear.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
    $this->db->from('groom_wear');
    $this->db->join('default_vendor_inp', 'groom_wear.vin_id = default_vendor_inp.dv_id', 'left');
    $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
    $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
    $query = $this->db->get();
    return $query->result_array();
  }
  function Get_Inivitation()
  {
    $this->db->select('inivitations.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
    $this->db->from('inivitations');
    $this->db->join('default_vendor_inp', 'inivitations.vin_id = default_vendor_inp.dv_id', 'left');
    $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
    $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
    $query = $this->db->get();
    return $query->result_array();
  }
  function Get_MakeUp()
  {
    $this->db->select('make_up.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
    $this->db->from('make_up');
    $this->db->join('default_vendor_inp', 'make_up.vin_id = default_vendor_inp.dv_id', 'left');
    $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
    $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
    $query = $this->db->get();
    return $query->result_array();
  }
  function Get_Mehendi()
  {
    $this->db->select('mehendi.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
    $this->db->from('mehendi');
    $this->db->join('default_vendor_inp', 'mehendi.vin_id = default_vendor_inp.dv_id', 'left');
    $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
    $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
    $query = $this->db->get();
    return $query->result_array();
  }
  function Get_Photography()
  {
    $this->db->select('photography.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
    $this->db->from('photography');
    $this->db->join('default_vendor_inp', 'photography.vin_id = default_vendor_inp.dv_id', 'left');
    $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
    $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
    $query = $this->db->get();
    return $query->result_array();
  }
  function Get_Venue()
  {
    $this->db->select('venue.*, default_vendor_inp.*,master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
    $this->db->from('venue');
    $this->db->join('default_vendor_inp', 'venue.vin_id = default_vendor_inp.dv_id', 'left');
    $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
    $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
    $query = $this->db->get();
    return $query->result_array();
  }

  function Fetch_single_data($tab, $id)
  {
    if ($tab == 'bw') {
      $this->db->select('default_vendor_inp.*, bridal_wear.*, master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
      $this->db->join('bridal_wear', 'default_vendor_inp.vendor_uid = bridal_wear.vin_id', 'left');
    } elseif ($tab == 'bj') {

      $this->db->select('default_vendor_inp.*, bridal_jewellery.*, master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
      $this->db->join('bridal_jewellery', 'default_vendor_inp.vendor_uid = bridal_jewellery.vin_id', 'left');
    } elseif ($tab == 'ct') {

      $this->db->select('default_vendor_inp.*,catering.*, master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
      $this->db->join('catering', 'default_vendor_inp.vendor_uid = catering.vin_id', 'left');
    } elseif ($tab == 'dc') {

      $this->db->select('default_vendor_inp.*,decorator.*, master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
      $this->db->join('decorator', 'default_vendor_inp.vendor_uid = decorator.vin_id', 'left');
    } elseif ($tab == 'gf') {

      $this->db->select('default_vendor_inp.*,gift.*, master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
      $this->db->join('gift', 'default_vendor_inp.vendor_uid = gift.vin_id', 'left');
    } elseif ($tab == 'gw') {

      $this->db->select('default_vendor_inp.*,groom_wear.*, master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
      $this->db->join('groom_wear', 'default_vendor_inp.vendor_uid = groom_wear.vin_id', 'left');
    } elseif ($tab == 'in') {

      $this->db->select('default_vendor_inp.*,inivitations.*, master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
      $this->db->join('inivitations', 'default_vendor_inp.vendor_uid = inivitations.vin_id', 'left');
    } elseif ($tab == 'mu') {

      $this->db->select('default_vendor_inp.*,make_up.*, master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
      $this->db->join('make_up', 'default_vendor_inp.vendor_uid = make_up.vin_id', 'left');
    } elseif ($tab == 'me') {

      $this->db->select('mehendi.*, default_vendor_inp.*,master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
      $this->db->join('mehendi', 'default_vendor_inp.vendor_uid = mehendi.vin_id', 'left');
    } elseif ($tab == 'ph') {

      $this->db->select('default_vendor_inp.*,photography.*, master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
      $this->db->join('photography', 'default_vendor_inp.vendor_uid = photography.vin_id', 'left');
    } elseif ($tab == 've') {

      $this->db->select(' default_vendor_inp.*, venue.*, master_category.category_id, master_category.name as cat_name, master_sub_category.sub_category_id, master_sub_category.category_id, master_sub_category.name, master_city.city_id, master_city.name As city_name');
      $this->db->join('venue', 'default_vendor_inp.vendor_uid = venue.vin_id', 'left');
    }

    $this->db->from('default_vendor_inp');
    $this->db->join('master_category', 'default_vendor_inp.category = master_category.category_id ', 'left');
    $this->db->join('master_sub_category', 'default_vendor_inp.sub_category = master_sub_category.sub_category_id', 'left');
    $this->db->join('master_city', 'default_vendor_inp.city	 = master_city.city_id', 'left');
    $this->db->where('dv_id', $id);
    $query = $this->db->get();
    // echo $this->db->last_query();
    return $query->result_array();
  }
  function InserData($data)
  {
    $this->db->insert($this->table, $data);
    $id = $this->db->insert_id();
    return $id;
  }

  function UpdateData($cond = array(), $data)
  {
    $this->db->where($cond);
    $this->db->update($this->table, $data);
    $id = $this->db->affected_rows();
    return $id;
  }

  function DeleteData($cond = array(), $data)
  {
    if (!empty($cond)) {
      $this->db->where($cond);
    }
    $this->db->update($this->table, $data);
    $affected = $this->db->affected_rows();
    return $affected;
  }

  public function Get_vendor_detail($id)
  {
    $this->db->select('category');
    $this->db->from('default_vendor_inp');
    $this->db->where('dv_id', $id);
    return $this->db->get()->row_array();
  }

  function fetch_vendor_categories(){
    $this->db->select('*');
    $this->db->from('master_category');
    $this->db->where('is_deleted !=', 1);
    return $this->db->get()->result_array();
  }
  
  function fetch_vendor_tags(){
    $this->db->select('*');
    $this->db->from('master_vendor_tags');
    // $this->db->where('is_deleted !=', 1);
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
  
  function fetch_vendor_notification($id) {
    $this->db->select('count(notification_id) AS count, notification_type');
    $this->db->from('vendor_notification');
    $this->db->where('vendor_id', $id);
    $this->db->where('is_new', 1);
    $this->db->where('is_read', 0);
    $this->db->group_by('notification_type');
    // $this->db->order_by('city_id','ASC');
    return $this->db->get()->result_array();
  }
  
  function update_vendor_notification($vendor_id,$notification_type,$data)
  {
    $this->db->where('vendor_id',$vendor_id);
    $this->db->where('notification_type',$notification_type);
    $this->db->where('is_new', 1);
    $this->db->where('is_read', 0);
    $this->db->update('vendor_notification', $data);
    $id = $this->db->affected_rows();
    return $id;
  }
}
