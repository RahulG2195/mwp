<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Timelinesection extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
            redirect('admin/Login');
         }
        $this->load->model('Timelinesection_model', '', TRUE);

    }





    public function index()

    {

    	$data["timeline"]=$this->Timelinesection_model->getdata();

		$this->load->view('admin/timeline/view',$data);

    }





    public function add()

    {

    	$this->form_validation->set_rules('timeline-heading', 'heading', 'required');

        $this->form_validation->set_rules('timeline-sub-heading', 'sub heading', 'required');

        $this->form_validation->set_rules('timeline-content', 'content', 'required');

       

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/timeline'; 

             $config['allowed_types'] = 'gif|jpg|png';

             $_FILES['timeline-image']['name']= date('s').'-'.$files['timeline-image']['name'];

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             if ( ! $this->upload->do_upload('timeline-image')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $upload_data = $this->upload->data();

             }



             $data=array('timeline-heading' =>$this->input->post('timeline-heading') ,

                         'timeline-sub-heading' =>$this->input->post('timeline-sub-heading') ,

                         'timeline-content' =>$this->input->post('timeline-content'), 

                         'timeline-image'=>$upload_data["file_name"]);

            

             $result=$this->Timelinesection_model->add_data($data);

             

             if ($result){

                $this->session->set_flashdata('add-message','Data added sucessfully!');

                redirect('admin/timelinesection');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/timeline/add',$data);

        }

    }





    public function edit()

    {

    	$id=$this->uri->segment(4);

    	$data["timeline"]=$this->Timelinesection_model->editdata($id);

    	$this->load->view('admin/timeline/edit',$data);

    }



    public function update()

    {

    	$this->form_validation->set_rules('timeline-heading', 'heading', 'required');

        $this->form_validation->set_rules('timeline-sub-heading', 'sub heading', 'required');

        $this->form_validation->set_rules('timeline-content', 'content', 'required');

       

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/timeline'; 

             $config['allowed_types'] = 'gif|jpg|png';

             $_FILES['timeline-image']['name']= date('s').'-'.$files['timeline-image']['name'];

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             if ( ! $this->upload->do_upload('timeline-image')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $upload_data = $this->upload->data();

             }

             

            if($upload_data)

            {

                $data=array('timeline-heading' =>$this->input->post('timeline-heading') ,

                         'timeline-sub-heading' =>$this->input->post('timeline-sub-heading') ,

                         'timeline-content' =>$this->input->post('timeline-content'), 

                         'timeline-image'=>$upload_data["file_name"]);

             }

            else

            {

                $data=array('timeline-heading' =>$this->input->post('timeline-heading') ,

                         'timeline-sub-heading' =>$this->input->post('timeline-sub-heading') ,

                         'timeline-content' =>$this->input->post('timeline-content'));

            }







            $id=$this->input->post("timeline-id");

            

            

             $result=$this->Timelinesection_model->update_data($data,$id);

             

             if ($result){

                $this->session->set_flashdata('update-message','Data updated sucessfully!');

                redirect('admin/timelinesection');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/timeline/add',$data);

        }

    }





    public function delete()

    {

    	$id=$this->uri->segment(4);

    	$data["timeline"]=$this->Timelinesection_model->deletedata($id);

    	$this->session->set_flashdata('delete-message','Data deleted sucessfully!');

        redirect('admin/timelinesection');

    }



}