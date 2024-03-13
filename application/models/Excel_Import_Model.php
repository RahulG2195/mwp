<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Excel_Import_Model extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    // function verify_vendor_id($data) {
    //     $this->db->where('vendor_uid', $data);
    //     $this->db->from('default_vendor_inp');
    //     $result = $this->db->get();
    //     echo $this->db->last_query();
    //     return $result->num_rows();
    // }
    
}
