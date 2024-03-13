<?php $this->load->view('front/layout/head');
$this->load->view('front/layout/header');
?>
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/style.css' ?>">
<link rel="stylesheet" href="<?php echo base_url() . 'assets/front/css/blog.css' ?>">
<script src="https://cdn.jsdelivr.net/npm/masonry-layout@4.2.2/dist/masonry.pkgd.min.js"></script>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/common.css">
<section class="service_banner banner-secion-common" id="service_banner" style="background-image: url('<?php echo base_url()?>assets/front/image/hero-banner/MWP-Blog-page-hero-banner.jpg' )">
   <!--  <div class="overlay1"></div> -->
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
                <div class="customer-logos slider blog_slider">
                    <!-- <div class="slide">
                        <img src="<?php echo base_url() ?>assets/front/image/blog-icon/Bridal-Fashion.png" class="img-fluid">
                        <h6 class="city-text">Latest</h6>
                    </div> -->
                    <div class="slide"><img src="<?php echo base_url() ?>assets/front/image/blog-icon/Bridal-Fashion.png" class="img-fluid">
                        <h6 class="city-text">Bridal Fashion</h6>
                    </div>
                    <div class="slide"><img src="<?php echo base_url() ?>assets/front/image/blog-icon/Cultures-and-Traditions.png" class="img-fluid">
                        <h6 class="city-text">Culture and Tradition</h6>
                    </div>
                    <div class="slide"><img src="<?php echo base_url() ?>assets/front/image/blog-icon/Decoration-Ideas.png" class="img-fluid">
                        <h6 class="city-text">Decoration Ideas</h6>
                    </div>
                    <div class="slide"><img src="<?php echo base_url() ?>assets/front/image/blog-icon/Honeymoon-Planning.png" class="img-fluid">
                        <h6 class="city-text">Honeymoon Planning</h6>
                    </div>
                    <div class="slide"><img src="<?php echo base_url() ?>assets/front/image/blog-icon/Real-Weddings.png" class="img-fluid">
                        <h6 class="city-text">Real Weddings</h6>
                    </div>
                    <div class="slide"><img src="<?php echo base_url() ?>assets/front/image/blog-icon/Trends-and-Ideas.png" class="img-fluid">
                        <h6 class="city-text">Trends and Ideas</h6>
                    </div>
                    <div class="slide"><img src="<?php echo base_url() ?>assets/front/image/blog-icon/Vendor-Spotlights.png" class="img-fluid">
                        <h6 class="city-text">Vendor Spotlight</h6>
                    </div>
                    <div class="slide"><img src="<?php echo base_url() ?>assets/front/image/blog-icon/Wedding-Planning-Tips.png">
                        <h6 class="city-text">Wedding Planning Tips</h6>
                    </div>
                    <div class="slide"><img src="<?php echo base_url() ?>assets/front/image/blog-icon/Others.png">
                        <h6 class="city-text">Others</h6>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</section>
<section class="blog_card_sec common_Section">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="<?php echo base_url('blog-detail') ?>">
                    <div class="card blog_card">
                        <img src="<?php echo base_url() ?>assets/front/image/blog-image/blog-How-to-plan--your-wedding-in-budget-blog-page.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body blog_cbody">
                            <small>Category Name | Date</small>
                            <h5 class="card-title blog_ctitle">The Ultimate Guide to Planning a Budget Wedding in India</h5>
                            <p class="card-text blog_ctext">Wedding Planning is a beautiful, fun experience. But it can also be very stressful and expensive.Luckily there are plenty of ways to keep your dream wedding on a budget.</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>

                </a>
            </div>
            <div class="col-md-4">
                <div class="card blog_card">
                    <img src="<?php echo base_url() ?>assets/front/image/blog-image/Wedding-hack-for-budget-blog-page.jpg" class="card-img-top img-fluid" alt="...">
                    <div class="card-body blog_cbody">
                        <small>Category Name</small>
                        <h5 class="card-title blog_ctitle">Your Style, Your Budget: Uncompromised Wedding Hacks!</h5>
                        <p class="card-text blog_ctext">Before you embark on your wedding planning journey, picture this: a celebration that reflects your unique style, without breaking the bank. Now, let us introduce you to a world of possibilities with our blog post on Uncompromised Wedding Hacks.</p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url('blog-detail') ?>">
                    <div class="card blog_card">
                        <img src="<?php echo base_url() ?>assets/front/image/blog-image/Latest-heavy-bridal-jewellery-blog--iamges.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body blog_cbody">
                             <small>Category Name</small>
                            <h5 class="card-title blog_ctitle">Discover the Latest Heavy Bridal Jewelry Trends: A Guide to Glamour</h5>
                            <p class="card-text blog_ctext">Attention brides-to-be, fashion enthusiasts, and jewelry connoisseurs! Step into the enchanting world of Indian Bridal Jewellery in 2023, where tradition meets modernity, and elegance knows no bounds.</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url('blog-detail') ?>">
                    <div class="card blog_card">
                        <img src="<?php echo base_url() ?>assets/front/image/blog-image/Bridal-Jewelery-accessories-trends-2023-blog-page.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body blog_cbody">
                             <small>Category Name</small>
                            <h5 class="card-title blog_ctitle">Adorn Your Love Story: 2023's Ultimate Bridal Accessories</h5>
                            <p class="card-text blog_ctext">Attention all brides-to-be, are you ready to elevate your bridal charm to new heights? As you embark on this beautiful journey toward your wedding day, one thing is for certain – your bridal look deserves nothing less than the extraordinary.</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url('blog-detail') ?>">
                    <div class="card blog_card">
                        <img src="<?php echo base_url() ?>assets/front/image/blog-image/Christain-Wedding-blog-page.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body blog_cbody">
                            <small>Category Name</small>
                            <h5 class="card-title blog_ctitle">A Guide to Indian Christian Wedding Rituals and Their Symbolism</h5>
                            <p class="card-text blog_ctext">Are you fascinated by the enchanting world of Indian Christian weddings? The amalgamation of
