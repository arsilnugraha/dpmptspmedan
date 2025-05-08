<section id="page-title">
    <div class="container clearfix">
        <h1>Laporan SKM</h1>
        <span>Laporan Survei Kepuasan Masyarakat</span>
        <br>
    </div>
</section>
<section id="content" class="mb-5">
    <div class="container clearfix">
        <div class="row gutter-40 col-mb-80">
            <div class="postcontent col-md-9">
                <div class="category-grid">
                    <div class="category-card color-red" data-category="2019">
                        <div class="category-icon">
                            <div class="category-identifier">2019</div>
                        </div>
                        <div class="category-label">Laporan SKM 2019</div>
                    </div>
                    
                    <div class="category-card color-purple" data-category="2020">
                        <div class="category-icon">
                            <div class="category-identifier">2020</div>
                        </div>
                        <div class="category-label">Laporan SKM 2020</div>
                    </div>
                    
                    <div class="category-card color-green" data-category="2023">
                        <div class="category-icon">
                            <div class="category-identifier">2023</div>
                        </div>
                        <div class="category-label">Laporan SKM 2023</div>
                    </div>
                    
                    <div class="category-card color-orange" data-category="2024">
                        <div class="category-icon">
                            <div class="category-identifier">2024</div>
                        </div>
                        <div class="category-label">Laporan SKM 2024</div>
                    </div>
                </div>
                
                <div id="itemsContainer" class="items-container">
                    <div class="items-wrapper">
                        <div class="items-header">
                            <h2 id="categoryTitle">Laporan SKM</h2>
                            <button class="close-button" id="closeItems">&times;</button>
                        </div>
                        <div id="itemsList"></div>
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
                <div class="widget clearfix">

                </div>
            </div>
        </div>
    </div>
</section>      

<script>
        // Data dokumen
        const categoryData = {
            "2019": [
                {
                    title: "Laporan SKM DPMPTSP Kota Medan Tahun 2019",
                    meta: "14 Februari 2020",
                    url: "<?php echo base_url('assets/landingpage/') ?>public/media/files/skm/LAPORAN-SKM-DPMPTSP-Kota-Medan-2019.pdf"
                }
            ],
            "2020": [
                {
                    title: "Laporan SKM DPMPTSP Kota Medan Tahun 2020",
                    meta: "1 Maret 2021",
                    url: "<?php echo base_url('assets/landingpage/') ?>public/media/files/skm/LAPORAN-SKM-DPMPTSP-Kota-Medan-2020.pdf"
                }
            ],
            "2023": [
                {
                    title: "Penetapan Hasil Survei Kepuasan Masyarakat Triwulan I Tahun 2023",
                    meta: "28 April 2023",
                    url: "<?php echo base_url('assets/landingpage/') ?>public/media/files/skm/SK-IKM-TW-1-2023.pdf"
                },
                {
                    title: "Penetapan Hasil Survei Kepuasan Masyarakat Triwulan II Tahun 2023",
                    meta: "6 Juli 2023",
                    url: "<?php echo base_url('assets/landingpage/') ?>public/media/files/skm/SK-IKM-TW-2-2023.pdf"
                },
                {
                    title: "Penetapan Hasil Survei Kepuasan Masyarakat Triwulan III Tahun 2023",
                    meta: "13 Oktober 2023",
                    url: "<?php echo base_url('assets/landingpage/') ?>public/media/files/skm/SK-IKM-TW-3-2023.pdf"
                },
                {
                    title: "Penetapan Hasil Survei Kepuasan Masyarakat Triwulan IV Tahun 2023",
                    meta: "10 Januari 2024",
                    url: "<?php echo base_url('assets/landingpage/') ?>public/media/files/skm/SK-IKM-TW-4-2023.pdf"
                },
                {
                    title: "Penetapan Hasil Survei Kepuasan Masyarakat Tahun 2023",
                    meta: "10 Januari 2024",
                    url: "<?php echo base_url('assets/landingpage/') ?>public/media/files/skm/SK-IKM-2023.pdf"
                }
            ],
            "2024": [
                {
                    title: "Penetapan Hasil Survei Kepuasan Masyarakat Triwulan I Tahun 2024",
                    meta: "18 April 2024",
                    url: "<?php echo base_url('assets/landingpage/') ?>public/media/files/skm/SK-IKM-TW-1-2024.pdf"
                },
                {
                    title: "Penetapan Hasil Survei Kepuasan Masyarakat Triwulan II Tahun 2024",
                    meta: "15 Juli 2024",
                    url: "<?php echo base_url('assets/landingpage/') ?>public/media/files/skm/SK-IKM-TW-2-2024.pdf"
                }
            ]
        };
        
        // Element references
        const categoryCards = document.querySelectorAll('.category-card');
        const itemsContainer = document.getElementById('itemsContainer');
        const categoryTitle = document.getElementById('categoryTitle');
        const itemsList = document.getElementById('itemsList');
        const closeItems = document.getElementById('closeItems');
        
        // Click event for category cards
        categoryCards.forEach(card => {
            card.addEventListener('click', () => {
                const category = card.getAttribute('data-category');
                showItems(category);
            });
        });
        
        // Close items
        closeItems.addEventListener('click', () => {
            itemsContainer.style.maxHeight = '0';
            setTimeout(() => {
                itemsList.innerHTML = '';
            }, 500);
        });
        
        // Show items for selected category
        function showItems(category) {
            // Update title
            categoryTitle.textContent = `Laporan SKM Tahun ${category}`;
            
            // Clear previous items
            itemsList.innerHTML = '';
            
            // Add items for the selected category
            categoryData[category].forEach(item => {
                const itemEntry = document.createElement('div');
                itemEntry.className = 'item-entry';
                
                itemEntry.innerHTML = `
                    <h3><a href="${item.url}" target="_blank">${item.title}</a></h3>
                    <div class="item-meta">${item.meta}</div>
                `;
                
                itemsList.appendChild(itemEntry);
            });
            
            // Show the items container with animation
            itemsContainer.style.maxHeight = '2000px';
            
            // Delay adding the class to trigger the animations
            setTimeout(() => {
                itemsContainer.classList.add('show-items');
            }, 100);
        }
    </script>