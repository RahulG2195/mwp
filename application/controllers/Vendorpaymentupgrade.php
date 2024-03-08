<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Vendorpaymentupgrade extends CI_Controller {

	public function __construct() {
		parent::__construct();
		$this->load->model('admin/CategoryModel');
        $this->load->model('admin/SubCategoryModel');
        $this->load->model('admin/CityModel');
        $this->load->model('VendorModel');
       
    }
    public function index()
    {
        $this->load->view('front/pages/vendor-payment');
    }

    public function payment()
    {
      // echo "<pre>";
      // print_r($_POST);
      // exit;
      // $spam_validation = $this->input->post("vendor-listing-data"); 
      
      //  if($spam_validation === '' && $_POST['g-recaptcha-response'])
      //   {
            // $secretKey = '6Leb2VkpAAAAAIbKHE1Xw1EGtBMGYxe5RNIazELa';
            // $resp = $_POST['g-recaptcha-response'];
            // $ip = $_SERVER['REMOTE_ADDR'];
            // $url = "https://www.google.com/recaptcha/api/siteverify?secret=$secretKey&response=$resp&remoteip=$ip";
            // $file = file_get_contents($url);
            // echo $file;
            // $res = json_decode($file);
            // if($res->success == true)
            // {
                // $last_id = $this->VendorModel->Get_last_Vendor_id();
                // $vendor_uid = $last_id['vendor_uid'] + 1;
                $vendor_uid = $this->session->userdata('dv_id');
                $plan_name = $this->input->post('plan_name');
                // $category = $this->input->post('category');
                // $vendorData = array(
                //   'vendor_uid' => $vendor_uid,
                //   'vendor_seo_url' => strtolower(preg_replace('/[^a-zA-Z0-9]+/', '-', str_replace(' ', '-', $this->input->post('vendor_name')))),
                //   'vendor_name'     => strip_tags($this->input->post('vendor_name')),  
                //   'vendor_email'     => strip_tags($this->input->post('vendor_email')),
                //   'phone_no'     => strip_tags($this->input->post('phone_no')),
                //   'user_name'     => strip_tags($this->input->post('username')),
                //   'password'     => strip_tags(md5($this->input->post('vendor_password'))),
                //   'city'=>strip_tags($this->input->post('city')),
                //   'category'=>strip_tags($this->input->post('category'))); 
                // $insert_id =  $this->VendorModel->insert_vendor($vendorData);

                // if (!empty($insert_id)) {
          
                    $paymentdatabasic = array(
                            //  'vendor_id' => $insert_id,
                             'vendor_id' => $vendor_uid,
                              'vendor_uid' => $vendor_uid,
                             'plan_name'=>strip_tags($this->input->post('plan_name')),
                             'plan_type'=>strip_tags($this->input->post('plan_type')),
                             'amount'=>round(strip_tags($this->input->post('amount'))),
                             'vendor_name'=> strip_tags($this->input->post('vendor_name')),  
                             'vendor_email'=> strip_tags($this->input->post('vendor_email')),
                             'phone_no'     => strip_tags($this->input->post('phone_no')),
                             'user_name'     => strip_tags($this->input->post('username')),
                             'expire_date'     => strip_tags($this->input->post('expire_date'))
                            //  'city'     => strip_tags($this->input->post('city')),
                            //  'category'     => strip_tags($this->input->post('category')),
                        //  'password'     => strip_tags(md5($this->input->post('vendor_password')))
                        );

                        // print_r($paymentdatabasic);
                        // exit;
                        
                        if (strtolower($paymentdatabasic["plan_name"])=="palette express") 
                        {

                          // $payUrl=base_url() . "Vendor/Vendor_Form?uid=$insert_id";
                          $payUrl=base_url() . "vendor-dashboard/plan/$vendor_uid";
                          $this->emailvendor($paymentdatabasic,$payUrl);
                          $this->emailclientfree($paymentdatabasic,$payUrl);
                          redirect($payUrl);
                       }
                       else{
                            $this->paymentcheckout($paymentdatabasic);
                        }
                  
              //  }
              //  else{
              //       $data['error_msg'] = 'Payment process failed, please try again.';
              //  }
                  
            // }
            // else
            // {
            //        echo '<script>alert("Captcha required"); window.location.href = "https://myweddingpalette.com/Vendor/vendor_pricing_plan"</script>';   
            // }
            
            
        // }
        // else{
        //     echo '<script>alert("Captcha required"); window.location.href = "https://myweddingpalette.com/Vendor/vendor_pricing_plan"</script>';
        // }
     
         	     
       
    }
  

    public function paymentcheckout($paymentdatabasic)
    {
    
       $apiKey = '04105a99-7692-4b7b-a3f5-0f5b0906e733';
       $merchantId = 'MYWEDDINGONLINE';
       $order_id = uniqid(); 
       $amount=$paymentdatabasic["amount"];
       $date = date('Y-M-D');
       $paymentData = array(
         'merchantId' => $merchantId,
         'merchantTransactionId' =>'PEPMIU' .$date. time(),
         "merchantUserId"=>"MYWEDDINGONLINE",
         'amount' => $amount*100, // Amount in paisa (10 INR)
         'redirectUrl'=>base_url() . "vendor-dashboard/plan/" . $paymentdatabasic['vendor_id'] . '&redirect=rurl',
         'redirectMode'=>"POST",
         'callbackUrl'=>base_url() . "vendor-dashboard/plan/" . $paymentdatabasic['vendor_id'] . '&redirect=curl',
         "merchantOrderId"=>$order_id,
         "mobileNumber"=>$paymentdatabasic["phone_no"],
         "message"=>"Order description",
         "email"=>$paymentdatabasic["vendor_email"],
         "shortName"=>$paymentdatabasic["vendor_name"],
         "paymentInstrument"=> array( "type"=> "PAY_PAGE",));
       
         $jsonencode = json_encode($paymentData);
         $payloadMain = base64_encode($jsonencode);
         
         $salt_index = 1; //key index 1
         $payload = $payloadMain . "/pg/v1/pay" . $apiKey;
         $sha256 = hash("sha256", $payload);
         $final_x_header = $sha256 . '###' . $salt_index;
         $request = json_encode(array('request'=>$payloadMain));
         
            $curl = curl_init();
            curl_setopt_array($curl, [
              CURLOPT_URL => "https://api.phonepe.com/apis/hermes/pg/v1/pay",
              CURLOPT_RETURNTRANSFER => true,
              CURLOPT_ENCODING => "",
              CURLOPT_MAXREDIRS => 10,
              CURLOPT_TIMEOUT => 30,
              CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
              CURLOPT_CUSTOMREQUEST => "POST",
              CURLOPT_POSTFIELDS => $request,
              CURLOPT_HTTPHEADER => [
                "Content-Type: application/json",
                 "X-VERIFY: " . $final_x_header,
                 "accept: application/json"
              ],
            ]);
        $response = curl_exec($curl);
        $err = curl_error($curl);
   
        curl_close($curl);
         
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
           $res = json_decode($response);
        
        if(isset($res->success) && $res->success=='1'){
        $paymentCode=$res->code;
        $paymentMsg=$res->message;
        
        $payUrl=$res->data->instrumentResponse->redirectInfo->url;
        
          $vendorData = array(
                    'vendor_id'     => strip_tags($paymentdatabasic["vendor_id"]),  
                    'merchant_transaction_id'     => strip_tags($paymentData["merchantTransactionId"]),
                    'amount'     => strip_tags($amount),
                    'merchant_order_id'     => strip_tags($paymentData["merchantOrderId"]),
                    'short_name'     => strip_tags($paymentData["shortName"]),
                    'plan_name'=>strip_tags($paymentdatabasic["plan_name"]),
                    'plan_type'=>strip_tags($paymentdatabasic["plan_type"]),
                    'is_upgrade'=> '1', //new default 0
                    'expire_date'=> strip_tags($paymentdatabasic["expire_date"]), //new from 90 or 365 days from today. 
                    'created_date'=> strip_tags(date('Y-m-d H:i:s', strtotime("+0 days"))) //new added today date.
                    );       

            $insert =$this->VendorModel->insert_vendorpayment($vendorData, $paymentdatabasic["vendor_id"]);
        
       }
       header('Location:'.$payUrl) ;
       $this->emailvendor($paymentdatabasic,$payUrl);
       $this->emailclient($paymentdatabasic,$vendorData);
        
      }   

    }

    public function emailvendor($paymentdatabasic,$payUrl)
    {
        if (strtolower($paymentdatabasic["plan_name"])=="palette pro") 
        {
           $message = $this->load->view("front/email/email-template",$paymentdatabasic, TRUE);
            
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
             $this->email->to($paymentdatabasic["vendor_email"]); 

             $this->email->subject("🌟 Welcome to My Wedding Palette - Let's Shine in the Spotlight! 🌟");
             $this->email->message($message);  
            if ($this->email->send()) 
            {
                 //echo $message;
                header('Location:'.$payUrl) ;
            } 
            else 
            {
                   echo $this->email->print_debugger();
                   exit;
            }
        }
        elseif (strtolower($paymentdatabasic["plan_name"])=="palette elite") {
             
             $message = $this->load->view("front/email/email-template-palette-elite",$paymentdatabasic, TRUE);
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

             $this->email->subject("🌟 Welcome to My Wedding Palette - Get Ready to Elevate Your Business! 🌟");
             $this->email->message($message);  
              if ($this->email->send()) 
              {    
                  // echo $message;
                   header('Location:'.$payUrl) ;
              } 
              else 
              {
                     echo $this->email->print_debugger();
                     exit;
              }
              
             
        }
        else
        {
            //  var_dump($paymentdatabasic);exit;
             
             $message = $this->load->view("front/email/email-template-palette-express",$paymentdatabasic, TRUE);
             
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
             $this->email->to($paymentdatabasic["vendor_email"]); 
             $this->email->subject("🎉 Welcome to My Wedding Palette - You're on the Express Route! 🎉");
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
        
    }
    
    
    public function emailclient($paymentdatabasic,$vendorData)
    {
         $merged_arr = array_merge($paymentdatabasic,$vendorData);
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
       $this->email->from($paymentdatabasic["vendor_email"]);
        $this->email->to("mwp@myweddingpalette.com"); 


        $message = $this->load->view("front/email/vendor-payment-client",$merged_arr, TRUE);
        $this->email->subject("Venodor payment details");
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
    
    public function emailclientfree($paymentdatabasic,$payUrl)
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
        $this->email->from($paymentdatabasic["vendor_email"]);
        $this->email->to("mwp@myweddingpalette.com"); 


        $message = $this->load->view("front/email/vendor-payment-client-free",$paymentdatabasic, TRUE);
        $this->email->subject("Venodor payment details");
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



 }
?>
