<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class VendorserviceformModel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }
     
   /* public function addvendor_deatail($data)
    {
       $this->db->insert('vendor-recommendation-table', $data);
       $id=$this->db->insert_id();
       return $id;
    }

    public function getvendor_deatail($id)
    {
        $this->db->select('*');
        $this->db->where('vendor_recommend_id',$id);
        $this->db->from('vendor-recommendation-table');
        $query=$this->db->get();
        $result=$query->result_array();
        return $result;
    }


    public function addvendor_payment_deatail($vendorData)
    {
       $this->db->insert('vendor-recommendation-payment-table', $vendorData);
       $id=$this->db->insert_id();
       return $id;
    }*/


    /*Email fetch email form */
    
  /*  public function getuserdata($id)
    {
        $this->db->select('*');
        $this->db->where('vendor_recommend_id',$id);
        $this->db->from('vendor-recommendation-table');
        $query=$this->db->get();
        $result=$query->result_array();
        return $result;
    }*/


    public function insertbridaldata($data){
       $this->db->insert('recommend-bridal-wear-table', $data);
       $id=$this->db->insert_id();
       return $id;
    }

    public function insertphotographysata($data)
    {
       $this->db->insert('recommend_photography_table', $data);
       $id=$this->db->insert_id();
       return $id;
    }

    public function insertgroomdata($data)
    {
       $this->db->insert('recommend-groom-wear-table', $data);
       $id=$this->db->insert_id();
       return $id;
    }


    public function insertdecordata($data)
    {
       $this->db->insert('recommend-decor-table', $data);
       $id=$this->db->insert_id();
       return $id;
    }


    public function insertgiftdata($data)
    {
       $this->db->insert('recommend-vendor-gift', $data);
       $id=$this->db->insert_id();
       return $id;
    }

    public function insertmehendidata($data)
    {
       $this->db->insert('recommend-mehendi-table', $data);
       $id=$this->db->insert_id();
       return $id;

    }

    public function insertmakeupdata($data)
    {
       $this->db->insert('recommend-makeup-table', $data);
       $id=$this->db->insert_id();
       return $id;

    }


    public function insertvenueupdata($data)
    {
       $this->db->insert('recommend-vendor-table', $data);
       $id=$this->db->insert_id();
       return $id;

    } 
}
