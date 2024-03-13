<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/style.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/blog.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">

<section class="service_banner" id="service_banner" style="background-image: url('<?php echo base_url() . SERVICE . 'service_sub_banner.png' ?>')">
    <div class="overlay1"></div>
</section>
<section class="blog_detail_sec common_Section">
    <div class="container">
        <div class="row">
            <div class="col-md-9">
                <div class="row">
                    <div class="col-md-5">
                        <div class="cat_btn">
                            <?php 
                             $catid=$blogdetail["blog-cat-id"];
                           
                             $data=$this->BlogModel->getblogcategoyname($catid);
                             //var_dump($data);
                            ?>
                            <p><?php echo $data["blog-category-name"]; ?></p>
                        </div>
                        <div class="blog_dcontent">
                            <h1><?php echo $blogdetail["blog-title"]; ?>- </h1>
                            <!--<h5>Lorem Ipsum is simply dummy text of the printing and typesetting industry.</h5>
                            <p> by author names</p>-->
                        </div>
                    </div>
                    <div class="col-md-7">
                        <img src="<?php echo base_url() ?>uploads/blog-image/<?php echo $blogdetail["blog-image"]; ?>" class="img-fluid" alt="">
                    </div>
                </div>
                <div class="blog_detail_content">
                    <h3><?php //echo $blogdetail["blog-title"]; ?></h3>
                    <p><?php echo $blogdetail["description"]; ?></p>

                    <!--<div class="author_quotes">
                        <h6>In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to demonstrate the visual form of a document or a typeface without relying on meaningful content. In publishing and graphic design, Lorem ipsum is a placeholder text commonly used to</h6>
                        <p>By author names</p>
                    </div>

                    <p>Dramatically monetize bleeding-edge architectures with user friendly content. Distinctively aggregate timely convergence after holistic opportunities. Enthusiastically disseminate exceptional e-tailers for strategic supply chains. Rapidiously re-engineer cost effective metrics whereas frictionless technologies. Continually disseminate functional customer.</p>

                    <ul class="epic_points blog_detail">
                        <li>One for the money </li>
                        <li>Two for the show </li>
                        <li>Three to get ready</li>
                        <li> Now go, cat, go</li>
                    </ul>

                    <p>Competently create installed base synergy after state of the art testing procedures. Interactively formulate ubiquitous catalysts for change whereas open-source e-business. Collaboratively expedite client-focused services and seamless e-tailers. Energistically.</p>-->
                </div>
            </div>
            <div class="col-md-3">
                <div class="more_blog">
                    <div class="more_title text-center">
                        <h4>More <span>Ideas & Blogs</span></h4>
                    </div>
                    <div class="detail_cat">
                        <div class="cat_list">
                            <div class="cat_img">
                                <img src="<?php echo base_url() ?>assets/front/image/blog/Group334.png" class="img-fluid" alt="">
                            </div>
                            <p>Latest Articles</p>
                        </div>
                        <div class="cat_list">
                            <div class="cat_img">
                                <img src="<?php echo base_url() ?>assets/front/image/blog/Group334.png" class="img-fluid" alt="">
                            </div>
                            <p>Destination</p>
                        </div>
                        <div class="cat_list">
                            <div class="cat_img">
                                <img src="<?php echo base_url() ?>assets/front/image/blog/Group334.png" class="img-fluid" alt="">
                            </div>
                            <p>Wedding Favours & Gifts</p>
                        </div>
                        <div class="cat_list">
                            <div class="cat_img">
                                <img src="<?php echo base_url() ?>assets/front/image/blog/Group334.png" class="img-fluid" alt="">
                            </div>
                            <p>Pre-Wedding Planning</p>
                        </div>
                        <div class="cat_list">
                            <div class="cat_img">
                                <img src="<?php echo base_url() ?>assets/front/image/blog/Group334.png" class="img-fluid" alt="">
                            </div>
                            <p>Videographers & Photoshoot</p>
                        </div>
                        <div class="cat_list">
                            <div class="cat_img">
                                <img src="<?php echo base_url() ?>assets/front/image/blog/Group334.png" class="img-fluid" alt="">
                            </div>
                            <p>Jewellery</p>
                        </div>
                        <div class="cat_list">
                            <div class="cat_img">
                                <img src="<?php echo base_url() ?>assets/front/image/blog/Group334.png" class="img-fluid" alt="">
                            </div>
                            <p>Mehndi</p>
                        </div>
                        <div class="cat_list">
                            <div class="cat_img">
                                <img src="<?php echo base_url() ?>assets/front/image/blog/Group334.png" class="img-fluid" alt="">
                            </div>
                            <p>More Blogs</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog_review">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="blog_social">
                    <div class="blog_heart">
                        <a href="#"><i class="fa fa-heart-o simple_heart" aria-hidden="true"></i></a>
                        <a href="#"><i class="fa fa-heart-o clr_heart" aria-hidden="true"></i></a>
                        <span>128 Likes</span>
                    </div>
                    <div class="blog_media">
                        <a href=""><i class="fa fa-facebook"></i></a>
                        <a href=""><i class="fa fa-twitter"></i></a>
                        <a href=""><i class="fa fa-linkedin"></i></a>
                    </div>
                </div>
                <div class="comment_area">
                    <form action="#">
                        <div class="form-group">
                            <label for="">16 Comments</label>
                            <textarea name="comment" id="" cols="30" rows="10"></textarea>
                        </div>
                        <button class="btn ">Submit</button>
                    </form>
                </div>
            </div>

            <dov class="col-md-12">
                <div class="comment_list">
                    <div class="card comment_card">
                        <div class="card-header">
                            <div class="user_name d-flex">
                                <img src="<?php echo base_url() . BLOG?>profile.png" class="img-fluid" alt="">
                                <div class="user_det">
                                    <h6>Name</h6>
                                    <span>5 hours ago</span>
                                </div>
                            </div>
                        </div>
                        <div class="card-body">
                            <div class="comments_data">
                                <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero</p>
                            </div>
                            <div class="nos_like">
                                <i class="fa fa-heart-o"></i>
                                <span>16</span>
                                <img src="<?php echo base_url() . BLOG?>message.png" class="img-fluid" alt="">
                                <span>12</span>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </dov>
        </div>
    </div>
