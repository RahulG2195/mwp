<?php $this->load->view('VendorPanel/layout/header'); ?>
<?php $this->load->view('VendorPanel/layout/sidebar'); ?>
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <!--<div class="content-header">-->
            <!--<div class="container-fluid">-->
            <!--<div class="row mb-2">-->
                <!--<div class="col-sm-6">-->
                <!--<h1 class="m-0">Review Data</h1>-->
                <!--</div> /.col -->
                <!-- <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="<?php //echo base_url(); ?>admin/index">Home</a></li>
                    <li class="breadcrumb-item active">Vendor Dashboard</li>
                </ol>
                </div> -->
                <!-- /.col -->
            <!--</div> /.row -->
            <!--</div> /.container-fluid -->
        <!--</div>-->
        <!-- /.content-header -->
           
               <!-- Main content -->
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="card">
                            <div class="card-header">
                                <h3 class="card-title">Review list data</h3>
                            </div>
                            <!-- /.card-header -->
                            <div class="card-body">
                                <table id="decor_leads_datatable" class="table table-bordered table-striped dataTable dtr-inline collapsed">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone no</th>
                                    <th>Vendor name</th>
                                    <th>Title</th>
                                    <th>Comment</th>
                                    <th>Rating</th>
                                    <th>Created date</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>

                                <?php 
                                  if(!empty($result))
                                  { 
                                    foreach($result as $row)
                                    {  
                                     $vendorid=$row["vendor_review_id"];
                                    $data=$this->ReviewModel->getrating($vendorid);
                                    $stars = '';
                                    $fullStars =floor($data[0]["average_rating"]);
                                    $halfStar = round($data[0]["average_rating"] - $fullStars, 1) > 0 ? 1 : 0;


                                                                    // Full stars
                                    for ($i = 0; $i < $fullStars; $i++) {
                                        $stars .= '<i class="fa fa-star rating_star checked" style="font-size:12px;color:orange;"></i> ';
                                    }

                                    // Half star
                                    if ($halfStar) {
                                        $stars .= '<i class="fa fa-star-half-o checked" aria-hidden="true" style="font-size:12px;color:orange;"></i>';
                                    }

                                    // Empty stars
                                    $emptyStars = 5 - $fullStars - $halfStar;
                                    for ($i = 0; $i < $emptyStars; $i++) {
                                        $stars .= '<i class="fa fa-star-half-o checked" aria-hidden="true" style="font-size:12px;]"></i> ';
                                    }

                                ?>
                                    <tr>
                                        <td><?php echo $row["name"]; ?></td>
                                        <td><?php echo $row["email_id"]; ?></td>
                                        <td><?php echo $row["phone_no"]; ?></td>
                                        <td><?php echo $row["vendor-name"]; ?></td>
                                        <td><?php echo $row["subject"]; ?></td>
                                        <td><?php echo $row["review_comment"]; ?></td>
                                        <td>
                                        <?php echo $stars; ?>   
                                        </td>
                                        <td>
                                        <?php echo $row["created_date"]; ?>   
                                        </td>
                                        
                                        <td>
                                            <textarea name="review-reply" class="form-control" id="replyreview" style="display:none;"></textarea>
                                            <button  class="btn btn-success replybtn">Reply</button>
                                            <!-- <a href="<?php echo base_url() ?>admin/Vendor_review/givereply/<?php echo $row["review_id"]; ?>" class="btn btn-success">Reply</a> -->
                                        </td>
                                    </tr>
                                <?php   
                                     }
                                  }
                                  else{
                                        echo "No records Found";
                                  }
                                ?>
                               
                                
                                </tbody>
                                
                                </table>
                            </div>
                            <!-- /.card-body -->
                        </div>

                               
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
               <!-- /.content -->
    </div>
         <?php $this->load->view('VendorPanel/layout/footer'); ?>
    </div>

    <?php $this->load->view('VendorPanel/layout/script'); ?>
<script>
     $("#decor_leads_datatable").DataTable({
      "responsive": true, "lengthChange": false, "autoWidth": false,
      "buttons": ["copy", "csv", "excel", "pdf", "print", "colvis"],
      "order": [[7, 'desc']]
    }).buttons().container().appendTo('#decor_leads_datatable_wrapper .col-md-6:eq(0)');
</script>                   
            
<script>
 $(document).ready(function() {
    // Hide the form initially
    $("#replyreview").hide();

    // Toggle the form visibility on button click
    $(".replybtn").click(function() {
//        alert("hi");
       $("#replyreview").toggle();
    });
});
</script>