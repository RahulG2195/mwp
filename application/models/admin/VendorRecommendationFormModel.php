<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class VendorRecommendationFormModel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }
   
    public function fetchviralvenuedata()
    {
      $query = $this->db->get('recommend-vendor-table');
      return $query->result_array();

    }

    public function fetchbridaldata()
    {
        $query = $this->db->get('recommend-bridal-wear-table');
        return $query->result_array();
    }

    public function fetchgroomdata()
    {
        $query = $this->db->get('recommend-groom-wear-table');
        return $query->result_array();
    }

    public function fetchphotographydata()
    {
        $query = $this->db->get('recommend_photography_table');
        return $query->result_array();
    }

    public function fetchmuadata()
    {
        $query = $this->db->get('recommend-makeup-table');
        return $query->result_array();
    }

    public function fetchmehendimagicdata()
    {
        $query = $this->db->get('recommend-mehendi-table');
        return $query->result_array();
    }
    
    public function fetchdecordata()
    {
        $query = $this->db->get('recommend-decor-table');
        return $query->result_array();
    }

    public function fetchgiftdata()
    {
        $query = $this->db->get('recommend-vendor-gift');
        return $query->result_array();
    }
    



}
