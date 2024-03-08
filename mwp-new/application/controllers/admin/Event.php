<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Event extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/EventModel'); 
    }

    public function index() {
        $this->list_data();
    }

    function list_data() {
        $response['title'] = "List";
        $response['subtitle'] = "Event";
        $response['heading'] = $response['title'] . " " . $response['subtitle'];
        $response['addlink'] = base_url('admin/event/add_data');
        $response['editlink'] = base_url('admin/event/edit_data/');
        $response['deletelink'] = base_url('admin/event/delete_data/');
        $response['list'] = $this->EventModel->GetList(array());

        $this->load->view('admin/event/list-event', $response);
    }

    public function add_data() {
        if (null !== ($this->input->post('create'))) {
            $data = $this->input->post();
            $data = array_slice($data, '1', '6');
//            echo "<pre>";
//            print_r($data);
//            exit;

            $data['event_start_date'] = date("Y-m-d H:i:s", strtotime($data['event_start_date']));
            $data['event_end_date'] = date("Y-m-d H:i:s", strtotime($data['event_end_date']));
            $data['created_date'] = DATETIME;
//            print_r($data);
//            exit;
//            $data['deleted'] = '0';
//            $data['userid'] = $this->userdata->userid;
//            $data['ip'] = get_ip_address();
            //$data['userid']=$userdata->id;

            $data = $this->security->xss_clean($data);
            $id = $this->EventModel->InserData($data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('admin/event');
        } else {
            $response['title'] = "Add";
            $response['subtitle'] = "event";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['addlink'] = base_url('admin/event/add_data');
            $this->load->view('admin/event/add-event', $response);
        }
    }

    public function edit_data($id = "") {
        if (null !== ($this->input->post('update'))) {
            $data = $this->input->post();
            $editid = $data['editid'];
            $data = array_slice($data, 2, 6);
//            echo "<pre>";
//            print_r($data);
//            exit;
            
            $data['event_start_date'] = date("Y-m-d H:i:s", strtotime($data['event_start_date']));
            $data['event_end_date'] = date("Y-m-d H:i:s", strtotime($data['event_end_date']));
//            print_r($data);
//            exit;
//            if(empty($data['password'])){
//                unset($data['password']);
//            } else {
//                $data['password'] = md5($data['password']);
//            }
//            echo "<pre>";
//            print_r($data);
//            exit;
            $data = $this->security->xss_clean($data);
            $id = $this->EventModel->UpdateData(array('event_id' => $editid), $data);
            if ($id) {
                $this->session->set_flashdata('succ_msg', ADDMSG);
            } else {
                $this->session->set_flashdata('err_msg', ADDMSG);
            }
            redirect('admin/event');
        } else {
            $response['title'] = "Edit";
            $response['subtitle'] = "event";
            $response['heading'] = $response['title'] . " " . $response['subtitle'];
            $response['editdata'] = $this->EventModel->GetData(array('event_id' => $id));
            $response['editlink'] = base_url('admin/event/edit_data/');
            $this->load->view('admin/event/edit-event', $response);
        }
    }

    public function delete_data($id) {
        $cond = array("event_id" => $id);
        $data['is_deleted'] = "1";
        $result = $this->EventModel->DeleteData($cond, $data);
        if ($result) {
            $this->session->set_flashdata('succ_msg', DATADELETEMSG);
        } else {
            $this->session->set_flashdata('err_msg', DATADELETEERRMSG);
        }
        redirect('admin/event');
    }
}
