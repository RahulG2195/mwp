<?php

defined('BASEPATH') or exit('No direct script access allowed');

class CategoryModel extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    // display category on home page
    function Home_Category() {
        $this->db->where('cat_fliter', 1);
        $query = $this->db->get('prj_category');
        return $query->result_array();
    }

    public function get_category()
    {
        return $this->db->get('prj_category')->result_array();
    }

    public function insert_category($data = array())
    {
        return $this->db->insert('prj_category', $data);
    }
    public function edit_category($id)
    {
        $this->db->where('cat_id', $id);
         return $this->db->get('prj_category')->row_object();
    }

    public function Update_category($data, $id)
    {
        $this->db->where('cat_id', $id);
        $this->db->update('prj_category',$data);
        $res=$this->db->affected_rows();
        return $res; 
    }

    public function Delete_category($id)
    {
        // echo $id;
        // exit;
        $this->db->where('cat_id', $id);
        $this->db->delete('prj_category');
        // echo $this->db->last_query();
        // exit;
    }

}
