<script type="text/javascript">
    var save_method;
    var table;
    var TableAjax;

    TableAjax = function() {
        var handleRecords = function() {
            table = $('#datatable_ajax').DataTable({
                "scrollX": true,
                "processing": true,
                "serverSide": true,
                "pagingType": "full_numbers",
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('panel/module/situsterkait/ajax_list') ?>",
                    "type": "POST",
                    data: function(dtRequest) {
                        dtRequest['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';
                        return dtRequest;
                    },
                },

                "columnDefs": [{
                    "targets": [-1, 0, 1],
                    "orderable": false,
                }, ],

            });
        }

        return {
            init: function() {
                handleRecords();
            }

        };

    }();

    $(document).ready(function() {
        TableAjax.init();

        $("input").change(function() {
            $(this).removeClass('is-invalid');
            $(this).next().empty();
        });

        $('#form').submit(function(e) {
            e.preventDefault();
            $('#btnSave').text('Saving...');
            $('#btnSave').attr('disabled', true);
         
            if (save_method == 'add') {
                url = "<?php echo site_url('panel/module/situsterkait/ajax_add') ?>";
            } else {
                url = "<?php echo site_url('panel/module/situsterkait/ajax_update') ?>";
            }

            // Create FormData object and append form data
            var formData = new FormData($(this)[0]);

            $.ajax({
               url: url,
               type: "post",
               dataType: "JSON",
               data: formData,
               processData: false,
               contentType: false,
               success: function(data) {
                  $('#btnSave').text('Submit');
                  $('#btnSave').attr('disabled', false);

                  if (data.status) {
                        $('#modal_form').modal('hide');
                        reload_table();
                  } else {
                        if (data.inputerror) {
                           for (var i = 0; i < data.inputerror.length; i++) {
                              $('[name="' + data.inputerror[i] + '"]').addClass('is-invalid');
                              $('[name="' + data.inputerror[i] + '"]').next().text(data.error_string[i]);
                           }
                        } else {
                           // Handle general error
                           console.log('Error:', data.message);
                        }
                  }
               },
               error: function(xhr, status, error) {
                  console.log("AJAX Error:", error);
               }
            });

        });

        // Mengamati perubahan pada input file
         $('#fupload').on('change', function() {
            var file = $(this)[0].files[0];
            var reader = new FileReader();
            
            reader.onload = function(e) {
               var fileUrl = e.target.result;
               var photo_profile = `<img src="${fileUrl}" class="rounded-circle" alt="Foto Profil" style="width:100px; height:100px">`;
               $('#preview_photo').html(photo_profile);
               $('#preview_photo').show();
            }
            
            reader.readAsDataURL(file);
         });

    });

    function add_situsterkait() {
        save_method = 'add';
        $('[name="_method"]').val("POST");
        $('#preview_photo').html('');
        $('#preview_photo').hide();
        $('#form')[0].reset();
        $('input').removeClass('is-invalid');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Tambah Situs Terkait');
    }

    function edit_situsterkait(id) {
        save_method = 'update';
        $('[name="_method"]').val("PUT");
        $('#form')[0].reset();
        $('input').removeClass('is-invalid');
        $('.help-block').empty();

        $.ajax({
            url: "<?php echo site_url('panel/module/situsterkait/ajax_edit/') ?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="id"]').val(data.id);
                $('[name="situs_terkait"]').val(data.situs_terkait);
                $('[name="deskripsi"]').val(data.deskripsi);
                $('[name="link"]').val(data.link);
                var file_logo = data.logo;
                if(file_logo) {
                  var fileUrl  = '<?php echo base_url("/assets/logo_situsterkait/") ?>' + file_logo;
                  var logo = `<img src="${fileUrl}" width="100px">`
                  $('#preview_photo').html(logo);
                  $('#preview_photo').show();
                }

                $('#modal_form').modal('show');
                $('.modal-title').text("Edit Situs Terkait");

            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function reload_table() {
        table.ajax.reload(null, false);
    }

    function delete_situsterkait(id) {
        if (confirm('Are you sure delete this data?')) {
            $.ajax({
                url: "<?php echo site_url('panel/module/situsterkait/ajax_delete/') ?>" + id,
                type: "GET",
                dataType: "JSON",
                data: function(dtRequest) {
                    dtRequest['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';
                    return dtRequest;
                },
                success: function(data) {
                    $('#modal_form').modal('hide');
                    reload_table();
                },
                error: function(jqXHR, textStatus, errorThrown) {
                    alert('Error deleting data');
                }
            });

        }
    }
</script>

<div class="modal fade" id="modal_form" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title">Form Situs Terkait</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body form">
                <?php
                $attributes = ['class' => 'form-horizontal', 'id' => 'form'];
                echo form_open_multipart('#', $attributes);
                ?>
                <input type="hidden" value="" name="id" />
                <input type="hidden" value="" name="_method" />
                <div class="form-body">
                    <div class="form-group">
                        <label class="col-sm-4 control-label">Nama Situs Terkait :</label>
                           <div class="col-sm-8">
                              <input name="situs_terkait" placeholder="Nama Situs Terkait" class="form-control" type="text">
                              <span class="invalid-feedback"></span>
                           </div>
                    </div>
                    
                    <div class='form-group'>
                        <label class='col-sm-4 control-label'>Logo :</label>
                        <div class='col-sm-8'>
                           <div id="preview_photo" class="mb-2"></div>
                           <input type='file' class='form-control' name='fupload' id="fupload">
                        </div>
                     </div>    
                     
                     <div class='form-group'>
                        <label class='col-sm-4 control-label'>Deskripsi :</label>
                        <div class='col-sm-8'>
                           <textarea name="deskripsi" id="deskripsi" class="form-control" rows="3"></textarea>
                        </div>
                     </div>    

                     <div class='form-group'>
                        <label class='col-sm-4 control-label'>Link :</label>
                        <div class='col-sm-8'>
                            <input name="link" placeholder="Link" class="form-control" type="text">
                            <span class="invalid-feedback"></span>
                        </div>
                     </div>    

                </div>
            </div>
            <div class="modal-footer">
                <?php echo form_submit('btnSave', 'Save', 'class="btn btn-primary"'); ?>
                <button type="button" class="btn btn-danger" data-dismiss="modal">Cancel</button>
            </div>
            <?php
            echo form_close();
            ?>

        </div>
    </div>
</div>