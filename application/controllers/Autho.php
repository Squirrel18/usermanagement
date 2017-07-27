<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autho extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
		$this->load->model('Autho_model');
		$this->load->library('form_validation');
		$this->load->helper('security');
    }

	public function login()	{
		$data = json_decode(file_get_contents('php://input'), true);
		
		if(!isset($data['user']) || !isset($data['password'])) {
			$this->output->set_status_header(400);
		} else {
            //$password = html_escape($this->input->get_post('passcode', TRUE));
            //$password = password_hash($password, PASSWORD_DEFAULT);
			$CleanUser = xss_clean($data['user'], FALSE);
			$CleanPassword = xss_clean($data['password'], FALSE);
            $query = $this->Autho_model->login(html_escape($CleanUser), html_escape($CleanPassword));
            if(isset($query)) {
                $this->output->set_status_header(200);
            } else {
                $this->output->set_status_header(403);
            }
        }
	}
}