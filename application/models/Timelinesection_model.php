<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Timelinesection_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
    public function add_data($data)
    {
        $this->db->insert('timline-table',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    public function getdata()
    {
      $query = $this->db->get('timline-table');
      return $query->result_array();
    }

    public function editdata($id)
    {
      $this->db->where('timeline-id', $id);
      $query = $this->db->get('timline-table');
      return $query->result_array();
    }

    public function update_data($data,$id)
    {
        $this->db->where('timeline-id', $id);
        $this->db->update('timline-table',$data);
        $res=$this->db->affected_rows();
        return $res; 
    }

    public function deletedata($id)
    {
        $this->db->where('timeline-id', $id);
        $this->db->delete('timline-table');
        $res=$this->db->affected_rows();
        return $res; 
    }


}
