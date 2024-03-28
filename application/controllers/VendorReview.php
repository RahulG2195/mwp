<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VendorReview extends CI_Controller {

	  public function __construct() {
        parent::__construct();
        $this->load->model('VendorQueryModel');
        $this->load->model('VendorModel');

        $this->load->model('ReviewModel');

        
    }
   
    public function vendorreviewsubmit()
    {
        // $item_id = $this->input->post('item_id');
        // $rating = $this->input->post('rating');
        

        $data=array("user_review_id"=>$this->input->post('userid'),
                    "vendor_review_id"=>$this->input->post('vendorid'),
                    "name"=>$this->input->post('username'),
                    "phone_no"=>$this->input->post('phoneno'),
                    "email_id"=>$this->input->post('email'),
                    "subject"=>$this->input->post('subject'),
                    "review_comment"=>$this->input->post('comment'),
                    "vendor-name"=>$this->input->post('vname'),
                    "rating"=>$this->input->post('rating'));
               
        $result=$this->ReviewModel->InserData( $data);
        
          //insert vendor notification
        $insert_data2 = array(
            'vendor_id' => $this->input->post("vendorid"),
            'notification_type' => '3',
            'custom_id' => $result,
            'is_new' => '1',
            'is_read' => '0',
            'created_date' => date('Y-m-d H:i:s', strtotime("+0 days"))
        );
        $this->ReviewModel->InserDataNotification($insert_data2);
        //insert admin notification
        $this->ReviewModel->InserDataNotificationAdmin($insert_data2);

        if(!empty( $result)){
            echo json_encode(array('success' => true, 'message'=>'Data inserted successfully.'));
        }
        else{
            echo json_encode(array('error' => true, 'message'=>'Data not inserted'));
        }
        
    }

    


    
}
