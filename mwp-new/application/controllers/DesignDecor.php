<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class DesignDecor extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->model('Designdecor_Model');
        
    }
    
    public function designdecorpayment()
    {

       if(empty($this->input->post("decoration_type")))
       {
           $decoration="";
       }
       else{
           $decoration=implode(",",$this->input->post("decoration_type"));
       }
       $ocassion=implode(",",$this->input->post("decoration_ocassion"));
       $venue=implode(",",$this->input->post("venue_type"));
       
       $files = $_FILES;
       $count = count($_FILES['venue_image']['name']);
               for($i=0; $i<$count; $i++)
                {
                $_FILES['venue_image']['name']= $files['venue_image']['name'][$i];
                $_FILES['venue_image']['type']= $files['venue_image']['type'][$i];
                $_FILES['venue_image']['tmp_name']= $files['venue_image']['tmp_name'][$i];
                $_FILES['venue_image']['error']= $files['venue_image']['error'][$i];
                $_FILES['venue_image']['size']= $files['venue_image']['size'][$i];
                
                $config = array();
                $config['upload_path'] = './uploads/decorvenueimage'; //give the path to upload the image in folder
                $config['remove_spaces']=TRUE;
                $config['encrypt_name'] = FALSE; // for encrypting the name
                $config['allowed_types'] = 'gif|jpg|png';
                $config['overwrite'] = FALSE;


                $this->load->library('upload', $config);
                $this->upload->initialize($config);

                //$this->upload->initialize($this->set_upload_options());//function defination below
                $this->upload->do_upload('venue_image');
                
                $upload_data = $this->upload->data();
                $name_array[] = $upload_data['file_name'];
                $fileName = $upload_data['file_name'];
                $images[] = $fileName;

                }
              
               $fileName = $images;
               $imagedata=implode(",", $fileName);


        
        
        $data= array(
                     'user_id' =>$this->input->post("user_id"), 
                     'first_name' =>$this->input->post("first_name"), 
                     'last_name' =>$this->input->post("last_name"), 
                     'email_id'   =>$this->input->post("emailid"),
                     'phoneno'   =>$this->input->post("phoneno"),
                     'decoration_budget'=>$this->input->post("decoration_budget"),
                     'venue_name'=>$this->input->post("venue_name"),
                     'decoration_occassion'=>$ocassion,
                     'venue_type'=>$venue,
                     'city'=>$this->input->post("city_name"),
                     'decoration_type'=>$decoration,
                     'theme_color'=>$this->input->post("theme_color"),
                     'outfit_color'=>$this->input->post("outfit_color"),
                     'colour_blend'=>$this->input->post("colour_blend"),
                     'decorplanname'=>$this->input->post("decorplanname"),
                     'decorplanprice'=>$this->input->post("decorplanprice"),
                     'venue_image'=>$imagedata,
                     'decorcomment'=>$this->input->post("decorcomments")
                     );
                     
       // var_dump($data);exit();             
        $insert_id=$this->Designdecor_Model->InserData($data);
        
        if ($insert_id) {
        
                             
             $paymentdatabasic = array(
                             'design-decor-id' => $insert_id,
                             'user_id' =>$this->input->post("user_id"), 
                             'first_name' =>$this->input->post("first_name"), 
                             'last_name' =>$this->input->post("last_name"), 
                             'email_id'   =>$this->input->post("emailid"),
                             'phoneno'   =>$this->input->post("phoneno"),
                             'decoration_budget'=>$this->input->post("decoration_budget"),
                             'venue_name'=>$this->input->post("venue_name"),
                             'decoration_occassion'=>$ocassion,
                             'venue_type'=>$venue,
                             'city'=>$this->input->post("city_name"),
                             'decoration_type'=>$decoration,
                             'theme_color'=>$this->input->post("theme_color"),
                             'outfit_color'=>$this->input->post("outfit_color"),
                             'colour_blend'=>$this->input->post("colour_blend"),
                             'decorplanname'=>$this->input->post("decorplanname"),
                             'decorplanprice'=>$this->input->post("decorplanprice"),
                             'venue_image'=>$imagedata,
                             'decorcomment'=>$this->input->post("decorcomments"));                 
           $this->decorpayment($paymentdatabasic);
        }
        else{
                $data['error_msg'] = 'Payment process failed, please try again.';
            }
    }



    public function decorpayment($paymentdatabasic)
    {
       $apiKey = '04105a99-7692-4b7b-a3f5-0f5b0906e733';
       $merchantId = 'MYWEDDINGONLINE';
       $order_id = uniqid(); 
       $amount=$paymentdatabasic["decorplanprice"];
       //$amount=1;
       $date = date('Y-M-D');
       $paymentData = array(
         'merchantId' => $merchantId,
         'merchantTransactionId' =>'PEPMI' .$date. time(),
         "merchantUserId"=>"MYWEDDINGONLINE",
         'amount' => $amount*100, // Amount in paisa (10 INR)
         'redirectUrl'=>base_url() . "DesignDecor/thankyou",
         'redirectMode'=>"POST",
         'callbackUrl'=>base_url() . "DesignDecor/thankyou",
         "merchantOrderId"=>$order_id,
         "mobileNumber"=>$paymentdatabasic["phoneno"],
         "message"=>"Design decor payment",
         "email"=>$paymentdatabasic["emailid"],
          "shortName"=>$paymentdatabasic["first_name"]." ".$paymentdatabasic["last_name"],
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
         
       
    if(isset($res->success) && $res->success=='1')
        {
            $paymentCode=$res->code;
            $paymentMsg=$res->message;
            $decorpaymentdata = array(
                        'design_decor_user_id'=> strip_tags($paymentdatabasic["design-decor-id"]),  
                        'merchant_transaction_id'=> strip_tags($paymentData["merchantTransactionId"]),
                        'payment_status'     => strip_tags($paymentCode),
                        'plan_price'=> strip_tags($amount),
                        'merchant_order_id'=> strip_tags($paymentData["merchantOrderId"]),
                        'short_name'    => strip_tags($paymentData["shortName"]),
                        'decorplanname'=>strip_tags($paymentdatabasic["decorplanname"]),
                        );       
    
            $insert=$this->Designdecor_Model->insert_decorpayment($decorpaymentdata);
            $payUrl=$res->data->instrumentResponse->redirectInfo->url;
          
            header('Location:'.$payUrl) ;
        }
    
  


 }
}

