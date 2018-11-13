<?php defined('BASEPATH') OR exit('No direct script access allowed');

class Provider_model extends CI_Model {
    public function insert($provider) {
        $this->db->insert('provider', $provider);
    }

    public function buscaTodos() {
    	return $this->db->get('provider')->result_array();
    }
}