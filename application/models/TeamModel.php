<?php

defined('BASEPATH') or exit('No direct script access allowed');

class TeamModel extends CI_Model {

    public function __construct() {
        parent::__construct();

        $this->load->database();
    }

    public function get_team()
    {
        return $this->db->get('our_team')->result_array();
    }

    public function edit_team($id)
    {   $this->db->where('team_id', $id);
         $query = $this->db->get('our_team');
         return $query->row_object();
    }
    public function insert_team($data = array())
    {
        return $this->db->insert('our_team', $data);
    }

    public function Update_team($data, $id)
    {
        $this->db->where('team_id', $id);
        $this->db->update('our_team',$data);
        $res=$this->db->affected_rows();
        return $res; 
    }

    public function Delete_team($id)
    {
        // echo $id;
        // exit;
        $this->db->where('team_id', $id);
        $this->db->delete('our_team');
        // echo $this->db->last_query();
        // exit;
    }

}
