<?php

defined('BASEPATH') or exit('No direct script access allowed');

class ProjectDetModel extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    // on front end 
    function Display_projects($seo) {
        $this->db->select('prj_detail.*, projects.prj_id, projects.prj_name, projects.pdf, projects.video, projects.descriptions, projects.sub_banner');
        $this->db->from('prj_detail');
        $this->db->join('projects', 'prj_detail.prj_id = projects.prj_id', 'left');
        $this->db->where('projects.seo_url', $seo);
        $this->db->order_by('prj_detail.dimension', 'asc');
        $query = $this->db->get();
        return $query->result_array();
    }

    // on admin 
    public function get_detail_project()
    {
        $this->db->select('prj_detail.*, projects.*');
        $this->db->from('prj_detail');
        $this->db->join('projects', 'prj_detail.prj_id = projects.prj_id', 'left');
        $query = $this->db->get();

        return $query->result_array();
    }

    public function Edit_detail($id)
    {
        $this->db->where('pd_id', $id);
        $query = $this->db->get('prj_detail');
        return $query->row_object();
        }
    public function insert_Dproject($data = array())
    {
       $this->db->insert('prj_detail', $data);
       return  $this->db->last_query();
    }

    public function Update_Dproject($data, $id)
    {
        $this->db->where('pd_id', $id);
        $this->db->update('prj_detail',$data);
        $res=$this->db->affected_rows();
        return $res; 
    }

    public function Delete_Dproject($id)
    {
        // echo $id;
        // exit;
        $this->db->where('pd_id', $id);
        $this->db->delete('prj_detail');
        // echo $this->db->last_query();
        // exit;
    }

}
