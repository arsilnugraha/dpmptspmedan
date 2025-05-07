
<?php echo $this->session->flashdata('notif') ?>
      <div class='col-xs-12'>
         <div class='box'>
            <div class='box-header with-border'>
               <h3 class='box-title'><b> IMB </b></h3>
            </div>
            <div class='box-body'>
               <form class='form-horizontal' role='form' method=POST action='<?php echo base_url('panel/module/imb/update')?>' enctype='multipart/form-data'>
                  <div class='form-group'>
                        <label class='col-sm-2 control-label'>Input Data IMB (.json)</label>
                        <div class='col-sm-9'>
                        <input type='file' class='form-control' name='imb_file' required>
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
            </div>
         </div>
      </div>
