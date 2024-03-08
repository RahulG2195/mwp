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
                        <h1 class="gallary-title2">Awards</h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="row">
                <!--awards-->
                <div class="gallary-awards filter2 2awards">
                    <div class="achieve_card filter awards">
                        <img class="card_image" loading="lazy" src="<?php echo base_url(); ?>assets/front/images/achievements/St-ThomasCathedralChurch-Mumbai-2004-5122020115349PM.jpg" alt="image1">
                        <!--<figcaption class="card_caption">Laptop</figcaption>--> 
                    </div>
                    <div class="achieve_card filter awards">
                        <img class="card_image" loading="lazy" src="<?php echo base_url(); ?>assets/front/images/achievements/TheConvocation-HallMumbai-2007-5132020120212AM.jpg" alt="image2">
                        <!--<figcaption class="card_caption">Laptop</figcaption>--> 
                    </div>
                    <div class="achieve_card filter awards">
                        <img class="card_image" loading="lazy" src="<?php echo base_url(); ?>assets/front/images/achievements/YMCA-StudentBranch-Mumbai-2009-5132020120813AM.jpg" alt="image3">
                        <!--<figcaption class="card_caption">Laptop</figcaption>--> 
                    </div>
                </div>
            </div>
        </div>
    </section>
</div>

<?php $this->load->view('front/layout/front-footer'); ?>

<?php $this->load->view('front/layout/front-script'); ?>