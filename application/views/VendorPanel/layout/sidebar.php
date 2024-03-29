<?php 
    // helper for vendor id 
    $tab = Get_Vendor_detail();
	// echo $tab . '===';
    $id = $this->session->userdata('dv_id');
    
?>
<style>
     ul.nav-sidebar li img{
    width: 25px;
}
.nav-active{
    background-color: #494e53;
}
</style>
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?php echo base_url()?>VendorPanel/" target="blank" class="brand-link" style="height: 43px;background-color: #FF5969;">
         <!--<img src="<?php echo base_url(); ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
         <img src="<?php echo base_url(); ?>/assets/images/WMP-Launching-page-logo.png" alt="My Wedding Palette" class="brand-image elevation-0" style="opacity: .9;margin-left: 0;margin-right: 0;background-color: #FF5969;">
         <!--<span class="brand-text font-weight-light">My Wedding Palette</span>-->
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <?php if($this->session->userdata('comp_logo')!=''){ ?>
                    <img id="comp_logo_dashboard" data-defaultimg="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" src="<?php echo base_url(); ?>uploads/comp-logo/<?php echo $this->session->userdata('comp_logo') ?>" class="img-circle elevation-2" alt="Vendor Image">
                 <?php }else{ ?>
                    <img src="<?php echo base_url(); ?>assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
                <?php } ?>
             </div>
             <div class="info">
                <a href="<?php echo base_url(); ?>vendor-dashboard" class="d-block"><?php echo $this->session->userdata('user_name') ?></a>
             </div>
         </div>

         <!-- SidebarSearch Form -->
         <!-- <div class="form-inline">
                        <div class="input-group" data-widget="sidebar-search">
                            <input class="form-control form-control-sidebar" type="search" placeholder="Search" aria-label="Search">
                            <div class="input-group-append">
                                <button class="btn btn-sidebar">
                                    <i class="fas fa-search fa-fw"></i>
                                </button>
                            </div>
                        </div>
                    </div> -->

         <!-- Sidebar Menu -->
             <nav class="mt-2">
                 <ul id="nav-sidebar" class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <li id="0" class="nav-item">
                         <a href="<?php echo base_url(); ?>vendor-dashboard" class="nav-link">
                             <!--<i class="nav-icon fas fa-tachometer-alt"></i>-->
                             <img src="<?php echo base_url().'assets/vendor-icons/Dashboard.png'; ?>" alt="...">
                             <p>&nbsp;&nbsp;&nbsp;&nbsp;Dashboard</p>
                         </a>
                     </li>
                     <li id="1" class="nav-item">
                         <a href="<?php echo base_url() .'Data/' . $tab . '/' . $id; ?>" class="nav-link">
                             <!--<i class="nav-icon fas fa-edit"></i>-->
                             <img src="<?php echo base_url().'assets/vendor-icons/Profile.png'; ?>" alt="...">
                             <p>&nbsp;&nbsp;&nbsp;&nbsp;Profile Data</p>
                         </a>
                     </li>
                     <li id="2" class="nav-item">
                         <!-- <a href="<?php echo base_url().'vendor-dashboard/lead/'.$id; ?>" class="nav-link"> -->
                         <a href="<?php echo base_url().'vendor-dashboard/lead'; ?>" class="nav-link">
                             <!--<i class="nav-icon fas fa-envelope"></i>-->
                             <img src="<?php echo base_url().'assets/vendor-icons/Query.png'; ?>" alt="...">
                             <p>&nbsp;&nbsp;&nbsp;&nbsp;Query Leads</p>
                         </a>
                     </li>
                     <!-- <li class="nav-header">DATA</li>    -->
                     <!-- <li class="nav-header">SETTING</li> -->
                     <li id="3" class="nav-item">
                         <a href="<?php echo base_url().'vendor-dashboard/visitor'; ?>" class="nav-link">
                             <!--<i class="nav-icon fas fa-users"></i>-->
                             <img src="<?php echo base_url().'assets/vendor-icons/User-leads.png'; ?>" alt="...">
                             <p>&nbsp;&nbsp;&nbsp;&nbsp;User Visits</p>
                         </a>
                     </li>
                     <li id="4" class="nav-item">
                         <a href="<?php echo base_url().'user-review'; ?>" class="nav-link">
                             <!--<i class="nav-icon fas fa-ellipsis-h"></i>-->
                             <img src="<?php echo base_url().'assets/vendor-icons/User-review.png'; ?>" alt="...">
                             <p>&nbsp;&nbsp;&nbsp;&nbsp;User Review</p>
                         </a>
                     </li>
                     <li id="5" class="nav-item">
                         <a href="<?php echo base_url().'vendor-dashboard/deals'; ?>" class="nav-link">
                             <!--<i class="nav-icon fas fa-book"></i>-->
                             <img src="<?php echo base_url().'assets/vendor-icons/Deal.png'; ?>" alt="...">
                             <p>&nbsp;&nbsp;&nbsp;&nbsp;Deals & Coupon</p>
                         </a>
                     </li>
                     <li id="6" class="nav-item">
                         <a href="<?php echo base_url().'vendor-dashboard/plan'; ?>" class="nav-link">
                             <!--<i class="nav-icon fas fa-shopping-cart"></i>-->
                             <img src="<?php echo base_url().'assets/vendor-icons/Plan-Details.png'; ?>" alt="...">
                             <p>&nbsp;&nbsp;&nbsp;&nbsp;Plan Details</p>
                         </a>
                     </li>
                     <div class="user-panel  pb-3 mb-3 d-flex">
                     </div>
                     <li id="7"class="nav-item">
                         <a href="<?php echo base_url(); ?>VendorPanel/Login/update_password_page" class="nav-link">
                             <i class="nav-icon fas fa-columns"></i>
                             <p>Change Password</p>
                         </a>
                     </li>
                     <li id="8" class="nav-item">
                         <a href="<?php echo base_url(); ?>Vendor-Logout" class="nav-link">
                             <i class="nav-icon fas fa-arrow-circle-right"></i>
                             <p>Logout</p>
                         </a>
                     </li>
                 </ul>
             </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
