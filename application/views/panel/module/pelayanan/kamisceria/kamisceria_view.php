
<?php echo $this->session->flashdata('notif') ?>
      <div class='col-xs-12'>
         <div class='box'>
            <div class='box-header with-border'>
               <h3 class='box-title'><b> Daftar Berita Kamis Ceria</b></h3>
            </div>
            <div class='box-body'>
               <div class='form-group'>
                  
                     <a class='btn btn-success btn-sm' href='<?php echo base_url('panel/module/pelayanan/kamisceria/tambah')?>'><i class='fa fa-plus'></i> Add</a>
                     <button class='btn btn-default btn-sm' onclick="reload_table()"><i class='fa fa-refresh'></i> Reload</button>

               </div>
            </div>
            <div class='box-body'>
               <table id="datatable_ajax" class="table table-bordered table-striped" width="100%">
                  <thead style='background:#428bca;color:#fff;'>
                     <tr>
                        <th style='width:20px;text-align:center'>No.</th>
                        <th style="text-align:center;">Judul Berita Kamis Ceria</th>
                        <th style='width:100px;text-align:center'>Status</th>
                        <th style='width:100px;text-align:center'>Tgl Posting</th>
                        <th style='width:75px;text-align:center'>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
               </table>
            </div>
         </div>
      </div>
