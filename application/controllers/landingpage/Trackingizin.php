<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Trackingizin extends CI_Controller {
    private $token = "";

    public function __construct() {
        parent::__construct();
        // Login otomatis saat controller diinisialisasi
        $this->login();
    }

    // Fungsi index untuk menampilkan view utama
    public function index() {
        $data['content'] = 'landingpage/cekresi/cekresi_view';
        $this->load->view('landingpage/master_page', $data);
    }

    // Fungsi login untuk mendapatkan token
    private function login() {
        // URL API login
        $login_url = "https://sipandumedan.medan.go.id/api/login";

        // Data login
        $auth_data = array(
            "Nama_OPD" => "DPMPTSP"
        );

        // Opsi cURL untuk request POST
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $login_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_POST => true,
            CURLOPT_POSTFIELDS => $auth_data,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Basic " . base64_encode("SIPANDUMEDAN:055a86098ae7c88d44dd30262c490bda52288a09"),
                "Accept: application/json"
            ),
        ));

        $response = curl_exec($curl);
        $error = curl_error($curl);
        curl_close($curl);

        if ($error) {
            log_message('error', "Login Error: $error");
            $this->token = null;
        } else {
            $result = json_decode($response, true);
            if (isset($result['Token'])) {
                $this->token = $result['Token'];
                // Simpan token ke session untuk digunakan kembali
                $this->session->set_userdata('api_token', $this->token);
            } else {
                log_message('error', "Login Failed: Token not found");
                $this->token = null;
            }
        }
    }

    // Fungsi cek resi yang menangani request AJAX
    public function cek_resi() {
        if (!$this->input->is_ajax_request()) {
            show_404();
            return;
        }

        // Response default
        $response = array(
            'status' => 'error',
            'message' => '',
            'data' => null
        );

        // Cek token
        $token = $this->session->userdata('api_token');
        if (empty($token)) {
            // Login ulang jika token tidak ada
            $this->login();
            $token = $this->token;
        }

        if (empty($token)) {
            $response['message'] = 'Gagal melakukan autentikasi';
            echo json_encode($response);
            return;
        }

        // Ambil input dari request AJAX
        $jenis = $this->input->post('trackingType');
        $value = $this->input->post('trackingNumber');

        if (empty($jenis) || empty($value)) {
            $response['message'] = 'Parameter tidak lengkap';
            echo json_encode($response);
            return;
        }

        // URL API untuk cek resi
        $api_url = "https://sipandumedan.medan.go.id/api/alur?" . $jenis . "=" . $value;

        // Request ke API
        $curl = curl_init();
        curl_setopt_array($curl, array(
            CURLOPT_URL => $api_url,
            CURLOPT_RETURNTRANSFER => true,
            CURLOPT_HTTPHEADER => array(
                "Authorization: Bearer " . $token,
                "Accept: application/json"
            ),
        ));

        $api_response = curl_exec($curl);
        $error = curl_error($curl);
        curl_close($curl);

        if ($error) {
            $response['message'] = "Terjadi kesalahan saat mengambil data";
            log_message('error', "API Error: $error");
        } else {
            $result = json_decode($api_response, true);
            if ($result) {
                $response['status'] = 'success';
                $response['data'] = $result;
            } else {
                $response['message'] = 'Data tidak ditemukan';
            }
        }

        // Return JSON response
        echo json_encode($response);
    }
}