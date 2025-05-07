<div class="container py-5">
        <!-- Header -->
        <div class="text-center mb-5 fade-up">
            <h1 class="display-4 theme-primary fw-bold mb-3">Cek Status Perizinan</h1>
            <p class="lead text-muted">Lacak status pengajuan perizinan Anda menggunakan NIK, NIB, atau Nomor Resi</p>
        </div>

        <!-- Search Form -->
        <div class="row justify-content-center mb-5">
            <div class="col-lg-6">
                <div class="card border-0 shadow-sm hover-card scale-in">
                    <div class="card-body p-4">
                        <form id="trackingForm" class="needs-validation" novalidate>
                            <div class="fancy-input">
                                <select id="trackingType" class="form-select form-select-lg" required>
                                    <option value="" selected disabled></option>
                                    <option value="nik">NIK</option>
                                    <option value="nib">NIB</option>
                                    <option value="resi">No Resi</option>
                                </select>
                                <label>Pilih Jenis Tracking</label>
                            </div>
                            <div class="fancy-input">
                                <input type="text" id="trackingNumber" class="form-control form-control-lg" placeholder=" " required>
                                <label>Nomor Tracking</label>
                            </div>
                            <button type="submit" class="btn theme-bg-primary text-white btn-lg w-100 theme-hover">
                                <i class="bi bi-search me-2"></i>Cek Status
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        </div>

        <!-- Results Area -->
        <div id="resultsArea" class="row justify-content-center" style="display: none;">
            <!-- Loading Spinner -->
            <div id="loadingSpinner" class="text-center mb-4" style="display: none;">
                <div class="loading-spinner mx-auto"></div>
                <p class="mt-3 text-muted">Memuat data...</p>
            </div>

            <!-- Results Content -->
            <div id="resultsContent" class="col-lg-8"></div>
        </div>
    </div>

    <script>
         document.getElementById('trackingForm').addEventListener('submit', async function(e) {
            e.preventDefault();
            
            const trackingType = document.getElementById('trackingType').value;
            const trackingNumber = document.getElementById('trackingNumber').value;

            // Show loading state
            const resultsArea = document.getElementById('resultsArea');
            const loadingSpinner = document.getElementById('loadingSpinner');
            const resultsContent = document.getElementById('resultsContent');

            resultsArea.style.display = 'block';
            loadingSpinner.style.display = 'block';
            resultsContent.innerHTML = '';

            try {
               // Create form data
               const formData = new FormData();
               formData.append('trackingType', trackingType);
               formData.append('trackingNumber', trackingNumber);

               // Send AJAX request
               const response = await fetch('<?php echo base_url("landingpage/trackingizin/cek_resi"); ?>', {
                     method: 'POST',
                     body: formData,
                     headers: {
                        'X-Requested-With': 'XMLHttpRequest'
                     }
               });

               const result = await response.json();

               // Hide loading spinner
               loadingSpinner.style.display = 'none';

               if (result.status === 'success') {
                     if (trackingType === 'resi') {
                        displayResiResults(result.data);
                     } else {
                        displayNikNibResults(result.data[0]); 
                     }

                     // Animate timeline items
                     setTimeout(() => {
                        document.querySelectorAll('.timeline-item').forEach((item, index) => {
                           setTimeout(() => {
                                 item.classList.add('animate');
                           }, index * 100);
                        });
                     }, 300);
               } else {
                     resultsContent.innerHTML = `
                        <div class="alert alert-danger scale-in" role="alert">
                           <i class="bi bi-exclamation-triangle-fill me-2"></i>
                           ${result.message || 'Terjadi kesalahan saat memuat data'}
                        </div>
                     `;
               }
            } catch (error) {
               loadingSpinner.style.display = 'none';
               resultsContent.innerHTML = `
                     <div class="alert alert-danger scale-in" role="alert">
                        <i class="bi bi-exclamation-triangle-fill me-2"></i>
                        Terjadi kesalahan pada sistem
                     </div>
               `;
            }
         });
            
      
         function displayResiResults(data) {
               const html = `
                  <div class="card border-0 shadow-sm hover-card scale-in">
                     <div class="card-header theme-bg-primary text-white py-3">
                           <h5 class="mb-0 text-white">No. Resi: ${data['No resi']}</h5>
                     </div>
                     <div class="card-body p-4">
                           <div class="mb-4 slide-right">
                              <div class="d-flex align-items-center mb-3">
                                 <i class="bi bi-person theme-primary me-2"></i>
                                 <div>
                                       <small class="text-muted d-block">Nama Pemohon</small>
                                       <strong>${data['Nama Pemohon']}</strong>
                                 </div>
                              </div>
                              <div class="d-flex align-items-center">
                                 <i class="bi bi-file-text theme-primary me-2"></i>
                                 <div>
                                       <small class="text-muted d-block">Nama Izin</small>
                                       <strong>${data['Nama Izin']}</strong>
                                 </div>
                              </div>
                           </div>

                           <div class="timeline">
                              ${data['Alur Proses'].map((step, index) => `
                                 <div class="timeline-item">
                                       <div class="timeline-dot"></div>
                                       <div class="mb-2">
                                          <h6 class="mb-1">${step.status_berkas}</h6>
                                          <span class="status-badge ${step.keterangan.toLowerCase() === 'selesai' ? 'bg-success' : 'bg-secondary'} text-white">
                                             ${step.keterangan}
                                          </span>
                                       </div>
                                 </div>
                              `).join('')}
                           </div>
                     </div>
                  </div>
               `;
               resultsContent.innerHTML = html;
         }

         function displayNikNibResults(data) {
               const html = `
                  <div class="card border-0 shadow-sm hover-card scale-in">
                     <div class="card-header theme-bg-primary text-white py-3">
                           <h5 class="mb-0 text-white">No. Resi: ${data.no_resi}</h5>
                     </div>
                     <div class="card-body p-4">
                           <div class="row g-4 slide-right">
                              <div class="col-md-6">
                                 <div class="d-flex align-items-center mb-3">
                                       <i class="bi bi-calendar3 theme-primary me-2"></i>
                                       <div>
                                          <small class="text-muted d-block">Tanggal Pengajuan</small>
                                          <strong>${data.tgl_pengajuan}</strong>
                                       </div>
                                 </div>
                                 <div class="d-flex align-items-center mb-3">
                                       <i class="bi bi-person theme-primary me-2"></i>
                                       <div>
                                          <small class="text-muted d-block">Nama Pemohon</small>
                                          <strong>${data.nama_pemohon}</strong>
                                       </div>
                                 </div>
                              </div>
                              <div class="col-md-6">
                                 <div class="d-flex align-items-center mb-3">
                                       <i class="bi bi-building theme-primary me-2"></i>
                                       <div>
                                          <small class="text-muted d-block">Badan Usaha</small>
                                          <strong>${data.badan_usaha}</strong>
                                       </div>
                                 </div>
                                 <div class="d-flex align-items-center">
                                       <i class="bi bi-file-text theme-primary me-2"></i>
                                       <div>
                                          <small class="text-muted d-block">Nama Izin</small>
                                          <strong>${data.nama_ijin}</strong>
                                       </div>
                                 </div>
                              </div>
                           </div>
                           
                           <div class="mt-4 scale-in">
                              <div class="status-badge ${data.ket_proses === 'selesai' ? 'bg-success' : 'bg-info'} text-white d-inline-block">
                                 Status: ${data.ket_proses}
                              </div>
                           </div>
                     </div>
                  </div>
               `;
               resultsContent.innerHTML = html;
         }
    </script>