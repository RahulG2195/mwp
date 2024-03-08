<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Basic_Info_model extends CI_Model

{

    function __construct()

    {
        parent::__construct();

    }

    public function add_data($data)

    {
        $this->db->insert('basic_info',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;

    }



    public function getdata()

    {

      $query = $this->db->get('basic_info');

      return $query->result_array();

    }



    public function editdata($id)

    {

      $this->db->where('bi_id', $id);

      $query = $this->db->get('basic_info');

      return $query->result_array();

    }



    public function update_data($data,$id)

    {
        $this->db->where('bi_id', $id);
        $this->db->update('basic_info',$data);
        $res=$this->db->affected_rows();
        // echo $this->db->last_query();
        return $res; 
    }



    public function deletedata($id)

    {

        $this->db->where('bi_id', $id);

        $this->db->delete('basic_info');

        $res=$this->db->affected_rows();

        return $res; 

    }





    





}

