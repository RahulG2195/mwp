<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_controller{

	 public function __construct() {
        parent::__construct();
        $this->load->model('BlogModel');
    }


    public function index()
    {
    	$data['blog'] = $this->BlogModel->GetList(array());
    	//var_dump($data);exit();
    	$this->load->view('admin/blog/list', $data);
    }


    public function add()
    {

    	$this->form_validation->set_rules('blog-title', 'blog title', 'required');
        $this->form_validation->set_rules('blog-seo-url', 'seo url', 'required');
        $this->form_validation->set_rules('short-description', 'short description', 'required');    
        $this->form_validation->set_rules('description', 'description', 'required');    

         if ($this->form_validation->run()) 
        {
	         $files = $_FILES;
	         $config['upload_path']   = './uploads/blog-image'; 
	         $config['allowed_types'] = 'gif|jpg|png';
	         $_FILES['blog-image']['name']= date('s').'-'.$files['blog-image']['name'];
	         $this->load->library('upload', $config);
	         $this->upload->initialize($config);
	         if ( ! $this->upload->do_upload('blog-image')) 
	         {
	            $error = array('error' => $this->upload->display_errors()); 
	         }
	         else 
	         { 
	            $upload_data = $this->upload->data();
	         }

	         $data=array('blog-title' =>$this->input->post('blog-title') , 
	                     'blog-cat-id'=>$this->input->post('blog-cat-id'),
	                     'blog-seo-url'=>$this->input->post('blog-seo-url'),
	                     'meta-title'=>$this->input->post('meta-title'),
	                     'meta-description'=>$this->input->post('meta-description'),
	                     'short-description'=>$this->input->post('short-description'),
	                     'description'=>$this->input->post('description'),
	                     'blog-image'=>$upload_data["file_name"]
	                 );

	         $result=$this->BlogModel->InserData($data);
	         if ($result){
	         	$this->session->set_flashdata('add-message','Data added sucessfully!');
	            redirect('admin/blog');
	         }

        }  
        else
        {
        	$data['category'] = $this->BlogModel->getblogcategory(array());
	        $this->load->view('admin/blog/add',$data);
        }  	

    }

   public function edit()
   {
       $id=$this->uri->segment(4);
       $data['blog'] = $this->BlogModel->edit_data($id);
       $data['category'] = $this->BlogModel->getblogcategory(array());
       $this->load->view('admin/blog/edit',$data);
   }


   public function update()
   {
   	    $this->form_validation->set_rules('blog-title', 'blog title', 'required');
        $this->form_validation->set_rules('blog-seo-url', 'seo url', 'required');
        $this->form_validation->set_rules('short-description', 'short description', 'required');    
        $this->form_validation->set_rules('description', 'description', 'required');    

              
        if ($this->form_validation->run()) 
        {
            $files = $_FILES;
	        $config['upload_path']   = './uploads/blog-image'; 
	        $config['allowed_types'] = 'gif|jpg|png';
	        $_FILES['blog-image']['name']= date('s').'-'.$files['blog-image']['name'];
	        $this->load->library('upload', $config);
	        $this->upload->initialize($config);
	        if ( ! $this->upload->do_upload('blog-image')) 
	         {
	            $error = array('error' => $this->upload->display_errors()); 
	         }
	        else 
	         { 
	            $upload_data = $this->upload->data();
	         }

		         if($upload_data){
		            $data=array('blog-title' =>$this->input->post('blog-title') , 
	                     'blog-cat-id'=>$this->input->post('blog-cat-id'),
	                     'blog-seo-url'=>$this->input->post('blog-seo-url'),
	                     'meta-title'=>$this->input->post('meta-title'),
	                     'meta-description'=>$this->input->post('meta-description'),
	                     'short-description'=>$this->input->post('short-description'),
	                     'description'=>$this->input->post('description'),
	                     'blog-image'=>$upload_data["file_name"]);
		         }
		         else{
		         	    $data=array('blog-title' =>$this->input->post('blog-title') , 
	                     'blog-cat-id'=>$this->input->post('blog-cat-id'),
	                     'blog-seo-url'=>$this->input->post('blog-seo-url'),
	                     'meta-title'=>$this->input->post('meta-title'),
	                     'meta-description'=>$this->input->post('meta-description'),
	                     'short-description'=>$this->input->post('short-description'),
	                     'description'=>$this->input->post('description'));
		            }
		         
		         $id=$this->input->post("blog-id");

		         $result=$this->BlogModel->UpdateData($data,$id);
		         
		         $this->session->set_flashdata('update-message','Data updated sucessfully!');
	             redirect('admin/blog');
        }  
        else
        {  
            /*$user_role = ($this->session->userdata['logged_in']['user_role']);
            if ($this->session->userdata('logged_in') && $user_role == "1") {
                $id=$this->uri->segment(4);
                $data=validation_errors();
                $data["advisor"]=$this->Advisor_model->edit_advisor($id);
                $this->load->view('admin/about-advisor/edit-advisor',$data);
            } elseif ($this->session->userdata('logged_in') && $user_role == "2") {
                $id=$this->uri->segment(4);
                $data=validation_errors();
                $data["advisor"]=$this->Advisor_model->edit_advisor($id);
                $this->load->view('admin/about-advisor/edit-advisor',$data);
            } else {
                redirect('admin/login');
            }*/

            $data['category'] = $this->BlogModel->getblogcategory(array());
	        $this->load->view('admin/blog/add',$data);
        } 
   }


   public function delete()
     {
     	$id=$this->uri->segment(4);
     	$data["blog"]=$this->BlogModel->DeleteData($id);
     	redirect('admin/blogcategory');

     }


}


?>