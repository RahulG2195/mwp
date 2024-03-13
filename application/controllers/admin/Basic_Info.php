<?php



defined('BASEPATH') or exit('No direct script access allowed');



class Basic_Info extends CI_Controller{

    public function __construct()

    {  

        parent::__construct();
        if (!$this->session->userdata('user_id')) {
         redirect('admin/Login');
      }
        $this->load->model('Basic_Info_model', '', TRUE);

    }





    public function index()

    {
    	$data["Basic_Info"]=$this->Basic_Info_model->getdata();
		$this->load->view('admin/basic_info/view', $data);
    }
    public function add()

    {
       $this->form_validation->set_rules('comp_name', 'name', 'required');
       $this->form_validation->set_rules('email1', 'email', 'required');
       $this->form_validation->set_rules('phone1', 'phone', 'required');
       $this->form_validation->set_rules('address1', 'address1', 'required');
       $this->form_validation->set_rules('address2', 'address2', 'required');
       $this->form_validation->set_rules('map1', 'map1', 'required');
       $this->form_validation->set_rules('map2', 'map2', 'required');
       
       $id=$this->uri->segment(4);
       if(isset($id) && $id !== '' && $id !== NULL){
         //   echo var_dump($id); exit;
         $data["edit_info"]=$this->Basic_Info_model->editdata($id);
         $this->load->view('admin/basic_info/add',$data);
   
       }elseif ($this->form_validation->run()) 
       {
            $files = $_FILES;
            $config['upload_path']  = 'uploads';
            $config['allowed_types'] = 'gif|jpg|png|pdf|webp|WEBP';
            $_FILES['comp_logo']['name'] = date('s') . '-' . $files['comp_logo']['name'];

            $this->load->library('upload', $config);
            $this->upload->initialize($config);

            if ($this->upload->do_upload('comp_logo')) {
               $image = $this->upload->data();
            }elseif($this->input->post('old_img')){
               $image = $this->input->post('old_img');
            }else{
               echo $this->upload->display_errors() ;
               exit;
            }
               $data = array(
                  'comp_name' => $this->input->post('comp_name'),
                  'email1' => $this->input->post('email1'),
                  'email2' => $this->input->post('email2'),
                  'phone1' => $this->input->post('phone1'),
                  'phone2' => $this->input->post('phone2'),
                  'address1' => $this->input->post('address1'),
                  'address2' => $this->input->post('address2'),
                  'comp_logo' => isset($image['file_name']) ? $image['file_name'] : $image,
                  'map1' => $this->input->post('map1'),
                  'map2' => $this->input->post('map2'),
                  'linkedin' => $this->input->post('linkedin'),
                  'youtube' => $this->input->post('youtube'),
                  'twitter' => $this->input->post('twitter'),
                  'instagram' => $this->input->post('instagram'),
                  'facebook' => $this->input->post('facebook'),
               );
               // print_r($data);exit;
            
            if($this->input->post('comp_id') && $this->input->post('update')){
               $id = $this->input->post('comp_id');
               $result = $this->Basic_Info_model->update_data($data,$id);
            }else{
               $result = $this->Basic_Info_model->add_data($data);
            }
	         if ($result){

	         	$this->session->set_flashdata('add-message','Data added sucessfully!');

	            redirect('admin/Basic_Info');

	         }
        }else
        {
           $data=validation_errors();

           $this->load->view('admin/basic_info/add',$data);

        }  	   

    }





    public function edit()

    {

    	$id=$this->uri->segment(4);

    	$data["Basic_Info"]=$this->Basic_Info_model->editdata($id);

    	$this->load->view('admin/basic_info/edit',$data);

    }





    public function update()

    {

    	$this->form_validation->set_rules('main-heading', 'name', 'required');

        $this->form_validation->set_rules('sub-heading', 'designation', 'required');

        $this->form_validation->set_rules('content', 'content', 'required');

       

        if ($this->form_validation->run()) 

        {

	         $data=array('main-heading' =>$this->input->post('main-heading') ,

                         'sub-heading' =>$this->input->post('sub-heading') , 

                         'content'=>$this->input->post('content'));

	        

	         $id=$this->input->post("about-id");

	         $result=$this->Basic_Info_model->update_data($data,$id);

	         

	         if ($result){

	         	$this->session->set_flashdata('update-message','Data added sucessfully!');

	            redirect('admin/Basic_Info');

	         }



        }  

        else

        {

           $data=validation_errors();

           $this->load->view('admin/basic_info/edit',$data);

        }  	    

    }





    public function delete()

    {

    	$id=$this->uri->segment(4);

    	$data["Basic_Info"]=$this->Basic_Info_model->deletedata($id);

    	$this->session->set_flashdata('delete-message','Data deleted sucessfully!');

    	redirect('admin/Basic_Info');



    }



}

