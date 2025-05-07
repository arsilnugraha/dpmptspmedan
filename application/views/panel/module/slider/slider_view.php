
<?php echo $this->session->flashdata('notif') ?>
      <div class='col-xs-12'>
         <div class='box'>
            <div class='box-header with-border'>
               <h3 class='box-title'><b> Slider</b></h3>
            </div>
            <div class='box-body'>
               <div class='form-group'>           
                  <button class="btn btn-success btn-sm" onclick="add_slider()"><i class="fa fa-plus"></i> Add</button>
                  <button class="btn btn-default btn-sm" onclick="reload_table()"><i class="fa fa-refresh"></i> Reload</button>
               </div>
            </div>
            <div class='box-body'>
               <table id="datatable_ajax" class="table table-bordered table-striped" width="100%">
                  <thead style='background:#428bca;color:#fff;'>
                     <tr>
                        <th style='width:5%;text-align:center'>No.</th>
                        <th style="width:10%;text-align:center;">Gambar</th>
                        <th style='width:10%;text-align:center'>Aksi</th>
                     </tr>
                  </thead>
                  <tbody>
                  
                  </tbody>
               </table>
            </div>
         </div>
      </div>