</section>

<section class="related_blog common_Section">
    <div class="container">
        <div class="heading">
                <h2>Related <span>Articles</span></h2>
            </div>
        <div class="row">
            <div class="col-md-4">
                <div class="card blog_card">
                    <img src="<?php echo base_url() . BLOG ?>Image [ASSET=small][SIZE=Default][STATE=DEFAULT].png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body blog_cbody">
                        <small>Category Name | Date</small>
                        <h5 class="card-title blog_ctitle">Lorem ipsum dolor sit amet, consectetur.</h5>
                        <p class="card-text blog_ctext">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia in deserunt mollit anim id est sint laborum.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog_card">
                    <img src="<?php echo base_url() . BLOG ?>Image [ASSET=small][SIZE=Default][STATE=DEFAULT].png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body blog_cbody">
                        <small>Category Name | Date</small>
                        <h5 class="card-title blog_ctitle">Lorem ipsum dolor sit amet, consectetur.</h5>
                        <p class="card-text blog_ctext">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia in deserunt mollit anim id est sint laborum.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card blog_card">
                    <img src="<?php echo base_url() . BLOG ?>Image [ASSET=small][SIZE=Default][STATE=DEFAULT].png" class="card-img-top img-fluid" alt="...">
                    <div class="card-body blog_cbody">
                        <small>Category Name | Date</small>
                        <h5 class="card-title blog_ctitle">Lorem ipsum dolor sit amet, consectetur.</h5>
                        <p class="card-text blog_ctext">Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia in deserunt mollit anim id est sint laborum.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="awaits_sec blog_cont common_Section">
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
                                    <option value="">Wedding Vendor</option>
                                    <option value="">Wedding Vendor</option>
                                    <option value="">Wedding Vendor</option>
                                    <option value="">Wedding Vendor</option>
                                </select>
                            </div>
                        </div>
                        <button class="btn reach_btn">Contact Us!</button>
                    </form>
                </div>
                <div class="col-md-2">
                    <img src="<?php echo base_url() . SERVICE ?>reach2.png" class="img-fluid reach_img" alt="">
                </div>
            </div>
        </div>
    </div>
    <div class="container insta_jumbo">
        <div class="row elevate_row">
            <div class="col-12 text-center text-white">
                <p class="folow_para">Follow Us</p>
                <p class="folow_para1">For More Inspiration On Instagram </p>
                <h6><i class="fa fa-instagram text-white"></i> @myweddingpaletteofficial</h6>
                <button class="btn btn-insta">Follow</button>
            </div>
        </div>
    </div>
    <div class="container folow_container">
        <div class="row">
            <div class="col-12">
                <div class="follow">
                    <h5><span> Follow</span> Us</h5>
                    <i class="fa fa-facebook"></i>
                    <i class="fa fa-pinterest"></i>
                    <i class="fa fa-linkedin"></i>
                    <i class="fa fa-youtube"></i>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="contact_sec common_section">
    <div class="container">
        <div class="heading">
            <h4><span>Contact</span> Us</h4>
            <img src="<?php echo base_url() . SERVICE?>Group1438.png" class="img-fluid title_underline" alt="">
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="car_div">
                    <div class="cont_img">
                        <img src="<?php echo base_url() . BLOG?>175x256 (2).png" class="img-fluid" alt="">
                    </div>
                    <div class="user_cont">
                        <p>If you are getting married & need help:</p>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mwp@myweddingpalette.com"><button class="btn btn-contact">mwp@myweddingpalette.com</button></a>
                        <a href="#"><button class="btn btn-contact">+91 7089796608</button></a>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
            <div class="car_div_right">
                    <div class="cont_img">
                        <img src="<?php echo base_url() . BLOG?>Group 309.png" class="img-fluid" alt="">
                    </div>
                    <div class="user_cont">
                        <p>If you are a wedding vendor & need help:</p>
                        <a href="https://mail.google.com/mail/?view=cm&fs=1&to=mwp@myweddingpalette.com"><button class="btn btn-contact">mwp@myweddingpalette.com</button></a>
                        <a href="#"><button class="btn btn-contact">+91 7089796608</button></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); ?>