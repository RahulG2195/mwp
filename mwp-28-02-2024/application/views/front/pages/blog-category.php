<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/style.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/blog.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>

<section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url()?>assets/front/image/hero-banner/MWP-Blog-page-hero-banner.jpg' )">
     <div class="banner-section-heading">
        <h1> Wedding Guide</h1>
    </div>
</section>

 <section class="blog_sec home-logo-slider scrollTrigger common_Section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <div class="blog_title">
                    <h5>My Wedding Palette</h5>
                    <h2>Wedding Blog</h2>
                    <p>Best Indian Wedding Planning Ideas & Practical Advice</p>
                </div>
            </div>
            <div class="col-md-8">
                <div class="slider blog_slider">
                    <?php if (!empty($blogcategory)) {
                            foreach ($blogcategory as $value) {   ?>
                            <div class="slide">
                                <a href="<?php echo base_url('blog/blogcategory') ?>/<?php echo $value["blog-category-url"]; ?>">
                                    <img src="<?php echo base_url() ?>uploads/blog-category/<?php echo $value["category-image"] ?>" class="img-fluid">
                                        <h6 class="city-text"><?php echo $value["blog-category-name"]; ?></h6>
                                   
                                </a>
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
<section class="blog_card_sec common_Section">
    <div class="container">
        <div class="row">
            <?php if (!empty($blog)) {
                //var_dump($blog);

                foreach ($blog as $value) {  
                    $catid=$value["blog-cat-id"];
                    $data=$this->BlogModel->getblogcategoyname($catid);
                    ?>
                    <div class="col-md-4">
                        <a href="<?php echo base_url('blog/blog_detail') ?>/<?php echo $value["blog-seo-url"]; ?>">
                            <div class="card blog_card">
                                <img src="<?php echo base_url() ?>uploads/blog-image/<?php echo $value["blog-image"] ?>" class="card-img-top img-fluid" alt="...">
                                <div class="card-body blog_cbody">
                                    <small><?php echo $data["blog-category-name"]; ?></small>
                                    <h5 class="card-title blog_ctitle"><?php echo $value["blog-title"]; ?></h5>
                                    <p class="card-text blog_ctext"><?php //echo $value["short-description"]; 
                                     echo  substr($value["short-description"],0,200);
                                    ?>.....</p>
                                    <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                                </div>
                            </div>

                        </a>
                    </div>
                    
            <?php    
                } ?>
               <nav aria-label="..." class="blog_pagination">
                <ul class="pagination">
                    <li class="page-item disabled">
                        <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">1</a></li>
                    <li class="page-item active" aria-current="page">
                        <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item"><a class="page-link" href="#">4</a></li>
                    <li class="page-item"><a class="page-link" href="#">5</a></li>
                    <li class="page-item">
                        <a class="page-link" href="#">Next</a>
                    </li>
                </ul>
            </nav>
            <?php } 
              else{ ?>
                     <div class="blog-nofound-text">
                         <h2>Stay Tuned! We are working hard to put fresh & trendy ideas in this category as well!!</h2>
                     </div>
                                                
           <?php  }

            ?>
            
        </div>
    </div>
</section>
<section class="awaits_sec common_Section">
    <div class="container elevate_jumbo">
        <div class="row elevate_row">
            <div class="col-md-4">
                <img src="<?php echo base_url() . SERVICE ?>MWP_logo.png" class="img-fluid mwp_logo" alt="">
            </div>
            <div class="col-md-8">
                <div class="elevate">
                    <h1>Enjoyed Our Blog?</h1>
                    <!--<h2></h2>
                    <h3> Now Make It Happen Through Our Personalised Vendor Recommendations</h3>-->
                    <p><!--You've just uncovered a treasure trove of wedding inspiration in our blog.--> Imagine turning those dreamy ideas into reality with the perfect vendors. <!--Whether it's breathtaking decor, stunning outfits, magical photography, or more – our Personalised Vendor Recommendation service is your golden ticket to crafting the wedding of your dreams!--></p>
                    <a href="<?php echo base_url() ?>service/vendorrecommendation" class="btn elevate_btn">Elevate Your Wedding Planning Today!</a>
                </div>
            </div>
        </div>
    </div>
    <div class="container couple_container">
        <div class="couple_div">
            <div class="row">
                <div class="col-md-2">
                    <img src="<?php echo base_url() . SERVICE ?>reach1.png" class="img-fluid reach_img" alt="">
                </div>
                <div class="col-md-8">
                    <form action="">
                        <div class="reach_content text-center">
                            <h2>Find the <span>best wedding </span>Vendors with</h2>
                            <h2> thousands of trusted reviews</h2>
                            <div class="form-group d-flex blog_form">
                                <label for="cat" class="cat_label">Im Looking for </label>
                                <select name="cat" class="form-control cat_select" id="">
                                    <option>Select</option>
                                    <option value="Venues">Venues</option>
                                    <option value="Bridal Wear">Bridal Wear</option>
                                    <option value="Groom Wear">Groom Vendor</option>
                                    <option value="Photographers">Photographers</option>
                                    
                                    <option value="Makeup Artist">Makeup Artist</option>
                                    <option value="Mehendi Artist">Mehendi Artist</option>
                                    <option value="Bridal Jewellery">Bridal Jewellery</option>
                                    <option value="Photographers">Decoration</option>
                                     <option value="Gifts">Gifts</option>
                                     <option value="Invitations">Invitations</option>
                                      <option value="Catering">Catering</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn reach_btn">Search</button>
                    </form>
                </div>
                <div class="col-md-2">
                    <img src="<?php echo base_url() . SERVICE ?>reach2.png" class="img-fluid reach_img" alt="">
                </div>
            </div>
        </div>
    </div>
</section>

<section class="blog_gallery common_Section">
    <div class="container">
        <div class="row" data-masonry='{"percentPosition": true }'>
            <div class="col-md-3 gal_col">
                <img src="<?php echo base_url() . BLOG ?>gallery-blog-image-1.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 gal_col">
                <div class="gallery_content text-center">
                    <h5>Get More </h5>
                    <h3> Wedding Photos, Latest Trends & Ideas</h3>
                    <p>( 36000+ photos )</p>
                   <img src="<?php echo base_url() . SERVICE ?>Group1438.png" class="img-fluid" alt="">
                    <p>Browse from latest Wedding Photos, Ideas & Inspiration</p>
                    <a href="<?php echo base_url() ?>gallery" class="btn gallery_btn">Take Me To Gallery</a>
                </div>
            </div>
            <div class="col-md-3 gal_col">
                 <img src="<?php echo base_url() . BLOG ?>gallery-blog-image-2.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 gal_col">
                <img src="<?php echo base_url() . BLOG ?>gallery-blog-image-5.jpg" class="img-fluid" alt="">
            </div>
            <div class="col-md-3 gal_col">
                <img src="<?php echo base_url() . BLOG ?>gallery-blog-image-3.jpg" class="img-fluid" alt="">
            </div>

            <div class="col-md-3 gal_col">
                <img src="<?php echo base_url() . BLOG ?>gallery-blog-image-4.jpg" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); ?>