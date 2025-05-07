<!-- Hero Section -->
<div class="swiper hero-slider">
    <div class="swiper-wrapper">
        <div class="swiper-slide hero-slide" style="background-image: url('https://dpmptsp.medan.go.id/public/media/_theme/images/slider/swiper/horas-medan-icon.jpg')">
            <div class="hero-overlay">
                <div class="container">
                    <div class="hero-content" data-aos="fade-right">
                        <h1 class="text-white">Welcome to Medan</h1>
                        <p class="lead text-white mb-4">Selamat datang di Portal Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu Kota Medan</p>
                        <a href="#portal" class="btn btn-lg btn-success-gr">Lihat Portal</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <div class="swiper-pagination"></div> -->
</div>

<!-- Portal Section -->
<section class="portal-section" id="portal">
    <div class="container">
        <div class="section-title">
            <h2>Portal DPMPTSP</h2>
        </div>
        <div class="portal-grid">
            <?php 
            $total_items = count($portal);
            foreach ($portal as $index => $row): 
                // Hitung jika rows 4 kolom
                $items_in_last_row = $total_items % 4;
                $is_last_row = $items_in_last_row > 0 && $index >= ($total_items - $items_in_last_row);
                $last_row_class = $is_last_row ? 'last-row-item' : '';
            ?>
                <div class="portal-item color-<?php echo ($index % 4) + 1; ?> <?php echo $last_row_class; ?>" data-aos="fade-left">
                    <img src="<?php echo base_url('assets/logo_portal/'. $row->logo) ?>" alt="<?php echo $row->nama_portal ?>">
                    <div class="portal-content">
                        <h4><?php echo $row->nama_portal ?></h4>
                        <p><?php echo $row->deskripsi ?></p>
                        <a href="<?php echo $row->link ?>" target="_blank">
                            <i class="fas fa-external-link-alt"></i> Kunjungi
                        </a>
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
    </div>
</section>

