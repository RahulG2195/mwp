<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Blog extends CI_Controller {

	 public function __construct() {
        parent::__construct();
        $this->load->model('BlogModel');
    }
    public function index()
    {
        $data["blog"]=$this->BlogModel->getblogdata();
        $data["blogcategory"]=$this->BlogModel->getblogcategory();
        $this->load->view('front/pages/blog',$data);
    }

    function Blog_pagination() {
        $start = $this->input->post('start');
        $data["blog"] = $this->BlogModel->getblogdata((int) $start);
        // print_r($data["blog"]);
        $output = '';
        foreach ($data['blog'] as $value) 
        {
            $catid=$value["blog-cat-id"];
            $datas=$this->BlogModel->getblogcategoyname($catid);
            
            $output .= '<div class="col-md-6 col-lg-4">
                            <a href="' .base_url('blog/blog_detail') .'/' . $value["blog-seo-url"] .'">
                                <div class="card blog_card">
                                    <img src="' .base_url() .'uploads/blog-image/' .$value["blog-image"] .'" class="card-img-top img-fluid" alt="...">
                                    <div class="card-body blog_cbody">
                                        <small>' .$datas["blog-category-name"]. '</small>
                                        <h5 class="card-title blog_ctitle">' . $value["blog-title"]. '</h5>
                                        <p class="card-text blog_ctext">'. substr($value["short-description"],0,200).'.....</p>
                                    </div>
                                </div>

                            </a>
                        </div>';
        }
            echo $output;
    }

    function Blog_detail() {
    
    $blogurl=$this->uri->segment(3);

    $data["blogdetail"]=$this->BlogModel->getblogdetail($blogurl);
    //var_dump($blogurl);exit();
    $this->load->view('front/pages/blog_detail',$data);
   }
   
   
   public function blogcategory()
   {   $data["blogcategory"]=$this->BlogModel->getblogcategory();
       $blogurl=$this->uri->segment(3);
       $iddata["catid"]=$this->BlogModel->getblogcategoryid($blogurl);
       $id=$iddata["catid"][0]["blog-category-id"];
      //var_dump($id);exit();
       $data["blog"]=$this->BlogModel->getblogbycategory($id);
       //var_dump($blog);exit();
       $this->load->view('front/pages/blog-category',$data);
   }
   
}
