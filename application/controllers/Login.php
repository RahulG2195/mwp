<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('LoginModel');
        $this->load->library('session');
        // Save the current URL to the session
        // $this->session->set_userdata('last_page', current_url());
    }


    public function index()
    {
        //session_start();
        $username = $this->input->post("email_id");
        $password = $this->input->post("user_password");
        $redirect_url = $this->input->post("redirect_url");
      
        $pass = md5($password);
        $data["password"] = $this->LoginModel->getpassword($username);
        // var_dump($data["password"]);exit();
        /*  if (!empty($data["password"][0]["user_password"])== $password) 
            {
                $data["password"]=$this->LoginModel->updatepassword($username,$pass);
            } */

        $result["user"] = $this->LoginModel->getuserlogindata($username);

     
        if (!empty($result["user"])) {
            $id = $result["user"][0]["login_id"];
            $email = $result["user"][0]["email_id"];
            $userdata['admin_user_data'] = $result;
            $session_data = array(
                'firstname' => $result["user"][0]["first_name"],
                'lastname' => $result["user"][0]["last_name"],
               // 'username' => $result["user"][0]["username"],
                'email' => $result["user"][0]["email_id"],
                'userid' => $result["user"][0]["login_id"],
                'phoneno' => $result["user"][0]["phone_number"],
                'logged_in' => TRUE
            );
            $this->session->set_userdata($session_data);
            redirect($redirect_url);
            $err = "";
        } else {
            $err = "Invalid credentials";
            echo json_encode($err);
            // redirect('home');
        }
    }


    public function registeruser()
    {
         $redirect_url = $this->input->post("redirect_url");
         $spam_validation = $this->input->post("reg_data");
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
                 $data = $this->input->post();
                 $insertdata = array(
                    'first_name' => $this->input->post("first_name"),
                    'last_name' => $this->input->post("last_name"),
                    'phone_number' => $this->input->post("phone_no"),
                    'email_id' => $this->input->post("email_id"),
                    'user_password' => $this->input->post("user_password"),
                    'user_role' => $this->input->post("user_role"),
                    'created_date' => DATETIME
                    );
                $result = $this->LoginModel->InserData($insertdata);
                $data["user"] = $this->LoginModel->getregisteruserdata($result);
                $session_data = array(
                    'firstname' => $data["user"][0]["first_name"],
                    'lastname' => $data["user"][0]["last_name"],
                    'email' => $data["user"][0]["email_id"],
                    'userid' => $data["user"][0]["login_id"],
                    'phoneno' => $data["user"][0]["phone_number"],
                    'logged_in' => TRUE
                );
                $this->session->set_userdata($session_data);
                $this->registerusermail($insertdata);
                $this->registerclientmail($insertdata);
                if ($redirect_url=="https://myweddingpalette.com/" || $redirect_url=="https://myweddingpalette.com/home") {
                    header('Location: Thankyou');
                }
                else{
                     redirect($redirect_url);
                }
                
            }
            else
            {
               echo '<script>alert("Captcha required"); window.location.href = "'.$redirect_url.'"; </script>';   
            }
            
            
            
        } 
        else
        {
             //echo "1";
            echo '<script>
                   alert("Captcha required"); 
                  window.location.href = "https://myweddingpalette.com/";
            </script>';
        }
            
            
    }


     public function Thankyou()
    {
        $this->load->view('front/thank-you');
    }

   /* public function registeruser()
    {
        $data = $this->input->post();

        if (!empty($data["phone_no"]) && empty($data["login_id"])) {         
            $insertdata = array(
                'first_name' => $this->input->post("first_name"),
                'last_name' => $this->input->post("last_name"),
                'username' => $this->input->post("user_name"),
                'phone_number' => $this->input->post("phone_no"),
                'email_id' => $this->input->post("email_id"),
                'user_password' => $this->input->post("user_password"),
                'user_role' => $this->input->post("user_role")
            );

            //var_dump($insertdata);exit;
            $result = $this->LoginModel->InserData($insertdata);
            $update = $this->LoginModel->getlogindata($result);


            $this->registerusermail($insertdata);
            $this->registerclientmail($insertdata);

            $response = array("login_id" => $update["login_id"]);
            echo json_encode($response);
        } elseif (!empty($data["login_id"])) {

            $insertdata2 = array(
                'wedding_budget' => $this->input->post("wedding_budget"),
                'wedding_start_date' => $this->input->post("wedding_start_date"),
                'wedding_end_date' => $this->input->post("wedding_end_date"),
                'wedding_style' => $this->input->post("wedding_style"),
                'same_city' => $this->input->post("same_city"),
                'bride_city' => $this->input->post("bride_city"),
                'groom_city' => $this->input->post("groom_city"),
                'pre_wedding_guest' => $this->input->post("pre_wedding_guest"),
                'wedding_guest' => $this->input->post("wedding_guest"),
                'post_wedding_guest' => $this->input->post("post_wedding_guest"),
                'samewedding_location' => $this->input->post("samewedding_location"),
                'weddinng_theme' => $this->input->post("weddinng_theme"),
                'top_three_priorities' => $this->input->post("top_three_priorities"),
                'destination_wedding' => $this->input->post("destination_wedding")
            );
            $this->LoginModel->UpdateData($insertdata2, $data["login_id"]);

            // echo "data updated";
        } else {
            echo "somthing is wrong";
        }
    }*/
    
    

    public function registerusermail($insertdata)
    {   // $message="test";
        $message = $this->load->view("front/email/user-onboarding-email-template", $insertdata, TRUE);
       
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
        $this->email->from("mwp@myweddingpalette.com", "My Wedding Palette");
        //$this->email->to($paymentdatabasic["vendor_email"]);
        $this->email->to($insertdata["email_id"]);

        $this->email->subject("🌟 Welcome to My Wedding Palette - Let's Paint Your Dream Wedding! 🌟");
        $this->email->message($message);
        //$this->email->send();
        if ($this->email->send()) {
            //echo $message;
            // header('Location:'.$payUrl) ;
        } else {
            echo $this->email->print_debugger();
            exit;
        }
    }

    public function registerclientmail($insertdata)
    {
        $message = $this->load->view("front/email/user-onboarding-client-email-template", $insertdata, TRUE);
       
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
        $this->email->from("mwp@myweddingpalette.com", "My Wedding Palette");
        //$this->email->to($paymentdatabasic["vendor_email"]);
        $this->email->to("mwp@myweddingpalette.com");

        $this->email->subject("Registration form lead");
        $this->email->message($message);
        //$this->email->send();
        if ($this->email->send()) {
            //echo $message;
            // header('Location:'.$payUrl) ;
        } else {
            echo $this->email->print_debugger();
            exit;
        }
    }


    public function checkemail()
    {
        $user_name = $this->input->post('username');
        $isValidLogin = $this->LoginModel->check_user_name($user_name);
      // var_dump($isValidLogin);exit;
       // Send a JSON response back to the client
       header('Content-Type: application/json');
       echo json_encode(array('isValidLogin' => $isValidLogin));
       // $count = count($exists);
        /*if ($count > 0) {
            $response = array("unique" => "1");
            echo json_encode($response);
        } else {
            $response = array("unique" => "0");
            echo json_encode($response);
        }*/
    }


    public function UserName_Validate()
    {
        $username = $this->input->post('user_name');

        if ($username !== '' && isset($username)) {
            return $this->LoginModel->ValidateUserName($username);
        }
    }
    
    /* function UserValidation(){
        $username = $this->input->post('username');
        $pwdname = $this->input->post('pwdname');
       //  exit;
       $isValidLogin = $this->LoginModel->UserValidation($username, $pwdname);
       // Send a JSON response back to the client
       header('Content-Type: application/json');
       echo json_encode(array('isValidLogin' => $isValidLogin));
   } */

    function UserEmailValid(){
         $username = $this->input->post('username');
        //  exit;
        $isValidLogin = $this->LoginModel->UserEmailValid($username);
        // Send a JSON response back to the client
        header('Content-Type: application/json');
        echo json_encode(array('isValidLogin' => $isValidLogin));
    }

    function pwdEmailValid(){
        $pwdname = $this->input->post('pwdname');
       //  exit;
       $isValidLogin = $this->LoginModel->pwdEmailValid($pwdname);
       // Send a JSON response back to the client
       header('Content-Type: application/json');
       echo json_encode(array('isValidLogin' => $isValidLogin));
   }
    
    function logout()
    {
        $this->session->sess_destroy();
        redirect('home');
    }
}