<section class="mpp-section py-5" style="background: linear-gradient(135deg, rgba(40, 167, 69, 0.08), rgba(219, 112, 147, 0.08));">
    <div class="container">
        <div class="section-title text-center mb-5">
            <h2 class="mb-2" style="color: #2c3e50; font-weight: 700;">Informasi Mall Pelayanan Publik Kota Medan</h2>
        </div>

        <!-- Statistics Section -->
        <div class="mb-5">
            <h3 class="text-center mb-4" style="color: #28a745; font-weight: 600;">
                <i class="fas fa-chart-bar me-2"></i>Statistik Pengunjung
            </h3>
            
            <?php if (isset($db_connection_error) && $db_connection_error): ?>
                <!-- Maintenance Message -->
                <div class="stats-wrapper p-4 bg-white rounded-4 shadow-sm" data-aos="fade-up" 
                    style="transition: all 0.3s ease;">
                    <div class="maintenance-message text-center py-4">
                        <i class="fas fa-exclamation-triangle fa-3x mb-3" style="color: #ffc107;"></i>
                        <h4 class="fw-bold">Mohon Maaf</h4>
                        <p class="text-muted">Sistem statistik pengunjung MPP sedang dalam pemeliharaan. Silakan coba kembali beberapa saat lagi.</p>
                    </div>
                </div>
            <?php else: ?>
                <!-- Regular Statistics Content -->
                <a href="<?php echo base_url('landingpage/visitormpp') ?>" class="text-decoration-none">
                    <div class="stats-wrapper p-4 bg-white rounded-4 shadow-sm" data-aos="fade-up" 
                        style="transition: all 0.3s ease; border-top: 5px solid #28a745;">
                        
                        <!-- Stats Dashboard -->
                        <div class="row justify-content-center">
                            <div class="col-12">
                                <!-- Top Stats (Larger) -->
                                <div class="row mb-4">
                                    <div class="col-md-6">
                                        <div class="stat-highlight p-4 rounded-4" style="background: linear-gradient(135deg, rgba(40, 167, 69, 0.1), rgba(52, 208, 88, 0.1)); border-left: 4px solid #28a745;">
                                            <h5 class="text-success mb-3"><i class="fas fa-users me-2"></i>Total Pengunjung</h5>
                                            <h2 class="mb-0" style="color: #2c3e50; font-weight: 700; font-size: 2.5rem;">
                                                <?= number_format($total_sum) ?>
                                            </h2>
                                            <div class="mt-2 text-success">Sejak awal operasional MPP</div>
                                        </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="stat-highlight p-4 rounded-4" style="background: linear-gradient(135deg, rgba(111, 66, 193, 0.1), rgba(232, 62, 140, 0.1)); border-left: 4px solid #6f42c1;">
                                            <h5 class="text-primary mb-3"><i class="fas fa-clock me-2"></i>Pengunjung Hari Ini</h5>
                                            <h2 class="mb-0" style="color: #2c3e50; font-weight: 700; font-size: 2.5rem;">
                                                <?= number_format($today_sum) ?>
                                            </h2>
                                            <div class="mt-2 text-primary">Update terakhir pukul <?php date_default_timezone_set('Asia/Jakarta'); echo date('H:i'); ?> WIB</div>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Other Stats (Smaller) -->
                                <div class="row g-3 text-center">
                                    <!-- Bulan Ini -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="stat-card h-100 p-3 rounded-3 border" style="border-color: #17a2b8 !important;">
                                            <div class="stat-badge mb-2" style="background: linear-gradient(45deg, #17a2b8, #20c997); color: white; padding: 8px 15px; border-radius: 20px; display: inline-block; box-shadow: 0 4px 10px rgba(23, 162, 184, 0.2);">
                                                <i class="fas fa-calendar-alt me-2"></i>Bulan Ini
                                            </div>
                                            <h3 class="mb-0" style="color: #2c3e50; font-weight: 600;">
                                                <?= number_format($current_month_sum) ?>
                                            </h3>
                                        </div>
                                    </div>
                                    
                                    <!-- Bulan Lalu -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="stat-card h-100 p-3 rounded-3 border" style="border-color: #fd7e14 !important;">
                                            <div class="stat-badge mb-2" style="background: linear-gradient(45deg, #fd7e14, #ffc107); color: white; padding: 8px 15px; border-radius: 20px; display: inline-block; box-shadow: 0 4px 10px rgba(253, 126, 20, 0.2);">
                                                <i class="fas fa-calendar me-2"></i>Bulan Lalu
                                            </div>
                                            <h3 class="mb-0" style="color: #2c3e50; font-weight: 600;">
                                                <?= number_format($last_month_sum) ?>
                                            </h3>
                                        </div>
                                    </div>
                                    
                                    <!-- Tahun Ini -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="stat-card h-100 p-3 rounded-3 border" style="border-color: #0dcaf0 !important;">
                                            <div class="stat-badge mb-2" style="background: linear-gradient(45deg, #0dcaf0, #0d6efd); color: white; padding: 8px 15px; border-radius: 20px; display: inline-block; box-shadow: 0 4px 10px rgba(13, 202, 240, 0.2);">
                                                <i class="fas fa-calendar-check me-2"></i>Tahun Ini
                                            </div>
                                            <h3 class="mb-0" style="color: #2c3e50; font-weight: 600;">
                                                <?= number_format($current_year_sum) ?>
                                            </h3>
                                        </div>
                                    </div>
                                    
                                    <!-- Tahun Lalu -->
                                    <div class="col-lg-3 col-md-6">
                                        <div class="stat-card h-100 p-3 rounded-3 border" style="border-color: #dc3545 !important;">
                                            <div class="stat-badge mb-2" style="background: linear-gradient(45deg, #dc3545, #fd7e14); color: white; padding: 8px 15px; border-radius: 20px; display: inline-block; box-shadow: 0 4px 10px rgba(220, 53, 69, 0.2);">
                                                <i class="fas fa-history me-2"></i>Tahun Lalu
                                            </div>
                                            <h3 class="mb-0" style="color: #2c3e50; font-weight: 600;">
                                                <?= number_format($last_year_sum) ?>
                                            </h3>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="text-center mt-4">
                                    <span class="badge bg-light text-dark p-2 rounded-pill" style="font-size: 0.9rem;">
                                        <i class="fas fa-info-circle me-1 text-primary"></i>
                                        Klik untuk melihat detail statistik pengunjung MPP
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
        </div>
        
        <!-- Marriage Section -->
        <div>
            <h3 class="text-center mb-4" style="color: #d63384; font-weight: 600;">
                <i class="fas fa-heart me-2"></i>Informasi Balai Pernikahan
            </h3>
            
            <?php if (isset($db_connection_error) && $db_connection_error): ?>
                <!-- Maintenance Message -->
                <div class="stats-wrapper p-4 bg-white rounded-4 shadow-sm" data-aos="fade-up" 
                    style="transition: all 0.3s ease;">
                    <div class="maintenance-message text-center py-4">
                        <i class="fas fa-exclamation-triangle fa-3x mb-3" style="color: #ffc107;"></i>
                        <h4 class="fw-bold">Mohon Maaf</h4>
                        <p class="text-muted">Sistem informasi pernikahan MPP sedang dalam pemeliharaan. Silakan coba kembali beberapa saat lagi.</p>
                    </div>
                </div>
            <?php else: ?>
                <a href="<?php echo base_url('landingpage/marriageinfo') ?>" class="text-decoration-none">
                    <div class="stats-wrapper p-4 bg-white rounded-4 shadow-sm" data-aos="fade-up" 
                        style="transition: all 0.3s ease; border-top: 5px solid #db7093;">
                        
                        <div class="row g-4 justify-content-center">
                            
                            <!-- Marriage Stats -->
                            <div class="col-lg-12">
                                <div class="row g-4">
                                    <!-- Pernikahan Yang Lalu -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="stat-card h-100 p-3 rounded-3 text-center shadow-sm" style="background: linear-gradient(135deg, rgba(214, 51, 132, 0.05), rgba(231, 111, 81, 0.05)); border-left: 4px solid #d63384;">
                                            <div class="stat-badge mb-3" style="background: linear-gradient(45deg, #d63384, #e76f51); color: white; padding: 8px 15px; border-radius: 20px; display: inline-block; box-shadow: 0 4px 10px rgba(214, 51, 132, 0.2);">
                                                <i class="fas fa-history me-2"></i>Pernikahan Lalu
                                            </div>
                                            <h3 class="mb-2" style="color: #2c3e50; font-weight: 600;">
                                                <?= isset($past_marriages) ? number_format($past_marriages) : 0 ?>
                                            </h3>
                                            <small class="text-muted">Telah diselenggarakan di MPP</small>
                                        </div>
                                    </div>
                                    
                                    <!-- Pernikahan Hari Ini -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="stat-card h-100 p-3 rounded-3 text-center shadow-sm" style="background: linear-gradient(135deg, rgba(111, 66, 193, 0.05), rgba(64, 115, 255, 0.05)); border-left: 4px solid #6f42c1;">
                                            <div class="stat-badge mb-3" style="background: linear-gradient(45deg, #6f42c1, #4073ff); color: white; padding: 8px 15px; border-radius: 20px; display: inline-block; box-shadow: 0 4px 10px rgba(111, 66, 193, 0.2);">
                                                <i class="fas fa-heart me-2"></i>Hari Ini
                                            </div>
                                            <h3 class="mb-2" style="color: #2c3e50; font-weight: 600;">
                                                <?= isset($today_marriages) ? number_format($today_marriages) : 0 ?>
                                            </h3>
                                            <small class="text-muted">Pernikahan tanggal <?= tgl_indo(date('Y-m-d'),true) ?></small>
                                        </div>
                                    </div>
                                    
                                    <!-- Pernikahan Tahun Ini -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="stat-card h-100 p-3 rounded-3 text-center shadow-sm" style="background: linear-gradient(135deg, rgba(220, 53, 69, 0.05), rgba(253, 126, 20, 0.05)); border-left: 4px solid #dc3545;">
                                            <div class="stat-badge mb-3" style="background: linear-gradient(45deg, #dc3545, #fd7e14); color: white; padding: 8px 15px; border-radius: 20px; display: inline-block; box-shadow: 0 4px 10px rgba(220, 53, 69, 0.2);">
                                                <i class="fas fa-calendar-check me-2"></i>Tahun Ini
                                            </div>
                                            <h3 class="mb-2" style="color: #2c3e50; font-weight: 600;">
                                                <?= isset($current_year_marriages) ? number_format($current_year_marriages) : 0 ?>
                                            </h3>
                                            <small class="text-muted">Terjadwal di tahun <?= date('Y') ?></small>
                                        </div>
                                    </div>
                                    
                                    <!-- Pernikahan Yang Akan Datang -->
                                    <div class="col-md-6 col-lg-3">
                                        <div class="stat-card h-100 p-3 rounded-3 text-center shadow-sm" style="background: linear-gradient(135deg, rgba(32, 201, 151, 0.05), rgba(13, 202, 240, 0.05)); border-left: 4px solid #20c997;">
                                            <div class="stat-badge mb-3" style="background: linear-gradient(45deg, #20c997, #0dcaf0); color: white; padding: 8px 15px; border-radius: 20px; display: inline-block; box-shadow: 0 4px 10px rgba(32, 201, 151, 0.2);">
                                                <i class="fas fa-calendar-alt me-2"></i>Akan Datang
                                            </div>
                                            <h3 class="mb-2" style="color: #2c3e50; font-weight: 600;">
                                                <?= isset($upcoming_marriages) ? number_format($upcoming_marriages) : 0 ?>
                                            </h3>
                                            <small class="text-muted">Jadwal pernikahan mendatang</small>
                                        </div>
                                    </div>
                                </div>
                                
                                <!-- Info text below all stat cards -->
                                <div class="mt-4 p-3 rounded-3 text-center">
                                    <span class="badge bg-light text-dark p-2 rounded-pill" style="font-size: 0.9rem;">
                                        <i class="fas fa-info-circle me-1 text-danger"></i>
                                        Klik untuk melihat detail informasi pernikahan
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                </a>
            <?php endif; ?>
        </div>
    </div>
