<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Design_Decor_Service_Plan extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->model('Designdecor_Model');
    }
    
    public function thankyou(){
         
         
        $this->load->view('front/Design_Decor_thankyou');
    }

    

 }

?>