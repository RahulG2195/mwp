<?php $this->load->view('VendorPanel/layout/header');
$this->load->view('VendorPanel/layout/sidebar'); ?>
<?php 
    // helper for vendor id 
    $tab = Get_Vendor_detail();
	// echo $tab . '===';
    $id = $this->session->userdata('dv_id');
    
?>
<style>
    .card-img-back{
        position: absolute;
    top: 25px;
    right: 10px;
    width: 50px;
    }
    .noti-img-back{
    width: 45px;
    }
</style>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <!--<div class="content-header">-->
      <!--<div class="container-fluid">-->
        <!--<div class="row mb-2">-->
          <!--<div class="col-sm-6">-->
            <!--<h1 class="m-0">Vendor Dashboard</h1>-->
          <!--</div> /.col -->
          <!--<div class="col-sm-6">-->
            <!--<ol class="breadcrumb float-sm-right">-->
              <!--<li class="breadcrumb-item"><a href="<?php echo base_url(); ?>vendor-dashboard">Home</a></li>-->
              <!--<li class="breadcrumb-item active">Vendor Dashboard</li>-->
            <!--</ol>-->
          <!--</div> /.col -->
        <!--</div> /.row -->
      <!--</div> /.container-fluid -->
    <!--</div>-->
    <!-- /.content-header -->
    </br>
        <!-- Main content -->
    <section class="content d-none">
      <div class="container-fluid">
        <h5 class="mb-2">Notification</h5>
        <div class="row">  
          <div style="cursor:pointer;" class="col-md-3 col-sm-6 col-12" onclick="update_notification(0)">
            <div class="info-box">
              <span class="info-box-icon bg-info">
                  <!--<i class="far fa-envelope"></i>-->
                  <img class="noti-img-back" src="<?php echo base_url().'assets/vendor-icons/Query.png'; ?>" alt="...">
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Query Leads</span>
                <span class="info-box-number" id="new_leads">0<span style="color:red;"> &nbsp;&nbsp;New<span></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div style="cursor:pointer;" class="col-md-3 col-sm-6 col-12" onclick="update_notification(1)">
            <div class="info-box">
              <span class="info-box-icon bg-success">
                  <!--<i class="far fa-flag"></i>-->
              <img class="noti-img-back" src="<?php echo base_url().'assets/vendor-icons/User-leads.png'; ?>" alt="...">
              </span>
              <div class="info-box-content">
                <span class="info-box-text">User Visits</span>
                <span class="info-box-number" id="new_visit">0<span style="color:red;"> &nbsp;&nbsp;New<span></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
         <!-- /.col -->
           <div style="cursor:pointer;" class="col-md-3 col-sm-6 col-12" onclick="update_notification(3)">
            <div class="info-box">
              <span class="info-box-icon bg-danger">
                  <!--<i class="far fa-star"></i>-->
              <img class="noti-img-back" src="<?php echo base_url().'assets/vendor-icons/User-review.png'; ?>" alt="...">
              </span>
              <div class="info-box-content">
                <span class="info-box-text">User Review</span>
                <span class="info-box-number" id="new_review">0<span style="color:red;"> &nbsp;&nbsp;New<span></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div style="cursor:pointer;" class="col-md-3 col-sm-6 col-12" onclick="update_notification(2)">
            <div class="info-box">
              <span class="info-box-icon bg-info">
                  <!--<i class="far fa-copy"></i>-->
              <img class="noti-img-back" src="<?php echo base_url().'assets/vendor-icons/Deal.png'; ?>" alt="...">
              </span>
              <div class="info-box-content">
                <span class="info-box-text">Deals & Coupons</span>
                <span class="info-box-number" id="new_deals">0<span style="color:red;"> &nbsp;&nbsp;New<span></span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>  
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
        <!--</div>-->
  </section>
    
    <!-- Main content -->
    <!--</br>-->
    <section class="content">
      <div class="container-fluid">
        <!-- Small boxes (Stat box) -->
        <h5 class="mb-2">All Data Count</h5>
        <div class="row">
            <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4><b><?php echo $this->session->userdata('user_name') ?></b></h4>
                </br>
                <p>View Profile</p>
              </div>
              <div class="icon">
                <!--<i class="ion ion-chatbox"></i>-->
                <img class="card-img-back" src="<?php echo base_url().'assets/vendor-icons/Profile.png'; ?>" alt="...">
              </div>
              <?php // if($lead_details['lead'] != '0'){ ?>
              <a href="<?php echo base_url() .'Data/' . $tab . '/' . $id; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             <?php //} ?>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4><b><?php echo $lead_details['lead']; ?></b></h4>
                </br>
                <p>Total Query Leads</p>
              </div>
              <div class="icon">
                <!--<i class="ion ion-chatbox"></i>-->
                <img class="card-img-back" src="<?php echo base_url().'assets/vendor-icons/Query.png'; ?>" alt="...">
              </div>
              <?php // if($lead_details['lead'] != '0'){ ?>
              <a href="<?php echo base_url() .'vendor-dashboard/lead'; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
             <?php //} ?>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4><b><?php echo $visitor_details['visitor']; ?></b></h4>
                </br>
                <p>Total User Visits</p>
              </div>
              <div class="icon">
                <!--<i class="ion ion-person-add"></i>-->
                  <img class="card-img-back" src="<?php echo base_url().'assets/vendor-icons/User-leads.png'; ?>" alt="...">
              </div>
              <?php  //if($visitor_details['visitor'] != '0'){ ?>
              <a href="<?php echo base_url() .'vendor-dashboard/visitor'; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              <?php //} ?>
            </div>
          </div>
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-danger">
              <div class="inner">
                <h4><b><?php echo $review_details['review']; ?></b></h4>
                </br>
                <p>Total User Review</p>
              </div>
              <div class="icon">
                <!--<i class="ion ion-stats-bars"></i>-->
                  <img class="card-img-back" src="<?php echo base_url().'assets/vendor-icons/User-review.png'; ?>" alt="...">
              </div>
              <?php  //if($plan_details['plan_name'] != 'Free'){ ?>
               <a href="<?php echo base_url() .'user-review'; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            <?php //} ?>
            </div>
          </div>
          <!-- ./col -->
          <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-info">
              <div class="inner">
                <h4><b><?php echo $deal_details['deal']; ?></b></h4>
                </br>
                <p>Total Deals & Coupons</p>
              </div>
              <div class="icon">
                <!--<i class="ion ion-pie-graph"></i>-->
                  <img class="card-img-back" src="<?php echo base_url().'assets/vendor-icons/Deal.png'; ?>" alt="...">
              </div>
              <?php  //if($visitor_details['visitor'] != '0'){ ?>
              <a href="<?php echo base_url() .'vendor-dashboard/deals'; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
              <?php //} ?>
            </div>
          </div>
          <!-- ./col -->
           <div class="col-lg-4 col-6">
            <!-- small box -->
            <div class="small-box bg-success">
              <div class="inner">
                <h4 style="font-size:1.5rem;"><?php echo $plan_details['plan_name'];
                //  ".$plan_details['plan_type'].""; 
                 ?></h4>
                </br>
                <p>Active Plan Details</p>
              </div>
              <div class="icon">
                <!--<i class="ion ion-bag"></i>-->
                  <img class="card-img-back" src="<?php echo base_url().'assets/vendor-icons/Plan-Details.png'; ?>" alt="...">
              </div>
              <?php  //if($plan_details['plan_name'] != 'Free'){ ?>
               <a href="<?php echo base_url() .'vendor-dashboard/plan'; ?>" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
            <?php //} ?>
            </div>
          </div>
          <!-- ./col -->
        </div>
        <!-- /.row -->
        
            <section class="content d-none">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Latest 5 Query Leads</h3>
                <a class="btn btn-info" style="height: auto;margin: auto;padding: 5px 5px;float: right;" href="<?php echo base_url() .'vendor-dashboard/lead'; ?>"><i class="fas fa-plus+" style="font-size: 14px;"> View All</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                   <table id="user_datatable" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <!--<th>Last Name</th>-->
                                    <th>Email</th>
                                    <th>Phone no</th>
                                    <th>Function date</th>
                                    <th>Comment</th>
                                    <th>Message</th>
                                    <th>Created date</th>
                                    <!--<th>Action</th>-->
                                </tr>
                                </thead>
                                <tbody>

                                <?php 
                                  if(!empty($leads_data))
                                  { 
                                      $i=1;
                                    foreach($leads_data as $row)
                                    {  


                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["email"]; ?></td>
                                        <td><?php echo $row["phone_no"]; ?></td>
                                        <td><?php echo $row["function_date"]; ?></td>
                                        <td><?php echo $row["comment"]; ?></td>
                                        <td><?php echo $row["message"]; ?></td>
                                        <td><?php echo $row["created_date"]; ?></td>
                                    </tr>
                                <?php   
                                $i++;
                                     }
                                  }
                                  else{
                                        echo "No records Found";
                                  }
                                ?>
                               
                                
                                </tbody>
                                
                                </table>
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
    
        <section class="content d-none">
      <div class="container-fluid">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">Latest 5 User Review</h3>
                <a class="btn btn-info" style="height: auto;margin: auto;padding: 5px 5px;float: right;" href="<?php echo base_url() .'user-review'; ?>"><i class="fas fa-plus+" style="font-size: 14px;"> View All</i></a>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                  <table id="vendor_datatable" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <!--<th>Category</th>-->
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <!--<th>Role</th>-->
                                    <!--<th>Access Level</th>-->
                                    <!--<th>Is Deleted</th>-->
                                    <th>Subject</th>
                                    <th>Review Comment</th>
                                    <th>Rating</th>
                                    <!--<th>Last Login</th>-->
                                    <th>Created date</th>
                                    <!--<th>Action</th>-->
                                </tr>
                                </thead>
                                <tbody>

                                <?php 
                                  if(!empty($reviews_data))
                                  { 
                                      $i=1;
                                    foreach($reviews_data as $row)
                                    {  


                                ?>
                                    <tr>
                                        <td><?php echo $i; ?></td>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["email_id"]; ?></td>
                                        <td><?php echo $row["phone_no"]; ?></td>
                                        <td><?php echo $row["subject"]; ?></td>
                                        <td><?php echo $row["review_comment"]; ?></td>
                                        <td><?php echo $row["rating"]; ?></td>
                                        <td><?php echo $row["created_date"]; ?></td>
                                    </tr>
                                <?php   
                                $i++;
                                     }
                                  }
                                  else{
                                        echo "No records Found";
                                  }
                                ?>
                               
                                
                                </tbody>
                                
                                </table>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div>
      <!-- /.container-fluid -->
    </section>
        
        <!-- Main row -->
        <div class="row d-none">
          <!-- Left col -->
          <section class="col-lg-7 connectedSortable">
            <!-- Custom tabs (Charts with tabs)-->
            <div class="card">
              <div class="card-header">
                <h3 class="card-title">
                  <i class="fas fa-chart-pie mr-1"></i>
                  Sales
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
                    <!--<img class="direct-chat-img" src="<?php //echo base_url(); ?>/assets/dist/img/user1-128x128.jpg" alt="message user image">-->
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
                    <!--<img class="direct-chat-img" src="<?php //echo base_url(); ?>/assets/dist/img/user3-128x128.jpg" alt="message user image">-->
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
                    <!--<img class="direct-chat-img" src="<?php //echo base_url(); ?>/assets/dist/img/user1-128x128.jpg" alt="message user image">-->
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
                    <!--<img class="direct-chat-img" src="<?php //echo base_url(); ?>/assets/dist/img/user3-128x128.jpg" alt="message user image">-->
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
                        <!--<img class="contacts-list-img" src="<?php //echo base_url(); ?>/assets/dist/img/user1-128x128.jpg" alt="User Avatar">-->

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
                        <!--<img class="contacts-list-img" src="<?php //echo base_url(); ?>/assets/dist/img/user7-128x128.jpg" alt="User Avatar">-->

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
                        <!--<img class="contacts-list-img" src="<?php //echo base_url(); ?>/assets/dist/img/user3-128x128.jpg" alt="User Avatar">-->

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
                        <!--<img class="contacts-list-img" src="<?php //echo base_url(); ?>/assets/dist/img/user5-128x128.jpg" alt="User Avatar">-->

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
                        <!--<img class="contacts-list-img" src="<?php //echo base_url(); ?>/assets/dist/img/user6-128x128.jpg" alt="User Avatar">-->

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
                        <!--<img class="contacts-list-img" src="<?php //echo base_url(); ?>/assets/dist/img/user8-128x128.jpg" alt="User Avatar">-->

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
<?php $this->load->view('VendorPanel/layout/footer'); ?>
</div>
<!-- ./wrapper -->
<?php $this->load->view('VendorPanel/layout/script'); ?>
<script>
  $(function () {        
        var count = 0;
        LoadMoreData();
        // Set up the interval to call the function every 60 seconds (1000 milliseconds = 1 second)
        setInterval(LoadMoreData, 15000); 
//       =========================================== For vendor ======================================================
    function LoadMoreData(){
        var vendor_id = '<?php echo $this->session->userdata('dv_id') ?>';
        if(count <= 10){
//      console.log('count '+count);
      $.ajax({
        type: "POST",
        url: '<?php echo base_url(); ?>VendorPanel/Vendor_Notification_Api/get_notification_count',
        data: 'vendor_id=' + vendor_id,
        dataType: 'json',
        success: function(response){
          if(response.status == true) {
              var data = response.data;
//              console.log('data received '+data);
              if (($.trim(data) != null) && ($.trim(data) != 'null') && ($.isPlainObject(data) != true) && (data.length > 0)) {
                    $.each(data, function (key, val) {
//                        new_leads new_visit new_deals new_review
                        if(val.notification_type == '0'){
                            $('#new_leads').html(val.count+'<span style="color:red;"> &nbsp;&nbsp;New<span>');
                        }else if(val.notification_type == '1'){
                            $('#new_visit').html(val.count+'<span style="color:red;"> &nbsp;&nbsp;New<span>');
                        }else if(val.notification_type == '2'){
                            $('#new_deals').html(val.count+'<span style="color:red;"> &nbsp;&nbsp;New<span>');
                        }else if(val.notification_type == '3'){
                            $('#new_review').html(val.count+'<span style="color:red;"> &nbsp;&nbsp;New<span>');
                        }
                    });
            }
          } else {
//              alert();
//              // No more data, you may want to disable further scrolling or show a message
              console.log('No more data');
              return false;
          }
      }

    })
    count++;
  }
        }
  });
  function update_notification(type){
//        alert('hi');
        if(type==0){
            window.location.href = "<?php echo base_url() .'VendorPanel/Vendor_Notification_Api/update_leads_notification/0'; ?>";
        }else if(type==1){
            window.location.href = "<?php echo base_url() .'VendorPanel/Vendor_Notification_Api/update_visit_notification/1'; ?>";
        }else if(type==2){
            window.location.href = "<?php echo base_url() .'VendorPanel/Vendor_Notification_Api/update_deals_notification/2'; ?>";
        }else if(type==3){
            window.location.href = "<?php echo base_url() .'VendorPanel/Vendor_Notification_Api/update_review_notification/3'; ?>";
        }    
  }
</script>    
<script>
     $("#user_datatable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
//      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "order": [[7, 'desc']]
    }).buttons().container().appendTo('#user_datatable_wrapper .col-md-6:eq(0)');
</script>
<script>
     $("#vendor_datatable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
//      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "order": [[7, 'desc']]
    }).buttons().container().appendTo('#vendor_datatable_wrapper .col-md-6:eq(0)');
</script>