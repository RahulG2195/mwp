<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class VendorRecommendationModel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }

   
    
  

   /* public function getdata($id)
    {
        $this->db->select('*');
        $this->db->where('blog-id',$id);
        $this->db->from('blog-table');
        $query=$this->db->get();
        $result=$query->result_array();
        return $result;
    }
    */
     
    public function addvendor_deatail($data)
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
    }
    
     public function getuserdata($id)
    {
        $this->db->select('*');
        $this->db->where('vendor_recommend_id',$id);
        $this->db->from('vendor-recommendation-table');
        $query=$this->db->get();
        // echo $this->db->last_query();
        $result=$query->result_array();
        return $result;
    }
    
    public function getvendorpaymentdata($transactionid)
    {
        $this->db->select('*');
        $this->db->where('merchant_transaction_id',$transactionid);
        $this->db->from('vendor-recommendation-payment-table');
        $query=$this->db->get();
        
         if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
        // echo $this->db->last_query();
        /*$result=$query->result_array();
        return $result;*/
    }
    
    public function getuserinfo($userid)
    {
        $this->db->select('*');
        $this->db->where('vendor_recommend_id',$userid);
        $this->db->from('vendor-recommendation-table');
        $query=$this->db->get();
         if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
       /* $result=$query->result_array();
        return $result;*/
    }
    
    public function updatepaymentstatus($transactionid,$status)
    {
        $this->db->where('merchant_transaction_id', $transactionid);
        $this->db->update('vendor-recommendation-payment-table', $status);
    }
    
    public function getpaymentdata()
    {
        // $this->db->order_by("vendor_reccomend_payment_id", "desc");
        // $query=$this->db->get('vendor-recommendation-payment-table');
        // $result=$query->result_array();
        // return $result;



        $this->db->select("*");
        $this->db->from("vendor-recommendation-payment-table");
        $this->db->join("vendor-recommendation-table", "vendor-recommendation-payment-table.vendorid=vendor-recommendation-table.vendor_recommend_id","left");
        //$this->db->where("design-decor-id",$id);
        $this->db->order_by("vendor-recommendation-payment-table.vendorid", "DESC");
        $query = $this->db->get();
        return $query->result_array();
    }


}
