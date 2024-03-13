<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Phonepe extends CI_Controller {

	 public function __construct() {
        parent::__construct();
         $this->load->library('PhonePe/PhonePe');
         $this->load->library('session');
    }
    public function initiate_payment() {
    // Set up PhonePe credentials
    $api_key = 'PGTESTPAYUAT';
    $api_secret = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399';
    $environment = 'TEST'; // or 'TEST' for testing environment
    $phonepe = new PhonePe($api_key, $api_secret, $environment);

    // Create a payment request
    $payment_request = $phonepe->createPaymentRequest([
        'amount' => 1000, // Amount in paisa
        'orderId' => 'ORDER123',
        'returnUrl' => base_url('phonepe/callback'), // URL where PhonePe will send callback after payment
        // Other required parameters
    ]);

    // Redirect user to PhonePe payment page
    redirect($payment_request['paymentUrl']);
   }


    public function callback() {
    // Get the callback data
    $callback_data = $this->input->post(); // Assuming you're receiving POST data

    // Validate the callback data, verify signature, and process the response
    // You'll need to use the PhonePe SDK functions to do this
    // Example (this may vary based on PhonePe SDK):
    $payment_status = $phonepe->validateCallback($callback_data);

    // Update your database based on the payment status
    if ($payment_status === 'SUCCESS') {
              redirect('weedingplanning/wedding_planning_service_plan');
    } else {

         echo "failed";
        // Payment failed or other status, handle accordingly
    }

    // Send a response back to PhonePe to acknowledge the callback
    echo "Callback received and processed successfully.";
}



 }

?>