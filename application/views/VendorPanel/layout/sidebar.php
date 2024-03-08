<?php 
    // helper for vendor id 
    $tab = Get_Vendor_detail();
	// echo $tab . '===';
    $id = $this->session->userdata('dv_id');
    
?>
 
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="<?php echo base_url()?>VendorPanel/" target="blank" class="brand-link" style="background-color: #FF5969;height: 55px;">
         <!--<img src="<?php echo base_url(); ?>/assets/dist/img/AdminLTELogo.png" alt="AdminLTE Logo" class="brand-image img-circle elevation-3" style="opacity: .8">-->
         <img src="<?php echo base_url(); ?>/assets/images/WMP-Launching-page-logo.png" alt="My Wedding Palette" class="brand-image elevation-3" style="opacity: .9;margin-left: 0;margin-right: 0;">
         <!--<span class="brand-text font-weight-light">My Wedding Palette</span>-->
     </a>

     <!-- Sidebar -->
     <div class="sidebar">
         <!-- Sidebar user (optional) -->
         <div class="user-panel mt-3 pb-3 mb-3 d-flex">
             <div class="image">
                 <img src="<?php echo base_url(); ?>/assets/dist/img/user2-160x160.jpg" class="img-circle elevation-2" alt="User Image">
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
                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>vendor-dashboard" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Dashboard</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url() .'Data/' . $tab . '/' . $id; ?>" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Profile Data</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url().'vendor-dashboard/lead/'.$id; ?>" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Leads</p>
                         </a>
                     </li>
                     <!-- <li class="nav-header">DATA</li>    -->
                     <!-- <li class="nav-header">SETTING</li> -->
                     <li class="nav-item">
                         <a href="<?php echo base_url().'vendor-dashboard/visitor/'.$id; ?>" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Users</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url().'vendor-dashboard/plan/'.$id; ?>" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Plan</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>VendorPanel/Login/update_password_page" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Change Password</p>
                         </a>
                     </li>
                 </ul>
             </nav>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
