<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Visitormpp extends CI_Controller {
    
    public function __construct() {
        parent::__construct();
        $this->load->model('landingpage/Visitormpp_model');
    }
    
    public function index() {
        // Get department level statistics
        $data['total_visitors'] = $this->Visitormpp_model->get_total_visitors();
        $data['current_month'] = $this->Visitormpp_model->get_current_month_visitors();
        $data['last_month'] = $this->Visitormpp_model->get_last_month_visitors();
        $data['current_year'] = $this->Visitormpp_model->get_current_year_visitors();
        $data['last_year'] = $this->Visitormpp_model->get_last_year_visitors();
        $data['today_visitors'] = $this->Visitormpp_model->get_today_visitors();
        
        // Get tenant level statistics
        $data['total_tenant_visitors'] = $this->Visitormpp_model->get_total_tenant_visitors();
        $data['current_month_tenant'] = $this->Visitormpp_model->get_current_month_tenant_visitors();
        $data['last_month_tenant'] = $this->Visitormpp_model->get_last_month_tenant_visitors();
        $data['current_year_tenant'] = $this->Visitormpp_model->get_current_year_tenant_visitors();
        $data['last_year_tenant'] = $this->Visitormpp_model->get_last_year_tenant_visitors();
        $data['today_tenant_visitors'] = $this->Visitormpp_model->get_today_tenant_visitors();
        
        // Calculate totals for department level
        $data['total_sum'] = array_sum(array_column($data['total_visitors'], 'jlh_antrian'));
        $data['current_month_sum'] = array_sum(array_column($data['current_month'], 'jlh_antrian'));
        $data['last_month_sum'] = array_sum(array_column($data['last_month'], 'jlh_antrian'));
        $data['current_year_sum'] = array_sum(array_column($data['current_year'], 'jlh_antrian'));
        $data['last_year_sum'] = array_sum(array_column($data['last_year'], 'jlh_antrian'));
        $data['today_sum'] = array_sum(array_column($data['today_visitors'], 'jlh_antrian'));
        
        $data['menu_aktif'] = 'visitormpp';
        $data['content'] = 'landingpage/mpp/visitor_statistics_mpp_view';
        $this->load->view('landingpage/master_page', $data);
    }

    public function export_excel($type = 'total') {
        // Load PhpSpreadsheet library
        require_once APPPATH . 'third_party/PhpSpreadsheet/vendor/autoload.php';
        
        // Membuat objek spreadsheet baru
        $spreadsheet = new \PhpOffice\PhpSpreadsheet\Spreadsheet();
        $sheet = $spreadsheet->getActiveSheet();
        
        // Mendapatkan data sesuai dengan jenis yang dipilih
        $title = '';
        $data = [];
        $detail_data = true; // Default view detail (termasuk departemen)
        
        switch ($type) {
            case 'total':
                $title = 'Total Kunjungan MPP Kota Medan';
                $data = $this->Visitormpp_model->get_total_visitors();
                break;
            case 'today':
                $title = 'Kunjungan MPP Kota Medan Hari Ini';
                $data = $this->Visitormpp_model->get_today_visitors();
                break;
            case 'current_month':
                $title = 'Kunjungan MPP Kota Medan Bulan Ini';
                $data = $this->Visitormpp_model->get_current_month_visitors();
                break;
            default:
                $title = 'Kunjungan MPP Kota Medan';
                $data = $this->Visitormpp_model->get_total_visitors();
                break;
        }
        
        // Setting header spreadsheet
        $sheet->setCellValue('A1', $title);
        $sheet->mergeCells('A1:C1');
        $sheet->getStyle('A1')->getFont()->setBold(true);
        $sheet->getStyle('A1')->getFont()->setSize(14);
        
        // Setting header tabel
        $sheet->setCellValue('A3', 'Tenant');
        $sheet->setCellValue('B3', 'Departemen');
        $sheet->setCellValue('C3', 'Jumlah Kunjungan');
        $sheet->getStyle('A3:C3')->getFont()->setBold(true);
        
        // Mengisi data
        $row = 4;
        foreach ($data as $item) {
            $sheet->setCellValue('A' . $row, $item->tenant_name);
            $sheet->setCellValue('B' . $row, $item->dept_name);
            $sheet->setCellValue('C' . $row, $item->jlh_antrian);
            $row++;
        }
        
        // Mengatur lebar kolom
        $sheet->getColumnDimension('A')->setWidth(25);
        $sheet->getColumnDimension('B')->setWidth(25);
        $sheet->getColumnDimension('C')->setWidth(18);
        
        // Format number untuk kolom jumlah kunjungan
        $lastRow = count($data) + 3;
        $sheet->getStyle('C4:C' . $lastRow)->getNumberFormat()->setFormatCode('#,##0');
        
        // Mengatur border tabel
        $styleArray = [
            'borders' => [
                'allBorders' => [
                    'borderStyle' => \PhpOffice\PhpSpreadsheet\Style\Border::BORDER_THIN,
                ],
            ],
        ];
        $sheet->getStyle('A3:C' . $lastRow)->applyFromArray($styleArray);
        
        // Menambahkan total
        $row = $lastRow + 1;
        $sheet->setCellValue('B' . $row, 'TOTAL');
        $sheet->setCellValue('C' . $row, '=SUM(C4:C' . $lastRow . ')');
        $sheet->getStyle('B' . $row . ':C' . $row)->getFont()->setBold(true);
        $sheet->getStyle('C' . $row)->getNumberFormat()->setFormatCode('#,##0');
        
        // Setting header response
        $filename = str_replace(' ', '_', $title) . '_' . date('Y-m-d');
        
        // Redirect output ke browser client
        header('Content-Type: application/vnd.openxmlformats-officedocument.spreadsheetml.sheet');
        header('Content-Disposition: attachment;filename="' . $filename . '.xlsx"');
        header('Cache-Control: max-age=0');
        
        $writer = new \PhpOffice\PhpSpreadsheet\Writer\Xlsx($spreadsheet);
        $writer->save('php://output');
        exit;
    }
}