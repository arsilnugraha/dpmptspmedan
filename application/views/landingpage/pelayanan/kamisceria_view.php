<section id="page-title">
    <div class="container clearfix">
        <?php if (!empty($kamisceria->judul)) : ?>
            <h1><?php echo $kamisceria->judul; ?></h1>
        <?php endif; ?>
        
        <?php if (!empty($kamisceria->tanggal)) : ?>
            <span><i class="icon-calendar3"></i> <?php echo tgl_indo($kamisceria->tanggal, true); ?></span>
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
                        <?php if (!empty($kamisceria->gambar)) : ?>
                            <figure class="entry-image">
                                <a href="<?php echo base_url('assets/foto_beritakamisceria/'. $kamisceria->gambar); ?>">
                                    <img src="<?php echo base_url('assets/foto_beritakamisceria/'. $kamisceria->gambar); ?>" alt="DPMPTSP Medan">
                                </a>
                                
                                <!-- Tampilkan caption hanya jika ada -->
                                <?php if (!empty($kamisceria->gambar_caption)) : ?>
                                    <figcaption>
                                        <?php echo $kamisceria->gambar_caption; ?>
                                    </figcaption>
                                <?php endif; ?>
                            </figure>
                        <?php endif; ?>

                        <!-- Tampilkan isi kamisceria hanya jika ada -->
                        <?php if (!empty($kamisceria->isi_berita)) : ?>
                            <div class="entry-content mt-0">
                                <?php echo $kamisceria->isi_berita; ?>
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
