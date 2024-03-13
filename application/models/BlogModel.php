<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class BlogModel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }

    public function GetList()
    {
        $query=$this->db->get("blog-table");
        $result=$query->result_array();
        return $result;
    }
   
    
    function InserData($data){
      $this->db->insert('blog-table',$data);
      $id=$this->db->insert_id();
      return $id;
    }


    public function edit_data($id)
    {
        $this->db->select('*');
        $this->db->where('blog-id',$id);
        $this->db->from('blog-table');
        $query=$this->db->get();
        $result=$query->result_array();
        return $result;
    }
    
    function UpdateData($data,$id)
    {
       $this->db->where('blog-id',$id);
       $this->db->update('blog-table',$data);
    }

    public function getblogcategory()
    {
        $query=$this->db->get("blog-category");
        $result=$query->result_array();
        return $result;
    }
    
    function DeleteData($id){
       $this->db->where('blog-id',$id);
       $this->db->delete('blog-table');
    }
    
    public function  getblogdata($start=0)
    {
        $this->db->select('*');
        $this->db->from('blog-table');
        $this->db->order_by('blog-id','DESC');
        $this->db->limit(12, $start);
        $query=$this->db->get();
        // echo $this->db->last_query();
        $result=$query->result_array();
        return $result;
    } 
    
      public function getblogcategoyname($catid)
    {
        $this->db->select('blog-category-name');
        $this->db->from('blog-category');
        $this->db->where('blog-category-id', $catid );
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
    }


    public function getblogdetail($blogurl)
    {
        $this->db->select('*');
        $this->db->from('blog-table');
        $this->db->where('blog-seo-url', $blogurl);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }
    }
    
    public function getblogcategoryid($catid)
    {
        $this->db->select('blog-category-id');
        $this->db->from('blog-category');
        $this->db->where('blog-category-url', $catid );
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }
    }


    public function getblogbycategory($id)
    {
        $this->db->select('*');
        $this->db->from('blog-table');
        $this->db->where('blog-cat-id', $id);
        $query = $this->db->get();
        if ( $query->num_rows() > 0 )
        {
            $row = $query->result_array();
            return $row;
        }
    }
    
}
