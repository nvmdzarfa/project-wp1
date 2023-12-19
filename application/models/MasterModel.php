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

    public function tampilData($search = null) {
        if($search) {
            $this->db->like('nim', $search);
        }
        return $this->db->get('nilai');
    }

    public function simpanNilai($data = null) {
        $this->db->insert('nilai', $data);
    }

    public function editData($where, $table) {
        return $this->db->get_where($table, $where);
    }

    public function updateNilai($where, $data, $table) {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    public function hapusData($where, $table) {
        $this->db->where($where);
        $this->db->delete($table);
    }

    public function get_search_results($keyword) {
        $this->db->select('*');
        $this->db->from('nilai');

        if($keyword !== null) {
            $keyword = $this->db->escape_like_str($keyword);
            $this->db->like('kel_praktek', $keyword);
            $this->db->or_like('kel_praktek_x', $keyword);
        } else  {
            return array();
        }

        $query = $this->db->get();
        return $query->result();
    }
}
?>
