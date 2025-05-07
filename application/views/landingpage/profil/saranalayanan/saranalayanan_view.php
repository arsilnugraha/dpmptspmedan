<section id="page-title">
    <div class="container clearfix">
        <h1>Sarana</h1>
        <span>Foto Sarana Layanan DPMPTSP Medan</span>
        
    </div>
</section>
<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="masonry-thumbs grid-container grid-4" data-big="1" data-lightbox="gallery">
                <?php foreach ($saranalayanan as $row) { ?>                
                <a class="grid-item" href="<?php echo base_url('assets/foto_saranalayanan/'. $row->foto) ?>" data-lightbox="gallery-item">
                    <img src="<?php echo base_url('assets/foto_saranalayanan/'. $row->foto) ?>" alt="Sarana Layanan DPMPTSP Medan">
                </a>
                <?php } ?>
            </div>
        </div>
        <div class="section footer-stick">
            <div class="container fancy-title title-border title-center">
                <h3>Rekan Kami</h3>
            </div>
            <div id="oc-clients-full" class="owl-carousel owl-carousel-full image-carousel carousel-widget" data-margin="30" data-nav="true" data-pagi="false" data-autoplay="5000" data-items-xs="3" data-items-sm="3" data-items-md="5" data-items-lg="6" data-items-xl="7">
            <?php foreach ($rekankami as $row) { ?>      
                <div class="oc-item">
                    <a href="#">
                        <img src="<?php echo base_url('assets/logo_rekankami/'. $row->logo) ?>" alt="$d['lbl']">
                    </a>
                </div>
            <?php } ?>
            </div>
        </div>
    </div>
</section>     