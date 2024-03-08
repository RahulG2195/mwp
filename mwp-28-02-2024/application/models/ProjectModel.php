<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProjectModel extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    function Fetch_project() {
        $this->db->where('prj_status', 1);
        $query = $this->db->get('projects');
        return $query->result_array();
    }
    public function get_project()
    {
        $this->db->select('projects.*, prj_category.*');
        $this->db->from('projects');
        $this->db->join('prj_category', 'projects.categorys = prj_category.cat_id', 'left');
        $query = $this->db->get();

        return $query->result_array();
    }


    function Project_Insights() {
        $this->db->where('prj_status', 1);
        $this->db->limit('10');
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    // for the india map default popup 
    function All_Project() {
        $this->db->where('prj_status', 1);
        $this->db->limit('25');
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    // Maharashtra project 
    function Mah_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Maharashtra'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    // Gujarat project 
    function Guj_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Gujarat'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    // Uttar Pradesh project 
    function up_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Uttar Pradesh'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }


    // West Bangal project 
    function wb_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'West Bangal'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    // Odisha project 
    function odi_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Odisha'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    // Andra Pradesh project 
    function andra_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Andra Pradesh'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    // Tamil Nadu project 
    function tamil_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Tamil Nadu'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    // Kerala project 
    function Kerala_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Kerala'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    // Karnataka project 
    function Karnataka_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Karnataka'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    // Andaman and Nicobar Islands project 
    function Andaman_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Andaman and Nicobar Islands'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    function Himachal_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Himachal Pradesh'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    function Manipur_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Manipur'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }
    function Haryana_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Haryana'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }
    function Madhya_Pradesh_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Madhya Pradesh'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }
    function Delhi_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Delhi'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }
    function Telangana_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Telangana'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }
    function Goa_Project() {
        $this->db->where(array('prj_status'=> 1, 'state' => 'Goa'));
        $query = $this->db->get('projects');
        return $query->result_array();
    }

    public function edit_project($id)
    {
        $this->db->where(array('prj_id' => $id));
         return $this->db->get('projects')->row_object();
    }
    public function insert_project($data = array())
    {
        return  $this->db->insert('projects', $data);
    //    $this->db->last_query();
    }

    public function Update_project($data, $id)
    {
        $this->db->where('prj_id', $id);
        $this->db->update('projects',$data);
        $res=$this->db->affected_rows();
        return $res; 
    }

    public function Delete_project($id)
    {
        // echo $id;
        // exit;
        $this->db->where('prj_id', $id);
        $this->db->delete('projects');
        // echo $this->db->last_query();
        // exit;
    }
function Search_Project($data) {
    if(!empty($data)){
        $this->db->like('prj_name', $data);
        return $this->db->get('projects')->result_array();
    }
}

function Get_product($id){
    $this->db->select('*');
    $this->db->from('projects');
    $this->db->where('categorys', $id);
    return $this->db->get()->result_array();
}
}
