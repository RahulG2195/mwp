<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Foundersection extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/Login');
         }
        $this->load->model('Foundersection_model', '', TRUE);

    }





    public function index()

    {

        $data["founder"]=$this->Foundersection_model->getdata();

        $this->load->view('admin/founder/view',$data);

    }





    public function add()

    {

        $this->form_validation->set_rules('founder-name', 'name', 'required');

        $this->form_validation->set_rules('designation', 'designation', 'required');

        $this->form_validation->set_rules('content', 'description', 'required');

       

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/founder'; 

             $config['allowed_types'] = 'gif|jpg|png';

             $_FILES['founder-image']['name']= date('s').'-'.$files['founder-image']['name'];

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             if ( ! $this->upload->do_upload('founder-image')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $upload_data = $this->upload->data();

             }



             $data=array('founder-name' =>$this->input->post('founder-name') ,

                         'designation' =>$this->input->post('designation') ,

                         'content' =>$this->input->post('content'), 

                         'founder-image'=>$upload_data["file_name"]);

            

             $result=$this->Foundersection_model->add_data($data);

             

             if ($result){

                $this->session->set_flashdata('add-message','Data added sucessfully!');

                redirect('admin/foundersection');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/founder/add',$data);

        }

       // $this->load->view('admin/founder/add');

    }



    public function edit()

    {

        $id=$this->uri->segment(4);

        $data["founder"]=$this->Foundersection_model->editdata($id);

        $this->load->view('admin/founder/edit',$data);

    }



     public function update()

     {

        $this->form_validation->set_rules('founder-name', 'name', 'required');

        $this->form_validation->set_rules('designation', 'designation', 'required');

        $this->form_validation->set_rules('content', 'description', 'required');

       

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/founder'; 

             $config['allowed_types'] = 'gif|jpg|png';

             $_FILES['founder-image']['name']= date('s').'-'.$files['founder-image']['name'];

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             if ( ! $this->upload->do_upload('founder-image')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $upload_data = $this->upload->data();

             }



              if($upload_data){

                $data=array('founder-name' =>$this->input->post('founder-name') ,

                            'designation' =>$this->input->post('designation') ,

                            'content' =>$this->input->post('content'), 

                            'founder-image'=>$upload_data["file_name"]);

             }

             else{

                $data=array('founder-name' =>$this->input->post('founder-name') ,

                            'designation' =>$this->input->post('designation') ,

                            'content' =>$this->input->post('content'));

             }



             

             $id=$this->input->post("founder-id");

             $result=$this->Foundersection_model->update_data($data,$id);

             

             if ($result){

                $this->session->set_flashdata('add-message','Data added sucessfully!');

                redirect('admin/foundersection');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/founder/add',$data);

        }

     }



     public function delete()

     {

        $id=$this->uri->segment(4);

        $data["founder"]=$this->Foundersection_model->deletedata($id);

        redirect('admin/foundersection');

     }



}