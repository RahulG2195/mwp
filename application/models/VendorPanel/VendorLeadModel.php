<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class VendorLeadModel extends CI_Model
{
  // public $table = 'vendor-leads-table';
  public $table = 'vendor-query-form-table-new';
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
    }
      $this->db->select('*');
      $this->db->from($this->table);
      $query = $this->db->get();
      $result = $query->result_array();
      if (!empty($result)) {
        $result = $result[0];
      }
      return $result;
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

  public function Get_vendor_lead_detail($id) {
    $this->db->select('COUNT(*) AS `lead`');
    $this->db->from($this->table);
    $this->db->where('vendor_id', $id);
    $this->db->group_by('vendor_id');
    return $this->db->get()->row_array();
  }
  
  public function Get_vendor_leads_data($id) {
    $this->db->select('*');
    $this->db->from($this->table);
    $this->db->where('vendor_id', $id);
    $this->db->order_by('query_id','DESC');
    $this->db->limit(5);
    return $this->db->get()->result_array();
  }

}
