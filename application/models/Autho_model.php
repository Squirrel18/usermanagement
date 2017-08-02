<?php
class Autho_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function login($user, $pass) {
        $query = $this->db->get_where('users', array('user' => $user, 'password' => $pass, 'state' => 1));
        return $query->row_array();
    }
}
?>