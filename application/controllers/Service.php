<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Service extends CI_Controller {

	 public function __construct() {
        parent::__construct();

        $this->load->model('VendorRecommendationModel');
        $this->load->model('VendorModel');
        
    }
    public function weddingplanning()
    {
        $this->load->view('front/pages/service4');
    }

    public function customized_wedding_add_ons()
    {
    	$this->load->view('front/service-2');
    }

    public function vendorrecommendation(){
         $this->load->view('front/service-3');
    }

    function Destination_Wedding() {
        $this->load->view('front/pages/service2');
    }
    function Wedding_Planning_Tool() {
        $data['trusted_vendor'] = $this->VendorModel->Trusted_Vendor();
        $this->load->view('front/service-1', $data);
    }
    function Design_and_Decor() {
        $this->load->view('front/pages/service6');
    }

    public function wedding_planning_service_plan()
    {
        $this->load->view('front/pages/wedding-planning-price-plan');
    }
    
    public function design_decor_service_plan()
    {
         $this->load->view('front/pages/design-decor-pricing-plan');
    } 
    
    
    public function vendor_recommendation_venue()
    {
       $id=$this->uri->segment(3);
       $data["userdata"]=$this->VendorRecommendationModel->getuserdata($id);
       //var_dump($data);exit(); 
       $this->load->view('front/pages/vendor-recommendation-venue-form',$data);
    }


    public function vendor_recommendation_bridal_wear()
    {

       $id=$this->uri->segment(3); 
       $data["userdata"]=$this->VendorRecommendationModel->getuserdata($id);
       $this->load->view('front/pages/vendor-bridal-wear',$data);
    }

    public function vendor_recommendation_groom_wear()
    {
       $id=$this->uri->segment(3); 
       $data["userdata"]=$this->VendorRecommendationModel->getuserdata($id);
       $this->load->view('front/pages/vendor-groom-wear',$data);
    }
  
    public function vendor_recommendation_photography()
    {
        $id=$this->uri->segment(3); 
        $data["userdata"]=$this->VendorRecommendationModel->getuserdata($id);
        $this->load->view('front/pages/vendor-photography',$data);
    }

    public function vendor_recommendation_decor()
    {
        $id=$this->uri->segment(3); 
        $data["userdata"]=$this->VendorRecommendationModel->getuserdata($id);
        $this->load->view('front/pages/vendor-decor',$data);
    }

    public function vendor_recommendation_gifts()
    {
         $id=$this->uri->segment(3); 
         $data["userdata"]=$this->VendorRecommendationModel->getuserdata($id);
         $this->load->view('front/pages/vendor-gifts',$data);
    }

    public function vendor_recommendation_mehendi()
    {
         $id=$this->uri->segment(3); 
         $data["userdata"]=$this->VendorRecommendationModel->getuserdata($id);
         $this->load->view('front/pages/vendor-mehendi',$data);
    }

    public function vendor_makeup_artist()
    {
         $id=$this->uri->segment(3); 
         $data["userdata"]=$this->VendorRecommendationModel->getuserdata($id);
         $this->load->view('front/pages/vendor-makeup-artist',$data);
    }
    

    public function wedding_planning_thankyou(){
        $this->load->view('front/thank-you');
    }

    

 }

?>