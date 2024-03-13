<?php

if ( ! defined('BASEPATH')) exit('No direct script access allowed');



class Blog_model extends CI_Model

{

    function __construct()

    {

        // Call the Model constructor

        parent::__construct();



    }

    function Fetch_blog($id){
        if(!empty($id)){
            $this->db->where('blog_id', $id);
            return $this->db->get('blog')->row_object();
        }
    }

    function Fetch_related_blog(int $id) {
        if(!empty($id)){
            $this->db->where('blog_id !=', $id);
            $this->db->limit(12);
            return $this->db->get('blog')->result_array();
        }
    }

    public function add_data($data)

    {

        $this->db->insert('blog',$data);

        $insert_id = $this->db->insert_id();

        return  $insert_id;

    }



    public function getdata()

    {

      $query = $this->db->get('blog');

      return $query->result_array();

    }



    public function editdata($id)

    {

      $this->db->where('blog_id', $id);

      $query = $this->db->get('blog');

      return $query->result_array();

    }



    public function update_data($data,$id)

    {

        $this->db->where('blog-id', $id);

        $this->db->update('blog',$data);

        $res=$this->db->affected_rows();

        return $res; 

    }



    public function deletedata($id)

    {

        $this->db->where('blog-id', $id);

        $this->db->delete('blog');

        $res=$this->db->affected_rows();

        return $res; 

    }





    





}

