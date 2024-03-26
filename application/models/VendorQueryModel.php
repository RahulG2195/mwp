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
    
    function InserDataNotification($data){
      $this->db->insert('vendor_notification',$data);
      $id=$this->db->insert_id();
      return $id;
    }
    function InserDataNotificationAdmin($data){
      $this->db->insert('admin_notification',$data);
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
        $this->db->select('vendor-query-form-table-new.*,master_category.name as category_name,default_vendor_inp.vendor_name');
        $this->db->from('vendor-query-form-table-new');
        $this->db->join('master_category', 'vendor-query-form-table-new.cat_id = master_category.category_id', 'left');
        $this->db->join('default_vendor_inp', 'vendor-query-form-table-new.vendor_id = default_vendor_inp.dv_id', 'left');
        $this->db->where('query_id', $id);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row[0];
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
        $this->db->select('vendor-query-form-table-new.*,master_category.name as category_name,default_vendor_inp.vendor_name');
        $this->db->from('vendor-query-form-table-new');
        $this->db->join('master_category', 'vendor-query-form-table-new.cat_id = master_category.category_id', 'left');
        $this->db->join('default_vendor_inp', 'vendor-query-form-table-new.vendor_id = default_vendor_inp.dv_id', 'left');
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }   
    }

}
