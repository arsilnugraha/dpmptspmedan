<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('landingpage/visitor_model');
    }
    
    public function record() {
        $this->visitor_model->record_visit();
        $data = array(
            'today' => $this->visitor_model->get_today_visits(),
            'month' => $this->visitor_model->get_month_visits()
        );
        echo json_encode($data);
    }
}