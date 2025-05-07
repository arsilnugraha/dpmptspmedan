<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Auth extends CI_Controller {

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
			$this->load->model('panel/Auth_model','dbObject');
  }

	public function index()
	{
		if (!empty($this->session->userdata('leveluser'))){
			redirect('panel/home');
		}else {
			$this->load->view('panel/login');
		}
	}

	public function login()
	{
			if (isset($_POST['submit'])){
				$username = $this->input->post('username');
				$data     = md5($this->input->post('password'));
				$pass = hash("sha512",$data);
				$result = $this->dbObject->get_login($username,$pass);
							if($result == TRUE) {
								foreach ($result as $row) {
									$data_user = array(
										'namauser' => $row->username,
										'namalengkap' => $row->nama_lengkap,
										'email' => $row->email,
										'passuser' => $row->password,
										'leveluser' => $row->level,
										'foto' => $row->foto,
										'upload_image_file_manager' => true,
										'login' => 1
									);
								}
								$this->session->set_userdata($data_user);
								redirect('panel/home');
						 }else{
							 $this->session->set_flashdata("notif","<div class='alert alert-danger'><center>Username atau Password anda tidak sesuai.<br>Atau akun anda sedang diblokir.</center></div>");
							 redirect('panel/auth');
						 }
				}else {
					redirect('panel/auth');
				}
	}

	public function logout()
	{
		$this->session->sess_destroy();
		redirect('panel/auth');
	}

}
