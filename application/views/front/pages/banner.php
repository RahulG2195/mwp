
<div class="main_banner">
    <div id="carouselExampleCaptions" class="carousel slide hero_banner carousel-fade" data-bs-ride="carousel"
        data-bs-interval="3500" data-bs-pause="false">
        <div class="carousel-inner carousel-inner-banner text-center">
            <div class="overlay_banner"></div>
            <?php 
            $i = 1;
            foreach ($banner as  $value) {
        
              ?><div class="carousel-item home_banner_item <?php echo ($i === 1) ? "active" : "" ?>">
               <img src="<?php echo base_url().'uploads/slider/'. $value['slider-image']?>"
                   class="d-block w-100 banner_new_img" alt="">
               <!-- <div class="carousel-caption text-center">
                   <p class="">Building with commitment Restoring with passion</p>
               </div> -->
           </div>
           <?php
           $i++;
            }
            ?>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <img src="<?php echo base_url() ?>assets/front/images/left_arrow.png" class="img-fluid" alt="">
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <img src="<?php echo base_url() ?>assets/front/images/right_arrow.png" class="img-fluid" alt="">
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>