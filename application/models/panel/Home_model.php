<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Home_model extends CI_Model
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

  function get_by_id_general($table, $id, $val)
  {
    $query = $this->db->where($id, $val)->get($table);
    return $query->result();
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

  function get_text()
  {
    return $this->db->query("SELECT * FROM data_teks WHERE id='1'")->result();
  }

  function get_statistik()
  {
    return $this->db->query("SELECT count(*) as jumlah, tanggal FROM statistik GROUP BY tanggal ORDER BY tanggal DESC LIMIT 10")->result();
  }

}
?>
