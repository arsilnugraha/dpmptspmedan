<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Berita_model extends CI_Model
{
  function __construct()
  {
    parent::__construct();
  }

  function get_general($table)
  {
    $query = $this->db->get($table);
    return $query->result();
  }

  function get_by_column_general($table, $column, $val)
  {
    $query = $this->db->where($column, $val)->get($table);
    return $query->num_rows() == 1 ? $query->row() : $query->result();
  }

  function create_general($table, $data)
  {
    return $this->db->insert($table, $data);
  }

  function update_general($table, $id, $val, $data)
  {
    $this->db->where($id, $val);
    return $this->db->update($table, $data);
  }

  function delete_general($table, $id, $val)
  {
    $this->db->where($id, $val);
    return $this->db->delete($table);
  }

  function limit_general($table, $limit)
  {
    return $this->db->query("SELECT * FROM $table LIMIT $limit")->result();
  }

  function limit_general_order_by($table, $order_by, $order ,$limit)
  {
    return $this->db->query("SELECT * FROM $table ORDER BY $order_by $order LIMIT $limit")->result();
  }

  public function count_general($table) {
    return $this->db->count_all($table);
  }

  public function get_general_berita($table, $limit = null, $offset = null) {
    if ($limit !== null && $offset !== null) {
        $query = $this->db->get($table, $limit, $offset);
    } else {
        $query = $this->db->get($table);
    }
    return $query->result();
  }


}
?>
