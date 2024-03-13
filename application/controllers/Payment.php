<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Payment extends CI_Controller {

    public function __construct() {
        parent::__construct();
        $this->load->library('session');
        
    }

    public function index() {
        //$data['amount'] = 100;
        $this->load->view('front/payment-form');
    }

    public function process() {
        
        
        $amount = $this->input->post('amount');
        $date = date('Y-M-D');
       $arinarray = [
    "merchantId" => "PGTESTPAYUAT",
    "merchantTransactionId" => 'PEPMI' .$date. time(),
    "merchantUserId"=>'PEUI'.$date . time(),
    "amount" => $amount*100 , 
    "redirectUrl"=>"https://myweddingpalette.com/success",
    "redirectMode"=>"POST",
    "callbackUrl"=>"https://myweddingpalette.com/",
    "merchantOrderId"=> "015",
    "mobileNumber"=> "9518595869",
     "paymentInstrument"=> array(    
      "type"=> "PAY_PAGE",
    )
];

$encode = json_encode($arinarray);
$encoded = base64_encode($encode);
$key = '099eb0cd-02cf-4e2a-8aca-3e6c6aff0399'; // KEY
$key_index = 1; // KEY_INDEX
$string = $encoded . "/pg/v1/pay".$key;
$sha256 = hash("sha256", $string);
$final_x_header = $sha256 . '###'.$key_index;

$url = "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay"; // <PRODUCTION URL>

//$url = "https://api-preprod.phonepe.com/apis/pg-sandbox/pg/v1/pay"; // <TESTING URL>

$headers = array(
    "Content-Type: application/json",
    "accept: application/json",
    "X-VERIFY: " . $final_x_header,
);

$data = json_encode(['request' => $encoded]);

$curl = curl_init($url);

curl_setopt($curl, CURLOPT_URL, $url);
curl_setopt($curl, CURLOPT_POST, true);
curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
curl_setopt($curl, CURLOPT_HTTPHEADER, $headers);
curl_setopt($curl, CURLOPT_POSTFIELDS, $data);

$resp = curl_exec($curl);

curl_close($curl);

$response = json_decode($resp);
      
//$responseData = json_decode($response, true);    
       
        //var_dump($responseData);exit();
        /*if ($response['status'] == 'success') {
        
            redirect('front/payment/success');
        } else {
            redirect('front/payment/failure');
        }*/
        header('Location:' . $response->data->instrumentResponse->redirectInfo ->url);
        
       /* if ($response['status'] == 'success') {
        
            redirect('front/payment/success');
        } else {
            redirect('front/payment/failure');
        }*/
    }
    
    
    public function checkout(){
       $apiKey = '04105a99-7692-4b7b-a3f5-0f5b0906e733';
       $merchantId = 'MYWEDDINGONLINE';
       $order_id = uniqid(); 
       $amount=$this->input->post("amount");
       $date = date('Y-M-D');
       $paymentData = array(
         'merchantId' => $merchantId,
         'merchantTransactionId' =>'PEPMI' .$date. time(),
         "merchantUserId"=>"MUID123",
         'amount' => $amount*100, // Amount in paisa (10 INR)
         'redirectUrl'=>"https://myweddingpalette.com/payment/success",
         'redirectMode'=>"POST",
         'callbackUrl'=>"https://myweddingpalette.com/payment/success",
         "merchantOrderId"=>$order_id,
         "mobileNumber"=>"9518595869",
         "message"=>"Order description",
         "email"=>"pranotimote100@gmail.com",
         "shortName"=>"Pranoti Mote",
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
       /*  echo $response;
          print_r($paymentData);*/
        curl_close($curl);
         
        if ($err) {
          echo "cURL Error #:" . $err;
        } else {
           $res = json_decode($response);
         
        if(isset($res->success) && $res->success=='1'){
        $paymentCode=$res->code;
        $paymentMsg=$res->message;
        $payUrl=$res->data->instrumentResponse->redirectInfo->url;
         
        header('Location:'.$payUrl) ;
       }

        }   
       
       
       
    }

    public function success() {
        $this->load->view('front/payment-sucess');
    }

    public function failure() {
        $this->load->view('front/payment-failed');
    }
    
    
    

}
?>