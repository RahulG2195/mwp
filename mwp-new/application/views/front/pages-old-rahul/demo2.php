<?php $this->load->view('front/layout/front-header'); ?>
<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/video_blog.css">
<section class="service_banner">
    <div class="overlay_banner"></div>
    <div class="container">
        <div class="row">
            <div class="service_title common_banner_title text-center">
                <h5>All Projects</h5>
                <img data-src="<?php echo base_url() . MAIN_IMG ?>heading_design.png" class="img-fluid img-responsive heading_line" alt="">
            </div>
        </div>
    </div>
</section>

<section class="service_content">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="search">
                    <i class="fa fa-search"></i>
                    <input type="text" class="form-control" placeholder="Search Palace, wadas, Residental">
                </div>
            </div>
        </div>
        <div align="center" class="mt-4 text-capitalize filter_groups" data-aos="fade-up" data-aos-delay="100">
            <button class="btn-default filter-button filter_button m-1 text-capitalize active" data-filter="all">All</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="Institutional">institutional buildings</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="Administrative">administrative</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="Public">public buildings</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="palaces">palaces</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="residential">residential buildings</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="Miscellaneous">Miscellaneous</button>
            <button class="btn-default filter-button filter_button m-1 text-capitalize" data-filter="Religious">religious buildings</button>
        </div>
        <div class="main_content mt-5 filter Institutional" id="Institutional">
            <div class="ser_cont">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <div class="service_img1">
                            <img data-src="<?php echo base_url() . PROJECTS ?>Agiyari/projectbanner.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="service_content1">
                            <div class="service_content_title">
                                <h4>Vesu Adaran (Agiari), Surat</h4>
                            </div>
                            <div class="service_content_para">
                                <p>
                                Adaran / Agiari means the house of fire, a sacred worship place of the Parsi /  Zorastrians Community.
                                The Vesu Adaran which was constructed in the late 18th century had battled its fair share of wear and tear in the form of time, climate, pollution and natural disaster and resulted in a structure that looked pale shadow of its heyday. 
                                Vesu Adaran in 2018 stood as a disintegrated heritage structure calling for collaborative intelligence from varied fields for its restoration as it demanded heavy duty embellishments and complete architectural rejig. The mandate was noble and task mammoth, hence few noble men, philanthropic at heart and technical experts joined hands to take up the mantle of restoration of this heritage of Parsi community. 
                                </p>
                            </div>
                            <a href="<?php echo base_url('Project/Agiyari_detail') ?>"><img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                            <a href="<?php echo base_url() . PROJECTS ?>PDF/06VasuAdaran-SuratCoffeeTablePreview13-05-2020-513202092755AM.pdf" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ser_cont">
                <div class="row">
                    <div class="col-md-6 mt-5 order-2 order-md-1">
                        <div class="service_content1">
                            <div class="service_content_title">
                                <h4>Aligarh Muslim University</h4>
                            </div>
                            <div class="service_content_para">
                                <p>The Aligarh Muslim University has been often associated with magnanimity, power and beauty. The Iconic seven storied building is the state-of-the-art AMU campus and has been the center of attraction for educationists across the globe. It's nothing short of a structural marvel for an education building. Aligarh Muslim University <br>
                                    This beautiful state-of-the art structure with equally affluent interiors and architecture serves as reference point to various aspiring students in many diverse educational fields ranging from art, science, history, liberal studies, technology, law and literature all under one roof With time, traces of wear and tear were becoming evident on the monumental campus of AMU and it needed a revamp and beautification to restore its original shape and charm. The scale of work was mammoth and it needed the quality and precision of acumen to restore the heritage structure.
                                </p>
                            </div>
                            <a href="<?php echo base_url('Project/Aligarh_detail') ?>"><img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                            <a href="<?php echo base_url() . PROJECTS ?>PDF/AMUCoffeeTable-12142022101245AM.pdf" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 order-1 order-md-2">
                        <div class="service_img1">
                            <img data-src="<?php echo base_url() . PROJECTS ?>AMUAligarh/prjectbanner.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_content mt-5 filter Miscellaneous" id="Miscellaneous">

        </div>
        <div class="main_content mt-5 filter Public" id="Public">
            <div class="ser_cont">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <div class="service_img1">
                            <img data-src="<?php echo base_url() . PROJECTS ?>SuratCastle/projectbanner.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="service_content1">
                            <div class="service_content_title">
                                <h4>Surat Castle</h4>
                            </div>
                            <div class="service_content_para">
                                <p>Sanskrit means ‘Restoring the lost Glory’. History comes alive, when we walk into one of these Heritage
