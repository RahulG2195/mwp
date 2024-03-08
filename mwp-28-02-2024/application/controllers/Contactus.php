<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Contactus extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        
    }
    public function index()
    {
        $this->load->view('front/contactus');
    }


    public function emailcontact()
    {
       $data=$this->input->post();

       $spam_validation = $this->input->post("contact-data");
       
        if($spam_validation === '' && $_POST['g-recaptcha-response'])
        {
            //echo "1";
            $secretKey = '6Leb2VkpAAAAAIbKHE1Xw1EGtBMGYxe5RNIazELa';
            $resp = $_POST['g-recaptcha-response'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$resp&remoteip=$ip";
            $file = file_get_contents($url);
            // echo $file;
            $res = json_decode($file);
            if($res->success == true)
            {
                $message=$this->load->view('front/email/contact-email',$data,TRUE);
      
          
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
             
               //$this->email->from("registered@myweddingpalette.com","My Wedding Palette");
               $this->email->from("mwp@myweddingpalette.com","My Wedding Palette");
               $this->email->to($data["email"]); 
               $this->email->subject("Thank You for Reaching Out to My Wedding Palette!");
               $this->email->message($message);  
               
                if ($this->email->send()) {
                     
                     //echo $message;
                     $this->emailmerchant($data);
                   
                   redirect("https://myweddingpalette.com/Thankyou");
                 } else {
                     echo $this->email->print_debugger();
                     exit;
    
               }
                  
            }
            else{
                echo '<script>alert("Invalid captcha"); window.location.href = "https://myweddingpalette.com/contactus"</script>';
            }
            
           
            
        }
        else{
              echo '<script>alert("Captcha required"); window.location.href = "https://myweddingpalette.com/contactus"</script>';
        }
        
       
       
         
    }


    public function emailmerchant($data)
    {
        $message=$this->load->view('front/email/contact-email-client',$data,TRUE);
        
        
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
      
            //$senderarray=array("mwp@myweddingpalette.com","pranoti@crezvatic.com");
            $this->load->library("email");
            $this->email->initialize($config);
            
            $this->email->set_header("MIME-Version", "1.0; charset=utf-8");
         
            $this->email->from('mwp@myweddingpalette.com','My Wedding Palette');
            $this->email->to('mwp@myweddingpalette.com');
            
            $this->email->subject("Thank You for Reaching Out to My Wedding Palette!");
            $this->email->message($message);  
           
            if ($this->email->send()) {
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
