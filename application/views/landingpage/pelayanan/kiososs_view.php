<section id="page-title">
    <div class="container clearfix">
        <?php if (!empty($kiososs->judul)) : ?>
            <h1><?php echo $kiososs->judul; ?></h1>
        <?php endif; ?>
        
        <?php if (!empty($kiososs->tanggal)) : ?>
            <span><i class="icon-calendar3"></i> <?php echo tgl_indo($kiososs->tanggal, true); ?></span>
            <br>
        <?php endif; ?>
    </div>
</section>

<section id="content">
    <div class="container clearfix">
        <div class="row gutter-40 col-mb-80">
            <div class="postcontent col-md-9">
                <div class="single-post mb-0">
                    <div class="entry clearfix">
                        <!-- Tampilkan gambar hanya jika ada -->
                        <?php if (!empty($kiososs->gambar)) : ?>
                            <figure class="entry-image">
                                <a href="<?php echo base_url('assets/foto_beritakiososs/'. $kiososs->gambar); ?>">
                                    <img src="<?php echo base_url('assets/foto_beritakiososs/'. $kiososs->gambar); ?>" alt="DPMPTSP Medan">
                                </a>
                                
                                <!-- Tampilkan caption hanya jika ada -->
                                <?php if (!empty($kiososs->gambar_caption)) : ?>
                                    <figcaption>
                                        <?php echo $kiososs->gambar_caption; ?>
                                    </figcaption>
                                <?php endif; ?>
                            </figure>
                        <?php endif; ?>

                        <!-- Tampilkan isi kiososs hanya jika ada -->
                        <?php if (!empty($kiososs->isi_berita)) : ?>
                            <div class="entry-content mt-0">
                                <?php echo $kiososs->isi_berita; ?>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
            
            <div class="col-md-3 sidebar-widgets-wrap">
                <!-- Tampilkan gambar kolaborasi hanya jika ada -->
                <div class="widget clearfix">
                    <?php $kolaborasi_image = base_url('assets/landingpage/') . 'slogan.png'; ?>
                    <?php if (file_exists($kolaborasi_image)) : ?>
                        <img src="<?php echo $kolaborasi_image; ?>">    
                    <?php endif; ?>
                </div>
            </div>
        </div>
    </div>
</section>
