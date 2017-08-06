<?php

use \Firebase\JWT\JWT;

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('Users_model');
    }

	public function users()	{
        if($this->authorization()) {
            $query = $this->Users_model->users();
            $json = json_encode($query);
            echo $json;
        } else {
            echo "No autho";
            $this->output->set_status_header(403);
        }
	}

    public function edit($data)	{
        $query = $this->Users_model->Get_User($data);
        $json = json_encode($query);
        echo $json;
	}

    public function update() {
        $data = json_decode(file_get_contents('php://input'), true);
		var_dump($data);
	}

    private function authorization() {
		$private_key = base64_encode("PrivateKeyProject");
		$tokenRequest = $this->input->get_request_header('Authorization', TRUE);
		$tokenRequest = substr($tokenRequest, stripos($tokenRequest, "Bearer ") + 7);
		try {
			$decoded = JWT::decode($tokenRequest, $private_key, array('HS256'));
			if(isset($decoded)) {
				return TRUE;
			} else {
				return FALSE;
			}
		} catch(Exception $e) {
			return FALSE;
		}
	}

}