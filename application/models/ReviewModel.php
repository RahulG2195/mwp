<?php
if (! defined('BASEPATH')) {
    exit('No direct script access allowed');
}

class ReviewModel extends CI_Model
{
   // public $table='blog-category';
    public function __construct()
    {
        parent::__construct();
    }


    function InserData($data){
      $this->db->insert('review_table',$data);
      $id=$this->db->insert_id();
      return $id;
    }


    //Fetch review on vendor page
    

    public function getvendorreview($vendor_id)
    {
        $this->db->select('*');
        $this->db->from('review_table');
        $this->db->where('vendor_review_id', $vendor_id);
        $query = $this->db->get();
        if( $query->num_rows() > 0)
        {
            $row = $query->result_array();
            return $row;
        }
    }

    public function getrating($vendorid)
    {
        $query ='SELECT  COUNT(rating) as rating_num, FORMAT((SUM(rating) / COUNT(rating)),1) as average_rating FROM review_table WHERE vendor_review_id =' .$vendorid." ".'GROUP BY (vendor_review_id)';
        $result = $this->db->query($query); 
         //$result = $db->query($query); 
        if(  $result->num_rows() > 0)
        {
            $row =  $result->result_array();
            return $row;
        }
    }

    public function getreviewdata()
    {
        $this->db->select('*');
        $this->db->from('review_table');
        $query = $this->db->get();
        if( $query->num_rows() > 0)
        {
            $row = $query->result_array();
            return $row;
        }
    }
    
    function InserDataNotification($data){
      $this->db->insert('vendor_notification',$data);
      $id=$this->db->insert_id();
      return $id;
    }
    function InserDataNotificationAdmin($data){
      $this->db->insert('admin_notification',$data);
      $id=$this->db->insert_id();
      return $id;
    }


}
