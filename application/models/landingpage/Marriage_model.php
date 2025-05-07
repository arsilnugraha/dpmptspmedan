<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marriage_model extends CI_Model {
    
    private $db_custom;
    private $db_connection_error = false;
    
    public function __construct() {
      parent::__construct();
      try {
          $this->db_custom = $this->load->database([
              'hostname' => '157.15.116.211',
              'username' => 'mpp_user',
              'password' => 'MPPAccess2024!',
              'database' => 'mpp_que',
              'dbdriver' => 'mysqli'
          ], TRUE);
          // Test the connection
          if (!$this->db_custom->conn_id || !$this->db_custom->simple_query('SELECT 1')) {
              $this->connection_error = true;
          }
      } catch (Exception $e) {
          $this->connection_error = true;
      }
    }
    
    // Check if there's a connection error
    public function has_connection_error() {
        return $this->db_connection_error;
    }
    
    // Get past marriages (all marriages before today)
    public function get_past_marriages() {
        if ($this->db_connection_error) {
            return 0;
        }
        
        date_default_timezone_set('Asia/Jakarta');
        $current_date = date('Y-m-d');
        $this->db_custom->where('marriage_date <', $current_date);
        return $this->db_custom->count_all_results('marriage_info');
    }
    
    // Get current year marriages
    public function get_current_year_marriages() {
        if ($this->db_connection_error) {
            return 0;
        }
        
        date_default_timezone_set('Asia/Jakarta');
        $current_year = date('Y');
        $this->db_custom->where('YEAR(marriage_date)', $current_year);
        return $this->db_custom->count_all_results('marriage_info');
    }
    
    // Get upcoming marriages
    public function get_upcoming_marriages() {
        if ($this->db_connection_error) {
            return 0;
        }
        
        date_default_timezone_set('Asia/Jakarta');
        $current_date = date('Y-m-d');
        $this->db_custom->where('marriage_date >', $current_date);
        return $this->db_custom->count_all_results('marriage_info');
    }
    
    // Get all marriages
    public function get_all_marriages() {
        if ($this->db_connection_error) {
            return array();
        }
        
        $this->db_custom->order_by('marriage_date', 'ASC');
        $query = $this->db_custom->get('marriage_info');
        return $query->result();
    }
    
    // Get marriage by ID
    public function get_marriage_by_id($id) {
        if ($this->db_connection_error) {
            return null;
        }
        
        $this->db_custom->where('id', $id);
        $query = $this->db_custom->get('marriage_info');
        return $query->row();
    }
    
    // Add new marriage
    public function add_marriage($data) {
        if ($this->db_connection_error) {
            return false;
        }
        
        return $this->db_custom->insert('marriage_info', $data);
    }
    
    // Update marriage
    public function update_marriage($id, $data) {
        if ($this->db_connection_error) {
            return false;
        }
        
        $this->db_custom->where('id', $id);
        return $this->db_custom->update('marriage_info', $data);
    }
    
    // Delete marriage
    public function delete_marriage($id) {
        if ($this->db_connection_error) {
            return false;
        }
        
        $this->db_custom->where('id', $id);
        return $this->db_custom->delete('marriage_info');
    }
    
    // Get marriages with pagination and search (for DataTables)
    public function get_marriages_datatable($limit, $start, $order, $dir, $search) {
        if ($this->db_connection_error) {
            return array(
                'data' => array(),
                'recordsTotal' => 0,
                'recordsFiltered' => 0
            );
        }
        
        $columns = array(
            0 => 'id',
            1 => 'marriage_date',
            2 => 'marriage_time',
            3 => 'groom_name',
            4 => 'groom_father_name',
            5 => 'bride_name',
            6 => 'bride_father_name'
        );
        
        $totalRecords = $this->db_custom->count_all_results('marriage_info');
        
        if(!empty($search)) {
            $this->db_custom->group_start();
            $this->db_custom->like('groom_name', $search);
            $this->db_custom->or_like('bride_name', $search);
            $this->db_custom->or_like('groom_father_name', $search);
            $this->db_custom->or_like('bride_father_name', $search);
            $this->db_custom->or_like('marriage_date', $search);
            $this->db_custom->group_end();
        }
        
        $totalRecordsWithFilter = $this->db_custom->count_all_results('marriage_info');
        
        if(!empty($search)) {
            $this->db_custom->group_start();
            $this->db_custom->like('groom_name', $search);
            $this->db_custom->or_like('bride_name', $search);
            $this->db_custom->or_like('groom_father_name', $search);
            $this->db_custom->or_like('bride_father_name', $search);
            $this->db_custom->or_like('marriage_date', $search);
            $this->db_custom->group_end();
        }
        
        // Use order parameter if provided, otherwise default to marriage_date ASC
        if(isset($columns[$order])) {
            $this->db_custom->order_by($columns[$order], $dir);
        } else {
            $this->db_custom->order_by('marriage_date', 'ASC');
        }
        
        $this->db_custom->limit($limit, $start);
        $query = $this->db_custom->get('marriage_info');
        $records = $query->result();
        
        return array(
            'data' => $records,
            'recordsTotal' => $totalRecords,
            'recordsFiltered' => $totalRecordsWithFilter
        );
    }

    public function get_today_marriages() {
        if ($this->db_connection_error) {
            return 0;
        }
        
        date_default_timezone_set('Asia/Jakarta');
        $today = date('Y-m-d');
        $this->db_custom->where('marriage_date', $today);
        return $this->db_custom->count_all_results('marriage_info');
    }
}