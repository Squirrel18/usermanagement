<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Autho extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

	public function login()	{
		$data = json_decode(file_get_contents('php://input'), true);
		echo "User ".$data['user']." "."Pass ".$data['password'];
	}
}