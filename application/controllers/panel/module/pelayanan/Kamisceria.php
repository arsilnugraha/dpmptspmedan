<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kamisceria extends CI_Controller {
   public function __construct()
   {
          parent::__construct();
          if ($this->session->userdata('login') == 0 || $this->session->userdata('leveluser') != ('admin' || 'operator')) redirect('panel/auth/logout');
          $this->load->model('panel/module/pelayanan/kamisceria_model','dbObject');
   }

   public function index() {
      $output['judul_besar'] = 'Pelayanan';
		$output['judul_kecil'] = 'Kamis Ceria';
		$output['menu_aktif'] = 'm_kamisceria';
      $output['icon'] = 'fa fa-clipboard';
		$output['parent_master'] = 'active open';
		$output['content'] = 'panel/module/pelayanan/kamisceria/kamisceria_view';
		$output['after_page'] = 'panel/module/pelayanan/kamisceria/kamisceria_after_page';
      $this->load->view('panel/master_page', $output);
   }

   public function ajax_list() {
		$list = $this->dbObject->get_datatables();
		$data = array();
		$no = $_POST['start'];
		foreach ($list as $r) {

			$html = '<div class="btn-group btn-group-solid">
                  <a class="btn btn-'.($r->status == 'Y' ? 'warning' : 'success').' btn-xs" data-toggle="tooltip" title="'.($r->status == 'Y' ? 'Hentikan Publikasi Berita' : 'Publikasikan Berita').'" href="' . base_url('panel/module/pelayanan/kamisceria/publish') . '/' . $r->id . '/' . $r->status . '">
                     <span class="'.($r->status == 'Y' ? 'fa fa-times-circle' : 'fa fa-check-circle').'"></span>
                  </a>
                  <a class="btn btn-primary btn-xs" data-toggle="tooltip" title="Ubah Data" href="' . base_url('panel/module/pelayanan/kamisceria/edit') . '/' . $r->id . '">
                     <span class="fa fa-pencil"></span>
                  </a>
                  <a class="btn btn-danger btn-xs" data-toggle="tooltip" title="Hapus Data" href="' . base_url('panel/module/pelayanan/kamisceria/hapus/') . $r->id . '" onclick="return confirm(\'Apa anda yakin untuk hapus Data ini?\')">
                     <span class="fa fa-trash"></span>
                  </a>
               </div>';

			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $r->judul;
			$row[] = $r->status == 'Y' ? "<span style='color:green'>Published</span>" : "<span style='color:red'>Unpublished</span>";
			$row[] = tgl_indo($r->tanggal);
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

   public function tambah($param1='') {

      if ($param1=='do_create') {
         $config['upload_path']          = 'assets/foto_beritakamisceria';
         $config['allowed_types']        = "gif|jpg|png|jpeg|pdf";
         $config['max_size']             = 10000;
         $config['file_name'] = url_title($this->input->post('judul'), 'dash', TRUE) . date('YmdHis');
         $this->load->library('upload', $config);

         $tgl_sekarang = date("Ymd");
         if($this->upload->do_upload('fupload')) {
            $databerita = array(
               'judul' => $this->input->post('judul'),
               'slug' => url_title($this->input->post('judul'), 'dash', TRUE),
               'gambar' => $this->upload->data('file_name'),
               'gambar_caption' => $this->input->post('gambar_caption'),
               'isi_berita' => $this->input->post('isi_berita'),
               'kutipan_berita' => substr(strip_tags($this->input->post('isi_berita')), 0, 200),
               'tanggal' => $tgl_sekarang,
            );
         } else {
            $databerita = array(
               'judul' => $this->input->post('judul'),
               'slug' => url_title($this->input->post('judul'), 'dash', TRUE),
               'isi_berita' => $this->input->post('isi_berita'),
               'gambar_caption' => $this->input->post('gambar_caption'),
               'kutipan_berita' => substr(strip_tags($this->input->post('isi_berita')), 0, 200),
               'tanggal' => $tgl_sekarang,
            );
         }
         
         if($this->dbObject->save($databerita)==TRUE){
            $this->session->set_flashdata('notif','<div class="alert alert-success">Berita berhasil ditambahkan</div>');
         }else {
            $this->session->set_flashdata('notif','<div class="alert alert-danger">Berita gagal ditambahkan</div>');
         }
         redirect('panel/module/pelayanan/kamisceria');
      }

      $output['judul_besar'] = 'Berita';
		$output['judul_kecil'] = '';
		$output['menu_aktif'] = 'm_berita';
      $output['icon'] = 'fa fa-cog';
		$output['parent_master'] = 'active open';
		$output['content'] = 'panel/module/pelayanan/kamisceria/kamisceria_tambah';
		$output['after_page'] = 'panel/module/pelayanan/kamisceria/kamisceria_after_page';
      $this->load->view('panel/master_page', $output);
   }

   public function publish() {

      $id = $this->uri->segment(5);
      $status = $this->uri->segment(6);
      if ($status=='N')
      {
         $publish = 'Y';
      }
      else{
         $publish = 'N';
      }
      $this->dbObject->update(['id' => $id ], ['status' => $publish]);
      $this->session->set_flashdata('notif','<div class="alert alert-success">Status berhasil diubah</div>');
      redirect('panel/module/pelayanan/kamisceria');
   }

   public function hapus() {
      $kamisceria = $this->dbObject->get_by_id($this->uri->segment(6));
      if($kamisceria->gambar) {
         $path = './assets/foto_beritakamisceria/'; 
         @unlink($path.$kamisceria->gambar);
      }
      $id = $this->uri->segment(6);
      $this->dbObject->delete_by_id($id);
      $this->session->set_flashdata('notif','<div class="alert alert-success">Berita berhasil dihapus</div>');
      redirect('panel/module/pelayanan/kamisceria');
   }

   public function edit($param1) {
      if ($param1=='do_edit') {
         $config['upload_path']          = 'assets/foto_beritakamisceria';
         $config['allowed_types']        = "gif|jpg|png|jpeg|pdf";
         $config['max_size']             = 10000;
         $config['file_name'] = url_title($this->input->post('judul'), 'dash', TRUE) . '_' . date('YmdHis');
         $this->load->library('upload', $config);

         $tgl_sekarang = date("Ymd");
         if($this->upload->do_upload('fupload')) {
            $kamisceria = $this->dbObject->get_by_id($this->input->post('id'));
            if($kamisceria->gambar) {
               $path = './assets/foto_beritakamisceria/';
               @unlink($path.$kamisceria->gambar);
            }
            $databerita = array(
               'judul' => $this->input->post('judul'),
               'slug' => url_title($this->input->post('judul'), 'dash', TRUE),
               'gambar' => $this->upload->data('file_name'),
               'gambar_caption' => $this->input->post('gambar_caption'),
               'isi_berita' => $this->input->post('isi_berita'),
               'kutipan_berita' => substr(strip_tags($this->input->post('isi_berita')), 0, 200),
               'tanggal' => $tgl_sekarang,
            );
         } else {
            $databerita = array(
               'judul' => $this->input->post('judul'),
               'slug' => url_title($this->input->post('judul'), 'dash', TRUE),
               'gambar_caption' => $this->input->post('gambar_caption'),
               'isi_berita' => $this->input->post('isi_berita'),
               'kutipan_berita' => substr(strip_tags($this->input->post('isi_berita')), 0, 200),
               'tanggal' => $tgl_sekarang,
            );
         }
         if($this->dbObject->update(['id' => $this->input->post('id')], $databerita)==TRUE){
            $this->session->set_flashdata('notif','<div class="alert alert-success">Berita berhasil diubah</div>');
         }else {
            $this->session->set_flashdata('notif','<div class="alert alert-danger">Berita gagal diubah</div>');
         }
         redirect('panel/module/pelayanan/kamisceria');
      }
      $output['icon'] = 'fa fa-cog';
      $output['judul_besar'] = 'Kamis Ceria';
		$output['judul_kecil'] = '';
		$output['menu_aktif'] = 'm_kamisceria';
		$output['parent_master'] = 'active open';
		$output['content'] = 'panel/module/pelayanan/kamisceria/kamisceria_edit';
		$output['after_page'] = 'panel/module/pelayanan/kamisceria/kamisceria_after_page';
      $id = $this->uri->segment(6);
      $output['kamisceria'] = $this->dbObject->get_by_id($id);
      $this->load->view('panel/master_page', $output);
   }
   
}