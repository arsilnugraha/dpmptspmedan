<!-- File: application/views/landingpage/marriageinfo/search_results.php -->
<div class="marriage-info-container">
    <!-- Search Results Header -->
    <div class="search-results-header" style="background-image: url('<?= base_url('assets/images/wedding-search-bg.jpg') ?>'); background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="header-title">Hasil Pencarian</h1>
                    <p class="header-subtitle">Pencarian untuk: "<?= htmlspecialchars($search_term) ?>"</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Search Form -->
    <div class="container search-form-container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="<?= base_url('landingpage/marriageinfo/search') ?>" method="get" class="search-form">
                    <div class="input-group">
                        <input type="text" name="search" value="<?= htmlspecialchars($search_term) ?>" class="form-control" placeholder="Cari nama pengantin atau tanggal..." aria-label="Search">
                        <div class="input-group-append">
                            <button class="btn btn-search" type="submit">
                                <i class="fas fa-search"></i> Cari
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- Search Results -->
    <div class="container search-results-container">
        <div class="search-results-info">
            <h2>Hasil Pencarian</h2>
            <p><?= count($marriages) ?> pernikahan ditemukan</p>
        </div>
        
        <?php if (empty($marriages)): ?>
            <div class="alert alert-info text-center">
                <i class="fas fa-info-circle mr-2"></i> Tidak ada data pernikahan yang ditemukan untuk pencarian: "<?= htmlspecialchars($search_term) ?>".
                <br>
                <a href="<?= base_url('landingpage/marriageinfo') ?>" class="alert-link">Kembali ke daftar pernikahan</a>
            </div>
        <?php else: ?>
            <div class="row">
                <?php foreach ($marriages as $marriage): ?>
                    <div class="col-lg-3 col-md-6 mb-4">
                        <div class="marriage-card">
                            <div class="card-ribbon">
                                <?php
                                $marriage_date = new DateTime($marriage->marriage_date);
                                $today = new DateTime();
                                if ($marriage_date > $today):
                                ?>
                                    <span class="upcoming">Mendatang</span>
                                <?php else: ?>
                                    <span class="past">Terdahulu</span>
                                <?php endif; ?>
                            </div>
                            <div class="card-header">
                                <div class="card-date">
                                    <span class="date-day"><?= date('d', strtotime($marriage->marriage_date)) ?></span>
                                    <span class="date-month"><?= date('M', strtotime($marriage->marriage_date)) ?></span>
                                    <span class="date-year"><?= date('Y', strtotime($marriage->marriage_date)) ?></span>
                                </div>
                                <div class="card-time">
                                    <i class="far fa-clock"></i> <?= date('H:i', strtotime($marriage->marriage_time)) ?> WIB
                                </div>
                            </div>
                            <div class="card-body">
                                <div class="couple-names">
                                    <h3><?= htmlspecialchars($marriage->groom_name) ?> & <?= htmlspecialchars($marriage->bride_name) ?></h3>
                                </div>
                                <div class="couple-parents">
                                    <p><small>Putra dari Bpk. <?= htmlspecialchars($marriage->groom_father_name) ?></small></p>
                                    <p><small>Putri dari Bpk. <?= htmlspecialchars($marriage->bride_father_name) ?></small></p>
                                </div>
                            </div>
                            <div class="card-footer">
                                <a href="<?= base_url('landingpage/marriageinfo/detail/' . $marriage->id) ?>" class="btn btn-details">
                                    <i class="fas fa-info-circle"></i> Detail
                                </a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            </div>
            
            <!-- Pagination -->
            <div class="pagination-container">
                <?= $pagination ?>
            </div>
            
            <!-- Back to List Button -->
            <div class="text-center mt-4">
                <a href="<?= base_url('landingpage/marriageinfo') ?>" class="btn btn-back-to-list">
                    <i class="fas fa-list"></i> Kembali ke Daftar Pernikahan
                </a>
            </div>
        <?php endif; ?>
    </div>
</div>

