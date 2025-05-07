
      <div class='col-md-12'>
        <div class='box box-info'>
          <div class='box-header with-border'>
            <h3 class='box-title'><span class='glyphicon glyphicon-edit'></span><b> Form Tambah Data Berita Kios OSS</b></h3>
          </div>
          <div class='box-body'>
            <form class='form-horizontal' role='form' method=POST action='<?php echo base_url('panel/module/pelayanan/kiososs/tambah/do_create')?>' enctype='multipart/form-data'>
              <div class='form-group'>
                  <label class='col-sm-2 control-label'>Judul Berita Kios OSS :</label>
                  <div class='col-sm-9'>
                    <input type='text' class='form-control' name='judul' required>
                  </div>
              </div>
			  
              <div class='form-group'>
                <label class='col-sm-2 control-label'>Gambar :</label>
                <div class='col-sm-9'>
                  <input type='file' class='form-control' name='fupload' required>
                </div>
              </div>

              <div class='form-group'>
                  <label class='col-sm-2 control-label'>Caption Gambar :</label>
                  <div class='col-sm-9'>
                    <input type='text' class='form-control' name='gambar_caption' required>
                  </div>
              </div>
                
              <div class='form-group'>
                <label class='col-sm-2 control-label'>Isi Berita Kios OSS :</label>
                <div class='col-sm-9'>
                  <textarea id='summernote' class='form-control' name='isi_berita' required></textarea>
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
