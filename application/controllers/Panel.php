<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Panel extends CI_Controller {

	public function __construct() {
        parent::__construct();
        $this->load->helper('url_helper');
    }

	public function panel()	{
		$data['title'] = "Panel view";
		$this->load->view('index/panel', $data);
	}
}
