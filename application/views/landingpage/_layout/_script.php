<script src="https://cdnjs.cloudflare.com/ajax/libs/Swiper/8.4.5/swiper-bundle.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.2/js/bootstrap.bundle.min.js"></script> 
<script src="<?php echo base_url('assets/landingpage/') ?>_theme/js/jquery.js"></script>
<script src="<?php echo base_url('assets/landingpage/') ?>_theme/js/plugins.min.js"></script>
<?php if (!isset($slug)) { ?>
          <script src="<?php echo base_url('assets/landingpage/') ?>_theme/js/functions.js"></script>
            <!-- Scripts -->
       <?php } ?>
    
<?php
if (isset($after_page)) {
  $this->load->view($after_page);
}
?>