<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Listing extends CI_Controller {

    public function __construct() {
        parent::__construct();
//        $this->load->model('admin/ListingModel');
    }

    public function index() {
        $this->list_data();
    }

    function list_data() {
        $response['title'] = "List";
        $response['subtitle'] = "vendor";
        $response['heading'] = $response['title'] . " " . $response['subtitle'];
//        $response['addlink'] = base_url('admin/vendor/add_data');
//        $response['editlink'] = base_url('admin/vendor/edit_data/');
//        $response['deletelink'] = base_url('admin/vendor/delete_data/');
//        $response['list'] = $this->ListingModel->GetList(array());

        $this->load->view('admin/listing/index', $response);
    }

    
}
