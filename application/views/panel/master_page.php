<!DOCTYPE html>
<html>

  <head>
  <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="shortcut icon" href="<?php echo base_url('assets')?>/logo_pemkomedan.png">
    <title>Control Panel | <?php echo $judul_besar ?></title>
    <!-- REQUIRED STYLES -->
    <?php $this->load->view('panel/_layout/_head_css', '', FALSE); ?>
    
  </head>
   <body class="hold-transition skin-green-light sidebar-mini">
      <div class="wrapper">
         <header class="main-header">
            <a href="<?php echo base_url('panel/home')?>" class="logo">
               <span class="logo-mini"><b>DPMPTSP</b></span>
               <span style="text-transform: uppercase;" class="logo-lg"><b>DPMPTSP Medan</b></span>
            </a>
            <nav class="navbar navbar-static-top" role="navigation">
               <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
                  <span class="sr-only">Toggle navigation</span>
               </a>
               <div class="navbar-custom-menu">
                  <ul class="nav navbar-nav">
                  </ul>
               </div>
            </nav>
         </header>

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
                  <?php $this->load->view('panel/_layout/_main_menu', '', FALSE); ?>
               </ul>
            </section>
         </aside>

         <section class="content-wrapper">
            <section class="content-header">
               <h1>
                  <?php echo $judul_besar; ?>
               </h1>
               <ol class="breadcrumb">
                  <li><a href="#"><i class="<?php echo $icon ?>"></i> <?php echo $judul_besar; ?></a></li>
                  <?php echo $judul_kecil != "" ? "<li class='active'>$judul_kecil</li>" : '' ?>
               </ol>
               </section>
               <section class="content">
                  <div class="row">
                     <?php $this->load->view($content, '', FALSE); ?>
                  </div>
               </section>
            </section>

         <!-- <div style='clear:both'></div> -->
         <footer class="main-footer">
            <strong>Copyright &copy; <?php echo date('Y'); ?>.
               <span class="text-primary"> DPMPTSP Kota Medan</span>
            </strong>
         </footer>

      </div>

      <!-- REQUIRED SCRIPTS -->

      <?php $this->load->view('panel/_layout/_script', '', FALSE); ?>

      
   </body>
</html>


