<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class LoginModel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }
   

    public function InserData($insertdata){
      $this->db->insert('login-table',$insertdata);
      $id=$this->db->insert_id();
      return $id;
    }



   /* public function UpdateData($data,$id)
    {
       $this->db->where('login-table',$id);
       $this->db->update('login_id',$data);
    }*/

    public function getlogindata($result)
    {
        $this->db->select('*');
        $this->db->from('login-table');
        $this->db->where('login_id', $result );

        $query = $this->db->get();

        if ( $query->num_rows() > 0 )
        {
            $row = $query->row_array();
            return $row;
        }

    }

    public function UpdateData($insertdata2,$result)
    {
       $this->db->set('wedding_budget', false);
       $this->db->where('login_id', $result);
       $this->db->update('login-table',$insertdata2);
    }
     
     
    public function getpassword($username)
    {
      $this->db->where('email_id', $username);
      $query = $this->db->get('login-table');
      // echo $this->db->last_query();exit;
      return $query->result_array();
    }
   

    public function updatepassword($username,$pass)
    {
       $this->db->where('email_id', $username);
       $this->db->update('login-table', array('user_password' => $pass));
       return true;
    }
   

    public function getuserlogindata($username)
    {
       $this->db->where('email_id', $username);
       //$this->db->where('user_password', $password);
       $query = $this->db->get('login-table');
       return $query->result_array();
    }

    public function ValidateUserName($uusername){
      $this->db->select('email_id');
      $this->db->from('login-table');
      $this->db->where('username', $uusername);
      return $this->db->get()->row_object();
    }

    public function check_user_name($user_name)
    {
        $this->db->select('email_id'); 
        $this->db->from('login-table');
        $this->db->where('email_id', $user_name);
        $this->db->Limit(1);
        $this->db->order_by('login_id', 'desc');
        return $this->db->get()->num_rows();
        
    }   
   
   public function getregisteruserdata($result){

       $this->db->where('login_id', $result);
       //$this->db->where('user_password', $password);
       $query = $this->db->get('login-table');
       return $query->result_array();

  }
   

 /*  public function UserValidation($uname,$pwd){
    $this->db->select('email_id, user_password'); 
    $this->db->from('login-table');
    $this->db->where('email_id', $uname);
    $this->db->where('user_password', $pwd);
    $this->db->Limit(1);
    $this->db->order_by('login_id', 'desc');
    return $this->db->get()->num_rows();
  } */
   public function UserEmailValid($uname){
        $this->db->select('email_id'); 
        $this->db->from('login-table');
        $this->db->where('email_id', $uname);
        $this->db->Limit(1);
        $this->db->order_by('login_id', 'desc');
        return $this->db->get()->num_rows();
   }

   public function pwdEmailValid($pwd){
    $this->db->select('user_password'); 
    $this->db->from('login-table');
    $this->db->where('user_password', $pwd);
    $this->db->Limit(1);
    $this->db->order_by('login_id', 'desc');
    return $this->db->get()->num_rows();
  }
   public function getdashboarduserdata()
    {
      $query = $this->db->get('login-table');
      return $query->result_array();

    }
    
    public  function updateuserdata($id,$data)
    {
      $this->db->where('login_id', $id);
      $this->db->update('login-table',$data);
      return true;
    }


    public function getuserdata($id)
    {
      $this->db->where('login_id', $id);
      $query = $this->db->get('login-table');
      return $query->result_array();

    }



}
