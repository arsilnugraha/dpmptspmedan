<section id="page-title">
    <div class="container clearfix">
        <h1>Berita</h1>
        <span>Berita DPMPTSP Kota Medan</span>
        
    </div>
</section>
<section id="content">
    <div class="content-wrap">
    <div class="container clearfix">
         <div class="fancy-title title-border mt-5">
               <h4>Semua Berita</h4>
         </div>
         <div class="row posts-md col-mb-30">
         <?php foreach ($berita as $row) { ?>
                <div class="entry col-sm-6 col-md-4">
                    <div class="grid-inner">
                        <div class="entry-image">
                            <a href="<?php echo base_url('assets/foto_berita/'. $row->gambar) ?>"><img src="<?php echo base_url('assets/foto_berita/'. $row->gambar) ?>" alt="Image"></a>
                        </div>
                        <div class="entry-title title-sm nott">
                            <h3>
                                <a href="<?php echo base_url($row->slug) ?>"><?php echo $row->judul; ?></a>
                            </h3>
                        </div>
                        <div class="entry-meta">
                            <ul>
                                <li><i class="icon-calendar3"></i> <?php echo tgl_indo($row->tanggal); ?></li>
                                <li><a href="blog-01.html"><i class="icon-comments"></i> 13 </a></li>
                            </ul>
                        </div>
                        <div class="entry-content">
                            <p><?php echo $row->kutipan_berita; ?>...</p>
                        </div>
                    </div>
                </div>
            <?php } ?>
         </div>
      </div>

      <div class="text-center">
         <?php echo $this->pagination->create_links(); ?>
      </div>

    </div>
</section>     