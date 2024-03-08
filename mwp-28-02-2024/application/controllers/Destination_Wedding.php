<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Destination_Wedding extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        
    }
    
    public function thankyou(){
        $this->load->view('front/Destination_Wedding_thankyou');
    }

    

 }

?>