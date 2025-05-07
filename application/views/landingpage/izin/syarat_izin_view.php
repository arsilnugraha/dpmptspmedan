<div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-md-10">
                <div class="card shadow-lg animate__animated animate__fadeIn">
                    <div class="card-body p-4 text-center">
                        <h2 class="text-success mb-3">Persyaratan Izin</h2>
                        <p class="text-muted">Daftar persyaratan untuk mengajukan perizinan di Kota Medan</p>
                    </div>
                </div>

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
                                        <tr class="row-permohonan">
                                            <td colspan="3">
                                                <?= $dokumen['Jenis_permohonan'] ?>
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
                                                <a href="<?= $dokumen['Format'] ?>" class="btn btn-download" download>
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
    </div>