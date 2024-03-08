<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Designdecorleadmodel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }
   
    public function getdashboarduserdata()
    {
        $this->db->select("*");
        $this->db->from("design-decor-table");
        $this->db->join("design-decor-payment-table", "design-decor-table.design-decor-id=design-decor-payment-table.design_decor_user_id","left");
        $query = $this->db->get();
        //$this->db->get();
       // $query = $this->db->get();
        return $query->result_array();
    }

    public function getdetaildata($id)
    {
        $this->db->select("*");
        $this->db->from("design-decor-table");
        $this->db->join("design-decor-payment-table", "design-decor-table.design-decor-id=design-decor-payment-table.design_decor_user_id","left");
        $this->db->where("design-decor-id",$id);
        $query = $this->db->get();
        return $query->result_array();
    }
    
     public function getdesignuserplandata($id)
    {
        $this->db->select("*");
        $this->db->from("design-decor-table");
        $this->db->join("design-decor-payment-table", "design-decor-table.design-decor-id=design-decor-payment-table.design_decor_user_id","left");
        $this->db->where("user_id",$id);
        $query = $this->db->get();
        return $query->result_array();
    }

    
}
