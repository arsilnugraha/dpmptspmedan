<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Marriageinfo extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('landingpage/Marriage_model');
        $this->load->library('pagination');
    }
    
    public function index() {
        // Get filter type from URL (default: all)
        $filter = $this->input->get('filter') ?: 'all';
        
        // Set page title based on filter
        $data['page_title'] = 'Informasi Pernikahan';
        switch ($filter) {
            case 'upcoming':
                $data['page_title'] = 'Informasi Pernikahan Mendatang';
                break;
            case 'current_year':
                $data['page_title'] = 'Informasi Pernikahan Tahun ' . date('Y');
                break;
            case 'past':
                $data['page_title'] = 'Informasi Pernikahan Sebelumnya';
                break;
            case 'today':
                $data['page_title'] = 'Informasi Pernikahan Hari Ini (' . date('d F Y') . ')';
                break;
        }
        
        // Statistics data
        $data['past_marriages'] = $this->Marriage_model->get_past_marriages();
        $data['today_marriages'] = $this->Marriage_model->get_today_marriages();
        $data['current_year_marriages'] = $this->Marriage_model->get_current_year_marriages();
        $data['upcoming_marriages'] = $this->Marriage_model->get_upcoming_marriages();
        
        // Pagination configuration
        $config['base_url'] = site_url('landingpage/marriageinfo/index?filter=' . $filter);
        $config['total_rows'] = 0;
        $config['per_page'] = 10;
        $config['page_query_string'] = TRUE;
        $config['query_string_segment'] = 'page';
        $config['use_page_numbers'] = TRUE;
        
        // Pagination styling
        $config['full_tag_open'] = '<nav aria-label="Page navigation"><ul class="pagination justify-content-center">';
        $config['full_tag_close'] = '</ul></nav>';
        $config['first_link'] = 'Pertama';
        $config['first_tag_open'] = '<li class="page-item">';
        $config['first_tag_close'] = '</li>';
        $config['last_link'] = 'Terakhir';
        $config['last_tag_open'] = '<li class="page-item">';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '&raquo;';
        $config['next_tag_open'] = '<li class="page-item">';
        $config['next_tag_close'] = '</li>';
        $config['prev_link'] = '&laquo;';
        $config['prev_tag_open'] = '<li class="page-item">';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="page-item active"><a class="page-link" href="#">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li class="page-item">';
        $config['num_tag_close'] = '</li>';
        $config['attributes'] = array('class' => 'page-link');
        
        // Get current page
        $page = $this->input->get('page') ?: 1;
        $offset = ($page - 1) * $config['per_page'];
        
        // Get marriages based on filter
        $marriages = array();
        $search = $this->input->get('search') ?: '';
        
        // Get all marriages first
        $all_marriages = $this->Marriage_model->get_all_marriages();
        
        // Apply filter to all marriages
        $filtered_marriages = array();
        $current_date = date('Y-m-d');
        $current_year = date('Y');
        
        foreach ($all_marriages as $marriage) {
            // Apply search filter if provided
            if (!empty($search)) {
                $search_term = strtolower($search);
                $searchable_text = strtolower($marriage->groom_name . ' ' . 
                                            $marriage->bride_name . ' ' . 
                                            $marriage->groom_father_name . ' ' . 
                                            $marriage->bride_father_name);
                
                if (strpos($searchable_text, $search_term) === false) {
                    continue;
                }
            }
            
            // Apply date filter
            switch ($filter) {
                case 'upcoming':
                    if ($marriage->marriage_date >= $current_date) {
                        $filtered_marriages[] = $marriage;
                    }
                    break;
                case 'current_year':
                    if (date('Y', strtotime($marriage->marriage_date)) == $current_year) {
                        $filtered_marriages[] = $marriage;
                    }
                    break;
                case 'past':
                    if ($marriage->marriage_date < $current_date) {
                        $filtered_marriages[] = $marriage;
                    }
                    break;
                case 'today':
                    if ($marriage->marriage_date == $current_date) {
                        $filtered_marriages[] = $marriage;
                    }
                    break;
                default:
                    $filtered_marriages[] = $marriage;
                    break;
            }
        }
        
        // Update total rows for pagination
        $config['total_rows'] = count($filtered_marriages);
        $this->pagination->initialize($config);
        
        // Apply pagination limit
        $marriages = array_slice($filtered_marriages, $offset, $config['per_page']);
        
        // Prepare data for view
        $data['marriages'] = $marriages;
        $data['pagination'] = $this->pagination->create_links();
        $data['current_filter'] = $filter;
        $data['search'] = $search;
        $data['total_filtered'] = count($filtered_marriages);
        
        // Load view
        $data['menu_aktif'] = 'marriageinfo';
        $data['content'] = 'landingpage/marriageinfo/index';
        $this->load->view('landingpage/master_page', $data);
    }
}