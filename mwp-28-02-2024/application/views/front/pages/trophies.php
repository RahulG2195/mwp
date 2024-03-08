<?php $this->load->view('front/layout/front-header'); ?>

<!-- The Modal -->
<div id="myModal" class="modal">
    <span class="close">&times;</span>
    <img class="modal-content" id="img01">
    <div id="caption"></div>
</div>

<div class="section full-height">
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div style="text-align: center;" class="pb-3">
                        <h1 class="gallary-title2">Trophies</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!--trophies-->
                <div class="gallary-trophies filter2 2trophies">
                    <div class="achieve_card filter trophies">
                        <img class="card_image" loading="lazy" src="<?php echo base_url(); ?>assets/front/images/achievements/Myproject(2)-1029202222855AM.png" alt="image1">
                        <!--<figcaption class="card_caption">Laptop</figcaption>--> 
                    </div>
                    <div class="achieve_card filter trophies">
                        <img class="card_image" loading="lazy" src="<?php echo base_url(); ?>assets/front/images/achievements/Myproject(6)-1029202222957AM.png" alt="image2">
                        <!--<figcaption class="card_caption">Laptop</figcaption>--> 
                    </div>
                    <div class="achieve_card filter trophies">
                        <img class="card_image" loading="lazy" src="<?php echo base_url(); ?>assets/front/images/achievements/Myproject(7)-1029202223039AM.png" alt="image3">
                        <!--<figcaption class="card_caption">Laptop</figcaption>--> 
                    </div>
                    <div class="achieve_card filter trophies">
                        <img class="card_image" loading="lazy" src="<?php echo base_url(); ?>assets/front/images/achievements/Myproject(10)-1029202223121AM.png" alt="image4">
                        <!--<figcaption class="card_caption">Laptop</figcaption>--> 
                    </div>
                    <div class="achieve_card filter trophies">
                        <img class="card_image" loading="lazy" src="<?php echo base_url(); ?>assets/front/images/achievements/Myproject(13)-1029202223209AM.png" alt="image5">
                        <!--<figcaption class="card_caption">Laptop</figcaption>--> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('front/layout/front-footer'); ?>

<?php $this->load->view('front/layout/front-script'); ?>