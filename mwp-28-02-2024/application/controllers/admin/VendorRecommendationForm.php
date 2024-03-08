<?php
defined('BASEPATH') or exit('No direct script access allowed');
class VendorRecommendationForm extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // $this->load->model('LoginModel');
        $this->load->model('admin/VendorRecommendationFormModel');
        
    }
    
     public function viralvenue()
     {
        $data["result"]=$this->VendorRecommendationFormModel->fetchviralvenuedata();
        $this->load->view('admin/vendor-recommend/venue-list',$data);
     }

     public function bridalboutique()
     {
        $data["result"]=$this->VendorRecommendationFormModel->fetchbridaldata();
        $this->load->view('admin/vendor-recommend/bridal-list',$data);
     }

     public function groomgear()
     {
        $data["result"]=$this->VendorRecommendationFormModel->fetchgroomdata();
        $this->load->view('admin/vendor-recommend/groom-list',$data);
     }
     
     public function perfectphotograph()
     {
         $data["result"]=$this->VendorRecommendationFormModel->fetchphotographydata();
         $this->load->view('admin/vendor-recommend/photography-list',$data);
     }

     public function mua()
     {
         $data["result"]=$this->VendorRecommendationFormModel->fetchmuadata();
         $this->load->view('admin/vendor-recommend/mua-list',$data);
     }

     public function mehendimagic()
     {
         $data["result"]=$this->VendorRecommendationFormModel->fetchmehendimagicdata();
         $this->load->view('admin/vendor-recommend/mehendi-list',$data);
     }

     public function decordelight()
     {
         $data["result"]=$this->VendorRecommendationFormModel->fetchdecordata();
         $this->load->view('admin/vendor-recommend/decor-list',$data);
     }

     public function giftgalore()
     {
         $data["result"]=$this->VendorRecommendationFormModel->fetchgiftdata();
         $this->load->view('admin/vendor-recommend/gift-list',$data);
     }
     
     


}