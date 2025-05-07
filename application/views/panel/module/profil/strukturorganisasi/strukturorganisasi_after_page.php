<div class="modal fade" id="modal-default" role="dialog">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
               <h3 class="modal-title">Form Struktur Organisasi</h3>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            </div>
            <div class="modal-body form">
                <?php
                $attributes = ['class' => 'form-horizontal', 'id' => 'form'];
                echo form_open_multipart(site_url('panel/module/strukturorganisasi/update/'), $attributes);
                ?>
                <input type="hidden" value="" name="id" />
                <input type="hidden" value="" name="_method" />
                <div class="form-body">
                    <div class='form-group'>
                        <label class='col-sm-4 control-label'>Foto Struktur Organisasi :</label>
                        <div class='col-sm-8'>
                           <input type='file' class='form-control' name='file_strukturorganisasi' id="file_strukturorganisasi">
                        </div>
                     </div>       
                     
                     <div class='form-group'>
                        <label class='col-sm-4 control-label'>File Daftar ASN (pdf) :</label>
                        <div class='col-sm-8'>
                           <input type='file' class='form-control' name='file_asn' id="file_asn">
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