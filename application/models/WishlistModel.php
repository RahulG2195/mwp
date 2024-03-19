<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class WishlistModel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }
   
    
    public function insertwishlistdata($data)
    {
      $this->db->insert('wishlist-table',$data);
      $id=$this->db->insert_id();
      return $id;
    }

    public function getwishlistdata()
    {
        $query = $this->db->get('wishlist-table');
        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        } 
    }

    public function getwishlistvendordetail($id)
    {
        $this->db->select('*');
        $this->db->from('default_vendor_inp');
        $this->db->where('vendor_seo_url',$id);
        $query=$this->db->get();
        $result=$query->result_array();
        return $result;
    }

    public function getseourl($id)
    {
        $this->db->select('vendor_seo_url');
        $this->db->from('default_vendor_inp');
        $this->db->where('dv_id',$id);
        $query=$this->db->get();
        $result=$query->row_array();
        return $result;
    }

    
}
