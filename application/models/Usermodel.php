<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Usermodel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }
   
    public function getdashboarduserdata()
    {
      $query = $this->db->get('login-table');
      return $query->result_array();
    }
}
