<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Strukturorganisasi extends CI_Controller {
   public function __construct()
   {
          parent::__construct();
          if ($this->session->userdata('login') == 0 || $this->session->userdata('leveluser') != ('admin' || 'operator')) redirect('panel/auth/logout');
          $this->load->model('panel/module/profil/strukturorganisasi_model','dbObject');
   }

   public function index() {
      $output['judul_besar'] = 'Profil';
		$output['judul_kecil'] = 'Struktur Organisasi';
		$output['menu_aktif'] = 'm_strukturorganisasi';
      $output['icon'] = 'fa fa-institution';
		$output['parent_master'] = 'active open';
		$output['content'] = 'panel/module/profil/strukturorganisasi/strukturorganisasi_view';
		$output['after_page'] = 'panel/module/profil/strukturorganisasi/strukturorganisasi_after_page';

      $output['struktur_organisasi'] = $this->dbObject->get_by_id(1);
      
      $this->load->view('panel/master_page', $output);
   }

   public function ajax_list()
	{
		$list = $this->dbObject->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $r) {

			$html = '<div class="btn-group btn-group-solid">
							<a href="javascript:void(0)" class="btn btn-sm btn-primary" style="margin-right:0px !important" title="Edit"
							onclick="edit_strukturorganisasi(\'' . $r->id . '\')">
							<i class="fa fa-edit"></i> </a>
							<a href="javascript:void(0)" class="btn btn-sm btn-danger" style="margin-right:0px !important" title="Delete"
							onclick="delete_strukturorganisasi(\'' . $r->id . '\')">
							<i class="fa fa-trash "></i> </a>
						</div>';

			$no++;
			$row = array();
			$row[] = $no;
			$row[] = '<img src="' . base_url('assets/foto_strukturorganisasi/' . $r->foto) . '" style="width:100px; display: block; margin: 0 auto;">';
			$row[] = $html;

			$data[] = $row;
		}

		$output = array(
			"draw" => $_POST['draw'],
			"recordsTotal" => $this->dbObject->count_all(),
			"recordsFiltered" => $this->dbObject->count_filtered(),
			"data" => $data,
		);

		echo json_encode($output);
	}

	public function ajax_edit()
	{
		$data = $this->dbObject->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
      $config['upload_path']          = 'assets/foto_strukturorganisasi';
      $config['allowed_types']        = "gif|jpg|png|jpeg|pdf";
      $config['max_size']             = 10000;
      $this->load->library('upload', $config);
      if($this->upload->do_upload('fupload')) {
         $data = array(
            'foto' => $this->upload->data('file_name'),
         );
      }
		$insert = $this->dbObject->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function update()
	{
		$id = 1;
      $data = array();
      $struktur_organisasi = $this->dbObject->get_by_id($id);

      $config_strukturorganisasi['upload_path'] = 'assets/foto_strukturorganisasi';
      $config_strukturorganisasi['allowed_types'] = "jpg|png|jpeg";
      $config_strukturorganisasi['max_size'] = 10000;

      $this->load->library('upload', $config_strukturorganisasi);
      var_dump($_FILES);
      if (!is_uploaded_file($_FILES['file_strukturorganisasi']['tmp_name']) && !is_uploaded_file($_FILES['file_asn']['tmp_name'])) {
         // Tidak ada file yang diunggah
         $this->session->set_flashdata('notif', '<div class="alert alert-danger">Tidak ada file yang diupload. Struktur organisasi gagal diubah.</div>');
         redirect('panel/module/strukturorganisasi');
     }

      if ($this->upload->do_upload('file_strukturorganisasi')) {
         if ($struktur_organisasi->gambar_struktur) {
            $path = './assets/foto_strukturorganisasi/';
            @unlink($path . $struktur_organisasi->gambar_struktur);
         }
         $data['gambar_struktur'] = $this->upload->data('file_name');
      } 
      else {
         // Handle upload error
         echo $this->upload->display_errors();
      }

      // Reset konfigurasi upload untuk file_asn
      $config_asn['upload_path'] = 'assets/file_daftarasn';
      $config_asn['allowed_types'] = "pdf";
      $config_asn['max_size'] = 100000;

      $this->upload->initialize($config_asn);

      if ($this->upload->do_upload('file_asn')) {
         if ($struktur_organisasi->nama_asn_pdf) {
            $path = './assets/file_daftarasn/';
            @unlink($path . $struktur_organisasi->nama_asn_pdf);
         }
         $data['nama_asn_pdf'] = $this->upload->data('file_name');
      } 
      else {
         // Handle upload error
         echo $this->upload->display_errors();
      }

      if($this->dbObject->update(array('id' => $id), $data) == TRUE){
         $this->session->set_flashdata('notif','<div class="alert alert-success">Struktur organisasi berhasil diubah</div>');
      }else {
         $this->session->set_flashdata('notif','<div class="alert alert-danger">Struktur organisasi gagal diubah</div>');
      }
      redirect('panel/module/strukturorganisasi');
	}

	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		if ($this->input->post('strukturorganisasi') == '') {
			$data['inputerror'][] = 'strukturorganisasi';
			$data['error_string'][] = 'Harus Diisi.';
			$data['status'] = FALSE;
		}

		if ($data['status'] === FALSE) {
			echo json_encode($data);
			exit();
		}
	}

}