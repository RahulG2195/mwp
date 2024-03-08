<div class="main_banner">
    <style>
    /*
inspired from http://codepen.io/Rowno/pen/Afykb
& https://jsfiddle.net/q0rgL8ws/
*/
    .carousel-fade .carousel-inner .home_banner_item {
        opacity: 0;
        transition-property: opacity;
        overflow: hidden;
    }

    .home_banner_item.active img {
        transition: transform 5000ms linear 0s;
        /* This should be based on your carousel setting. For bs, it should be 5second*/
        transform: scale(1.05, 1.05);
    }

    .carousel-fade .carousel-inner .active {
        opacity: 1;
    }

    .carousel-fade .carousel-inner .active.left,
    .carousel-fade .carousel-inner .active.right {
        left: 0;
        opacity: 0;
        z-index: 1;
    }

    .carousel-fade .carousel-inner .next.left,
    .carousel-fade .carousel-inner .prev.right {
        opacity: 1;
    }

    .carousel-fade .carousel-control {
        z-index: 2;
    }

    @media all and (transform-3d),
    (-webkit-transform-3d) {

        .carousel-fade .carousel-inner>.home_banner_item.next,
        .carousel-fade .carousel-inner>.home_banner_item.active.right {
            opacity: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .carousel-fade .carousel-inner>.home_banner_item.prev,
        .carousel-fade .carousel-inner>.home_banner_item.active.left {
            opacity: 0;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }

        .carousel-fade .carousel-inner>.home_banner_item.next.left,
        .carousel-fade .carousel-inner>.home_banner_item.prev.right,
        .carousel-fade .carousel-inner>.home_banner_item.active {
            opacity: 1;
            -webkit-transform: translate3d(0, 0, 0);
            transform: translate3d(0, 0, 0);
        }
    }
    </style>
    <div id="carouselExampleCaptions" class="carousel slide carousel-fade hero_banner" data-bs-ride="carousel"
        data-bs-interval="5000" data-bs-pause="false">
        <div class="carousel-indicators home_banner_indicator">
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active"
                aria-current="true" aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="3"
                aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner carousel-inner-banner text-center carousel-zoom">
            <div class="overlay"></div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/02.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/03.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/04.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/05.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/06.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/07.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/08.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/09.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/10.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/11.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/12.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/13.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/14.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
            <div class="carousel-item home_banner_item">
                <img src="<?php echo base_url() ?>assets/front/images/banner/15.jpg"
                    class="d-block w-100 banner_new_img" alt="">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="prev">
            <i class="fa fa-angle-left" aria-hidden="true"></i>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
            data-bs-slide="next">
            <i class="fa fa-angle-right" aria-hidden="true"></i>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>