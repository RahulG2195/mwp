<?php



defined('BASEPATH') or exit('No direct script access allowed');



class RND_control extends CI_Controller
{



   public function __construct()

   {

      parent::__construct();
      if (!$this->session->userdata('user_id')) {
         redirect('admin/Login');
      }
      $this->load->model('RND_Model', '', TRUE);
   }





   public function index()

   {

      $data["rnd"] = $this->RND_Model->getdata();

      $this->load->view('admin/rnd/view', $data);
   }


   public function add()

   {
    
    $this->form_validation->set_rules('name', 'name', 'required');
    if ($this->form_validation->run()) {

            // print_r($_FILES);exit;
         
            $files = $_FILES;
            $config['upload_path']  = 'uploads/rnd';
            $config['allowed_types'] = 'gif|jpg|png|pdf';
            $_FILES['image']['name'] = date('s') . '-' . $files['image']['name'];

            $_FILES['pdf']['name'] = date('s') . '-' . $files['pdf']['name'];

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('image')) {
                $image = $this->upload->data();
            }
            // else{
            //     echo $this->upload->display_errors();

            // }
            if ($this->upload->do_upload('pdf')) {
                // $error_upload[1] = array('error' => $this->upload->display_errors());
                $prj_pdf = $this->upload->data();
            }
        
         $data = array(
            'name' => $this->input->post('name'),
            'image' => $image['file_name'],
            'pdf' => $prj_pdf['file_name'],
         );
        // print_r($data);exit;

         $result = $this->RND_Model->add_data($data);

         if ($result) {
            $this->session->set_flashdata('add-message', 'Data added sucessfully!');
            redirect('admin/RND_control');
         }
      }else{
         $this->load->view('admin/rnd/add');
      }
   }



   public function edit()

   {

      $id = $this->uri->segment(4);
      $data["rnd"] = $this->RND_Model->editdata($id);

      $this->load->view('admin/rnd/edit', $data);
   }



   public function update()

   {

      $this->form_validation->set_rules('name', 'name', 'required');
    //   if ($this->form_validation->run()) {

         $files = $_FILES;
         // print_r($files);exit;
         $config['upload_path']   = 'uploads/rnd'; 
         $config['allowed_types'] = 'gif|jpg|png|webp|jpeg|WEBP|JPG|JPEG|PNG|GIF|webp|PDF|pdf';
         $config['overwrite'] = 1;

         $this->load->library('upload', $config);

         $this->upload->initialize($config);

         if ($this->upload->do_upload('image')) {
             $upload_data = $this->upload->data();
            } else {
             $old_img  = $this->input->post('old_img');
         }
         if ($this->upload->do_upload('pdf')) {
            // $error_upload[1] = array('error' => $this->upload->display_errors());
                $prj_pdf = $this->upload->data();
            }else{
                $old_pdf  = $this->input->post('old_pdf');
            }
         
            $data = array(
                'name' => $this->input->post('name'),
               'image' => isset($upload_data["file_name"]) ? $upload_data["file_name"] : $old_img,
               'pdf' => isset($prj_pdf["file_name"]) ? $prj_pdf["file_name"] : $old_pdf,
            );
            

         // print_r($data);exit;
         $id = $this->input->post("rnd_id");
        //  echo $id;exit;
         $result = $this->RND_Model->update_data($data, $id);
         // echo $result;exit;
         if ($result) {
            $this->session->set_flashdata('update-message', 'Nothing has been updated');

            redirect('admin/RND_control');
         }else{
            $this->session->set_flashdata('update-message', 'Data updated sucessfully!');

            redirect('admin/RND_control');
         }
      // } else {
      //    $data = validation_errors();

      //    $this->load->view('admin/rnd/add', $data);
      // }
   }



   public function delete()

   {

      $id = $this->uri->segment(4);

      $data["rnd"] = $this->RND_Model->deletedata($id);

      $this->session->set_flashdata('delete-message', 'Data deleted sucessfully!');

      redirect('admin/RND_control');
   }
}
