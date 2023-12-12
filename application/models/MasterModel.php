<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterModel extends CI_Model {
    public function __construct() {
        parent::__construct();
        $this->load->database();

        if (!$this->db->conn_id) {
            die("Database Connection no Successful");
        }
    }

    public function tampilData() {
        return $this->db->get('nilai');
    }

    public function simpanNilai($data = null) {
        $this->db->insert('nilai', $data);
    }

    public function editData($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function updateNilai($where = null, $data = null) {
        $this->db->update('nilai', $data, $where);
    }

    public function hapusData($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }
}
?>
