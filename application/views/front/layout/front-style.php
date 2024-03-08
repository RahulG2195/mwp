<head>
<?php 
$page_url = $this->uri->segment(1);
?>
    <title>Home page</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/menu.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/new_menu.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/mdb.min.css">
    <!-- <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/footer.css"> -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/responsive.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css"
        integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- CUSTOME CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css"
        integrity="sha512-1cK78a1o+ht2JcaW6g8OXYwqpev9+6GqOkz9xmBN9iUUhIndKtxwILGWYOSibOKjLsEdjyjZvYDq/cZwNeak0w=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <?php 
    if($page_url == '' || $page_url == 'home'){
        ?>
        <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>assets/front/css/swiperjs.css">
        
        <?php
    }else{
        ?>
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.5.7/jquery.fancybox.min.css" integrity="sha512-H9jrZiiopUdsLpg94A333EfumgUBpO9MdbxStdeITo+KEIMaNfHNvwyjjDJb+ERPaRS6DpyRlKbvPUasNItRyw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <?php
            }
    ?>
</head>
