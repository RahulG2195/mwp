 <!-- Main Sidebar Container -->
 <aside class="main-sidebar sidebar-dark-primary elevation-4">
     <!-- Brand Logo -->
     <a href="https://myweddingpalette.com/" target="blank" class="brand-link" style="background-color: #FF5969;height: 55px;">
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
                 <a href="#!" class="d-block"><?php echo $this->session->userdata('user_name') ?></a>
                 <!-- <a style="pointer-events: none;" href="#" class="d-block"><span style="font-weight: 700;">Admin</span> / <span style="opacity: 0.3;"> Vendor</span></a> -->
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
         <?php
            if (!empty($this->session->userdata('role')) && $this->session->userdata('user_name') !== '' && $this->session->userdata('role') === 'vendor') {

                ?>
                <nav class="mt-2">
                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/Vendor_Dashboard/index" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Dashboard</p>
                         </a>
                     </li>

                     <!--active-->
                     <li class="nav-header">MASTER Data</li>
                     <li class="nav-item">
                        <?php 
                        // helper for vendor id 
                        $tab = Get_Vendor_detail();
                        $id = $this->session->userdata('dv_id');
                        
                        ?>
                         <a href="<?php echo base_url() .'Single_data/' . $tab . '/' . $id ?>" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Profile</p>
                         </a>
                     </li>
                     <!-- <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/category" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Plan</p>
                         </a>
                     </li> -->
                 </ul>
             </nav>
                <?php 
            } else {
            ?>
             <nav class="mt-2">
                 <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/index" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Dashboard</p>
                         </a>
                     </li>

                     <!--active-->
                     <li class="nav-header">MASTER Data</li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/city" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Cities</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/category" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Categories</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/subcategory" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Sub Categories</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/reviewparameter" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Review Parameters</p>
                         </a>
                     </li>
                     <!--active-->
                     <li class="nav-header">Event Management</li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/event" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Event List</p>
                         </a>
                     </li>
                     <!--active-->
                     <li class="nav-header">Admin Management</li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/admin" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Admin List</p>
                         </a>
                     </li>
                     <!--active-->
                     <li class="nav-header">Vendor Management</li>
                     <!-- <li class="nav-item">
                                <a href="<?php echo base_url(); ?>admin/vendor" class="nav-link">
                                    <i class="nav-icon fas fa-file"></i>
                                    <p>All Vendors</p>
                                </a> -->
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/Admin_Vendor/Bridal_Wear" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Bridal Wear</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/Admin_Vendor/Jewellery" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Bridal Jewellery</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/Admin_Vendor/Catering" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Catering</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/Admin_Vendor/Decoration" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Decoration</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/Admin_Vendor/Gift" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Gifts</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/Admin_Vendor/Groom_wear" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Groom Wear</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/Admin_Vendor/Inivitation" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Invitations</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/Admin_Vendor/MakeUp" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Make Up Artists</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/Admin_Vendor/Mehendi" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Mehendi Artists</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/Admin_Vendor/Photography" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Photographers</p>
                         </a>
                     </li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/Admin_Vendor/Venue" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Venues</p>
                         </a>
                     </li>
                     <!--active-->
                     <li class="nav-header">Listing Management</li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/listing" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Listing</p>
                         </a>
                     </li>
                     <li class="nav-header">Blog Category</li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/blogcategory" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Blog category list</p>
                         </a>
                     </li>
                     <li class="nav-header">Blog</li>
                     <li class="nav-item">
                         <a href="<?php echo base_url(); ?>admin/blog" class="nav-link">
                             <i class="nav-icon fas fa-file"></i>
                             <p>Blog list</p>
                         </a>
                     </li>
                 </ul>
             </nav>
         <?php } ?>
         <!-- /.sidebar-menu -->
     </div>
     <!-- /.sidebar -->
 </aside>
