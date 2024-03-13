<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class BlogCategoryModel extends CI_Model
{
    public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }

    public function GetList()
    {
        $query=$this->db->get("blog-category");
        $result=$query->result_array();
        return $result;
    }
   
    function GetData($cond=array()){
      if(!empty($cond)){
        $this->db->where($cond);
        $this->db->select('*');
        $this->db->from($this->table);
        $query=$this->db->get();
        $result=$query->result_array();
        if(!empty($result)){
          $result=$result[0];
        }
        return $result;
      }
    }
    
    function InserData($data){
      $this->db->insert('blog-category',$data);
      $id=$this->db->insert_id();
      return $id;
    }


    public function edit_data($id)
    {
        $this->db->select('*');
        $this->db->where('blog-category-id',$id);
        $this->db->from('blog-category');
        $query=$this->db->get();
        $result=$query->result_array();
        return $result;
    }
    
    function UpdateData($id,$data)
    {
       $this->db->where('blog-category-id',$id);
       $this->db->update('blog-category',$data);
    }
    
    function DeleteData($id){
       $this->db->where('blog-category-id',$id);
       $this->db->delete('blog-category');
     }
}
