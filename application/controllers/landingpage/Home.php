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
			// if ($this->session->userdata('login') == 0 ) redirect('landingpage/auth/logout');
			$this->load->model('landingpage/home_model','dbObject');
			$this->load->model('landingpage/Visitormpp_model');
			$this->load->model('landingpage/Marriage_model');
  }

	public function index()
	{
		$data['judul_besar'] = 'Home';
		$data['judul_kecil'] = '';
		$data['menu_aktif'] = 'home';
		$data['icon'] = 'fa fa-dashboard';
		$data['parent_master'] = 'active open';
		$data['content'] = 'landingpage/home/home_view';
		$data['after_page'] = 'landingpage/home/home_after_page';
      $data['portal'] = $this->dbObject->get_general('portal');
      $data['situs_terkait'] = $this->dbObject->get_general('situs_terkait');
      $data['berita'] = $this->dbObject->limit_berita_order_by('berita', 'tanggal', 'desc', 5);

		// Check for connection error
		$data['db_connection_error'] = $this->Visitormpp_model->has_connection_error();

		if ($data['db_connection_error']) {
			$data['total_sum'] = 0;
			$data['current_month_sum'] = 0;
			$data['last_month_sum'] = 0;
			$data['current_year_sum'] = 0;
			$data['last_year_sum'] = 0;
			$data['today_sum'] = 0;
		} else {
			// Your existing code to get data
			$data['total_visitors'] = $this->Visitormpp_model->get_total_visitors();
			$data['current_month'] = $this->Visitormpp_model->get_current_month_visitors();
			$data['last_month'] = $this->Visitormpp_model->get_last_month_visitors();
			$data['current_year'] = $this->Visitormpp_model->get_current_year_visitors();
			$data['last_year'] = $this->Visitormpp_model->get_last_year_visitors();
			$data['today_visitors'] = $this->Visitormpp_model->get_today_visitors();
			
			// Calculate totals
			$data['total_sum'] = array_sum(array_column($data['total_visitors'], 'jlh_antrian'));
			$data['current_month_sum'] = array_sum(array_column($data['current_month'], 'jlh_antrian'));
			$data['last_month_sum'] = array_sum(array_column($data['last_month'], 'jlh_antrian'));
			$data['current_year_sum'] = array_sum(array_column($data['current_year'], 'jlh_antrian'));
			$data['last_year_sum'] = array_sum(array_column($data['last_year'], 'jlh_antrian'));
			$data['today_sum'] = array_sum(array_column($data['today_visitors'], 'jlh_antrian'));
		}

		// Check for marriage connection error and get marriage data
		$data['marriage_db_error'] = $this->Marriage_model->has_connection_error();
		
		if ($data['marriage_db_error']) {
			$data['past_marriages'] = 0;
			$data['today_marriages'] = 0;
			$data['current_year_marriages'] = 0;
			$data['upcoming_marriages'] = 0;
		} else {
			// Get marriage statistics
			$data['past_marriages'] = $this->Marriage_model->get_past_marriages();
			$data['today_marriages'] = $this->Marriage_model->get_today_marriages();
			$data['current_year_marriages'] = $this->Marriage_model->get_current_year_marriages();
			$data['upcoming_marriages'] = $this->Marriage_model->get_upcoming_marriages();
		}

		$this->load->view('landingpage/master_page', $data);
	}

}
