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
                    "url": "<?php echo site_url('panel/module/submenu/ajax_list') ?>",
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
                url = "<?php echo site_url('panel/module/submenu/ajax_add') ?>";
            } else {
                url = "<?php echo site_url('panel/module/submenu/ajax_update') ?>";
            }

            // Create FormData object and append form data
            var formData = new FormData($(this)[0]);

            $.ajax({
               url: url,
               type: "post",
               dataType: "JSON",
               data: $(this).serialize(),
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

        $('#datatable_ajax').on('click', '#status', function() {
            var isChecked = $(this).prop('checked');
            var id = $(this).data('id');

            $.ajax({
                type: 'POST',
                url: "<?php echo site_url('panel/module/submenu/ajax_updatestatus') ?>",
                data: { id: id, status_aktif: isChecked ? 'Y' : 'N' },
                success: function(response) {
                    reload_table();
                },
                error: function(error) {
                    console.error('Ajax request failed: ' + error.statusText);
                }
            });
        })

    });

    function add_menu() {
        save_method = 'add';
        $('[name="_method"]').val("POST");
        $('#form')[0].reset();
        $('input').removeClass('is-invalid');
        $('.help-block').empty();
        $('#modal_form').modal('show');
        $('.modal-title').text('Tambah Menu');
    }

    function edit_submenu(id) {
        save_method = 'update';
        $('[name="_method"]').val("PUT");
        $('#form')[0].reset();
        $('input').removeClass('is-invalid');
        $('.help-block').empty();

        $.ajax({
            url: "<?php echo site_url('panel/module/submenu/ajax_edit/') ?>" + id,
            type: "GET",
            dataType: "JSON",
            success: function(data) {
                $('[name="id"]').val(data.id);
                $('[name="sub_menu"]').val(data.nama_submenu);
                $('[name="url"]').val(data.url);
                $('#modal_form').modal('show');
                $('.modal-title').text("Edit Menu");
            },
            error: function(jqXHR, textStatus, errorThrown) {
                alert('Error get data from ajax');
            }
        });
    }

    function reload_table() {
        table.ajax.reload(null, false);
    }

    function delete_submenu(id) {
        if (confirm('Are you sure delete this data?')) {
            $.ajax({
                url: "<?php echo site_url('panel/module/submenu/ajax_delete/') ?>" + id,
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
               <h3 class="modal-title">Form Menu</h3>
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
                        <label class="col-sm-3 control-label">Pilih Menu :</label>
                           <div class="col-sm-9">
                           <select class="form-control" name="menu_id">
                              <?php foreach ($menu as $r) { ?>
                                 <option value="<?php echo $r->id; ?>"><?php echo $r->nama_menu; ?></option>
                              <?php } ?>
                           </select>
                           </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Nama Sub Menu :</label>
                           <div class="col-sm-9">
                              <input name="sub_menu" placeholder="Nama Menu" class="form-control" type="text">
                              <span class="invalid-feedback"></span>
                           </div>
                    </div>
                    <div class="form-group">
                        <label class="col-sm-3 control-label">Url :</label>
                           <div class="col-sm-9">
                              <input name="url" placeholder="Url" class="form-control" type="text">
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