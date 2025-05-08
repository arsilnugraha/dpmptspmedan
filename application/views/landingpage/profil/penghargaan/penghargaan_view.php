<section id="page-title">
    <div class="container clearfix">
        <h1>Penghargaan</h1>
        <span>Foto Penghargaan yang Diraih DPMPTSP Medan</span>
        
    </div>
</section>
<!-- Content Section -->
<section id="content">
    <div class="content-wrap">
        <div class="container">
            <div class="album-container">
                <!-- Decorative backgrounds -->
                <div class="decorative-bg decorative-bg-1"></div>
                <div class="decorative-bg decorative-bg-2"></div>
                
                <!-- Main Image Display -->
                <div class="main-image-container" id="main-image-display">
                    <div class="loading-spinner"></div>
                    <?php if (!empty($penghargaan)) { ?>
                        <img src="<?php echo base_url('assets/foto_penghargaan/'. $penghargaan[0]->foto) ?>" alt="Penghargaan DPMPTSP Medan" class="main-image" id="main-image">
                    <?php } else { ?>
                        <div class="d-flex align-items-center justify-content-center h-100">
                            <p class="text-muted">Tidak ada foto penghargaan yang tersedia</p>
                        </div>
                    <?php } ?>
                    
                    <!-- Navigation Buttons -->
                    <div class="image-nav">
                        <div class="nav-btn prev-btn">
                            <i class="fas fa-chevron-left"></i>
                        </div>
                        <div class="nav-btn next-btn">
                            <i class="fas fa-chevron-right"></i>
                        </div>
                    </div>
                    
                    <!-- Fullscreen Button -->
                    <div class="fullscreen-btn">
                        <i class="fas fa-expand"></i>
                    </div>
                </div>
                
                <!-- Thumbnails Navigation -->
                <div class="thumbnails-container-wrapper position-relative">
                    <div class="scroll-btn scroll-left">
                        <i class="fas fa-chevron-left"></i>
                    </div>
                    <div class="thumbnails-container" id="thumbnails">
                        <?php foreach ($penghargaan as $index => $row) { 
                            $activeClass = ($index === 0) ? 'active' : '';
                        ?>
                        <div class="thumbnail <?php echo $activeClass; ?>" data-index="<?php echo $index; ?>">
                            <img src="<?php echo base_url('assets/foto_penghargaan/'. $row->foto) ?>" alt="Thumbnail Penghargaan DPMPTSP Medan">
                        </div>
                        <?php } ?>
                    </div>
                    <div class="scroll-btn scroll-right">
                        <i class="fas fa-chevron-right"></i>
                    </div>
                </div>
                
                <!-- Pagination Indicator -->
                <div class="pagination-indicator">
                    <span id="current-index">1</span> / <span id="total-images"><?php echo count($penghargaan); ?></span>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Fullscreen Mode -->
<div class="fullscreen-mode" id="fullscreen-view">
    <div class="fullscreen-close">
        <i class="fas fa-times"></i>
    </div>
    <img src="" alt="Penghargaan DPMPTSP Medan Fullscreen" class="fullscreen-image" id="fullscreen-image">
</div>

<!-- Lightbox -->
<div class="lightbox" id="image-lightbox">
    <div class="lightbox-close">
        <i class="fas fa-times"></i>
    </div>
    <div class="lightbox-nav">
        <div class="lightbox-prev">
            <i class="fas fa-chevron-left"></i>
        </div>
        <div class="lightbox-next">
            <i class="fas fa-chevron-right"></i>
        </div>
    </div>
    <img src="" alt="Penghargaan DPMPTSP Medan" class="lightbox-content">
</div>