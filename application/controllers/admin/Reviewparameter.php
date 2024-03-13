<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Reviewparameter extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/ReviewparameterModel');
    }

    public function index() {
        $this->list_data();
    }

    function list_data() {
        $response['title'] = "List";
        $response['subtitle'] = "review parameter";
        $response['heading'] = $response['title'] . " " . $response['subtitle'];
        $response['addlink'] = base_url('admin/reviewparameter/add_data');
        $response['editlink'] = base_url('admin/reviewparameter/edit_data/');
        $response['deletelink'] = base_url('admin/reviewparameter/delete_data/');
        $response['list'] = $this->ReviewparameterModel->GetList(array());

        $this->load->view('admin/reviewparameter/list', $response);
    }

    public function add_data() {
        if (null !== ($this->input->post('create'))) {
            $data = $this->input->post();
            $data = array_slice($data, '1', '3');
//            echo "<pre>";
//            print_r($data);
//            exit; 
            $data['created_date'] = DATETIME;
//            $data['deleted'] = '0';
//            $data['userid'] = $this->userdata->userid;
//            $data['ip'] = get_ip_address();
            //$data['userid']=$userdata->id;

            $data = $this->security->xss_clean($data);
            $id = $this->ReviewparameterModel->InserData($data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('admin/reviewparameter');
        } else {
            $response['title'] = "Add";
            $response['subtitle'] = "review parameter";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['addlink'] = base_url('admin/reviewparameter/add_data');
            $this->load->view('admin/reviewparameter/add', $response);
        }
    }

    public function edit_data($id = "") {
        if (null !== ($this->input->post('update'))) {
            $data = $this->input->post();
            $editid = $data['editid'];
            $data = array_slice($data, 2, 3);
//            echo "<pre>";
//            print_r($data);
//            exit;             
            $data = $this->security->xss_clean($data);
            $id = $this->ReviewparameterModel->UpdateData(array('review_parameter_id' => $editid), $data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('admin/reviewparameter');
        } else {
            $response['title'] = "Edit";
            $response['subtitle'] = "review parameter";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['editdata'] = $this->ReviewparameterModel->GetData(array('review_parameter_id' => $id));
            $response['editlink'] = base_url('admin/reviewparameter/edit_data/');
            $this->load->view('admin/reviewparameter/edit', $response);
        }
    }

    public function delete_data($id) {
        $cond = array("review_parameter_id" => $id);
        $data['is_deleted'] = "1";
        $result = $this->ReviewparameterModel->DeleteData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('admin/reviewparameter');
    }
}
