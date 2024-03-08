<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Wedding_Planning_Service_Plan extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        
    }
    
    public function thankyou(){
        $this->load->view('front/Wedding_Planning_thankyou');
    }

    

 }

?>