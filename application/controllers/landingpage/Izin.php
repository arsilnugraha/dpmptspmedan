<?php 
defined('BASEPATH') OR exit('No direct script access allowed');

class Izin extends CI_Controller {
    private $token = "";

    public function __construct() {
        parent::__construct();
        $this->login();
    }

    public function index() {
        $data['menu_aktif'] = 'syarat_izin';
        $data['content'] = 'landingpage/izin/syarat_izin_view';
        $data['plugin'] = 'bootstrap5';
        
        
        $token = $this->session->userdata('api_token');
        if (empty($token)) {
            $this->login();
            $token = $this->token;
        }

        if (!empty($token)) {
            $api_url = "https://sipandumedan.medan.go.id/api/listpersyaratan";
            
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

            if (!$error) {
                $result = json_decode($api_response, true);
                if ($result) {
                    $data['izin_data'] = $result;
                } else {
                    $data['error_message'] = 'Data tidak ditemukan';
                }
            } else {
                $data['error_message'] = 'Terjadi kesalahan saat mengambil data';
                log_message('error', "API Error: $error");
            }
        } else {
            $data['error_message'] = 'Gagal melakukan autentikasi';
        }

        $this->load->view('landingpage/master_page', $data);
    }

    private function login() {
        $login_url = "https://sipandumedan.medan.go.id/api/login";

        $auth_data = array(
            "Nama_OPD" => "DPMPTSP"
        );

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
                $this->session->set_userdata('api_token', $this->token);
            } else {
                log_message('error', "Login Failed: Token not found");
                $this->token = null;
            }
        }
    }
}