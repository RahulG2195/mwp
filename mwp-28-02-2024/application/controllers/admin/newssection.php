<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Newssection extends CI_Controller
{



   public function __construct()

   {

      parent::__construct();
      if (!$this->session->userdata('user_id')) {
         redirect('admin/Login');
      }
      $this->load->model('News_model', '', TRUE);
   }





   public function index()

   {

      $data["news"] = $this->News_model->getdata();

      $this->load->view('admin/news/view', $data);
   }


   public function add()

   {

      // $this->form_validation->set_rules('category', 'category', 'required');
      if (!empty($_FILES)) {

         $image_path = array();
         $files = $_FILES;
         // print_r($_FILES);exit;
         if (!empty($_FILES['news_img']['name'][0])) {
         
           $config['upload_path']   = 'uploads/news'; 
           $config['allowed_types'] = 'gif|jpg|png|webp|jpeg|WEBP|JPG|JPEG|PNG|GIF|webp';
           $config['overwrite'] = 1;
   
            $this->load->library('upload', $config);
            $this->upload->initialize($config);
            // Upload multiple images
            $files = $_FILES['news_img'];

            $file_count = is_array($files['name']) ? count($files['name']) : 0;
            
            for ($i = 0; $i < $file_count; $i++) {
                $_FILES['news_img']['name'] = $files['name'][$i];
                $_FILES['news_img']['type'] = $files['type'][$i];
                $_FILES['news_img']['tmp_name'] = $files['tmp_name'][$i];
                $_FILES['news_img']['error'] = $files['error'][$i];
                $_FILES['news_img']['size'] = $files['size'][$i];

                if ($this->upload->do_upload('news_img')) {
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
            'news_img' => $image_path
         );
        

         $result = $this->News_model->add_data($data);

         if ($result) {

            $this->session->set_flashdata('add-message', 'Data added sucessfully!');

            redirect('admin/Newssection');
         }
      }else{
         $this->load->view('admin/news/add');
      }
   }



   public function edit()

   {

      $id = $this->uri->segment(4);
      $data["news"] = $this->News_model->editdata($id);

      $this->load->view('admin/news/edit', $data);
   }



   public function update()

   {

      // $this->form_validation->set_rules('category', 'category', 'required');
      // if ($this->form_validation->run()) {

         $files = $_FILES;
         // print_r($files);exit;
         $config['upload_path']   = 'uploads/news'; 
         $config['allowed_types'] = 'gif|jpg|png|webp|jpeg|WEBP|JPG|JPEG|PNG|GIF|webp';
         $config['overwrite'] = 1;

         $this->load->library('upload', $config);

         $this->upload->initialize($config);


         $upload_data = array();
         if (!$this->upload->do_upload('news_img')) {
            $error = array('error' => $this->upload->display_errors());
         } else {
             $upload_data = $this->upload->data();
         }
         
         if (isset($upload_data) && !empty($upload_data)) {
            $data = array(
               'news_img' => $upload_data["file_name"]
            );
            // echo 1;
         } else {

            $data = array(
               'news_img' => $this->input->post('old_img')
            );
         }

         // print_r($data);exit;
         $id = $this->input->post("new_id");
         // echo $id;exit;
         $result = $this->News_model->update_data($data, $id);
         // echo $result;exit;
         if ($result) {
            $this->session->set_flashdata('update-message', 'Nothing has been updated');

            redirect('admin/Newssection');
         }else{
            $this->session->set_flashdata('update-message', 'Data updated sucessfully!');

            redirect('admin/Newssection');
         }
      // } else {
      //    $data = validation_errors();

      //    $this->load->view('admin/news/add', $data);
      // }
   }



   public function delete()

   {

      $id = $this->uri->segment(4);

      $data["news"] = $this->News_model->deletedata($id);

      $this->session->set_flashdata('delete-message', 'Data deleted sucessfully!');

      redirect('admin/Newssection');
   }
}
