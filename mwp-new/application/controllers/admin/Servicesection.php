<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Servicesection extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
         redirect('admin/Login');
         }
        $this->load->model('Servicesection_model', '', TRUE);

    }







    public function index()

    {

    	$data["service"]=$this->Servicesection_model->getdata();

		$this->load->view('admin/service/view',$data);

    }



    public function add()

    {

    	$this->form_validation->set_rules('service-name', 'srvice name', 'required');

        $this->form_validation->set_rules('service-para', 'service paragraph', 'required');

       

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/service'; 

             $config['allowed_types'] = 'gif|jpg|png|webp';

             $_FILES['service-image']['name']= date('s').'-'.$files['service-image']['name'];

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             if ( ! $this->upload->do_upload('service-image')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $upload_data = $this->upload->data();

             }



             $data=array('service-name' =>$this->input->post('service-name') ,

                         'service-para' =>$this->input->post('service-para') ,

                         'service-link' =>$this->input->post('service-link') ,

                         'service-image'=>$upload_data["file_name"]);

            

             $result=$this->Servicesection_model->add_data($data);

             

             if ($result){

                $this->session->set_flashdata('add-message','Data added sucessfully!');

                $this->load->view('admin/service/add');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/service/add',$data);

        }



    }





    public function edit()

    {

    	$id=$this->uri->segment(4);

    	$data["service"]=$this->Servicesection_model->editdata($id);

    	$this->load->view('admin/service/edit',$data);

    }



    public function update()

    {

    	$this->form_validation->set_rules('service-name', 'srvice name', 'required');

        $this->form_validation->set_rules('service-para', 'service paragraph', 'required');

       

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/service'; 

             $config['allowed_types'] = 'gif|jpg|png|webp';

             $_FILES['service-image']['name']= date('s').'-'.$files['service-image']['name'];

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             if ( ! $this->upload->do_upload('service-image')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $upload_data = $this->upload->data();

             }





            if($upload_data)

            {

                $data=array('service-name' =>$this->input->post('service-name') ,

                         'service-para' =>$this->input->post('service-para') ,

                         'service-link' =>$this->input->post('service-link') ,

                         'service-image'=>$upload_data["file_name"]);

             }

            else

            {

                $data=array('service-name' =>$this->input->post('service-name') ,

                         'service-para' =>$this->input->post('service-para') ,

                         'service-link' =>$this->input->post('service-link'));

            }



             

            $id=$this->input->post("service-id");

            $result=$this->Servicesection_model->update_data($data,$id);

             

            if ($result){

                $this->session->set_flashdata('update-message','Data updated sucessfully!');

                redirect('admin/servicesection');

            }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/service/add',$data);

        }



    }





 public function  delete()

 {

 	$id=$this->uri->segment(4);

 	$data["service"]=$this->Servicesection_model->deletedata($id);

 	redirect('admin/servicesection');

 }







}

?>