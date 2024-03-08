<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Aboutsection_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
    public function add_data($data)
    {
        $this->db->insert('aboutsection-table',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    public function getdata()
    {
      $query = $this->db->get('aboutsection-table');
      return $query->result_array();
    }

    public function editdata($id)
    {
      $this->db->where('about-id', $id);
      $query = $this->db->get('aboutsection-table');
      return $query->result_array();
    }

    public function update_data($data,$id)
    {
        $this->db->where('about-id', $id);
        $this->db->update('aboutsection-table',$data);
        $res=$this->db->affected_rows();
        return $res; 
    }

    public function deletedata($id)
    {
        $this->db->where('about-id', $id);
        $this->db->delete('aboutsection-table');
        $res=$this->db->affected_rows();
        return $res; 
    }


}
