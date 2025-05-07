
<!-- jQuery -->
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/jquery/jquery.min.js"></script>

<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url('assets/panel/')?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>

<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/panel/')?>assets/dist/js/app.min.js"></script>

<!-- Include the Quill library -->
<script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
<script src="https://cdn.jsdelivr.net/npm/summernote@0.8.18/dist/summernote.min.js"></script>


<?php
if (isset($after_page)) {
  $this->load->view($after_page);
}
?>