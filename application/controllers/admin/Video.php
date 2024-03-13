<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Video extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
         redirect('admin/Login');
         }
        $this->load->model('Video_model', '', TRUE);

    }





    public function index()

    {

        $data["video"]=$this->Video_model->getdata();

        $this->load->view('admin/video/view',$data);

    }



   public function add()

   {



        $this->form_validation->set_rules('video-link', 'video link', 'required');

        $this->form_validation->set_rules('paragraph', 'paragraph', 'required');

        

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/video'; 

             $config['allowed_types'] = 'gif|jpg|png';

             $_FILES['video-image']['name']= date('s').'-'.$files['video-image']['name'];

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             if ( ! $this->upload->do_upload('video-image')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $upload_data = $this->upload->data();

             }



             $data=array('video-link' =>$this->input->post('video-link') ,

                         'paragraph' =>$this->input->post('paragraph') ,

                         'video-image'=>$upload_data["file_name"]);

            

             $result=$this->Video_model->add_data($data);

             

             if ($result){

                $this->session->set_flashdata('add-message','Data added sucessfully!');

                $this->load->view('admin/video/add');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/video/add',$data);

        }

   }



   public function edit()

   {

     $id=$this->uri->segment(4);

     $data["video"]=$this->Video_model->editdata($id);

     $this->load->view('admin/video/edit',$data);

   }





   public function update()

   {

        $this->form_validation->set_rules('video-link', 'video link', 'required');

        $this->form_validation->set_rules('paragraph', 'paragraph', 'required');

        

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/video'; 

             $config['allowed_types'] = 'gif|jpg|png';

             $_FILES['video-image']['name']= date('s').'-'.$files['video-image']['name'];

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             if ( ! $this->upload->do_upload('video-image')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $upload_data = $this->upload->data();

             }



            if($upload_data)

            {

                $data=array('video-link' =>$this->input->post('video-link') ,

                         'paragraph' =>$this->input->post('paragraph') ,

                         'video-image'=>$upload_data["file_name"]);

             }

            else

            {

                $data=array('video-link' =>$this->input->post('video-link') ,

                            'paragraph' =>$this->input->post('paragraph'));

            }

            

            $id=$this->input->post("video-id");

            

             $result=$this->Video_model->update_data($data,$id);

             

             if ($result){

                $this->session->set_flashdata('update-message','Data updated sucessfully!');

                redirect('admin/video');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/video/edit',$data);

        }

   }



   public function delete()

   {

     $id=$this->uri->segment(4);

     $result=$this->Video_model->deletedata($id);

     $this->session->set_flashdata('delete-message','Data deleted sucessfully!');

     redirect('admin/video');

   }



}



?>