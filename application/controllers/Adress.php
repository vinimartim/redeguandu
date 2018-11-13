<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Adress extends CI_Controller {
	public function form_new() {
		$this->load->view('adress/new', [
			'title' => 'Cadastro | Endereço'
		]);
	}

	public function new() {
		$this->db->select_max('id');
		$result_id = $this->db->get('user')->row_array();

		$adress = array(
			'user_id' => $result_id['id'],
			'cep' => $this->input->post('cep'),
			'street' => $this->input->post('street'),
			'district' => $this->input->post('district'),
			'city' => $this->input->post('city'),
			'number' => $this->input->post('number')
		);

		$this->load->model('user_model');
		$this->load->model('adress_model');
		$this->adress_model->insert($adress);
		redirect('/');
	}
}
