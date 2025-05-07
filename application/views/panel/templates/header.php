<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="shortcut icon" href="<?php echo base_url('assets')?>/logo.png">
    <title>Control Panel Aplikasi</title>
    <meta name="author" content="bhs.11011011">
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
    <!-- Ionicons -->
    <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
    <!-- Bootstrap 3.3.5 -->
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/bootstrap/css/bootstrap.min.css">
    <!-- DataTables -->
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/plugins/datatables/dataTables.bootstrap.css">
    <!-- Theme style -->
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/dist/css/AdminLTE.min.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/dist/css/skins/_all-skins.min.css">
    <!-- iCheck -->
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/plugins/iCheck/flat/blue.css">
    <!-- Morris chart -->
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/plugins/morris/morris.css">
    <!-- jvectormap -->
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/plugins/jvectormap/jquery-jvectormap-1.2.2.css">
    <!-- Date Picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/plugins/datepicker/datepicker3.css">
    <!-- Daterange picker -->
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/plugins/daterangepicker/daterangepicker-bs3.css">
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/plugins/select2/select2.min.css">
    <!-- bootstrap wysihtml5 - text editor -->
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css">
    <!-- colorpicker library -->
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/')?>assets/colorpicker/css/colorpicker.css" type="text/css" />
    <script type="text/javascript" src="<?php echo base_url('assets/panel/')?>assets/colorpicker/js/jquery.js"></script>
  	<script type="text/javascript" src="<?php echo base_url('assets/panel/')?>assets/colorpicker/js/colorpicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/panel/')?>assets/colorpicker/js/eye.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/panel/')?>assets/colorpicker/js/utils.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/panel/')?>assets/colorpicker/js/layout.js?ver=1.0.2"></script>
    <script language="javascript" type="text/javascript">
      var maxAmount = 160;
      function textCounter(textField, showCountField) {
        if (textField.value.length > maxAmount) {
          textField.value = textField.value.substring(0, maxAmount);
        }else{
          showCountField.value = maxAmount - textField.value.length;
        }
      }
    </script>

    <script src="<?php echo base_url('assets/')?>ckeditor/ckeditor.js"></script>
    <style type="text/css">
      .checkbox-scroll { border:1px solid #ccc; width:100%; height: 114px; padding-left:8px; overflow-y: scroll; }
    </style>
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/v5.3.0-dist/ol.css')?>" type="text/css">
    <style>
      .map {
        height: 400px;
        width: 100%;
      }
      /* Optional: Makes the sample page fill the window. */
      html, body {
        height: 100%;
        margin: 0;
        padding: 0;
      }

      /* The popup bubble styling. */
      .popup-bubble {
        /* Position the bubble centred-above its parent. */
        position: absolute;
        top: 0;
        left: 0;
        transform: translate(-50%, -100%);
        /* Style the bubble. */
        background-color: white;
        padding: 5px;
        border-radius: 5px;
        font-family: sans-serif;
        overflow-y: auto;
        max-height: 60px;
        box-shadow: 0px 2px 10px 1px rgba(0,0,0,0.5);
      }
      /* The parent of the bubble. A zero-height div at the top of the tip. */
      .popup-bubble-anchor {
        /* Position the div a fixed distance above the tip. */
        position: absolute;
        width: 100%;
        bottom: /* TIP_HEIGHT= */ 8px;
        left: 0;
      }
      /* This element draws the tip. */
      .popup-bubble-anchor::after {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        /* Center the tip horizontally. */
        transform: translate(-50%, 0);
        /* The tip is a https://css-tricks.com/snippets/css/css-triangle/ */
        width: 0;
        height: 0;
        /* The tip is 8px high, and 12px wide. */
        border-left: 6px solid transparent;
        border-right: 6px solid transparent;
        border-top: /* TIP_HEIGHT= */ 8px solid white;
      }
      /* JavaScript will position this div at the bottom of the popup tip. */
      .popup-container {
        cursor: auto;
        height: 0;
        position: absolute;
        /* The max width of the info window. */
        width: 200px;
      }
    </style>
    <link rel="stylesheet" href="<?php echo base_url('assets/panel/v5.3.0-dist/ol.css');?>" type="text/css">
    <script src="<?php echo base_url('assets/panel/v5.3.0-dist/ol.js');?>"></script>
  </head>
<body class="hold-transition skin-green-light sidebar-mini">
<div class="wrapper">