<!-- CSS Styles for Search Results Page -->
<style>
    /* ========== COLORS ========== */
    :root {
        --primary-color: #D8B4A0;
        --secondary-color: #86626E;
        --accent-color: #F4EAD5;
        --text-color: #484041;
        --white-color: #FFFFFF;
        --light-color: #F9F5F1;
        --dark-color: #373334;
        --success-color: #7FB069;
        --upcoming-color: #4E937A;
        --past-color: #BE7575;
        --shadow-color: rgba(0, 0, 0, 0.1);
    }

    /* ========== GENERAL STYLES ========== */
    .marriage-info-container {
        font-family: 'Montserrat', 'Quicksand', sans-serif;
        color: var(--text-color);
        background-color: var(--light-color);
    }

    /* ========== SEARCH RESULTS HEADER ========== */
    .search-results-header {
        position: relative;
        height: 250px;
        display: flex;
        align-items: center;
        margin-bottom: 2rem;
    }

    .search-results-header .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
    }

    .search-results-header .container {
        position: relative;
        z-index: 2;
    }

    .header-title {
        font-size: 2.5rem;
        color: var(--white-color);
        margin-bottom: 0.5rem;
        font-weight: 300;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .header-subtitle {
        font-size: 1.2rem;
        color: var(--accent-color);
        font-weight: 300;
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }

    /* ========== SEARCH FORM ========== */
    .search-form-container {
        margin-bottom: 2.5rem;
    }

    .search-form {
        box-shadow: 0 5px 15px var(--shadow-color);
        border-radius: 50px;
        overflow: hidden;
    }

    .search-form .form-control {
        border: none;
        padding: 1.2rem 1.5rem;
        font-size: 1rem;
        border-radius: 50px 0 0 50px;
    }

    .search-form .form-control:focus {
        box-shadow: none;
    }

    .btn-search {
        background-color: var(--secondary-color);
        color: var(--white-color);
        border: none;
        padding: 0.5rem 1.5rem;
        border-radius: 0 50px 50px 0;
        font-size: 1rem;
        transition: background-color 0.3s ease;
    }

    .btn-search:hover {
        background-color: var(--dark-color);
        color: var(--white-color);
    }

    /* ========== SEARCH RESULTS CONTAINER ========== */
    .search-results-container {
        padding-bottom: 4rem;
    }

    .search-results-info {
        text-align: center;
        margin-bottom: 2rem;
    }

    .search-results-info h2 {
        font-size: 1.8rem;
        color: var(--secondary-color);
        margin-bottom: 0.5rem;
    }

    .search-results-info p {
        color: var(--text-color);
        font-size: 1rem;
    }

    .alert-info {
        background-color: rgba(222, 238, 252, 0.8);
        border-color: rgba(157, 193, 243, 0.5);
        color: var(--text-color);
        padding: 2rem;
        border-radius: 10px;
    }

    .alert-link {
        color: var(--secondary-color);
        font-weight: 600;
        text-decoration: none;
    }

    .alert-link:hover {
        text-decoration: underline;
    }

    /* ========== MARRIAGE CARDS ========== */
    /* Using the same styles as the main index page for consistency */
    .marriage-card {
        background-color: var(--white-color);
        border-radius: 15px;
        box-shadow: 0 5px 15px var(--shadow-color);
        overflow: hidden;
        position: relative;
        height: 100%;
        transition: transform 0.3s ease;
    }

    .marriage-card:hover {
        transform: translateY(-7px);
    }

    .card-ribbon {
        position: absolute;
        top: 20px;
        right: 0;
        z-index: 1;
    }

    .card-ribbon span {
        display: inline-block;
        padding: 0.4rem 1rem;
        font-size: 0.75rem;
        font-weight: 600;
        text-transform: uppercase;
        border-radius: 20px 0 0 20px;
        color: var(--white-color);
    }

    .card-ribbon .upcoming {
        background-color: var(--upcoming-color);
    }

    .card-ribbon .past {
        background-color: var(--past-color);
    }

    .card-header {
        padding: 1.5rem;
        background-color: var(--primary-color);
        color: var(--white-color);
        text-align: center;
        display: flex;
        flex-direction: column;
    }

    .card-date {
        display: flex;
        flex-direction: column;
        align-items: center;
        margin-bottom: 0.8rem;
    }

    .date-day {
        font-size: 2.2rem;
        font-weight: 700;
        line-height: 1;
    }

    .date-month, .date-year {
        font-size: 1rem;
        font-weight: 500;
    }

    .card-time {
        font-size: 0.9rem;
    }

    .card-body {
        padding: 1.5rem;
        text-align: center;
    }

    .couple-names h3 {
        font-size: 1.2rem;
        font-weight: 600;
        color: var(--secondary-color);
        margin-bottom: 1rem;
    }

    .couple-parents p {
        margin-bottom: 0.3rem;
        color: var(--text-color);
    }

    .card-footer {
        padding: 1rem;
        background-color: transparent;
        border-top: 1px solid rgba(0, 0, 0, 0.05);
        text-align: center;
    }

    .btn-details {
        background-color: var(--accent-color);
        color: var(--secondary-color);
        border: none;
        border-radius: 50px;
        padding: 0.5rem 1.5rem;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-details:hover {
        background-color: var(--secondary-color);
        color: var(--white-color);
    }

    /* ========== PAGINATION ========== */
    .pagination-container {
        margin-top: 3rem;
    }

    .pagination {
        gap: 0.3rem;
    }

    .pagination .page-item .page-link {
        color: var(--secondary-color);
        border: 1px solid var(--primary-color);
        border-radius: 5px;
        padding: 0.5rem 1rem;
        font-size: 0.9rem;
        transition: all 0.3s ease;
    }

    .pagination .page-item .page-link:hover {
        background-color: var(--accent-color);
        color: var(--secondary-color);
    }

    .pagination .page-item.active .page-link {
        background-color: var(--secondary-color);
        border-color: var(--secondary-color);
        color: var(--white-color);
    }

    /* ========== BACK TO LIST BUTTON ========== */
    .btn-back-to-list {
        background-color: var(--secondary-color);
        color: var(--white-color);
        border: none;
        border-radius: 50px;
        padding: 0.8rem 2rem;
        font-size: 1rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-back-to-list:hover {
        background-color: var(--dark-color);
        transform: translateY(-3px);
    }

    /* ========== RESPONSIVE STYLES ========== */
    @media (max-width: 991px) {
        .header-title {
            font-size: 2.2rem;
        }
        
        .header-subtitle {
            font-size: 1.1rem;
        }
    }

    @media (max-width: 767px) {
        .search-results-header {
            height: 200px;
        }
        
        .header-title {
            font-size: 2rem;
        }
        
        .header-subtitle {
            font-size: 1rem;
        }
    }

    @media (max-width: 575px) {
        .header-title {
            font-size: 1.8rem;
        }
        
        .header-subtitle {
            font-size: 0.9rem;
        }
    }
</style>