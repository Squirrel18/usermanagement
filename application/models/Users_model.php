<?php
class Users_model extends CI_Model {
    public function __construct() {
        $this->load->database();
    }
    
    public function Users() {
        $query = $this->db->query("SELECT * FROM users");
        return $query->result_array();
    }

    public function Get_User($data) {
        $this->db->select('*');
        $this->db->from('users');
        $this->db->where('id', $data);
        $query = $this->db->get();
        return $query->row_array();
    }

    public function Update_User($data) {
        $data = array(
            'user' => $title,
            'name' => $name,
            'date' => $date
        );

        $this->db->where('id', $id);
        $this->db->update('mytable', $data);
        return $query->row_array();
    }

}
?>