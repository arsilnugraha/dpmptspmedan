<section id="page-title">
    <div class="container clearfix">
        <h1>Dashboard IMB</h1>
        <span>Dashboard IMB</span>
        <br>
    </div>
</section>
<section id="content">
    <div class="container clearfix">
        <div class="row gutter-40 col-mb-80">
            <div class="postcontent col-md-9">
                <div class="single-post mb-0">

                  <div class="row">
                     <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                           <div class="card-body">
                              <div class="d-flex justify-content-between p-md-1">
                                 <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                       <i class="fa fa-sign-in text-info fa-3x me-4"></i>
                                    </div>
                                    <div>
                                       <h4>IMB Masuk</h4>
                                       <p class="mb-0">Tahun <?= $currentYear - 1; ?></p>
                                    </div>
                                 </div>
                                 <div class="align-self-center">
                                    <h4 class="h4 mb-0"><?= $countMasukPreviousYear ?></h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                           <div class="card-body">
                              <div class="d-flex justify-content-between p-md-1">
                                 <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                       <i class="fa fa-sign-in text-success fa-3x me-4"></i>
                                    </div>
                                    <div>
                                       <h4>IMB Masuk</h4>
                                       <p class="mb-0">Tahun <?= $currentYear  ?></p>
                                    </div>
                                 </div>
                                 <div class="align-self-center">
                                    <h4 class="h4 mb-0"><?= $countMasukCurrentYear ?></h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                           <div class="card-body">
                              <div class="d-flex justify-content-between p-md-1">
                                 <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                       <i class="fa fa-file text-info fa-3x me-4"></i>
                                    </div>
                                    <div>
                                       <h4>IMB Terbit</h4>
                                       <p class="mb-0">Tahun <?= $previousYear; ?></p>
                                    </div>
                                 </div>
                                 <div class="align-self-center">
                                    <h4 class="h4 mb-0"><?= $countTerbitPreviousYear ?></h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                           <div class="card-body">
                              <div class="d-flex justify-content-between p-md-1">
                                 <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                       <i class="fa fa-file text-success fa-3x me-4"></i>
                                    </div>
                                    <div>
                                       <h4>IMB Terbit</h4>
                                       <p class="mb-0">Tahun <?= $currentYear; ?></p>
                                    </div>
                                 </div>
                                 <div class="align-self-center">
                                    <h4 class="h4 mb-0"><?= $countMasukCurrentYear ?></h4>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>

                  <div class="row">
                     <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                           <div class="card-body">
                              <div class="d-flex justify-content-between p-md-1">
                                 <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                       <i class="fa fa-bar-chart text-info fa-3x me-4"></i>
                                    </div>
                                    <div class="align-self-center">
                                       <h4>Realisasi Retribusi</h4>
                                       <p class="mb-0">Tahun <?= $previousYear; ?></p>
                                    </div>
                                 </div>
                                 <div class="align-self-center">
                                    <h6 class="h6 mb-0">Rp<?= number_format($RealisasiRetribusiPreviousYear, 0, ',', '.'); ?></h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-xl-6 col-md-12 mb-4">
                        <div class="card">
                           <div class="card-body">
                              <div class="d-flex justify-content-between p-md-1">
                                 <div class="d-flex flex-row">
                                    <div class="align-self-center">
                                       <i class="fa fa-bar-chart text-success fa-3x me-4"></i>
                                    </div>
                                    <div>
                                       <h4>Realisasi Retribusi</h4>
                                       <p class="mb-0">Tahun <?= $currentYear; ?></p>
                                    </div>
                                 </div>
                                 <div class="align-self-center">
                                    <h6 class="h6 mb-0">Rp<?= number_format($RealisasiRetribusiCurrentYear, 0, ',', '.'); ?></h6>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                  </div>
            

               </div>
            </div>
            
            <div class="col-md-3 sidebar-widgets-wrap">
                <div class="widget clearfix">
                <img src="<?php echo base_url('assets/landingpage/') ?>slogan.png"> 
            </div>
            <div class="widget widget_links clearfix">
                <h4>Navigasi Cepat</h4>
                <ul>
                    <li><a href="#">FAQ</a></li>
                    <li><a href="#">Peraturan Perizinan</a></li>
                    <li><a href="#">Jenis & Syarat Izin</a></li>
                    <li><a href="#">Standar Pelayanan</a></li>
                    <li><a href="#">Profil DPMPTSP Medan</a></li>
                    <li><a href="#">OSS RBA</a></li>
                    <li><a href="#">Invest Medan</a></li>
                    <li><a href="#">Survei Kepuasan Masyarakat</a></li>
                </ul>
            </div>
        <div class="widget clearfix"></div>

            </div>
        </div>
    </div>
</section>     