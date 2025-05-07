<!DOCTYPE html>
<html dir="ltr" lang="en-US">
    
    <head>
        <meta http-equiv="content-type" content="text/html; charset=utf-8">
        
        <title>Dinas Penanaman Modal Dan Pelayanan Terpadu Satu Pintu Kota Medan</title>
        <link rel="shortcut icon" href="<?php echo base_url('assets')?>/logo_pemkomedan.png">
        <!-- REQUIRED STYLES -->
        <?php $this->load->view('landingpage/_layout/_head_css', '', FALSE); ?>

    </head>
    <body class="stretched">
        <div id="wrapper" class="clearfix">
            <div id="top-bar">
                <div class="container">
                    <div class="row justify-content-between align-items-center">
                        <div class="col-12 col-md-auto">
                            <p class="mb-0 py-2 text-center text-md-start">
                                <strong>Tlp:</strong> (061) 78522537 | <strong>Email:</strong>
                                <a href="dpmtsp%40pemkomedan.go.html">dpmtsp@pemkomedan.go.id</a>
                            </p>
                        </div>
                        <!-- <div class="col-12 col-md-auto">
                            <div class="top-links on-click">
                                <ul class="top-links-container">
                                    <li class="top-links-item">
                                        <a href="#">ID</a>
                                        <ul class="top-links-sub-menu">
                                            <li class="top-links-item">
                                                <a href="#">Indonesia </a>
                                            </li>
                                            <li class="top-links-item">
                                                <a href="#">English </a>
                                            </li>
                                            <li class="top-links-item">
                                                <a href="#">Malaysia </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="top-links-item">
                                        <a href="#">Link</a>
                                        <ul class="top-links-sub-menu">
                                            <li class="top-links-item">
                                                <a href="https://sipandumedan.pemkomedan.go.id/" target="_blank">Sipandu </a>
                                            </li>
                                            <li class="top-links-item">
                                                <a href="https://simbg.pu.go.id/" target="_blank">Sistem PUPR </a>
                                            </li>
                                            <li class="top-links-item">
                                                <a href="https://oss.go.id/" target="_blank">Aplikasi OSS </a>
                                            </li>
                                            <li class="top-links-item">
                                                <a href="dpmptspwebaplikasi/modules/skm/index.html" target="_blank">SKM Online </a>
                                            </li>
                                            <li class="top-links-item">
                                                <a href="https://investmedan.pemkomedan.go.id/" target="_blank">investmedan.id </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="top-links-item">
                                        <a href="#">Login</a>
                                        <div class="top-links-section">
                                            <form id="top-login" autocomplete="off">
                                                <div class="form-group">
                                                    <label>Username</label>
                                                    <input type="email" class="form-control" placeholder="Email address">
                                                </div>
                                                <div class="form-group">
                                                    <label>Password</label>
                                                    <input type="password" class="form-control" placeholder="Password" required="">
                                                </div>
                                                <div class="form-group form-check">
                                                    <input class="form-check-input" type="checkbox" value="" id="top-login-checkbox">
                                                    <label class="form-check-label" for="top-login-checkbox">Remember Me</label>
                                                </div>
                                                <button class="btn btn-danger w-100" type="submit">Sign in</button>
                                            </form>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                        </div> -->
                    </div>
                </div>
            </div>

            <header id="header">
                <div id="header-wrap">
                    <div class="container">
                        <div class="header-row">
                            <div id="logo">
                                <a href="<?php echo base_url('landingpage/home')?>" class="standard-logo" data-dark-logo="<?php echo base_url('assets/landingpage/') ?>_theme/images/logo_dpmptsp2_bw.png">
                                    <img src="<?php echo base_url('assets/landingpage/') ?>_theme/images/logo_dpmptsp2.png" alt="Logo">
                                </a>
                                <a href="<?php echo base_url('landingpage/home')?>" class="retina-logo" data-dark-logo="<?php echo base_url('assets/landingpage/') ?>_theme/images/logo_dpmptsp2_bw.png">
                                    <img src="<?php echo base_url('assets/landingpage/') ?>_theme/images/logo_dpmptsp2.png" alt="Logo">
                                </a>
                            </div>
                            <div id="primary-menu-trigger">
                                <svg class="svg-trigger" viewBox="0 0 100 100">
                                    <path d="m 30,33 h 40 c 3.722839,0 7.5,3.126468 7.5,8.578427 0,5.451959 -2.727029,8.421573 -7.5,8.421573 h -20"></path>
                                    <path d="m 30,50 h 40"></path>
                                    <path d="m 70,67 h -40 c 0,0 -7.5,-0.802118 -7.5,-8.365747 0,-7.563629 7.5,-8.634253 7.5,-8.634253 h 20"></path>
                                </svg>
                            </div>
                            <nav class="primary-menu">
                                <?php $this->load->view('landingpage/_layout/_main_menu', '', FALSE); ?>
                            </nav>
                        </div>
                    </div>
                </div>
                <div class="header-wrap-clone"></div>
            </header>
            
            <!-- Content -->
            <?php $this->load->view($content, '', FALSE); ?>

            <footer id="footer" class="dark">
                <div class="container">
                    <div class="footer-widgets-wrap">
                        <div class="row col-mb-50">
                            <!-- Company Info Column -->
                            <div class="col-lg-4">
                                <div class="widget clearfix">
                                    <img src="<?php echo base_url('assets/landingpage/') ?>_theme/images/logo_dpmptsp2_bw.png" alt="Image" class="footer-logo mb-4">
                                    <p class="text-white-50 mb-4">Dinas Penanaman Modal dan Pelayanan Terpadu Satu Pintu DPMPTSP Kota Medan</p>
                                    <div class="contact-info">
                                        <div class="contact-item mb-3">
                                            <i class="icon-map-marker1 me-2"></i>
                                            <span>Jl. Jenderal Besar A.H. Nasution No.32</span>
                                        </div>
                                        <div class="contact-item mb-3">
                                            <i class="icon-phone me-2"></i>
                                            <span>(061) 78522537</span>
                                        </div>
                                        <div class="contact-item">
                                            <i class="icon-envelope me-2"></i>
                                            <a href="mailto:dpmtsp@pemkomedan.go.id">dpmtsp@pemkomedan.go.id</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="mt-4">
                                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63715.11138666198!2d98.60721453124998!3d3.542563700000001!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3031300853fb9103%3A0x6414a8d0bb1e2059!2sDinas%20Penanaman%20Modal%20dan%20PTSP%20Kota%20Medan!5e0!3m2!1sen!2sid!4v1676010601977!5m2!1sen!2sid" 
                                        width="100%"
                                        height="50%" 
                                        style="border:0; border-radius: 10px;" 
                                        allowfullscreen="" 
                                        loading="lazy"
                                        referrerpolicy="no-referrer-when-downgrade">
                                    </iframe>
                                </div>
                            </div>

                            <!-- Quick Links Column -->
                            <div class="col-lg-4">
                                <div class="widget widget_links clearfix">
                                    <h4 class="text-white">Link Terkait</h4>
                                    <div class="line line-sm bg-white-50 mb-4"></div>
                                    <ul class="link-list">
                                        <li><a href="index.html"></i>DPMPTSP Medan</a></li>
                                        <li><a href="https://northsumatrainvest.id/"></i>North Sumatra Investment</a></li>
                                        <li><a href="https://sipandumedan.pemkomedan.go.id/"></i>Aplikasi SIPANDU</a></li>
                                        <li><a href="https://simbg.pu.go.id/"></i>Portal PUPR</a></li>
                                        <li><a href="https://oss.go.id/"></i>OSS.go.id</a></li>
                                    </ul>
                                </div>
                            </div>

                            <!-- Visitor Stats & Social Column -->
                            <div class="col-lg-4">
                                <!-- Visitor Stats Card -->
                                <div class="visitor-stats-card mb-5">
                                    <h4 class="text-white">Statistik Pengunjung</h4>
                                    <div class="line line-sm bg-white-50 mb-4"></div>
                                    <div class="stats-container">
                                        <div class="stat-box">
                                            <div class="stat-icon">
                                                <i class="icon-line2-calendar"></i>
                                            </div>
                                            <div class="stat-content">
                                                <span class="stat-title">Hari Ini</span>
                                                <span class="stat-number" id="today-visits">0</span>
                                            </div>
                                        </div>
                                        <div class="stat-box">
                                            <div class="stat-icon blue">
                                                <i class="icon-line2-graph"></i>
                                            </div>
                                            <div class="stat-content">
                                                <span class="stat-title">Bulan Ini</span>
                                                <span class="stat-number" id="month-visits">0</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- Social Media -->
                                <div class="social-media-links">
                                    <h4 class="text-white">Media Sosial</h4>
                                    <div class="line line-sm bg-white-50 mb-4"></div>
                                    <div class="social-icons">
                                        <a href="https://www.facebook.com/dpmptspmedan" class="social-logo social-logo-fb" target="_blank">
                                            <i class="icon-facebook"></i>
                                        </a>
                                        <a href="https://www.instagram.com/dpmptsp_medan/" class="social-logo social-logo-ig" target="_blank">
                                            <i class="icon-instagram"></i>
                                        </a>
                                        <a href="https://www.youtube.com/@DPMPTSPKotaMedan" class="social-logo social-logo-yt" target="_blank">
                                            <i class="icon-youtube"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>
                </div>

                <!-- Copyright -->
                <div id="copyrights" class="bg-transparent">
                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="col-12 text-center">
                                <p class="mb-0">
                                    Copyright &copy; <?php echo date('Y') ?> DPMPTSP Medan. All Rights Reserved.
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </footer>
            
        </div>

        <div id="gotoTop" class="icon-angle-up"></div>

        <!-- REQUIRED SCRIPTS -->
        <?php $this->load->view('landingpage/_layout/_script', '', FALSE); ?>

        <script>
         
         $(document).ready(function(){
                  $("#table-input-filter").on("keyup", function() {
                     var value = $(this).val().toLowerCase();
                     $("#DataTable tr").filter(function() {
                     $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
                     });
                  });
         });

         var url = '<?php echo base_url('assets/landingpage/') ?>wati-integration-service.clare.ai/ShopifyWidget/shopifyWidget603e.js?37862';
         var s = document.createElement('script');
         s.type = 'text/javascript';
         s.async = true;
         s.src = url;
         var options = {
               "enabled":true,
               "chatButtonSetting":{
                  "backgroundColor":"#4dc247",
                  "ctaText":"",
                  "borderRadius":"25",
                  "marginLeft":"0",
                  "marginBottom":"25",
                  "marginRight":"90",
                  "position":"right"
               },
               "brandSetting":{
                  "brandName":"DPMPTSP Kota Medan",
                  "brandSubTitle":"",
                  "brandImg":"https://devdpmptsp.pemkomedan.go.id/dpmptspwebaplikasi/img/dpm/logo%20dpmptsp.png",
                  "welcomeText":"Hallo,",
                  "messageText":"Hallo,",
                  "backgroundColor":"#0a5f54",
                  "ctaText":"Whatsapp Kami",
                  "borderRadius":"40",
                  "autoShow":false,
                  "phoneNumber":"6282277733130"
               }
         };
         s.onload = function() {
               CreateWhatsappChatWidget(options);
         };
         var x = document.getElementsByTagName('script')[0];
         x.parentNode.insertBefore(s, x);

         // Add this to your footer or a separate JS file
        document.addEventListener('DOMContentLoaded', function() {
            function updateVisitorCount() {
                fetch('<?php echo base_url('landingpage/visitor/record') ?>')
                    .then(response => response.json())
                    .then(data => {
                        document.getElementById('today-visits').textContent = data.today;
                        document.getElementById('month-visits').textContent = data.month;
                        
                        // Animate the numbers
                        animateValue('today-visits', 0, data.today, 1000);
                        animateValue('month-visits', 0, data.month, 1500);
                    });
            }
            
            function animateValue(id, start, end, duration) {
                const obj = document.getElementById(id);
                const range = end - start;
                const minTimer = 50;
                let stepTime = Math.abs(Math.floor(duration / range));
                stepTime = Math.max(stepTime, minTimer);
                
                let current = start;
                const step = Math.floor(range / (duration / stepTime));
                
                const timer = setInterval(function() {
                    current += step;
                    obj.textContent = current.toLocaleString();
                    if (current >= end) {
                        obj.textContent = end.toLocaleString();
                        clearInterval(timer);
                    }
                }, stepTime);
            }
            
            updateVisitorCount();
        });

      </script>

      

        <?php if (isset($menu_aktif) && $menu_aktif == 'home') { ?>
            <!-- <script>
                document.addEventListener("DOMContentLoaded", function () {
                    const modal = document.getElementById("popup-modal");
                    modal.style.display = "block"; // Tampilkan modal saat halaman dimuat
                });

                function closeModal(event) {
                    const modal = document.getElementById("popup-modal");
                    const modalContent = modal.querySelector(".modal-content");

                    // Tutup modal hanya jika klik berasal dari tombol close atau area luar modal-content
                    if (event.target === modal || event.target.closest(".close-button")) {
                        modalContent.classList.add("closing"); // Tambahkan kelas animasi tutup
                        modal.style.animation = "fadeOut 0.6s ease"; // Fade-out untuk background overlay

                        // Sembunyikan modal setelah animasi selesai
                        setTimeout(() => {
                            modal.style.display = "none";
                            modalContent.classList.remove("closing"); // Reset kelas animasi
                        }, 400); // Sesuaikan dengan durasi animasi
                    }
                }
            </script>   -->
        <?php } ?>

        
        
    </body>
    
    <?php if (isset($menu_aktif) && $menu_aktif == 'home') { ?>

        <!-- <div id="popup-modal" class="modal" onclick="closeModal(event)">
            <div class="modal-content animate-scale-in">
                <button class="close-button" onclick="closeModal(event)">
                    <span>&#10005;</span>
                </button>
                <div class="modal-description">
                    <h2>INFORMASI LAYANAN</h2>
                </div>
                <img src="<?php echo base_url('assets/simbg.jpg')?>" alt="Informasi SIMBG" class="popup-image mt-2">
                <img src="<?php echo base_url('assets/sipandu.jpg')?>" alt="Informasi SIPANDU" class="popup-image mt-2">
            </div>
        </div> -->
    <?php } ?>


</html>
