<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Weddingplanningleadmodel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }
   
    public function getdashboarduserdata()
    {
      $query = $this->db->get('wedding-plannig-lead-table');
      return $query->result_array();
    }
    
    public function deletedata($id)
    {
        $this->db->where('wedding-planning-id',$id);
        $this->db->delete('wedding-plannig-lead-table');
    }
    
    
}
