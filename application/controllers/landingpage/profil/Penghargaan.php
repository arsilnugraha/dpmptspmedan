<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Penghargaan extends CI_Controller {

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
			$this->load->model('landingpage/profil/penghargaan_model','dbObject');
  }

	public function index()
	{
		$output['content'] = 'landingpage/profil/penghargaan/penghargaan_view';
		$output['after_page'] = 'landingpage/profil/penghargaan/penghargaan_after_page';
      $output['penghargaan'] = $this->dbObject->get_general('profil_penghargaan');
		$output['plugin'] = 'bootstrap5';
      $this->load->view('landingpage/master_page', $output);
	}

}
