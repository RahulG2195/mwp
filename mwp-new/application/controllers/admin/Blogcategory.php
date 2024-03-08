<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Blogcategory extends CI_controller{

	 public function __construct() {
        parent::__construct();
        $this->load->model('BlogCategoryModel');
    }


    public function index()
    { 
    	$response['list'] = $this->BlogCategoryModel->GetList(array());
    	$this->load->view('admin/blog-category/list', $response);

    }

    
    public function add()
    {

    	$this->form_validation->set_rules('blog-category-name', 'category name', 'required');
        $this->form_validation->set_rules('blog-category-url', 'blog url', 'required');
        
            
        if ($this->form_validation->run()) 
        {
	          $files = $_FILES;
	         $config['upload_path']   = './uploads/blog-category'; 
	         $config['allowed_types'] = 'gif|jpg|png';
	         $_FILES['category-image']['name']= date('s').'-'.$files['category-image']['name'];
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);
	        if ( ! $this->upload->do_upload('category-image')) 
	         {
	            $error = array('error' => $this->upload->display_errors()); 
	         }
	        else 
	         { 
	            $upload_data = $this->upload->data();
	         }

	         $data=array('blog-category-name' =>$this->input->post('blog-category-name') ,
	                     'blog-category-url' =>$this->input->post('blog-category-url') , 
	                     'category-image'=>$upload_data["file_name"]);
	        
	         $result=$this->BlogCategoryModel->InserData($data);
	         
	         if ($result){
	         	$this->session->set_flashdata('add-message','Data added sucessfully!');
	            redirect('admin/blogcategory');
	         }
        }  
        else
        {
           $data=validation_errors();
           $this->load->view('admin/blog-category/add',$data);
        }  	
    }


     public function edit()
     {
     	$id=$this->uri->segment(4);
     	$data["blogcategory"]=$this->BlogCategoryModel->edit_data($id);
     	//var_dump($data["blogcategory"]);exit();
     	$this->load->view('admin/blog-category/edit',$data);
     	
     }


     public function update()
     {
    	$this->form_validation->set_rules('blog-category-name', 'category name', 'required');
        $this->form_validation->set_rules('blog-category-url', 'blog url', 'required');
        
        if ($this->form_validation->run()) 
        {
	         $files = $_FILES;
	         $config['upload_path']   = './uploads/blog-category'; 
	         $config['allowed_types'] = 'gif|jpg|png';
	         $_FILES['category-image']['name']= date('s').'-'.$files['category-image']['name'];
	            $this->load->library('upload', $config);
	            $this->upload->initialize($config);
	        if ( ! $this->upload->do_upload('category-image')) 
	         {
	            $error = array('error' => $this->upload->display_errors()); 
	         }
	        else 
	         { 
	            $upload_data = $this->upload->data();
	         }


	         if($upload_data){
		         	$data=array('blog-category-name' =>$this->input->post('blog-category-name') ,
	                     'blog-category-url' =>$this->input->post('blog-category-url') , 
	                     'category-image'=>$upload_data["file_name"]);
		         }
		         else
		         {
		         	
		         	$data=array('blog-category-name' =>$this->input->post('blog-category-name') ,
	                     'blog-category-url' =>$this->input->post('blog-category-url'));
		         }

		        // var_dump($data);exit();
  
  			 $id=$this->input->post('blog-category-id');
	         $result=$this->BlogCategoryModel->UpdateData($id,$data);
	      
	         	$this->session->set_flashdata('add-message','Data added sucessfully!');
	            redirect('admin/blogcategory');
	         
	      
        }  
        else
        {
           $data=validation_errors();
           $this->load->view('admin/blog-category/add',$data);
        }  	

     }
     
     public function delete()
     {
     	$id=$this->uri->segment(4);
     	$data["blogcategory"]=$this->BlogCategoryModel->DeleteData($id);
     	redirect('admin/blogcategory');

     }
   
}


?>