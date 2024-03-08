<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VendorQuery extends CI_Controller {

	  public function __construct() {
        parent::__construct();
        $this->load->model('VendorQueryModel');
        
    }
   

    public function vendorquerysubmit()
    {

        $data = array(
                 "query-form-name"=>$this->input->post("query-form-name"),
                 "query-form-phone-no"=>$this->input->post("query-form-phone-no"),
                 "query-form-email"=>$this->input->post("query-form-email"),
                 "query-form-date" => $this->input->post("query-form-date"),
                 "vendor-name" => $this->input->post("vendor-name"),
                 "vendor-query-form-message" => $this->input->post("vendor-query-form-message"));
        
        $insert_id=$this->VendorQueryModel->InserData($data);

        if ($insert_id) {
            $vendorquery=$this->VendorQueryModel->getvendorquerydata($insert_id);  
            $this->vendorqueryemail($data);
            $this->vendorqueryclientemail($data);
        }
        
    }


    public function vendorqueryemail($vendorquery)
    {
        //var_dump($query);exit();
        $message = $this->load->view("front/email/vendor-query-email-template",['vendorquery' => $vendorquery], TRUE);
       $config=array('protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 587,
                'smtp_user' => 'mwp@myweddingpalette.com',
                'smtp_pass' => 'zbtobteenohkkxwk',
                'mailtype'  => 'html', 
                'charset'   => 'utf-8',
                'newline'=>"\r\n",
                'smtp_crypto'=>'tls',
                'Return-Path' => 'mwp@myweddingpalette.com');
          
           $this->load->library("email");
           $this->email->initialize($config);
           $this->email->set_header("MIME-Version", "1.0; charset=utf-8");
           $this->email->from("mwp@myweddingpalette.com","My Wedding Palette");
           //$this->email->to($paymentdatabasic["vendor_email"]);
           $this->email->to("mwp@myweddingpalette.com"); 

           $this->email->subject("Your Wedding Dreams in the Making 🌟");
           $this->email->message($message);  
          if ($this->email->send()) 
          {
                redirect('thankyou');
              // echo $message;
              // header('Location:'.$payUrl) ;
          } 
          else 
          {
                 echo $this->email->print_debugger();
                 exit;
          }

    }


    public function vendorqueryclientemail($vendorquery)
    {
        $message = $this->load->view("front/email/vendor-query-client-email-template",['vendorquery' => $vendorquery], TRUE);
        $config=array('protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 587,
                'smtp_user' => 'mwp@myweddingpalette.com',
                'smtp_pass' => 'zbtobteenohkkxwk',
                'mailtype'  => 'html', 
                'charset'   => 'utf-8',
                'newline'=>"\r\n",
                'smtp_crypto'=>'tls',
                'Return-Path' => 'mwp@myweddingpalette.com');
           $this->load->library("email");
           $this->email->initialize($config);
           $this->email->set_header("MIME-Version", "1.0; charset=utf-8");
           $this->email->from('mwp@myweddingpalette.com','My Wedding Palette');
           $this->email->to('mwp@myweddingpalette.com');
          // $this->email->to("pranoti@crezvatic.com"); 

           $this->email->subject("🌟 Vendor query form lead 🌟");
           $this->email->message($message);  
          if ($this->email->send()) 
          {
              
              redirect('thankyou');
               //echo $message;
              // header('Location:'.$payUrl) ;
          } 
          else 
          {
                 echo $this->email->print_debugger();
                 exit;
          }

    }
}
