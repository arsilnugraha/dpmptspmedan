        <link href="https://fonts.googleapis.com/css?family=Lato:300,400,400i,700|Poppins:300,400,500,600,700|PT+Serif:400,400i&amp;display=swap" rel="stylesheet" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/') ?>_theme/css/bootstrap.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/') ?>_theme/style.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/css/custom.css') ?>" type="text/css">
        
        <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/') ?>_theme/css/swiper.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/') ?>_theme/css/dark.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/') ?>_theme/css/font-icons.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/') ?>_theme/css/animate.css" type="text/css">
        <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/') ?>_theme/css/magnific-popup.css" type="text/css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
        <?php if(isset($menu_aktif) && $menu_aktif == 'home') { ?>
                <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/css/') ?>home.css" type="text/css">
                    <!-- Core CSS -->
                <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css" rel="stylesheet">
                <link href="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.css" rel="stylesheet">
        <?php } ?>
        <?php if(isset($menu_aktif) && $menu_aktif == 'tracking_izin') { ?>
                <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/css/tracking.css') ?>" type="text/css">
        <?php } ?>
        <?php if(isset($menu_aktif) && $menu_aktif == 'visitormpp') { ?>
                <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/css/visitor-mpp.css') ?>" type="text/css">
        <?php } ?>
        <?php if(isset($menu_aktif) && $menu_aktif == 'marriageinfo') { ?>
                <link rel="stylesheet" href="<?php echo base_url('assets/landingpage/css/marriage-info.css') ?>" type="text/css">
        <?php } ?>

