<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class RND_Model extends CI_Model

{

    function __construct()

    {

        parent::__construct();

    }

    public function add_data($data)

    {
        // echo "<pre>";
        //  print_r($data);exit;
        $this->db->insert('rnd',$data);
        $insert_id = $this->db->insert_id();
        return  $insert_id;



    }

    public function getdata()

    {

      $query = $this->db->get('rnd');

      return $query->result_array();

    }



    public function editdata($id)

    {

      $this->db->where('rnd_id', $id);

      $query = $this->db->get('rnd');

      return $query->result_array();

    }



    public function update_data($data,$id)
    {
        // print_r($data);exit;
        $this->db->where('rnd_id', $id);
        $this->db->update('rnd',$data);
        $res=$this->db->affected_rows();
        return $res; 
    }



    public function deletedata($id)

    {

        $this->db->where('rnd_id', $id);

        $this->db->delete('rnd');

        $res=$this->db->affected_rows();

        return $res; 

    }

}

