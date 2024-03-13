<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Achievements_model extends CI_Model

{
    function __construct()

    {
    // Call the Model constructor
        parent::__construct();

    }

    public function add_data($data)

    {
        $img_count = is_array($data['achievement-image']) ? count($data['achievement-image']) : 0;
        // echo "<pre>";
        for ($i=0; $i < $img_count; $i++) { 
            $insert_data = [
                'category' => $data['category'],
                'achievement-image' => $data['achievement-image'][$i],
            ];
            // print_r($insert_data);
            $this->db->insert('achievements-table',$insert_data);
        }
        // exit;
        $insert_id = $this->db->insert_id();
        return  $insert_id;



    }



    public function getdata()

    {

      $query = $this->db->get('achievements-table');

      return $query->result_array();

    }



    public function editdata($id)

    {

      $this->db->where('achievement-id', $id);

      $query = $this->db->get('achievements-table');

      return $query->result_array();

    }



    public function update_data($data,$id)

    {
        $this->db->where('achievement-id', $id);
        $this->db->update('achievements-table',$data);
        $res=$this->db->affected_rows();
        // echo $this->db->last_query();
        return $res; 
    }



    public function deletedata($id)

    {

        $this->db->where('achievement-id', $id);

        $this->db->delete('achievements-table');

        $res=$this->db->affected_rows();

        return $res; 

    }

    function Get_Certificates($cat) {
        $this->db->where('category', $cat);
        $this->db->select('*');
        $this->db->from('achievements-table');
        return $this->db->get()->result_array();
    }



    





}

