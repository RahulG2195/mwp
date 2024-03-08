<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class User extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->model('LoginModel');
    }
   
    public function profile()
    {
        $id=$this->session->userdata('userid');
        $data["result"]=$this->LoginModel->getuserdata($id);
        $this->load->view('front/user-profile',$data);
    }


    public function updateprofile()
    {
        $weddingtheme=implode(",",$this->input->post("weddinng_theme"));
        $top_priority=implode(",",$this->input->post("top_three_priorities"));

        $data= array('first_name'=>$this->input->post("first_name"),
                     'last_name'=>$this->input->post("last_name"),
                     'phone_number'=>$this->input->post("phone_no"),
                     'email_id'=>$this->input->post("email_id"),
                     'user_role'=>$this->input->post("user_role"),
                     'wedding_budget'=>$this->input->post("wedding_budget"),
                     'wedding_start_date'=>$this->input->post("wedding_start_date"),
                     'wedding_end_date'=>$this->input->post("wedding_end_date"),
                     'wedding_style'=>$this->input->post("wedding_style"),
                     'same_city'=>$this->input->post("same_city"),
                     'bride_city'=>$this->input->post("bride_city"),
                     'groom_city'=>$this->input->post("groom_city"),
                     'pre_wedding_guest'=>$this->input->post("pre_wedding_guest"),
                     'wedding_guest'=>$this->input->post("wedding_guest"),
                     'post_wedding_guest'=>$this->input->post("post_wedding_guest"),
                     'samewedding_location'=>$this->input->post("samewedding_location"),
                     'weddinng_theme'=>$weddingtheme,
                     'top_three_priorities'=>$top_priority,
                     'destination_wedding'=>$this->input->post("destination_wedding"),
                    );
        
        $id=$this->input->post("login_id");
        $this->LoginModel->updateuserdata($id,$data);
        $this->session->set_flashdata('profileupdatesucess', 'Changes saved');
        redirect('user/profile');
    }







 }

?>