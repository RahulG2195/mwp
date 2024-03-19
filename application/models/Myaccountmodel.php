<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Myaccountmodel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }
   
    
    public function updatepassword($data,$id)
    {
        $this->db->where('login_id', $id);
        $this->db->update('login-table',$data);
        $res=$this->db->affected_rows();
        return $res; 
    }

   
    

    

    
}
