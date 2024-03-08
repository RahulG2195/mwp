<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class Designdecor_Model extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }
   
    
    function InserData($data){
      $this->db->insert('design-decor-table',$data);
      $id=$this->db->insert_id();
      return $id;
    }



     function insert_decorpayment($decorpaymentdata) {
       $this->db->insert('design-decor-payment-table', $decorpaymentdata);

       $id=$this->db->insert_id();
       return $id;

      /*$this->db->where('dv_id', $id);
      $this->db->update('default_vendor_inp', array('trusted_vendor' => 1));
      return $this->db->affected_rows();*/
    }
   
    
   


   public function getdesignpaymentdata($tarnsactionID)
    {
        $this->db->select('*');
        $this->db->from('design-decor-payment-table');
        $this->db->where('merchant_transaction_id', $tarnsactionID);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
    }
    
    
    public function getuserinfo($userid){
        $this->db->select('*');
        $this->db->from('design-decor-table');
        $this->db->where('design-decor-id', $userid);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        } 
    }
    
    public function userthankyouinfo($userid){
        $this->db->select('*');
        $this->db->from('design-decor-table');
        $this->db->where('design-decor-id', $userid);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        } 
    }
    
    public function updatepaymentstatus($transactionid,$status)
    {
        $this->db->where('merchant_transaction_id', $transactionid);
        $this->db->update('design-decor-payment-table', $status);
    }
 
}
