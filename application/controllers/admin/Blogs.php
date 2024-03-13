<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Blogs extends CI_Controller{



    public function __construct()

    {  

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
         redirect('admin/Login');
      }
        $this->load->model('Blog_model', '', TRUE);

    }





    public function index()

    {

        $data["blog"]=$this->Blog_model->getdata();

        $this->load->view('admin/blog/view',$data);

    }



    public function add()

    {



        $this->form_validation->set_rules('blog_title', 'blog heading', 'required');

        $this->form_validation->set_rules('short_desc', 'blog description', 'required');

        $this->form_validation->set_rules('description', 'seo url', 'required');

       

        if ($this->form_validation->run()) 

        {

             $files = $_FILES;

             $config['upload_path']   = './uploads/blogs'; 

             $config['allowed_types'] = '*';

             $_FILES['blog_img']['name']= date('s').'-'.$files['blog_img']['name'];
             $_FILES['blog_sub_banner']['name']= date('s').'-'.$files['blog_sub_banner']['name'];

             $this->load->library('upload', $config);

             $this->upload->initialize($config);

             if ( ! $this->upload->do_upload('blog_img')) 

             {
                $error = array('error' => $this->upload->display_errors()); 
             }
             else 
             { 
                $upload_data = $this->upload->data();
             }
             if ( ! $this->upload->do_upload('blog_sub_banner')) 

             {
                $error = array('error' => $this->upload->display_errors()); 
             }
             else 
             { 
                $blog_sub_banner = $this->upload->data();
             }


             $data=array('blog_title' =>$this->input->post('blog_title') ,

                         'short_desc' =>$this->input->post('short_desc') ,

                         'description' =>$this->input->post('description') ,

                         'blog_img'=>$upload_data["file_name"],

                         'blog_sub_banner'=>$blog_sub_banner["file_name"],
                         'created_on' => date('Y-M-d H:i:s')
                        );

            // print_r($data);
            // print_r($data);
            // exit;
             $result=$this->Blog_model->add_data($data);

             

             if ($result){

                $this->session->set_flashdata('add-message','Blog added sucessfully!');

                redirect('admin/blogs');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/blog/add',$data);

        }





        // $this->load->view('admin/blog/add');

    }







    public function edit()

    {

        $id=$this->uri->segment(4);

        $data["blogs"]=$this->Blog_model->editdata($id);

        $this->load->view('admin/blog/edit',$data);

    }



    public function update()

    {

        $this->form_validation->set_rules('blog_title', 'blog heading', 'required');

        $this->form_validation->set_rules('short_desc', 'blog description', 'required');

        $this->form_validation->set_rules('description', 'seo url', 'required');
        $this->form_validation->set_rules('blog_id', 'blog_id', 'required');

       

        if ($this->form_validation->run()) 

        {

            $files = $_FILES;

            $config['upload_path']   = './uploads/blogs'; 

            $config['allowed_types'] = 'gif|jpg|png';

            $_FILES['blog_img']['name']= date('s').'-'.$files['blog_img']['name'];
            $_FILES['blog_sub_banner']['name']= date('s').'-'.$files['blog_sub_banner']['name'];

            $this->load->library('upload', $config);

            $this->upload->initialize($config);

            if ( ! $this->upload->do_upload('blog_img')) 

            {
               $error = array('error' => $this->upload->display_errors()); 
            }
            else 
            { 
               $upload_data = $this->upload->data();
            }
            if ( ! $this->upload->do_upload('blog_sub_banner')) 

            {
               $error = array('error' => $this->upload->display_errors()); 
            }
            else 
            { 
               $blog_sub_banner = $this->upload->data();
            }

            if($upload_data)

            {

                $data=array('blog_title' =>$this->input->post('blog_title') ,

                'short_desc' =>$this->input->post('short_desc') ,

                'description' =>$this->input->post('description') ,

                'blog_img'=>$upload_data["file_name"],

                'blog_sub_banner'=>$blog_sub_banner["file_name"]
               );

             }

            else

            {

                 $data=array('blog_title' =>$this->input->post('blog_title') ,

                 'short_desc' =>$this->input->post('short_desc') ,
 
                 'description' =>$this->input->post('description'));

            }



            $id=$this->input->post("blog-id");

            

            

            $result=$this->Blog_model->update_data($data,$id);

             

            if ($result){

                $this->session->set_flashdata('add-message','Data added sucessfully!');

                redirect('admin/blogs');

             }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/blog/add',$data);

        }



    }





    public function delete()

    {

        $id=$this->uri->segment(4);

        $data["blogs"]=$this->Blog_model->deletedata($id);

        $this->session->set_flashdata('delete-message','Data deleted sucessfully!');

        redirect('admin/blogs');

    }



}

?>

