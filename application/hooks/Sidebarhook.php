<?php 

class SidebarHook {
    protected $CI;

    public function __construct() {
        $this->CI =& get_instance();
    }

    public function initialize() {
        // Load the necessary model and fetch the data
        $this->CI->load->model('admin/CategoryModel');
        $categories['categories'] = $this->CI->CategoryModel->GetList();

        $this->CI->load->view('admin/layout/sidebar', $categories);
    }
}
?>