                  <li class="header" style='color:#fff; border-bottom:2px solid #00c0ef'></li>
                  <li class="<?php echo $menu_aktif == "home" ? 'active' : '' ?>"><a href="<?php echo base_url('panel/home')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
                  <li class="<?php echo $menu_aktif == "m_berita" ? 'active' : '' ?>"><a href="<?php echo base_url('panel/module/berita')?>"><i class="fa fa-newspaper-o"></i> <span>Modul Berita</span></a></li>
                  <li class="<?php echo $menu_aktif == "m_portal" ? 'active' : '' ?>"><a href="<?php echo base_url('panel/module/portal')?>"><i class="fa fa-globe"></i> <span>Modul Portal</span></a></li>
                  <li class="<?php echo $menu_aktif == "m_rekankami" ? 'active' : '' ?>"><a href="<?php echo base_url('panel/module/rekankami')?>"><i class="fa fa-users"></i> <span>Modul Rekan Kami</span></a></li>
                  <li class="<?php echo $menu_aktif == "m_situsterkait" ? 'active' : '' ?>"><a href="<?php echo base_url('panel/module/situsterkait')?>"><i class="fa fa-link"></i> <span>Modul Situs Terkait</span></a></li>
                  <li class="<?php echo $menu_aktif == "m_imb" ? 'active' : '' ?>"><a href="<?php echo base_url('panel/module/imb')?>"><i class="fa fa-upload"></i> <span>Modul IMB</span></a></li>
                  <li class="<?php echo $menu_aktif == "m_slider" ? 'active' : '' ?>"><a href="<?php echo base_url('panel/module/slider')?>"><i class="fa fa-image"></i> <span>Modul Slider</span></a></li>

                  <li class="treeview <?php echo ($menu_aktif == "m_kamisceria" ||  $menu_aktif == "m_kiososs" || $menu_aktif == "m_jempolkelingking") ? 'active' : '' ?>">
                     <a href="#"><i class="fa fa-clipboard"></i> <span>Modul Pelayanan</span><i class="fa fa-angle-left pull-right"></i></a>
                     <ul class="treeview-menu <?php echo ($menu_aktif == "m_kamisceria" ||  $menu_aktif == "m_kiososs" || $menu_aktif == "m_jempolkelingking") ? 'menu_open' : '' ?>">
                        <li class="<?php echo $menu_aktif == "m_kamisceria" ? 'active' : '' ?>"><a href='<?php echo base_url('panel/module/pelayanan/kamisceria')?>'><i class='fa fa-circle-o'></i>Kamis Ceria</a></li>
                        <li class="<?php echo $menu_aktif == "m_kiososs" ? 'active' : '' ?>"><a href='<?php echo base_url('panel/module/pelayanan/kiososs')?>'><i class='fa fa-circle-o'> </i>Kios OSS</a></li>
                        <li class="<?php echo $menu_aktif == "m_jempolkelingking" ? 'active' : '' ?>"><a href='<?php echo base_url('panel/module/pelayanan/jempolkelingking')?>'><i class='fa fa-circle-o'> </i>Jempol Kelingking</a></li>
                     </ul>
                  </li>

                  <li class="treeview <?php echo ($menu_aktif == "m_tentang" || $menu_aktif == "m_saranalayanan" || $menu_aktif == "m_strukturorganisasi" || $menu_aktif == "m_penghargaan") ? 'active' : '' ?>">
                     <a href="#"><i class="fa fa-institution"></i> <span>Modul Profil</span><i class="fa fa-angle-left pull-right"></i></a>
                     <ul class="treeview-menu <?php echo ($menu_aktif == "m_tentang" || $menu_aktif == "m_saranalayanan" || $menu_aktif == "m_strukturorganisasi" || $menu_aktif == "m_penghargaan") ? 'menu_open' : '' ?>">
                        <li class="<?php echo $menu_aktif == "m_tentang" ? 'active' : '' ?>"><a href='<?php echo base_url('panel/module/profil/tentang')?>'><i class='fa fa-circle-o'></i>Sekilas DPMPTSP Medan</a></li>
                        <li class="<?php echo $menu_aktif == "m_saranalayanan" ? 'active' : '' ?>"><a href='<?php echo base_url('panel/module/profil/saranalayanan')?>'><i class='fa fa-circle-o'> </i>Foto Sarana Layanan </a></li>
                        <li class="<?php echo $menu_aktif == "m_strukturorganisasi" ? 'active' : '' ?>"><a href='<?php echo base_url('panel/module/profil/strukturorganisasi')?>'><i class='fa fa-circle-o'> </i>Struktur Organisasi</a></li>
                        <li class="<?php echo $menu_aktif == "m_penghargaan" ? 'active' : '' ?>"><a href='<?php echo base_url('panel/module/profil/penghargaan')?>'><i class='fa fa-circle-o'> </i>Penghargaan</a></li>
                     </ul>
                  </li>
                  
                  <li>
                     <a href="<?php echo base_url('panel/auth/logout');?>"><i class="fa fa-circle-o-notch"></i> <span>Logout</span></a>
                  </li>