<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VendorRecommendationPayment extends CI_Controller {

	 public function __construct() {
        parent::__construct();

        $this->load->model('VendorRecommendationModel');
        
    }
    public function index()
    {

       
         $pricedata = array(
                 "priceplan"=>$this->input->post("plan_price"),
                 "additionalcharge"=>$this->input->post("additional_charge"),
                 "planname"=>$this->input->post("plan_name"),
                  "is_logged_in" => TRUE
                 );

        $this->session->set_userdata($pricedata); 

        //$this->load->view('front/vendor-recommendation-form'); 
        //redirect('service/VendorRecommendation');
        redirect('VendorRecommendationPayment/showvendor');
        
    }




    

    public function showvendor()
    {
       $this->load->view('front/vendor-recommendation-form'); 
      
    }

    

    public function addvendor()
    {
        $data= array('userid' =>$this->input->post("userid"), 
                     'plan_price'   =>$this->input->post("plan_price"),
                     'plan_name'   =>$this->input->post("plan_name"),
                     'additional_charge'   =>$this->input->post("additional_charge"),
                     'first_name'=>$this->input->post("first_name"),
                     'last_name'=>$this->input->post("last_name"),
                     'email_id'=>$this->input->post("email_id"),
                     'phone_no'=>$this->input->post("phone_no"),
                     'venuecat'=>$this->input->post("venuecat"),
                     'bridalcat'=>$this->input->post("bridalcat"),
                     'groomcat'=>$this->input->post("groomcat"),
                     'photograph-cat'=>$this->input->post("photograph-cat"),
                     'mua-cat'=>$this->input->post("mua-cat"),
                     'mehendi-cat'=>$this->input->post("mehendi-cat"),
                     'decor_cat'=>$this->input->post("decor_cat"),
                     'gift-cat'=>$this->input->post("gift-cat"));
                     
                     
        //var_dump($data);exit;             
        $insert_id=$this->VendorRecommendationModel->addvendor_deatail($data);
        
        if (!empty($insert_id)) {
            $getpaymentdata=$this->VendorRecommendationModel->getvendor_deatail($insert_id);
           // var_dump($getpaymentdata);exit;
            $getpaydata= array(
                    'vendorid'=>strip_tags($getpaymentdata[0]["vendor_recommend_id"]),
                    'userid'     => strip_tags($getpaymentdata[0]["userid"]),  
                    'plan_name'=>strip_tags($getpaymentdata[0]["plan_name"]),
                    'first_name'=>strip_tags($getpaymentdata[0]["first_name"]),
                    'last_name'=>strip_tags($getpaymentdata[0]["last_name"]),
                    'email_id'=>strip_tags($getpaymentdata[0]["email_id"]),
                    'phone_no'=>strip_tags($getpaymentdata[0]["phone_no"]),
                    'plan_price'=>strip_tags($getpaymentdata[0]["plan_price"]),
                    'venuecat'=>$getpaymentdata[0]["venuecat"],
                    'bridalcat'=>$getpaymentdata[0]["bridalcat"],
                    'groomcat'=>$getpaymentdata[0]["groomcat"],
                    'photographcat'=>$getpaymentdata[0]["photograph-cat"],
                    'muacat'=>$getpaymentdata[0]["mua-cat"],
                    'mehendicat'=>$getpaymentdata[0]["mehendi-cat"],
                    'decorcat'=>$getpaymentdata[0]["decor_cat"],
                    'giftcat'=>$getpaymentdata[0]["gift-cat"]
                    ); 
             //var_dump($getpaydata);exit;
                
            $this->payvendorserviceplan($getpaymentdata, $getpaydata);
        }
        
    }



    public function payvendorserviceplan($getpaymentdata, $getpaydata)
    {
        if ($getpaymentdata[0]["additional_charge"]=="val199") {            
            $payamount=$getpaymentdata[0]["plan_price"]*2;
        }
        elseif($getpaymentdata[0]["additional_charge"]=="val499") {
            $payamount=$getpaymentdata[0]["plan_price"]* 2 ;
        }
        elseif($getpaymentdata[0]["additional_charge"]=="val799") {
            $payamount=$getpaymentdata[0]["plan_price"]*2;
        }
         elseif($getpaymentdata[0]["additional_charge"]=="val1199") {
            $payamount=$getpaymentdata[0]["plan_price"]*2;
        }
        else{
              $payamount=$getpaymentdata[0]["plan_price"];
           }

       

        //exit();

       $apiKey = '04105a99-7692-4b7b-a3f5-0f5b0906e733';
       $merchantId = 'MYWEDDINGONLINE';
       $order_id = uniqid(); 


       $amount=$payamount;
       //$amount=1;
       $date = date('Y-M-D');
       
  /*  $paymentData=array(
    'merchantId' => $merchantId,
    'merchantTransactionId' =>'PEPMI' .$date. time(),
    "merchantUserId"=>"MYWEDDINGONLINE",
    'amount' => $amount*100, // Amount in paisa (10 INR),
);*/
       $paymentData = array(
         'merchantId' => $merchantId,
         'merchantTransactionId' =>'PEPMI' .$date. time(),
         "merchantUserId"=>"MYWEDDINGONLINE",
         'amount' => $amount*100, // Amount in paisa (10 INR)
         'redirectUrl'=>"https://myweddingpalette.com/VendorRecommendationPayment/thankyou",
         'redirectMode'=>"POST",
         'callbackUrl'=>"https://myweddingpalette.com/VendorRecommendationPayment/thankyou",
         "merchantOrderId"=>$order_id,
         "mobileNumber"=>$getpaymentdata[0]["phone_no"],
         "message"=>"Vendor recommendation service payment",
         "email"=>$getpaymentdata[0]["email_id"],
         "shortName"=>$getpaymentdata[0]["first_name"],
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
           
           //var_dump($res);exit();
        if(isset($res->success) && $res->success=='1'){
                $paymentCode=$res->code;
                $paymentMsg=$res->message;
        
                $payUrl=$res->data->instrumentResponse->redirectInfo->url;
        
                $vendorData = array(
                     'vendorid'=>strip_tags($getpaymentdata[0]["vendor_recommend_id"]),
                     'userid'     => strip_tags($getpaymentdata[0]["userid"]),  
                     'merchant_transaction_id'     => strip_tags($paymentData["merchantTransactionId"]),
                     'payment_status'     => strip_tags($paymentCode),
                     'amount'     => strip_tags($payamount),
                     'merchant_order_id'     => strip_tags($paymentData["merchantOrderId"]),
                     'short_name'     => strip_tags($paymentData["shortName"]),
                     'plan_name'=>strip_tags($getpaymentdata[0]["plan_name"]),
                     'first_name'=>strip_tags($getpaymentdata[0]["first_name"]),
                     'last_name'=>strip_tags($getpaymentdata[0]["last_name"]),
                     'email_id'=>strip_tags($getpaymentdata[0]["email_id"]),
                     'phone_no'=>strip_tags($getpaymentdata[0]["phone_no"]),
                     'plan_price'=>strip_tags($getpaymentdata[0]["plan_price"]),
                     'venuecat'=>$getpaymentdata[0]["venuecat"],
                     'bridalcat'=>$getpaymentdata[0]["bridalcat"],
                     'groomcat'=>$getpaymentdata[0]["groomcat"],
                     'photographcat'=>$getpaymentdata[0]["photograph-cat"],
                     'muacat'=>$getpaymentdata[0]["mua-cat"],
                     'mehendicat'=>$getpaymentdata[0]["mehendi-cat"],
                     'decorcat'=>$getpaymentdata[0]["decor_cat"],
                     'giftcat'=>$getpaymentdata[0]["gift-cat"]
                     );       
 
                $insert =$this->VendorRecommendationModel->addvendor_payment_deatail($vendorData);
                header('Location:'.$payUrl) ;
         }
     
      }   

     
    }

     public function emailuser($getpaymentdata)
     {
            $message = $this->load->view("front/email/email-vendor-reccomendation-user",$getpaymentdata, TRUE);
           
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
             $this->email->to($getpaymentdata["email_id"]); 

             $this->email->subject("🌟 Welcome to My Wedding Palette 🌟");
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
        

    public function emailclient($paymentdatabasic){
        $message = $this->load->view("front/email/vendor-recommend-client-email",$paymentdatabasic, TRUE);
          
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
           // $this->email->to('pranotimote100@gmail.com');

             $this->email->subject("Vendor Reccomendation Service Lead");
             $this->email->message($message);  
            if ($this->email->send()) 
            {
                 //echo $message;
                // header('Location:'.$payUrl) ;
            } 
            else 
            {
                   echo $this->email->print_debugger();
                   exit;
            }
        }
        
        
        
        
        public function failedpaymentemailclient($payarray){
       
        $message = $this->load->view("front/email/vendor-recommend-client-email",$payarray, TRUE);
          
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
           

             $this->email->subject("Vendor Reccomendation Service Lead");
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
 
    



    public function thankyou()
    {
       
         $data = $this->input->post();
         
        
         $getpaydata=$this->VendorRecommendationModel->getvendorpaymentdata($data["transactionId"]);
         
         
         $paymentstatus=array("payment_status"=>$data["code"]);
         $updatestatus=$this->VendorRecommendationModel->updatepaymentstatus($data["transactionId"],$paymentstatus);
         
         $paymentdatabasic=$this->VendorRecommendationModel->getuserinfo($getpaydata["vendorid"]);
       
         if($data["code"]=="PAYMENT_SUCCESS")
         {
             
              $session_data = array(
                'firstname' =>$paymentdatabasic["first_name"],
                'lastname' => $paymentdatabasic["last_name"],
                'email' => $paymentdatabasic["email_id"],
                'userid' => $paymentdatabasic["	userid"],
                'phoneno' =>  $paymentdatabasic["phone_no"],
                'logged_in' => TRUE
            );
            
            $this->session->set_userdata($session_data);         
            $this->emailuser($getpaydata);
            $this->emailclient($paymentdatabasic);
            $this->load->view('front/thank-you');   
         }
         else{
                 $payarray=array_merge($paymentdatabasic,$data);
                
                 $this->failedpaymentemailclient($payarray);
                 redirect('thankyou/paymentfailed');
         }
        
        
    }
 }

?>