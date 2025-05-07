<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Saranalayanan extends CI_Controller {

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
			$this->load->model('landingpage/profil/saranalayanan_model','dbObject');
  }

	public function index()
	{
		$output['content'] = 'landingpage/profil/saranalayanan/saranalayanan_view';
		$output['after_page'] = 'landingpage/profil/saranalayanan/saranalayanan_after_page';
      $output['saranalayanan'] = $this->dbObject->get_general('profil_sarana_layanan');
      $output['rekankami'] = $this->dbObject->get_general('rekan_kami');
      $this->load->view('landingpage/master_page', $output);
	}

}
