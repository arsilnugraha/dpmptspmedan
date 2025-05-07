
<?php echo $this->session->flashdata('notif') ?>
      <div class='col-xs-12'>
         <div class='box'>
            <div class='box-header with-border'>
               <h3 class='box-title'><b> Struktur Organisasi</b></h3>
            </div>
            <div class='box-body'>
               <div class='form-group'>           
                  <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modal-default">
                     Edit
                  </button>
               </div>
            </div>
            
            <div class='box-body'>
               <table id="datatable_ajax" class="table table-bordered" width="100%">
                  <tr>
                     <th style="width: 25%;">Struktur Organisasi : </th>
                     <td><img src="<?php echo base_url('assets/foto_strukturorganisasi/' . $struktur_organisasi->gambar_struktur) ?>" style="width:500px; display: block; margin: 0 auto;"></td>
                  </tr>
                  <tr>
                     <th style="width: 25%;">Daftar ASN Organisasi : </th>
                     <td><a href="<?php echo base_url('assets/file_daftarasn/' . $struktur_organisasi->nama_asn_pdf) ?>" style="display: block;" target="_blank">Daftar Nama ASN DPMPTSP Kota Medan</a></td>
                  </tr>
               </table>
            </div>

         </div>
      </div>