</section>
<!-- About Section -->
<section class="about-section">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6" data-aos="fade-right">
                <div class="about-image">
                    <img src="<?php echo base_url('assets/landingpage/') ?>_theme/images/walidanwakil.png" alt="Wali Kota dan Wakil Wali Kota" class="img-fluid">
                </div>
            </div>
            <div class="col-lg-6" data-aos="fade-left">
                <div class="about-content">
                    <div class="section-title">
                        <h2 class="mb-4">Tentang DPMPTSP</h2>
                    </div>
                    <p class="lead">Visi Wali Kota dan Wakil Wali Kota Medan periode 2024-2029:</p>
                    <blockquote>
                        <p>"Mewujudkan Medan <span class="text-info">"BERTUAH"</span> yang Inklusif, Maju, dan Berkelanjutan melalui Semangat Transformasi <span class="text-info">Menuju Medan Satu Data</span>."</p>
                    </blockquote>
                    <p>Dinas Penanaman Modal dan Pelayanan Terpadu Satu PIntu Kota Medan merupakan unsur pelaksana urusan pemerintah bidang penanaman modal di kota medan dengan sasaran strategis meningkatkan iklim investasi dan kualitas pelayanan perizinan di kota medan. Penciptaan lingkungan yang kondusif dalam mendukung investasi serta promosi investasi daerah dan peningkatan kualitas pelayanan perizinan merupakan suatu proses yang berkesinambungan dan berkelanjutan dari perencanaan sampai dengan pertanggungjawaban keuangan daerah</p>
                    <a href="<?php echo base_url('landingpage/profil/tentang') ?>" class="btn btn-success-gr btn-lg mt-4">
                        <i class="fas fa-arrow-right me-2"></i>Selengkapnya
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Sites Section -->
<div class="site-section">
    <div class="container">
        <div class="section-title">
            <h2>Situs Terkait</h2>
        </div>
        
        <div class="owl-carousel" id="sites-carousel">
            <?php foreach ($situs_terkait as $index => $row): ?>
            <div class="site-card" style="--card-index: <?php echo $index; ?>">
                <img src="<?php echo base_url('assets/logo_situsterkait/'. $row->logo) ?>" alt="<?php echo $row->situs_terkait ?>">
                <h4><?php echo $row->situs_terkait ?></h4>
                <p><?php echo $row->deskripsi ?></p>
                <a href="<?php echo $row->link ?>" class="site-button">
                    Kunjungi Situs
                </a>
            </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>

