<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class AdminPanelModel extends CI_Model
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
  
  function fetch_vendor_notification() {
    $this->db->select('count(notification_id) AS count, notification_type');
    $this->db->from('admin_notification');
//    $this->db->where('vendor_id', $id);
    $this->db->where('is_new', 1);
    $this->db->where('is_read', 0);
    $this->db->group_by('notification_type');
    // $this->db->order_by('city_id','ASC');
    return $this->db->get()->result_array();
  }
  
  public function getvendornewcountgroupby()
    {
        // SELECT count(dv_id) as count, category FROM `default_vendor_inp` WHERE `is_new` = 1 GROUP BY `category`;
        $this->db->select('count(dv_id) as count,category');
        $this->db->where('is_new',1);
        $this->db->group_by('category');
        $query = $this->db->get('default_vendor_inp');
        return $query->result_array();   
    }
    
        public function vendoreditrequestdata()
    {
        $this->db->where('edit_request', 1);
        $this->db->order_by('edit_request_date_time', 'ASC');
        $query = $this->db->get('default_vendor_inp');
        return $query->result_array();   
    }
  
  function update_vendor_notification($notification_type,$data)
  {
//    $this->db->where('vendor_id',$vendor_id);
    $this->db->where('notification_type',$notification_type);
    $this->db->where('is_new', 1);
    $this->db->where('is_read', 0);
    $this->db->update('admin_notification', $data);
    $id = $this->db->affected_rows();
    return $id;
  }
}
