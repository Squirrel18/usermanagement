<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Root extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

	public function index()	{
		$data['title'] = "Index view";
		$this->load->view('index/index', $data);
	}
}
