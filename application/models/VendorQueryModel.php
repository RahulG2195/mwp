<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class VendorQueryModel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }

   
   
    
    function InserData($data){
      $this->db->insert('vendor-query-form-table',$data);
      $id=$this->db->insert_id();
      return $id;
    }

    function InserDataNew($data){
      $this->db->insert('vendor-query-form-table-new',$data);
      $id=$this->db->insert_id();
      return $id;
    }

   
    public function getvendorquerydata($id)
    {
        $this->db->select('*');
        $this->db->from('vendor-query-form-table');
        $this->db->where('vendor-query-form-id', $id);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }
    }

    public function getvendorquerydatanew($id)
    {
        $this->db->select('*');
        $this->db->from('vendor-query-form-table-new');
        $this->db->where('query_id', $id);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }
    }
    
    public function getvendorqueryalldata()
    {
        $query = $this->db->get('vendor-query-form-table');
        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }   
    }

    public function getvendorqueryalldatanew()
    {
        $query = $this->db->get('vendor-query-form-table-new');
        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }   
    }

}
