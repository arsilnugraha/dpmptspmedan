<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Slider extends CI_Controller {

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
  }

	public function index()
	{
		$data['judul_besar'] = 'Slider';
		// $data['content'] = 'landingpage/slider/slider_view';
		// $data['after_page'] = 'landingpage/slider/slider_after_page';
      $data['slider'] =  $this->db->get('slider')->result();		
      $this->load->view('landingpage/slider/slider_view', $data);
	}

}