traditions, cultural diversity, and profound symbolism makes these celebrations truly mesmerizing.</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url('blog-detail') ?>">
                    <div class="card blog_card">
                        <img src="<?php echo base_url() ?>assets/front/image/blog-image/Bengali-Wedding-blog-page.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body blog_cbody">
                             <small>Category Name</small>
                            <h5 class="card-title blog_ctitle">Discover the Enchanting Bengali Wedding Rituals: Color Your Wedding Palette with Joy!</h5>
                            <p class="card-text blog_ctext">Love, laughter, and eternal unions—Bengali weddings are a celebration of joy, rich traditions, and vibrant customs.</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url('blog-detail') ?>">
                    <div class="card blog_card">
                        <img src="<?php echo base_url() ?>assets/front/image/blog-image/Kannada-Wedding-blog-page.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body blog_cbody">
                             <small>Category Name</small>
                            <h5 class="card-title blog_ctitle">Understanding the Beautiful Kannada Wedding Ceremony</h5>
                            <p class="card-text blog_ctext">Are you ready to immerse yourself in the enchanting world of Kannada wedding rituals? Planning a
wedding involves countless decisions and details, and when it comes to the cultural customs of a
Kannada wedding, it&#39;s important to have a comprehensive understanding of the ceremony.</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url('blog-detail') ?>">
                    <div class="card blog_card">
                        <img src="<?php echo base_url() ?>assets/front/image/blog-image/Indian-Wedding-Styles-blog-page.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body blog_cbody">
                             <small>Category Name</small>
                            <h5 class="card-title blog_ctitle">A Comprehensive Guide to Indian Wedding Traditions and Customs</h5>
                            <p class="card-text blog_ctext">Hey there, lovebirds! Are you getting hitched soon and looking for some inspiration to make your big
day unforgettable?</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-4">
                <a href="<?php echo base_url('blog-detail') ?>">
                    <div class="card blog_card">
                        <img src="<?php echo base_url() ?>assets/front/image/blog-image/Gujarati-Wedding-blog-page.jpg" class="card-img-top img-fluid" alt="...">
                        <div class="card-body blog_cbody">
                            <small>Category Name</small>
                            <h5 class="card-title blog_ctitle">The Big Fat Gujarati Wedding: A Whirlwind of Traditions and Celebrations</h5>
                            <p class="card-text blog_ctext">Planning a wedding that captures the essence of your dreams can be overwhelming, especially when
it comes to the Big Fat Gujarati Wedding with its myriad rituals, traditions, and ceremonies.</p>
                            <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                        </div>
                    </div>
                </a>
            </div>
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
                    <h1>Turn Your Dream Wedding into Reality!</h1>
                    <h2>Enjoyed Our Blog?</h2>
                    <h3> Now Make It Happen Through Our Personalised Vendor Recommendations</h3>
                    <p>You've just uncovered a treasure trove of wedding inspiration in our blog. Imagine turning those dreamy ideas into reality with the perfect vendors. Whether it's breathtaking decor, stunning outfits, magical photography, or more – our Personalised Vendor Recommendation service is your golden ticket to crafting the wedding of your dreams!</p>
                    <button class="btn elevate_btn">Elevate Your Wedding Planning Today!</button>
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
</section>

<section class="blog_gallery common_Section">
    <div class="container">
        <div class="row" data-masonry='{"percentPosition": true }'>
            <div class="col-md-3 gal_col">
                <img src="<?php echo base_url() . BLOG ?>Group 330.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 gal_col">
                <div class="gallery_content text-center">
                    <h5>Get More </h5>
                    <h3> Wedding Photos, Latest Trends & Ideas</h3>
                    <p>( 36000+ photos )</p>
                    <img src="<?php echo base_url() . SERVICE ?>Group1438.png" class="img-fluid" alt="">
                    <p>Browse from latest Wedding Photos, Ideas & Inspiration</p>
                    <button class="btn gallery_btn">Take Me To Gallery</button>
                </div>
            </div>
            <div class="col-md-3 gal_col">
                <img src="<?php echo base_url() . BLOG ?>Group334.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-6 gal_col">
                <img src="<?php echo base_url() . BLOG ?>Group 332.png" class="img-fluid" alt="">
            </div>
            <div class="col-md-3 gal_col">
                <img src="<?php echo base_url() . BLOG ?>Group 331.png" class="img-fluid" alt="">
            </div>

            <div class="col-md-3 gal_col">
                <img src="<?php echo base_url() . BLOG ?>Group 333.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>
<?php $this->load->view('front/layout/footer');
$this->load->view('front/layout/script'); ?>