<div class="container-fluid py-5">
<!-- Header Section with MPP Wedding Banner -->
<div class="row mb-4">
        <div class="col-12">
            <div class="card shadow border-0 rounded-lg overflow-hidden animate__animated animate__fadeIn">
                <div class="d-flex flex-column justify-content-center" 
                     style="background: linear-gradient(rgba(0,100,0,0.4), rgba(0,100,0,0.65)); min-height: 300px;">
                    <!-- Logo section with improved visibility without background -->
                    <div class="text-center text-white">
                        <div class="d-flex justify-content-center align-items-center mb-4 animate__animated animate__fadeInDown">
                            <!-- Logo with improved visibility through filters -->
                            <img src="<?= base_url('assets/landingpage/_theme/images/logo_dpmptsp2.png') ?>" 
                                 alt="Pemko Medan" 
                                 class="me-4 wedding-logo"
                                 style="height: 90px; 
                                        filter: brightness(1.15) contrast(1.1) drop-shadow(0 2px 8px rgba(255,255,255,0.4));">
                            
                            <div class="border-start ps-4 text-start" style="border-left-color: rgba(255,255,255,0.6) !important; border-left-width: 3px !important;">
                                <h3 class="fw-normal mb-0" style="letter-spacing: 2px; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">MALL PELAYANAN PUBLIK</h3>
                                <h4 class="fw-light mt-2" style="letter-spacing: 1.5px; text-shadow: 0 2px 4px rgba(0,0,0,0.3);">KOTA MEDAN</h4>
                            </div>
                        </div>
                        
                        <!-- Decorative divider with enhanced styling -->
                        <div class="divider-container my-4 animate__animated animate__fadeIn animate__delay-1s">
                            <div class="divider-line"></div>
                            <div class="divider-icons">
                                <i class="fas fa-heart mx-2 wedding-icon" style="color: #ffe6e6;"></i>
                                <i class="fas fa-ring mx-2 wedding-icon" style="color: #ffd700;"></i>
                                <i class="fas fa-heart mx-2 wedding-icon" style="color: #ffe6e6;"></i>
                            </div>
                            <div class="divider-line"></div>
                        </div>
                        
                        <!-- Title with improved typography and visibility -->
                        <h1 class="wedding-title fw-bold mb-3 animate__animated animate__fadeInUp">
                            INFORMASI PERNIKAHAN
                        </h1>
                        <p class="wedding-subtitle lead fw-light animate__animated animate__fadeInUp animate__delay-1s">
                            <?= $page_title ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Statistics Cards -->
    <div class="row mb-4">
        <div class="col-md-3 mb-3 mb-md-0">
            <a href="<?= site_url('landingpage/marriageinfo/index?filter=today') ?>" class="card-link">
                <div class="card h-100 border-0 shadow-sm rounded-lg text-center hover-card animate__animated animate__fadeInUp" style="animation-delay: 0.1s;">
                    <div class="card-body">
                        <div class="bg-success-subtle mb-3 mx-auto d-flex align-items-center justify-content-center">
                            <i class="fas fa-calendar-day text-success" style="font-size: 1.8rem;"></i>
                        </div>
                        <h5 class="card-title mb-1">Hari Ini</h5>
                        <p class="card-text fs-3 text-success fw-bold counter-number">
                            <?= $today_marriages ?>
                        </p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-3 mb-md-0">
            <a href="<?= site_url('landingpage/marriageinfo/index?filter=upcoming') ?>" class="card-link">
                <div class="card h-100 border-0 shadow-sm rounded-lg text-center hover-card animate__animated animate__fadeInUp" style="animation-delay: 0.2s;">
                    <div class="card-body">
                        <div class="bg-success-subtle mb-3 mx-auto d-flex align-items-center justify-content-center">
                            <i class="fas fa-calendar-alt text-success" style="font-size: 1.8rem;"></i>
                        </div>
                        <h5 class="card-title mb-1">Mendatang</h5>
                        <p class="card-text fs-3 text-success fw-bold counter-number"><?= $upcoming_marriages ?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-3 mb-md-0">
            <a href="<?= site_url('landingpage/marriageinfo/index?filter=current_year') ?>" class="card-link">
                <div class="card h-100 border-0 shadow-sm rounded-lg text-center hover-card animate__animated animate__fadeInUp" style="animation-delay: 0.3s;">
                    <div class="card-body">
                        <div class="bg-success-subtle mb-3 mx-auto d-flex align-items-center justify-content-center">
                            <i class="fas fa-calendar-week text-success" style="font-size: 1.8rem;"></i>
                        </div>
                        <h5 class="card-title mb-1">Tahun <?= date('Y') ?></h5>
                        <p class="card-text fs-3 text-success fw-bold counter-number"><?= $current_year_marriages ?></p>
                    </div>
                </div>
            </a>
        </div>
        <div class="col-md-3 mb-3 mb-md-0">
            <a href="<?= site_url('landingpage/marriageinfo/index?filter=past') ?>" class="card-link">
                <div class="card h-100 border-0 shadow-sm rounded-lg text-center hover-card animate__animated animate__fadeInUp" style="animation-delay: 0.4s;">
                    <div class="card-body">
                        <div class="bg-success-subtle mb-3 mx-auto d-flex align-items-center justify-content-center">
                            <i class="fas fa-history text-success" style="font-size: 1.8rem;"></i>
                        </div>
                        <h5 class="card-title mb-1">Sebelumnya</h5>
                        <p class="card-text fs-3 text-success fw-bold counter-number"><?= $past_marriages ?></p>
                    </div>
                </div>
            </a>
        </div>
    </div>
    
    <!-- Search and Filter Section -->
    <div class="card shadow-sm border-0 mb-4 rounded-lg animate__animated animate__fadeIn animate__delay-1s overflow-hidden">
        <div class="card-body p-4">
            <div class="row g-3">
                <div class="col-md-6">
                    <form action="<?= site_url('landingpage/marriageinfo/index') ?>" method="get" class="d-flex">
                        <input type="hidden" name="filter" value="<?= $current_filter ?>">
                        <div class="input-group">
                            <input type="text" name="search" class="form-control form-control-lg border-end-0" 
                                   placeholder="Cari nama mempelai atau wali..." value="<?= $search ?>"
                                   style="border-radius: 50px 0 0 50px;">
                            <button type="submit" class="btn btn-success px-4" style="border-radius: 0 50px 50px 0;">
                                <i class="fas fa-search me-1"></i> Cari
                            </button>
                        </div>
                    </form>
                </div>
                <div class="col-md-6 text-md-end">
                    <div class="btn-group filter-btn-group" role="group">
                        <a href="<?= site_url('landingpage/marriageinfo/index?filter=all') ?>" 
                           class="btn <?= ($current_filter == 'all' || !$current_filter) ? 'btn-success' : 'btn-outline-success' ?>">
                            <i class="fas fa-list-ul me-1"></i> Semua
                        </a>
                        <a href="<?= site_url('landingpage/marriageinfo/index?filter=today') ?>" 
                           class="btn <?= $current_filter == 'today' ? 'btn-success' : 'btn-outline-success' ?>">
                            <i class="fas fa-calendar-day me-1"></i> Hari Ini
                        </a>
                        <a href="<?= site_url('landingpage/marriageinfo/index?filter=upcoming') ?>" 
                           class="btn <?= $current_filter == 'upcoming' ? 'btn-success' : 'btn-outline-success' ?>">
                            <i class="fas fa-calendar-alt me-1"></i> Mendatang
                        </a>
                        <a href="<?= site_url('landingpage/marriageinfo/index?filter=current_year') ?>" 
                           class="btn <?= $current_filter == 'current_year' ? 'btn-success' : 'btn-outline-success' ?>">
                            <i class="fas fa-calendar-week me-1"></i> <?= date('Y') ?>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Marriage List -->
    <div class="card shadow-sm border-0 rounded-lg animate__animated animate__fadeIn animate__delay-1s">
        <div class="card-body p-4">
            <h5 class="card-title mb-4 d-flex justify-content-between align-items-center">
                <span>
                    <i class="fas fa-heart text-success me-2"></i> 
                    Daftar Pernikahan
                    <?php if($total_filtered > 0): ?>
                        <span class="badge bg-success rounded-pill ms-2"><?= $total_filtered ?></span>
                    <?php endif; ?>
                </span>
                <span class="filter-badge">
                    <i class="fas fa-filter me-1"></i>
                    <?php 
                        if($current_filter == 'all') echo 'Semua';
                        if($current_filter == 'today') echo 'Hari Ini';
                        if($current_filter == 'upcoming') echo 'Mendatang';
                        if($current_filter == 'current_year') echo date('Y');

                    ?>
                </span>
            </h5>
            
            <?php if(empty($marriages)): ?>
            <div class="text-center py-5 animate__animated animate__fadeIn">
                <!-- SVG No Data inline -->
                <svg xmlns="http://www.w3.org/2000/svg" width="180" height="180" viewBox="0 0 512 512" class="mb-4" style="opacity: 0.8;">
                    <style>
                        .no-data-primary { fill: #0b5a27; opacity: 0.8; }
                        .no-data-secondary { fill: #4caf50; opacity: 0.6; }
                        .no-data-accent { fill: #e0e0e0; }
                        .no-data-bg { fill: #f5f5f5; }
                        @keyframes floatAnimation {
                            0% { transform: translateY(0px); }
                            50% { transform: translateY(-10px); }
                            100% { transform: translateY(0px); }
                        }
                        .float { animation: floatAnimation 3s ease-in-out infinite; }
                    </style>
                    
                    <!-- Background Circle -->
                    <circle cx="256" cy="256" r="170" class="no-data-bg" />
                    
                    <!-- Folder Icon -->
                    <g class="float" transform="translate(150, 150)">
                        <path class="no-data-secondary" d="M180 60H90L70 30H20c-11.03 0-20 8.97-20 20v180c0 11.03 8.97 20 20 20h180c11.03 0 20-8.97 20-20V80c0-11.03-8.97-20-20-20z" />
                        <path class="no-data-primary" d="M220 100H20V80c0-11.03 8.97-20 20-20h160c11.03 0 20 8.97 20 20v20z" />
                        
                        <!-- Search Icon Overlay -->
                        <circle cx="130" cy="140" r="50" fill="white" fill-opacity="0.9" />
                        <circle cx="130" cy="140" r="40" stroke="#0b5a27" stroke-width="8" fill="none" />
                        <line x1="155" y1="165" x2="180" y2="190" stroke="#0b5a27" stroke-width="8" stroke-linecap="round" />
                        <line x1="120" y1="140" x2="140" y2="140" stroke="#d32f2f" stroke-width="4" stroke-linecap="round" />
                        <line x1="130" y1="130" x2="130" y2="150" stroke="#d32f2f" stroke-width="4" stroke-linecap="round" />
                    </g>
                    
                    <!-- Decorative Elements -->
                    <circle cx="120" cy="150" r="10" class="no-data-accent" />
                    <circle cx="390" cy="170" r="15" class="no-data-accent" />
                    <circle cx="320" cy="320" r="8" class="no-data-accent" />
                    <circle cx="150" cy="350" r="12" class="no-data-accent" />
                </svg>
                <h4 class="text-muted mb-3">Tidak ada data pernikahan ditemukan</h4>
                <?php if(!empty($search)): ?>
                <p class="text-muted mb-4">Coba gunakan kata kunci pencarian yang berbeda</p>
                <a href="<?= site_url('landingpage/marriageinfo/index?filter=' . $current_filter) ?>" class="btn btn-outline-success rounded-pill px-4">
                    <i class="fas fa-undo me-2"></i> Reset Pencarian
                </a>
                <?php endif; ?>
            </div>
            <?php else: ?>
            <div class="table-responsive marriage-table">
                <table class="table table-hover align-middle">
                    <thead>
                        <tr class="table-light">
                            <th class="text-center" style="width: 5%;">No</th>
                            <th style="width: 15%;">Tanggal</th>
                            <th style="width: 40%;">Informasi Mempelai Pria</th>
                            <th style="width: 40%;">Informasi Mempelai Wanita</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php 
                        $start = ($this->input->get('page') ? ($this->input->get('page') - 1) * 10 : 0) + 1;
                        foreach($marriages as $key => $marriage): 
                            $is_today = $marriage->marriage_date == date('Y-m-d');
                            $is_upcoming = $marriage->marriage_date > date('Y-m-d');
                        ?>
                        <tr class="<?= $is_today ? 'table-success animate__animated animate__fadeIn animate__fast' : 'animate__animated animate__fadeIn' ?>"
                            style="animation-delay: <?= 0.1 + ($key * 0.05) ?>s;">
                            <td class="text-center"><?= $start + $key ?></td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="wedding-date-badge me-3 text-center position-relative" 
                                         style="min-width: 60px; background: linear-gradient(135deg, #0b5a27, #1e9853); color: white; border-radius: 8px; padding: 8px 0; box-shadow: 0 3px 6px rgba(0,0,0,0.1);">
                                        <div style="font-size: 1.2rem; font-weight: bold;">
                                            <?= date('d', strtotime($marriage->marriage_date)) ?>
                                        </div>
                                        <div style="font-size: 0.8rem; text-transform: uppercase; letter-spacing: 1px;">
                                            <?= date('M', strtotime($marriage->marriage_date)) ?>
                                        </div>
                                        <?php if($is_today): ?>
                                        <div class="position-absolute" style="top: -5px; right: -5px;">
                                            <span class="badge bg-danger rounded-circle pulse-animation" style="width: 10px; height: 10px; padding: 0;"></span>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                    <div>
                                        <div class="fw-medium"><?= date('d F Y', strtotime($marriage->marriage_date)) ?></div>
                                        <small class="text-muted"><?= $marriage->marriage_time ?></small>
                                        <div class="mt-1">
                                            <?php if($is_today): ?>
                                            <span class="badge rounded-pill" style="background: linear-gradient(90deg, #0b5a27, #1e9853); font-weight: normal; font-size: 0.7rem;">
                                                <i class="fas fa-calendar-day me-1"></i> Hari Ini
                                            </span>
                                            <?php elseif($is_upcoming): ?>
                                            <span class="badge rounded-pill bg-info text-dark" style="font-weight: normal; font-size: 0.7rem;">
                                                <i class="fas fa-calendar-alt me-1"></i> Mendatang
                                            </span>
                                            <?php endif; ?>
                                        </div>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="wedding-icon me-3 text-white rounded-circle d-flex align-items-center justify-content-center" 
                                         style="width: 50px; height: 50px; background: linear-gradient(135deg, #0b5a27, #1e9853); box-shadow: 0 3px 6px rgba(0,0,0,0.1);">
                                        <i class="fas fa-male" style="font-size: 1.3rem;"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold fs-5"><?= $marriage->groom_name ?></div>
                                        <small class="text-muted d-flex align-items-center">
                                            <i class="fas fa-user me-1" style="font-size: 0.7rem;"></i>
                                            Putra dari Bpk. <?= $marriage->groom_father_name ?>
                                        </small>
                                    </div>
                                </div>
                            </td>
                            <td>
                                <div class="d-flex align-items-center">
                                    <div class="wedding-icon me-3 text-white rounded-circle d-flex align-items-center justify-content-center" 
                                         style="width: 50px; height: 50px; background: linear-gradient(135deg, #0b5a27, #1e9853); box-shadow: 0 3px 6px rgba(0,0,0,0.1);">
                                        <i class="fas fa-female" style="font-size: 1.3rem;"></i>
                                    </div>
                                    <div>
                                        <div class="fw-bold fs-5"><?= $marriage->bride_name ?></div>
                                        <small class="text-muted d-flex align-items-center">
                                            <i class="fas fa-user me-1" style="font-size: 0.7rem;"></i>
                                            Putri dari Bpk. <?= $marriage->bride_father_name ?>
                                        </small>
                                    </div>
                                </div>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
            
            <!-- Pagination -->
            <?php if ($pagination): ?>
            <div class="mt-4 d-flex justify-content-center">
                <div class="pagination-wrapper">
                    <?= $pagination ?>
                </div>
            </div>
            <?php endif; ?>
            <?php endif; ?>
        </div>
    </div>
</div>

<script>    
document.addEventListener('DOMContentLoaded', function() {
    // Counter animation
    const counters = document.querySelectorAll('.counter-number');
    
    counters.forEach(counter => {
        const target = +counter.innerText;
        const duration = 1500;
        const increment = target / (duration / 16);
        let count = 0;
        
        const updateCount = () => {
            if(count < target) {
                count += increment;
                counter.innerText = Math.ceil(count > target ? target : count);
                setTimeout(updateCount, 16);
            } else {
                counter.innerText = target;
            }
        };
        
        setTimeout(() => {
            updateCount();
        }, 300);
    });
});
</script>