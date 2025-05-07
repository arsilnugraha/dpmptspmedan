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
      
      
      $data = array(
         'countMasukCurrentYear' => $countMasukCurrentYear,
         'countMasukPreviousYear' => $countMasukPreviousYear,
         'countTerbitCurrentYear' => $countTerbitCurrentYear,
         'countTerbitPreviousYear' => $countTerbitPreviousYear,
         'RealisasiRetribusiCurrentYear' => $RealisasiRetribusiCurrentYear,
         'RealisasiRetribusiPreviousYear' => $RealisasiRetribusiPreviousYear
     );

     // Encode data sebagai JSON dan kembalikan sebagai response
     $this->output
      ->set_content_type('application/json')
      ->set_output(json_encode(["RECORDS" => $imb]));
	}

}
