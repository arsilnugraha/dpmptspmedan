<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

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
		$output['judul_besar'] = 'Home';
		$output['judul_kecil'] = '';
		$output['menu_aktif'] = 'home';
		$output['icon'] = 'fa fa-dashboard';
		$output['parent_master'] = 'active open';
		$output['content'] = 'panel/home/home_view';
		$output['after_page'] = 'panel/home/home_after_page';
      $this->load->view('panel/master_page', $output);
	}

}
