<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Users extends CI_Controller {

	public function __construct() {
        parent::__construct();
		$this->load->model('Users_model');
    }

	public function users()	{
		$query = $this->Users_model->users();
        $json = json_encode($query);
        echo $json;
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

}