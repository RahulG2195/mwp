<?php 
function Get_Vendor_detail() {
    $CI = &get_instance(); // Get the CodeIgniter instance
    if(!empty($CI->session->userdata('dv_id'))){
            
        $id = $CI->session->userdata('dv_id');
        $CI->load->model('admin/VendorModel'); // Load your model
        $categories = $CI->VendorModel->Get_vendor_detail($id); // Assuming this is your model function
        $cat = $categories['category'];
        if($cat == 1){
            $tab = 've';
        }elseif($cat == 2){
            $tab = 'bw';
        }elseif($cat == 3){
            $tab = 'gw';
        }elseif($cat == 4){
            $tab = 'ph';
        }elseif($cat == 5){
            $tab = 'mu';
        }elseif($cat == 6){
            $tab = 'me';
        }elseif($cat == 7){
            $tab = 'bj';
        }elseif($cat == 8){
            $tab = 'dc';
        }elseif($cat == 9){
            $tab = 'gf';
        }elseif($cat == 10){
            $tab = 'ct';
        }elseif($cat == 13){
            $tab = 'in';
        }
        return $tab;
    }   
}
?>