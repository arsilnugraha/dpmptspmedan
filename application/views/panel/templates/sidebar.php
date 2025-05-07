<aside class="main-sidebar">
<section class="sidebar">
  <!-- Sidebar user panel -->
  <div class="user-panel">
    <div class="pull-left image">
      <img src="<?php echo base_url('assets/')?>foto_user/<?php if ($this->session->userdata('foto')==""){
         echo "blank.png";
       }else{
          echo $this->session->userdata('foto');
        } ?>" class="img-circle" alt="User Image">
    </div>
    <div class="pull-left info">
      <p><?php echo $this->session->userdata('namalengkap'); ?></p>
      <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
    </div>
  </div>

  <!-- sidebar menu: : style can be found in sidebar.less -->
  <ul class="sidebar-menu">
    <li class="header" style='color:#fff; border-bottom:2px solid #00c0ef'>

    </li>
    <li><a href="<?php echo base_url('panel/home')?>"><i class="fa fa-dashboard"></i> <span>Dashboard</span></a></li>
    <li><a href="<?php echo base_url('panel/module/berita')?>"><i class="fa fa-newspaper-o"></i> <span>Modul Berita</span></a></li>
    <li><a href="<?php echo base_url('panel/module/portal')?>"><i class="fa fa-newspaper-o"></i> <span>Modul Portal</span></a></li>
    <li><a href="<?php echo base_url('panel/module/rekankami')?>"><i class="fa fa-newspaper-o"></i> <span>Modul Rekan Kami</span></a></li>
    <li><a href="<?php echo base_url('panel/module/situsterkait')?>"><i class="fa fa-newspaper-o"></i> <span>Modul Situs Terkait</span></a></li>

    <li class="treeview ">
      <a href="#"><i class="fa fa-info-circle"></i> <span>Modul Profil</span><i class="fa fa-angle-left pull-right"></i></a>
      <ul class="treeview-menu">
        <li><a href='<?php echo base_url('panel/module/profil/tentang')?>'><i class='fa fa-circle-o'></i>Sekilas DPMPTSP Medan</a></li>
        <li><a href='<?php echo base_url('panel/module/berita/sarana_layanan')?>'><i class='fa fa-circle-o'> </i>Foto Sarana Layanan </a></li>
        <li><a href='<?php echo base_url('panel/module/berita/strktur_organisasi')?>'><i class='fa fa-circle-o'> </i>Struktur Organisasi</a></li>
        <li><a href='<?php echo base_url('panel/module/berita/penghargaan')?>'><i class='fa fa-circle-o'> </i>Penghargaan</a></li>
      </ul>
    </li>

    <li class="treeview">
      <a href="<?php echo base_url('panel/auth/logout');?>"><i class="fa fa-circle-o-notch"></i> <span>Logout</span></a>
    </li>



  </ul>
</section>
</aside>
