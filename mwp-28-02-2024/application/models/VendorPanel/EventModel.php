<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class EventModel extends CI_Model
{
  public $table='event';
    function __construct()
    {
        parent::__construct();
    }

    function GetList($cond=array()){

      if(!empty($cond)){
        $this->db->where($cond);
      }

      $this->db->select('*');
      $this->db->from($this->table);
      $query=$this->db->get();
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
