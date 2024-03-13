<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Joinwaitlist extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        
    }
    /*public function index()
    {
        $this->load->view('front/contactus');
    }*/


    public function emailjoinwaitlist()
    {
       $data=$this->input->post();
       $spam_validation = $this->input->post("joinlist-data");
       
        if($spam_validation === '')
        {
            $message=$this->load->view('front/email/joinwaitlist-template',$data,TRUE);
     
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
            $this->email->to($data["joiemail"]); 
            $this->email->subject("Thank You for Joining Our Customized Add-Ons Waitlist!");
            $this->email->message($message);  
           //$this->email->send();
         
            if ($this->email->send()) 
            {
                 $this->emailmerchant($data);
            } 
            else 
            {
                 echo $this->email->print_debugger();
                 exit;
            }
            
        }
        else{
              echo '<script>alert("Something went wrong"); window.location.href = "https://myweddingpalette.com/service/customized_wedding_add_ons"</script>';
        }
    }


    
    
    public function emailmerchant($data)
    {
            $message=$this->load->view('front/email/joinwaitlist-client-template.php',$data,TRUE);
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
           $this->email->to("mwp@myweddingpalette.com"); 
           $this->email->subject("Customized add on detail");
           $this->email->message($message);  
           
            if ($this->email->send()) {
                 

                 //echo $message;
                 //$this->emailmerchant($data);

            	    redirect("https://myweddingpalette.com/Thankyou");
                } 
                else 
                {
                    echo $this->email->print_debugger();
                    exit;
                }

    }
}
?>
