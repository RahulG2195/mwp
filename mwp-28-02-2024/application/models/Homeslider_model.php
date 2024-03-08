<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Homeslider_model extends CI_Model
{
    function __construct()
    {
        // Call the Model constructor
        parent::__construct();

    }
   /* public function getpassword($username)
    {
      $this->db->where('username', $username);
      $query = $this->db->get('adminuser');
      return $query->result_array();
    }
    public function updatepassword($username,$password)
    {
       $this->db->where('username', $username);
       $this->db->update('adminuser', array('password' => $password));
       return true;
    }

    public function getlogindata($username,$password,$status)
    {
       $this->db->where('username', $username);
       $this->db->where('password', $password);
       $this->db->where('status',$status);
       $query = $this->db->get('adminuser');
       return $query->result_array();
    }

   public function GetUser($cond=array(),$table){
    	if(!empty($cond)){
        $this->db->where($cond);
      }
      $this->db->select('*');
      $this->db->from($table);
      $query=$this->db->get();
     
      $result=$query->result();
   
      if(!empty($result)){
        $result=$result[0];
        $cond=array();
        $cond['id']=$result->id;
        $this->UpdateUser($cond,$table);
      }
      return $result;

    }
    public  function UpdateUser($cond,$table){
      $data['logindate']=DATETIME;
      $this->db->where($cond);
      $this->db->update($table,$data);
      $res=$this->db->affected_rows();
      return $res;
    }
*/


    public function add_data($data)
    {
        $this->db->insert('slider-table',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;
    }

    public function getdata()
    {
      $query = $this->db->get('slider-table');
      return $query->result_array();
    }

    public function editdata($id)
    {
      $this->db->where('slider-id', $id);
      $query = $this->db->get('slider-table');
      return $query->result_array();
    }

    public function update_data($data,$id)
    {
        $this->db->where('slider-id', $id);
        $this->db->update('slider-table',$data);
        $res=$this->db->affected_rows();
        return $res; 
    }

    public function deletedata($id)
    {

        $this->db->where('slider-id', $id);
        $this->db->delete('slider-table');
        $res=$this->db->affected_rows();
        return $res; 
    }


}
