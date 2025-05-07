<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imb extends CI_Controller {

	/**
	 * Index Page for this controller.
	 *
	 * Maps to the following URL
	 * 		http://example.com/index.php/welcome
	 *	- or -
	 * 		http://example.com/index.php/welcome/index
	 *	- or -
	 * Since this controller is set as the default controller in
	 * config/routes.php, it's displayed at http://example.com/
	 *
	 * So any other public methods not prefixed with an underscore will
	 * map to /index.php/welcome/<method_name>
	 * @see https://codeigniter.com/user_guide/general/urls.html
	 *///
	public function __construct()
  {
			parent::__construct();
			if ($this->session->userdata('login') == 0 ) redirect('panel/auth/logout');
			$this->load->model('panel/home_model','dbObject');
  }

	public function index()
	{
		$output['judul_besar'] = 'IMB';
		$output['judul_kecil'] = '';
		$output['menu_aktif'] = 'm_imb';
		$output['icon'] = 'fa fa-upload';
		$output['parent_master'] = 'active open';
		$output['content'] = 'panel/module/imb/imb_view';
      $this->load->view('panel/master_page', $output);
	}

   public function update()
   {
      // Get the current file path
      $config['upload_path'] = 'assets/landingpage/';
      $config['allowed_types'] = "json";
      $config['max_size'] = 10000;
      $config['file_name'] = 'QRY_LIST_IMB_JSON';
      
      $this->load->library('upload', $config);
      
      
      $currentFilePath = './assets/landingpage/QRY_LIST_IMB_JSON.json';
      // Check if the uploaded file has the allowed type
      // Check if a file is uploaded
      if (!empty($_FILES['imb_file']['name'])) {
        // Get the file extension
        $file_extension = pathinfo($_FILES['imb_file']['name'], PATHINFO_EXTENSION);

        // Check if the file type is either JSON or SQL
        if ($file_extension === 'json') {
            if (file_exists($currentFilePath) && is_readable($currentFilePath)) {
                // Delete the existing file
                @unlink($currentFilePath);
            }
        
            // Continue with the upload process
            if ($this->upload->do_upload('imb_file')) {
                $this->session->set_flashdata('notif', '<div class="alert alert-success">Data IMB berhasil diupdate</div>');
            } else {
                $this->session->set_flashdata('notif', '<div class="alert alert-danger">Data IMB gagal diupdate</div>');
            }
        } else {
            $this->session->set_flashdata('notif', '<div class="alert alert-danger">Tipe file tidak valid. Harap upload file JSON atau sql.</div>');
        }
      }
      
      redirect('panel/module/imb');
   }

}
