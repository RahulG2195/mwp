<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class DashboardModel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }
   
    public function getdashboarduserdata()
    {
      $query = $this->db->get('login-table');
      return $query->result_array();

    }

    public function getpaidvendordata()
    {
        $query = $this->db->get('vendor-payment-table');
        return $query->result_array();
    }
    
    public function gettotalvendordata()
    {
        $query = $this->db->get('default_vendor_inp');
        return $query->result_array();
    }
    
    public function getvendorrecommenddata()
    {
        $query = $this->db->get('vendor-recommendation-payment-table');
        return $query->result_array();   
    }

    public function getdecorddata()
    {
        $query = $this->db->get('design-decor-payment-table');
        return $query->result_array();   
    }
    
    
    public function getactivevendors()
    {
        $this->db->where('vendor_status', "1");
        $query = $this->db->get('default_vendor_inp');
        return $query->result_array();   
    }
    
    
     public function designdecordata()
    {
        //$this->db->where('vendor_status', "1");
        $query = $this->db->get('design-decor-payment-table');
        return $query->result_array();   
    }

    public function vendorrecommendata()
    {
        //$this->db->where('vendor_status', "1");
        $query = $this->db->get('vendor-recommendation-payment-table');
        return $query->result_array();   
    }
    

    // Vendor data

    public function getvenuedata()
    {
        $query = $this->db->get('venue');
        return $query->result_array();   
    }

    public function getbridaldata()
    {
        $query = $this->db->get('bridal_wear');
        return $query->result_array();   
    }

    public function getgroomdata()
    {
        $query = $this->db->get('groom_wear');
        return $query->result_array();   
    }

    public function photographydata()
    {
        $query = $this->db->get('photography');
        return $query->result_array();   
    }

    public function makeupdata()
    {
        $query = $this->db->get('make_up');
        return $query->result_array();   
    }

    public function mehandidata()
    {
        $query = $this->db->get('mehendi');
        return $query->result_array();   
    }

    public function bridaljwellerydata()
    {
        $query = $this->db->get('bridal_jewellery');
        return $query->result_array();   
    }


    public function decorationdata()
    {
        $query = $this->db->get('decorator');
        return $query->result_array();   
    }
 
    public function giftdata()
    {
        $query = $this->db->get('gift');
        return $query->result_array();   
    }

    public function cateringdata()
    {
        $query = $this->db->get('catering');
        return $query->result_array();   
    }

    public function invitationdata()
    {
        $query = $this->db->get('inivitations');
        return $query->result_array();   
    }
    
    public function weddingleaddata()
    {
        $query = $this->db->get('wedding-plannig-lead-table');
        return $query->result_array();   
    }


    
}
