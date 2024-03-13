<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Directorsection extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
         redirect('admin/Login');
      }
        $this->load->model('Directorsection_model', '', TRUE);

    }





    public function index()

    {

        $data["director"]=$this->Directorsection_model->getdata();

        $this->load->view('admin/director/view',$data);

    }





    public function add()

    {

        $this->form_validation->set_rules('director-name', 'name', 'required');

        $this->form_validation->set_rules('designation', 'designation', 'required');

        $this->form_validation->set_rules('content', 'description', 'required');

       

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/director'; 

             $config['allowed_types'] = 'gif|jpg|png';

             $_FILES['director-image']['name']= date('s').'-'.$files['director-image']['name'];

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             if ( ! $this->upload->do_upload('director-image')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $upload_data = $this->upload->data();

             }



             $data=array('director-name' =>$this->input->post('director-name') ,

                         'designation' =>$this->input->post('designation') ,

                         'content' =>$this->input->post('content'), 

                         'director-image'=>$upload_data["file_name"]);

            

             $result=$this->Directorsection_model->add_data($data);

             

             if ($result){

                $this->session->set_flashdata('add-message','Data added sucessfully!');

                redirect('admin/directorsection');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/director/add',$data);

        }

       // $this->load->view('admin/founder/add');

    }



    public function edit()

    {

        $id=$this->uri->segment(4);

        $data["director"]=$this->Directorsection_model->editdata($id);

        $this->load->view('admin/director/edit',$data);

    }



     public function update()

     {

        $this->form_validation->set_rules('director-name', 'name', 'required');

        $this->form_validation->set_rules('designation', 'designation', 'required');

        $this->form_validation->set_rules('content', 'description', 'required');

       

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/director'; 

             $config['allowed_types'] = 'gif|jpg|png';

             $_FILES['director-image']['name']= date('s').'-'.$files['director-image']['name'];

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             if ( ! $this->upload->do_upload('director-image')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $upload_data = $this->upload->data();

             }



              if($upload_data){

                $data=array('director-name' =>$this->input->post('director-name') ,

                            'designation' =>$this->input->post('designation') ,

                            'content' =>$this->input->post('content'), 

                            'director-image'=>$upload_data["file_name"]);

             }

             else{

                $data=array('director-name' =>$this->input->post('director-name') ,

                            'designation' =>$this->input->post('designation') ,

                            'content' =>$this->input->post('content'));

             }



             

             $id=$this->input->post("director-id");

             $result=$this->Directorsection_model->update_data($data,$id);

             

             if ($result){

                $this->session->set_flashdata('update-message','Data updates sucessfully!');

                redirect('admin/directorsection');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/director/add',$data);

        }

     }



     public function delete()

     {

        $id=$this->uri->segment(4);

        $data["director"]=$this->Directorsection_model->deletedata($id);

        redirect('admin/directorsection');

     }



}