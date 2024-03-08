<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Category extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/CategoryModel');
    }

    public function index() {
        $this->list_data();
    }

    function list_data() {
        $response['title'] = "List";
        $response['subtitle'] = "category";
        $response['heading'] = $response['title'] . " " . $response['subtitle'];
        $response['addlink'] = base_url('admin/category/add_data');
        $response['editlink'] = base_url('admin/category/edit_data/');
        $response['deletelink'] = base_url('admin/category/delete_data/');
        $response['list'] = $this->CategoryModel->GetList(array());

        $this->load->view('admin/category/list', $response);
    }

    public function add_data() {

        if (null !== ($this->input->post('create'))) {            
            $data = $this->input->post();
            $data = array_slice($data, '1', '2');
//            echo "<pre>";
//            print_r($data);
//            exit;            
            $data['created_date'] = DATETIME;
//            $data['is_deleted'] = '0';
//            $data['userid'] = $this->userdata->userid;
//            $data['ip'] = get_ip_address();
            //$data['userid']=$userdata->id;

            $data = $this->security->xss_clean($data);
            $id = $this->CategoryModel->InserData($data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ERRMSG);
            }
            redirect('admin/category');
        } else {
            $response['title'] = "Add";
            $response['subtitle'] = "category";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['addlink'] = base_url('admin/category/add_data');
            $this->load->view('admin/category/add', $response);
        }
    }

    public function edit_data($id = "") {
        if (null !== ($this->input->post('update'))) {
            $data = $this->input->post();
            $editid = $data['editid'];
            $data = array_slice($data, 2, 2);
//                        echo "<pre>";
//            print_r($data);
//            exit; 
            $data = $this->security->xss_clean($data);
            $id = $this->CategoryModel->UpdateData(array('category_id' => $editid), $data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ERRMSG);
            }
            redirect('admin/category');
        } else {
            $response['title'] = "Edit";
            $response['subtitle'] = "Category";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['editdata'] = $this->CategoryModel->GetData(array('category_id' => $id));
            $response['editlink'] = base_url('admin/category/edit_data/');
            $this->load->view('admin/category/edit', $response);
        }
    }

    public function delete_data($id) {
        $cond = array("category_id" => $id);
        $data['is_deleted'] = "1";
        $result = $this->CategoryModel->DeleteData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('admin/category');
    }
}
