<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Provider extends CI_Controller {
	public function index() {
		$this->load->model('provider_model');
		$providers = $this->provider_model->buscaTodos();
		$dados = array('providers' => $providers);
		$this->load->view('provider/list', $dados, [
			'title' => 'Lista de fornecedores'
		]);
	}

	public function form_check_user() {
		$this->load->view('provider/check_user', [
			'title' => 'Cadastrar novo fornecedor'
		]);
	}

	public function form_new() {
		$this->load->view('provider/new', [
			'title' => 'Cadastrar novo fornecedor'
		]);
	}

	public function new() {
		$this->db->select_max('id');
		$result = $this->db->get('user')->row_array();

		$provider = array(
			'user_id' => $result['id'],
			'email' => $this->input->post('email'),
			'register' => $this->input->post('register'),
			'name' => $this->input->post('name'),
			'phone' => $this->input->post('phone')
		);

		$this->load->model('provider_model');
		$this->provider_model->insert($provider);
		
		if($provider) {
			$this->session->set_flashdata('success', 'Fornecedor cadastrado com sucesso');
			redirect('provider/index');	
		} else {
			$this->session->set_flashdata('danger', 'Não foi possível cadastrar o fornecedor');
			redirect('provider/index');	
		}
		
	}

	public function searchuser() {
		$this->load->model('user_model');
		$email = $this->input->post('email');
		$user = $this->user_model->buscaUser($email);

		if($user) {
			redirect('provider/form_new');
		} else {
			$this->session->set_flashdata('danger', 'Cliente não adicionado!');
			redirect('provider/form_check_user');
		}
	}


}