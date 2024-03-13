<?php

defined('BASEPATH') OR exit('No direct script access allowed');

class Admin_Vendor extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->model('admin/VendorModel');
    }

    public function index() {
        $this->list_data();
    }

    function Bridal_Wear() {
        $data['bridal_wear'] = $this->VendorModel->Get_Bridal_Data();
        $this->load->view('admin/vendor/bridal_wear', $data);
    }

    function Jewellery() {
        $data['Jewellery'] = $this->VendorModel->Get_Jewellery();
        $this->load->view('admin/vendor/jewellery', $data);
    }
    function Catering() {
        $data['Catering'] = $this->VendorModel->Get_Catering();
        $this->load->view('admin/vendor/catering', $data);
    }
    function Decoration() {
        $data['Decoration'] = $this->VendorModel->Get_Decoration();
        $this->load->view('admin/vendor/decoration', $data);
    }
    function Gift() {
        $data['Gift'] = $this->VendorModel->Get_Gift();
        $this->load->view('admin/vendor/gift', $data);
    }
    function Groom_wear() {
        $data['Groom_wear'] = $this->VendorModel->Get_Groom_wear();
        $this->load->view('admin/vendor/groom_wear', $data);
    }
    function Inivitation() {
        $data['Inivitation'] = $this->VendorModel->Get_Inivitation();
        $this->load->view('admin/vendor/inivitation', $data);
    }
    function MakeUp() {
        $data['MakeUp'] = $this->VendorModel->Get_MakeUp();
        $this->load->view('admin/vendor/makeUp', $data);
    }
    function Mehendi() {
        $data['Mehendi'] = $this->VendorModel->Get_Mehendi();
        $this->load->view('admin/vendor/mehendi', $data);
    }
    function Photography() {
        $data['Photography'] = $this->VendorModel->Get_Photography();
        $this->load->view('admin/vendor/photography', $data);
    }
    function Venue() {
        $data['Venue'] = $this->VendorModel->Get_Venue();
        $this->load->view('admin/vendor/venue', $data);
    }


    function Vendor_all_Data($tab, $id) {
        $data['vendor_data'] = $this->VendorModel->Fetch_single_data($tab, $id);
        $this->load->view('admin/vendor/view_all_data', $data);
    }

    function Status_update(){
        $link = $this->input->get('tab');
        $statusString = $this->input->get('status');
         $statusInt = (int)$statusString;

        $id = $this->input->get('vid');
        if ($statusInt == 0) {
			$this->session->set_flashdata('error', 'Vendor has been Deactivated');
		} else {
            
			$this->session->set_flashdata('success', 'Vendor has been Activated');
		}
        // echo $new_status;exit;
		$data = array('vendor_status' => $statusInt);
		$this->db->where('dv_id', $id);
		$this->db->update('default_vendor_inp', $data);
        
        if($link == 'bridal'){
            redirect('admin/Admin_Vendor/Bridal_Wear');
        }elseif($link == 'jewel'){
            redirect('admin/Admin_Vendor/Jewellery');
        }elseif($link == 'cater'){
            redirect('admin/Admin_Vendor/Catering');
        }elseif($link == 'decor'){
            redirect('admin/Admin_Vendor/Decoration');
        }elseif($link == 'gift'){
            redirect('admin/Admin_Vendor/Gift');
        }elseif($link == 'groom'){
            redirect('admin/Admin_Vendor/Groom_wear');
        }elseif($link == 'iniv'){
            redirect('admin/Admin_Vendor/Inivitation');
        }elseif($link == 'make'){
            redirect('admin/Admin_Vendor/MakeUp');
        }elseif($link == 'mehen'){
            redirect('admin/Admin_Vendor/Mehendi');
        }elseif($link == 'photo'){
            redirect('admin/Admin_Vendor/Photography');
        }elseif($link == 'venue'){
            redirect('admin/Admin_Vendor/Venue');
        }
        
    }
}
