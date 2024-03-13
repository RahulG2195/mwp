<?php $this->load->view('admin/layout/header'); ?>
           
<?php $this->load->view('admin/layout/sidebar'); ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="<?php echo base_url(); ?>AdminDashboard/index">Home</a></li>
              <li class="breadcrumb-item active">Admin Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">

                <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  Notifications
                </h3>

                <!-- <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div> -->
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                    
                    <?php 
                    $vendoreditrequestcount=0;
                    if(!empty($vendoreditrequest))
                  {
                        $vendoreditrequestcount=count($vendoreditrequest);
                    ?>
                  <li>
                    <!-- todo text -->
                  <a href="<?php echo base_url(); ?>admin/Vendor_edit_request" class="small-box-footer">
                    <span class="text">Vendor Edit Request</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> <?php echo $vendoreditrequestcount; ?> request</small>
                    <!-- General tools such as edit or delete-->
                  </a>
                  <a href="<?php echo base_url(); ?>admin/Vendor_edit_request" class="small-box-footer">
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </a>
                  </li>
                  <?php } ?>

                    <?php 
                    $birdal_count=0;
                    if(!empty($birdal_count))
                  {
                        $birdal_count=$birdal_count;
                    ?>
                  <li>
                    <!-- todo text -->
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Bridal_Wear" class="small-box-footer">
                    <span class="text">Bridal Wear</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-info"><i class="far fa-clock"></i> <?php echo $birdal_count; ?> new</small>
                    <!-- General tools such as edit or delete-->
                  </a>
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Bridal_Wear" class="small-box-footer">
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </a>
                  </li>
                  <?php } ?>

                  <?php 
                    $bridaljwellery_cnt=0;
                    if(!empty($bridaljwellery_count))
                  {
                        $bridaljwellery_cnt=$bridaljwellery_count;
                    ?>
                  <li>
                    <!-- todo text -->
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Jewellery" class="small-box-footer">
                    <span class="text">Bridal Jewellery</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-warning"><i class="far fa-clock"></i> <?php echo $bridaljwellery_cnt; ?> new</small>
                    <!-- General tools such as edit or delete-->
                  </a>
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Jewellery" class="small-box-footer">
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </a>
                  </li>
                  <?php } ?>

                   <?php 
                    $catering_cnt=0;
                    if(!empty($catering_count))
                  {
                        $catering_cnt=$catering_count;
                    ?>
                  <li>
                    <!-- todo text -->
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Catering" class="small-box-footer">
                    <span class="text">Catering</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-success"><i class="far fa-clock"></i> <?php echo $catering_cnt; ?> new</small>
                    <!-- General tools such as edit or delete-->
                  </a>
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Catering" class="small-box-footer">
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </a>
                  </li>
                  <?php } ?>

                   <?php 
                    $decoration_cnt=0;
                    if(!empty($decoration_count))
                  {
                        $decoration_cnt=$decoration_count;
                    ?>
                  <li>
                    <!-- todo text -->
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Decoration" class="small-box-footer">
                    <span class="text">Decoration</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> <?php echo $decoration_cnt; ?> new</small>
                    <!-- General tools such as edit or delete-->
                  </a>
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Decoration" class="small-box-footer">
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </a>
                  </li>
                  <?php } ?>

                   <?php 
                    $gift_cnt=0;
                    if(!empty($gift_count))
                  {
                        $gift_cnt=$gift_count;
                    ?>
                  <li>
                    <!-- todo text -->
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Gift" class="small-box-footer">
                    <span class="text">Gifts</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> <?php echo $gift_cnt; ?> new</small>
                    <!-- General tools such as edit or delete-->
                  </a>
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Gift" class="small-box-footer">
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </a>
                  </li>
                  <?php } ?>

                   <?php 
                    $groom_cnt=0;
                    if(!empty($groom_count))
                  {
                        $groom_cnt=$groom_count;
                    ?>
                  <li>
                    <!-- todo text -->
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Groom_wear" class="small-box-footer">
                    <span class="text">Groom Wear</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-info"><i class="far fa-clock"></i> <?php echo $groom_cnt; ?> new</small>
                    <!-- General tools such as edit or delete-->
                  </a>
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Groom_wear" class="small-box-footer">
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </a>
                  </li>
                  <?php } ?>

                  <?php 
                    $inivitations_cnt=0;
                    if(!empty($inivitations_count))
                  {
                        $inivitations_cnt=$inivitations_count;
                    ?>
                  <li>
                    <!-- todo text -->
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Inivitation" class="small-box-footer">
                    <span class="text">Invitations</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-warning"><i class="far fa-clock"></i> <?php echo $inivitations_cnt; ?> new</small>
                    <!-- General tools such as edit or delete-->
                  </a>
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Invitation" class="small-box-footer">
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </a>
                  </li>
                  <?php } ?>

                  <?php 
                    $makeup_cnt=0;
                    if(!empty($makeup_count))
                  {
                        $makeup_cnt=$makeup_count;
                    ?>
                  <li>
                    <!-- todo text -->
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/MakeUp" class="small-box-footer">
                    <span class="text">Make Up Artists</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-success"><i class="far fa-clock"></i> <?php echo $makeup_cnt; ?> new</small>
                    <!-- General tools such as edit or delete-->
                  </a>
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/MakeUp" class="small-box-footer">
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </a>
                  </li>
                  <?php } ?>

                  <?php 
                    $mehendiartist_cnt=0;
                    if(!empty($mehendiartist_count))
                  {
                        $mehendiartist_cnt=$mehendiartist_count;
                    ?>
                  <li>
                    <!-- todo text -->
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Mehendi" class="small-box-footer">
                    <span class="text">Mehendi Artists</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> <?php echo $mehendiartist_cnt; ?> new</small>
                    <!-- General tools such as edit or delete-->
                  </a>
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Mehendi" class="small-box-footer">
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </a>
                  </li>
                  <?php } ?>

                  <?php 
                    $photography_cnt=0;
                    if(!empty($photography_count))
                  {
                        $photography_cnt=$photography_count;
                    ?>
                  <li>
                    <!-- todo text -->
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Photography" class="small-box-footer">
                    <span class="text">Photographers</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> <?php echo $photography_cnt; ?> new</small>
                    <!-- General tools such as edit or delete-->
                  </a>
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Photography" class="small-box-footer">
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </a>
                  </li>
                  <?php } ?>

                  <?php 
                    $venue_cnt=0;
                    if(!empty($venue_count))
                  {
                        $venue_cnt=$venue_count;
                    ?>
                  <li>
                    <!-- todo text -->
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Venue" class="small-box-footer">
                    <span class="text">Venues</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-info"><i class="far fa-clock"></i> <?php echo $venue_cnt; ?> new</small>
                    <!-- General tools such as edit or delete-->
                  </a>
                  <a href="<?php echo base_url(); ?>admin/admindashboard/new/Venue" class="small-box-footer">
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </a>
                  </li>
                  <?php } ?>
                  
                  
                  
                  <!-- <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Make the theme responsive</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Check your messages and notifications</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li> -->
                </ul>
              </div>
              <!-- /.card-body -->
              <!-- <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
              </div> -->
            </div>
            <!-- /.card -->

      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->


        <!-- Vendor data -->
        <div class="row">
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">

              <?php 
              if(!empty($user)){
                $regsuercount=count($user); 
              }
              
              
                //echo $regsuercount;
              ?>
                <h3><?php echo $regsuercount;  ?></h3>

                <p>Total registered user</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                  $vrecommenddata=$this->DashboardModel->getvendorrecommenddata();
                  $recommendcount=count($vrecommenddata);
                  $decordata=$this->DashboardModel->getdecorddata();
                  $designcount=count($decordata);
                  $totalcountpaiduser="";
                  $totalcountpaiduser= $recommendcount + $designcount;
                  //var_dump($designcount);
                  // if(!empty($paidvendor)){
                  //   $paidvendor=count($paidvendor); 
                  // }
                  
                ?>
                <h3><?php echo $totalcountpaiduser; ?><sup style="font-size: 20px"></sup></h3>

                <p>MWP paid user</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                  if(!empty($totalvendor)){
                    $totalvendor=count($totalvendor); 
                  }
                  
                ?>

                <h3><?php echo $totalvendor ?></h3>

                <p>Total vendors</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php if(!empty($paidvendor)){
                    $paidvendorcount=count($paidvendor);
              } ?>  
                <h3><?php echo $paidvendorcount; ?></h3>

                <p>Paid vendors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php if(!empty($totalactivevendor)){
                    $activevendor=count($totalactivevendor);
                  } 
                ?>
                <h3><?php echo $activevendor; ?></h3>

                <p>Active vendors</p>
              </div>
              <div class="icon">
                <i class="ion ion-pie-graph"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
        </div>

       <!-- Service data  -->

        <div class="row">
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                  
                <?php if(!empty($weddinglead)){
                    $weddinglead=count($weddinglead);
              } 
              ?>
                <h3><?php echo $weddinglead;  ?></h3>

                <p>Complete Wedding planning Data</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php if(!empty($vendordata))
                   {
                    $vendorrecommendata=count($vendordata);
                   } 
                ?>  
                <h3><?php echo $vendorrecommendata; ?><sup style="font-size: 20px"></sup></h3>

                <p>Vendor recommendation data</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                  
                <?php if(!empty($designdecordata)){
                    $designdata=count($designdecordata);
                  } 
                ?>  
                <h3><?php echo $designdata; ?></h3>

                <p>Design and decor data</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          
          <!-- ./col -->
        </div>


        <!-- Vendor category data -->

        <div class="row">
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                <?php if(!empty($venuedata))
                 {
                    $designdata=count($venuedata);
                 } 
                ?>  
                <h3><?php echo $designdata; ?></h3>

                <p>Venue vendor data</p>
              </div>
              <div class="icon">
                <i class="ion ion-bag"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php if(!empty($birdaldata))
                {
                    $bridaldata=count($birdaldata);
                } 
              ?>  
                <h3><?php echo $bridaldata; ?><sup style="font-size: 20px"></sup></h3>

                <p>Bridal wear data</p>
              </div>
              <div class="icon">
                <i class="ion ion-stats-bars"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php if(!empty($groomdata)){
                    $groomdata=count($groomdata);
                   } 
                ?>
                <h3><?php echo $groomdata; ?></h3>

                <p>Groom wear data</p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          
          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php if(!empty($photography))
                  {
                    $photography=count($photography);
                  } 
              ?>  
                <h3><?php echo $photography; ?></h3>

                <p>Photographers data </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
               <?php if(!empty($makeup))
                {
                      $makeup=count($makeup);
                } 
                ?>  
                <h3><?php echo $makeup; ?></h3>

                <p>Makeup artist data </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                  
                <?php if(!empty($mehendiartist))
                {
                      $mehendiartist=count($mehendiartist);
                } 
                ?>  
                <h3><?php echo $mehendiartist; ?></h3>

                <p>Mehendi artist data </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->         

          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                   if(!empty($bridaljwellery))
                  {
                        $bridaljwellery=count($bridaljwellery);
                  } 
                ?>  
                <h3><?php echo $bridaljwellery; ?></h3>

                <p>Bridal Jwellery Data </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->         

          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php 
                  if(!empty($decoration))
                  {
                        $decoration=count($decoration);
                  } 
                ?>  
                <h3><?php echo $decoration; ?></h3>

                <p>Decoration data </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->          
          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-primary">
              <div class="inner">
                  
                <?php 
                if(!empty($gift))
                  {
                        $gift=count($gift);
                  } 
                ?>  
                <h3><?php echo $gift; ?></h3>

                <p>Gift data </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->          
          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <?php 
                if(!empty($catering))
                  {
                        $catering=count($catering);
                  } 
              ?>  
                <h3><?php echo $catering; ?></h3>

                <p>Catering data </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->       
          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-warning">
              <div class="inner">
                <?php 
                if(!empty($inivitations))
                  {
                        $inivitations=count($inivitations);
                  } 
                ?>  
                <h3><?php echo $inivitations; ?></h3>

                <p>Invitation data </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="#" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->
          <!-- ./col -->
          <div class="col-lg-3">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <?php
                $vendoreditrequestcount = 0;
                if(!empty($vendoreditrequestcount))
                  {
                        $vendoreditrequestcount=count($vendoreditrequestcount);
                  } 
                ?>  
                <h3><?php echo $vendoreditrequestcount; ?></h3>

                <p>Vendor Edit Request </p>
              </div>
              <div class="icon">
                <i class="ion ion-person-add"></i>
              </div>
              <a href="<?php echo base_url(); ?>admin/Vendor_edit_request" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
          <!-- ./col -->          
          
        </div>


        <!-- /.row -->
        <!-- Main row -->
        <div class="row d-none">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Tota
                </h3>
                <div class="card-tools">
                  <ul class="nav nav-pills ml-auto">
                    <li class="nav-item">
                      <a class="nav-link active" href="#revenue-chart" data-toggle="tab">Area</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#sales-chart" data-toggle="tab">Donut</a>
                    </li>
                  </ul>
                </div>
              </div><!-- /.card-header -->
              <div class="card-body">
                <div class="tab-content p-0">
                  <!-- Morris chart - Sales -->
                  <div class="chart tab-pane active" id="revenue-chart"
                       style="position: relative; height: 300px;">
                      <canvas id="revenue-chart-canvas" height="300" style="height: 300px;"></canvas>
                   </div>
                  <div class="chart tab-pane" id="sales-chart" style="position: relative; height: 300px;">
                    <canvas id="sales-chart-canvas" height="300" style="height: 300px;"></canvas>
                  </div>
                </div>
              </div><!-- /.card-body -->
            </div>
            <!-- /.card -->

            <!-- DIRECT CHAT -->
            <div class="card direct-chat direct-chat-primary">
              <div class="card-header">
                <h3 class="card-title">Direct Chat</h3>

                <div class="card-tools">
                  <span title="3 New Messages" class="badge badge-primary">3</span>
                  <button type="button" class="btn btn-tool" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-tool" title="Contacts" data-widget="chat-pane-toggle">
                    <i class="fas fa-comments"></i>
                  </button>
                  <button type="button" class="btn btn-tool" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <!-- Conversations are loaded here -->
                <div class="direct-chat-messages">
                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 2:00 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="<?php echo base_url(); ?>/assets/dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Is this template really for free? That's unbelievable!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 2:05 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="<?php echo base_url(); ?>/assets/dist/img/user3-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      You better believe it!
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message. Default to the left -->
                  <div class="direct-chat-msg">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-left">Alexander Pierce</span>
                      <span class="direct-chat-timestamp float-right">23 Jan 5:37 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="<?php echo base_url(); ?>/assets/dist/img/user1-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      Working with AdminLTE on a great new app! Wanna join?
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                  <!-- Message to the right -->
                  <div class="direct-chat-msg right">
                    <div class="direct-chat-infos clearfix">
                      <span class="direct-chat-name float-right">Sarah Bullock</span>
                      <span class="direct-chat-timestamp float-left">23 Jan 6:10 pm</span>
                    </div>
                    <!-- /.direct-chat-infos -->
                    <img class="direct-chat-img" src="<?php echo base_url(); ?>/assets/dist/img/user3-128x128.jpg" alt="message user image">
                    <!-- /.direct-chat-img -->
                    <div class="direct-chat-text">
                      I would love to.
                    </div>
                    <!-- /.direct-chat-text -->
                  </div>
                  <!-- /.direct-chat-msg -->

                </div>
                <!--/.direct-chat-messages-->

                <!-- Contacts are loaded here -->
                <div class="direct-chat-contacts">
                  <ul class="contacts-list">
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/assets/dist/img/user1-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Count Dracula
                            <small class="contacts-list-date float-right">2/28/2015</small>
                          </span>
                          <span class="contacts-list-msg">How have you been? I was...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/assets/dist/img/user7-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Sarah Doe
                            <small class="contacts-list-date float-right">2/23/2015</small>
                          </span>
                          <span class="contacts-list-msg">I will be waiting for...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/assets/dist/img/user3-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nadia Jolie
                            <small class="contacts-list-date float-right">2/20/2015</small>
                          </span>
                          <span class="contacts-list-msg">I'll call you back at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/assets/dist/img/user5-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Nora S. Vans
                            <small class="contacts-list-date float-right">2/10/2015</small>
                          </span>
                          <span class="contacts-list-msg">Where is your new...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/assets/dist/img/user6-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            John K.
                            <small class="contacts-list-date float-right">1/27/2015</small>
                          </span>
                          <span class="contacts-list-msg">Can I take a look at...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                    <li>
                      <a href="#">
                        <img class="contacts-list-img" src="<?php echo base_url(); ?>/assets/dist/img/user8-128x128.jpg" alt="User Avatar">

                        <div class="contacts-list-info">
                          <span class="contacts-list-name">
                            Kenneth M.
                            <small class="contacts-list-date float-right">1/4/2015</small>
                          </span>
                          <span class="contacts-list-msg">Never mind I found...</span>
                        </div>
                        <!-- /.contacts-list-info -->
                      </a>
                    </li>
                    <!-- End Contact Item -->
                  </ul>
                  <!-- /.contacts-list -->
                </div>
                <!-- /.direct-chat-pane -->
              </div>
              <!-- /.card-body -->
              <div class="card-footer">
                <form action="#" method="post">
                  <div class="input-group">
                    <input type="text" name="message" placeholder="Type Message ..." class="form-control">
                    <span class="input-group-append">
                      <button type="button" class="btn btn-primary">Send</button>
                    </span>
                  </div>
                </form>
              </div>
              <!-- /.card-footer-->
            </div>
            <!--/.direct-chat -->

            <!-- TO DO List -->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1"></i>
                  To Do List
                </h3>

                <div class="card-tools">
                  <ul class="pagination pagination-sm">
                    <li class="page-item"><a href="#" class="page-link">&laquo;</a></li>
                    <li class="page-item"><a href="#" class="page-link">1</a></li>
                    <li class="page-item"><a href="#" class="page-link">2</a></li>
                    <li class="page-item"><a href="#" class="page-link">3</a></li>
                    <li class="page-item"><a href="#" class="page-link">&raquo;</a></li>
                  </ul>
                </div>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <ul class="todo-list" data-widget="todo-list">
                  <li>
                    <!-- drag handle -->
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <!-- checkbox -->
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo1" id="todoCheck1">
                      <label for="todoCheck1"></label>
                    </div>
                    <!-- todo text -->
                    <span class="text">Design a nice theme</span>
                    <!-- Emphasis label -->
                    <small class="badge badge-danger"><i class="far fa-clock"></i> 2 mins</small>
                    <!-- General tools such as edit or delete-->
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo2" id="todoCheck2" checked>
                      <label for="todoCheck2"></label>
                    </div>
                    <span class="text">Make the theme responsive</span>
                    <small class="badge badge-info"><i class="far fa-clock"></i> 4 hours</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo3" id="todoCheck3">
                      <label for="todoCheck3"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-warning"><i class="far fa-clock"></i> 1 day</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo4" id="todoCheck4">
                      <label for="todoCheck4"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-success"><i class="far fa-clock"></i> 3 days</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo5" id="todoCheck5">
                      <label for="todoCheck5"></label>
                    </div>
                    <span class="text">Check your messages and notifications</span>
                    <small class="badge badge-primary"><i class="far fa-clock"></i> 1 week</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                  <li>
                    <span class="handle">
                      <i class="fas fa-ellipsis-v"></i>
                      <i class="fas fa-ellipsis-v"></i>
                    </span>
                    <div  class="icheck-primary d-inline ml-2">
                      <input type="checkbox" value="" name="todo6" id="todoCheck6">
                      <label for="todoCheck6"></label>
                    </div>
                    <span class="text">Let theme shine like a star</span>
                    <small class="badge badge-secondary"><i class="far fa-clock"></i> 1 month</small>
                    <div class="tools">
                      <i class="fas fa-edit"></i>
                      <i class="fas fa-trash-o"></i>
                    </div>
                  </li>
                </ul>
              </div>
              <!-- /.card-body -->
              <div class="card-footer clearfix">
                <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button>
              </div>
            </div>
            <!-- /.card -->
          </section>
          <!-- /.Left col -->
          <!-- right col (We are only adding the ID to make the widgets sortable)-->
          <section class="col-lg-5 connectedSortable">

            <!-- Map card -->
            <div class="card bg-gradient-primary">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-map-marker-alt mr-1"></i>
                  Visitors
                </h3>
                <!-- card tools -->
                <div class="card-tools">
                  <button type="button" class="btn btn-primary btn-sm daterange" title="Date range">
                    <i class="far fa-calendar-alt"></i>
                  </button>
                  <button type="button" class="btn btn-primary btn-sm" data-card-widget="collapse" title="Collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                </div>
                <!-- /.card-tools -->
              </div>
              <div class="card-body">
                <div id="world-map" style="height: 250px; width: 100%;"></div>
              </div>
              <!-- /.card-body-->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <div id="sparkline-1"></div>
                    <div class="text-white">Visitors</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-2"></div>
                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <div id="sparkline-3"></div>
                    <div class="text-white">Sales</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
            </div>
            <!-- /.card -->

            <!-- solid sales graph -->
            <div class="card bg-gradient-info">
              <div class="card-header border-0">
                <h3 class="card-title">
                  <i class="fas fa-th mr-1"></i>
                  Sales Graph
                </h3>

                <div class="card-tools">
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn bg-info btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
              </div>
              <div class="card-body">
                <canvas class="chart" id="line-chart" style="min-height: 250px; height: 250px; max-height: 250px; max-width: 100%;"></canvas>
              </div>
              <!-- /.card-body -->
              <div class="card-footer bg-transparent">
                <div class="row">
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="20" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Mail-Orders</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="50" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">Online</div>
                  </div>
                  <!-- ./col -->
                  <div class="col-4 text-center">
                    <input type="text" class="knob" data-readonly="true" value="30" data-width="60" data-height="60"
                           data-fgColor="#39CCCC">

                    <div class="text-white">In-Store</div>
                  </div>
                  <!-- ./col -->
                </div>
                <!-- /.row -->
              </div>
              <!-- /.card-footer -->
            </div>
            <!-- /.card -->

            <!-- Calendar -->
            <div class="card bg-gradient-success">
              <div class="card-header border-0">

                <h3 class="card-title">
                  <i class="far fa-calendar-alt"></i>
                  Calendar
                </h3>
                <!-- tools card -->
                <div class="card-tools">
                  <!-- button with a dropdown -->
                  <div class="btn-group">
                    <button type="button" class="btn btn-success btn-sm dropdown-toggle" data-toggle="dropdown" data-offset="-52">
                      <i class="fas fa-bars"></i>
                    </button>
                    <div class="dropdown-menu" role="menu">
                      <a href="#" class="dropdown-item">Add new event</a>
                      <a href="#" class="dropdown-item">Clear events</a>
                      <div class="dropdown-divider"></div>
                      <a href="#" class="dropdown-item">View calendar</a>
                    </div>
                  </div>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="collapse">
                    <i class="fas fa-minus"></i>
                  </button>
                  <button type="button" class="btn btn-success btn-sm" data-card-widget="remove">
                    <i class="fas fa-times"></i>
                  </button>
                </div>
                <!-- /. tools -->
              </div>
              <!-- /.card-header -->
              <div class="card-body pt-0">
                <!--The calendar -->
                <div id="calendar" style="width: 100%"></div>
              </div>
              <!-- /.card-body -->
            </div>
            <!-- /.card -->
          </section>
          <!-- right col -->
        </div>
        <!-- /.row (main row) -->
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
  </div>
<?php $this->load->view('admin/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('admin/layout/script'); ?>
