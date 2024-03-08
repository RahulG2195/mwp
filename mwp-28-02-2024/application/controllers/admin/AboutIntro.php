<?php



defined('BASEPATH') or exit('No direct script access allowed');



class AboutIntro extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
         redirect('admin/Login');
      }
        $this->load->model('Abouthome_model', '', TRUE);

    }





     public function index()

     {

     	$this->list();

     }

    



     public function add()

     {

     	$this->form_validation->set_rules('about-heading-1', 'heading', 'required');

        $this->form_validation->set_rules('about-heading-2', 'heading', 'required');

        $this->form_validation->set_rules('about-para', 'content', 'required');

       

        if ($this->form_validation->run()) 

        {

	         $data=array('about-heading-1' =>$this->input->post('about-heading-1') ,

	                     'about-heading-2' =>$this->input->post('about-heading-2') , 

	                     'about-para'=>$this->input->post('about-para'));

	        

	         $result=$this->Abouthome_model->add_data($data);

	         

	         if ($result){

	         	$this->session->set_flashdata('add-message','Data added sucessfully!');

	            redirect('admin/aboutintro/list');

	         }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/homeabout/add',$data);

        }  	     

     	

     }





     public function list()

     {

     	$data["about"]=$this->Abouthome_model->getdata();

     	$this->load->view('admin/homeabout/view',$data);

     }





     public function edit()

     {

     	$id=$this->uri->segment(4);

     	$data["about"]=$this->Abouthome_model->editdata($id);

     	$this->load->view('admin/homeabout/edit',$data);

     }



     public function update()

     {

     	$this->form_validation->set_rules('about-heading-1', 'heading', 'required');

        $this->form_validation->set_rules('about-heading-2', 'heading', 'required');

        $this->form_validation->set_rules('about-para', 'content', 'required');

       

        if ($this->form_validation->run()) 

        {

	         $data=array('about-heading-1' =>$this->input->post('about-heading-1') ,

	                     'about-heading-2' =>$this->input->post('about-heading-2') , 

	                     'about-para'=>$this->input->post('about-para'));



	         $id=$this->input->post("about-home-id");

	        

	         $result=$this->Abouthome_model->update_data($data,$id);

	         

	         if ($result){

	         	$this->session->set_flashdata('update-message','Data updated sucessfully!');

	            redirect('admin/aboutintro/list');

	         }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/homeabout/add',$data);

        }  	

     }



     public function delete()

     {

        $id=$this->uri->segment(4);

     	$data["about"]=$this->Abouthome_model->deletedata($id);

     	redirect('admin/aboutintro/list');

     }



  }

?>