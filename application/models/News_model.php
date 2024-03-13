<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class News_model extends CI_Model

{

    function __construct()

    {

        parent::__construct();

    }

    public function add_data($data)

    {
        //  print_r($data);exit;
        $img_count = is_array($data['news_img']) ? count($data['news_img']) : 0;
        for ($i=0; $i < $img_count; $i++) { 
            $insert_data = [
                'news_img' => $data['news_img'][$i],
            ];
            $this->db->insert('news',$insert_data);
        }
        $insert_id = $this->db->insert_id();
        return  $insert_id;



    }



    public function getdata()

    {

      $query = $this->db->get('news');

      return $query->result_array();

    }



    public function editdata($id)

    {

      $this->db->where('new_id', $id);

      $query = $this->db->get('news');

      return $query->result_array();

    }



    public function update_data($data,$id)

    {
        $this->db->where('new_id', $id);
        $this->db->update('news',$data);
        $res=$this->db->affected_rows();
        // echo $this->db->last_query();
        return $res; 
    }



    public function deletedata($id)

    {

        $this->db->where('new_id', $id);

        $this->db->delete('news');

        $res=$this->db->affected_rows();

        return $res; 

    }

}

