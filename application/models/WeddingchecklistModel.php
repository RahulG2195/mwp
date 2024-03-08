<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class WeddingchecklistModel extends CI_Model
{
   
    public function __construct()
    {
        parent::__construct();
    }

  
    function InserData($data){
      $this->db->insert('wedding-checklist-table',$data);
      $id=$this->db->insert_id();
      return $id;
    }

    public function getid($id)
    {
        $this->db->select('*');
        $this->db->from('wedding-checklist-table');
        $this->db->where('user_id',$id);
        $query=$this->db->get();
        $result=$query->result_array();
        return $result;
    }
    
    function UpdateData($data,$id)
    {
       $this->db->where('user_id',$id);
       $this->db->update('wedding-checklist-table',$data);
       return true;
    }

   
    
}
