<script type="text/javascript">
    var save_method;
    var table;
    var TableAjax;

    TableAjax = function() {
        var handleRecords = function() {
            table = $('#datatable_ajax').DataTable({
                "processing": true,
                "serverSide": true,
                "pagingType": "full_numbers",
                "order": [],
                "ajax": {
                    "url": "<?php echo site_url('panel/module/berita/ajax_list') ?>",
                    "type": "POST",
                    data: function(dtRequest) {
                        dtRequest['<?php echo $this->security->get_csrf_token_name(); ?>'] = '<?php echo $this->security->get_csrf_hash(); ?>';
                        return dtRequest;
                    },
                },

                "columnDefs": [{
                    "targets": [-1, 0],
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
        $('#summernote').summernote({
            placeholder: 'Masukkan Isi Berita',
            tabsize: 2,
            height: 100
        });
    })

    function reload_table() {
        table.ajax.reload(null, false);
    }
    
    // CKEDITOR.replace('editor1' ,{
    //   filebrowserImageBrowseUrl : '../kcfinder'
    // });

    
</script>