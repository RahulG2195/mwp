<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Latestprojects extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();
		if (!$this->session->userdata('user_id')) {
            redirect('admin/Login');
         }
        $this->load->model('Latestprojects_model', '', TRUE);

    }





    public function index()

    {

    	$data["projects"]=$this->Latestprojects_model->getdata();

    	$this->load->view('admin/latestprojects/view',$data);

    }





    public function add()

    {



    	$this->form_validation->set_rules('project-name', 'title', 'required');

        $this->form_validation->set_rules('project-link', 'link', 'required');

       

        if ($this->form_validation->run()) 

        {

	         $files = $_FILES;

	         $config['upload_path']   = './uploads/projects'; 

	         $config['allowed_types'] = 'gif|jpg|png';

	         $_FILES['project-image']['name']= date('s').'-'.$files['project-image']['name'];

	         $this->load->library('upload', $config);

	         $this->upload->initialize($config);

	         if ( ! $this->upload->do_upload('project-image')) 

	         {

	            $error = array('error' => $this->upload->display_errors()); 

	         }

	         else 

	         { 

	            $upload_data = $this->upload->data();

	         }



	         $data=array('project-name' =>$this->input->post('project-name') ,

	                     'project-link' =>$this->input->post('project-link') , 

	                     'project-image'=>$upload_data["file_name"]);

	        

	         $result=$this->Latestprojects_model->add_data($data);

	         

	         if ($result){

	         	$this->session->set_flashdata('add-message','Data added sucessfully!');

	            redirect('admin/latestprojects');

	         }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/latestprojects/add',$data);

        }

    }



    public function edit()

    {

    	$id=$this->uri->segment(4);

    	$data["projects"]=$this->Latestprojects_model->editdata($id);

    	$this->load->view('admin/latestprojects/edit',$data);

    }



    public function update()

    {

        $this->form_validation->set_rules('project-name', 'title', 'required');

        $this->form_validation->set_rules('project-link', 'link', 'required');

        

        if ($this->form_validation->run()) 

        {

        	 $files = $_FILES;

	         $config['upload_path']   = './uploads/projects'; 

	         $config['allowed_types'] = 'gif|jpg|png';

	         $_FILES['project-image']['name']= date('s').'-'.$files['project-image']['name'];

	         $this->load->library('upload', $config);

	         $this->upload->initialize($config);

	         if ( ! $this->upload->do_upload('project-image')) 

	         {

	            $error = array('error' => $this->upload->display_errors()); 

	         }

	         else 

	         { 

	            $upload_data = $this->upload->data();

	         }

	         

	         if($upload_data){

	         	 $data=array('project-name' =>$this->input->post('project-name') ,

	                         'project-link' =>$this->input->post('project-link') , 

	                         'project-image'=>$upload_data["file_name"]);

	         }

	         else{

  				 $data=array('project-name' =>$this->input->post('project-name') ,

	                         'project-link' =>$this->input->post('project-link'));

	         }

                

		         $id=$this->input->post("project-id");

		         $result=$this->Latestprojects_model->update_data($data,$id);

		         $this->session->set_flashdata('update-message','Data updated sucessfully!');

	             redirect('admin/latestprojects');

        }  

        else

        {  $id=$this->uri->segment(4);

           $data=validation_errors();

           $data["projects"]=$this->Latestprojects_model->editdata($id);

           $this->load->view('admin/latestprojects/edit',$data);

        } 



    }



    public function delete()

    {

    	 $id=$this->uri->segment(4);	

         $data["projects"]=$this->Latestprojects_model->deletedata($id);

         redirect('admin/latestprojects');

    }





}

?>