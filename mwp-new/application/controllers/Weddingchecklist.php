<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weddingchecklist extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->model('WeddingchecklistModel');
        
    }
    public function index()
    {        

        if(isset($this->session->userdata['logged_in']) || $this->session->userdata['logged_in'] = true)
          { 
            $id=$this->session->userdata['userid'];
            
            $data["checklistdata"]=$this->WeddingchecklistModel->getid($id);
                if($data["checklistdata"][0]["user_id"]==$id)
                {
                     $this->load->view('front/wedding-checklist',$data);
                }
                else{
                      $this->load->view('front/wedding-checklist');
                }

          } 
          else{
                $this->load->view('front/wedding-checklist');
          }
        
    }


    public function submitchecklist()
    {
       $data=$this->input->post();
       $id=$this->input->post("user_id");
       
       $getid=$this->WeddingchecklistModel->getid($id);
       //var_dump($getid);exit;
       
       if($getid[0]["user_id"]==$id && !empty($getid[0]["wedding_checklist_id"])) {
                 $result=$this->WeddingchecklistModel->UpdateData($data,$id);
                 //echo "Cheklist Updated";
       }

       else{
                $result=$this->WeddingchecklistModel->InserData($data);
                 if ($result){
        	       // echo "Cheklist Saved";
                 }
            }
        }


 }

?>