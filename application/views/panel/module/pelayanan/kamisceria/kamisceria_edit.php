
<div class='col-md-12'>
        <div class='box box-info'>
          <div class='box-header with-border'>
            <h3 class='box-title'><span class='glyphicon glyphicon-edit'></span><b> Form Edit Data Berita Kamis Ceria</b></h3>
          </div>
          <div class='box-body'>
            <form class='form-horizontal' role='form' method=POST action='<?php echo base_url('panel/module/pelayanan/kamisceria/edit/do_edit')?>' enctype='multipart/form-data'>
              <input type="hidden" name="id" value="<?= $kamisceria->id; ?>">
              <div class='form-group'>
                  <label class='col-sm-2 control-label'>Judul Berita Kamis Ceria :</label>
                  <div class='col-sm-9'>
                    <input type='text' class='form-control' name='judul' value="<?= $kamisceria->judul; ?>" required>
                  </div>
              </div>
			  
              <div class='form-group'>
                <label class='col-sm-2 control-label'>Gambar :</label>
                <div class='col-sm-9'>
                  <input type='file' class='form-control' name='fupload'>
                  <?php
                     if ($kamisceria->gambar != '') {
                        echo "Gambar Saat ini : <a target='_BLANK' href='" . base_url("assets/foto_beritakamisceria/$kamisceria->gambar") . "'>$kamisceria->gambar</a>";
                     }
                  ?>
                </div>
              </div>

              <div class='form-group'>
                  <label class='col-sm-2 control-label'>Caption Gambar :</label>
                  <div class='col-sm-9'>
                    <input type='text' class='form-control' name='gambar_caption' value="<?= $kamisceria->gambar_caption; ?>" required>
                  </div>
              </div>
                
              <div class='form-group'>
                <label class='col-sm-2 control-label'>Isi Berita Kamis Ceria :</label>
                <div class='col-sm-9'>
                  <textarea id='summernote' class='form-control' name='isi_berita' style='height:260px'><?= $kamisceria->isi_berita ?></textarea>
                </div>
              </div>

              <hr>

              <div class='form-group'>
                <div class='col-sm-2'></div>
                <div class='col-sm-2'>
                  <button type='submit' name='submit' class='btn btn-primary'>
                    <span class='glyphicon glyphicon-floppy-saved'></span> Simpan
                  </button>
                  <a href='<?php echo base_url('panel/module/berita')?>' class='btn btn-danger pull-right'>
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
