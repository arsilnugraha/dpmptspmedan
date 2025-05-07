<div style='clear:both'></div>
  <footer class="main-footer">
    <strong>Copyright &copy; <?php echo date('Y'); ?>.
      <span class="text-primary"> DPMPTSP Kota Medan</span>
    </strong>
  </footer>
</div>
<!-- jQuery 2.1.4 -->
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/jQuery/jQuery-2.1.4.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<script src="https://code.highcharts.com/highcharts.js"></script>
<script src="https://code.highcharts.com/modules/data.js"></script>
<script src="https://code.highcharts.com/modules/exporting.js"></script>
<!-- Bootstrap 3.3.5 -->
<script src="<?php echo base_url('assets/panel/')?>assets/bootstrap/js/bootstrap.min.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/datatables/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/datatables/dataTables.bootstrap.min.js"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/morris/morris.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/sparkline/jquery.sparkline.min.js"></script>
<!-- jvectormap -->
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js"></script>
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/jvectormap/jquery-jvectormap-world-mill-en.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/knob/jquery.knob.js"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.10.2/moment.min.js"></script>
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- datepicker -->
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/datepicker/bootstrap-datepicker.js"></script>

<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/slimScroll/jquery.slimscroll.min.js"></script>
<!-- FastClick -->
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/fastclick/fastclick.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url('assets/panel/')?>assets/dist/js/app.min.js"></script>



<script>

$(function () {
$("#example1").DataTable({
  "scrollX": false
});
$('#example2').DataTable({
  "paging": true,
  "lengthChange": false,
  "searching": false,
  "ordering": true,
  "info": true,
  "autoWidth": false,
  "scrollX": false
});
});
</script>
<script>
$(function () {
$(".textarea").wysihtml5();
});

CKEDITOR.replace('editor1' ,{
  filebrowserImageBrowseUrl : '../kcfinder'
});
</script>
<script>

</script>
<script type="text/javascript">
$('.datepicker').datepicker();
$('#rangepicker').daterangepicker();
</script>
<script src="<?php echo base_url('assets/panel/')?>assets/plugins/select2/select2.full.min.js"></script>
<script type="text/javascript">
  $('.select2').select2({});
</script>
</body>
</html>
