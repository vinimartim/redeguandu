<?php defined('BASEPATH') OR exit('No direct script access allowed');

class User_model extends CI_Model {
    public function insert($user) {
        $this->db->insert('user', $user);
    }

    public function buscaPasse($email,$senha) {
    	$this->db->where('email', $email);
        $this->db->where('senha', $senha);
    	return $this->db->get('user')->row_array();
    }

    public function buscaUser($email) {
    	$this->db->where('email',$email);
    	return $this->db->get('user')->row_array();
    }
}