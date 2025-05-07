<section id="page-title">
    <div class="container clearfix">
        <?php if (!empty($jempolkelingking->judul)) : ?>
            <h1><?php echo $jempolkelingking->judul; ?></h1>
        <?php endif; ?>
        
        <?php if (!empty($jempolkelingking->tanggal)) : ?>
            <span><i class="icon-calendar3"></i> <?php echo tgl_indo($jempolkelingking->tanggal, true); ?></span>
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
                        <?php if (!empty($jempolkelingking->gambar)) : ?>
                            <figure class="entry-image">
                                <a href="<?php echo base_url('assets/foto_beritajempolkelingking/'. $jempolkelingking->gambar); ?>">
                                    <img src="<?php echo base_url('assets/foto_beritajempolkelingking/'. $jempolkelingking->gambar); ?>" alt="DPMPTSP Medan">
                                </a>
                                
                                <!-- Tampilkan caption hanya jika ada -->
                                <?php if (!empty($jempolkelingking->gambar_caption)) : ?>
                                    <figcaption>
                                        <?php echo $jempolkelingking->gambar_caption; ?>
                                    </figcaption>
                                <?php endif; ?>
                            </figure>
                        <?php endif; ?>

                        <!-- Tampilkan isi jempolkelingking hanya jika ada -->
                        <?php if (!empty($jempolkelingking->isi_berita)) : ?>
                            <div class="entry-content mt-0">
                                <?php echo $jempolkelingking->isi_berita; ?>
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
