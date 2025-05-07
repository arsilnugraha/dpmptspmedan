<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Menu extends CI_Controller {
   public function __construct()
   {
          parent::__construct();
          if ($this->session->userdata('login') == 0 || $this->session->userdata('leveluser') != ('admin' || 'operator')) redirect('panel/auth/logout');
          $this->load->model('panel/module/pengaturan/menu_model','dbObject');
   }

   public function index() {
      $output['judul_besar'] = 'Pengaturan';
		$output['judul_kecil'] = 'Menu';
		$output['menu_aktif'] = 'm_menu';
		$output['parent_master'] = 'active open';
		$output['icon'] = 'fa fa-cog';
		$output['content'] = 'panel/module/pengaturan/menu/menu_view';
		$output['after_page'] = 'panel/module/pengaturan/menu/menu_after_page';
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
							onclick="edit_submenu(\'' . $r->id . '\')">
							<i class="fa fa-edit"></i> </a>
							<a href="javascript:void(0)" class="btn btn-sm btn-danger" style="margin-right:0px !important" title="Delete"
							onclick="delete_submenu(\'' . $r->id . '\')">
							<i class="fa fa-trash "></i> </a>
						</div>';

			$no++;
			$row = array();
			$row[] = $no;
			$row[] = $r->nama_menu;
			$row[] = $r->url;
			$row[] = '<div class="checkbox">
							<label>
								<input type="checkbox" id="status" data-id="' . $r->id . '" ' . ($r->status_aktif == 'Y' ? 'checked' : '') . '>
								Aktif
							</label>
						</div>';
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
      $data = array(
         'nama_menu' => $this->input->post('menu'),
         'url' => $this->input->post('url'),
      );
		$insert = $this->dbObject->save($data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_updatestatus()
	{
		$id = $this->input->post('id');
		$data = array(
         'status_aktif' => $this->input->post('status_aktif'),
      );
		$this->dbObject->update(array('id' => $id), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_update()
	{
		// $this->_validate();
      $id = $this->input->post('id');
		$data = array(
         'nama_menu' => $this->input->post('menu'),
         'url' => $this->input->post('url'),
      );
		$this->dbObject->update(array('id' => $id), $data);
		echo json_encode(array("status" => TRUE));
	}

	public function ajax_delete($id)
	{
		$this->dbObject->delete_by_id($id);
		echo json_encode(array("status" => TRUE));
	}


	private function _validate()
	{
		$data = array();
		$data['error_string'] = array();
		$data['inputerror'] = array();
		$data['status'] = TRUE;
		if ($this->input->post('menu') == '') {
			$data['inputerror'][] = 'menu';
			$data['error_string'][] = 'Harus Diisi.';
			$data['status'] = FALSE;
		}

		if ($data['status'] === FALSE) {
			echo json_encode($data);
			exit();
		}
	}

}