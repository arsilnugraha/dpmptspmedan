
<?php echo $this->session->flashdata('notif') ?>
      <div class='col-xs-12'>
         <div class='box'>
            <div class='box-header with-border'>
               <h3 class='box-title'><b> Sekilas DPMPTSP Medan</b></h3>
            </div>
            <div class='box-body'>
               <div class='form-group'>        
                  <a class='btn btn-primary' href='<?php echo base_url('panel/module/tentang/edit')?>'><i class='fa fa-edit'></i> Edit</a>   
               </div>
            </div>
            
            <div class='box-body'>
               <?php
                  echo $tentang->tentang;
               ?>
            </div>

         </div>
      </div>
