<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class City extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/CityModel');
    }

    public function index() {
        $this->list_data();
    }

    function list_data() {
        $response['title'] = "List";
        $response['subtitle'] = "city";
        $response['heading'] = $response['title'] . " " . $response['subtitle'];
        $response['addlink'] = base_url('admin/city/add_data');
        $response['editlink'] = base_url('admin/city/edit_data/');
        $response['deletelink'] = base_url('admin/city/delete_data/');
        $response['list'] = $this->CityModel->GetList(array());

        $this->load->view('admin/city/list', $response);
    }

    public function add_data() {
        if (null !== ($this->input->post('create'))) {
            $data = $this->input->post();
            $data = array_slice($data, '1', '4');
//            echo "<pre>";
//            print_r($data);
//            exit; 
            $data['created_date'] = DATETIME;
//            $data['deleted'] = '0';
//            $data['userid'] = $this->userdata->userid;
//            $data['ip'] = get_ip_address();
            //$data['userid']=$userdata->id;

            $data = $this->security->xss_clean($data);
            $id = $this->CityModel->InserData($data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('admin/city');
        } else {
            $response['title'] = "Add";
            $response['subtitle'] = "city";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['addlink'] = base_url('admin/city/add_data');
            $this->load->view('admin/city/add', $response);
        }
    }

    public function edit_data($id = "") {
        if (null !== ($this->input->post('update'))) {
            $data = $this->input->post();
            $editid = $data['editid'];
            $data = array_slice($data, 2, 4);
//            echo "<pre>";
//            print_r($data);
//            exit;             
            $data = $this->security->xss_clean($data);
            $id = $this->CityModel->UpdateData(array('city_id' => $editid), $data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('admin/city');
        } else {
            $response['title'] = "Edit";
            $response['subtitle'] = "city";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['editdata'] = $this->CityModel->GetData(array('city_id' => $id));
            $response['editlink'] = base_url('admin/city/edit_data/');
            $this->load->view('admin/city/edit', $response);
        }
    }

    public function delete_data($id) {
        $cond = array("city_id" => $id);
        $data['is_deleted'] = "1";
        $result = $this->CityModel->DeleteData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('admin/city');
    }
}
