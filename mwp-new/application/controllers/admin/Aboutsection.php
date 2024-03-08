<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Aboutsection extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();

        $this->load->model('Aboutsection_model', '', TRUE);
        if (!$this->session->userdata('user_id')) {
         redirect('admin/Login');
         }
    }





    public function index()

    {

    	$data["aboutsection"]=$this->Aboutsection_model->getdata();

		$this->load->view('admin/aboutsection/view',$data);

    }





    public function add()

    {



        $this->form_validation->set_rules('main-heading', 'name', 'required');

        $this->form_validation->set_rules('sub-heading', 'designation', 'required');

        $this->form_validation->set_rules('content', 'content', 'required');

       

        if ($this->form_validation->run()) 

        {

	         $data=array('main-heading' =>$this->input->post('main-heading') ,

	                     'sub-heading' =>$this->input->post('sub-heading') , 

	                     'content'=>$this->input->post('content'));

	        

	         $result=$this->Aboutsection_model->add_data($data);

	         

	         if ($result){

	         	$this->session->set_flashdata('add-message','Data added sucessfully!');

	            redirect('admin/aboutsection');

	         }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/aboutsection/add',$data);

        }  	    

       //$this->load->view('admin/testimonial/add');

    }





    public function edit()

    {

    	$id=$this->uri->segment(4);

    	$data["aboutsection"]=$this->Aboutsection_model->editdata($id);

    	$this->load->view('admin/aboutsection/edit',$data);

    }





    public function update()

    {

    	$this->form_validation->set_rules('main-heading', 'name', 'required');

        $this->form_validation->set_rules('sub-heading', 'designation', 'required');

        $this->form_validation->set_rules('content', 'content', 'required');

       

        if ($this->form_validation->run()) 

        {

	         $data=array('main-heading' =>$this->input->post('main-heading') ,

                         'sub-heading' =>$this->input->post('sub-heading') , 

                         'content'=>$this->input->post('content'));

	        

	         $id=$this->input->post("about-id");

	         $result=$this->Aboutsection_model->update_data($data,$id);

	         

	         if ($result){

	         	$this->session->set_flashdata('update-message','Data added sucessfully!');

	            redirect('admin/aboutsection');

	         }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/aboutsection/edit',$data);

        }  	    

    }





    public function delete()

    {

    	$id=$this->uri->segment(4);

    	$data["aboutsection"]=$this->Aboutsection_model->deletedata($id);

    	$this->session->set_flashdata('delete-message','Data deleted sucessfully!');

    	redirect('admin/aboutsection');



    }



}