structures - the sounds of warm trumpets, beating of drums, Sky high ceilings, Pieces of art, Grandiose
of live of Kings and Queens, Voices of masses, Famous speeches and heart pounding sense of patriotism
and glory. Every step into heritage takes us back in time and reminds us of the sense of architectural
perfection, magic of artistry, weaving culture into the colourful tapestry of life and a sense of connection
and bonding to help us define – ‘Who we are’ and be proud of our rich cultural & architectural heritage.
What is seen today is the result which is nothing short of a miracle. To bring back Surat
fort to its feet is a pure labor of love which has recreated the magic of medieval times. The coffee table
with its interiors and picturesque environ in the fort exudes rich grandeur that illuminates the
imagination and provides visitors with a royal ambience to re-experience the time and tides of the
ancient era.</p>
                            </div>
                            <a href="<?php echo base_url('Project/Surat_Castle') ?>"><img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                            <a href="<?php echo base_url() . PROJECTS ?>PDF/SuratCastleCoffeeTablePreview-513202020731AM.pdf" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ser_cont">
                <div class="row">
                    <div class="col-md-6 mt-5 order-2 order-md-1">
                        <div class="service_content1">
                            <div class="service_content_title">
                                <h4>Cellular Jail, Port Blair</h4>
                            </div>
                            <div class="service_content_para">
                                <p><b>"Azadi Ka Tirth Sthal"</b> The Cellular Jail, recognized as the National Memorial, was opened in 1906, during British rule in India. 