<section class="news-section">
    <div class="container py-5">
        <div class="section-title text-center mb-4">
            <h2 class="fw-bold">Berita Terbaru</h2>
        </div>
        <div class="position-relative" data-aos="fade-up">
            <?php if(count($berita) <= 3) { ?>
                <!-- Static display for 3 or fewer items -->
                <div class="row">
                    <?php foreach($berita as $news) { ?>
                        <div class="col-md-4 mb-4" data-aos="zoom-in">
                            <div class="card news-card">
                                <div class="news-image">
                                    <img src="<?php echo base_url('assets/foto_berita/'. $news->gambar) ?>" alt="<?php echo $news->judul ?>">
                                </div>
                                <div class="card-body d-flex flex-column justify-content-between">
                                    <div>
                                        <h5 class="card-title">
                                            <a href="<?php echo base_url($news->slug) ?>" class="news-link"><?php echo $news->judul; ?></a>
                                        </h5>
                                        <span class="news-meta d-block">
                                            <i class="far fa-calendar"></i> <?php echo tgl_indo($news->tanggal) ?>
                                        </span>
                                        <p class="news-text"><?php echo $news->kutipan_berita ?>...</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php } ?>
                </div>
            <?php } else { ?>
                <!-- Slider for more than 3 items -->
                <div class="swiper news-slider">
                    <div class="swiper-wrapper">
                        <?php foreach($berita as $index => $news) { ?>
                            <div class="swiper-slide" data-aos="zoom-in" data-aos-delay="<?php echo $index * 100; ?>">
                                <div class="card news-card">
                                    <div class="news-image">
                                        <img src="<?php echo base_url('assets/foto_berita/'. $news->gambar) ?>" alt="<?php echo $news->judul ?>">
                                    </div>
                                    <div class="card-body d-flex flex-column justify-content-between">
                                        <div>
                                            <h5 class="card-title">
                                                <a href="<?php echo base_url($news->slug) ?>" class="news-link"><?php echo $news->judul; ?></a>
                                            </h5>
                                            <span class="news-meta d-block">
                                                <i class="far fa-calendar"></i> <?php echo tgl_indo($news->tanggal) ?>
                                            </span>
                                            <p class="news-text"><?php echo $news->kutipan_berita ?>...</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
                    </div>
                    <!-- Add Navigation -->
                    <div class="swiper-button-next"></div>
                    <div class="swiper-button-prev"></div>
                </div>
            <?php } ?>
        </div>  
    </div>
</section>


  


