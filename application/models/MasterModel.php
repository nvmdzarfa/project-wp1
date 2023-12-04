<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class MasterModel extends CI_Model {
    // Constructor
    public function __construct() {
        parent::__construct();
        $this->load->database();
    }

    // Function to save master data
    public function save_master_data($data) {
        return $this->db->insert('master_data', $data);
    }

    // Function to get master data
    public function get_master_data($id) {
        $query = $this->db->get_where('master_data', array('id' => $id));
        return $query->row_array();
    }

    // Function to update master data
    public function update_master_data($id, $data) {
        $this->db->where('id', $id);
        return $this->db->update('master_data', $data);
    }

    // Function to delete master data
    public function delete_master_data($id) {
        $this->db->where('id', $id);
        return $this->db->delete('master_data');
    }

    // Function to get all master data
    public function get_all_master_data() {
        $query = $this->db->get('master_data');
        return $query->result_array();
    }
}
?>
