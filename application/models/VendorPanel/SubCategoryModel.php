<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class SubCategoryModel extends CI_Model
{
    public $table='master_sub_category';
    public function __construct()
    {
        parent::__construct();
    }

    public function GetList($cond=array(), $select="")
    {
        if (empty($select)) {
            $select="master_sub_category.*,master_category.name as category_name";
        }
        if (!empty($cond)) {
            $this->db->where($cond);
        }
        $this->db->select($select);
        $this->db->from($this->table);
        $this->db->join('master_category', 'master_sub_category.category_id = master_category.category_id');
        $query=$this->db->get();
        //print_r($query);
        $result=$query->result_array();
        return $result;
        //print_r($result);exit();
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
      $this->db->insert($this->table,$data);
      $id=$this->db->insert_id();
      return $id;
    }
    
    function UpdateData($cond=array(),$data){
      $this->db->where($cond);
      $this->db->update($this->table,$data);
      $id=$this->db->affected_rows();
      return $id;
    }
    
    function DeleteData($cond=array(),$data){
       if(!empty($cond)){
         $this->db->where($cond);
       }
       $this->db->update($this->table,$data);
       $affected=$this->db->affected_rows();
       return $affected;
    }
}
