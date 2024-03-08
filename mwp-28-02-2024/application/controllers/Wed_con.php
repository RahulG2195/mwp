<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wed_con extends CI_Controller {

	
	public function index()
	{
		$this->load->view('front/wed_view/index');
	}
}
