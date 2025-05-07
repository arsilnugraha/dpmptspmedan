
<div class='col-md-12'>
        <div class='box box-info'>
          <div class='box-header with-border'>
            <h3 class='box-title'><span class='glyphicon glyphicon-edit'></span><b> Form Edit Data Tentang</b></h3>
          </div>
          <div class='box-body'>
            <form class='form-horizontal' role='form' method=POST action='<?php echo base_url('panel/module/tentang/edit/do_edit')?>' enctype='multipart/form-data'>
              <input type="hidden" name="id" value="<?= $tentang->id; ?>">
                
              <div class='form-group'>
                <label class='col-sm-2 control-label'>Isi Tentang :</label>
                <div class='col-sm-9'>
                  <textarea id='summernote' class='form-control' name='isi_tentang' style='height:260px'><?= $tentang->tentang ?></textarea>
                </div>
              </div>

              <hr>

              <div class='form-group'>
                <div class='col-sm-2'></div>
                <div class='col-sm-2'>
                  <button type='submit' name='submit' class='btn btn-primary'>
                    <span class='glyphicon glyphicon-floppy-saved'></span> Simpan
                  </button>
                  <a href='<?php echo base_url('panel/module/tentang')?>' class='btn btn-danger pull-right'>
                    <span class='glyphicon glyphicon-floppy-remove'></span> Batal</button>
                  </a>
                </div>
              </div>

          </form>
          <hr>
        </div>
      </div>
    </div>

    <div style='clear:both'></div>
