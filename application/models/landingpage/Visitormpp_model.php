    <?php
    defined('BASEPATH') OR exit('No direct script access allowed');

    class Visitormpp_model extends CI_Model {
        private $db_custom;
        private $connection_error = false;
        
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
        
        public function has_connection_error() {
            return $this->connection_error;
        }
            
        // Original department-level methods
        public function get_total_visitors() {
            if ($this->connection_error) {
                return [];
            }
            
            $query = $this->db_custom->query("
                SELECT 
                    COALESCE(COUNT(q.id), 0) AS jlh_antrian,
                    t.name as tenant_name,
                    dep.name as dept_name
                FROM tenants t
                JOIN departments dep ON dep.idtenant = t.id
                LEFT JOIN queues q ON q.department_id = dep.id
                    AND q.created_at >= '2024-01-01 00:00:00'
                GROUP BY t.id, dep.id, t.name, dep.name
                ORDER BY t.name, dep.name
            ");
            return $query->result();
        }
        
        public function get_current_month_visitors() {
            if ($this->connection_error) {
                return [];
            }
            
            $query = $this->db_custom->query("
                SELECT 
                    COALESCE(COUNT(q.id), 0) AS jlh_antrian,
                    t.name as tenant_name,
                    dep.name as dept_name
                FROM tenants t
                JOIN departments dep ON dep.idtenant = t.id
                LEFT JOIN queues q ON q.department_id = dep.id
                    AND MONTH(q.created_at) = MONTH(CURRENT_DATE())
                    AND YEAR(q.created_at) = YEAR(CURRENT_DATE())
                GROUP BY t.id, dep.id, t.name, dep.name
                ORDER BY t.name, dep.name
            ");
            return $query->result();
        }
        
        public function get_last_month_visitors() {
            if ($this->connection_error) {
                return [];
            }
            
            $query = $this->db_custom->query("
                SELECT 
                    COALESCE(COUNT(q.id), 0) AS jlh_antrian,
                    t.name as tenant_name,
                    dep.name as dept_name
                FROM tenants t
                JOIN departments dep ON dep.idtenant = t.id
                LEFT JOIN queues q ON q.department_id = dep.id
                    AND q.created_at >= DATE_SUB(DATE_FORMAT(CURRENT_DATE(), '%Y-%m-01'), INTERVAL 1 MONTH)
                    AND q.created_at < DATE_FORMAT(CURRENT_DATE(), '%Y-%m-01')
                GROUP BY t.id, dep.id, t.name, dep.name
                ORDER BY t.name, dep.name
            ");
            return $query->result();
        }
        
        public function get_current_year_visitors() {
            if ($this->connection_error) {
                return [];
            }
            
            $query = $this->db_custom->query("
                SELECT 
                    COALESCE(COUNT(q.id), 0) AS jlh_antrian,
                    t.name as tenant_name,
                    dep.name as dept_name
                FROM tenants t
                JOIN departments dep ON dep.idtenant = t.id
                LEFT JOIN queues q ON q.department_id = dep.id
                    AND YEAR(q.created_at) = YEAR(CURRENT_DATE())
                GROUP BY t.id, dep.id, t.name, dep.name
                ORDER BY t.name, dep.name
            ");
            return $query->result();
        }
        
        public function get_last_year_visitors() {
            if ($this->connection_error) {
                return [];
            }
            
            $query = $this->db_custom->query("
                SELECT 
                    COALESCE(COUNT(q.id), 0) AS jlh_antrian,
                    t.name as tenant_name,
                    dep.name as dept_name
                FROM tenants t
                JOIN departments dep ON dep.idtenant = t.id
                LEFT JOIN queues q ON q.department_id = dep.id
                    AND YEAR(q.created_at) = YEAR(CURRENT_DATE()) - 1
                GROUP BY t.id, dep.id, t.name, dep.name
                ORDER BY t.name, dep.name
            ");
            return $query->result();
        }

        public function get_today_visitors() {
            if ($this->connection_error) {
                return [];
            }
            
            $query = $this->db_custom->query("
                SELECT 
                    COALESCE(COUNT(q.id), 0) AS jlh_antrian,
                    t.name as tenant_name,
                    dep.name as dept_name
                FROM tenants t
                JOIN departments dep ON dep.idtenant = t.id
                LEFT JOIN queues q ON q.department_id = dep.id
                    AND DATE(q.created_at) = CURDATE()
                GROUP BY t.id, dep.id, t.name, dep.name
                ORDER BY t.name, dep.name
            ");
            return $query->result();
        }
        
        // New tenant-level methods
        public function get_total_tenant_visitors() {
            if ($this->connection_error) {
                return [];
            }
            
            $query = $this->db_custom->query("
                SELECT 
                    COALESCE(COUNT(q.id), 0) AS jlh_antrian,
                    t.name as tenant_name
                FROM tenants t
                JOIN departments dep ON dep.idtenant = t.id
                LEFT JOIN queues q ON q.department_id = dep.id
                    AND q.created_at >= '2024-01-01 00:00:00'
                GROUP BY t.id, t.name
                ORDER BY t.name
            ");
            return $query->result();
        }
        
        public function get_current_month_tenant_visitors() {
            if ($this->connection_error) {
                return [];
            }
            
            $query = $this->db_custom->query("
                SELECT 
                    COALESCE(COUNT(q.id), 0) AS jlh_antrian,
                    t.name as tenant_name
                FROM tenants t
                JOIN departments dep ON dep.idtenant = t.id
                LEFT JOIN queues q ON q.department_id = dep.id
                    AND MONTH(q.created_at) = MONTH(CURRENT_DATE())
                    AND YEAR(q.created_at) = YEAR(CURRENT_DATE())
                GROUP BY t.id, t.name
                ORDER BY t.name
            ");
            return $query->result();
        }
        
        public function get_last_month_tenant_visitors() {
            if ($this->connection_error) {
                return [];
            }
            
            $query = $this->db_custom->query("
                SELECT 
                    COALESCE(COUNT(q.id), 0) AS jlh_antrian,
                    t.name as tenant_name
                FROM tenants t
                JOIN departments dep ON dep.idtenant = t.id
                LEFT JOIN queues q ON q.department_id = dep.id
                    AND q.created_at >= DATE_SUB(DATE_FORMAT(CURRENT_DATE(), '%Y-%m-01'), INTERVAL 1 MONTH)
                    AND q.created_at < DATE_FORMAT(CURRENT_DATE(), '%Y-%m-01')
                GROUP BY t.id, t.name
                ORDER BY t.name
            ");
            return $query->result();
        }
        
        public function get_current_year_tenant_visitors() {
            if ($this->connection_error) {
                return [];
            }
            
            $query = $this->db_custom->query("
                SELECT 
                    COALESCE(COUNT(q.id), 0) AS jlh_antrian,
                    t.name as tenant_name
                FROM tenants t
                JOIN departments dep ON dep.idtenant = t.id
                LEFT JOIN queues q ON q.department_id = dep.id
                    AND YEAR(q.created_at) = YEAR(CURRENT_DATE())
                GROUP BY t.id, t.name
                ORDER BY t.name
            ");
            return $query->result();
        }
        
        public function get_last_year_tenant_visitors() {
            if ($this->connection_error) {
                return [];
            }
            
            $query = $this->db_custom->query("
                SELECT 
                    COALESCE(COUNT(q.id), 0) AS jlh_antrian,
                    t.name as tenant_name
                FROM tenants t
                JOIN departments dep ON dep.idtenant = t.id
                LEFT JOIN queues q ON q.department_id = dep.id
                    AND YEAR(q.created_at) = YEAR(CURRENT_DATE()) - 1
                GROUP BY t.id, t.name
                ORDER BY t.name
            ");
            return $query->result();
        }

        public function get_today_tenant_visitors() {
            if ($this->connection_error) {
                return [];
            }
            
            $query = $this->db_custom->query("
                SELECT 
                    COALESCE(COUNT(q.id), 0) AS jlh_antrian,
                    t.name as tenant_name
                FROM tenants t
                JOIN departments dep ON dep.idtenant = t.id
                LEFT JOIN queues q ON q.department_id = dep.id
                    AND DATE(q.created_at) = CURDATE()
                GROUP BY t.id, t.name
                ORDER BY t.name
            ");
            return $query->result();
        }
    }