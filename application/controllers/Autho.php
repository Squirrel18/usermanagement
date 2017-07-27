<?php

use \Firebase\JWT\JWT;

defined('BASEPATH') OR exit('No direct script access allowed');

class Autho extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
		$this->load->model('Autho_model');
		$this->load->library('form_validation');
		$this->load->helper('security');
		$this->load->helper('date');
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
				$private_key = base64_encode("PrivateKeyProject");
                $token = array(
                    "iss" => "http://project.org",
                    "aud" => "http://project.com",
                    "iat" => now('COT'),
                    "nbf" => now('COT'),
                    "exp" => now('COT') + 86400
                );
                $jwt = JWT::encode($token, $private_key, 'HS256');
                $this->output->set_status_header(200);
                $this->output->set_header('Authorization: Bearer ' . $jwt);
            } else {
                $this->output->set_status_header(403);
            }
        }
	}

	public function authorization() {
		$private_key = base64_encode("PrivateKeyProject");
		$tokenRequest = $this->input->get_request_header('Authorization', TRUE);
		$tokenRequest = substr($tokenRequest, stripos($tokenRequest, "Bearer ") + 7);
		try {
			$decoded = JWT::decode($tokenRequest, $private_key, array('HS256'));
			if(isset($decoded)) {
				$this->output->set_status_header(200);
			}
		} catch(Exception $e) {
			$this->output->set_status_header(403);
		}
	}
}