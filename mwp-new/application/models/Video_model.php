<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Video_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
    public function add_data($data)
    {
        $this->db->insert('video-table',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    public function getdata()
    {
      $query = $this->db->get('video-table');
      return $query->result_array();
    }

    public function editdata($id)
    {
      $this->db->where('video-id', $id);
      $query = $this->db->get('video-table');
      return $query->result_array();
    }

    public function update_data($data,$id)
    {
        $this->db->where('video-id', $id);
        $this->db->update('video-table',$data);
        $res=$this->db->affected_rows();
        return $res; 
    }

    public function deletedata($id)
    {
        $this->db->where('video-id', $id);
        $this->db->delete('video-table');
        $res=$this->db->affected_rows();
        return $res; 
    }


    


}
