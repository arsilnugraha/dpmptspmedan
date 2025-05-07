<div class="container py-5">
    <h1 class="text-center main-title mb-5 animate__animated animate__fadeIn">Statistik Kunjungan MPP Kota Medan</h1>
    
    <!-- Toggle View Buttons -->
    <div class="view-toggle mb-4 text-center">
        <button class="btn btn-primary me-2 view-btn active" data-view="detail">Lihat Detail Lengkap</button>
        <button class="btn btn-outline-primary view-btn" data-view="tenant">Lihat Per Tenant</button>
    </div>
    
    <!-- Total Keseluruhan -->
    <div class="stats-card total-card">
        <div class="stats-header">
            <h2 class="header-title">Total Keseluruhan</h2>
            <p class="total-number"><?= number_format($total_sum) ?></p>
            <div class="trend-indicator">
                <i class="fas fa-chart-line me-2"></i>
                Total Pengunjung
            </div>
        </div>
        <div class="table-container">
            <div class="d-flex justify-content-between align-items-center">
                <a class="collapse-button" data-bs-toggle="collapse" href="#totalCollapse" role="button">
                    <i class="fas fa-chevron-right"></i>
                    Lihat Detail
                </a>
                <div class="export-buttons">
                    <a href="<?= site_url('landingpage/visitormpp/export_excel/total') ?>" class="btn btn-sm btn-success">
                        <i class="fas fa-file-excel me-1"></i> Excel
                    </a>
                    <a href="<?= site_url('landingpage/visitormppp/export_pdf/total') ?>" class="btn btn-sm btn-danger">
                        <i class="fas fa-file-pdf me-1"></i> PDF
                    </a>
                </div>
            </div>
            <div class="collapse" id="totalCollapse">
                <!-- Detailed View (Default) -->
                <div class="table-responsive view-content detail-view">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th>Departemen</th>
                                <th class="text-end">Jumlah Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($total_visitors as $visitor): ?>
                            <tr>
                                <td><?= $visitor->tenant_name ?></td>
                                <td><?= $visitor->dept_name ?></td>
                                <td class="text-end"><?= number_format($visitor->jlh_antrian) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Tenant-only View -->
                <div class="table-responsive view-content tenant-view" style="display: none;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th class="text-end">Jumlah Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($total_tenant_visitors as $visitor): ?>
                            <tr>
                                <td><?= $visitor->tenant_name ?></td>
                                <td class="text-end"><?= number_format($visitor->jlh_antrian) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <div class="stats-card today-card">
        <div class="stats-header">
            <h2 class="header-title">Hari Ini</h2>
            <p class="total-number"><?= number_format($today_sum) ?></p>
            <div class="trend-indicator">
                <i class="fas fa-clock me-2"></i>
                Pengunjung Hari Ini
            </div>
        </div>
        <div class="table-container">
            <a class="collapse-button" data-bs-toggle="collapse" href="#todayCollapse" role="button">
                <i class="fas fa-chevron-right"></i>
                Lihat Detail
            </a>
            <div class="collapse" id="todayCollapse">
                <!-- Detailed View (Default) -->
                <div class="table-responsive view-content detail-view">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th>Departemen</th>
                                <th class="text-end">Jumlah Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($today_visitors as $visitor): ?>
                            <tr>
                                <td><?= $visitor->tenant_name ?></td>
                                <td><?= $visitor->dept_name ?></td>
                                <td class="text-end"><?= number_format($visitor->jlh_antrian) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Tenant-only View -->
                <div class="table-responsive view-content tenant-view" style="display: none;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th class="text-end">Jumlah Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($today_tenant_visitors as $visitor): ?>
                            <tr>
                                <td><?= $visitor->tenant_name ?></td>
                                <td class="text-end"><?= number_format($visitor->jlh_antrian) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bulan Ini -->
    <div class="stats-card current-month-card">
        <div class="stats-header">
            <h2 class="header-title">Bulan Ini</h2>
            <p class="total-number"><?= number_format($current_month_sum) ?></p>
            <div class="trend-indicator">
                <i class="fas fa-calendar-alt me-2"></i>
                Periode Berjalan
            </div>
        </div>
        <div class="table-container">
            <a class="collapse-button" data-bs-toggle="collapse" href="#currentMonthCollapse" role="button">
                <i class="fas fa-chevron-right"></i>
                Lihat Detail
            </a>
            <div class="collapse" id="currentMonthCollapse">
                <!-- Detailed View (Default) -->
                <div class="table-responsive view-content detail-view">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th>Departemen</th>
                                <th class="text-end">Jumlah Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($current_month as $visitor): ?>
                            <tr>
                                <td><?= $visitor->tenant_name ?></td>
                                <td><?= $visitor->dept_name ?></td>
                                <td class="text-end"><?= number_format($visitor->jlh_antrian) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Tenant-only View -->
                <div class="table-responsive view-content tenant-view" style="display: none;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th class="text-end">Jumlah Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($current_month_tenant as $visitor): ?>
                            <tr>
                                <td><?= $visitor->tenant_name ?></td>
                                <td class="text-end"><?= number_format($visitor->jlh_antrian) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Bulan Lalu -->
    <div class="stats-card last-month-card">
        <div class="stats-header">
            <h2 class="header-title">Bulan Lalu</h2>
            <p class="total-number"><?= number_format($last_month_sum) ?></p>
            <div class="trend-indicator">
                <i class="fas fa-calendar me-2"></i>
                Periode Sebelumnya
            </div>
        </div>
        <div class="table-container">
            <a class="collapse-button" data-bs-toggle="collapse" href="#lastMonthCollapse" role="button">
                <i class="fas fa-chevron-right"></i>
                Lihat Detail
            </a>
            <div class="collapse" id="lastMonthCollapse">
                <!-- Detailed View (Default) -->
                <div class="table-responsive view-content detail-view">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th>Departemen</th>
                                <th class="text-end">Jumlah Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($last_month as $visitor): ?>
                            <tr>
                                <td><?= $visitor->tenant_name ?></td>
                                <td><?= $visitor->dept_name ?></td>
                                <td class="text-end"><?= number_format($visitor->jlh_antrian) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Tenant-only View -->
                <div class="table-responsive view-content tenant-view" style="display: none;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th class="text-end">Jumlah Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($last_month_tenant as $visitor): ?>
                            <tr>
                                <td><?= $visitor->tenant_name ?></td>
                                <td class="text-end"><?= number_format($visitor->jlh_antrian) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Tahun Ini -->
    <div class="stats-card current-year-card">
        <div class="stats-header">
            <h2 class="header-title">Tahun Ini</h2>
            <p class="total-number"><?= number_format($current_year_sum) ?></p>
            <div class="trend-indicator">
                <i class="fas fa-calendar-check me-2"></i>
                Tahun Berjalan
            </div>
        </div>
        <div class="table-container">
            <a class="collapse-button" data-bs-toggle="collapse" href="#currentYearCollapse" role="button">
                <i class="fas fa-chevron-right"></i>
                Lihat Detail
            </a>
            <div class="collapse" id="currentYearCollapse">
                <!-- Detailed View (Default) -->
                <div class="table-responsive view-content detail-view">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th>Departemen</th>
                                <th class="text-end">Jumlah Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($current_year as $visitor): ?>
                            <tr>
                                <td><?= $visitor->tenant_name ?></td>
                                <td><?= $visitor->dept_name ?></td>
                                <td class="text-end"><?= number_format($visitor->jlh_antrian) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Tenant-only View -->
                <div class="table-responsive view-content tenant-view" style="display: none;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th class="text-end">Jumlah Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($current_year_tenant as $visitor): ?>
                            <tr>
                                <td><?= $visitor->tenant_name ?></td>
                                <td class="text-end"><?= number_format($visitor->jlh_antrian) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
    
    <!-- Tahun Lalu -->
    <div class="stats-card last-year-card">
        <div class="stats-header">
            <h2 class="header-title">Tahun Lalu</h2>
            <p class="total-number"><?= number_format($last_year_sum) ?></p>
            <div class="trend-indicator">
                <i class="fas fa-history me-2"></i>
                Tahun Sebelumnya
            </div>
        </div>
        <div class="table-container">
            <a class="collapse-button" data-bs-toggle="collapse" href="#lastYearCollapse" role="button">
                <i class="fas fa-chevron-right"></i>
                Lihat Detail
            </a>
            <div class="collapse" id="lastYearCollapse">
                <!-- Detailed View (Default) -->
                <div class="table-responsive view-content detail-view">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th>Departemen</th>
                                <th class="text-end">Jumlah Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($last_year as $visitor): ?>
                            <tr>
                                <td><?= $visitor->tenant_name ?></td>
                                <td><?= $visitor->dept_name ?></td>
                                <td class="text-end"><?= number_format($visitor->jlh_antrian) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
                <!-- Tenant-only View -->
                <div class="table-responsive view-content tenant-view" style="display: none;">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Tenant</th>
                                <th class="text-end">Jumlah Kunjungan</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php foreach ($last_year_tenant as $visitor): ?>
                            <tr>
                                <td><?= $visitor->tenant_name ?></td>
                                <td class="text-end"><?= number_format($visitor->jlh_antrian) ?></td>
                            </tr>
                            <?php endforeach; ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    // Add smooth animation when opening/closing collapse
    document.addEventListener('DOMContentLoaded', function() {
        const collapseElements = document.querySelectorAll('.collapse');
        
        collapseElements.forEach(collapse => {
            collapse.addEventListener('show.bs.collapse', function() {
                const button = document.querySelector(`[href="#${this.id}"] i`);
                button.style.transform = 'rotate(180deg)';
                button.style.transition = 'transform 0.3s ease';
            });
            
            collapse.addEventListener('hide.bs.collapse', function() {
                const button = document.querySelector(`[href="#${this.id}"] i`);
                button.style.transform = 'rotate(0deg)';
                button.style.transition = 'transform 0.3s ease';
            });
        });
        
        // View toggle functionality
        const viewButtons = document.querySelectorAll('.view-btn');
        
        viewButtons.forEach(button => {
            button.addEventListener('click', function() {
                // Update active button
                viewButtons.forEach(btn => {
                    btn.classList.remove('active');
                    btn.classList.remove('btn-primary');
                    btn.classList.add('btn-outline-primary');
                });
                
                this.classList.add('active');
                this.classList.add('btn-primary');
                this.classList.remove('btn-outline-primary');
                
                // Show/hide appropriate view
                const viewType = this.dataset.view;
                const detailViews = document.querySelectorAll('.detail-view');
                const tenantViews = document.querySelectorAll('.tenant-view');
                
                if (viewType === 'detail') {
                    detailViews.forEach(view => view.style.display = 'block');
                    tenantViews.forEach(view => view.style.display = 'none');
                } else {
                    detailViews.forEach(view => view.style.display = 'none');
                    tenantViews.forEach(view => view.style.display = 'block');
                }
            });
        });
    });

    
</script>