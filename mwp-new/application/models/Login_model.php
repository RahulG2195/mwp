<?php
class Login_model extends CI_Model {

    public function get_user($username) {
        $this->db->where('user_name', $username);
        echo $this->db->last_query();
        $query = $this->db->get('admin');
        // echo $this->db->last_query();
        return $query->row();
    }
}
