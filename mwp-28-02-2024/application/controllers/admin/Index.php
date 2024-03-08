<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Index extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $response['title'] = "List";
        $response['subtitle'] = "vendor";
        $response['heading'] = $response['title'] . " " . $response['subtitle'];
        $this->load->view('admin/index',$response);
    }

   

}

/* End of file Index.php */
