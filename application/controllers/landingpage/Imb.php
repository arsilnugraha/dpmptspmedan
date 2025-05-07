<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Imb extends CI_Controller {

	public function __construct()
      {
            parent::__construct();
            $this->load->model('landingpage/home_model','dbObject');
      }

	public function index()
	{
		$output['judul_besar'] = 'Dashboard IMB';
		$output['judul_kecil'] = '';
		$output['menu_aktif'] = 'dashboard_imb';
		$output['icon'] = 'fa fa-dashboard';
		$output['parent_master'] = 'active open';
		$output['content'] = 'landingpage/imb/imb_view';
		$output['after_page'] = 'landingpage/imb/imb_after_page';

            $imb = $this->dbObject->get_general('imb');

            $currentYear = date('Y');
            $previousYear = $currentYear - 1;

            $countMasukCurrentYear = 0;
            $countMasukPreviousYear = 0;
            $countTerbitCurrentYear = 0;
            $countTerbitPreviousYear = 0;
            $RealisasiRetribusiCurrentYear = 0;
            $RealisasiRetribusiPreviousYear = 0;

            // Iterate through the inner array directly
            foreach ($imb as $record) {
                  $tgl_masuk_year = date('Y', strtotime($record->tgl_masuk));
                  $tgl_terbit_year = date('Y', strtotime($record->tgl_terbit));

                  if ($tgl_masuk_year == $currentYear) {
                        $countMasukCurrentYear++;
                  }

                  if ($tgl_masuk_year == $previousYear) {
                        $countMasukPreviousYear++;
                  }

                  if ($tgl_terbit_year == $currentYear) {
                        $countTerbitCurrentYear++;
                        $RealisasiRetribusiCurrentYear += $record->retribusi;
                  }

                  if ($tgl_terbit_year == $previousYear) {
                        $countTerbitPreviousYear++;
                        $RealisasiRetribusiPreviousYear += $record->retribusi;
                  }

            }
            
            
            $output['currentYear'] = $currentYear;
            $output['previousYear'] = $previousYear;
            $output['countMasukPreviousYear'] = $countMasukPreviousYear;
            $output['countMasukCurrentYear'] = $countMasukCurrentYear;
            $output['countTerbitPreviousYear'] = $countTerbitPreviousYear;
            $output['countTerbitCurrentYear'] = $countTerbitCurrentYear;
            $output['RealisasiRetribusiPreviousYear'] = $RealisasiRetribusiPreviousYear;
            $output['RealisasiRetribusiCurrentYear'] = $RealisasiRetribusiCurrentYear;
            $this->load->view('landingpage/master_page', $output);
	}

}
