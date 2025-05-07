<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Strukturorganisasi extends CI_Controller {

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
			$this->load->model('landingpage/profil/strukturorganisasi_model','dbObject');
  }

	public function index()
	{
		$output['content'] = 'landingpage/profil/strukturorganisasi/strukturorganisasi_view';
		$output['after_page'] = 'landingpage/profil/strukturorganisasi/strukturorganisasi_after_page';
      $output['strukturorganisasi'] = $this->dbObject->get_general('profil_struktur_organisasi');
      $this->load->view('landingpage/master_page', $output);
	}

}