public function emailuser($paymentdatabasic,$url)
  {
         $message = $this->load->view("front/email/decor-email-template",$paymentdatabasic, TRUE);
   
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
       $this->email->to($paymentdatabasic["email_id"]);
       //$this->email->to("pranoti@crezvatic.com"); 

       $this->email->subject("🌟 Welcome to My Wedding Palette - Let's Shine in the Spotlight! 🌟");
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


  public function email_client($paymentdatabasic)
  {
      $message = $this->load->view("front/email/design-decor-email-client",['paymentdatabasic' => $paymentdatabasic], TRUE);
      
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
       $this->email->subject("Design decor service plan lead");
       $this->email->message($message); 
       $this->email->attach('https://myweddingpalette.com/uploads/decorvenueimage'.$paymentdatabasic["venue_image"]);
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

  public function thankyou()
    {
          $data = $this->input->post();
   
         $paymentdata=$this->Designdecor_Model->getdesignpaymentdata($data["transactionId"]);
         
         $paymentstatus=array("payment_status"=>$data["code"]);
         $updatestatus=$this->Designdecor_Model->updatepaymentstatus($data["transactionId"],$paymentstatus);
         
         $paymentdatabasic=$this->Designdecor_Model->getuserinfo($paymentdata["design_decor_user_id"]);
       
         if($data["code"]=="PAYMENT_SUCCESS")
         {
        
            $session_data = array(
                'firstname' =>  $paymentdatabasic["first_name"],
                'lastname' =>  $paymentdatabasic["last_name"],
                'email' =>   $paymentdatabasic["email_id"],
                'userid' =>   $paymentdatabasic["user_id"],
                'phoneno' =>   $paymentdatabasic["phoneno"],
                'logged_in' => TRUE);   
            $this->session->set_userdata($session_data);   
            
            //var_dump($session_data);exit();
            
                 
            $this->emailuser($paymentdatabasic,$paymentData["redirectUrl"]);
            $this->email_client($paymentdatabasic,$paymentdata);
            //redirect('Design_Decor_Service_Plan/thankyou?uid='.$paymentdata["design_decor_user_id"]);
            $this->load->view('front/thank-you');   
         }
         else{
             
             redirect('thankyou/paymentfailed');
            
         }
         
       
    }
    
    
     




}

?>