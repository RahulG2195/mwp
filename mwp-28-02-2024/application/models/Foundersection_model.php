<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Foundersection_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
    public function add_data($data)
    {
        $this->db->insert('founder-table',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    public function getdata()
    {
      $query = $this->db->get('founder-table');
      return $query->result_array();
    }

    public function editdata($id)
    {
      $this->db->where('founder-id', $id);
      $query = $this->db->get('founder-table');
      return $query->result_array();
    }

    public function update_data($data,$id)
    {
        $this->db->where('founder-id', $id);
        $this->db->update('founder-table',$data);
        $res=$this->db->affected_rows();
        return $res; 
    }

    public function deletedata($id)
    {
        $this->db->where('founder-id', $id);
        $this->db->delete('founder-table');
        $res=$this->db->affected_rows();
        return $res; 
    }


}
