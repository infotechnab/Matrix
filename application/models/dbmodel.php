<?php

class Dbmodel extends CI_Model {

    public function __construct() {
        $this->load->database();
    }

    // This model is to user verified 
    function validate() {
        $this->db->where('login', $this->input->post('username'));
        $this->db->where('passwd', md5($this->input->post('password')));
        $query = $this->db->get('members');

        if ($query->num_rows == 1) {
            return true;
        } else {
            return FALSE;
        }
    }
    
    // this is another method to get user verified 
    function login($username, $password) {
        $this->db->select('member_id, login, passwd');
        $this->db->from('members');
        $this->db->where('login = ' . "'" . $username . "'");
        $this->db->where('passwd = ' . "'" . MD5($password) . "'");
        $this->db->limit(1);
        $query = $this->db->get();
        if ($query->num_rows() == 1) {
            return $query->result();
        } else {
            return false;
        }
    }
}
?>