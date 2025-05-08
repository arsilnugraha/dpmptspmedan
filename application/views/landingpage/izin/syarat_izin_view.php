<section id="content">
    <div class="content-wrap pt-0">
        <div class="section mt-0 overflow-visible">
            <div class="container">
                <div class="row justify-content-center text-center">
                    <div class="col-lg-7">
                        <div class="heading-block border-bottom-0 mb-4">
                            <h2 class="mb-3">Persyaratan Izin</h2>
                            <p class="text-muted mb-0">Daftar persyaratan untuk mengajukan perizinan di Kota Medan</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container clearfix" style="margin-top: 50px;">

                <?php if (isset($error_message)): ?>
                <div class="alert alert-danger animate__animated animate__fadeIn mt-4" role="alert">
                    <?= $error_message ?>
                </div>
                <?php endif; ?>

                <?php if (isset($izin_data) && is_array($izin_data)): ?>
                <div class="accordion mt-4 animate__animated animate__fadeInUp" id="izinAccordion">
                    <?php 
                    $accordion_item = 0;
                    foreach ($izin_data['data'] as $izin) {
                        $accordion_item++;
                        $previous_permohonan = '';
                        $previous_kategori = '';
                    ?>
                    <div class="accordion-item animate-fade-in">
                        <h2 class="accordion-header">
                            <button class="accordion-button collapsed" type="button" 
                                    data-bs-toggle="collapse" 
                                    data-bs-target="#collapse<?= $accordion_item ?>" 
                                    aria-expanded="false" 
                                    aria-controls="collapse<?= $accordion_item ?>">
                                <span class="fs-5"><?= $izin['nama_izin'] ?></span>
                            </button>
                        </h2>
                        <div id="collapse<?= $accordion_item ?>" 
                             class="accordion-collapse collapse" 
                             data-bs-parent="#izinAccordion">
                            <div class="accordion-body">
                                <table class="table">
                                    <thead>
                                        <tr>
                                            <th>Nama Dokumen</th>
                                            <th>Status</th>
                                            <th>Format</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($izin['data_izin'] as $dokumen): ?>
                                        <?php 
                                        $show_subheader = trim($dokumen['Jenis_permohonan']) !== 'Permohonan' && 
                                                         $dokumen['Jenis_permohonan'] !== $previous_permohonan;
                                        $show_kategori = trim($dokumen['Kategori']) !== 'Kategori' && 
                                                        $dokumen['Kategori'] !== $previous_kategori;
                                        ?>
                                        <?php if ($show_subheader): ?>
                                        <tr>
                                            <td colspan="3" style="background-color: #e3f2fd;font-weight: 600;color: #1565c0;font-size: 1.05em;padding: 1rem 1.25rem;border-bottom: 2px solid rgba(21, 101, 192, 0.2);">
                                                <?= ucwords($dokumen['Jenis_permohonan']) ?>
                                            </td>
                                        </tr>
                                        <?php $previous_permohonan = $dokumen['Jenis_permohonan']; endif; ?>

                                        <?php if ($show_kategori): ?>
                                        <tr class="row-kategori">
                                            <td colspan="3">
                                                Kategori: <?= $dokumen['Kategori'] ?>
                                            </td>
                                        </tr>
                                        <?php $previous_kategori = $dokumen['Kategori']; endif; ?>

                                        <tr class="row-syarat">
                                            <td><?= $dokumen['Nama Dokumen'] ?></td>
                                            <td><?= $dokumen['Status'] ?></td>
                                            <td>
                                                <?php if (!empty($dokumen['Format'])): ?>
                                                <a href="https://sipandumedan.medan.go.id/<?= $dokumen['Format'] ?>" class="btn btn-download" download>
                                                    <i class="fas fa-download"></i>
                                                </a>
                                                <?php else: ?>
                                                <span class="text-muted">Tidak ada format</span>
                                                <?php endif; ?>
                                            </td>
                                        </tr>
                                        <?php endforeach; ?>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <?php } ?>
                </div>
                <?php endif; ?>
        </div>
    </div>
</section>