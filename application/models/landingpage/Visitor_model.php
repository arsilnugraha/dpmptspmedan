<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitor_model extends CI_Model {
    
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }
    
    public function record_visit() {
        $ip = $this->input->ip_address();
        $date = date('Y-m-d');
        
        // Check if this IP has visited today
        $query = $this->db->where('ip_address', $ip)
                         ->where('DATE(visit_date)', $date)
                         ->get('visitor_logs');
                         
        if ($query->num_rows() == 0) {
            $data = array(
                'ip_address' => $ip,
                'visit_date' => date('Y-m-d H:i:s')
            );
            $this->db->insert('visitor_logs', $data);
        }
    }
    
    public function get_today_visits() {
        $date = date('Y-m-d');
        return $this->db->where('DATE(visit_date)', $date)
                       ->count_all_results('visitor_logs');
    }
    
    public function get_month_visits() {
         $year = date('Y'); 
         $month = date('m'); 
         return $this->db->where('MONTH(visit_date)', $month) ->where('YEAR(visit_date)', $year) ->count_all_results('visitor_logs');
    }
}