<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wishlist extends CI_Controller {

	  public function __construct() {
        parent::__construct();
        $this->load->model('WishlistModel');
        
    }
   

    public function submitwishlist()
    {

        $data = array(
                 "vendorseourl"=>$this->input->post("vendorseourl"),
                 "wishlistuser_id"=>$this->session->userdata('userid'),
                 );

        //var_dump($data);exit;
        
        $insert_id=$this->WishlistModel->insertwishlistdata($data);

        if ($insert_id) {
            header('Content-Type: application/json');
            echo json_encode(array('isSubmit' =>"true"));

        }
        else{
            header('Content-Type: application/json');
            echo json_encode(array('isSubmit' =>"flase"));
        }
        
    }

    public function addwishlist()
    {
        $id=$this->input->post("id");
        $seourl=$this->WishlistModel->getseourl($id);
        //var_dump($seourl["vendor_seo_url"]);
        $data = array(
            "vendorseourl"=>$seourl["vendor_seo_url"],
            "wishlistuser_id"=>$this->session->userdata('userid'),
            );
        //var_dump($data[]);
        $insert_id=$this->WishlistModel->insertwishlistdata($data);

        if ($insert_id) {
            header('Content-Type: application/json');
            echo json_encode(array('isSubmit' =>"true"));

        }
        else{
            header('Content-Type: application/json');
            echo json_encode(array('isSubmit' =>"false"));
        }
    }

}
