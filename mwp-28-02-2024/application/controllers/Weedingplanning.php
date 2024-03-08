<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Weedingplanning extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->model('Weddingplanninglead');
        
    }
    /*public function index()
    {
        $this->load->view('front/aboutus');
    }*/

    
  /*  public function weddingplanning()
     {
        $spam_validation = $this->input->post("wed_data");
        
            if($spam_validation === '' && $_POST['g-recaptcha-response'])
            {
                $secretKey = '6Leb2VkpAAAAAIbKHE1Xw1EGtBMGYxe5RNIazELa';
                $resp = $_POST['g-recaptcha-response'];
                $ip = $_SERVER['REMOTE_ADDR'];
                $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$resp&remoteip=$ip";
                $file = file_get_contents($url);
                // echo $file;
                $res = json_decode($file);
                if($res->success == true)
                {
                    $data = array(
                        'fullname' =>$this->input->post("fullname"),
                        'email'=>$this->input->post("email"),
                        'phoneno'=>$this->input->post("phoneno"),
                        'weddingplanname'=>$this->input->post("weddingplanname"),
                        'weddingdate'=>$this->input->post("weddingdate"),
                        'weddinglocation'=>$this->input->post("weddinglocation"),
                        'guestcount'=>$this->input->post("guestcount"),
                        'budgetrange'=>$this->input->post("budgetrange"),
                        'additinalcomment'=>$this->input->post("additinalcomment"));

                    $result=$this->Weddingplanninglead->InserData($data);
                    if(!empty($result)){
                            $this->weedingplanningEmail();
                    }
                }
                else
                {
                    echo '<script>alert("Invalid captcha"); window.location.href = "http://localhost/mwp-phase2/service/wedding_planning_service_plan"</script>';
                }
            }
            else{
                echo '<script>alert("Invalid captcha"); window.location.href = "http://localhost/mwp-phase2/service/wedding_planning_service_plan"</script>';
            }
     }*/

    
    public function weedingplanningEmail()
    {
        $spam_validation = $this->input->post("wed_data");
        
        if($spam_validation === '' && $_POST['g-recaptcha-response']){
            
            $secretKey = '6Leb2VkpAAAAAIbKHE1Xw1EGtBMGYxe5RNIazELa';
            $resp = $_POST['g-recaptcha-response'];
            $ip = $_SERVER['REMOTE_ADDR'];
            $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$resp&remoteip=$ip";
            $file = file_get_contents($url);
            // echo $file;
            $res = json_decode($file);
            
            if($res->success == true){
                $data = array(
            'fullname' =>$this->input->post("fullname"),
            'email'=>$this->input->post("email"),
            'phoneno'=>$this->input->post("phoneno"),
            'weddingplanname'=>$this->input->post("weddingplanname"),
            'weddingdate'=>$this->input->post("weddingdate"),
            'weddinglocation'=>$this->input->post("weddinglocation"),
            'guestcount'=>$this->input->post("guestcount"),
            'budgetrange'=>$this->input->post("budgetrange"),
            'additinalcomment'=>$this->input->post("additinalcomment"));
            $result=$this->Weddingplanninglead->InserData($data);

            //var_dump($data);exit;
            		
            $email = $data["email"];
            
            
            
            $message="";
            $message = $this->load->view("front/email/wedding-planning-template", $data, true);
            
         
            $config = array('protocol' => 'smtp',
                    'smtp_host' => 'smtp.gmail.com',
                    'smtp_port' => 587,
                    'smtp_user' => 'mwp@myweddingpalette.com',
                    'smtp_pass'=>'zbtobteenohkkxwk',
                    //'smtp_pass' => 'fhvmxucfgnivpluf',
                    //'smtp_pass'=>'vwat pfhi svik dhmp',
                    'mailtype'  => 'html', 
                    'charset'   => 'utf-8',
                    'newline'=>"\r\n",
                    'smtp_crypto'=>'tls',
                    'Return-Path' => 'mwp@myweddingpalette.com');
                $this->load->library('email');
                $this->email->initialize($config);            
                $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
                $this->email->from('mwp@myweddingpalette.com','My Wedding Palette');
                $this->email->to($email); 
                $this->email->subject('Exploring Your Dream Wedding Together!');
                $this->email->message($message);
                $this->email->send();
                $this->emailclient($data);
            }else{
                echo '<script>alert("Invalid captcha"); window.location.href = "https://myweddingpalette.com/service/wedding_planning_service_plan"</script>';
            }
         
        }
    }
    
    public function emailclient($data)
    {
        $email=$data["email"];
        $message="";
        $message = $this->load->view("front/email/wedding-planning-template-merchant", $data, true);
      
         $config=array('protocol' => 'smtp',
                'smtp_host' => 'smtp.gmail.com',
                'smtp_port' => 587,
                'smtp_user' => 'mwp@myweddingpalette.com',
                'smtp_pass'=>'zbtobteenohkkxwk',
              //  'smtp_pass' => 'fhvmxucfgnivpluf',
                //'smtp_pass'=>'fhvm xucf gniv pluf',
                'mailtype'  => 'html', 
                'charset'   => 'utf-8',
                'newline'=>"\r\n",
                'smtp_crypto'=>'tls',
                'Return-Path' => 'mwp@myweddingpalette.com');
        $this->load->library('email');
        $this->email->initialize($config);            
        $this->email->set_header('MIME-Version', '1.0; charset=utf-8');
        $this->email->from('mwp@myweddingpalette.com','My Wedding Palette');
        $this->email->to('mwp@myweddingpalette.com');
       // $this->email->to('pranoti@crezvatic.com');
        //$this->email->to('mwp@myweddingpalette.com');
       
        $this->email->subject('Wedding Planning Lead');
        $this->email->message($message);  
           
        if ($this->email->send()) {
           redirect('Wedding_Planning_Service_Plan/thankyou');
         } 
         else {
             echo $this->email->print_debugger();
             exit;
         }
   


    }



 }

?>