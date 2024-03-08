<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Testimonial extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
         redirect('admin/Login');
         }
        $this->load->model('Testimonial_model', '', TRUE);

    }





    public function index()

    {

    	$data["testimonial"]=$this->Testimonial_model->getdata();

		$this->load->view('admin/testimonial/view',$data);

    }





    public function add()

    {



        $this->form_validation->set_rules('testimonial-name', 'name', 'required');

        $this->form_validation->set_rules('designation', 'designation', 'required');

        $this->form_validation->set_rules('content', 'content', 'required');

       

        if ($this->form_validation->run()) 

        {

	         $data=array('testimonial-name' =>$this->input->post('testimonial-name') ,

	                     'designation' =>$this->input->post('designation') , 

	                     'content'=>$this->input->post('content'));

	        

	         $result=$this->Testimonial_model->add_data($data);

	         

	         if ($result){

	         	$this->session->set_flashdata('add-message','Data added sucessfully!');

	            redirect('admin/testimonial');

	         }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/testimonial/add',$data);

        }  	    

       //$this->load->view('admin/testimonial/add');

    }





    public function edit()

    {

    	$id=$this->uri->segment(4);

    	$data["testimonial"]=$this->Testimonial_model->editdata($id);

    	$this->load->view('admin/testimonial/edit',$data);

    }





    public function update()

    {

    	$this->form_validation->set_rules('testimonial-name', 'name', 'required');

        $this->form_validation->set_rules('designation', 'designation', 'required');

        $this->form_validation->set_rules('content', 'content', 'required');

       

        if ($this->form_validation->run()) 

        {

	         $data=array('testimonial-name' =>$this->input->post('testimonial-name') ,

	                     'designation' =>$this->input->post('designation') , 

	                     'content'=>$this->input->post('content'));

	        

	         $id=$this->input->post("testimonial-id");

	         $result=$this->Testimonial_model->update_data($data,$id);

	         

	         if ($result){

	         	$this->session->set_flashdata('update-message','Data added sucessfully!');

	            redirect('admin/testimonial');

	         }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/testimonial/edit',$data);

        }  	    

    }





    public function delete()

    {

    	$id=$this->uri->segment(4);

    	$data["testimonial"]=$this->Testimonial_model->deletedata($id);

    	$this->session->set_flashdata('delete-message','Data deleted sucessfully!');

    	redirect('admin/testimonial');



    }



}

