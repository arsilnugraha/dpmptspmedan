<!-- File: application/views/landingpage/marriageinfo/detail.php -->
<div class="marriage-detail-container">
    <!-- Decorative Header -->
    <div class="detail-header" style="background-image: url('<?= base_url('assets/images/wedding-detail-bg.jpg') ?>'); background-size: cover; background-position: center;">
        <div class="overlay"></div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="header-title">Detail Pernikahan</h1>
                    <div class="couple-names">
                        <span class="name"><?= htmlspecialchars($marriage->groom_name) ?></span>
                        <span class="and">&</span>
                        <span class="name"><?= htmlspecialchars($marriage->bride_name) ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Detail Content -->
    <div class="container detail-content">
        <div class="row">
            <div class="col-lg-8 offset-lg-2">
                <div class="detail-card">
                    <!-- Date and Status Banner -->
                    <div class="date-banner">
                        <?php
                            $marriage_date = new DateTime($marriage->marriage_date);
                            $today = new DateTime();
                            $formattedDate = $marriage_date->format('d F Y');
                            
                            if ($marriage_date > $today):
                        ?>
                            <div class="status upcoming">
                                <i class="fas fa-calendar-alt"></i> Akan datang
                            </div>
                        <?php else: ?>
                            <div class="status past">
                                <i class="fas fa-calendar-check"></i> Telah dilaksanakan
                            </div>
                        <?php endif; ?>
                        
                        <div class="event-date">
                            <i class="fas fa-calendar-day"></i> <?= $formattedDate ?>
                        </div>
                        
                        <div class="event-time">
                            <i class="far fa-clock"></i> <?= date('H:i', strtotime($marriage->marriage_time)) ?> WIB
                        </div>
                    </div>
                    
                    <!-- Couple Information -->
                    <div class="couple-info">
                        <div class="row">
                            <div class="col-md-6">
                                <div class="person-card groom">
                                    <div class="person-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="person-title">Mempelai Pria</div>
                                    <h3 class="person-name"><?= htmlspecialchars($marriage->groom_name) ?></h3>
                                    <p class="person-parent">Putra dari Bpk. <?= htmlspecialchars($marriage->groom_father_name) ?></p>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="person-card bride">
                                    <div class="person-icon">
                                        <i class="fas fa-user"></i>
                                    </div>
                                    <div class="person-title">Mempelai Wanita</div>
                                    <h3 class="person-name"><?= htmlspecialchars($marriage->bride_name) ?></h3>
                                    <p class="person-parent">Putri dari Bpk. <?= htmlspecialchars($marriage->bride_father_name) ?></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Additional Details (you can add more if needed) -->
                    <div class="additional-details">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="detail-section">
                                    <h3 class="section-title">
                                        <i class="fas fa-info-circle"></i> Informasi Tambahan
                                    </h3>
                                    <div class="detail-content">
                                        <p>
                                            Selamat dan bahagia untuk pasangan yang berbahagia. 
                                            Semoga pernikahan ini membawa kebahagiaan dan keberkahan selamanya.
                                        </p>
                                        
                                        <!-- You can add more fields here if your marriage_info table has more columns -->
                                        <?php if (!empty($marriage->location)): ?>
                                        <div class="location-info">
                                            <h4><i class="fas fa-map-marker-alt"></i> Lokasi</h4>
                                            <p><?= htmlspecialchars($marriage->location) ?></p>
                                        </div>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    <!-- Navigation Buttons -->
                    <div class="detail-footer">
                        <a href="<?= base_url('landingpage/marriageinfo') ?>" class="btn btn-back">
                            <i class="fas fa-arrow-left"></i> Kembali ke Daftar
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- CSS Styles for Marriage Detail Page -->
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
    .marriage-detail-container {
        font-family: 'Montserrat', 'Quicksand', sans-serif;
        color: var(--text-color);
        background-color: var(--light-color);
    }

    /* ========== DETAIL HEADER ========== */
    .detail-header {
        position: relative;
        height: 300px;
        display: flex;
        align-items: center;
        margin-bottom: 3rem;
    }

    .detail-header .overlay {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.6);
    }

    .detail-header .container {
        position: relative;
        z-index: 2;
    }

    .header-title {
        font-size: 2.5rem;
        color: var(--white-color);
        margin-bottom: 1rem;
        font-weight: 300;
        text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
    }

    .couple-names {
        display: flex;
        align-items: center;
        justify-content: center;
        font-size: 1.8rem;
        color: var(--white-color);
        text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.5);
    }

    .couple-names .name {
        font-weight: 500;
    }

    .couple-names .and {
        margin: 0 1rem;
        font-family: 'Great Vibes', cursive;
        font-size: 2.2rem;
        color: var(--primary-color);
    }

    /* ========== DETAIL CONTENT ========== */
    .detail-content {
        padding-bottom: 5rem;
    }

    .detail-card {
        background-color: var(--white-color);
        border-radius: 15px;
        box-shadow: 0 5px 20px var(--shadow-color);
        overflow: hidden;
        margin-bottom: 2rem;
    }

    /* Date Banner */
    .date-banner {
        background-color: var(--primary-color);
        color: var(--white-color);
        padding: 1.5rem;
        display: flex;
        justify-content: space-between;
        align-items: center;
        flex-wrap: wrap;
        gap: 1rem;
    }

    .status {
        padding: 0.5rem 1rem;
        border-radius: 25px;
        font-size: 0.9rem;
        font-weight: 600;
    }

    .status.upcoming {
        background-color: var(--upcoming-color);
    }

    .status.past {
        background-color: var(--past-color);
    }

    .event-date, .event-time {
        font-size: 1.1rem;
        font-weight: 500;
    }

    /* Couple Info */
    .couple-info {
        padding: 2.5rem;
        border-bottom: 1px solid rgba(0, 0, 0, 0.05);
    }

    .person-card {
        text-align: center;
        padding: 1.5rem;
        border-radius: 10px;
        transition: transform 0.3s ease;
        height: 100%;
    }

    .person-card:hover {
        transform: translateY(-5px);
    }

    .person-card.groom {
        background-color: rgba(214, 234, 248, 0.3);
    }

    .person-card.bride {
        background-color: rgba(253, 227, 230, 0.3);
    }

    .person-icon {
        font-size: 2.5rem;
        color: var(--secondary-color);
        margin-bottom: 1rem;
    }

    .person-title {
        font-size: 0.9rem;
        font-weight: 600;
        text-transform: uppercase;
        letter-spacing: 1px;
        color: var(--dark-color);
        margin-bottom: 0.7rem;
    }

    .person-name {
        font-size: 1.5rem;
        color: var(--secondary-color);
        margin-bottom: 0.7rem;
        font-weight: 600;
    }

    .person-parent {
        font-size: 0.9rem;
        color: var(--text-color);
    }

    /* Additional Details */
    .additional-details {
        padding: 2.5rem;
    }

    .detail-section {
        margin-bottom: 2rem;
    }

    .section-title {
        font-size: 1.3rem;
        color: var(--secondary-color);
        margin-bottom: 1.5rem;
        padding-bottom: 0.8rem;
        border-bottom: 1px dashed var(--primary-color);
    }

    .detail-content {
        padding: 0 0.5rem;
    }

    .location-info {
        margin-top: 1.5rem;
        padding: 1.5rem;
        background-color: var(--accent-color);
        border-radius: 10px;
    }

    .location-info h4 {
        font-size: 1.1rem;
        color: var(--secondary-color);
        margin-bottom: 0.8rem;
    }

    /* Footer */
    .detail-footer {
        padding: 1.5rem;
        background-color: var(--light-color);
        display: flex;
        justify-content: center;
    }

    .btn-back {
        background-color: var(--secondary-color);
        color: var(--white-color);
        border: none;
        border-radius: 50px;
        padding: 0.8rem 2rem;
        font-size: 1rem;
        font-weight: 500;
        transition: all 0.3s ease;
    }

    .btn-back:hover {
        background-color: var(--dark-color);
        transform: translateY(-3px);
    }

    /* ========== RESPONSIVE STYLES ========== */
    @media (max-width: 767px) {
        .detail-header {
            height: 250px;
        }
        
        .header-title {
            font-size: 2rem;
        }
        
        .couple-names {
            font-size: 1.5rem;
        }
        
        .couple-names .and {
            font-size: 1.8rem;
        }
        
        .date-banner {
            flex-direction: column;
            align-items: flex-start;
        }
        
        .person-card {
            margin-bottom: 1.5rem;
        }
    }

    @media (max-width: 575px) {
        .header-title {
            font-size: 1.8rem;
        }
        
        .couple-names {
            font-size: 1.2rem;
        }
        
        .couple-names .and {
            font-size: 1.5rem;
            margin: 0 0.5rem;
        }
        
        .person-name {
            font-size: 1.3rem;
        }
    }
</style>