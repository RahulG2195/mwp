<!DOCTYPE HTML>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="facebook-domain-verification" content="0etvrnt9oujvoxud1xc980h2hzm0yz" />
    <!--<meta name="facebook-domain-verification" content="0etvrnt9oujvoxud1xc980h2hzm0yz" />-->
    <link href='https://fonts.googleapis.com/css?family=Montserrat' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
       <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/bootstrap.min.css">
    <link rel="icon" type="image/png" sizes="56x56" href="<?php echo  base_url() ?>assets/front/image/logo/mwp-favicon.png">
    <!-- Style -->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/animate.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/header.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/footer.css">
    <!--<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/responsive.css">-->
    <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/WPmodel.css">
    
    <!--<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor_form.css">-->
    <?php 
      $pageurl=$this->uri->segment(1);
    //var_dump($pageurl);
      $serviceurl=$this->uri->segment(2);
    ?>
    <?php 
      if($pageurl =="Myaccount"){ 
           echo "";
        ?>
      
    <?php  }
    else{ ?>
         <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor_form.css">
  <?php  }
    ?>
    
    
    <link href='https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/themes/ui-lightness/jquery-ui.css'
          rel='stylesheet'>
    <script src="https://ajax.googleapis.com/ajax/libs/jqueryui/1.12.1/jquery-ui.min.js">
    </script>
    <!--<link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/vendor.css">-->
    <!-- <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/owl.carousel.min.css"> -->
    
     <!-- OLD VERSION OF OWL CAROUSEL  -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.carousel.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.theme.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/owl-carousel/1.3.3/owl.transitions.css"> -->

    <!-- NEW VERSION OF OWL CAROUSEL -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.theme.default.min.css" integrity="sha512-sMXtMNL1zRzolHYKEujM2AqCLUR9F2C4/05cdbxjjLSRvMQIciEPCQZo++nk7go3BtSuK9kfa/s+a4f4i5pLkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- <script src="https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.js"></script> -->
   <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
  <!--  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css" integrity="sha512-SfTiTlX6kk+qitfevl/7LibUOeJWlt9rbyDn92a1DqWOw9vWG2MFoays0sgObmWazO5BQPiFucnnEAjpAB+/Sw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
    
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />-->
    
    <!--VERSION 2 CSS START HERE-->
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/version_2/header.css">
     
     <link rel="stylesheet" href="<?php echo base_url() ?>assets/front/css/version_2/wedding-planning.css">
     <!--END OF VERSION 2 CSS -->
    
    
    
    
    <?php 
    $pageurl=$this->uri->segment(1);
   //var_dump($pageurl);
    $serviceurl=$this->uri->segment(2);
    ?>
    <title>
      <?php if(current_url() ==base_url()) {
              echo "Expert Wedding Planners in India for Your Dream Celebration | My Wedding Palette";
      }
      elseif($pageurl=="about-my-wedding-palette"){
           echo "Best Wedding Planners in India - My Wedding Palette";
      }
      elseif($pageurl=="trends-and-ideas-for-wedding-photos"){
          echo "Creative Ideas and Real Wedding Photos for Your Inspiration | My Wedding Palette";
      }
      elseif($pageurl=="contact-us"){
        echo "My Wedding Palette Contact Details  +91-7977965178";
      }
      elseif($serviceurl=="wedding-planning")
      {
        echo "Top Wedding Planners in India - My Wedding Palette";
      }
      elseif($serviceurl=="vendor-recommendation-for-wedding")
      {
        echo "Explore Top Wedding Vendors on My Wedding Palette";
      }
      elseif($serviceurl=="destination-wedding")
      {
        echo "Discover All-Inclusive Destination Wedding Packages | My Wedding Palette";
      }
      elseif($serviceurl=="wedding-decoration-design-ideas")
      {
        echo "We Create Magical Decorations and Ambiance for Your Wedding";
      }
      elseif($serviceurl=="wedding-planning-tool")
      {
        echo "Effortless Wedding Planning Solutions - Wedding Budget Calcuator, Wedding Checklist";
      }
      elseif($serviceurl=="customized-wedding-add-ons")
      {
        echo "Discover a world of possibilities to make wedding truly unforgettable";
      }
      elseif($serviceurl=="destination-wedding-venues")
      {
        echo "Discover Best Venues for Weddings Near You | My Wedding Palette";
      }
      elseif($serviceurl=="bridal-wear-vendors")
      {
        echo "Find Top Bridal Wear Vendors for Your Wedding | My Wedding Palette";
      }
      elseif($serviceurl=="groom-wear-vendors")
      {
        echo "Explore Top Groom Wear Vendors for Your Wedding | My Wedding Palette";
      }
      elseif($serviceurl=="wedding-photographers-near-me")
      {
        echo "Find Wedding Photographers Near You | My Wedding Palette";
      }
      elseif($serviceurl=="make-up-artists-near-me")
      {
        echo "Discover Best Makeup Artists Near You for Your Wedding | MWP";
      }
      elseif($serviceurl=="mehendi-artists-near-me")
      {
        echo "Find Nearby Mehendi Artists for Your Wedding | My Wedding Palette";
      }
      elseif($serviceurl=="bridal-jewellery")
      {
        echo "Discover Trusted Bridal Jewellery Vendors | My Wedding Palette";
      }
      elseif($serviceurl=="wedding-decoration")
      {
        echo "Find Top Wedding Decoration Vendors | My Wedding Palette";
      }
      elseif($serviceurl=="wedding-gifts")
      {
        echo "Cherish Special Moment with Thoughtful Wedding Gifts | My Wedding Palette";
      }
      elseif($serviceurl=="caterers-for-wedding")
      {
        echo "Savor the Moment with Exceptional Wedding Caterers | My Wedding Palette";
      }
      elseif($serviceurl=="wedding-invitations-vendor-near-me")
      {
        echo "Create Stunning Wedding Invitations with My Wedding Palette's Trusted Vendors";
      }
      else{
            echo "";
      }

      ?>
    </title>
    
    <meta name="description" content="
    <?php if(current_url() ==base_url()) {
              echo "Let experienced wedding planners in India bring your dream wedding to life. From venue selection to execution, trust our professionals to create a memorable celebration. Explore options on My Wedding Palette.";
      }
      elseif($pageurl=="about-my-wedding-palette"){
           echo "We create extraordinary weddings through the perfect blend of technology, creative design, and a customized approach that reflects your unique vision";
      }
      elseif($pageurl=="trends-and-ideas-for-wedding-photos"){
          echo "Elevate your wedding album with creative and memorable photo ideas. Explore a gallery of breathtaking wedding photos to spark ideas for your own celebration on My Wedding Palette.";
      }
      elseif($pageurl=="contact-us"){
        echo "Contact us with your concerns at +91 7977965178 or Email us at mwp@myweddingpalette.com";
      }
      elseif($serviceurl=="wedding-planning")
      {
        echo "Explore My Wedding Palette portfolio, read reviews from past clients and schedule a consultation to discuss your specific needs and expectations.";
      }
      elseif($serviceurl=="vendor-recommendation-for-wedding")
      {
        echo "Discover top-rated wedding vendors for photography, make-up artists, mehendi artists, catering, decor, and more. Make your dream wedding a reality with My Wedding Palette.";
      }
      elseif($serviceurl=="destination-wedding")
      {
        echo "Discover tailored destination wedding packages for your perfect 
        celebration. From exotic locations to seamless planning, find your ideal
         package on My Wedding Palette.";
      }
      elseif($serviceurl=="wedding-decoration-design-ideas")
      {
        echo "Explore a variety of creative decoration ideas and enchanting themes to elevate your wedding ambiance. Get inspired and plan your dream celebration with My Wedding Palette.";
      }
      elseif($serviceurl=="wedding-planning-tool")
      {
        echo "Simplify your wedding planning journey with our expert tips and resources. From venue selection to day-of coordination, trust My Wedding Palette to make your dream wedding a reality.";
      }
      elseif($serviceurl=="customized-wedding-add-ons")
      {
        echo "Our tailored add-ons are designed to add that extra touch of magic to every stage of your wedding day.  Get Unique style to guest welcome packages.";
      }
      elseif($serviceurl=="destination-wedding-venues")
      {
        echo "Explore enchanting destination wedding venues across India. Plan your perfect celebration amidst breathtaking landscapes and cultural richness. Start your journey with My Wedding Palette.";
      }
      elseif($serviceurl=="bridal-wear-vendors")
      {
        echo "Explore exquisite bridal wear vendors for your special day. Discover stunning dresses, sarees, and suits to make your wedding unforgettable. Start browsing on My Wedding Palette today.";
      }
      elseif($serviceurl=="groom-wear-vendors")
      {
        echo "Elevate your style with our curated selection of groom wear vendors. Find exquisite suits, sherwanis, and accessories to make your wedding day unforgettable. Discover more on My Wedding Palette.";
      }
      elseif($serviceurl=="wedding-photographers-near-me")
      {
        echo "Discover talented wedding photographers near your location. Capture every special moment of your big day with professionals you can trust. Explore options on My Wedding Palette.";
      }
      elseif($serviceurl=="make-up-artists-near-me")
      {
        echo "Enhance your beauty on your special day with talented makeup artists near you. Find professionals who will create the perfect look for your wedding. Explore options on My Wedding Palette.";
      }
      elseif($serviceurl=="mehendi-artists-near-me")
      {
        echo "Elevate your bridal beauty with exquisite mehendi artistry from nearby artists. Discover professionals who will adorn your hands with intricate designs for your special day. Explore options on My Wedding Palette.";
      }
      elseif($serviceurl=="bridal-jewellery")
      {
        echo "Find the perfect jewellery to complement your bridal attire. Explore a curated selection of trusted vendors offering exquisite necklaces, earrings, bangles, and more on My Wedding Palette.";
      }
      elseif($serviceurl=="wedding-decoration")
      {
        echo "Transform your venue into a dream wedding setting with our trusted decoration vendors. Explore a variety of themes and styles to make your special day truly unforgettable. Discover options on My Wedding Palette.";
      }
      elseif($serviceurl=="wedding-gifts")
      {
        echo "Explore a curated collection of unique and thoughtful wedding gifts. Find the perfect presents to celebrate the love of the newlyweds. Discover a world of gifting options on My Wedding Palette.";
      }
      elseif($serviceurl=="caterers-for-wedding")
      {
        echo "Delight your guests with exquisite flavors from our trusted wedding caterers. Explore a diverse menu and impeccable service to make your wedding day truly memorable. Discover options on My Wedding Palette.";
      }
      elseif($serviceurl=="wedding-invitations-vendor-near-me")
      {
        echo "Create the perfect first impression with custom wedding invitations from nearby makers. Find talented professionals to craft unique designs for your special day. Explore options on My Wedding Palette.";
      }
      else{
            echo "";
      }

      ?>
    "> 
    <!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KK8SXPMV');</script>
<!-- End Google Tag Manager -->
  </head>
  <body>
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KK8SXPMV"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->
