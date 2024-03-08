<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Clientsection extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
         redirect('admin/Login');
      }
        $this->load->model('Client_model', '', TRUE);

    }





    public function index()

    {

		$data["clients"]=$this->Client_model->getdata();

		$this->load->view('admin/client/view',$data);

    }





    public function add()

    {

        $this->form_validation->set_rules('alt-name', 'title', 'required');

       

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/client'; 

             $config['allowed_types'] = 'gif|jpg|png';

             $_FILES['client-image-1']['name']= date('s').'-'.$files['client-image-1']['name'];



             $_FILES['client-image-2']['name']= date('s').'-'.$files['client-image-2']['name'];

             

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             

             if( ! $this->upload->do_upload('client-image-1')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $clientimage1 = $this->upload->data();

             }



            if( ! $this->upload->do_upload('client-image-2')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $clientimage2 = $this->upload->data();

             }



             $data=array('alt-name' =>$this->input->post('alt-name') ,

                         'client-image-1' =>$clientimage1["file_name"] , 

                         'client-image-2'=>$clientimage2["file_name"]);

            

             $result=$this->Client_model->add_data($data);

             

             if ($result){

                $this->session->set_flashdata('add-message','Data added sucessfully!');

               //  redirect('admin/clientsection');
                $this->load->view('admin/client/add');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/client/add',$data);

        }   



    }





    public function edit()

    {

        $id=$this->uri->segment(4);

        $data["client"]=$this->Client_model->editdata($id);



        $this->load->view('admin/client/edit',$data);

    }



    public function update()

    {

        $this->form_validation->set_rules('alt-name', 'title', 'required');



         if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/client'; 

             $config['allowed_types'] = 'gif|jpg|png';

             $_FILES['client-image-1']['name']= date('s').'-'.$files['client-image-1']['name'];



             $_FILES['client-image-2']['name']= date('s').'-'.$files['client-image-2']['name'];

             

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             

             if( ! $this->upload->do_upload('client-image-1')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $clientimage1 = $this->upload->data();

             }



            if( ! $this->upload->do_upload('client-image-2')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $clientimage2 = $this->upload->data();

             }





             if(!empty($clientimage1) && !empty($clientimage2) ){

                

                  $data=array('alt-name' =>$this->input->post('alt-name') ,

                         'client-image-1' =>$clientimage1["file_name"] , 

                         'client-image-2'=>$clientimage2["file_name"]);

             }

             elseif(!empty($clientimage1) || !empty($clientimage2))

             {                 

                     if ($clientimage1){

                          $data=array('alt-name' =>$this->input->post('alt-name') ,

                         'client-image-1' =>$clientimage1["file_name"]);

                     }

                     else{

                           $data=array('alt-name' =>$this->input->post('alt-name') ,

                           'client-image-2' =>$clientimage2["file_name"]);

                     }

             }

            else{

                // echo "xyz";

                 $data=array('alt-name' =>$this->input->post('alt-name'));

            }

           

             $id=$this->input->post("client-id");

             $result=$this->Client_model->update_data($data,$id);

             

             if ($result){

                $this->session->set_flashdata('update-message','Data update sucessfully!');

                redirect('admin/clientsection');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/client/edit',$data);

        }   



    }





    public function delete()

    {

        $id=$this->uri->segment(4);

        $data["testimonial"]=$this->Client_model->deletedata($id);

        $this->session->set_flashdata('delete-message','Data deleted sucessfully!');

         redirect('admin/clientsection');

    }

    



}









?>