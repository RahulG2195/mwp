<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Homeslider extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();

		if (!$this->session->userdata('user_id')) {
            redirect('admin/Login');
         }
        $this->load->model('Homeslider_model', '', TRUE);

    }



    public function index()

    {



    	$data["slider"]=$this->Homeslider_model->getdata();

    	//var_dump($data);exit();

        $this->load->view("admin/homeslider/view",$data);

    }



     public function add()

     {

        // $this->form_validation->set_rules('slider-title', 'title', 'required');

        // $this->form_validation->set_rules('slider-link', 'link', 'required');

       

        if (!empty($_FILES)) 

        {

	         $files = $_FILES;
			print_r($files);
	         $config['upload_path']   = './uploads/slider'; 

	         $config['allowed_types'] = 'gif|jpg|png|webp|WEBP|jpeg';

	         $_FILES['slider-image']['name']= date('s').'-'.$files['slider-image']['name'];

	         $this->load->library('upload', $config);

	         $this->upload->initialize($config);

	         if ( ! $this->upload->do_upload('slider-image')) 

	         {

	            $error = array('error' => $this->upload->display_errors()); 
				print_r($error);
	         }

	         else 

	         { 

	            $upload_data = $this->upload->data();

	         }



	         $data=array('slider-title' =>$this->input->post('slider-title') ,

	                     'slider-link' =>$this->input->post('slider-link') , 

	                     'slider-image'=>$upload_data["file_name"]);

	        

	         $result=$this->Homeslider_model->add_data($data);

	         

	         if ($result){

	         	$this->session->set_flashdata('add-message','Data added sucessfully!');

	            redirect('admin/homeslider');

	         }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/homeslider/add',$data);

        }  	        

     }



     public function edit()

     {

         $id=$this->uri->segment(4);

         $data["slider"]=$this->Homeslider_model->editdata($id);

         $this->load->view('admin/homeslider/edit',$data);

     }



     public function update()

     {

     	// $this->form_validation->set_rules('slider-title', 'title', 'required');

        // $this->form_validation->set_rules('slider-link', 'link', 'required');

        if (!empty($_FILES)) 

        {

	         $files = $_FILES;

	         $config['upload_path']   = './uploads/slider'; 

	         $config['allowed_types'] = 'gif|jpg|png|WEBP|webp';

	         $_FILES['slider-image']['name']= date('s').'-'.$files['slider-image']['name'];

	         $this->load->library('upload', $config);

	         $this->upload->initialize($config);

	         if ( ! $this->upload->do_upload('slider-image')) 

	         {
				
	            $error = array('error' => $this->upload->display_errors()); 
	         }
	         else 
	         { 

	            $upload_data = $this->upload->data();

	         }



	         $id=$this->input->post("slider-id");



	         $data=array('slider-title' =>$this->input->post('slider-title') ,

	                     'slider-link' =>$this->input->post('slider-link') , 

	                     'slider-image'=>$upload_data["file_name"]);

	        

	         $result=$this->Homeslider_model->update_data($data,$id);

	         

	         if ($result){

	         	$this->session->set_flashdata('update-message','Data updated sucessfully!');

	            redirect('admin/homeslider');

	         }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/homeslider/edit',$data);

        }  	      

     }



     public function delete()

     {

         $id=$this->uri->segment(4);	

         $data["slider"]=$this->Homeslider_model->deletedata($id);

         redirect('admin/homeslider');

     }

   

}