<?php $this->load->view('front/layout/front-header'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/before_after.css">
<link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/cndk.beforeafter.css">
<script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
<?php 
if(!empty($detail) && isset($detail)){
foreach($detail as $val){
    $prj_name = $val['prj_name'];
    $descriptions = $val['descriptions'];
    $video = $val['video'];
    $pdf = $val['pdf'];
    $sub_banner = $val['sub_banner'];
}

?>
<section class="service_banner" style="background-image: url(<?php echo ((isset($sub_banner) && $sub_banner !== NULL)? base_url() .'uploads/project/' . $sub_banner : '') ?>)">
    <div class="overlay_banner"></div>
    <div class="container">
        <div class="row">
            <div class="prj_title common_banner_title text-center">
                <h5><?php echo $prj_name ?></h5>
                <img src="<?php echo base_url() . MAIN_IMG ?>heading_design.png" class="img-fluid img-responsive heading_line" alt="">
            </div>
        </div>
    </div>
</section>

<section class="breadcrump my-3">
    <div class="container">
        <nav style="--bs-breadcrumb-divider: '>';" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?php echo base_url()?>">Home</a></li>
                <li class="breadcrumb-item"><a href="<?php echo base_url('all-projects')?>">Our Projects</a></li>
                <li class="breadcrumb-item active" aria-current="page"><?php echo $prj_name?></li>
            </ol>
        </nav>
    </div>
</section>
<section class="prj_detail_content mt-5">
    <div class="container">
        <div class="row">
            <div class="col-9 single_prj_title">
                <div class="prj_title">
                    <h4><?php echo $prj_name?></h4>
                </div>
            </div>
            <div class="col-3">
            <a href="<?php echo base_url() . 'uploads/project/' . $pdf ?>" download="download" class="download_pdf"><img src="<?php echo base_url() . MAIN_IMG ?>download_now.png"
                            class="img-fluid img-responsive read_more download_btns" alt=""></a>
            </div>
            <div class="prj_data mt-1">
                <p><?php echo $descriptions?></p>
            </div>
        </div>
    </div>
</section>

<section class="prj_content my-5">
    <div class="container">
    <?php 
        if(isset($video) && $video !== NULL && !empty($video)){
    ?>
        <div class="col-12">
            <div class="prj_video">
                    <iframe width="560" height="315" src="<?php echo $video ?>" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share" allowfullscreen></iframe>
            </div>
        </div>
        <?php
        }
        ?>
        <div class="row">
            <div class="compare_prj mt-5">
                <div class="row">
                <?php 
                    foreach ($detail as $value) {
                        if($value['dimension'] == 'H'){
                    ?>
                    <div class="col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . 'uploads/project/before_after/' . $value['before_img']?>"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . 'uploads/project/before_after/' . $value['after_img']?>"></div>
                                </div>
                            </div>
                        </div>
                        <div class="prj_data my-2 mx-1">
                            <p><?php echo $value['prj_content']?></p>
                        </div>
                    </div>
                    <?php
                        }else{
                            ?>
                    <div class="col-lg-4 col-md-6 col-12 mt-4">
                        <div class="card">
                            <div class="beforeafterdefault">
                                <div data-type="data-type-image">
                                    <div data-type="before"><img src="<?php echo base_url() . 'uploads/project/before_after/' . $value['before_img']?>"></div>
                                    <div data-type="after"><img src="<?php echo base_url() . 'uploads/project/before_after/' . $value['after_img']?>"></div>
                                </div>
                            </div>
                        </div>
                        <div class="prj_data my-2 mx-1">
                            <p><?php echo $value['prj_content']?></p>
                        </div>
                    </div>
                            <?php
                        }
                    }
                ?>
                </div>
            </div>
        </div>
    </div>
</section>

<?php 
}else{
    redirect('all-projects');
}
$this->load->view('front/layout/front-footer2'); ?>

<script src="<?php echo base_url() ?>assets/front/js/cndk.beforeafter.js"></script>
