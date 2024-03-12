<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class VendorQuery extends CI_Controller {

	  public function __construct() {
        parent::__construct();
        $this->load->model('VendorQueryModel');
        $this->load->model('VendorModel');
        
    }
   
     public function vendorquerynewsubmit()
    {
        $is_paid_vendor = $this->input->post("is_paid_vendor");
        $category = $this->input->post("category");

        $insert_data = array();
        $insert_data['is_paid_vendor']=$this->input->post("is_paid_vendor");
        $insert_data['cat_id']=$this->input->post("category");
        $insert_data['vendor_id']=$this->input->post("vendor_id");
        if($is_paid_vendor){
            //common fields 
            $insert_data['name']=$this->input->post("name");
            $insert_data['phone_no']=$this->input->post("phone_no");
            $insert_data['email']=$this->input->post("email");
            $insert_data['function_date']=$this->input->post("function_date");
            switch ($category) {
                case 1:
                    $insert_data['venue_type']=$this->input->post("venue_type");
                    $insert_data['venue_guest_count']=$this->input->post("venue_guest_count");
                    $insert_data['venue_budget_range']=$this->input->post("venue_budget_range");
                break;
                case 2:
                    $insert_data['bridal_outfit_style']=$this->input->post("bridal_outfit_style");
                    $insert_data['bridal_budget_range']=$this->input->post("bridal_budget_range");
                break;
                case 3:
                    $insert_data['groom_outfit_style']=$this->input->post("groom_outfit_style");
                    $insert_data['groom_budget_range']=$this->input->post("groom_budget_range");
                break;
                case 4:
                    $insert_data['photo_type_of_event']=implode(',',$this->input->post("photo_type_of_event"));
                    $insert_data['photo_day_budget']=$this->input->post("photo_day_budget");
                    $insert_data['phpto_number_of_guest']=$this->input->post("phpto_number_of_guest");
                    $insert_data['photo_event_location']=$this->input->post("photo_event_location");
                break;
                case 5:
                    $insert_data['make_up_type']=implode(',',$this->input->post("make_up_type"));
                    $insert_data['make_up_people_requiring']=$this->input->post("make_up_people_requiring");
                    $insert_data['make_up_budget_range']=$this->input->post("make_up_budget_range");
                    $insert_data['make_up_brands']=$this->input->post("make_up_brands");
                    $insert_data['make_up_session_location']=$this->input->post("make_up_session_location");
                break;
                case 6:
                    $insert_data['mehendi_no_of_people']=$this->input->post("mehendi_no_of_people");
                    $insert_data['mehendi_budget_range']=$this->input->post("mehendi_budget_range");
                    $insert_data['mehendi_style']=implode(',',$this->input->post("mehendi_style"));
                    $insert_data['mehendi_location']=$this->input->post("mehendi_location");
                break;
                case 7:
                    $insert_data['jewellery_type']=implode(',',$this->input->post("jewellery_type"));
                    $insert_data['jewellery_budget_range']=$this->input->post("jewellery_budget_range");
                break;
                case 8:
                    $insert_data['decoration_type']=implode(',',$this->input->post("decoration_type"));
                    $insert_data['decoration_guest_count']=$this->input->post("decoration_guest_count");
                    $insert_data['decoration_budget_range']=$this->input->post("decoration_budget_range");
                    $insert_data['decoration_style']=$this->input->post("decoration_style");
                    $insert_data['decoration_address']=$this->input->post("decoration_address");
                break;
                case 9:
                    $insert_data['gift_type']=$this->input->post("gift_type");
                    $insert_data['gift_number_of']=$this->input->post("gift_number_of");
                    $insert_data['gift_price_range']=$this->input->post("gift_price_range");
                break;
                case 10:
                    $insert_data['catering_no_of_people']=$this->input->post("catering_no_of_people");
                    $insert_data['catering_no_of_function']=$this->input->post("catering_no_of_function");
                    $insert_data['catering_per_plate_budget']=$this->input->post("catering_per_plate_budget");
                    $insert_data['catering_food_type']=$this->input->post("catering_food_type");
                    $insert_data['catering_event_location']=$this->input->post("catering_event_location");
                break;
                case 13:
                    $insert_data['invitation_type']=$this->input->post("invitation_type");
                    $insert_data['invitation_number_of_cards']=$this->input->post("invitation_number_of_cards");
                    $insert_data['invitation_card_budget']=$this->input->post("invitation_card_budget");
                break;
                
                default:
                    // echo "default";
                break;
            }
            $insert_data['comment']=$this->input->post("comment");
        }else{
            //  <!-- //default form -->
            $insert_data['name']=$this->input->post("name");
            $insert_data['phone_no']=$this->input->post("phone_no");
            $insert_data['email']=$this->input->post("email");
            $insert_data['function_date']=$this->input->post("function_date");
            $insert_data['message']=$this->input->post("message");
        }
         $insert_data['created_date']=date('Y-m-d H:i:s', strtotime("+0 days"));

        $insert_id=$this->VendorQueryModel->InserDataNew($insert_data);
        // $insert_id=1; //temp

        if ($insert_id) {  
            $vendorquery=$this->VendorQueryModel->getvendorquerydatanew($insert_id);  
            $vendordata=$this->VendorModel->Get_Vendor_email_name($vendorquery[0]['vendor_id']);

            // $this->vendorqueryemailnew($vendorquery[0]);
            // $this->vendorqueryclientemailnew($vendorquery[0], $vendordata);
        }
        
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

        public function vendorqueryemailnew($vendorquery)
    {
        $message = $this->load->view("front/email/vendor-query-email-template-new",['vendorquery' => $vendorquery], TRUE);
        // $this->load->view("front/email/vendor-query-email-template-new",['vendorquery' => $vendorquery]);
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
           $this->email->to($vendorquery['email']); //user email address
           //$this->email->to("mwp@myweddingpalette.com");  //admin

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

        public function vendorqueryclientemailnew($vendorquery,$vendordata)
    {
        $message = $this->load->view("front/email/vendor-query-client-email-template",['vendorquery' => $vendorquery, 'vendordata' => $vendordata], TRUE);
        // $this->load->view("front/email/vendor-query-client-email-template-new",['vendorquery' => $vendorquery, 'vendordata' => $vendordata]);
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
           $this->email->to($vendordata['vendor_email']); //vendor
           //$this->email->to('mwp@myweddingpalette.com'); //admin
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
