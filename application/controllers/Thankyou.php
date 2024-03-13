<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Thankyou extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        
    }
    public function index()
    {
        $this->load->view('front/thank-you');
    }
    
    public function paymentfailed()
    {
        $this->load->view('front/payment-failed');
    }
    
    
 }

?>

