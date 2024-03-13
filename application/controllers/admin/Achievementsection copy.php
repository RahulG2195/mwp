<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Achievementsection extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();

        $this->load->model('Achievements_model', '', TRUE);

    }





    public function index()

    {

        $data["achievements"]=$this->Achievements_model->getdata();

        $this->load->view('admin/achievements/view',$data);

    }



    public function add()

    {

        $this->form_validation->set_rules('category', 'category', 'required');

       

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/achievement'; 

             $config['allowed_types'] = 'gif|jpg|png';

             $_FILES['achievement-image']['name']= date('s').'-'.$files['achievement-image']['name'];

             
             $this->load->library('upload', $config);
             
             $this->upload->initialize($config);
             
            //  print_r($config);
             
            $this->upload->do_upload('achievement-image');
            //  if (!$this->upload->do_upload('achievement-image')) 

            //  {

               //  echo 1;
                 $upload_data = $this->upload->data();
               // }
               
               // else 
               
               // { 
               //  $error = array('error' => $this->upload->display_errors()); 
               // echo 0;

               // }
             $data=array('category' =>$this->input->post('category') ,

               'achievement-image'=>$upload_data["file_name"]);

            

             $result=$this->Achievements_model->add_data($data);

             

             if ($result){

                $this->session->set_flashdata('add-message','Data added sucessfully!');

                redirect('admin/achievementsection');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/achievements/add',$data);

        }

       





    }



    public function edit()

    {

        $id=$this->uri->segment(4);

        $data["achievements"]=$this->Achievements_model->editdata($id);

        $this->load->view('admin/achievements/edit',$data);

    }



   public function update()

   {

        $this->form_validation->set_rules('category', 'category', 'required');

       

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/achievement'; 

             $config['allowed_types'] = 'gif|jpg|png';

             $_FILES['achievement-image']['name']= date('s').'-'.$files['achievement-image']['name'];

             

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             

             if ( ! $this->upload->do_upload('achievement-image')) 

             {

                $error = array('error' => $this->upload->display_errors()); 

             }

             else 

             { 

                $upload_data = $this->upload->data();

             }





            if($upload_data)

            {

                $data=array('category' =>$this->input->post('category') ,

                         'achievement-image'=>$upload_data["file_name"]);

            }

            else

            {

                $data=array('category' =>$this->input->post('category') ,

                         'achievement-image'=>$upload_data["file_name"]);

            }

           

             $id=$this->input->post("achievement-id"); 

             $result=$this->Achievements_model->update_data($data,$id);

             

             if ($result){

                $this->session->set_flashdata('update-message','Data updated sucessfully!');

                redirect('admin/achievementsection');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/achievements/add',$data);

        }

       



   } 



   public function delete()

   {

       $id=$this->uri->segment(4);

       $data["achievements"]=$this->Achievements_model->deletedata($id);

       $this->session->set_flashdata('delete-message','Data deleted sucessfully!');

       redirect('admin/achievementsection');

   }





}



?>