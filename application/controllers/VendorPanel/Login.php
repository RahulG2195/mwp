<?php

defined('BASEPATH') or exit('No direct script access allowed');

class Login extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('VendorPanel/LoginModel');
        
    }

    public function index()
    {
        if ($this->session->userdata('dv_id')) {
            redirect('vendor-dashboard');
        }
        $forgot_source = $this->input->get('forgot_source', TRUE);
        // $msg = $this->uid = $this->input->get('msg', TRUE);
        // if(empty($forgot_source)){
        //     echo "not found ".$msg;
        // }else{
        //     echo "found ".$msg;
        // }

        if ($this->input->post()) {
            $this->form_validation->set_rules('Username', 'Username', 'required|trim');
            $this->form_validation->set_rules('Password', 'Password', 'required|trim');

            if ($this->form_validation->run() == TRUE) {
                $username = $this->input->post("Username");
                $password = md5($this->input->post("Password"));

                $data["password"] = $this->LoginModel->getpassword($username);
                // pr($data["password"], '');exit;

                if ($data["password"][0]["password"] == $password) {

                    $result["user"] = $this->LoginModel->getlogindata($username, $password);

                    if (!empty($result)) {
//                        echo "<pre>";
//                        print_r($result);
//                        exit;
                        $this->session->set_userdata('user_name', $result["user"]["user_name"]);
                        $this->session->set_userdata('dv_id', $result["user"]["dv_id"]);
						$this->session->set_userdata('comp_logo', $result["user"]["comp_logo"]);
						$this->session->set_userdata('vendor_name', $result["user"]["vendor_name"]);
						$this->session->set_userdata('category_name', $result["user"]["category_name"]);
                        // $this->session->set_userdata('role', $result["user"]["role"]);

                        redirect('vendor-dashboard');
                    } else {

                        $this->session->set_flashdata('err_msg', 'Invalid Credentials');

                        $this->load->view('VendorPanel/login');
                    }
                }else{
                    $this->session->set_flashdata('err_msg', 'Please Enter Valid Password');
                    $this->load->view('VendorPanel/login');
                }
            } else {
                $this->session->set_flashdata('err_msg', 'Someting Went wrong');
                $this->load->view('VendorPanel/login');
            }
        } else {
            $this->load->view('VendorPanel/login');
        }
        // $this->load->view('admin/login');
    }

    public function forgot_password()
    {
        if ($this->session->userdata('dv_id')) {
            redirect('vendor-dashboard');
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('Email', 'Email', 'required|trim');
            // $this->form_validation->set_rules('Password', 'Password', 'required|trim');

            if ($this->form_validation->run() == TRUE) {
                $email = $this->input->post("Email");
                // $password = md5($this->input->post("Password"));

                $vdata = $this->LoginModel->getforgotdata($email);
                $dv_id = $vdata['dv_id'];
                //echo "<pre>";
                //echo "shankar";
                //print_r($vdata);
                //exit;
                // echo "dv_id ".$data['dv_id'];

                if (!empty($vdata)) {
                                         //update existing rows forgot data in table
                    $data = array(
                        'is_active' => 0
                    );
                    $ids = $this->LoginModel->updateforgotstatus(array('vendor_id' => $dv_id ,'is_active' => 1),$data);
                    //  echo "ids ".$ids;

                    //md5 encrypt md5 and hash
                     $dv_id_md5 = md5($dv_id);
                    //generate random four digit otp
                    $maxlength = 4;
                    $chary = array("0", "1", "2", "3", "4", "5", "6", "7", "8", "9");
                    $otp = "";
                    for ( $x=1; $x<=$maxlength; $x++ ) {
                        $otp .= $chary[rand(0, count($chary)-1)];
                    }
                    $this->load->helper('date');
                    date_default_timezone_set('Asia/Kolkata');
                    $current_datetime = now();
                    $created_date = mdate('%Y-%m-%d %H:%i:%s', $current_datetime);
                    //insert forgot data in table
                    $data = array(
                        'vendor_id' => $dv_id,
                        'page_url' =>$dv_id_md5, //md5 encrypt md5 and hash
                        'otp' => $otp, //generate random four digit otp
                        'created_date' => $created_date //generate random four digit otp
                    );
                    // print_r($data);
                    // exit;
                    $id = $this->LoginModel->addforgotdata($data);
                    //send link & otp mail here

                    $forgotdatabasic = array(
                        'vendor_id' => $dv_id,
                        'vendor_name' => strip_tags($vdata['user_name']),  
                        'vendor_email' => strip_tags($vdata['vendor_email']),
                        'page_url' => strip_tags($dv_id_md5),
                        'otp' => $otp
                   );

                    $this->emailclientfree($forgotdatabasic);

                    // echo "id ".$id;
                    //  exit;
                        $this->session->set_flashdata('success_msg', 'Mail has been sent Link & OTP. Please check.');
                        redirect('Vendor-Login?forgot_source='.$dv_id_md5);
                    // }
                }else{
                    $this->session->set_flashdata('err_msg', 'Please Enter Valid Email');
                    $this->load->view('VendorPanel/login');
                }
            } else {
                $this->session->set_flashdata('err_msg', 'Someting Went wrong');
                $this->load->view('VendorPanel/login');
            }
        } else {
            $this->load->view('VendorPanel/login');
        }
        // $this->load->view('admin/login');
    }

    public function test_forgot_templete(){
        $forgotdatabasic = array(
            'vendor_id' => '28922',
            'vendor_name' => 'Rahul21',  
            'vendor_email' => 'kytiw@mailinator.com',
            'page_url' => md5('28922'),
            'otp' => '2223'
       );

        $this->emailclientfree($forgotdatabasic);
    }

    public function emailclientfree($forgotdatabasic)
    {
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
        $this->email->from($forgotdatabasic["vendor_email"]);
        $this->email->to("mwp@myweddingpalette.com"); 


        //$this->load->view("front/email/vendor-forgot-password",$forgotdatabasic);
        $message = $this->load->view("front/email/vendor-forgot-password",$forgotdatabasic, TRUE); //change template
        $this->email->subject("Venodor forgot password");
        $this->email->message($message);  
        if ($this->email->send()) 
        {
           
        } 
        else 
        {
               echo $this->email->print_debugger();
               exit;
        }

    }

    public function forgot_update_password()
    {
        if ($this->session->userdata('dv_id')) {
            redirect('vendor-dashboard');
        }

        if ($this->input->post()) {
            $this->form_validation->set_rules('Otp', 'Otp', 'required|trim');
            $this->form_validation->set_rules('Npassword', 'Npassword', 'required|trim');
            $this->form_validation->set_rules('Cpassword', 'Cpassword', 'required|trim');
            // $this->form_validation->set_rules('forgot_source', 'forgot_source', 'required|trim');
            

            if ($this->form_validation->run() == TRUE) {
                $otp = $this->input->post("Otp");
                $n_password = $this->input->post("Npassword");
                $c_password = $this->input->post("Cpassword");
                $forgot_source = $this->input->post("forgot_source");
                // echo "sa ".$forgot_source;
                $data = $this->LoginModel->validateforgotlink($forgot_source);
                $vendor_id = $data['vendor_id'];
                // echo "<pre>";
                // echo "shankar";
                // print_r($data);
                // exit;
                // echo "dv_id ".$data['dv_id'];

                if (!empty($data)) {
                    if($data['otp'] === $otp){
                        //  echo "password match";
                        //  exit;
                      if($n_password === $c_password){
                        // echo "password match";
                   
                    
                    // exit;

                    // $data = $this->LoginModel->validateforgotlink($forgot_source);
                    // $dv_id = $data['vendor_id'];
                    //update existing rows forgot data in table
                    $data = array(
                        'is_active' => 2
                    );
                    $ids = $this->LoginModel->updateforgotstatus(array('page_url' => $forgot_source ,'otp' => $otp,'is_active' => 1),$data);
                    //  echo "ids ".$ids;

                    //valiate vendor vin data
                    $data = $this->LoginModel->getforgotdvid($vendor_id);
                        if (!empty($data)) {
                        $dv_id = $data['dv_id'];
                        // echo "<pre>";
                        // echo "shankar";
                        // print_r($data);
                        // exit;
                        // update new password in vin tabale
                        $data = array('password' => md5($n_password));
                        // print_r($data);
                        // exit;
                        $pwd_update = $this->LoginModel->ResetPassword($dv_id, $data);
                    // echo $pwd_update;
                    // exit;
                        if($pwd_update){

                        $this->session->set_flashdata('success_msg', 'Password has been Reset. Please login again.');
                        $this->session->unset_userdata('dv_id');
                        redirect('Vendor-Login');

                    }else{

                        $this->session->set_flashdata('err_msg', 'Something went wrong');
                        redirect('Vendor-Login');

                    }


                    // echo "id ".$id;
                    //  exit;
                        $this->session->set_flashdata('success_msg', 'New Password added successfiiy.');
                        redirect('Vendor-Login');
                    // }
                 }else{
                        $this->session->set_flashdata('success_msg', 'Vendor not found.');
                        redirect('Vendor-Login?forgot_source='.$forgot_source);
                    }
                     }else{
                        $this->session->set_flashdata('success_msg', 'Password not match.');
                        redirect('Vendor-Login?forgot_source='.$forgot_source);
                    }

                     }else{
                        $this->session->set_flashdata('success_msg', 'Invalid Otp.');
                        redirect('Vendor-Login?forgot_source='.$forgot_source);
                    }

                }else{
                    //imp not display when redirect
                      $this->session->set_flashdata('success_msg', 'Invalid Link.');
                        redirect('Vendor-Login?forgot_source='.$forgot_source);
                }
            } else {
                $this->session->set_flashdata('err_msg', 'Someting Went wrong');
                $this->load->view('VendorPanel/login');
            }
        } else {
            $this->load->view('VendorPanel/login');
        }
        // $this->load->view('admin/login');
    }

    public function update_password_page(){
        $this->load->view('VendorPanel/resetpassword');
    }

    public function ResetPwd(){

        $id = $this->input->post('ven_id');
        $Password = $this->input->post('Password');
        $cPassword = $this->input->post('cPassword');
        // if id is avail then only it will reset 
        if(isset($id) && $id !== ''){
            // match password and cpassword 
            if($Password === $cPassword){

                $data = array('password' => md5($Password));

                $pwd_update = $this->LoginModel->ResetPassword($id, $data);
                // echo $pwd_update;exit;
                if($pwd_update){

                    $this->session->set_flashdata('success_msg', 'Password has been Reset. Please login again.');
                    $this->session->unset_userdata('dv_id');
                    redirect('Vendor-Login');

                }else{

                    $this->session->set_flashdata('err_msg', 'Something went wrong');
                    redirect('VendorPanel/Login/update_password_page');

                }
            }else{

                $this->session->set_flashdata('err_msg', 'Password doest Match');
                redirect('VendorPanel/Login/update_password_page');

            }

        }else{

            $this->session->set_flashdata('err_msg', 'There was an issue! You may have logout, please login again to reset password');
            $this->load->view('Vendor-Login');

        }

    }
    public function logout()
    {
        // echo 1;exit;
        $this->session->sess_destroy();

        redirect('Vendor-Login');
    }
}