The emerging era of the Indian Freedom Revolution began with "Kala Pani", meaning the death penalty for freedom fighters, also known as "water of death", due to the geographical location of the Andaman and Nicobar Islands. 
The structure consisting of the colonial jail is 3-storied construction of Burmese bricks in the shade of puce. The Panopticon type architectural layout of the jail, with the tower, served as a single point of vigilance to keep an eye on the prisoners of the 7 gigantic wings and 663 cells of the prison. 
This extensive task of restoration and repairs of the Cellular Jail was undertaken by Andaman P.W.D. under the guidance of A.S.I. and Stambh Consultants. Proudly, "Savani Heritage Conservation Pvt. Ltd." received the opportunity and responsibility for the restoration of the national monument. We have strived to restore more than 150 heritage monuments and are obliged to work on a historic monument of national importance known as 'Azadi Ka Tirth Sthal'. 
                                </p>
                            </div>
                            <a href="<?php echo base_url('Project/Cellular_Jail_Andaman_detail') ?>"><img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                            <a href="<?php echo base_url() . PROJECTS ?>PDF/CellularJail-AndamanandNicobarIslands-CoffeeTable22-05-2022_compressed(1)-12142022124021AM.pdf" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 order-1 order-md-2">
                        <div class="service_img1">
                            <img data-src="<?php echo base_url() . PROJECTS ?>CellularJailAndaman/projectbanner.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_content mt-5 filter Administrative" id="Administrative">
            <div class="ser_cont">
                <div class="row">
                    <div class="col-md-6 mt-5">
                        <div class="service_img1">
                            <img data-src="<?php echo base_url() . PROJECTS ?>Visakhapatnam/projectbanner.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="service_content1">
                            <div class="service_content_title">
                                <h4>Town Hall, Visakhapatnam</h4>
                            </div>
                            <div class="service_content_para">
                                <p>The Old Municipal Office building was constructed in the late 1930s by British India as an administrative building, the traces of which can still be seen today in the prison-like rooms on the ground floor.The building was used until 1947, after independence it was handed over to the G.V.M.C., which is now used as a municipal office.
                                The structure is typically characterized with the European arch, flat cantilevers occupying equal space and a majestic dome over the central staircase. The structure sits in a site of area of 1.7 acres and is made entirely out of cut stone. The OMO is also one of the first buildings to have a self-supporting steel and concrete enforced roof. 
                                The Town hall building which is also called as 'The Victoria Town Hall' is built by Maharaja of Bobbili between 1901-1904, at that time to commemorate the golden jubilee of Queen Victoria. The building was inaugurated by R. H. Campbell, Collector and Agent, Visakhapatnam on March 8, 1904. 
                                We at Savani Heritage Conservation Pvt. Ltd. are grateful to the Commissioner GVMC, the AECOM and citizens of Vizag who have extended their support by being curious in the process of the restoration of the Old Municipal Office and Town Hall.
                                </p>
                            </div>
                            <a href="<?php echo base_url('Project/Visakhapatnam') ?>"><img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                            <a href="<?php echo base_url() . PROJECTS ?>PDF/TownHall&OldMunicipalOfficeCoffeeTable27-07-2022(1)-12142022124131AM.pdf" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main_content mt-5 filter Religious" id="Religious">
            <div class="ser_cont">
                <div class="row">
                    <div class="col-md-6 mt-5 order-2 order-md-1">
                        <div class="service_content1">
                            <div class="service_content_title">
                                <h4>Chamrajeshwar Temple, Chamrajnagar</h4>
                            </div>
                            <div class="service_content_para">
                                <p>Indian Architecture is as old as History itself and the cornerstone to every architectural marvel has always been temples and religious structures. One such piece of architectural phenomena is Chamarajeshwara temple located in Chamarajanagar in Karnataka which is truly the most splendid depiction of Dravidian architecture. 
                                The temple trust and the caretaker of the ‘Chamarajeshwara’ temple has dedicated yeomen services in maintaining the temple and have ensured that this religious legacy is preserved and handed over from one generation to another. 
                                The task of restoration was humongous and the responsibility was bestowed upon ‘Savani Heritage Conservation Pvt. Ltd. Being the recipient of 7 international awards and having the expertise and experience of restoring several heritage sites, the credentials were more than enough to entrust the responsibility for “Chamarajeshwara” temple. It is a matter of pride for the locals in Chamrajnagar and devotees across the country as the ‘Chamrajeshwara Temple’ that stands today is restored, revered as before and in regal state. 
                                </p>
                            </div>
                            <a href="<?php echo base_url('Project/Chamraj_Nagar_detail') ?>"><img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                            <a href="<?php echo base_url() . PROJECTS ?>PDF/04ChamarajeshwaraTemple-ChamarajanagarCoffeeTablePreview13-05-2020-513202085314AM.pdf" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 order-1 order-md-2">
                        <div class="service_img1">
                            <img data-src="<?php echo base_url() . PROJECTS ?>Chamrajnagar/projectbanner.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
            <div class="ser_cont">
                <div class="row">
                <div class="col-md-6 mt-5">
                        <div class="service_content1">
                            <div class="service_content_title">
                                <h4> St. Philomena’s Cathedral, Mysuru</h4>
                            </div>
                            <div class="service_content_para">
                                <p>The St. Philomena's Cathedral, is a grand religious structure standing tall and is a unique example of heritage church in India with a history and deep religious significance. 
                                The church is dedicated to St. Philomena's, a Grecian princess who was martyred in the 4th century. Her relics were found centuries later in one of the Roman catacombs, and in 1926 the relic was handed over to Father Cochet, who requested the then king of Mysore, Maharaja Krishnarajendra Wadiyar to construct a church in the honour of St. Philomena's. 
                                The task of restoration was humongous which needed a specialist and the responsibility of restoration was bestowed upon 'Savani Heritage Conservation Private Limited'. 
                                Today, St. Philomena's Church is fully restored and looks stunning as ever. 
                                </p>
                            </div>
                            <a href="<?php echo base_url('Project/Philomena_Church') ?>"><img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                            <a href="<?php echo base_url() . PROJECTS ?>PDF/StPhilomenaChurch-MysoreCoffeeTablePreview13-05-2020-527202030137AM.pdf" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5">
                        <div class="service_img1">
                            <img data-src="<?php echo base_url() . PROJECTS ?>PhilomenaChurch/ProjectBanner.png" class="img-fluid" alt="">
                        </div>
                    </div>
                    
                </div>
            </div>
            <div class="ser_cont">
                <div class="row">
                    <div class="col-md-6 mt-5 order-2 order-md-1">
                        <div class="service_content1">
                            <div class="service_content_title">
                                <h4>St. Thomas's Cathedral. Mumbai</h4>
                            </div>
                            <div class="service_content_para">
                                <p>St. Thomas Cathedral Church is one such exemplary religious structure, a magnanimously built heritage site with a glorious historical past of 300 years and a tradition that is vibrant, relevant and equally gracious even today. The idea of St. Thomas Cathedral building was conceived by Sir John Oxinden, the East India Company's first Governor of Bombay in 1668. He was an intensely religious man who foresaw the religious needs of his men and thought of building a church in Bombay. Gerald Aungier, who succeeded him in 1669, pursued Oxinden's wish.
                                Today, the Cathedral stands as a landmark in South Mumbai and is one of the oldest churches in India. The name of nearby Church gate station refers to this church. One of the gates in the Fort which the East India Company had built to protect their settlement was the entrance to the St. Thomas Church. It was called Churchgate. Since then the entire area towards the West of the Church is called "Churchgate' even today. The street leading to the Church was originally called Churchgate Street and was later renamed like many streets in Bombay, and is now known as Veer Nariman Road.
                                </p>
                            </div>
                            <a href="<?php echo base_url('Project/Thomas_Cathedral_Church') ?>"><img data-src="<?php echo base_url() . MAIN_IMG ?>know_more.png" class="img-fluid img-responsive read_more" alt=""></a>
                            <a href="<?php echo base_url() . PROJECTS ?>PDF/08StThomasCathedral-FortMumbaiCoffeeTablePreview30-07-2020-7302020125340AM.pdf" download="download" class="download_pdf"><img data-src="<?php echo base_url() . MAIN_IMG ?>download_now.png" class="img-fluid img-responsive read_more" alt=""></a>
                        </div>
                    </div>
                    <div class="col-md-6 mt-5 order-1 order-md-2">
                        <div class="service_img1">
                            <img data-src="<?php echo base_url() . PROJECTS ?>ThomasCathedralChurch/ProjectBanner.png" class="img-fluid" alt="">
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
</section>
<?php $this->load->view('front/layout/front-footer2'); ?>

<script>
    $(document).ready(function() {
        function setActiveButton() {
            var hash = window.location.hash;
            console.log("Hash:", hash); // Check if hash is detected
            if (hash) {
                $('.filter').hide();
                $(hash).show('1000');
                $(".filter-button").removeClass("active");
                $(`[data-filter="${hash.substr(1)}"]`).addClass("active");
            } else {
                $('.filter').show();
            }
        }

        setActiveButton();

        $(".filter-button").click(function() {
            var value = $(this).attr('data-filter');
            window.location.hash = value;

            if (value == "all") {
                $('.filter').show('1000');
            } else {
                $('.filter').hide('3000');
                $('.' + value).show('3000');
            }

            $(".filter-button").removeClass("active");
            $(this).addClass("active");
        });
    });
</script>