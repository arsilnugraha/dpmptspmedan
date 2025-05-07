<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Portal extends CI_Controller {
   public function __construct()
   {
          parent::__construct();
          if ($this->session->userdata('login') == 0 || $this->session->userdata('leveluser') != ('admin' || 'operator')) redirect('panel/auth/logout');
          $this->load->model('panel/module/portal_model','dbObject');
   }

   public function index() {
      $output['judul_besar'] = 'Portal';
		$output['judul_kecil'] = '';
		$output['menu_aktif'] = 'm_portal';
      $output['icon'] = 'fa fa-globe';
		$output['parent_master'] = 'active open';
		$output['content'] = 'panel/module/portal/portal_view';
		$output['after_page'] = 'panel/module/portal/portal_after_page';
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
							onclick="edit_portal(\'' . $r->id . '\')">
							<i class="fa fa-edit"></i> </a>
							<a href="javascript:void(0)" class="btn btn-sm btn-danger" style="margin-right:0px !important" title="Delete"
							onclick="delete_portal(\'' . $r->id . '\')">
							<i class="fa fa-trash "></i> </a>
						</div>';

			$no++;
			$row = array();
			$row[] = $no;
			$row[] = '<img src="' . base_url('assets/logo_portal/' . $r->logo) . '" style="width:100px; display: block; margin: 0 auto;">';
			$row[] = $r->nama_portal;
			$row[] = $r->deskripsi;
			$row[] = $r->link;
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

	public function ajax_edit($id)
	{
		$data = $this->dbObject->get_by_id($id);
		echo json_encode($data);
	}

	public function ajax_add()
	{
      $config['upload_path']          = 'assets/logo_portal';
      $config['allowed_types']        = "gif|jpg|png|jpeg|pdf";
      $config['max_size']             = 10000;
      $this->load->library('upload', $config);
      if($this->upload->do_upload('fupload')) {
         $data = array(
            'nama_portal' => $this->input->post('portal'),
            'deskripsi' => $this->input->post('deskripsi'),
            'link' => $this->input->post('link'),
            'logo' => $this->upload->data('file_name'),
         );
      } else {
         $data = array(
            'nama_portal' => $this->input->post('portal'),
            'deskripsi' => $this->input->post('deskripsi'),
            'link' => $this->input->post('link'),
         );
      }
		$insert = $this->dbObject->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		// $this->_validate();
      $id = $this->input->post('id');
		$config['upload_path']          = 'assets/logo_portal';
      $config['allowed_types']        = "gif|jpg|png|jpeg|pdf";
      $config['max_size']             = 10000;
      $this->load->library('upload', $config);
      if($this->upload->do_upload('fupload')) {
         $portal = $this->dbObject->get_by_id($id);
         if($portal->logo) {
            $path = './assets/logo_portal/';
            @unlink($path.$portal->logo);
         }
         $data = array(
            'nama_portal' => $this->input->post('portal'),
            'deskripsi' => $this->input->post('deskripsi'),
            'link' => $this->input->post('link'),
            'logo' => $this->upload->data('file_name'),
         );
      } else {
         $data = array(
            'nama_portal' => $this->input->post('portal'),
            'deskripsi' => $this->input->post('deskripsi'),
            'link' => $this->input->post('link'),
         );
      }
		$this->dbObject->update(array('id' => $id), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
      $portal = $this->dbObject->get_by_id($id);
      if($portal->logo) {
         $path = './assets/logo_rekankami/';
         @unlink($path.$portal->logo);
      }
		$this->dbObject->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}


	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		if ($this->input->post('portal') == '') {
			$data['inputerror'][] = 'portal';
			$data['error_string'][] = 'Harus Diisi.';
			$data['status'] = FALSE;
		}

		if ($data['status'] === FALSE) {
			echo json_encode($data);
			exit();
		}
	}

}