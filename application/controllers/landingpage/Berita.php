<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Berita extends CI_Controller {

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
			$this->load->model('landingpage/berita_model','dbObject');
  }

	public function index($slug="")
	{
		if($slug) {
			$output['content'] = 'landingpage/berita/berita_view';
			$output['after_page'] = 'landingpage/berita/berita_after_page';
			$output['berita'] = $this->dbObject->get_by_column_general('berita', 'slug', $slug);
			$output['slug'] = $slug;
			if(!$output['berita']){
				show_404();
			}
		} else {
			// Load library pagination
			$this->load->library('pagination');

			// Konfigurasi pagination
			$config['base_url'] = base_url('landingpage/berita/index');
			$config['total_rows'] = $this->dbObject->count_general('berita');
			$config['per_page'] = 2; // Jumlah berita per halaman
			$config['uri_segment'] = 4; // Bagian dari URI yang menunjukkan nomor halaman
			$config['num_links'] = 2; // Jumlah link halaman yang ditampilkan sebelum dan sesudah link halaman saat ini
			$config['use_page_numbers'] = TRUE; // Gunakan nomor halaman sebagai bagian dari URI
	
			// Styling pagination
			$config['full_tag_open'] = '<ul class="pagination">';
			$config['full_tag_close'] = '</ul>';
			$config['first_link'] = 'First';
			$config['first_tag_open'] = '<li>';
			$config['first_tag_close'] = '</li>';
			$config['last_link'] = 'Last';
			$config['last_tag_open'] = '<li>';
			$config['last_tag_close'] = '</li>';
			$config['next_link'] = '&raquo;';
			$config['next_tag_open'] = '<li>';
			$config['next_tag_close'] = '</li>';
			$config['prev_link'] = '&laquo;';
			$config['prev_tag_open'] = '<li>';
			$config['prev_tag_close'] = '</li>';
			$config['cur_tag_open'] = '<li class="active"><a>';
			$config['cur_tag_close'] = '</a></li>';
			$config['num_tag_open'] = '<li>';
			$config['num_tag_close'] = '</li>';
	
			// Initialize pagination
			$this->pagination->initialize($config);
	
			// Mengambil nomor halaman dari URI
			$page = ($this->uri->segment(4)) ? $this->uri->segment(4) : 1;
	
			// Menghitung offset (mulai data)
			$offset = ($page - 1) * $config['per_page'];
	
			// Mengambil data berita dari database
			$output['berita'] = $this->dbObject->get_general_berita('berita', $config['per_page'], $offset);

	
			// Menampilkan view dengan data berita dan pagination
			$output['content'] = 'landingpage/berita/general_berita_view';
			$output['after_page'] = 'landingpage/berita/general_berita_after_page';
		}
		
		$this->load->view('landingpage/master_page', $output);
	}
	

}
