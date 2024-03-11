<?php
if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class LoginModel extends CI_Model
{
    
    function __construct()
    {
        parent::__construct();
        $this->load->database();
    }

    public function getlogindata($username, $password)
    {
        $this->db->select('dv_id, vendor_uid, password, user_name, comp_logo');
        $this->db->from('default_vendor_inp');
        $this->db->where(array('user_name' => $username, 'password' => $password));

        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }else{
            return false;
        }

    }
    
    public function getforgotdata($email)
    {
        $this->db->select('dv_id, vendor_uid, user_name, vendor_email');
        $this->db->from('default_vendor_inp');
        $this->db->where(array('vendor_email' => $email));

        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }else{
            return false;
        }
    }
    
    public function getforgotdvid($vendor_uid)
    {
        $this->db->select('dv_id');
        $this->db->from('default_vendor_inp');
        $this->db->where(array('dv_id' => $vendor_uid));

        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }else{
            return false;
        }
    }
    
    public function validateforgotlink($forgot_source)
    {
        $this->db->select('vendor_id, otp');
        $this->db->from('vendor-forgot-password');
        $this->db->where(array('page_url' => $forgot_source,'is_active' => 1));
        $this->db->order_by('vendor_forgot_id','DESC');

        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }else{
            return false;
        }
    }
    
    public function addforgotdata($data)
    {
         $this->db->insert('vendor-forgot-password', $data);
        $id = $this->db->insert_id();
        return $id;
    }
    
      function updateforgotstatus($cond = array(), $data)
  {
    $this->db->where($cond);
    $this->db->update('vendor-forgot-password', $data);
    $id = $this->db->affected_rows();
    return $id;
  }

    public function ResetPassword($id, $data){
        // echo $id;exit;
        // pr($data, '');exit;
        $this->db->where('dv_id', $id);
        $this->db->update('default_vendor_inp',$data);
        $ids = $this->db->affected_rows();
        // if($this->db->error()){
        //     return $this->db->error();
        // }
        // echo $this->db->last_query();exit;
        return $ids;
    }

    public function getpassword($username)
    {
      $this->db->where('user_name', $username);
      $this->db->from('default_vendor_inp');
      $query = $this->db->get();
    //   echo 1;
    //   echo $this->db->last_query();
      return $query->result_array();
    }

}
