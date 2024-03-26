<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Admindashboard extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
       // $this->load->model('LoginModel');
        $this->load->model('DashboardModel');
        
    }
public function index()
    {
        if (!$this->session->userdata('user_id')) {

            $data["user"]=$this->DashboardModel->getdashboarduserdata();
            $data["paidvendor"]=$this->DashboardModel->getpaidvendordata();
            $data["totalvendor"]=$this->DashboardModel->gettotalvendordata();
            $data["totalactivevendor"]=$this->DashboardModel->getactivevendors();
            
            $data["designdecordata"]=$this->DashboardModel->designdecordata();
            $data["vendordata"]=$this->DashboardModel->vendorrecommendata();
            $data["weddinglead"]=$this->DashboardModel->weddingleaddata();
            //Vendor Data
            $data["venuedata"]=$this->DashboardModel->getvenuedata();

            $data["birdaldata"]=$this->DashboardModel->getbridaldata();

            $data["groomdata"]=$this->DashboardModel->getgroomdata();

            $data["photography"]=$this->DashboardModel->photographydata();

            $data["makeup"]=$this->DashboardModel->makeupdata();

            $data["mehendiartist"]=$this->DashboardModel->mehandidata();

            $data["bridaljwellery"]=$this->DashboardModel->bridaljwellerydata();

            $data["decoration"]=$this->DashboardModel->decorationdata();
            
            $data["gift"]=$this->DashboardModel->giftdata();

            $data["catering"]=$this->DashboardModel->cateringdata();

            $data["inivitations"]=$this->DashboardModel->invitationdata();

            $data["vendor_new_count"]=$this->DashboardModel->getvendornewcountgroupby();
            $data["vendoreditrequest"]=$this->DashboardModel->vendoreditrequestdata();
            // echo "<pre>";
            // print_r($data["vendor_new_count"]);
            $data["venue_count"]='0';
            $data["birdal_count"]='0';
            $data["groom_count"]='0';
            $data["photography_count"]='0';
            $data["makeup_count"]='0';
            $data["mehendiartist_count"]='0';
            $data["bridaljwellery_count"]='0';
            $data["decoration_count"]='0';
            $data["gift_count"]='0';
            $data["catering_count"]='0';
            $data["inivitations_count"]='0';
            
            foreach($data["vendor_new_count"] as $row){
                // echo 'category '.$row['category'];
                if($row['category']=='1'){
                    $data["venue_count"]=$row['count'];
                }else if($row['category']=='2'){
                    $data["birdal_count"]=$row['count'];
                }else if($row['category']=='3'){
                    $data["groom_count"]=$row['count'];
                }else if($row['category']=='4'){
                    $data["photography_count"]=$row['count'];
                }else if($row['category']=='5'){
                    $data["makeup_count"]=$row['count'];
                }else if($row['category']=='6'){
                    $data["mehendiartist_count"]=$row['count'];
                }else if($row['category']=='7'){
                    $data["bridaljwellery_count"]=$row['count'];
                }else if($row['category']=='8'){
                    $data["decoration_count"]=$row['count'];
                }else if($row['category']=='9'){
                    $data["gift_count"]=$row['count'];
                }else if($row['category']=='10'){
                    $data["catering_count"]=$row['count'];
                }else if($row['category']=='13'){
                    $data["inivitations_count"]=$row['count'];
                }
            }
            // exit;
            // print_r($data["venue_count"]);exit;
            $this->load->view("admin/admin-dashboard",$data);
        }
        else{
            redirect('AdminLogin');
        }

        

    }
    
    public function new($category)
    {
        // echo "fdsfds ".$category_id;
        $category_id='0';
        switch ($category) {
            case 'Bridal_Wear':
                $category_id='2';
            break;
            case 'Jewellery':
                $category_id='7';
            break;
            case 'Catering':
                $category_id='10';
            break;
            case 'Decoration':
                $category_id='8';
            break;
            case 'Gift':
                $category_id='9';
            break;
            case 'Groom_wear':
                $category_id='3';
            break;
            case 'Inivitation':
                $category_id='13';
            break;
            case 'MakeUp':
                $category_id='5';
            break;
            case 'Mehendi':
                $category_id='6';
            break;
            case 'Photography':
                $category_id='4';
            break;
            case 'Venue':
                $category_id='1';
            break;
            default:
                $category_id='0';
            break;
        }
        
        // update new status in database
        $data = array(
            'is_new' => 0
        ); 
        
        $this->DashboardModel->updatevendornew($category_id,$data);
        // echo "shankar";
        // exit;
        redirect('admin/Admin_Vendor/'.$category);
    }    

}