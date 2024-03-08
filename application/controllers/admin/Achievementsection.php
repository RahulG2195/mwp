<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Achievementsection extends CI_Controller
{



   public function __construct()

   {

      parent::__construct();
      if (!$this->session->userdata('user_id')) {
         redirect('admin/Login');
      }
      $this->load->model('Achievements_model', '', TRUE);
   }





   public function index()

   {

      $data["achievements"] = $this->Achievements_model->getdata();

      $this->load->view('admin/achievements/view', $data);
   }


   public function add()

   {

      $this->form_validation->set_rules('category', 'category', 'required');
      if ($this->form_validation->run()) {
         // echo $this->input->post('category');exit;
         
         $image_path = array();
         $files = $_FILES;
         // echo "<pre>";
         // print_r($_FILES);exit;
         if (!empty($_FILES['achievement-image']['name'][0])) {
            
           $config['upload_path']   = 'uploads/achivements'; 
           $config['allowed_types'] = '*';
           $config['overwrite'] = 1;
  
           $this->load->library('upload', $config);
  
           $this->upload->initialize($config);
         //   echo "<pre>";
         // print_r($config);exit;
            // Upload multiple images
            $files = $_FILES['achievement-image'];

            $file_count = is_array($files['name']) ? count($files['name']) : 0;
            
            for ($i = 0; $i < $file_count; $i++) {
                $_FILES['achievement-image']['name'] = $files['name'][$i];
                $_FILES['achievement-image']['type'] = $files['type'][$i];
                $_FILES['achievement-image']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['achievement-image']['error'] = $files['error'][$i];
                $_FILES['achievement-image']['size'] = $files['size'][$i];

                if ($this->upload->do_upload('achievement-image')) {
                    $images = $this->upload->data();
                    $image_path[] = $images['file_name'];
                }else {
                  // Upload failed
                  $error = $this->upload->display_errors();
                  echo "Upload failed: " . $error;
              }
            }
        }
        
         $data = array(
            'category' => $this->input->post('category'),
            'achievement-image' => $image_path
         );
         // echo "<pre>";
         // print_r($data);
         // exit;
         $result = $this->Achievements_model->add_data($data);

         if ($result) {

            $this->session->set_flashdata('add-message', 'Data added sucessfully!');

            redirect('admin/achievementsection');
         }
      }else{
         $this->load->view('admin/achievements/add');
      }
   }



   public function edit()

   {

      $id = $this->uri->segment(4);

      $data["achievements"] = $this->Achievements_model->editdata($id);

      $this->load->view('admin/achievements/edit', $data);
   }



   public function update()

   {

      $this->form_validation->set_rules('category', 'category', 'required');



      if ($this->form_validation->run()) {

         $files = $_FILES;
         // print_r($files);exit;
         $config['upload_path']   = 'uploads/achivements'; 
         $config['allowed_types'] = 'gif|jpg|png|webp|jpeg|WEBP|JPG|JPEG|PNG|GIF|webp';
         $config['overwrite'] = 1;

         $this->load->library('upload', $config);

         $this->upload->initialize($config);


         $upload_data = array();
         if (!$this->upload->do_upload('achievement-image')) {
            $error = array('error' => $this->upload->display_errors());
         } else {
             $upload_data = $this->upload->data();
         }
         
         if (isset($upload_data) && !empty($upload_data)) {
            $data = array(
               'category' => $this->input->post('category'),
               'achievement-image' => $upload_data["file_name"]
            );

         } else {

            $data = array(
               'category' => $this->input->post('category'),
               'achievement-image' => $this->input->post('old_img')
            );
         }
         // print_r($data);exit;
         $id = $this->input->post("achievement-id");

         $result = $this->Achievements_model->update_data($data, $id);
         // echo $result;exit;
         if ($result) {
            $this->session->set_flashdata('update-message', 'Nothing has been updated');

            redirect('admin/achievementsection');
         }else{
            $this->session->set_flashdata('update-message', 'Data updated sucessfully!');

            redirect('admin/achievementsection');
         }
      } else {
         $data = validation_errors();

         $this->load->view('admin/achievements/add', $data);
      }
   }



   public function delete()

   {

      $id = $this->uri->segment(4);

      $data["achievements"] = $this->Achievements_model->deletedata($id);

      $this->session->set_flashdata('delete-message', 'Data deleted sucessfully!');

      redirect('admin/achievementsection');
   }
}
